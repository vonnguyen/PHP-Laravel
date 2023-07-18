@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('client') }}/assets/product.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="pt-[110px]">

        <div class="slide-header">
            <div class="contain-slide">
                <p class="mb-3">PRODUCT</p>
                <ul>
                    <li><a href="{{ route('home') }}">All</a> </li>
                    <li>/</li>
                    <li>{{ $product->name }}</li>
                </ul>
            </div>
        </div>

        <!-- Contain -->

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ $product->image }}">
                </div>
                <div class="col-md-6">
                    <h3 class="title-heading">{{ $product->name }}</h3>
                    <div class="container-info">
                        <div class="info-detail">
                            <span class="info-title">Price:</span>
                            <div class="money">
                                <span>$</span>
                                <span>{{ number_format($product->gia, 2) }}</span>
                            </div>

                        </div>
                        <div class="info-detail">
                            <span class="info-title">Size:</span>
                            <div class="info-border">
                                <span>7</span>
                                <span>7.5</span>
                                <span>8</span>
                            </div>

                        </div>
                        <div class="info-detail">
                            <span class="info-title">Color:</span>
                            <div class="info-border">
                                <span><img src="{{ asset('client') }}/assets/img/img-ctn3/shoe15_720x.webp"
                                        alt=""></span>
                                <span><img src="{{ asset('client') }}/assets/img/img-ctn5/shoe-red.webp"
                                        alt=""></span>
                                <span><img src="{{ asset('client') }}/assets/img/img-ctn5/shoe20_600x.webp"
                                        alt=""></span>
                            </div>

                        </div>
                        {{-- <div class="info-detail">
                            <span class="info-title">Material:</span>
                            <div class="info-border__material">
                                <span>Leather</span>
                                <span>Plastics</span>
                                <span>Leather</span>
                            </div>

                        </div> --}}
                        {{-- <div class="info-detail">
                            <span class="info-title">Vendor:</span>
                            <div>
                                <a href=""><span>Geox</span></a>
                            </div>
                        </div> --}}
                        <div class="info-detail">
                            <span class="info-title">Type:</span>
                            <div>
                                <span>Shoes</span>
                            </div>
                        </div>
                        <div class="info-detail">
                            <span class="info-title">Availability:</span>

                            <span style="color: #4f8a10 ;">In stock!</span>

                        </div>
                        <div class="info-detail">
                            <span class="info-title">Quantity:</span>
                            <div class="info-border quantity">
                                <span class="iconMinus">-</span>
                                <span class="number_detail">1</span>
                                <span class="iconAdd">+</span>
                            </div>

                        </div>

                        <div class="btn-detail">
                            <button><span class="detail_add" data-remove="{{route('cart.delete')}}" data-id="{{$product->id}}" data-url="{{route('cart.add')}}" >ADD TO CART</span></button>
                            <button> <a href="{{route('infomation')}}"><span>BUY IT NOW</span></a> </button>
                        </div>

                        <div class="btn-detail">
                            <button><a href="{{ route('whish')}} "><span>VIEW MY WISHLIST</span></a></button>
                        </div>




                    </div>
                </div>

            </div>

            <div class="heading-title">
                <div class="btn-heading-title">
                    <button class="active change_title"  >Product Description</button>
                    <button class="change_title" >Comments</button>
                </div>
            </div>
            <div class="container-about">

                <div class="container-pd30 active">

                    {{$product->mota}}
                </div>
                <div class="container-pd30 container_comment">
                    <form action="{{route('comment.add')}}" class="comment">
                        @csrf
                        <div class="flex gap-2">

                            <div  id="rateYo"></div> 
                            <span class="number-rate">1.5</span>
                        </div>
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input class="border form-control mt-3"  type="text" name="message" placeholder="comment"  id="">
                            <div class="text-end mt-2">
                                
                                <button onclick="reload()" type="submit" class="btn btn-primary bg-primary p-2">submit</button>
                            </div>
                    </form>



                    <div class="list_comment">
                        @if ($comments)
                            @foreach ($comments as $comment)
                                <div class="flex  shadow justify-between p-3 my-3 rounded-xl">
                                    <div>
                                        <div class="flex gap-3 items-center">

                                            <p><img class="w-[50px] h-[50px] rounded-full" src="{{$comment->user->img}}" alt=""></p>
                                            <p class="font-bold text-xl">{{$comment->user->name}}</p>
                                        </div>
                                     <div class="rateyo2 my-3"
                                             data-rateyo-read-only="true"
                                            data-rateyo-rating="{{$comment->rating}}"
                                            data-rateyo-num-stars="5"
                                            data-rateyo-score="1">
                                    </div>
                                     <div class="message">{{$comment->message}}</div>
                                    </div>

                                     <p>{{$comment->created_at}}</p>
                                 </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

           

            <h6 class="dc-sc-title">Recommended products</h6>

            <div class="about-ctn-product">
                <div class="row">
                    @if ($products->count() > 0)

                    @foreach ($products as $product)
                        
                    <div class="col-3 picture-3" data-aos="zoom-out-right" data-aos-duration="1000">
                        <div class="item h-full">

                            <div class="img-ctn3 h-3/5">
                                <div class="groups-img h-full">
                                    <img class="h-full w-full object-cover" src="{{$product->image}}"
                                        alt="">
                                    <img class="h-full w-full object-cover" src="{{ asset('client') }}/assets/img/img-header/shoe26_de67b47c-8d95-481f-aa85-268cdc309e4e.webp"
                                        alt="">
                                </div>
                                <div class="icon-ctn3">
                                    <a href=""><i class="fa-solid fa-message"></i></a>
                                    <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                    <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                </div>
                            </div>
                            <div class="name-shoe-ctn3 h-2/5 mt-4">
                                <h1> <a href="{{route('product',$product->id)}}" >{{$product->name}}</a> </h1>
                                <div class="cost-ctn3">
                                    <h2><span>$</span>{{number_format($product->gia , 2)}}</h2>
                                </div>
                                <div class="icon-ctn3" >
                                    <div class="icon-start">
                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                            class="fa-solid fa-star">
                                        </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="bag-ctn3" data-urlremove="{{route('cart.delete')}}"
                                        data-url="{{route('cart.add')}}" data-id="{{$product->id}}"><i class="cursor-pointer fa-solid fa-bag-shopping"></i>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    
                    @endif

                </div>
            </div>

        </div>

    <script>
    function reload(){
        window.location.reload();
    }
    </script>
        
    @endsection

    @section('js')
        <script src="{{asset('client/js')}}/comment.js">

          
        </script>
    @endsection