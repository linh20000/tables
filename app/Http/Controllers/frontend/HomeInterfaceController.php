<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\Product;
use App\Models\Category;
use App\Models\Form_comment;
use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart;

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
}
