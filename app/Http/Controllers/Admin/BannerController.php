<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
class BannerController extends Controller
{

    // Danh sách Banner
    public function showBanner() {
        $banner = Banner::all();
        $dataLenght = count($banner);
        return view('backend.banner.list',compact('banner','dataLenght'),['breadcrumb'=>'Danh sách banner']);
    }   
    
    // Thêm danh mục
    public function createBanner() {
        // $category_parent = Category::where('parent_id' , '=', 0)->get();
        // dd($category_parent);
        return view('backend.banner.create',['breadcrumb'=>'Thêm banner']);
    } 
    public function postBanner(Request $request) {
        $data_banner = $request->all();
        // dd($data_banner);

        Banner::create($data_banner);
        return back()->with('success','Thêm banner thành công');
    }

    // Chỉnh sửa danh mục
    public function getUpdateBanner($id) {
        $banner = Banner::find($id);
        return view('backend.banner.update',['breadcrumb'=>'Chỉnh sửa banner'], compact('banner'));
    } 

    public function updateBanner(Request $request, $id) {
        $data_update = $request->all();
        $banner_update = Banner::find($id);
        $banner_update->update($data_update);
        return redirect(route('admin.banner'))->with('success', 'Chỉnh sửa thành công');
    }

    public function deleteBanner($id) {
        $banner_delete = Banner::find($id);

        $banner_delete->delete();

        return back()->with('success', 'Xóa banner thành công');
        
    }
}
