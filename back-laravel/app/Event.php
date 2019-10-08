<?php

namespace App;
use App\Choice;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Récupère les commentaires concernant une aventure
     * 
     */
    static public function findChoices(Event $event)
    {
        $choices = Choice::all()->where('eventFrom_id', $event->id);
        return $choices;
    }
}
