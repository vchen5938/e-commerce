<?php

use Illuminate\Database\Seeder;
use \App\Item;
use \Faker\Factory;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Item::truncate();

        factory(Item::class,500)->create();
    }
}
