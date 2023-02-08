<div class="col large-7 pb-0 ">
    <form action="" method="post" class="woocommerce-cart-form">
        <div class="cart-wrapper sm-touch-scroll">
            <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-name" colspan="3">Sản phẩm</th>
                        <th class="product-price">Giá</th>
                        <th class="product-quantity">Số lượng</th>
                        <th class="product-subtotal">Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product_cart as $item)
                        <tr class="woocommerce-cart-form__cart-item cart_item">
                            <td class="product-remove">
                                <a href="{{route('deleteCart', $item->rowId)}}" class="remove" aria-label="Xóa sản phẩm " data-product_id="1394" data-product_sku="">×</a>          
                            </td>
                            <td class="product-thumbnail">
                                <a href="{{route('showDetails', [$item->id, Str::slug($item->name)])}}">
                                    <img width="180" height="180" src="{{$item->options->thumbnail}}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt=""  sizes="(max-width: 180px) 100vw, 180px">
                                </a>          
                            </td>
                            <td class="product-name" data-title="Sản phẩm">
                                <a href="{{route('showDetails', [$item->id, Str::slug($item->name)])}}">{{$item->name}}</a>          
                            </td>
                            <td class="product-price" data-title="Giá">
                                <span style="color: red;">Liên hệ</span>          
                            </td>
                            <td class="product-quantity" data-title="Số lượng">
                                <div class="quantity buttons_added">
                                    {{$item->qty}}
                                </div>
                            </td>
                            <td class="product-subtotal" data-title="Tổng tiền">
                                <span class="woocommerce-Price-amount amount">{{number_format($item->price * $item->qty)}}
                                    <span class="woocommerce-Price-currencySymbol">₫</span>
                                </span>            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </form>
</div>