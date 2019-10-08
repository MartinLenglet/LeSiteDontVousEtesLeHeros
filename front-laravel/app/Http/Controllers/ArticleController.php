<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiRequest;

class ArticleController extends Controller
{
    public function index()
    {
        // Appel à la classe des requêtes API
        $apiRequest = new ApiRequest();

        // Appel simplifié
        // On récupère les 10 derniers articles, les 3 premiers sont affichés en haut et le reste en bas de la page
        $getLastArticles = $apiRequest->get('lastArticles/10');
        $getBestAdventures = $apiRequest->get('bestAdventures');

        if ($getLastArticles['statusCode'] == 200 
            && $getBestAdventures['statusCode'] == 200
        ) {
            // Success
            $lastArticles = $getLastArticles['body'];
            $bestAdventures = $getBestAdventures['body'];
            // On retourne la vue avec la liste des articles
            return view(
                'home',
                [
                    'lastArticles' => $lastArticles,
                    'bestAdventures' => $bestAdventures
                ]
            );
        } else {
            // Fail
            return 'KO';
        }
    }
}
