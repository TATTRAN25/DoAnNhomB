<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quản lý sản phẩm</title>
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/productmanagement.css')}}" />
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

    <!-- Main -->
    <main>
        <h1>Danh sách sản phẩm</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Áo thun</td>
                    <td>200.000 VND</td>
                    <td>
                        <button class="edit-button"><i class="fas fa-pencil-alt"></i></button>
                        <button class="delete-button"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div class="main-buttons">
            <button class="add-product-button">Thêm sản phẩm</button>
            <button class="add-voucher-button">Thêm voucher</button>
        </div>
    </main>

    <!-- Footer -->
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

</html>