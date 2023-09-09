<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Shop Zone</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="icon" type="image/x-icon" href="{{ asset('client') }}/assets/img/logo/logo.png">
    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo/logo.png') }}" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="{{ asset('https://fonts.gstatic.com') }}" rel="preconnect">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main_admin.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    {{-- link biểu đồ --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    @yield('link')

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('vendor/select2') }}/select2.min.css" rel="stylesheet" />
    
    <style>
        .select2-selection__choice {
            background-color: #000 !important;
            color: #fff !important
        }

        .select2-container {
            width: 100% !important;
        }

        .deleted-user {
            background-color: #f2dede;
            /* Màu nền đỏ nhạt */
            color: #a94442;
            /* Màu chữ đỏ tương ứng */
            padding: 5px;
            /* Thêm padding để tạo khoảng trống xung quanh */
            display: inline-block;
            /* Hiển thị như một khối inline */
            border-radius: 3px;
            /* Bo tròn góc */
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ url('/admin') }}" class="logo d-flex align-items-center">
                {{-- <img src="assets/img/logo/logo.png" alt=""> --}}
                <span class="d-none d-lg-block" style="margin-top: 10px">
                    <h5><b>Shoes Zone</b></h5>
                </span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        <nav class="header-nav ms-auto">
            @include('layouts.nav_profile')
        </nav>
    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.slidebar')

    <main id="main" class="main">
        <div class="container">
            @yield('main')
        </div>
    </main>

    {{-- @include('layouts.footer') --}}
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    @yield('script')
    {{-- <script pt src="{{ asset('assets/js/jquery-ui.min.js') }}"></script> --}}
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    {{-- scrip biểu đồ --}}
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</body>

</html>
