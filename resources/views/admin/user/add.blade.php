@extends('layouts/index')


@section('main')
<div class="">
    <div class="frmtitle py-3 bg-info">
        <h1 class="m-0 py-2 fs-5 text-center fw-bold text-white">THÊM MỚI NGƯỜI DÙNG</h1>
    </div>
    <div class="row frmcontent">
     

        @if (session('msg'))
            <div class="alert alert-success">{{session('msg')}}</div>
        @endif
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb10">
                Mã người dùng<br>
                <input  type="text" name="masp" disabled>
            </div>
            <div class="mb10">
                Tên người dùng<br>
                <input class="form-control" type="text" required name="name">
            </div>
            <div class="mb10">
                Email<br>
                <input class="form-control" type="text" name="email">
            </div>
            <div class="mb10">
                Password<br>
                <input class="form-control" type="password" name="pass">
            </div>
            <div class="mb10">
                Số Điện Thoại<br>
                <input class="form-control" type="text" name="sdt">
            </div>
            <div class="mb10">
                Địa Chỉ<br>
                <input class="form-control" type="text" name="diachi">
            </div>
            <div class="mb10">
                Group<br>
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="group" id="">
                    @if ($groups->count() > 0)
                        @foreach ($groups as $group)
                            <option value="{{$group['id']}}">{{$group['name']}}</option>
                        @endforeach
                        
                    @endif
                </select>
            </div>
            <div class="mb10">
               Hình<br>
                <input type="file" name="img">
            </div>
            <div class="mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="{{route('admin.user.list')}}"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>
@endsection
