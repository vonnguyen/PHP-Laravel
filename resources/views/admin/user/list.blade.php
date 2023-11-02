@extends('layouts/index')


@section('main')
<div class="">
    <div class="frmtitle py-3 bg-info">
        <h1 class="m-0 py-2 fs-5 text-center fw-bold text-white">DANH SÁCH NGƯỜI DÙNG</h1>
    </div>
    <div class="frmcontent">
        <div class="table py-3">
            <table>
                <tr class="text-center table-info">
                    <th></th>
                    <th width="5%">MÃ KHÁCH HÀNG</th>
                    <th width="10%">TÊN KHÁCH HÀNG</th>
                    <th width="22%">EMAIL</th>
                    <th width="10%">SỐ ĐIỆN THOẠI</th>
                    <th width="20%">ĐỊA CHỈ</th>
                    <th width="10%">ROLE</th>
                    <th width="10%">HÌNH</th>
                    <th width="12%">THAO TÁC</th>
                </tr>

                @if (!empty($users))
                    @foreach ($users as $item)
                       
                        <tr>
                            <td><input type="checkbox" name="" id="" /></td>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->group_id}}</td>
                            <td><img src="{{$item['img']}}" /></td>
                            <td>
                                <a class="btn btn-warning" href="{{route('admin.user.showupdate',$item['id'])}}">Sửa</a>
                                <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa !!')" href="{{route('admin.user.delete',$item['id'])}}">Xóa</a>
                            </td>
                        </tr>

                    @endforeach
                    
                @endif


            </table>
        </div>
        <div>
             <div class="mb10">
                <input class="btn bg-primary text-light" type="button" value="Chọn tất cả" />
                <input class="btn bg-primary text-light" type="button" value="Bỏ chọn tất cả" />
                <a href="{{route('admin.user.add')}}"><input type="button" class="btn bg-primary text-light" value="Thêm" /></a>
            </div>
        </div>

        {{-- phan trang --}}
        <style>
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


            {{ $users->links() }}
        </div>
        {{--end phan trang --}}

    </div>
</div>
@endsection