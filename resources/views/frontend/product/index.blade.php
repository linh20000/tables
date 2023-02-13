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
                <li>
                  <a class="prev page-number" href="{{ $product->previousPageUrl() }}">
                    <i class="icon-angle-left"></i>
                  </a>
                </li>
                @if ( $product->onFirstPage())
                  <li>
                    <span class="page-number current">
                      <a class="page-link page-link-current" href="{{ $product->previousPageUrl() }}">0</a>
                    </span>
                  </li>
                @else
                    <li>
                    <span class="page-number current">
                      <a class="page-link page-link-current" href="#">0</a>
                    </span>
                  </li>
                @endif
                {{-- <li>
                  <a class="page-number" href="{{ $product->nextPageUrl() }}">2</a>
                </li> --}}
                @if ($product->hasMorePages())
                <li>
                  <a class="next page-number" href="{{ $product->nextPageUrl() }}">
                    <i class="icon-angle-right"></i>
                  </a>
                </li>
                @else
                <li>
                  <a class="next page-number" href="#">
                    <i class="icon-angle-right"></i>
                  </a>
                </li>
                @endif
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
<script>
  let page = 1;
  $('.next').click((e)=> {
    page += 1;
    $('.page-link-current').text(page)
  })
  $('.prev').click((e)=> {
    page -= 1;
    if (page <=1) {
      page = 1
    }
    $('.page-link-current').text(page)
  })
</script>
@endsection
