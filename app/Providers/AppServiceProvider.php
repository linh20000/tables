<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Product;
use App\Models\Banner;
use App\Models\blog;
use Gloudemans\Shoppingcart\Facades\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('*', function($view) {
            $view->with([
                'categories'=>  Category::where('parent_id', '=', 0)->get(),
                'banner'=>Banner::all(),
                'product_cart'=>Cart::content(),
                'user'=>User::first(),
                'product_blog'=>Product::orderBy('created_at', "ASC")->where('status','=', '1')->get(),

                'blog'=> Blog::orderBy('created_at', 'DESC')->limit(10)->get(),
            ]);
        });
    }
}
