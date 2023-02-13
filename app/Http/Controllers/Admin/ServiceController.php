<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

use function JmesPath\search;

class ServiceController extends Controller
{
    public function ServiceList(){
        $service = Service::all();
        return view('backend.service.list',
        ['title'=>'Danh sách dịch vụ']
        , compact('service'));    
    }

    public function createService(){
        return view('backend.service.create', 
        ['title'=>'Thêm dịch vụ']
        );
    }
    public function storeService(Request $request){
        $requi = [
            'name'  => 'required|max:255',
            'subname' => 'required|max:255',
            'description' => 'required',
            'seo_title' => 'required|max:255',
            'seo_description' => 'required|max:255',
            'seo_keyword' => 'required|max:255',
            'image'   => 'required'
        ];
        $messages = [
            'name.required'    => 'Nhập tên !!!',
            'subname.required'    => 'Nhập tên phụ !!!',
            'description.required'    => 'Nhập miêu tả !!!',
            'seo_title.required'    => 'Nhập tiêu đề - tìm kiếm !!!',
            'seo_description.required'    => 'Nhập mô tả !!!',
            'seo_keyword.required'    => 'Nhập từ khóa !!!',
            'image.required'  => 'Nhập ảnh !!!'
        ];
        $validate = $request->validate($requi, $messages);
        $data = $request->all();
        Service::create($data);
        return redirect(route('service.list'))->with('success', 'Thêm thành công...');
    }

    public function getUpdateService($id){
        $service_detail = Service::findOrFail($id);
        return view('backend.service.update', 
        ['title'=>'Chỉnh sửa dịch vụ']
        , compact('service_detail'));
    }

    public function updateService(Request $request, $id){
        $service = Service::findOrFail($id);
        $data = $request->all();
        $service->update($data);
        return redirect(route('service.list'))->with('success', 'Chỉnh sửa thành công.');
    }

    public function deleteService($id){
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect(route('service.list'))->with('success', 'Đã xóa.');
    }
}
