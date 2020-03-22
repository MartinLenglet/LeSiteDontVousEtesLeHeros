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

        var_dump($form_params);
        die();

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

    public function update(Request $request)
    {
        // Récupération des paramètres de la requête
        $form_params = $request->all();

        // Même formulaire pour update et delete, on fait la distinction ici
        if (isset($form_params['delete'])) {
            return $this->delete($request);
        }

        // On conserve l'id pour l'update
        $id = $form_params['event_id'];

        // Rename pour la base de données
        $form_params['text'] = $form_params['textEventModify'];
        unset($form_params['textEventModify']);
        $form_params['type'] = $form_params['typeEventModify'];
        unset($form_params['typeEventModify']);
        unset($form_params['eventNumber']);

        // var_dump($form_params);
        // die();

        // Appel à la classe des requêtes API
        $apiRequest = new ApiRequest();

        // Post du nouvel événement
        $putEvent = $apiRequest->put('events/' . $id, $form_params);
        // var_dump($putEvent);
        // die();

        if ($putEvent['statusCode'] == 200) {
            // Success
            return redirect('aventures/' . $form_params['adventure_id']);
        } else {
            // Fail
            return 'KO';
        }
    }

    public function delete(Request $request)
    {
        // Récupération des paramètres de la requête
        $form_params = $request->all();

        // On conserve l'id pour l'update
        $id = $form_params['event_id'];

        // Rename pour la base de données
        // $form_params['text'] = $form_params['textEventModify'];
        // unset($form_params['textEventModify']);
        // $form_params['type'] = $form_params['typeEventModify'];
        // unset($form_params['typeEventModify']);
        // unset($form_params['eventNumber']);

        // var_dump($form_params);
        // die();

        // Appel à la classe des requêtes API
        $apiRequest = new ApiRequest();

        // Post du nouvel événement
        $deleteEvent = $apiRequest->erase('events/' . $id);
        // var_dump($deleteEvent);
        // die();

        if ($deleteEvent['statusCode'] == 204) {
            // Success
            return redirect('aventures/' . $form_params['adventure_id']);
        } else {
            // Fail
            return 'KO';
        }
    }
}
