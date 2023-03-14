@extends('layouts/index')

@section('main')
<div class="">
    <div class=" frmtitle">
        <h1 class="m-0 py-2 fs-5">DANH SÁCH NHÓM NGƯỜI DÙNG</h1>
    </div>
    <div class=" frmcontent">
        <div class=" mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th class="text-center">MÃ NHÓM</th>
                    <th class="text-center">TÊN NHÓM</th>
                    <th></th>
                </tr>
                
                @if (!empty($groups))
                    @foreach ($groups as $item)
                        <tr>
                            <td><input type="checkbox" name="" id="" /></td>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route("admin.groups.showupdate", $item["id"])}}">Sửa</a>
                                <a class="btn btn-danger" href="{{route("admin.groups.delete", $item["id"])}}">Xóa</a>
                            </td>
                        </tr>
                        
                    @endforeach
                    
                @endif


            </table>
        </div>
        <div class=" mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="{{route('admin.groups.add')}}"><input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>

@endsection