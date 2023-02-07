<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCartController extends Controller
{
    public function CartList() {
        return view('frontend.shopping_cart.index');
    }
}