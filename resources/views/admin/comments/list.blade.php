@extends('layouts.index')

@section('main')
    <div class="">
        <div class="frmtitle py-3 bg-info">
            <h1 class="m-0 py-2 fs-5 text-center fw-bold text-white">DANH SÁCH BÌNH LUẬN</h1>
        </div>
        <div class="frmcontent">
            <div class="table">
                <table class="display" id="table_comments">
                    <thead class="table-info" >
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">THÔNG TIN CÁ NHÂN</th>
                            <th class="text-center">BÌNH LUẬN</th>
                            <th class="text-center">ĐÁNH GIÁ</th>
                            <th class="text-center">NGÀY</th>
                            <th class="text-center">THAO TÁC</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($comments))
                            @foreach ($comments as $item)
                                <tr>
                                    <td>{{ $item->id }} </td>
                                    <td>
                                        <p>
                                            Tên: {{ $item->user->name }}
                                        </p>
                                        <p>
                                            Email: {{ $item->user->email }}
                                        </p>
                                        <p>
                                            Địa chỉ: {{ $item->user->address }}
                                        </p>
                                        <p>
                                            SĐT: {{ $item->user->phone }}
                                        </p>


                                    </td>
                                    <td> {{ $item->message }} </td>
                                    <td>
                                        <div class="" style=" position: relative">
                                            <span style="position: absolute; left: 32%;top: 0;"
                                                class="fs-4">{{ $item->rating }}</span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="yellow" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class=" text-yellow-500"
                                                    style="width: 12%; height: auto;">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                                </svg>
                                            </span>


                                        </div>

                                    </td>
                                    <td>{{ $item->created_at }} </td>
                                    <td>
                                        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa !!')"
                                            href="{{ route('admin.comments.delete', $item->id) }}">Xóa</a>
                                    </td>

                                    </td>
                                </tr>
                            @endforeach
                        @endif

                    </tbody>


                </table>
                {{-- phan trang --}}
                {{-- <style>
                    .page-item.active .page-link{
                        background-color: gray !important; 
                    }
                    .page-link{
                        width: 50px;
                        height: 50px;
                        display: flex;
                        justify-content: center;
                        align-items: center;

                        padding:8px;
                        font-size: 20px;
                    }
                </style>
                <div class="flex justify-end my-5">


                    {{ $comments->links() }}
                </div> --}}
                {{-- end phan trang --}}

            </div>
        </div>
    </div>
@endsection
{{-- Phân trang --}}
@section('script')
    <script type="module">
$(document).ready(function() {
    $('#table_comments').DataTable();
})
</script>
@endsection
