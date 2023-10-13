<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use database\seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
    }
}
