<?php

use Illuminate\Database\Seeder;

class DrinkshopsBranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drink_shops_branch')->insert([
            // 'drinkshop_id' => str_random(10),
            'drinkshop_code' => 'webb',
            'branch_name' => 'BB 茶飲',
            'branch_info' => '滿500元才外送',
            'branch_address' => '高雄市軟體科技園區',
            'branch_menu_id' => '1',
            'branch_phone_1' => '07-0000000',
            'branch_phone_2' => '',
            'display' => 'show',
            'sort' => '1',
        ]);
    }
}
