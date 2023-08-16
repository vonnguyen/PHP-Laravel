@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('client') }}/assets/product.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/login.css">
@endsection

@section('content')
    <div class="pt-[110px]">
        <div class="slide-header">
            <div class="contain-slide">
                <p>Sản Phẩm Chính Hãng</p>
                <ul>
                    <li><a href="{{ route('home') }}">Trang chủ</a> </li>
                    <li>/</li>
                    <li>Sản phẩm chính hãng</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Contain -->

    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="collection-header" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="collection-view">
                        <i class="fa-solid fa-list"></i>
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    {{-- <div class="collection-items-per">
                        <p>Paginate by</p>
                        <select name="" id="">
                            <option value="">9</option>
                            <option value="">12</option>
                            <option value="">14</option>
                            <option value="">16</option>
                        </select>
                    </div> --}}

                </div>

                <div class="about-ctn-product" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <div class="row">

                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <div class="col-4 picture-3">
                                    <div class="item">

                                        <div class="img-ctn3 h-3/5">
                                            <div class="groups-img h-full">
                                                <img class="h-full w-full object-cover" src="{{ $product->image }}"
                                                    alt="">
                                                <img class="h-full w-full object-cover"
                                                    src="{{ asset('client') }}/assets/img/img-header/shoe26_de67b47c-8d95-481f-aa85-268cdc309e4e.webp"
                                                    alt="">
                                                <span class="save">Save 16%</span>
                                            </div>
                                            <div class="icon-ctn3">
                                                <a href=""><i class="fa-solid fa-message"></i></a>
                                                <a href="{{route('favorite',$product->id)}}"><i class="fa-brands fa-gratipay"></i></a>
                                                <a href="{{route('product', $product->id)}}"><i class="fa-solid fa-magnifying-glass"></i></a>
                                            </div>
                                        </div>
                                        <div class="name-shoe-ctn3">
                                            <h1> <a href="{{ route('product', $product->id) }}">{{ $product->name }}</a>
                                            </h1>
                                            <div class="cost-ctn3">
                                                <h2>{{ number_format($product->gia, 0) }}<span>₫</span></h2>
                                            </div>
                                            <div class="icon-ctn3">
                                                <div class="icon-start">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star">
                                                    </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                                <a href="{{ route('product', $product->id) }}"><i
                                                        class="cursor-pointer fa-solid fa-bag-shopping"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        @endif
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

            </div>

            <div class="col-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <div class="sidebar-product">
                    <div class="recent-product">

                        <p>Tìm kiếm theo thương hiệu</p>
                        <form action="">
                            @csrf
                            <div class="search d-flex">
                                <input name="keyword" value="{{ request()->keyword }}" class="form-control me-2"
                                    type="search" aria-label="Search">
                                {{-- <button class="btn-primary p-2" style="background-color: #571F7C;">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button> --}}
                            </div>
                            <div class="sortby">
                                <p>Sắp xếp</p>
                                <select name="sort" id="">
                                    <option value="asc" {{ request()->sort == 'asc' ? 'selected' : '' }}>Theo thứ tự bảng chữ cái,
                                        A-Z</option>
                                    <option value="desc" {{ request()->sort == 'desc' ? 'selected' : '' }}>
                                        Theo thứ tự bảng chữ cái,
                                        Z-A</option>
                                </select>
                            </div>
                            @if ($listCate->count() > 0)
                                <div class="menu-cate">
                                    <div class="menu-search py-2 d-flex gap-3">
                                        <input {{ request()->cate == 'all' ? 'checked' : '' }} type="radio"
                                            name="cate" value="all" id="danhmucall">
                                        <label for="danhmucall">Tất cả</label>
                                    </div>
                                </div>
                                @foreach ($listCate as $item)
                                    <div class="menu-cate">
                                        <div class="menu-search py-2 d-flex gap-3">
                                            <input {{ request()->cate == $item->id ? 'checked' : '' }} type="radio"
                                                name="cate" value="{{ $item->id }}"
                                                id="danhmuc{{ $item->id }}">
                                            <label for="danhmuc{{ $item->id }}">{{ $item->name }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            <p class="pt-3">Lọc theo giá sản phẩm</p>
                            <div class="list-tags">
                                <h5>
                                    Giá cao nhất là <span class="money">500000₫</span>
                                </h5>
                                <div class="cost-product">
                                    <h6>Từ:</h6>
                                    <input name="from" class="border-1" type="number"
                                        value="{{ request()->from ?? 100000 }}">
                                </div>
                                <div class="cost-product pt-2">
                                    <h6>Đến:</h6>
                                    <input name="to" class="border-1" type="number"
                                        value="{{ request()->to ?? 5000000 }}">
                                </div>
                            </div>

                            <div>

                                <span class="clear btn btn-primary" style="background-color: #571F7C">
                                    Xóa
                                </span>
                                <button class="btn btn-primary" type="submit" style="background-color: #571F7C">
                                    Tìm kiếm
                                </button>
                            </div>
                        </form>



                        <p class="pt-3">Sale lớn</p>
                        {{-- <div class="img-ctn3">
                            <div class="groups-img">
                                <img src="{{ $product->image }}">
                                <img src="{{ asset('client') }}/assets/img/img-ctn2/adidas5-1.webp" alt="">
                            </div>
                            <div class="icon-ctn3">
                                <a href=""><i class="fa-solid fa-message"></i></a>
                                <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                            </div>
                        </div>

                        <div class="name-shoe-ctn3">
                            <h1> <a href="{{ route('product', $product->id) }}">{{$product->name}}</a> </h1>
                            <div class="cost-ctn3">
                                <h2>{{$product->gia}}</h2>
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
                        </div> --}}


                    </div>






                </div>
            </div>
        </div>




    </div>
@endsection
@section('js')
    <script>
        const clear = document.querySelector('.clear');
        clear.addEventListener('click', function() {
            window.history.replaceState({}, document.title, "/" + "boots?keyword=&cate=all&from=1&to=1000");
            window.location.reload();
        })
    </script>
@endsection
