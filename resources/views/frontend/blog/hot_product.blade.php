<aside id="woocommerce_products-2" class="widget woocommerce widget_products" >
    <span class="widget-title" ><span>Sản phẩm bán chạy</span></span >
    <div class="is-divider small"></div>
    <ul class="product_list_widget">
        @foreach ($product_blog as $item)
        <li>
            <a href="{{route('showDetails', [$item->id, Str::slug($item->name)])}}">
                <img  width="180" height="180" src="{{$item->thumbnail}}"class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="{{$item->thumbnail}}" sizes="(max-width: 180px) 100vw, 180px" />
                <span class="product-title" >{{$item->name}}</span >
            </a>
            <del>
                <span class="woocommerce-Price-amount amount" >{{number_format($item->old_price)}}
                <span class="woocommerce-Price-currencySymbol" >&#8363;</span ></span>
            </del>
            <ins>
                <span class="woocommerce-Price-amount amount">
                    {{number_format($item->current_price)}}
                    <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                </span>
            </ins>
        </li>
        @endforeach
    </ul>
</aside>