<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{

    // Danh sách danh mục
    public function showCategory() {
        $categories = Category::all();
        $dataLenght = count($categories);
        return view('backend.category.list',compact('categories','dataLenght'),['breadcrumb'=>'Danh sách danh mục']);
    }   
    
    // Thêm danh mục
    public function createCategory() {
        // $category_parent = Category::where('parent_id' , '=', 0)->get();
        // dd($category_parent);
        return view('backend.category.create',['breadcrumb'=>'Thêm danh mục']);
    } 
    public function postCategory(Request $request) {
        $dataCategory = $request->all();
        $requi = [
            'name'        => 'required|max:255',
            'title'        => 'required|max:255',
            'description'        => 'required|max:255',
            'parent_id' => 'nullable',
            'thumbnail' => 'required',
            'seo_title'     => 'required|max:255',
            'seo_keyword' => 'required|max:255',
            'seo_description'        => 'required|max:255',
        ];
        $messages = [
            'name.required'    => 'Chưa nhập tên',
            'title.required'=>'Chưa nhập tiêu đề',
            'description.required'=>'Chưa nhập miêu tả',
            'thumbnail.required'    => 'Chưa nhập ảnh',
            'seo_title.required' => 'Chưa nhập tiêu đề tìm kiếm',
            'seo_keyword.required' => 'Chưa nhập từ khóa tìm kiếm',
            'seo_description.required'=>'Chưa nhập miêu tả tìm kiếm',
        ];
        $request->validate($requi, $messages);
        Category::create($dataCategory);
        return back()->with('success','Thêm danh mục thành công');
    }

    // Chỉnh sửa danh mục
    public function getUpdateCategory($id) {
        $category = Category::find($id);
        return view('backend.category.update',['breadcrumb'=>'Chỉnh sửa danh mục'], compact('category'));
    } 

    public function updatecategory(Request $request, $id) {
        $data_update = $request->all();
        $category_update = Category::find($id);
        $requi = [
            'name'        => 'required|max:255',
            'title'        => 'required|max:255',
            'description'        => 'required|max:255',
            'parent_id' => 'nullable',
            'thumbnail' => 'required',
            'seo_title'     => 'required|max:255',
            'seo_keyword' => 'required|max:255',
            'seo_description'        => 'required|max:255',
        ];
        $messages = [
            'name.required'    => 'Chưa nhập tên',
            'title.required'=>'Chưa nhập tiêu đề',
            'description.required'=>'Chưa nhập miêu tả',
            'thumbnail.required'    => 'Chưa nhập ảnh',
            'seo_title.required' => 'Chưa nhập tiêu đề tìm kiếm',
            'seo_keyword.required' => 'Chưa nhập từ khóa tìm kiếm',
            'seo_description.required'=>'Chưa nhập miêu tả tìm kiếm',
        ];
        $request->validate($requi, $messages);
        $category_update->update($data_update);
        return redirect(route('admin.category'))->with('success', 'Chỉnh sửa thành công');
    }

    // xóa danh mục
    public function deleteCategory($id) {
        $category_delete = Category::find($id);

        $category_delete->delete();
        return back()->with('success', 'Xóa danh mục thành công');
    }

    // tìm kiếm danh mục
    public function search(Request $request){
        $categories = Category::where('name', 'LIKE', '%'. $request->name .'%')->orWhere('title', 'LIKE', '%'. $request->name .'%')->get();
        $dataLenght = count($categories);
        return view('backend.category.list', [
            'breadcrumb'=>'Quản lý danh mục'
        ],compact('categories','dataLenght'));
    }
}
