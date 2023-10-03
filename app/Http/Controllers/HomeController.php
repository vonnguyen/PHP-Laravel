<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $billsNew = DB::table('bills')
            ->select('id')
            ->where('statuss', 2)
            ->get();
        $arr = [];
        foreach ($billsNew as $item) {
            $arr[] = $item->id;
        }
        $newThreeProduct = Product::orderBy("created_at", "desc")->limit(6)->get();
        $newSixProduct = DB::table('detail_bills')
            ->select('id_pro', DB::raw('count(*) as total'))
            ->whereIn('id_bill', $arr)
            ->groupBy('id_pro')
            ->limit(6)
            ->orderBy('total', 'desc')
            ->get();
            foreach ($newSixProduct as $item) {
                $item->product  = Product::where('id', $item->id_pro)->first();
            }
            // dd($newSixProduct);

        $products = Product::limit(4)->get();

        return view('home', compact('newThreeProduct', 'newSixProduct', 'products'));
    }


    function faceidLogin(Request $req)
    {
        $email = $req->email;

        try {
            $user = User::where('email', $email)->first();
            if (empty($user)) return response()->json([
                'message' =>  'User not found !',
                'status' => 400
            ], 400);
            Auth::login($user);
            return response()->json([
                'message' => 'Login success',
                'status' => 200
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' =>  $e->getMessage(),
                'status' => 200
            ], 500);
        }
    }
}
