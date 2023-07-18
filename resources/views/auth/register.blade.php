@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('client') }}/assets/login.css">
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center py-[150px]">

            <div class="container">
                <section class="h-100 gradient-form" style="background-color: #eee;">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-xl-10">
                                <div class="card rounded-3 text-black">
                                    <div class="row g-0">
                                        <div class="col-lg-6">
                                            <div class="card-body p-md-5 mx-md-4">

                                                <div class="text-center">
                                                    <img src="{{ asset('client') }}/assets/img/img-header/shoe-logo-new_300x300.webp"
                                                        style="width: 185px;" alt="logo">
                                                    <h4 class="mt-1 mb-5 pb-1">
                                                        <div class="text-center">

                                                        </div>
                                                    </h4>
                                                </div>

                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf

                                                    <div class="row mb-3">
                                                        <label for="name"
                                                            class="col-md-4 col-form-label text-md-end">{{ __('Tên') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="name" type="text"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                name="name" value="{{ old('name') }}" required
                                                                autocomplete="name" autofocus>

                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="email"
                                                            class="col-md-4 col-form-label text-md-end">{{ __('Địa chỉ Email') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                name="email" value="{{ old('email') }}" required
                                                                autocomplete="email">

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="password"
                                                            class="col-md-4 col-form-label text-md-end">{{ __('Mật khẩu') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="password" type="password"
                                                                class="form-control @error('password') is-invalid @enderror"
                                                                name="password" required autocomplete="new-password">

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="password-confirm"
                                                            class="col-md-4 col-form-label text-md-end">{{ __('Nhập lại mật khẩu') }}</label>

                                                        <div class="col-md-6">
                                                            <input id="password-confirm" type="password"
                                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                                name="password_confirmation" required
                                                                autocomplete="new-password">
                                                            @error('password_confirmation')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-0">
                                                        <div class="col-md-6 offset-md-4">
                                                            <button type="submit" class="bg-primary btn btn-primary">
                                                                {{ __('Đăng ký') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                                <h4 class="mb-4">Chúng tôi không chỉ là một công ty</h4>
                                                <p class="small mb-0">ShoeZone nơi trao tặng các sản phẩm giày thời
                                                    trang trẻ trung, phong cách, bắt trend cho giới trẻ.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
