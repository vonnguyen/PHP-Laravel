<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    function index(){
        $id = Auth::user()->id;
        $user =User::find($id);
        return view('client.profile',compact("user")); 
    }

    public function update(Request $request){
        $id = Auth::user()->id;
        $user =User::find($id);
        if($request->name){
            $user->name= $request->name;
        }
        if($request->email){
            $user->email= $request->email;
        }
        if($request->phone){
            $user->phone= $request->phone;
        }
        if($request->address){
            $user->address= $request->address;
        }
        if($request->hasFile('img')){ 
   
            $user->img =  cloudinary()->upload($request->file('img')->getRealPath())->getSecurePath();
        }
   
       $user->update();
   
       return redirect()->back();

    }
    
}

