<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chợ nhỏ</title>
    <!--Link CSS-->
    <link rel="stylesheet" href="{{ asset('css/dashboardcuatu.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>

    <!--HEADER-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Đăng nhập</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">| Đăng xuất</a>
                  </li>
                </ul>
              </div>
              <div>
              <img width="75px" src="{{ asset('images/logo.jpg') }}" alt="logo">
              </div>
            </div>
          </nav>
    </header>
    <!--HEADER-->

    <!--CONTENT-->
    @yield('content')
    <!--CONTENT-->

    <!--FOOTER-->
    <footer class="py-3 mt-3">
      <div class="container">
        <div class="row">
          <div class="col"></div>
        </div>
      </div>
    </footer>
    <!--FOOTER-->

    <script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
