@extends('layout')

@section('title', 'Checkout')
@section('content')
<!-- Main -->
<main>
    <h1>Danh sách sản phẩm</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Áo thun</td>
                <td>200.000 VND</td>
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