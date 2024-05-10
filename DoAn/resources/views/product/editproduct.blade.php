@extends('layout')

@section('title', 'Checkout')
@section('content')
<!-- Main -->
<main>
    <div class="container">
        <div class="left-sidebar">
            <h2>Chọn ảnh sản phẩm</h2>
            <img class="logo" src="{{ asset('img/logoChoNho.jpg') }}" alt="Logo Chợ Nhỏ" />
            <input type="file" accept="image/*">
        </div>
        <div class="content">
            <h1>Sửa Sản Phẩm</h1>
            <form action="/edit-product" method="POST">
            <div class="form-group">
                        <label for="product-id">Mã sản phẩm:</label>
                        <input type="text" id="product-id" name="product-id" required>
                    </div>
                    <div class="form-group">
                        <label for="product-name">Tên Sản Phẩm:</label>
                        <input type="text" id="product-name" name="product-name" required>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Số lượng:</label>
                        <input type="number" id="quantity" name="quantity" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Trạng thái:</label>
                        <input type="text" id="status" name="status" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá Sản Phẩm:</label>
                        <input type="number" id="price" name="price" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="voucher_detail">Mô tả:</label>
                        <textarea id="voucher_detail" name="voucher_detail" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Danh Mục:</label>
                        <input type="text" id="category_id" name="category_id" required>
                    </div>
                    <div class="form-group">
                        <label for="voucher_id">Mã Voucher:</label>
                        <input type="text" id="voucher_id" name="voucher_id" required>
                    </div>
                <div class="button-group">
                    <button type="button" class="save-button">Lưu</button>
                    <button type="button" class="delete-button">Xóa</button>
                </div>
            </form>
        </div>
    </div>

</main>
@endsection