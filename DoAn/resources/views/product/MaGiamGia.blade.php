<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhom B</title>
    <link rel="stylesheet" href="{{ asset('css/magiamgia.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <h1>Quản lý sản phẩm</h1>
            <div class="search-box">
                <input type="text" placeholder="Tìm kiếm...">
                <button type="submit">Tìm kiếm</button>
            </div>
            <img class="image" src="{{ asset('images/logo.jpg')}}">
        </div>
    </nav>


    <div class="main">
        <img class="product-image img" src="./images/1694392895130.png" alt="Áo len">
        <div class="product-info">
            <h1>Áo len tay lỡ form rộng unisex, Áo len nam nữ form rộng</h1>
            <p class="price">11.000.000đ - <del>22.000.000</del></p>
            <p>Ưu đãi hiện tại: <b><i>Giảm giá 50%</i></b></p>
            <p>Số lượng còn lại: 5024 sản phẩm</p>
            <p>Mã giảm giá: <input type="text" placeholder="abc-xyz-123"> <button class="btn-discount">Tạo mã giảm giá</button></p>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        </div>
    </footer>

</body>

</html>