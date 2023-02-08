<?php 

namespace App\Http\Controllers\Hook;
use App\Models\Product;
class ProductHook {
    public function getAll() {
        return Product::orderBy('created_at', 'DESC')->get();
    }
    public function createProduct($data) {
        return Product::create($data);
    }
    public function updateProduct($data) {
        return Product::update($data);
    }
    public function getCategoryStatus() {
        return Product::where('category_id','=', '1')->where('status','=','0')->get();
    }
     public function getId($id) {
        return Product::findOrFail($id);
    }
    public function delete($data) {
        return $data->delete();
    }
}
