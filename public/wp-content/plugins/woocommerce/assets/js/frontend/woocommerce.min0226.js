jQuery(function (o) {
    o(".woocommerce-ordering").on("change", "select.orderby", function () {
        o(this).closest("form").submit();
    }),
        o("input.qty:not(.product-quantity input.qty)").each(function () {
            var e = parseFloat(o(this).attr("min"));
            e >= 0 && parseFloat(o(this).val()) < e && o(this).val(e);
        }),
        jQuery(".woocommerce-store-notice__dismiss-link").click(function () {
            Cookies.set("store_notice", "hidden", { path: "/" }),
                jQuery(".woocommerce-store-notice").hide();
        }),
        "hidden" === Cookies.get("store_notice")
            ? jQuery(".woocommerce-store-notice").hide()
            : jQuery(".woocommerce-store-notice").show();
});
