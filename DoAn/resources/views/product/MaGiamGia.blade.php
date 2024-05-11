@extends('layout')

@section('title', 'Checkout')
@section('content')

    <div class="main">
        <img class="product-image" src="{{ asset('images/1694392895130.png')}}" alt="Áo len">
        <div class="product-info">
            <h1 class="text-h2">Áo len tay lỡ form rộng unisex, Áo len nam nữ form rộng</h1>
                <form action="">
                    <div class="row">
                        <div class="col"><label for="">Mã giảm giá: </label><input type="text"></div>
                        <div class="col"><label for="">Tên mã: </label><input type="text"></div>
                    </div>
                    <div class="row">
                        <div class="col"><label for="">Số lượng: </label><input type="text"></div>
                        <div class="col"><label for="">Giá trị: </label><input type="text"></div>
                        <div class="col"><label for="">Hạn sử dụng: </label><input type="text"></div>
                    </div>
                    <div class="row">
                        <div class="col"><label for="">Mô tả: </label><input type="text"></div>
                    </div>
                    <button>Áp dụng</button>
                </form>    
            
                
                
                
                
            </div>

        </div>
    </div>



@endsection