jQuery(function (e) {
    function a(e, a) {
        a
            ? (e
                  .find("label")
                  .append(
                      ' <abbr class="required" title="' +
                          wc_address_i18n_params.i18n_required_text +
                          '">*</abbr>'
                  ),
              e.addClass("validate-required"))
            : (e.find("label abbr").remove(),
              e.removeClass("validate-required"));
    }
    if ("undefined" == typeof wc_address_i18n_params) return !1;
    var i = wc_address_i18n_params.locale.replace(/&quot;/g, '"'),
        t = e.parseJSON(i);
    e(document.body).bind("country_to_state_changing", function (i, d, r) {
        var l,
            o = r;
        l = "undefined" != typeof t[d] ? t[d] : t["default"];
        var n = o.find("#billing_postcode_field, #shipping_postcode_field"),
            f = o.find("#billing_city_field, #shipping_city_field"),
            s = o.find("#billing_state_field, #shipping_state_field");
        n.attr("data-o_class") ||
            (n.attr("data-o_class", n.attr("class")),
            f.attr("data-o_class", f.attr("class")),
            s.attr("data-o_class", s.attr("class")));
        var p = e.parseJSON(wc_address_i18n_params.locale_fields);
        e.each(p, function (e, i) {
            var d = o.find(i);
            l[e]
                ? (l[e].label && d.find("label").html(l[e].label),
                  l[e].placeholder &&
                      d.find("input").attr("placeholder", l[e].placeholder),
                  a(d, !1),
                  "undefined" == typeof l[e].required &&
                  !0 === t["default"][e].required
                      ? a(d, !0)
                      : !0 === l[e].required && a(d, !0),
                  "state" !== e &&
                      (!0 === l[e].hidden
                          ? d.hide().find("input").val("")
                          : d.show()),
                  l[e].priority
                      ? d.data("priority", l[e].priority)
                      : t["default"][e].priority &&
                        d.data("priority", t["default"][e].priority))
                : t["default"][e] &&
                  ("state" !== e &&
                      ("undefined" == typeof t["default"][e].hidden ||
                      !1 === t["default"][e].hidden
                          ? d.show()
                          : !0 === t["default"][e].hidden &&
                            d.hide().find("input").val("")),
                  ("postcode" !== e && "city" !== e && "state" !== e) ||
                      (t["default"][e].label &&
                          d.find("label").html(t["default"][e].label),
                      t["default"][e].placeholder &&
                          d
                              .find("input")
                              .attr(
                                  "placeholder",
                                  t["default"][e].placeholder
                              )),
                  !0 === t["default"][e].required &&
                      0 === d.find("label abbr").length &&
                      a(d, !0),
                  t["default"][e].priority &&
                      d.data("priority", t["default"][e].priority));
        }),
            e(
                ".woocommerce-billing-fields__field-wrapper, .woocommerce-shipping-fields__field-wrapper, .woocommerce-address-fields__field-wrapper, .woocommerce-additional-fields__field-wrapper .woocommerce-account-fields"
            ).each(function (a, i) {
                var t = e(i).find(".form-row"),
                    d = t.first().parent(),
                    r = 0;
                t.each(function () {
                    e(this).data("priority") || e(this).data("priority", r + 1),
                        (r = e(this).data("priority"));
                }),
                    t.sort(function (a, i) {
                        var t = e(a).data("priority"),
                            d = e(i).data("priority");
                        return t > d ? 1 : t < d ? -1 : 0;
                    }),
                    t.detach().appendTo(d);
            });
    });
});
