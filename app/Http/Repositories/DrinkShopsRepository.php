<?php

namespace App\Http\Repositories;

use App\Http\Models\Drinkshops;

class DrinkShopsRepository
{
    protected $drinkshops;

    public function __construct(
        Drinkshops $drinkshops
    ) {
        $this->drinkshops = $drinkshops;
    }

    public function index()
    {
        return $this->drinkshops->get()->sortBy('sort');;
    }
}