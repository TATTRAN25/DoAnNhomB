<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Áo len tay lỡ form rộng unisex</title>
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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


    <div class="row">
        <div class="column">
            <img class="column" width="300px" height="300px" src="{{ asset('images/1694392895130.png')}}" alt="Áo len">
            <div class="column">
                <h1>Áo len tay lỡ form rộng unisex, Áo len nam nữ form rộng</h1>
                <p class="price">11.000.000đ - <del>22.000.000</del></p>
            </div>
        </div>

        <div class="column">
            <h3><b>Đánh giá sản phẩm </b></h3>
            <input class="textbox" type="text" placeholder="Nhập đánh giá ....">
            <div class="button">
                <button class="btn">Tất cả</button>
                <button class="btn">5 sao (11)</button>
                <button class="btn">dưới 5 sao</button>
            </div>
            <div class="author">
                <button class="btn-1"></button>
                Anh long
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <i class="fa-sharp fa-solid fa-star"></i>
                <p>Sản phẩm rất tốt</p>

            </div>
        </div>

    </div>


    <footer class="footer">
        <div class="container">
        </div>
    </footer>
</body>

</html>