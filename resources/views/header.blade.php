<header id="header" class="header ">
		<div class="header-wrapper">
			<div id="top-bar" class="header-top hide-for-sticky nav-dark">
				<div class="flex-row container">
					<div class="flex-col hide-for-medium flex-left">
						<ul class="nav nav-left medium-nav-center nav-small  nav-divided">
							<li class="header-contact-wrapper">
								<ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">
									<li class="">
										<a href="mailto:topweb.com.vn@gmail.com" class="tooltip" title="topweb.com.vn@gmail.com">
											<i class="icon-envelop" style="font-size:15px;"></i>			       
											<span>Ommanisoft@gmail.com</span>
										</a>
									</li>
									<li class="">
										<a href="tel:0986.989.626" class="tooltip" title="0986.989.626">
											<i class="icon-phone" style="font-size:15px;"></i>
											<span>0987654321</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="html custom html_topbar_left">
								<span class="fa fa-home"></span>
								<span style="font-size:13px">Công ty TNHH Ommanisoft Việt Nam </span>
							</li>          
						</ul>
					</div><!-- flex-col left -->
				<div class="flex-col hide-for-medium flex-center">
					<ul class="nav nav-center nav-small  nav-divided"></ul>
				</div><!-- center -->
				<div class="flex-col show-for-medium flex-grow">
					<ul class="nav nav-center nav-small mobile-nav  nav-divided">
						<li class="html custom html_topbar_left">
							<span class="fa fa-home"></span>
							<span style="font-size:13px">Công ty TNHH Ommanisoft Việt Nam </span>
						</li>          
					</ul>
				</div>
			</div><!-- .flex-row -->
		</div><!-- #header-top -->
		<div id="masthead" class="header-main hide-for-sticky nav-dark">
			<div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
				<div id="logo" class="flex-col logo">
					<a href="{{route('showHome')}}" title="" >
						<img width="283" height="70" src="wp-content/uploads/2017/12/chu-ky-so-logo.png" class="header_logo header-logo" alt="Mẫu website bàn học thông minh dẹp chuẩn seo"/>
						<img  width="283" height="70" src="wp-content/uploads/2017/12/chu-ky-so-logo.png" class="header-logo-dark" alt="Mẫu website bàn học thông minh dẹp chuẩn seo"/>
					</a>
				</div>
				<div class="flex-col show-for-medium flex-left">
					<ul class="mobile-nav nav nav-left ">
						<li class="nav-icon has-icon">
							<div class="header-button">		
								<a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="dark" class="icon primary button round is-small" aria-controls="main-menu" aria-expanded="false">
									<i class="icon-menu" ></i>
								</a>
							</div> 
						</li>            
					</ul>
				</div>
				<div class="flex-col hide-for-medium flex-left flex-grow">
					<ul class="header-nav header-nav-main nav nav-left  nav-size-large nav-uppercase" >
						<li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
							<a href="#" class="is-small"><i class="icon-search" ></i></a>
							<ul class="nav-dropdown nav-dropdown-default">
								<li class="header-search-form search-form html relative has-icon">
									<div class="header-search-form-wrapper">
										<div class="searchform-wrapper ux-search-box relative form-flat is-normal">
											<form method="get" class="searchform" action="" role="search">
												<div class="flex-row relative">
													<div class="flex-col flex-grow">
														<input type="search" class="search-field mb-0" name="s" value="" placeholder="Bạn cần tìm gì?..." />
														<input type="hidden" name="post_type" value="product" />
													</div><!-- .flex-col -->
													<div class="flex-col">
														<button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
															<i class="icon-search" ></i>				
														</button>
													</div><!-- .flex-col -->
												</div><!-- .flex-row -->
												<div class="live-search-results text-left z-top"></div>
											</form>
										</div>	
									</div>
								</li>	
							</ul><!-- .nav-dropdown -->
						</li>
						<li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item active  menu-item-46"><a href="{{route('showHome')}}" class="nav-top-link">Trang chủ</a></li>
						<li id="menu-item-1387" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-1387"><a href="{{route('introduce')}}" class="nav-top-link">Giới thiệu</a></li>
						<li id="menu-item-1390" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  menu-item-1390 has-dropdown"><a href="" class="nav-top-link">SẢN PHẨM<i class="icon-angle-down" ></i></a>
							<ul class='nav-dropdown nav-dropdown-default'>
								@foreach ($categories as $item)
									<li id="menu-item-1504" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-1504"><a href="{{route('showProduct',[$item->id, Str::slug($item->name)])}}">{{$item->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li id="menu-item-44" class="label-new menu-item menu-item-type-post_type menu-item-object-page  menu-item-44"><a href="{{route('showNewTitle')}}" class="nav-top-link">Tin tức</a></li>
						<li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children  menu-item-43 has-dropdown"><a href="" class="nav-top-link">Liên hệ<i class="icon-angle-down" ></i></a>
							<ul class='nav-dropdown nav-dropdown-default'>
								<li id="menu-item-1516" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-1516"><a href="">Dịch vụ</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="flex-col hide-for-medium flex-right">
					<ul class="header-nav header-nav-main nav nav-right  nav-size-large nav-uppercase">
							<li class="cart-item has-icon has-dropdown">
							<div class="header-button">
								<a href="{{route('CartList')}}" title="Giỏ hàng" class="header-cart-link icon button circle is-outline is-small">
									<span class="header-cart-title">
										<span class="cart-price">
											<span class="woocommerce-Price-amount amount">0
												<span class="woocommerce-Price-currencySymbol">&#8363;</span>
											</span>
										</span>
										</span>
									<i class="icon-shopping-bag" data-icon-label="0"></i>
								</a>
							</div>

							{{-- NO CART --}}
							<ul class="nav-dropdown nav-dropdown-default">
								<li class="html widget_shopping_cart">
									<div class="widget_shopping_cart_content">
										<p class="woocommerce-mini-cart__empty-message">Không có sản phẩm trong giỏ</p>
									</div>
								</li>
							</ul>

							{{-- CART title  --}}
							{{-- <ul class="nav-dropdown nav-dropdown-default">
								<li class="html widget_shopping_cart">
									<div class="widget_shopping_cart_content">
										<ul class="woocommerce-mini-cart cart_list product_list_widget ">
											<li class="woocommerce-mini-cart-item mini_cart_item">
												<a href="http://banhocthongminh.namdinhweb.com/gio-hang/?remove_item=f016e59c7ad8b1d72903bb1aa5720d53&amp;_wpnonce=64d4613fb0" class="remove" aria-label="Xóa sản phẩm nà" data-product_id="1394" data-product_sku="">×</a>													
												<a href="http://banhocthongminh.namdinhweb.com/cua-hang/ban-ghe-chong-can-chong-gu-kd19-k15/">
													<img width="180" height="180" src="//banhocthongminh.namdinhweb.com/wp-content/uploads/2017/11/b10-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" sizes="(max-width: 180px) 100vw, 180px">
													BÀN GHẾ CHỐNG CẬN CHỐNG GÙ KD19 – K15&nbsp;							
												</a>
												<span class="quantity">1 × 
													<span class="woocommerce-Price-amount amount">13.300.000
														<span class="woocommerce-Price-currencySymbol">₫</span>
													</span>
												</span>					
											</li>
										</ul>
										<p class="woocommerce-mini-cart__total total">
											<strong>Tạm tính:</strong> 
											<span class="woocommerce-Price-amount amount">
												13.300.000
												<span class="woocommerce-Price-currencySymbol">₫</span>
											</span>
										</p>
										<p class="woocommerce-mini-cart__buttons buttons">
											<a href="" class="button wc-forward">Xem giỏ hàng</a>
											<a href="http://banhocthongminh.namdinhweb.com/thanh-toan/" class="button checkout wc-forward">Đặt hàng</a>
										</p>
									</div>
								</li>
							</ul> --}}
						</li>
						<li class="html header-button-1">
							<div class="header-button">
								<a href="tel:0123456789" target="_self" class="button primary"  style="border-radius:99px;">
									<span>Hotline : 0986.989.626</span>
								</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="flex-col show-for-medium flex-right">
					<ul class="mobile-nav nav nav-right ">
						<li class="cart-item has-icon">
							<div class="header-button">
								<a href="{{route('CartList')}}" class="header-cart-link off-canvas-toggle nav-top-link icon button circle is-outline is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">
									<i class="icon-shopping-bag" data-icon-label="0"></i>
								</a>
							</div>
							<div id="cart-popup" class="mfp-hide widget_shopping_cart">
								<div class="cart-popup-inner inner-padding">
									<div class="cart-popup-title text-center">
										<h4 class="uppercase">Giỏ hàng</h4>
										<div class="is-divider"></div>
									</div>
									{{-- <div class="widget_shopping_cart_content">
										<p class="woocommerce-mini-cart__empty-message">Không có sản phẩm trong giỏ</p>
									</div> --}}

									<div class="widget_shopping_cart_content">
										<ul class="woocommerce-mini-cart cart_list product_list_widget ">
											<li class="woocommerce-mini-cart-item mini_cart_item">
												<a href="" class="remove" aria-label="Xóa sản phẩm" data-product_id="1394" data-product_sku="">×</a>													
												<a href="#">
													<img width="180" height="180" src="//banhocthongminh.namdinhweb.com/wp-content/uploads/2017/11/b10-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" sizes="(max-width: 180px) 100vw, 180px">
													BÀN GHẾ CHỐNG CẬN CHỐNG GÙ KD19 – K15&nbsp;							
												</a>
												<span class="quantity">1 × 
													<span class="woocommerce-Price-amount amount">13.300.000
														<span class="woocommerce-Price-currencySymbol">₫</span>
													</span>
												</span>					
											</li>
										</ul>
										<p class="woocommerce-mini-cart__total total">
											<strong>Tạm tính:</strong> 
											<span class="woocommerce-Price-amount amount">13.300.000
												<span class="woocommerce-Price-currencySymbol">₫</span>
											</span>
										</p>
										<p class="woocommerce-mini-cart__buttons buttons">
											<a href="" class="button wc-forward">Xem giỏ hàng</a>
											<a href="" class="button checkout wc-forward">Đặt hàng</a>
										</p>
									</div>
									<div class="cart-sidebar-content relative"></div>  
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div><!-- .header-inner -->
            <!-- Header divider -->
			<div class="container">
				<div class="top-divider full-width"></div>
			</div>
		</div><!-- .header-main -->
		<div class="header-bg-container fill">
			<div class="header-bg-image fill"></div>
			<div class="header-bg-color fill"></div>
		</div><!-- .header-bg-container -->   
	</div><!-- header-wrapper-->
</header>
@include('sidebar')