@extends('master')

@section('content')
<main id="main" class="">
  @include('frontend.component.filter_product')
  <div class="row category-page-row">
    <div class="col large-12">
      <div class="shop-container">
        {{-- product list --}}
        <div class="products row row-small large-columns-4 medium-columns-3 small-columns-2" >
          @if ($product->isEmpty())
            {{-- no product --}}
            <h2 class="d-flex justify-content-center align-items-center mt-5 mb-5" style="color:#777; text-align:center;">Chưa có sản phẩm</h2>
            {{-- end no --}}
          @else
            @foreach ($product as $item)
              <div class="product-small col has-hover  has-post-thumbnail first instock sale shipping-taxable purchasable product-type-simple" >
                  @include('frontend.component.product_item')
              </div>
            @endforeach
          @endif
        </div>
        {{-- end product list --}}
        <!-- row -->

        @if ($product->isEmpty())
          <div style="display:flex; justify-content:center; margin-top:30px;">
            <a href="{{route('showHome')}}" target="_self" class="button primary"  style="border-radius:4px; text-align:center;">
                <span>Quay về trang chủ</span>
            </a>
          </div>
        @else
          <div class="container">
            <nav class="woocommerce-pagination">
              <ul class="page-numbers nav-pagination links text-center">
                <li><span class="page-number current">1</span></li>
                <li>
                  <a class="page-number" href="page/2/index.html">2</a>
                </li>
                <li>
                  <a class="next page-number" href="page/2/index.html"
                    ><i class="icon-angle-right"></i
                  ></a>
                </li>
              </ul>
            </nav>
          </div>
        @endif
      </div>
      <!-- shop container -->
    </div>
    <!-- col-fit  -->
    <div id="shop-sidebar" class="mfp-hide">
      <div class="sidebar-inner">
          @include('frontend.blog.hot_product')
          @include('frontend.blog.blog_new')
      </div>
      <!-- .sidebar-inner -->
    </div>
    <!-- large-3 -->
  </div>
</main>
@endsection