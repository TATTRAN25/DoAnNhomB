<!DOCTYPE html>
<html>
<head>
    <title>Đơn đặt hàng</title>
</head>
<body>
    <h1>Thank you for your order!</h1>
    <p>Mã đặt hàng: {{ $order->order_id }}</p>
    <p>Địa chỉ: {{ $order->address }}</p>
    <p>Ngày đặt hàng: {{ $order->order_date }}</p>
    <p>Ngày giao hàng: {{ $order->delivery_date }}</p>

    <h2>Sản phẩm đã đặt:</h2>
    <ul>
        @foreach ($orderItems as $item)
            <li>Mã sản phẩm: {{ $item->product->product_id }}</li>
            <li>Tên sản phẩm: {{ $item->product->product_name }} - Quantity: {{ $item->quantity_order }}</li>
            <li>Giá sản phẩm: {{number_format($item->quantity_order * $item->product->price, 0, ',', '.')}} đồng</li>
            <li>----------------------------------------------</li>
        @endforeach
    </ul>
    <strong>Tổng giá tiền: {{number_format($order->total_price, 0, ',', '.') }} đồng</strong>
</body>
</html>
