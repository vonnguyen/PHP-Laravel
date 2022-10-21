<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Groups;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    // hien thi trang web

    // Them
    function add(Request $request){
     
        $groups  = new Groups();
        $groups->name = $request->tennhom;
        $groups->save();
        return redirect()->route('admin.groups.list')->with('msg','Thêm nhóm người dùng thành công');
    }
    function list(){
        $groups = Groups::all();
        return view('admin.groups.list',compact("groups"));  // truyen du lieu vao danh muc
    }
    // Hien thi add
    function showadd(){

        return view('admin.groups.add');
    }
    function showupdate($id){

        $group = Groups::find($id);
        return view('admin.groups.update',compact('group'));
    }
    // xoa
    function delete($id){
        $deleted = Groups::where('id', $id)->delete();
        $groups = Groups::all();
        return redirect()->route('admin.groups.list',compact('groups'))->with('msg','Xóa nhóm người dùng thành công');

    }
    // update
    function update($id,Request $request){
       $group =Groups::find($id);

       $group->name= $request->tennhom;

       $group->update();

       return redirect()->route('admin.groups.list');
    }
}
