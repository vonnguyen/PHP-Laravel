<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //

    public function add(Request $request){
        $product_id = $request->product_id;
        $user_id = Auth::user()->id;
        $message = $request->message;
        $rating = $request->rating;

        $comment = new Comment();
        $comment->user_id = $user_id;
        $comment->product_id = $product_id;
        $comment->message = $message;
        $comment->rating = $rating;
        $comment->save();
        
        return response()->json([
            'data'=>$comment
        ]);
   
    }

}
