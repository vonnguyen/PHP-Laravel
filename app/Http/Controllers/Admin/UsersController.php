<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Groups;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PHPUnit\TextUI\XmlConfiguration\Group;

class UsersController extends Controller
{
    // hien thi trang web

    // Them
    function add(Request $request){
     
        $user  = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->pass);
        $user->address = $request->diachi;
        $user->phone = $request->sdt;
        $user->group_id = $request->group;
        $user->img =  cloudinary()->upload($request->file('img')->getRealPath())->getSecurePath();
        $user->save();
        return redirect()->route('admin.user.list')->with('msg','Thêm nhóm người dùng thành công');
    }
    function list(){
        $users =User::all();
        return view('admin.user.list',compact("users"));  // truyen du lieu vao danh muc
    }
    // Hien thi add
    function showadd(){
        $groups = Groups::all();
        return view('admin.user.add',compact("groups"));  // truyen du lieu group vao khách hàng
    }
    function showupdate($id){
        $groups = Groups::all();
        $user =User::find($id);
        return view('admin.user.update',compact('user','groups'));
    }
    // xoa
    function delete($id){
        $deleted =User::where('id', $id)->delete();
        $user =User::all();
        return redirect()->route('admin.user.list',compact('user'))->with('msg','Xóa nhóm người dùng thành công');

    }
    // update
    function update($id,Request $request){
       $user = User::find($id);

       if($request->name){
            $user->name= $request->name;
        }
        if($request->email){
            $user->email= $request->email;
        }
        if($request->sdt){
            $user->phone= $request->sdt;
        }
        if($request->diachi){
            $user->address= $request->diachi;
        }
        if($request->hasFile('img')){ 

            $user->img =  cloudinary()->upload($request->file('img')->getRealPath())->getSecurePath();
        }

       $user->update();

       return redirect()->route('admin.user.list');
    }
}
