<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        //$this->call(CategoriesTableSeeder::class);
        \App\Models\Category::factory(20)->create();
        \App\Models\Client::factory(30)->create();

        \App\Models\Book::factory(5)->create();

    }
}
