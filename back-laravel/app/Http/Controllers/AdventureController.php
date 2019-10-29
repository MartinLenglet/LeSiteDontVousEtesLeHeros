<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adventure;
use App\User;

class AdventureController extends Controller
{
    public function index()
    {
        $allAdventures = Adventure::all();
        foreach ($allAdventures as $adventure) {
            // On récupère l'auteur
            $adventure->author = Adventure::findAuthor($adventure);

            // On récupère la liste des commentaires
            $allComments = Adventure::findComments($adventure);
            // $adventure->comments = $allComments;

            // On récupère le "nombre de fois joué"
            $allDecisions = Adventure::findDecisions($adventure);
            $adventure->timePlayed = count($allDecisions);

            // On récupère toutes les notes
            $grades = [];
            foreach ($allComments as $comment) {
                $grades[] = $comment->grade;
            }
            // Calcul de la moyenne des notes
            if (count($grades) != 0) {
                $moy = array_sum($grades)/count($grades);
            } else {
                $moy = 0;
            }
            $adventure->average = $moy;
        }
        return $allAdventures;
    }

    /**
     * Renvoie les meilleures aventures pour l'afficher en page d'accueil
     */
    public function bestAdventures()
    {
        $allAdventures = $this->index();
        $allGrades = [];
        $allTimePlayed = [];
        foreach ($allAdventures as $keyAdventure => $adventure) {
            $allGrades[$keyAdventure] = $adventure->average;
            $allTimePlayed[$keyAdventure] = $adventure->timePlayed;
        }

        // On récupère l'aventure qui a la meilleure note
        $indexBestAdventure = array_search(max($allGrades),$allGrades);
        $bestGradeAdventure = $allAdventures[$indexBestAdventure];

        // On récupère l'aventure la plus joué
        $indexMostPlayed = array_search(max($allTimePlayed),$allTimePlayed);
        $mostPlayedAdventure = $allAdventures[$indexMostPlayed];

        // On renvoit cette aventure
        $return = [
            'bestGradeAdventure' => $bestGradeAdventure,
            'mostPlayedAdventure' => $mostPlayedAdventure
        ];
        return response()->json($return, 200);
    }

    public function custom(Adventure $adventure)
    {
        $tree = Adventure::findTreeEvents($adventure);
        // Si on veut envoyer l'arborescence brute au front
        // $adventure->treeRaw = $tree;
        // Formatage au format Sigma.js
        $tree = Adventure::formateTreeSigma($tree);
        $adventure->tree = $tree;
        // Récupère la liste des événements de cette aventure
        $events = Adventure::findEvents($adventure);
        $adventure->events = $events;
        // Récupère l'événément de départ pour lancer le test
        $startEvent = Adventure::findStart($adventure);
        if ($startEvent != 'KO') {
            $startEvent = $startEvent->id;
        }
        $adventure->startEvent_id = $startEvent;
        return response()->json($adventure, 200);
    }

    public function show(Adventure $adventure)
    {
        $allComments = $adventure->findComments($adventure);
        $adventure->comments = $allComments;
        return response()->json($adventure, 200);
    }

    public function store(Request $request)
    {
        $adventure = Adventure::create($request->all());

        return response()->json($adventure, 201);
    }

    public function update(Request $request, Adventure $adventure)
    {
        $adventure->update($request->all());

        return response()->json($adventure, 200);
    }

    public function delete(Adventure $adventure)
    {
        $adventure->delete();

        return response()->json(null, 204);
    }
}
