@extends('layout')

@section('title', 'Products')

@section('content')
    <div class="container">
        <h3 class="heading-sub text-center mt-3">Sản phẩm</h3>

        <div class="row">
            <div class="col-xl-12">
                <div class="filter d-flex justify-content-between align-items-center mt-4">
                  
                    <div class="form-group d-flex align-items-baseline gap-3">
                        <label for="categoryFilter" style="white-space: nowrap;">Danh mục:</label>
                        <select class="form-control" id="categoryFilter">
                            <option value="">Tất cả danh mục</option>
                    
                        </select>
                    </div>


                    <div class="form-group d-flex align-items-baseline gap-3">
                        <label for="priceFilter" style="white-space: nowrap;">Giá cả:</label>
                        <select class="form-control" id="priceFilter">
                            <option value="">Tất cả giá cả</option>
                            <option value="0-1000000">Dưới 1,000,000 đ</option>
                            <option value="1000000-5000000">Từ 1,000,000 đ đến 5,000,000 đ</option>
                            <option value="5000000-10000000">Từ 5,000,000 đ đến 10,000,000 đ</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>    

        @php $count = 0; @endphp

        @foreach($products as $product)
            @if($count % 4 == 0)
                <div class="row mt-3">
            @endif
            <div class="col-xl-3 d-flex align-items-stretch">
                <div class="card w-100">
                    <img src="{{ asset($product->product_photo) }}" 
                        class="card-image card-img-top img-thumbnail" 
                        style="max-height: 175px; object-fit: cover; cursor: pointer;" alt="..."
                        data-product-id="{{ $product->product_id }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title product-title">
                            {{ Str::limit($product->product_name, $limit = 75, $end = '...') }}
                        </h5>
                        <p class="card-text mt-auto" style="color: #35dfac; font-weight: 600;">{{ number_format($product->price, 0, ',', '.') }}đ</p>
                        <a href="#" class="btn btn-success mt-auto">Add to cart</a>
                    </div>
                </div>
            </div>
            @php $count++; @endphp
            @if($count % 4 == 0 || $loop->last) 
                </div> 
            @endif
        @endforeach   

        <div class="row mt-3">
            <div class="col-xl-12 pagination">
                {{ $products->links() }}
            </div>
        </div>

    </div> 
    
    <script>
        var routes = {
        'productDetail': '{{ route("products.detail", ["productId" => ":productId"]) }}'
    };
    </script>
    <script src="{{asset('js/app.js')}}"></script>
@endsection