<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    //
    function index(){
        return view('client.shipping');
    }
}
