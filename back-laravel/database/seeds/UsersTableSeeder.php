<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        User::truncate();

        $faker = \Faker\Factory::create();

        // User : Alex
        User::create([
            'name' => 'Alexandre Lamart',
            'email' => $faker->email,
            'password' => 'totototo',
            'api_token' => 1,
        ]);

        // And now, let's create a few articles in our database:
        for ($i = 2; $i <= 4; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => 'totototo',
                'api_token' => $i,
            ]);
        }
    }
}
