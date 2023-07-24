<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\product_property;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    
    function index(){
        return view('admin.product.add');
    }
    // Them
    function add(Request $request){
        $product  = new Product();
        $product->name = $request->name;
        $product->gia = $request->gia;
        $product->image =  cloudinary()->upload($request->file('img')->getRealPath())->getSecurePath();
        $product->mota = $request->mota;
        $product->cate = $request->cate;
         
        $product->save();

        $product_property  = new product_property();

        $product_property->product_id = $product->id;
        $product_property->sizes = json_encode($request->input('sizes'));
        $product_property->colors =  json_encode($request->input('colors'));
        $product_property->save();

        return redirect()->route('admin.product.list')->with('msg','Them danh muc thanh cong');
    }
    function list(Request $request){
        $listCate = Category::all();

        $listProduct = Product::orderBy('created_at', 'desc');
        if($request->cate){
            $listProduct = $listProduct->where('cate',$request->cate);
        }
        $listProduct = $listProduct->get();
        return view('admin.product.list',compact("listProduct","listCate"));  // truyen du lieu vao danh muc
    }
    // Hien thi add
    function showadd(){
        $listCate = Category::all();
        $sizes = Size::all();
        $colors = Color::all();


        return view('admin.product.add', compact("listCate","sizes","colors"));
    }
    function showupdate($id){
        $listCate = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        $product =Product::find($id);
        return view('admin.product.update',compact('product','listCate','sizes','colors')); // truyen du lieu vao danh muc
    }
    // xoa
    function delete($id){
        $deleted =Product::where('id', $id)->delete();
        $listProduct = Product::get();
        return redirect()->route('admin.product.list',compact("listProduct"));  // truyen du lieu vao danh muc
    }
    // update
    function sua($id,Request $request){
       $product =Product::find($id);
       $property = product_property::where('product_id',$id)->first();
       if(!empty($property)){

           $property->sizes = json_encode($request->input('sizes'));
            $property->colors =  json_encode($request->input('colors'));
            $property->update();
       }else{
        $product_property  = new product_property();

        $product_property->product_id = $product->id;
        $product_property->sizes = json_encode($request->input('sizes'));
        $product_property->colors =  json_encode($request->input('colors'));
        $product_property->save();
       }
        if($request->name){
            $product->name= $request->name;
        }
        
        if($request->gia){
             $product->gia = $request->gia;
        }
        if($request->cate){
            $product->cate = $request->cate;
       }
       if($request->hasFile('img')){ 

           $product->image =  cloudinary()->upload($request->file('img')->getRealPath())->getSecurePath();
       }
       
       if($request->mota){
           $product->mota = $request->mota;
       }
       $product->update();
       return redirect()->route('admin.product.list');
    }
}
