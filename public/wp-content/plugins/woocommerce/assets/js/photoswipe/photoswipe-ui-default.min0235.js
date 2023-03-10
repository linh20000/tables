/*! PhotoSwipe Default UI - 4.1.1 - 2015-12-24
 * http://photoswipe.com
 * Copyright (c) 2015 Dmitry Semenov; */
!(function (e, t) {
    "function" == typeof define && define.amd
        ? define(t)
        : "object" == typeof exports
        ? (module.exports = t())
        : (e.PhotoSwipeUI_Default = t());
})(this, function () {
    "use strict";
    return function (e, t) {
        var n,
            o,
            l,
            r,
            i,
            s,
            a,
            u,
            c,
            p,
            d,
            m,
            f,
            h,
            w,
            g,
            v,
            b,
            _,
            C = this,
            T = !1,
            I = !0,
            E = !0,
            F = {
                barsSize: { top: 44, bottom: "auto" },
                closeElClasses: [
                    "item",
                    "caption",
                    "zoom-wrap",
                    "ui",
                    "top-bar",
                ],
                timeToIdle: 4e3,
                timeToIdleOutside: 1e3,
                loadingIndicatorDelay: 1e3,
                addCaptionHTMLFn: function (e, t) {
                    return e.title
                        ? ((t.children[0].innerHTML = e.title), !0)
                        : ((t.children[0].innerHTML = ""), !1);
                },
                closeEl: !0,
                captionEl: !0,
                fullscreenEl: !0,
                zoomEl: !0,
                shareEl: !0,
                counterEl: !0,
                arrowEl: !0,
                preloaderEl: !0,
                tapToClose: !1,
                tapToToggleControls: !0,
                clickToCloseNonZoomable: !0,
                shareButtons: [
                    {
                        id: "facebook",
                        label: "Share on Facebook",
                        url: "https://www.facebook.com/sharer/sharer.php?u={{url}}",
                    },
                    {
                        id: "twitter",
                        label: "Tweet",
                        url: "https://twitter.com/intent/tweet?text={{text}}&url={{url}}",
                    },
                    {
                        id: "pinterest",
                        label: "Pin it",
                        url: "http://www.pinterest.com/pin/create/button/?url={{url}}&media={{image_url}}&description={{text}}",
                    },
                    {
                        id: "download",
                        label: "Download image",
                        url: "{{raw_image_url}}",
                        download: !0,
                    },
                ],
                getImageURLForShare: function () {
                    return e.currItem.src || "";
                },
                getPageURLForShare: function () {
                    return window.location.href;
                },
                getTextForShare: function () {
                    return e.currItem.title || "";
                },
                indexIndicatorSep: " / ",
                fitControlsWidth: 1200,
            },
            x = function (e) {
                if (g) return !0;
                (e = e || window.event),
                    w.timeToIdle && w.mouseUsed && !c && D();
                for (
                    var n,
                        o,
                        l =
                            (e.target || e.srcElement).getAttribute("class") ||
                            "",
                        r = 0;
                    r < N.length;
                    r++
                )
                    (n = N[r]).onTap &&
                        l.indexOf("pswp__" + n.name) > -1 &&
                        (n.onTap(), (o = !0));
                if (o) {
                    e.stopPropagation && e.stopPropagation(), (g = !0);
                    var i = t.features.isOldAndroid ? 600 : 30;
                    v = setTimeout(function () {
                        g = !1;
                    }, i);
                }
            },
            S = function () {
                return (
                    !e.likelyTouchDevice ||
                    w.mouseUsed ||
                    screen.width > w.fitControlsWidth
                );
            },
            k = function (e, n, o) {
                t[(o ? "add" : "remove") + "Class"](e, "pswp__" + n);
            },
            K = function () {
                var e = 1 === w.getNumItemsFn();
                e !== h && (k(o, "ui--one-slide", e), (h = e));
            },
            L = function () {
                k(a, "share-modal--hidden", E);
            },
            O = function () {
                return (
                    (E = !E)
                        ? (t.removeClass(a, "pswp__share-modal--fade-in"),
                          setTimeout(function () {
                              E && L();
                          }, 300))
                        : (L(),
                          setTimeout(function () {
                              E || t.addClass(a, "pswp__share-modal--fade-in");
                          }, 30)),
                    E || y(),
                    !1
                );
            },
            R = function (t) {
                var n = (t = t || window.event).target || t.srcElement;
                return (
                    e.shout("shareLinkClick", t, n),
                    !(
                        !n.href ||
                        (!n.hasAttribute("download") &&
                            (window.open(
                                n.href,
                                "pswp_share",
                                "scrollbars=yes,resizable=yes,toolbar=no,location=yes,width=550,height=420,top=100,left=" +
                                    (window.screen
                                        ? Math.round(screen.width / 2 - 275)
                                        : 100)
                            ),
                            E || O(),
                            1))
                    )
                );
            },
            y = function () {
                for (
                    var e, t, n, o, l = "", r = 0;
                    r < w.shareButtons.length;
                    r++
                )
                    (e = w.shareButtons[r]),
                        (t = w.getImageURLForShare(e)),
                        (n = w.getPageURLForShare(e)),
                        (o = w.getTextForShare(e)),
                        (l +=
                            '<a href="' +
                            e.url
                                .replace("{{url}}", encodeURIComponent(n))
                                .replace("{{image_url}}", encodeURIComponent(t))
                                .replace("{{raw_image_url}}", t)
                                .replace("{{text}}", encodeURIComponent(o)) +
                            '" target="_blank" class="pswp__share--' +
                            e.id +
                            '"' +
                            (e.download ? "download" : "") +
                            ">" +
                            e.label +
                            "</a>"),
                        w.parseShareButtonOut &&
                            (l = w.parseShareButtonOut(e, l));
                (a.children[0].innerHTML = l), (a.children[0].onclick = R);
            },
            z = function (e) {
                for (var n = 0; n < w.closeElClasses.length; n++)
                    if (t.hasClass(e, "pswp__" + w.closeElClasses[n]))
                        return !0;
            },
            M = 0,
            D = function () {
                clearTimeout(_), (M = 0), c && C.setIdle(!1);
            },
            A = function (e) {
                var t = (e = e || window.event).relatedTarget || e.toElement;
                (t && "HTML" !== t.nodeName) ||
                    (clearTimeout(_),
                    (_ = setTimeout(function () {
                        C.setIdle(!0);
                    }, w.timeToIdleOutside)));
            },
            P = function () {
                w.fullscreenEl &&
                    !t.features.isOldAndroid &&
                    (n || (n = C.getFullscreenAPI()),
                    n
                        ? (t.bind(document, n.eventK, C.updateFullscreen),
                          C.updateFullscreen(),
                          t.addClass(e.template, "pswp--supports-fs"))
                        : t.removeClass(e.template, "pswp--supports-fs"));
            },
            U = function () {
                w.preloaderEl &&
                    (Z(!0),
                    p("beforeChange", function () {
                        clearTimeout(f),
                            (f = setTimeout(function () {
                                e.currItem && e.currItem.loading
                                    ? (!e.allowProgressiveImg() ||
                                          (e.currItem.img &&
                                              !e.currItem.img.naturalWidth)) &&
                                      Z(!1)
                                    : Z(!0);
                            }, w.loadingIndicatorDelay));
                    }),
                    p("imageLoadComplete", function (t, n) {
                        e.currItem === n && Z(!0);
                    }));
            },
            Z = function (e) {
                m !== e && (k(d, "preloader--active", !e), (m = e));
            },
            q = function (e) {
                var n = e.vGap;
                if (S()) {
                    var i = w.barsSize;
                    if (w.captionEl && "auto" === i.bottom)
                        if (
                            (r ||
                                ((r = t.createEl(
                                    "pswp__caption pswp__caption--fake"
                                )).appendChild(
                                    t.createEl("pswp__caption__center")
                                ),
                                o.insertBefore(r, l),
                                t.addClass(o, "pswp__ui--fit")),
                            w.addCaptionHTMLFn(e, r, !0))
                        ) {
                            var s = r.clientHeight;
                            n.bottom = parseInt(s, 10) || 44;
                        } else n.bottom = i.top;
                    else n.bottom = "auto" === i.bottom ? 0 : i.bottom;
                    n.top = i.top;
                } else n.top = n.bottom = 0;
            },
            B = function () {
                w.timeToIdle &&
                    p("mouseUsed", function () {
                        t.bind(document, "mousemove", D),
                            t.bind(document, "mouseout", A),
                            (b = setInterval(function () {
                                2 == ++M && C.setIdle(!0);
                            }, w.timeToIdle / 2));
                    });
            },
            H = function () {
                p("onVerticalDrag", function (e) {
                    I && e < 0.95
                        ? C.hideControls()
                        : !I && e >= 0.95 && C.showControls();
                });
                var e;
                p("onPinchClose", function (t) {
                    I && t < 0.9
                        ? (C.hideControls(), (e = !0))
                        : e && !I && t > 0.9 && C.showControls();
                }),
                    p("zoomGestureEnded", function () {
                        (e = !1) && !I && C.showControls();
                    });
            },
            N = [
                {
                    name: "caption",
                    option: "captionEl",
                    onInit: function (e) {
                        l = e;
                    },
                },
                {
                    name: "share-modal",
                    option: "shareEl",
                    onInit: function (e) {
                        a = e;
                    },
                    onTap: function () {
                        O();
                    },
                },
                {
                    name: "button--share",
                    option: "shareEl",
                    onInit: function (e) {
                        s = e;
                    },
                    onTap: function () {
                        O();
                    },
                },
                {
                    name: "button--zoom",
                    option: "zoomEl",
                    onTap: e.toggleDesktopZoom,
                },
                {
                    name: "counter",
                    option: "counterEl",
                    onInit: function (e) {
                        i = e;
                    },
                },
                { name: "button--close", option: "closeEl", onTap: e.close },
                {
                    name: "button--arrow--left",
                    option: "arrowEl",
                    onTap: e.prev,
                },
                {
                    name: "button--arrow--right",
                    option: "arrowEl",
                    onTap: e.next,
                },
                {
                    name: "button--fs",
                    option: "fullscreenEl",
                    onTap: function () {
                        n.isFullscreen() ? n.exit() : n.enter();
                    },
                },
                {
                    name: "preloader",
                    option: "preloaderEl",
                    onInit: function (e) {
                        d = e;
                    },
                },
            ],
            W = function () {
                var e,
                    n,
                    l,
                    r = function (o) {
                        if (o)
                            for (var r = o.length, i = 0; i < r; i++) {
                                (e = o[i]), (n = e.className);
                                for (var s = 0; s < N.length; s++)
                                    (l = N[s]),
                                        n.indexOf("pswp__" + l.name) > -1 &&
                                            (w[l.option]
                                                ? (t.removeClass(
                                                      e,
                                                      "pswp__element--disabled"
                                                  ),
                                                  l.onInit && l.onInit(e))
                                                : t.addClass(
                                                      e,
                                                      "pswp__element--disabled"
                                                  ));
                            }
                    };
                r(o.children);
                var i = t.getChildByClass(o, "pswp__top-bar");
                i && r(i.children);
            };
        (C.init = function () {
            t.extend(e.options, F, !0),
                (w = e.options),
                (o = t.getChildByClass(e.scrollWrap, "pswp__ui")),
                (p = e.listen),
                H(),
                p("beforeChange", C.update),
                p("doubleTap", function (t) {
                    var n = e.currItem.initialZoomLevel;
                    e.getZoomLevel() !== n
                        ? e.zoomTo(n, t, 333)
                        : e.zoomTo(w.getDoubleTapZoom(!1, e.currItem), t, 333);
                }),
                p("preventDragEvent", function (e, t, n) {
                    var o = e.target || e.srcElement;
                    o &&
                        o.getAttribute("class") &&
                        e.type.indexOf("mouse") > -1 &&
                        (o.getAttribute("class").indexOf("__caption") > 0 ||
                            /(SMALL|STRONG|EM)/i.test(o.tagName)) &&
                        (n.prevent = !1);
                }),
                p("bindEvents", function () {
                    t.bind(o, "pswpTap click", x),
                        t.bind(e.scrollWrap, "pswpTap", C.onGlobalTap),
                        e.likelyTouchDevice ||
                            t.bind(e.scrollWrap, "mouseover", C.onMouseOver);
                }),
                p("unbindEvents", function () {
                    E || O(),
                        b && clearInterval(b),
                        t.unbind(document, "mouseout", A),
                        t.unbind(document, "mousemove", D),
                        t.unbind(o, "pswpTap click", x),
                        t.unbind(e.scrollWrap, "pswpTap", C.onGlobalTap),
                        t.unbind(e.scrollWrap, "mouseover", C.onMouseOver),
                        n &&
                            (t.unbind(document, n.eventK, C.updateFullscreen),
                            n.isFullscreen() &&
                                ((w.hideAnimationDuration = 0), n.exit()),
                            (n = null));
                }),
                p("destroy", function () {
                    w.captionEl &&
                        (r && o.removeChild(r),
                        t.removeClass(l, "pswp__caption--empty")),
                        a && (a.children[0].onclick = null),
                        t.removeClass(o, "pswp__ui--over-close"),
                        t.addClass(o, "pswp__ui--hidden"),
                        C.setIdle(!1);
                }),
                w.showAnimationDuration || t.removeClass(o, "pswp__ui--hidden"),
                p("initialZoomIn", function () {
                    w.showAnimationDuration &&
                        t.removeClass(o, "pswp__ui--hidden");
                }),
                p("initialZoomOut", function () {
                    t.addClass(o, "pswp__ui--hidden");
                }),
                p("parseVerticalMargin", q),
                W(),
                w.shareEl && s && a && (E = !0),
                K(),
                B(),
                P(),
                U();
        }),
            (C.setIdle = function (e) {
                (c = e), k(o, "ui--idle", e);
            }),
            (C.update = function () {
                I && e.currItem
                    ? (C.updateIndexIndicator(),
                      w.captionEl &&
                          (w.addCaptionHTMLFn(e.currItem, l),
                          k(l, "caption--empty", !e.currItem.title)),
                      (T = !0))
                    : (T = !1),
                    E || O(),
                    K();
            }),
            (C.updateFullscreen = function (o) {
                o &&
                    setTimeout(function () {
                        e.setScrollOffset(0, t.getScrollY());
                    }, 50),
                    t[(n.isFullscreen() ? "add" : "remove") + "Class"](
                        e.template,
                        "pswp--fs"
                    );
            }),
            (C.updateIndexIndicator = function () {
                w.counterEl &&
                    (i.innerHTML =
                        e.getCurrentIndex() +
                        1 +
                        w.indexIndicatorSep +
                        w.getNumItemsFn());
            }),
            (C.onGlobalTap = function (n) {
                var o = (n = n || window.event).target || n.srcElement;
                if (!g)
                    if (n.detail && "mouse" === n.detail.pointerType) {
                        if (z(o)) return void e.close();
                        t.hasClass(o, "pswp__img") &&
                            (1 === e.getZoomLevel() &&
                            e.getZoomLevel() <= e.currItem.fitRatio
                                ? w.clickToCloseNonZoomable && e.close()
                                : e.toggleDesktopZoom(n.detail.releasePoint));
                    } else if (
                        (w.tapToToggleControls &&
                            (I ? C.hideControls() : C.showControls()),
                        w.tapToClose && (t.hasClass(o, "pswp__img") || z(o)))
                    )
                        return void e.close();
            }),
            (C.onMouseOver = function (e) {
                var t = (e = e || window.event).target || e.srcElement;
                k(o, "ui--over-close", z(t));
            }),
            (C.hideControls = function () {
                t.addClass(o, "pswp__ui--hidden"), (I = !1);
            }),
            (C.showControls = function () {
                (I = !0), T || C.update(), t.removeClass(o, "pswp__ui--hidden");
            }),
            (C.supportsFullscreen = function () {
                var e = document;
                return !!(
                    e.exitFullscreen ||
                    e.mozCancelFullScreen ||
                    e.webkitExitFullscreen ||
                    e.msExitFullscreen
                );
            }),
            (C.getFullscreenAPI = function () {
                var t,
                    n = document.documentElement,
                    o = "fullscreenchange";
                return (
                    n.requestFullscreen
                        ? (t = {
                              enterK: "requestFullscreen",
                              exitK: "exitFullscreen",
                              elementK: "fullscreenElement",
                              eventK: o,
                          })
                        : n.mozRequestFullScreen
                        ? (t = {
                              enterK: "mozRequestFullScreen",
                              exitK: "mozCancelFullScreen",
                              elementK: "mozFullScreenElement",
                              eventK: "moz" + o,
                          })
                        : n.webkitRequestFullscreen
                        ? (t = {
                              enterK: "webkitRequestFullscreen",
                              exitK: "webkitExitFullscreen",
                              elementK: "webkitFullscreenElement",
                              eventK: "webkit" + o,
                          })
                        : n.msRequestFullscreen &&
                          (t = {
                              enterK: "msRequestFullscreen",
                              exitK: "msExitFullscreen",
                              elementK: "msFullscreenElement",
                              eventK: "MSFullscreenChange",
                          }),
                    t &&
                        ((t.enter = function () {
                            if (
                                ((u = w.closeOnScroll),
                                (w.closeOnScroll = !1),
                                "webkitRequestFullscreen" !== this.enterK)
                            )
                                return e.template[this.enterK]();
                            e.template[this.enterK](
                                Element.ALLOW_KEYBOARD_INPUT
                            );
                        }),
                        (t.exit = function () {
                            return (
                                (w.closeOnScroll = u), document[this.exitK]()
                            );
                        }),
                        (t.isFullscreen = function () {
                            return document[this.elementK];
                        })),
                    t
                );
            });
    };
});
