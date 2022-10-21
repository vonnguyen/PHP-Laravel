<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class BootsController extends Controller
{
    //
    const  _PER_PAGE = 6;
    function index(){
        $products = Product::paginate(self::_PER_PAGE)->withQueryString();

        return view('client.boots',compact('products'));
    }
}
