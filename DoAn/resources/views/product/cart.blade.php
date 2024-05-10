@extends('layout')
<!-- Header -->
@section('title', 'Checkout')
@section('content')
<!-- Main -->
<main>
    <h1>Giỏ hàng của bạn</h1>

    <table>
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Thành tiền</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img class="img" src="{{ asset('img/logoChoNho.jpg') }}" alt="Ảnh sản phẩm"></td>
                <td>Áo thun</td>
                <td>2</td>
                <td>200.000 VND</td>
                <td>400.000 VND</td>
                <td>
                    <a class="remove-button"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td><img class="img" src="{{ asset('img/logoChoNho.jpg') }}" alt="Ảnh sản phẩm"></td>
                <td>Quần jeans</td>
                <td>1</td>
                <td>300.000 VND</td>
                <td>300.000 VND</td>
                <td>
                    <a class="remove-button"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="cart-summary">
        <p>Tổng số lượng: <span>3</span></p>
        <p>Tổng giá trị: <span>700.000 VND</span></p>
    </div>

    <div class="cart-buttons">
        <a class="continue-shopping-button">Tiếp tục mua hàng</a>
        <a class="checkout-button">Thanh toán</a>
    </div>
    
</main>
<!-- Footer -->
@endsection