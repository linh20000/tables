<?php 

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Appointment;
use Gloudemans\Shoppingcart\Facades\Cart;

class NewOrderController extends Controller 
{
    public function showHome() {
        $data = Order::orderBy('created_at', 'DESC')->take(3)->get();
        $dataAppointment = Appointment::orderBy('created_at', 'DESC')->get();
        return view('backend.home.index', compact('data','dataAppointment'));
    }
}