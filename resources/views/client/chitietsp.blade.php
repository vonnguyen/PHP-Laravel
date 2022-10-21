@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('client')}}/assets/product.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/login.css">
@endsection
@section('content')
<div class="pt-[110px]">

        <div class="slide-header">
            <div class="contain-slide">
                <p class="mb-3">PRODUCT</p>
                <ul>
                    <li><a href="{{route('home')}}">All</a> </li>
                    <li>/</li>
                    <li>{{$product->name}}</li>
                </ul>
            </div>
        </div>

        <!-- Contain -->

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{$product->image}}">
                </div>
                <div class="col-md-6">
                    <h3 class="title-heading">{{$product->name}}</h3>
                    <div class="container-info">
                        <div class="info-detail">
                            <span class="info-title">Price:</span>
                            <div class="money">
                                <span>$</span>
                                <span>{{number_format($product->gia , 2)}}</span>
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
                                <span><img src="{{asset('client')}}/assets/img/img-ctn3/shoe15_720x.webp" alt=""></span>
                                <span><img src="{{asset('client')}}/assets/img/img-ctn5/shoe-red.webp" alt=""></span>
                                <span><img src="{{asset('client')}}/assets/img/img-ctn5/shoe20_600x.webp" alt=""></span>
                          </div>
    
                        </div>
                        <div class="info-detail">
                            <span class="info-title">Material:</span>
                            <div class="info-border__material">
                                <span>Leather</span>
                                <span>Plastics</span>
                                <span>Leather</span>
                          </div>
    
                        </div>
                        <div class="info-detail">
                            <span class="info-title">Vendor:</span>
                            <div>
                                <a href=""><span>Geox</span></a>
                            </div>
                        </div>
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
                            <span class="info-title">Size:</span>
                            <div class="info-border quantity">
                                <span>-</span>
                                <span>1</span>
                                <span>+</span>
                            </div>
    
                        </div>
            
                        <div class="btn-detail">
                            <button><span>ADD TO CART</span> </button>
                            <button> <span>BUY IT NOW</span></button>
                        </div>
                        
                        <div class="btn-detail">
                            <button><a href=""><span>ADD TO WISHLIST</span></a></button>
                        </div>
    
                        
                        

                    </div>
                </div>
               
            </div>

            <div class="heading-title">
                <div class="btn-heading-title">
                    <button>Product Description</button>
                    <button>Additional information</button>
                    <button>Reviews</button>
                </div>
            </div>
            <div class="container-about">

                <div class="container-pd30">

                    <p class="contain-text">Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, 
                        elementum etos lobortis des mollis ut risus. 
                        Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.
                        Donec pretium egestas sapien et mollis.
                    </p>
                    <h6 class="title-contain">
                        Lorem ipsum dolor sit amet
                    </h6>
    
                    <p class="contain-text">Sonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <h6 class="title-contain">
                        Busey ipsum dolor sit amet
                    </h6>
    
                    <p class="contain-text">Tortor at auctor urna nunc id cursus metus aliquam. 
                        Odio tempor orci dapibus ultrices. Tortor condimentum lacinia quis vel eros donec ac odio. 
                        Velit euismod in pellentesque massa placerat duis ultricies lacus. Scelerisque purus semper eget duis at tellus at urna condimentum. Eu facilisis sed odio morbi quis commodo odio aenean urpis massa sed elemen. 
                    </p>
                    <h6 class="title-contain">
                        Vestibulum sit amet ipsum
                    </h6>
    
                    <p class="contain-text">Praesent vestibulum congue tellus at fringilla. 
                        Curabitur vitae semper sem, eu convallis est. Cras felis nunc commodo eu convallis vitae interdum non nisl. 
                        Maecenas ac est sit amet augue pharetra convallis nec danos dui. Cras suscipit quam et turpis eleifend vitae malesuada magna congue. 
                        Damus id ullamcorper neque. Sed vitae mi a mi pretium aliquet ac sed elit. Pellentesque nulla eros accumsan quis justo at tincidunt lobortis denimes loremous. 
                        Suspendisse vestibulum lectus in lectus volutpat, ut dapibus purus pulvinar. Vestibulum sit amet auctor ipsum. 
                    </p>

                </div>

            </div>

            <h6 class="dc-sc-title">Recommended products</h6>

            <div class="about-ctn-product">
                <div class="row">
                    <div class="col-3 picture-3" data-aos="zoom-out-right" data-aos-duration= "1000">
                        <div class="item">

                            <div class="img-ctn3">
                                <div class="groups-img">
                                    <img src="{{asset('client')}}/assets/img/img-ctn3/shoe12_968efbaa-1956-4621-93d2-1f1f8fdc3d11_600x.webp"
                                        alt="">
                                    <img src="{{asset('client')}}/assets/img/img-header/shoe26_de67b47c-8d95-481f-aa85-268cdc309e4e.webp"
                                        alt="">
                                </div>
                                <div class="icon-ctn3">
                                    <a href=""><i class="fa-solid fa-message"></i></a>
                                    <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                    <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                </div>
                            </div>
                            <div class="name-shoe-ctn3">
                                <h1> <a href="#">ADIDAS KAMPUNG</a> </h1>
                                <div class="cost-ctn3">
                                    <h2><span>$</span>478.00</h2>
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
                    <div class="col-3 picture-3" data-aos="zoom-out-right" data-aos-duration= "1000">
                        <div class="item">

                            <div class="img-ctn3">
                                <div class="groups-img">
                                    <img src="{{asset('client')}}/assets/img/img-ctn2/shoeyelow.webp" alt="">
                                    <img src="{{asset('client')}}/assets/img/img-ctn2/shoe2_720x.webp" alt="">
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
                                    <div class="bag-ctn3"><a href=""><i
                                                class="fa-solid fa-bag-shopping"></i></a></div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-3 picture-3" data-aos="zoom-out-right" data-aos-duration= "1000">
                        <div class="item">

                            <div class="img-ctn3">
                                <div class="groups-img">
                                    <img src="{{asset('client')}}/assets/img/img-ctn5/shoe20_600x.webp" alt="">
                                    <img src="{{asset('client')}}/assets/img/img-header/shoe21.webp" alt="">
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
                                    <div class="bag-ctn3"><a href=""><i class="fa-solid fa-bag-shopping"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-3 picture-3" data-aos="zoom-out-right" data-aos-duration= "1000">
                        <div class="item">

                            <div class="img-ctn3">
                                <div class="groups-img">
                                    <img src="{{asset('client')}}/assets/img/img-header/shoe26_de67b47c-8d95-481f-aa85-268cdc309e4e.webp"
                                        alt="">
                                    <img src="{{asset('client')}}/assets/img/img-header/shoe22_48464579-a7fe-40ba-ad66-8c6aa7ef2bb1.webp"
                                        alt="">
                                </div>
                                <div class="icon-ctn3">
                                    <a href=""><i class="fa-solid fa-message"></i></a>
                                    <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                    <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                </div>
                            </div>
                            <div class="name-shoe-ctn3">
                                <h1> <a href="#">BLUCHER SHOE</a> </h1>
                                <div class="cost-ctn3">
                                    <h2> <span>$</span> 378.00</h2>
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

                </div>
            </div>

        </div>
@endsection