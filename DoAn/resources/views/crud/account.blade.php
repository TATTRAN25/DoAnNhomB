@extends('dashboardcuatu')

@section('content')
<link rel="stylesheet" href="{{ asset('css\account.css') }}">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 side">
                <table class="mx-auto mb-5 mt-3 py-auto">
                    <tr>
                        <td><img class="mt-2" width="75px" src="{{ asset('images\default.jpg') }}" alt="defaut"></td>
                        <td>
                            <p>Username</p>
                            <p><a href=""><i class="fa-solid fa-pen-to-square edit"></i> Sửa hồ sơ</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-bag-shopping"></i></td>
                        <td><a href="">Đơn mua</a></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-bell"></i></td>
                        <td><a href="">Thông báo</a></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-pencil"></i></td>
                        <td><a href="">Đăng ký mua hàng</a></td>
                    </tr>
                    <tr>
                        <td><i class="fa-brands fa-dropbox"></i></td>
                        <td><a href="">Quản lý sản phẩm</a></td>
                    </tr>
                </table>
                <div class="text-center">
                    <h5>Tài khoản của tôi</h5>
                </div>
            </div>
            
            <div class="col-md-9 pt-5 main">
                <h1 class="text-center">Hồ sơ của tôi</h1>
                <table class="mx-auto">
                    <tr>
                        <td>Tên đăng nhập</td>
                        <td>Username</td>
                    </tr>
                    <tr>
                        <td>Tên</td>
                        <td>Username</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>usernam@gmail.com</td>
                        <td><a href="" class="btn1">Thay đổi</a></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>0123456789</td>
                        <td><a href="" class="btn1">Hiện SĐT</a></td>
                    </tr>
                    <tr>
                        <td>Giới tính</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Nam
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Nữ
                                </label>
                            </div>
                        </td>
                        <td><a href="" class="btn1">Chỉnh sửa</a></td>
                    </tr>
                    <tr>
                        <td>Ngày sinh</td>
                        <td>28/3/2024</td>
                    </tr>
                    <tr>
                        <td>Tài khoản ngân hàng</td>
                        <td>Chưa liên kết</td>
                        <td><a href="" class="btn1">Liên kết</a></td>
                    </tr>
                </table>
                <a href="" class="btn-save">Lưu</a>
            </div>
        </div>
    </div>
</div>
@endsection