<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotiController extends Controller
{
    //

    function getNoti($user_id){
        $data = [];
        $notis_no_readed = notification::where("user_id",Auth::user()->id)->where("readed" , 0)->get();
        $notis_all = notification::where("user_id",Auth::user()->id)->get();
    
        $data['notis_all'] = $notis_all;
    
        $data['notis_no_readed'] = $notis_no_readed;
    
        return response()->json($data);
    }

    function readAll(){
        $notis_all = notification::where("user_id",Auth::user()->id)->update([
            "readed" =>1
        ]);

        return redirect()->back();

    }
    
}
