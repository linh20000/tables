<div class="col-inner">
    <div class="badge-container absolute left top z-1">
        <div class="callout badge badge-square">
            <div class="badge-inner secondary on-sale">
                <span class="onsale">-{{$item->percent_discount}}%</span>
            </div>
        </div>
    </div>
    
    <div class="product-small box ">
        <div class="box-image">
            <div class="image-none">
                <a href="{{route('showDetails', [$item->id, Str::slug($item->name)])}}">
                    <img width="300" height="300" src="{{$item->thumbnail}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" sizes="(max-width: 300px) 100vw, 300px" />				
                </a>
            </div>
            <div class="image-tools is-small top right show-on-hover"></div>
            <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
            <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
        </div><!-- box-image -->
        <div class="box-text box-text-products text-center grid-style-2">
            <div class="title-wrapper">
                <p class="name product-title">
                    <a href="{{route('showDetails', [$item->id, Str::slug($item->name)])}}">{{$item->name}}</a>
                </p>
            </div>
            <div class="price-wrapper">
                <span class="price">
                    <del>
                        <span class="woocommerce-Price-amount amount">{{number_format($item->old_price)}}
                            <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                        </span>
                    </del>
                    <ins>
                        <span class="woocommerce-Price-amount amount">{{number_format($item->current_price)}}
                            <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                        </span>
                    </ins>
                </span>
            </div>		
        </div><!-- box-text -->
    </div><!-- box -->
</div><!-- .col-inner -->