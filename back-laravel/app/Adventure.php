<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;
use App\Event;
use App\Choice;

class Adventure extends Model
{
    protected $fillable = ['title', 'abstract', 'user_id'];
    
    /**
     * Récupère le nom de l'auteur d'une aventure
     * 
     */
    static public function findAuthor(Adventure $adventure)
    {
        $author = User::find($adventure->user_id);
        return $author->name;
    }

    /**
     * Récupère les commentaires concernant une aventure
     * 
     */
    static public function findComments(Adventure $adventure)
    {
        $allComments = Comment::all()->where('adventure_id', $adventure->id);
        return $allComments;
    }

    /**
     * Récupère les événement lié à une aventure
     * 
     */
    static public function findEvents(Adventure $adventure)
    {
        $allEvents = Event::all()->where('adventure_id', $adventure->id);
        return $allEvents;
    }

    /**
     * Récupère les choix possibles dans cette aventure
     * 
     */
    static public function findChoices(Adventure $adventure)
    {
        $allChoices = [];
        // On récupères tous les événements
        $allEvents = Adventure::findEvents($adventure);
        foreach ($allEvents as $event) {
            // Pour chaque événement on récupère les choix possibles
            $eventChoices = Event::findChoices($event);
            foreach ($eventChoices as $choice) {
                $allChoices[] = $choice;
            }
        }
        return $allChoices;
    }

    /**
     * Récupère les décisions prises par les joueurs dans cette aventure
     * 
     */
    static public function findDecisions(Adventure $adventure)
    {
        $allDecisions = [];
        // On récupère tous les choix
        $allChoices = Adventure::findChoices($adventure);
        foreach ($allChoices as $choice) {
            // Pour chaque choix on récupère les décisions
            $decisions = Choice::findDecisions($choice);
            foreach ($decisions as $decision) {
                $allDecisions[] = $decision;
            }
        }
        return $allDecisions;
    }

    /**
     * Récupère les événements indexés par le position dans l'arbre
     * 
     */
    static public function findStart(Adventure $adventure)
    {
        $allEvents = Adventure::findEvents($adventure);
        foreach ($allEvents as $event) {
            if ($event->type == 'start') {
                return $event;
            }
        }

        // Si il n'y a pas de start l'aventure n'est pas valide
        return 'KO';
    }

    /**
     * Récupère les événements indexés par le position dans l'arbre
     * 
     */
    static public function findTreeEvents(Adventure $adventure)
    {
        $remainingEvents = Adventure::findEvents($adventure);
        $remainingChoices = Adventure::findChoices($adventure);
        $startEvent = Adventure::findStart($adventure);
        $tree = [];
        $compteur = 0;

        // Tant que tous les événements n'ont pas été parcouru
        while (count($remainingEvents) != 0) {
            // Initialisation de l'arbre
            $level = 0;
            $eventsRecursive = [];
            if ($compteur == 0) {
                $currentStartEvent = $startEvent;
            } else {
                // var_dump($remainingEvents[array_key_first(reset($remainingEvents))]);
                // die();
                $currentStartEvent = $remainingEvents[array_key_first(reset($remainingEvents))];
            }
            // Fonction récursive pour reconstituer l'arbre
            // $eventsRecursive = Adventure::findLinkedEventsRecursive($eventsRecursive, $currentStartEvent, $level, $remainingEvents, $remainingChoices);
            $eventsRecursive = Adventure::findLinkedEvents($currentStartEvent, $remainingEvents, $remainingChoices);

            // Mise à jour des variables
            $tree[$compteur] = $eventsRecursive['tree'];
            $remainingEvents = $eventsRecursive['remainingEvents'];
            $remainingChoices = $eventsRecursive['remainingChoices'];
            $compteur += 1;
        }
        // Fonction récursive pour reconstituer l'arbre
        // $tree = Adventure::findLinkedEventsRecursive($tree, $startEvent, $level, $remainingEvents, $remainingChoices);

        return $tree;
    }

    /**
     * Fonctionne pour récupérer l'arborescence de l'aventure le calcul du level ne respecte pas
     * le plus petit nombre de choix depuis le début de l'arbre
     */
    static public function findLinkedEventsRecursive($tree, $currentEvent, $level, $remainingEvents, $remainingChoices)
    {
        // Boucle sur les événements
        foreach ($remainingEvents as $keyEvent => $event) {
            // On cherche l'événement en question
            if ($event->id == $currentEvent->id) {
                // On cherche les choix qui partent de cet événement
                // $currentEvent->choices = Event::findEvents($currentEvent);
                $choicesFromCurrentEvent = [];

                // Chaque event est utilisé une fois
                unset($remainingEvents[$keyEvent]);

                foreach ($remainingChoices as $keyChoice => $choice) {
                    // On cherche les choix reliés à cet event
                    if ($event->id == $choice->eventFrom_id) {
                        $choicesFromCurrentEvent[] = $choice;

                        // Chaque choix est utilisé une fois
                        unset($remainingChoices[$keyChoice]);

                        // Appel récursif
                        $eventTo = Choice::findEventTo($choice);
                        $recursiveArray = Adventure::findLinkedEventsRecursive($tree, $eventTo, $level+1, $remainingEvents, $remainingChoices);
                        $tree = $recursiveArray['tree'];
                        // $remainingEvents = $recursiveArray['remainingEvents'];
                        $remainingChoices = $recursiveArray['remainingChoices'];
                    }
                }

                // On ajoute les choix aux événements pour pouvoir les tracer par la suite
                $currentEvent->choices = $choicesFromCurrentEvent;
                $tree[$level][] = $currentEvent;

                break;
            }
        }

        return [
            'tree' => $tree,
            'remainingEvents' => $remainingEvents,
            'remainingChoices' => $remainingChoices
        ];
    }

    /**
     * Récupère l'arborescence avec le level correct
     */
    static public function findLinkedEvents($startEvent, $remainingEvents, $remainingChoices)
    {
        // initialisation de l'arborescence
        $level = 0;
        $tree[$level][] = $startEvent;
        $alreadyUsedEvents = [];

        // On boucle tant qu'on trouve des nouveaux choix dans les événements
        while (isset($tree[$level])) {
            // On passe par tous les events d'un niveau avant de passer au suivant
            foreach ($tree[$level] as $keyCurrentEvent => $currentEvent) {
                // On cherche l'événement courant dans les événements restants
                foreach ($remainingEvents as $keyEvent => $event) {
                    if ($event->id === $currentEvent->id) {
                        // On garde en mémoire les events déjà parcourus pour ne pas les insérer plusieurs fois
                        $alreadyUsedEvents[] = $remainingEvents[$keyEvent];
                        unset($remainingEvents[$keyEvent]);

                        // On ajoute les choix aux événements départ
                        $currentChoices = Event::findChoices($currentEvent);
                        $tree[$level][$keyCurrentEvent]['choices'] = $currentChoices;

                        // On parcourt les choix pour ajouter les events destination au level suivant
                        foreach ($currentChoices as $currentChoice) {
                            // On cherche le choix courant dans les choix restants
                            foreach ($remainingChoices as $keyChoice => $choice) {
                                if ($choice->id === $currentChoice->id) {
                                    // On unset le choix pour gagner du temps sur les prochaines boucles
                                    unset($remainingChoices[$keyChoice]);

                                    // On récupère l'event de destination
                                    $eventTo = Choice::findEventTo($currentChoice);

                                    // On vérifie qu'il n'a pas déjà été ajouté dans les boucles précédentes
                                    $alreadyUsed = false;
                                    foreach ($alreadyUsedEvents as $alreadyUsedEvent) {
                                        if ($alreadyUsedEvent->id === $eventTo->id) {
                                            $alreadyUsed = true;
                                        }
                                    }

                                    // On vérifie qu'il n'a pas déjà été rajouté depuis l'événement courant
                                    $alreadyFound = false;
                                    if (isset($tree[$level+1])) {
                                        foreach ($tree[$level+1] as $alreadyFoundEvent) {
                                            if ($alreadyFoundEvent->id === $eventTo->id) {
                                                $alreadyFound = true;
                                            }
                                        }
                                    }

                                    // On vérifie qu'il n'est pas sur le même niveau
                                    $sameLevel = false;
                                    foreach ($tree[$level] as $sameLevelEvent) {
                                        if ($sameLevelEvent->id === $eventTo->id) {
                                            $sameLevel = true;
                                        }
                                    }

                                    // Si il est nouveau on l'ajoute à l'arborescence
                                    if (!$alreadyUsed && !$alreadyFound && !$sameLevel) {
                                        $tree[$level+1][] = $eventTo;
                                    }
                                    break;
                                }
                            }
                        }
                        break;
                    }
                }
            }
            // Incrémentation du compteur
            $level += 1;
        }

        return [
            'tree' => $tree,
            'remainingEvents' => $remainingEvents,
            'remainingChoices' => $remainingChoices
        ];
    }

    /**
     * Formate le tableau en données exploitables par sigma.js pour l'affichage du graph
     */
    static public function formateTreeSigma($treeArray)
    {
        // return $treeArray;
        // Format de l'arbre sigma.js
        $sigma = (object) [
            'nodes' => [],
            'edges' => []
        ];

        // Tableau des arrays pour avoir l'offset à appliquer
        $arrayOffset = [];

        // Boucle sur les arbres à afficher
        foreach ($treeArray as $keyTree => $tree) {
            // Offset pour afficher les arbres les uns en dessous des autres
            $arrayOffset[$keyTree] = max(array_keys($tree)) + 1;
            $offset = array_sum($arrayOffset) - $arrayOffset[$keyTree];
            // Exploration de la profondeur de l'arbre
            foreach ($tree as $level => $events) {
                // En Arc de cercle
                /*$nbrEvents = count($events);
                // Distinction paire et impaire
                if ($nbrEvents % 2 == 0) {
                    // paire
                    $step = (pi()/4)/(($nbrEvents/2) + 1);
                } else {
                    // impaire
                    if ($nbrEvents != 1) {
                        $step = (pi()/2)/($nbrEvents-1);
                    } else {
                        $step = 0;
                    }
                }*/
                foreach ($events as $keyEvent => $event) {
                    // Création du node
                    $node = (object) [
                        'id' => 0
                    ];
                    // En Arc de cercle
                    // $theta = (pi()/4) + ((($nbrEvents-1)/2)-intval($keyEvent))*$step;
                    // $node->x = intval($level)*cos($theta);
                    // $node->y = intval($level)*sin($theta);

                    // Droit
                    $node->x = intval($keyEvent);
                    $node->y = intval($level + $offset);

                    $node->id = $event->id;
                    $node->label = "$event->id";
                    $node->size = 3;
                    $node->color = "#FF6600";
                    $sigma->nodes[] = $node;

                    // Création de la liaison
                    foreach ($event->choices as $choice) {
                        $edge = (object) [
                            'id' => 0
                        ];
                        $edge->id = $choice->id;
                        $edge->source = $choice->eventFrom_id;
                        $edge->target = $choice->eventTo_id;
                        $edge->type = "arrow";
                        $edge->size = 3;
                        $sigma->edges[] = $edge;
                    }
                } 
            }
        }

        return $sigma;
    }
}
