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

                Mail từ <span style="color:red;">Shoppet</span>
            </p>
        </div>
        <div style="padding:12px">
            <p>Xin chào {{$user->email}}</p>
            <p>Bạn vừa thanh toán đơn hàng <a href="{{$orderData}}">detail</a></p>
            <p>Bạn quên mật khẩu?</p>
            <p>Chúng tôi gửi Link xác nhận đổi mật khẩu. Nếu không phải là bạn vui lòng báo cáo với chúng tôi ngay!</p>

            <p>Cảm ơn bạn đã gửi Mail cho chúng tôi!</p>
        </div>
    </div>
</body>
</html>