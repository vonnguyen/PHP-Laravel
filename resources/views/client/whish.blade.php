@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('client')}}/assets/product.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/login.css">
@endsection

@section('content')
    <div class="pt-[110px]">
        <div class="slide-header">
            <div class="contain-slide">
                <p>Sản phẩm yêu thích</p>
                <ul>
                    <li><a href="{{route('home')}}">Trang chủ</a> </li>
                    <li>/</li>
                    <li>Sản phẩm yêu thích</li>
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
                                <th>Xem</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody >
                            @if ( $products->count() > 0)
                            @foreach ( $products as $item)
                            <tr class="row_info-shoes ">
                               
                                <td class="product-shoes">
                                    <a href="">
                                        <img src="{{$item->product->image}}">
                                    </a>
                                </td>
                                <td class="product-name">
                                    <a href="">{{$item->product->name}}</a>
                                </td>
                                <td class="product-price-cart">
                                    <span>{{number_format($item->product->gia , 0)}}</span>
                                    <span>₫</span> 
                                </td>
                                <td class="product-wishlist-cart">
                                    <a href="{{route('product',$item->product->id)}}">
                                        <button class="dt-sc-btn">
                                            Chi tiết
                                        </button>
                                    </a>
                                </td>
                                <td class="remove">
                                        <a  href="{{route('deleteWish',$item->id)}}"
                                           >
                                            <i class="cursor-pointer fa-solid fa-trash-can" style="color: red"></i>
                                        </a>
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
                    

                </div>
        </div>




        </div>

@endsection