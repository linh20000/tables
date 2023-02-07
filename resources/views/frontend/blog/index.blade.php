@extends('master')


@section('content')
    <main id="main" class="">
      <div id="content" class="blog-wrapper blog-single page-wrapper">
        <div class="row row-large row-divided">
          <div class="post-sidebar large-3 col">
            <div id="secondary" class="widget-area" role="complementary">
              @include('frontend.blog.hot_product')
              @include('frontend.blog.blog_new')
            </div>
            <!-- #secondary -->
          </div>
          <!-- .post-sidebar -->
          <div class="large-9 col medium-col-first">
            {{-- content --}}
            @include('frontend.blog.content_blog')
            {{-- content --}}
            <!--comment -->
            @include('frontend.blog.form_comment')
            <!-- #comments -->
          </div>
          <!-- .large-9 -->
        </div>
        <!-- .row -->
      </div>
      <!-- #content .page-wrapper -->
    </main>
      <!-- #main -->
@endsection


