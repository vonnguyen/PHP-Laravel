@extends('layouts.index')
@section('main')

<div class="">
    <div class="frmtitle">
        <h1 class="m-0 py-2 fs-5">DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class=" frmcontent">
        <div class=" mb10 frmdsloai text-center">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>

                @if (!empty($listDanhMuc))

                    @foreach ($listDanhMuc as $item)
                        <tr>
                            <td><input type="checkbox" name="" id="" /></td>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route('admin.category.showupdate',$item['id'])}}">Sửa</a>
                                <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa !!')" href="{{ route('admin.category.delete',$item['id'])}}">Xóa</a>
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
            <a href="{{route('admin.category.add')}}"><input type="button" value="Nhập thêm" /></a>
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


            {{ $listDanhMuc->links() }}
        </div>
        {{--end phan trang --}}

        
    </div>
</div>
@endsection