<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use App\Models\Appointment;

use Illuminate\Http\Request;

class AppointmentHomeController extends Controller
{
    //

    public function advisory(Request $request)  {
        $request->validate(
            [
                'name'=>'required',
                'phoneNumber'=>'required',
                'email'=>'required',
                'address'=>'required',
                'content'=>'required',

            ],
            [
                'name.required'=>'Vui lòng nhập đầy đủ họ tên !',
                'phoneNumber.required'=>'Vui lòng nhập số điện thoại !',
                'email.required'=>'Vui lòng nhập địa chỉ email !',
                'address.required'=>'Vui lòng nhập địa chỉ !',
                'content.required'=>'Vui lòng nhập nội dung cần tư vấn !',
            ]
        );
        $data = $request->all();
        Appointment::create($data);

        return response()->json(['success'=>'Đặt lịch tư vấn thành công']);

    }
}
