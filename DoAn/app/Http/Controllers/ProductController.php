<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function productManagement(Request $request)
    {
        $user_id = Auth::id();

        // Lấy danh sách sản phẩm của người dùng hiện tại
        $products = Product::where('user_id', $user_id)->paginate(10);

        return view('product.productmanagement', compact('products'));
    }

    public function addProduct()
    {
        $users = User::all();
        $categories = Category::all();

        return view('product.addproduct', compact('users', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_detail' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,category_id',
        ]);

        if ($request->hasFile('product_photo')) {
            $file = $request->file('product_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/images/', $filename);
            $data = $request->all();
        } else {
            return back()->with('error', 'Image upload failed.');
        }
        // Thêm điều kiện cho status
        $status = $request->quantity > 0 ? 'Active' : 'Inactive';
        $user_id = Auth::id();

        $check = Product::create([
            'product_name' => $data['product_name'],
            'product_detail' => $data['product_detail'],
            'quantity' => $data['quantity'],
            'status' => $status,
            'price' => $data['price'],
            'category_id' => $data['category_id'],
            'user_id' => $user_id,
            'product_photo' => $filename,
        ]);
        $product = new Product();
        $product->user_id = $user_id; // Gán user_id ở đây
        // Đặt các trường khác
        return redirect()->route('product.productManagement')->with('mes', 'Thêm sản phẩm thành công');
    }

    public function editProduct(Request $request, $product_id)
    {
        $pageIndex = $request->input('pageIndex', 1);
        $product = Product::findOrFail($product_id);
        $users = User::all();

        $categories = Category::all();
        return view('product.editproduct', compact('product', 'users', 'categories', 'pageIndex'));
    }

    public function update(Request $request, $product_id)
    {
        // Tìm sản phẩm cần cập nhật
        $product = Product::findOrFail($product_id);

        $input = $request->all();

        $request->validate([
            'product_name' => 'required',
            'product_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'product_detail' => 'required',
            'quantity' => 'required|numeric',
            // 'status' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,category_id',
            'user_id' => 'required|exists:users,user_id',
        ]);
        $status = $request->quantity > 0 ? 'Active' : 'Inactive';

        $product = Product::find($input['product_id']);
        $product->product_name = $input['product_name'];
        $product->product_detail = $input['product_detail'];
        $product->quantity = $input['quantity'];
        // $product->status = $input['status'];
        $product->$status;
        $product->price = $input['price'];
        $product->category_id = $input['category_id'];
        $product->user_id = $input['user_id'];
        //Kiem tra tep tin co truong du lieu avatar hay kh
        if ($request->hasFile('product_photo')) {
            $oldphoto = 'uploads/images/' . $product->product_photo;
            if (File::exists($oldphoto)) {
                File::delete($oldphoto);
            }

            $file = $request->file('product_photo');
            $extension = $file->getClientOriginalExtension(); //Lay ten mo rong .jpg, .png...
            $filename = time() . '.' . $extension; //
            $file->move('uploads/images/', $filename);  //upload len thu muc avatar trong piblic
        }
        $product->product_photo = $filename;
        $product->update();

        // Chuyển hướng người dùng với thông báo thành công
        return redirect()->route('product.productManagement')->with('success', 'Cập nhật sản phẩm thành công');
    }

    public function deleteProduct($product_id)
    {
        $product = Product::findOrFail($product_id);
        $product->delete();

        return redirect()->route('product.productManagement')->with('mes', 'Xóa sản phẩm thành công');
    }

    public function detailProduct()
    {
        return view('product.detailproduct');
    }

    public function filterProducts(Request $request)
    {
        $query = Product::query();

        if ($request->category_id && $request->category_id != 'all') {
            $query->where('category_id', $request->category_id);
        }

        if ($request->price && $request->price != 'all') {
            switch ($request->price) {
                case 'duoi_100k':
                    $query->where('price', '<', 100000);
                    break;
                case 'giua_100_500k':
                    $query->whereBetween('price', [100000, 500000]);
                    break;
                case 'tren_500k':
                    $query->where('price', '>', 500000);
                    break;
            }
        }

        if ($request->status && $request->status != 'all') {
            $query->where('status', $request->status);
        }

        $filteredProducts = $query->get();

        return view('product.productmanagement', [
            'products' => $filteredProducts,
            'numberOfPage' => 1,
            'pageIndex' => 1
        ]);
    }

    public function home()
    {
        return view('home');
    }
}
