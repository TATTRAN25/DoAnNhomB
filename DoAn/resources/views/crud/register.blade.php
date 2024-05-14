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
                <h2 class="text-center">Đăng ký</h2>
                <form action="#" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="username" id="username" placeholder="Nhập tài khoản" class="form-control" required autofocus>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" placeholder="Nhập mật khẩu" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <input type="password" name="retype" id="retype" placeholder="Nhập lại mật khẩu" class="form-control" required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name="fullname" id="fullname" placeholder="Nhập họ và tên" class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <input type="number" name="phone" id="phone" placeholder="Nhập số điện thoại" class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email" placeholder="Nhập email" class="form-control" required>
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" name="avatar" id="avatar" class="form-control">
                    </div>

                    <div class="d-grid mx-auto">
                        <button type="submit" class="btn-login">Đăng ký</button>
                    </div>
                </form>
                <h3 class="hr-lines my-3">Hoặc</h3>
                <div class="text-center">Bạn đã có tài khoản? <a class="text-decoration-none" href="{{ route('login') }}">Đăng nhập</a></div>
            </div>
        </div>
    </div>
</div>
@endsection