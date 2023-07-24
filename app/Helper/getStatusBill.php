

<?php

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