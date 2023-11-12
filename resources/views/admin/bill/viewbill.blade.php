<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="icon" href="{{ asset('assets/images/Asset 2.png') }}" type="image/x-icon"> --}}
    <title>Hóa đơn</title>
</head>

<body>
    <div class="container">

        <table class="title-content">
            <tbody>
                <tr>
                    <td class="title-left td">

                        <h4>ShoeZone Shop</h4>

                    </td>
                    <td class="title-mid td">
                        <h1>HÓA ĐƠN</h1>
                        <strong>Số phiếu:
                            {{ $exports->id }}
                        </strong>
                    </td>
                    <td class="title-right td" style="padding-top: 50px">
                        <a href="{{ route('admin.bill.generate_invoice', ['id' => $exports->id]) }}">In hóa đơn</a>
                    </td>

                </tr>
            </tbody>

            <div class="clear"></div>
        </table>


        <div class="info">
            <p> Họ và tên khách hàng: {{ $exports->fullname }}</p>
            <p> Ngày tháng năm: {{ $exports->created_at->format('d-m-Y') }}</p>
            <p> Địa chỉ người nhận: {{ $exports->address }}</p>

        </div>
        <table border="1">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Màu sắc</th>
                    <th>Kích thước</th>
                    <th>Số lượng</th>
                    <th>Ship</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($exports->detailbill as $keys => $item)
                    @if ($item->product)
                        <tr>
                            <td>{{ $keys + 1 }}</td>
                            <td> {{ $item->id_pro }}</td>
                            <td>{{ $item->product->name }}</td>
                            <td>{{ $item->color }}</td>
                            <td> {{ $item->size }}</td>
                            <td>{{ $item->number }}</td>
                            <td>{{number_format($exports->priceship, 0)}}₫</td>
                            <td>{{ number_format($item->price, 0)}}₫</td>
                        </tr>
                    @endif
                @endforeach

                <tr>

                    <td class="summary" colspan="7">Tổng giá tiền: </td>

                    {{-- <td> {{ number_format($exports->total, 0) }}</td> --}}
                    <td>{{ number_format($exports->total + $exports->priceship, 0) }}₫</td>
                </tr>
            </tbody>
        </table>
        <table class="footer">
            <tbody>
                <tr>
                    <td>NGƯỜI LẬP PHIẾU</td>
                </tr>
            </tbody>

        </table>

    </div>
</body>
<style>
    body {
        margin: 0;
        font-family: 'Dejavu Sans';
        height: 100%;

    }

    h1 {
        font-size: 15pt;
    }

    .clear {
        clear: both;
    }

    td,
    th,
    p {
        font-size: 10pt;
    }

    .td {
        vertical-align: top;

    }

    .container {
        margin-left: 10px;
        margin-right: 10px;
    }

    .logo-icon {
        width: 25%;
    }

    .title-content .title-right {

        text-align: start;
        width: 30%;
        text-align: center;
    }

    .title-left p,
    .title-right p {
        margin: 0;
        font-size: 14pt;
    }


    .title-content .title-left {
        width: 30%;
        text-align: center;
    }

    .title-right h4,
    .title-left h4 {
        margin-bottom: 5px;
    }

    .title-mid {
        text-align: center;
        width: 40%;
        margin-bottom: 15px;
    }


    .info {
        margin: 75px 0;
    }

    table {
        display: table;
        border-collapse: separate;
        border-spacing: 2px;
        border-color: gray;
        width: 100%;
        margin-bottom: 20px;
    }

    tbody {
        text-align: center;
    }

    .summary {
        font-weight: bold;
    }

    .btn {
        text-align: end;
    }
</style>

</html>
