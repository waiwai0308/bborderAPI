<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DrinkshopsMenu extends Model
{
    # 資料表名稱 
    protected $table = 'drink_shops_menu';
    # 主鍵
    protected $primaryKey = 'menu_id';
    # 時間戳記
    public  $timestamps = false;
    # 白名單
    # protected $fillable = ['name'];
}
