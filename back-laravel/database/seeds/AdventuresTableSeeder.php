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

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 3; $i++) {
            Adventure::create([
                'title' => $faker->sentence,
                'abstract' => $faker->sentence,
                'user_id' => rand(1, 3),
            ]);
        }
    }
}
