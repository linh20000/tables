 <section class="section section-san-pham" id="section_325142426">
    <div class="bg section-bg fill bg-fill  bg-loaded" ></div><!-- .section-bg -->
    <div class="section-content relative">
        <div class="row row-small align-center sp-ban-chay"  id="row-1673049309">
            <div class="col small-12 large-12"  data-animate="fadeInLeft">
                <div class="col-inner text-center"  >
                    <h3 class="tieu-de"><b></b>SẢN PHẨM MỚI NHẤT<b></b></h3>
                    <div class="row large-columns-4 medium-columns- small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"  data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                        @foreach ($new_product as $item)
                            <div class="product-small col has-hover post-1428 product type-product status-publish has-post-thumbnail  last instock sale shipping-taxable purchasable product-type-simple">
                                @include('frontend.component.product_item')
                            </div><!-- col -->
                        @endforeach
                    </div>
                    <div class="gap-element" style="display:block; height:auto; padding-top:20px" class="clearfix"></div>
                    <div class="row large-columns-4 medium-columns- small-columns-2 row-normal"></div>
                    <a href="" target="_self" class="button primary"  style="border-radius:4px;">
                        <span>Xem thêm</span>
                    </a>
                </div>
            </div>
            <div class="col small-12 large-12"  data-animate="fadeInLeft">
                <div class="col-inner text-center"  >
                    <div class="gap-element" style="display:block; height:auto; padding-top:20px" class="clearfix"></div>
                    <div class="gap-element" style="display:block; height:auto; padding-top:20px" class="clearfix"></div>
                    <h3 class="tieu-de"><b></b> BÀN GHẾ THÔNG MINH<b></b></h3>
                    <div class="row large-columns-4 medium-columns- small-columns-2 row-small">
                        @foreach ($demo_product as $item)
                            <div class="product-small col has-hover post-1411 product type-product status-publish has-post-thumbnail  last instock shipping-taxable purchasable product-type-simple">
                                @include('frontend.component.product_item')
                            </div><!-- col -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .section-content -->
</section>
