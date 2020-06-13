<?php

use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
         $this->call(UsersTableSeeder::class);
         $this->call(CgiesTableSeeder::class);
         $this->call(ItemsTableSeeder::class);
         $this->call(OrdersTableSeeder::class);
        $this->call(ItemOrderTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
