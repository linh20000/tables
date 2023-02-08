<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
class HomeInterfaceController extends Controller
{


    // function show home 
    public function showHome()
    {
        $feedback = Feedback::orderBy('created_at', 'DESC')->get();
        return view('frontend.home.index',compact('feedback'));
    }

    //  end funtion show home

    
    // start function show new title
    public function showNewTitle()
    {
        return view('frontend.blog.index');
    }
    // end function show new title

    // start function show product
    public function ProductList()
    {
        return view('frontend.product.index');
    } 
    // end function show product

    // start function payment
    public function Payment()
    {
        return view('frontend.payment.index');
    } 
    // end function payment

    // start function show introduce
    public function introduce()
    {
        return view('frontend.introduce.index');
    } 

    // end function show introduce
}
