@extends('layout')

@section('content')
    <section id="home">
        <div class="container-fluid home">
            <div class="row p-5">
                <div class="col-xl-5">
                    <h1 class="heading-primary">Our product is fashionable</h1>
                    <p class="heading-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Enim ipsum doloribus temporibus ex debitis odio porro,
                        cumque quae, officia tempora fugit autem adipisci veritatis quia.
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
                <h2 class="heading-section">our products</h2>
            <div class="row mt-3">
                <div class="col-xl-3">
                    <div class="card w-100">
                        <img src="{{asset('images/products/f1.jpg')}}" class="card-img-top img-thumbnail" style="max-height: 200px; object-fit: cover" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title</p>
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
                            <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row mt-3">
                <div class="col-xl-3">
                    <div class="card w-100">
                        <img src="{{asset('images/products/f1.jpg')}}" class="card-img-top img-thumbnail" style="max-height: 200px; object-fit: cover" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title</p>
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
                            <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>         
            </div>

            <div class="row">
                <div class="col-xl-12 d-flex justify-content-center mt-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection