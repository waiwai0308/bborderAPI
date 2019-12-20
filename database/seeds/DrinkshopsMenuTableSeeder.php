<?php

use Illuminate\Database\Seeder;

class DrinkshopsMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drink_shops_menu')->insert([
            // 'drinkshop_id' => str_random(10),
            'menu_note' => '2019 BB 茶飲菜單',
            'menu_img_url' => 'https://picsum.photos/id/10/400/600',
            'display' => '滿500元才外送',
            'sort' => '1',
        ]);
    }
}
