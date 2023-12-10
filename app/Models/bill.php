<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class bill extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $guarded = [];//nếu muốn chặn không insert cột nào lên thì để vào đây, nếu không để là tất cả đều có quyền insert
    protected $table = 'bills';
    // Lấy tên từ user quan hệ 1 - 1 (1 bill thì chỉ 1 người dùng)
    function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    function detailBill(){
        return $this->hasMany(detail_bill::class,'id_bill','id');
    }

}
