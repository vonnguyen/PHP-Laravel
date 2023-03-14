<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class InfomationController extends Controller
{
    //
    function index(){
        $products = Product::limit(4)->get();
        return view('client.infomation',compact('products'));
    }
}
