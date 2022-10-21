<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $newThreeProduct = Product::orderBy("created_at","desc")->limit(3)->get();
        $newSixProduct = Product::orderBy("created_at","desc")->limit(6)->get();
        return view('home',compact('newThreeProduct','newSixProduct'));

    }

}
