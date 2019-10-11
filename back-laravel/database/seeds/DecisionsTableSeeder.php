<?php

use Illuminate\Database\Seeder;
use App\Decision;

class DecisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Decision::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few decisions in our database:
        for ($i = 0; $i < 100; $i++) {
            Decision::create([
                'user_id' => rand(1, 4),
                'choice_id' => rand(1, 90),
            ]);
        }
    }
}
