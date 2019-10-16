<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiRequest;

class AventureController extends Controller
{
    public function index()
    {
        // Appel à la classe des requêtes API
        $apiRequest = new ApiRequest();

        // On récupère toutes les aventures
        $getAllAdventures = $apiRequest->get('adventures');

        if ($getAllAdventures['statusCode'] == 200) {
            // Success
            $allAdventures = $getAllAdventures['body'];
            // On retourne la vue avec la liste des aventures
            return view(
                'listAventures',
                [
                    'allAdventures' => $allAdventures
                ]
            );
        } else {
            // Fail
            return 'KO';
        }
    }

    public function custom(int $id)
    {
        // Appel à la classe des requêtes API
        $apiRequest = new ApiRequest();

        // On récupère l'arbre de l'aventure
        $getAdventure = $apiRequest->get('adventures/' . $id . '/custom');

        if ($getAdventure['statusCode'] == 200) {
            // Success
            $adventure = $getAdventure['body'];
            // On retourne la vue avec l'arbre de l'aventure
            return view(
                'custom',
                [
                    'adventure' => $adventure
                ]
            );
        } else {
            return 'KO';
        }
    }
}
