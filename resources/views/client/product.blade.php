@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('client')}}/assets/product.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/login.css">
@endsection
@section('content')
<div class="pt-[110px]">

    <div class="slide-header ">
        <div class="contain-slide">
            <p>COLLECTION</p>
            <ul>
                <li><a href="{{route('home')}}">HOME</a> </li>
                <li>/</li>
                <li>Product</li>
            </ul>
        </div>
    </div>
</div>

    <!-- Contain -->

    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="collection-header">
                    <div class="collection-view">
                        <i class="fa-solid fa-list"></i>
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    <div class="collection-items-per">
                        <p>Paginate by</p>
                        <select name="" id="">
                            <option value="">9</option>
                            <option value="">12</option>
                            <option value="">14</option>
                            <option value="">16</option>
                        </select>
                    </div>
                    <div class="sortby">
                        <p>Sort by</p>
                        <select name="" id="">
                            <option value="">Featured</option>
                            <option value="">Best selling</option>
                            <option value="">Alphabetically, A-Z</option>
                            <option value="">Alphabetically, Z-A</option>
                        </select>
                    </div>
                </div>

                <div class="about-ctn-product">
                    <div class="row">

                        @if ($products->count() > 0)

                            @foreach ($products as $product)
                                
                            <div class="col-4 picture-3" data-aos="zoom-out-right" data-aos-duration="1000">
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
                        {{-- <div class="col-4 picture-3" data-aos="zoom-out-right" data-aos-duration="1000">
                            <div class="item">

                                <div class="img-ctn3">
                                    <div class="groups-img">
                                        <img src="./assets/img/img-ctn2/shoeyelow.webp" alt="">
                                        <img src="./assets/img/img-ctn2/shoe2_720x.webp" alt="">
                                    </div>
                                    <div class="icon-ctn3">
                                        <a href=""><i class="fa-solid fa-message"></i></a>
                                        <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                        <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                    </div>
                                </div>
                                <div class="name-shoe-ctn3">
                                    <h1> <a href="#">BALLET SHOE</a> </h1>
                                    <div class="cost-ctn3">
                                        <h2><span>$</span> 478.00</h2>
                                    </div>
                                    <div class="icon-ctn3">
                                        <div class="icon-start">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star">
                                            </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="bag-ctn3"><a href=""><i class="fa-solid fa-bag-shopping"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-4 picture-3" data-aos="zoom-out-right" data-aos-duration="1000">
                            <div class="item">

                                <div class="img-ctn3">
                                    <div class="groups-img">
                                        <img src="./assets/img/img-ctn5/shoe20_600x.webp" alt="">
                                        <img src="./assets/img/img-header/shoe21.webp" alt="">
                                    </div>
                                    <div class="icon-ctn3">
                                        <a href=""><i class="fa-solid fa-message"></i></a>
                                        <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                        <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                    </div>
                                </div>
                                <div class="name-shoe-ctn3">
                                    <h1> <a href="#">BAST SHOE</a> </h1>
                                    <div class="cost-ctn3">
                                        <h2><span>$</span> 478.00</h2>
                                    </div>
                                    <div class="icon-ctn3">
                                        <div class="icon-start">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star">
                                            </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                        </div>
                                        <div class="bag-ctn3"><a href=""><i
                                                    class="fa-solid fa-bag-shopping"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div> --}}

                    </div>
                </div>
                <style>
                    .page-item.active .page-link{
                        background-color: #571F7C !important; 
                    }
                    .page-link{
                        width: 50px;
                        height: 50px;
                        display: flex;
                        justify-content: center;
                        align-items: center;

                        padding:8px;
                        font-size: 20px;
                    }
                </style>
                <div class="flex justify-center my-5">


                    {{ $products->links() }}
                </div>


           

            </div>
            <div class="col-3">
                <div class="sidebar-product" data-aos="zoom-out-left" data-aos-duration="1000">
                    <div class="recent-product">
                        <p> Availability </p>

                        <div class="check-product">
                            <span class="check-box"></span>
                            <a href=""><span>In stock</span>
                                <span class="span-number">(27)</span></a>
                        </div>

                        <div class="check-product">
                            <span class="check-box"></span>
                            <a href=""><span>Out of stock</span>
                                <span class="span-number">(2)</span></a>
                        </div>

                        <div class="btn-availibility">
                            <a href="#">
                                <button>
                                    <span>CLEAR</span>
                                </button>
                            </a>
                            <a href="#">
                                <button>
                                    <span>APPLY</span>
                                </button>
                            </a>

                        </div>


                        <p>Price</p>
                        <div class="list-tags">
                            <h5>
                                The highest price is <span class="money"><span>$</span>900.00</span> Rest
                            </h5>
                            <div class="cost-product">
                                <h6>From $</h6>
                                <input class="border"  type="number" value="1">
                            </div>
                            <div class="cost-product">
                                <h6>To $</h6>
                                <input class="border" type="number" value="1000">
                            </div>
                        </div>

                        <div class="btn-availibility">
                            <a href="#">
                                <button>
                                    <span>CLEAR</span>
                                </button>
                            </a>
                            <a href="#">
                                <button>
                                    <span>APPLY</span>
                                </button>
                            </a>
                        </div>

                        <div class="btn-availibility-clearall">
                            <a href="#">
                                <button>
                                    CLEAR ALL
                                </button>
                            </a>
                        </div>

                        <p>Hot Deals</p>
                        <div class="img-ctn3">
                            <img src="./assets/img/slide-header/breadcrumb-4.webp" alt="">
                        </div>
                        <div class="btn-shop-now">
                            <a href="{{route('collection')}}">
                                <button>
                                    SHOP NOW
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection
