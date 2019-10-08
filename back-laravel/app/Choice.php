<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Decision;

class Choice extends Model
{
    /**
     * Récupère les décisions prises par les joueurs pour ce choix
     * 
     */
    static public function findDecisions(Choice $choice)
    {
        $decisions = Decision::all()->where('choice_id', $choice->id);
        return $decisions;
    }
}
