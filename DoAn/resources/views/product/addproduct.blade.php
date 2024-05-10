@extends('layout')

@section('title', 'Checkout')
@section('content')
    <!-- Main -->
    <main>
        <main>
            <div class="container">
                <div class="left-sidebar">
                    <h2>Chọn hình để thêm</h2>
                    <img class="logo" src="{{ asset('img/logoChoNho.jpg') }}" alt="Logo Chợ Nhỏ" />
                    <input type="file" accept="image/*">
                </div>
                <div class="content">
                    <h1>Thêm Sản Phẩm</h1>
                    <form action="/edit-product" method="POST">
                        <div class="form-group">
                            <label for="product-name">Tên Sản Phẩm:</label>
                            <input type="text" id="product-name" name="product-name" required>
                        </div>
                        <div class="form-group">
                            <label for="product-price">Giá Sản Phẩm:</label>
                            <input type="number" id="product-price" name="product-price" min="0" required>
                        </div>
                        <div class="form-group">
                            <label for="product-description">Mô tả:</label>
                            <textarea id="product-description" name="product-description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="product-category">Danh Mục:</label>
                            <input type="text" id="product-category" name="product-category" required>
                        </div>
                        <div class="form-group">
                            <label for="product-quantity">Số lượng:</label>
                            <input type="number" id="product-quantity" name="product-quantity" min="0" required>
                        </div>
                        <!-- <div class="form-group">
                            <label for="product-shipping">Vận chuyển:</label>
                            <select id="product-shipping" name="product-shipping">
                                <option value="in-progress">Đang chuyển</option>
                                <option value="shipped">Đã chuyển</option>
                                <option value="not-shipped">Chưa chuyển</option>
                            </select>
                        </div> -->
                        <button type="button-add">Thêm</button>
                    </form>
                </div>
            </div>
        </main>
    </main>
@endsection