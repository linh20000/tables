<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
class ProductController extends Controller

{
    public function search(Request $request){
        // dd($request->all());
        $product = Product::where('name', 'LIKE', '%'. $request->search .'%')->orWhere('product_code', 'LIKE', '%'. $request->search .'%')->get();
        $productLenght = count($product);
        return view('backend.product.list',['breadcrumb'=>'Danh sách sản phẩm'],compact('product','productLenght'));
    }
    public function showProductList() {
        $product = Product::all();
        // dd($dataProduct);
        $productLenght = count($product);
        return view('backend.product.list',['breadcrumb'=>'Danh sách sản phẩm'],compact('product','productLenght'));
    }
    public function getCreateProduct() {
        // $category_id = Product::where('category_id','=', '1')->where('status','=','0')->get();
        $category_id = Category::where('parent_id' ,'=' , 0) ->get();
        return view('backend.product.create',['breadcrumb'=>'Thêm sản phẩm'],compact('category_id'));
    }
    public function addProduct( Request $request) {
        // dd($request->all());
        $data = $request->all();
        // dd($data);
        // dd($data->name);
        $validate = $request->validate([
            'name'=>'required|max:255',
            'product_code'=>'required',
            'old_price'=>'required|numeric',
            'percent_discount'=>'numeric',
            'current_price'=>'required',
            'seo_description'=>'max:2000',
        ], [
            'name.required'=>'Bạn chưa nhập tên sản phẩm',
            'product_code.required'=>'Bạn chưa nhập mã sản phẩm',
            'old_price.required'=>'Bạn chưa nhập giá gốc sản phẩm',
            'old_price.numeric'=>'Vui lòng kiểm tra lại giá gốc',
            'percent_discount.numeric'=>'Vui lòng kiểm tra lại phần trăm giảm giá',
        ]);
        Product::create($data);
        return back()->with('success', 'Thêm thành công sản phẩm !');
    }
    
    public function getUpdateProduct($id) {
        $product = Product::find($id);
        $category_id = Category::where('parent_id' ,'=' , 0) ->get();
        return view('backend.product.update',['breadcrumb'=>'Chỉnh sửa sản phẩm'], compact('product','category_id'));
    }

    public function updateProduct($id, Request $request) {
        $data_update = $request->all();
        // dd($data);
        $product_update = Product::findOrFail($id);
        $product_update -> update($data_update);
        return redirect(route('admin.showProductList'))->with('success', 'Chỉnh sửa thành công'); 
    }

    public function deleteProduct($id) {
        $product_delete = Product::find($id) ;
        $product_delete->delete();
        return back()->with('mess', 'Xóa thành công sản phẩm');        
    }
}
