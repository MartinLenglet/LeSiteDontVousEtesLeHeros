<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiRequest;

class EventController extends Controller
{
    public function show(int $id)
    {
        // var_dump($id);
        // die();
        // Appel à la classe des requêtes API
        $apiRequest = new ApiRequest();

        // On récupère toutes les aventures
        $getEvent = $apiRequest->get('events/' . $id);

        if ($getEvent['statusCode'] == 200) {
            // Success
            $event = $getEvent['body'];
            // On retourne la vue avec la liste des aventures
            return view(
                'event',
                [
                    'event' => $event
                ]
            );
        } else {
            // Fail
            return 'KO';
        }
    }
}
