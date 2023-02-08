<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Policy;


class PolicyController extends Controller 
{
    public function viewPolicy(){
        $policy = Policy::all();
        return view('backend.policy.list',
        ['title'=>'Danh sách chính sách']
        , compact('policy'));
    }

    public function createPolicy() {
        return view('backend.policy.create'
        , ['title'=>'Thêm chính sách']
        );
    }

    public function storePolicy(Request $request){
        $requi = [
            'name'  => 'required|max:255',
            'subname' => 'required|max:255',
            'description' => 'required|max:255',
            'thumbnail'   => 'required'
        ];
        $messages = [
            'name.required'    => 'Nhập tên !!!',
            'subname.required'    => 'Nhập tên phụ !!!',
            'description.required'    => 'Nhập mô tả !!!',
            'thumbnail.required'  => 'Nhập ảnh !!!'
        ];
        $validate = $request->validate($requi, $messages);
        $data = $request->all();
        Policy::create($data);
        return redirect(route('policy.list'));
    }

    public function getUpdatePolicy($id){
        $policy_detail = Policy::findOrFail($id);
        return view('backend.policy.update', 
        ['title'=>'Chỉnh sửa policy']
        , compact('policy_detail'));
    }

    public function updatePolicy(Request $request, $id){
        $policy = Policy::findOrFail($id);
        $data = $request->all();
        $policy->update($data);
        return redirect(route('policy.list'))->with('success', 'Chỉnh sửa thành công!!!');
    }

    public function deletepolicy($id){
        $policy = policy::findOrFail($id);
        $policy->delete();
        return redirect(route('policy.list'));
    }
}