@extends('master')

@section('content')
@include('frontend.component.toast.toast')

<main id="main" class="">
	<div class="shop-container">
        <div id="product-1420" class="post-1420 product type-product status-publish has-post-thumbnail product_cat-bo-ban-ghe-chong-can-chong-gu product_cat-san-pham first instock sale shipping-taxable purchasable product-type-simple">
            <div class="row content-row row-divided row-large">
                <div class="col large-9">
                    <div class="product-main">
                        <div class="row">
                            <div class="large-5 col">
                                <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                    <div class="badge-container is-larger absolute left top z-1">
                                        <div class="callout badge badge-square">
                                            <div class="badge-inner secondary on-sale">
                                                <span class="onsale">-{{$details_product->percent_discount}}%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image-tools absolute top show-on-hover right z-3"></div>
                                    <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half"
                                            data-flickity-options='{
                                            "cellAlign": "center",
                                            "wrapAround": true,
                                            "autoPlay": false,
                                            "prevNextButtons":true,
                                            "adaptiveHeight": true,
                                            "imagesLoaded": true,
                                            "lazyLoad": 1,
                                            "dragThreshold" : 15,
                                            "pageDots": false,
                                            "rightToLeft": false       }'>
                                        <div data-thumb="{{$details_product->thumbnail}}" class="first slide woocommerce-product-gallery__image">
                                            <a href="../../wp-content/uploads/2017/11/b5.jpg">
                                                <img width="600" height="600" src="{{$details_product->thumbnail}}" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="b5" data-caption="" data-src="{{$details_product->thumbnial}}" data-large_image="{{$details_product->thumbnail}}" data-large_image_width="749" data-large_image_height="750" srcset="{{$details_product->thumbnail}}" sizes="(max-width: 600px) 100vw, 600px" />
                                            </a>
                                        </div>  
                                    </figure>
                                </div>
                            </div>
                            <div class="product-info summary entry-summary col col-fit product-summary text-left">
                                <nav class="woocommerce-breadcrumb breadcrumbs">
                                    <a href="{{route('showHome')}}">Trang chủ</a> 
                                    <span class="divider">&#47;</span> 
                                    <a href="">{{Str::slug($details_product->name)}}</a> 
                                </nav>
                                <h1 class="product-title entry-title">{{$details_product->name}}</h1>
                                <div class="is-divider small"></div>
                                <ul class="next-prev-thumbs is-small show-for-medium">         
                                    <li class="prod-dropdown has-dropdown">
                                        <a href="../ghe-chong-gu-k26/index.html"  rel="next" class="button icon is-outline circle">
                                            <i class="icon-angle-left" ></i>              
                                        </a>
                                        <div class="nav-dropdown">
                                            <a title="GHẾ CHỐNG GÙ K26" href="">
                                                <img width="180" height="180" src="{{$details_product->thumbnail}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="{{$details_product->thumbnail}}" sizes="(max-width: 180px) 100vw, 180px" />
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="price-wrapper">
                                    <p class="price product-page-price price-on-sale">
                                        <del>
                                            <span class="woocommerce-Price-amount amount">{{number_format($details_product->old_price)}}
                                                <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                            </span>
                                        </del> 
                                        <ins>
                                            <span class="woocommerce-Price-amount amount">{{number_format($details_product->current_price)}}
                                                <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                            </span>
                                        </ins>
                                    </p>
                                </div>
                                <div class="product-short-description">
                                    {!! $details_product->description !!}
                                </div>
                                <div class="cart" >
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus button is-form">    
                                        <input type="number" id="quantity" name="qty" class="input-text qty text" step="1" min="1" max="9999" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" />
                                        <input type="button" value="+" class="plus button is-form">  
                                    </div>
                                    
                                    {{-- @if ($details_product->status == '1') --}}
                                   
                                    <div class="buttons">
                                        <button id="success" type="submit" class="btn single_add_to_cart_button button alt" >Thêm vào giỏ hàng</button>
                                    </div>
                                    {{-- @else --}}
                                    {{-- @endif --}}
                                    {{-- <button type="submit" name="add-to-cart" value="1420" class="single_add_to_cart_button button alt">Mua hàng ngay</button> --}}
                                </div>
                            <div class="row row-small chat-facebook"  id="row-1171224134">
                                <div class="col medium-6 small-12 large-6"  >
                                    <div class="col-inner"  >
                                        <a rel="noopener noreferrer" href="tel:+84{{$config->hotline}}" target="_blank" class="button primary expand"  style="border-radius:4px;">
                                            <i class="icon-phone" ></i>  
                                            <span>HOTLINE: {{$config->hotline}}</span>
                                        </a>
                                    </div>
                                </div>
                            <div class="col medium-6 small-12 large-6"  ><div class="col-inner"  >
                                <a rel="noopener noreferrer" href="https://www.facebook.com/ommanisoft.com" target="_blank" class="button alert expand"  style="border-radius:4px;">
                                    <i class="icon-facebook" ></i>  <span>CHAT FACEBOOK</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class='clearfix'></div>
                    <div class="social-icons share-icons share-row relative icon-style-outline " >
                        <a href="" data-action="share/whatsapp/share" class="icon button circle is-outline tooltip whatsapp show-for-medium" title="Share on WhatsApp">
                            <i class="icon-phone"></i>
                        </a>
                        <a href="" data-label="Facebook" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow" target="_blank" class="icon button circle is-outline tooltip facebook" title="Share on Facebook">
                            <i class="icon-facebook" ></i>
                        </a>
                        <a href="" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow" target="_blank" class="icon button circle is-outline tooltip twitter" title="Share on Twitter">
                            <i class="icon-twitter" ></i>
                        </a>
                        <a href="" rel="nofollow" class="icon button circle is-outline tooltip email" title="Email to a Friend">
                            <i class="icon-envelop" ></i>
                        </a>
                        <a href="" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow" target="_blank" class="icon button circle is-outline tooltip pinterest" title="Pin on Pinterest">
                            <i class="icon-pinterest" ></i>
                        </a>
                        <a href="" target="_blank" class="icon button circle is-outline tooltip google-plus" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;" rel="nofollow" title="Share on Google+">
                            <i class="icon-google-plus" ></i>
                        </a>
                        <a href="" onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"  rel="nofollow" target="_blank" class="icon button circle is-outline tooltip linkedin" title="Share on LinkedIn">
                            <i class="icon-linkedin" ></i>
                        </a>
                    </div>
                </div><!-- .summary -->
            </div><!-- .row -->
		</div><!-- .product-main -->
		<div class="product-footer">
            <div class="woocommerce-tabs tabbed-content">
                <ul class="product-tabs nav small-nav-collapse tabs nav nav-uppercase nav-line nav-left">
                        <li class="description_tab  active">
                            <a href="#tab-description">Mô tả chi tiết</a>
                        </li>
                        <li class="ux_global_tab_tab  ">
                            <a href="#tab-ux_global_tab">Dịch Vụ  - Liên Hệ</a>
                        </li>
					</ul>
                    <div class="tab-panels">
                        <div class="panel entry-content active" id="tab-description">
                            {!! $details_product->description !!}
                        </div>
                        <div class="panel entry-content " id="tab-ux_global_tab">
                            Nhập thông tin tại đây			
                        </div>
                    </div><!-- .tab-panels -->
                </div><!-- .tabbed-content -->
                <div class="related related-products-wrapper product-section">
                    <h3 class="product-section-title product-section-title-related pt-half pb-half uppercase">
                        Có thể bạn thích    
                    </h3>
                    <div class="row large-columns-3 medium-columns- small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                        @foreach ($product as $item)
                            <div class="product-small col has-hover post-1424 product type-product status-publish has-post-thumbnail product_cat-ghe-chong-gu product_cat-san-pham  instock shipping-taxable purchasable product-type-simple">
                                @include('frontend.component.product_item')
                            </div><!-- col -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div><!-- col large-9 -->
        <div id="product-sidebar" class="col large-3 hide-for-medium shop-sidebar ">
            <div class="hide-for-off-canvas" style="width:100%">
                <ul class="next-prev-thumbs is-small nav-right text-right">         
                    <li class="prod-dropdown has-dropdown">
                        <a href=""  rel="next" class="button icon is-outline circle">
                            <i class="icon-angle-left" ></i>              
                        </a>
                        <div class="nav-dropdown">
                            <a title="GHẾ CHỐNG GÙ K26" href="">
                                <img width="180" height="180" src="../../wp-content/uploads/2017/11/g2-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="http://banhocthongminh.namdinhweb.com/wp-content/uploads/2017/11/g2-180x180.jpg 180w, http://banhocthongminh.namdinhweb.com/wp-content/uploads/2017/11/g2-150x150.jpg 150w, http://banhocthongminh.namdinhweb.com/wp-content/uploads/2017/11/g2-300x300.jpg 300w, http://banhocthongminh.namdinhweb.com/wp-content/uploads/2017/11/g2.jpg 563w" sizes="(max-width: 180px) 100vw, 180px" />
                            </a>
                        </div>
                    </li>
                    <li class="prod-dropdown has-dropdown">
                        <a href="../ban-ghe-chong-gu-chong-can-kd10/index.html" rel="next" class="button icon is-outline circle">
                            <i class="icon-angle-right" ></i>              
                        </a>
                        <div class="nav-dropdown">
                            <a title="BÀN GHẾ CHỐNG GÙ CHỐNG CẬN KD10" href="../ban-ghe-chong-gu-chong-can-kd10/index.html">
                                <img width="180" height="180" src="../../wp-content/uploads/2017/11/b6-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="http://banhocthongminh.namdinhweb.com/wp-content/uploads/2017/11/b6-180x180.jpg 180w, http://banhocthongminh.namdinhweb.com/wp-content/uploads/2017/11/b6-150x150.jpg 150w, http://banhocthongminh.namdinhweb.com/wp-content/uploads/2017/11/b6-300x300.jpg 300w, http://banhocthongminh.namdinhweb.com/wp-content/uploads/2017/11/b6-600x600.jpg 600w, http://banhocthongminh.namdinhweb.com/wp-content/uploads/2017/11/b6.jpg 700w" sizes="(max-width: 180px) 100vw, 180px" />
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <aside id="custom_html-2" class="widget_text widget widget_custom_html">
                <span class="widget-title shop-sidebar">Sản phẩm đang có tại</span>
                <div class="is-divider small"></div>
                <div class="textwidget custom-html-widget">
                    <div class="dia-diem-mua-hang">
                        <p class="address">Công ty TNHH OMmanisoft</p>
                        <p class="info">+
                        Địa chỉ: {{$config->address}}<br>
                        + Điện thoại :{{$config->hotline}}
                        </p>
                    </div>
                </div>
            </aside>
            <aside id="woocommerce_products-3" class="widget woocommerce widget_products">
                <span class="widget-title shop-sidebar">Sản phẩm mới nhất</span>
                <div class="is-divider small"></div>
                <ul class="product_list_widget">
                    @foreach ($product as $item)
                        <li>
                            <a href="">
                                <img width="180" height="180" src="{{$item->thumbnail}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="{{$item->thumbnail}}" sizes="(max-width: 180px) 100vw, 180px" />		
                                <span class="product-title">{{$item->seo_description}}</span>
                            </a>
                            <span class="woocommerce-Price-amount amount">{{$item->current_price}}
                                <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                            </span>
                        </li>
                        
                    @endforeach
                </ul>
            </aside>		
            <aside id="flatsome_recent_posts-3" class="widget flatsome_recent_posts">		
                <span class="widget-title shop-sidebar">Bài viết mới nhất</span>
                <div class="is-divider small"></div>		
                <ul>	
                    @foreach ($blog as $item)
                        <li class="recent-blog-posts-li">
                            <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                                <div class="flex-col mr-half">
                                    <div class="badge post-date  badge-square">
                                        <div class="badge-inner bg-fill" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2) ), url({{$item->image}}); color:#fff; text-shadow:1px 1px 0px rgba(0,0,0,.5); border:0;">
                                            <span class="post-date-day">{{$item->created_at->format('d')}}</span>
                                            <br>
                                            <span class="post-date-month is-xsmall">{{$item->created_at->format('M')}}</span>
                                        </div>
                                    </div>
                                </div><!-- .flex-col -->
                                <div class="flex-col flex-grow">
                                    <a href="../../tong-quan-san-pham-ban-kd19/index.html" title="Tổng quan sản phẩm bàn KD19">Tổng quan sản phẩm bàn KD19</a>
                                    <span class="post_comments oppercase op-7 block is-xsmall"><a href="../../tong-quan-san-pham-ban-kd19/index.html#respond"></a></span>
                                </div>
                            </div><!-- .flex-row -->
                        </li>
                        
                    @endforeach	
                </ul>		
            </aside>	
        </div><!-- col large-3 -->
    </div><!-- .shop -->
    <div class="order">
        <div>
            <div>
                <input type="hidden" id="thumbnail" class="" name="thumbnail" value="{{$details_product->thumbnail}}">
                <input type="hidden" id="name" class="" name="name" value="{{$details_product->name}}">
                <input type="hidden" id="product_code" class="" name="product_code" value="{{$details_product->product_code}}">
                {{-- <input type="hidden" id="color" class="input-color" name="color" value=""> --}}
                {{-- <input type="hidden" class="input-qty" id="quantity" name="qty" value="1" > --}}
                <input type="hidden" id="current_price" class="" name="current_price" value="{{$details_product->current_price}}">
                <input type="hidden" id="old_price" class="" name="old_price" value="{{$details_product->old_price}}">
                <input type="hidden" id="percent_discount" class="" name="percent_discount" value="{{$details_product->percent_discount}}">
            </div>
            {{-- @if ($product->status == '1')
                <a href="{{route('showFormPayment', [Str::slug($product->name), $product->id])}}" class="add-to-cart buy-now">Mua ngay</a>
            @endif --}}
        </div>
    </div>
</main><!-- #main -->
<script>
    $('#success').click(function(e){
    e.preventDefault();
        
    let _token = $('meta[name="csrf-token"]').attr('content');
    let thumbnail = $("#thumbnail").val();
    let name = $("#name").val();
    let product_code = $("#product_code").val();
    let quantity = $("#quantity").val();
    let current_price = $("#current_price").val();
    let old_price = $("#old_price").val();
    let percent_discount = $("#percent_discount").val();
        $.ajax({
        type:"post",
        url:`{{route('addCart.ajax', $details_product->id)}}`,
        data:{
            _token : _token,
            name : name,
            product_code : product_code,
            thumbnail : thumbnail,
            quantity : quantity,
            current_price : current_price,
            percent_discount : percent_discount,
            old_price : old_price,
        },
        success: function (res) {
            $('.qty').text(res.quantity)
            $('.sucses').text(res.success)
            $('.txt').removeClass('d-none')
            var clear = setTimeout(()=> {
                if($('.txt')) {
                    $('.txt').addClass('d-none')
                }
            },4000)
        },
        error:function(e){
        if(e.responseJSON.message){
          $('.empty_color').text(e.responseJSON.message);
        } else {
          $('.empty_color').text('');
        }   
      }
    })
  });
   var clear = setTimeout(()=> {
        if($('.txt')) {
            $('.txt').addClass('d-none')
        }
    },4000)
    $('.close').click(function() {
        $('.txt').addClass('d-none')
         clearTimeout(clear)
    })
// 


// 
var notifications = document.querySelector(".notifications");
var buttons = document.querySelectorAll(".buttons .btn");

	const toastDetails = {
		timer: 5000,
		success: {
			icon: "fa-circle-check",
			text: "Thêm thành công giỏ hàng"
		}
	}

	const removeToast = (toast) => {
		toast.classList.add("hide")
		if (toast.timeoutId) clearTimeout(toast.timeoutId); // Clearing the timeout for the toast
		setTimeout(() => toast.remove(), 500) // Removing the toast after 500ms
	}

	const createToast = (id) => {
		// Getting the icon and text for the toast based on the id passed
		const { icon, text } = toastDetails[id];
		const toast = document.createElement("li"); // Creating a new 'li' element for the toast
		toast.className = `toast ${id}` // Setting the classes for the toast
		// Setting the inner HTML for the toast
		toast.innerHTML = `<div class="column">
                                <i class="fa-solid ${icon}"></i>
                                <span>${text}</span>
                            </div>
                            <i class="fa-solid fa-xmark" onclick="removeToast(this.parentElement)"></i>`
		notifications.appendChild(toast); // Append the toast to the notification ul
		// Setting a timeout to remove the toast after the specified duration
		toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer)
	}

	// Adding a click event listener to each button to create a toast when clicked
	buttons.forEach(btn => {
		btn.addEventListener("click", () => {
            createToast(btn.id)
        })
	});
</script>
@endsection