@extends('layout')

@section('title', 'Checkout')
@section('content')
<!-- Main -->
<main>
    <h1>Danh sách sản phẩm</h1>

    <div class="filter">
        <h3>Bộ lọc</h3>
        <div class="filter-item">
            <label for="category">Danh mục:</label>
            <select id="category">
                <option value="all">Tất cả</option>
                <option value="clothing">Quần áo</option>
                <option value="electronics">Đồ điện tử</option>
                <option value="books">Sách</option>
            </select>
        </div>
        <div class="filter-item">
            <label for="price">Giá:</label>
            <select id="price">
                <option value="all">Tất cả</option>
                <option value="low">Dưới 100.000 VND</option>
                <option value="medium">Từ 100.000 - 500.000 VND</option>
                <option value="high">Trên 500.000 VND</option>
            </select>
        </div>
        <div class="filter-item">
            <label for="popularity">Độ phổ biến:</label>
            <select id="popularity">
                <option value="all">Tất cả</option>
                <option value="popular">Phổ biến</option>
                <option value="not-popular">Không phổ biến</option>
            </select>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Trạng thái</th>
                <th>Giá</th>
                <th>Danh mục</th>
                <th>Mã Voucher</th>
                <th>Mô tả sản phẩm</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img class="img" src="{{ asset('img/logoChoNho.jpg') }}" alt="Ảnh sản phẩm"></td>
                <td>Áo thun</td>
                <td>10</td>
                <td>Còn hàng</td>
                <td>200.000 VND</td>
                <td>Thời trang</td>
                <td>V001</td>
                <td>Mô tả sản phẩm</td>
                <td>
                    <a class="edit-button" href="{{ route('user.editproduct') }}"><i class="fas fa-pencil-alt"></i></a>
                    <a class="delete-button"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="main-buttons">
        <a class="add-product-button" href="{{ route('user.addproduct') }}">Thêm sản phẩm</a>
        <a class="add-voucher-button">Thêm voucher</a>
    </div>
</main>

<!-- Footer -->
@endsection