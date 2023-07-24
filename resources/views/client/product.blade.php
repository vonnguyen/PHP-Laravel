@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('client') }}/assets/product.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/login.css">
@endsection
@section('content')
    <div class="pt-[110px]">

        <div class="slide-header ">
            <div class="contain-slide">
                <p>Sản Phẩm Mới</p>
                <ul>
                    <li><a href="{{ route('home') }}">Trang chủ</a> </li>
                    <li>/</li>
                    <li>Sản phẩm mới</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Contain -->

    <div class="container">
        <div class="row">
            <div class="col-9">
                <div class="collection-header">
                    <div class="collection-view">
                        <i class="fa-solid fa-list"></i>
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                </div>

                <div class="about-ctn-product">
                    <div class="row">

                        @if ($productshow->count() > 0)
                            @foreach ($productshow as $product)
                                <div class="col-4 picture-3" data-aos="zoom-out-right" data-aos-duration="1000">
                                    <div class="item h-full">

                                        <div class="img-ctn3 h-3/5">
                                            <div class="groups-img h-full">
                                                <img class="h-full w-full object-cover" src="{{ $product->image }}"
                                                    alt="">
                                                <img class="h-full w-full object-cover"
                                                    src="{{ asset('client') }}/assets/img/img-header/shoe26_de67b47c-8d95-481f-aa85-268cdc309e4e.webp"
                                                    alt="">
                                            </div>
                                            <div class="icon-ctn3">
                                                <a href=""><i class="fa-solid fa-message"></i></a>
                                                <a href=""><i class="fa-brands fa-gratipay"></i></a>
                                                <a href="{{route('product', $product->id)}}"><i class="fa-solid fa-magnifying-glass"></i></a>
                                            </div>
                                        </div>
                                        <div class="name-shoe-ctn3 h-2/5 mt-4">
                                            <h1> <a href="{{ route('product', $product->id) }}">{{ $product->name }}</a>
                                            </h1>
                                            <div class="cost-ctn3">
                                                <h2>{{ number_format($product->gia, 2) }}<span>₫</span></h2>
                                            </div>
                                            <div class="icon-ctn3">
                                                <div class="icon-start">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star">
                                                    </i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="bag-ctn3" data-urlremove="{{ route('cart.delete') }}"
                                                    data-url="{{ route('cart.add') }}" data-id="{{ $product->id }}"><i
                                                        class="cursor-pointer fa-solid fa-bag-shopping"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        @endif


                    </div>
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


                    {{ $productshow->links() }}
                </div>




            </div>
            <div class="col-3" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <div class="sidebar-product">
                    <div class="recent-product">

                        <p>Lọc theo giá sản phẩm</p>
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
                                    <option value="asc" {{ request()->sort == 'asc' ? 'selected' : '' }}>Theo thứ tự
                                        bảng chữ cái,
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
                                    Giá cao nhất là <span class="money">5000000₫</span> 
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



                        <p class="pt-3">Hot Deals</p>
                        <div class="img-ctn3">
                            <img src="./assets/img/slide-header/breadcrumb-4.webp" alt="">
                        </div>


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
