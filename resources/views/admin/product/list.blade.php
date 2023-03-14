@extends('layouts.index')

@section('main')
<div class="">
    <div class="frmtitle">
        <h1 class="m-0 py-2 fs-5">DANH SÁCH SẢN PHẨM</h1>
    </div>
    <div class="frmcontent">
        <form action="{{route('admin.product.list')}}">

            <div class="row mb10 pb-2" style = "width:100%; margin:auto; ">
              
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="cate" id="">
                        <option value="">Danh mục sản phẩm</option>
                        @if ($listCate->count() > 0)
                        
                            @foreach ($listCate as $cate)
                                <option {{request()->cate && request()->cate == $cate->id ? 'selected' : false}} 
                                    value="{{$cate->id}}">{{$cate->name}}</option>
                            @endforeach
                            
                        @endif
            
                    </select>
                    
            </div>
            <div class="text-end mb-3">
                 <input class="btn bg-primary btn-primary" type="submit" value="Submit">
            </div>
           
        </form>

        <div  class="mb10 frmdsloai text-center">
            <table>
                <tr>
                    <th width="1%" ></th>
                    <th width="3%" >MÃ SẢN PHẨM</th>
                    <th width="25%" >TÊN SẢN PHẨM</th>
                    <th width="10%" >GIÁ</th>
                    <th width="10%" >HÌNH</th>
                    <th width="1%" >LƯỢT XEM</th>
                    <th width="31%" >MÔ TẢ</th>
                    <th width="19%" >THAO TÁC</th>
                </tr>
                @if (!empty($listProduct))
                    @foreach ($listProduct as $item)
                        <tr>
                            <td><input type="checkbox" name="" id="" /></td>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>$ {{$item->gia}}</td>
                            <td><img style = "object-fit:cover;width:200px" src="{{$item['image']}}" /></td>
                            <td>{{$item->luotxem}}</td>
                            <td>{{$item->mota}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route('admin.product.showupdate',$item['id'])}}">Sửa</a>
                                <a onclick="return confirm('Bạn có muốn xóa không ?')" class="btn btn-danger" href="{{route('admin.product.delete', $item['id'])}}">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                @endif


            </table>
        </div>
        <div class="mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="{{route('admin.product.add')}}"><input type="button" value="Nhập thêm" /></a>
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


            {{ $listProduct->links() }}
        </div>
        {{--end phan trang --}}

    </div>
</div>
@endsection
