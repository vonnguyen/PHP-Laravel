@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('client') }}/assets/product.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/login.css">
@endsection

@section('content')
    <div class="pt-[110px]">
        <div class="slide-header">
            <div class="contain-slide">
                <p>CHUYÊN MỤC: BLOG</p>
                <ul>
                    <li><a href="{{ route('home') }}">Trang chủ</a> </li>
                    <li>/</li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Contain -->

    <div class="container ctn-about">
        <div class="row">
            <div class="col-9">
                <div class="container-123">

                    <div class="container-1 img-blog">
                        <img src="{{ asset('client') }}/assets/img/img-Pages-blog/nike-am-duong-1536x768.png"
                            alt="">
                        <div class="dt-sc-blog-content">
                            <div class="list-icon-blog">
                                <ul>
                                    <li><i class="fa-solid fa-circle-user"></i>
                                        <span>Von Nguyen</span>
                                    </li>
                                    <li><i class="fa-solid fa-calendar-days"></i>
                                        <span>1/8/2023</span>
                                    </li>
                                    <li><i class="fa-solid fa-comments"></i>
                                        <span>Bình luận</span>
                                    </li>
                                </ul>
                                <a href="#">Phối đồ với Giày Nike Air Force 1 Low Brooklyn Cream – Giày Nike âm
                                    Dương</a>
                                <div class="blog-ctn1">
                                    <span>Giày Nike Air Force 1 Low Brooklyn Cream – Giày Nike âm Dương là cái tên đã gây
                                        chấn động cộng đồng sneakerheads trên toàn thế giới và cả Việt Nam cũng không ngoại
                                        lệ. Đôi giày Nike AF1 mới này nổi bật với phần kiểu…
                                    </span>
                                </div>
                                <div class="btn-blog-ctn1">
                                    <a href=""><button>
                                            Đọc Thêm
                                        </button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-1 img-blog">
                        <img src="{{ asset('client') }}/assets/img/img-Pages-blog/anh-2.webp" alt="">
                        <div class="dt-sc-blog-content">
                            <div class="list-icon-blog">
                                <ul>
                                    <li><i class="fa-solid fa-circle-user"></i>
                                        <span>Von Nguyen</span>
                                    </li>
                                    <li><i class="fa-solid fa-calendar-days"></i>
                                        <span>1/8/2023</span>
                                    </li>
                                    <li><i class="fa-solid fa-comments"></i>
                                        <span>Bình luận</span>
                                    </li>
                                </ul>
                                <a href="#">Phối đồ với giày Converse Run Star Hike cá tính phong cách thời trang</a>
                                <div class="blog-ctn1">
                                    <span>Converse Run Star Hike là cái tên đã gây chấn động cộng đồng sneakerheads trên
                                        toàn thế giới và cả Việt Nam cũng không ngoại lệ. Đôi giày Converse mới này nổi bật
                                        với phần kiểu dáng vô cùng độc đáo, đế giày đặc biệt giúp…
                                    </span>
                                </div>
                                <div class="btn-blog-ctn1">
                                    <a href=""><button>
                                            Đọc Thêm
                                        </button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-1 img-blog">
                        <img src="{{ asset('client') }}/assets/img/img-Pages-blog/giay-adidas-prophere-co-gia-bao-nhieu-va-nhung-cach-phoi-do-thoi-trang.png" alt="">
                        <div class="dt-sc-blog-content">
                            <div class="list-icon-blog">
                                <ul>
                                    <li><i class="fa-solid fa-circle-user"></i>
                                        <span>Von Nguyen</span>
                                    </li>
                                    <li><i class="fa-solid fa-calendar-days"></i>
                                        <span>1/8/2023</span>
                                    </li>
                                    <li><i class="fa-solid fa-comments"></i>
                                        <span>Bình luận</span>
                                    </li>
                                </ul>
                                <a href="#">Giày Adidas Prophere có giá bao nhiêu và cách phối đồ thời trang</a>
                                <div class="blog-ctn1">
                                    <span>Tuy là Adidas là thương hiệu thời trang thể thao có giá thành khá là mềm so với
                                        chất lượng của sản phẩm nhưng không phải ai cũng có đủ điều kiện để mua hàng chính
                                        hãng đúng không nào. Nhưng bạn đừng lo lắng vì…
                                    </span>
                                </div>
                                <div class="btn-blog-ctn1">
                                    <a href=""><button>
                                            Đọc Thêm
                                        </button></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="nav-ctn-blog">
                        <ul>
                            <li>
                                <a href=""> <i class="fa-solid fa-angle-left"></i></a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li>
                                <a href=""><i class="fa-solid fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
            <div class="col-3">
                <div class="sidebar-blog">
                    <div class="recent-blog">
                        <p> Bài viết gần đây</p>
                        <div class="img-sidebar">
                            <div class="img">
                                <div class="item-sidebar">
                                    <img src="{{ asset('client') }}/assets/img/img-Pages-blog/nike-am-duong-1536x768.png"
                                        alt="">
                                </div>
                                <a href=""><span>Phối đồ với Giày Nike Air Force 1 Low Brooklyn Cream – Giày Nike âm
                                        Dương
                                    </span></a>
                            </div>
                        </div>
                        <div class="img-sidebar">

                            <div class="img">
                                <div class="item-sidebar">
                                    <img src="{{ asset('client') }}/assets/img/img-Pages-blog/anh-2.webp" alt="">
                                </div>
                                <a href=""><span>Phối đồ với giày Converse Run Star Hike cá tính phong cách thời
                                        trang
                                    </span></a>
                            </div>
                        </div>
                        <div class="img-sidebar">

                            <div class="img">
                                <div class="item-sidebar">
                                    <img src="{{ asset('client') }}/assets/img/img-Pages-blog/giay-adidas-prophere-co-gia-bao-nhieu-va-nhung-cach-phoi-do-thoi-trang.png" alt="">
                                </div>
                                <a href=""><span>Giày Adidas Prophere có giá bao nhiêu và cách phối đồ thời trang
                                    </span></a>
                            </div>
                        </div>
                        {{-- <p> Tags</p>
                        <div class="list-tags">
                            <ul>
                                <li><a href="">Dancing</a></li>
                                <li><a href="">Heel</a></li>
                                <li><a href="">Hiking</a></li>
                                <li><a href="">Racing</a></li>
                                <li><a href="">Trekking</a></li>
                            </ul>
                        </div> --}}

                        <p>Xem nhiều nhất</p>
                        <div class="img-ctn3">
                            <div class="groups-img">
                                <img src="{{ asset('client') }}/assets/img/img-ctn3/shoe12_968efbaa-1956-4621-93d2-1f1f8fdc3d11_600x.webp"
                                    alt="">
                                <img src="{{ asset('client') }}/assets/img/img-ctn2/collection3_large.webp" alt="">
                            </div>
                            <div class="icon-ctn3">
                                <a href=""><i class="fa-solid fa-message"></i></a>
                                <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                            </div>
                        </div>

                        <div class="name-shoe-ctn3">
                            <h1> <a href="#">ROGER DUBUIS</a> </h1>
                            <div class="cost-ctn3">
                                <h2>$478.00</h2>
                            </div>
                            <div class="icon-ctn3">
                                <div class="icon-start">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star">
                                    </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div>
                                <div class="bag-ctn3"><i class="fa-solid fa-bag-shopping"></i></div>

                            </div>
                        </div>
                        <div class="item-blog">
                            <span><i class="fa-solid fa-chevron-left"></i></span>
                            <span><i class="fa-solid fa-chevron-right"></i></span>
                        </div>

                    </div>






                </div>
            </div>
        </div>




    </div>
@endsection
