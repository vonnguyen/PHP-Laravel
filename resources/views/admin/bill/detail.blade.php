

@extends('layouts/index')
@section('link')
    <script src="https://cdn.tailwindcss.com"></script>
@endsection

@section('main')

<div class="pt-[110px]">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

           

                <div class="border border-2 rounded-lg p-3 mt-4">
                    <p class="flex gap-5 border-b pb-2"><span class="text-gray-500">Liên hệ</span><span
                        class="font-semibold">{{$data->sdt}}</span></p>
                        <p class="flex gap-5 m-0"><span class="text-gray-500">Địa chỉ người nhận</span><span
                            class="font-semibold">{{$data->address}}</span></p>
                    <p class="flex  gap-5 py-2 m-0 border-b py-2"><span class="text-gray-500">Phương thức</span><span
                            class="font-semibold">Phí vận chuyển</span><span>${{$data->priceship}}</span></p>
                    <p class="flex gap-5 py-2 m-0"><span class="text-gray-500">Phương thức thanh toán</span><span
                            class="font-semibold">{{$data->phuongthucTT}}</span></p>
                </div>

                <div class="method">
                    <p class="mt-5 text-xl">Phương thức vận chuyển</p>
                    <div class="border border-2 rounded-lg p-3 flex justify-between items-center w-full">
                        <p class="m-0 flex gap-3 items-center"><span
                                class="p-[10px] flex justify-center items-center block w-[5px] h-[5px] max-w-[5px] max-h-[5px] bg-blue-600 rounded-full"><span
                                    class="p-[3px] block w-[3px] h-[3px] max-w-[3px] max-h-[3px] rounded-full leading-none bg-white"></span></span><span>
                                    Phí vận chuyển</span></p><span class="font-semibold">${{$data->priceship}}</span>
                    </div>
                </div>

{{-- Cập nhật trạng thái giao hàng --}}
                @if ($data->statuss == 2)
                <br>
                    <h3 class="text-success">ĐƠN HÀNG ĐÃ HOÀN THÀNH</h3>
                @else
                <form action="">
                    @csrf

                    <select name="status" class="form-control mt-3" id="" method="post">
                        <option value="0" {{(int)$data->statuss == 0 ? 'selected' : ''}}>Đang chuẩn bị hàng</option>
                        <option value="1" {{(int)$data->statuss == 1 ? 'selected' : ''}}>Đang giao hàng</option>
                        <option value="2" {{(int)$data->statuss == 2 ? 'selected' : ''}}>Giao hàng thành công</option>

                    </select>
                    <div class="text-end">

                        <button type="submit" class="px-4 hover:bg-gray-400 transition-all py-2 
                                                bg-blue-500 mt-3  rounded-lg text-white">Cập nhật</button>
                    </div>
                </form>
                @endif
            </div>

            <div class="col-sm-6">
                <div class="bg-gray-50  p-5 min-h-screen">
                    <div class="listItem flex flex-col gap-3 border-b pb-3">

                       
                        @if ($detail_bill->count() > 0)
                            @foreach ($detail_bill as $item)
                              
                                <div class="flex items-center justify-between ">
                                    <div class="flex gap-3 items-center">

                                        <div class="image w-fit relative " >
                                            {{-- duong dan anh --}}
                                            <img
                                                src="{{$item['image']}}"
                                                class="w-[80px] border rounded-2xl" alt=""><span
                                                class="absolute top-[-8px] p-1 bg-gray-500 rounded-full leading-none  text-white right-[-8px] min-w-[20px] min-h-[20px] max-w-[20px] max-h-[20px] flex justify-center items-center">{{$item->number}}</span>
                                        </div>
                                        <div class="flex flex-col">

                                            <p class="font-semibold"><span style="font-size: 15px">Tên sản phẩm:
                                                </span>{{ $item->name }}</p>
                                            <p class="font-semibold"><span style="font-size: 15px">Màu sắc: </span>
                                                {{ $item->color }}</p>
                                            <p class="font-semibold"><span style="font-size: 15px">Kích thước: </span>
                                                {{ $item->size }}</p>
                                        </div>
                                    </div>
                                    <p class="flex-end font-semibold"> $ {{number_format($item->price ,2)}}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="subtotal py-3 border-b m-0">
                        <p class="flex justify-between"><span class="text-gray-600">Tổng phụ thu</span><span
                                class="font-semibold">  {{ number_format($data->total, 2) }}₫</span></p>
                        <p class="flex justify-between items-center m-0"><span class="text-gray-600">Phí
                                Ship</span><span class="text-xs">{{ number_format($data->priceship, 2) }}₫
                            </span></p>
                        <p class="flex justify-between items-center m-0"><span class="text-gray-600">Đang chuyển
                                hàng</span><span class="text-xs">Tính toán ở bước tiếp theo</span></p>
                    </div>
                    <div class="total py-3">
                        <p class="flex justify-between items-center"><span class="text-xl">Tổng cộng</span><span
                                class="font-semibold text-3xl">{{ number_format($data->total + $data->priceship, 2) }}₫</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

 @endsection 