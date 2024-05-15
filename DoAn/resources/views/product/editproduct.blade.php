@extends('layout')

@section('title', 'Checkout')
@section('content')
<!-- Main -->
<main>
    <div class="container">

        <div class="content">
            <h1>Sửa Sản Phẩm</h1>
            <form action="{{ route('product.update', ['product' => $product->product_id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Tên sản phẩm -->
                <div>
                    <label for="product_name">Tên sản phẩm:</label>
                    <input type="text" id="product_name" name="product_name" value="{{$product->product_name}}">
                </div>
                <!-- Số lượng -->
                <div>
                    <label for="quantity">Số lượng:</label>
                    <input type="number" id="quantity" name="quantity" value="{{$product->quantity}}">
                </div>
                <!-- Trạng thái -->
                <div>
                    <label for="status">Trạng thái:</label>
                    <select id="status" name="status">
                        <option value="Còn hàng" {{$product->status == 'Còn hàng' ? 'selected' : ''}}>Còn hàng</option>
                        <option value="Hết hàng" {{$product->status == 'Hết hàng' ? 'selected' : ''}}>Hết hàng</option>
                    </select>
                </div>
                <!-- Giá -->
                <div>
                    <label for="price">Giá:</label>
                    <input type="text" id="price" name="price" value="{{$product->price}}">
                </div>
                <!-- Mã doanh mục -->
                <div>
                    <label for="category_id">Danh mục:</label>
                    <select id="category_id" name="category_id">
                        @foreach($categories as $category)
                        <option value="{{$category->category_id}}" {{$product->category_id == $category->category_id ? 'selected' : ''}}>{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Mô tả sản phẩm -->
                <div>
                    <label for="product_detail">Mô tả sản phẩm:</label>
                    <textarea id="product_detail" name="product_detail">{{$product->product_detail}}</textarea>
                </div>
                <!-- Hình ảnh -->
                <div>
                    <label for="product_photo">Ảnh sản phẩm:</label>
                    <div class="product-image-container">
                        <img id="product_photo" src="{{ asset('uploads/images/' . $product->product_photo) }}" alt="Ảnh sản phẩm" class="product-image">
                    </div>
                    <input id="product_photo" type="file" class="form-control @error('product_photo') is-invalid @enderror" name="product_photo" required autocomplete="product_photo" onchange="previewImage(event)">
                </div>
                <button type="submit">Lưu</button>
            </form>
        </div>
    </div>
</main>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('product_photo');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection