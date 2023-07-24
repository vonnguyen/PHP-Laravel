<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Them
    function add(Request $request){
     
        $comment  = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
       
        $comment->address = $request->diachi;
        $comment->phone = $request->sdt;
        $comment->group_id = $request->group;
        $comment->save();
        return redirect()->route('admin.comments.list')->with('msg','Thêm nhóm người dùng thành công');
    }
    function list(){
        $comments =Comment::all();
        return view('admin.comments.list',compact("comments"));  // truyen du lieu vao danh muc
    }
    function delete($id){
        $delete = Comment::where('id',$id)->delete();
        $listComment = Comment::all();
        return redirect()->route('admin.comments.list',compact('listComment'));
    }
}
