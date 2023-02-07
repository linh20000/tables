<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;


class BannerController extends Controller
{
    public function viewBannerList(){
        $banner = Banner::all();
        return view('backend.banner.list',
        ['title'=>'Danh sách Banner']
        , compact('banner'));
        
    }
    public function createBanner(){
        return view('backend.banner.create', 
        ['title'=>'Thêm Banner']
        );
    }
    public function storeBanner(Request $request){
        $sort = $request->sort;
        $banner = Banner::where('sort','=',$sort)->get();
        if(!$banner->isEmpty()){
            return back()->with('error', 'Số thứ tự đã tồn tại !!!');
        };
        $requi = [
            'name'  => 'required|max:255',
            'sort'  => 'required',
            'image'   => 'required'
        ];
        $messages = [
            'name.required'    => 'Nhập tên !!!',
            'sort.required' => 'Nhập số thứ tự (là số nguyên dương) !!!',
            'image.required'  => 'Nhập ảnh !!!'
        ];
        $validate = $request->validate($requi, $messages);
        $data = $request->all();
        Banner::create($data);
        return redirect(route('admin.viewBannerList'));
    }

    public function getUpdateBanner($id){
        $banner_detail = Banner::findOrFail($id);
        return view('backend.banner.update', 
        ['title'=>'Chỉnh sửa Banner'], compact('banner_detail'));
    }

    public function updateBanner(Request $request, $id){
        $sort = $request->sort;
        $banner = Banner::where('sort','=',$sort)->get();
        $banner = Banner::findOrFail($id);
        $data = $request->all();
        $banner->update($data);
        return redirect(route('admin.viewBannerList'));
    }

    public function deletebanner($id){
        $banner = Banner::findOrFail($id);
        $banner->delete();
        return redirect(route('admin.viewBannerList'));
    }

}