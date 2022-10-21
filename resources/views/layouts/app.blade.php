<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Zone</title>
    <link rel="icon" type="image/x-icon" href="{{asset('client')}}/assets/img/logo/logo.png">
    <!-- link Icon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- link google font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link get bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--  -->
    <!-- link AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--  -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('client')}}/assets/base.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/style.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/cart.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/reponsive.css">
    @yield('css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div id="main">
        <!-- Header -->
        <div class="header">

            <div class="img-header">
                <a href="{{route('home')}}"><img src="{{asset('client')}}/assets/img/img-header/shoe-logo-new_300x300.webp" alt=""></a>
            </div>

            <div class="menu-header">
                <ul class="subnav-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="collection-show"><a href="{{route('collection')}}">Collection <i
                                class="fa-solid fa-chevron-down"></i></a>


                        <div class="collection-show-list">
                            <div class="row">
                                <div class="col col-3 collection-item">
                                    <img src="{{asset('client')}}/assets/img/img-header/shoe21.webp" alt="">
                                    <a href="{{route('chitietsp')}}">
                                        <button class="collection-btn">
                                            <span class="name-shoes">Ballet shoe</span>
                                            <span class="cost-shoes">
                                                <span>$</span>200</span>
                                        </button>
                                    </a>
                                </div>
                                <div class=" col col-3 collection-item">
                                    <img src="{{asset('client')}}/assets/img/img-header/shoe11.webp" alt="">
                                    <a href="{{route('chitietsp')}}">
                                        <button class="collection-btn">
                                            <span class="name-shoes">Ballet shoe</span>
                                            <span class="cost-shoes">
                                                <span>$</span>532</span>
                                        </button>
                                    </a>
                                </div>
                                <div class=" col col-3 collection-item">
                                    <img src="{{asset('client')}}/assets/img/img-header/shoe22_48464579-a7fe-40ba-ad66-8c6aa7ef2bb1.webp"
                                        alt="">
                                        <a href="{{route('chitietsp')}}">
                                            <button class="collection-btn">
                                                <span class="name-shoes">Ballet shoe</span>
                                                <span class="cost-shoes">
                                                    <span>$</span>300</span>
                                            </button>
                                        </a>
                                </div>
                                <div class=" col col-3 collection-item">
                                    <img src="{{asset('client')}}/assets/img/img-header/shoe26_de67b47c-8d95-481f-aa85-268cdc309e4e.webp"
                                        alt="">
                                        <a href="{{route('chitietsp')}}">
                                            <button class="collection-btn">
                                                <span class="name-shoes">Ballet shoe</span>
                                                <span class="cost-shoes">
                                                    <span>$</span>620</span>
                                            </button>
                                        </a>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li><a href="{{route('shoes')}}">Shoes</a></li>
                    <li><a href="{{route('boots')}}">Boots</a></li>
                    <li><a href="{{route('boots')}}">Climbing</a></li>
                    <li class="page-show ralative">
                        <a href="{{route('blog')}}">Pages <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="page-show-list p-2 absolute top-full">
                            <li><a href="{{route('about')}}">About us</a></li>
                            <li><a href="{{route('contact')}}">Contact us</a></li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('whish')}}">Wishlist</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Mobile Menu -->
            <div class="mobile-menu-btn">
                <i class="fa-solid fa-bars"></i>
                <span class="text-menu"> Menu</span>
            </div>
            <!-- end -->
            <div class="icon-header">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"> <i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                {{-- <span class="icon-search text-xl  ">
                    <input type="text">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span> --}}
                <span class="icon-user text-2xl relative  ">
                    <span class="info-user">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <ul class="w-[200px] bg-white z-[10] absolute p-3 right-0 rounded-lg shadow-lg model-user">
                        @guest  
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Đăng nhập</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Đăng kí</a>
                        </li>
                    @endif


                        @else
                       
                        @if (Auth()->user()->group_id == 1)
                            
                        <li><a href="{{route('admin.trangchu')}}">Admin</a></li>
                        @endif
                        <li>   
                            <a class="" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </li>
                    @endguest
                    </ul>

                </span>
                <span class="icon-cart">
                 @php
						$number = 0;
						if(session('cart')){
							foreach(session('cart') as $item){
								$number += (int)$item['number'];
							}
						}
                @endphp
                    <span class="icon-number w-[25px]  h-[25px] p-2 flex justify-center items-center">
                        {{$number}}
                    </span>
                    <i class="text-2xl fa-solid fa-briefcase"></i>
                </span>
            </div>

        </div>
    @yield('content')
      
        <!-- Footer -->
        <div class="footer">
            <div class="footer-about">

                <div class="footer-header">
                    <div class="row">
                        <div class="col-4">
                            <div class="item">

                                <img src="{{asset('client')}}/assets/img/footer/logo.webp" alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item">

                                <input type="text" id="search" class="form-control" placeholder="Your email address">
                                <button><i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>

                        </div>
                        <div class="col-4 footer-icon">
                            <div class="item">

                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-google-plus-g"></i>
                                <i class="fa-brands fa-tumblr"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-contact">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-list">
                                <div class="footer-title">Contact us</div>
                                <ul>
                                    <li><i class="fa-solid fa-house-chimney-user"></i>
                                        <span>No: 58 A, East Madison Street, Baltimore, MD, USA 4508</span>
                                    </li>
                                    <li><i class="fa-solid fa-phone"></i>
                                        <span>+84 969400633</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-envelope"></i>
                                        <span><a href="">info@example.com</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-list">
                                <div class="footer-title">Info</div>
                                <ul>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Search Term</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Advanced Search</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Oders and Returns</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Consutant</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Help & FAQs</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-list">
                                <div class="footer-title">Help</div>
                                <ul>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">About</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Contact</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Privacy Policy</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Best Sellers</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Support</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-list">
                                <div class="footer-title">Support</div>
                                <ul>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Search Term</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Advanced Search</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Oders and Returns</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Consutant</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Help & FAQs</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="nav-footer">
                    <ul>
                        <li><a href="">Search Terms</a></li>
                        <li><a href="">Advanced Search</a></li>
                        <li><a href="">Oders and Returns</a></li>
                        <li><a href="">Consutant</a></li>
                        <li><a href="">Help & FAQs</a></li>
                    </ul>
                </div>

                <div class="site-footer__bottom">
                    <div class="end-footer">
                        <p><i class="fa-regular fa-copyright"></i>2022 Shoes <a href="">Design Von Nguyen</a></p>
                    </div>
                </div>
            </div>

        </div>


        <!----------------------------------------- Start Cart --------------------------------------------------->
        <div class="main-cart">
            <div class="about-cart">
                <div class="heading-cart">
                    <span class="close"><i class="fa-solid fa-xmark"></i></span>
                    <div class="header-cart">
                        <h4>Your Cart</h4>
                    </div>
                </div>

                <div class="container-cart">
                    <!-- Them san pham vao -->
                  @php
                      $sum = 0;
                  @endphp
                    @if (session('cart'))
                        @foreach (session('cart') as $item)
                        @php
                        $sum += $item->total;
                        @endphp
                        <div class="product-cart">
                            <span data-id="{{$item->id}}" data-url="{{route('cart.delete')}}" class="close-item">x</span>
                            <div class="item-img-cart">
                                <img src="{{$item->image}}" alt="">
                            </div>
                            <div class="detais-cart">
                                <h6>{{$item->name}}</h6>
                                <p>7 / yellow / leather</p>
                                <span>{{$item->gia}}</span>
                                <div class="dt-sc-cart">
                                    <span data-url="{{route('cart.add')}}" data-id="{{$item->id}}" class="up-down decre">-</span>
                                    <input type="text" value="{{$item->number}}">
                                    <span  data-url="{{route('cart.add')}}" data-id="{{$item->id}}" class="up-down incre">+</span>
                                </div>
                            </div>
                    
                        </div>
                        @endforeach
                        
                    @endif
                </div>

                <div class="bottom-cart">
                    <div class="sub-total">
                        <div class="p-title">Total</div>
                        <span class="money">$<span class="sumMoney">{{$sum}}</span></span>
                    </div>
                    <div class="p-main">
                        Shipping, taxes, and discounts will be calculated at checkout.
                    </div>
                    <div class="btn-cart">
                        <button>PRODUCT TO CHECK OUT</button>
                    </div>
                    <div class="btn-cart">
                        <a class="block w-full" href="{{route('whish')}}">
                            <button>VIEW CART</button>
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <!------------------------------------ End-Cart------------------------------------------------------------->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <script>
            AOS.init();
        </script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
        <script src="{{asset('client/js')}}/main.js"></script>
        <script src="{{asset('client/js')}}/cart.js"></script>
        {{-- <script src="./responesive.js"></script> --}}


</body>

</html>