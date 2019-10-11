<?php

use Illuminate\Database\Seeder;
use App\Adventure;

class AdventuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Adventure::truncate();

        $faker = \Faker\Factory::create();

        // Aventure test d'Alex
        Adventure::create([
            'title' => 'Les aventuriers de Magdala',
            'abstract' => "Bienvenue à Magdala, terre de tous les possibles. Vous êtes un aventurier endurci aussi lorsque vous avez lu cette carte menant à un temple renfermant un mystérieux artéfact vous n’avez pas hésité une seule seconde à vous y rendre. Vous auriez dû réfléchir plus d’une fois… Au regard de l’individu qui l’a misé contre vous, un vieux bonhomme, affable et corpulent dans un bout du monde où tout le monde tire la boue et souffre de famine. Les taches sur sa toge n’étaient pas de la tomate mais bien du sang séché et sur sa toge le logo brodé, une pyramide couronnée d’un cœur, celui d’une secte effectuant des sacrifices humains aurait pu vous mettre la puce à l’oreille. Eh bien Non ! Vous êtes un baroudeur vous n’avez pas le temps pour les légendes urbaines et les racontars d’ivrogne, l’aventure vous attend.",
            'user_id' => 1,
        ]);

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 3; $i++) {
            Adventure::create([
                'title' => $faker->sentence,
                'abstract' => $faker->sentence,
                'user_id' => rand(2, 4),
            ]);
        }
    }
}
