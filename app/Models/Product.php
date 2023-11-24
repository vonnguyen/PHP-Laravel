<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'products';
    protected $dates = ["delated_at"];
    protected $guarded = [];
    function property(){
        return $this->hasOne(product_property::class,'product_id','id');
    }
}
