@extends('layouts.index')

@section('main')
    <div class="">
        <div class="frmtitle py-3 bg-info">
            <h1 class="m-0 py-2 fs-5 text-center fw-bold text-white">DANH SÁCH SẢN PHẨM</h1>
        </div>
        <div class="frmcontent">
            <form action="{{ route('admin.product.list') }}">
                <div class="row">
                    <div class="col-6">
                        <div class="row mb10 pb-2" style="width:100%; margin:auto; ">

                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                                name="cate" id="">
                                <option value="">Danh mục sản phẩm</option>
                                @if ($listCate->count() > 0)
                                    @foreach ($listCate as $cate)
                                        <option {{ request()->cate && request()->cate == $cate->id ? 'selected' : false }}
                                            value="{{ $cate->id }}">{{ $cate->name }}</option>
                                    @endforeach
                                @endif

                            </select>

                        </div>
                    </div>
                    <div class="col-1">
                        <div class="text-end mb-3">
                            <input class="btn bg-primary btn-primary" type="submit" value="Chọn">
                        </div>
                    </div>
                </div>

            </form>

            <div class="mb10">
                <a href="{{ route('admin.product.add') }}">
                    <button class="btn bg-primary" style="color: white">Thêm mới sản phẩm</button>
                </a>
            </div>

            <div class="table">
                <table class="display" id="table_products">
                    <thead class="table-info">
                        <tr>
                            <th class="text-center" width="1%"></th>
                            <th class="text-center" width="3%">MSP</th>
                            <th class="text-center" width="25%">TÊN SẢN PHẨM</th>
                            <th class="text-center" width="10%">GIÁ</th>
                            <th class="text-center" width="10%">HÌNH</th>
                            <th class="text-center" width="1%">LƯỢT XEM</th>
                            <th class="text-center" width="31%">MÔ TẢ</th>
                            <th class="text-center" width="2%">SỐ LƯỢNG</th>
                            <th class="text-center" width="17%">THAO TÁC</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if (!empty($listProduct))
                            @foreach ($listProduct as $item)
                                <tr>
                                    <td><input type="checkbox" name="" id="" /></td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ number_format($item->gia, 0) }}₫</td>
                                    <td><img style="object-fit:cover;width:200px" src="{{ $item['image'] }}" /></td>
                                    <td>{{ $item->views }}</td>
                                    <td>{{ $item->mota }}</td>
                                    <td>
                                        @if ($item->number == 0)
                                            <span class="text-danger">Sản phẩm hết hàng</span>
                                        @elseif ($item->number < 10)
                                            <span class="text-warning">Số lượng còn ít</span>
                                        @else
                                            {{ $item->number }}
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-warning"
                                            href="{{ route('admin.product.showupdate', $item['id']) }}">Sửa</a>
                                        <a onclick="return confirm('Bạn có muốn xóa không ?')" class="btn btn-danger"
                                            href="{{ route('admin.product.delete', $item['id']) }}">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>


                </table>
                {{-- </div> --}}

            </div>
        </div>
    @endsection

    @section('script')
        <script type="module">
            $(document).ready(function() {
                $('#table_products').DataTable();
            })
        </script>
    @endsection
