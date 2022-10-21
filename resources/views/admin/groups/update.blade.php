@extends('layouts/admin')

@section('content')
<div class="">
    <div class=" frmtitle">
        <H1>THÊM NHÓM NGƯỜI DÙNG</H1>
    </div>
    <div class=" frmcontent">
        <?php if (isset($data['thongbao']) && $data['thongbao'] != "") {
            echo '<h2>' . $data['thongbao'] . '</h2>';
        }
        ?>
        <form action="" method="post">
            @csrf
            <div class=" mb10">
                Mã nhóm<br>
                <input type="text" name="manhom" disabled>
            </div>
            <div class=" mb10">
                Tên nhóm người dùng<br>
                <input type="text" required name="tennhom" value="{{$group['name']}}">  {{--truyền dữ liệu củ--}}
            </div>
            <div class=" mb10">
                <input type="submit" name="themmoi" value="UPDATE">
                <input type="reset" value="NHẬP LẠI">
                <a href="{{route('admin.groups.list')}}"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>

@endsection