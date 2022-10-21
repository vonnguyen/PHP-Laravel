@extends('layouts/admin')


@section('content')
<div class="">
    <div class="frmtitle">
        <h1 class="m-0 py-2 fs-5">DANH SÁCH KHÁCH HÀNG</h1>
    </div>
    <div class="frmcontent">
        <div class="mb10 frmdsloai">
            <table>
                <tr class="text-center">
                    <th></th>
                    <th width="3%">MÃ KHÁCH HÀNG</th>
                    <th width="15%">TÊN KHÁCH HÀNG</th>
                    <th>EMAIL</th>
                    <th>SỐ ĐIỆN THOẠI</th>
                    <th width="15%">ĐỊA CHỈ</th>
                    <th>ROLE</th>
                    <th width="10%">HÌNH</th>

                    <th width="20%"></th>
                </tr>
                <?php
                if (!empty($users)) {

                    foreach ($users as $item) {
                        $sua = 'index.php?act=suatk&id=' . $item['id'];
                        $xoa = 'index.php?act=xoatk&id=' . $item['id'];
                        if ($item['group_id'] == 1) {
                            $role = "ADMIN";
                        } else {
                            $role = "CLIENT";
                        }
                        echo '<tr>
                        <td><input type="checkbox" name="" id="" /></td>
                        <td>' . $item['id'] . '</td>
                        <td>' . $item['name'] . '</td>
                        <td>' . $item['email'] . '</td>
                        <td>' . $item['phone'] . '</td>
                        <td>' . $item['address'] . '</td>
                        <td>' .  $role . '</td>
                        <td><img src="' .  $item['img'] . '" /></td>


                        <td>
                            <a href="'.route('admin.user.showupdate',$item['id']).'"><input type="button" value="Sửa" /></a>
                            <a href="'.route('admin.user.delete',$item['id']).'"><input type="button" value="Xóa" /></a>
                        </td>
                    </tr>';
                    }
                }

                ?>


            </table>
        </div>
        <div>
             <div class="mb10">
                <input type="button" value="Chọn tất cả" />
                <input type="button" value="Bỏ chọn tất cả" />
                <a href="{{route('admin.user.add')}}"><input type="button" value="Thêm" /></a>
            </div>
        </div>
    </div>
</div>
@endsection