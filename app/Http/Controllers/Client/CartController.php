<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\user_cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //
    function add(Request $request){

        $item = Product::find($request->id);
        $cartUser =user_cart::where('user_id', Auth::user()->id)->first();
        if (empty($cartUser)) {
            $cartUser = new user_cart();
            $cartUser->user_id = Auth::user()->id;
            $item->number = $request->numberProduct;
            $item->total = (int)($request->numberProduct) * (float)($item->gia);
            $item->color =($request->color);
            $item->size =($request->size) ;

            $cart = [];
            array_push($cart, $item);
        } else if (empty(json_decode($cartUser->cart))) {
            $cartUser->user_id = Auth::user()->id;
            $item->number = $request->numberProduct;
            $item->total = (int)($request->numberProduct) * (float)($item->gia);
            $item->color =($request->color);
            $item->size =($request->size) ;
            $cart = [];
            array_push($cart, $item);
        } else {

            $check = 0;
            $cart = json_decode($cartUser->cart);
            if (!empty($cart)) {
                $itemNew = null;
                $keyNew = null;
                foreach ($cart as $key => $itemChild) {

                    if ((int)($itemChild->id) === (int)($request->id)) {
                        $itemChild->number = (int)($itemChild->number) + (int)$request->numberProduct;
                        if ((int)($itemChild->number) <= 0) {
                            array_splice($cart, $key, 1);
                            $check = 2;
                            break;
                        }
                        $itemChild->total = (int)($itemChild->number) * (float)($item->gia);
                        $itemChild->color =($request->color);
                        $itemChild->size =($request->size) ;
                        $itemNew = $itemChild;
                        $keyNew = $key;
                        $check = 1;
                        break;
                    }
                }
                if ($check === 1) {
                    $cart[$keyNew] = [];
                    $cart[$keyNew] = $itemNew;
                } else if ($check == 0) {
                    $item->number = $request->numberProduct;
                    $item->total = (int)($request->numberProduct) * $item->gia;
                    $item->color =($request->color);
                    $item->size =($request->size) ;
                    array_push($cart, $item);
                }
            }
        }


        $cartUser->cart =  json_encode($cart);
        $cartUser->save();
        return response()->json($cartUser);  // trả dữ liệu về client
    }

    // xóa 
    public function remove(Request $request)
    {
        $cartUser = user_cart::where('user_id', Auth::user()->id)->first();
        if (is_null($cartUser)) {
        } else {
            if (!empty($cartUser->cart)) {
                $cart = json_decode($cartUser->cart);
                $keyRemove = -1;
                foreach ($cart as $key => $item) {
                    if ((int)($item->id) === (int)($request->id)) {
                        $keyRemove = $key;
                    }
                }
                if ($keyRemove > -1) {
                    array_splice($cart, $keyRemove, 1);
                }
            }
        }
        $cartUser->cart =  json_encode($cart);
        $cartUser->save();
        return response()->json($cartUser);
    }
}
