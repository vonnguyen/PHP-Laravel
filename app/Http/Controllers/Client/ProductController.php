<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\favoriteProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    const  _PER_PAGE = 12;
    function index(Request $request){
    
        // $products = Product:: orderBy('created_at', 'desc');
        // if( $request -> query('keyword')){
        //     $products = $products->where('name', "like", "%" . $request->query('keyword') . "%");
        // }
        // $product_test = $products;
        // $products = $products->paginate(4)->withQueryString();
        // $productshow = $product_test->paginate(self::_PER_PAGE)->withQueryString();
        // $listCate = Category::all();


        //

        $products = null;
        if( $request -> query('sort')){
            if( $request -> query('sort') == 'desc'){
                $products =Product::orderBy('name', 'desc'  );

            }else{
                $products =Product::orderBy('name', 'asc'  );

            }
        }else{
            $products =Product::orderBy('name', 'desc'  );
        }
        if( $request -> query('keyword')){
            $products = $products->where('name', "like", "%" . $request->query('keyword') . "%");
        }
        if( $request -> query('cate') && $request -> query('cate') != "all"){
            $products = $products->where('cate',  $request->query('cate') );
        }
      
        if( $request -> query('from') &&  $request -> query('to')){
            $products =   $products->whereBetween('gia', [ $request -> query('from'),$request -> query('to')]);
        }
        
        $products = $products->paginate(self::_PER_PAGE)->withQueryString();
        $listCate = Category::all();
        return view('client.product',compact('products','listCate'));
    }

    function detail($id){
        $product = Product::find($id);
        $comments = Comment::where('product_id',$id)->get();
        $products = Product::where('cate',$product->cate)->limit(4)->get();
        $product->views += 1;
        $product->save();
        return view('client.chitietsp', compact('product','comments','products'));
    }
    public function favorite($id,Request $request){
        $check_exits = favoriteProduct::where('user_id',Auth::user()->id)->where('product_id',$id)->first();
        if(!empty( $check_exits))   return redirect()->back(); 
        $favorite = new favoriteProduct();
        $favorite->product_id = $id;
        $favorite->user_id = Auth::user()->id;
        $favorite->save();
        return redirect()->back();
    }
   
}
