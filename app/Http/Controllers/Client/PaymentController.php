<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\bill;
use App\Models\detail_bill;
use App\Models\Product;
use App\Models\user_cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //
    function index($id){
        $data = bill::find($id);
        $detail_bill = detail_bill::where('id_bill',$id)->get();
        $products = Product::limit(4)->get();
        return view('client.payment',compact('data','detail_bill','products'));
    }

    // Chi tiết bill
    function detail_bill($id,Request $request){


        if($request->status > -1){
         $bill = bill::find($id);
            $bill->statuss = $request->status;
            $bill->update();
        }
        $data = bill::find($id);
        $detail_bill = detail_bill::where('id_bill',$id)->get();
        return view('admin.bill.detail',compact('data','detail_bill'));
    }
    public function saveInfo(Request $request){
        session(['info' => $request->all()]);
        return redirect()->route('shipping');
    }


    public function postPayment(Request $request){
        
        $total = 0;
        if ( getCart()) {
            foreach ( getCart() as $item) {
                $total += (float)$item->total;
            }
        }

        $bill = new  bill();

        $bill = $bill->create([
            'sdt' => $request->phone,
            'address' => $request->address,
            'total' => $total,
            'user_id' => Auth::user()->id,
            'phuongthucTT'=> $request->method??'Nhận hàng trả tiền',
            'priceship'=>0,
        ]);

        if ( getCart()) {
            foreach ( getCart() as $item) {
                $detailBill = new detail_bill();
                $detailBill->id_bill = $bill->id;
                $detailBill->id_pro = $item->id;
                $detailBill->number = (int)($item->number);
                $detailBill->total = $item->total;
                $detailBill->price = $item->gia;
                $detailBill->image = $item->image;
                $detailBill->name_pro = $item->name;
                $detailBill->save();
            }
        }

        $cart_user = user_cart::where('user_id', Auth::user()->id)->first();
        $cart_user->cart = json_encode([]);
        $cart_user->save();
        return redirect()->route('payment', $bill->id);
    }
    function order(){
        $bill = bill::orderBy('id',"desc")->where('user_id',Auth::user()->id)->get();
        $products = Product::limit(4)->get();
        return view('client.order',compact('bill','products'));
    }

    function delete($id){
        $deleted = bill::where('id', $id)->delete();
        return redirect()->back()->with('msg','Xóa don hang thành công');

    }

    function vnPay_return()
	{
		return view('client.vnpay');
	}

    // thanh toan vnpay
	function vnPay()
	{

		// $sum = $_POST['sum'];
        $total = 0;
        if ( getCart()) {
            foreach ( getCart() as $item) {
                $total += (float)$item->total;
            }
        }
		$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
		$vnp_Returnurl = "http://127.0.0.1:8000/vnpay_return";
		$vnp_TmnCode = "LCP47ECL"; //Mã website tại VNPAY 
		$vnp_HashSecret = "GEJMALJWKSUWIRPEVYTXTXCQKDREHZQS"; //Chuỗi bí mật

		$vnp_TxnRef = random_int(0, 9999999999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
		$vnp_OrderInfo = 'Thanh toán đơn hàng test';
		$vnp_OrderType = 'billpayment';
		$vnp_Amount =    $total*1000 * 100;
		$vnp_Locale = 'vn';
		$vnp_BankCode = 'NCB';
		$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
		//Add Params of 2.0.1 Version
		// $vnp_ExpireDate = $_POST['txtexpire'];
		//Billing


		$inputData = array(
			"vnp_Version" => "2.1.0",
			"vnp_TmnCode" => $vnp_TmnCode,
			"vnp_Amount" => $vnp_Amount,
			"vnp_Command" => "pay",
			"vnp_CreateDate" => date('YmdHis'),
			"vnp_CurrCode" => "VND",
			"vnp_IpAddr" => $vnp_IpAddr,
			"vnp_Locale" => $vnp_Locale,
			"vnp_OrderInfo" => $vnp_OrderInfo,
			"vnp_OrderType" => $vnp_OrderType,
			"vnp_ReturnUrl" => $vnp_Returnurl,
			"vnp_TxnRef" => $vnp_TxnRef,
			// "vnp_ExpireDate" => $vnp_ExpireDate

		);

		if (isset($vnp_BankCode) && $vnp_BankCode != "") {
			$inputData['vnp_BankCode'] = $vnp_BankCode;
		}
		if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
			$inputData['vnp_Bill_State'] = $vnp_Bill_State;
		}

		//var_dump($inputData);
		ksort($inputData);
		$query = "";
		$i = 0;
		$hashdata = "";
		foreach ($inputData as $key => $value) {
			if ($i == 1) {
				$hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
			} else {
				$hashdata .= urlencode($key) . "=" . urlencode($value);
				$i = 1;
			}
			$query .= urlencode($key) . "=" . urlencode($value) . '&';
		}

		$vnp_Url = $vnp_Url . "?" . $query;
		if (isset($vnp_HashSecret)) {
			$vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
			$vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
		}
		$returnData = array(
			'code' => '00', 'message' => 'success', 'data' => $vnp_Url
		);
		// if (isset($_POST['redirect'])) {
			// header('Location: ' . $vnp_Url);
            return redirect($vnp_Url);
			// die();
		// } else {
		// 	echo json_encode($returnData);
		// }
		// vui lòng tham khảo thêm tại code demo
	}
}
