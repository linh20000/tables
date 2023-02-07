jQuery(function (e) {
    if ("undefined" == typeof wc_single_product_params) return !1;
    e("body")
        .on("init", ".wc-tabs-wrapper, .woocommerce-tabs", function () {
            e(".wc-tab, .woocommerce-tabs .panel:not(.panel .panel)").hide();
            var t = window.location.hash,
                i = window.location.href,
                o = e(this).find(".wc-tabs, ul.tabs").first();
            t.toLowerCase().indexOf("comment-") >= 0 ||
            "#reviews" === t ||
            "#tab-reviews" === t
                ? o.find("li.reviews_tab a").click()
                : i.indexOf("comment-page-") > 0 || i.indexOf("cpage=") > 0
                ? o.find("li.reviews_tab a").click()
                : "#tab-additional_information" === t
                ? o.find("li.additional_information_tab a").click()
                : o.find("li:first a").click();
        })
        .on("click", ".wc-tabs li a, ul.tabs li a", function (t) {
            t.preventDefault();
            var i = e(this),
                o = i.closest(".wc-tabs-wrapper, .woocommerce-tabs");
            o.find(".wc-tabs, ul.tabs").find("li").removeClass("active"),
                o.find(".wc-tab, .panel:not(.panel .panel)").hide(),
                i.closest("li").addClass("active"),
                o.find(i.attr("href")).show();
        })
        .on("click", "a.woocommerce-review-link", function () {
            return e(".reviews_tab a").click(), !0;
        })
        .on("init", "#rating", function () {
            e("#rating")
                .hide()
                .before(
                    '<p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p>'
                );
        })
        .on("click", "#respond p.stars a", function () {
            var t = e(this),
                i = e(this).closest("#respond").find("#rating"),
                o = e(this).closest(".stars");
            return (
                i.val(t.text()),
                t.siblings("a").removeClass("active"),
                t.addClass("active"),
                o.addClass("selected"),
                !1
            );
        })
        .on("click", "#respond #submit", function () {
            var t = e(this).closest("#respond").find("#rating"),
                i = t.val();
            if (
                t.length > 0 &&
                !i &&
                "yes" === wc_single_product_params.review_rating_required
            )
                return (
                    window.alert(
                        wc_single_product_params.i18n_required_rating_text
                    ),
                    !1
                );
        }),
        e(".wc-tabs-wrapper, .woocommerce-tabs, #rating").trigger("init");
    var t = function (t, i) {
        (this.$target = t),
            (this.$images = e(".woocommerce-product-gallery__image", t)),
            0 !== this.$images.length
                ? (t.data("product_gallery", this),
                  (this.flexslider_enabled =
                      e.isFunction(e.fn.flexslider) &&
                      wc_single_product_params.flexslider_enabled),
                  (this.zoom_enabled =
                      e.isFunction(e.fn.zoom) &&
                      wc_single_product_params.zoom_enabled),
                  (this.photoswipe_enabled =
                      "undefined" != typeof PhotoSwipe &&
                      wc_single_product_params.photoswipe_enabled),
                  i &&
                      ((this.flexslider_enabled =
                          !1 !== i.flexslider_enabled &&
                          this.flexslider_enabled),
                      (this.zoom_enabled =
                          !1 !== i.zoom_enabled && this.zoom_enabled),
                      (this.photoswipe_enabled =
                          !1 !== i.photoswipe_enabled &&
                          this.photoswipe_enabled)),
                  (this.initFlexslider = this.initFlexslider.bind(this)),
                  (this.initZoom = this.initZoom.bind(this)),
                  (this.initPhotoswipe = this.initPhotoswipe.bind(this)),
                  (this.onResetSlidePosition =
                      this.onResetSlidePosition.bind(this)),
                  (this.getGalleryItems = this.getGalleryItems.bind(this)),
                  (this.openPhotoswipe = this.openPhotoswipe.bind(this)),
                  this.flexslider_enabled
                      ? (this.initFlexslider(),
                        t.on(
                            "woocommerce_gallery_reset_slide_position",
                            this.onResetSlidePosition
                        ))
                      : this.$target.css("opacity", 1),
                  this.zoom_enabled &&
                      (this.initZoom(),
                      t.on("woocommerce_gallery_init_zoom", this.initZoom)),
                  this.photoswipe_enabled && this.initPhotoswipe())
                : this.$target.css("opacity", 1);
    };
    (t.prototype.initFlexslider = function () {
        var t = this.$target;
        t.flexslider({
            selector:
                ".woocommerce-product-gallery__wrapper > .woocommerce-product-gallery__image",
            animation: wc_single_product_params.flexslider.animation,
            smoothHeight: wc_single_product_params.flexslider.smoothHeight,
            directionNav: wc_single_product_params.flexslider.directionNav,
            controlNav: wc_single_product_params.flexslider.controlNav,
            slideshow: wc_single_product_params.flexslider.slideshow,
            animationSpeed: wc_single_product_params.flexslider.animationSpeed,
            animationLoop: wc_single_product_params.flexslider.animationLoop,
            start: function () {
                t.css("opacity", 1);
            },
        }),
            e(
                ".woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image:eq(0) .wp-post-image"
            )
                .one("load", function () {
                    var t = e(this);
                    t &&
                        setTimeout(function () {
                            var e = t
                                    .closest(
                                        ".woocommerce-product-gallery__image"
                                    )
                                    .height(),
                                i = t.closest(".flex-viewport");
                            e && i && i.height(e);
                        }, 100);
                })
                .each(function () {
                    this.complete && e(this).load();
                });
    }),
        (t.prototype.initZoom = function () {
            var t = this.$images,
                i = this.$target.width(),
                o = !1;
            if (
                (this.flexslider_enabled || (t = t.first()),
                e(t).each(function (t, a) {
                    if (e(a).find("img").data("large_image_width") > i)
                        return (o = !0), !1;
                }),
                o)
            ) {
                var a = { touch: !1 };
                "ontouchstart" in window && (a.on = "click"),
                    t.trigger("zoom.destroy"),
                    t.zoom(a);
            }
        }),
        (t.prototype.initPhotoswipe = function () {
            this.zoom_enabled &&
                this.$images.length > 0 &&
                (this.$target.prepend(
                    '<a href="#" class="woocommerce-product-gallery__trigger">🔍</a>'
                ),
                this.$target.on(
                    "click",
                    ".woocommerce-product-gallery__trigger",
                    this.openPhotoswipe
                )),
                this.$target.on(
                    "click",
                    ".woocommerce-product-gallery__image a",
                    this.openPhotoswipe
                );
        }),
        (t.prototype.onResetSlidePosition = function () {
            this.$target.flexslider(0);
        }),
        (t.prototype.getGalleryItems = function () {
            var t = this.$images,
                i = [];
            return (
                t.length > 0 &&
                    t.each(function (t, o) {
                        var a = e(o).find("img"),
                            s = {
                                src: a.attr("data-large_image"),
                                w: a.attr("data-large_image_width"),
                                h: a.attr("data-large_image_height"),
                                title: a.attr("data-caption")
                                    ? a.attr("data-caption")
                                    : a.attr("title"),
                            };
                        i.push(s);
                    }),
                i
            );
        }),
        (t.prototype.openPhotoswipe = function (t) {
            t.preventDefault();
            var i,
                o = e(".pswp")[0],
                a = this.getGalleryItems(),
                s = e(t.target);
            i = s.is(".woocommerce-product-gallery__trigger")
                ? this.$target.find(".flex-active-slide")
                : s.closest(".woocommerce-product-gallery__image");
            var r = e.extend(
                { index: e(i).index() },
                wc_single_product_params.photoswipe_options
            );
            new PhotoSwipe(o, PhotoSwipeUI_Default, a, r).init();
        }),
        (e.fn.wc_product_gallery = function (e) {
            return new t(this, e), this;
        }),
        e(".woocommerce-product-gallery").each(function () {
            e(this).wc_product_gallery();
        });
});
