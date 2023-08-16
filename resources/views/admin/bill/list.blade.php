@extends('layouts/index')


@section('main')
    <div class="">
        <div class="frmtitle py-3 bg-info">
            <h1 class="m-0 py-2 fs-5 text-center fw-bold text-white">DANH SÁCH ĐƠN HÀNG</h1>
        </div>
        <div class="frmcontent">
            <div class="table">
                <table class="display" id="table_bills">
                    <thead class="table-info text-center">
                        <tr>
                            <th class="text-center">MSP</th>
                            <th class="text-center">THÔNG TIN CÁ NHÂN</th>
                            <th class="text-center">TIỀN SHIP</th>
                            <th class="text-center">TỔNG TIỀN</th>
                            <th class="text-center">TRẠNG THÁI</th>
                            <th class="text-center">NGÀY</th>
                            <th class="text-center">THAO TÁC</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($bills))
                            @foreach ($bills as $item)
                                <tr>
                                    <td>{{ $item->id }} </td>
                                    <td>
                                        <p>
                                            Tên đăng nhập: {{ $item->user->name ?? 'Người dùng đã bị xóa khỏi hệ thống' }}
                                        </p>
                                        <p class="deleted-user">
                                            Người mua: {{ $item->fullname ?? 'Người dùng đã bị xóa khỏi hệ thống' }}
                                        </p>
                                        <p>
                                            Email: {{ $item->user->email ?? 'Người dùng đã bị xóa khỏi hệ thống' }}
                                        </p>
                                        <p>
                                            Địa chỉ: {{ $item->address }}
                                        </p>
                                        <p>
                                            SĐT: {{ $item->sdt }}
                                        </p>


                                    </td>
                                    <td>{{ $item->priceship }} </td>
                                    <td> <span>{{ number_format($item->total + $item->priceship, 0) }}₫</span></td>
                                    <td><span class="text-{{ getStatusBill($item->statuss)['color'] }}">
                                            {{ getStatusBill($item->statuss)['message'] }}
                                        </span> </td>
                                    <td>{{ $item->created_at }} </td>
                                    <td> <a class="btn btn-primary" href="{{ route('detail_bill', $item->id) }}">Chi
                                            tiết</a>
                                    </td>

                                    </td>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>


                </table>


            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="module">
        $(document).ready(function() {
            $('#table_bills').DataTable();
        })
    </script>
@endsection
