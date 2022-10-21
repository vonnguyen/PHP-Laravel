@extends('layouts/admin')


@section('content')
<div class="">
    <div class="frmtitle">
        <H1 class="m-0 py-2 fs-5">THÊM MỚI DANH MỤC</H1>
    </div>
    <div class="row frmcontent">
     

        @if (session('msg'))
            <div class="alert alert-success">{{session('msg')}}</div>
        @endif
        <form action="{{route('admin.category.add')}}" method="POST">
            @csrf
            <div class="mb10">
                Mã loại<br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="mb10">
                Tên loại<br>
                <input type="text" required name="name">
            </div>
            <div class="mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="{{route('admin.category.listds')}}"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>
@endsection
