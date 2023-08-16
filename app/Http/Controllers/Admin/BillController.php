<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    // Them
    // function add(Request $request){
     
    //     $bill  = new bill();
    //     $bill->name = $request->name;
    //     $bill->email = $request->email;

    //     $bill->address = $request->diachi;
    //     $bill->phone = $request->sdt;
    //     $bill->group_id = $request->group;
    //     $bill->img =  cloudinary()->upload($request->file('img')->getRealPath())->getSecurePath();
    //     $bill->save();
    //     return redirect()->route('admin.bill.list');
    // }
    function list(){
        $bills =bill::orderBy("id","desc")->get();
        return view('admin.bill.list',compact("bills"));  // truyen du lieu vao danh muc
    }
    // Hien thi add
    
   
}
