<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thêm Sản Phẩm</title>
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/addproduct.css')}}" />
</head>

<body>
    <!-- Header -->
    <header class="header">
        <nav class="main-nav">
            <ul class="main-nav-list">
                <li>
                    <a href="#" class="main-nav-link active">Thêm Sản Phẩm</a>
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
        <a href="#">
            <img class="logo" src="{{ asset('img/logoChoNho.jpg') }}" alt="Logo Chợ Nhỏ" />
        </a>
    </header>
    <!-- Main -->
    <main>
        <main>
            <div class="container">
                <div class="left-sidebar">
                    <h2>Chọn hình để thêm</h2>
                    <img class="logo" src="{{ asset('img/logoChoNho.jpg') }}" alt="Logo Chợ Nhỏ" />
                    <input type="file" accept="image/*">
                </div>
                <div class="content">
                    <h1>Thêm Sản Phẩm</h1>
                    <form action="/edit-product" method="POST">
                        <div class="form-group">
                            <label for="product-name">Tên Sản Phẩm:</label>
                            <input type="text" id="product-name" name="product-name" required>
                        </div>
                        <div class="form-group">
                            <label for="product-price">Giá Sản Phẩm:</label>
                            <input type="number" id="product-price" name="product-price" min="0" required>
                        </div>
                        <div class="form-group">
                            <label for="product-description">Mô tả:</label>
                            <textarea id="product-description" name="product-description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="product-category">Danh Mục:</label>
                            <input type="text" id="product-category" name="product-category" required>
                        </div>
                        <div class="form-group">
                            <label for="product-quantity">Số lượng:</label>
                            <input type="number" id="product-quantity" name="product-quantity" min="0" required>
                        </div>
                        <!-- <div class="form-group">
                            <label for="product-shipping">Vận chuyển:</label>
                            <select id="product-shipping" name="product-shipping">
                                <option value="in-progress">Đang chuyển</option>
                                <option value="shipped">Đã chuyển</option>
                                <option value="not-shipped">Chưa chuyển</option>
                            </select>
                        </div> -->
                        <button type="button">Thêm</button>
                    </form>
                </div>
            </div>

        </main>
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
</body>

</html>