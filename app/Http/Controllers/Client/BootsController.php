<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BootsController extends Controller
{
    //
    const  _PER_PAGE = 12;
    function index(Request $request){
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
        return view('client.boots',compact('products','listCate'));
        
    }

}
