<?php

use Illuminate\Database\Seeder;
use \App\User;
use \Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::truncate();

        factory(User::class,50)->create();
    }
}
