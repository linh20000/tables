<!-- Mobile Sidebar -->
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">
        <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
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
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-46"><a href="{{route('showHome')}}" class="nav-top-link">Trang chủ</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1387"><a href="{{route('introduce')}}" class="nav-top-link">Giới thiệu</a></li>
			<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-1390"><a href="" class="nav-top-link">SẢN PHẨM</a>
				<ul class=children>
					@foreach ($categories as $item)
						<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1504"><a href="{{route('showProduct', [$item->id, Str::slug($item->name)])}}">{{$item->name}}</a></li>
					@endforeach
				</ul>
			</li>
			<li class="label-new menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a href="{{route('showNewTitle')}}" class="nav-top-link">Tin tức</a></li>
			<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-43"><a href="" class="nav-top-link">Liên hệ</a>
				<ul class=children>
					<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1516"><a href="">Dịch vụ</a></li>
				</ul>
			</li>
        </ul>
    </div><!-- inner -->
</div><!-- #mobile-menu -->