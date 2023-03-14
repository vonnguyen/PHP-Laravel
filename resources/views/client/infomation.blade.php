@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('client') }}/assets/product.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/login.css">
@endsection

@section('content')

    <div class="pt-[110px]">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <div class="navbar mt-5">
                        <ul class="d-flex gap-2 p-0">
                            <li><a href="{{ route('whish') }}">Cart ></a> </li>
                            <li><a href="{{ route('infomation') }}">Infomation ></a> </li>
                            <li><a href="{{ route('shipping') }}">Shipping ></a> </li>
                            <li>Payment </li>
                        </ul>
                    </div>

                    <div class="contact-info d-flex justify-content-between pb-3 mt-5">
                        <h5 class="fs-3">Contact information</h5>
                        <span>Already have an account? <a href="">Log in</a></span>
                    </div>
                    <form action="{{ route('saveinfo') }}" class="getInfo" method="post">

                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control p-3" id="exampleFormControlInput1"
                                readonly value="{{ Auth::user()->email }}">
                        </div>
                        <div class="address-info pb-4">
                            <h5 class="fs-3">Shipping address</h5>
                            <div class="pb-sm-3 mt-3">
                                <select name="country" class="form-select p-3" aria-label="Default select example">
                                    <option selected value="Viet Nam">Viet Nam</option>
                                    <option value="Tokyo">Tokyo</option>
                                    <option value="USA">USA</option>
                                    <option value="China">China</option>
                                </select>
                            </div>
                            <div class="name-info pb-sm-3">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control p-3" name="firstName"
                                            placeholder="First name" aria-label="First name">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control p-3" name="lastName"
                                            placeholder="Last name" aria-label="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="address" class="form-control p-3" id="exampleFormControlInput1"
                                    placeholder="Address">
                            </div>

                            <div class="name-info pb-sm-3">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control p-3" name="city" placeholder="City"
                                            aria-label="">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control p-3" name="phone" placeholder="phone"
                                            aria-label="">
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
                                    <a href="{{ route('whish') }}">
                                        <button class="dt-sc-btn">
                                            Return Cart
                                        </button>
                                    </a>
                                </div>
                                <div class="product-wishlist-cart">
                                    <button type="submit" class="dt-sc-btn">
                                        countinue to shipping
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>

                <div class="col-sm-6">
                    <div class="bg-gray-50  p-5 min-h-screen">
                        <div class="listItem flex flex-col gap-3 border-b pb-3">

                            @php
                                $sum = 0;
                            @endphp
                            @if (session('cart'))
                                @foreach (session('cart') as $item)
                                    @php
                                        $sum += $item->total;
                                    @endphp
                                    <div class="flex items-center justify-between ">
                                        <div class="flex gap-3 items-center">

                                            <div class="image w-fit relative ">
                                                {{-- duong dan anh --}}
                                                <img src="{{ $item['image'] }}" class="w-[80px] border rounded-2xl"
                                                    alt=""><span
                                                    class="absolute top-[-8px] p-1 bg-gray-500 rounded-full leading-none  text-white right-[-8px] min-w-[20px] min-h-[20px] max-w-[20px] max-h-[20px] flex justify-center items-center">{{ $item->number }}</span>
                                            </div>
                                            <p class="font-semibold">{{ $item->name }}</p>
                                        </div>
                                        <p class="flex-end font-semibold"> $ {{ number_format($item->gia, 2) }}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="subtotal py-3 border-b m-0">
                            <p class="flex justify-between"><span class="text-gray-600">Subtotal</span><span
                                    class="font-semibold"> $ {{ number_format($sum, 2) }}</span></p>
                            <p class="flex justify-between items-center m-0"><span
                                    class="text-gray-600">Shipping</span><span class="text-xs">Calculated at next
                                    step</span></p>
                        </div>
                        <div class="py-3">
                            <p class="flex justify-between items-center"><span class="text-xl">Total</span>
                                <span>
                                    <span class="font-semibold text-3xl"> $
                                    </span>
                                    <span class="font-semibold text-3xl total">{{ number_format($sum, 2) }}
                                    </span>
                                </span>

                            </p>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

@endsection


@section('js')
    <script>
        window.addEventListener('load', function(

        ) {


            const img_vnpay = document.querySelector('.vnpay_img');
            const formPayment = document.querySelector('.getInfo')

            formPayment?.addEventListener('submit', function(e) {
                e.preventDefault();
                const firstName = document.querySelector('input[name="firstName"]').value;
                const lastName = document.querySelector('input[name="lastName"]').value;
                const fullname = lastName + ' ' + firstName;
                const phone = document.querySelector('input[name="phone"]').value;
                const email = document.querySelector('input[name="email"]').value;
                const address = document.querySelector('input[name="address"]').value;
                const city = document.querySelector('input[name="city"]').value;
                const total = document.querySelector(".total").textContent;
                console.log(formPayment.getAttribute('action'));


                if (!fullname || !phone || !email || !address || !city || !total) {
                    alert("Thông tin chưa hợp lệ!!!")
                } else {
                    const data_payment = {
                        method: "Vn_pay",
                        fullname,
                        email,
                        phone,
                        address,
                        city,
                        total,
                    }
                    localStorage.setItem('data_payment', JSON.stringify(data_payment));

                    localStorage.setItem('url_payment', JSON.stringify(formPayment.getAttribute('action')));
                    formPayment.submit()

                }



            })



        })
    </script>
@endsection
