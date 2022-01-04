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
        $this->call(seed_dogs_table::class);
        $this->call(seed_categories_table::class);
        $this->call(UsersSeeder::class);
    }
}
