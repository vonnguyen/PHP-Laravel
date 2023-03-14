@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('client')}}/assets/product.css">
    <link rel="stylesheet" href="{{asset('client')}}/assets/login.css">
@endsection

@section('content')
    <div class="pt-[110px]">
        <div class="slide-header">
            <div class="contain-slide">
                <p>Đơn Hàng</p>
                <ul>
                    <li><a href="{{route('home')}}">HOME</a> </li>
                    <li>/</li>
                    <li>Đơn Hàng</li>
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
                                <th>ID Sản phẩm</th>
                                <th>Info</th>
                                <th>Address</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody >
                            @foreach ($bill as $item)
                            <tr class="row_info-shoes ">
                               
                                <td class="py-4">
                                    <p>{{$item->id}}</p>
                                </td>
                                <td>
                                    <p class="fw-bold">
                                        Tên: {{$item->user->name}}
                                    </p>
                                    <p>
                                        Sdt: {{$item->sdt}}
                                    </p>
                                </td>
                                <td>
                                    <span>{{$item->address}}</span>
                                </td>
                                <td class="product-total fw-bold">
                                    <span><span>$ </span>{{number_format($item->total , 2)}}</span>
                                </td>             
                                <td>
                                    @php
                                        $stt = '';
                                        if($item->statuss == 0){
                                            $stt = 'Đang chuẩn bị hàng';
                                        }else if($item->statuss == 1){
                                            $stt = 'Đang giao hàng';
                                        } else {
                                            $stt = 'Giao hàng thành công';
                                        }
                                    @endphp
                                    <span>{{$stt}}</span>
                                </td>
                                <td>
                                    <div class="viwe d-flex justify-content-evenly">
                                        <a href="{{route('payment',$item->id)}}">
                                            <i class="fa-solid fa-eye fs-4"></i>
                                        </a>
                                         @if ($item->statuss == 0)
                                            <a onclick="return confirm('Bạn có muốn xóa !!')" href="{{route('delete',$item->id)}}">
                                                <i class="fa-regular fa-circle-xmark fs-4" style="color: red"></i>
                                            </a>                   
                                        @endif

                                    </div>
                                        

                                       
                                
                                    
                                </td>
                            

                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-around pb-5">
                    <div class="product-wishlist-cart">
                        <a href="{{route('shoes')}}">
                            <button class="dt-sc-btn">
                                Countinue Shopping
                            </button>
                        </a>
                    </div>

                </div>
        </div>




        </div>

@endsection