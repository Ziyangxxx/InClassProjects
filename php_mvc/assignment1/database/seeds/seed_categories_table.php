<?php

use Illuminate\Database\Seeder;

class seed_categories_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'name' => 'Herding Dog'
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Hound'
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Livestock guardian dog'
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Retriever'
            ]
        );

        DB::table('categories')->insert(
            [
                'name' => 'Bulldog'
            ]
        );
    }
}
