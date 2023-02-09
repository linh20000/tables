<?php 

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Appointment;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller 
{
    public function showListOrder() {
        $data = Order::orderBy('created_at', 'DESC')->get();
        $orderCount = count($data);
        return view('backend.orders.list', ['breadcrumb'=>'danh sách đơn hàng'], compact('data','orderCount'));
    }

    public function showDetailsOrder($id) {
        $data_details = Order::find($id);
        // dd($data_details);
        $decode_product =  json_decode($data_details->product_rowId);
        foreach ($decode_product as $key => $value) {
        }
        $product_cart = json_decode($value);
        $arrays[] = $product_cart;
        // dd($arrays);
        return view('backend.orders.details_order',['breadcrumb'=>'Chi tiết đơn hàng'], compact('data_details','product_cart','arrays'));
    }

    // order Appointment

    public function orderAppointment(){
        $data = Appointment::orderBy('created_at', 'DESC')->get();
        $orderAppointment = count($data);
        return view('backend.appointment.list', ['breadcrumb'=>'Danh sách lịch hẹn'],compact('data','orderAppointment'));
    }
    public function updateStatus($id, Request $request){
        $status_order = Order::find($id);
        $updateStatus =  $status_order['status'] = $request->status;
        // DB::table('products')->where('id', $id)->update(['value' => $request->value"]);
        Order::where('id', $id)->update(['status'=>$updateStatus]);
        return redirect(route('showListOrder'))->with('messes', 'Cập nhật trạng thái thành công');
    }

    public function deleteOrder($id) {
        $order = Order::find($id);

        $order->delete();
        return redirect(route('showListOrder'))->with('messes', 'Xóa đơn hàng thành công');
    }

    public function updateAppointment($id) {
        $book = Appointment::find($id);
        return view('backend.appointment.update',['breadcrumb'=>'Chỉnh sửa lịch hẹn'], compact('book'));
    }
    public function updatement($id, Request $request) {
        $updateStatus =  $status_order['status'] = $request->status;
        Appointment::where('id', $id)->update(['status'=>$updateStatus]);
        return redirect(route('get.orderAppointment'))->with('messes', 'Cập nhật trạng thái thành công');

    }
    public function deleteAppointment($id) {
        $book = Appointment::find($id);
        $book->delete();
        return redirect(route('get.orderAppointment'))->with('messes', 'Xóa đơn hàng thành công');
    }


}