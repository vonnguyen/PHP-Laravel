<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ChitietController extends Controller
{
    //
    function index(){
        return view('client.chitietsp');
    }
}
