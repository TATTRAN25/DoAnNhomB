<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Phương thức hiển thị danh sách sản phẩm
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with('products', $products);
    }

    // Phương thức hiển thị form tạo sản phẩm mới
    public function create()
    {
        return view('products.create');
    }

    // Phương thức lưu sản phẩm mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        // Xác thực dữ liệu gửi từ form
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            // Các quy tắc xác thực khác...
        ]);

        // Tạo sản phẩm mới
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        // Thiết lập các trường dữ liệu khác nếu cần

        // Lưu sản phẩm vào cơ sở dữ liệu
        $product->save();

        // Chuyển hướng người dùng sau khi lưu sản phẩm thành công
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // Phương thức hiển thị thông tin chi tiết của một sản phẩm
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Phương thức hiển thị form chỉnh sửa sản phẩm
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Phương thức cập nhật thông tin sản phẩm
    public function update(Request $request, $id)
    {
        // Xác thực dữ liệu gửi từ form
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            // Các quy tắc xác thực khác...
        ]);

        // Tìm sản phẩm cần chỉnh sửa
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        // Cập nhật các trường dữ liệu khác nếu cần

        // Lưu sản phẩm đã chỉnh sửa vào cơ sở dữ liệu
        $product->save();

        // Chuyển hướng người dùng sau khi cập nhật sản phẩm thành công
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    // Phương thức xóa sản phẩm
    public function destroy($id)
    {
        // Tìm và xóa sản phẩm
        $product = Product::findOrFail($id);
        $product->delete();

        // Chuyển hướng người dùng sau khi xóa sản phẩm thành công
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
