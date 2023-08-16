

<?php

use App\Models\favoriteProduct;
use App\Models\user_cart;
use Illuminate\Support\Facades\Auth;

function getStatusBill($status)
{
    $message = "";
    $type = "";
    switch ($status) {
        case 0:
            $message = "Đang chuẩn bị hàng";
            $type = "danger";

            break;
        case 1:
            $message = "Đang giao hàng";
            $type = "warning";

            break;
        case 2:
            $message = "Giao hàng thành công";
            $type = "success";

            break;
    }



    return [
        'message'=>$message,
        "color"=>$type
    ];
}
function getCart(){
    if(empty(Auth::user()->id)) return [];
    $cart_user = user_cart::where('user_id', Auth::user()->id)->first();
    return json_decode(!empty($cart_user->cart) ?$cart_user->cart: json_encode([]),false);
}   

function getFavorite(){
    if(empty(Auth::user()->id)) return 0;
    $products = favoriteProduct::where('user_id',Auth::user()->id)->get();

    return count($products);
}

function renderComment($data,$parent_id,$sub_string,$html){
    $string=$sub_string;
    $html_new =$html;
    foreach($data as $comment){
        if($comment->parent_id == $parent_id ){
            $img =  $comment->user->img;
            $name = $comment->user->name;
            $id_user =  $comment->user->id;
            $html_new .= $string.  '<div class="flex  shadow justify-between p-3 my-3 rounded-xl">
            <div>
                <div class="flex gap-3 items-center">
    
                    <p><img class="w-[50px] h-[50px] rounded-full" src="'.$img .'"
                            alt=""></p>
                    <p class="font-bold text-xl"></p>
                </div>
                <div class="message">'.$comment->message.'</div>
            </div>
            <div class="flex flex-col gap-3 items-end">
    
                <p></p>
                    
                    <p data-user= "" data-userid= "" class="text-blue-500 hover:underline hover:cursor-pointer reply">Trả lời</p>
    
            </div>
            </div>';
            echo (($html_new));

            renderComment($data,$comment->id,$string."-", $html_new);
        }
    }



}