<?php

use Illuminate\Database\Seeder;

class DrinkshopsMenuItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drink_shops_menu_item')->insert([
            // 'drinkshop_id' => str_random(10),
            'category_id' => '1',
            'item_name' => '紅茶',
            'item_price' => '0',
            'item_price_s' => '0',
            'item_price_m' => '20',
            'item_price_l' => '30',
            'item_price_xl' => '0',
            'item_price_c' => '0',
            'item_default_sugar' => 0,
            'item_season_only' => 0,
            'item_hot_only' => 0,
            'item_free_ingredient' => '',
            'item_recommend' => 0,
            'display' => 'show',
            'sort' => '1',
        ]);
        DB::table('drink_shops_menu_item')->insert([
            // 'drinkshop_id' => str_random(10),
            'category_id' => '1',
            'item_name' => '綠茶',
            'item_price' => '少冰',
            'item_price_s' => '0',
            'item_price_m' => '0',
            'item_price_l' => '20',
            'item_price_xl' => '30',
            'item_price_c' => '0',
            'item_default_sugar' => 0,
            'item_season_only' => 0,
            'item_hot_only' => 0,
            'item_free_ingredient' => '',
            'item_recommend' => 0,
            'display' => 'show',
            'sort' => '2',
        ]);
        DB::table('drink_shops_menu_item')->insert([
            // 'drinkshop_id' => str_random(10),
            'category_id' => '2',
            'item_name' => '紅茶鮮奶',
            'item_price' => '少冰',
            'item_price_s' => '0',
            'item_price_m' => '0',
            'item_price_l' => '20',
            'item_price_xl' => '30',
            'item_price_c' => '0',
            'item_default_sugar' => 0,
            'item_season_only' => 0,
            'item_hot_only' => 0,
            'item_free_ingredient' => '',
            'item_recommend' => 0,
            'display' => 'show',
            'sort' => '1',
        ]);
        DB::table('drink_shops_menu_item')->insert([
            // 'drinkshop_id' => str_random(10),
            'category_id' => '2',
            'item_name' => '綠茶鮮奶',
            'item_price' => '少冰',
            'item_price_s' => '0',
            'item_price_m' => '0',
            'item_price_l' => '20',
            'item_price_xl' => '30',
            'item_price_c' => '0',
            'item_default_sugar' => 0,
            'item_season_only' => 0,
            'item_hot_only' => 0,
            'item_free_ingredient' => '',
            'item_recommend' => 0,
            'display' => 'show',
            'sort' => '2',
        ]);
        DB::table('drink_shops_menu_item')->insert([
            // 'drinkshop_id' => str_random(10),
            'category_id' => '3',
            'item_name' => '蘋果汁',
            'item_price' => '少冰',
            'item_price_s' => '0',
            'item_price_m' => '0',
            'item_price_l' => '20',
            'item_price_xl' => '30',
            'item_price_c' => '0',
            'item_default_sugar' => 0,
            'item_season_only' => 0,
            'item_hot_only' => 0,
            'item_free_ingredient' => '',
            'item_recommend' => 0,
            'display' => 'show',
            'sort' => '1',
        ]);
        DB::table('drink_shops_menu_item')->insert([
            // 'drinkshop_id' => str_random(10),
            'category_id' => '3',
            'item_name' => '西瓜汁',
            'item_price' => '少冰',
            'item_price_s' => '0',
            'item_price_m' => '0',
            'item_price_l' => '20',
            'item_price_xl' => '30',
            'item_price_c' => '0',
            'item_default_sugar' => 0,
            'item_season_only' => 0,
            'item_hot_only' => 0,
            'item_free_ingredient' => '',
            'item_recommend' => 0,
            'display' => 'show',
            'sort' => '1=2',
        ]);
    }
}
