<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class ApiRequest extends Model
{
    // Récupération de l'url du back
    // protected $backUrl = env('BACK_URL');
    protected $backUrl = 'http://localhost/LeSiteDontVousEtesLeHeros/back-laravel/public/api/';
    // Création du Header
    protected $header = [
        'headers' => [
            'Authorization' => 'Bearer 1',
            'Content-Type'  => 'application/json',
            'Accept' => 'apllication/json'
        ]
    ];

    public function get($suffix)
    {
        // Création de la requête
        $client = new Client(['base_uri' => $this->backUrl]);

        // Envoi de la requête http
        $response = $client->request(
            'GET',
            $suffix,
            $this->header
        );
    
        // Récupération du résultat de la requête
        $statusCode = $response->getStatusCode();
        // Body transformé en objet Json
        $body = json_decode($response->getBody()->getContents());
    
        return [
            'body' => $body,
            'statusCode' => $statusCode
        ];
    }
}
