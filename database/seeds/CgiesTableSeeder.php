<?php

use Illuminate\Database\Seeder;
use \App\Cgy;
use \Faker\Factory;

class CgiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Cgy::truncate();

        factory(Cgy::class,500)->create();
    }
}
