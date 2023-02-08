<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Plugin;
class EditPluginController extends Controller
{
    public function getEdit() {
        $profile = Plugin::first();
        return view('backend.editting.editting',['breadcrumb'=>'Chỉnh sửa thông tin footer']
        , compact('profile'));
    }

    public function updatePlugin(Request $request){
        $profile = Plugin::find(1);
        $data = $request->all();
        $profile->update($data);
        return back()->with('success', 'Chỉnh sửa thành công!!!');
    }
}
