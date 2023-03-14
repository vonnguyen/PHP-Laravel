@extends('layouts/index')


@section('main')
<div class="">
    <div class="frmtitle">
        <h1 class="m-0 py-2 fs-5">DANH SÁCH KHÁCH HÀNG</h1>
    </div>
    <div class="frmcontent">
        <div class="mb10 frmdsloai">
            <table>
                <tr class="text-center">
                    <th></th>
                    <th width="3%">MÃ KHÁCH HÀNG</th>
                    <th width="15%">TÊN KHÁCH HÀNG</th>
                    <th width="20%">EMAIL</th>
                    <th width="10%">SỐ ĐIỆN THOẠI</th>
                    <th width="20%">ĐỊA CHỈ</th>
                    <th width="2%">ROLE</th>
                    <th width="10%">HÌNH</th>
                    <th width="20%">THAO TÁC</th>
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
                            <td> @if ($item['group_id'] == 1) 
                                {{$role = "ADMIN"}}
                                @elseif(($item['group_id'] == 2))
                                    {{$role = "STAFF"}}
                                    @else
                                    {{$role = "CLIENT"}}
                            @endif</td>
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
                <input type="button" value="Chọn tất cả" />
                <input type="button" value="Bỏ chọn tất cả" />
                <a href="{{route('admin.user.add')}}"><input type="button" value="Thêm" /></a>
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