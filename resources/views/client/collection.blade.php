@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('client')}}/assets/product.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/login.css">
@endsection

@section('content')
    <div class="pt-[110px]">
        <div class="slide-header">
            <div class="contain-slide">
                <p>ALL COLLECTIONS</p>
                <ul>
                    <li><a href="{{route('home')}}">HOME</a> </li>
                    <li>/</li>
                    <li>Account</li>
                </ul>
            </div>
        </div>
    </div>

        <!-- Contain -->
    <div class="container">
            <div class="dt-sc-colum">
                <div class="row">
                    @if ($products->count() > 0)

                    @foreach ($products as $product)
                    <div class="col-4" data-aos-duration= "1000" data-aos="zoom-in-down">
                        <div class="collection-text-center">
                            <img class="h-full w-full object-cover" src="{{$product->image}}" alt="">
                            <div class="collection-detail">
                                <h5><a href="">{{$product->name}}</a></h5>
                                <p class="collection-count">
                                    8 <span>Items</span>
                                </p>
                                <a href="{{route('shoes')}}" class="collection-btn">
                                    <button>
                                        SHOP NOW
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-3" data-aos-duration= "1000" data-aos="zoom-in-down">
                        <div class="collection-text-center">
                            <img src="./assets/img/img-collection/text-2.webp" alt="">
                            <div class="collection-detail">
                                <h5><a href="">Hiking Boots</a></h5>
                                <p class="collection-count">
                                    8 <span>Items</span>
                                </p>
                                <a href="{{route('shoes')}}" class="collection-btn">
                                    <button>
                                        SHOP NOW
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3" data-aos-duration= "1000" data-aos="zoom-in-down">
                        <div class="collection-text-center">
                            <img src="./assets/img/img-header/shoe21.webp" alt="">
                            <div class="collection-detail">
                                <h5><a href="">Orange Boots</a></h5>
                                <p class="collection-count">
                                    8 <span>Items</span>
                                </p>
                                <a href="{{route('shoes')}}" class="collection-btn">
                                    <button>
                                        SHOP NOW
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3" data-aos-duration= "1000" data-aos="zoom-in-down">
                        <div class="collection-text-center">
                            <img src="./assets/img/img-clim/clim-1.webp" alt="">
                            <div class="collection-detail">
                                <h5><a href="">Tab Collection</a></h5>
                                <p class="collection-count">
                                    8 <span>Items</span>
                                </p>
                                <a href="{{route('shoes')}}" class="collection-btn">
                                    <button>
                                        SHOP NOW
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                    @endforeach
                            
                    @endif
                </div>

                {{-- <div class="row">
                    <div class="col-3" data-aos="zoom-in-right" data-aos-duration= "1000" >
                        <div class="collection-text-center">
                            <img src="./assets/img/img-ctn2/shoe2_720x.webp" alt="">
                            <div class="collection-detail">
                                <h5><a href="">Work Boots</a></h5>
                                <p class="collection-count">
                                    8 <span>Items</span>
                                </p>
                                <a href="{{route('shoes')}}" class="collection-btn">
                                    <button>
                                        SHOP NOW
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3" data-aos="zoom-in-right" data-aos-duration= "1000" >
                        <div class="collection-text-center">
                            <img src="./assets/img/img-ctn2/shoe23_5444b0e6-72c7-450c-aab6-081a70660dcd_720x.webp" alt="">
                            <div class="collection-detail">
                                <h5><a href="">Hiking Boots</a></h5>
                                <p class="collection-count">
                                    8 <span>Items</span>
                                </p>
                                <a href="{{route('shoes')}}" class="collection-btn">
                                    <button>
                                        SHOP NOW
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3" data-aos="zoom-in-right" data-aos-duration= "1000" >
                        <div class="collection-text-center">
                            <img src="./assets/img/img-ctn2/shoeyelow.webp" alt="">
                            <div class="collection-detail">
                                <h5><a href="">Orange Boots</a></h5>
                                <p class="collection-count">
                                    8 <span>Items</span>
                                </p>
                                <a href="{{route('shoes')}}" class="collection-btn">
                                    <button>
                                        SHOP NOW
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3" data-aos="zoom-in-right" data-aos-duration= "1000" >
                        <div class="collection-text-center">
                            <img src="./assets/img/img-clim/clim-1.webp" alt="">
                            <div class="collection-detail">
                                <h5><a href="">Tab Collection</a></h5>
                                <p class="collection-count">
                                    8 <span>Items</span>
                                </p>
                                <a href="{{route('shoes')}}" class="collection-btn">
                                    <button>
                                        SHOP NOW
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
    </div>
 @endsection