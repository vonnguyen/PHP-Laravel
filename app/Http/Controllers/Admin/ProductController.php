<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
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
        return redirect()->route('admin.product.list')->with('msg','Them danh muc thanh cong');
    }
    function list(){
        $listCate = Category::all();

        $listProduct = Product::all();
        return view('admin.product.list',compact("listProduct","listCate"));  // truyen du lieu vao danh muc
    }
    // Hien thi add
    function showadd(){
        $listCate = Category::all();
        return view('admin.product.add', compact("listCate"));
    }
    function showupdate($id){
        $listCate = Category::all();

        $cate =Product::find($id);
        return view('admin.product.update',compact('cate','listCate')); // truyen du lieu vao danh muc
    }
    // xoa
    function delete($id){
        $deleted =Product::where('id', $id)->delete();
        $listProduct =Product::all();
        return redirect()->route('admin.product.list',compact("listProduct"));  // truyen du lieu vao danh muc
    }
    // update
    function sua($id,Request $request){
       $product =Product::find($id);
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
