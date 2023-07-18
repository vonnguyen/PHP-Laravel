@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('client')}}/assets/product.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/login.css">
@endsection

@section('content')
    <div class="pt-[110px]">
        <div class="slide-header">
            <div class="contain-slide">
                <p>Giỏ Hàng</p>
                <ul>
                    <li><a href="{{route('home')}}">Trang chủ</a> </li>
                    <li>/</li>
                    <li>Giỏ hàng</li>
                </ul>
            </div>
        </div>
    </div>
        <!-- Contain -->

        <div class="container">
                <div class="ctn-boder">
                    <table>
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng cộng</th>
                                <th>Xem</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody >
                            @if ( getCart())
                            @foreach ( getCart() as $item)
                            <tr class="row_info-shoes ">
                               
                                <td class="product-shoes">
                                    <a href="">
                                        <img src="{{$item->image}}">
                                    </a>
                                </td>
                                <td class="product-name">
                                    <a href="">{{$item->name}}</a>
                                </td>
                                <td class="product-price-cart">
                                    <span>$</span> 
                                    <span>{{number_format($item->gia , 2)}}</span>
                                </td>
                                <td class="product-number">
                                    <span>{{$item->number}}</span>
                                </td>
                                <td class="product-total">
                                    <span><span>$ </span>{{number_format($item->total , 2)}}</span>
                                </td>
                                <td class="product-wishlist-cart">
                                    <a href="{{route('product',$item->id)}}">
                                        <button class="dt-sc-btn">
                                            Chi tiết
                                        </button>
                                    </a>
                                </td>
                                <td class="remove">
                                        <div class="item-remove" data-urlremove="{{route('cart.delete')}}"
                                            data-url="{{route('cart.add')}}" data-id="{{$item->id}}">
                                            <i class="cursor-pointer fa-solid fa-trash-can" style="color: red"></i>
                                        </div>
                                </td>
                            

                            </tr>
                            @endforeach
                            
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-around pb-5">
                    <div class="product-wishlist-cart">
                        <a href="{{route('shoes')}}">
                            <button class="dt-sc-btn">
                                Tiếp tục mua sắm
                            </button>
                        </a>
                    </div>
                    <div class="product-wishlist-cart">
                        <a href="{{route('infomation')}}">
                            <button class="dt-sc-btn">
                                tiến hành kiểm tra
                            </button>
                        </a>
                    </div>

                </div>
        </div>




        </div>

@endsection