<?php

use Illuminate\Database\Seeder;
use \App\ItemOrder;

class ItemOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemOrder::truncate();
        factory(ItemOrder::class, 100)->create();
    }
}
