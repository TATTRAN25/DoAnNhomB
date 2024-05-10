@extends('dashboardcuatu')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div class="content mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5 border border-dark">
                <img src="{{ asset('images/logo.jpg') }}" alt="logo">
            </div>
            <div class="col-md-5 ms-1 border border-dark">
                <h2 class="text-center">Đăng nhập</h2>
                <form action="#" method="post">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="user" id="user" placeholder="Nhập tài khoản" class="form-control" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" id="password" placeholder="Nhập mật khẩu" class="form-control" required autofocus>
                    </div>
                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn-login"><a href="">Đăng nhập</a></button>
                    </div>
                </form>
                <h3 class="hr-lines my-3">Hoặc</h3>
                <div class="text-center">Bạn chưa có tài khoản? <a class="text-decoration-none" href="{{ route('register') }}">Đăng ký</a></div>
            </div>
        </div>
    </div>
</div>
@endsection