<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class seed_posts_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            [
                'title' => 'Hello World!',
                'summary' => 'This is my first post with seeder',
                'body' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'featured_image' => 'default.jpg',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('posts')->insert(
            [
                'title' => 'My second Post!',
                'summary' => 'This is my first post with seeder',
                'body' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'featured_image' => 'default.jpg',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('posts')->insert(
            [
                'title' => 'Third!',
                'summary' => 'This is my first post with seeder',
                'body' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'featured_image' => 'default.jpg',
                'created_at' => Carbon::now()
            ]
        );

        DB::table('posts')->insert(
            [
                'title' => 'Fourth!',
                'summary' => 'This is my first post with seeder',
                'body' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                'featured_image' => 'default.jpg',
                'created_at' => Carbon::now()
            ]
        );
    }
}
