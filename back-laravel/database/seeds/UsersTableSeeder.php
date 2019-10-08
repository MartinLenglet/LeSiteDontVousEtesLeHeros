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

        // And now, let's create a few articles in our database:
        for ($i = 1; $i <= 3; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => 'totototo',
                'api_token' => $i,
            ]);
        }
    }
}
