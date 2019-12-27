<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DrinkshopsMenuIngredient extends Model
{
    # 資料表名稱 
    protected $table = 'drink_shops_menu_ingredient';
    # 主鍵
    protected $primaryKey = 'ingredient_id';
    # 時間戳記
    public  $timestamps = false;
    # 白名單
    # protected $fillable = ['name'];
}
