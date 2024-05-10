<!DOCTYPE html>
<html>

<head>
    <title>Chợ nhỏ</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-8">
                    <li class="nav-item">
                        <a class="nav-link text-white font-weight-bold" aria-current="page" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white font-weight-bold" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
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
        <table class="product-table">
            <thead>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Doanh mục</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>img here</td>
                    <td>Sản phẩm</td>
                    <td>Thời Trang</td>
                    <td>6</td>
                    <td>1 Jack</td>
                    <td>
                        5.000.000 VNĐ
                    </td>
                </tr>
                <tr>
                    <td>img here</td>
                    <td>Sản phẩm</td>
                    <td>Thời Trang</td>
                    <td>6</td>
                    <td>1 Jack</td>
                    <td>
                        5.000.000 VNĐ
                    </td>
                </tr>
                <!-- Thêm các hàng khác tương tự ở đây -->
            </tbody>  
        </table>
        <div class="container-sum">
            Tổng cộng 10.000.000 VNĐ
        </div>
        <div class="cart-buttons">
            <button class="cart-order-btn">Đặt hàng</button>
            <button class="cart-delete-btn">Xóa</button>
            <button class="cart-update-btn">sửa</button>
        </div>
    </div>
    <footer>
        <div class="footer-container-store">
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