@extends('master')
@section('content')
<main id="main" class="">
    <div class="page-wrapper page-left-sidebar">
        <div class="row">
            <div id="content" class="large-9 right col" role="main">
                <div class="page-inner">
                    <div class="woocommerce">
                        <div class="woocommerce row row-large row-divided">
                           
                        </div>
                        <div class="cart-footer-content after-cart-content relative"></div>
                    </div>
                </div><!-- .page-inner -->
            </div><!-- end #content large-9 left -->
            <div class="large-3 col col-first col-divided">
                <div id="secondary" class="widget-area " role="complementary">
                    @include('frontend.blog.hot_product')
                    @include('frontend.blog.blog_new')
                </div><!-- #secondary -->
            </div><!-- end sidebar -->
        </div><!-- end row -->
    </div><!-- end page-right-sidebar container -->
</main>
      <!-- #main -->
@endsection

