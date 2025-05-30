@extends('front.layout.master')

@section('main_content')
@php
$setting = App\Models\Setting::where('id',1)->first();
@endphp
<div class="page-top" style="background-image: url({{ asset('uploads/'.$setting->banner) }})">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Đăng nhập</h2>
                <div class="breadcrumb-container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Đăng nhập</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-content pt_70 pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="login-form">
                    <form action="{{ route('login_submit') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary bg-website">
                                Đăng nhập
                            </button>
                            <a href="{{ route('forget_password') }}" class="primary-color">Quên mật khẩu?</a>
                        </div>
                    </form>
                    <div class="mb-3">
                        <a href="{{ route('registration') }}" class="primary-color">Bạn chưa có tài khoản? Tạo ngay đi nào!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection