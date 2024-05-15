@extends('layout')

@section('title', 'Checkout')
@section('content')
<!-- Main -->
<main>
    <h1>Danh sách sản phẩm</h1>

    <div class="filter">
        <h3>Bộ lọc</h3>
        <div class="filter-item">
            <label for="category">Danh mục:</label>
            <select id="category">
                <option value="all">Tất cả</option>
                <option value="clothing">Quần áo</option>
                <option value="electronics">Đồ điện tử</option>
                <option value="books">Sách</option>
            </select>
        </div>
        <div class="filter-item">
            <label for="price">Giá:</label>
            <select id="price">
                <option value="all">Tất cả</option>
                <option value="low">Dưới 100.000 VND</option>
                <option value="medium">Từ 100.000 - 500.000 VND</option>
                <option value="high">Trên 500.000 VND</option>
            </select>
        </div>
        <div class="filter-item">
            <label for="popularity">Độ phổ biến:</label>
            <select id="popularity">
                <option value="all">Tất cả</option>
                <option value="popular">Phổ biến</option>
                <option value="not-popular">Không phổ biến</option>
            </select>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Trạng thái</th>
                <th>Giá</th>
                <th>Danh mục</th>
                <th>Mã người dùng</th>
                <th>Mô tả sản phẩm</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->product_id}}</td>
                <td><img src="{{ asset('uploads/images/' . $product->product_photo) }}" alt="Ảnh sản phẩm" width="100"></td>
                <td>{{$product->product_name}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->status}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category->category_name}}</td>
                <td>{{$product->user_id}}</td>
                <td>{{$product->product_detail}}</td>
                <td>
                    <a class="edit-button" href="{{ route('product.update', ['product_id' => $product->product_id]) }}"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{ route('product.deleteProduct', ['id' => $product->product_id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="main-buttons">
        <a class="add-product-button" href="{{ route('product.addProduct') }}">Thêm sản phẩm</a>
        <a class="add-voucher-button">Thêm voucher</a>
    </div>

    <!-- Phân trang  -->
    @if($numberOfPage > 1)
    <div class="d-flex justify-content-center align-items-center my-2">
        @if($pageIndex > 1)
        <a class="btn btn-success" href="{{route('product.productManagement', ['pageIndex' => $pageIndex - 1])}}">Trước</a>
        @endif
        @for($i = 1; $i <= $numberOfPage; $i++) @if($i==$pageIndex) <a class="btn btn-primary ms-2" href="{{route('product.productManagement', ['pageIndex' => $i])}}">{{$i}}</a>
            @else
            @if($i == 1 || $i == $numberOfPage || ($i <= $pageIndex + 4 && $i>= $pageIndex - 4))
                <a class="btn btn-success ms-2" href="{{route('product.productManagement', ['pageIndex' => $i])}}">{{$i}}</a>
                @elseif($i == $pageIndex - 5 || $i == $pageIndex + 5)
                <a class="btn btn-success ms-2" href="{{route('product.productManagement', ['pageIndex' => $i])}}">...</a>
                @endif
                @endif
                @endfor
                @if($pageIndex < $numberOfPage) <a class="btn btn-success ms-2" href="{{route('product.productManagement', ['pageIndex' => $pageIndex + 1])}}">Sau</a>
                    @endif
    </div>
    @endif

</main>

<!-- Footer -->
@endsection