@extends('layouts.index')
@section('main')

    <div class="">
        <div class="frmtitle py-3 bg-info">
            <h1 class="m-0 py-2 fs-5 text-center fw-bold text-white">DANH MỤC SẢN PHẨM</h1>
        </div>

        <div class="pt-5">
            <a href="{{ route('admin.category.add') }}"><button class="btn bg-info">Nhập thêm</button></a>
        </div>

        <div class="frmcontent">
            <div class="table">
                <table class="display" id="table_category">
                    <thead>
                        <tr class="table-info">
                            <th class="text-center">MÃ LOẠI</th>
                            <th class="text-center">TÊN LOẠI</th>
                            <th class="text-center">THAO TÁC</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($listDanhMuc))
                            @foreach ($listDanhMuc as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a class="btn btn-warning"
                                            href="{{ route('admin.category.showupdate', $item['id']) }}">Sửa</a>
                                        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa !!')"
                                            href="{{ route('admin.category.delete', $item['id']) }}">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>



                </table>
            </div>
           
            {{-- phan trang --}}
            {{-- <style>
            .page-item.active .page-link{
                background-color: gray !important; 
            }
            .page-link{
                width: 50px;
                height: 50px;
                display: flex;
                justify-content: center;
                align-items: center;

                padding:8px;
                font-size: 20px;
            }
        </style>
        <div class="flex justify-end my-5">


            {{ $listDanhMuc->links() }}
        </div> --}}
            {{-- end phan trang --}}


        </div>
    </div>
@endsection

@section('script')
    <script type="module">
$(document).ready(function() {
    $('#table_category').DataTable();
})
</script>
@endsection
