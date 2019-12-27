<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DrinkshopsMenuItem extends Model
{
    # 資料表名稱 
    protected $table = 'drink_shops_menu_item';
    # 主鍵
    protected $primaryKey = 'item_id';
    # 時間戳記
    public  $timestamps = false;
    # 白名單
    # protected $fillable = ['name'];
}
