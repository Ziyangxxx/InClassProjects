<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       DB::table('users')->insert([
            'name'=>'Alpha Subject',
            'email'=>'alpha@example.com',
            'email_verified_at'=>now(),
            'password'=>password_hash('password', PASSWORD_DEFAULT),
            'remember_token'=>Str::random(10),
            'is_admin'=>true
        ]);

        DB::table('users')->insert([
            'name'=>'Beta Subject',
            'email'=>'bate@example.com',
            'email_verified_at'=>now(),
            'password'=>password_hash('password', PASSWORD_DEFAULT),
            'remember_token'=>Str::random(10)
        ]); 
    }
}
