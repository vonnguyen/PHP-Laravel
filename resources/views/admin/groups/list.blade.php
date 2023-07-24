@extends('layouts/index')

@section('main')
    <div class="">
        <div class="frmtitle py-3 bg-info">
            <h1 class="m-0 py-2 fs-5 text-center fw-bold text-white">DANH SÁCH NHÓM NGƯỜI DÙNG</h1>
        </div>

        <div class=" mb10">
            <a href="{{ route('admin.groups.add') }}">
                <button class="btn bg-primary" style="color: white">Thêm mới</button>
            </a>
        </div>

        <div class=" frmcontent">
            <div class="table">
                <table class="display" id="table_groups">
                    <thead>
                        <tr class="table-info text-center">
                            <th></th>
                            <th class="text-center">MÃ NHÓM</th>
                            <th class="text-center">TÊN NHÓM</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @if (!empty($groups))
                            @foreach ($groups as $item)
                                <tr>
                                    <td><input type="checkbox" name="" id="" /></td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a class="btn btn-warning"
                                            href="{{ route('admin.groups.showupdate', $item['id']) }}">Sửa</a>
                                        <a class="btn btn-danger"
                                            href="{{ route('admin.groups.delete', $item['id']) }}">Xóa</a>
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
    $('#table_groups').DataTable();
})
</script>
@endsection
