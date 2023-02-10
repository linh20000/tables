<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;
class EditProfileController extends Controller
{
    public function getEdit() {
        $profile = Config::find(1);
        return view('backend.editting.editting',['breadcrumb'=>'Chỉnh sửa thông tin footer']
        , compact('profile'));
    }

    public function updateProfile(Request $request){
        $profile = Config::find(1);
        $data = $request->all();
        $profile->update($data);
        return back()->with('success', 'Chỉnh sửa thành công!!!');
    }
}
