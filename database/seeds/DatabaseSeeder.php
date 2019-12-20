<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DrinkshopsBranchTableSeeder::class);
        $this->call(DrinkshopsMenuCategoryTableSeeder::class);
        $this->call(DrinkshopsMenuIngredientTableSeeder::class);
        $this->call(DrinkshopsMenuItemTableSeeder::class);
        $this->call(DrinkshopsMenuSpecificationsTableSeeder::class);
        $this->call(DrinkshopsMenuTableSeeder::class);
        $this->call(DrinkshopsTableSeeder::class);
    }
}
