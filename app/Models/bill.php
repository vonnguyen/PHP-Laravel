<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    protected $guarded = [];//nếu muốn chặn không insert cột nào lên thì để vào đây, nếu không để là tất cả đều có quyền insert

    // Lấy tên từ user quan hệ 1 - 1 (1 bill thì chỉ 1 người dùng)
    function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}
