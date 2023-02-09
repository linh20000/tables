<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profile;
class EditProfileController extends Controller
{
    public function getEdit() {
        $profile = Profile::find(1);
        return view('backend.editting.editting',['breadcrumb'=>'Chỉnh sửa thông tin footer']
        , compact('profile'));
    }

    public function updateProfile(Request $request){
        $profile = Profile::find(1);
        $data = $request->all();
        $profile->update($data);
        return back()->with('success', 'Chỉnh sửa thành công!!!');
    }
}
