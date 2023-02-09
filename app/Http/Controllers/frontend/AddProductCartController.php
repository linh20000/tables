<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOTools;

class AddProductCartController extends Controller
{
    public function addCartajax($id,Request $request) {
        $product = Product::FindOrFail($id);
        Cart::add([
            'id' => $product->id,
            'name'=>$request['name'],
            'price'=>(int)($request['current_price']),
            'qty'=> (int)$request['quantity'],
            'weight' => $product-> status,
            'options' => ['thumbnail'=>$request['thumbnail'],
                        'product_code'=>$request['product_code'],
                        'discount'=>$request['percent_discount'],
                        'old_price'=>(int)($request['old_price']),
            ]
            
        ]);
        return response()->json(['success'=> 'Thêm vào giỏ hàng thành công','quantity'=>Cart::count()]);

    }
    public function showCartList() {

        SEOMeta::setTitle("Giỏ hàng");
        return view('frontend.shopping_cart.index');
    } 
    public function deleteCart($rowId) {
        Cart::remove($rowId);
        return back()->with('success', 'Xóa sản phẩm thành công ' );
    }
}