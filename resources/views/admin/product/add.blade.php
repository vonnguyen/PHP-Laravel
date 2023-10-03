@extends('layouts.index')


@section('main')

    <div class="">
        <div class="frmtitle py-3 bg-info">
            <h1 class="m-0 py-2 fs-5 text-center fw-bold text-white">THÊM MỚI SẢN PHẨM</h1>
        </div>
        <div class="row frmcontent">


            @if (session('msg'))
                <div class="alert alert-success">{{ session('msg') }}</div>
            @endif
            <form action="{{ route('admin.product.postadd') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb10">
                    Mã sản phẩm<br>
                    <input type="text" name="masp" disabled>
                </div>
                <div class="mb10">
                    Danh mục<br>
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                        name="cate" id="">
                        @if ($listCate->count() > 0)
                            @foreach ($listCate as $cate)
                                <option value="{{ $cate['id'] }}">{{ $cate['name'] }}</option>
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
                    Hình chi tiết<br>
                    <input type="file" name="img_detail">
                </div>
                <div class="mb10">
                    Mô tả<br>
                    <textarea class="form-control" name="mota" cols="30" rows="5"></textarea>
                </div>
                <div class="mb10">
                    Size<br>
                    <select name="sizes[]" multiple="multiple" id="" class="tag_select2_choose">
                        @if ($sizes->count() > 0)
                            @foreach ($sizes as $size)
                                <option value={{ $size->slug }}>
                                    {{ $size->name }} - {{ $size->slug }} </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="mb10">
                    Colors<br>
                    <select name="colors[]" multiple="multiple" id="" class="tag_select2_colors">
                        @if ($colors->count() > 0)
                            @foreach ($colors as $color)
                                <option value={{ $color->slug }}>
                                    {{ $color->name }} - {{ $color->slug }} </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="mb10">
                    <input type="submit" name="themmoi" value="THÊM MỚI">
                    <input type="reset" value="NHẬP LẠI">
                    <a href="{{ route('admin.product.list') }}"><input type="button" value="DANH SÁCH"></a>
                </div>

            </form>
        </div>
    </div>
    </div>
  
@endsection

@section("script")
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="{{ asset('vendor/select2') }}/select2.min.js"></script>
<script>
$(function() {
    $(".tag_select2_choose").select2({
        tags: true,
        tokenSeparators: [',']
    });
    $(".tag_select2_colors").select2({
        tags: true,
        tokenSeparators: [',']
    });

});
</script>
@endsection
