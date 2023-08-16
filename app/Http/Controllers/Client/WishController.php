<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\favoriteProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishController extends Controller
{
    //
        function index(){
            $products = favoriteProduct::where('user_id',Auth::user()->id)->get();
    
            return view('client.whish',compact('products'));
        }

}
