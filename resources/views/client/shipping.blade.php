@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('client')}}/assets/product.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/login.css">
@endsection

@section('content')

<div class="pt-[110px]">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                   
                    <div class="navbar mt-5">
                        <ul class="d-flex gap-2 p-0">
                            <li><a href="{{route('whish')}}">Giỏ hàng ></a> </li>
                            <li><a href="{{route('infomation')}}">Thông tin liên lạc ></a> </li>
                            <li><a href="{{route('shipping')}}">Đang chuyển hàng ></a> </li>
                            <li>Thanh toán </li>
                        </ul>
                    </div>

                    <div class="border border-2 rounded-lg p-3 mt-4">
                        <p class="flex gap-5 border-b pb-2"><span class="text-gray-500">Liên hệ</span><span
                            class="font-semibold">{{session('info')['firstName']}} {{session('info')['lastName']}}</span></p>
                        <p class="flex gap-5 border-b pb-2"><span class="text-gray-500">Liên hệ</span><span
                                class="font-semibold">{{session('info')['phone']}}</span></p>
                        <p class="flex gap-5 mt-3"><span class="text-gray-500">Địa chỉ người nhận</span><span
                                class="font-semibold fullAddress"></span></p>
                    </div>

                    <div class="method">
                        <p class="mt-5 text-xl">Phương thức vận chuyển</p>
                        <div class="border border-2 rounded-lg p-3 flex justify-between items-center w-full">
                            <p class="m-0 flex gap-3 items-center"><span
                                    class="p-[10px] flex justify-center items-center block w-[5px] h-[5px] max-w-[5px] max-h-[5px] bg-blue-600 rounded-full"><span
                                        class="p-[3px] block w-[3px] h-[3px] max-w-[3px] max-h-[3px] rounded-full leading-none bg-white"></span></span><span>
                                    Phí vận chuyển</span></p><span class="font-semibold fee"></span>
                        </div>
                    </div>

                    <div class="step-footer d-flex justify-content-sm-between mt-4">
                        <div class="product-wishlist-cart" style="padding-top: 25px;">
                            <a href="{{route('infomation')}}">
                                <button class="dt-sc-btn">
                                    Trở về
                                </button>
                            </a>
                        </div>
                        <div class="m-0">
                            <a href="{{route('vnpay')}}">
                                <img class="vnpay_img" width="200px" src="{{asset('client/assets/img/logo/th.jpg')}}" alt=""> 
                            </a>
                        </div>
                        <div class="product-wishlist-cart" style="padding-top: 25px;">
                            <form action="{{route('postPayment')}}" method="post">
                                @csrf
                               <input type="hidden" name="fee" value="">
                               <input type="hidden" name="phone" value={{session('info')['phone']}}>
                               <input type="hidden" name="address" value="">
                               <input type="hidden" name="fullName" value="{{session('info')['firstName']}} {{session('info')['lastName']}}">


                                <button type="submit" class="dt-sc-btn alert alert-success" role="alert">
                                    Thanh toán ngay
                                </button>
                            </form>
                        </div>
                        
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="bg-gray-50  p-5 min-h-screen">
                        <div class="listItem flex flex-col gap-3 border-b pb-3">

                            @php
                                $sum = 0;
                            @endphp
                            @if ( getCart())
                                @foreach ( getCart() as $item)
                                    @php
                                        $sum +=(int) $item->total;
                                    @endphp
                                    <div class="flex items-center justify-between ">
                                        <div class="flex gap-3 items-center">

                                            <div class="image w-fit relative " >
                                                {{-- duong dan anh --}}
                                                <img
                                                    src="{{$item->image}}"
                                                    class="w-[80px] border rounded-2xl" alt=""><span
                                                    class="absolute top-[-8px] p-1 bg-gray-500 rounded-full leading-none  text-white right-[-8px] min-w-[20px] min-h-[20px] max-w-[20px] max-h-[20px] flex justify-center items-center">{{$item->number}}</span>
                                            </div>
                                            <div class="flex flex-col">

                                                <p class="font-semibold"><span style="font-size: 15px">Tên sản phẩm: </span>{{ $item->name }}</p>
                                                <p class="font-semibold"><span style="font-size: 15px">Màu sắc: </span> {{ $item->color }}</p>
                                                <p class="font-semibold"><span style="font-size: 15px">Kích thước: </span> {{ $item->size }}</p>
                                            </div>
                                        </div>
                                        <p class="flex-end font-semibold"> {{number_format($item->gia ,2)}} ₫</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="subtotal py-3 border-b m-0">
                            <p class="flex justify-between"><span class="text-gray-600">Tổng phụ thu</span><span
                                    class="font-semibold"> {{number_format($sum,2)}} ₫</span></p>
                                    <p class="flex justify-between"><span class="text-gray-600">Phí Ship</span><span
                                        class="font-semibold fee"></span></p>
                            <p class="flex justify-between items-center m-0"><span
                                    class="text-gray-600">Đang chuyển hàng
                                </span><span class="text-xs">Tính toán ở bước tiếp theo</span></p>
                        </div>
                        <div class="total py-3">
                            <p class="flex justify-between items-center"><span class="text-xl">Tổng cộng</span><span
                                   data-price={{($sum)}} class="font-semibold text-3xl total_price"> </span></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

 @endsection 

 @section('js')
 <script>
    const fullAddress = document.querySelector('.fullAddress');
    const vnpay_img = document.querySelector('.vnpay_img');
    const fees = document.querySelectorAll('.fee');
    const total_price = document.querySelector('.total_price');
    const input_address = document.querySelector('input[name="address"]');
    const input_fee= document.querySelector('input[name="fee"]');




    console.log({fullAddress});
    const data_payment = JSON.parse((localStorage.getItem('data_payment')));
    console.log({data_payment});

    fullAddress.textContent  = data_payment.address.replaceAll("\"","");
    input_address.value  = data_payment.address.replaceAll("\"","");
    input_fee.value  =data_payment.fee

    fees.forEach(fee=>{

        fee.textContent = data_payment.fee+" ₫"
    })
  
    vnpay_img.parentElement.href = vnpay_img.parentElement.href +"?fee="+data_payment.fee;

    total_price.textContent = (parseInt(total_price.dataset.price) + parseInt(data_payment.fee))+ " ₫"

 </script>
@endsection