<?php

use Illuminate\Database\Seeder;

class DrinkshopsMenuCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drink_shops_menu_category')->insert([
            // 'drinkshop_id' => str_random(10),
            'menu_id' => '1',
            'category_name' => '現泡茶',
            'category_info' => '採用南投茶葉',
            'category_tag' => '',
            'display' => 'show',
            'sort' => '1',
        ]);
        DB::table('drink_shops_menu_category')->insert([
            // 'drinkshop_id' => str_random(10),
            'menu_id' => '1',
            'category_name' => '鮮奶茶',
            'category_info' => '採用高雄鮮乳',
            'category_tag' => '',
            'display' => 'show',
            'sort' => '2',
        ]);
        DB::table('drink_shops_menu_category')->insert([
            // 'drinkshop_id' => str_random(10),
            'menu_id' => '1',
            'category_name' => '果汁',
            'category_info' => '新鮮現榨100%',
            'category_tag' => '',
            'display' => 'show',
            'sort' => '3',
        ]);
    }
}
