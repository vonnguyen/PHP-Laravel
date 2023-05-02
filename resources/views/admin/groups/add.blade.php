@extends('layouts/index')

@section('main')
<div class="">
    <div class="frmtitle py-3 bg-info">
        <h1 class="m-0 py-2 fs-5 text-center fw-bold text-white">THÊM NHÓM NGƯỜI DÙNG</h1>
    </div>
    <div class=" frmcontent">
        <?php if (isset($data['thongbao']) && $data['thongbao'] != "") {
            echo '<h2>' . $data['thongbao'] . '</h2>';
        }
        ?>
        <form action="{{route('admin.groups.postadd')}}" method="post">
            @csrf
            <div class=" mb10">
                Mã nhóm<br>
                <input type="text" name="manhom" disabled>
            </div>
            <div class=" mb10">
                Tên nhóm người dùng<br>
                <input type="text" required name="tennhom">
                {{-- <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="group" id="">
                    @if ($groups->count() > 0)
                        @foreach ($groups as $group)
                            <option {{$group['id']==$user->group_id ? 'selected':''}} value="{{$group['id']}}">{{$group['name']}}</option>
                        @endforeach
                        
                    @endif
                </select> --}}
        
        
            </div>
            <div class=" mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="{{route('admin.groups.list')}}"><input type="button" value="DANH SÁCH"></a>
            </div>

        </form>
    </div>
</div>
</div>

@endsection