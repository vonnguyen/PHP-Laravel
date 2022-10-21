@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('client')}}/assets/product.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/login.css">
@endsection

@section('content')
    <div class="pt-[110px]">
        <div class="slide-header">
            <div class="contain-slide">
                <p>NEW</p>
                <ul>
                    <li><a href="{{route('home')}}">HOME</a> </li>
                    <li>/</li>
                    <li>New</li>
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
                            <img src="{{asset('client')}}/assets/img/img-Pages-blog/anh 1.webp" alt="">
                            <div class="dt-sc-blog-content">
                                <div class="list-icon-blog">
                                    <ul>
                                        <li><i class="fa-solid fa-circle-user"></i>
                                            <span>By Ram M</span>
                                        </li>
                                        <li><i class="fa-solid fa-calendar-days"></i>
                                            <span>May 10, 2022</span>
                                        </li>
                                        <li><i class="fa-solid fa-comments"></i>
                                            <span>5 Comments</span>
                                        </li>
                                    </ul>
                                    <a href="#">25 km cross country cycling using All Terrain Cycles</a>
                                    <div class="blog-ctn1">
                                        <span>Sers sed aliquam nisi quis porttitor congue, elit erat euismod orci, ac
                                            placerat
                                            dolor lectus quis orci.
                                            Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed...
                                        </span>
                                    </div>
                                    <div class="btn-blog-ctn1">
                                        <a href=""><button>
                                                READ MORE
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-1 img-blog">
                            <img src="{{asset('client')}}/assets/img/img-Pages-blog/anh-2.webp" alt="">
                            <div class="dt-sc-blog-content">
                                <div class="list-icon-blog">
                                    <ul>
                                        <li><i class="fa-solid fa-circle-user"></i>
                                            <span>By Ram M</span>
                                        </li>
                                        <li><i class="fa-solid fa-calendar-days"></i>
                                            <span>May 10, 2022</span>
                                        </li>
                                        <li><i class="fa-solid fa-comments"></i>
                                            <span>5 Comments</span>
                                        </li>
                                    </ul>
                                    <a href="#">Decathlon training routine</a>
                                    <div class="blog-ctn1">
                                        <span>Disu sed aliquam nisi quis porttitor congue, elit erat euismod orci, ac
                                            placerat
                                            dolor lectus quis orci.
                                            Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed...
                                        </span>
                                    </div>
                                    <div class="btn-blog-ctn1">
                                        <a href=""><button>
                                                READ MORE
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-1 img-blog">
                            <img src="{{asset('client')}}/assets/img/img-Pages-blog/anh-3.webp" alt="">
                            <div class="dt-sc-blog-content">
                                <div class="list-icon-blog">
                                    <ul>
                                        <li><i class="fa-solid fa-circle-user"></i>
                                            <span>By Ram M</span>
                                        </li>
                                        <li><i class="fa-solid fa-calendar-days"></i>
                                            <span>May 10, 2022</span>
                                        </li>
                                        <li><i class="fa-solid fa-comments"></i>
                                            <span>5 Comments</span>
                                        </li>
                                    </ul>
                                    <a href="#">Obstacle course racing on Huge Shoes</a>
                                    <div class="blog-ctn1">
                                        <span>Veus sed aliquam nisi quis porttitor congue, elit erat euismod orci, ac
                                            placerat
                                            dolor lectus quis orci.
                                            Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum...
                                        </span>
                                    </div>
                                    <div class="btn-blog-ctn1">
                                        <a href=""><button>
                                                READ MORE
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
                            <p> Recent Articles</p>
                            <div class="img-sidebar">
                                <div class="img">
                                    <div class="item-sidebar">
                                        <img src="{{asset('client')}}/assets/img/img-Pages-blog/anh 1.webp" alt="">
                                    </div>
                                    <a href=""><span>25 km cross country cycling using All Terrain Cycles</span></a>
                                </div>
                            </div>
                            <div class="img-sidebar">

                                <div class="img">
                                    <div class="item-sidebar">
                                        <img src="{{asset('client')}}/assets/img/img-Pages-blog/anh-2.webp" alt="">
                                    </div>
                                    <a href=""><span>Decathlon training routine</span></a>
                                </div>
                            </div>
                            <p> Tags</p>
                            <div class="list-tags">
                                <ul>
                                    <li><a href="">Dancing</a></li>
                                    <li><a href="">Heel</a></li>
                                    <li><a href="">Hiking</a></li>
                                    <li><a href="">Racing</a></li>
                                    <li><a href="">Trekking</a></li>
                                </ul>
                            </div>

                            <p>Best Shoes</p>
                            <div class="img-ctn3">
                                <div class="groups-img">
                                    <img src="{{asset('client')}}/assets/img/img-ctn3/shoe12_968efbaa-1956-4621-93d2-1f1f8fdc3d11_600x.webp"
                                        alt="">
                                    <img src="{{asset('client')}}/assets/img/img-ctn2/collection3_large.webp" alt="">
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