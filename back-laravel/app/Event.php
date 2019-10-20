<?php

namespace App;
use App\Choice;
use App\Adventure;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text', 'adventure_id', 'type',
    ];

    /**
     * Récupère les commentaires concernant une aventure
     * 
     */
    static public function findChoices(Event $event)
    {
        $choices = Choice::all()->where('eventFrom_id', $event->id);
        return $choices;
    }

    static public function findAdventure(Event $event)
    {
        $adventure = Adventure::find($event->adventure_id);
        return $adventure;
    }
}
