@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('client') }}/assets/product.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/login.css">
@endsection

@section('content')
    <div class="pt-[110px]">
        <div class="slide-header">
            <div class="contain-slide">
                <p>TẤT CẢ SẢN PHẨM</p>
                <ul>
                    <li><a href="{{ route('home') }}">Trang chủ</a> </li>
                    <li>/</li>
                    <li>Tất cả sản phẩm</li>
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
                        <div class="col-4" data-aos-duration="1000" data-aos="zoom-in-down">
                            <div class="collection-text-center">
                                <img class="h-[350px] w-full object-cover" src="{{ $product->image }}" alt="">
                                <div class="collection-detail">
                                    <h5><a href="{{ route('product', $product->id) }}">{{ $product->name }}</a></h5>
                                    <p class="collection-count">
                                        8 <span>Items</span>
                                    </p>
                                    <a href="{{ route('shoes') }}" class="collection-btn">
                                        <button>
                                            Mua ngay
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
            <style>
                .page-item.active .page-link {
                    background-color: #571F7C !important;
                }

                .page-link {
                    width: 50px;
                    height: 50px;
                    display: flex;
                    justify-content: center;
                    align-items: center;

                    padding: 8px;
                    font-size: 20px;
                }
            </style>
            <div class="flex justify-center my-5">


                {{ $products->links() }}
            </div>




        </div>
    </div>
@endsection
