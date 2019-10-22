<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiRequest;

class ChoiceController extends Controller
{
    public function create(Request $request)
    {
        // Récupération des paramètres de la requête
        $form_params = $request->all();

        // Rename pour la base de données
        $form_params['text'] = $form_params['textChoice'];
        unset($form_params['textChoice']);

        // Appel à la classe des requêtes API
        $apiRequest = new ApiRequest();

        // Post du nouveau choix
        $postChoice = $apiRequest->post('choices', $form_params);

        if ($postChoice['statusCode'] == 201) {
            // Success
            return redirect('aventures/' . $form_params['adventure_id']);
        } else {
            // Fail
            return 'KO';
        }
    }
}
