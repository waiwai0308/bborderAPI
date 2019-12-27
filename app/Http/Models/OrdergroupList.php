<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class OrdergroupList extends Model
{
    # 資料表名稱 
    protected $table = 'ordergroup_list';
    # 主鍵
    protected $primaryKey = 'ordergroup_id';
    # 時間戳記
    public  $timestamps = false;
    # 白名單
    # protected $fillable = ['name'];
}
