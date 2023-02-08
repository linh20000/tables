<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeInterfaceController extends Controller
{


    // function show home 
    public function showHome()
    {
        return view('frontend.home.index');
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
}
