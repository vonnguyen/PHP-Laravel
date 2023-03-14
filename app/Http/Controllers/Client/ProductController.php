<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    const  _PER_PAGE = 6;
    function index(Request $request){
    
        $products = Product:: orderBy('created_at', 'desc');
        if( $request -> query('keyword')){
            $products = $products->where('name', "like", "%" . $request->query('keyword') . "%");
        }
        $products = $products->paginate(self::_PER_PAGE)->withQueryString();

        return view('client.product',compact('products'));
    }

    function detail($id){
        $product = Product::find($id);
        $comments = Comment::where('product_id',$id)->get();
        $products = Product::where('cate',$product->cate)->limit(4)->get();

        return view('client.chitietsp', compact('product','comments','products'));
    }
}
