@extends('layouts/admin')
@section('content')

<div class="">
    <div class=" frmtitle">
        <h1 class="fs-5 m-0 p-2">DANH SÁCH LOẠI HÀNG</h1>
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
                <?php
                if (!empty($listDanhMuc)) {

                    foreach ($listDanhMuc as $item) {
                        $sua = 'index.php?act=suadm&id=' . $item['id'];
                        $xoa = 'index.php?act=xoadm&id=' . $item['id'];

                        echo '<tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>' . $item['id'] . '</td>
                        <td>' . $item['name'] . '</td>
                        <td>
                            <a href="' . route('admin.category.showupdate',$item['id']) . '"><input type="button" value="Sửa" /></a>
                            <a href="' . route('admin.category.delete',$item['id']) . '"><input type="button" value="Xóa" /></a>
                        </td>
                    </tr>';
                    }
                }

                ?>


            </table>
        </div>
        <div class=" mb10">
            <input type="button" value="Chọn tất cả" />
            <input type="button" value="Bỏ chọn tất cả" />
            <input type="button" value="Xóa các mục đã chọn" />
            <a href="{{route('admin.category.add')}}"><input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>
@endsection