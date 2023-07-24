<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // hien thi trang web

    function index(){
        return view('admin.category.add');
    }
    // Them
    function add(Request $request){
        $category  = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin.category.listds')->with('msg','Them danh muc thanh cong');
    }
    function list(){
        $listDanhMuc = Category::all();
        return view('admin.category.listds',compact("listDanhMuc"));  // truyen du lieu vao danh muc
    }
    // Hien thi add
    function showadd(){
        return view('admin.category.add');
    }
    function showupdate($id){

        $cate = Category::find($id);
        return view('admin.category.update',compact('cate'));
    }
    // xoa
    function delete($id){
        $deleted = Category::where('id', $id)->delete();
        $listDanhMuc = Category::all();
        return view('admin.category.listds',compact("listDanhMuc"));  // truyen du lieu vao danh muc
    }
    // update
    function sua($id,Request $request){
       $cate =Category::find($id);

       $cate->name= $request->name;

       $cate->update();

       return redirect()->route('admin.category.listds');
    }
}
