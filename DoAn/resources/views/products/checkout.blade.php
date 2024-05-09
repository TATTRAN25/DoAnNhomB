@extends('layout')

@section('title', 'Checkout')
@section('content')
    <main class="checkout-main">
        <div class="info-page d-flex justify-content-center align-items-center">
                <h2 class="heading-secondary">Thanh toán</h2>
                <i class="money-icon fa-solid fa-money-bill"></i>
        </div>

        <section class="section-checkout">
            <div class="checkout-info">
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
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="checkout-payment">
                <div class="checkout-register">
                    <form action="#" method="post">
                        <label for="name">Họ và tên:</label>
                        <input type="text" id="name" name="name" required>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        <label for="address">Địa chỉ:</label>
                        <textarea id="address" name="address" required></textarea>

                        <div class="payment-option">
                            <input type="radio" id="payment-cod" name="payment-method" value="cod" checked>
                            <label for="payment-cod">Thanh toán khi nhận hàng</label>
                        </div>

                        <div class="payment-option">
                            <input type="radio" id="payment-card" name="payment-method" value="card">
                            <label for="payment-card">Thanh toán qua thẻ</label><br>
                        </div>

                        <div class="card-info" id="card-info" style="display:none;">
                            <label for="card">Số thẻ tín dụng:</label>
                            <input type="text" id="card" name="card">
                            <label for="expiry">Ngày hết hạn:</label>
                            <input type="text" id="expiry" name="expiry" placeholder="MM/YY">
                            <label for="cvv">CVV:</label>
                            <input type="text" id="cvv" name="cvv">
                        </div>
                        
                        <button type="submit">Thanh toán</button>
                    </form>
                </div>

                <div class="checkout-total-price">
                    <div class="price-container">
                        <h4>Thông tin thanh toán</h4>
                        <div class="price-info">
                            <p>Tổng tiền hàng</p>
                            <span>44.000đ</span>
                        </div>
                        <div class="price-info">
                            <p>Phí vận chuyển</p>
                            <span>30.000đ</span>
                        </div>
                        <div class="price-info">
                            <p>Tổng thanh toán</p>
                            <span>74.000đ</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection