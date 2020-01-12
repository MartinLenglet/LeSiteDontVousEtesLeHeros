<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TirageController extends Controller
{
    public function index()
    {
        $participants = [
            [
                'Jean-Luc',
                'Eliane',
                'Arnaud',
                'Suzanne',
                'Adrien',
                'Marie',
                'Alexandra',
                'David'
            ],
            [
                'Jean-Do',
                'Josiane',
                'Anne',
                'Romain',
                'Maxime',
                'Emeline'

            ],
            [
                'Serge',
                'Michele',
                'Florian',
                'Delphine',
                'Celia'
            ]
        ];

        $receveurs = $participants;

        srand();

        foreach ($participants as $groupe => $membresGroupe) {
            foreach ($membresGroupe as $participant) {
                // var_dump($receveurs);

                $nbrGroupesRestant = count($receveurs);
                $randGroupeIndex = rand(0, $nbrGroupesRestant-1);
                while ($randGroupeIndex == $groupe) {
                    $randGroupeIndex = rand(0, $nbrGroupesRestant-1);
                }

                $randGroupe = $receveurs[$randGroupeIndex];

                $nbrMembresRestant = count($randGroupe);
                $receveurIndex = rand(0, $nbrMembresRestant-1);
                $receveur = $randGroupe[$receveurIndex];

                $tabTirage[$participant] = $receveur;
                // var_dump($tabTirage);

                unset($receveurs[$randGroupeIndex][$receveurIndex]);
                if ($receveurs[$randGroupeIndex] == []) {
                    unset($receveurs[$randGroupeIndex]);
                }

                $receveurs = array_map('array_values', $receveurs);
            }
        }

        // var_dump($tabTirage);
        // die();

        return view(
            'tirage',
            [
                'tabTirage' => $tabTirage
            ]
        );
    }
}
