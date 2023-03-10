jQuery(function (t) {
    if ("undefined" == typeof wc_cart_params) return !1;
    var e = function (t) {
            return wc_cart_params.wc_ajax_url
                .toString()
                .replace("%%endpoint%%", t);
        },
        o = function (t) {
            return t.is(".processing") || t.parents(".processing").length;
        },
        c = function (t) {
            o(t) ||
                t
                    .addClass("processing")
                    .block({
                        message: null,
                        overlayCSS: { background: "#fff", opacity: 0.6 },
                    });
        },
        i = function (t) {
            t.removeClass("processing").unblock();
        },
        a = function (e, o) {
            var c = t.parseHTML(e),
                i = t(".woocommerce-cart-form", c),
                a = t(".cart_totals", c),
                s = t(
                    ".woocommerce-error, .woocommerce-message, .woocommerce-info",
                    c
                );
            if (0 !== t(".woocommerce-cart-form").length) {
                if (
                    (o ||
                        t(
                            ".woocommerce-error, .woocommerce-message, .woocommerce-info"
                        ).remove(),
                    0 === i.length)
                ) {
                    if (t(".woocommerce-checkout").length)
                        return void (window.location.href =
                            window.location.href);
                    var p = t(".cart-empty", c).closest(".woocommerce");
                    t(".woocommerce-cart-form__contents")
                        .closest(".woocommerce")
                        .replaceWith(p),
                        s.length > 0 &&
                            n(s, t(".cart-empty").closest(".woocommerce"));
                } else
                    t(".woocommerce-checkout").length &&
                        t(document.body).trigger("update_checkout"),
                        t(".woocommerce-cart-form").replaceWith(i),
                        t(".woocommerce-cart-form")
                            .find('input[name="update_cart"]')
                            .prop("disabled", !0),
                        s.length > 0 && n(s),
                        r(a);
                t(document.body).trigger("updated_wc_div");
            } else window.location.href = window.location.href;
        },
        r = function (e) {
            t(".cart_totals").replaceWith(e),
                t(document.body).trigger("updated_cart_totals");
        },
        n = function (e, o) {
            o || (o = t(".woocommerce-cart-form")), o.before(e);
        },
        s = {
            init: function (e) {
                (this.cart = e),
                    (this.toggle_shipping = this.toggle_shipping.bind(this)),
                    (this.shipping_method_selected =
                        this.shipping_method_selected.bind(this)),
                    (this.shipping_calculator_submit =
                        this.shipping_calculator_submit.bind(this)),
                    t(document).on(
                        "click",
                        ".shipping-calculator-button",
                        this.toggle_shipping
                    ),
                    t(document).on(
                        "change",
                        "select.shipping_method, input[name^=shipping_method]",
                        this.shipping_method_selected
                    ),
                    t(document).on(
                        "submit",
                        "form.woocommerce-shipping-calculator",
                        this.shipping_calculator_submit
                    ),
                    t(".shipping-calculator-form").hide();
            },
            toggle_shipping: function () {
                return t(".shipping-calculator-form").slideToggle("slow"), !1;
            },
            shipping_method_selected: function (o) {
                var a = o.currentTarget,
                    n = {};
                t(
                    "select.shipping_method, input[name^=shipping_method][type=radio]:checked, input[name^=shipping_method][type=hidden]"
                ).each(function () {
                    n[t(a).data("index")] = t(a).val();
                }),
                    c(t("div.cart_totals"));
                var s = {
                    security: wc_cart_params.update_shipping_method_nonce,
                    shipping_method: n,
                };
                t.ajax({
                    type: "post",
                    url: e("update_shipping_method"),
                    data: s,
                    dataType: "html",
                    success: function (t) {
                        r(t);
                    },
                    complete: function () {
                        i(t("div.cart_totals")),
                            t(document.body).trigger("updated_shipping_method");
                    },
                });
            },
            shipping_calculator_submit: function (e) {
                e.preventDefault();
                var o = t(e.currentTarget);
                c(t("div.cart_totals")),
                    c(o),
                    t("<input />")
                        .attr("type", "hidden")
                        .attr("name", "calc_shipping")
                        .attr("value", "x")
                        .appendTo(o),
                    t.ajax({
                        type: o.attr("method"),
                        url: o.attr("action"),
                        data: o.serialize(),
                        dataType: "html",
                        success: function (t) {
                            a(t);
                        },
                        complete: function () {
                            i(o), i(t("div.cart_totals"));
                        },
                    });
            },
        },
        p = {
            init: function () {
                (this.update_cart_totals = this.update_cart_totals.bind(this)),
                    (this.input_keypress = this.input_keypress.bind(this)),
                    (this.cart_submit = this.cart_submit.bind(this)),
                    (this.submit_click = this.submit_click.bind(this)),
                    (this.apply_coupon = this.apply_coupon.bind(this)),
                    (this.remove_coupon_clicked =
                        this.remove_coupon_clicked.bind(this)),
                    (this.quantity_update = this.quantity_update.bind(this)),
                    (this.item_remove_clicked =
                        this.item_remove_clicked.bind(this)),
                    (this.update_cart = this.update_cart.bind(this)),
                    t(document).on("wc_update_cart", this.update_cart),
                    t(document).on(
                        "click",
                        ".woocommerce-cart-form input[type=submit]",
                        this.submit_click
                    ),
                    t(document).on(
                        "keypress",
                        ".woocommerce-cart-form input[type=number]",
                        this.input_keypress
                    ),
                    t(document).on(
                        "submit",
                        ".woocommerce-cart-form",
                        this.cart_submit
                    ),
                    t(document).on(
                        "click",
                        "a.woocommerce-remove-coupon",
                        this.remove_coupon_clicked
                    ),
                    t(document).on(
                        "click",
                        ".woocommerce-cart-form .product-remove > a",
                        this.item_remove_clicked
                    ),
                    t(document).on(
                        "change input",
                        ".woocommerce-cart-form .cart_item :input",
                        this.input_changed
                    ),
                    t('.woocommerce-cart-form input[name="update_cart"]').prop(
                        "disabled",
                        !0
                    );
            },
            input_changed: function () {
                t('.woocommerce-cart-form input[name="update_cart"]').prop(
                    "disabled",
                    !1
                );
            },
            update_cart: function (e) {
                var o = t(".woocommerce-cart-form");
                c(o),
                    c(t("div.cart_totals")),
                    t.ajax({
                        type: o.attr("method"),
                        url: o.attr("action"),
                        data: o.serialize(),
                        dataType: "html",
                        success: function (t) {
                            a(t, e);
                        },
                        complete: function () {
                            i(o), i(t("div.cart_totals"));
                        },
                    });
            },
            update_cart_totals: function () {
                c(t("div.cart_totals")),
                    t.ajax({
                        url: e("get_cart_totals"),
                        dataType: "html",
                        success: function (t) {
                            r(t);
                        },
                        complete: function () {
                            i(t("div.cart_totals"));
                        },
                    });
            },
            input_keypress: function (t) {
                13 === t.keyCode && (t.preventDefault(), this.cart_submit(t));
            },
            cart_submit: function (e) {
                var c = t(document.activeElement),
                    i = t("input[type=submit][clicked=true]"),
                    a = t(e.currentTarget);
                if (
                    (a.is("form") || (a = t(e.currentTarget).parents("form")),
                    0 !== a.find(".woocommerce-cart-form__contents").length)
                )
                    return (
                        !o(a) &&
                        void (i.is('input[name="update_cart"]') ||
                        c.is("input.qty")
                            ? (e.preventDefault(), this.quantity_update(a))
                            : (i.is('input[name="apply_coupon"]') ||
                                  c.is("#coupon_code")) &&
                              (e.preventDefault(), this.apply_coupon(a)))
                    );
            },
            submit_click: function (e) {
                t("input[type=submit]", t(e.target).parents("form")).removeAttr(
                    "clicked"
                ),
                    t(e.target).attr("clicked", "true");
            },
            apply_coupon: function (o) {
                c(o);
                var a = this,
                    r = t("#coupon_code"),
                    s = r.val(),
                    p = {
                        security: wc_cart_params.apply_coupon_nonce,
                        coupon_code: s,
                    };
                t.ajax({
                    type: "POST",
                    url: e("apply_coupon"),
                    data: p,
                    dataType: "html",
                    success: function (e) {
                        t(
                            ".woocommerce-error, .woocommerce-message, .woocommerce-info"
                        ).remove(),
                            n(e),
                            t(document.body).trigger("applied_coupon", [s]);
                    },
                    complete: function () {
                        i(o), r.val(""), a.update_cart(!0);
                    },
                });
            },
            remove_coupon_clicked: function (o) {
                o.preventDefault();
                var a = this,
                    r = t(o.currentTarget).closest(".cart_totals"),
                    s = t(o.currentTarget).attr("data-coupon");
                c(r);
                var p = {
                    security: wc_cart_params.remove_coupon_nonce,
                    coupon: s,
                };
                t.ajax({
                    type: "POST",
                    url: e("remove_coupon"),
                    data: p,
                    dataType: "html",
                    success: function (e) {
                        t(
                            ".woocommerce-error, .woocommerce-message, .woocommerce-info"
                        ).remove(),
                            n(e),
                            t(document.body).trigger("removed_coupon", [s]),
                            i(r);
                    },
                    complete: function () {
                        a.update_cart(!0);
                    },
                });
            },
            quantity_update: function (e) {
                c(e),
                    c(t("div.cart_totals")),
                    t("<input />")
                        .attr("type", "hidden")
                        .attr("name", "update_cart")
                        .attr("value", "Update Cart")
                        .appendTo(e),
                    t.ajax({
                        type: e.attr("method"),
                        url: e.attr("action"),
                        data: e.serialize(),
                        dataType: "html",
                        success: function (t) {
                            a(t);
                        },
                        complete: function () {
                            i(e), i(t("div.cart_totals"));
                        },
                    });
            },
            item_remove_clicked: function (e) {
                e.preventDefault();
                var o = t(e.currentTarget),
                    r = o.parents("form");
                c(r),
                    c(t("div.cart_totals")),
                    t.ajax({
                        type: "GET",
                        url: o.attr("href"),
                        dataType: "html",
                        success: function (t) {
                            a(t);
                        },
                        complete: function () {
                            i(r), i(t("div.cart_totals"));
                        },
                    });
            },
        };
    s.init(p), p.init();
});
