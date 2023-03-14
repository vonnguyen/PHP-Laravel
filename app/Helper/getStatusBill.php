

<?php


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
