<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class WishController extends Controller
{
    //
        const  _PER_PAGE = 1;
        function index(){
            $products = Product::paginate(self::_PER_PAGE)->withQueryString();
    
            return view('client.whish',compact('products'));
        }

}
