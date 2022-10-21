@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('client')}}/assets/product.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/login.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/about.css">

@endsection

@section('content')
    <div class="pt-[110px]">
        <div class="slide-header">
            <div class="contain-slide">
                <p>ABOUT</p>
                <ul>
                    <li><a href="index.html">HOME</a> </li>
                    <li>/</li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </div>

        <!-- Contain -->
    <div>
        <div class="container">
            <div class="heading-about" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <h2>STUNNING COLLECTION</h2>
            </div>

            <div class="ctn-about">
                <div class="row">
                    <div class="col-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="dt-sc-img-section">
                            <div class="dt-sc-img">
                                <div class="img-about">
                                    <img src="{{asset ('client')}}/assets/img/img-about/about001_600x.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="main-img">

                            <div class="heading-main-title">
                                <h3>SOAR INTO THE SKY</h3>
                            </div>
                            <div class="p-main">
                                <p>Quisque volutpat mattis eros. Nullam malesuada erat ut ki diaml ka dhuddu pochu
                                    turpis. Suspendisse urna nibh, viverra non,
                                    semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                                    Morbi in sem quis dui placerat ornare.
                                    Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras
                                    consequat</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="ctn-about">
                <div class="row">
                    <div class="col-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="main-img-2">

                            <div class="heading-main-title">
                                <h3>LEARN TO ENJOY</h3>
                            </div>
                            <div class="p-main">
                                <p>Orci sagittis eu volutpat odio facilisis mauris sit amet. Lectus mauris ultrices eros
                                    in cursus turpis massa tincidunt.
                                    Sit amet purus gravida quis. Cras adipiscing enim eu turpis egestas pretium aenean.
                                    Faucibus a pellentesque sit amet porttitor eget dolor.
                                    Nisl nunc mi ipsum faucibus vitae aliquet nec ullamcorper faucibus in ornare</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="dt-sc-img-section-2">
                            <div class="dt-sc-img-2">
                                <div class="img-about">
                                    <img src="{{ asset('client') }}/assets/img/img-about/about002_600x.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="heading-about" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <h2>LIVE LIFE TO THE FULLEST</h2>
                <div class="p-title-2">
                    <p>Quisque volutpat mattis eros. Nullam malesuada erat ut ki diaml ka dhuddu pochn, semper suscipit,
                        pos</p>
                </div>
            </div>

            <div class="ctn-about"  data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="row">
                    <div class="col-6">
                        <div class="center-about">
                            <div class="main-img-3">
                                <div class="main-about">
                                    <span>
                                        <i class="fa-brands fa-pagelines"></i>
                                    </span>
                                    <div class="main-about-hp">
                                        <div class="heading-main-title">
                                            <h3>ENVIRONMENT-FRIENDLY</h3>
                                        </div>
                                        <div class="p-main">
                                            <p>Sed vestibulum nulla elementum auctor tincidunt. Aliquam sit amet cursus
                                                mauris. Sed vitae mattis ipsum.
                                                Vestibulum enim nulla, sollicitudin ac hendrerit nec, tempor quis nisl
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-about">
                                    <span>
                                        <i class="fa-solid fa-book"></i>
                                    </span>
                                    <div class="main-about-hp">
                                        <div class="heading-main-title">
                                            <h3>EASY EXCHANGE OPTION</h3>
                                        </div>
                                        <div class="p-main">
                                            <p>Tempus iaculis urna id volutpat. Mauris cursus mattis molestie a iaculis.
                                                Etiam non quam lacus suspendisse faucibus interdum posuere lorem vitae
                                                ultricies leo marques</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-about">
                                    <span>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <div class="main-about-hp">
                                        <div class="heading-main-title">
                                            <h3>PERFECT RATING</h3>
                                        </div>
                                        <div class="p-main">
                                            <p>Netus et malesuada fames ac turpis egestas maecenas pharetra.
                                                Eleifend donec pretium vulputate sapien nec sagittis.
                                                Nisi vitae suscipit tellus mauris anques isum</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="dt-sc-img-section-3">
                            <div class="dt-sc-img-3">
                                <div class="img-about">
                                    <img src="{{ asset('client') }}/assets/img/img-about/about003_600x.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="slide-header-about">
            <div class="container">
                <div class="title-heading">
                    <h2>STYLE YOUR LIFE</h2>
                    <p>Get committed to a new lifestyle </p>
                </div>
                <div class="dt-sc-custom">
                    <div class="dt-sc-custom-ifobox">
                        <h6 class="dt-sc-main-title">
                            Join Us :
                            <span class="dt-sc-sub-title">Let's Create Our Own Style</span>

                        </h6>
                        <span class="dt-sc-span">Aenean dignissim pellentesque felis.
                            There are many variations of passages
                            of Lorem Ipsum available, but the majority have suffered alteration in some form, by
                            injected humour.</span>
                    </div>

                    <div class="dt-sc-btn">
                        <button><a href="">SHOP NOW</a></button>
                    </div>
                </div>
            </div>



        </div>

        <div class="container" >
            <div class="dc-st-footer" data-aos="zoom-in-down" data-aos-duration="1000">
                <h2>WE BRING THE LATEST TRENDY WEAR</h2>
                <img src="{{ asset('client') }}/assets/img/img-about/shoe-imh_800x.webp" alt="">
            </div>
        </div>
    </div>

@endsection

