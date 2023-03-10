/*! PhotoSwipe - v4.1.1 - 2015-12-24
 * http://photoswipe.com
 * Copyright (c) 2015 Dmitry Semenov; */
!(function (e, t) {
    "function" == typeof define && define.amd
        ? define(t)
        : "object" == typeof exports
        ? (module.exports = t())
        : (e.PhotoSwipe = t());
})(this, function () {
    "use strict";
    return function (e, t, n, i) {
        var o = {
            features: null,
            bind: function (e, t, n, i) {
                var o = (i ? "remove" : "add") + "EventListener";
                t = t.split(" ");
                for (var a = 0; a < t.length; a++) t[a] && e[o](t[a], n, !1);
            },
            isArray: function (e) {
                return e instanceof Array;
            },
            createEl: function (e, t) {
                var n = document.createElement(t || "div");
                return e && (n.className = e), n;
            },
            getScrollY: function () {
                var e = window.pageYOffset;
                return e !== undefined ? e : document.documentElement.scrollTop;
            },
            unbind: function (e, t, n) {
                o.bind(e, t, n, !0);
            },
            removeClass: function (e, t) {
                var n = new RegExp("(\\s|^)" + t + "(\\s|$)");
                e.className = e.className
                    .replace(n, " ")
                    .replace(/^\s\s*/, "")
                    .replace(/\s\s*$/, "");
            },
            addClass: function (e, t) {
                o.hasClass(e, t) ||
                    (e.className += (e.className ? " " : "") + t);
            },
            hasClass: function (e, t) {
                return (
                    e.className &&
                    new RegExp("(^|\\s)" + t + "(\\s|$)").test(e.className)
                );
            },
            getChildByClass: function (e, t) {
                for (var n = e.firstChild; n; ) {
                    if (o.hasClass(n, t)) return n;
                    n = n.nextSibling;
                }
            },
            arraySearch: function (e, t, n) {
                for (var i = e.length; i--; ) if (e[i][n] === t) return i;
                return -1;
            },
            extend: function (e, t, n) {
                for (var i in t)
                    if (t.hasOwnProperty(i)) {
                        if (n && e.hasOwnProperty(i)) continue;
                        e[i] = t[i];
                    }
            },
            easing: {
                sine: {
                    out: function (e) {
                        return Math.sin(e * (Math.PI / 2));
                    },
                    inOut: function (e) {
                        return -(Math.cos(Math.PI * e) - 1) / 2;
                    },
                },
                cubic: {
                    out: function (e) {
                        return --e * e * e + 1;
                    },
                },
            },
            detectFeatures: function () {
                if (o.features) return o.features;
                var e = o.createEl().style,
                    t = "",
                    n = {};
                if (
                    ((n.oldIE = document.all && !document.addEventListener),
                    (n.touch = "ontouchstart" in window),
                    window.requestAnimationFrame &&
                        ((n.raf = window.requestAnimationFrame),
                        (n.caf = window.cancelAnimationFrame)),
                    (n.pointerEvent =
                        navigator.pointerEnabled || navigator.msPointerEnabled),
                    !n.pointerEvent)
                ) {
                    var i = navigator.userAgent;
                    if (/iP(hone|od)/.test(navigator.platform)) {
                        var a = navigator.appVersion.match(
                            /OS (\d+)_(\d+)_?(\d+)?/
                        );
                        a &&
                            a.length > 0 &&
                            (a = parseInt(a[1], 10)) >= 1 &&
                            a < 8 &&
                            (n.isOldIOSPhone = !0);
                    }
                    var r = i.match(/Android\s([0-9\.]*)/),
                        l = r ? r[1] : 0;
                    (l = parseFloat(l)) >= 1 &&
                        (l < 4.4 && (n.isOldAndroid = !0),
                        (n.androidVersion = l)),
                        (n.isMobileOpera = /opera mini|opera mobi/i.test(i));
                }
                for (
                    var s,
                        u,
                        c = ["transform", "perspective", "animationName"],
                        d = ["", "webkit", "Moz", "ms", "O"],
                        p = 0;
                    p < 4;
                    p++
                ) {
                    t = d[p];
                    for (var m = 0; m < 3; m++)
                        (s = c[m]),
                            (u =
                                t +
                                (t
                                    ? s.charAt(0).toUpperCase() + s.slice(1)
                                    : s)),
                            !n[s] && u in e && (n[s] = u);
                    t &&
                        !n.raf &&
                        ((t = t.toLowerCase()),
                        (n.raf = window[t + "RequestAnimationFrame"]),
                        n.raf &&
                            (n.caf =
                                window[t + "CancelAnimationFrame"] ||
                                window[t + "CancelRequestAnimationFrame"]));
                }
                if (!n.raf) {
                    var f = 0;
                    (n.raf = function (e) {
                        var t = new Date().getTime(),
                            n = Math.max(0, 16 - (t - f)),
                            i = window.setTimeout(function () {
                                e(t + n);
                            }, n);
                        return (f = t + n), i;
                    }),
                        (n.caf = function (e) {
                            clearTimeout(e);
                        });
                }
                return (
                    (n.svg =
                        !!document.createElementNS &&
                        !!document.createElementNS(
                            "http://www.w3.org/2000/svg",
                            "svg"
                        ).createSVGRect),
                    (o.features = n),
                    n
                );
            },
        };
        o.detectFeatures(),
            o.features.oldIE &&
                (o.bind = function (e, t, n, i) {
                    t = t.split(" ");
                    for (
                        var o, a = (i ? "detach" : "attach") + "Event", r = 0;
                        r < t.length;
                        r++
                    )
                        if ((o = t[r]))
                            if ("object" == typeof n && n.handleEvent) {
                                if (i) {
                                    if (!n["oldIE" + o]) return !1;
                                } else
                                    n["oldIE" + o] = function () {
                                        n.handleEvent.call(n);
                                    };
                                e[a]("on" + o, n["oldIE" + o]);
                            } else e[a]("on" + o, n);
                });
        var a = this,
            r = {
                allowPanToNext: !0,
                spacing: 0.12,
                bgOpacity: 1,
                mouseUsed: !1,
                loop: !0,
                pinchToClose: !0,
                closeOnScroll: !0,
                closeOnVerticalDrag: !0,
                verticalDragRange: 0.75,
                hideAnimationDuration: 333,
                showAnimationDuration: 333,
                showHideOpacity: !1,
                focus: !0,
                escKey: !0,
                arrowKeys: !0,
                mainScrollEndFriction: 0.35,
                panEndFriction: 0.35,
                isClickableElement: function (e) {
                    return "A" === e.tagName;
                },
                getDoubleTapZoom: function (e, t) {
                    return e ? 1 : t.initialZoomLevel < 0.7 ? 1 : 1.33;
                },
                maxSpreadZoom: 1.33,
                modal: !0,
                scaleMode: "fit",
            };
        o.extend(r, i);
        var l,
            s,
            u,
            c,
            d,
            p,
            m,
            f,
            h,
            y,
            x,
            v,
            g,
            w,
            b,
            I,
            C,
            D,
            M,
            T,
            S,
            A,
            E,
            O,
            k,
            R,
            Z,
            P,
            F,
            L,
            _,
            z,
            N,
            U,
            H,
            Y,
            B,
            W,
            G,
            X,
            V,
            K,
            q,
            $,
            j,
            J,
            Q,
            ee,
            te,
            ne,
            ie,
            oe,
            ae,
            re,
            le,
            se,
            ue = { x: 0, y: 0 },
            ce = { x: 0, y: 0 },
            de = { x: 0, y: 0 },
            pe = {},
            me = 0,
            fe = {},
            he = { x: 0, y: 0 },
            ye = 0,
            xe = !0,
            ve = [],
            ge = {},
            we = !1,
            be = function (e, t) {
                o.extend(a, t.publicMethods), ve.push(e);
            },
            Ie = function (e) {
                var t = Kt();
                return e > t - 1 ? e - t : e < 0 ? t + e : e;
            },
            Ce = {},
            De = function (e, t) {
                return Ce[e] || (Ce[e] = []), Ce[e].push(t);
            },
            Me = function (e) {
                var t = Ce[e];
                if (t) {
                    var n = Array.prototype.slice.call(arguments);
                    n.shift();
                    for (var i = 0; i < t.length; i++) t[i].apply(a, n);
                }
            },
            Te = function () {
                return new Date().getTime();
            },
            Se = function (e) {
                (re = e), (a.bg.style.opacity = e * r.bgOpacity);
            },
            Ae = function (e, t, n, i, o) {
                (!we || (o && o !== a.currItem)) &&
                    (i /= o ? o.fitRatio : a.currItem.fitRatio),
                    (e[A] =
                        v + t + "px, " + n + "px" + g + " scale(" + i + ")");
            },
            Ee = function (e) {
                te &&
                    (e &&
                        (y > a.currItem.fitRatio
                            ? we || (rn(a.currItem, !1, !0), (we = !0))
                            : we && (rn(a.currItem), (we = !1))),
                    Ae(te, de.x, de.y, y));
            },
            Oe = function (e) {
                e.container &&
                    Ae(
                        e.container.style,
                        e.initialPosition.x,
                        e.initialPosition.y,
                        e.initialZoomLevel,
                        e
                    );
            },
            ke = function (e, t) {
                t[A] = v + e + "px, 0px" + g;
            },
            Re = function (e, t) {
                if (!r.loop && t) {
                    var n = c + (he.x * me - e) / he.x,
                        i = Math.round(e - mt.x);
                    ((n < 0 && i > 0) || (n >= Kt() - 1 && i < 0)) &&
                        (e = mt.x + i * r.mainScrollEndFriction);
                }
                (mt.x = e), ke(e, d);
            },
            Ze = function (e, t) {
                var n = ft[e] - fe[e];
                return ce[e] + ue[e] + n - n * (t / x);
            },
            Pe = function (e, t) {
                (e.x = t.x), (e.y = t.y), t.id && (e.id = t.id);
            },
            Fe = function (e) {
                (e.x = Math.round(e.x)), (e.y = Math.round(e.y));
            },
            Le = null,
            _e = function () {
                Le &&
                    (o.unbind(document, "mousemove", _e),
                    o.addClass(e, "pswp--has_mouse"),
                    (r.mouseUsed = !0),
                    Me("mouseUsed")),
                    (Le = setTimeout(function () {
                        Le = null;
                    }, 100));
            },
            ze = function () {
                o.bind(document, "keydown", a),
                    _.transform && o.bind(a.scrollWrap, "click", a),
                    r.mouseUsed || o.bind(document, "mousemove", _e),
                    o.bind(window, "resize scroll", a),
                    Me("bindEvents");
            },
            Ne = function () {
                o.unbind(window, "resize", a),
                    o.unbind(window, "scroll", h.scroll),
                    o.unbind(document, "keydown", a),
                    o.unbind(document, "mousemove", _e),
                    _.transform && o.unbind(a.scrollWrap, "click", a),
                    W && o.unbind(window, m, a),
                    Me("unbindEvents");
            },
            Ue = function (e, t) {
                var n = tn(a.currItem, pe, e);
                return t && (ee = n), n;
            },
            He = function (e) {
                return e || (e = a.currItem), e.initialZoomLevel;
            },
            Ye = function (e) {
                return e || (e = a.currItem), e.w > 0 ? r.maxSpreadZoom : 1;
            },
            Be = function (e, t, n, i) {
                return i === a.currItem.initialZoomLevel
                    ? ((n[e] = a.currItem.initialPosition[e]), !0)
                    : ((n[e] = Ze(e, i)),
                      n[e] > t.min[e]
                          ? ((n[e] = t.min[e]), !0)
                          : n[e] < t.max[e] && ((n[e] = t.max[e]), !0));
            },
            We = function () {
                if (A) {
                    var t = _.perspective && !O;
                    return (
                        (v = "translate" + (t ? "3d(" : "(")),
                        void (g = _.perspective ? ", 0px)" : ")")
                    );
                }
                (A = "left"),
                    o.addClass(e, "pswp--ie"),
                    (ke = function (e, t) {
                        t.left = e + "px";
                    }),
                    (Oe = function (e) {
                        var t = e.fitRatio > 1 ? 1 : e.fitRatio,
                            n = e.container.style,
                            i = t * e.w,
                            o = t * e.h;
                        (n.width = i + "px"),
                            (n.height = o + "px"),
                            (n.left = e.initialPosition.x + "px"),
                            (n.top = e.initialPosition.y + "px");
                    }),
                    (Ee = function () {
                        if (te) {
                            var e = te,
                                t = a.currItem,
                                n = t.fitRatio > 1 ? 1 : t.fitRatio,
                                i = n * t.w,
                                o = n * t.h;
                            (e.width = i + "px"),
                                (e.height = o + "px"),
                                (e.left = de.x + "px"),
                                (e.top = de.y + "px");
                        }
                    });
            },
            Ge = function (e) {
                var t = "";
                r.escKey && 27 === e.keyCode
                    ? (t = "close")
                    : r.arrowKeys &&
                      (37 === e.keyCode
                          ? (t = "prev")
                          : 39 === e.keyCode && (t = "next")),
                    t &&
                        (e.ctrlKey ||
                            e.altKey ||
                            e.shiftKey ||
                            e.metaKey ||
                            (e.preventDefault
                                ? e.preventDefault()
                                : (e.returnValue = !1),
                            a[t]()));
            },
            Xe = function (e) {
                e &&
                    (V || X || ne || Y) &&
                    (e.preventDefault(), e.stopPropagation());
            },
            Ve = function () {
                a.setScrollOffset(0, o.getScrollY());
            },
            Ke = {},
            qe = 0,
            $e = function (e) {
                Ke[e] && (Ke[e].raf && R(Ke[e].raf), qe--, delete Ke[e]);
            },
            je = function (e) {
                Ke[e] && $e(e), Ke[e] || (qe++, (Ke[e] = {}));
            },
            Je = function () {
                for (var e in Ke) Ke.hasOwnProperty(e) && $e(e);
            },
            Qe = function (e, t, n, i, o, a, r) {
                var l,
                    s = Te();
                je(e);
                var u = function () {
                    if (Ke[e]) {
                        if ((l = Te() - s) >= i)
                            return $e(e), a(n), void (r && r());
                        a((n - t) * o(l / i) + t), (Ke[e].raf = k(u));
                    }
                };
                u();
            },
            et = {
                shout: Me,
                listen: De,
                viewportSize: pe,
                options: r,
                isMainScrollAnimating: function () {
                    return ne;
                },
                getZoomLevel: function () {
                    return y;
                },
                getCurrentIndex: function () {
                    return c;
                },
                isDragging: function () {
                    return W;
                },
                isZooming: function () {
                    return j;
                },
                setScrollOffset: function (e, t) {
                    (fe.x = e), (L = fe.y = t), Me("updateScrollOffset", fe);
                },
                applyZoomPan: function (e, t, n, i) {
                    (de.x = t), (de.y = n), (y = e), Ee(i);
                },
                init: function () {
                    if (!l && !s) {
                        var n;
                        (a.framework = o),
                            (a.template = e),
                            (a.bg = o.getChildByClass(e, "pswp__bg")),
                            (Z = e.className),
                            (l = !0),
                            (_ = o.detectFeatures()),
                            (k = _.raf),
                            (R = _.caf),
                            (A = _.transform),
                            (F = _.oldIE),
                            (a.scrollWrap = o.getChildByClass(
                                e,
                                "pswp__scroll-wrap"
                            )),
                            (a.container = o.getChildByClass(
                                a.scrollWrap,
                                "pswp__container"
                            )),
                            (d = a.container.style),
                            (a.itemHolders = I =
                                [
                                    {
                                        el: a.container.children[0],
                                        wrap: 0,
                                        index: -1,
                                    },
                                    {
                                        el: a.container.children[1],
                                        wrap: 0,
                                        index: -1,
                                    },
                                    {
                                        el: a.container.children[2],
                                        wrap: 0,
                                        index: -1,
                                    },
                                ]),
                            (I[0].el.style.display = I[2].el.style.display =
                                "none"),
                            We(),
                            (h = {
                                resize: a.updateSize,
                                scroll: Ve,
                                keydown: Ge,
                                click: Xe,
                            });
                        var i =
                            _.isOldIOSPhone ||
                            _.isOldAndroid ||
                            _.isMobileOpera;
                        for (
                            (_.animationName && _.transform && !i) ||
                                (r.showAnimationDuration =
                                    r.hideAnimationDuration =
                                        0),
                                n = 0;
                            n < ve.length;
                            n++
                        )
                            a["init" + ve[n]]();
                        t && (a.ui = new t(a, o)).init(),
                            Me("firstUpdate"),
                            (c = c || r.index || 0),
                            (isNaN(c) || c < 0 || c >= Kt()) && (c = 0),
                            (a.currItem = Vt(c)),
                            (_.isOldIOSPhone || _.isOldAndroid) && (xe = !1),
                            e.setAttribute("aria-hidden", "false"),
                            r.modal &&
                                (xe
                                    ? (e.style.position = "fixed")
                                    : ((e.style.position = "absolute"),
                                      (e.style.top = o.getScrollY() + "px"))),
                            L === undefined &&
                                (Me("initialLayout"), (L = P = o.getScrollY()));
                        var u = "pswp--open ";
                        for (
                            r.mainClass && (u += r.mainClass + " "),
                                r.showHideOpacity &&
                                    (u += "pswp--animate_opacity "),
                                u += O ? "pswp--touch" : "pswp--notouch",
                                u += _.animationName
                                    ? " pswp--css_animation"
                                    : "",
                                u += _.svg ? " pswp--svg" : "",
                                o.addClass(e, u),
                                a.updateSize(),
                                p = -1,
                                ye = null,
                                n = 0;
                            n < 3;
                            n++
                        )
                            ke((n + p) * he.x, I[n].el.style);
                        F || o.bind(a.scrollWrap, f, a),
                            De("initialZoomInEnd", function () {
                                a.setContent(I[0], c - 1),
                                    a.setContent(I[2], c + 1),
                                    (I[0].el.style.display =
                                        I[2].el.style.display =
                                            "block"),
                                    r.focus && e.focus(),
                                    ze();
                            }),
                            a.setContent(I[1], c),
                            a.updateCurrItem(),
                            Me("afterInit"),
                            xe ||
                                (w = setInterval(function () {
                                    qe ||
                                        W ||
                                        j ||
                                        y !== a.currItem.initialZoomLevel ||
                                        a.updateSize();
                                }, 1e3)),
                            o.addClass(e, "pswp--visible");
                    }
                },
                close: function () {
                    l &&
                        ((l = !1),
                        (s = !0),
                        Me("close"),
                        Ne(),
                        $t(a.currItem, null, !0, a.destroy));
                },
                destroy: function () {
                    Me("destroy"),
                        Bt && clearTimeout(Bt),
                        e.setAttribute("aria-hidden", "true"),
                        (e.className = Z),
                        w && clearInterval(w),
                        o.unbind(a.scrollWrap, f, a),
                        o.unbind(window, "scroll", a),
                        gt(),
                        Je(),
                        (Ce = null);
                },
                panTo: function (e, t, n) {
                    n ||
                        (e > ee.min.x
                            ? (e = ee.min.x)
                            : e < ee.max.x && (e = ee.max.x),
                        t > ee.min.y
                            ? (t = ee.min.y)
                            : t < ee.max.y && (t = ee.max.y)),
                        (de.x = e),
                        (de.y = t),
                        Ee();
                },
                handleEvent: function (e) {
                    (e = e || window.event), h[e.type] && h[e.type](e);
                },
                goTo: function (e) {
                    var t = (e = Ie(e)) - c;
                    (ye = t),
                        (c = e),
                        (a.currItem = Vt(c)),
                        (me -= t),
                        Re(he.x * me),
                        Je(),
                        (ne = !1),
                        a.updateCurrItem();
                },
                next: function () {
                    a.goTo(c + 1);
                },
                prev: function () {
                    a.goTo(c - 1);
                },
                updateCurrZoomItem: function (e) {
                    if ((e && Me("beforeChange", 0), I[1].el.children.length)) {
                        var t = I[1].el.children[0];
                        te = o.hasClass(t, "pswp__zoom-wrap") ? t.style : null;
                    } else te = null;
                    (ee = a.currItem.bounds),
                        (x = y = a.currItem.initialZoomLevel),
                        (de.x = ee.center.x),
                        (de.y = ee.center.y),
                        e && Me("afterChange");
                },
                invalidateCurrItems: function () {
                    b = !0;
                    for (var e = 0; e < 3; e++)
                        I[e].item && (I[e].item.needsUpdate = !0);
                },
                updateCurrItem: function (e) {
                    if (0 !== ye) {
                        var t,
                            n = Math.abs(ye);
                        if (!(e && n < 2)) {
                            (a.currItem = Vt(c)),
                                (we = !1),
                                Me("beforeChange", ye),
                                n >= 3 &&
                                    ((p += ye + (ye > 0 ? -3 : 3)), (n = 3));
                            for (var i = 0; i < n; i++)
                                ye > 0
                                    ? ((t = I.shift()),
                                      (I[2] = t),
                                      ke((++p + 2) * he.x, t.el.style),
                                      a.setContent(t, c - n + i + 1 + 1))
                                    : ((t = I.pop()),
                                      I.unshift(t),
                                      ke(--p * he.x, t.el.style),
                                      a.setContent(t, c + n - i - 1 - 1));
                            if (te && 1 === Math.abs(ye)) {
                                var o = Vt(C);
                                o.initialZoomLevel !== y &&
                                    (tn(o, pe), rn(o), Oe(o));
                            }
                            (ye = 0),
                                a.updateCurrZoomItem(),
                                (C = c),
                                Me("afterChange");
                        }
                    }
                },
                updateSize: function (t) {
                    if (!xe && r.modal) {
                        var n = o.getScrollY();
                        if (
                            (L !== n && ((e.style.top = n + "px"), (L = n)),
                            !t &&
                                ge.x === window.innerWidth &&
                                ge.y === window.innerHeight)
                        )
                            return;
                        (ge.x = window.innerWidth),
                            (ge.y = window.innerHeight),
                            (e.style.height = ge.y + "px");
                    }
                    if (
                        ((pe.x = a.scrollWrap.clientWidth),
                        (pe.y = a.scrollWrap.clientHeight),
                        Ve(),
                        (he.x = pe.x + Math.round(pe.x * r.spacing)),
                        (he.y = pe.y),
                        Re(he.x * me),
                        Me("beforeResize"),
                        p !== undefined)
                    ) {
                        for (var i, l, s, u = 0; u < 3; u++)
                            (i = I[u]),
                                ke((u + p) * he.x, i.el.style),
                                (s = c + u - 1),
                                r.loop && Kt() > 2 && (s = Ie(s)),
                                (l = Vt(s)) && (b || l.needsUpdate || !l.bounds)
                                    ? (a.cleanSlide(l),
                                      a.setContent(i, s),
                                      1 === u &&
                                          ((a.currItem = l),
                                          a.updateCurrZoomItem(!0)),
                                      (l.needsUpdate = !1))
                                    : -1 === i.index &&
                                      s >= 0 &&
                                      a.setContent(i, s),
                                l && l.container && (tn(l, pe), rn(l), Oe(l));
                        b = !1;
                    }
                    (x = y = a.currItem.initialZoomLevel),
                        (ee = a.currItem.bounds) &&
                            ((de.x = ee.center.x),
                            (de.y = ee.center.y),
                            Ee(!0)),
                        Me("resize");
                },
                zoomTo: function (e, t, n, i, a) {
                    t &&
                        ((x = y),
                        (ft.x = Math.abs(t.x) - de.x),
                        (ft.y = Math.abs(t.y) - de.y),
                        Pe(ce, de));
                    var r = Ue(e, !1),
                        l = {};
                    Be("x", r, l, e), Be("y", r, l, e);
                    var s = y,
                        u = { x: de.x, y: de.y };
                    Fe(l);
                    var c = function (t) {
                        1 === t
                            ? ((y = e), (de.x = l.x), (de.y = l.y))
                            : ((y = (e - s) * t + s),
                              (de.x = (l.x - u.x) * t + u.x),
                              (de.y = (l.y - u.y) * t + u.y)),
                            a && a(t),
                            Ee(1 === t);
                    };
                    n
                        ? Qe(
                              "customZoomTo",
                              0,
                              1,
                              n,
                              i || o.easing.sine.inOut,
                              c
                          )
                        : c(1);
                },
            },
            tt = {},
            nt = {},
            it = {},
            ot = {},
            at = {},
            rt = [],
            lt = {},
            st = [],
            ut = {},
            ct = 0,
            dt = { x: 0, y: 0 },
            pt = 0,
            mt = { x: 0, y: 0 },
            ft = { x: 0, y: 0 },
            ht = { x: 0, y: 0 },
            yt = function (e, t) {
                return e.x === t.x && e.y === t.y;
            },
            xt = function (e, t) {
                return Math.abs(e.x - t.x) < 25 && Math.abs(e.y - t.y) < 25;
            },
            vt = function (e, t) {
                return (
                    (ut.x = Math.abs(e.x - t.x)),
                    (ut.y = Math.abs(e.y - t.y)),
                    Math.sqrt(ut.x * ut.x + ut.y * ut.y)
                );
            },
            gt = function () {
                K && (R(K), (K = null));
            },
            wt = function () {
                W && ((K = k(wt)), Lt());
            },
            bt = function () {
                return !(
                    "fit" === r.scaleMode && y === a.currItem.initialZoomLevel
                );
            },
            It = function (e, t) {
                return (
                    !(!e || e === document) &&
                    !(
                        e.getAttribute("class") &&
                        e.getAttribute("class").indexOf("pswp__scroll-wrap") >
                            -1
                    ) &&
                    (t(e) ? e : It(e.parentNode, t))
                );
            },
            Ct = {},
            Dt = function (e, t) {
                return (
                    (Ct.prevent = !It(e.target, r.isClickableElement)),
                    Me("preventDragEvent", e, t, Ct),
                    Ct.prevent
                );
            },
            Mt = function (e, t) {
                return (
                    (t.x = e.pageX), (t.y = e.pageY), (t.id = e.identifier), t
                );
            },
            Tt = function (e, t, n) {
                (n.x = 0.5 * (e.x + t.x)), (n.y = 0.5 * (e.y + t.y));
            },
            St = function (e, t, n) {
                if (e - N > 50) {
                    var i = st.length > 2 ? st.shift() : {};
                    (i.x = t), (i.y = n), st.push(i), (N = e);
                }
            },
            At = function () {
                var e = de.y - a.currItem.initialPosition.y;
                return 1 - Math.abs(e / (pe.y / 2));
            },
            Et = {},
            Ot = {},
            kt = [],
            Rt = function (e) {
                for (; kt.length > 0; ) kt.pop();
                return (
                    E
                        ? ((se = 0),
                          rt.forEach(function (e) {
                              0 === se ? (kt[0] = e) : 1 === se && (kt[1] = e),
                                  se++;
                          }))
                        : e.type.indexOf("touch") > -1
                        ? e.touches &&
                          e.touches.length > 0 &&
                          ((kt[0] = Mt(e.touches[0], Et)),
                          e.touches.length > 1 &&
                              (kt[1] = Mt(e.touches[1], Ot)))
                        : ((Et.x = e.pageX),
                          (Et.y = e.pageY),
                          (Et.id = ""),
                          (kt[0] = Et)),
                    kt
                );
            },
            Zt = function (e, t) {
                var n,
                    i,
                    o,
                    l,
                    s = de[e] + t[e],
                    u = t[e] > 0,
                    c = mt.x + t.x,
                    d = mt.x - lt.x;
                if (
                    ((n =
                        s > ee.min[e] || s < ee.max[e] ? r.panEndFriction : 1),
                    (s = de[e] + t[e] * n),
                    (r.allowPanToNext || y === a.currItem.initialZoomLevel) &&
                        (te
                            ? "h" !== ie ||
                              "x" !== e ||
                              X ||
                              (u
                                  ? (s > ee.min[e] &&
                                        ((n = r.panEndFriction),
                                        ee.min[e],
                                        (i = ee.min[e] - ce[e])),
                                    (i <= 0 || d < 0) && Kt() > 1
                                        ? ((l = c),
                                          d < 0 && c > lt.x && (l = lt.x))
                                        : ee.min.x !== ee.max.x && (o = s))
                                  : (s < ee.max[e] &&
                                        ((n = r.panEndFriction),
                                        ee.max[e],
                                        (i = ce[e] - ee.max[e])),
                                    (i <= 0 || d > 0) && Kt() > 1
                                        ? ((l = c),
                                          d > 0 && c < lt.x && (l = lt.x))
                                        : ee.min.x !== ee.max.x && (o = s)))
                            : (l = c),
                        "x" === e))
                )
                    return (
                        l !== undefined && (Re(l, !0), (q = l !== lt.x)),
                        ee.min.x !== ee.max.x &&
                            (o !== undefined
                                ? (de.x = o)
                                : q || (de.x += t.x * n)),
                        l !== undefined
                    );
                ne || q || (y > a.currItem.fitRatio && (de[e] += t[e] * n));
            },
            Pt = function (e) {
                if (!("mousedown" === e.type && e.button > 0))
                    if (Xt) e.preventDefault();
                    else if (!B || "mousedown" !== e.type) {
                        if (
                            (Dt(e, !0) && e.preventDefault(),
                            Me("pointerDown"),
                            E)
                        ) {
                            var t = o.arraySearch(rt, e.pointerId, "id");
                            t < 0 && (t = rt.length),
                                (rt[t] = {
                                    x: e.pageX,
                                    y: e.pageY,
                                    id: e.pointerId,
                                });
                        }
                        var n = Rt(e),
                            i = n.length;
                        ($ = null),
                            Je(),
                            (W && 1 !== i) ||
                                ((W = oe = !0),
                                o.bind(window, m, a),
                                (H = le = ae = Y = q = V = G = X = !1),
                                (ie = null),
                                Me("firstTouchStart", n),
                                Pe(ce, de),
                                (ue.x = ue.y = 0),
                                Pe(ot, n[0]),
                                Pe(at, ot),
                                (lt.x = he.x * me),
                                (st = [{ x: ot.x, y: ot.y }]),
                                (N = z = Te()),
                                Ue(y, !0),
                                gt(),
                                wt()),
                            !j &&
                                i > 1 &&
                                !ne &&
                                !q &&
                                ((x = y),
                                (X = !1),
                                (j = G = !0),
                                (ue.y = ue.x = 0),
                                Pe(ce, de),
                                Pe(tt, n[0]),
                                Pe(nt, n[1]),
                                Tt(tt, nt, ht),
                                (ft.x = Math.abs(ht.x) - de.x),
                                (ft.y = Math.abs(ht.y) - de.y),
                                (J = Q = vt(tt, nt)));
                    }
            },
            Ft = function (e) {
                if ((e.preventDefault(), E)) {
                    var t = o.arraySearch(rt, e.pointerId, "id");
                    if (t > -1) {
                        var n = rt[t];
                        (n.x = e.pageX), (n.y = e.pageY);
                    }
                }
                if (W) {
                    var i = Rt(e);
                    if (ie || V || j) $ = i;
                    else if (mt.x !== he.x * me) ie = "h";
                    else {
                        var a =
                            Math.abs(i[0].x - ot.x) - Math.abs(i[0].y - ot.y);
                        Math.abs(a) >= 10 &&
                            ((ie = a > 0 ? "h" : "v"), ($ = i));
                    }
                }
            },
            Lt = function () {
                if ($) {
                    var e = $.length;
                    if (0 !== e)
                        if (
                            (Pe(tt, $[0]),
                            (it.x = tt.x - ot.x),
                            (it.y = tt.y - ot.y),
                            j && e > 1)
                        ) {
                            if (
                                ((ot.x = tt.x),
                                (ot.y = tt.y),
                                !it.x && !it.y && yt($[1], nt))
                            )
                                return;
                            Pe(nt, $[1]),
                                X || ((X = !0), Me("zoomGestureStarted"));
                            var t = vt(tt, nt),
                                n = Ht(t);
                            n >
                                a.currItem.initialZoomLevel +
                                    a.currItem.initialZoomLevel / 15 &&
                                (le = !0);
                            var i = 1,
                                o = He(),
                                l = Ye();
                            if (n < o)
                                if (
                                    r.pinchToClose &&
                                    !le &&
                                    x <= a.currItem.initialZoomLevel
                                ) {
                                    var s = 1 - (o - n) / (o / 1.2);
                                    Se(s), Me("onPinchClose", s), (ae = !0);
                                } else
                                    (i = (o - n) / o) > 1 && (i = 1),
                                        (n = o - i * (o / 3));
                            else
                                n > l &&
                                    ((i = (n - l) / (6 * o)) > 1 && (i = 1),
                                    (n = l + i * o));
                            i < 0 && (i = 0),
                                (J = t),
                                Tt(tt, nt, dt),
                                (ue.x += dt.x - ht.x),
                                (ue.y += dt.y - ht.y),
                                Pe(ht, dt),
                                (de.x = Ze("x", n)),
                                (de.y = Ze("y", n)),
                                (H = n > y),
                                (y = n),
                                Ee();
                        } else {
                            if (!ie) return;
                            if (
                                (oe &&
                                    ((oe = !1),
                                    Math.abs(it.x) >= 10 &&
                                        (it.x -= $[0].x - at.x),
                                    Math.abs(it.y) >= 10 &&
                                        (it.y -= $[0].y - at.y)),
                                (ot.x = tt.x),
                                (ot.y = tt.y),
                                0 === it.x && 0 === it.y)
                            )
                                return;
                            if ("v" === ie && r.closeOnVerticalDrag && !bt()) {
                                (ue.y += it.y), (de.y += it.y);
                                var u = At();
                                return (
                                    (Y = !0),
                                    Me("onVerticalDrag", u),
                                    Se(u),
                                    void Ee()
                                );
                            }
                            St(Te(), tt.x, tt.y),
                                (V = !0),
                                (ee = a.currItem.bounds),
                                Zt("x", it) || (Zt("y", it), Fe(de), Ee());
                        }
                }
            },
            _t = function (e) {
                if (_.isOldAndroid) {
                    if (B && "mouseup" === e.type) return;
                    e.type.indexOf("touch") > -1 &&
                        (clearTimeout(B),
                        (B = setTimeout(function () {
                            B = 0;
                        }, 600)));
                }
                Me("pointerUp"), Dt(e, !1) && e.preventDefault();
                var t;
                if (E) {
                    var n = o.arraySearch(rt, e.pointerId, "id");
                    if (n > -1)
                        if (
                            ((t = rt.splice(n, 1)[0]), navigator.pointerEnabled)
                        )
                            t.type = e.pointerType || "mouse";
                        else {
                            var i = { 4: "mouse", 2: "touch", 3: "pen" };
                            (t.type = i[e.pointerType]),
                                t.type || (t.type = e.pointerType || "mouse");
                        }
                }
                var l,
                    s = Rt(e),
                    u = s.length;
                if (("mouseup" === e.type && (u = 0), 2 === u))
                    return ($ = null), !0;
                1 === u && Pe(at, s[0]),
                    0 !== u ||
                        ie ||
                        ne ||
                        (t ||
                            ("mouseup" === e.type
                                ? (t = {
                                      x: e.pageX,
                                      y: e.pageY,
                                      type: "mouse",
                                  })
                                : e.changedTouches &&
                                  e.changedTouches[0] &&
                                  (t = {
                                      x: e.changedTouches[0].pageX,
                                      y: e.changedTouches[0].pageY,
                                      type: "touch",
                                  })),
                        Me("touchRelease", e, t));
                var c = -1;
                if (
                    (0 === u &&
                        ((W = !1),
                        o.unbind(window, m, a),
                        gt(),
                        j ? (c = 0) : -1 !== pt && (c = Te() - pt)),
                    (pt = 1 === u ? Te() : -1),
                    (l = -1 !== c && c < 150 ? "zoom" : "swipe"),
                    j &&
                        u < 2 &&
                        ((j = !1),
                        1 === u && (l = "zoomPointerUp"),
                        Me("zoomGestureEnded")),
                    ($ = null),
                    V || X || ne || Y)
                )
                    if ((Je(), U || (U = zt()), U.calculateSwipeSpeed("x"), Y))
                        if (At() < r.verticalDragRange) a.close();
                        else {
                            var d = de.y,
                                p = re;
                            Qe(
                                "verticalDrag",
                                0,
                                1,
                                300,
                                o.easing.cubic.out,
                                function (e) {
                                    (de.y =
                                        (a.currItem.initialPosition.y - d) * e +
                                        d),
                                        Se((1 - p) * e + p),
                                        Ee();
                                }
                            ),
                                Me("onVerticalDrag", 1);
                        }
                    else {
                        if ((q || ne) && 0 === u) {
                            if (Ut(l, U)) return;
                            l = "zoomPointerUp";
                        }
                        ne ||
                            ("swipe" === l
                                ? !q && y > a.currItem.fitRatio && Nt(U)
                                : Yt());
                    }
            },
            zt = function () {
                var e,
                    t,
                    n = {
                        lastFlickOffset: {},
                        lastFlickDist: {},
                        lastFlickSpeed: {},
                        slowDownRatio: {},
                        slowDownRatioReverse: {},
                        speedDecelerationRatio: {},
                        speedDecelerationRatioAbs: {},
                        distanceOffset: {},
                        backAnimDestination: {},
                        backAnimStarted: {},
                        calculateSwipeSpeed: function (i) {
                            st.length > 1
                                ? ((e = Te() - N + 50),
                                  (t = st[st.length - 2][i]))
                                : ((e = Te() - z), (t = at[i])),
                                (n.lastFlickOffset[i] = ot[i] - t),
                                (n.lastFlickDist[i] = Math.abs(
                                    n.lastFlickOffset[i]
                                )),
                                n.lastFlickDist[i] > 20
                                    ? (n.lastFlickSpeed[i] =
                                          n.lastFlickOffset[i] / e)
                                    : (n.lastFlickSpeed[i] = 0),
                                Math.abs(n.lastFlickSpeed[i]) < 0.1 &&
                                    (n.lastFlickSpeed[i] = 0),
                                (n.slowDownRatio[i] = 0.95),
                                (n.slowDownRatioReverse[i] =
                                    1 - n.slowDownRatio[i]),
                                (n.speedDecelerationRatio[i] = 1);
                        },
                        calculateOverBoundsAnimOffset: function (e, t) {
                            n.backAnimStarted[e] ||
                                (de[e] > ee.min[e]
                                    ? (n.backAnimDestination[e] = ee.min[e])
                                    : de[e] < ee.max[e] &&
                                      (n.backAnimDestination[e] = ee.max[e]),
                                n.backAnimDestination[e] !== undefined &&
                                    ((n.slowDownRatio[e] = 0.7),
                                    (n.slowDownRatioReverse[e] =
                                        1 - n.slowDownRatio[e]),
                                    n.speedDecelerationRatioAbs[e] < 0.05 &&
                                        ((n.lastFlickSpeed[e] = 0),
                                        (n.backAnimStarted[e] = !0),
                                        Qe(
                                            "bounceZoomPan" + e,
                                            de[e],
                                            n.backAnimDestination[e],
                                            t || 300,
                                            o.easing.sine.out,
                                            function (t) {
                                                (de[e] = t), Ee();
                                            }
                                        ))));
                        },
                        calculateAnimOffset: function (e) {
                            n.backAnimStarted[e] ||
                                ((n.speedDecelerationRatio[e] =
                                    n.speedDecelerationRatio[e] *
                                    (n.slowDownRatio[e] +
                                        n.slowDownRatioReverse[e] -
                                        (n.slowDownRatioReverse[e] *
                                            n.timeDiff) /
                                            10)),
                                (n.speedDecelerationRatioAbs[e] = Math.abs(
                                    n.lastFlickSpeed[e] *
                                        n.speedDecelerationRatio[e]
                                )),
                                (n.distanceOffset[e] =
                                    n.lastFlickSpeed[e] *
                                    n.speedDecelerationRatio[e] *
                                    n.timeDiff),
                                (de[e] += n.distanceOffset[e]));
                        },
                        panAnimLoop: function () {
                            if (
                                Ke.zoomPan &&
                                ((Ke.zoomPan.raf = k(n.panAnimLoop)),
                                (n.now = Te()),
                                (n.timeDiff = n.now - n.lastNow),
                                (n.lastNow = n.now),
                                n.calculateAnimOffset("x"),
                                n.calculateAnimOffset("y"),
                                Ee(),
                                n.calculateOverBoundsAnimOffset("x"),
                                n.calculateOverBoundsAnimOffset("y"),
                                n.speedDecelerationRatioAbs.x < 0.05 &&
                                    n.speedDecelerationRatioAbs.y < 0.05)
                            )
                                return (
                                    (de.x = Math.round(de.x)),
                                    (de.y = Math.round(de.y)),
                                    Ee(),
                                    void $e("zoomPan")
                                );
                        },
                    };
                return n;
            },
            Nt = function (e) {
                if (
                    (e.calculateSwipeSpeed("y"),
                    (ee = a.currItem.bounds),
                    (e.backAnimDestination = {}),
                    (e.backAnimStarted = {}),
                    Math.abs(e.lastFlickSpeed.x) <= 0.05 &&
                        Math.abs(e.lastFlickSpeed.y) <= 0.05)
                )
                    return (
                        (e.speedDecelerationRatioAbs.x =
                            e.speedDecelerationRatioAbs.y =
                                0),
                        e.calculateOverBoundsAnimOffset("x"),
                        e.calculateOverBoundsAnimOffset("y"),
                        !0
                    );
                je("zoomPan"), (e.lastNow = Te()), e.panAnimLoop();
            },
            Ut = function (e, t) {
                var n;
                ne || (ct = c);
                var i;
                if ("swipe" === e) {
                    var l = ot.x - at.x,
                        s = t.lastFlickDist.x < 10;
                    l > 30 && (s || t.lastFlickOffset.x > 20)
                        ? (i = -1)
                        : l < -30 &&
                          (s || t.lastFlickOffset.x < -20) &&
                          (i = 1);
                }
                var u;
                i &&
                    ((c += i) < 0
                        ? ((c = r.loop ? Kt() - 1 : 0), (u = !0))
                        : c >= Kt() && ((c = r.loop ? 0 : Kt() - 1), (u = !0)),
                    (u && !r.loop) || ((ye += i), (me -= i), (n = !0)));
                var d,
                    p = he.x * me,
                    m = Math.abs(p - mt.x);
                return (
                    n || p > mt.x == t.lastFlickSpeed.x > 0
                        ? ((d =
                              Math.abs(t.lastFlickSpeed.x) > 0
                                  ? m / Math.abs(t.lastFlickSpeed.x)
                                  : 333),
                          (d = Math.min(d, 400)),
                          (d = Math.max(d, 250)))
                        : (d = 333),
                    ct === c && (n = !1),
                    (ne = !0),
                    Me("mainScrollAnimStart"),
                    Qe(
                        "mainScroll",
                        mt.x,
                        p,
                        d,
                        o.easing.cubic.out,
                        Re,
                        function () {
                            Je(),
                                (ne = !1),
                                (ct = -1),
                                (n || ct !== c) && a.updateCurrItem(),
                                Me("mainScrollAnimComplete");
                        }
                    ),
                    n && a.updateCurrItem(!0),
                    n
                );
            },
            Ht = function (e) {
                return (1 / Q) * e * x;
            },
            Yt = function () {
                var e = y,
                    t = He(),
                    n = Ye();
                y < t ? (e = t) : y > n && (e = n);
                var i,
                    r = re;
                return ae && !H && !le && y < t
                    ? (a.close(), !0)
                    : (ae &&
                          (i = function (e) {
                              Se((1 - r) * e + r);
                          }),
                      a.zoomTo(e, 0, 200, o.easing.cubic.out, i),
                      !0);
            };
        be("Gestures", {
            publicMethods: {
                initGestures: function () {
                    var e = function (e, t, n, i, o) {
                        (D = e + t),
                            (M = e + n),
                            (T = e + i),
                            (S = o ? e + o : "");
                    };
                    (E = _.pointerEvent) && _.touch && (_.touch = !1),
                        E
                            ? navigator.pointerEnabled
                                ? e("pointer", "down", "move", "up", "cancel")
                                : e("MSPointer", "Down", "Move", "Up", "Cancel")
                            : _.touch
                            ? (e("touch", "start", "move", "end", "cancel"),
                              (O = !0))
                            : e("mouse", "down", "move", "up"),
                        (m = M + " " + T + " " + S),
                        (f = D),
                        E &&
                            !O &&
                            (O =
                                navigator.maxTouchPoints > 1 ||
                                navigator.msMaxTouchPoints > 1),
                        (a.likelyTouchDevice = O),
                        (h[D] = Pt),
                        (h[M] = Ft),
                        (h[T] = _t),
                        S && (h[S] = h[T]),
                        _.touch &&
                            ((f += " mousedown"),
                            (m += " mousemove mouseup"),
                            (h.mousedown = h[D]),
                            (h.mousemove = h[M]),
                            (h.mouseup = h[T])),
                        O || (r.allowPanToNext = !1);
                },
            },
        });
        var Bt,
            Wt,
            Gt,
            Xt,
            Vt,
            Kt,
            qt,
            $t = function (t, n, i, l) {
                Bt && clearTimeout(Bt), (Xt = !0), (Gt = !0);
                var s;
                t.initialLayout
                    ? ((s = t.initialLayout), (t.initialLayout = null))
                    : (s = r.getThumbBoundsFn && r.getThumbBoundsFn(c));
                var d = i ? r.hideAnimationDuration : r.showAnimationDuration,
                    p = function () {
                        $e("initialZoom"),
                            i
                                ? (a.template.removeAttribute("style"),
                                  a.bg.removeAttribute("style"))
                                : (Se(1),
                                  n && (n.style.display = "block"),
                                  o.addClass(e, "pswp--animated-in"),
                                  Me("initialZoom" + (i ? "OutEnd" : "InEnd"))),
                            l && l(),
                            (Xt = !1);
                    };
                if (!d || !s || s.x === undefined)
                    return (
                        Me("initialZoom" + (i ? "Out" : "In")),
                        (y = t.initialZoomLevel),
                        Pe(de, t.initialPosition),
                        Ee(),
                        (e.style.opacity = i ? 0 : 1),
                        Se(1),
                        void (d
                            ? setTimeout(function () {
                                  p();
                              }, d)
                            : p())
                    );
                !(function () {
                    var n = u,
                        l =
                            !a.currItem.src ||
                            a.currItem.loadError ||
                            r.showHideOpacity;
                    t.miniImg &&
                        (t.miniImg.style.webkitBackfaceVisibility = "hidden"),
                        i ||
                            ((y = s.w / t.w),
                            (de.x = s.x),
                            (de.y = s.y - P),
                            (a[l ? "template" : "bg"].style.opacity = 0.001),
                            Ee()),
                        je("initialZoom"),
                        i && !n && o.removeClass(e, "pswp--animated-in"),
                        l &&
                            (i
                                ? o[(n ? "remove" : "add") + "Class"](
                                      e,
                                      "pswp--animate_opacity"
                                  )
                                : setTimeout(function () {
                                      o.addClass(e, "pswp--animate_opacity");
                                  }, 30)),
                        (Bt = setTimeout(
                            function () {
                                if (
                                    (Me("initialZoom" + (i ? "Out" : "In")), i)
                                ) {
                                    var a = s.w / t.w,
                                        r = { x: de.x, y: de.y },
                                        u = y,
                                        c = re,
                                        m = function (t) {
                                            1 === t
                                                ? ((y = a),
                                                  (de.x = s.x),
                                                  (de.y = s.y - L))
                                                : ((y = (a - u) * t + u),
                                                  (de.x =
                                                      (s.x - r.x) * t + r.x),
                                                  (de.y =
                                                      (s.y - L - r.y) * t +
                                                      r.y)),
                                                Ee(),
                                                l
                                                    ? (e.style.opacity = 1 - t)
                                                    : Se(c - t * c);
                                        };
                                    n
                                        ? Qe(
                                              "initialZoom",
                                              0,
                                              1,
                                              d,
                                              o.easing.cubic.out,
                                              m,
                                              p
                                          )
                                        : (m(1), (Bt = setTimeout(p, d + 20)));
                                } else
                                    (y = t.initialZoomLevel),
                                        Pe(de, t.initialPosition),
                                        Ee(),
                                        Se(1),
                                        l ? (e.style.opacity = 1) : Se(1),
                                        (Bt = setTimeout(p, d + 20));
                            },
                            i ? 25 : 90
                        ));
                })();
            },
            jt = {},
            Jt = [],
            Qt = {
                index: 0,
                errorMsg:
                    '<div class="pswp__error-msg"><a href="%url%" target="_blank">The image</a> could not be loaded.</div>',
                forceProgressiveLoading: !1,
                preload: [1, 1],
                getNumItemsFn: function () {
                    return Wt.length;
                },
            },
            en = function (e, t, n) {
                var i = e.bounds;
                (i.center.x = Math.round((jt.x - t) / 2)),
                    (i.center.y = Math.round((jt.y - n) / 2) + e.vGap.top),
                    (i.max.x = t > jt.x ? Math.round(jt.x - t) : i.center.x),
                    (i.max.y =
                        n > jt.y
                            ? Math.round(jt.y - n) + e.vGap.top
                            : i.center.y),
                    (i.min.x = t > jt.x ? 0 : i.center.x),
                    (i.min.y = n > jt.y ? e.vGap.top : i.center.y);
            },
            tn = function (e, t, n) {
                if (e.src && !e.loadError) {
                    var i = !n;
                    if (
                        (i &&
                            (e.vGap || (e.vGap = { top: 0, bottom: 0 }),
                            Me("parseVerticalMargin", e)),
                        (jt.x = t.x),
                        (jt.y = t.y - e.vGap.top - e.vGap.bottom),
                        i)
                    ) {
                        var o = jt.x / e.w,
                            a = jt.y / e.h;
                        e.fitRatio = o < a ? o : a;
                        var l = r.scaleMode;
                        "orig" === l
                            ? (n = 1)
                            : "fit" === l && (n = e.fitRatio),
                            n > 1 && (n = 1),
                            (e.initialZoomLevel = n),
                            e.bounds ||
                                (e.bounds = {
                                    center: { x: 0, y: 0 },
                                    max: { x: 0, y: 0 },
                                    min: { x: 0, y: 0 },
                                });
                    }
                    if (!n) return;
                    return (
                        en(e, e.w * n, e.h * n),
                        i &&
                            n === e.initialZoomLevel &&
                            (e.initialPosition = e.bounds.center),
                        e.bounds
                    );
                }
                return (
                    (e.w = e.h = 0),
                    (e.initialZoomLevel = e.fitRatio = 1),
                    (e.bounds = {
                        center: { x: 0, y: 0 },
                        max: { x: 0, y: 0 },
                        min: { x: 0, y: 0 },
                    }),
                    (e.initialPosition = e.bounds.center),
                    e.bounds
                );
            },
            nn = function (e, t, n, i, o, r) {
                t.loadError ||
                    (i &&
                        ((t.imageAppended = !0),
                        rn(t, i, t === a.currItem && we),
                        n.appendChild(i),
                        r &&
                            setTimeout(function () {
                                t &&
                                    t.loaded &&
                                    t.placeholder &&
                                    ((t.placeholder.style.display = "none"),
                                    (t.placeholder = null));
                            }, 500)));
            },
            on = function (e) {
                (e.loading = !0), (e.loaded = !1);
                var t = (e.img = o.createEl("pswp__img", "img")),
                    n = function () {
                        (e.loading = !1),
                            (e.loaded = !0),
                            e.loadComplete ? e.loadComplete(e) : (e.img = null),
                            (t.onload = t.onerror = null),
                            (t = null);
                    };
                return (
                    (t.onload = n),
                    (t.onerror = function () {
                        (e.loadError = !0), n();
                    }),
                    (t.src = e.src),
                    t
                );
            },
            an = function (e, t) {
                if (e.src && e.loadError && e.container)
                    return (
                        t && (e.container.innerHTML = ""),
                        (e.container.innerHTML = r.errorMsg.replace(
                            "%url%",
                            e.src
                        )),
                        !0
                    );
            },
            rn = function (e, t, n) {
                if (e.src) {
                    t || (t = e.container.lastChild);
                    var i = n ? e.w : Math.round(e.w * e.fitRatio),
                        o = n ? e.h : Math.round(e.h * e.fitRatio);
                    e.placeholder &&
                        !e.loaded &&
                        ((e.placeholder.style.width = i + "px"),
                        (e.placeholder.style.height = o + "px")),
                        (t.style.width = i + "px"),
                        (t.style.height = o + "px");
                }
            },
            ln = function () {
                if (Jt.length) {
                    for (var e, t = 0; t < Jt.length; t++)
                        (e = Jt[t]).holder.index === e.index &&
                            nn(
                                e.index,
                                e.item,
                                e.baseDiv,
                                e.img,
                                0,
                                e.clearPlaceholder
                            );
                    Jt = [];
                }
            };
        be("Controller", {
            publicMethods: {
                lazyLoadItem: function (e) {
                    e = Ie(e);
                    var t = Vt(e);
                    t &&
                        ((!t.loaded && !t.loading) || b) &&
                        (Me("gettingData", e, t), t.src && on(t));
                },
                initController: function () {
                    o.extend(r, Qt, !0),
                        (a.items = Wt = n),
                        (Vt = a.getItemAt),
                        (Kt = r.getNumItemsFn),
                        (qt = r.loop),
                        Kt() < 3 && (r.loop = !1),
                        De("beforeChange", function (e) {
                            var t,
                                n = r.preload,
                                i = null === e || e >= 0,
                                o = Math.min(n[0], Kt()),
                                l = Math.min(n[1], Kt());
                            for (t = 1; t <= (i ? l : o); t++)
                                a.lazyLoadItem(c + t);
                            for (t = 1; t <= (i ? o : l); t++)
                                a.lazyLoadItem(c - t);
                        }),
                        De("initialLayout", function () {
                            a.currItem.initialLayout =
                                r.getThumbBoundsFn && r.getThumbBoundsFn(c);
                        }),
                        De("mainScrollAnimComplete", ln),
                        De("initialZoomInEnd", ln),
                        De("destroy", function () {
                            for (var e, t = 0; t < Wt.length; t++)
                                (e = Wt[t]).container && (e.container = null),
                                    e.placeholder && (e.placeholder = null),
                                    e.img && (e.img = null),
                                    e.preloader && (e.preloader = null),
                                    e.loadError &&
                                        (e.loaded = e.loadError = !1);
                            Jt = null;
                        });
                },
                getItemAt: function (e) {
                    return e >= 0 && Wt[e] !== undefined && Wt[e];
                },
                allowProgressiveImg: function () {
                    return (
                        r.forceProgressiveLoading ||
                        !O ||
                        r.mouseUsed ||
                        screen.width > 1200
                    );
                },
                setContent: function (e, t) {
                    r.loop && (t = Ie(t));
                    var n = a.getItemAt(e.index);
                    n && (n.container = null);
                    var i,
                        s = a.getItemAt(t);
                    if (s) {
                        Me("gettingData", t, s), (e.index = t), (e.item = s);
                        var u = (s.container = o.createEl("pswp__zoom-wrap"));
                        if (
                            (!s.src &&
                                s.html &&
                                (s.html.tagName
                                    ? u.appendChild(s.html)
                                    : (u.innerHTML = s.html)),
                            an(s),
                            tn(s, pe),
                            !s.src || s.loadError || s.loaded)
                        )
                            s.src &&
                                !s.loadError &&
                                (((i = o.createEl(
                                    "pswp__img",
                                    "img"
                                )).style.opacity = 1),
                                (i.src = s.src),
                                rn(s, i),
                                nn(0, s, u, i));
                        else {
                            if (
                                ((s.loadComplete = function (n) {
                                    if (l) {
                                        if (e && e.index === t) {
                                            if (an(n, !0))
                                                return (
                                                    (n.loadComplete = n.img =
                                                        null),
                                                    tn(n, pe),
                                                    Oe(n),
                                                    void (
                                                        e.index === c &&
                                                        a.updateCurrZoomItem()
                                                    )
                                                );
                                            n.imageAppended
                                                ? !Xt &&
                                                  n.placeholder &&
                                                  ((n.placeholder.style.display =
                                                      "none"),
                                                  (n.placeholder = null))
                                                : _.transform && (ne || Xt)
                                                ? Jt.push({
                                                      item: n,
                                                      baseDiv: u,
                                                      img: n.img,
                                                      index: t,
                                                      holder: e,
                                                      clearPlaceholder: !0,
                                                  })
                                                : nn(0, n, u, n.img, 0, !0);
                                        }
                                        (n.loadComplete = null),
                                            (n.img = null),
                                            Me("imageLoadComplete", t, n);
                                    }
                                }),
                                o.features.transform)
                            ) {
                                var d = "pswp__img pswp__img--placeholder";
                                d += s.msrc
                                    ? ""
                                    : " pswp__img--placeholder--blank";
                                var p = o.createEl(d, s.msrc ? "img" : "");
                                s.msrc && (p.src = s.msrc),
                                    rn(s, p),
                                    u.appendChild(p),
                                    (s.placeholder = p);
                            }
                            s.loading || on(s),
                                a.allowProgressiveImg() &&
                                    (!Gt && _.transform
                                        ? Jt.push({
                                              item: s,
                                              baseDiv: u,
                                              img: s.img,
                                              index: t,
                                              holder: e,
                                          })
                                        : nn(0, s, u, s.img, 0, !0));
                        }
                        Gt || t !== c
                            ? Oe(s)
                            : ((te = u.style), $t(s, i || s.img)),
                            (e.el.innerHTML = ""),
                            e.el.appendChild(u);
                    } else e.el.innerHTML = "";
                },
                cleanSlide: function (e) {
                    e.img && (e.img.onload = e.img.onerror = null),
                        (e.loaded = e.loading = e.img = e.imageAppended = !1);
                },
            },
        });
        var sn,
            un = {},
            cn = function (e, t, n) {
                var i = document.createEvent("CustomEvent"),
                    o = {
                        origEvent: e,
                        target: e.target,
                        releasePoint: t,
                        pointerType: n || "touch",
                    };
                i.initCustomEvent("pswpTap", !0, !0, o),
                    e.target.dispatchEvent(i);
            };
        be("Tap", {
            publicMethods: {
                initTap: function () {
                    De("firstTouchStart", a.onTapStart),
                        De("touchRelease", a.onTapRelease),
                        De("destroy", function () {
                            (un = {}), (sn = null);
                        });
                },
                onTapStart: function (e) {
                    e.length > 1 && (clearTimeout(sn), (sn = null));
                },
                onTapRelease: function (e, t) {
                    if (t && !V && !G && !qe) {
                        var n = t;
                        if (sn && (clearTimeout(sn), (sn = null), xt(n, un)))
                            return void Me("doubleTap", n);
                        if ("mouse" === t.type) return void cn(e, t, "mouse");
                        if (
                            "BUTTON" === e.target.tagName.toUpperCase() ||
                            o.hasClass(e.target, "pswp__single-tap")
                        )
                            return void cn(e, t);
                        Pe(un, n),
                            (sn = setTimeout(function () {
                                cn(e, t), (sn = null);
                            }, 300));
                    }
                },
            },
        });
        var dn;
        be("DesktopZoom", {
            publicMethods: {
                initDesktopZoom: function () {
                    F ||
                        (O
                            ? De("mouseUsed", function () {
                                  a.setupDesktopZoom();
                              })
                            : a.setupDesktopZoom(!0));
                },
                setupDesktopZoom: function (t) {
                    dn = {};
                    var n = "wheel mousewheel DOMMouseScroll";
                    De("bindEvents", function () {
                        o.bind(e, n, a.handleMouseWheel);
                    }),
                        De("unbindEvents", function () {
                            dn && o.unbind(e, n, a.handleMouseWheel);
                        }),
                        (a.mouseZoomedIn = !1);
                    var i,
                        r = function () {
                            a.mouseZoomedIn &&
                                (o.removeClass(e, "pswp--zoomed-in"),
                                (a.mouseZoomedIn = !1)),
                                y < 1
                                    ? o.addClass(e, "pswp--zoom-allowed")
                                    : o.removeClass(e, "pswp--zoom-allowed"),
                                l();
                        },
                        l = function () {
                            i && (o.removeClass(e, "pswp--dragging"), (i = !1));
                        };
                    De("resize", r),
                        De("afterChange", r),
                        De("pointerDown", function () {
                            a.mouseZoomedIn &&
                                ((i = !0), o.addClass(e, "pswp--dragging"));
                        }),
                        De("pointerUp", l),
                        t || r();
                },
                handleMouseWheel: function (e) {
                    if (y <= a.currItem.fitRatio)
                        return (
                            r.modal &&
                                (!r.closeOnScroll || qe || W
                                    ? e.preventDefault()
                                    : A &&
                                      Math.abs(e.deltaY) > 2 &&
                                      ((u = !0), a.close())),
                            !0
                        );
                    if ((e.stopPropagation(), (dn.x = 0), "deltaX" in e))
                        1 === e.deltaMode
                            ? ((dn.x = 18 * e.deltaX), (dn.y = 18 * e.deltaY))
                            : ((dn.x = e.deltaX), (dn.y = e.deltaY));
                    else if ("wheelDelta" in e)
                        e.wheelDeltaX && (dn.x = -0.16 * e.wheelDeltaX),
                            e.wheelDeltaY
                                ? (dn.y = -0.16 * e.wheelDeltaY)
                                : (dn.y = -0.16 * e.wheelDelta);
                    else {
                        if (!("detail" in e)) return;
                        dn.y = e.detail;
                    }
                    Ue(y, !0);
                    var t = de.x - dn.x,
                        n = de.y - dn.y;
                    (r.modal ||
                        (t <= ee.min.x &&
                            t >= ee.max.x &&
                            n <= ee.min.y &&
                            n >= ee.max.y)) &&
                        e.preventDefault(),
                        a.panTo(t, n);
                },
                toggleDesktopZoom: function (t) {
                    t = t || { x: pe.x / 2 + fe.x, y: pe.y / 2 + fe.y };
                    var n = r.getDoubleTapZoom(!0, a.currItem),
                        i = y === n;
                    (a.mouseZoomedIn = !i),
                        a.zoomTo(i ? a.currItem.initialZoomLevel : n, t, 333),
                        o[(i ? "remove" : "add") + "Class"](
                            e,
                            "pswp--zoomed-in"
                        );
                },
            },
        });
        var pn,
            mn,
            fn,
            hn,
            yn,
            xn,
            vn,
            gn,
            wn,
            bn,
            In,
            Cn,
            Dn = { history: !0, galleryUID: 1 },
            Mn = function () {
                return In.hash.substring(1);
            },
            Tn = function () {
                pn && clearTimeout(pn), fn && clearTimeout(fn);
            },
            Sn = function () {
                var e = Mn(),
                    t = {};
                if (e.length < 5) return t;
                var n,
                    i = e.split("&");
                for (n = 0; n < i.length; n++)
                    if (i[n]) {
                        var o = i[n].split("=");
                        o.length < 2 || (t[o[0]] = o[1]);
                    }
                if (r.galleryPIDs) {
                    var a = t.pid;
                    for (t.pid = 0, n = 0; n < Wt.length; n++)
                        if (Wt[n].pid === a) {
                            t.pid = n;
                            break;
                        }
                } else t.pid = parseInt(t.pid, 10) - 1;
                return t.pid < 0 && (t.pid = 0), t;
            },
            An = function () {
                if ((fn && clearTimeout(fn), qe || W)) fn = setTimeout(An, 500);
                else {
                    hn ? clearTimeout(mn) : (hn = !0);
                    var e = c + 1,
                        t = Vt(c);
                    t.hasOwnProperty("pid") && (e = t.pid);
                    var n = vn + "&gid=" + r.galleryUID + "&pid=" + e;
                    gn || (-1 === In.hash.indexOf(n) && (bn = !0));
                    var i = In.href.split("#")[0] + "#" + n;
                    Cn
                        ? "#" + n !== window.location.hash &&
                          history[gn ? "replaceState" : "pushState"](
                              "",
                              document.title,
                              i
                          )
                        : gn
                        ? In.replace(i)
                        : (In.hash = n),
                        (gn = !0),
                        (mn = setTimeout(function () {
                            hn = !1;
                        }, 60));
                }
            };
        be("History", {
            publicMethods: {
                initHistory: function () {
                    if ((o.extend(r, Dn, !0), r.history)) {
                        (In = window.location),
                            (bn = !1),
                            (wn = !1),
                            (gn = !1),
                            (vn = Mn()),
                            (Cn = "pushState" in history),
                            vn.indexOf("gid=") > -1 &&
                                ((vn = vn.split("&gid=")[0]),
                                (vn = vn.split("?gid=")[0])),
                            De("afterChange", a.updateURL),
                            De("unbindEvents", function () {
                                o.unbind(window, "hashchange", a.onHashChange);
                            });
                        var e = function () {
                            (xn = !0),
                                wn ||
                                    (bn
                                        ? history.back()
                                        : vn
                                        ? (In.hash = vn)
                                        : Cn
                                        ? history.pushState(
                                              "",
                                              document.title,
                                              In.pathname + In.search
                                          )
                                        : (In.hash = "")),
                                Tn();
                        };
                        De("unbindEvents", function () {
                            u && e();
                        }),
                            De("destroy", function () {
                                xn || e();
                            }),
                            De("firstUpdate", function () {
                                c = Sn().pid;
                            });
                        var t = vn.indexOf("pid=");
                        t > -1 &&
                            "&" === (vn = vn.substring(0, t)).slice(-1) &&
                            (vn = vn.slice(0, -1)),
                            setTimeout(function () {
                                l &&
                                    o.bind(
                                        window,
                                        "hashchange",
                                        a.onHashChange
                                    );
                            }, 40);
                    }
                },
                onHashChange: function () {
                    if (Mn() === vn) return (wn = !0), void a.close();
                    hn || ((yn = !0), a.goTo(Sn().pid), (yn = !1));
                },
                updateURL: function () {
                    Tn(), yn || (gn ? (pn = setTimeout(An, 800)) : An());
                },
            },
        }),
            o.extend(a, et);
    };
});
