@extends('layouts/index')


@section('main')
    {{-- <div class="frmtitle py-3 bg-info">
        <h1 class="m-0 py-2 fs-5 text-center fw-bold text-white">THỐNG KÊ</h1>
    </div> --}}
    {{-- <div class="row">
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
                            ['Giày Joden', 11],
                            ['Adidas Kampung', 2],
                            ['Giày Adidas', 2],
                            ['Giày Nike', 2],
                            ['Giày Boot', 7]

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
            <ul>
                <li class="fw-bold fs-4" style="padding-top:150px">Tổng doanh thu:{{$TongDoanhThu}}<span class="fs-3">₫</span> </li>
                <li class="fw-bold fs-4 py-3">Tổng SL hàng đã bán:  {{$TongSoHang}}</li>
                <li class="fw-bold fs-4">SL đơn hàng xuất kho:  {{$TongDonHang}} </li>
            </ul>
              
        </div>
    </div> --}}


    {{-- <div class="row">
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
                            <th class="w-25" scope="col">Hình ảnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($topThreeProductRating as $item)
                            <tr class="table-success">
                                <td>{{ $item->info_product->name }}</td>
                                <td>{{ $item->info_product->gia }}<span>₫</span></td>
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
                            <th class="w-25" scope="col">Hình ảnh</th>
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
            <div class="table">
                <table class="display" id="table_products">
                    <thead class="table-info">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">THÔNG TIN CÁ NHÂN</th>
                            <th class="text-center">TỔNG TIỀN</th>
                            <th class="text-center">TRẠNG THÁI</th>
                            <th class="text-center">NGÀY</th>
                            <th class="text-center">THAO TÁC</th>
                        </tr>

                    </thead>
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
                                <td> <span>{{ $item->total }}₫ </span></td>
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

            </div>
        </div>
    </div> --}}

    {{-- *************************************** --}}

    <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-4  grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div
                        class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
                        <div class="float-start">
                            <i class="mdi mdi-cube text-danger icon-lg" style="font-size: 50px"></i>
                        </div>
                        <div class="float-end">
                            <p class="mb-0 text-end fs-5">Tổng Doanh Thu</p>
                            <div class="fluid-container">
                                <h3 class="fw-bold text-end mb-0">
                                    {{number_format($TongDoanhThu, 2)}}<span class="fs-3">₫</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mt-3 mb-0 text-start text-md-center text-xl-start">
                        <i class="mdi mdi-alert-octagon mr-1" style="font-size: 15px" aria-hidden="true"></i> Theo sản phẩm giao thành công
                    </p>
                </div>
            </div>
        </div>
    
        <div class="col-xl-4 col-lg-4 col-md-4  grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div
                        class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
                        <div class="float-start">
                            <i class="mdi mdi-receipt-text-check-outline text-success icon-lg" style="font-size: 50px"></i>
                        </div>
                        <div class="float-end">
                            <p class="mb-0 text-end fs-5">Đơn Hàng Đã Bán</p>
                            <div class="fluid-container">
                                <h3 class="fw-bold text-end mb-0">
                                    {{$TongDonHang}}
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mt-3 mb-0 text-start text-md-center text-xl-start">
                        <i class="mdi mdi-alert-octagon mr-1" style="font-size: 15px" aria-hidden="true"></i> Theo số đơn
                    </p>
                </div>
            </div>
        </div>
    
        <div class="col-xl-4 col-lg-4 col-md-4  grid-margin stretch-card">
            <div class="card card-statistics">
                <div class="card-body">
                    <div
                        class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
                        <div class="float-start">
                            <i class="mdi mdi-chart-box-outline text-warning icon-lg" style="font-size: 50px"></i>
                        </div>
                        <div class="float-end">
                            <p class="mb-0 text-end fs-5">Số sản phẩm bán</p>
                            <div class="fluid-container">
                                <h3 class="fw-bold text-end mb-0">
                                    {{$TongSoHang}}
                            </div>
                        </div>
                    </div>
                    <p class="text-muted mt-3 mb-0 text-start text-md-center text-xl-start">
                        <i class="mdi mdi-alert-octagon mr-1" style="font-size: 15px" aria-hidden="true"></i> Theo số sản phẩm
                    </p>
                </div>
            </div>
        </div>

    </div>
    <div class="row py-5">
        <div class="col-6">
            <div>
                <h5 class="border rounded-pill text-center border-none bg-primary text-white py-3">
                    TOP 3 SẢN PHẨM BÁN CHẠY NHẤT</h5>
                <table class="table">
                    <thead class="text-center">
                        <tr class="table-primary">
                            <th class="w-35" scope="col">Tên SP</th>
                            <th class="w-15" scope="col">Giá</th>
                            <th class="w-25" scope="col">Số lượng</th>
                            <th class="w-25" scope="col">Hình ảnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($topThreeProductRating as $item)
                            <tr class="table-secondary">
                                <td>{{ $item->info_product->name }}</td>
                                <td>{{ number_format($item->info_product->gia, 2)}}<span>₫</span></td>
                                <td>{{ $item->total }}</td>
                                <td><img class="w-50" src="{{ $item->info_product->image }}" alt=""></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @if (count($topThreeProductRatingShort) > 0)
        <div class="col-6">
            <div>
                <h5 class="border rounded-pill text-center border-none bg-primary text-white py-3">
                    TOP 3 SẢN PHẨM BÁN THẤP NHẤT</h5>
                <table class="table">
                    <thead class="text-center">
                        <tr class="table-primary">
                            <th class="w-35" scope="col">Tên SP</th>
                            <th class="w-15" scope="col">Giá</th>
                            <th class="w-25" scope="col">Số lượng</th>
                            <th class="w-25" scope="col">Hình ảnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($topThreeProductRatingShort as $item)
                       
                        <tr class="table-secondary">
                            <td>{{ $item->info_product->name }}
                            </td>
                            <td>{{ number_format($item->info_product->gia, 2)}}<span>₫</span></td>
                            <td>{{ $item->total }}</td>
                            <td><img class="w-50" src="{{ $item->info_product->image }}" alt=""></td>
                        </tr>
                                
                       
                          
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
            
        @endif


    </div>

   

    <div class="container-fluid">
        <style>
            p.title_thongke {
                text-align: center;
                font-size: 20px;
                font-weight: bold;
            }
        </style>

        <div class="row">
            <p class="title_thongke">Thống kê đơn hàng doanh số</p>

            <form action="">
                @csrf
                <div class="row">
                    <div class="col-1">
                        <select name="year" class="form-select">
                            <option {{request()->year == '2023' ? "selected" : ""}} value="2023">2023</option>
                            <option {{request()->year == '2022' ? "selected" : ""}} value="2022">2022</option>
        
                        </select>
        
                    </div>
                    <div class="col-6">
                         <button type="submit" class="btn btn-primary">Chọn</button>
                    </div>
                </div>
        
               
            </form>
          
            <canvas data-json={{ json_encode($data_month) }} id="myChart"
                style="display: block;
                        box-sizing: border-box;
                        height: 635.556px;
                        width: 1272px;"></canvas>

            <canvas class="pt-5" data-json={{ json_encode($data_month) }} id="myChart2"
                style="display: block;
                    box-sizing: border-box;
                    height: 635.556px;
                    width: 1272px;"></canvas>
        </div>
    </div>

    <div class="">
        <div class="pt-3">
            <p class="title_thongke pt-3">THỐNG KÊ DANH SÁCH NGƯỜI MUA</p>
        </div>
        <div class="frmcontent">
            <div class="table">
                <table class="display" id="table_products">
                    <thead class="table-info">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">THÔNG TIN CÁ NHÂN</th>
                            <th class="text-center">TỔNG TIỀN</th>
                            <th class="text-center">TRẠNG THÁI</th>
                            <th class="text-center">NGÀY</th>
                            <th class="text-center">THAO TÁC</th>
                        </tr>

                    </thead>
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
                                <td> <span>{{ $item->total }}₫ </span></td>
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

            </div>
        </div>
    </div> 

    
@endsection

@section('script')
    {{-- <script type="module">
        $(document).ready(function() {
            $('#table_products').DataTable();
        })
    </script> --}}
    <script>
        const data_x_value = JSON.parse(document.querySelector("#myChart").dataset.json);
        var result = [];

        for (var i in data_x_value)
            result.push([i, data_x_value[i]]);
        console.log(result[0][0]);
        const yValues_2 = [];
        const yValues = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        ].map(item => {
            const item_new = result.find(element => item.includes(element[0]));
            if (!item_new){
                yValues_2.push(0);
                return 0;
            }
            let sum = 0;
            item_new[1].forEach(sp => {
                sum += sp.total;
            });
            
            yValues_2.push(sum);
            

            return item_new[1].length;  
        })

        console.log(yValues_2);
        new Chart("myChart", {
            type: "line",
            data: {
                labels: [
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'
                ],
                datasets: [{
                    fill: false,
                    lineTension: 0,
                    label: 'Số lượng SP',

                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.7)",
                    data: yValues
                },
                
                ]
            },
            options: {

                // scales: {
                //     yAxes: [{
                //         ticks: {
                //             min: 0,
                //             max: 2000
                //         }
                //     }],
                // }
            }
        });
        new Chart("myChart2", {
            type: "line",
            data: {
                labels: [
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'
                ],
                datasets: [{
                    fill: false,
                    lineTension: 0,
                    label: 'Tổng doanh thu',

                    backgroundColor: "rgb(255, 165, 0)",
                    borderColor: "rgb(255, 165, 0)",
                    data: yValues_2
                },
                
                ]
            },
            options: {

                // scales: {
                //     yAxes: [{
                //         ticks: {
                //             min: 0,
                //             max: 2000
                //         }
                //     }],
                // }
            }
        });
    </script>
@endsection
