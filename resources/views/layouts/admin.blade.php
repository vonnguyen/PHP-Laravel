<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- link Bootstrap 5 --}}
    <!-- CSS only -->
    <!-- CSS only -->
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main_admin.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>
    <div class="boxcenter container">
        <div class="m-0 my-2 py-3 headeradmin align-items-center text-primary 
                d-flex justify-content-between flex-col">
            <h1 class="fw-bold" > Admin </h1>
            <div class="">
         

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto fs-3">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
        <div class=" mb menu">
            <ul class="flex-row m-0  align-items-center">
                <li><a href="{{route('admin.trangchu')}}">Trang chủ</a></li>
                <li><a href="{{route('admin.category.add')}}">Danh mục</a></li>
                <li><a href="{{route('admin.product.list')}}">Hàng hóa</a></li>
                <li><a href="{{route('admin.user.list')}}">Khách hàng</a></li>
                <li><a href="{{route('admin.groups.list')}}">Nhóm người dùng</a></li>
                <li><a href="index.php?act=dsbl">Bình luận</a></li>
                <li><a href="index.php?act=bill">Đơn hàng</a></li>
            </ul>
        </div>
        <div class="content">

            @yield('content')
        </div>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>