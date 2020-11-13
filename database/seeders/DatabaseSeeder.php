<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();
        \App\Models\Book::factory(20)->create();
        \App\Models\Authors::factory(10)->create();
        \App\Models\Checkout::factory(5)->create();
    }
}
