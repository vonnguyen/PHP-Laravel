<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    //

    public function login()
    {
        return view('admin.login');
    }

    public function submitLogin(Request $request)
    {
        //check user 
        $user = User::where('email', $request->email)->first();
            if ($user && Hash::check($request->password, $user->password)) {
                if($user->group_id == 1){

                    Auth::login($user);
                    return redirect()->route('admin.index');
                }else{
                    return back()->with('msg','Không phải admin !!');
                }
                
            } else {
                return back()->with('msg','Không tồn tại tài khoản !!');
            
            }
    }

    function register(){
        return view('admin.register');
    }

}
