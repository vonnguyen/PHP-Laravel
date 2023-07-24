<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Zone</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('client') }}/assets/img/logo/logo.png">
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

    <link rel="stylesheet" href="{{ asset('client') }}/assets/base.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/style.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/cart.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/reponsive.css">
    @yield('css')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
</head>

<body>
    <div id="main">
        <!-- Header -->
        <div class="header">

            <div class="img-header">
                <a href="{{ route('home') }}"><img
                        src="{{ asset('client') }}/assets/img/img-header/shoe-logo-new_300x300.webp" alt=""></a>
            </div>

            <div class="menu-header">
                <ul class="subnav-menu">
                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="collection-show"><a href="{{ route('collection') }}">Tất cả sản phẩm<i
                                class="fa-solid fa-chevron-down"></i></a>


                        <div class="collection-show-list">
                            <div class="row">
                                @if (!empty($product))
                                    @foreach ($products as $product)
                                        <div class="col col-3 collection-item">
                                            <img src="{{ $product->image }}" alt="">
                                            <a href="{{ route('product', $product->id) }}">
                                                <button class="collection-btn">
                                                    <span class="name-shoes">{{ $product->name }}</span>
                                                    <span class="cost-shoes">
                                                        <span>$</span>{{ number_format($product->gia, 2) }}</span>
                                                </button>
                                            </a>
                                        </div>
                                    @endforeach
                                @endif


                                {{-- <div class=" col col-3 collection-item">
                                    <img src="{{asset('client')}}/assets/img/img-header/shoe11.webp" alt="">
                                    <a href="{{route('product',$product->id)}}">
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
                                        <a href="{{route('product',$product->id)}}">
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
                                        <a href="{{route('product',$product->id)}}">
                                            <button class="collection-btn">
                                                <span class="name-shoes">Ballet shoe</span>
                                                <span class="cost-shoes">
                                                    <span>$</span>620</span>
                                            </button>
                                        </a>
                                </div> --}}
                            </div>
                        </div>

                    </li>
                    <li><a href="{{ route('shoes') }}">SP mới nhất</a></li>
                    <li><a href="{{ route('boots') }}">SP chính hãng</a></li>
                    {{-- <li><a href="{{ route('boots') }}">Climbing</a></li> --}}
                    <li class="page-show ralative">
                        <a href="{{ route('blog') }}">Liên hệ <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="page-show-list p-2 absolute top-full">
                            <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                            <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('whish') }}">Giỏ hàng</a></li>
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
            {{-- Tìm kiếm sản phẩm --}}
            <div class="icon-header">
                <form action="{{ route('boots') }}" method="GET" class="d-flex search-micro" role="search">
                    @csrf
                    {{-- <input name="keyword" class="form-control me-2" type="search" placeholder="Search"
                        aria-label="Search">
                        <i class="fa-solid fa-microphone"></i> --}}
                    <div class="search-mic" style="position: relative;">
                        <input id="transcript"
                            class="py-2 px-4 h-[44px] outline-none border-1 rounded-3xl w-[300px] rounded-r-none"
                            type="text" name="keyword" placeholder="Tìm kiếm từ khóa" value=""
                            fdprocessedid="uxx3au">
                        <span
                            class="micro absolute top-1/2 -translate-y-1/2 hover:bg-slate-400 rounded-full cursor-pointer hover:text-slate-50 transition-all p-2 text-slate-900 right-0 "><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z">
                                </path>
                            </svg></span>
                            {{-- <span
                            class="cancel-micro absolute top-1/2 -translate-y-1/2 hover:bg-slate-400 rounded-full cursor-pointer hover:text-slate-50 transition-all p-2 text-slate-900 left-0 "><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z">
                                </path>
                            </svg></span> --}}
                    </div>

                    <button class="btn btn-outline-secondary" type="submit"> <i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                {{-- End Tìm kiếm sản phẩm --}}
                <div class="relative ml-4">
                    <span
                        class="absolute top-[-8px] right-0 bg-black p-2 w-[20px] h-[20px] rounded-full flex justify-center items-center text-light">0
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0">
                        </path>
                    </svg>
                </div>
                <span class="icon-user text-2xl relative  ">
                    <span class="info-user">
                        <i class="fa-regular fa-user"></i>
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
                            @endif
                            <li class="fs-5">
                                <span><a href="{{ route('profile') }} ">{{ Auth()->user()->name }}</a></span>
                            <li class="fs-5">
                                <a href="{{ route('order') }}">
                                    Đơn hàng
                                </a>
                            </li>
                            <a class="fs-5" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Đăng xuất
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
                        if (getCart()) {
                            foreach (getCart() as $item) {
                                $number += (int) $item->number;
                            }
                        }
                    @endphp
                    <span class="icon-number w-[25px]  h-[25px] p-2 flex justify-center items-center">
                        {{ $number }}
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

                                <img src="{{ asset('client') }}/assets/img/footer/logo.webp" alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="item">

                                <input type="text" id="search" class="form-control"
                                    placeholder="Your email address">
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
                        <div class="col-md-4">
                            <div class="footer-list">
                                <div class="footer-title">KẾT NỐI VỚI CHÚNG TÔI</div>
                                <ul>
                                    <li><i class="fa-solid fa-house-chimney-user"></i>
                                        <span>ĐHCT, Xuân Khánh, Ninh Kiều, Cần Thơ</span>
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

                        <div class="col-md-4">
                            <div class="footer-list">
                                <div class="footer-title">CÁC CHÍNH SÁCH</div>
                                <ul>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Chính sách bảo mật của ShoeZone</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Chính sách bảo hành của ShoeZone</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Chính sách đổi trả hoàn tiền của ShoeZone</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Phương thức thanh toán của ShoeZone</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Help & FAQs</a></span>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="footer-list">
                                <div class="footer-title">HỖ TRỢ KHÁCH HÀNG</div>
                                <ul>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Giới thiệu</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Liên hệ</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Tác giả</a></span>
                                    </li>
                                    <li><i class="fa-solid fa-angle-right"></i>
                                        <span><a href="">Google News Tyhisneaker.com</a></span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-angle-right"></i>
                                        <span>Mua hàng: 
                                            <strong>
                                                <a href="tel:+84969400633">0969400633</a>
                                                </strong> (7h30-22h)

                                        </span>
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
                        <p><i class="fa-regular fa-copyright"></i>2023 Shoes <a href="">Design Von Nguyen</a>
                        </p>
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
                        <h4>Giỏ hàng của bạn</h4>
                    </div>
                </div>

                <div class="container-cart">
                    <!-- Them san pham vao -->
                    @php
                        $sum = 0;
                    @endphp
                    @if (getCart())
                        @foreach (getCart() as $item)
                            @php
                                $sum += $item->total;
                            @endphp
                            <div class="product-cart">
                                <span data-id="{{ $item->id }}" data-url="{{ route('cart.delete') }}"
                                    class="close-item">x</span>
                                <div class="item-img-cart">
                                    <img src="{{ $item->image }}" alt="">
                                </div>
                                <div class="detais-cart">
                                    <h6>{{ $item->name }}</h6>
                                    <p>Color: {{$item->color}}  / Size: {{$item->size}}</p>
                                    <span>{{ $item->gia }} ₫</span>
                                    <div class="dt-sc-cart">
                                        <span data-url="{{ route('cart.add') }}" data-id="{{ $item->id }}"
                                            class="up-down decre">-</span>
                                        <input type="text" value="{{ $item->number }}">
                                        <span data-url="{{ route('cart.add') }}" data-id="{{ $item->id }}"
                                            class="up-down incre">+</span>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    @endif
                </div>

                <div class="bottom-cart">
                    <div class="sub-total">
                        <div class="p-title">Tổng cộng</div>
                        <span class="money"><span class="sumMoney">{{ $sum }}</span>₫</span>
                    </div>
                    <div class="p-main">
                        Vận chuyển, thuế và chiết khấu sẽ được tính khi thanh toán.
                    </div>
                    <div class="btn-cart">
                        <a class="block w-full" href="{{ route('infomation') }}">
                            <button>THANH TOÁN</button>
                        </a>
                    </div>
                    <div class="btn-cart">
                        <a class="block w-full" href="{{ route('whish') }}">
                            <button>XEM GIỎ HÀNG</button>
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <!------------------------------------ End-Cart------------------------------------------------------------->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script>
            AOS.init();
        </script>

        <!--jQuery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!--Plugin JavaScript file-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.1/toastr.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
        <script src="{{ asset('client/js') }}/main.js"></script>
        <script src="{{ asset('client/js') }}/cart.js"></script>
        <script>
            let SpeechRecognition =
                window.SpeechRecognition || window.webkitSpeechRecognition,
                recognition,
                recording = false;
            const recordBtn = document.querySelector('.micro')
            const cancel_micro = document.querySelector('.cancel-micro')
            const search_micro = document.querySelector('.search-micro')

            
            const result = document.querySelector('#transcript')
            function speechToText() {
                try {
                    recognition = new SpeechRecognition();
                    recognition.lang ='vi';
                    recognition.interimResults = true;
                    recordBtn.classList.add("recording");
                    // recordBtn.querySelector("p").innerHTML = "Listening...";
                    recognition.start();
                    recognition.onresult = (event) => {
                        const speechResult = event.results[0][0].transcript;
                        //detect when intrim results
                        if (event.results[0].isFinal) {
                            result.value = " " + speechResult;
                            search_micro.submit();
                        } else {
                            //creative p with class interim if not already there
                            // if (!document.querySelector(".interim")) {
                            //     const interim = document.createElement("p");
                            //     interim.classList.add("interim");
                            //     result.appendChild(interim);
                            // }
                            // //update the interim p with the speech result
                            // document.querySelector(".interim").innerHTML = " " + speechResult;
                        }
                        // downloadBtn?.disabled = false;
                    };
                    recognition.onspeechend = () => {
                        speechToText();
                    };
                    recognition.onerror = (event) => {
                        console.log(event);
                        stopRecording();
                        if (event.error === "no-speech") {
                            alert("No speech was detected. Stopping...");
                        } else if (event.error === "audio-capture") {
                            alert(
                                "No microphone was found. Ensure that a microphone is installed."
                            );
                        } else if (event.error === "not-allowed") {
                            alert("Permission to use microphone is blocked.");
                        } else if (event.error === "aborted") {
                            alert("Listening Stopped.");
                        } else {
                            alert("Error occurred in recognition: " + event.error);
                        }
                    };
                } catch (error) {
                    recording = false;

                    console.log(error);
                }
            }
            recordBtn.addEventListener("click", () => {
                console.log('micro');
                if (!recording) {
                    speechToText();
                    recording = true;
                } else {
                    stopRecording();
                }
            });

            function stopRecording() {
                recognition.stop();
                recordBtn.classList.remove("recording");
                recording = false;
            }
            cancel_micro?.addEventListener("click", () => {
                console.log('cancel micro');
                if (!recording) {
                    speechToText();
                    recording = true;
                } else {
                    stopRecording();
                }
            });
        </script>
         <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
        {{-- <script src="./responesive.js"></script> --}}
        @yield('js')

</body>

</html>
