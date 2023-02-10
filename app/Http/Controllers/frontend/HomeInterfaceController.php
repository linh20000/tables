<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Product;
use App\Models\Category;
use App\Models\Form_comment;
use App\Models\Order;
use App\Models\Blog;
use App\Models\Config;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomeInterfaceController extends Controller
{
    // function show home 
    public function showHome()
    {
        // get new product 
        $new_product = Product::orderBy('created_at', 'DESC')->where('status','=', '1')->limit(6)->get();

        $blog = Blog::orderBy('created_at', 'DESC')->limit(5)->get();

        // seo search
        $config = Config::first();
        SEOTools::setTitle($config->seo_title);
        SEOTools::setDescription($config->seo_description);
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite($config->seo_title);
        // end seo search

        // demo product
        $demo_product = Product::where('status','=', '1')->limit(10)->get();

        // get feedback
        $feedback = Feedback::orderBy('created_at', 'DESC')->get();
        return view('frontend.home.index',compact('feedback','new_product','demo_product','blog'));
    }
    //  end funtion show home
   
    // start function show product
    public function ProductList($id, $slug)
    {
        $cate = Category::where('id', $id)->first();
        // dd($cate);
        $product = Product::where('category_id',$cate->id)->get();

        // SEO PRODUCT
        SEOTools::setTitle($cate->seo_title);
        SEOTools::setDescription($cate->seo_description);
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite($cate->seo_title); 
        // dd($product);
        return view('frontend.product.index', compact('product'));
    } 
    // end function show product
    // start function show introduce
    public function introduce()
    {
        SEOTools::setTitle('Giới thiệu về chúng tôi');
        return view('frontend.introduce.index');
    } 
    // end function show introduce

    // start function show details product
    public function showDetails($id, $slug) {
        $product = Product::where('status','=', '1')->limit(10)->get();
        $details_product = Product::find($id);

        // SEO DETAIL PRODUCT
        SEOTools::setTitle($details_product->seo_title);
        SEOTools::setDescription($details_product->seo_description);
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite($details_product->seo_title); 


        return view('frontend.details.index', compact('product', 'details_product'));
    }
    // end function show details product

    // statt funtionm order 
      public function sendOrder(Request $request){
        $data = $request->all();
        // dd($data);
        $request->validate([
            'name'=>'required',
            'phoneNumber'=>'required|min:10|max:10|',
            'province'=>'required',
            'district'=>'required',
            'ward'=>'required',
            'address'=>'required',
        ],[
            'name.required'=>'Vui lòng nhập đầy đủ họ tên !',
            'phoneNumber.required'=>'Vui lòng nhập số điện thoại !',
            'phoneNumber.min'=>'Vui lòng nhập đúng số điện thoại !',
            'phoneNumber.max'=>'Vui lòng nhập đúng số điện thoại !',
            'province.required'=>'Vui lòng nhập tỉnh !',
            'district.required'=>'Vui lòng nhập huyện !',
            'ward.required'=>'Vui lòng nhập xã !',
            'address.required'=>'Vui lòng nhập địa chỉ cụ thể !',
        ]);
        $productRowId = $data['product_rowId'];
        $json = json_encode($productRowId);
        $data['product_rowId'] = $json;
        $data['total'] = (float)$data['total'];
        $data['qty'] = (int)$data['qty'];
        $data['total'] = Cart::subtotal();
        Order::create($data);
        Cart::destroy();
        return back()->with('success', 'Bạn đã đặt hàng thành công');
    }
    // end function order

    public function getComment(){
        return view('frontend.blog.form_comment');
    }

    public function addComment(Request $request) {
        $request->validate(
        [
            'author'=>'required',
            'comment'=>'required',
            'email'=>'required',
            'url'=>'required',
        ],
        [
            'author.required'=>'Vui lòng nhập họ tên !',
            'comment.required'=>'Nhập bình luận !',
            'email.required'=>'Nhập email !',
            'url.required'=>'Nhập url',
        ]);
        $comment = $request->all();
        Form_comment::create($comment);
        return response()->json(['success'=>'Đã gửi comment']);
    }
     // start function show new title
    public function showNewTitle()
    {
        return view('frontend.blog.index');
    }
    // end function show new title

    // start function payment
    public function Payment()
    {
        return view('frontend.payment.index');
    } 
    // end function payment
}
