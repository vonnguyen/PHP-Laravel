<!DOCTYPE html>
<html>
<head>
    <title>vonnguyen@gmail.com.com</title>
</head>
<style>
    .body{
        border:1px solid #ccc;
        padding: 12px;

    }
    .link_reset{
        padding:4px 8px;
        background: rgb(127, 127, 194);

        color: black;
        font-weight: bold;
    }
    header{
        padding: 12px;
        font-size: 30px;
        font-weight: bold;
    }
</style>
<body>
    <div style="padding:12px;border:1px solid#ccc;">
        <div style="padding:24px;border-bottom:1px solid #ccc;margin:0;text-align:center;font-weight:bold;font-size:35px;color:black;">
            <p>

                Mail từ <span style="color:red;">ShoeZone Shop</span>
            </p>
        </div>
        <div style="padding:12px">
            <p>Xin chào {{$user->email}}</p>
            <p>Bạn vừa thanh toán đơn hàng <a href="{{$orderData}}">Chi tiết đơn hàng</a></p>
            <p>Vui lòng đăng nhập Shop để xác nhận bạn đã đặt hàng và hài lòng với sản phẩm trong vòng 7 ngày. Sau khi bạn xác nhận, chúng tôi sẽ thanh toán cho Người bán.
                Nếu bạn không xác nhận trong khoảng thời gian này, Shopee cũng sẽ thanh toán cho Người bán.</p>

            <p>Cảm ơn bạn đã gửi Liên hệ cho chúng tôi!</p>
        </div>
    </div>
</body>
</html>