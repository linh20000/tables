@extends('master')
@section('content')
<main id="main" class="">
    <div class="page-wrapper page-left-sidebar">
        <div class="row">
           <div id="content" class="large-9 right col" role="main">
                <div class="page-inner">
                    <div class="woocommerce">
                        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="" enctype="multipart/form-data">
                            <div class="row pt-0 ">
                                <div class="large-7 col  ">
                                    <div id="customer_details">
                                        <div class="clear">
                                            <div class="woocommerce-billing-fields">
                                                <h3>Chi tiết đơn hàng</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                    <p class="form-row form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field" id="billing_first_name_field" data-priority="10">
                                                        <label for="billing_first_name" class="">Họ và tên  <abbr class="required" title="bắc buộc">*</abbr></label>
                                                        <input type="text" class="input-text " name="name" id="name" placeholder="Họ và tên" value="" autocomplete="given-name" autofocus="autofocus">
                                                    </p>
                                                    <p class="form-row form-row-wide" id="billing_company_field" >
                                                        <label for="billing_company" class="">Số điện thoại <abbr class="required" title="bắc buộc">*</abbr></label>
                                                        <input type="text" class="input-text " name="phoneNumber" id="phoneNumber" placeholder="Nhập số điện thoại" value="" pattern="^[0-9-+()._ ]*$"  autocomplete="tel" >
                                                    </p>
                                                    <p class="form-row form-row-wide address-field " id="billing_address_1_field">
                                                        <label for="billing_address_1" class="">Tỉnh / Thành phố <abbr class="required" title="bắc buộc">*</abbr></label>
                                                        <input type="text" class="input-text " name="province" id="province" placeholder="Nhập tỉnh hoặc thành phố" value="" >
                                                    </p>
                                                    <p class="form-row form-row-wide address-field" id="billing_address_2_field">
                                                        <label for="billing_address_1" class="">Quận / Huyện <abbr class="required" title="bắc buộc">*</abbr></label>
                                                        <input type="text" class="input-text " name="district" id="district" placeholder="Nhập quận hoặc huyện" value="">
                                                    </p>
                                                    <p class="form-row form-row-wide validate-required " id="billing_phone_field">
                                                        <label for="billing_phone" class="">Phường / Xã <abbr class="required" title="bắc buộc">*</abbr></label>
                                                        <input type="tel" class="input-text " name="ward" id="ward" placeholder=" Vui lòng nhập phường hoặc xã" value="">
                                                    </p>
                                                    <p class="form-row form-row-wide validate-required" id="billing_email_field">
                                                        <label for="billing_email" class="">Địa chỉ <abbr class="required" title="bắc buộc">*</abbr></label>
                                                        <input type="text" class="input-text " name="address" id="address" placeholder="Vui lòng nhập địa chỉ" value="">
                                                    </p>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="clear">
                                            <div class="woocommerce-additional-fields">
                                                <h3>Thông tin thêm</h3>
                                                <div class="woocommerce-additional-fields__field-wrapper">
                                                    <p class="form-row notes" id="order_comments_field" data-priority="">
                                                        <label for="order_comments" class="">Ghi chú về đơn hàng</label>
                                                        <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: gọi điện trước khi giao hàng" rows="2" cols="5"></textarea>
                                                    </p>					
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- large-7 -->
                                <div class="large-5 col">
                                    <div class="col-inner has-border">
                                        <div class="checkout-sidebar sm-touch-scroll">
                                            <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                            <div id="order_review" class="woocommerce-checkout-review-order">
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Sản phẩm</th>
                                                            <th class="product-total">Tổng tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($product_cart as $item)
                                                            <tr class="cart_item">
                                                                <td class="product-name">
                                                                    {{$item->name}}						 
                                                                    <strong class="product-quantity">× {{$item->qty}}</strong>													
                                                                </td>
                                                                <td class="product-total">
                                                                    <span class="woocommerce-Price-amount amount">{{number_format($item->price * $item->qty)}}<span class="woocommerce-Price-currencySymbol">₫</span></span>						
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="cart-subtotal">
                                                            <th>Tạm tính</th>
                                                            <td>
                                                                <span class="woocommerce-Price-amount amount">{{Cart::subtotal()}}
                                                                    <span class="woocommerce-Price-currencySymbol">₫
                                                                    </span>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Tổng tiền</th>
                                                            <td>
                                                                <strong>
                                                                    <span class="woocommerce-Price-amount amount">{{Cart::subtotal()}}
                                                                        <span class="woocommerce-Price-currencySymbol">₫</span>
                                                                    </span>
                                                                </strong> 
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div id="payment" class="woocommerce-checkout-payment">
                                                    <ul class="wc_payment_methods payment_methods methods">
                                                        <li class="wc_payment_method payment_method_bacs">
                                                            <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="">
                                                            <label for="payment_method_bacs">
                                                                Chuyển khoản ngân hàng trực tiếp 	
                                                            </label>
                                                            <div class="payment_box payment_method_bacs">
                                                                <p>Đơn hàng sẽ bị tạm giữ cho tới khi bạn chuyển tiền vào tài khoản của chúng tôi!</p>
                                                            </div>
                                                        </li>
                                                        <li class="wc_payment_method payment_method_cod">
                                                            <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="">
                                                            <label for="payment_method_cod">
                                                                Thanh toán khi giao hàng 	
                                                            </label>
                                                            <div class="payment_box payment_method_cod" style="display:none;">
                                                                <p>Thanh toán bằng tiền mặt khi giao hàng.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="form-row place-order">
                                                        <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Đặt hàng" data-value="Đặt hàng">
                                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="2b24bebb6b">
                                                        <input type="hidden" name="_wp_http_referer" value="">	
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="html-checkout-sidebar pt-half"></div>  			
                                        </div>
                                    </div>
                                </div><!-- large-5 -->
                            </div><!-- row -->
                        </form>
                    </div>
                </div><!-- .page-inner -->
            </div>
            {{-- start sidebar --}}
            <div class="large-3 col col-first col-divided">
                <div id="secondary" class="widget-area " role="complementary">
                    @include('frontend.blog.hot_product')
                    @include('frontend.blog.blog_new')
                </div><!-- #secondary -->
            </div>
            {{--end sidebar --}}
        </div><!-- end row -->
    </div><!-- end page-right-sidebar container -->
</main>
<!-- #main -->
@endsection

