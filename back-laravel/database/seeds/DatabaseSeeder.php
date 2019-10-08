<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(AdventuresTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(ChoicesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(DecisionsTableSeeder::class);
    }
}
