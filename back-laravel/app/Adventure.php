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
}
