<?php

use Illuminate\Database\Seeder;

class DrinkshopsMenuSpecificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drink_shops_menu_specifications')->insert([
            // 'drinkshop_id' => str_random(10),
            'menu_id' => '1',
            'spec_type' => 'sugar',
            'spec_name' => '正常',
            'display' => 'show',
            'sort' => '1',
        ]);
        DB::table('drink_shops_menu_specifications')->insert([
            // 'drinkshop_id' => str_random(10),
            'menu_id' => '1',
            'spec_type' => 'sugar',
            'spec_name' => '半糖',
            'display' => 'show',
            'sort' => '2',
        ]);
        DB::table('drink_shops_menu_specifications')->insert([
            // 'drinkshop_id' => str_random(10),
            'menu_id' => '1',
            'spec_type' => 'sugar',
            'spec_name' => '無糖',
            'display' => 'show',
            'sort' => '3',
        ]);
        DB::table('drink_shops_menu_specifications')->insert([
            // 'drinkshop_id' => str_random(10),
            'menu_id' => '1',
            'spec_type' => 'ice',
            'spec_name' => '正常',
            'display' => 'show',
            'sort' => '1',
        ]);
        DB::table('drink_shops_menu_specifications')->insert([
            // 'drinkshop_id' => str_random(10),
            'menu_id' => '1',
            'spec_type' => 'ice',
            'spec_name' => '少冰',
            'display' => 'show',
            'sort' => '2',
        ]);
        DB::table('drink_shops_menu_specifications')->insert([
            // 'drinkshop_id' => str_random(10),
            'menu_id' => '1',
            'spec_type' => 'ice',
            'spec_name' => '去冰',
            'display' => 'show',
            'sort' => '3',
        ]);
    }
}
