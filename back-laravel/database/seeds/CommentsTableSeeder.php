<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Comment::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            Comment::create([
                'comment' => $faker->sentence,
                'grade' => rand(1, 5),
                'user_id' => rand(1, 4),
                'adventure_id' => rand(1, 4),
            ]);
        }
    }
}
