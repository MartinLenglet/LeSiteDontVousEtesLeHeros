<?php

use Illuminate\Database\Seeder;
use App\Choice;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Choice::truncate();

        $faker = \Faker\Factory::create();

        // Boucle sur les aventures
        for ($i = 1; $i <= 3; $i++) {
            // Boucle sur les événements
            for ($j = 1; $j <= 10; $j++) {
                // Boucle sur les choix
                for ($k = 1; $k <= 2; $k++) {
                    $rand = rand(1, 10);
                    Choice::create([
                        'text' => $faker->name,
                        'eventFrom_id' => (($i-1)*10 + $j),
                        'eventTo_id' => (($i-1)*10 + $rand),
                    ]);
                }
            }
        }
    }
}
