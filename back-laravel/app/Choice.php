<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Decision;
use App\Event;

class Choice extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text', 'eventFrom_id', 'eventTo_id',
    ];

    /**
     * Récupère les décisions prises par les joueurs pour ce choix
     * 
     */
    static public function findDecisions(Choice $choice)
    {
        $decisions = Decision::all()->where('choice_id', $choice->id);
        return $decisions;
    }

    /**
     * Récupère l'événement cible du choix
     * 
     */
    static public function findEventTo(Choice $choice)
    {
        $event = Event::find($choice->eventTo_id);
        return $event;
    }
}
