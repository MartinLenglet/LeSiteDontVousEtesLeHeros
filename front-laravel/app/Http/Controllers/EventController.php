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

    public function create(Request $request)
    {
        // Récupération des paramètres de la requête
        $form_params = $request->all();

        // Rename pour la base de données
        $form_params['text'] = $form_params['textEvent'];
        unset($form_params['textEvent']);
        $form_params['type'] = $form_params['typeEvent'];
        unset($form_params['typeEvent']);

        // Appel à la classe des requêtes API
        $apiRequest = new ApiRequest();

        // Post du nouvel événement
        $postEvent = $apiRequest->post('events', $form_params);
        // var_dump($postEvent);
        // die();

        if ($postEvent['statusCode'] == 201) {
            // Success
            return redirect('aventures/' . $form_params['adventure_id']);
        } else {
            // Fail
            return 'KO';
        }
    }
}
