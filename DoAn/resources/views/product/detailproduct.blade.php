@extends('layout')

@section('title', 'Checkout')
@section('content')
<!-- Main -->
<main>
    <div class="container">
        <div class="left-sidebar">
            <h2>Ảnh sản phẩm</h2>
            <img class="logo" src="{{ asset('img/logoChoNho.jpg') }}" alt="Logo Chợ Nhỏ" />
        </div>
        <div class="content">
            <h1>Chi Tiết Sản Phẩm</h1>
            <div class="product-details">
                <div class="product-info">
                    <h2>Tên Sản Phẩm: <span class="product-name">Áo Len </span></h2>
                    <p>Mã sản phẩm: <span class="product-id">123456</span></p>
                    <p>Số lượng: <span class="product-quantity">10</span></p>
                    <p>Trạng thái: <span class="product-status">Còn hàng</span></p>
                    <p>Giá Sản Phẩm: <span class="product-price">100.000 đ</span></p>
                    <p>Mô tả:</p>
                    <p class="product-description">Hay ho</p>
                    <p>Danh Mục: <span class="category-id">Thời trang</span></p>
                    <div class="button-group">
                        <button class="buy-button">Mua sản phẩm</button>
                        <button class="add-to-cart-button">Thêm vào giỏ hàng</button>
                        <button class="review-button">Đánh giá</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection