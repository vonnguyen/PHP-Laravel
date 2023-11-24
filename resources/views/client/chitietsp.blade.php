@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('client') }}/assets/product.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="pt-[110px]">

        <div class="slide-header">
            <div class="contain-slide">
                <p class="mb-3">Sản Phẩm</p>
                <ul>
                    <li><a href="{{ route('home') }}">Trang chủ</a> </li>
                    <li>/</li>
                    <li>{{ $product->name }}</li>
                </ul>
            </div>
        </div>

        <!-- Contain -->

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ $product->image }}">
                </div>
                <div class="col-md-6">
                    <h3 class="title-heading">{{ $product->name }}</h3>
                    <div class="container-info">
                        <div class="info-detail">
                            <span class="info-title">Giá:</span>
                            <div class="money">
                                <span>{{ number_format($product->gia, 0) }}</span>
                                <span>₫</span>
                            </div>

                        </div>
                        <style>
                            .size {
                                padding: 8px;
                                border: 3px solid #ccc;
                            }

                            .size.selected {
                                border: 3px solid blue !important;
                            }
                        </style>
                        <div class="info-detail">
                            <span class="info-title">Kích thước:</span>
                            <div class="info-border">
                                @foreach (json_decode($product->property->sizes) as $size)
                                    <label style="width:45px;height:45px;text-align:center" for="size{{ $size }}"
                                        data-value={{ $size }} class="size">{{ $size }}</label>
                                    <input id="size{{ $size }}" class="invisible" type="radio" name="size"
                                        value="{{ $size }}">
                                @endforeach

                            </div>

                        </div>
                        <style>
                            .color {
                                padding: 8px;
                                border: 3px solid #ccc;
                            }

                            .color.selected {
                                border: 3px solid blue !important;
                            }
                        </style>
                        <div class="info-detail">
                            <span class="info-title">Màu sắc:</span>
                            <div class="info-border">
                                @foreach (json_decode($product->property->colors) as $color)
                                    <label style="width:45px;height:45px;text-align:center" for="color{{ $color }}"
                                        data-value={{ $color }}
                                        class="d-block color {{ $color == 'white' || $color == 'black' ? "bg-$color" : "bg-$color-400" }}"></label>
                                    <input id="color{{ $color }}" class="invisible" type="radio" name="color"
                                        value="{{ $color }}">
                                @endforeach
                            </div>

                        </div>


                        <div class="info-detail">
                            <span class="info-title">Kho:</span>
                            @if ($product->number == 0)
                                <span class="text-danger">Sản phẩm hết hàng</span>
                            @else
                                <span class="text-success">{{ $product->number }}</span>
                            @endif


                        </div>
                        <div class="info-detail">
                            <span class="info-title">Lượt xem:</span>

                            <span style="color: #691064b9 ;">{{ $product->views }}</span>

                        </div>
                        <div class="info-detail">
                            <span class="info-title">Số lượng:</span>
                            <div class="info-border quantity">
                                <span class="iconMinus">-</span>
                                <span class="number_detail">1</span>
                                <span class="iconAdd">+</span>
                            </div>

                        </div>

                        <div class="btn-detail">
                            <button class="detail_add" data-remove="{{ route('cart.delete') }}"
                                data-id="{{ $product->id }}" data-url="{{ route('cart.add') }}"><span>THÊM VÀO GIỎ
                                    HÀNG</span></button>
                            <button class="detail_add redirect" data-remove="{{ route('cart.delete') }}"
                                data-id="{{ $product->id }}" data-url="{{ route('cart.add') }}"><span>MUA NGAY
                                </span></button>
                        </div>

                        {{-- <div class="btn-detail">
                            <button><a href="{{ route('whish') }} "><span>XEM GIỎ HÀNG</span></a></button>
                        </div> --}}




                    </div>
                </div>

            </div>

            <div class="heading-title">
                <div class="btn-heading-title">
                    <button class="active change_title">Mô tả sản phẩm</button>
                    <button class="change_title">Đánh giá</button>
                </div>
            </div>
            <div class="container-about">

                <div class="container-pd30 active">

                    {{ $product->mota }}
                </div>
                <div class="container-pd30 container_comment">
                    <form action="{{ route('comment.add') }}" class="comment">
                        @csrf
                        <div class="flex gap-2">

                            <div id="rateYo"></div>
                            <span class="number-rate">1.5</span>
                        </div>
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="text" class="invisible" name="reply_id" value="">
                        <input class="border form-control mt-3" type="text" name="message" placeholder="comment"
                            id="">
                        <div class="text-end mt-2">

                            <button onclick="reload()" type="submit" class="btn btn-primary bg-primary p-2">submit</button>
                        </div>
                    </form>



                    <div class="list_comment">
                        @if ($comments)
                            @foreach ($comments as $comment)
                                {{-- @if ($comment->parent_id == 0) --}}
                                    @php                                       
                                        $img = $comment->user->img;
                                        $name = $comment->user->name;
                                        $id_user = $comment->user->id;
                                        $classNameRe = "";
                                        if($comment->parent_id != 0){
                                            $classNameRe .= "margin-left: 30px !important";
                                        }
                                    @endphp
                                    <div style="{{$classNameRe}}" class="flex  shadow justify-between p-3 my-3 rounded-xl">
                                        <div>
                                            <div class="flex gap-3 items-center">

                                                <p>
                                                    @if (!empty($img))
                                                    <img class="w-[50px] h-[50px] rounded-full" src="{{ $img }}"
                                                        alt=""></p>
                                                        
                                                    @else 
                                                        <img class="w-[50px] h-[50px] rounded-full" src="{{asset('/client/assets/img/th.jfif')}}">
                                                    @endif
                                                <p class="font-bold text-xl">{{ $name }}</p>
                                            </div>
                                            <div class="rateyo2 my-3" data-rateyo-read-only="true"
                                                data-rateyo-rating="{{ $comment->rating }}" data-rateyo-num-stars="5"
                                                data-rateyo-score="1">
                                            </div>
                                            <div class="message">{{ $comment->message }}</div>
                                        </div>
                                        <div class="flex flex-col gap-3 items-end">

                                            <p>{{ $comment->created_at }}</p>
                                            @if (Auth::user()->group->id == 1 && $comment->parent_id == 0)
                                                <p data-user="{{ $name }}" data-userid="{{ $id_user }}"
                                                    class="text-blue-500 hover:underline hover:cursor-pointer reply">Trả
                                                    lời
                                                </p>
                                            @endif

                                        </div>
                                    </div>

                                    {{-- {{ (renderComment($comments, $comment->id, '-','') )}} --}}
                                {{-- @endif --}}
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>



            <h6 class="dc-sc-title">Sản phẩm có liên quan</h6>

            <div class="about-ctn-product">
                <div class="row">
                    @if ($products->count() > 0)
                        @foreach ($products as $product)
                            <div class="col-3 picture-3" data-aos="zoom-out-right" data-aos-duration="1000">
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
                                            <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                                        </div>
                                    </div>
                                    <div class="name-shoe-ctn3 h-2/5 mt-4">
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

        </div>

        <script>
            function reload() {
                window.location.reload();
            }
            const size = document.querySelectorAll('.size');
            const input = document.querySelectorAll('input[name="size"]');
            const message = document.querySelector('input[name="message"]');
            console.log("🚀 ~ file: chitietsp.blade.php:259 ~ message:", message)

            const color = document.querySelectorAll('.color');
            const reply = document.querySelector('.reply');

            const input_c = document.querySelectorAll('input[name="color"]');
            const input_reply = document.querySelector('input[name="reply_id"]');

            console.log(input);
            input.forEach((item, index) => {
                item.addEventListener('change', () => {

                    localStorage.setItem('size', item.value)

                    size.forEach(i => {
                        if (i.dataset.value == item.value) {
                            i.classList.add('selected')
                        } else {
                            i.classList.remove('selected')

                        }
                    })

                    // item.classList.add('selected')
                })
            })
            input_c.forEach((item, index) => {
                item.addEventListener('change', () => {

                    localStorage.setItem('color', item.value)

                    color.forEach(i => {
                        if (i.dataset.value == item.value) {
                            i.classList.add('selected')
                        } else {
                            i.classList.remove('selected')

                        }
                    })

                    // item.classList.add('selected')
                })
            })

            reply.addEventListener("click", function() {
                let name_user = this.dataset.user;
                let id_user = this.dataset.userid;
                console.log("🚀 ~ file: chitietsp.blade.php:307 ~ reply.addEventListener ~ id_user:", id_user)

                console.log("🚀 ~ file: chitietsp.blade.php:300 ~ reply.addEventListener ~ name_user:", name_user)
                message.value = "@" + name_user + " ";
                input_reply.value = id_user;
            })
        </script>

    @endsection

    @section('js')
        <script src="{{ asset('client/js') }}/comment.js"></script>
    @endsection
