@extends('layout')

@section('title', 'Checkout')
@section('content')

    <div class="main">
        <img class="product-image" src="{{ asset('images/1694392895130.png')}}" alt="Áo len">
        <div class="product-info">
            <h1 class="text-h2">Áo len tay lỡ form rộng unisex, Áo len nam nữ form rộng</h1>
                <div class="text-main">
                <p class="price">11.000.000đ - <del>22.000.000</del></p>
                <p>Ưu đãi hiện tại: <b><i>Giảm giá 50%</i></b></p>
                <p>Số lượng còn lại: 5024 sản phẩm</p>
                Nhập mã giảm giá: <input type="text"><button>Áp dụng</button>
            </div>

        </div>
    </div>



@endsection