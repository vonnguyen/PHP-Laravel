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
                            <li><a href="{{route('whish')}}">Cart ></a> </li>
                            <li><a href="{{route('infomation')}}">Infomation ></a> </li>
                            <li><a href="{{route('shipping')}}">Shipping ></a> </li>
                            <li><a href="{{route('payment')}}">Payment</a> </li>
                        </ul>
                    </div>

                <div class="border border-2 rounded-lg p-3 mt-4">
                    <p class="flex gap-5 border-b py-2 m-0"><span class="text-gray-500">Contact</span><span
                            class="font-semibold">0123456789</span></p>
                    <p class="flex gap-5 m-0 border-b py-2"><span class="text-gray-500">Ship to</span><span
                            class="font-semibold">VH-VL-BL, Xã Tam Đa, Huyện Phù Cừ, Hưng Yên,vietnam</span></p>
                    <p class="flex  gap-5 py-2 m-0 border-b py-2"><span class="text-gray-500">Method</span><span
                            class="font-semibold">Standard Shipping</span><span>$0.00</span></p>
                    <p class="flex gap-5 py-2 m-0"><span class="text-gray-500">Payment Method</span><span
                            class="font-semibold">Pay after recieve</span></p>
                </div>

                <div class="method">
                    <p class="mt-5 text-xl">Shipping Method</p>
                    <div class="border border-2 rounded-lg p-3 flex justify-between items-center w-full">
                        <p class="m-0 flex gap-3 items-center"><span
                                class="p-[10px] flex justify-center items-center block w-[5px] h-[5px] max-w-[5px] max-h-[5px] bg-blue-600 rounded-full"><span
                                    class="p-[3px] block w-[3px] h-[3px] max-w-[3px] max-h-[3px] rounded-full leading-none bg-white"></span></span><span>
                                Standard Shipping</span></p><span class="font-semibold">$2.00</span>
                    </div>
                </div>

                <div class="step-footer d-flex justify-content-sm-between mt-4">
                    <div class="product-wishlist-cart">
                        <a href="{{route('shipping')}}">
                            <button class="dt-sc-btn">
                                Return to shipping
                            </button>
                        </a>
                    </div>
                    <div class="product-wishlist-cart">
                        {{-- <a href="giohang.html"> --}}
                            <button class="dt-sc-btn">
                                Pay now
                            </button>
                        </a>
                    </div>
                </div>

            </div>

            <div class="col-sm-6">
                <div class="bg-gray-50  p-5 min-h-screen">
                    <div class="listItem flex flex-col gap-3 border-b pb-3">
                        <div class="flex items-center justify-between ">
                            <div class="flex gap-3 items-center">
                                <div class="image w-fit relative "><img
                                        src="https://res.cloudinary.com/dnfe9k4jv/image/upload/v1664859617/wgfc35m2vjobmhwwwwvf.jpg"
                                        class="w-[80px] border rounded-2xl" alt=""><span
                                        class="absolute top-[-8px] p-1 bg-gray-500 rounded-full leading-none  text-white right-[-8px] min-w-[20px] min-h-[20px] max-w-[20px] max-h-[20px] flex justify-center items-center">1</span>
                                </div>
                                <p class="font-semibold">Donec faucibus odio felis thank</p>
                            </div>
                            <p class="flex-end font-semibold">$35.20</p>
                        </div>
                    </div>
                    <div class="subtotal py-3 border-b m-0">
                        <p class="flex justify-between"><span class="text-gray-600">Subtotal</span><span
                                class="font-semibold">$35.20</span></p>
                        <p class="flex justify-between items-center m-0"><span
                                class="text-gray-600">Shipping</span><span class="text-xs">Calculated at next
                                step</span></p>
                    </div>
                    <div class="total py-3">
                        <p class="flex justify-between items-center"><span class="text-xl">Total</span><span
                                class="font-semibold text-3xl">$35.20</span></p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

 @endsection 