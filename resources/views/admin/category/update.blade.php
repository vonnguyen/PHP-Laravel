@extends('layouts.index')


@section('main')
<div class="">
    <div class="frmtitle py-3 bg-info">
        <h1 class="m-0 py-2 fs-5 text-center fw-bold text-white">Cập nhật danh mục sản phẩm</h1>
    </div>
    <div class="row frmcontent">
     

        @if (session('msg'))
            <div class="alert alert-success">{{session('msg')}}</div>
        @endif
        <form action="{{route('admin.category.sua',$cate->id)}}" method="POST">
            @csrf
            <div class="mb10">
                Mã loại<br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="mb10"> 
                Tên loại<br>
                <input type="text" value="{{$cate->name}}"  name="name">
            </div>
            <div class="mb10">
                <button class="btn btn-info" type="submit" name="themmoi">CẬP NHẬT</button>
                <button class="btn btn-info" type="reset">NHẬP LẠI</button>
                <a href="{{ route('admin.category.listds') }}"><button class="btn btn-info">DANH SÁCH</button></a>
            </div>

        </form>
    </div>
</div>
</div>
@endsection
