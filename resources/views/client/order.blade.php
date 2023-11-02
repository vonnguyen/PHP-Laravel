@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('client') }}/assets/product.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/login.css">
@endsection

@section('content')
    <div class="pt-[110px]">
        <div class="slide-header">
            <div class="contain-slide">
                <p>Đơn Hàng</p>
                <ul>
                    <li><a href="{{ route('home') }}">Trang Chủ</a> </li>
                    <li>/</li>
                    <li>Đơn hàng</li>
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
                        <th>Mã sản phẩm</th>
                        <th>Tên người đặt hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số tiền</th>
                        <th>Trạng thái đơn hàng</th>
                        <th>Chi tiết đơn hàng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bill as $item)
                        <tr class="row_info-shoes ">

                            <td class="py-4">
                                <p>{{ $item->id }}</p>
                            </td>
                            <td>
                                <p class="fw-bold">
                                    Tên: {{ $item->fullname ?? $item->user->name }}
                                </p>
                                <p>
                                    Sdt: {{ $item->sdt }}
                                </p>
                            </td>
                            <td>
                                <span>{{ $item->address }}</span>
                            </td>
                            <td class="product-total fw-bold">
                                <span><span></span>{{ number_format($item->total + $item->priceship, 2) }}₫</span>
                            </td>
                            <td>
                                @php
                                    $stt = '';
                                    $statusClass = '';
                                    if ($item->statuss == 0) {
                                        $stt = 'Đang chuẩn bị hàng';
                                        $statusClass = 'preparing';
                                    } elseif ($item->statuss == 1) {
                                        $stt = 'Đang giao hàng';
                                        $statusClass = 'delivering';
                                    } else {
                                        $stt = 'Giao hàng thành công';
                                        $statusClass = 'success';
                                    }
                                    
                                @endphp
                                <span class="py-2"
                                    style="color: white;
                                    background-color: {{ $statusClass === 'success' ? 'green' : ($statusClass === 'delivering' ? 'blue' : 'red') }}">{{ $stt }}</span>
                            </td>
                            <td>
                                <div class="viwe d-flex justify-content-evenly">
                                    <a href="{{ route('payment', $item->id) }}">
                                        <i class="fa-solid fa-eye fs-4"></i>
                                    </a>
                                    @if ($item->statuss == 0)
                                        <a onclick="return confirm('Bạn có muốn xóa !!')"
                                            href="{{ route('delete', $item->id) }}">
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
                <a href="{{ route('shoes') }}">
                    <button class="dt-sc-btn">
                        Countinue Shopping
                    </button>
                </a>
            </div>

        </div>
    </div>




    </div>
@endsection
