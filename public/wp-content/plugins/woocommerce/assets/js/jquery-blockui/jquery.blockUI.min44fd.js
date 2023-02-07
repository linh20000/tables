/*!
 * jQuery blockUI plugin
 * Version 2.70.0-2014.11.23
 * Requires jQuery v1.7 or later
 *
 * Examples at: http://malsup.com/jquery/block/
 * Copyright (c) 2007-2013 M. Alsup
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 *
 * Thanks to Amir-Hossein Sobhi for some excellent contributions!
 */
!(function () {
    "use strict";
    function e(e) {
        function t(t, n) {
            var s,
                h,
                k = t == window,
                y = n && n.message !== undefined ? n.message : undefined;
            if (
                !(n = e.extend({}, e.blockUI.defaults, n || {}))
                    .ignoreIfBlocked ||
                !e(t).data("blockUI.isBlocked")
            ) {
                if (
                    ((n.overlayCSS = e.extend(
                        {},
                        e.blockUI.defaults.overlayCSS,
                        n.overlayCSS || {}
                    )),
                    (s = e.extend({}, e.blockUI.defaults.css, n.css || {})),
                    n.onOverlayClick && (n.overlayCSS.cursor = "pointer"),
                    (h = e.extend(
                        {},
                        e.blockUI.defaults.themedCSS,
                        n.themedCSS || {}
                    )),
                    (y = y === undefined ? n.message : y),
                    k && p && o(window, { fadeOut: 0 }),
                    y && "string" != typeof y && (y.parentNode || y.jquery))
                ) {
                    var m = y.jquery ? y[0] : y,
                        g = {};
                    e(t).data("blockUI.history", g),
                        (g.el = m),
                        (g.parent = m.parentNode),
                        (g.display = m.style.display),
                        (g.position = m.style.position),
                        g.parent && g.parent.removeChild(m);
                }
                e(t).data("blockUI.onUnblock", n.onUnblock);
                var v,
                    I,
                    w,
                    U,
                    x = n.baseZ;
                (v = e(
                    r || n.forceIframe
                        ? '<iframe class="blockUI" style="z-index:' +
                              x++ +
                              ';display:none;border:none;margin:0;padding:0;position:absolute;width:100%;height:100%;top:0;left:0" src="' +
                              n.iframeSrc +
                              '"></iframe>'
                        : '<div class="blockUI" style="display:none"></div>'
                )),
                    (I = e(
                        n.theme
                            ? '<div class="blockUI blockOverlay ui-widget-overlay" style="z-index:' +
                                  x++ +
                                  ';display:none"></div>'
                            : '<div class="blockUI blockOverlay" style="z-index:' +
                                  x++ +
                                  ';display:none;border:none;margin:0;padding:0;width:100%;height:100%;top:0;left:0"></div>'
                    )),
                    n.theme && k
                        ? ((U =
                              '<div class="blockUI ' +
                              n.blockMsgClass +
                              ' blockPage ui-dialog ui-widget ui-corner-all" style="z-index:' +
                              (x + 10) +
                              ';display:none;position:fixed">'),
                          n.title &&
                              (U +=
                                  '<div class="ui-widget-header ui-dialog-titlebar ui-corner-all blockTitle">' +
                                  (n.title || "&nbsp;") +
                                  "</div>"),
                          (U +=
                              '<div class="ui-widget-content ui-dialog-content"></div>'),
                          (U += "</div>"))
                        : n.theme
                        ? ((U =
                              '<div class="blockUI ' +
                              n.blockMsgClass +
                              ' blockElement ui-dialog ui-widget ui-corner-all" style="z-index:' +
                              (x + 10) +
                              ';display:none;position:absolute">'),
                          n.title &&
                              (U +=
                                  '<div class="ui-widget-header ui-dialog-titlebar ui-corner-all blockTitle">' +
                                  (n.title || "&nbsp;") +
                                  "</div>"),
                          (U +=
                              '<div class="ui-widget-content ui-dialog-content"></div>'),
                          (U += "</div>"))
                        : (U = k
                              ? '<div class="blockUI ' +
                                n.blockMsgClass +
                                ' blockPage" style="z-index:' +
                                (x + 10) +
                                ';display:none;position:fixed"></div>'
                              : '<div class="blockUI ' +
                                n.blockMsgClass +
                                ' blockElement" style="z-index:' +
                                (x + 10) +
                                ';display:none;position:absolute"></div>'),
                    (w = e(U)),
                    y &&
                        (n.theme
                            ? (w.css(h), w.addClass("ui-widget-content"))
                            : w.css(s)),
                    n.theme || I.css(n.overlayCSS),
                    I.css("position", k ? "fixed" : "absolute"),
                    (r || n.forceIframe) && v.css("opacity", 0);
                var C = [v, I, w],
                    S = e(k ? "body" : t);
                e.each(C, function () {
                    this.appendTo(S);
                }),
                    n.theme &&
                        n.draggable &&
                        e.fn.draggable &&
                        w.draggable({
                            handle: ".ui-dialog-titlebar",
                            cancel: "li",
                        });
                var O =
                    f &&
                    (!e.support.boxModel ||
                        e("object,embed", k ? null : t).length > 0);
                if (u || O) {
                    if (
                        (k &&
                            n.allowBodyStretch &&
                            e.support.boxModel &&
                            e("html,body").css("height", "100%"),
                        (u || !e.support.boxModel) && !k)
                    )
                        var E = a(t, "borderTopWidth"),
                            T = a(t, "borderLeftWidth"),
                            M = E ? "(0 - " + E + ")" : 0,
                            B = T ? "(0 - " + T + ")" : 0;
                    e.each(C, function (e, t) {
                        var o = t[0].style;
                        if (((o.position = "absolute"), e < 2))
                            k
                                ? o.setExpression(
                                      "height",
                                      "Math.max(document.body.scrollHeight, document.body.offsetHeight) - (jQuery.support.boxModel?0:" +
                                          n.quirksmodeOffsetHack +
                                          ') + "px"'
                                  )
                                : o.setExpression(
                                      "height",
                                      'this.parentNode.offsetHeight + "px"'
                                  ),
                                k
                                    ? o.setExpression(
                                          "width",
                                          'jQuery.support.boxModel && document.documentElement.clientWidth || document.body.clientWidth + "px"'
                                      )
                                    : o.setExpression(
                                          "width",
                                          'this.parentNode.offsetWidth + "px"'
                                      ),
                                B && o.setExpression("left", B),
                                M && o.setExpression("top", M);
                        else if (n.centerY)
                            k &&
                                o.setExpression(
                                    "top",
                                    '(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (blah = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"'
                                ),
                                (o.marginTop = 0);
                        else if (!n.centerY && k) {
                            var i =
                                "((document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + " +
                                (n.css && n.css.top
                                    ? parseInt(n.css.top, 10)
                                    : 0) +
                                ') + "px"';
                            o.setExpression("top", i);
                        }
                    });
                }
                if (
                    (y &&
                        (n.theme
                            ? w.find(".ui-widget-content").append(y)
                            : w.append(y),
                        (y.jquery || y.nodeType) && e(y).show()),
                    (r || n.forceIframe) && n.showOverlay && v.show(),
                    n.fadeIn)
                ) {
                    var j = n.onBlock ? n.onBlock : c,
                        H = n.showOverlay && !y ? j : c,
                        z = y ? j : c;
                    n.showOverlay && I._fadeIn(n.fadeIn, H),
                        y && w._fadeIn(n.fadeIn, z);
                } else
                    n.showOverlay && I.show(),
                        y && w.show(),
                        n.onBlock && n.onBlock.bind(w)();
                if (
                    (i(1, t, n),
                    k
                        ? ((p = w[0]),
                          (b = e(n.focusableElements, p)),
                          n.focusInput && setTimeout(l, 20))
                        : d(w[0], n.centerX, n.centerY),
                    n.timeout)
                ) {
                    var W = setTimeout(function () {
                        k ? e.unblockUI(n) : e(t).unblock(n);
                    }, n.timeout);
                    e(t).data("blockUI.timeout", W);
                }
            }
        }
        function o(t, o) {
            var s,
                l = t == window,
                d = e(t),
                a = d.data("blockUI.history"),
                c = d.data("blockUI.timeout");
            c && (clearTimeout(c), d.removeData("blockUI.timeout")),
                (o = e.extend({}, e.blockUI.defaults, o || {})),
                i(0, t, o),
                null === o.onUnblock &&
                    ((o.onUnblock = d.data("blockUI.onUnblock")),
                    d.removeData("blockUI.onUnblock"));
            var r;
            (r = l
                ? e(document.body)
                      .children()
                      .filter(".blockUI")
                      .add("body > .blockUI")
                : d.find(">.blockUI")),
                o.cursorReset &&
                    (r.length > 1 && (r[1].style.cursor = o.cursorReset),
                    r.length > 2 && (r[2].style.cursor = o.cursorReset)),
                l && (p = b = null),
                o.fadeOut
                    ? ((s = r.length),
                      r.stop().fadeOut(o.fadeOut, function () {
                          0 == --s && n(r, a, o, t);
                      }))
                    : n(r, a, o, t);
        }
        function n(t, o, n, i) {
            var s = e(i);
            if (!s.data("blockUI.isBlocked")) {
                t.each(function (e, t) {
                    this.parentNode && this.parentNode.removeChild(this);
                }),
                    o &&
                        o.el &&
                        ((o.el.style.display = o.display),
                        (o.el.style.position = o.position),
                        (o.el.style.cursor = "default"),
                        o.parent && o.parent.appendChild(o.el),
                        s.removeData("blockUI.history")),
                    s.data("blockUI.static") && s.css("position", "static"),
                    "function" == typeof n.onUnblock && n.onUnblock(i, n);
                var l = e(document.body),
                    d = l.width(),
                    a = l[0].style.width;
                l.width(d - 1).width(d), (l[0].style.width = a);
            }
        }
        function i(t, o, n) {
            var i = o == window,
                l = e(o);
            if (
                (t || ((!i || p) && (i || l.data("blockUI.isBlocked")))) &&
                (l.data("blockUI.isBlocked", t),
                i && n.bindEvents && (!t || n.showOverlay))
            ) {
                var d =
                    "mousedown mouseup keydown keypress keyup touchstart touchend touchmove";
                t ? e(document).bind(d, n, s) : e(document).unbind(d, s);
            }
        }
        function s(t) {
            if (
                "keydown" === t.type &&
                t.keyCode &&
                9 == t.keyCode &&
                p &&
                t.data.constrainTabKey
            ) {
                var o = b,
                    n = !t.shiftKey && t.target === o[o.length - 1],
                    i = t.shiftKey && t.target === o[0];
                if (n || i)
                    return (
                        setTimeout(function () {
                            l(i);
                        }, 10),
                        !1
                    );
            }
            var s = t.data,
                d = e(t.target);
            return (
                d.hasClass("blockOverlay") &&
                    s.onOverlayClick &&
                    s.onOverlayClick(t),
                d.parents("div." + s.blockMsgClass).length > 0 ||
                    0 === d.parents().children().filter("div.blockUI").length
            );
        }
        function l(e) {
            if (b) {
                var t = b[!0 === e ? b.length - 1 : 0];
                t && t.focus();
            }
        }
        function d(e, t, o) {
            var n = e.parentNode,
                i = e.style,
                s =
                    (n.offsetWidth - e.offsetWidth) / 2 -
                    a(n, "borderLeftWidth"),
                l =
                    (n.offsetHeight - e.offsetHeight) / 2 -
                    a(n, "borderTopWidth");
            t && (i.left = s > 0 ? s + "px" : "0"),
                o && (i.top = l > 0 ? l + "px" : "0");
        }
        function a(t, o) {
            return parseInt(e.css(t, o), 10) || 0;
        }
        e.fn._fadeIn = e.fn.fadeIn;
        var c = e.noop || function () {},
            r = /MSIE/.test(navigator.userAgent),
            u =
                /MSIE 6.0/.test(navigator.userAgent) &&
                !/MSIE 8.0/.test(navigator.userAgent),
            f =
                (document.documentMode,
                e.isFunction(
                    document.createElement("div").style.setExpression
                ));
        (e.blockUI = function (e) {
            t(window, e);
        }),
            (e.unblockUI = function (e) {
                o(window, e);
            }),
            (e.growlUI = function (t, o, n, i) {
                var s = e('<div class="growlUI"></div>');
                t && s.append("<h1>" + t + "</h1>"),
                    o && s.append("<h2>" + o + "</h2>"),
                    n === undefined && (n = 3e3);
                var l = function (t) {
                    (t = t || {}),
                        e.blockUI({
                            message: s,
                            fadeIn:
                                "undefined" != typeof t.fadeIn ? t.fadeIn : 700,
                            fadeOut:
                                "undefined" != typeof t.fadeOut
                                    ? t.fadeOut
                                    : 1e3,
                            timeout:
                                "undefined" != typeof t.timeout ? t.timeout : n,
                            centerY: !1,
                            showOverlay: !1,
                            onUnblock: i,
                            css: e.blockUI.defaults.growlCSS,
                        });
                };
                l();
                s.css("opacity");
                s.mouseover(function () {
                    l({ fadeIn: 0, timeout: 3e4 });
                    var t = e(".blockMsg");
                    t.stop(), t.fadeTo(300, 1);
                }).mouseout(function () {
                    e(".blockMsg").fadeOut(1e3);
                });
            }),
            (e.fn.block = function (o) {
                if (this[0] === window) return e.blockUI(o), this;
                var n = e.extend({}, e.blockUI.defaults, o || {});
                return (
                    this.each(function () {
                        var t = e(this);
                        (n.ignoreIfBlocked && t.data("blockUI.isBlocked")) ||
                            t.unblock({ fadeOut: 0 });
                    }),
                    this.each(function () {
                        "static" == e.css(this, "position") &&
                            ((this.style.position = "relative"),
                            e(this).data("blockUI.static", !0)),
                            (this.style.zoom = 1),
                            t(this, o);
                    })
                );
            }),
            (e.fn.unblock = function (t) {
                return this[0] === window
                    ? (e.unblockUI(t), this)
                    : this.each(function () {
                          o(this, t);
                      });
            }),
            (e.blockUI.version = 2.7),
            (e.blockUI.defaults = {
                message: "<h1>Please wait...</h1>",
                title: null,
                draggable: !0,
                theme: !1,
                css: {
                    padding: 0,
                    margin: 0,
                    width: "30%",
                    top: "40%",
                    left: "35%",
                    textAlign: "center",
                    color: "#000",
                    border: "3px solid #aaa",
                    backgroundColor: "#fff",
                    cursor: "wait",
                },
                themedCSS: { width: "30%", top: "40%", left: "35%" },
                overlayCSS: {
                    backgroundColor: "#000",
                    opacity: 0.6,
                    cursor: "wait",
                },
                cursorReset: "default",
                growlCSS: {
                    width: "350px",
                    top: "10px",
                    left: "",
                    right: "10px",
                    border: "none",
                    padding: "5px",
                    opacity: 0.6,
                    cursor: "default",
                    color: "#fff",
                    backgroundColor: "#000",
                    "-webkit-border-radius": "10px",
                    "-moz-border-radius": "10px",
                    "border-radius": "10px",
                },
                iframeSrc: /^https/i.test(window.location.href || "")
                    ? "javascript:false"
                    : "about:blank",
                forceIframe: !1,
                baseZ: 1e3,
                centerX: !0,
                centerY: !0,
                allowBodyStretch: !0,
                bindEvents: !0,
                constrainTabKey: !0,
                fadeIn: 200,
                fadeOut: 400,
                timeout: 0,
                showOverlay: !0,
                focusInput: !0,
                focusableElements: ":input:enabled:visible",
                onBlock: null,
                onUnblock: null,
                onOverlayClick: null,
                quirksmodeOffsetHack: 4,
                blockMsgClass: "blockMsg",
                ignoreIfBlocked: !1,
            });
        var p = null,
            b = [];
    }
    "function" == typeof define && define.amd && define.amd.jQuery
        ? define(["jquery"], e)
        : e(jQuery);
})();
