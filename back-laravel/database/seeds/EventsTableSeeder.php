<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Event::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few events in our database:
        // On boucle sur le nombre d'aventure
        for ($j = 1; $j<= 3; $j++) {
            for ($i = 1; $i <= 10; $i++) {
                // On crée un start pour le premier évenement
                if ($i == 1) {
                    $start = true;
                } else {
                    $start = false;
                }
                Event::create([
                    'text' => $faker->sentence,
                    'adventure_id' => $j,
                    'start' => $start,
                ]);
            }
        }
    }
}
