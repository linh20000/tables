jQuery(function (e) {
    function t() {
        o && sessionStorage.setItem("wc_cart_created", new Date().getTime());
    }
    function n(e) {
        o && (localStorage.setItem(a, e), sessionStorage.setItem(a, e));
    }
    function r() {
        e.ajax(s);
    }
    if ("undefined" == typeof wc_cart_fragments_params) return !1;
    var o,
        a = wc_cart_fragments_params.ajax_url.toString() + "-wc_cart_hash";
    try {
        (o = "sessionStorage" in window && null !== window.sessionStorage),
            window.sessionStorage.setItem("wc", "test"),
            window.sessionStorage.removeItem("wc"),
            window.localStorage.setItem("wc", "test"),
            window.localStorage.removeItem("wc");
    } catch (w) {
        o = !1;
    }
    var s = {
        url: wc_cart_fragments_params.wc_ajax_url
            .toString()
            .replace("%%endpoint%%", "get_refreshed_fragments"),
        type: "POST",
        success: function (r) {
            r &&
                r.fragments &&
                (e.each(r.fragments, function (t, n) {
                    e(t).replaceWith(n);
                }),
                o &&
                    (sessionStorage.setItem(
                        wc_cart_fragments_params.fragment_name,
                        JSON.stringify(r.fragments)
                    ),
                    n(r.cart_hash),
                    r.cart_hash && t()),
                e(document.body).trigger("wc_fragments_refreshed"));
        },
    };
    if (o) {
        var i = null;
        e(document.body).on("wc_fragment_refresh updated_wc_div", function () {
            r();
        }),
            e(document.body).on("added_to_cart", function (e, r, o) {
                var s = sessionStorage.getItem(a);
                (null !== s && s !== undefined && "" !== s) || t(),
                    sessionStorage.setItem(
                        wc_cart_fragments_params.fragment_name,
                        JSON.stringify(r)
                    ),
                    n(o);
            }),
            e(document.body).on("wc_fragments_refreshed", function () {
                clearTimeout(i), (i = setTimeout(r, 864e5));
            }),
            e(window).on("storage onstorage", function (e) {
                a === e.originalEvent.key &&
                    localStorage.getItem(a) !== sessionStorage.getItem(a) &&
                    r();
            }),
            e(window).on("pageshow", function (t) {
                t.originalEvent.persisted &&
                    (e(".widget_shopping_cart_content").empty(),
                    e(document.body).trigger("wc_fragment_refresh"));
            });
        try {
            var c = e.parseJSON(
                    sessionStorage.getItem(
                        wc_cart_fragments_params.fragment_name
                    )
                ),
                _ = sessionStorage.getItem(a),
                g = Cookies.get("woocommerce_cart_hash"),
                m = sessionStorage.getItem("wc_cart_created");
            if (
                ((null !== _ && _ !== undefined && "" !== _) || (_ = ""),
                (null !== g && g !== undefined && "" !== g) || (g = ""),
                _ && (null === m || m === undefined || "" === m))
            )
                throw "No cart_created";
            if (m) {
                var d = 1 * m + 864e5,
                    f = new Date().getTime();
                if (d < f) throw "Fragment expired";
                i = setTimeout(r, d - f);
            }
            if (!c || !c["div.widget_shopping_cart_content"] || _ !== g)
                throw "No fragment";
            e.each(c, function (t, n) {
                e(t).replaceWith(n);
            }),
                e(document.body).trigger("wc_fragments_loaded");
        } catch (w) {
            r();
        }
    } else r();
    Cookies.get("woocommerce_items_in_cart") > 0
        ? e(".hide_cart_widget_if_empty")
              .closest(".widget_shopping_cart")
              .show()
        : e(".hide_cart_widget_if_empty")
              .closest(".widget_shopping_cart")
              .hide(),
        e(document.body).on("adding_to_cart", function () {
            e(".hide_cart_widget_if_empty")
                .closest(".widget_shopping_cart")
                .show();
        });
});
