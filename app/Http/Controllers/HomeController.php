<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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
        $products = Product::limit(4)->get();

        return view('home',compact('newThreeProduct','newSixProduct','products'));

    }


    function faceidLogin(Request $req){
        $email = $req->email;

        try{
           $user = User::where('email',$email)->first();
           if(empty($user)) return response()->json([
            'message' =>  'User not found !',
            'status' => 400
        ], 400);
            Auth::login($user);
            return response()->json([
                'message' => 'Login success',
                'status' => 200
            ], 200);
        }catch(\Exception $e){
            return response()->json([
                'message' =>  $e->getMessage(),
                'status' => 200
            ], 500);
        }
      

    }

}
