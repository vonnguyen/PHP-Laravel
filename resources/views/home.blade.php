@extends('layouts.app')

@section('content')
    <!-- Contain -->
    <div class="contain-about">
        <div class="contain">

            <div class="contain-1">

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">

                        <div class="carousel-item active slide-1">
                            <img src="{{ asset('client') }}/assets/img/img-container/shoe7.webp" class="d-block w-100"
                                alt="...">
                            <div class="contain-1-text">
                                <h1 class="title">ZEN VIVID 15</h1>
                                <p>The best sellers from $99.00</p>
                                <button class="contain-btn">SHOP NOW</button>
                            </div>
                        </div>


                        <div class="carousel-item slide-2">
                            <img src="{{ asset('client') }}/assets/img/img-header/2021-10-16.webp" class="d-block w-100"
                                alt="...">
                            <div class="contain-2-text">
                                <h2 class="title">STARTS FROM </h2>
                                <p>$745.00</p>
                                <button class="contain-btn">VIEW COLLECTION</button>
                            </div>
                        </div>
                        <div class="carousel-item slide-3">
                            <img src="{{ asset('client') }}/assets/img/img-header/shoe9.webp" class="d-block w-100"
                                alt="...">
                            <div class="contain-3-text">
                                <p>summer canvas</p>
                                <h2 class="title">FROM THE SUMMER</h2>
                                <p>
                                    Ullamcorper eget nulla facilisi etiam dignissim. Quis eleifend quam adipiscing
                                    vitae proin sagittis nisl rhoncus mattis. Scelerisque eu ultrices
                                </p>
                                <button class="contain-btn">SHOP NOW</button>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div>

        </div>

    </div>
    <div class="container-fluid">
        <div class="contain-2">
            <div class="row align-self-stretch d-flex">
                <div class="col-md-6 four-pictuer slide-picture" data-aos-duration="1000" data-aos="fade-right">
                    <div class="row gy-3">
                        <div class="col-sm-6">
                            <div class="product">
                                <div class="ctn2-img"><img
                                        src="{{ asset('client') }}/assets/img/img-ctn2/collection3_large.webp"
                                        alt="">
                                </div>
                                <p class="picture">GYM SNEACKERS</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product">
                                <div class="ctn2-img"><img
                                        src="{{ asset('client') }}/assets/img/img-ctn2/collection2_6fd1e403-7021-427d-8be1-8bf857c8aacf_large.webp"
                                        alt=""></div>
                                <p class="picture">WORKING BOOT</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product">
                                <div class="ctn2-img"><img
                                        src="{{ asset('client') }}/assets/img/img-ctn2/collection4_1d1d931a-3265-4eae-ac45-7e8a9cb3702e_large.webp"
                                        alt=""></div>
                                <p class="picture">CHUKKAS</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product">
                                <div class="ctn2-img"><img
                                        src="{{ asset('client') }}/assets/img/img-ctn2/collection5_47277ffa-efcf-413d-a764-b4b5be9e4e99_large.webp"
                                        alt=""></div>
                                <p class="picture">HIKING BOOTS</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 slide-picture" data-aos-duration="1000" data-aos="fade-left">
                    <div class="ctn2-js-picture">
                        <div class="picture-2">


                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active slide-1">
                                        <img src="{{ asset('client') }}/assets/img/img-ctn2/Shoe_2.webp"
                                            class="d-block w-100" alt="...">
                                        <div class="background-title">
                                            <div class="cnt2-text">
                                                <h2> SNEEK PEEK</h2>
                                                <p>SPORT EDITOIN*</p>
                                                <P>*DISCOUNT AVAILABLE</P>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{ asset('client') }}/assets/img/img-ctn2/Shoe_3.webp"
                                            class="d-block w-100" alt="...">
                                        <div class="background-title">
                                            <div class="cnt2-text">
                                                <h2> SIGNS</h2>
                                                <p>MAKE THIS SEASON YOURS*</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="carousel-item ">
                                        <img src="{{ asset('client') }}/assets/img/img-ctn2/shoe_1.jpg"
                                            class="d-block w-100" alt="...">
                                        <div class="background-title">
                                            <div class="cnt2-text title-slide">
                                                <h2>COSMOS STORES</h2>
                                                <p>MAKE THIS SEASON YOURS*</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="contain-3">
                <div class="head-cnt3">
                    <div class="title-ctn3" data-aos="fade-up-right">
                        <h1>NEW ARRIVALS </h1>
                        <p>Just in now</p>
                    </div>
                    <div class="icon-ctn3">
                        <span><i class="fa-solid fa-chevron-left"></i></span>
                        <span><i class="fa-solid fa-chevron-right"></i></span>
                    </div>

                </div>

                <div class="about-ctn3">

                    <div class="row">
                        @if ($newThreeProduct->count() > 0)
                            @foreach ($newThreeProduct as $product)
                                <div class="col-md-4 picture-3" data-aos-duration="500" data-aos="fade-up-right">
                                    <div class="item h-full">

                                        <div class="img-ctn3 h-3/5">
                                            <div class="groups-img h-full">
                                                <img class="w-full h-full object-cover" src="{{ $product->image }}"
                                                    alt="">
                                                <img class="w-full h-full object-cover"
                                                    src="{{ asset('client') }}/assets/img/img-ctn3/shoe12_968efbaa-1956-4621-93d2-1f1f8fdc3d11_600x.webp"
                                                    alt="">
                                            </div>
                                            <div class="icon-ctn3">
                                                <a href=""><i class="fa-solid fa-message"></i></a>
                                                <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                            </div>
                                        </div>
                                        <div class="name-shoe-ctn3 h-2/5 mt-4">
                                            <h1> <a href="{{route('product',$product->id)}}">{{ $product->name}}</a> </h1>
                                            <div class="cost-ctn3">
                                                <h2> <span>$</span> {{number_format($product->gia,2)}}</h2>
                                            </div>
                                            <div class="icon-ctn3">
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

            <div class="contain-4">
                <div class="title-cnt4">

                    <p>THE SEASON BEGINGS</p>
                    <h3>PROMOTION <span class="red">SALE OFF 50%</span> </h3>
                    <div class="btn-ctn4">
                        <a href=""><button>SHOP NOW</button></a>
                        <span>HURRY</span>
                        <p>BEFORE OFFER ENDS</p>

                    </div>

                </div>
            </div>

            <div class="contain-5">
                <div class="header-ctn5">

                    <div class="tilte-ctn5">
                        <h4>BEST SELLERS</h4>
                        <p>Just in Now</p>
                    </div>
                    <div class="list-ctn5">
                        <ul>
                            <li><a href="">ALL</a></li>
                            <li><a href="">SALE</a></li>
                            <li><a href="">BEST</a></li>
                            <li><a href="">NEW</a></li>
                        </ul>
                    </div>

                </div>

                <div class="about-ctn3">
                    <div class="container-fluid">
                        <div class="row">
                            @if ($newSixProduct->count() > 0)
                                @foreach ($newSixProduct as $product)
                                    <div class="col-md-6 picture-3" data-aos-duration="400" data-aos="fade-right"
                                        data-aos-delay="200" data-aos-anchor-placement="center-bottom">
                                        <div class="item h-full">

                                            <div class="img-ctn3 h-3/4">
                                                <div class="groups-img h-full">
                                                    <img class="h-full w-full object-cover" src="{{ $product->image }}"
                                                        alt="">
                                                    <img class="h-full w-full object-cover" src="{{ asset('client') }}/assets/img/img-ctn5/shoe27.webp"
                                                        alt="">
                                                </div>
                                                <div class="icon-ctn3">
                                                    <a href=""><i class="fa-solid fa-message"></i></a>
                                                    <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                                    <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                                </div>
                                            </div>
                                            <div class="name-shoe-ctn3 h-1/4 mt-4">
                                                <h1> <a href="{{route('product',$product->id)}}">{{ $product->name }}</a> </h1>
                                                <div class="cost-ctn3">
                                                    <h2> <span>$</span>{{number_format($product->gia,2)}}</h2>
                                                </div>
                                                <div class="icon-ctn3">
                                                    <div class="icon-start">
                                                        <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                            class="fa-solid fa-star">
                                                        </i><i class="fa-solid fa-star"></i><i
                                                            class="fa-solid fa-star"></i>
                                                    </div>
                                                    <<div class="bag-ctn3" data-urlremove="{{route('cart.delete')}}"
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

            </div>

            <div class="contain-6">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-3 group-icon-ctn6">
                            <i class="fa-solid fa-plane-departure"></i>
                            <p>Free
                                Delivery</p>
                        </div>
                        <div class="col-md-3 group-icon-ctn6">
                            <i class="fa-solid fa-headphones"></i>
                            <p>Clients
                                Discounts</p>
                        </div>
                        <div class="col-md-3 group-icon-ctn6">
                            <i class="fa-solid fa-right-left"></i>
                            <p>Return of goods</p>

                        </div>
                        <div class="col-md-3 group-icon-ctn6">
                            <i class="fa-brands fa-bandcamp"></i>
                            <p>Many
                                Brands</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
