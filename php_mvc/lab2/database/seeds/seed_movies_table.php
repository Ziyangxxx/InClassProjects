<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_movies_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies') -> insert(
            [
                'title' => 'The Shining',
                'director' => 'Stanley Kubrick',
                'running_time' => '146',
                'image' => 'shining.jpg',
                'studio' => 'The Producer Circle Company'
            ]
        );

        DB::table('movies') -> insert(
            [
                'title' => 'The Godfather',
                'director' => 'Francis Ford Coppola',
                'running_time' => '177',
                'image' => 'god_father.jpg',
                'studio' => 'Paramount Pictures, Alfran Productions'
            ]
        );

        DB::table('movies') -> insert(
            [
                'title' => 'The Shawshank Redemption',
                'director' => 'Frank Darabont',
                'running_time' => '142',
                'image' => 'shawshank.jpg',
                'studio' => 'Castle Rock Entertainment'
            ]
        );

        DB::table('movies') -> insert(
            [
                'title' => 'Green Book',
                'director' => '	Peter Farrelly',
                'running_time' => '130',
                'image' => 'green_book.jpg',
                'studio' => 'Universal Pictures'
            ]
        );

        DB::table('movies') -> insert(
            [
                'title' => 'Big Fish',
                'director' => 'Tim Burton',
                'running_time' => '125',
                'image' => 'big_fish.jpg',
                'studio' => 'Sony Pictures Releasing'
            ]
        );
    }
}
