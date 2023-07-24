@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('client') }}/assets/product.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/login.css">
@endsection

@section('content')

    <div class="pt-[110px]">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <div class="navbar mt-5">
                        <ul class="d-flex gap-2 p-0">
                            <li><a href="{{ route('whish') }}">Giỏ hàng ></a> </li>
                            <li><a href="{{ route('infomation') }}">Thông tin liên lạc ></a> </li>
                            <li><a href="{{ route('shipping') }}">Đang chuyển hàng ></a> </li>
                            <li>Thanh toán </li>
                        </ul>
                    </div>

                    <div class="contact-info d-flex justify-content-between pb-3 mt-5">
                        <h5 class="fs-3">Thông tin liên lạc</h5>
                    </div>
                    <form action="{{ route('saveinfo') }}" class="getInfo" method="post">

                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control p-3" id="exampleFormControlInput1"
                                readonly value="{{ Auth::user()->email }}">
                        </div>
                        <div class="address-info pb-4">
                            <h5 class="fs-3">Địa chỉ giao hàng</h5>
                            <div class="pb-sm-3 mt-3">
                                <select name="country" class="form-select p-3" aria-label="Default select example">
                                    <option selected value="Viet Nam">Việt Nam</option>

                                </select>
                            </div>
                            <div class="name-info pb-sm-3">
                                <div class="row">
                                    <div class="col">
                                        <input required type="text" class="form-control p-3" name="firstName"
                                            placeholder="Họ" aria-label="First name">
                                    </div>
                                    <div class="col">
                                        <input required type="text" class="form-control p-3" name="lastName"
                                            placeholder="Tên" aria-label="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">

                                <div class="col">
                                    <input required type="text" class="form-control p-3" name="phone"
                                        placeholder="số điện thoại" aria-label="">
                                </div>
                            </div>

                            <div class="name-info pb-sm-3">
                                <div class="row">
                                    <div class="col-4">
                                        <select required class="form-control p-3" name="province" placeholder="Thành phố/Tỉnh"
                                            aria-label=""></select>
                                    </div>
                                    <div class="col-4">
                                        <select required class="form-control p-3" name="district" placeholder="Phường/Huyện"
                                            aria-label=""></select>
                                    </div>
                                    <div class="col-4">
                                        <select required class="form-control p-3" name="ward" placeholder="Thôn/Xã"
                                            aria-label=""></select>
                                    </div>
                                </div>
                            </div>
                            <div class="name-info pb-sm-3">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="address" class="form-control p-3"
                                            id="exampleFormControlInput1" placeholder="ví dụ số 20/A Ninh Kiều CT">
                                    </div>

                                </div>
                            </div>

                            <div class="form-check pb-sm-4">
                                <input class="form-check-input p-md-2" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Lưu thông tin này cho lần sau
                                </label>
                            </div>

                            <div class="step-footer d-flex justify-content-sm-between">
                                <div class="product-wishlist-cart">
                                    <a href="{{ route('whish') }}">
                                        <button class="dt-sc-btn">
                                            Trở về
                                        </button>
                                    </a>
                                </div>
                                <div class="product-wishlist-cart">
                                    <button type="submit" class="dt-sc-btn">
                                        Tiếp tục
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>

                <div class="col-sm-6">
                    <div class="bg-gray-50  p-5 min-h-screen">
                        <div class="listItem flex flex-col gap-3 border-b pb-3">

                            @php
                                $sum = 0;
                            @endphp
                            @if (getCart())
                                @foreach (getCart() as $item)
                                    @php
                                        $sum += $item->total;
                                    @endphp
                                    <div class="flex items-center justify-between ">
                                        <div class="flex gap-3 items-center">

                                            <div class="image w-fit relative ">
                                                {{-- duong dan anh --}}
                                                <img src="{{ $item->image }}" class="w-[80px] border rounded-2xl"
                                                    alt=""><span
                                                    class="absolute top-[-8px] p-1 bg-gray-500 rounded-full leading-none  text-white right-[-8px] min-w-[20px] min-h-[20px] max-w-[20px] max-h-[20px] flex justify-center items-center">{{ $item->number }}</span>
                                            </div>
                                            <div class="flex flex-col">

                                                <p class="font-semibold"><span style="font-size: 15px">Tên sản phẩm: </span>{{ $item->name }}</p>
                                                <p class="font-semibold"><span style="font-size: 15px">Màu sắc: </span> {{ $item->color }}</p>
                                                <p class="font-semibold"><span style="font-size: 15px">Kích thước: </span> {{ $item->size }}</p>
                                            </div>

                                        </div>
                                        
                                        <p class="flex-end font-semibold">{{ number_format($item->gia, 2)}} ₫</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="subtotal py-3 border-b m-0">
                            <p class="flex justify-between"><span class="text-gray-600">Tổng phụ thu</span><span
                                    class="font-semibold"> {{ number_format($sum, 2)}} ₫</span></p>
                            <p class="flex justify-between items-center m-0"><span
                                    class="text-gray-600">Đang chuyển hàng</span><span class="text-xs">Tính toán ở bước tiếp theo</span></p>
                        </div>
                        <div class="py-3">
                            <p class="flex justify-between items-center"><span class="text-xl">Tổng cộng</span>
                                <span>
                                    <span class="font-semibold text-3xl total">{{ number_format($sum, 2) }}
                                    </span>
                                    <span class="font-semibold text-3xl"> ₫
                                    </span>
                                </span>

                            </p>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

@endsection


@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
        integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        window.addEventListener('load', function(

        ) {


            const img_vnpay = document.querySelector('.vnpay_img');
            const formPayment = document.querySelector('.getInfo')

            formPayment?.addEventListener('submit', async function(e) {
                e.preventDefault();
                const firstName = document.querySelector('input[name="firstName"]').value;
                const lastName = document.querySelector('input[name="lastName"]').value;
                const fullname = lastName + ' ' + firstName;
                const phone = document.querySelector('input[name="phone"]').value;
                const email = document.querySelector('input[name="email"]').value;
                const address = document.querySelector('input[name="address"]').value;
                const select_province = JSON.parse(JSON.stringify(localStorage.getItem('province_text'))) || null;
                const select_district = JSON.parse(JSON.stringify(localStorage.getItem('district_text'))) || null;
                const select_ward = JSON.parse(JSON.stringify(localStorage.getItem('ward_text'))) || null;
                const total = document.querySelector(".total").textContent;
                console.log(formPayment.getAttribute('action'));


                if (!fullname || !phone || !email || !address || !total || !select_province || !
                    select_district || !select_ward) {
                    alert("Thông tin chưa hợp lệ!!!")
                } else {
                    const id_district = JSON.parse(JSON.stringify(localStorage.getItem('district')));
                    const service = await axios({
                        method: "POST",
                        url: "https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/available-services",

                        headers: {
                            "Content-Type": "application/json",
                            token: "07e3022f-225e-11ee-96dc-de6f804954c9",
                        },
                        data: JSON.stringify({
                            shop_id: 3809178,
                            from_district: 2050,
                            to_district: +id_district,
                        }),
                    });

                    localStorage.setItem(
                        "service_id",
                        JSON.stringify(service.data.data[0].service_id)
                    );
                    //
                    const total_price = +document.querySelector('.total').textContent;
                    const {data} = await axios({
                        method: "POST",
                        url: "https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee",

                        headers: {
                            "Content-Type": "application/json",
                            token: "8909150e-3f24-11ed-b824-262f869eb1a7",
                            ShopId: "3299752",
                        },
                        data: JSON.stringify({
                            service_id: +service.data.data[0].service_id,
                            insurance_value: parseInt(total_price),
                            coupon: null,
                            to_ward_code: localStorage.getItem('code_ward'),
                            to_district_id: +id_district,
                            from_district_id: 2050,
                            height: 50,
                            length: 20,
                            weight: 100,
                            width: 20,
                        }),
                    });
                    console.log(data);
                    const data_payment = {
                        method: "Vn_pay",
                        fullname,
                        email,
                        phone,
                        address: address + ", " + select_ward + ", " + select_district + ", " +
                            select_province,
                        total,
                        fee: Number.parseFloat((data.data.total))
                    }
                   
                    localStorage.setItem('data_payment', JSON.stringify(data_payment));

                    localStorage.setItem('url_payment', JSON.stringify(formPayment.getAttribute(
                        'action')));
                    formPayment.submit()

                }



            })
            // địa chỉ
            const select_province = document.querySelector('select[name="province"]');
            const select_district = document.querySelector('select[name="district"]');
            const select_ward = document.querySelector('select[name="ward"]');

            const getProvince = async () => {
                try {
                    const {
                        data
                    } = await axios({
                        method: "GET",
                        url: "https://online-gateway.ghn.vn/shiip/public-api/master-data/province",

                        headers: {
                            "Content-Type": "application/json",
                            token: "07e3022f-225e-11ee-96dc-de6f804954c9",
                        },
                    });
                    const html = `<option selected class="province" value="0">Chọn tỉnh</option>`;

                    select_province.insertAdjacentHTML('beforeend', html);

                    localStorage.setItem('province', 0);

                    JSON.parse(JSON.stringify(data)).data.forEach(item => {
                        console.log(item);
                        const html =
                            `<option data-value="${item.ProvinceName}" class="province" value="${item.ProvinceID}">${item.ProvinceName}</option>`;
                        select_province.insertAdjacentHTML('beforeend', html);

                    })
                    select_province.addEventListener('change', function(e) {
                        localStorage.setItem('province', select_province.value);
                        localStorage.setItem(
                          "province_text",
                          JSON.stringify(
                            e.target.options[e.target.selectedIndex].text
                          )
                        );
                        getDistrict();
                    })
                } catch (e) {
                    console.log(e);
                }
            }
            const getDistrict = async () => {
                try {
                    const {
                        data
                    } = await axios({
                        method: "POST",
                        url: "https://online-gateway.ghn.vn/shiip/public-api/master-data/district",

                        headers: {
                            "Content-Type": "application/json",
                            token: "07e3022f-225e-11ee-96dc-de6f804954c9",
                        },
                        data: JSON.stringify({
                            province_id: +JSON.parse(JSON.stringify(localStorage.getItem(
                                'province'))),
                        }),
                    });
                    localStorage.setItem('district', 0);

                    select_district.innerHTML = "";
                    const html = `<option value="0">Chọn huyện</option>`;

                    select_district.insertAdjacentHTML('beforeend', html);
                    JSON.parse(JSON.stringify(data)).data.forEach(item => {
                        console.log(item);
                        const html =
                            `<option data-value="${item.DistrictName}" value="${item.DistrictID}">${item.DistrictName}</option>`;
                        select_district.insertAdjacentHTML('beforeend', html);

                    })
                    select_district.addEventListener('change', function(e) {
                        localStorage.setItem('district', select_district.value);
                        localStorage.setItem(
                          "district_text",
                          JSON.stringify(
                            e.target.options[e.target.selectedIndex].text
                          )
                        );
                        getWard();
                    })
                } catch (e) {
                    console.log(e);
                }
            }
            const getWard = async () => {
                try {
                    const {
                        data
                    } = await axios({
                        method: "POST",
                        url: "https://online-gateway.ghn.vn/shiip/public-api/master-data/ward",

                        headers: {
                            "Content-Type": "application/json",
                            token: "07e3022f-225e-11ee-96dc-de6f804954c9",
                        },
                        data: JSON.stringify({
                            district_id: +JSON.parse(JSON.stringify(localStorage.getItem(
                                'district'))),
                        }),
                    });
                    select_ward.innerHTML = "";
                    const html = `<option value="0">Chọn Xã/Phường</option>`;

                    select_ward.insertAdjacentHTML('beforeend', html);
                    JSON.parse(JSON.stringify(data)).data.forEach(item => {
                        console.log(item);
                        const html = `<option data-value="${item.WardName}" value="${item.WardCode}">${item.WardName}</option>`;
                        select_ward.insertAdjacentHTML('beforeend', html);

                    })
                    select_ward.addEventListener('change', function(e) {
                        localStorage.setItem('code_ward', select_ward.value);
                        localStorage.setItem(
                          "ward_text",
                          JSON.stringify(
                            e.target.options[e.target.selectedIndex].text
                          )
                        );
                    })
                } catch (e) {
                    console.log(e);
                }
            }
            getProvince();
            getDistrict();
            //
        })
    </script>
@endsection
