@extends('layout')

@section('title', 'Cart Details')
@section('content')
    <main class="main-cart">
        <section class="cart-info">
            
            <h2 class="heading-secondary">Giỏ hàng</h2>
            
            <div class="info-products">
                <table>
                    <thead class="product-head">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="product-item">
                            <td class="column-name">
                                <img class="item-img" src="{{asset('images/tokbokki.jpg')}}" alt="">
                                <h4 class="item-name">Sốt tokbokki / tokpokki Hàn Quốc O'Food 120g, vị truyền thống</h4>
                            </td>
                            <td class="item-price">₫22.000</td>
                            <td class="quantity-selector">
                                <button class="quantity-btn decrement"><i class="fa-solid fa-minus"></i></button>
                                <input type="number" class="quantity-input" value="1">
                                <button class="quantity-btn increment"><i class="fa-solid fa-plus"></i></button>
                            </td>
                            <td class="total-price">₫22.000</td>
                            <td>
                                <a href="#"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                        <tr class="product-item">
                            <td class="column-name">
                                <img class="item-img" src="{{asset('images/tokbokki.jpg')}}" alt="">
                                <h4 class="item-name">Sốt tokbokki / tokpokki Hàn Quốc O'Food 120g, vị truyền thống</h4>
                            </td>
                            <td class="item-price">₫22.000</td>
                            <td class="quantity-selector">
                                <button class="quantity-btn decrement"><i class="fa-solid fa-minus"></i></button>
                                <input type="number" class="quantity-input" value="1">
                                <button class="quantity-btn increment"><i class="fa-solid fa-plus"></i></button>
                            </td>
                            <td class="total-price">₫22.000</td>
                            <td>
                                <a href="#"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                                  <tr class="product-item">
                            <td class="column-name">
                                <img class="item-img" src="{{asset('images/tokbokki.jpg')}}" alt="">
                                <h4 class="item-name">Sốt tokbokki / tokpokki Hàn Quốc O'Food 120g, vị truyền thống</h4>
                            </td>
                            <td class="item-price">₫22.000</td>
                            <td class="quantity-selector">
                                <button class="quantity-btn decrement"><i class="fa-solid fa-minus"></i></button>
                                <input type="number" class="quantity-input" value="1">
                                <button class="quantity-btn increment"><i class="fa-solid fa-plus"></i></button>
                            </td>
                            <td class="total-price">₫22.000</td>
                            <td>
                                <a href="#"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="info-select">
                <div class="info-purchase">
                    <div class="select-voucher">
                        <h4 class="voucher-action">
                            <i class="fa-solid fa-ticket"></i>
                            <span>Voucher</span>
                        </h4>
                        <a href="#">Chọn voucher</a>
                    </div>

                    <div class="select-pucharse">
                        <p>Tổng sản phẩm (<span>0</span> sản phẩm)</p>
                        <p>Giá sản phẩm đ<span>0</span></p>
                    </div>

                    <div class="purchase-action">
                        <button class="btn-pucharse">Mua hàng</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection