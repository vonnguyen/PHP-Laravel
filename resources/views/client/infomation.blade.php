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

                    <div class="contact-info d-flex justify-content-between pb-3 mt-5">
                        <h5 class="fs-3">Contact information</h5>
                        <span>Already have an account? <a href="">Log in</a></span>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control p-3" id="exampleFormControlInput1" placeholder="Email">
                    </div>

                    <div class="address-info pb-4">
                        <h5 class="fs-3">Shipping address</h5>
                        <div class="pb-sm-3 mt-3">
                            <select class="form-select p-3" aria-label="Default select example">
                                <option selected>Viet Nam</option>
                                <option value="1">Tokyo</option>
                                <option value="2">USA</option>
                                <option value="3">China</option>
                            </select>
                        </div>
                        <div class="name-info pb-sm-3">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control p-3" placeholder="First name"
                                        aria-label="First name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control p-3" placeholder="Last name"
                                        aria-label="Last name">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control p-3" id="exampleFormControlInput1"
                                placeholder="Address">
                        </div>

                        <div class="name-info pb-sm-3">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control p-3" placeholder="City"
                                        aria-label="First name">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control p-3" placeholder="Postal code (optional)"
                                        aria-label="Last name">
                                </div>
                            </div>
                        </div>
                        <div class="form-check pb-sm-4">
                            <input class="form-check-input p-md-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Save this information for next time
                            </label>
                        </div>

                        <div class="step-footer d-flex justify-content-sm-between">
                            <div class="product-wishlist-cart">
                                <a href="{{route('whish')}}">
                                    <button class="dt-sc-btn">
                                        Return Cart
                                    </button>
                                </a>
                            </div>
                            <div class="product-wishlist-cart">
                                <a href="{{route('shipping')}}">
                                    <button class="dt-sc-btn">
                                        countinue to shipping
                                    </button>
                                </a>
                            </div>
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

