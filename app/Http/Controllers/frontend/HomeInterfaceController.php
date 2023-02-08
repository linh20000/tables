<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Product;
use App\Models\Category;
class HomeInterfaceController extends Controller
{


    // function show home 
    public function showHome()
    {
        // get new product 
        $new_product = Product::orderBy('created_at', 'DESC')->where('status','=', '1')->limit(6)->get();
        // dd($new_product);

        // demo product

        $demo_product = Product::where('status','=', '1')->limit(10)->get();

        // get feedback
        $feedback = Feedback::orderBy('created_at', 'DESC')->get();
        return view('frontend.home.index',compact('feedback','new_product','demo_product'));
    }

    //  end funtion show home

    
    // start function show new title
    public function showNewTitle()
    {
        return view('frontend.blog.index');
    }
    // end function show new title

    // start function show product
    public function ProductList($id, $slug)
    {
        $cate = Category::where('id', $id)->first();
        // dd($cate);
        $product = Product::where('category_id',$cate->id)->get();
        // dd($product);
        return view('frontend.product.index', compact('product'));
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

    // start function show details product
    public function showDetails($id, $slug) {
        $product = Product::where('status','=', '1')->limit(10)->get();
        $details_product = Product::find($id);
        // dd($details_product);
        return view('frontend.details.index', compact('product', 'details_product'));
    }
    // end function show details product
}
