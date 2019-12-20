<?php

use Illuminate\Database\Seeder;

class DrinkshopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drink_shops')->insert([
            // 'drinkshop_id' => str_random(10),
            'drinkshop_code' => 'webb',
            'drinkshop_name' => 'BB 茶飲',
            'drinkshop_info' => '滿500元才外送',
            'drinkshop_default_branch' => '1',
            'sort' => '1',
        ]);
    }
}
