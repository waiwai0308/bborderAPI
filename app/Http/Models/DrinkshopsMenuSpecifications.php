<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DrinkshopsMenuSpecifications extends Model
{
    # 資料表名稱 
    protected $table = 'drink_shops_menu_specifications';
    # 主鍵
    protected $primaryKey = 'spec_id';
    # 時間戳記
    public  $timestamps = false;
    # 白名單
    # protected $fillable = ['name'];
}
