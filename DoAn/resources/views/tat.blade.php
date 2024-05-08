<!DOCTYPE html>
<html>

<head>
    <title>Laravel app</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashbroad.css')}}">
    <link rel="stylesheet" href="{{ asset('css/productmanagement.css')}}">
    <link rel="stylesheet" href="{{ asset('css/addproduct.css')}}">
    <link rel="stylesheet" href="{{ asset('css/editproduct.css')}}">
    <!-- Front fa -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="header">
        <nav class="main-nav">
            <ul class="main-nav-list">
                <li>
                    <a href="{{ route('user.productmanagement') }}" class="main-nav-link active">Quản Lý Sản Phẩm</a>
                    <a href="#" class="main-nav-link ">Trang Chủ</a>
                    <a href="#" class="main-nav-link ">Sản Phẩm</a>
                    <a href="#" class="main-nav-link ">Dịch Vụ</a>
                </li>
                <li>
                    <a href="#" class="main-nav-link">
                        <ion-icon class="icon-link" name="cart"></ion-icon>
                    </a>
                </li>
            </ul>
        </nav>
        <form class="search-form" action="#" method="GET">
            <span class="search-icon"><i class="fas fa-search"></i></span>
            <input type="text" class="search-input" placeholder="Tìm kiếm...">
            <button class="search-button">Tìm kiếm</button>
        </form>
        <a href="#">
            <img class="logo" src="{{ asset('img/logoChoNho.jpg') }}" alt="Logo Chợ Nhỏ" />
        </a>
    </header>
    @yield('content')
    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <p>Thông tin về Chợ Nhỏ</p>
                <p>Địa chỉ: Thủ Đức</p>
                <p>Số điện thoại: <i class="fas fa-phone"></i> 113</p>
            </div>
            <div class="footer-social">
                <p>Thông tin về Chợ Nhỏ: </p>
                <a href="#" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#">
                    <i class="far fa-envelope"></i>
                </a>
                <a href="#" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>