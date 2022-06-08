<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DishesSeeder extends Seeder
{
    public function run()
    {
        DB::table('dishes')->insert([
            'name' => 'Philadelphia klasyczna',
            'description' => 'Ryż, nori, łosoś, ogórek, awokado, serek Philadelphia',
            'price' => 29.00,
            'grams' => 236
        ]);
        DB::table('dishes')->insert([
            'name' => 'Amachi roll',
            'description' => 'Ryż, nori, łosoś, kawior, mango, serek Philadelphia',
            'price' => 30.00,
            'grams' => 236
        ]);
        DB::table('dishes')->insert([
            'name' => 'Philadelphia z krewetką',
            'description' => 'Ryż, nori, krewetki, kawior, ogórek, serek Philadelphia',
            'price' => 29.00,
            'grams' => 236
        ]);
        DB::table('dishes')->insert([
            'name' => 'Zielony Smok',
            'description' => 'Ryż, nori, łosoś, węgorz, ogórek, awokado, serek Philadelphia, sos unagi, sezam biały',
            'price' => 37.00,
            'grams' => 261
        ]);
        DB::table('dishes')->insert([
            'name' => 'Amachi roll',
            'description' => 'Ryż, nori, łosoś, kawior, mango, serek Philadelphia',
            'price' => 30.00,
            'grams' => 236
        ]);
        DB::table('dishes')->insert([
            'name' => 'Chidori roll',
            'description' => 'Ryż, nori, serek Philadelphia, sos unagi, sezam biały, omlet tamago',
            'price' => 19.00,
            'grams' => 206
        ]);
        DB::table('dishes')->insert([
            'name' => 'California krab',
            'description' => 'Ryż, nori, surimi, kawior, ogórek, awokado, sos ostry',
            'price' => 29.00,
            'grams' => 236
        ]);
        DB::table('dishes')->insert([
            'name' => 'Wega roll',
            'description' => 'Ryż, nori, ogórek, awokado, pomidor, papryka, sos unagi, tezam biały, szuka, sałata',
            'price' => 20.50,
            'grams' => 238
        ]);
        DB::table('dishes')->insert([
            'name' => 'Złoty Smok',
            'description' => 'Ryż, nori, łosoś, węgorz, ogórek, serek Philadelphia, sos unagi, sezam biały, omlet tamgo',
            'price' => 47.00,
            'grams' => 286
        ]);
        DB::table('dishes')->insert([
            'name' => 'Jakudza roll',
            'description' => 'Ryż, nori, ogórek, pomidor, papryka, serek Philadelphia, sezam miks',
            'price' => 20.00,
            'grams' => 194
        ]);
    }
}

