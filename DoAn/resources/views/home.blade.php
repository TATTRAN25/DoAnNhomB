@extends('layout')

@section('content')
    <section id="home">
        <div class="container-fluid home">
            <div class="row p-5">
                <div class="col-xl-5">
                    <h1 class="heading-primary">Welcome to Chợ Nhỏ</h1>
                    <p class="heading-content">Một phần giới thiệu về các bộ sưu tập sản phẩm của cửa hàng, với các danh mục như quần áo, giày dép, phụ kiện, đồ điện tử, và nhiều hơn nữa.
                    </p>
                    <a href="#" class="mt-3 btn-home">Buy now</a>
                </div>

                <div class="col-xl-7">
                    <div class="home-img"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="products">
        <div class="container">
            <div class="p-3">
                <h2 class="heading-section">sản phẩm</h2>
            <div class="row mt-3">
                <div class="col-xl-3">
                    <div class="card w-100">
                        <img src="{{asset('images/products/f1.jpg')}}" class="card-img-top img-thumbnail" style="max-height: 200px; object-fit: cover" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title</p>
                            <p class="card-text">50.000đ</p>
                            <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                    </div>
                </div>
               <div class="col-xl-3">
                    <div class="card w-100">
                        <img src="{{asset('images/products/f2.jpg')}}" class="card-img-top img-thumbnail" style="max-height: 200px; object-fit: cover" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title</p>
                            <p class="card-text">50.000đ</p>
                            <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card w-100">
                        <img src="{{asset('images/electronics/e1.jpg')}}" class="card-img-top img-thumbnail" style="max-height: 200px; object-fit: cover" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title</p>
                            <p class="card-text">50.000đ</p>
                            <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                    </div>
                </div>  
                <div class="col-xl-3">
                    <div class="card w-100">
                        <img src="{{asset('images/makeup/m2.jpg')}}" class="card-img-top img-thumbnail" style="max-height: 200px; object-fit: cover" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title</p>
                            <p class="card-text">50.000đ</p>
                            <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row mt-3">
                <div class="col-xl-3">
                    <div class="card w-100">
                        <img src="{{asset('images/electronics/e2.jpg')}}" class="card-img-top img-thumbnail" style="max-height: 200px; object-fit: cover" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title</p>
                            <p class="card-text">50.000đ</p>
                            <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                    </div>
                </div>
               <div class="col-xl-3">
                    <div class="card w-100">
                        <img src="{{asset('images/makeup/m1.jpg')}}" class="card-img-top img-thumbnail" style="max-height: 200px; object-fit: cover" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title</p>
                            <p class="card-text">50.000đ</p>
                            <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card w-100">
                        <img src="{{asset('images/products/f3.jpg')}}" class="card-img-top img-thumbnail" style="max-height: 200px; object-fit: cover" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title</p>
                            <p class="card-text">50.000đ</p>
                            <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                    </div>
                </div>  
                <div class="col-xl-3">
                    <div class="card w-100">
                        <img src="{{asset('images/products/f4.jpg')}}" class="card-img-top img-thumbnail" style="max-height: 200px; object-fit: cover" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title</p>
                            <p class="card-text">50.000đ</p>
                            <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>         
            </div>

            <div class="row">
                <div class="col-xl-12 d-flex justify-content-center mt-3">
                    <a href="#" class="btn btn-success p-2">Find more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="p-3">
                 <h2 class="heading-section">tiện ích</h2>
                 <div class="row text-center">
                    <div class="col-xl-3">
                        <div class="service-feature">
                            <div>
                                <i style="color: #fff" class="fa-solid fa-truck-fast"></i>
                                <p>Ship Fast</p>
                            </div>
                        </div>
                    </div>

                     <div class="col-xl-3">
                        <div class="service-feature">
                            <div>
                                <i style="color: #fff" class="fa-solid fa-money-bill"></i>
                                <p>Save money</p>
                            </div>
                        </div>
                    </div>

                     <div class="col-xl-3">
                        <div class="service-feature">
                            <div>
                                <i style="color: #fff" class="fa-solid fa-tv"></i>
                                <p>Good products</p>
                            </div>
                        </div>
                    </div>

                     <div class="col-xl-3">
                        <div class="service-feature">
                            <div>
                                <i style="color: #fff" class="fa-solid fa-clock"></i>
                                <p>Save time</p>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>

    <section class="call-info">
        <div class="container">
            <h2 class="heading-secondary text-center">Liên hệ</h2>
            <div class="row mt-4">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và tên:</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên của bạn">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Nhập địa chỉ email của bạn">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Tin nhắn:</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Nhập tin nhắn của bạn"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Gửi tin nhắn</button>
                    </form>
                </div>
                <div class="col-md-6 text-center">
                    <h3>Thông tin liên hệ</h3>
                    <p><strong>Địa chỉ:</strong> Số nhà 123, Đường ABC, Thành phố XYZ</p>
                    <p><strong>Điện thoại:</strong> +84 123 456 789</p>
                    <p><strong>Email:</strong> example@example.com</p>
                </div>
            </div>
        </div>
    </section>
@endsection