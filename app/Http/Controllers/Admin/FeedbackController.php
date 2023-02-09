<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;


class FeedbackController extends Controller
{
    public function showFeedback() {
        $feedback = Feedback::orderBy('created_at', 'DESC')->get();
        return view('backend.feedback.list',['title'=>'Đánh giá khách hàng'],compact('feedback'));
    }

    public function showUpdateFeedback($id) {
        $feedback = Feedback::find($id);
        return view('backend.feedback.update', ['breadcrumb'=>'Chỉnh sửa đánh giá'],compact('feedback'));
    }
    public function UpdateFeedback($id, Request $request) {
        $feedback = Feedback::find($id);
        $feedback->update($request->all());
        return redirect(route('showFeedback'))->with('mess', 'Cập nhật đánh giá thành công ');
    }
    public function showcreateFeedback() {
        return view('backend.feedback.create',['breadcrumb'=>'Tạo mới đánh giá']);
    }
    public function createFeedback(Request $request) {
        Feedback::create($request->all());
        return back()->with('success', 'Tạo thành công Đánh giá khách hàng');
    }
    public function deleteFeedback($id) {
        $data =  Feedback::find($id);
        $data->delete();
        return back()->with('mess', 'Xóa thành công đánh giá');
    }

}