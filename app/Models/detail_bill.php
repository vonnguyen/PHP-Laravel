<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_bill extends Model
{
    use HasFactory;
    protected $table = 'detail_bills';

    public function product() {
        return $this->belongsTo(Product::class, 'id_pro','id');
    }
}
