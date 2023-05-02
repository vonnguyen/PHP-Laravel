@extends('layouts/index')


@section('main')
    <div class="frmtitle py-3 bg-info">
        <h1 class="m-0 py-2 fs-5 text-center fw-bold text-white">THỐNG KÊ</h1>
    </div>
    <div class="row">
        <div class="col-8">

            <head>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load("current", {
                        packages: ["corechart"]
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Task', 'Hours per Day'],
                            ['Giày', 11],
                            ['Eat', 2],
                            ['Commute', 2],
                            ['Watch TV', 2],
                            ['Sleep', 7]
                        ]);

                        var options = {
                            title: 'My Daily Activities',
                            is3D: true,
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                        chart.draw(data, options);
                    }
                </script>
            </head>

            <body>
                <div id="piechart_3d" style="width: 700px; height: 500px;"></div>
            </body>
        </div>
        <div class="col-4">
            <div class="fw-bold fs-3" style="padding-top:150px">Tổng Doanh Thu: <span class="fs-3">$</span> {{$TongDoanhThu}}</div>
        </div>
    </div>


    <div class="row">
        <div class="col-6">
            <div>
                <h5 class="border rounded-pill text-center border-danger bg-success text-white py-3">
                    TOP 3 SẢN PHẨM BÁN CHẠY NHẤT</h5>
                <table class="table">
                    <thead class="text-center">
                        <tr class="table-primary">
                            <th class="w-35" scope="col">Tên SP</th>
                            <th class="w-15" scope="col">Giá</th>
                            <th class="w-25" scope="col">Số lượng</th>
                            <th class="w-25" scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($topThreeProductRating as $item)
                            <tr class="table-success">
                                <td>{{ $item->info_product->name }}</td>
                                <td><span>$</span>{{ $item->info_product->gia }}</td>
                                <td>{{ $item->total }}</td>
                                <td><img class="w-50" src="{{ $item->info_product->image }}" alt=""></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-6">
            <div>
                <h5 class="border rounded-pill text-center border-danger bg-warning text-white py-3">
                    TOP 3 SẢN PHẨM BÁN THẤP NHẤT</h5>
                <table class="table">
                    <thead class="text-center">
                        <tr class="table-primary">
                            <th class="w-35" scope="col">Tên SP</th>
                            <th class="w-15" scope="col">Giá</th>
                            <th class="w-25" scope="col">Số lượng</th>
                            <th class="w-25" scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($topThreeProductRatingShort as $item)
                            <tr class="table-danger">
                                <td>{{ $item->info_product->name }}</td>
                                <td><span>$</span>{{ $item->info_product->gia }}</td>
                                <td>{{ $item->total }}</td>
                                <td><img class="w-50" src="{{ $item->info_product->image }}" alt=""></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>

    <div class="">
        <div class="pt-3">
            <h5 class="text-center text-info fw-bold">THỐNG KÊ DANH SÁCH NGƯỜI MUA</h5>
        </div>
        <div class="frmcontent">
            <div class="">
                <table class="table">
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
