<?php 

namespace App\Http\Controllers\Hook;
use App\Models\Category;

class CategoryHook {
    public function getAll() {
        return Category::orderBy('created_at','DESC')->get();
    }
    public function getParentStatus() {
        return Category::where('parent_id', '=', 0)->get();
    }
    public function getCategoryStatus() {
        return Category::where('parent_id', '!=', 0)->get();
    }
    public function createCategory($data){
        return Category::create($data);
    }
    public function getId($id) {
        return Category::findOrFail($id);
    }
    public function delete($data) {
        return $data->delete();
    }
    public function updateCategory($category, $data) {
        $cateData = $category->all();
        return $data->update($cateData);
    }
}   