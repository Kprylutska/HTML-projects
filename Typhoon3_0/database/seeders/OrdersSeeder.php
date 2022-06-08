<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'dishes_id' => '1',
            'dishes_name' => 'Philadelphia klasyczna',
            'dishes_count' => 2,
            'dishes_price' => 120
        ]);
    }
}
