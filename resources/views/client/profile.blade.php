@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('client') }}/assets/product.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/login.css">
@endsection


@section('content')
    <div class="pt-[110px]">

        <div class="slide-header ">
            <div class="contain-slide">
                <p>Profile</p>
                <ul>
                    <li><a href="{{ route('home') }}">HOME</a> </li>
                    <li>/</li>
                    <li>Profile</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-5">
            <form action="{{ route('update') }}" method="post" enctype="multipart/form-data">

                @csrf
            <div class="row">
                 <div class="col-4">
                    <div class="">
                        <img style="width:450px; height:450px;border-radius:50%; object-fit: cover; object-position: center; " src="{{ Auth::user()->img }}"alt="">

                    <div class="text-center py-4">
                        <p class="fs-3 mb-2"> Update Avatar</p>
                        <input name="img" type="file">
                    </div>
                    </div>
                    


                </div>
                <div class="col-8">
                    <h2 class="text-center fs-2 fw-bold mb-5"> PROFILE </h2>
                    <div class="address-info pb-4">
                        <div class="name-info pb-sm-3">
                            <div class="row mb-3">
                                <div class="col">
                                    <h2 class="fs-5 mb-3 "> Name</h2>
                                    <input type="text" class="form-control p-3" name="name" placeholder="Name"
                                        value="{{ $user->name }}" aria-label="First name">
                                </div>
                                <div class="col">
                                    <h2 class="fs-5 mb-3 ">Number phone</h2>
                                    <input type="text" class="form-control p-3" name="phone" placeholder="phone"
                                        value="{{ $user->phone }}" aria-label="Last name">
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h2 class="fs-5 mb-3"> Address</h2>
                            <input type="text" name="address" class="form-control p-3" id="exampleFormControlInput1"
                                placeholder="Address" value="{{ $user->address }}">
                        </div>

                        <div class="mb-3">
                            <h2 class="fs-5 mb-3"> Email </h2>
                            <input type="email" class="form-control p-3" id="exampleFormControlInput1" placeholder="Email"
                                value="{{ $user->email }}" readonly>
                        </div>
                    </div>
                    <div class="product-wishlist-cart my-4">
                        <button type="submit" class="dt-sc-btn">
                            Update
                        </button>
                    </div>


                </div>
            </div>
               

            </form>
        </div>
    </div>




    </div>
@endsection
