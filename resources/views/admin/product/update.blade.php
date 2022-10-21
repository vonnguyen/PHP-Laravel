@extends('layouts/admin')


@section('content')
<div class="">
    <div class="frmtitle">
        <H1 class="m-0 py-2 fs-5">THÊM MỚI SẢN PHẨM</H1>
    </div>
    <div class="row frmcontent">
     

        @if (session('msg'))
            <div class="alert alert-success">{{session('msg')}}</div>
        @endif
        <form action="{{route('admin.product.sua',$cate->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb10">
                Mã sản phẩm<br>
                <input type="text" name="masp" disabled>
            </div>
            <div class="mb10">
                Danh mục<br>
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="cate" id="">
                    @if ($listCate->count() > 0)
                        @foreach ($listCate as $catee)
                            <option {{$catee->id == $cate->cate ? "selected":""}} value="{{$catee['id']}}">{{$catee['name']}}</option>
                        @endforeach
                        
                    @endif
                </select>
            </div>
            <div class="mb10">
                Tên sản phẩm<br>
                <input type="text" value="{{$cate->name}}"  name="name">
            </div>
            <div class="mb10">
                Giá<br>
                <input type="text" value="{{$cate->gia}}" name="gia">
            </div>
            <div class="mb10">
                Hình<br>
                <input type="file" value="{{$cate->img}}" name="img">
            </div>
            <div class="mb10">
                Mô tả<br>
                <textarea name="mota" value="{{$cate->mota}}" cols="30" rows="5"></textarea>
            </div>
            <div class="mb10">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="{{route('admin.product.list')}}"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>
@endsection
