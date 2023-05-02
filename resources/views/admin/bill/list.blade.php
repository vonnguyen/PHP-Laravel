@extends('layouts/index')


@section('main')
<div class="">
    <div class="frmtitle py-3 bg-info">
        <h1 class="m-0 py-2 fs-5 text-center fw-bold text-white">DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <div class="frmcontent">
        <div  class="table py-3">
            <table>
                <tr class="table-info text-center">
                    <th>ID</th>
                    <th>THÔNG TIN CÁ NHÂN</th>
                    <th>TỔNG TIỀN</th>
                    <th>TRẠNG THÁI</th>
                    <th>NGÀY</th>
                    <th>VIEW</th>
                </tr>
                @if (!empty($bills))
                    @foreach ($bills as $item)
                        <tr>
                            <td>{{ $item->id }} </td>
                            <td>
                                <p>
                                    Tên: {{ $item->user->name ?? 'Người dùng đã bị xóa khỏi hệ thống' }}
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
                            <td> <span> $ {{ $item->total }} </span></td>
                            <td><span class="text-{{ getStatusBill($item->statuss)['color'] }}">
                                    {{ getStatusBill($item->statuss)['message'] }}
                                </span> </td>
                            <td>{{ $item->created_at }} </td>
                            <td> <a class="btn btn-primary" href="{{ route('detail_bill', $item->id) }}">Chi tiết</a>
                            </td>

                            </td>
                        </tr>
                    @endforeach
                @endif


            </table>

            {{-- phan trang --}}
            <style>
                .page-item.active .page-link {
                    background-color: gray !important;
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
            <div class="flex justify-end my-5">


                {{ $bills->links() }}
            </div>
            {{-- end phan trang --}}


        </div>
    </div>
</div>
@endsection