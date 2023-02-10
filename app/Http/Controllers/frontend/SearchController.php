<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    //
    public function search(Request $request) 
    {
        $product = Product::where('name', 'LIKE', '%'. $request->search .'%')->orWhere('seo_keyword', 'LIKE', '%'. $request->search .'%');
        if($request->price == 'desc'){
            $product = $product->orderBy('current_price','DESC');
            
        }
        if($request->price == 'asc'){
            $product = $product->orderBy('current_price','ASC');
            
        }
        if($request->created_at == 'desc'){
            $product = $product->orderBy('created_at','DESC');
            
        }
        if($request->created_at == 'asc'){
            $product = $product->orderBy('created_at','ASC');
        }
        if($request->created_at == 'desc' && $request->price == 'desc'){
            $product = $product->orderBy('current_price','DESC')->orderBy('created_at','DESC');
            
        }
        if($request->price == 'desc' && $request->created_at == 'asc'){
            $product = $product->orderBy('current_price','DESC')->orderBy('created_at','ASC');
            
        }
        if($request->price == 'asc' && $request->created_at == 'desc'){
            $product = $product->orderBy('current_price','DESC')->orderBy('created_at','DESC');
            
        }
        if($request->price == 'asc' && $request->created_at == 'asc'){
            $product = $product->orderBy('current_price','DESC')->orderBy('created_at','ASC');
            
        }
        $product=$product->get();
        return view('frontend.product.index', compact('product'));
    }
   
}
