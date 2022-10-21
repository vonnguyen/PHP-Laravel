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
        <form action="{{route('admin.product.postadd')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb10">
                Mã sản phẩm<br>
                <input type="text" name="masp" disabled>
            </div>
            <div class="mb10">
                Danh mục<br>
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="cate" id="">
                    @if ($listCate->count() > 0)
                        @foreach ($listCate as $cate)
                            <option value="{{$cate['id']}}">{{$cate['name']}}</option>
                        @endforeach
                        
                    @endif
                </select>
            </div>
            <div class="mb10">
                Tên sản phẩm<br>
                <input type="text" required name="name">
            </div>
            <div class="mb10">
                Giá<br>
                <input type="text" name="gia">
            </div>
            <div class="mb10">
                Hình<br>
                <input type="file" name="img">
            </div>
            <div class="mb10">
                Mô tả<br>
                <textarea name="mota" cols="30" rows="5"></textarea>
            </div>
            <div class="mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="{{route('admin.product.list')}}"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>
@endsection
