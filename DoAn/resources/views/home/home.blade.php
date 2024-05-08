<!DOCTYPE html>
<html>

<head>
    <title>Chợ nhỏ</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-8">
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" aria-current="page" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Danh mục
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Giày</a></li>
                            <li><a class="dropdown-item" href="#">Quần Áo Thể Thao</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex col-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary me-5" type="button">Search</button>
                </form>
                <img src="logo.jpg" style="width: 60px;" class="rounded-pill" id="left">
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row container-fluid p-5">
            <!-- 1-1 -->
            <div class="card col-3">
                <img class="card-img" src="logo.jpg" alt="CardUser" style="width: 100%">
                <div class="cardbody">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="">Quần áo</a>
                    </div>
                </div>
            </div>
            <!-- 1-2 -->
            <div class="card col-3">
                <img class="card-img" src="logo.jpg" alt="CardUser" style="width: 100%">
                <div class="cardbody">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="">Quần áo</a>
                    </div>
                </div>
            </div>
            <!-- 1-3 -->
            <div class="card col-3">
                <img class="card-img" src="logo.jpg" alt="CardUser" style="width: 100%">
                <div class="cardbody">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="">Quần áo</a>
                    </div>
                </div>
            </div>
            <!-- 1-4 -->
            <div class="card col-3">
                <img class="card-img" src="logo.jpg" alt="CardUser" style="width: 100%">
                <div class="cardbody">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="">Quần áo</a>
                    </div>
                </div>
            </div>
            <!-- Chia Hàng Trên Dưới -->
        </div>
        <div class="row container-fluid p-5">
            <!-- 2-1 -->
            <div class="card col-3">
                <img class="card-img" src="logo.jpg" alt="CardUser" style="width: 100%">
                <div class="cardbody">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="">Quần áo</a>
                    </div>
                </div>
            </div>
            <!-- 2-2 -->
            <div class="card col-3">
                <img class="card-img" src="logo.jpg" alt="CardUser" style="width: 100%">
                <div class="cardbody">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="">Quần áo</a>
                    </div>
                </div>
            </div>
            <!-- 2-3 -->
            <div class="card col-3">
                <img class="card-img" src="logo.jpg" alt="CardUser" style="width: 100%">
                <div class="cardbody">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="">Quần áo</a>
                    </div>
                </div>
            </div>
            <!-- 2-4 -->
            <div class="card col-3">
                <img class="card-img" src="logo.jpg" alt="CardUser" style="width: 100%">
                <div class="cardbody">
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <a href="#" class="">Quần áo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <p>Thông tin về Chợ Nhỏ</p>
                <p>Địa chỉ: Thủ Đức</p>
                <p>Số điện thoại: <i class="fas fa-phone"></i> 113</p>
            </div>
            <div class="footer-social">
                <p>Thông tin về Chợ Nhỏ: </p> <br>
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