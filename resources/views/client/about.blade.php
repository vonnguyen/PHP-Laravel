@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('client') }}/assets/product.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/login.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/about.css">
@endsection

@section('content')
    <div class="pt-[110px]">
        <div class="slide-header">
            <div class="contain-slide">
                <p>Giới Thiệu</p>
                <ul>
                    <li><a href="{{route('home')}}">Trang chủ</a> </li>
                    <li>/</li>
                    <li>Giới thiệu</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Contain -->
    <div>
        <div class="container">
            <div class="heading-about" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <h2>BỘ SƯU TẬP TUYỆT VỜI</h2>
            </div>

            <div class="ctn-about">
                <div class="row">
                    <div class="col-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="dt-sc-img-section">
                            <div class="dt-sc-img">
                                <div class="img-about">
                                    <img src="{{ asset('client') }}/assets/img/img-about/about001_600x.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="main-img">

                            <div class="heading-main-title">
                                <h3>BAY VÀO BẦU TRỜI</h3>
                            </div>
                            <div class="p-main">
                                <p>“Muốn thoát lỗ, trụ lại được trên thị trường, doanh nghiệp phải nhanh chóng chuyển đổi số
                                    thành công”
                                    Bizfly - thừa hưởng thế mạnh từ công nghệ - truyền thông của công ty mẹ là VCCorp. Chúng
                                    tôi chọn làm những thứ mình giỏi. Đó là công nghệ - truyền thông, marketing và bán hàng.
                                    Vậy Bizfly bán các công cụ về bán hàng và marketing là phù hợp bậc nhất trên thị trường.
                                    Chúng tôi cũng có khả năng tiếp cận đối tượng khách hàng khá rộng. Công cụ của chúng tôi
                                    khi đưa ra cho khách hàng có thể ngay lập tức áp dụng trong vòng 1 tháng hoặc từ 3 tháng
                                    trở đi và chắc chắn sẽ có hiệu quả nhất định đối với doanh nghiệp.</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="ctn-about">
                <div class="row">
                    <div class="col-6" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="main-img-2">

                            <div class="heading-main-title">
                                <h3>HỌC ĐỂ THƯỞNG THỨC</h3>
                            </div>
                            <div class="p-main">
                                <p>Bizfly đã tìm hiểu các giải pháp trong nước và nước ngoài nhưng không hài lòng. Do đó
                                    chúng tôi tự giải quyết các vấn đề của mình trước (chuyển đổi số nội bộ), rồi quyết định
                                    đóng gói thành giải pháp triển khai cho doanh nghiệp bên ngoài, đặc biệt là các SMEs. Do
                                    đã trải qua các nỗi đau của doanh nghiệp nên chúng tôi thấu hiểu doanh nghiệp và giải
                                    quyết triệt để các nỗi đau đó. Tôi cho rằng nếu các công ty muốn thích ứng trong xã hội
                                    hiện tại và phải làm việc online/hybrid, cần xây dựng hệ thống công nghệ làm việc linh
                                    hoạt mọi lúc - mọi nơi, đơn giản và dành cho tất cả mọi người. Đây cũng là một trong
                                    những nhu cầu cấp thiết thúc đẩy quá trình chuyển đổi số cho doanh nghiệp.</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-6" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="dt-sc-img-section-2">
                            <div class="dt-sc-img-2">
                                <div class="img-about">
                                    <img src="{{ asset('client') }}/assets/img/img-about/about002_600x.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="heading-about" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <h2>HÃY SỐNG TRỌN VẸN TỪNG PHÚT GIÂY</h2>
                <div class="p-title-2">
                    <p>Cuộc sống của mọi người đều dành cho bất động sản. Không hề mong đợi rằng ki diaml ka dhuddu pochn,
                        anh ấy luôn chấp nhận.</p>
                </div>
            </div>

            <div class="ctn-about" data-aos="zoom-in-down" data-aos-duration="1000">
                <div class="row">
                    <div class="col-6">
                        <div class="center-about">
                            <div class="main-img-3">
                                <div class="main-about">
                                    <span>
                                        <i class="fa-brands fa-pagelines"></i>
                                    </span>
                                    <div class="main-about-hp">
                                        <div class="heading-main-title">
                                            <h3>THÂN THIỆN VỚI MÔI TRƯỜNG</h3>
                                        </div>
                                        <div class="p-main">
                                            <p>Tuy nhiên, không có yếu tố phát triển của nhà sản xuất. Điều quan trọng là
                                                phải có một khóa học tốt. Nhưng bản thân bất động sản của cuộc sống. Vì
                                                không có công nghiệp, không có mối quan tâm và cũng không có ai quan tâm đến
                                                thời gian
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-about">
                                    <span>
                                        <i class="fa-solid fa-book"></i>
                                    </span>
                                    <div class="main-about-hp">
                                        <div class="heading-main-title">
                                            <h3>LỰA CHỌN TRAO ĐỔI DỄ DÀNG</h3>
                                        </div>
                                        <div class="p-main">
                                            <p>Đã đến lúc nhắm vào pot vào cuối tuần đó. Tỷ lệ của các đại lý bất động sản
                                                đã được nhắm mục tiêu. Thậm chí không phải cái hồ treo cổ có khi cướp đi
                                                sinh mạng của Ultricies Leo marques</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-about">
                                    <span>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <div class="main-about-hp">
                                        <div class="heading-main-title">
                                            <h3>ĐÁNH GIÁ HOÀN HẢO</h3>
                                        </div>
                                        <div class="p-main">
                                            <p>Netus và những con đực đang đói, và sự khốn khổ của những con maecenas là một
                                                sự run rẩy. Eleifend cho đến cái giá của trí tuệ cũng không phải mũi tên.
                                                Trừ khi cuộc sống của bạn đưa bạn đến với nội dung trái tim bạn</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="dt-sc-img-section-3">
                            <div class="dt-sc-img-3">
                                <div class="img-about">
                                    <img src="{{ asset('client') }}/assets/img/img-about/about003_600x.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="slide-header-about">
            <div class="container">
                <div class="title-heading">
                    <h2>PHONG CÁCH CUỘC SỐNG CỦA BẠN</h2>
                    <p>Hãy cam kết với một lối sống mới</p>
                </div>
                <div class="dt-sc-custom">
                    <div class="dt-sc-custom-ifobox">
                        <h6 class="dt-sc-main-title">
                            Join Us :
                            <span class="dt-sc-sub-title">Hãy tạo phong cách riêng của chúng tôi</span>

                        </h6>
                        <span class="dt-sc-span">Aenean dignissim trẻ hạnh phúc. Có rất nhiều biến thể của các đoạn Lorem
                            Ipsum, nhưng phần lớn đã được thay đổi dưới một hình thức nào đó, bằng cách thêm vào sự hài
                            hước.</span>
                    </div>

                    <div class="dt-sc-btn">
                        <button><a href="">Mua ngay</a></button>
                    </div>
                </div>
            </div>



        </div>

        <div class="container">
            <div class="dc-st-footer" data-aos="zoom-in-down" data-aos-duration="1000">
                <h2>CHÚNG TÔI MANG THEO THỜI TRANG MỚI NHẤT</h2>
                <img src="{{ asset('client') }}/assets/img/img-about/shoe-imh_800x.webp" alt="">
            </div>
        </div>
    </div>
@endsection
