<?php

namespace App\Http\Controllers\Admin;
use App\Models\Introduce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class IntroduceController extends Controller
{
    function getUpdateIntroduce() {
        $introduce = Introduce::first();
        // dd($data);
        return view('backend.introduce.update',['breadcrumb'=>'Chỉnh sửa giới thiệu'], compact('introduce'));
    }
    function updateIntroduce(Request $request) {
        $request->validate([
            'name'=>'required|max:2000',
            'description'=>'required',
            'seo_title'=>'required|max:2000',
        ],
        [
            'name.required'=>'vui lòng nhập tên ',
            'description.required'=>'vui lòng nhập nội dung',
            'seo_title.required'=>'vui lòng nhập tiêu đề',
        ]
        );
        $introduce = Introduce::find(1);
        $data = $request->all();
        $introduce->update($data);
        // DB::table('Introduces')->update(
        //     [
        //         'name'=>$request['name'],
        //         'thumbnail'=>$request['thumbnail'],
        //         'description'=>$request['description'],
        //         'seo_title'=>$request['seo_title'],
        //     ]
        // );
        return back()->with('success', 'Chỉnh sửa thành công!!!');
    }
}
