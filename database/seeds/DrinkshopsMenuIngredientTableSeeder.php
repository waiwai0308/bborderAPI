<?php

use Illuminate\Database\Seeder;

class DrinkshopsMenuIngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drink_shops_menu_ingredient')->insert([
            // 'drinkshop_id' => str_random(10),
            'menu_id' => '1',
            'ingredient_name' => '珍珠',
            'ingredient_price' => '10',
            'display' => 'show',
            'sort' => '1',
        ]);
        DB::table('drink_shops_menu_ingredient')->insert([
            // 'drinkshop_id' => str_random(10),
            'menu_id' => '1',
            'ingredient_name' => '蜂蜜',
            'ingredient_price' => '10',
            'display' => 'show',
            'sort' => '2',
        ]);
    }
}
