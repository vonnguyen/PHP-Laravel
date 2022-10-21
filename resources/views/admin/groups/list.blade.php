@extends('layouts/admin')

@section('content')
<div class="">
    <div class=" frmtitle">
        <h1>DANH SÁCH NHÓM NGƯỜI DÙNG</h1>
    </div>
    <div class=" frmcontent">
        <div class=" mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th class="text-center">MÃ NHÓM</th>
                    <th class="text-center">TÊN NHÓM</th>
                    <th></th>
                </tr>
                <?php
                if (!empty($groups)) {
                        foreach ($groups as $item) {
                        echo '<tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>' . $item['id'] . '</td>
                        <td>' . $item['name'] . '</td>
                        <td>
                            <a href="'.route("admin.groups.showupdate", $item["id"]).'"><input type="button" value="Sửa" /></a>
                            <a href="'.route("admin.groups.delete", $item["id"]).'"><input type="button" value="Xóa" /></a>
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
            <a href="{{route('admin.groups.add')}}"><input type="button" value="Nhập thêm" /></a>
        </div>
    </div>
</div>

@endsection