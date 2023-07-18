@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('client')}}/assets/login.css">
    
@endsection
@section('content')
<div class="container" style="padding-top: 150px; padding-bottom: 100px">
    <div class="row justify-content-center">
       
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
                                                <img src="{{asset('client')}}/assets/img/img-header/shoe-logo-new_300x300.webp"
                                                    style="width: 185px;" alt="logo">
                                                <h4 class="mt-1 mb-5 pb-1">
                                                    <div class="text-center">

                                                        <h4 class="mt-1 mb-5 pb-1">Sự lựa chọn tốt nhất cho bạn!!</h4>
                                                    </div>
                                                </h4>
                                            </div>

                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                        
                                                <div class="row mb-3">
                                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Tên đăng nhập') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                        
                                                <div class="row mb-3">
                                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mật khẩu') }}</label>
                        
                                                    <div class="col-md-6">
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                        
                                                <div class="row mb-3">
                                                    <div class="col-md-6 offset-md-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        
                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Ghi nhớ') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="row mb-0">
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary bg-primary">
                                                            {{ __('Đăng nhập') }}
                                                        </button>
                        
                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                                {{ __('Quên mật khẩu?') }}
                                                            </a>
                                                        @endif
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
