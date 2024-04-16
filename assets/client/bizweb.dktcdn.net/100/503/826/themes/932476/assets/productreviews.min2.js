/*! jQuery v3.4.1 | (c) JS Foundation and other contributors | jquery.org/license */
!function(n, t) {
    "use strict";
    "object" == typeof module && "object" == typeof module.exports ? module.exports = n.document ? t(n, !0) : function(n) {
        if (!n.document)
            throw new Error("jQuery requires a window with a document");
        return t(n)
    }
    : t(n)
}("undefined" != typeof window ? window : this, function(n, t) {
    "use strict";
    function br(n, t, i) {
        var r, e, u = (i = i || f).createElement("script");
        if (u.text = n,
        t)
            for (r in oe)
                (e = t[r] || t.getAttribute && t.getAttribute(r)) && u.setAttribute(r, e);
        i.head.appendChild(u).parentNode.removeChild(u)
    }
    function it(n) {
        return null == n ? n + "" : "object" == typeof n || "function" == typeof n ? ri[pr.call(n)] || "object" : typeof n
    }
    function pi(n) {
        var t = !!n && "length"in n && n.length
          , i = it(n);
        return !u(n) && !tt(n) && ("array" === i || 0 === t || "number" == typeof t && 0 < t && t - 1 in n)
    }
    function c(n, t) {
        return n.nodeName && n.nodeName.toLowerCase() === t.toLowerCase()
    }
    function bi(n, t, r) {
        return u(t) ? i.grep(n, function(n, i) {
            return !!t.call(n, i, n) !== r
        }) : t.nodeType ? i.grep(n, function(n) {
            return n === t !== r
        }) : "string" != typeof t ? i.grep(n, function(n) {
            return -1 < ii.call(t, n) !== r
        }) : i.filter(t, n, r)
    }
    function uu(n, t) {
        while ((n = n[t]) && 1 !== n.nodeType)
            ;
        return n
    }
    function ut(n) {
        return n
    }
    function fi(n) {
        throw n;
    }
    function fu(n, t, i, r) {
        var f;
        try {
            n && u(f = n.promise) ? f.call(n).done(t).fail(i) : n && u(f = n.then) ? f.call(n, t, i) : t.apply(void 0, [n].slice(r))
        } catch (n) {
            i.apply(void 0, [n])
        }
    }
    function oi() {
        f.removeEventListener("DOMContentLoaded", oi);
        n.removeEventListener("load", oi);
        i.ready()
    }
    function le(n, t) {
        return t.toUpperCase()
    }
    function y(n) {
        return n.replace(he, "ms-").replace(ce, le)
    }
    function pt() {
        this.expando = i.expando + pt.uid++
    }
    function ou(n, t, i) {
        var u, r;
        if (void 0 === i && 1 === n.nodeType)
            if (u = "data-" + t.replace(ve, "-$&").toLowerCase(),
            "string" == typeof (i = n.getAttribute(u))) {
                try {
                    i = "true" === (r = i) || "false" !== r && ("null" === r ? null : r === +r + "" ? +r : ae.test(r) ? JSON.parse(r) : r)
                } catch (n) {}
                o.set(n, t, i)
            } else
                i = void 0;
        return i
    }
    function hu(n, t, r, u) {
        var s, h, c = 20, l = u ? function() {
            return u.cur()
        }
        : function() {
            return i.css(n, t, "")
        }
        , o = l(), e = r && r[3] || (i.cssNumber[t] ? "" : "px"), f = n.nodeType && (i.cssNumber[t] || "px" !== e && +o) && wt.exec(i.css(n, t));
        if (f && f[3] !== e) {
            for (o /= 2,
            e = e || f[3],
            f = +o || 1; c--; )
                i.style(n, t, f + e),
                (1 - h) * (1 - (h = l() / o || .5)) <= 0 && (c = 0),
                f /= h;
            f *= 2;
            i.style(n, t, f + e);
            r = r || []
        }
        return r && (f = +f || +o || 0,
        s = r[1] ? f + (r[1] + 1) * r[2] : +r[2],
        u && (u.unit = e,
        u.start = f,
        u.end = s)),
        s
    }
    function et(n, t) {
        for (var h, f, a, s, c, l, e, o = [], u = 0, v = n.length; u < v; u++)
            (f = n[u]).style && (h = f.style.display,
            t ? ("none" === h && (o[u] = r.get(f, "display") || null,
            o[u] || (f.style.display = "")),
            "" === f.style.display && kt(f) && (o[u] = (e = c = s = void 0,
            c = (a = f).ownerDocument,
            l = a.nodeName,
            (e = di[l]) || (s = c.body.appendChild(c.createElement(l)),
            e = i.css(s, "display"),
            s.parentNode.removeChild(s),
            "none" === e && (e = "block"),
            di[l] = e)))) : "none" !== h && (o[u] = "none",
            r.set(f, "display", h)));
        for (u = 0; u < v; u++)
            null != o[u] && (n[u].style.display = o[u]);
        return n
    }
    function s(n, t) {
        var r;
        return r = "undefined" != typeof n.getElementsByTagName ? n.getElementsByTagName(t || "*") : "undefined" != typeof n.querySelectorAll ? n.querySelectorAll(t || "*") : [],
        void 0 === t || t && c(n, t) ? i.merge([n], r) : r
    }
    function gi(n, t) {
        for (var i = 0, u = n.length; i < u; i++)
            r.set(n[i], "globalEval", !t || r.get(t[i], "globalEval"))
    }
    function vu(n, t, r, u, f) {
        for (var e, o, p, a, w, v, c = t.createDocumentFragment(), y = [], l = 0, b = n.length; l < b; l++)
            if ((e = n[l]) || 0 === e)
                if ("object" === it(e))
                    i.merge(y, e.nodeType ? [e] : e);
                else if (au.test(e)) {
                    for (o = o || c.appendChild(t.createElement("div")),
                    p = (cu.exec(e) || ["", ""])[1].toLowerCase(),
                    a = h[p] || h._default,
                    o.innerHTML = a[1] + i.htmlPrefilter(e) + a[2],
                    v = a[0]; v--; )
                        o = o.lastChild;
                    i.merge(y, o.childNodes);
                    (o = c.firstChild).textContent = ""
                } else
                    y.push(t.createTextNode(e));
        for (c.textContent = "",
        l = 0; e = y[l++]; )
            if (u && -1 < i.inArray(e, u))
                f && f.push(e);
            else if (w = ft(e),
            o = s(c.appendChild(e), "script"),
            w && gi(o),
            r)
                for (v = 0; e = o[v++]; )
                    lu.test(e.type || "") && r.push(e);
        return c
    }
    function ot() {
        return !0
    }
    function st() {
        return !1
    }
    function be(n, t) {
        return n === function() {
            try {
                return f.activeElement
            } catch (n) {}
        }() == ("focus" === t)
    }
    function nr(n, t, r, u, f, e) {
        var o, s;
        if ("object" == typeof t) {
            for (s in "string" != typeof r && (u = u || r,
            r = void 0),
            t)
                nr(n, s, r, u, t[s], e);
            return n
        }
        if (null == u && null == f ? (f = r,
        u = r = void 0) : null == f && ("string" == typeof r ? (f = u,
        u = void 0) : (f = u,
        u = r,
        r = void 0)),
        !1 === f)
            f = st;
        else if (!f)
            return n;
        return 1 === e && (o = f,
        (f = function(n) {
            return i().off(n),
            o.apply(this, arguments)
        }
        ).guid = o.guid || (o.guid = i.guid++)),
        n.each(function() {
            i.event.add(this, t, f, u, r)
        })
    }
    function hi(n, t, u) {
        u ? (r.set(n, t, !1),
        i.event.add(n, t, {
            namespace: !1,
            handler: function(n) {
                var o, e, f = r.get(this, t);
                if (1 & n.isTrigger && this[t]) {
                    if (f.length)
                        (i.event.special[t] || {}).delegateType && n.stopPropagation();
                    else if (f = b.call(arguments),
                    r.set(this, t, f),
                    o = u(this, t),
                    this[t](),
                    f !== (e = r.get(this, t)) || o ? r.set(this, t, !1) : e = {},
                    f !== e)
                        return n.stopImmediatePropagation(),
                        n.preventDefault(),
                        e.value
                } else
                    f.length && (r.set(this, t, {
                        value: i.event.trigger(i.extend(f[0], i.Event.prototype), f.slice(1), this)
                    }),
                    n.stopImmediatePropagation())
            }
        })) : void 0 === r.get(n, t) && i.event.add(n, t, ot)
    }
    function pu(n, t) {
        return c(n, "table") && c(11 !== t.nodeType ? t : t.firstChild, "tr") && i(n).children("tbody")[0] || n
    }
    function to(n) {
        return n.type = (null !== n.getAttribute("type")) + "/" + n.type,
        n
    }
    function io(n) {
        return "true/" === (n.type || "").slice(0, 5) ? n.type = n.type.slice(5) : n.removeAttribute("type"),
        n
    }
    function wu(n, t) {
        var u, c, f, s, h, l, a, e;
        if (1 === t.nodeType) {
            if (r.hasData(n) && (s = r.access(n),
            h = r.set(t, s),
            e = s.events))
                for (f in delete h.handle,
                h.events = {},
                e)
                    for (u = 0,
                    c = e[f].length; u < c; u++)
                        i.event.add(t, f, e[f][u]);
            o.hasData(n) && (l = o.access(n),
            a = i.extend({}, l),
            o.set(t, a))
        }
    }
    function ht(n, t, f, o) {
        t = yr.apply([], t);
        var a, w, l, v, h, b, c = 0, y = n.length, d = y - 1, p = t[0], k = u(p);
        if (k || 1 < y && "string" == typeof p && !e.checkClone && ge.test(p))
            return n.each(function(i) {
                var r = n.eq(i);
                k && (t[0] = p.call(this, i, r.html()));
                ht(r, t, f, o)
            });
        if (y && (w = (a = vu(t, n[0].ownerDocument, !1, n, o)).firstChild,
        1 === a.childNodes.length && (a = w),
        w || o)) {
            for (v = (l = i.map(s(a, "script"), to)).length; c < y; c++)
                h = a,
                c !== d && (h = i.clone(h, !0, !0),
                v && i.merge(l, s(h, "script"))),
                f.call(n[c], h, c);
            if (v)
                for (b = l[l.length - 1].ownerDocument,
                i.map(l, io),
                c = 0; c < v; c++)
                    h = l[c],
                    lu.test(h.type || "") && !r.access(h, "globalEval") && i.contains(b, h) && (h.src && "module" !== (h.type || "").toLowerCase() ? i._evalUrl && !h.noModule && i._evalUrl(h.src, {
                        nonce: h.nonce || h.getAttribute("nonce")
                    }) : br(h.textContent.replace(no, ""), h, b))
        }
        return n
    }
    function bu(n, t, r) {
        for (var u, e = t ? i.filter(t, n) : n, f = 0; null != (u = e[f]); f++)
            r || 1 !== u.nodeType || i.cleanData(s(u)),
            u.parentNode && (r && ft(u) && gi(s(u, "script")),
            u.parentNode.removeChild(u));
        return n
    }
    function ni(n, t, r) {
        var o, s, h, f, u = n.style;
        return (r = r || ci(n)) && ("" !== (f = r.getPropertyValue(t) || r[t]) || ft(n) || (f = i.style(n, t)),
        !e.pixelBoxStyles() && tr.test(f) && ro.test(t) && (o = u.width,
        s = u.minWidth,
        h = u.maxWidth,
        u.minWidth = u.maxWidth = u.width = f,
        f = r.width,
        u.width = o,
        u.minWidth = s,
        u.maxWidth = h)),
        void 0 !== f ? f + "" : f
    }
    function ku(n, t) {
        return {
            get: function() {
                if (!n())
                    return (this.get = t).apply(this, arguments);
                delete this.get
            }
        }
    }
    function ir(n) {
        var t = i.cssProps[n] || nf[n];
        return t || (n in gu ? n : nf[n] = function(n) {
            for (var i = n[0].toUpperCase() + n.slice(1), t = du.length; t--; )
                if ((n = du[t] + i)in gu)
                    return n
        }(n) || n)
    }
    function uf(n, t, i) {
        var r = wt.exec(t);
        return r ? Math.max(0, r[2] - (i || 0)) + (r[3] || "px") : t
    }
    function rr(n, t, r, u, f, e) {
        var o = "width" === t ? 1 : 0
          , h = 0
          , s = 0;
        if (r === (u ? "border" : "content"))
            return 0;
        for (; o < 4; o += 2)
            "margin" === r && (s += i.css(n, r + w[o], !0, f)),
            u ? ("content" === r && (s -= i.css(n, "padding" + w[o], !0, f)),
            "margin" !== r && (s -= i.css(n, "border" + w[o] + "Width", !0, f))) : (s += i.css(n, "padding" + w[o], !0, f),
            "padding" !== r ? s += i.css(n, "border" + w[o] + "Width", !0, f) : h += i.css(n, "border" + w[o] + "Width", !0, f));
        return !u && 0 <= e && (s += Math.max(0, Math.ceil(n["offset" + t[0].toUpperCase() + t.slice(1)] - e - s - h - .5)) || 0),
        s
    }
    function ff(n, t, r) {
        var f = ci(n)
          , o = (!e.boxSizingReliable() || r) && "border-box" === i.css(n, "boxSizing", !1, f)
          , s = o
          , u = ni(n, t, f)
          , h = "offset" + t[0].toUpperCase() + t.slice(1);
        if (tr.test(u)) {
            if (!r)
                return u;
            u = "auto"
        }
        return (!e.boxSizingReliable() && o || "auto" === u || !parseFloat(u) && "inline" === i.css(n, "display", !1, f)) && n.getClientRects().length && (o = "border-box" === i.css(n, "boxSizing", !1, f),
        (s = h in n) && (u = n[h])),
        (u = parseFloat(u) || 0) + rr(n, t, r || (o ? "border" : "content"), s, f, u) + "px"
    }
    function a(n, t, i, r, u) {
        return new a.prototype.init(n,t,i,r,u)
    }
    function ur() {
        li && (!1 === f.hidden && n.requestAnimationFrame ? n.requestAnimationFrame(ur) : n.setTimeout(ur, i.fx.interval),
        i.fx.tick())
    }
    function cf() {
        return n.setTimeout(function() {
            ct = void 0
        }),
        ct = Date.now()
    }
    function ai(n, t) {
        var u, r = 0, i = {
            height: n
        };
        for (t = t ? 1 : 0; r < 4; r += 2 - t)
            i["margin" + (u = w[r])] = i["padding" + u] = n;
        return t && (i.opacity = i.width = n),
        i
    }
    function lf(n, t, i) {
        for (var u, f = (v.tweeners[t] || []).concat(v.tweeners["*"]), r = 0, e = f.length; r < e; r++)
            if (u = f[r].call(i, t, n))
                return u
    }
    function v(n, t, r) {
        var o, s, h = 0, a = v.prefilters.length, e = i.Deferred().always(function() {
            delete l.elem
        }), l = function() {
            if (s)
                return !1;
            for (var o = ct || cf(), t = Math.max(0, f.startTime + f.duration - o), i = 1 - (t / f.duration || 0), r = 0, u = f.tweens.length; r < u; r++)
                f.tweens[r].run(i);
            return e.notifyWith(n, [f, i, t]),
            i < 1 && u ? t : (u || e.notifyWith(n, [f, 1, 0]),
            e.resolveWith(n, [f]),
            !1)
        }, f = e.promise({
            elem: n,
            props: i.extend({}, t),
            opts: i.extend(!0, {
                specialEasing: {},
                easing: i.easing._default
            }, r),
            originalProperties: t,
            originalOptions: r,
            startTime: ct || cf(),
            duration: r.duration,
            tweens: [],
            createTween: function(t, r) {
                var u = i.Tween(n, f.opts, t, r, f.opts.specialEasing[t] || f.opts.easing);
                return f.tweens.push(u),
                u
            },
            stop: function(t) {
                var i = 0
                  , r = t ? f.tweens.length : 0;
                if (s)
                    return this;
                for (s = !0; i < r; i++)
                    f.tweens[i].run(1);
                return t ? (e.notifyWith(n, [f, 1, 0]),
                e.resolveWith(n, [f, t])) : e.rejectWith(n, [f, t]),
                this
            }
        }), c = f.props;
        for (!function(n, t) {
            var r, f, e, u, o;
            for (r in n)
                if (e = t[f = y(r)],
                u = n[r],
                Array.isArray(u) && (e = u[1],
                u = n[r] = u[0]),
                r !== f && (n[f] = u,
                delete n[r]),
                (o = i.cssHooks[f]) && "expand"in o)
                    for (r in u = o.expand(u),
                    delete n[f],
                    u)
                        r in n || (n[r] = u[r],
                        t[r] = e);
                else
                    t[f] = e
        }(c, f.opts.specialEasing); h < a; h++)
            if (o = v.prefilters[h].call(f, n, c, f.opts))
                return u(o.stop) && (i._queueHooks(f.elem, f.opts.queue).stop = o.stop.bind(o)),
                o;
        return i.map(c, lf, f),
        u(f.opts.start) && f.opts.start.call(n, f),
        f.progress(f.opts.progress).done(f.opts.done, f.opts.complete).fail(f.opts.fail).always(f.opts.always),
        i.fx.timer(i.extend(l, {
            elem: n,
            anim: f,
            queue: f.opts.queue
        })),
        f
    }
    function g(n) {
        return (n.match(l) || []).join(" ")
    }
    function nt(n) {
        return n.getAttribute && n.getAttribute("class") || ""
    }
    function fr(n) {
        return Array.isArray(n) ? n : "string" == typeof n && n.match(l) || []
    }
    function hr(n, t, r, u) {
        var f;
        if (Array.isArray(t))
            i.each(t, function(t, i) {
                r || eo.test(n) ? u(n, i) : hr(n + "[" + ("object" == typeof i && null != i ? t : "") + "]", i, r, u)
            });
        else if (r || "object" !== it(t))
            u(n, t);
        else
            for (f in t)
                hr(n + "[" + f + "]", t[f], r, u)
    }
    function gf(n) {
        return function(t, i) {
            "string" != typeof t && (i = t,
            t = "*");
            var r, f = 0, e = t.toLowerCase().match(l) || [];
            if (u(i))
                while (r = e[f++])
                    "+" === r[0] ? (r = r.slice(1) || "*",
                    (n[r] = n[r] || []).unshift(i)) : (n[r] = n[r] || []).push(i)
        }
    }
    function ne(n, t, r, u) {
        function e(s) {
            var h;
            return f[s] = !0,
            i.each(n[s] || [], function(n, i) {
                var s = i(t, r, u);
                return "string" != typeof s || o || f[s] ? o ? !(h = s) : void 0 : (t.dataTypes.unshift(s),
                e(s),
                !1)
            }),
            h
        }
        var f = {}
          , o = n === cr;
        return e(t.dataTypes[0]) || !f["*"] && e("*")
    }
    function ar(n, t) {
        var r, u, f = i.ajaxSettings.flatOptions || {};
        for (r in t)
            void 0 !== t[r] && ((f[r] ? n : u || (u = {}))[r] = t[r]);
        return u && i.extend(!0, n, u),
        n
    }
    var d = [], f = n.document, fe = Object.getPrototypeOf, b = d.slice, yr = d.concat, yi = d.push, ii = d.indexOf, ri = {}, pr = ri.toString, ui = ri.hasOwnProperty, wr = ui.toString, ee = wr.call(Object), e = {}, u = function(n) {
        return "function" == typeof n && "number" != typeof n.nodeType
    }, tt = function(n) {
        return null != n && n === n.window
    }, oe = {
        type: !0,
        src: !0,
        nonce: !0,
        noModule: !0
    }, kr = "3.4.1", i = function(n, t) {
        return new i.fn.init(n,t)
    }, se = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, k, wi, nu, tu, iu, ru, l, eu, ei, yt, kt, ki, di, gt, si, au, ct, li, lt, ef, sf, hf, af, at, vf, yf, pf, er, or, te, vt, ie, vr, vi, re, ue;
    i.fn = i.prototype = {
        jquery: kr,
        constructor: i,
        length: 0,
        toArray: function() {
            return b.call(this)
        },
        get: function(n) {
            return null == n ? b.call(this) : n < 0 ? this[n + this.length] : this[n]
        },
        pushStack: function(n) {
            var t = i.merge(this.constructor(), n);
            return t.prevObject = this,
            t
        },
        each: function(n) {
            return i.each(this, n)
        },
        map: function(n) {
            return this.pushStack(i.map(this, function(t, i) {
                return n.call(t, i, t)
            }))
        },
        slice: function() {
            return this.pushStack(b.apply(this, arguments))
        },
        first: function() {
            return this.eq(0)
        },
        last: function() {
            return this.eq(-1)
        },
        eq: function(n) {
            var i = this.length
              , t = +n + (n < 0 ? i : 0);
            return this.pushStack(0 <= t && t < i ? [this[t]] : [])
        },
        end: function() {
            return this.prevObject || this.constructor()
        },
        push: yi,
        sort: d.sort,
        splice: d.splice
    };
    i.extend = i.fn.extend = function() {
        var s, f, e, t, o, c, n = arguments[0] || {}, r = 1, l = arguments.length, h = !1;
        for ("boolean" == typeof n && (h = n,
        n = arguments[r] || {},
        r++),
        "object" == typeof n || u(n) || (n = {}),
        r === l && (n = this,
        r--); r < l; r++)
            if (null != (s = arguments[r]))
                for (f in s)
                    t = s[f],
                    "__proto__" !== f && n !== t && (h && t && (i.isPlainObject(t) || (o = Array.isArray(t))) ? (e = n[f],
                    c = o && !Array.isArray(e) ? [] : o || i.isPlainObject(e) ? e : {},
                    o = !1,
                    n[f] = i.extend(h, c, t)) : void 0 !== t && (n[f] = t));
        return n
    }
    ;
    i.extend({
        expando: "jQuery" + (kr + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function(n) {
            throw new Error(n);
        },
        noop: function() {},
        isPlainObject: function(n) {
            var t, i;
            return !(!n || "[object Object]" !== pr.call(n)) && (!(t = fe(n)) || "function" == typeof (i = ui.call(t, "constructor") && t.constructor) && wr.call(i) === ee)
        },
        isEmptyObject: function(n) {
            for (var t in n)
                return !1;
            return !0
        },
        globalEval: function(n, t) {
            br(n, {
                nonce: t && t.nonce
            })
        },
        each: function(n, t) {
            var r, i = 0;
            if (pi(n)) {
                for (r = n.length; i < r; i++)
                    if (!1 === t.call(n[i], i, n[i]))
                        break
            } else
                for (i in n)
                    if (!1 === t.call(n[i], i, n[i]))
                        break;
            return n
        },
        trim: function(n) {
            return null == n ? "" : (n + "").replace(se, "")
        },
        makeArray: function(n, t) {
            var r = t || [];
            return null != n && (pi(Object(n)) ? i.merge(r, "string" == typeof n ? [n] : n) : yi.call(r, n)),
            r
        },
        inArray: function(n, t, i) {
            return null == t ? -1 : ii.call(t, n, i)
        },
        merge: function(n, t) {
            for (var u = +t.length, i = 0, r = n.length; i < u; i++)
                n[r++] = t[i];
            return n.length = r,
            n
        },
        grep: function(n, t, i) {
            for (var u = [], r = 0, f = n.length, e = !i; r < f; r++)
                !t(n[r], r) !== e && u.push(n[r]);
            return u
        },
        map: function(n, t, i) {
            var e, u, r = 0, f = [];
            if (pi(n))
                for (e = n.length; r < e; r++)
                    null != (u = t(n[r], r, i)) && f.push(u);
            else
                for (r in n)
                    null != (u = t(n[r], r, i)) && f.push(u);
            return yr.apply([], f)
        },
        guid: 1,
        support: e
    });
    "function" == typeof Symbol && (i.fn[Symbol.iterator] = d[Symbol.iterator]);
    i.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(n, t) {
        ri["[object " + t + "]"] = t.toLowerCase()
    });
    k = function(n) {
        function u(n, t, r, u) {
            var s, p, l, v, w, d, g, y = t && t.ownerDocument, a = t ? t.nodeType : 9;
            if (r = r || [],
            "string" != typeof n || !n || 1 !== a && 9 !== a && 11 !== a)
                return r;
            if (!u && ((t ? t.ownerDocument || t : c) !== i && b(t),
            t = t || i,
            h)) {
                if (11 !== a && (w = ar.exec(n)))
                    if (s = w[1]) {
                        if (9 === a) {
                            if (!(l = t.getElementById(s)))
                                return r;
                            if (l.id === s)
                                return r.push(l),
                                r
                        } else if (y && (l = y.getElementById(s)) && et(t, l) && l.id === s)
                            return r.push(l),
                            r
                    } else {
                        if (w[2])
                            return k.apply(r, t.getElementsByTagName(n)),
                            r;
                        if ((s = w[3]) && e.getElementsByClassName && t.getElementsByClassName)
                            return k.apply(r, t.getElementsByClassName(s)),
                            r
                    }
                if (e.qsa && !lt[n + " "] && (!o || !o.test(n)) && (1 !== a || "object" !== t.nodeName.toLowerCase())) {
                    if (g = n,
                    y = t,
                    1 === a && er.test(n)) {
                        for ((v = t.getAttribute("id")) ? v = v.replace(yi, pi) : t.setAttribute("id", v = f),
                        p = (d = ft(n)).length; p--; )
                            d[p] = "#" + v + " " + pt(d[p]);
                        g = d.join(",");
                        y = ti.test(n) && ri(t.parentNode) || t
                    }
                    try {
                        return k.apply(r, y.querySelectorAll(g)),
                        r
                    } catch (t) {
                        lt(n, !0)
                    } finally {
                        v === f && t.removeAttribute("id")
                    }
                }
            }
            return si(n.replace(at, "$1"), t, r, u)
        }
        function yt() {
            var n = [];
            return function i(r, u) {
                return n.push(r + " ") > t.cacheLength && delete i[n.shift()],
                i[r + " "] = u
            }
        }
        function l(n) {
            return n[f] = !0,
            n
        }
        function a(n) {
            var t = i.createElement("fieldset");
            try {
                return !!n(t)
            } catch (n) {
                return !1
            } finally {
                t.parentNode && t.parentNode.removeChild(t);
                t = null
            }
        }
        function ii(n, i) {
            for (var r = n.split("|"), u = r.length; u--; )
                t.attrHandle[r[u]] = i
        }
        function bi(n, t) {
            var i = t && n
              , r = i && 1 === n.nodeType && 1 === t.nodeType && n.sourceIndex - t.sourceIndex;
            if (r)
                return r;
            if (i)
                while (i = i.nextSibling)
                    if (i === t)
                        return -1;
            return n ? 1 : -1
        }
        function yr(n) {
            return function(t) {
                return "input" === t.nodeName.toLowerCase() && t.type === n
            }
        }
        function pr(n) {
            return function(t) {
                var i = t.nodeName.toLowerCase();
                return ("input" === i || "button" === i) && t.type === n
            }
        }
        function ki(n) {
            return function(t) {
                return "form"in t ? t.parentNode && !1 === t.disabled ? "label"in t ? "label"in t.parentNode ? t.parentNode.disabled === n : t.disabled === n : t.isDisabled === n || t.isDisabled !== !n && vr(t) === n : t.disabled === n : "label"in t && t.disabled === n
            }
        }
        function it(n) {
            return l(function(t) {
                return t = +t,
                l(function(i, r) {
                    for (var u, f = n([], i.length, t), e = f.length; e--; )
                        i[u = f[e]] && (i[u] = !(r[u] = i[u]))
                })
            })
        }
        function ri(n) {
            return n && "undefined" != typeof n.getElementsByTagName && n
        }
        function di() {}
        function pt(n) {
            for (var t = 0, r = n.length, i = ""; t < r; t++)
                i += n[t].value;
            return i
        }
        function wt(n, t, i) {
            var r = t.dir
              , u = t.next
              , e = u || r
              , o = i && "parentNode" === e
              , s = gi++;
            return t.first ? function(t, i, u) {
                while (t = t[r])
                    if (1 === t.nodeType || o)
                        return n(t, i, u);
                return !1
            }
            : function(t, i, h) {
                var c, l, a, y = [v, s];
                if (h) {
                    while (t = t[r])
                        if ((1 === t.nodeType || o) && n(t, i, h))
                            return !0
                } else
                    while (t = t[r])
                        if (1 === t.nodeType || o)
                            if (l = (a = t[f] || (t[f] = {}))[t.uniqueID] || (a[t.uniqueID] = {}),
                            u && u === t.nodeName.toLowerCase())
                                t = t[r] || t;
                            else {
                                if ((c = l[e]) && c[0] === v && c[1] === s)
                                    return y[2] = c[2];
                                if ((l[e] = y)[2] = n(t, i, h))
                                    return !0
                            }
                return !1
            }
        }
        function ui(n) {
            return 1 < n.length ? function(t, i, r) {
                for (var u = n.length; u--; )
                    if (!n[u](t, i, r))
                        return !1;
                return !0
            }
            : n[0]
        }
        function bt(n, t, i, r, u) {
            for (var e, o = [], f = 0, s = n.length, h = null != t; f < s; f++)
                (e = n[f]) && (i && !i(e, r, u) || (o.push(e),
                h && t.push(f)));
            return o
        }
        function fi(n, t, i, r, e, o) {
            return r && !r[f] && (r = fi(r)),
            e && !e[f] && (e = fi(e, o)),
            l(function(f, o, s, h) {
                var a, l, v, w = [], p = [], b = o.length, d = f || function(n, t, i) {
                    for (var r = 0, f = t.length; r < f; r++)
                        u(n, t[r], i);
                    return i
                }(t || "*", s.nodeType ? [s] : s, []), y = !n || !f && t ? d : bt(d, w, n, s, h), c = i ? e || (f ? n : b || r) ? [] : o : y;
                if (i && i(y, c, s, h),
                r)
                    for (a = bt(c, p),
                    r(a, [], s, h),
                    l = a.length; l--; )
                        (v = a[l]) && (c[p[l]] = !(y[p[l]] = v));
                if (f) {
                    if (e || n) {
                        if (e) {
                            for (a = [],
                            l = c.length; l--; )
                                (v = c[l]) && a.push(y[l] = v);
                            e(null, c = [], a, h)
                        }
                        for (l = c.length; l--; )
                            (v = c[l]) && -1 < (a = e ? nt(f, v) : w[l]) && (f[a] = !(o[a] = v))
                    }
                } else
                    c = bt(c === o ? c.splice(b, c.length) : c),
                    e ? e(null, o, c, h) : k.apply(o, c)
            })
        }
        function ei(n) {
            for (var o, u, r, s = n.length, h = t.relative[n[0].type], c = h || t.relative[" "], i = h ? 1 : 0, l = wt(function(n) {
                return n === o
            }, c, !0), a = wt(function(n) {
                return -1 < nt(o, n)
            }, c, !0), e = [function(n, t, i) {
                var r = !h && (i || t !== ht) || ((o = t).nodeType ? l(n, t, i) : a(n, t, i));
                return o = null,
                r
            }
            ]; i < s; i++)
                if (u = t.relative[n[i].type])
                    e = [wt(ui(e), u)];
                else {
                    if ((u = t.filter[n[i].type].apply(null, n[i].matches))[f]) {
                        for (r = ++i; r < s; r++)
                            if (t.relative[n[r].type])
                                break;
                        return fi(1 < i && ui(e), 1 < i && pt(n.slice(0, i - 1).concat({
                            value: " " === n[i - 2].type ? "*" : ""
                        })).replace(at, "$1"), u, i < r && ei(n.slice(i, r)), r < s && ei(n = n.slice(r)), r < s && pt(n))
                    }
                    e.push(u)
                }
            return ui(e)
        }
        var rt, e, t, st, oi, ft, kt, si, ht, w, ut, b, i, s, h, o, d, ct, et, f = "sizzle" + 1 * new Date, c = n.document, v = 0, gi = 0, hi = yt(), ci = yt(), li = yt(), lt = yt(), dt = function(n, t) {
            return n === t && (ut = !0),
            0
        }, nr = {}.hasOwnProperty, g = [], tr = g.pop, ir = g.push, k = g.push, ai = g.slice, nt = function(n, t) {
            for (var i = 0, r = n.length; i < r; i++)
                if (n[i] === t)
                    return i;
            return -1
        }, gt = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped", r = "[\\x20\\t\\r\\n\\f]", tt = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+", vi = "\\[" + r + "*(" + tt + ")(?:" + r + "*([*^$|!~]?=)" + r + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + tt + "))|)" + r + "*\\]", ni = ":(" + tt + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + vi + ")*)|.*)\\)|)", rr = new RegExp(r + "+","g"), at = new RegExp("^" + r + "+|((?:^|[^\\\\])(?:\\\\.)*)" + r + "+$","g"), ur = new RegExp("^" + r + "*," + r + "*"), fr = new RegExp("^" + r + "*([>+~]|" + r + ")" + r + "*"), er = new RegExp(r + "|>"), or = new RegExp(ni), sr = new RegExp("^" + tt + "$"), vt = {
            ID: new RegExp("^#(" + tt + ")"),
            CLASS: new RegExp("^\\.(" + tt + ")"),
            TAG: new RegExp("^(" + tt + "|[*])"),
            ATTR: new RegExp("^" + vi),
            PSEUDO: new RegExp("^" + ni),
            CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + r + "*(even|odd|(([+-]|)(\\d*)n|)" + r + "*(?:([+-]|)" + r + "*(\\d+)|))" + r + "*\\)|)","i"),
            bool: new RegExp("^(?:" + gt + ")$","i"),
            needsContext: new RegExp("^" + r + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + r + "*((?:-\\d)?\\d*)" + r + "*\\)|)(?=[^-]|$)","i")
        }, hr = /HTML$/i, cr = /^(?:input|select|textarea|button)$/i, lr = /^h\d$/i, ot = /^[^{]+\{\s*\[native \w/, ar = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, ti = /[+~]/, y = new RegExp("\\\\([\\da-f]{1,6}" + r + "?|(" + r + ")|.)","ig"), p = function(n, t, i) {
            var r = "0x" + t - 65536;
            return r != r || i ? t : r < 0 ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320)
        }, yi = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g, pi = function(n, t) {
            return t ? "\0" === n ? "�" : n.slice(0, -1) + "\\" + n.charCodeAt(n.length - 1).toString(16) + " " : "\\" + n
        }, wi = function() {
            b()
        }, vr = wt(function(n) {
            return !0 === n.disabled && "fieldset" === n.nodeName.toLowerCase()
        }, {
            dir: "parentNode",
            next: "legend"
        });
        try {
            k.apply(g = ai.call(c.childNodes), c.childNodes);
            g[c.childNodes.length].nodeType
        } catch (rt) {
            k = {
                apply: g.length ? function(n, t) {
                    ir.apply(n, ai.call(t))
                }
                : function(n, t) {
                    for (var i = n.length, r = 0; n[i++] = t[r++]; )
                        ;
                    n.length = i - 1
                }
            }
        }
        for (rt in e = u.support = {},
        oi = u.isXML = function(n) {
            var i = n.namespaceURI
              , t = (n.ownerDocument || n).documentElement;
            return !hr.test(i || t && t.nodeName || "HTML")
        }
        ,
        b = u.setDocument = function(n) {
            var v, u, l = n ? n.ownerDocument || n : c;
            return l !== i && 9 === l.nodeType && l.documentElement && (s = (i = l).documentElement,
            h = !oi(i),
            c !== i && (u = i.defaultView) && u.top !== u && (u.addEventListener ? u.addEventListener("unload", wi, !1) : u.attachEvent && u.attachEvent("onunload", wi)),
            e.attributes = a(function(n) {
                return n.className = "i",
                !n.getAttribute("className")
            }),
            e.getElementsByTagName = a(function(n) {
                return n.appendChild(i.createComment("")),
                !n.getElementsByTagName("*").length
            }),
            e.getElementsByClassName = ot.test(i.getElementsByClassName),
            e.getById = a(function(n) {
                return s.appendChild(n).id = f,
                !i.getElementsByName || !i.getElementsByName(f).length
            }),
            e.getById ? (t.filter.ID = function(n) {
                var t = n.replace(y, p);
                return function(n) {
                    return n.getAttribute("id") === t
                }
            }
            ,
            t.find.ID = function(n, t) {
                if ("undefined" != typeof t.getElementById && h) {
                    var i = t.getElementById(n);
                    return i ? [i] : []
                }
            }
            ) : (t.filter.ID = function(n) {
                var t = n.replace(y, p);
                return function(n) {
                    var i = "undefined" != typeof n.getAttributeNode && n.getAttributeNode("id");
                    return i && i.value === t
                }
            }
            ,
            t.find.ID = function(n, t) {
                if ("undefined" != typeof t.getElementById && h) {
                    var r, u, f, i = t.getElementById(n);
                    if (i) {
                        if ((r = i.getAttributeNode("id")) && r.value === n)
                            return [i];
                        for (f = t.getElementsByName(n),
                        u = 0; i = f[u++]; )
                            if ((r = i.getAttributeNode("id")) && r.value === n)
                                return [i]
                    }
                    return []
                }
            }
            ),
            t.find.TAG = e.getElementsByTagName ? function(n, t) {
                return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(n) : e.qsa ? t.querySelectorAll(n) : void 0
            }
            : function(n, t) {
                var i, r = [], f = 0, u = t.getElementsByTagName(n);
                if ("*" === n) {
                    while (i = u[f++])
                        1 === i.nodeType && r.push(i);
                    return r
                }
                return u
            }
            ,
            t.find.CLASS = e.getElementsByClassName && function(n, t) {
                if ("undefined" != typeof t.getElementsByClassName && h)
                    return t.getElementsByClassName(n)
            }
            ,
            d = [],
            o = [],
            (e.qsa = ot.test(i.querySelectorAll)) && (a(function(n) {
                s.appendChild(n).innerHTML = "<a id='" + f + "'><\/a><select id='" + f + "-\r\\' msallowcapture=''><option selected=''><\/option><\/select>";
                n.querySelectorAll("[msallowcapture^='']").length && o.push("[*^$]=" + r + "*(?:''|\"\")");
                n.querySelectorAll("[selected]").length || o.push("\\[" + r + "*(?:value|" + gt + ")");
                n.querySelectorAll("[id~=" + f + "-]").length || o.push("~=");
                n.querySelectorAll(":checked").length || o.push(":checked");
                n.querySelectorAll("a#" + f + "+*").length || o.push(".#.+[+~]")
            }),
            a(function(n) {
                n.innerHTML = "<a href='' disabled='disabled'><\/a><select disabled='disabled'><option/><\/select>";
                var t = i.createElement("input");
                t.setAttribute("type", "hidden");
                n.appendChild(t).setAttribute("name", "D");
                n.querySelectorAll("[name=d]").length && o.push("name" + r + "*[*^$|!~]?=");
                2 !== n.querySelectorAll(":enabled").length && o.push(":enabled", ":disabled");
                s.appendChild(n).disabled = !0;
                2 !== n.querySelectorAll(":disabled").length && o.push(":enabled", ":disabled");
                n.querySelectorAll("*,:x");
                o.push(",.*:")
            })),
            (e.matchesSelector = ot.test(ct = s.matches || s.webkitMatchesSelector || s.mozMatchesSelector || s.oMatchesSelector || s.msMatchesSelector)) && a(function(n) {
                e.disconnectedMatch = ct.call(n, "*");
                ct.call(n, "[s!='']:x");
                d.push("!=", ni)
            }),
            o = o.length && new RegExp(o.join("|")),
            d = d.length && new RegExp(d.join("|")),
            v = ot.test(s.compareDocumentPosition),
            et = v || ot.test(s.contains) ? function(n, t) {
                var r = 9 === n.nodeType ? n.documentElement : n
                  , i = t && t.parentNode;
                return n === i || !(!i || 1 !== i.nodeType || !(r.contains ? r.contains(i) : n.compareDocumentPosition && 16 & n.compareDocumentPosition(i)))
            }
            : function(n, t) {
                if (t)
                    while (t = t.parentNode)
                        if (t === n)
                            return !0;
                return !1
            }
            ,
            dt = v ? function(n, t) {
                if (n === t)
                    return ut = !0,
                    0;
                var r = !n.compareDocumentPosition - !t.compareDocumentPosition;
                return r || (1 & (r = (n.ownerDocument || n) === (t.ownerDocument || t) ? n.compareDocumentPosition(t) : 1) || !e.sortDetached && t.compareDocumentPosition(n) === r ? n === i || n.ownerDocument === c && et(c, n) ? -1 : t === i || t.ownerDocument === c && et(c, t) ? 1 : w ? nt(w, n) - nt(w, t) : 0 : 4 & r ? -1 : 1)
            }
            : function(n, t) {
                if (n === t)
                    return ut = !0,
                    0;
                var r, u = 0, o = n.parentNode, s = t.parentNode, f = [n], e = [t];
                if (!o || !s)
                    return n === i ? -1 : t === i ? 1 : o ? -1 : s ? 1 : w ? nt(w, n) - nt(w, t) : 0;
                if (o === s)
                    return bi(n, t);
                for (r = n; r = r.parentNode; )
                    f.unshift(r);
                for (r = t; r = r.parentNode; )
                    e.unshift(r);
                while (f[u] === e[u])
                    u++;
                return u ? bi(f[u], e[u]) : f[u] === c ? -1 : e[u] === c ? 1 : 0
            }
            ),
            i
        }
        ,
        u.matches = function(n, t) {
            return u(n, null, null, t)
        }
        ,
        u.matchesSelector = function(n, t) {
            if ((n.ownerDocument || n) !== i && b(n),
            e.matchesSelector && h && !lt[t + " "] && (!d || !d.test(t)) && (!o || !o.test(t)))
                try {
                    var r = ct.call(n, t);
                    if (r || e.disconnectedMatch || n.document && 11 !== n.document.nodeType)
                        return r
                } catch (n) {
                    lt(t, !0)
                }
            return 0 < u(t, i, null, [n]).length
        }
        ,
        u.contains = function(n, t) {
            return (n.ownerDocument || n) !== i && b(n),
            et(n, t)
        }
        ,
        u.attr = function(n, r) {
            (n.ownerDocument || n) !== i && b(n);
            var f = t.attrHandle[r.toLowerCase()]
              , u = f && nr.call(t.attrHandle, r.toLowerCase()) ? f(n, r, !h) : void 0;
            return void 0 !== u ? u : e.attributes || !h ? n.getAttribute(r) : (u = n.getAttributeNode(r)) && u.specified ? u.value : null
        }
        ,
        u.escape = function(n) {
            return (n + "").replace(yi, pi)
        }
        ,
        u.error = function(n) {
            throw new Error("Syntax error, unrecognized expression: " + n);
        }
        ,
        u.uniqueSort = function(n) {
            var r, u = [], t = 0, i = 0;
            if (ut = !e.detectDuplicates,
            w = !e.sortStable && n.slice(0),
            n.sort(dt),
            ut) {
                while (r = n[i++])
                    r === n[i] && (t = u.push(i));
                while (t--)
                    n.splice(u[t], 1)
            }
            return w = null,
            n
        }
        ,
        st = u.getText = function(n) {
            var r, i = "", u = 0, t = n.nodeType;
            if (t) {
                if (1 === t || 9 === t || 11 === t) {
                    if ("string" == typeof n.textContent)
                        return n.textContent;
                    for (n = n.firstChild; n; n = n.nextSibling)
                        i += st(n)
                } else if (3 === t || 4 === t)
                    return n.nodeValue
            } else
                while (r = n[u++])
                    i += st(r);
            return i
        }
        ,
        (t = u.selectors = {
            cacheLength: 50,
            createPseudo: l,
            match: vt,
            attrHandle: {},
            find: {},
            relative: {
                ">": {
                    dir: "parentNode",
                    first: !0
                },
                " ": {
                    dir: "parentNode"
                },
                "+": {
                    dir: "previousSibling",
                    first: !0
                },
                "~": {
                    dir: "previousSibling"
                }
            },
            preFilter: {
                ATTR: function(n) {
                    return n[1] = n[1].replace(y, p),
                    n[3] = (n[3] || n[4] || n[5] || "").replace(y, p),
                    "~=" === n[2] && (n[3] = " " + n[3] + " "),
                    n.slice(0, 4)
                },
                CHILD: function(n) {
                    return n[1] = n[1].toLowerCase(),
                    "nth" === n[1].slice(0, 3) ? (n[3] || u.error(n[0]),
                    n[4] = +(n[4] ? n[5] + (n[6] || 1) : 2 * ("even" === n[3] || "odd" === n[3])),
                    n[5] = +(n[7] + n[8] || "odd" === n[3])) : n[3] && u.error(n[0]),
                    n
                },
                PSEUDO: function(n) {
                    var i, t = !n[6] && n[2];
                    return vt.CHILD.test(n[0]) ? null : (n[3] ? n[2] = n[4] || n[5] || "" : t && or.test(t) && (i = ft(t, !0)) && (i = t.indexOf(")", t.length - i) - t.length) && (n[0] = n[0].slice(0, i),
                    n[2] = t.slice(0, i)),
                    n.slice(0, 3))
                }
            },
            filter: {
                TAG: function(n) {
                    var t = n.replace(y, p).toLowerCase();
                    return "*" === n ? function() {
                        return !0
                    }
                    : function(n) {
                        return n.nodeName && n.nodeName.toLowerCase() === t
                    }
                },
                CLASS: function(n) {
                    var t = hi[n + " "];
                    return t || (t = new RegExp("(^|" + r + ")" + n + "(" + r + "|$)")) && hi(n, function(n) {
                        return t.test("string" == typeof n.className && n.className || "undefined" != typeof n.getAttribute && n.getAttribute("class") || "")
                    })
                },
                ATTR: function(n, t, i) {
                    return function(r) {
                        var f = u.attr(r, n);
                        return null == f ? "!=" === t : !t || (f += "",
                        "=" === t ? f === i : "!=" === t ? f !== i : "^=" === t ? i && 0 === f.indexOf(i) : "*=" === t ? i && -1 < f.indexOf(i) : "$=" === t ? i && f.slice(-i.length) === i : "~=" === t ? -1 < (" " + f.replace(rr, " ") + " ").indexOf(i) : "|=" === t && (f === i || f.slice(0, i.length + 1) === i + "-"))
                    }
                },
                CHILD: function(n, t, i, r, u) {
                    var s = "nth" !== n.slice(0, 3)
                      , o = "last" !== n.slice(-4)
                      , e = "of-type" === t;
                    return 1 === r && 0 === u ? function(n) {
                        return !!n.parentNode
                    }
                    : function(t, i, h) {
                        var p, d, y, c, a, w, b = s !== o ? "nextSibling" : "previousSibling", k = t.parentNode, nt = e && t.nodeName.toLowerCase(), g = !h && !e, l = !1;
                        if (k) {
                            if (s) {
                                while (b) {
                                    for (c = t; c = c[b]; )
                                        if (e ? c.nodeName.toLowerCase() === nt : 1 === c.nodeType)
                                            return !1;
                                    w = b = "only" === n && !w && "nextSibling"
                                }
                                return !0
                            }
                            if (w = [o ? k.firstChild : k.lastChild],
                            o && g) {
                                for (l = (a = (p = (d = (y = (c = k)[f] || (c[f] = {}))[c.uniqueID] || (y[c.uniqueID] = {}))[n] || [])[0] === v && p[1]) && p[2],
                                c = a && k.childNodes[a]; c = ++a && c && c[b] || (l = a = 0) || w.pop(); )
                                    if (1 === c.nodeType && ++l && c === t) {
                                        d[n] = [v, a, l];
                                        break
                                    }
                            } else if (g && (l = a = (p = (d = (y = (c = t)[f] || (c[f] = {}))[c.uniqueID] || (y[c.uniqueID] = {}))[n] || [])[0] === v && p[1]),
                            !1 === l)
                                while (c = ++a && c && c[b] || (l = a = 0) || w.pop())
                                    if ((e ? c.nodeName.toLowerCase() === nt : 1 === c.nodeType) && ++l && (g && ((d = (y = c[f] || (c[f] = {}))[c.uniqueID] || (y[c.uniqueID] = {}))[n] = [v, l]),
                                    c === t))
                                        break;
                            return (l -= u) === r || l % r == 0 && 0 <= l / r
                        }
                    }
                },
                PSEUDO: function(n, i) {
                    var e, r = t.pseudos[n] || t.setFilters[n.toLowerCase()] || u.error("unsupported pseudo: " + n);
                    return r[f] ? r(i) : 1 < r.length ? (e = [n, n, "", i],
                    t.setFilters.hasOwnProperty(n.toLowerCase()) ? l(function(n, t) {
                        for (var e, u = r(n, i), f = u.length; f--; )
                            n[e = nt(n, u[f])] = !(t[e] = u[f])
                    }) : function(n) {
                        return r(n, 0, e)
                    }
                    ) : r
                }
            },
            pseudos: {
                not: l(function(n) {
                    var t = []
                      , r = []
                      , i = kt(n.replace(at, "$1"));
                    return i[f] ? l(function(n, t, r, u) {
                        for (var e, o = i(n, null, u, []), f = n.length; f--; )
                            (e = o[f]) && (n[f] = !(t[f] = e))
                    }) : function(n, u, f) {
                        return t[0] = n,
                        i(t, null, f, r),
                        t[0] = null,
                        !r.pop()
                    }
                }),
                has: l(function(n) {
                    return function(t) {
                        return 0 < u(n, t).length
                    }
                }),
                contains: l(function(n) {
                    return n = n.replace(y, p),
                    function(t) {
                        return -1 < (t.textContent || st(t)).indexOf(n)
                    }
                }),
                lang: l(function(n) {
                    return sr.test(n || "") || u.error("unsupported lang: " + n),
                    n = n.replace(y, p).toLowerCase(),
                    function(t) {
                        var i;
                        do
                            if (i = h ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang"))
                                return (i = i.toLowerCase()) === n || 0 === i.indexOf(n + "-");
                        while ((t = t.parentNode) && 1 === t.nodeType);
                        return !1
                    }
                }),
                target: function(t) {
                    var i = n.location && n.location.hash;
                    return i && i.slice(1) === t.id
                },
                root: function(n) {
                    return n === s
                },
                focus: function(n) {
                    return n === i.activeElement && (!i.hasFocus || i.hasFocus()) && !!(n.type || n.href || ~n.tabIndex)
                },
                enabled: ki(!1),
                disabled: ki(!0),
                checked: function(n) {
                    var t = n.nodeName.toLowerCase();
                    return "input" === t && !!n.checked || "option" === t && !!n.selected
                },
                selected: function(n) {
                    return n.parentNode && n.parentNode.selectedIndex,
                    !0 === n.selected
                },
                empty: function(n) {
                    for (n = n.firstChild; n; n = n.nextSibling)
                        if (n.nodeType < 6)
                            return !1;
                    return !0
                },
                parent: function(n) {
                    return !t.pseudos.empty(n)
                },
                header: function(n) {
                    return lr.test(n.nodeName)
                },
                input: function(n) {
                    return cr.test(n.nodeName)
                },
                button: function(n) {
                    var t = n.nodeName.toLowerCase();
                    return "input" === t && "button" === n.type || "button" === t
                },
                text: function(n) {
                    var t;
                    return "input" === n.nodeName.toLowerCase() && "text" === n.type && (null == (t = n.getAttribute("type")) || "text" === t.toLowerCase())
                },
                first: it(function() {
                    return [0]
                }),
                last: it(function(n, t) {
                    return [t - 1]
                }),
                eq: it(function(n, t, i) {
                    return [i < 0 ? i + t : i]
                }),
                even: it(function(n, t) {
                    for (var i = 0; i < t; i += 2)
                        n.push(i);
                    return n
                }),
                odd: it(function(n, t) {
                    for (var i = 1; i < t; i += 2)
                        n.push(i);
                    return n
                }),
                lt: it(function(n, t, i) {
                    for (var r = i < 0 ? i + t : t < i ? t : i; 0 <= --r; )
                        n.push(r);
                    return n
                }),
                gt: it(function(n, t, i) {
                    for (var r = i < 0 ? i + t : i; ++r < t; )
                        n.push(r);
                    return n
                })
            }
        }).pseudos.nth = t.pseudos.eq,
        {
            radio: !0,
            checkbox: !0,
            file: !0,
            password: !0,
            image: !0
        })
            t.pseudos[rt] = yr(rt);
        for (rt in {
            submit: !0,
            reset: !0
        })
            t.pseudos[rt] = pr(rt);
        return di.prototype = t.filters = t.pseudos,
        t.setFilters = new di,
        ft = u.tokenize = function(n, i) {
            var e, f, s, o, r, h, c, l = ci[n + " "];
            if (l)
                return i ? 0 : l.slice(0);
            for (r = n,
            h = [],
            c = t.preFilter; r; ) {
                for (o in e && !(f = ur.exec(r)) || (f && (r = r.slice(f[0].length) || r),
                h.push(s = [])),
                e = !1,
                (f = fr.exec(r)) && (e = f.shift(),
                s.push({
                    value: e,
                    type: f[0].replace(at, " ")
                }),
                r = r.slice(e.length)),
                t.filter)
                    (f = vt[o].exec(r)) && (!c[o] || (f = c[o](f))) && (e = f.shift(),
                    s.push({
                        value: e,
                        type: o,
                        matches: f
                    }),
                    r = r.slice(e.length));
                if (!e)
                    break
            }
            return i ? r.length : r ? u.error(n) : ci(n, h).slice(0)
        }
        ,
        kt = u.compile = function(n, r) {
            var s, c, a, o, y, p, w = [], d = [], e = li[n + " "];
            if (!e) {
                for (r || (r = ft(n)),
                s = r.length; s--; )
                    (e = ei(r[s]))[f] ? w.push(e) : d.push(e);
                (e = li(n, (c = d,
                o = 0 < (a = w).length,
                y = 0 < c.length,
                p = function(n, r, f, e, s) {
                    var l, nt, d, g = 0, p = "0", tt = n && [], w = [], it = ht, rt = n || y && t.find.TAG("*", s), ut = v += null == it ? 1 : Math.random() || .1, ft = rt.length;
                    for (s && (ht = r === i || r || s); p !== ft && null != (l = rt[p]); p++) {
                        if (y && l) {
                            for (nt = 0,
                            r || l.ownerDocument === i || (b(l),
                            f = !h); d = c[nt++]; )
                                if (d(l, r || i, f)) {
                                    e.push(l);
                                    break
                                }
                            s && (v = ut)
                        }
                        o && ((l = !d && l) && g--,
                        n && tt.push(l))
                    }
                    if (g += p,
                    o && p !== g) {
                        for (nt = 0; d = a[nt++]; )
                            d(tt, w, r, f);
                        if (n) {
                            if (0 < g)
                                while (p--)
                                    tt[p] || w[p] || (w[p] = tr.call(e));
                            w = bt(w)
                        }
                        k.apply(e, w);
                        s && !n && 0 < w.length && 1 < g + a.length && u.uniqueSort(e)
                    }
                    return s && (v = ut,
                    ht = it),
                    tt
                }
                ,
                o ? l(p) : p))).selector = n
            }
            return e
        }
        ,
        si = u.select = function(n, i, r, u) {
            var o, f, e, l, a, c = "function" == typeof n && n, s = !u && ft(n = c.selector || n);
            if (r = r || [],
            1 === s.length) {
                if (2 < (f = s[0] = s[0].slice(0)).length && "ID" === (e = f[0]).type && 9 === i.nodeType && h && t.relative[f[1].type]) {
                    if (!(i = (t.find.ID(e.matches[0].replace(y, p), i) || [])[0]))
                        return r;
                    c && (i = i.parentNode);
                    n = n.slice(f.shift().value.length)
                }
                for (o = vt.needsContext.test(n) ? 0 : f.length; o--; ) {
                    if (e = f[o],
                    t.relative[l = e.type])
                        break;
                    if ((a = t.find[l]) && (u = a(e.matches[0].replace(y, p), ti.test(f[0].type) && ri(i.parentNode) || i))) {
                        if (f.splice(o, 1),
                        !(n = u.length && pt(f)))
                            return k.apply(r, u),
                            r;
                        break
                    }
                }
            }
            return (c || kt(n, s))(u, i, !h, r, !i || ti.test(n) && ri(i.parentNode) || i),
            r
        }
        ,
        e.sortStable = f.split("").sort(dt).join("") === f,
        e.detectDuplicates = !!ut,
        b(),
        e.sortDetached = a(function(n) {
            return 1 & n.compareDocumentPosition(i.createElement("fieldset"))
        }),
        a(function(n) {
            return n.innerHTML = "<a href='#'><\/a>",
            "#" === n.firstChild.getAttribute("href")
        }) || ii("type|href|height|width", function(n, t, i) {
            if (!i)
                return n.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
        }),
        e.attributes && a(function(n) {
            return n.innerHTML = "<input/>",
            n.firstChild.setAttribute("value", ""),
            "" === n.firstChild.getAttribute("value")
        }) || ii("value", function(n, t, i) {
            if (!i && "input" === n.nodeName.toLowerCase())
                return n.defaultValue
        }),
        a(function(n) {
            return null == n.getAttribute("disabled")
        }) || ii(gt, function(n, t, i) {
            var r;
            if (!i)
                return !0 === n[t] ? t.toLowerCase() : (r = n.getAttributeNode(t)) && r.specified ? r.value : null
        }),
        u
    }(n);
    i.find = k;
    i.expr = k.selectors;
    i.expr[":"] = i.expr.pseudos;
    i.uniqueSort = i.unique = k.uniqueSort;
    i.text = k.getText;
    i.isXMLDoc = k.isXML;
    i.contains = k.contains;
    i.escapeSelector = k.escape;
    var rt = function(n, t, r) {
        for (var u = [], f = void 0 !== r; (n = n[t]) && 9 !== n.nodeType; )
            if (1 === n.nodeType) {
                if (f && i(n).is(r))
                    break;
                u.push(n)
            }
        return u
    }
      , dr = function(n, t) {
        for (var i = []; n; n = n.nextSibling)
            1 === n.nodeType && n !== t && i.push(n);
        return i
    }
      , gr = i.expr.match.needsContext;
    wi = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;
    i.filter = function(n, t, r) {
        var u = t[0];
        return r && (n = ":not(" + n + ")"),
        1 === t.length && 1 === u.nodeType ? i.find.matchesSelector(u, n) ? [u] : [] : i.find.matches(n, i.grep(t, function(n) {
            return 1 === n.nodeType
        }))
    }
    ;
    i.fn.extend({
        find: function(n) {
            var t, r, u = this.length, f = this;
            if ("string" != typeof n)
                return this.pushStack(i(n).filter(function() {
                    for (t = 0; t < u; t++)
                        if (i.contains(f[t], this))
                            return !0
                }));
            for (r = this.pushStack([]),
            t = 0; t < u; t++)
                i.find(n, f[t], r);
            return 1 < u ? i.uniqueSort(r) : r
        },
        filter: function(n) {
            return this.pushStack(bi(this, n || [], !1))
        },
        not: function(n) {
            return this.pushStack(bi(this, n || [], !0))
        },
        is: function(n) {
            return !!bi(this, "string" == typeof n && gr.test(n) ? i(n) : n || [], !1).length
        }
    });
    tu = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
    (i.fn.init = function(n, t, r) {
        var e, o;
        if (!n)
            return this;
        if (r = r || nu,
        "string" == typeof n) {
            if (!(e = "<" === n[0] && ">" === n[n.length - 1] && 3 <= n.length ? [null, n, null] : tu.exec(n)) || !e[1] && t)
                return !t || t.jquery ? (t || r).find(n) : this.constructor(t).find(n);
            if (e[1]) {
                if (t = t instanceof i ? t[0] : t,
                i.merge(this, i.parseHTML(e[1], t && t.nodeType ? t.ownerDocument || t : f, !0)),
                wi.test(e[1]) && i.isPlainObject(t))
                    for (e in t)
                        u(this[e]) ? this[e](t[e]) : this.attr(e, t[e]);
                return this
            }
            return (o = f.getElementById(e[2])) && (this[0] = o,
            this.length = 1),
            this
        }
        return n.nodeType ? (this[0] = n,
        this.length = 1,
        this) : u(n) ? void 0 !== r.ready ? r.ready(n) : n(i) : i.makeArray(n, this)
    }
    ).prototype = i.fn;
    nu = i(f);
    iu = /^(?:parents|prev(?:Until|All))/;
    ru = {
        children: !0,
        contents: !0,
        next: !0,
        prev: !0
    };
    i.fn.extend({
        has: function(n) {
            var t = i(n, this)
              , r = t.length;
            return this.filter(function() {
                for (var n = 0; n < r; n++)
                    if (i.contains(this, t[n]))
                        return !0
            })
        },
        closest: function(n, t) {
            var r, f = 0, o = this.length, u = [], e = "string" != typeof n && i(n);
            if (!gr.test(n))
                for (; f < o; f++)
                    for (r = this[f]; r && r !== t; r = r.parentNode)
                        if (r.nodeType < 11 && (e ? -1 < e.index(r) : 1 === r.nodeType && i.find.matchesSelector(r, n))) {
                            u.push(r);
                            break
                        }
            return this.pushStack(1 < u.length ? i.uniqueSort(u) : u)
        },
        index: function(n) {
            return n ? "string" == typeof n ? ii.call(i(n), this[0]) : ii.call(this, n.jquery ? n[0] : n) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        },
        add: function(n, t) {
            return this.pushStack(i.uniqueSort(i.merge(this.get(), i(n, t))))
        },
        addBack: function(n) {
            return this.add(null == n ? this.prevObject : this.prevObject.filter(n))
        }
    });
    i.each({
        parent: function(n) {
            var t = n.parentNode;
            return t && 11 !== t.nodeType ? t : null
        },
        parents: function(n) {
            return rt(n, "parentNode")
        },
        parentsUntil: function(n, t, i) {
            return rt(n, "parentNode", i)
        },
        next: function(n) {
            return uu(n, "nextSibling")
        },
        prev: function(n) {
            return uu(n, "previousSibling")
        },
        nextAll: function(n) {
            return rt(n, "nextSibling")
        },
        prevAll: function(n) {
            return rt(n, "previousSibling")
        },
        nextUntil: function(n, t, i) {
            return rt(n, "nextSibling", i)
        },
        prevUntil: function(n, t, i) {
            return rt(n, "previousSibling", i)
        },
        siblings: function(n) {
            return dr((n.parentNode || {}).firstChild, n)
        },
        children: function(n) {
            return dr(n.firstChild)
        },
        contents: function(n) {
            return "undefined" != typeof n.contentDocument ? n.contentDocument : (c(n, "template") && (n = n.content || n),
            i.merge([], n.childNodes))
        }
    }, function(n, t) {
        i.fn[n] = function(r, u) {
            var f = i.map(this, t, r);
            return "Until" !== n.slice(-5) && (u = r),
            u && "string" == typeof u && (f = i.filter(u, f)),
            1 < this.length && (ru[n] || i.uniqueSort(f),
            iu.test(n) && f.reverse()),
            this.pushStack(f)
        }
    });
    l = /[^\x20\t\r\n\f]+/g;
    i.Callbacks = function(n) {
        var a, h;
        n = "string" == typeof n ? (a = n,
        h = {},
        i.each(a.match(l) || [], function(n, t) {
            h[t] = !0
        }),
        h) : i.extend({}, n);
        var o, r, v, f, t = [], s = [], e = -1, y = function() {
            for (f = f || n.once,
            v = o = !0; s.length; e = -1)
                for (r = s.shift(); ++e < t.length; )
                    !1 === t[e].apply(r[0], r[1]) && n.stopOnFalse && (e = t.length,
                    r = !1);
            n.memory || (r = !1);
            o = !1;
            f && (t = r ? [] : "")
        }, c = {
            add: function() {
                return t && (r && !o && (e = t.length - 1,
                s.push(r)),
                function f(r) {
                    i.each(r, function(i, r) {
                        u(r) ? n.unique && c.has(r) || t.push(r) : r && r.length && "string" !== it(r) && f(r)
                    })
                }(arguments),
                r && !o && y()),
                this
            },
            remove: function() {
                return i.each(arguments, function(n, r) {
                    for (var u; -1 < (u = i.inArray(r, t, u)); )
                        t.splice(u, 1),
                        u <= e && e--
                }),
                this
            },
            has: function(n) {
                return n ? -1 < i.inArray(n, t) : 0 < t.length
            },
            empty: function() {
                return t && (t = []),
                this
            },
            disable: function() {
                return f = s = [],
                t = r = "",
                this
            },
            disabled: function() {
                return !t
            },
            lock: function() {
                return f = s = [],
                r || o || (t = r = ""),
                this
            },
            locked: function() {
                return !!f
            },
            fireWith: function(n, t) {
                return f || (t = [n, (t = t || []).slice ? t.slice() : t],
                s.push(t),
                o || y()),
                this
            },
            fire: function() {
                return c.fireWith(this, arguments),
                this
            },
            fired: function() {
                return !!v
            }
        };
        return c
    }
    ;
    i.extend({
        Deferred: function(t) {
            var f = [["notify", "progress", i.Callbacks("memory"), i.Callbacks("memory"), 2], ["resolve", "done", i.Callbacks("once memory"), i.Callbacks("once memory"), 0, "resolved"], ["reject", "fail", i.Callbacks("once memory"), i.Callbacks("once memory"), 1, "rejected"]]
              , o = "pending"
              , e = {
                state: function() {
                    return o
                },
                always: function() {
                    return r.done(arguments).fail(arguments),
                    this
                },
                "catch": function(n) {
                    return e.then(null, n)
                },
                pipe: function() {
                    var n = arguments;
                    return i.Deferred(function(t) {
                        i.each(f, function(i, f) {
                            var e = u(n[f[4]]) && n[f[4]];
                            r[f[1]](function() {
                                var n = e && e.apply(this, arguments);
                                n && u(n.promise) ? n.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[f[0] + "With"](this, e ? [n] : arguments)
                            })
                        });
                        n = null
                    }).promise()
                },
                then: function(t, r, e) {
                    function s(t, r, f, e) {
                        return function() {
                            var h = this
                              , c = arguments
                              , l = function() {
                                var n, i;
                                if (!(t < o)) {
                                    if ((n = f.apply(h, c)) === r.promise())
                                        throw new TypeError("Thenable self-resolution");
                                    i = n && ("object" == typeof n || "function" == typeof n) && n.then;
                                    u(i) ? e ? i.call(n, s(o, r, ut, e), s(o, r, fi, e)) : (o++,
                                    i.call(n, s(o, r, ut, e), s(o, r, fi, e), s(o, r, ut, r.notifyWith))) : (f !== ut && (h = void 0,
                                    c = [n]),
                                    (e || r.resolveWith)(h, c))
                                }
                            }
                              , a = e ? l : function() {
                                try {
                                    l()
                                } catch (l) {
                                    i.Deferred.exceptionHook && i.Deferred.exceptionHook(l, a.stackTrace);
                                    o <= t + 1 && (f !== fi && (h = void 0,
                                    c = [l]),
                                    r.rejectWith(h, c))
                                }
                            }
                            ;
                            t ? a() : (i.Deferred.getStackHook && (a.stackTrace = i.Deferred.getStackHook()),
                            n.setTimeout(a))
                        }
                    }
                    var o = 0;
                    return i.Deferred(function(n) {
                        f[0][3].add(s(0, n, u(e) ? e : ut, n.notifyWith));
                        f[1][3].add(s(0, n, u(t) ? t : ut));
                        f[2][3].add(s(0, n, u(r) ? r : fi))
                    }).promise()
                },
                promise: function(n) {
                    return null != n ? i.extend(n, e) : e
                }
            }
              , r = {};
            return i.each(f, function(n, t) {
                var i = t[2]
                  , u = t[5];
                e[t[1]] = i.add;
                u && i.add(function() {
                    o = u
                }, f[3 - n][2].disable, f[3 - n][3].disable, f[0][2].lock, f[0][3].lock);
                i.add(t[3].fire);
                r[t[0]] = function() {
                    return r[t[0] + "With"](this === r ? void 0 : this, arguments),
                    this
                }
                ;
                r[t[0] + "With"] = i.fireWith
            }),
            e.promise(r),
            t && t.call(r, r),
            r
        },
        when: function(n) {
            var e = arguments.length
              , t = e
              , o = Array(t)
              , f = b.call(arguments)
              , r = i.Deferred()
              , s = function(n) {
                return function(t) {
                    o[n] = this;
                    f[n] = 1 < arguments.length ? b.call(arguments) : t;
                    --e || r.resolveWith(o, f)
                }
            };
            if (e <= 1 && (fu(n, r.done(s(t)).resolve, r.reject, !e),
            "pending" === r.state() || u(f[t] && f[t].then)))
                return r.then();
            while (t--)
                fu(f[t], s(t), r.reject);
            return r.promise()
        }
    });
    eu = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
    i.Deferred.exceptionHook = function(t, i) {
        n.console && n.console.warn && t && eu.test(t.name) && n.console.warn("jQuery.Deferred exception: " + t.message, t.stack, i)
    }
    ;
    i.readyException = function(t) {
        n.setTimeout(function() {
            throw t;
        })
    }
    ;
    ei = i.Deferred();
    i.fn.ready = function(n) {
        return ei.then(n)["catch"](function(n) {
            i.readyException(n)
        }),
        this
    }
    ;
    i.extend({
        isReady: !1,
        readyWait: 1,
        ready: function(n) {
            (!0 === n ? --i.readyWait : i.isReady) || (i.isReady = !0) !== n && 0 < --i.readyWait || ei.resolveWith(f, [i])
        }
    });
    i.ready.then = ei.then;
    "complete" === f.readyState || "loading" !== f.readyState && !f.documentElement.doScroll ? n.setTimeout(i.ready) : (f.addEventListener("DOMContentLoaded", oi),
    n.addEventListener("load", oi));
    var p = function(n, t, r, f, e, o, s) {
        var h = 0
          , l = n.length
          , c = null == r;
        if ("object" === it(r))
            for (h in e = !0,
            r)
                p(n, t, h, r[h], !0, o, s);
        else if (void 0 !== f && (e = !0,
        u(f) || (s = !0),
        c && (s ? (t.call(n, f),
        t = null) : (c = t,
        t = function(n, t, r) {
            return c.call(i(n), r)
        }
        )),
        t))
            for (; h < l; h++)
                t(n[h], r, s ? f : f.call(n[h], h, t(n[h], r)));
        return e ? n : c ? t.call(n) : l ? t(n[0], r) : o
    }
      , he = /^-ms-/
      , ce = /-([a-z])/g;
    yt = function(n) {
        return 1 === n.nodeType || 9 === n.nodeType || !+n.nodeType
    }
    ;
    pt.uid = 1;
    pt.prototype = {
        cache: function(n) {
            var t = n[this.expando];
            return t || (t = {},
            yt(n) && (n.nodeType ? n[this.expando] = t : Object.defineProperty(n, this.expando, {
                value: t,
                configurable: !0
            }))),
            t
        },
        set: function(n, t, i) {
            var r, u = this.cache(n);
            if ("string" == typeof t)
                u[y(t)] = i;
            else
                for (r in t)
                    u[y(r)] = t[r];
            return u
        },
        get: function(n, t) {
            return void 0 === t ? this.cache(n) : n[this.expando] && n[this.expando][y(t)]
        },
        access: function(n, t, i) {
            return void 0 === t || t && "string" == typeof t && void 0 === i ? this.get(n, t) : (this.set(n, t, i),
            void 0 !== i ? i : t)
        },
        remove: function(n, t) {
            var u, r = n[this.expando];
            if (void 0 !== r) {
                if (void 0 !== t)
                    for (u = (t = Array.isArray(t) ? t.map(y) : (t = y(t))in r ? [t] : t.match(l) || []).length; u--; )
                        delete r[t[u]];
                (void 0 === t || i.isEmptyObject(r)) && (n.nodeType ? n[this.expando] = void 0 : delete n[this.expando])
            }
        },
        hasData: function(n) {
            var t = n[this.expando];
            return void 0 !== t && !i.isEmptyObject(t)
        }
    };
    var r = new pt
      , o = new pt
      , ae = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/
      , ve = /[A-Z]/g;
    i.extend({
        hasData: function(n) {
            return o.hasData(n) || r.hasData(n)
        },
        data: function(n, t, i) {
            return o.access(n, t, i)
        },
        removeData: function(n, t) {
            o.remove(n, t)
        },
        _data: function(n, t, i) {
            return r.access(n, t, i)
        },
        _removeData: function(n, t) {
            r.remove(n, t)
        }
    });
    i.fn.extend({
        data: function(n, t) {
            var f, u, e, i = this[0], s = i && i.attributes;
            if (void 0 === n) {
                if (this.length && (e = o.get(i),
                1 === i.nodeType && !r.get(i, "hasDataAttrs"))) {
                    for (f = s.length; f--; )
                        s[f] && 0 === (u = s[f].name).indexOf("data-") && (u = y(u.slice(5)),
                        ou(i, u, e[u]));
                    r.set(i, "hasDataAttrs", !0)
                }
                return e
            }
            return "object" == typeof n ? this.each(function() {
                o.set(this, n)
            }) : p(this, function(t) {
                var r;
                if (i && void 0 === t)
                    return void 0 !== (r = o.get(i, n)) ? r : void 0 !== (r = ou(i, n)) ? r : void 0;
                this.each(function() {
                    o.set(this, n, t)
                })
            }, null, t, 1 < arguments.length, null, !0)
        },
        removeData: function(n) {
            return this.each(function() {
                o.remove(this, n)
            })
        }
    });
    i.extend({
        queue: function(n, t, u) {
            var f;
            if (n)
                return t = (t || "fx") + "queue",
                f = r.get(n, t),
                u && (!f || Array.isArray(u) ? f = r.access(n, t, i.makeArray(u)) : f.push(u)),
                f || []
        },
        dequeue: function(n, t) {
            t = t || "fx";
            var r = i.queue(n, t)
              , e = r.length
              , u = r.shift()
              , f = i._queueHooks(n, t);
            "inprogress" === u && (u = r.shift(),
            e--);
            u && ("fx" === t && r.unshift("inprogress"),
            delete f.stop,
            u.call(n, function() {
                i.dequeue(n, t)
            }, f));
            !e && f && f.empty.fire()
        },
        _queueHooks: function(n, t) {
            var u = t + "queueHooks";
            return r.get(n, u) || r.access(n, u, {
                empty: i.Callbacks("once memory").add(function() {
                    r.remove(n, [t + "queue", u])
                })
            })
        }
    });
    i.fn.extend({
        queue: function(n, t) {
            var r = 2;
            return "string" != typeof n && (t = n,
            n = "fx",
            r--),
            arguments.length < r ? i.queue(this[0], n) : void 0 === t ? this : this.each(function() {
                var r = i.queue(this, n, t);
                i._queueHooks(this, n);
                "fx" === n && "inprogress" !== r[0] && i.dequeue(this, n)
            })
        },
        dequeue: function(n) {
            return this.each(function() {
                i.dequeue(this, n)
            })
        },
        clearQueue: function(n) {
            return this.queue(n || "fx", [])
        },
        promise: function(n, t) {
            var u, e = 1, o = i.Deferred(), f = this, s = this.length, h = function() {
                --e || o.resolveWith(f, [f])
            };
            for ("string" != typeof n && (t = n,
            n = void 0),
            n = n || "fx"; s--; )
                (u = r.get(f[s], n + "queueHooks")) && u.empty && (e++,
                u.empty.add(h));
            return h(),
            o.promise(t)
        }
    });
    var su = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source
      , wt = new RegExp("^(?:([+-])=|)(" + su + ")([a-z%]*)$","i")
      , w = ["Top", "Right", "Bottom", "Left"]
      , bt = f.documentElement
      , ft = function(n) {
        return i.contains(n.ownerDocument, n)
    }
      , ye = {
        composed: !0
    };
    bt.getRootNode && (ft = function(n) {
        return i.contains(n.ownerDocument, n) || n.getRootNode(ye) === n.ownerDocument
    }
    );
    kt = function(n, t) {
        return "none" === (n = t || n).style.display || "" === n.style.display && ft(n) && "none" === i.css(n, "display")
    }
    ;
    ki = function(n, t, i, r) {
        var f, u, e = {};
        for (u in t)
            e[u] = n.style[u],
            n.style[u] = t[u];
        for (u in f = i.apply(n, r || []),
        t)
            n.style[u] = e[u];
        return f
    }
    ;
    di = {};
    i.fn.extend({
        show: function() {
            return et(this, !0)
        },
        hide: function() {
            return et(this)
        },
        toggle: function(n) {
            return "boolean" == typeof n ? n ? this.show() : this.hide() : this.each(function() {
                kt(this) ? i(this).show() : i(this).hide()
            })
        }
    });
    var dt = /^(?:checkbox|radio)$/i
      , cu = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i
      , lu = /^$|^module$|\/(?:java|ecma)script/i
      , h = {
        option: [1, "<select multiple='multiple'>", "<\/select>"],
        thead: [1, "<table>", "<\/table>"],
        col: [2, "<table><colgroup>", "<\/colgroup><\/table>"],
        tr: [2, "<table><tbody>", "<\/tbody><\/table>"],
        td: [3, "<table><tbody><tr>", "<\/tr><\/tbody><\/table>"],
        _default: [0, "", ""]
    };
    h.optgroup = h.option;
    h.tbody = h.tfoot = h.colgroup = h.caption = h.thead;
    h.th = h.td;
    au = /<|&#?\w+;/;
    gt = f.createDocumentFragment().appendChild(f.createElement("div"));
    (si = f.createElement("input")).setAttribute("type", "radio");
    si.setAttribute("checked", "checked");
    si.setAttribute("name", "t");
    gt.appendChild(si);
    e.checkClone = gt.cloneNode(!0).cloneNode(!0).lastChild.checked;
    gt.innerHTML = "<textarea>x<\/textarea>";
    e.noCloneChecked = !!gt.cloneNode(!0).lastChild.defaultValue;
    var pe = /^key/
      , we = /^(?:mouse|pointer|contextmenu|drag|drop)|click/
      , yu = /^([^.]*)(?:\.(.+)|)/;
    i.event = {
        global: {},
        add: function(n, t, u, f, e) {
            var p, v, k, y, w, h, s, c, o, b, d, a = r.get(n);
            if (a)
                for (u.handler && (u = (p = u).handler,
                e = p.selector),
                e && i.find.matchesSelector(bt, e),
                u.guid || (u.guid = i.guid++),
                (y = a.events) || (y = a.events = {}),
                (v = a.handle) || (v = a.handle = function(t) {
                    if ("undefined" != typeof i && i.event.triggered !== t.type)
                        return i.event.dispatch.apply(n, arguments)
                }
                ),
                w = (t = (t || "").match(l) || [""]).length; w--; )
                    o = d = (k = yu.exec(t[w]) || [])[1],
                    b = (k[2] || "").split(".").sort(),
                    o && (s = i.event.special[o] || {},
                    o = (e ? s.delegateType : s.bindType) || o,
                    s = i.event.special[o] || {},
                    h = i.extend({
                        type: o,
                        origType: d,
                        data: f,
                        handler: u,
                        guid: u.guid,
                        selector: e,
                        needsContext: e && i.expr.match.needsContext.test(e),
                        namespace: b.join(".")
                    }, p),
                    (c = y[o]) || ((c = y[o] = []).delegateCount = 0,
                    s.setup && !1 !== s.setup.call(n, f, b, v) || n.addEventListener && n.addEventListener(o, v)),
                    s.add && (s.add.call(n, h),
                    h.handler.guid || (h.handler.guid = u.guid)),
                    e ? c.splice(c.delegateCount++, 0, h) : c.push(h),
                    i.event.global[o] = !0)
        },
        remove: function(n, t, u, f, e) {
            var y, k, c, v, p, s, h, a, o, b, d, w = r.hasData(n) && r.get(n);
            if (w && (v = w.events)) {
                for (p = (t = (t || "").match(l) || [""]).length; p--; )
                    if (o = d = (c = yu.exec(t[p]) || [])[1],
                    b = (c[2] || "").split(".").sort(),
                    o) {
                        for (h = i.event.special[o] || {},
                        a = v[o = (f ? h.delegateType : h.bindType) || o] || [],
                        c = c[2] && new RegExp("(^|\\.)" + b.join("\\.(?:.*\\.|)") + "(\\.|$)"),
                        k = y = a.length; y--; )
                            s = a[y],
                            !e && d !== s.origType || u && u.guid !== s.guid || c && !c.test(s.namespace) || f && f !== s.selector && ("**" !== f || !s.selector) || (a.splice(y, 1),
                            s.selector && a.delegateCount--,
                            h.remove && h.remove.call(n, s));
                        k && !a.length && (h.teardown && !1 !== h.teardown.call(n, b, w.handle) || i.removeEvent(n, o, w.handle),
                        delete v[o])
                    } else
                        for (o in v)
                            i.event.remove(n, o + t[p], u, f, !0);
                i.isEmptyObject(v) && r.remove(n, "handle events")
            }
        },
        dispatch: function(n) {
            var u, h, c, e, f, l, t = i.event.fix(n), s = new Array(arguments.length), a = (r.get(this, "events") || {})[t.type] || [], o = i.event.special[t.type] || {};
            for (s[0] = t,
            u = 1; u < arguments.length; u++)
                s[u] = arguments[u];
            if (t.delegateTarget = this,
            !o.preDispatch || !1 !== o.preDispatch.call(this, t)) {
                for (l = i.event.handlers.call(this, t, a),
                u = 0; (e = l[u++]) && !t.isPropagationStopped(); )
                    for (t.currentTarget = e.elem,
                    h = 0; (f = e.handlers[h++]) && !t.isImmediatePropagationStopped(); )
                        t.rnamespace && !1 !== f.namespace && !t.rnamespace.test(f.namespace) || (t.handleObj = f,
                        t.data = f.data,
                        void 0 !== (c = ((i.event.special[f.origType] || {}).handle || f.handler).apply(e.elem, s)) && !1 === (t.result = c) && (t.preventDefault(),
                        t.stopPropagation()));
                return o.postDispatch && o.postDispatch.call(this, t),
                t.result
            }
        },
        handlers: function(n, t) {
            var f, h, u, e, o, c = [], s = t.delegateCount, r = n.target;
            if (s && r.nodeType && !("click" === n.type && 1 <= n.button))
                for (; r !== this; r = r.parentNode || this)
                    if (1 === r.nodeType && ("click" !== n.type || !0 !== r.disabled)) {
                        for (e = [],
                        o = {},
                        f = 0; f < s; f++)
                            void 0 === o[u = (h = t[f]).selector + " "] && (o[u] = h.needsContext ? -1 < i(u, this).index(r) : i.find(u, this, null, [r]).length),
                            o[u] && e.push(h);
                        e.length && c.push({
                            elem: r,
                            handlers: e
                        })
                    }
            return r = this,
            s < t.length && c.push({
                elem: r,
                handlers: t.slice(s)
            }),
            c
        },
        addProp: function(n, t) {
            Object.defineProperty(i.Event.prototype, n, {
                enumerable: !0,
                configurable: !0,
                get: u(t) ? function() {
                    if (this.originalEvent)
                        return t(this.originalEvent)
                }
                : function() {
                    if (this.originalEvent)
                        return this.originalEvent[n]
                }
                ,
                set: function(t) {
                    Object.defineProperty(this, n, {
                        enumerable: !0,
                        configurable: !0,
                        writable: !0,
                        value: t
                    })
                }
            })
        },
        fix: function(n) {
            return n[i.expando] ? n : new i.Event(n)
        },
        special: {
            load: {
                noBubble: !0
            },
            click: {
                setup: function(n) {
                    var t = this || n;
                    return dt.test(t.type) && t.click && c(t, "input") && hi(t, "click", ot),
                    !1
                },
                trigger: function(n) {
                    var t = this || n;
                    return dt.test(t.type) && t.click && c(t, "input") && hi(t, "click"),
                    !0
                },
                _default: function(n) {
                    var t = n.target;
                    return dt.test(t.type) && t.click && c(t, "input") && r.get(t, "click") || c(t, "a")
                }
            },
            beforeunload: {
                postDispatch: function(n) {
                    void 0 !== n.result && n.originalEvent && (n.originalEvent.returnValue = n.result)
                }
            }
        }
    };
    i.removeEvent = function(n, t, i) {
        n.removeEventListener && n.removeEventListener(t, i)
    }
    ;
    i.Event = function(n, t) {
        if (!(this instanceof i.Event))
            return new i.Event(n,t);
        n && n.type ? (this.originalEvent = n,
        this.type = n.type,
        this.isDefaultPrevented = n.defaultPrevented || void 0 === n.defaultPrevented && !1 === n.returnValue ? ot : st,
        this.target = n.target && 3 === n.target.nodeType ? n.target.parentNode : n.target,
        this.currentTarget = n.currentTarget,
        this.relatedTarget = n.relatedTarget) : this.type = n;
        t && i.extend(this, t);
        this.timeStamp = n && n.timeStamp || Date.now();
        this[i.expando] = !0
    }
    ;
    i.Event.prototype = {
        constructor: i.Event,
        isDefaultPrevented: st,
        isPropagationStopped: st,
        isImmediatePropagationStopped: st,
        isSimulated: !1,
        preventDefault: function() {
            var n = this.originalEvent;
            this.isDefaultPrevented = ot;
            n && !this.isSimulated && n.preventDefault()
        },
        stopPropagation: function() {
            var n = this.originalEvent;
            this.isPropagationStopped = ot;
            n && !this.isSimulated && n.stopPropagation()
        },
        stopImmediatePropagation: function() {
            var n = this.originalEvent;
            this.isImmediatePropagationStopped = ot;
            n && !this.isSimulated && n.stopImmediatePropagation();
            this.stopPropagation()
        }
    };
    i.each({
        altKey: !0,
        bubbles: !0,
        cancelable: !0,
        changedTouches: !0,
        ctrlKey: !0,
        detail: !0,
        eventPhase: !0,
        metaKey: !0,
        pageX: !0,
        pageY: !0,
        shiftKey: !0,
        view: !0,
        char: !0,
        code: !0,
        charCode: !0,
        key: !0,
        keyCode: !0,
        button: !0,
        buttons: !0,
        clientX: !0,
        clientY: !0,
        offsetX: !0,
        offsetY: !0,
        pointerId: !0,
        pointerType: !0,
        screenX: !0,
        screenY: !0,
        targetTouches: !0,
        toElement: !0,
        touches: !0,
        which: function(n) {
            var t = n.button;
            return null == n.which && pe.test(n.type) ? null != n.charCode ? n.charCode : n.keyCode : !n.which && void 0 !== t && we.test(n.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : n.which
        }
    }, i.event.addProp);
    i.each({
        focus: "focusin",
        blur: "focusout"
    }, function(n, t) {
        i.event.special[n] = {
            setup: function() {
                return hi(this, n, be),
                !1
            },
            trigger: function() {
                return hi(this, n),
                !0
            },
            delegateType: t
        }
    });
    i.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function(n, t) {
        i.event.special[n] = {
            delegateType: t,
            bindType: t,
            handle: function(n) {
                var u, r = n.relatedTarget, f = n.handleObj;
                return r && (r === this || i.contains(this, r)) || (n.type = f.origType,
                u = f.handler.apply(this, arguments),
                n.type = t),
                u
            }
        }
    });
    i.fn.extend({
        on: function(n, t, i, r) {
            return nr(this, n, t, i, r)
        },
        one: function(n, t, i, r) {
            return nr(this, n, t, i, r, 1)
        },
        off: function(n, t, r) {
            var u, f;
            if (n && n.preventDefault && n.handleObj)
                return u = n.handleObj,
                i(n.delegateTarget).off(u.namespace ? u.origType + "." + u.namespace : u.origType, u.selector, u.handler),
                this;
            if ("object" == typeof n) {
                for (f in n)
                    this.off(f, t, n[f]);
                return this
            }
            return !1 !== t && "function" != typeof t || (r = t,
            t = void 0),
            !1 === r && (r = st),
            this.each(function() {
                i.event.remove(this, n, r, t)
            })
        }
    });
    var ke = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi
      , de = /<script|<style|<link/i
      , ge = /checked\s*(?:[^=]|=\s*.checked.)/i
      , no = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;
    i.extend({
        htmlPrefilter: function(n) {
            return n.replace(ke, "<$1><\/$2>")
        },
        clone: function(n, t, r) {
            var u, c, o, f, l, a, v, h = n.cloneNode(!0), y = ft(n);
            if (!(e.noCloneChecked || 1 !== n.nodeType && 11 !== n.nodeType || i.isXMLDoc(n)))
                for (f = s(h),
                u = 0,
                c = (o = s(n)).length; u < c; u++)
                    l = o[u],
                    a = f[u],
                    void 0,
                    "input" === (v = a.nodeName.toLowerCase()) && dt.test(l.type) ? a.checked = l.checked : "input" !== v && "textarea" !== v || (a.defaultValue = l.defaultValue);
            if (t)
                if (r)
                    for (o = o || s(n),
                    f = f || s(h),
                    u = 0,
                    c = o.length; u < c; u++)
                        wu(o[u], f[u]);
                else
                    wu(n, h);
            return 0 < (f = s(h, "script")).length && gi(f, !y && s(n, "script")),
            h
        },
        cleanData: function(n) {
            for (var u, t, f, s = i.event.special, e = 0; void 0 !== (t = n[e]); e++)
                if (yt(t)) {
                    if (u = t[r.expando]) {
                        if (u.events)
                            for (f in u.events)
                                s[f] ? i.event.remove(t, f) : i.removeEvent(t, f, u.handle);
                        t[r.expando] = void 0
                    }
                    t[o.expando] && (t[o.expando] = void 0)
                }
        }
    });
    i.fn.extend({
        detach: function(n) {
            return bu(this, n, !0)
        },
        remove: function(n) {
            return bu(this, n)
        },
        text: function(n) {
            return p(this, function(n) {
                return void 0 === n ? i.text(this) : this.empty().each(function() {
                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = n)
                })
            }, null, n, arguments.length)
        },
        append: function() {
            return ht(this, arguments, function(n) {
                1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || pu(this, n).appendChild(n)
            })
        },
        prepend: function() {
            return ht(this, arguments, function(n) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var t = pu(this, n);
                    t.insertBefore(n, t.firstChild)
                }
            })
        },
        before: function() {
            return ht(this, arguments, function(n) {
                this.parentNode && this.parentNode.insertBefore(n, this)
            })
        },
        after: function() {
            return ht(this, arguments, function(n) {
                this.parentNode && this.parentNode.insertBefore(n, this.nextSibling)
            })
        },
        empty: function() {
            for (var n, t = 0; null != (n = this[t]); t++)
                1 === n.nodeType && (i.cleanData(s(n, !1)),
                n.textContent = "");
            return this
        },
        clone: function(n, t) {
            return n = null != n && n,
            t = null == t ? n : t,
            this.map(function() {
                return i.clone(this, n, t)
            })
        },
        html: function(n) {
            return p(this, function(n) {
                var t = this[0] || {}
                  , r = 0
                  , u = this.length;
                if (void 0 === n && 1 === t.nodeType)
                    return t.innerHTML;
                if ("string" == typeof n && !de.test(n) && !h[(cu.exec(n) || ["", ""])[1].toLowerCase()]) {
                    n = i.htmlPrefilter(n);
                    try {
                        for (; r < u; r++)
                            1 === (t = this[r] || {}).nodeType && (i.cleanData(s(t, !1)),
                            t.innerHTML = n);
                        t = 0
                    } catch (n) {}
                }
                t && this.empty().append(n)
            }, null, n, arguments.length)
        },
        replaceWith: function() {
            var n = [];
            return ht(this, arguments, function(t) {
                var r = this.parentNode;
                i.inArray(this, n) < 0 && (i.cleanData(s(this)),
                r && r.replaceChild(t, this))
            }, n)
        }
    });
    i.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function(n, t) {
        i.fn[n] = function(n) {
            for (var u, f = [], e = i(n), o = e.length - 1, r = 0; r <= o; r++)
                u = r === o ? this : this.clone(!0),
                i(e[r])[t](u),
                yi.apply(f, u.get());
            return this.pushStack(f)
        }
    });
    var tr = new RegExp("^(" + su + ")(?!px)[a-z%]+$","i")
      , ci = function(t) {
        var i = t.ownerDocument.defaultView;
        return i && i.opener || (i = n),
        i.getComputedStyle(t)
    }
      , ro = new RegExp(w.join("|"),"i");
    !function() {
        function r() {
            if (t) {
                o.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0";
                t.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%";
                bt.appendChild(o).appendChild(t);
                var i = n.getComputedStyle(t);
                s = "1%" !== i.top;
                a = 12 === u(i.marginLeft);
                t.style.right = "60%";
                l = 36 === u(i.right);
                h = 36 === u(i.width);
                t.style.position = "absolute";
                c = 12 === u(t.offsetWidth / 3);
                bt.removeChild(o);
                t = null
            }
        }
        function u(n) {
            return Math.round(parseFloat(n))
        }
        var s, h, c, l, a, o = f.createElement("div"), t = f.createElement("div");
        t.style && (t.style.backgroundClip = "content-box",
        t.cloneNode(!0).style.backgroundClip = "",
        e.clearCloneStyle = "content-box" === t.style.backgroundClip,
        i.extend(e, {
            boxSizingReliable: function() {
                return r(),
                h
            },
            pixelBoxStyles: function() {
                return r(),
                l
            },
            pixelPosition: function() {
                return r(),
                s
            },
            reliableMarginLeft: function() {
                return r(),
                a
            },
            scrollboxSize: function() {
                return r(),
                c
            }
        }))
    }();
    var du = ["Webkit", "Moz", "ms"]
      , gu = f.createElement("div").style
      , nf = {};
    var uo = /^(none|table(?!-c[ea]).+)/
      , tf = /^--/
      , fo = {
        position: "absolute",
        visibility: "hidden",
        display: "block"
    }
      , rf = {
        letterSpacing: "0",
        fontWeight: "400"
    };
    i.extend({
        cssHooks: {
            opacity: {
                get: function(n, t) {
                    if (t) {
                        var i = ni(n, "opacity");
                        return "" === i ? "1" : i
                    }
                }
            }
        },
        cssNumber: {
            animationIterationCount: !0,
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            gridArea: !0,
            gridColumn: !0,
            gridColumnEnd: !0,
            gridColumnStart: !0,
            gridRow: !0,
            gridRowEnd: !0,
            gridRowStart: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {},
        style: function(n, t, r, u) {
            if (n && 3 !== n.nodeType && 8 !== n.nodeType && n.style) {
                var f, h, o, c = y(t), l = tf.test(t), s = n.style;
                if (l || (t = ir(c)),
                o = i.cssHooks[t] || i.cssHooks[c],
                void 0 === r)
                    return o && "get"in o && void 0 !== (f = o.get(n, !1, u)) ? f : s[t];
                "string" == (h = typeof r) && (f = wt.exec(r)) && f[1] && (r = hu(n, t, f),
                h = "number");
                null != r && r == r && ("number" !== h || l || (r += f && f[3] || (i.cssNumber[c] ? "" : "px")),
                e.clearCloneStyle || "" !== r || 0 !== t.indexOf("background") || (s[t] = "inherit"),
                o && "set"in o && void 0 === (r = o.set(n, r, u)) || (l ? s.setProperty(t, r) : s[t] = r))
            }
        },
        css: function(n, t, r, u) {
            var f, e, o, s = y(t);
            return tf.test(t) || (t = ir(s)),
            (o = i.cssHooks[t] || i.cssHooks[s]) && "get"in o && (f = o.get(n, !0, r)),
            void 0 === f && (f = ni(n, t, u)),
            "normal" === f && t in rf && (f = rf[t]),
            "" === r || r ? (e = parseFloat(f),
            !0 === r || isFinite(e) ? e || 0 : f) : f
        }
    });
    i.each(["height", "width"], function(n, t) {
        i.cssHooks[t] = {
            get: function(n, r, u) {
                if (r)
                    return !uo.test(i.css(n, "display")) || n.getClientRects().length && n.getBoundingClientRect().width ? ff(n, t, u) : ki(n, fo, function() {
                        return ff(n, t, u)
                    })
            },
            set: function(n, r, u) {
                var s, f = ci(n), h = !e.scrollboxSize() && "absolute" === f.position, c = (h || u) && "border-box" === i.css(n, "boxSizing", !1, f), o = u ? rr(n, t, u, c, f) : 0;
                return c && h && (o -= Math.ceil(n["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(f[t]) - rr(n, t, "border", !1, f) - .5)),
                o && (s = wt.exec(r)) && "px" !== (s[3] || "px") && (n.style[t] = r,
                r = i.css(n, t)),
                uf(0, r, o)
            }
        }
    });
    i.cssHooks.marginLeft = ku(e.reliableMarginLeft, function(n, t) {
        if (t)
            return (parseFloat(ni(n, "marginLeft")) || n.getBoundingClientRect().left - ki(n, {
                marginLeft: 0
            }, function() {
                return n.getBoundingClientRect().left
            })) + "px"
    });
    i.each({
        margin: "",
        padding: "",
        border: "Width"
    }, function(n, t) {
        i.cssHooks[n + t] = {
            expand: function(i) {
                for (var r = 0, f = {}, u = "string" == typeof i ? i.split(" ") : [i]; r < 4; r++)
                    f[n + w[r] + t] = u[r] || u[r - 2] || u[0];
                return f
            }
        };
        "margin" !== n && (i.cssHooks[n + t].set = uf)
    });
    i.fn.extend({
        css: function(n, t) {
            return p(this, function(n, t, r) {
                var f, e, o = {}, u = 0;
                if (Array.isArray(t)) {
                    for (f = ci(n),
                    e = t.length; u < e; u++)
                        o[t[u]] = i.css(n, t[u], !1, f);
                    return o
                }
                return void 0 !== r ? i.style(n, t, r) : i.css(n, t)
            }, n, t, 1 < arguments.length)
        }
    });
    ((i.Tween = a).prototype = {
        constructor: a,
        init: function(n, t, r, u, f, e) {
            this.elem = n;
            this.prop = r;
            this.easing = f || i.easing._default;
            this.options = t;
            this.start = this.now = this.cur();
            this.end = u;
            this.unit = e || (i.cssNumber[r] ? "" : "px")
        },
        cur: function() {
            var n = a.propHooks[this.prop];
            return n && n.get ? n.get(this) : a.propHooks._default.get(this)
        },
        run: function(n) {
            var t, r = a.propHooks[this.prop];
            return this.pos = this.options.duration ? t = i.easing[this.easing](n, this.options.duration * n, 0, 1, this.options.duration) : t = n,
            this.now = (this.end - this.start) * t + this.start,
            this.options.step && this.options.step.call(this.elem, this.now, this),
            r && r.set ? r.set(this) : a.propHooks._default.set(this),
            this
        }
    }).init.prototype = a.prototype;
    (a.propHooks = {
        _default: {
            get: function(n) {
                var t;
                return 1 !== n.elem.nodeType || null != n.elem[n.prop] && null == n.elem.style[n.prop] ? n.elem[n.prop] : (t = i.css(n.elem, n.prop, "")) && "auto" !== t ? t : 0
            },
            set: function(n) {
                i.fx.step[n.prop] ? i.fx.step[n.prop](n) : 1 !== n.elem.nodeType || !i.cssHooks[n.prop] && null == n.elem.style[ir(n.prop)] ? n.elem[n.prop] = n.now : i.style(n.elem, n.prop, n.now + n.unit)
            }
        }
    }).scrollTop = a.propHooks.scrollLeft = {
        set: function(n) {
            n.elem.nodeType && n.elem.parentNode && (n.elem[n.prop] = n.now)
        }
    };
    i.easing = {
        linear: function(n) {
            return n
        },
        swing: function(n) {
            return .5 - Math.cos(n * Math.PI) / 2
        },
        _default: "swing"
    };
    i.fx = a.prototype.init;
    i.fx.step = {};
    sf = /^(?:toggle|show|hide)$/;
    hf = /queueHooks$/;
    i.Animation = i.extend(v, {
        tweeners: {
            "*": [function(n, t) {
                var i = this.createTween(n, t);
                return hu(i.elem, n, wt.exec(t), i),
                i
            }
            ]
        },
        tweener: function(n, t) {
            u(n) ? (t = n,
            n = ["*"]) : n = n.match(l);
            for (var i, r = 0, f = n.length; r < f; r++)
                i = n[r],
                v.tweeners[i] = v.tweeners[i] || [],
                v.tweeners[i].unshift(t)
        },
        prefilters: [function(n, t, u) {
            var f, y, w, c, b, h, o, l, k = "width"in t || "height"in t, v = this, p = {}, s = n.style, a = n.nodeType && kt(n), e = r.get(n, "fxshow");
            for (f in u.queue || (null == (c = i._queueHooks(n, "fx")).unqueued && (c.unqueued = 0,
            b = c.empty.fire,
            c.empty.fire = function() {
                c.unqueued || b()
            }
            ),
            c.unqueued++,
            v.always(function() {
                v.always(function() {
                    c.unqueued--;
                    i.queue(n, "fx").length || c.empty.fire()
                })
            })),
            t)
                if (y = t[f],
                sf.test(y)) {
                    if (delete t[f],
                    w = w || "toggle" === y,
                    y === (a ? "hide" : "show")) {
                        if ("show" !== y || !e || void 0 === e[f])
                            continue;
                        a = !0
                    }
                    p[f] = e && e[f] || i.style(n, f)
                }
            if ((h = !i.isEmptyObject(t)) || !i.isEmptyObject(p))
                for (f in k && 1 === n.nodeType && (u.overflow = [s.overflow, s.overflowX, s.overflowY],
                null == (o = e && e.display) && (o = r.get(n, "display")),
                "none" === (l = i.css(n, "display")) && (o ? l = o : (et([n], !0),
                o = n.style.display || o,
                l = i.css(n, "display"),
                et([n]))),
                ("inline" === l || "inline-block" === l && null != o) && "none" === i.css(n, "float") && (h || (v.done(function() {
                    s.display = o
                }),
                null == o && (l = s.display,
                o = "none" === l ? "" : l)),
                s.display = "inline-block")),
                u.overflow && (s.overflow = "hidden",
                v.always(function() {
                    s.overflow = u.overflow[0];
                    s.overflowX = u.overflow[1];
                    s.overflowY = u.overflow[2]
                })),
                h = !1,
                p)
                    h || (e ? "hidden"in e && (a = e.hidden) : e = r.access(n, "fxshow", {
                        display: o
                    }),
                    w && (e.hidden = !a),
                    a && et([n], !0),
                    v.done(function() {
                        for (f in a || et([n]),
                        r.remove(n, "fxshow"),
                        p)
                            i.style(n, f, p[f])
                    })),
                    h = lf(a ? e[f] : 0, f, v),
                    f in e || (e[f] = h.start,
                    a && (h.end = h.start,
                    h.start = 0))
        }
        ],
        prefilter: function(n, t) {
            t ? v.prefilters.unshift(n) : v.prefilters.push(n)
        }
    });
    i.speed = function(n, t, r) {
        var f = n && "object" == typeof n ? i.extend({}, n) : {
            complete: r || !r && t || u(n) && n,
            duration: n,
            easing: r && t || t && !u(t) && t
        };
        return i.fx.off ? f.duration = 0 : "number" != typeof f.duration && (f.duration = f.duration in i.fx.speeds ? i.fx.speeds[f.duration] : i.fx.speeds._default),
        null != f.queue && !0 !== f.queue || (f.queue = "fx"),
        f.old = f.complete,
        f.complete = function() {
            u(f.old) && f.old.call(this);
            f.queue && i.dequeue(this, f.queue)
        }
        ,
        f
    }
    ;
    i.fn.extend({
        fadeTo: function(n, t, i, r) {
            return this.filter(kt).css("opacity", 0).show().end().animate({
                opacity: t
            }, n, i, r)
        },
        animate: function(n, t, u, f) {
            var s = i.isEmptyObject(n)
              , o = i.speed(t, u, f)
              , e = function() {
                var t = v(this, i.extend({}, n), o);
                (s || r.get(this, "finish")) && t.stop(!0)
            };
            return e.finish = e,
            s || !1 === o.queue ? this.each(e) : this.queue(o.queue, e)
        },
        stop: function(n, t, u) {
            var f = function(n) {
                var t = n.stop;
                delete n.stop;
                t(u)
            };
            return "string" != typeof n && (u = t,
            t = n,
            n = void 0),
            t && !1 !== n && this.queue(n || "fx", []),
            this.each(function() {
                var s = !0
                  , t = null != n && n + "queueHooks"
                  , o = i.timers
                  , e = r.get(this);
                if (t)
                    e[t] && e[t].stop && f(e[t]);
                else
                    for (t in e)
                        e[t] && e[t].stop && hf.test(t) && f(e[t]);
                for (t = o.length; t--; )
                    o[t].elem !== this || null != n && o[t].queue !== n || (o[t].anim.stop(u),
                    s = !1,
                    o.splice(t, 1));
                !s && u || i.dequeue(this, n)
            })
        },
        finish: function(n) {
            return !1 !== n && (n = n || "fx"),
            this.each(function() {
                var t, e = r.get(this), u = e[n + "queue"], o = e[n + "queueHooks"], f = i.timers, s = u ? u.length : 0;
                for (e.finish = !0,
                i.queue(this, n, []),
                o && o.stop && o.stop.call(this, !0),
                t = f.length; t--; )
                    f[t].elem === this && f[t].queue === n && (f[t].anim.stop(!0),
                    f.splice(t, 1));
                for (t = 0; t < s; t++)
                    u[t] && u[t].finish && u[t].finish.call(this);
                delete e.finish
            })
        }
    });
    i.each(["toggle", "show", "hide"], function(n, t) {
        var r = i.fn[t];
        i.fn[t] = function(n, i, u) {
            return null == n || "boolean" == typeof n ? r.apply(this, arguments) : this.animate(ai(t, !0), n, i, u)
        }
    });
    i.each({
        slideDown: ai("show"),
        slideUp: ai("hide"),
        slideToggle: ai("toggle"),
        fadeIn: {
            opacity: "show"
        },
        fadeOut: {
            opacity: "hide"
        },
        fadeToggle: {
            opacity: "toggle"
        }
    }, function(n, t) {
        i.fn[n] = function(n, i, r) {
            return this.animate(t, n, i, r)
        }
    });
    i.timers = [];
    i.fx.tick = function() {
        var r, n = 0, t = i.timers;
        for (ct = Date.now(); n < t.length; n++)
            (r = t[n])() || t[n] !== r || t.splice(n--, 1);
        t.length || i.fx.stop();
        ct = void 0
    }
    ;
    i.fx.timer = function(n) {
        i.timers.push(n);
        i.fx.start()
    }
    ;
    i.fx.interval = 13;
    i.fx.start = function() {
        li || (li = !0,
        ur())
    }
    ;
    i.fx.stop = function() {
        li = null
    }
    ;
    i.fx.speeds = {
        slow: 600,
        fast: 200,
        _default: 400
    };
    i.fn.delay = function(t, r) {
        return t = i.fx && i.fx.speeds[t] || t,
        r = r || "fx",
        this.queue(r, function(i, r) {
            var u = n.setTimeout(i, t);
            r.stop = function() {
                n.clearTimeout(u)
            }
        })
    }
    ;
    lt = f.createElement("input");
    ef = f.createElement("select").appendChild(f.createElement("option"));
    lt.type = "checkbox";
    e.checkOn = "" !== lt.value;
    e.optSelected = ef.selected;
    (lt = f.createElement("input")).value = "t";
    lt.type = "radio";
    e.radioValue = "t" === lt.value;
    at = i.expr.attrHandle;
    i.fn.extend({
        attr: function(n, t) {
            return p(this, i.attr, n, t, 1 < arguments.length)
        },
        removeAttr: function(n) {
            return this.each(function() {
                i.removeAttr(this, n)
            })
        }
    });
    i.extend({
        attr: function(n, t, r) {
            var f, u, e = n.nodeType;
            if (3 !== e && 8 !== e && 2 !== e)
                return "undefined" == typeof n.getAttribute ? i.prop(n, t, r) : (1 === e && i.isXMLDoc(n) || (u = i.attrHooks[t.toLowerCase()] || (i.expr.match.bool.test(t) ? af : void 0)),
                void 0 !== r ? null === r ? void i.removeAttr(n, t) : u && "set"in u && void 0 !== (f = u.set(n, r, t)) ? f : (n.setAttribute(t, r + ""),
                r) : u && "get"in u && null !== (f = u.get(n, t)) ? f : null == (f = i.find.attr(n, t)) ? void 0 : f)
        },
        attrHooks: {
            type: {
                set: function(n, t) {
                    if (!e.radioValue && "radio" === t && c(n, "input")) {
                        var i = n.value;
                        return n.setAttribute("type", t),
                        i && (n.value = i),
                        t
                    }
                }
            }
        },
        removeAttr: function(n, t) {
            var i, u = 0, r = t && t.match(l);
            if (r && 1 === n.nodeType)
                while (i = r[u++])
                    n.removeAttribute(i)
        }
    });
    af = {
        set: function(n, t, r) {
            return !1 === t ? i.removeAttr(n, r) : n.setAttribute(r, r),
            r
        }
    };
    i.each(i.expr.match.bool.source.match(/\w+/g), function(n, t) {
        var r = at[t] || i.find.attr;
        at[t] = function(n, t, i) {
            var f, e, u = t.toLowerCase();
            return i || (e = at[u],
            at[u] = f,
            f = null != r(n, t, i) ? u : null,
            at[u] = e),
            f
        }
    });
    vf = /^(?:input|select|textarea|button)$/i;
    yf = /^(?:a|area)$/i;
    i.fn.extend({
        prop: function(n, t) {
            return p(this, i.prop, n, t, 1 < arguments.length)
        },
        removeProp: function(n) {
            return this.each(function() {
                delete this[i.propFix[n] || n]
            })
        }
    });
    i.extend({
        prop: function(n, t, r) {
            var f, u, e = n.nodeType;
            if (3 !== e && 8 !== e && 2 !== e)
                return 1 === e && i.isXMLDoc(n) || (t = i.propFix[t] || t,
                u = i.propHooks[t]),
                void 0 !== r ? u && "set"in u && void 0 !== (f = u.set(n, r, t)) ? f : n[t] = r : u && "get"in u && null !== (f = u.get(n, t)) ? f : n[t]
        },
        propHooks: {
            tabIndex: {
                get: function(n) {
                    var t = i.find.attr(n, "tabindex");
                    return t ? parseInt(t, 10) : vf.test(n.nodeName) || yf.test(n.nodeName) && n.href ? 0 : -1
                }
            }
        },
        propFix: {
            "for": "htmlFor",
            "class": "className"
        }
    });
    e.optSelected || (i.propHooks.selected = {
        get: function(n) {
            var t = n.parentNode;
            return t && t.parentNode && t.parentNode.selectedIndex,
            null
        },
        set: function(n) {
            var t = n.parentNode;
            t && (t.selectedIndex,
            t.parentNode && t.parentNode.selectedIndex)
        }
    });
    i.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
        i.propFix[this.toLowerCase()] = this
    });
    i.fn.extend({
        addClass: function(n) {
            var o, t, r, f, e, s, h, c = 0;
            if (u(n))
                return this.each(function(t) {
                    i(this).addClass(n.call(this, t, nt(this)))
                });
            if ((o = fr(n)).length)
                while (t = this[c++])
                    if (f = nt(t),
                    r = 1 === t.nodeType && " " + g(f) + " ") {
                        for (s = 0; e = o[s++]; )
                            r.indexOf(" " + e + " ") < 0 && (r += e + " ");
                        f !== (h = g(r)) && t.setAttribute("class", h)
                    }
            return this
        },
        removeClass: function(n) {
            var o, r, t, f, e, s, h, c = 0;
            if (u(n))
                return this.each(function(t) {
                    i(this).removeClass(n.call(this, t, nt(this)))
                });
            if (!arguments.length)
                return this.attr("class", "");
            if ((o = fr(n)).length)
                while (r = this[c++])
                    if (f = nt(r),
                    t = 1 === r.nodeType && " " + g(f) + " ") {
                        for (s = 0; e = o[s++]; )
                            while (-1 < t.indexOf(" " + e + " "))
                                t = t.replace(" " + e + " ", " ");
                        f !== (h = g(t)) && r.setAttribute("class", h)
                    }
            return this
        },
        toggleClass: function(n, t) {
            var f = typeof n
              , e = "string" === f || Array.isArray(n);
            return "boolean" == typeof t && e ? t ? this.addClass(n) : this.removeClass(n) : u(n) ? this.each(function(r) {
                i(this).toggleClass(n.call(this, r, nt(this), t), t)
            }) : this.each(function() {
                var t, o, u, s;
                if (e)
                    for (o = 0,
                    u = i(this),
                    s = fr(n); t = s[o++]; )
                        u.hasClass(t) ? u.removeClass(t) : u.addClass(t);
                else
                    void 0 !== n && "boolean" !== f || ((t = nt(this)) && r.set(this, "__className__", t),
                    this.setAttribute && this.setAttribute("class", t || !1 === n ? "" : r.get(this, "__className__") || ""))
            })
        },
        hasClass: function(n) {
            for (var t, r = 0, i = " " + n + " "; t = this[r++]; )
                if (1 === t.nodeType && -1 < (" " + g(nt(t)) + " ").indexOf(i))
                    return !0;
            return !1
        }
    });
    pf = /\r/g;
    i.fn.extend({
        val: function(n) {
            var t, r, e, f = this[0];
            return arguments.length ? (e = u(n),
            this.each(function(r) {
                var u;
                1 === this.nodeType && (null == (u = e ? n.call(this, r, i(this).val()) : n) ? u = "" : "number" == typeof u ? u += "" : Array.isArray(u) && (u = i.map(u, function(n) {
                    return null == n ? "" : n + ""
                })),
                (t = i.valHooks[this.type] || i.valHooks[this.nodeName.toLowerCase()]) && "set"in t && void 0 !== t.set(this, u, "value") || (this.value = u))
            })) : f ? (t = i.valHooks[f.type] || i.valHooks[f.nodeName.toLowerCase()]) && "get"in t && void 0 !== (r = t.get(f, "value")) ? r : "string" == typeof (r = f.value) ? r.replace(pf, "") : null == r ? "" : r : void 0
        }
    });
    i.extend({
        valHooks: {
            option: {
                get: function(n) {
                    var t = i.find.attr(n, "value");
                    return null != t ? t : g(i.text(n))
                }
            },
            select: {
                get: function(n) {
                    for (var e, t, o = n.options, u = n.selectedIndex, f = "select-one" === n.type, s = f ? null : [], h = f ? u + 1 : o.length, r = u < 0 ? h : f ? u : 0; r < h; r++)
                        if (((t = o[r]).selected || r === u) && !t.disabled && (!t.parentNode.disabled || !c(t.parentNode, "optgroup"))) {
                            if (e = i(t).val(),
                            f)
                                return e;
                            s.push(e)
                        }
                    return s
                },
                set: function(n, t) {
                    for (var r, u, f = n.options, e = i.makeArray(t), o = f.length; o--; )
                        ((u = f[o]).selected = -1 < i.inArray(i.valHooks.option.get(u), e)) && (r = !0);
                    return r || (n.selectedIndex = -1),
                    e
                }
            }
        }
    });
    i.each(["radio", "checkbox"], function() {
        i.valHooks[this] = {
            set: function(n, t) {
                if (Array.isArray(t))
                    return n.checked = -1 < i.inArray(i(n).val(), t)
            }
        };
        e.checkOn || (i.valHooks[this].get = function(n) {
            return null === n.getAttribute("value") ? "on" : n.value
        }
        )
    });
    e.focusin = "onfocusin"in n;
    er = /^(?:focusinfocus|focusoutblur)$/;
    or = function(n) {
        n.stopPropagation()
    }
    ;
    i.extend(i.event, {
        trigger: function(t, e, o, s) {
            var k, c, l, d, v, y, a, p, w = [o || f], h = ui.call(t, "type") ? t.type : t, b = ui.call(t, "namespace") ? t.namespace.split(".") : [];
            if (c = p = l = o = o || f,
            3 !== o.nodeType && 8 !== o.nodeType && !er.test(h + i.event.triggered) && (-1 < h.indexOf(".") && (h = (b = h.split(".")).shift(),
            b.sort()),
            v = h.indexOf(":") < 0 && "on" + h,
            (t = t[i.expando] ? t : new i.Event(h,"object" == typeof t && t)).isTrigger = s ? 2 : 3,
            t.namespace = b.join("."),
            t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + b.join("\\.(?:.*\\.|)") + "(\\.|$)") : null,
            t.result = void 0,
            t.target || (t.target = o),
            e = null == e ? [t] : i.makeArray(e, [t]),
            a = i.event.special[h] || {},
            s || !a.trigger || !1 !== a.trigger.apply(o, e))) {
                if (!s && !a.noBubble && !tt(o)) {
                    for (d = a.delegateType || h,
                    er.test(d + h) || (c = c.parentNode); c; c = c.parentNode)
                        w.push(c),
                        l = c;
                    l === (o.ownerDocument || f) && w.push(l.defaultView || l.parentWindow || n)
                }
                for (k = 0; (c = w[k++]) && !t.isPropagationStopped(); )
                    p = c,
                    t.type = 1 < k ? d : a.bindType || h,
                    (y = (r.get(c, "events") || {})[t.type] && r.get(c, "handle")) && y.apply(c, e),
                    (y = v && c[v]) && y.apply && yt(c) && (t.result = y.apply(c, e),
                    !1 === t.result && t.preventDefault());
                return t.type = h,
                s || t.isDefaultPrevented() || a._default && !1 !== a._default.apply(w.pop(), e) || !yt(o) || v && u(o[h]) && !tt(o) && ((l = o[v]) && (o[v] = null),
                i.event.triggered = h,
                t.isPropagationStopped() && p.addEventListener(h, or),
                o[h](),
                t.isPropagationStopped() && p.removeEventListener(h, or),
                i.event.triggered = void 0,
                l && (o[v] = l)),
                t.result
            }
        },
        simulate: function(n, t, r) {
            var u = i.extend(new i.Event, r, {
                type: n,
                isSimulated: !0
            });
            i.event.trigger(u, null, t)
        }
    });
    i.fn.extend({
        trigger: function(n, t) {
            return this.each(function() {
                i.event.trigger(n, t, this)
            })
        },
        triggerHandler: function(n, t) {
            var r = this[0];
            if (r)
                return i.event.trigger(n, t, r, !0)
        }
    });
    e.focusin || i.each({
        focus: "focusin",
        blur: "focusout"
    }, function(n, t) {
        var u = function(n) {
            i.event.simulate(t, n.target, i.event.fix(n))
        };
        i.event.special[t] = {
            setup: function() {
                var i = this.ownerDocument || this
                  , f = r.access(i, t);
                f || i.addEventListener(n, u, !0);
                r.access(i, t, (f || 0) + 1)
            },
            teardown: function() {
                var i = this.ownerDocument || this
                  , f = r.access(i, t) - 1;
                f ? r.access(i, t, f) : (i.removeEventListener(n, u, !0),
                r.remove(i, t))
            }
        }
    });
    var ti = n.location
      , wf = Date.now()
      , sr = /\?/;
    i.parseXML = function(t) {
        var r;
        if (!t || "string" != typeof t)
            return null;
        try {
            r = (new n.DOMParser).parseFromString(t, "text/xml")
        } catch (t) {
            r = void 0
        }
        return r && !r.getElementsByTagName("parsererror").length || i.error("Invalid XML: " + t),
        r
    }
    ;
    var eo = /\[\]$/
      , bf = /\r?\n/g
      , oo = /^(?:submit|button|image|reset|file)$/i
      , so = /^(?:input|select|textarea|keygen)/i;
    i.param = function(n, t) {
        var r, f = [], e = function(n, t) {
            var i = u(t) ? t() : t;
            f[f.length] = encodeURIComponent(n) + "=" + encodeURIComponent(null == i ? "" : i)
        };
        if (null == n)
            return "";
        if (Array.isArray(n) || n.jquery && !i.isPlainObject(n))
            i.each(n, function() {
                e(this.name, this.value)
            });
        else
            for (r in n)
                hr(r, n[r], t, e);
        return f.join("&")
    }
    ;
    i.fn.extend({
        serialize: function() {
            return i.param(this.serializeArray())
        },
        serializeArray: function() {
            return this.map(function() {
                var n = i.prop(this, "elements");
                return n ? i.makeArray(n) : this
            }).filter(function() {
                var n = this.type;
                return this.name && !i(this).is(":disabled") && so.test(this.nodeName) && !oo.test(n) && (this.checked || !dt.test(n))
            }).map(function(n, t) {
                var r = i(this).val();
                return null == r ? null : Array.isArray(r) ? i.map(r, function(n) {
                    return {
                        name: t.name,
                        value: n.replace(bf, "\r\n")
                    }
                }) : {
                    name: t.name,
                    value: r.replace(bf, "\r\n")
                }
            }).get()
        }
    });
    var ho = /%20/g
      , co = /#.*$/
      , lo = /([?&])_=[^&]*/
      , ao = /^(.*?):[ \t]*([^\r\n]*)$/gm
      , vo = /^(?:GET|HEAD)$/
      , yo = /^\/\//
      , kf = {}
      , cr = {}
      , df = "*/".concat("*")
      , lr = f.createElement("a");
    return lr.href = ti.href,
    i.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: ti.href,
            type: "GET",
            isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(ti.protocol),
            global: !0,
            processData: !0,
            "async": !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": df,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {
                xml: /\bxml\b/,
                html: /\bhtml/,
                json: /\bjson\b/
            },
            responseFields: {
                xml: "responseXML",
                text: "responseText",
                json: "responseJSON"
            },
            converters: {
                "* text": String,
                "text html": !0,
                "text json": JSON.parse,
                "text xml": i.parseXML
            },
            flatOptions: {
                url: !0,
                context: !0
            }
        },
        ajaxSetup: function(n, t) {
            return t ? ar(ar(n, i.ajaxSettings), t) : ar(i.ajaxSettings, n)
        },
        ajaxPrefilter: gf(kf),
        ajaxTransport: gf(cr),
        ajax: function(t, r) {
            function b(t, r, f, c) {
                var v, rt, b, p, g, l = r;
                s || (s = !0,
                d && n.clearTimeout(d),
                a = void 0,
                k = c || "",
                e.readyState = 0 < t ? 4 : 0,
                v = 200 <= t && t < 300 || 304 === t,
                f && (p = function(n, t, i) {
                    for (var e, u, f, o, s = n.contents, r = n.dataTypes; "*" === r[0]; )
                        r.shift(),
                        void 0 === e && (e = n.mimeType || t.getResponseHeader("Content-Type"));
                    if (e)
                        for (u in s)
                            if (s[u] && s[u].test(e)) {
                                r.unshift(u);
                                break
                            }
                    if (r[0]in i)
                        f = r[0];
                    else {
                        for (u in i) {
                            if (!r[0] || n.converters[u + " " + r[0]]) {
                                f = u;
                                break
                            }
                            o || (o = u)
                        }
                        f = f || o
                    }
                    if (f)
                        return f !== r[0] && r.unshift(f),
                        i[f]
                }(u, e, f)),
                p = function(n, t, i, r) {
                    var h, u, f, s, e, o = {}, c = n.dataTypes.slice();
                    if (c[1])
                        for (f in n.converters)
                            o[f.toLowerCase()] = n.converters[f];
                    for (u = c.shift(); u; )
                        if (n.responseFields[u] && (i[n.responseFields[u]] = t),
                        !e && r && n.dataFilter && (t = n.dataFilter(t, n.dataType)),
                        e = u,
                        u = c.shift())
                            if ("*" === u)
                                u = e;
                            else if ("*" !== e && e !== u) {
                                if (!(f = o[e + " " + u] || o["* " + u]))
                                    for (h in o)
                                        if ((s = h.split(" "))[1] === u && (f = o[e + " " + s[0]] || o["* " + s[0]])) {
                                            !0 === f ? f = o[h] : !0 !== o[h] && (u = s[0],
                                            c.unshift(s[1]));
                                            break
                                        }
                                if (!0 !== f)
                                    if (f && n.throws)
                                        t = f(t);
                                    else
                                        try {
                                            t = f(t)
                                        } catch (n) {
                                            return {
                                                state: "parsererror",
                                                error: f ? n : "No conversion from " + e + " to " + u
                                            }
                                        }
                            }
                    return {
                        state: "success",
                        data: t
                    }
                }(u, p, e, v),
                v ? (u.ifModified && ((g = e.getResponseHeader("Last-Modified")) && (i.lastModified[o] = g),
                (g = e.getResponseHeader("etag")) && (i.etag[o] = g)),
                204 === t || "HEAD" === u.type ? l = "nocontent" : 304 === t ? l = "notmodified" : (l = p.state,
                rt = p.data,
                v = !(b = p.error))) : (b = l,
                !t && l || (l = "error",
                t < 0 && (t = 0))),
                e.status = t,
                e.statusText = (r || l) + "",
                v ? tt.resolveWith(h, [rt, l, e]) : tt.rejectWith(h, [e, l, b]),
                e.statusCode(w),
                w = void 0,
                y && nt.trigger(v ? "ajaxSuccess" : "ajaxError", [e, u, v ? rt : b]),
                it.fireWith(h, [e, l]),
                y && (nt.trigger("ajaxComplete", [e, u]),
                --i.active || i.event.trigger("ajaxStop")))
            }
            "object" == typeof t && (r = t,
            t = void 0);
            r = r || {};
            var a, o, k, v, d, c, s, y, g, p, u = i.ajaxSetup({}, r), h = u.context || u, nt = u.context && (h.nodeType || h.jquery) ? i(h) : i.event, tt = i.Deferred(), it = i.Callbacks("once memory"), w = u.statusCode || {}, rt = {}, ut = {}, ft = "canceled", e = {
                readyState: 0,
                getResponseHeader: function(n) {
                    var t;
                    if (s) {
                        if (!v)
                            for (v = {}; t = ao.exec(k); )
                                v[t[1].toLowerCase() + " "] = (v[t[1].toLowerCase() + " "] || []).concat(t[2]);
                        t = v[n.toLowerCase() + " "]
                    }
                    return null == t ? null : t.join(", ")
                },
                getAllResponseHeaders: function() {
                    return s ? k : null
                },
                setRequestHeader: function(n, t) {
                    return null == s && (n = ut[n.toLowerCase()] = ut[n.toLowerCase()] || n,
                    rt[n] = t),
                    this
                },
                overrideMimeType: function(n) {
                    return null == s && (u.mimeType = n),
                    this
                },
                statusCode: function(n) {
                    var t;
                    if (n)
                        if (s)
                            e.always(n[e.status]);
                        else
                            for (t in n)
                                w[t] = [w[t], n[t]];
                    return this
                },
                abort: function(n) {
                    var t = n || ft;
                    return a && a.abort(t),
                    b(0, t),
                    this
                }
            };
            if (tt.promise(e),
            u.url = ((t || u.url || ti.href) + "").replace(yo, ti.protocol + "//"),
            u.type = r.method || r.type || u.method || u.type,
            u.dataTypes = (u.dataType || "*").toLowerCase().match(l) || [""],
            null == u.crossDomain) {
                c = f.createElement("a");
                try {
                    c.href = u.url;
                    c.href = c.href;
                    u.crossDomain = lr.protocol + "//" + lr.host != c.protocol + "//" + c.host
                } catch (t) {
                    u.crossDomain = !0
                }
            }
            if (u.data && u.processData && "string" != typeof u.data && (u.data = i.param(u.data, u.traditional)),
            ne(kf, u, r, e),
            s)
                return e;
            for (g in (y = i.event && u.global) && 0 == i.active++ && i.event.trigger("ajaxStart"),
            u.type = u.type.toUpperCase(),
            u.hasContent = !vo.test(u.type),
            o = u.url.replace(co, ""),
            u.hasContent ? u.data && u.processData && 0 === (u.contentType || "").indexOf("application/x-www-form-urlencoded") && (u.data = u.data.replace(ho, "+")) : (p = u.url.slice(o.length),
            u.data && (u.processData || "string" == typeof u.data) && (o += (sr.test(o) ? "&" : "?") + u.data,
            delete u.data),
            !1 === u.cache && (o = o.replace(lo, "$1"),
            p = (sr.test(o) ? "&" : "?") + "_=" + wf++ + p),
            u.url = o + p),
            u.ifModified && (i.lastModified[o] && e.setRequestHeader("If-Modified-Since", i.lastModified[o]),
            i.etag[o] && e.setRequestHeader("If-None-Match", i.etag[o])),
            (u.data && u.hasContent && !1 !== u.contentType || r.contentType) && e.setRequestHeader("Content-Type", u.contentType),
            e.setRequestHeader("Accept", u.dataTypes[0] && u.accepts[u.dataTypes[0]] ? u.accepts[u.dataTypes[0]] + ("*" !== u.dataTypes[0] ? ", " + df + "; q=0.01" : "") : u.accepts["*"]),
            u.headers)
                e.setRequestHeader(g, u.headers[g]);
            if (u.beforeSend && (!1 === u.beforeSend.call(h, e, u) || s))
                return e.abort();
            if (ft = "abort",
            it.add(u.complete),
            e.done(u.success),
            e.fail(u.error),
            a = ne(cr, u, r, e)) {
                if (e.readyState = 1,
                y && nt.trigger("ajaxSend", [e, u]),
                s)
                    return e;
                u.async && 0 < u.timeout && (d = n.setTimeout(function() {
                    e.abort("timeout")
                }, u.timeout));
                try {
                    s = !1;
                    a.send(rt, b)
                } catch (t) {
                    if (s)
                        throw t;
                    b(-1, t)
                }
            } else
                b(-1, "No Transport");
            return e
        },
        getJSON: function(n, t, r) {
            return i.get(n, t, r, "json")
        },
        getScript: function(n, t) {
            return i.get(n, void 0, t, "script")
        }
    }),
    i.each(["get", "post"], function(n, t) {
        i[t] = function(n, r, f, e) {
            return u(r) && (e = e || f,
            f = r,
            r = void 0),
            i.ajax(i.extend({
                url: n,
                type: t,
                dataType: e,
                data: r,
                success: f
            }, i.isPlainObject(n) && n))
        }
    }),
    i._evalUrl = function(n, t) {
        return i.ajax({
            url: n,
            type: "GET",
            dataType: "script",
            cache: !0,
            "async": !1,
            global: !1,
            converters: {
                "text script": function() {}
            },
            dataFilter: function(n) {
                i.globalEval(n, t)
            }
        })
    }
    ,
    i.fn.extend({
        wrapAll: function(n) {
            var t;
            return this[0] && (u(n) && (n = n.call(this[0])),
            t = i(n, this[0].ownerDocument).eq(0).clone(!0),
            this[0].parentNode && t.insertBefore(this[0]),
            t.map(function() {
                for (var n = this; n.firstElementChild; )
                    n = n.firstElementChild;
                return n
            }).append(this)),
            this
        },
        wrapInner: function(n) {
            return u(n) ? this.each(function(t) {
                i(this).wrapInner(n.call(this, t))
            }) : this.each(function() {
                var t = i(this)
                  , r = t.contents();
                r.length ? r.wrapAll(n) : t.append(n)
            })
        },
        wrap: function(n) {
            var t = u(n);
            return this.each(function(r) {
                i(this).wrapAll(t ? n.call(this, r) : n)
            })
        },
        unwrap: function(n) {
            return this.parent(n).not("body").each(function() {
                i(this).replaceWith(this.childNodes)
            }),
            this
        }
    }),
    i.expr.pseudos.hidden = function(n) {
        return !i.expr.pseudos.visible(n)
    }
    ,
    i.expr.pseudos.visible = function(n) {
        return !!(n.offsetWidth || n.offsetHeight || n.getClientRects().length)
    }
    ,
    i.ajaxSettings.xhr = function() {
        try {
            return new n.XMLHttpRequest
        } catch (t) {}
    }
    ,
    te = {
        0: 200,
        1223: 204
    },
    vt = i.ajaxSettings.xhr(),
    e.cors = !!vt && "withCredentials"in vt,
    e.ajax = vt = !!vt,
    i.ajaxTransport(function(t) {
        var i, r;
        if (e.cors || vt && !t.crossDomain)
            return {
                send: function(u, f) {
                    var o, e = t.xhr();
                    if (e.open(t.type, t.url, t.async, t.username, t.password),
                    t.xhrFields)
                        for (o in t.xhrFields)
                            e[o] = t.xhrFields[o];
                    for (o in t.mimeType && e.overrideMimeType && e.overrideMimeType(t.mimeType),
                    t.crossDomain || u["X-Requested-With"] || (u["X-Requested-With"] = "XMLHttpRequest"),
                    u)
                        e.setRequestHeader(o, u[o]);
                    i = function(n) {
                        return function() {
                            i && (i = r = e.onload = e.onerror = e.onabort = e.ontimeout = e.onreadystatechange = null,
                            "abort" === n ? e.abort() : "error" === n ? "number" != typeof e.status ? f(0, "error") : f(e.status, e.statusText) : f(te[e.status] || e.status, e.statusText, "text" !== (e.responseType || "text") || "string" != typeof e.responseText ? {
                                binary: e.response
                            } : {
                                text: e.responseText
                            }, e.getAllResponseHeaders()))
                        }
                    }
                    ;
                    e.onload = i();
                    r = e.onerror = e.ontimeout = i("error");
                    void 0 !== e.onabort ? e.onabort = r : e.onreadystatechange = function() {
                        4 === e.readyState && n.setTimeout(function() {
                            i && r()
                        })
                    }
                    ;
                    i = i("abort");
                    try {
                        e.send(t.hasContent && t.data || null)
                    } catch (u) {
                        if (i)
                            throw u;
                    }
                },
                abort: function() {
                    i && i()
                }
            }
    }),
    i.ajaxPrefilter(function(n) {
        n.crossDomain && (n.contents.script = !1)
    }),
    i.ajaxSetup({
        accepts: {
            script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
        },
        contents: {
            script: /\b(?:java|ecma)script\b/
        },
        converters: {
            "text script": function(n) {
                return i.globalEval(n),
                n
            }
        }
    }),
    i.ajaxPrefilter("script", function(n) {
        void 0 === n.cache && (n.cache = !1);
        n.crossDomain && (n.type = "GET")
    }),
    i.ajaxTransport("script", function(n) {
        var r, t;
        if (n.crossDomain || n.scriptAttrs)
            return {
                send: function(u, e) {
                    r = i("<script>").attr(n.scriptAttrs || {}).prop({
                        charset: n.scriptCharset,
                        src: n.url
                    }).on("load error", t = function(n) {
                        r.remove();
                        t = null;
                        n && e("error" === n.type ? 404 : 200, n.type)
                    }
                    );
                    f.head.appendChild(r[0])
                },
                abort: function() {
                    t && t()
                }
            }
    }),
    vr = [],
    vi = /(=)\?(?=&|$)|\?\?/,
    i.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function() {
            var n = vr.pop() || i.expando + "_" + wf++;
            return this[n] = !0,
            n
        }
    }),
    i.ajaxPrefilter("json jsonp", function(t, r, f) {
        var e, o, s, h = !1 !== t.jsonp && (vi.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && vi.test(t.data) && "data");
        if (h || "jsonp" === t.dataTypes[0])
            return e = t.jsonpCallback = u(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback,
            h ? t[h] = t[h].replace(vi, "$1" + e) : !1 !== t.jsonp && (t.url += (sr.test(t.url) ? "&" : "?") + t.jsonp + "=" + e),
            t.converters["script json"] = function() {
                return s || i.error(e + " was not called"),
                s[0]
            }
            ,
            t.dataTypes[0] = "json",
            o = n[e],
            n[e] = function() {
                s = arguments
            }
            ,
            f.always(function() {
                void 0 === o ? i(n).removeProp(e) : n[e] = o;
                t[e] && (t.jsonpCallback = r.jsonpCallback,
                vr.push(e));
                s && u(o) && o(s[0]);
                s = o = void 0
            }),
            "script"
    }),
    e.createHTMLDocument = ((ie = f.implementation.createHTMLDocument("").body).innerHTML = "<form><\/form><form><\/form>",
    2 === ie.childNodes.length),
    i.parseHTML = function(n, t, r) {
        return "string" != typeof n ? [] : ("boolean" == typeof t && (r = t,
        t = !1),
        t || (e.createHTMLDocument ? ((s = (t = f.implementation.createHTMLDocument("")).createElement("base")).href = f.location.href,
        t.head.appendChild(s)) : t = f),
        u = !r && [],
        (o = wi.exec(n)) ? [t.createElement(o[1])] : (o = vu([n], t, u),
        u && u.length && i(u).remove(),
        i.merge([], o.childNodes)));
        var s, o, u
    }
    ,
    i.fn.load = function(n, t, r) {
        var f, s, h, e = this, o = n.indexOf(" ");
        return -1 < o && (f = g(n.slice(o)),
        n = n.slice(0, o)),
        u(t) ? (r = t,
        t = void 0) : t && "object" == typeof t && (s = "POST"),
        0 < e.length && i.ajax({
            url: n,
            type: s || "GET",
            dataType: "html",
            data: t
        }).done(function(n) {
            h = arguments;
            e.html(f ? i("<div>").append(i.parseHTML(n)).find(f) : n)
        }).always(r && function(n, t) {
            e.each(function() {
                r.apply(this, h || [n.responseText, t, n])
            })
        }
        ),
        this
    }
    ,
    i.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(n, t) {
        i.fn[t] = function(n) {
            return this.on(t, n)
        }
    }),
    i.expr.pseudos.animated = function(n) {
        return i.grep(i.timers, function(t) {
            return n === t.elem
        }).length
    }
    ,
    i.offset = {
        setOffset: function(n, t, r) {
            var v, o, s, h, f, c, l = i.css(n, "position"), a = i(n), e = {};
            "static" === l && (n.style.position = "relative");
            f = a.offset();
            s = i.css(n, "top");
            c = i.css(n, "left");
            ("absolute" === l || "fixed" === l) && -1 < (s + c).indexOf("auto") ? (h = (v = a.position()).top,
            o = v.left) : (h = parseFloat(s) || 0,
            o = parseFloat(c) || 0);
            u(t) && (t = t.call(n, r, i.extend({}, f)));
            null != t.top && (e.top = t.top - f.top + h);
            null != t.left && (e.left = t.left - f.left + o);
            "using"in t ? t.using.call(n, e) : a.css(e)
        }
    },
    i.fn.extend({
        offset: function(n) {
            if (arguments.length)
                return void 0 === n ? this : this.each(function(t) {
                    i.offset.setOffset(this, n, t)
                });
            var r, u, t = this[0];
            if (t)
                return t.getClientRects().length ? (r = t.getBoundingClientRect(),
                u = t.ownerDocument.defaultView,
                {
                    top: r.top + u.pageYOffset,
                    left: r.left + u.pageXOffset
                }) : {
                    top: 0,
                    left: 0
                }
        },
        position: function() {
            if (this[0]) {
                var n, r, u, t = this[0], f = {
                    top: 0,
                    left: 0
                };
                if ("fixed" === i.css(t, "position"))
                    r = t.getBoundingClientRect();
                else {
                    for (r = this.offset(),
                    u = t.ownerDocument,
                    n = t.offsetParent || u.documentElement; n && (n === u.body || n === u.documentElement) && "static" === i.css(n, "position"); )
                        n = n.parentNode;
                    n && n !== t && 1 === n.nodeType && ((f = i(n).offset()).top += i.css(n, "borderTopWidth", !0),
                    f.left += i.css(n, "borderLeftWidth", !0))
                }
                return {
                    top: r.top - f.top - i.css(t, "marginTop", !0),
                    left: r.left - f.left - i.css(t, "marginLeft", !0)
                }
            }
        },
        offsetParent: function() {
            return this.map(function() {
                for (var n = this.offsetParent; n && "static" === i.css(n, "position"); )
                    n = n.offsetParent;
                return n || bt
            })
        }
    }),
    i.each({
        scrollLeft: "pageXOffset",
        scrollTop: "pageYOffset"
    }, function(n, t) {
        var r = "pageYOffset" === t;
        i.fn[n] = function(i) {
            return p(this, function(n, i, u) {
                var f;
                if (tt(n) ? f = n : 9 === n.nodeType && (f = n.defaultView),
                void 0 === u)
                    return f ? f[t] : n[i];
                f ? f.scrollTo(r ? f.pageXOffset : u, r ? u : f.pageYOffset) : n[i] = u
            }, n, i, arguments.length)
        }
    }),
    i.each(["top", "left"], function(n, t) {
        i.cssHooks[t] = ku(e.pixelPosition, function(n, r) {
            if (r)
                return r = ni(n, t),
                tr.test(r) ? i(n).position()[t] + "px" : r
        })
    }),
    i.each({
        Height: "height",
        Width: "width"
    }, function(n, t) {
        i.each({
            padding: "inner" + n,
            content: t,
            "": "outer" + n
        }, function(r, u) {
            i.fn[u] = function(f, e) {
                var o = arguments.length && (r || "boolean" != typeof f)
                  , s = r || (!0 === f || !0 === e ? "margin" : "border");
                return p(this, function(t, r, f) {
                    var e;
                    return tt(t) ? 0 === u.indexOf("outer") ? t["inner" + n] : t.document.documentElement["client" + n] : 9 === t.nodeType ? (e = t.documentElement,
                    Math.max(t.body["scroll" + n], e["scroll" + n], t.body["offset" + n], e["offset" + n], e["client" + n])) : void 0 === f ? i.css(t, r, s) : i.style(t, r, f, s)
                }, t, o ? f : void 0, o)
            }
        })
    }),
    i.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function(n, t) {
        i.fn[t] = function(n, i) {
            return 0 < arguments.length ? this.on(t, null, n, i) : this.trigger(t)
        }
    }),
    i.fn.extend({
        hover: function(n, t) {
            return this.mouseenter(n).mouseleave(t || n)
        }
    }),
    i.fn.extend({
        bind: function(n, t, i) {
            return this.on(n, null, t, i)
        },
        unbind: function(n, t) {
            return this.off(n, null, t)
        },
        delegate: function(n, t, i, r) {
            return this.on(t, n, i, r)
        },
        undelegate: function(n, t, i) {
            return 1 === arguments.length ? this.off(n, "**") : this.off(t, n || "**", i)
        }
    }),
    i.proxy = function(n, t) {
        var r, f, e;
        if ("string" == typeof t && (r = n[t],
        t = n,
        n = r),
        u(n))
            return f = b.call(arguments, 2),
            (e = function() {
                return n.apply(t || this, f.concat(b.call(arguments)))
            }
            ).guid = n.guid = n.guid || i.guid++,
            e
    }
    ,
    i.holdReady = function(n) {
        n ? i.readyWait++ : i.ready(!0)
    }
    ,
    i.isArray = Array.isArray,
    i.parseJSON = JSON.parse,
    i.nodeName = c,
    i.isFunction = u,
    i.isWindow = tt,
    i.camelCase = y,
    i.type = it,
    i.now = Date.now,
    i.isNumeric = function(n) {
        var t = i.type(n);
        return ("number" === t || "string" === t) && !isNaN(n - parseFloat(n))
    }
    ,
    "function" == typeof define && define.amd && define("jquery", [], function() {
        return i
    }),
    re = n.jQuery,
    ue = n.$,
    i.noConflict = function(t) {
        return n.$ === i && (n.$ = ue),
        t && n.jQuery === i && (n.jQuery = re),
        i
    }
    ,
    t || (n.jQuery = n.$ = i),
    i
}),
function(n) {
    typeof module == "object" && typeof module.exports == "object" ? n(require("jquery"), window, document) : n(jQuery, window, document)
}(function(n, t, i) {
    var r = []
      , u = function() {
        return r.length ? r[r.length - 1] : null
    }
      , f = function() {
        for (var t = !1, n = r.length - 1; n >= 0; n--)
            r[n].$blocker && (r[n].$blocker.toggleClass("current", !t).toggleClass("behind", t),
            t = !0)
    };
    n.jquerymodal = function(t, i) {
        var e, f;
        if (this.$body = n("body"),
        this.options = n.extend({}, n.jquerymodal.defaults, i),
        this.options.doFade = !isNaN(parseInt(this.options.fadeDuration, 10)),
        this.$blocker = null,
        this.options.closeExisting)
            while (n.jquerymodal.isActive())
                n.jquerymodal.close();
        if (r.push(this),
        t.is("a"))
            if (f = t.attr("href"),
            this.anchor = t,
            /^#/.test(f)) {
                if (this.$elm = n(f),
                this.$elm.length !== 1)
                    return null;
                this.$body.append(this.$elm);
                this.open()
            } else
                this.$elm = n("<div>"),
                this.$body.append(this.$elm),
                e = function(n, t) {
                    t.elm.remove()
                }
                ,
                this.showSpinner(),
                t.trigger(n.jquerymodal.AJAX_SEND),
                n.get(f).done(function(i) {
                    if (n.jquerymodal.isActive()) {
                        t.trigger(n.modal.AJAX_SUCCESS);
                        var r = u();
                        r.$elm.empty().append(i).on(n.jquerymodal.CLOSE, e);
                        r.hideSpinner();
                        r.open();
                        t.trigger(n.jquerymodal.AJAX_COMPLETE)
                    }
                }).fail(function() {
                    t.trigger(n.jquerymodal.AJAX_FAIL);
                    var i = u();
                    i.hideSpinner();
                    r.pop();
                    t.trigger(n.jquerymodal.AJAX_COMPLETE)
                });
        else
            this.$elm = t,
            this.anchor = t,
            this.$body.append(this.$elm),
            this.open()
    }
    ;
    n.jquerymodal.prototype = {
        constructor: n.jquerymodal,
        open: function() {
            var t = this;
            this.block();
            this.anchor.blur();
            this.options.doFade ? setTimeout(function() {
                t.show()
            }, this.options.fadeDuration * this.options.fadeDelay) : this.show();
            n(i).off("keydown.jquerymodal").on("keydown.jquerymodal", function(n) {
                var t = u();
                n.which === 27 && t.options.escapeClose && t.close()
            });
            this.options.clickClose && this.$blocker.click(function(t) {
                t.target === this && n.jquerymodal.close()
            })
        },
        close: function() {
            r.pop();
            this.unblock();
            this.hide();
            n.jquerymodal.isActive() || n(i).off("keydown.jquerymodal")
        },
        block: function() {
            this.$elm.trigger(n.jquerymodal.BEFORE_BLOCK, [this._ctx()]);
            this.$body.css("overflow", "hidden");
            this.$blocker = n('<div class="' + this.options.blockerClass + ' blocker current"><\/div>').appendTo(this.$body);
            f();
            this.options.doFade && this.$blocker.css("opacity", 0).animate({
                opacity: 1
            }, this.options.fadeDuration);
            this.$elm.trigger(n.jquerymodal.BLOCK, [this._ctx()])
        },
        unblock: function(t) {
            !t && this.options.doFade ? this.$blocker.fadeOut(this.options.fadeDuration, this.unblock.bind(this, !0)) : (this.$blocker.children().appendTo(this.$body),
            this.$blocker.remove(),
            this.$blocker = null,
            f(),
            n.jquerymodal.isActive() || this.$body.css("overflow", ""))
        },
        show: function() {
            this.$elm.trigger(n.jquerymodal.BEFORE_OPEN, [this._ctx()]);
            this.options.showClose && (this.closeButton = n('<a href="#close-jquerymodal" rel="jquerymodal:close" class="close-modal ' + this.options.closeClass + '">' + this.options.closeText + "<\/a>"),
            this.$elm.append(this.closeButton));
            this.$elm.addClass(this.options.modalClass).appendTo(this.$blocker);
            this.options.doFade ? this.$elm.css({
                opacity: 0,
                display: "inline-block"
            }).animate({
                opacity: 1
            }, this.options.fadeDuration) : this.$elm.css("display", "inline-block");
            this.$elm.trigger(n.jquerymodal.OPEN, [this._ctx()])
        },
        hide: function() {
            this.$elm.trigger(n.jquerymodal.BEFORE_CLOSE, [this._ctx()]);
            this.closeButton && this.closeButton.remove();
            var t = this;
            this.options.doFade ? this.$elm.fadeOut(this.options.fadeDuration, function() {
                t.$elm.trigger(n.jquerymodal.AFTER_CLOSE, [t._ctx()])
            }) : this.$elm.hide(0, function() {
                t.$elm.trigger(n.jquerymodal.AFTER_CLOSE, [t._ctx()])
            });
            this.$elm.trigger(n.jquerymodal.CLOSE, [this._ctx()])
        },
        showSpinner: function() {
            this.options.showSpinner && (this.spinner = this.spinner || n('<div class="' + this.options.modalClass + '-spinner"><\/div>').append(this.options.spinnerHtml),
            this.$body.append(this.spinner),
            this.spinner.show())
        },
        hideSpinner: function() {
            this.spinner && this.spinner.remove()
        },
        _ctx: function() {
            return {
                elm: this.$elm,
                $elm: this.$elm,
                $blocker: this.$blocker,
                options: this.options
            }
        }
    };
    n.jquerymodal.close = function(t) {
        if (n.jquerymodal.isActive()) {
            t && t.preventDefault();
            var i = u();
            return i.close(),
            i.$elm
        }
    }
    ;
    n.jquerymodal.isActive = function() {
        return r.length > 0
    }
    ;
    n.jquerymodal.getCurrent = u;
    n.jquerymodal.defaults = {
        closeExisting: !0,
        escapeClose: !0,
        clickClose: !0,
        closeText: "Close",
        closeClass: "",
        modalClass: "jquery-modal",
        blockerClass: "jquery-modal-blocker",
        spinnerHtml: '<div class="rect1"><\/div><div class="rect2"><\/div><div class="rect3"><\/div><div class="rect4"><\/div>',
        showSpinner: !0,
        showClose: !0,
        fadeDuration: null,
        fadeDelay: 1
    };
    n.jquerymodal.BEFORE_BLOCK = "jquerymodal:before-block";
    n.jquerymodal.BLOCK = "jquerymodal:block";
    n.jquerymodal.BEFORE_OPEN = "jquerymodal:before-open";
    n.jquerymodal.OPEN = "jquerymodal:open";
    n.jquerymodal.BEFORE_CLOSE = "jquerymodal:before-close";
    n.jquerymodal.CLOSE = "jquerymodal:close";
    n.jquerymodal.AFTER_CLOSE = "jquerymodal:after-close";
    n.jquerymodal.AJAX_SEND = "jquerymodal:ajax:send";
    n.jquerymodal.AJAX_SUCCESS = "jquerymodal:ajax:success";
    n.jquerymodal.AJAX_FAIL = "jquerymodal:ajax:fail";
    n.jquerymodal.AJAX_COMPLETE = "jquerymodal:ajax:complete";
    n.fn.jquerymodal = function(t) {
        return this.length === 1 && new n.jquerymodal(this,t),
        this
    }
    ;
    n(i).on("click.jquerymodal", 'a[rel~="jquerymodal:close"]', n.jquerymodal.close);
    n(i).on("click.jquerymodal", 'a[rel~="jquerymodal:open"]', function(t) {
        t.preventDefault();
        n(this).jquerymodal()
    })
});
window.jQuery && function(n) {
    "use strict";
    function t(n) {
        return n > 1048576 ? (n / 1048576).toFixed(1) + "Mb" : 1024 == n ? "1Mb" : (n / 1024).toFixed(1) + "Kb"
    }
    function i(n) {
        return (n.files && n.files.length ? n.files : null) || [{
            name: n.value,
            size: 0,
            type: ((n.value || "").match(/[^\.]+$/i) || [""])[0]
        }]
    }
    n.fn.MultiFile = function(r) {
        var u, r;
        if (0 == this.length)
            return this;
        if ("string" == typeof arguments[0])
            return this.length > 1 ? (u = arguments,
            this.each(function() {
                n.fn.MultiFile.apply(n(this), u)
            })) : n.fn.MultiFile[arguments[0]].apply(this, n.makeArray(arguments).slice(1) || []);
        "number" == typeof r && (r = {
            max: r
        });
        r = n.extend({}, n.fn.MultiFile.options, r || {});
        n("form").not("MultiFile-intercepted").addClass("MultiFile-intercepted").submit(n.fn.MultiFile.disableEmpty);
        n.fn.MultiFile.options.autoIntercept && (n.fn.MultiFile.intercept(n.fn.MultiFile.options.autoIntercept),
        n.fn.MultiFile.options.autoIntercept = null);
        this.not(".MultiFile-applied").addClass("MultiFile-applied").each(function() {
            window.MultiFile = (window.MultiFile || 0) + 1;
            var e = window.MultiFile
              , u = {
                e: this,
                E: n(this),
                clone: n(this).clone()
            }
              , f = n.extend({}, n.fn.MultiFile.options, r || {}, (n.metadata ? u.E.metadata() : n.meta ? u.E.data() : null) || {}, {});
            f.max > 0 || (f.max = u.E.attr("maxlength"));
            f.max > 0 || (f.max = (String(u.e.className.match(/\b(max|limit)\-([0-9]+)\b/gi) || [""]).match(/[0-9]+/gi) || [""])[0],
            f.max = f.max > 0 ? String(f.max).match(/[0-9]+/gi)[0] : -1);
            f.max = new Number(f.max);
            f.accept = f.accept || u.E.attr("accept") || "";
            f.accept || (f.accept = u.e.className.match(/\b(accept\-[\w\|]+)\b/gi) || "",
            f.accept = new String(f.accept).replace(/^(accept|ext)\-/i, ""));
            f.maxsize = f.maxsize > 0 ? f.maxsize : u.E.data("maxsize") || 0;
            f.maxsize > 0 || (f.maxsize = (String(u.e.className.match(/\b(maxsize|maxload|size)\-([0-9]+)\b/gi) || [""]).match(/[0-9]+/gi) || [""])[0],
            f.maxsize = f.maxsize > 0 ? String(f.maxsize).match(/[0-9]+/gi)[0] : -1);
            f.maxfile = f.maxfile > 0 ? f.maxfile : u.E.data("maxfile") || 0;
            f.maxfile > 0 || (f.maxfile = (String(u.e.className.match(/\b(maxfile|filemax)\-([0-9]+)\b/gi) || [""]).match(/[0-9]+/gi) || [""])[0],
            f.maxfile = f.maxfile > 0 ? String(f.maxfile).match(/[0-9]+/gi)[0] : -1);
            f.maxfile > 1 && (f.maxfile = 1024 * f.maxfile);
            f.maxsize > 1 && (f.maxsize = 1024 * f.maxsize);
            n.extend(u, f || {});
            u.STRING = n.extend({}, n.fn.MultiFile.options.STRING, u.STRING);
            n.extend(u, {
                n: 0,
                slaves: [],
                files: [],
                instanceKey: u.e.id || "MultiFile" + String(e),
                generateID: function(n) {
                    return u.instanceKey + (n > 0 ? "_F" + String(n) : "")
                },
                trigger: function(t, r, u, f) {
                    var e, o = u[t] || u["on" + t];
                    if (o)
                        return (f = f || u.files || i(this),
                        n.each(f, function(n, t) {
                            e = o.apply(u.wrapper, [r, t.name, u, t])
                        }),
                        e)
                }
            });
            String(u.accept).length > 1 && (u.accept = u.accept.replace(/\W+/g, "|").replace(/^\W|\W$/g, ""),
            u.rxAccept = new RegExp("\\.(" + (u.accept ? u.accept : "") + ")$","gi"));
            u.wrapID = u.instanceKey;
            u.E.wrap('<div class="MultiFile-wrap" id="' + u.wrapID + '-wrap"><\/div>');
            u.wrapper = n("#" + u.wrapID + "-wrap");
            u.e.name = u.e.name || "file" + e + "[]";
            u.list || (u.wrapper.append('<div class="MultiFile-list" id="' + u.wrapID + '_list"><\/div>'),
            u.list = n("#" + u.wrapID + "_list"));
            u.list = n(u.list);
            u.addSlave = function(r, f) {
                u.n++;
                r.MultiFile = u;
                r.id = r.name = "";
                r.id = u.generateID(f);
                r.name = String(u.namePattern.replace(/\$name/gi, n(u.clone).attr("name")).replace(/\$id/gi, n(u.clone).attr("id")).replace(/\$g/gi, e).replace(/\$i/gi, f));
                var o;
                u.max > 0 && u.files.length > u.max && (r.disabled = !0,
                o = !0);
                u.current = r;
                r = n(r);
                r.val("").attr("value", "")[0].value = "";
                r.addClass("MultiFile-applied");
                r.change(function() {
                    var c;
                    n(this).blur();
                    var v = this
                      , l = u.files || []
                      , s = this.files || [{
                        name: this.value,
                        size: 0,
                        type: ((this.value || "").match(/[^\.]+$/i) || [""])[0]
                    }]
                      , o = []
                      , a = 0
                      , h = u.total_size || 0
                      , e = [];
                    return n.each(s, function(n, t) {
                        o[o.length] = t
                    }),
                    u.trigger("FileSelect", this, u, o),
                    n.each(s, function(r, f) {
                        var o = f.name.replace(/^C:\\fakepath\\/gi, ""), c = f.size, s = function(n) {
                            return n.replace("$ext", String(o.match(/[^\.]+$/i) || "")).replace("$file", o.match(/[^\/\\]+$/gi)).replace("$size", t(c) + " > " + t(u.maxfile))
                        }, h;
                        u.accept && o && !o.match(u.rxAccept) && (e[e.length] = s(u.STRING.denied),
                        u.trigger("FileInvalid", this, u, [f]));
                        n(u.wrapper).find("input[type=file]").not(v).each(function() {
                            n.each(i(this), function(n, t) {
                                if (t.name) {
                                    var i = (t.name || "").replace(/^C:\\fakepath\\/gi, "");
                                    (o == i || o == i.substr(i.length - o.length)) && (e[e.length] = s(u.STRING.duplicate),
                                    u.trigger("FileDuplicate", v, u, [t]))
                                }
                            })
                        });
                        u.maxfile > 0 && c > 0 && c > u.maxfile && (e[e.length] = s(u.STRING.toobig),
                        u.trigger("FileTooBig", this, u, [f]));
                        h = u.trigger("FileValidate", this, u, [f]);
                        h && "" != h && (e[e.length] = s(h));
                        a += f.size
                    }),
                    h += a,
                    o.size = a,
                    o.total = h,
                    o.total_length = o.length + l.length,
                    u.max > 0 && l.length + s.length > u.max && (e[e.length] = u.STRING.toomany.replace("$max", u.max),
                    u.trigger("FileTooMany", this, u, o)),
                    u.maxsize > 0 && h > u.maxsize && (e[e.length] = u.STRING.toomuch.replace("$size", t(h) + " > " + t(u.maxsize)),
                    u.trigger("FileTooMuch", this, u, o)),
                    c = n(u.clone).clone(),
                    c.addClass("MultiFile"),
                    e.length > 0 ? (u.error(e.join("\n\n")),
                    u.n--,
                    u.addSlave(c[0], f),
                    r.parent().prepend(c),
                    r.remove(),
                    !1) : (u.total_size = h,
                    s = l.concat(o),
                    s.size = h,
                    s.size_label = t(h),
                    u.files = s,
                    n(this).css({
                        position: "absolute",
                        top: "-3000px"
                    }),
                    r.after(c),
                    u.addSlave(c[0], f + 1),
                    u.addToList(this, f, o),
                    u.trigger("afterFileSelect", this, u, o),
                    void 0)
                });
                n(r).data("MultiFile-wrap", u.wrapper);
                n(u.wrapper).data("MultiFile", u);
                o && n(r).attr("disabled", "disabled").prop("disabled", !0)
            }
            ;
            u.addToList = function(r, e, o) {
                var s, h, c;
                u.trigger("FileAppend", r, u, o);
                s = n("<span/>");
                n.each(o, function(i, e) {
                    var o = String(e.name || "").replace(/[&<>'"]/g, function(n) {
                        return "&#" + n.charCodeAt() + ";"
                    })
                      , h = u.STRING
                      , a = h.label || h.file || h.name
                      , v = h.title || h.tooltip || h.selected
                      , c = "image/" == e.type.substr(0, 6) ? '<img class="MultiFile-preview" style="' + u.previewCss + '"/>' : ""
                      , l = n(('<span class="MultiFile-label" title="' + v + '"><span class="MultiFile-title">' + a + "<\/span>" + (u.preview || n(r).is(".with-preview") ? c : "") + "<\/span>").replace(/\$(file|name)/gi, (o.match(/[^\/\\]+$/gi) || [o])[0]).replace(/\$(ext|extension|type)/gi, (o.match(/[^\.]+$/gi) || [""])[0]).replace(/\$(size)/gi, t(e.size || 0)).replace(/\$(preview)/gi, c).replace(/\$(i)/gi, i));
                    l.find("img.MultiFile-preview").each(function() {
                        var t = this
                          , n = new FileReader;
                        n.readAsDataURL(e);
                        n.onload = function(n) {
                            t.src = n.target.result
                        }
                    });
                    i > 0 && f.separator && s.append(f.separator);
                    s.append(l);
                    o = String(e.name || "");
                    s[s.length] = ('<span class="MultiFile-title" title="' + u.STRING.selected + '">' + u.STRING.file + "<\/span>").replace(/\$(file|name)/gi, (o.match(/[^\/\\]+$/gi) || [o])[0]).replace(/\$(ext|extension|type)/gi, (o.match(/[^\.]+$/gi) || [""])[0]).replace(/\$(size)/gi, t(e.size || 0)).replace(/\$(i)/gi, i)
                });
                h = n('<div class="MultiFile-label"><\/div>');
                c = n('<a class="MultiFile-remove" href="#' + u.wrapID + '">' + u.STRING.remove + "<\/a>").click(function() {
                    var o = i(r), f, e;
                    return u.trigger("FileRemove", r, u, o),
                    u.n--,
                    u.current.disabled = !1,
                    n(r).remove(),
                    n(this).parent().remove(),
                    n(u.current).css({
                        position: "",
                        top: ""
                    }),
                    n(u.current).reset().val("").attr("value", "")[0].value = "",
                    f = [],
                    e = 0,
                    n(u.wrapper).find("input[type=file]").each(function() {
                        n.each(i(this), function(n, t) {
                            t.name && (f[f.length] = t,
                            e += t.size)
                        })
                    }),
                    u.files = f,
                    u.total_size = e,
                    u.size_label = t(e),
                    n(u.wrapper).data("MultiFile", u),
                    u.trigger("afterFileRemove", r, u, o),
                    u.trigger("FileChange", u.current, u, f),
                    !1
                });
                u.list.append(h.append(c, " ", s));
                u.trigger("afterFileAppend", r, u, o);
                u.trigger("FileChange", r, u, u.files)
            }
            ;
            u.MultiFile || u.addSlave(u.e, 0);
            u.n++
        })
    }
    ;
    n.extend(n.fn.MultiFile, {
        data: function() {
            var t = n(this), u = t.is(".MultiFile-wrap"), i = u ? t : t.data("MultiFile-wrap"), r;
            return !i || !i.length ? !console.error("Could not find MultiFile control wrapper") : (r = i.data("MultiFile"),
            r ? r || {} : !console.error("Could not find MultiFile data in wrapper"))
        },
        reset: function() {
            var t = this.MultiFile("data");
            return t && n(t.list).find("a.MultiFile-remove").click(),
            n(this)
        },
        files: function() {
            var n = this.MultiFile("data");
            return n ? n.files || [] : !console.log("MultiFile plugin not initialized")
        },
        size: function() {
            var n = this.MultiFile("data");
            return n ? n.total_size || 0 : !console.log("MultiFile plugin not initialized")
        },
        count: function() {
            var n = this.MultiFile("data");
            return n ? n.files ? n.files.length || 0 : 0 : !console.log("MultiFile plugin not initialized")
        },
        disableEmpty: function(t) {
            t = ("string" == typeof t ? t : "") || "mfD";
            var i = [];
            return n("input:file.MultiFile").each(function() {
                "" == n(this).val() && (i[i.length] = this)
            }),
            window.clearTimeout(n.fn.MultiFile.reEnableTimeout),
            n.fn.MultiFile.reEnableTimeout = window.setTimeout(n.fn.MultiFile.reEnableEmpty, 500),
            n(i).each(function() {
                this.disabled = !0
            }).addClass(t)
        },
        reEnableEmpty: function(t) {
            return t = ("string" == typeof t ? t : "") || "mfD",
            n("input:file." + t).removeClass(t).each(function() {
                this.disabled = !1
            })
        },
        intercepted: {},
        intercept: function(t, i, r) {
            var e, u, f;
            if (r = r || [],
            r.constructor.toString().indexOf("Array") < 0 && (r = [r]),
            "function" == typeof t)
                return n.fn.MultiFile.disableEmpty(),
                u = t.apply(i || window, r),
                setTimeout(function() {
                    n.fn.MultiFile.reEnableEmpty()
                }, 1e3),
                u;
            for (t.constructor.toString().indexOf("Array") < 0 && (t = [t]),
            f = 0; f < t.length; f++)
                e = t[f] + "",
                e && function(t) {
                    n.fn.MultiFile.intercepted[t] = n.fn[t] || function() {}
                    ;
                    n.fn[t] = function() {
                        return n.fn.MultiFile.disableEmpty(),
                        u = n.fn.MultiFile.intercepted[t].apply(this, arguments),
                        setTimeout(function() {
                            n.fn.MultiFile.reEnableEmpty()
                        }, 1e3),
                        u
                    }
                }(e)
        }
    });
    n.fn.MultiFile.options = {
        accept: "",
        max: -1,
        maxfile: -1,
        maxsize: -1,
        namePattern: "$name",
        preview: !1,
        previewCss: "max-height:100px; max-width:100px;",
        separator: ", ",
        STRING: {
            remove: "x",
            denied: "You cannot select a $ext file.\nTry again...",
            file: "$file",
            selected: "File selected: $file",
            duplicate: "This file has already been selected:\n$file",
            toomuch: "The files selected exceed the maximum size permited ($size)",
            toomany: "Too many files selected (max: $max)",
            toobig: "$file is too big (max $size)"
        },
        autoIntercept: ["submit", "ajaxSubmit", "ajaxForm", "validate", "valid"],
        error: function(n) {
            "undefined" != typeof console && console.log(n);
            alert(n)
        }
    };
    n.fn.reset = n.fn.reset || function() {
        return this.each(function() {
            try {
                this.reset()
            } catch (n) {}
        })
    }
    ;
    n(function() {
        n("input[type=file].multi").MultiFile()
    })
}(jQuery);
!function(n, t, i) {
    "use strict";
    function s(n, t) {
        var u, o, e, r = [], s = 0;
        n && n.isDefaultPrevented() || (n.preventDefault(),
        t = t || {},
        n && n.data && (t = f(n.data.options, t)),
        u = t.$target || i(n.currentTarget).trigger("blur"),
        (e = i.fancybox.getInstance()) && e.$trigger && e.$trigger.is(u) || (t.selector ? r = i(t.selector) : (o = u.attr("data-fancybox") || "",
        o ? (r = n.data ? n.data.items : [],
        r = r.length ? r.filter('[data-fancybox="' + o + '"]') : i('[data-fancybox="' + o + '"]')) : r = [u]),
        s = i(r).index(u),
        s < 0 && (s = 0),
        e = i.fancybox.open(r, t, s),
        e.$trigger = u))
    }
    if (n.console = n.console || {
        info: function() {}
    },
    i) {
        if (i.fn.fancybox)
            return void console.info("fancyBox already initialized");
        var l = {
            closeExisting: !1,
            loop: !1,
            gutter: 50,
            keyboard: !0,
            preventCaptionOverlap: !0,
            arrows: !0,
            infobar: !0,
            smallBtn: "auto",
            toolbar: "auto",
            buttons: ["zoom", "slideShow", "thumbs", "close"],
            idleTime: 3,
            protect: !1,
            modal: !1,
            image: {
                preload: !1
            },
            ajax: {
                settings: {
                    data: {
                        fancybox: !0
                    }
                }
            },
            iframe: {
                tpl: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" allowfullscreen="allowfullscreen" allow="autoplay; fullscreen" src=""><\/iframe>',
                preload: !0,
                css: {},
                attr: {
                    scrolling: "auto"
                }
            },
            video: {
                tpl: '<video class="fancybox-video" controls controlsList="nodownload" poster="{{poster}}"><source src="{{src}}" type="{{format}}" />Sorry, your browser doesn\'t support embedded videos, <a href="{{src}}">download<\/a> and watch with your favorite video player!<\/video>',
                format: "",
                autoStart: !0
            },
            defaultType: "image",
            animationEffect: "zoom",
            animationDuration: 366,
            zoomOpacity: "auto",
            transitionEffect: "fade",
            transitionDuration: 366,
            slideClass: "",
            baseClass: "",
            baseTpl: '<div class="fancybox-container" role="dialog" tabindex="-1"><div class="fancybox-bg"><\/div><div class="fancybox-inner"><div class="fancybox-infobar"><span data-fancybox-index><\/span>&nbsp;/&nbsp;<span data-fancybox-count><\/span><\/div><div class="fancybox-toolbar">{{buttons}}<\/div><div class="fancybox-navigation">{{arrows}}<\/div><div class="fancybox-stage"><\/div><div class="fancybox-caption"><div class="fancybox-caption__body"><\/div><\/div><\/div><\/div>',
            spinnerTpl: '<div class="fancybox-loading"><\/div>',
            errorTpl: '<div class="fancybox-error"><p>{{ERROR}}<\/p><\/div>',
            btnTpl: {
                download: '<a download data-fancybox-download class="fancybox-button fancybox-button--download" title="{{DOWNLOAD}}" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.62 17.09V19H5.38v-1.91zm-2.97-6.96L17 11.45l-5 4.87-5-4.87 1.36-1.32 2.68 2.64V5h1.92v7.77z"/><\/svg><\/a>',
                zoom: '<button data-fancybox-zoom class="fancybox-button fancybox-button--zoom" title="{{ZOOM}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.7 17.3l-3-3a5.9 5.9 0 0 0-.6-7.6 5.9 5.9 0 0 0-8.4 0 5.9 5.9 0 0 0 0 8.4 5.9 5.9 0 0 0 7.7.7l3 3a1 1 0 0 0 1.3 0c.4-.5.4-1 0-1.5zM8.1 13.8a4 4 0 0 1 0-5.7 4 4 0 0 1 5.7 0 4 4 0 0 1 0 5.7 4 4 0 0 1-5.7 0z"/><\/svg><\/button>',
                close: '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"/><\/svg><\/button>',
                arrowLeft: '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.28 15.7l-1.34 1.37L5 12l4.94-5.07 1.34 1.38-2.68 2.72H19v1.94H8.6z"/><\/svg><\/div><\/button>',
                arrowRight: '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.4 12.97l-2.68 2.72 1.34 1.38L19 12l-4.94-5.07-1.34 1.38 2.68 2.72H5v1.94z"/><\/svg><\/div><\/button>',
                smallBtn: '<button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"/><\/svg><\/button>'
            },
            parentEl: "body",
            hideScrollbar: !0,
            autoFocus: !0,
            backFocus: !0,
            trapFocus: !0,
            fullScreen: {
                autoStart: !1
            },
            touch: {
                vertical: !0,
                momentum: !0
            },
            hash: null,
            media: {},
            slideShow: {
                autoStart: !1,
                speed: 3e3
            },
            thumbs: {
                autoStart: !1,
                hideOnClose: !0,
                parentEl: ".fancybox-container",
                axis: "y"
            },
            wheel: "auto",
            onInit: i.noop,
            beforeLoad: i.noop,
            afterLoad: i.noop,
            beforeShow: i.noop,
            afterShow: i.noop,
            beforeClose: i.noop,
            afterClose: i.noop,
            onActivate: i.noop,
            onDeactivate: i.noop,
            clickContent: function(n) {
                return "image" === n.type && "zoom"
            },
            clickSlide: "close",
            clickOutside: "close",
            dblclickContent: !1,
            dblclickSlide: !1,
            dblclickOutside: !1,
            mobile: {
                preventCaptionOverlap: !1,
                idleTime: !1,
                clickContent: function(n) {
                    return "image" === n.type && "toggleControls"
                },
                clickSlide: function(n) {
                    return "image" === n.type ? "toggleControls" : "close"
                },
                dblclickContent: function(n) {
                    return "image" === n.type && "zoom"
                },
                dblclickSlide: function(n) {
                    return "image" === n.type && "zoom"
                }
            },
            lang: "en",
            i18n: {
                en: {
                    CLOSE: "Close",
                    NEXT: "Next",
                    PREV: "Previous",
                    ERROR: "The requested content cannot be loaded. <br/> Please try again later.",
                    PLAY_START: "Start slideshow",
                    PLAY_STOP: "Pause slideshow",
                    FULL_SCREEN: "Full screen",
                    THUMBS: "Thumbnails",
                    DOWNLOAD: "Download",
                    SHARE: "Share",
                    ZOOM: "Zoom"
                },
                de: {
                    CLOSE: "Schlie&szlig;en",
                    NEXT: "Weiter",
                    PREV: "Zur&uuml;ck",
                    ERROR: "Die angeforderten Daten konnten nicht geladen werden. <br/> Bitte versuchen Sie es sp&auml;ter nochmal.",
                    PLAY_START: "Diaschau starten",
                    PLAY_STOP: "Diaschau beenden",
                    FULL_SCREEN: "Vollbild",
                    THUMBS: "Vorschaubilder",
                    DOWNLOAD: "Herunterladen",
                    SHARE: "Teilen",
                    ZOOM: "Vergr&ouml;&szlig;ern"
                }
            }
        }
          , e = i(n)
          , r = i(t)
          , a = 0
          , v = function(n) {
            return n && n.hasOwnProperty && n instanceof i
        }
          , c = function() {
            return n.requestAnimationFrame || n.webkitRequestAnimationFrame || n.mozRequestAnimationFrame || n.oRequestAnimationFrame || function(t) {
                return n.setTimeout(t, 1e3 / 60)
            }
        }()
          , y = function() {
            return n.cancelAnimationFrame || n.webkitCancelAnimationFrame || n.mozCancelAnimationFrame || n.oCancelAnimationFrame || function(t) {
                n.clearTimeout(t)
            }
        }()
          , o = function() {
            var n, r = t.createElement("fakeelement"), i = {
                transition: "transitionend",
                OTransition: "oTransitionEnd",
                MozTransition: "transitionend",
                WebkitTransition: "webkitTransitionEnd"
            };
            for (n in i)
                if (void 0 !== r.style[n])
                    return i[n];
            return "transitionend"
        }()
          , u = function(n) {
            return n && n.length && n[0].offsetHeight
        }
          , f = function(n, t) {
            var r = i.extend(!0, {}, n, t);
            return i.each(t, function(n, t) {
                i.isArray(t) && (r[n] = t)
            }),
            r
        }
          , p = function(n) {
            var r, u;
            return !(!n || n.ownerDocument !== t) && (i(".fancybox-container").css("pointer-events", "none"),
            r = {
                x: n.getBoundingClientRect().left + n.offsetWidth / 2,
                y: n.getBoundingClientRect().top + n.offsetHeight / 2
            },
            u = t.elementFromPoint(r.x, r.y) === n,
            i(".fancybox-container").css("pointer-events", ""),
            u)
        }
          , h = function(n, t, r) {
            var u = this;
            u.opts = f({
                index: r
            }, i.fancybox.defaults);
            i.isPlainObject(t) && (u.opts = f(u.opts, t));
            i.fancybox.isMobile && (u.opts = f(u.opts, u.opts.mobile));
            u.id = u.opts.id || ++a;
            u.currIndex = parseInt(u.opts.index, 10) || 0;
            u.prevIndex = null;
            u.prevPos = null;
            u.currPos = 0;
            u.firstRun = !0;
            u.group = [];
            u.slides = {};
            u.addContent(n);
            u.group.length && u.init()
        };
        i.extend(h.prototype, {
            init: function() {
                var f, e, r = this, o = r.group[r.currIndex], u = o.opts;
                u.closeExisting && i.fancybox.close(!0);
                i("body").addClass("fancybox-active");
                !i.fancybox.getInstance() && !1 !== u.hideScrollbar && !i.fancybox.isMobile && t.body.scrollHeight > n.innerHeight && (i("head").append('<style id="fancybox-style-noscroll" type="text/css">.compensate-for-scrollbar{margin-right:' + (n.innerWidth - t.documentElement.clientWidth) + "px;}<\/style>"),
                i("body").addClass("compensate-for-scrollbar"));
                e = "";
                i.each(u.buttons, function(n, t) {
                    e += u.btnTpl[t] || ""
                });
                f = i(r.translate(r, u.baseTpl.replace("{{buttons}}", e).replace("{{arrows}}", u.btnTpl.arrowLeft + u.btnTpl.arrowRight))).attr("id", "fancybox-container-" + r.id).addClass(u.baseClass).data("FancyBox", r).appendTo(u.parentEl);
                r.$refs = {
                    container: f
                };
                ["bg", "inner", "infobar", "toolbar", "stage", "caption", "navigation"].forEach(function(n) {
                    r.$refs[n] = f.find(".fancybox-" + n)
                });
                r.trigger("onInit");
                r.activate();
                r.jumpTo(r.currIndex)
            },
            translate: function(n, t) {
                var i = n.opts.i18n[n.opts.lang] || n.opts.i18n.en;
                return t.replace(/\{\{(\w+)\}\}/g, function(n, t) {
                    return void 0 === i[t] ? n : i[t]
                })
            },
            addContent: function(n) {
                var r, t = this, u = i.makeArray(n);
                i.each(u, function(n, r) {
                    var h, o, l, s, c, u = {}, e = {};
                    i.isPlainObject(r) ? (u = r,
                    e = r.opts || r) : "object" === i.type(r) && i(r).length ? (h = i(r),
                    e = h.data() || {},
                    e = i.extend(!0, {}, e, e.options),
                    e.$orig = h,
                    u.src = t.opts.src || e.src || h.attr("href"),
                    u.type || u.src || (u.type = "inline",
                    u.src = r)) : u = {
                        type: "html",
                        src: r + ""
                    };
                    u.opts = i.extend(!0, {}, t.opts, e);
                    i.isArray(e.buttons) && (u.opts.buttons = e.buttons);
                    i.fancybox.isMobile && u.opts.mobile && (u.opts = f(u.opts, u.opts.mobile));
                    o = u.type || u.opts.type;
                    s = u.src || "";
                    !o && s && ((l = s.match(/\.(mp4|mov|ogv|webm)((\?|#).*)?$/i)) ? (o = "video",
                    u.opts.video.format || (u.opts.video.format = "video/" + ("ogv" === l[1] ? "ogg" : l[1]))) : s.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i) ? o = "image" : s.match(/\.(pdf)((\?|#).*)?$/i) ? (o = "iframe",
                    u = i.extend(!0, u, {
                        contentType: "pdf",
                        opts: {
                            iframe: {
                                preload: !1
                            }
                        }
                    })) : "#" === s.charAt(0) && (o = "inline"));
                    o ? u.type = o : t.trigger("objectNeedsType", u);
                    u.contentType || (u.contentType = i.inArray(u.type, ["html", "inline", "ajax"]) > -1 ? "html" : u.type);
                    u.index = t.group.length;
                    "auto" == u.opts.smallBtn && (u.opts.smallBtn = i.inArray(u.type, ["html", "inline", "ajax"]) > -1);
                    "auto" === u.opts.toolbar && (u.opts.toolbar = !u.opts.smallBtn);
                    u.$thumb = u.opts.$thumb || null;
                    u.opts.$trigger && u.index === t.opts.index && (u.$thumb = u.opts.$trigger.find("img:first"),
                    u.$thumb.length && (u.opts.$orig = u.opts.$trigger));
                    u.$thumb && u.$thumb.length || !u.opts.$orig || (u.$thumb = u.opts.$orig.find("img:first"));
                    u.$thumb && !u.$thumb.length && (u.$thumb = null);
                    u.thumb = u.opts.thumb || (u.$thumb ? u.$thumb[0].src : null);
                    "function" === i.type(u.opts.caption) && (u.opts.caption = u.opts.caption.apply(r, [t, u]));
                    "function" === i.type(t.opts.caption) && (u.opts.caption = t.opts.caption.apply(r, [t, u]));
                    u.opts.caption instanceof i || (u.opts.caption = void 0 === u.opts.caption ? "" : u.opts.caption + "");
                    "ajax" === u.type && (c = s.split(/\s+/, 2),
                    c.length > 1 && (u.src = c.shift(),
                    u.opts.filter = c.shift()));
                    u.opts.modal && (u.opts = i.extend(!0, u.opts, {
                        trapFocus: !0,
                        infobar: 0,
                        toolbar: 0,
                        smallBtn: 0,
                        keyboard: 0,
                        slideShow: 0,
                        fullScreen: 0,
                        thumbs: 0,
                        touch: 0,
                        clickContent: !1,
                        clickSlide: !1,
                        clickOutside: !1,
                        dblclickContent: !1,
                        dblclickSlide: !1,
                        dblclickOutside: !1
                    }));
                    t.group.push(u)
                });
                Object.keys(t.slides).length && (t.updateControls(),
                (r = t.Thumbs) && r.isActive && (r.create(),
                r.focus()))
            },
            addEvents: function() {
                var t = this;
                t.removeEvents();
                t.$refs.container.on("click.fb-close", "[data-fancybox-close]", function(n) {
                    n.stopPropagation();
                    n.preventDefault();
                    t.close(n)
                }).on("touchstart.fb-prev click.fb-prev", "[data-fancybox-prev]", function(n) {
                    n.stopPropagation();
                    n.preventDefault();
                    t.previous()
                }).on("touchstart.fb-next click.fb-next", "[data-fancybox-next]", function(n) {
                    n.stopPropagation();
                    n.preventDefault();
                    t.next()
                }).on("click.fb", "[data-fancybox-zoom]", function() {
                    t[t.isScaledDown() ? "scaleToActual" : "scaleToFit"]()
                });
                e.on("orientationchange.fb resize.fb", function(n) {
                    n && n.originalEvent && "resize" === n.originalEvent.type ? (t.requestId && y(t.requestId),
                    t.requestId = c(function() {
                        t.update(n)
                    })) : (t.current && "iframe" === t.current.type && t.$refs.stage.hide(),
                    setTimeout(function() {
                        t.$refs.stage.show();
                        t.update(n)
                    }, i.fancybox.isMobile ? 600 : 250))
                });
                r.on("keydown.fb", function(n) {
                    var f = i.fancybox ? i.fancybox.getInstance() : null
                      , u = f.current
                      , r = n.keyCode || n.which;
                    return 9 == r ? void (u.opts.trapFocus && t.focus(n)) : (!u.opts.keyboard || n.ctrlKey || n.altKey || n.shiftKey || i(n.target).is("input,textarea,video,audio,select")) ? void 0 : 8 === r || 27 === r ? (n.preventDefault(),
                    void t.close(n)) : 37 === r || 38 === r ? (n.preventDefault(),
                    void t.previous()) : 39 === r || 40 === r ? (n.preventDefault(),
                    void t.next()) : void t.trigger("afterKeydown", n, r)
                });
                t.group[t.currIndex].opts.idleTime && (t.idleSecondsCounter = 0,
                r.on("mousemove.fb-idle mouseleave.fb-idle mousedown.fb-idle touchstart.fb-idle touchmove.fb-idle scroll.fb-idle keydown.fb-idle", function() {
                    t.idleSecondsCounter = 0;
                    t.isIdle && t.showControls();
                    t.isIdle = !1
                }),
                t.idleInterval = n.setInterval(function() {
                    ++t.idleSecondsCounter >= t.group[t.currIndex].opts.idleTime && !t.isDragging && (t.isIdle = !0,
                    t.idleSecondsCounter = 0,
                    t.hideControls())
                }, 1e3))
            },
            removeEvents: function() {
                var t = this;
                e.off("orientationchange.fb resize.fb");
                r.off("keydown.fb .fb-idle");
                this.$refs.container.off(".fb-close .fb-prev .fb-next");
                t.idleInterval && (n.clearInterval(t.idleInterval),
                t.idleInterval = null)
            },
            previous: function(n) {
                return this.jumpTo(this.currPos - 1, n)
            },
            next: function(n) {
                return this.jumpTo(this.currPos + 1, n)
            },
            jumpTo: function(n, t) {
                var s, a, h, f, e, o, v, c, y, r = this, l = r.group.length;
                if (!(r.isDragging || r.isClosing || r.isAnimating && r.firstRun)) {
                    if (n = parseInt(n, 10),
                    !(h = r.current ? r.current.opts.loop : r.opts.loop) && (n < 0 || n >= l))
                        return !1;
                    if (s = r.firstRun = !Object.keys(r.slides).length,
                    e = r.current,
                    r.prevIndex = r.currIndex,
                    r.prevPos = r.currPos,
                    f = r.createSlide(n),
                    l > 1 && ((h || f.index < l - 1) && r.createSlide(n + 1),
                    (h || f.index > 0) && r.createSlide(n - 1)),
                    r.current = f,
                    r.currIndex = f.index,
                    r.currPos = f.pos,
                    r.trigger("beforeShow", s),
                    r.updateControls(),
                    f.forcedDuration = void 0,
                    i.isNumeric(t) ? f.forcedDuration = t : t = f.opts[s ? "animationDuration" : "transitionDuration"],
                    t = parseInt(t, 10),
                    a = r.isMoved(f),
                    f.$slide.addClass("fancybox-slide--current"),
                    s)
                        return f.opts.animationEffect && t && r.$refs.container.css("transition-duration", t + "ms"),
                        r.$refs.container.addClass("fancybox-is-open").trigger("focus"),
                        r.loadSlide(f),
                        void r.preload("image");
                    o = i.fancybox.getTranslate(e.$slide);
                    v = i.fancybox.getTranslate(r.$refs.stage);
                    i.each(r.slides, function(n, t) {
                        i.fancybox.stop(t.$slide, !0)
                    });
                    e.pos !== f.pos && (e.isComplete = !1);
                    e.$slide.removeClass("fancybox-slide--complete fancybox-slide--current");
                    a ? (y = o.left - (e.pos * o.width + e.pos * e.opts.gutter),
                    i.each(r.slides, function(n, e) {
                        e.$slide.removeClass("fancybox-animated").removeClass(function(n, t) {
                            return (t.match(/(^|\s)fancybox-fx-\S+/g) || []).join(" ")
                        });
                        var s = e.pos * o.width + e.pos * e.opts.gutter;
                        i.fancybox.setTranslate(e.$slide, {
                            top: 0,
                            left: s - v.left + y
                        });
                        e.pos !== f.pos && e.$slide.addClass("fancybox-slide--" + (e.pos > f.pos ? "next" : "previous"));
                        u(e.$slide);
                        i.fancybox.animate(e.$slide, {
                            top: 0,
                            left: (e.pos - f.pos) * o.width + (e.pos - f.pos) * e.opts.gutter
                        }, t, function() {
                            e.$slide.css({
                                transform: "",
                                opacity: ""
                            }).removeClass("fancybox-slide--next fancybox-slide--previous");
                            e.pos === r.currPos && r.complete()
                        })
                    })) : t && f.opts.transitionEffect && (c = "fancybox-animated fancybox-fx-" + f.opts.transitionEffect,
                    e.$slide.addClass("fancybox-slide--" + (e.pos > f.pos ? "next" : "previous")),
                    i.fancybox.animate(e.$slide, c, t, function() {
                        e.$slide.removeClass(c).removeClass("fancybox-slide--next fancybox-slide--previous")
                    }, !1));
                    f.isLoaded ? r.revealContent(f) : r.loadSlide(f);
                    r.preload("image")
                }
            },
            createSlide: function(n) {
                var u, r, t = this;
                return r = n % t.group.length,
                r = r < 0 ? t.group.length + r : r,
                !t.slides[n] && t.group[r] && (u = i('<div class="fancybox-slide"><\/div>').appendTo(t.$refs.stage),
                t.slides[n] = i.extend(!0, {}, t.group[r], {
                    pos: n,
                    $slide: u,
                    isLoaded: !1
                }),
                t.updateSlide(t.slides[n])),
                t.slides[n]
            },
            scaleToActual: function(n, t, r) {
                var e, o, s, v, y, f = this, u = f.current, p = u.$content, l = i.fancybox.getTranslate(u.$slide).width, a = i.fancybox.getTranslate(u.$slide).height, h = u.width, c = u.height;
                f.isAnimating || f.isMoved() || !p || "image" != u.type || !u.isLoaded || u.hasError || (f.isAnimating = !0,
                i.fancybox.stop(p),
                n = void 0 === n ? .5 * l : n,
                t = void 0 === t ? .5 * a : t,
                e = i.fancybox.getTranslate(p),
                e.top -= i.fancybox.getTranslate(u.$slide).top,
                e.left -= i.fancybox.getTranslate(u.$slide).left,
                v = h / e.width,
                y = c / e.height,
                o = .5 * l - .5 * h,
                s = .5 * a - .5 * c,
                h > l && (o = e.left * v - (n * v - n),
                o > 0 && (o = 0),
                o < l - h && (o = l - h)),
                c > a && (s = e.top * y - (t * y - t),
                s > 0 && (s = 0),
                s < a - c && (s = a - c)),
                f.updateCursor(h, c),
                i.fancybox.animate(p, {
                    top: s,
                    left: o,
                    scaleX: v,
                    scaleY: y
                }, r || 366, function() {
                    f.isAnimating = !1
                }),
                f.SlideShow && f.SlideShow.isActive && f.SlideShow.stop())
            },
            scaleToFit: function(n) {
                var t, r = this, u = r.current, f = u.$content;
                r.isAnimating || r.isMoved() || !f || "image" != u.type || !u.isLoaded || u.hasError || (r.isAnimating = !0,
                i.fancybox.stop(f),
                t = r.getFitPos(u),
                r.updateCursor(t.width, t.height),
                i.fancybox.animate(f, {
                    top: t.top,
                    left: t.left,
                    scaleX: t.width / f.width(),
                    scaleY: t.height / f.height()
                }, n || 366, function() {
                    r.isAnimating = !1
                }))
            },
            getFitPos: function(n) {
                var u, f, c, s, l = this, e = n.$content, o = n.$slide, t = n.width || n.opts.width, r = n.height || n.opts.height, h = {};
                return !!(n.isLoaded && e && e.length) && (u = i.fancybox.getTranslate(l.$refs.stage).width,
                f = i.fancybox.getTranslate(l.$refs.stage).height,
                u -= parseFloat(o.css("paddingLeft")) + parseFloat(o.css("paddingRight")) + parseFloat(e.css("marginLeft")) + parseFloat(e.css("marginRight")),
                f -= parseFloat(o.css("paddingTop")) + parseFloat(o.css("paddingBottom")) + parseFloat(e.css("marginTop")) + parseFloat(e.css("marginBottom")),
                t && r || (t = u,
                r = f),
                c = Math.min(1, u / t, f / r),
                t *= c,
                r *= c,
                t > u - .5 && (t = u),
                r > f - .5 && (r = f),
                "image" === n.type ? (h.top = Math.floor(.5 * (f - r)) + parseFloat(o.css("paddingTop")),
                h.left = Math.floor(.5 * (u - t)) + parseFloat(o.css("paddingLeft"))) : "video" === n.contentType && (s = n.opts.width && n.opts.height ? t / r : n.opts.ratio || 16 / 9,
                r > t / s ? r = t / s : t > r * s && (t = r * s)),
                h.width = t,
                h.height = r,
                h)
            },
            update: function(n) {
                var t = this;
                i.each(t.slides, function(i, r) {
                    t.updateSlide(r, n)
                })
            },
            updateSlide: function(n, t) {
                var r = this
                  , f = n && n.$content
                  , e = n.width || n.opts.width
                  , o = n.height || n.opts.height
                  , u = n.$slide;
                r.adjustCaption(n);
                f && (e || o || "video" === n.contentType) && !n.hasError && (i.fancybox.stop(f),
                i.fancybox.setTranslate(f, r.getFitPos(n)),
                n.pos === r.currPos && (r.isAnimating = !1,
                r.updateCursor()));
                r.adjustLayout(n);
                u.length && (u.trigger("refresh"),
                n.pos === r.currPos && r.$refs.toolbar.add(r.$refs.navigation.find(".fancybox-button--arrow_right")).toggleClass("compensate-for-scrollbar", u.get(0).scrollHeight > u.get(0).clientHeight));
                r.trigger("onUpdate", n, t)
            },
            centerSlide: function(n) {
                var r = this
                  , u = r.current
                  , t = u.$slide;
                !r.isClosing && u && (t.siblings().css({
                    transform: "",
                    opacity: ""
                }),
                t.parent().children().removeClass("fancybox-slide--previous fancybox-slide--next"),
                i.fancybox.animate(t, {
                    top: 0,
                    left: 0,
                    opacity: 1
                }, void 0 === n ? 0 : n, function() {
                    t.css({
                        transform: "",
                        opacity: ""
                    });
                    u.isComplete || r.complete()
                }, !1))
            },
            isMoved: function(n) {
                var t, r, u = n || this.current;
                return !!u && (r = i.fancybox.getTranslate(this.$refs.stage),
                t = i.fancybox.getTranslate(u.$slide),
                !u.$slide.hasClass("fancybox-animated") && (Math.abs(t.top - r.top) > .5 || Math.abs(t.left - r.left) > .5))
            },
            updateCursor: function(n, t) {
                var o, e, u = this, r = u.current, f = u.$refs.container;
                r && !u.isClosing && u.Guestures && (f.removeClass("fancybox-is-zoomable fancybox-can-zoomIn fancybox-can-zoomOut fancybox-can-swipe fancybox-can-pan"),
                o = u.canPan(n, t),
                e = !!o || u.isZoomable(),
                f.toggleClass("fancybox-is-zoomable", e),
                i("[data-fancybox-zoom]").prop("disabled", !e),
                o ? f.addClass("fancybox-can-pan") : e && ("zoom" === r.opts.clickContent || i.isFunction(r.opts.clickContent) && "zoom" == r.opts.clickContent(r)) ? f.addClass("fancybox-can-zoomIn") : r.opts.touch && (r.opts.touch.vertical || u.group.length > 1) && "video" !== r.contentType && f.addClass("fancybox-can-swipe"))
            },
            isZoomable: function() {
                var t, i = this, n = i.current;
                return n && !i.isClosing && "image" === n.type && !n.hasError && (!n.isLoaded || (t = i.getFitPos(n)) && (n.width > t.width || n.height > t.height)) ? !0 : !1
            },
            isScaledDown: function(n, t) {
                var e = this
                  , r = !1
                  , u = e.current
                  , f = u.$content;
                return void 0 !== n && void 0 !== t ? r = n < u.width && t < u.height : f && (r = i.fancybox.getTranslate(f),
                r = r.width < u.width && r.height < u.height),
                r
            },
            canPan: function(n, t) {
                var e = this
                  , r = e.current
                  , f = null
                  , u = !1;
                return "image" === r.type && (r.isComplete || n && t) && !r.hasError && (u = e.getFitPos(r),
                void 0 !== n && void 0 !== t ? f = {
                    width: n,
                    height: t
                } : r.isComplete && (f = i.fancybox.getTranslate(r.$content)),
                f && u && (u = Math.abs(f.width - u.width) > 1.5 || Math.abs(f.height - u.height) > 1.5)),
                u
            },
            loadSlide: function(n) {
                var u, r, f, t = this;
                if (!n.isLoading && !n.isLoaded) {
                    if (n.isLoading = !0,
                    !1 === t.trigger("beforeLoad", n))
                        return n.isLoading = !1,
                        !1;
                    switch (u = n.type,
                    r = n.$slide,
                    r.off("refresh").trigger("onReset").addClass(n.opts.slideClass),
                    u) {
                    case "image":
                        t.setImage(n);
                        break;
                    case "iframe":
                        t.setIframe(n);
                        break;
                    case "html":
                        t.setContent(n, n.src || n.content);
                        break;
                    case "video":
                        t.setContent(n, n.opts.video.tpl.replace(/\{\{src\}\}/gi, n.src).replace("{{format}}", n.opts.videoFormat || n.opts.video.format || "").replace("{{poster}}", n.thumb || ""));
                        break;
                    case "inline":
                        i(n.src).length ? t.setContent(n, i(n.src)) : t.setError(n);
                        break;
                    case "ajax":
                        t.showLoading(n);
                        f = i.ajax(i.extend({}, n.opts.ajax.settings, {
                            url: n.src,
                            success: function(i, r) {
                                "success" === r && t.setContent(n, i)
                            },
                            error: function(i, r) {
                                i && "abort" !== r && t.setError(n)
                            }
                        }));
                        r.one("onReset", function() {
                            f.abort()
                        });
                        break;
                    default:
                        t.setError(n)
                    }
                    return !0
                }
            },
            setImage: function(n) {
                var u, r = this;
                setTimeout(function() {
                    var t = n.$image;
                    r.isClosing || !n.isLoading || t && t.length && t[0].complete || n.hasError || r.showLoading(n)
                }, 50);
                r.checkSrcset(n);
                n.$content = i('<div class="fancybox-content"><\/div>').addClass("fancybox-is-hidden").appendTo(n.$slide.addClass("fancybox-slide--image"));
                !1 !== n.opts.preload && n.opts.width && n.opts.height && n.thumb && (n.width = n.opts.width,
                n.height = n.opts.height,
                u = t.createElement("img"),
                u.onerror = function() {
                    i(this).remove();
                    n.$ghost = null
                }
                ,
                u.onload = function() {
                    r.afterLoad(n)
                }
                ,
                n.$ghost = i(u).addClass("fancybox-image").appendTo(n.$content).attr("src", n.thumb));
                r.setBigImage(n)
            },
            checkSrcset: function(t) {
                var i, r, e, s, o = t.opts.srcset || t.opts.image.srcset, f, u;
                if (o) {
                    for (e = n.devicePixelRatio || 1,
                    s = n.innerWidth * e,
                    r = o.split(",").map(function(n) {
                        var t = {};
                        return n.trim().split(/\s+/).forEach(function(n, i) {
                            var r = parseInt(n.substring(0, n.length - 1), 10);
                            if (0 === i)
                                return t.url = n;
                            r && (t.value = r,
                            t.postfix = n[n.length - 1])
                        }),
                        t
                    }),
                    r.sort(function(n, t) {
                        return n.value - t.value
                    }),
                    f = 0; f < r.length; f++)
                        if (u = r[f],
                        "w" === u.postfix && u.value >= s || "x" === u.postfix && u.value >= e) {
                            i = u;
                            break
                        }
                    !i && r.length && (i = r[r.length - 1]);
                    i && (t.src = i.url,
                    t.width && t.height && "w" == i.postfix && (t.height = t.width / t.height * i.value,
                    t.width = i.value),
                    t.opts.srcset = o)
                }
            },
            setBigImage: function(n) {
                var r = this
                  , f = t.createElement("img")
                  , u = i(f);
                n.$image = u.one("error", function() {
                    r.setError(n)
                }).one("load", function() {
                    var t;
                    n.$ghost || (r.resolveImageSlideSize(n, this.naturalWidth, this.naturalHeight),
                    r.afterLoad(n));
                    r.isClosing || (n.opts.srcset && (t = n.opts.sizes,
                    t && "auto" !== t || (t = (n.width / n.height > 1 && e.width() / e.height() > 1 ? "100" : Math.round(n.width / n.height * 100)) + "vw"),
                    u.attr("sizes", t).attr("srcset", n.opts.srcset)),
                    n.$ghost && setTimeout(function() {
                        n.$ghost && !r.isClosing && n.$ghost.hide()
                    }, Math.min(300, Math.max(1e3, n.height / 1600))),
                    r.hideLoading(n))
                }).addClass("fancybox-image").attr("src", n.src).appendTo(n.$content);
                (f.complete || "complete" == f.readyState) && u.naturalWidth && u.naturalHeight ? u.trigger("load") : f.error && u.trigger("error")
            },
            resolveImageSlideSize: function(n, t, i) {
                var r = parseInt(n.opts.width, 10)
                  , u = parseInt(n.opts.height, 10);
                n.width = t;
                n.height = i;
                r > 0 && (n.width = r,
                n.height = Math.floor(r * i / t));
                u > 0 && (n.width = Math.floor(u * t / i),
                n.height = u)
            },
            setIframe: function(n) {
                var u, f = this, t = n.opts.iframe, r = n.$slide;
                n.$content = i('<div class="fancybox-content' + (t.preload ? " fancybox-is-hidden" : "") + '"><\/div>').css(t.css).appendTo(r);
                r.addClass("fancybox-slide--" + n.contentType);
                n.$iframe = u = i(t.tpl.replace(/\{rnd\}/g, (new Date).getTime())).attr(t.attr).appendTo(n.$content);
                t.preload ? (f.showLoading(n),
                u.on("load.fb error.fb", function() {
                    this.isReady = 1;
                    n.$slide.trigger("refresh");
                    f.afterLoad(n)
                }),
                r.on("refresh.fb", function() {
                    var s, i, f = n.$content, e = t.css.width, o = t.css.height;
                    if (1 === u[0].isReady) {
                        try {
                            s = u.contents();
                            i = s.find("body")
                        } catch (n) {}
                        i && i.length && i.children().length && (r.css("overflow", "visible"),
                        f.css({
                            width: "100%",
                            "max-width": "100%",
                            height: "9999px"
                        }),
                        void 0 === e && (e = Math.ceil(Math.max(i[0].clientWidth, i.outerWidth(!0)))),
                        f.css("width", e || "").css("max-width", ""),
                        void 0 === o && (o = Math.ceil(Math.max(i[0].clientHeight, i.outerHeight(!0)))),
                        f.css("height", o || ""),
                        r.css("overflow", "auto"));
                        f.removeClass("fancybox-is-hidden")
                    }
                })) : f.afterLoad(n);
                u.attr("src", n.src);
                r.one("onReset", function() {
                    try {
                        i(this).find("iframe").hide().unbind().attr("src", "//about:blank")
                    } catch (n) {}
                    i(this).off("refresh.fb").empty();
                    n.isLoaded = !1;
                    n.isRevealed = !1
                })
            },
            setContent: function(n, t) {
                var r = this;
                r.isClosing || (r.hideLoading(n),
                n.$content && i.fancybox.stop(n.$content),
                n.$slide.empty(),
                v(t) && t.parent().length ? ((t.hasClass("fancybox-content") || t.parent().hasClass("fancybox-content")) && t.parents(".fancybox-slide").trigger("onReset"),
                n.$placeholder = i("<div>").hide().insertAfter(t),
                t.css("display", "inline-block")) : n.hasError || ("string" === i.type(t) && (t = i("<div>").append(i.trim(t)).contents()),
                n.opts.filter && (t = i("<div>").html(t).find(n.opts.filter))),
                n.$slide.one("onReset", function() {
                    i(this).find("video,audio").trigger("pause");
                    n.$placeholder && (n.$placeholder.after(t.removeClass("fancybox-content").hide()).remove(),
                    n.$placeholder = null);
                    n.$smallBtn && (n.$smallBtn.remove(),
                    n.$smallBtn = null);
                    n.hasError || (i(this).empty(),
                    n.isLoaded = !1,
                    n.isRevealed = !1)
                }),
                i(t).appendTo(n.$slide),
                i(t).is("video,audio") && (i(t).addClass("fancybox-video"),
                i(t).wrap("<div><\/div>"),
                n.contentType = "video",
                n.opts.width = n.opts.width || i(t).attr("width"),
                n.opts.height = n.opts.height || i(t).attr("height")),
                n.$content = n.$slide.children().filter("div,form,main,video,audio,article,.fancybox-content").first(),
                n.$content.siblings().hide(),
                n.$content.length || (n.$content = n.$slide.wrapInner("<div><\/div>").children().first()),
                n.$content.addClass("fancybox-content"),
                n.$slide.addClass("fancybox-slide--" + n.contentType),
                r.afterLoad(n))
            },
            setError: function(n) {
                n.hasError = !0;
                n.$slide.trigger("onReset").removeClass("fancybox-slide--" + n.contentType).addClass("fancybox-slide--error");
                n.contentType = "html";
                this.setContent(n, this.translate(n, n.opts.errorTpl));
                n.pos === this.currPos && (this.isAnimating = !1)
            },
            showLoading: function(n) {
                var t = this;
                (n = n || t.current) && !n.$spinner && (n.$spinner = i(t.translate(t, t.opts.spinnerTpl)).appendTo(n.$slide).hide().fadeIn("fast"))
            },
            hideLoading: function(n) {
                var t = this;
                (n = n || t.current) && n.$spinner && (n.$spinner.stop().remove(),
                delete n.$spinner)
            },
            afterLoad: function(n) {
                var t = this;
                t.isClosing || (n.isLoading = !1,
                n.isLoaded = !0,
                t.trigger("afterLoad", n),
                t.hideLoading(n),
                !n.opts.smallBtn || n.$smallBtn && n.$smallBtn.length || (n.$smallBtn = i(t.translate(n, n.opts.btnTpl.smallBtn)).appendTo(n.$content)),
                n.opts.protect && n.$content && !n.hasError && (n.$content.on("contextmenu.fb", function(n) {
                    return 2 == n.button && n.preventDefault(),
                    !0
                }),
                "image" === n.type && i('<div class="fancybox-spaceball"><\/div>').appendTo(n.$content)),
                t.adjustCaption(n),
                t.adjustLayout(n),
                n.pos === t.currPos && t.updateCursor(),
                t.revealContent(n))
            },
            adjustCaption: function(n) {
                var i, t = this, r = n || t.current, u = r.opts.caption, o = r.opts.preventCaptionOverlap, f = t.$refs.caption, e = !1;
                f.toggleClass("fancybox-caption--separate", o);
                o && u && u.length && (r.pos !== t.currPos ? (i = f.clone().appendTo(f.parent()),
                i.children().eq(0).empty().html(u),
                e = i.outerHeight(!0),
                i.empty().remove()) : t.$caption && (e = t.$caption.outerHeight(!0)),
                r.$slide.css("padding-bottom", e || ""))
            },
            adjustLayout: function(n) {
                var r, u, f, i, e = this, t = n || e.current;
                t.isLoaded && !0 !== t.opts.disableLayoutFix && (t.$content.css("margin-bottom", ""),
                t.$content.outerHeight() > t.$slide.height() + .5 && (f = t.$slide[0].style["padding-bottom"],
                i = t.$slide.css("padding-bottom"),
                parseFloat(i) > 0 && (r = t.$slide[0].scrollHeight,
                t.$slide.css("padding-bottom", 0),
                Math.abs(r - t.$slide[0].scrollHeight) < 1 && (u = i),
                t.$slide.css("padding-bottom", f))),
                t.$content.css("margin-bottom", u))
            },
            revealContent: function(n) {
                var r, c, f, h, t = this, s = n.$slide, e = !1, o = !1, l = t.isMoved(n), a = n.isRevealed;
                return n.isRevealed = !0,
                r = n.opts[t.firstRun ? "animationEffect" : "transitionEffect"],
                f = n.opts[t.firstRun ? "animationDuration" : "transitionDuration"],
                f = parseInt(void 0 === n.forcedDuration ? f : n.forcedDuration, 10),
                !l && n.pos === t.currPos && f || (r = !1),
                "zoom" === r && (n.pos === t.currPos && f && "image" === n.type && !n.hasError && (o = t.getThumbPos(n)) ? e = t.getFitPos(n) : r = "fade"),
                "zoom" === r ? (t.isAnimating = !0,
                e.scaleX = e.width / o.width,
                e.scaleY = e.height / o.height,
                h = n.opts.zoomOpacity,
                "auto" == h && (h = Math.abs(n.width / n.height - o.width / o.height) > .1),
                h && (o.opacity = .1,
                e.opacity = 1),
                i.fancybox.setTranslate(n.$content.removeClass("fancybox-is-hidden"), o),
                u(n.$content),
                void i.fancybox.animate(n.$content, e, f, function() {
                    t.isAnimating = !1;
                    t.complete()
                })) : (t.updateSlide(n),
                r ? (i.fancybox.stop(s),
                c = "fancybox-slide--" + (n.pos >= t.prevPos ? "next" : "previous") + " fancybox-animated fancybox-fx-" + r,
                s.addClass(c).removeClass("fancybox-slide--current"),
                n.$content.removeClass("fancybox-is-hidden"),
                u(s),
                "image" !== n.type && n.$content.hide().show(0),
                void i.fancybox.animate(s, "fancybox-slide--current", f, function() {
                    s.removeClass(c).css({
                        transform: "",
                        opacity: ""
                    });
                    n.pos === t.currPos && t.complete()
                }, !0)) : (n.$content.removeClass("fancybox-is-hidden"),
                a || !l || "image" !== n.type || n.hasError || n.$content.hide().fadeIn("fast"),
                void (n.pos === t.currPos && t.complete())))
            },
            getThumbPos: function(n) {
                var t, u, e, o, f, s = !1, r = n.$thumb;
                return !(!r || !p(r[0])) && (t = i.fancybox.getTranslate(r),
                u = parseFloat(r.css("border-top-width") || 0),
                e = parseFloat(r.css("border-right-width") || 0),
                o = parseFloat(r.css("border-bottom-width") || 0),
                f = parseFloat(r.css("border-left-width") || 0),
                s = {
                    top: t.top + u,
                    left: t.left + f,
                    width: t.width - e - f,
                    height: t.height - u - o,
                    scaleX: 1,
                    scaleY: 1
                },
                t.width > 0 && t.height > 0 && s)
            },
            complete: function() {
                var r, n = this, t = n.current, f = {};
                !n.isMoved() && t.isLoaded && (t.isComplete || (t.isComplete = !0,
                t.$slide.siblings().trigger("onReset"),
                n.preload("inline"),
                u(t.$slide),
                t.$slide.addClass("fancybox-slide--complete"),
                i.each(n.slides, function(t, r) {
                    r.pos >= n.currPos - 1 && r.pos <= n.currPos + 1 ? f[r.pos] = r : r && (i.fancybox.stop(r.$slide),
                    r.$slide.off().remove())
                }),
                n.slides = f),
                n.isAnimating = !1,
                n.updateCursor(),
                n.trigger("afterShow"),
                t.opts.video.autoStart && t.$slide.find("video,audio").filter(":visible:first").trigger("play").one("ended", function() {
                    Document.exitFullscreen ? Document.exitFullscreen() : this.webkitExitFullscreen && this.webkitExitFullscreen();
                    n.next()
                }),
                t.opts.autoFocus && "html" === t.contentType && (r = t.$content.find("input[autofocus]:enabled:visible:first"),
                r.length ? r.trigger("focus") : n.focus(null, !0)),
                t.$slide.scrollTop(0).scrollLeft(0))
            },
            preload: function(n) {
                var i, r, t = this;
                t.group.length < 2 || (r = t.slides[t.currPos + 1],
                i = t.slides[t.currPos - 1],
                i && i.type === n && t.loadSlide(i),
                r && r.type === n && t.loadSlide(r))
            },
            focus: function(n, r) {
                var u, e, f = this, o = 'a[href],area[href],input:not([disabled]):not([type="hidden"]):not([aria-hidden]),select:not([disabled]):not([aria-hidden]),textarea:not([disabled]):not([aria-hidden]),button:not([disabled]):not([aria-hidden]),iframe,object,embed,video,audio,[contenteditable],[tabindex]:not([tabindex^="-"])';
                f.isClosing || (u = !n && f.current && f.current.isComplete ? f.current.$slide.find("*:visible" + (r ? ":not(.fancybox-close-small)" : "")) : f.$refs.container.find("*:visible"),
                u = u.filter(o).filter(function() {
                    return "hidden" !== i(this).css("visibility") && !i(this).hasClass("disabled")
                }),
                u.length ? (e = u.index(t.activeElement),
                n && n.shiftKey ? (e < 0 || 0 == e) && (n.preventDefault(),
                u.eq(u.length - 1).trigger("focus")) : (e < 0 || e == u.length - 1) && (n && n.preventDefault(),
                u.eq(0).trigger("focus"))) : f.$refs.container.trigger("focus"))
            },
            activate: function() {
                var n = this;
                i(".fancybox-container").each(function() {
                    var t = i(this).data("FancyBox");
                    t && t.id !== n.id && !t.isClosing && (t.trigger("onDeactivate"),
                    t.removeEvents(),
                    t.isVisible = !1)
                });
                n.isVisible = !0;
                (n.current || n.isIdle) && (n.update(),
                n.updateControls());
                n.trigger("onActivate");
                n.addEvents()
            },
            close: function(n, t) {
                var o, s, h, l, a, y, e, r = this, f = r.current, v = function() {
                    r.cleanUp(n)
                };
                return !r.isClosing && (r.isClosing = !0,
                !1 === r.trigger("beforeClose", n) ? (r.isClosing = !1,
                c(function() {
                    r.update()
                }),
                !1) : (r.removeEvents(),
                h = f.$content,
                o = f.opts.animationEffect,
                s = i.isNumeric(t) ? t : o ? f.opts.animationDuration : 0,
                f.$slide.removeClass("fancybox-slide--complete fancybox-slide--next fancybox-slide--previous fancybox-animated"),
                !0 !== n ? i.fancybox.stop(f.$slide) : o = !1,
                f.$slide.siblings().trigger("onReset").remove(),
                s && r.$refs.container.removeClass("fancybox-is-open").addClass("fancybox-is-closing").css("transition-duration", s + "ms"),
                r.hideLoading(f),
                r.hideControls(!0),
                r.updateCursor(),
                "zoom" !== o || h && s && "image" === f.type && !r.isMoved() && !f.hasError && (e = r.getThumbPos(f)) || (o = "fade"),
                "zoom" === o ? (i.fancybox.stop(h),
                l = i.fancybox.getTranslate(h),
                y = {
                    top: l.top,
                    left: l.left,
                    scaleX: l.width / e.width,
                    scaleY: l.height / e.height,
                    width: e.width,
                    height: e.height
                },
                a = f.opts.zoomOpacity,
                "auto" == a && (a = Math.abs(f.width / f.height - e.width / e.height) > .1),
                a && (e.opacity = 0),
                i.fancybox.setTranslate(h, y),
                u(h),
                i.fancybox.animate(h, e, s, v),
                !0) : (o && s ? i.fancybox.animate(f.$slide.addClass("fancybox-slide--previous").removeClass("fancybox-slide--current"), "fancybox-animated fancybox-fx-" + o, s, v) : !0 === n ? setTimeout(v, s) : v(),
                !0)))
            },
            cleanUp: function(t) {
                var f, e, o, r = this, u = r.current.opts.$orig;
                r.current.$slide.trigger("onReset");
                r.$refs.container.empty().remove();
                r.trigger("afterClose", t);
                r.current.opts.backFocus && (u && u.length && u.is(":visible") || (u = r.$trigger),
                u && u.length && (e = n.scrollX,
                o = n.scrollY,
                u.trigger("focus"),
                i("html, body").scrollTop(o).scrollLeft(e)));
                r.current = null;
                f = i.fancybox.getInstance();
                f ? f.activate() : (i("body").removeClass("fancybox-active compensate-for-scrollbar"),
                i("#fancybox-style-noscroll").remove())
            },
            trigger: function(n, t) {
                var o, f = Array.prototype.slice.call(arguments, 1), e = this, u = t && t.opts ? t : e.current;
                if (u ? f.unshift(u) : u = e,
                f.unshift(e),
                i.isFunction(u.opts[n]) && (o = u.opts[n].apply(u, f)),
                !1 === o)
                    return o;
                "afterClose" !== n && e.$refs ? e.$refs.container.trigger(n + ".fb", f) : r.trigger(n + ".fb", f)
            },
            updateControls: function() {
                var n = this
                  , r = n.current
                  , f = r.index
                  , u = n.$refs.container
                  , o = n.$refs.caption
                  , e = r.opts.caption;
                r.$slide.trigger("refresh");
                e && e.length ? (n.$caption = o,
                o.children().eq(0).html(e)) : n.$caption = null;
                n.hasHiddenControls || n.isIdle || n.showControls();
                u.find("[data-fancybox-count]").html(n.group.length);
                u.find("[data-fancybox-index]").html(f + 1);
                u.find("[data-fancybox-prev]").prop("disabled", !r.opts.loop && f <= 0);
                u.find("[data-fancybox-next]").prop("disabled", !r.opts.loop && f >= n.group.length - 1);
                "image" === r.type ? u.find("[data-fancybox-zoom]").show().end().find("[data-fancybox-download]").attr("href", r.opts.image.src || r.src).show() : r.opts.toolbar && u.find("[data-fancybox-download],[data-fancybox-zoom]").hide();
                i(t.activeElement).is(":hidden,[disabled]") && n.$refs.container.trigger("focus")
            },
            hideControls: function(n) {
                var i = this
                  , t = ["infobar", "toolbar", "nav"];
                !n && i.current.opts.preventCaptionOverlap || t.push("caption");
                this.$refs.container.removeClass(t.map(function(n) {
                    return "fancybox-show-" + n
                }).join(" "));
                this.hasHiddenControls = !0
            },
            showControls: function() {
                var n = this
                  , t = n.current ? n.current.opts : n.opts
                  , i = n.$refs.container;
                n.hasHiddenControls = !1;
                n.idleSecondsCounter = 0;
                i.toggleClass("fancybox-show-toolbar", !(!t.toolbar || !t.buttons)).toggleClass("fancybox-show-infobar", !!(t.infobar && n.group.length > 1)).toggleClass("fancybox-show-caption", !!n.$caption).toggleClass("fancybox-show-nav", !!(t.arrows && n.group.length > 1)).toggleClass("fancybox-is-modal", !!t.modal)
            },
            toggleControls: function() {
                this.hasHiddenControls ? this.showControls() : this.hideControls()
            }
        });
        i.fancybox = {
            version: "3.5.7",
            defaults: l,
            getInstance: function(n) {
                var t = i('.fancybox-container:not(".fancybox-is-closing"):last').data("FancyBox")
                  , r = Array.prototype.slice.call(arguments, 1);
                return t instanceof h && ("string" === i.type(n) ? t[n].apply(t, r) : "function" === i.type(n) && n.apply(t, r),
                t)
            },
            open: function(n, t, i) {
                return new h(n,t,i)
            },
            close: function(n) {
                var t = this.getInstance();
                t && (t.close(),
                !0 === n && this.close(n))
            },
            destroy: function() {
                this.close(!0);
                r.add("body").off("click.fb-start", "**")
            },
            isMobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
            use3d: function() {
                var i = t.createElement("div");
                return n.getComputedStyle && n.getComputedStyle(i) && n.getComputedStyle(i).getPropertyValue("transform") && !(t.documentMode && t.documentMode < 11)
            }(),
            getTranslate: function(n) {
                var t;
                return !(!n || !n.length) && (t = n[0].getBoundingClientRect(),
                {
                    top: t.top || 0,
                    left: t.left || 0,
                    width: t.width,
                    height: t.height,
                    opacity: parseFloat(n.css("opacity"))
                })
            },
            setTranslate: function(n, t) {
                var i = ""
                  , r = {};
                if (n && t)
                    return void 0 === t.left && void 0 === t.top || (i = (void 0 === t.left ? n.position().left : t.left) + "px, " + (void 0 === t.top ? n.position().top : t.top) + "px",
                    i = this.use3d ? "translate3d(" + i + ", 0px)" : "translate(" + i + ")"),
                    void 0 !== t.scaleX && void 0 !== t.scaleY ? i += " scale(" + t.scaleX + ", " + t.scaleY + ")" : void 0 !== t.scaleX && (i += " scaleX(" + t.scaleX + ")"),
                    i.length && (r.transform = i),
                    void 0 !== t.opacity && (r.opacity = t.opacity),
                    void 0 !== t.width && (r.width = t.width),
                    void 0 !== t.height && (r.height = t.height),
                    n.css(r)
            },
            animate: function(n, t, r, u, f) {
                var s, e = this;
                i.isFunction(r) && (u = r,
                r = null);
                e.stop(n);
                s = e.getTranslate(n);
                n.on(o, function(o) {
                    o && o.originalEvent && (!n.is(o.originalEvent.target) || "z-index" == o.originalEvent.propertyName) || (e.stop(n),
                    i.isNumeric(r) && n.css("transition-duration", ""),
                    i.isPlainObject(t) ? void 0 !== t.scaleX && void 0 !== t.scaleY && e.setTranslate(n, {
                        top: t.top,
                        left: t.left,
                        width: s.width * t.scaleX,
                        height: s.height * t.scaleY,
                        scaleX: 1,
                        scaleY: 1
                    }) : !0 !== f && n.removeClass(t),
                    i.isFunction(u) && u(o))
                });
                i.isNumeric(r) && n.css("transition-duration", r + "ms");
                i.isPlainObject(t) ? (void 0 !== t.scaleX && void 0 !== t.scaleY && (delete t.width,
                delete t.height,
                n.parent().hasClass("fancybox-slide--image") && n.parent().addClass("fancybox-is-scaling")),
                i.fancybox.setTranslate(n, t)) : n.addClass(t);
                n.data("timer", setTimeout(function() {
                    n.trigger(o)
                }, r + 33))
            },
            stop: function(n, t) {
                n && n.length && (clearTimeout(n.data("timer")),
                t && n.trigger(o),
                n.off(o).css("transition-duration", ""),
                n.parent().removeClass("fancybox-is-scaling"))
            }
        };
        i.fn.fancybox = function(n) {
            var t;
            return n = n || {},
            t = n.selector || !1,
            t ? i("body").off("click.fb-start", t).on("click.fb-start", t, {
                options: n
            }, s) : this.off("click.fb-start").on("click.fb-start", {
                items: this,
                options: n
            }, s),
            this
        }
        ;
        r.on("click.fb-start", "[data-fancybox]", s);
        r.on("click.fb-start", "[data-fancybox-trigger]", function() {
            i('[data-fancybox="' + i(this).attr("data-fancybox-trigger") + '"]').eq(i(this).attr("data-fancybox-index") || 0).trigger("click.fb-start", {
                $trigger: i(this)
            })
        }),
        function() {
            var n = null;
            r.on("mousedown mouseup focus blur", ".fancybox-button", function(t) {
                switch (t.type) {
                case "mousedown":
                    n = i(this);
                    break;
                case "mouseup":
                    n = null;
                    break;
                case "focusin":
                    i(".fancybox-button").removeClass("fancybox-focus");
                    i(this).is(n) || i(this).is("[disabled]") || i(this).addClass("fancybox-focus");
                    break;
                case "focusout":
                    i(".fancybox-button").removeClass("fancybox-focus")
                }
            })
        }()
    }
}(window, document, jQuery),
function(n) {
    "use strict";
    var r = {
        youtube: {
            matcher: /(youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(watch\?(.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*))(.*)/i,
            params: {
                autoplay: 1,
                autohide: 1,
                fs: 1,
                rel: 0,
                hd: 1,
                wmode: "transparent",
                enablejsapi: 1,
                html5: 1
            },
            paramPlace: 8,
            type: "iframe",
            url: "https://www.youtube-nocookie.com/embed/$4",
            thumb: "https://img.youtube.com/vi/$4/hqdefault.jpg"
        },
        vimeo: {
            matcher: /^.+vimeo.com\/(.*\/)?([\d]+)(.*)?/,
            params: {
                autoplay: 1,
                hd: 1,
                show_title: 1,
                show_byline: 1,
                show_portrait: 0,
                fullscreen: 1
            },
            paramPlace: 3,
            type: "iframe",
            url: "//player.vimeo.com/video/$2"
        },
        instagram: {
            matcher: /(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,
            type: "image",
            url: "//$1/p/$2/media/?size=l"
        },
        gmap_place: {
            matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(((maps\/(place\/(.*)\/)?\@(.*),(\d+.?\d+?)z))|(\?ll=))(.*)?/i,
            type: "iframe",
            url: function(n) {
                return "//maps.google." + n[2] + "/?ll=" + (n[9] ? n[9] + "&z=" + Math.floor(n[10]) + (n[12] ? n[12].replace(/^\//, "&") : "") : n[12] + "").replace(/\?/, "&") + "&output=" + (n[12] && n[12].indexOf("layer=c") > 0 ? "svembed" : "embed")
            }
        },
        gmap_search: {
            matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(maps\/search\/)(.*)/i,
            type: "iframe",
            url: function(n) {
                return "//maps.google." + n[2] + "/maps?q=" + n[5].replace("query=", "q=").replace("api=1", "") + "&output=embed"
            }
        }
    }, t = function(t, i, r) {
        if (t)
            return r = r || "",
            "object" === n.type(r) && (r = n.param(r, !0)),
            n.each(i, function(n, i) {
                t = t.replace("$" + n, i || "")
            }),
            r.length && (t += (t.indexOf("?") > 0 ? "&" : "?") + r),
            t
    }, i;
    n(document).on("objectNeedsType.fb", function(i, u, f) {
        var v, y, s, c, e, a, l, o = f.src || "", h = !1;
        v = n.extend(!0, {}, r, f.opts.media);
        n.each(v, function(i, r) {
            var u, v;
            if (s = o.match(r.matcher)) {
                if (h = r.type,
                l = i,
                a = {},
                r.paramPlace && s[r.paramPlace])
                    for (e = s[r.paramPlace],
                    "?" == e[0] && (e = e.substring(1)),
                    e = e.split("&"),
                    u = 0; u < e.length; ++u)
                        v = e[u].split("=", 2),
                        2 == v.length && (a[v[0]] = decodeURIComponent(v[1].replace(/\+/g, " ")));
                return c = n.extend(!0, {}, r.params, f.opts[i], a),
                o = "function" === n.type(r.url) ? r.url.call(this, s, c, f) : t(r.url, s, c),
                y = "function" === n.type(r.thumb) ? r.thumb.call(this, s, c, f) : t(r.thumb, s),
                "youtube" === i ? o = o.replace(/&t=((\d+)m)?(\d+)s/, function(n, t, i, r) {
                    return "&start=" + ((i ? 60 * parseInt(i, 10) : 0) + parseInt(r, 10))
                }) : "vimeo" === i && (o = o.replace("&%23", "#")),
                !1
            }
        });
        h ? (f.opts.thumb || f.opts.$thumb && f.opts.$thumb.length || (f.opts.thumb = y),
        "iframe" === h && (f.opts = n.extend(!0, f.opts, {
            iframe: {
                preload: !1,
                attr: {
                    scrolling: "no"
                }
            }
        })),
        n.extend(f, {
            type: h,
            src: o,
            origSrc: f.src,
            contentSource: l,
            contentType: "image" === h ? "image" : "gmap_place" == l || "gmap_search" == l ? "map" : "video"
        })) : o && (f.type = f.opts.defaultType)
    });
    i = {
        youtube: {
            src: "https://www.youtube.com/iframe_api",
            "class": "YT",
            loading: !1,
            loaded: !1
        },
        vimeo: {
            src: "https://player.vimeo.com/api/player.js",
            "class": "Vimeo",
            loading: !1,
            loaded: !1
        },
        load: function(n) {
            var t, i = this;
            if (this[n].loaded)
                return void setTimeout(function() {
                    i.done(n)
                });
            this[n].loading || (this[n].loading = !0,
            t = document.createElement("script"),
            t.type = "text/javascript",
            t.src = this[n].src,
            "youtube" === n ? window.onYouTubeIframeAPIReady = function() {
                i[n].loaded = !0;
                i.done(n)
            }
            : t.onload = function() {
                i[n].loaded = !0;
                i.done(n)
            }
            ,
            document.body.appendChild(t))
        },
        done: function(t) {
            var i, r, u;
            "youtube" === t && delete window.onYouTubeIframeAPIReady;
            (i = n.fancybox.getInstance()) && (r = i.current.$content.find("iframe"),
            "youtube" === t && void 0 !== YT && YT ? u = new YT.Player(r.attr("id"),{
                events: {
                    onStateChange: function(n) {
                        0 == n.data && i.next()
                    }
                }
            }) : "vimeo" === t && void 0 !== Vimeo && Vimeo && (u = new Vimeo.Player(r),
            u.on("ended", function() {
                i.next()
            })))
        }
    };
    n(document).on({
        "afterShow.fb": function(n, t, r) {
            t.group.length > 1 && ("youtube" === r.contentSource || "vimeo" === r.contentSource) && i.load(r.contentSource)
        }
    })
}(jQuery),
function(n, t, i) {
    "use strict";
    var o = function() {
        return n.requestAnimationFrame || n.webkitRequestAnimationFrame || n.mozRequestAnimationFrame || n.oRequestAnimationFrame || function(t) {
            return n.setTimeout(t, 1e3 / 60)
        }
    }()
      , f = function() {
        return n.cancelAnimationFrame || n.webkitCancelAnimationFrame || n.mozCancelAnimationFrame || n.oCancelAnimationFrame || function(t) {
            n.clearTimeout(t)
        }
    }()
      , e = function(t) {
        var r = [], i;
        t = t.originalEvent || t || n.e;
        t = t.touches && t.touches.length ? t.touches : t.changedTouches && t.changedTouches.length ? t.changedTouches : [t];
        for (i in t)
            t[i].pageX ? r.push({
                x: t[i].pageX,
                y: t[i].pageY
            }) : t[i].clientX && r.push({
                x: t[i].clientX,
                y: t[i].clientY
            });
        return r
    }
      , u = function(n, t, i) {
        return t && n ? "x" === i ? n.x - t.x : "y" === i ? n.y - t.y : Math.sqrt(Math.pow(n.x - t.x, 2) + Math.pow(n.y - t.y, 2)) : 0
    }
      , s = function(n) {
        if (n.is('a,area,button,[role="button"],input,label,select,summary,textarea,video,audio,iframe') || i.isFunction(n.get(0).onclick) || n.data("selectable"))
            return !0;
        for (var t = 0, r = n[0].attributes, u = r.length; t < u; t++)
            if ("data-fancybox-" === r[t].nodeName.substr(0, 14))
                return !0;
        return !1
    }
      , c = function(t) {
        var i = n.getComputedStyle(t)["overflow-y"]
          , r = n.getComputedStyle(t)["overflow-x"]
          , u = ("scroll" === i || "auto" === i) && t.scrollHeight > t.clientHeight
          , f = ("scroll" === r || "auto" === r) && t.scrollWidth > t.clientWidth;
        return u || f
    }
      , h = function(n) {
        for (var t = !1; ; ) {
            if (t = c(n.get(0)))
                break;
            if (n = n.parent(),
            !n.length || n.hasClass("fancybox-stage") || n.is("body"))
                break
        }
        return t
    }
      , r = function(n) {
        var t = this;
        t.instance = n;
        t.$bg = n.$refs.bg;
        t.$stage = n.$refs.stage;
        t.$container = n.$refs.container;
        t.destroy();
        t.$container.on("touchstart.fb.touch mousedown.fb.touch", i.proxy(t, "ontouchstart"))
    };
    r.prototype.destroy = function() {
        var n = this;
        n.$container.off(".fb.touch");
        i(t).off(".fb.touch");
        n.requestId && (f(n.requestId),
        n.requestId = null);
        n.tapped && (clearTimeout(n.tapped),
        n.tapped = null)
    }
    ;
    r.prototype.ontouchstart = function(r) {
        var f = this
          , o = i(r.target)
          , l = f.instance
          , c = l.current
          , a = c.$slide
          , y = c.$content
          , v = "touchstart" == r.type;
        if (v && f.$container.off("mousedown.fb.touch"),
        (!r.originalEvent || 2 != r.originalEvent.button) && a.length && o.length && !s(o) && !s(o.parent()) && (o.is("img") || !(r.originalEvent.clientX > o[0].clientWidth + o.offset().left))) {
            if (!c || l.isAnimating || c.$slide.hasClass("fancybox-animated"))
                return r.stopPropagation(),
                void r.preventDefault();
            f.realPoints = f.startPoints = e(r);
            f.startPoints.length && (c.touch && r.stopPropagation(),
            f.startEvent = r,
            f.canTap = !0,
            f.$target = o,
            f.$content = y,
            f.opts = c.opts.touch,
            f.isPanning = !1,
            f.isSwiping = !1,
            f.isZooming = !1,
            f.isScrolling = !1,
            f.canPan = l.canPan(),
            f.startTime = (new Date).getTime(),
            f.distanceX = f.distanceY = f.distance = 0,
            f.canvasWidth = Math.round(a[0].clientWidth),
            f.canvasHeight = Math.round(a[0].clientHeight),
            f.contentLastPos = null,
            f.contentStartPos = i.fancybox.getTranslate(f.$content) || {
                top: 0,
                left: 0
            },
            f.sliderStartPos = i.fancybox.getTranslate(a),
            f.stagePos = i.fancybox.getTranslate(l.$refs.stage),
            f.sliderStartPos.top -= f.stagePos.top,
            f.sliderStartPos.left -= f.stagePos.left,
            f.contentStartPos.top -= f.stagePos.top,
            f.contentStartPos.left -= f.stagePos.left,
            i(t).off(".fb.touch").on(v ? "touchend.fb.touch touchcancel.fb.touch" : "mouseup.fb.touch mouseleave.fb.touch", i.proxy(f, "ontouchend")).on(v ? "touchmove.fb.touch" : "mousemove.fb.touch", i.proxy(f, "ontouchmove")),
            i.fancybox.isMobile && t.addEventListener("scroll", f.onscroll, !0),
            ((f.opts || f.canPan) && (o.is(f.$stage) || f.$stage.find(o).length) || (o.is(".fancybox-image") && r.preventDefault(),
            i.fancybox.isMobile && o.parents(".fancybox-caption").length)) && (f.isScrollable = h(o) || h(o.parent()),
            i.fancybox.isMobile && f.isScrollable || r.preventDefault(),
            (1 === f.startPoints.length || c.hasError) && (f.canPan ? (i.fancybox.stop(f.$content),
            f.isPanning = !0) : f.isSwiping = !0,
            f.$container.addClass("fancybox-is-grabbing")),
            2 === f.startPoints.length && "image" === c.type && (c.isLoaded || c.$ghost) && (f.canTap = !1,
            f.isSwiping = !1,
            f.isPanning = !1,
            f.isZooming = !0,
            i.fancybox.stop(f.$content),
            f.centerPointStartX = .5 * (f.startPoints[0].x + f.startPoints[1].x) - i(n).scrollLeft(),
            f.centerPointStartY = .5 * (f.startPoints[0].y + f.startPoints[1].y) - i(n).scrollTop(),
            f.percentageOfImageAtPinchPointX = (f.centerPointStartX - f.contentStartPos.left) / f.contentStartPos.width,
            f.percentageOfImageAtPinchPointY = (f.centerPointStartY - f.contentStartPos.top) / f.contentStartPos.height,
            f.startDistanceBetweenFingers = u(f.startPoints[0], f.startPoints[1]))))
        }
    }
    ;
    r.prototype.onscroll = function() {
        var n = this;
        n.isScrolling = !0;
        t.removeEventListener("scroll", n.onscroll, !0)
    }
    ;
    r.prototype.ontouchmove = function(n) {
        var t = this;
        return void 0 !== n.originalEvent.buttons && 0 === n.originalEvent.buttons ? void t.ontouchend(n) : t.isScrolling ? void (t.canTap = !1) : (t.newPoints = e(n),
        void ((t.opts || t.canPan) && t.newPoints.length && t.newPoints.length && (t.isSwiping && !0 === t.isSwiping || n.preventDefault(),
        t.distanceX = u(t.newPoints[0], t.startPoints[0], "x"),
        t.distanceY = u(t.newPoints[0], t.startPoints[0], "y"),
        t.distance = u(t.newPoints[0], t.startPoints[0]),
        t.distance > 0 && (t.isSwiping ? t.onSwipe(n) : t.isPanning ? t.onPan() : t.isZooming && t.onZoom()))))
    }
    ;
    r.prototype.onSwipe = function() {
        var e, t = this, r = t.instance, s = t.isSwiping, u = t.sliderStartPos.left || 0;
        if (!0 !== s)
            "x" == s && (t.distanceX > 0 && (t.instance.group.length < 2 || 0 === t.instance.current.index && !t.instance.current.opts.loop) ? u += Math.pow(t.distanceX, .8) : t.distanceX < 0 && (t.instance.group.length < 2 || t.instance.current.index === t.instance.group.length - 1 && !t.instance.current.opts.loop) ? u -= Math.pow(-t.distanceX, .8) : u += t.distanceX),
            t.sliderLastPos = {
                top: "x" == s ? 0 : t.sliderStartPos.top + t.distanceY,
                left: u
            },
            t.requestId && (f(t.requestId),
            t.requestId = null),
            t.requestId = o(function() {
                t.sliderLastPos && (i.each(t.instance.slides, function(n, r) {
                    var u = r.pos - t.instance.currPos;
                    i.fancybox.setTranslate(r.$slide, {
                        top: t.sliderLastPos.top,
                        left: t.sliderLastPos.left + u * t.canvasWidth + u * r.opts.gutter
                    })
                }),
                t.$container.addClass("fancybox-is-sliding"))
            });
        else if (Math.abs(t.distance) > 10) {
            if (t.canTap = !1,
            r.group.length < 2 && t.opts.vertical ? t.isSwiping = "y" : r.isDragging || !1 === t.opts.vertical || "auto" === t.opts.vertical && i(n).width() > 800 ? t.isSwiping = "x" : (e = Math.abs(180 * Math.atan2(t.distanceY, t.distanceX) / Math.PI),
            t.isSwiping = e > 45 && e < 135 ? "y" : "x"),
            "y" === t.isSwiping && i.fancybox.isMobile && t.isScrollable)
                return void (t.isScrolling = !0);
            r.isDragging = t.isSwiping;
            t.startPoints = t.newPoints;
            i.each(r.slides, function(n, u) {
                var f, e;
                i.fancybox.stop(u.$slide);
                f = i.fancybox.getTranslate(u.$slide);
                e = i.fancybox.getTranslate(r.$refs.stage);
                u.$slide.css({
                    transform: "",
                    opacity: "",
                    "transition-duration": ""
                }).removeClass("fancybox-animated").removeClass(function(n, t) {
                    return (t.match(/(^|\s)fancybox-fx-\S+/g) || []).join(" ")
                });
                u.pos === r.current.pos && (t.sliderStartPos.top = f.top - e.top,
                t.sliderStartPos.left = f.left - e.left);
                i.fancybox.setTranslate(u.$slide, {
                    top: f.top - e.top,
                    left: f.left - e.left
                })
            });
            r.SlideShow && r.SlideShow.isActive && r.SlideShow.stop()
        }
    }
    ;
    r.prototype.onPan = function() {
        var n = this;
        if (u(n.newPoints[0], n.realPoints[0]) < (i.fancybox.isMobile ? 10 : 5))
            return void (n.startPoints = n.newPoints);
        n.canTap = !1;
        n.contentLastPos = n.limitMovement();
        n.requestId && f(n.requestId);
        n.requestId = o(function() {
            i.fancybox.setTranslate(n.$content, n.contentLastPos)
        })
    }
    ;
    r.prototype.limitMovement = function() {
        var f, e, o, s, n, t, i = this, h = i.canvasWidth, v = i.canvasHeight, r = i.distanceX, u = i.distanceY, c = i.contentStartPos, l = c.left, y = c.top, a = c.width, p = c.height;
        return n = a > h ? l + r : l,
        t = y + u,
        f = Math.max(0, .5 * h - .5 * a),
        e = Math.max(0, .5 * v - .5 * p),
        o = Math.min(h - a, .5 * h - .5 * a),
        s = Math.min(v - p, .5 * v - .5 * p),
        r > 0 && n > f && (n = f - 1 + Math.pow(-f + l + r, .8) || 0),
        r < 0 && n < o && (n = o + 1 - Math.pow(o - l - r, .8) || 0),
        u > 0 && t > e && (t = e - 1 + Math.pow(-e + y + u, .8) || 0),
        u < 0 && t < s && (t = s + 1 - Math.pow(s - y - u, .8) || 0),
        {
            top: t,
            left: n
        }
    }
    ;
    r.prototype.limitPosition = function(n, t, i, r) {
        var e = this
          , u = e.canvasWidth
          , f = e.canvasHeight;
        return i > u ? (n = n > 0 ? 0 : n,
        n = n < u - i ? u - i : n) : n = Math.max(0, u / 2 - i / 2),
        r > f ? (t = t > 0 ? 0 : t,
        t = t < f - r ? f - r : t) : t = Math.max(0, f / 2 - r / 2),
        {
            top: t,
            left: n
        }
    }
    ;
    r.prototype.onZoom = function() {
        var t = this
          , r = t.contentStartPos
          , s = r.width
          , h = r.height
          , a = r.left
          , v = r.top
          , y = u(t.newPoints[0], t.newPoints[1])
          , e = y / t.startDistanceBetweenFingers
          , c = Math.floor(s * e)
          , l = Math.floor(h * e)
          , p = (s - c) * t.percentageOfImageAtPinchPointX
          , w = (h - l) * t.percentageOfImageAtPinchPointY
          , b = (t.newPoints[0].x + t.newPoints[1].x) / 2 - i(n).scrollLeft()
          , k = (t.newPoints[0].y + t.newPoints[1].y) / 2 - i(n).scrollTop()
          , d = b - t.centerPointStartX
          , g = k - t.centerPointStartY
          , nt = a + (p + d)
          , tt = v + (w + g)
          , it = {
            top: tt,
            left: nt,
            scaleX: e,
            scaleY: e
        };
        t.canTap = !1;
        t.newWidth = c;
        t.newHeight = l;
        t.contentLastPos = it;
        t.requestId && f(t.requestId);
        t.requestId = o(function() {
            i.fancybox.setTranslate(t.$content, t.contentLastPos)
        })
    }
    ;
    r.prototype.ontouchend = function(n) {
        var r = this
          , u = r.isSwiping
          , o = r.isPanning
          , s = r.isZooming
          , h = r.isScrolling;
        if (r.endPoints = e(n),
        r.dMs = Math.max((new Date).getTime() - r.startTime, 1),
        r.$container.removeClass("fancybox-is-grabbing"),
        i(t).off(".fb.touch"),
        t.removeEventListener("scroll", r.onscroll, !0),
        r.requestId && (f(r.requestId),
        r.requestId = null),
        r.isSwiping = !1,
        r.isPanning = !1,
        r.isZooming = !1,
        r.isScrolling = !1,
        r.instance.isDragging = !1,
        r.canTap)
            return r.onTap(n);
        r.speed = 100;
        r.velocityX = r.distanceX / r.dMs * .5;
        r.velocityY = r.distanceY / r.dMs * .5;
        o ? r.endPanning() : s ? r.endZooming() : r.endSwiping(u, h)
    }
    ;
    r.prototype.endSwiping = function(n, t) {
        var r = this
          , u = !1
          , o = r.instance.group.length
          , f = Math.abs(r.distanceX)
          , e = "x" == n && o > 1 && (r.dMs > 130 && f > 10 || f > 50);
        r.sliderLastPos = null;
        "y" == n && !t && Math.abs(r.distanceY) > 50 ? (i.fancybox.animate(r.instance.current.$slide, {
            top: r.sliderStartPos.top + r.distanceY + 150 * r.velocityY,
            opacity: 0
        }, 200),
        u = r.instance.close(!0, 250)) : e && r.distanceX > 0 ? u = r.instance.previous(300) : e && r.distanceX < 0 && (u = r.instance.next(300));
        !1 !== u || "x" != n && "y" != n || r.instance.centerSlide(200);
        r.$container.removeClass("fancybox-is-sliding")
    }
    ;
    r.prototype.endPanning = function() {
        var r, u, t, n = this;
        n.contentLastPos && (!1 === n.opts.momentum || n.dMs > 350 ? (r = n.contentLastPos.left,
        u = n.contentLastPos.top) : (r = n.contentLastPos.left + 500 * n.velocityX,
        u = n.contentLastPos.top + 500 * n.velocityY),
        t = n.limitPosition(r, u, n.contentStartPos.width, n.contentStartPos.height),
        t.width = n.contentStartPos.width,
        t.height = n.contentStartPos.height,
        i.fancybox.animate(n.$content, t, 366))
    }
    ;
    r.prototype.endZooming = function() {
        var u, f, e, o, n = this, s = n.instance.current, t = n.newWidth, r = n.newHeight;
        n.contentLastPos && (u = n.contentLastPos.left,
        f = n.contentLastPos.top,
        o = {
            top: f,
            left: u,
            width: t,
            height: r,
            scaleX: 1,
            scaleY: 1
        },
        i.fancybox.setTranslate(n.$content, o),
        t < n.canvasWidth && r < n.canvasHeight ? n.instance.scaleToFit(150) : t > s.width || r > s.height ? n.instance.scaleToActual(n.centerPointStartX, n.centerPointStartY, 150) : (e = n.limitPosition(u, f, t, r),
        i.fancybox.animate(n.$content, e, 150)))
    }
    ;
    r.prototype.onTap = function(t) {
        var f, u = this, s = i(t.target), r = u.instance, o = r.current, h = t && e(t) || u.startPoints, c = h[0] ? h[0].x - i(n).scrollLeft() - u.stagePos.left : 0, l = h[0] ? h[0].y - i(n).scrollTop() - u.stagePos.top : 0, a = function(n) {
            var f = o.opts[n];
            if (i.isFunction(f) && (f = f.apply(r, [o, t])),
            f)
                switch (f) {
                case "close":
                    r.close(u.startEvent);
                    break;
                case "toggleControls":
                    r.toggleControls();
                    break;
                case "next":
                    r.next();
                    break;
                case "nextOrClose":
                    r.group.length > 1 ? r.next() : r.close(u.startEvent);
                    break;
                case "zoom":
                    "image" == o.type && (o.isLoaded || o.$ghost) && (r.canPan() ? r.scaleToFit() : r.isScaledDown() ? r.scaleToActual(c, l) : r.group.length < 2 && r.close(u.startEvent))
                }
        };
        if ((!t.originalEvent || 2 != t.originalEvent.button) && (s.is("img") || !(c > s[0].clientWidth + s.offset().left))) {
            if (s.is(".fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-container"))
                f = "Outside";
            else if (s.is(".fancybox-slide"))
                f = "Slide";
            else {
                if (!r.current.$content || !r.current.$content.find(s).addBack().filter(s).length)
                    return;
                f = "Content"
            }
            if (u.tapped) {
                if (clearTimeout(u.tapped),
                u.tapped = null,
                Math.abs(c - u.tapX) > 50 || Math.abs(l - u.tapY) > 50)
                    return this;
                a("dblclick" + f)
            } else
                u.tapX = c,
                u.tapY = l,
                o.opts["dblclick" + f] && o.opts["dblclick" + f] !== o.opts["click" + f] ? u.tapped = setTimeout(function() {
                    u.tapped = null;
                    r.isAnimating || a("click" + f)
                }, 500) : a("click" + f);
            return this
        }
    }
    ;
    i(t).on("onActivate.fb", function(n, t) {
        t && !t.Guestures && (t.Guestures = new r(t))
    }).on("beforeClose.fb", function(n, t) {
        t && t.Guestures && t.Guestures.destroy()
    })
}(window, document, jQuery),
function(n, t) {
    "use strict";
    t.extend(!0, t.fancybox.defaults, {
        btnTpl: {
            slideShow: '<button data-fancybox-play class="fancybox-button fancybox-button--play" title="{{PLAY_START}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 5.4v13.2l11-6.6z"/><\/svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.33 5.75h2.2v12.5h-2.2V5.75zm5.15 0h2.2v12.5h-2.2V5.75z"/><\/svg><\/button>'
        },
        slideShow: {
            autoStart: !1,
            speed: 3e3,
            progress: !0
        }
    });
    var i = function(n) {
        this.instance = n;
        this.init()
    };
    t.extend(i.prototype, {
        timer: null,
        isActive: !1,
        $button: null,
        init: function() {
            var n = this
              , i = n.instance
              , r = i.group[i.currIndex].opts.slideShow;
            n.$button = i.$refs.toolbar.find("[data-fancybox-play]").on("click", function() {
                n.toggle()
            });
            i.group.length < 2 || !r ? n.$button.hide() : r.progress && (n.$progress = t('<div class="fancybox-progress"><\/div>').appendTo(i.$refs.inner))
        },
        set: function(n) {
            var r = this
              , i = r.instance
              , u = i.current;
            u && (!0 === n || u.opts.loop || i.currIndex < i.group.length - 1) ? r.isActive && "video" !== u.contentType && (r.$progress && t.fancybox.animate(r.$progress.show(), {
                scaleX: 1
            }, u.opts.slideShow.speed),
            r.timer = setTimeout(function() {
                i.current.opts.loop || i.current.index != i.group.length - 1 ? i.next() : i.jumpTo(0)
            }, u.opts.slideShow.speed)) : (r.stop(),
            i.idleSecondsCounter = 0,
            i.showControls())
        },
        clear: function() {
            var n = this;
            clearTimeout(n.timer);
            n.timer = null;
            n.$progress && n.$progress.removeAttr("style").hide()
        },
        start: function() {
            var n = this
              , t = n.instance.current;
            t && (n.$button.attr("title", (t.opts.i18n[t.opts.lang] || t.opts.i18n.en).PLAY_STOP).removeClass("fancybox-button--play").addClass("fancybox-button--pause"),
            n.isActive = !0,
            t.isComplete && n.set(!0),
            n.instance.trigger("onSlideShowChange", !0))
        },
        stop: function() {
            var n = this
              , t = n.instance.current;
            n.clear();
            n.$button.attr("title", (t.opts.i18n[t.opts.lang] || t.opts.i18n.en).PLAY_START).removeClass("fancybox-button--pause").addClass("fancybox-button--play");
            n.isActive = !1;
            n.instance.trigger("onSlideShowChange", !1);
            n.$progress && n.$progress.removeAttr("style").hide()
        },
        toggle: function() {
            var n = this;
            n.isActive ? n.stop() : n.start()
        }
    });
    t(n).on({
        "onInit.fb": function(n, t) {
            t && !t.SlideShow && (t.SlideShow = new i(t))
        },
        "beforeShow.fb": function(n, t, i, r) {
            var u = t && t.SlideShow;
            r ? u && i.opts.slideShow.autoStart && u.start() : u && u.isActive && u.clear()
        },
        "afterShow.fb": function(n, t) {
            var i = t && t.SlideShow;
            i && i.isActive && i.set()
        },
        "afterKeydown.fb": function(i, r, u, f, e) {
            var o = r && r.SlideShow;
            o && u.opts.slideShow && (80 === e || 32 === e) && !t(n.activeElement).is("button,a,input") && (f.preventDefault(),
            o.toggle())
        },
        "beforeClose.fb onDeactivate.fb": function(n, t) {
            var i = t && t.SlideShow;
            i && i.stop()
        }
    });
    t(n).on("visibilitychange", function() {
        var r = t.fancybox.getInstance()
          , i = r && r.SlideShow;
        i && i.isActive && (n.hidden ? i.clear() : i.set())
    })
}(document, jQuery),
function(n, t) {
    "use strict";
    var i = function() {
        for (var t, i, r = [["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"], ["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"], ["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"], ["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"], ["msRequestFullscreen", "msExitFullscreen", "msFullscreenElement", "msFullscreenEnabled", "MSFullscreenChange", "MSFullscreenError"]], f = {}, u = 0; u < r.length; u++)
            if (t = r[u],
            t && t[1]in n) {
                for (i = 0; i < t.length; i++)
                    f[r[0][i]] = t[i];
                return f
            }
        return !1
    }(), r;
    i && (r = {
        request: function(t) {
            t = t || n.documentElement;
            t[i.requestFullscreen](t.ALLOW_KEYBOARD_INPUT)
        },
        exit: function() {
            n[i.exitFullscreen]()
        },
        toggle: function(t) {
            t = t || n.documentElement;
            this.isFullscreen() ? this.exit() : this.request(t)
        },
        isFullscreen: function() {
            return Boolean(n[i.fullscreenElement])
        },
        enabled: function() {
            return Boolean(n[i.fullscreenEnabled])
        }
    },
    t.extend(!0, t.fancybox.defaults, {
        btnTpl: {
            fullScreen: '<button data-fancybox-fullscreen class="fancybox-button fancybox-button--fsenter" title="{{FULL_SCREEN}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/><\/svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 16h3v3h2v-5H5zm3-8H5v2h5V5H8zm6 11h2v-3h3v-2h-5zm2-11V5h-2v5h5V8z"/><\/svg><\/button>'
        },
        fullScreen: {
            autoStart: !1
        }
    }),
    t(n).on(i.fullscreenchange, function() {
        var i = r.isFullscreen()
          , n = t.fancybox.getInstance();
        n && (n.current && "image" === n.current.type && n.isAnimating && (n.isAnimating = !1,
        n.update(!0, !0, 0),
        n.isComplete || n.complete()),
        n.trigger("onFullscreenChange", i),
        n.$refs.container.toggleClass("fancybox-is-fullscreen", i),
        n.$refs.toolbar.find("[data-fancybox-fullscreen]").toggleClass("fancybox-button--fsenter", !i).toggleClass("fancybox-button--fsexit", i))
    }));
    t(n).on({
        "onInit.fb": function(n, t) {
            var u;
            if (!i)
                return void t.$refs.toolbar.find("[data-fancybox-fullscreen]").remove();
            t && t.group[t.currIndex].opts.fullScreen ? (u = t.$refs.container,
            u.on("click.fb-fullscreen", "[data-fancybox-fullscreen]", function(n) {
                n.stopPropagation();
                n.preventDefault();
                r.toggle()
            }),
            t.opts.fullScreen && !0 === t.opts.fullScreen.autoStart && r.request(),
            t.FullScreen = r) : t && t.$refs.toolbar.find("[data-fancybox-fullscreen]").hide()
        },
        "afterKeydown.fb": function(n, t, i, r, u) {
            t && t.FullScreen && 70 === u && (r.preventDefault(),
            t.FullScreen.toggle())
        },
        "beforeClose.fb": function(n, t) {
            t && t.FullScreen && t.$refs.container.hasClass("fancybox-is-fullscreen") && r.exit()
        }
    })
}(document, jQuery),
function(n, t) {
    "use strict";
    var i = "fancybox-thumbs", r;
    t.fancybox.defaults = t.extend(!0, {
        btnTpl: {
            thumbs: '<button data-fancybox-thumbs class="fancybox-button fancybox-button--thumbs" title="{{THUMBS}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.59 14.59h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76H5.65V5.65z"/><\/svg><\/button>'
        },
        thumbs: {
            autoStart: !1,
            hideOnClose: !0,
            parentEl: ".fancybox-container",
            axis: "y"
        }
    }, t.fancybox.defaults);
    r = function(n) {
        this.init(n)
    }
    ;
    t.extend(r.prototype, {
        $button: null,
        $grid: null,
        $list: null,
        isVisible: !1,
        isActive: !1,
        init: function(n) {
            var t = this, r = n.group, u = 0, i, f;
            for (t.instance = n,
            t.opts = r[n.currIndex].opts.thumbs,
            n.Thumbs = t,
            t.$button = n.$refs.toolbar.find("[data-fancybox-thumbs]"),
            i = 0,
            f = r.length; i < f && (r[i].thumb && u++,
            !(u > 1)); i++)
                ;
            u > 1 && t.opts ? (t.$button.removeAttr("style").on("click", function() {
                t.toggle()
            }),
            t.isActive = !0) : t.$button.hide()
        },
        create: function() {
            var r, n = this, u = n.instance, f = n.opts.parentEl, e = [];
            n.$grid || (n.$grid = t('<div class="' + i + " " + i + "-" + n.opts.axis + '"><\/div>').appendTo(u.$refs.container.find(f).addBack().filter(f)),
            n.$grid.on("click", "a", function() {
                u.jumpTo(t(this).attr("data-index"))
            }));
            n.$list || (n.$list = t('<div class="' + i + '__list">').appendTo(n.$grid));
            t.each(u.group, function(n, t) {
                r = t.thumb;
                r || "image" !== t.type || (r = t.src);
                e.push('<a href="javascript:;" tabindex="0" data-index="' + n + '"' + (r && r.length ? ' style="background-image:url(' + r + ')"' : 'class="fancybox-thumbs-missing"') + "><\/a>")
            });
            n.$list[0].innerHTML = e.join("");
            "x" === n.opts.axis && n.$list.width(parseInt(n.$grid.css("padding-right"), 10) + u.group.length * n.$list.children().eq(0).outerWidth(!0))
        },
        focus: function(n) {
            var u, t, i = this, r = i.$list, f = i.$grid;
            i.instance.current && (u = r.children().removeClass("fancybox-thumbs-active").filter('[data-index="' + i.instance.current.index + '"]').addClass("fancybox-thumbs-active"),
            t = u.position(),
            "y" === i.opts.axis && (t.top < 0 || t.top > r.height() - u.outerHeight()) ? r.stop().animate({
                scrollTop: r.scrollTop() + t.top
            }, n) : "x" === i.opts.axis && (t.left < f.scrollLeft() || t.left > f.scrollLeft() + (f.width() - u.outerWidth())) && r.parent().stop().animate({
                scrollLeft: t.left
            }, n))
        },
        update: function() {
            var n = this;
            n.instance.$refs.container.toggleClass("fancybox-show-thumbs", this.isVisible);
            n.isVisible ? (n.$grid || n.create(),
            n.instance.trigger("onThumbsShow"),
            n.focus(0)) : n.$grid && n.instance.trigger("onThumbsHide");
            n.instance.update()
        },
        hide: function() {
            this.isVisible = !1;
            this.update()
        },
        show: function() {
            this.isVisible = !0;
            this.update()
        },
        toggle: function() {
            this.isVisible = !this.isVisible;
            this.update()
        }
    });
    t(n).on({
        "onInit.fb": function(n, t) {
            var i;
            t && !t.Thumbs && (i = new r(t),
            i.isActive && !0 === i.opts.autoStart && i.show())
        },
        "beforeShow.fb": function(n, t, i, r) {
            var u = t && t.Thumbs;
            u && u.isVisible && u.focus(r ? 0 : 250)
        },
        "afterKeydown.fb": function(n, t, i, r, u) {
            var f = t && t.Thumbs;
            f && f.isActive && 71 === u && (r.preventDefault(),
            f.toggle())
        },
        "beforeClose.fb": function(n, t) {
            var i = t && t.Thumbs;
            i && i.isVisible && !1 !== i.opts.hideOnClose && i.$grid.hide()
        }
    })
}(document, jQuery),
function(n, t) {
    "use strict";
    function i(n) {
        var t = {
            "&": "&amp;",
            "<": "&lt;",
            ">": "&gt;",
            '"': "&quot;",
            "'": "&#39;",
            "/": "&#x2F;",
            "`": "&#x60;",
            "=": "&#x3D;"
        };
        return String(n).replace(/[&<>"'`=\/]/g, function(n) {
            return t[n]
        })
    }
    t.extend(!0, t.fancybox.defaults, {
        btnTpl: {
            share: '<button data-fancybox-share class="fancybox-button fancybox-button--share" title="{{SHARE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M2.55 19c1.4-8.4 9.1-9.8 11.9-9.8V5l7 7-7 6.3v-3.5c-2.8 0-10.5 2.1-11.9 4.2z"/><\/svg><\/button>'
        },
        share: {
            url: function(n, t) {
                return !n.currentHash && "inline" !== t.type && "html" !== t.type && (t.origSrc || t.src) || window.location
            },
            tpl: '<div class="fancybox-share"><h1>{{SHARE}}<\/h1><p><a class="fancybox-share__button fancybox-share__button--fb" href="https://www.facebook.com/sharer/sharer.php?u={{url}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m287 456v-299c0-21 6-35 35-35h38v-63c-7-1-29-3-55-3-54 0-91 33-91 94v306m143-254h-205v72h196" /><\/svg><span>Facebook<\/span><\/a><a class="fancybox-share__button fancybox-share__button--tw" href="https://twitter.com/intent/tweet?url={{url}}&text={{descr}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m456 133c-14 7-31 11-47 13 17-10 30-27 37-46-15 10-34 16-52 20-61-62-157-7-141 75-68-3-129-35-169-85-22 37-11 86 26 109-13 0-26-4-37-9 0 39 28 72 65 80-12 3-25 4-37 2 10 33 41 57 77 57-42 30-77 38-122 34 170 111 378-32 359-208 16-11 30-25 41-42z" /><\/svg><span>Twitter<\/span><\/a><a class="fancybox-share__button fancybox-share__button--pt" href="https://www.pinterest.com/pin/create/button/?url={{url}}&description={{descr}}&media={{media}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m265 56c-109 0-164 78-164 144 0 39 15 74 47 87 5 2 10 0 12-5l4-19c2-6 1-8-3-13-9-11-15-25-15-45 0-58 43-110 113-110 62 0 96 38 96 88 0 67-30 122-73 122-24 0-42-19-36-44 6-29 20-60 20-81 0-19-10-35-31-35-25 0-44 26-44 60 0 21 7 36 7 36l-30 125c-8 37-1 83 0 87 0 3 4 4 5 2 2-3 32-39 42-75l16-64c8 16 31 29 56 29 74 0 124-67 124-157 0-69-58-132-146-132z" fill="#fff"/><\/svg><span>Pinterest<\/span><\/a><\/p><p><input class="fancybox-share__input" type="text" value="{{url_raw}}" onclick="select()" /><\/p><\/div>'
        }
    });
    t(n).on("click", "[data-fancybox-share]", function() {
        var u, f, r = t.fancybox.getInstance(), n = r.current || null;
        n && ("function" === t.type(n.opts.share.url) && (u = n.opts.share.url.apply(n, [r, n])),
        f = n.opts.share.tpl.replace(/\{\{media\}\}/g, "image" === n.type ? encodeURIComponent(n.src) : "").replace(/\{\{url\}\}/g, encodeURIComponent(u)).replace(/\{\{url_raw\}\}/g, i(u)).replace(/\{\{descr\}\}/g, r.$caption ? encodeURIComponent(r.$caption.text()) : ""),
        t.fancybox.open({
            src: r.translate(r, f),
            type: "html",
            opts: {
                touch: !1,
                animationEffect: !1,
                afterLoad: function(n, t) {
                    r.$refs.container.one("beforeClose.fb", function() {
                        n.close(null, 0)
                    });
                    t.$content.find(".fancybox-share__button").click(function() {
                        return window.open(this.href, "Share", "width=550, height=450"),
                        !1
                    })
                },
                mobile: {
                    autoFocus: !1
                }
            }
        }))
    })
}(document, jQuery),
function(n, t, i) {
    "use strict";
    function r() {
        var i = n.location.hash.substr(1)
          , t = i.split("-")
          , r = t.length > 1 && /^\+?\d+$/.test(t[t.length - 1]) ? parseInt(t.pop(-1), 10) || 1 : 1
          , u = t.join("-");
        return {
            hash: i,
            index: r < 1 ? 1 : r,
            gallery: u
        }
    }
    function u(n) {
        "" !== n.gallery && i("[data-fancybox='" + i.escapeSelector(n.gallery) + "']").eq(n.index - 1).focus().trigger("click.fb-start")
    }
    function f(n) {
        var t, i;
        return !!n && (t = n.current ? n.current.opts : n.opts,
        "" !== (i = t.hash || (t.$orig ? t.$orig.data("fancybox") || t.$orig.data("fancybox-trigger") : "")) && i)
    }
    i.escapeSelector || (i.escapeSelector = function(n) {
        return (n + "").replace(/([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g, function(n, t) {
            return t ? "\0" === n ? "�" : n.slice(0, -1) + "\\" + n.charCodeAt(n.length - 1).toString(16) + " " : "\\" + n
        })
    }
    );
    i(function() {
        !1 !== i.fancybox.defaults.hash && (i(t).on({
            "onInit.fb": function(n, t) {
                var i, u;
                !1 !== t.group[t.currIndex].opts.hash && (i = r(),
                (u = f(t)) && i.gallery && u == i.gallery && (t.currIndex = i.index - 1))
            },
            "beforeShow.fb": function(i, r, u, e) {
                var o;
                u && !1 !== u.opts.hash && (o = f(r)) && (r.currentHash = o + (r.group.length > 1 ? "-" + (u.index + 1) : ""),
                n.location.hash !== "#" + r.currentHash && (e && !r.origHash && (r.origHash = n.location.hash),
                r.hashTimer && clearTimeout(r.hashTimer),
                r.hashTimer = setTimeout(function() {
                    "replaceState"in n.history ? (n.history[e ? "pushState" : "replaceState"]({}, t.title, n.location.pathname + n.location.search + "#" + r.currentHash),
                    e && (r.hasCreatedHistory = !0)) : n.location.hash = r.currentHash;
                    r.hashTimer = null
                }, 300)))
            },
            "beforeClose.fb": function(i, r, u) {
                u && !1 !== u.opts.hash && (clearTimeout(r.hashTimer),
                r.currentHash && r.hasCreatedHistory ? n.history.back() : r.currentHash && ("replaceState"in n.history ? n.history.replaceState({}, t.title, n.location.pathname + n.location.search + (r.origHash || "")) : n.location.hash = r.origHash),
                r.currentHash = null)
            }
        }),
        i(n).on("hashchange.fb", function() {
            var n = r()
              , t = null;
            i.each(i(".fancybox-container").get().reverse(), function(n, r) {
                var u = i(r).data("FancyBox");
                if (u && u.currentHash)
                    return t = u,
                    !1
            });
            t ? t.currentHash === n.gallery + "-" + n.index || 1 === n.index && t.currentHash == n.gallery || (t.currentHash = null,
            t.close()) : "" !== n.gallery && u(n)
        }),
        setTimeout(function() {
            i.fancybox.getInstance() || u(r())
        }, 50))
    })
}(window, document, jQuery),
function(n, t) {
    "use strict";
    var i = (new Date).getTime();
    t(n).on({
        "onInit.fb": function(n, t) {
            t.$refs.stage.on("mousewheel DOMMouseScroll wheel MozMousePixelScroll", function(n) {
                var r = t.current
                  , u = (new Date).getTime();
                t.group.length < 2 || !1 === r.opts.wheel || "auto" === r.opts.wheel && "image" !== r.type || (n.preventDefault(),
                n.stopPropagation(),
                r.$slide.hasClass("fancybox-animated") || (n = n.originalEvent || n,
                u - i < 250 || (i = u,
                t[(-n.deltaY || -n.deltaX || n.wheelDelta || -n.detail) < 0 ? "next" : "previous"]())))
            })
        }
    })
}(document, jQuery),
function() {
    var n = jQuery.noConflict(!0);
    "undefined" == typeof BPR && (BPR = {
        host: "https://newproductreviews.sapoapps.vn/",
        trackingInit: !1,
        store: Bizweb.store,
        extraAjaxParams: {
            store: Bizweb.store
        },
        starColor: "inherit",
        lang: "vi",
        bodyMax: 1e3,
        config: {},
        badgeEls: [],
        reviewEl: null,
        moduleEl: null,
        product: null,
        language: {},
        cookie_expire: 24,
        cookies: {},
        filter: {
            score: 0,
            isimage: 0
        },
        raty: function(n) {
            "use strict";
            var t = {
                init: function(i) {
                    return this.each(function() {
                        this.self = n(this);
                        t.destroy.call(this.self);
                        this.opt = n.extend(!0, {}, n.fn.raty.defaults, i);
                        t._adjustCallback.call(this);
                        t._adjustNumber.call(this);
                        t._adjustHints.call(this);
                        this.opt.score = t._adjustedScore.call(this, this.opt.score);
                        this.opt.starType !== "img" && t._adjustStarType.call(this);
                        t._adjustPath.call(this);
                        t._createStars.call(this);
                        this.opt.cancel && t._createCancel.call(this);
                        this.opt.precision && t._adjustPrecision.call(this);
                        t._createScore.call(this);
                        t._apply.call(this, this.opt.score);
                        t._setTitle.call(this, this.opt.score);
                        t._target.call(this, this.opt.score);
                        this.opt.readOnly ? t._lock.call(this) : (this.style.cursor = "pointer",
                        t._binds.call(this))
                    })
                },
                _adjustCallback: function() {
                    for (var t = ["number", "readOnly", "score", "scoreName", "target", "path"], n = 0; n < t.length; n++)
                        typeof this.opt[t[n]] == "function" && (this.opt[t[n]] = this.opt[t[n]].call(this))
                },
                _adjustedScore: function(n) {
                    return n ? t._between(n, 0, this.opt.number) : n
                },
                _adjustHints: function() {
                    var f, t, n, i, u, r;
                    if (this.opt.hints || (this.opt.hints = []),
                    this.opt.halfShow || this.opt.half)
                        for (f = this.opt.precision ? 10 : 2,
                        t = 0; t < this.opt.number; t++)
                            for (n = this.opt.hints[t],
                            Object.prototype.toString.call(n) !== "[object Array]" && (n = [n]),
                            this.opt.hints[t] = [],
                            i = 0; i < f; i++)
                                u = n[i],
                                r = n[n.length - 1],
                                r === undefined && (r = null),
                                this.opt.hints[t][i] = u === undefined ? r : u
                },
                _adjustNumber: function() {
                    this.opt.number = t._between(this.opt.number, 1, this.opt.numberMax)
                },
                _adjustPath: function() {
                    this.opt.path = this.opt.path || "";
                    this.opt.path && this.opt.path.charAt(this.opt.path.length - 1) !== "/" && (this.opt.path += "/")
                },
                _adjustPrecision: function() {
                    this.opt.half = !0
                },
                _adjustStarType: function() {
                    var t = ["cancelOff", "cancelOn", "starHalf", "starOff", "starOn"], n;
                    for (this.opt.path = "",
                    n = 0; n < t.length; n++)
                        this.opt[t[n]] = this.opt[t[n]].replace(".", "-")
                },
                _apply: function(n) {
                    t._fill.call(this, n);
                    n && (n > 0 && this.score.val(n),
                    t._roundStars.call(this, n))
                },
                _between: function(n, t, i) {
                    return Math.min(Math.max(parseFloat(n), t), i)
                },
                _binds: function() {
                    this.cancel && (t._bindOverCancel.call(this),
                    t._bindClickCancel.call(this),
                    t._bindOutCancel.call(this));
                    t._bindOver.call(this);
                    t._bindClick.call(this);
                    t._bindOut.call(this)
                },
                _bindClick: function() {
                    var i = this;
                    i.stars.on("click.raty", function(r) {
                        var f = !0
                          , u = i.opt.half || i.opt.precision ? i.self.data("score") : this.alt || n(this).data("alt");
                        i.opt.click && (f = i.opt.click.call(i, +u, r));
                        (f || f === undefined) && (i.opt.half && !i.opt.precision && (u = t._roundHalfScore.call(i, u)),
                        t._apply.call(i, u))
                    })
                },
                _bindClickCancel: function() {
                    var n = this;
                    n.cancel.on("click.raty", function(t) {
                        n.score.removeAttr("value");
                        n.opt.click && n.opt.click.call(n, null, t)
                    })
                },
                _bindOut: function() {
                    var n = this;
                    n.self.on("mouseleave.raty", function(i) {
                        var r = +n.score.val() || undefined;
                        t._apply.call(n, r);
                        t._target.call(n, r, i);
                        t._resetTitle.call(n);
                        n.opt.mouseout && n.opt.mouseout.call(n, r, i)
                    })
                },
                _bindOutCancel: function() {
                    var n = this;
                    n.cancel.on("mouseleave.raty", function(i) {
                        var r = n.opt.cancelOff, u;
                        n.opt.starType !== "img" && (r = n.opt.cancelClass + " " + r);
                        t._setIcon.call(n, this, r);
                        n.opt.mouseout && (u = +n.score.val() || undefined,
                        n.opt.mouseout.call(n, u, i))
                    })
                },
                _bindOver: function() {
                    var n = this
                      , i = n.opt.half ? "mousemove.raty" : "mouseover.raty";
                    n.stars.on(i, function(i) {
                        var r = t._getScoreByPosition.call(n, i, this);
                        t._fill.call(n, r);
                        n.opt.half && (t._roundStars.call(n, r, i),
                        t._setTitle.call(n, r, i),
                        n.self.data("score", r));
                        t._target.call(n, r, i);
                        n.opt.mouseover && n.opt.mouseover.call(n, r, i)
                    })
                },
                _bindOverCancel: function() {
                    var n = this;
                    n.cancel.on("mouseover.raty", function(i) {
                        var u = n.opt.path + n.opt.starOff
                          , r = n.opt.cancelOn;
                        n.opt.starType === "img" ? n.stars.attr("src", u) : (r = n.opt.cancelClass + " " + r,
                        n.stars.attr("class", u));
                        t._setIcon.call(n, this, r);
                        t._target.call(n, null, i);
                        n.opt.mouseover && n.opt.mouseover.call(n, null)
                    })
                },
                _buildScoreField: function() {
                    return n("<input />", {
                        name: this.opt.scoreName,
                        type: "hidden"
                    }).appendTo(this)
                },
                _createCancel: function() {
                    var i = this.opt.path + this.opt.cancelOff
                      , t = n("<" + this.opt.starType + " />", {
                        title: this.opt.cancelHint,
                        "class": this.opt.cancelClass
                    });
                    this.opt.starType === "img" ? t.attr({
                        src: i,
                        alt: "x"
                    }) : t.attr("data-alt", "x").addClass(i);
                    this.opt.cancelPlace === "left" ? this.self.prepend("&#160;").prepend(t) : this.self.append("&#160;").append(t);
                    this.cancel = t
                },
                _createScore: function() {
                    var i = n(this.opt.targetScore);
                    this.score = i.length ? i : t._buildScoreField.call(this)
                },
                _createStars: function() {
                    for (var u, r, i = 1; i <= this.opt.number; i++)
                        u = t._nameForIndex.call(this, i),
                        r = {
                            alt: i,
                            src: this.opt.path + this.opt[u]
                        },
                        this.opt.starType !== "img" && (r = {
                            "data-alt": i,
                            "class": r.src
                        }),
                        r.title = t._getHint.call(this, i),
                        n("<" + this.opt.starType + " />", r).appendTo(this),
                        this.opt.space && this.self.append(i < this.opt.number ? "&#160;" : "");
                    this.stars = this.self.children(this.opt.starType)
                },
                _error: function(t) {
                    n(this).text(t);
                    n.error(t)
                },
                _fill: function(n) {
                    for (var r, e, o, u, f = 0, i = 1; i <= this.stars.length; i++)
                        e = this.stars[i - 1],
                        o = t._turnOn.call(this, i, n),
                        this.opt.iconRange && this.opt.iconRange.length > f ? (u = this.opt.iconRange[f],
                        r = t._getRangeIcon.call(this, u, o),
                        i <= u.range && t._setIcon.call(this, e, r),
                        i === u.range && f++) : (r = this.opt[o ? "starOn" : "starOff"],
                        t._setIcon.call(this, e, r))
                },
                _getFirstDecimal: function(n) {
                    var t = n.toString().split(".")[1]
                      , i = 0;
                    return t && (i = parseInt(t.charAt(0), 10),
                    t.slice(1, 5) === "9999" && i++),
                    i
                },
                _getRangeIcon: function(n, t) {
                    return t ? n.on || this.opt.starOn : n.off || this.opt.starOff
                },
                _getScoreByPosition: function(i, r) {
                    var u = parseInt(r.alt || r.getAttribute("data-alt"), 10), f, e;
                    return this.opt.half && (f = t._getWidth.call(this),
                    e = parseFloat((i.pageX - n(r).offset().left) / f),
                    u = u - 1 + e),
                    u
                },
                _getHint: function(n, i) {
                    if (n !== 0 && !n)
                        return this.opt.noRatedMsg;
                    var r = t._getFirstDecimal.call(this, n)
                      , o = Math.ceil(n)
                      , f = this.opt.hints[(o || 1) - 1]
                      , u = f
                      , e = !i || this.move;
                    return this.opt.precision ? (e && (r = r === 0 ? 9 : r - 1),
                    u = f[r]) : (this.opt.halfShow || this.opt.half) && (r = e && r === 0 ? 1 : r > 5 ? 1 : 0,
                    u = f[r]),
                    u === "" ? "" : u || n
                },
                _getWidth: function() {
                    var n = this.stars[0].width || parseFloat(this.stars.eq(0).css("font-size"));
                    return n || t._error.call(this, "Could not get the icon width!"),
                    n
                },
                _lock: function() {
                    var n = t._getHint.call(this, this.score.val());
                    this.style.cursor = "";
                    this.title = n;
                    this.score.prop("readonly", !0);
                    this.stars.prop("title", n);
                    this.cancel && this.cancel.hide();
                    this.self.data("readonly", !0)
                },
                _nameForIndex: function(n) {
                    return this.opt.score && this.opt.score >= n ? "starOn" : "starOff"
                },
                _resetTitle: function() {
                    for (var n = 0; n < this.opt.number; n++)
                        this.stars[n].title = t._getHint.call(this, n + 1)
                },
                _roundHalfScore: function(n) {
                    var r = parseInt(n, 10)
                      , i = t._getFirstDecimal.call(this, n);
                    return i !== 0 && (i = i > 5 ? 1 : .5),
                    r + i
                },
                _roundStars: function(n, i) {
                    var u = (n % 1).toFixed(2), r, f, e;
                    i || this.move ? r = u > .5 ? "starOn" : "starHalf" : u > this.opt.round.down && (r = "starOn",
                    this.opt.halfShow && u < this.opt.round.up ? r = "starHalf" : u < this.opt.round.full && (r = "starOff"));
                    r && (f = this.opt[r],
                    e = this.stars[Math.ceil(n) - 1],
                    t._setIcon.call(this, e, f))
                },
                _setIcon: function(n, t) {
                    n[this.opt.starType === "img" ? "src" : "className"] = this.opt.path + t
                },
                _setTarget: function(n, t) {
                    t && (t = this.opt.targetFormat.toString().replace("{score}", t));
                    n.is(":input") ? n.val(t) : n.html(t)
                },
                _setTitle: function(n, i) {
                    if (n) {
                        var r = parseInt(Math.ceil(n), 10)
                          , u = this.stars[r - 1];
                        u.title = t._getHint.call(this, n, i)
                    }
                },
                _target: function(i, r) {
                    var u, f, e;
                    this.opt.target && (u = n(this.opt.target),
                    u.length || t._error.call(this, "Target selector invalid or missing!"),
                    f = r && r.type === "mouseover",
                    i === undefined ? i = this.opt.targetText : i === null ? i = f ? this.opt.cancelHint : this.opt.targetText : (this.opt.targetType === "hint" ? i = t._getHint.call(this, i, r) : this.opt.precision && (i = parseFloat(i).toFixed(1)),
                    e = r && r.type === "mousemove",
                    f || e || this.opt.targetKeep || (i = this.opt.targetText)),
                    t._setTarget.call(this, u, i))
                },
                _turnOn: function(n, t) {
                    return this.opt.single ? n === t : n <= t
                },
                _unlock: function() {
                    this.style.cursor = "pointer";
                    this.removeAttribute("title");
                    this.score.removeAttr("readonly");
                    this.self.data("readonly", !1);
                    for (var n = 0; n < this.opt.number; n++)
                        this.stars[n].title = t._getHint.call(this, n + 1);
                    this.cancel && this.cancel.css("display", "")
                },
                cancel: function(i) {
                    return this.each(function() {
                        var r = n(this);
                        r.data("readonly") !== !0 && (t[i ? "click" : "score"].call(r, null),
                        this.score.removeAttr("value"))
                    })
                },
                click: function(i) {
                    return this.each(function() {
                        n(this).data("readonly") !== !0 && (i = t._adjustedScore.call(this, i),
                        t._apply.call(this, i),
                        this.opt.click && this.opt.click.call(this, i, n.Event("click")),
                        t._target.call(this, i))
                    })
                },
                destroy: function() {
                    return this.each(function() {
                        var t = n(this)
                          , i = t.data("raw");
                        i ? t.off(".raty").empty().css({
                            cursor: i.style.cursor
                        }).removeData("readonly") : t.data("raw", t.clone()[0])
                    })
                },
                getScore: function() {
                    var n = [], t;
                    return this.each(function() {
                        t = this.score.val();
                        n.push(t ? +t : undefined)
                    }),
                    n.length > 1 ? n : n[0]
                },
                move: function(i) {
                    return this.each(function() {
                        var r = parseInt(i, 10)
                          , u = t._getFirstDecimal.call(this, i);
                        r >= this.opt.number && (r = this.opt.number - 1,
                        u = 10);
                        var e = t._getWidth.call(this)
                          , o = e / 10
                          , f = n(this.stars[r])
                          , s = f.offset().left + o * u
                          , h = n.Event("mousemove", {
                            pageX: s
                        });
                        this.move = !0;
                        f.trigger(h);
                        this.move = !1
                    })
                },
                readOnly: function(i) {
                    return this.each(function() {
                        var r = n(this);
                        r.data("readonly") !== i && (i ? (r.off(".raty").children("img").off(".raty"),
                        t._lock.call(this)) : (t._binds.call(this),
                        t._unlock.call(this)),
                        r.data("readonly", i))
                    })
                },
                reload: function() {
                    return t.set.call(this, {})
                },
                score: function() {
                    var i = n(this);
                    return arguments.length ? t.setScore.apply(i, arguments) : t.getScore.call(i)
                },
                set: function(t) {
                    return this.each(function() {
                        n(this).raty(n.extend({}, this.opt, t))
                    })
                },
                setScore: function(i) {
                    return this.each(function() {
                        n(this).data("readonly") !== !0 && (i = t._adjustedScore.call(this, i),
                        t._apply.call(this, i),
                        t._target.call(this, i))
                    })
                }
            };
            n.fn.raty = function(i) {
                if (t[i])
                    return t[i].apply(this, Array.prototype.slice.call(arguments, 1));
                if (typeof i != "object" && i)
                    n.error("Method " + i + " does not exist!");
                else
                    return t.init.apply(this, arguments)
            }
            ;
            n.fn.raty.defaults = {
                cancel: !1,
                cancelClass: "raty-cancel",
                cancelHint: "Cancel this rating!",
                cancelOff: "cancel-off.png",
                cancelOn: "cancel-on.png",
                cancelPlace: "left",
                click: undefined,
                half: !1,
                halfShow: !0,
                hints: ["bad", "poor", "regular", "good", "gorgeous"],
                iconRange: undefined,
                mouseout: undefined,
                mouseover: undefined,
                noRatedMsg: "Not rated yet!",
                number: 5,
                numberMax: 20,
                path: undefined,
                precision: !1,
                readOnly: !1,
                round: {
                    down: .25,
                    full: .6,
                    up: .76
                },
                score: undefined,
                scoreName: "score",
                single: !1,
                space: !0,
                starHalf: "star-half.png",
                starOff: "star-off.png",
                starOn: "star-on.png",
                starType: "img",
                target: undefined,
                targetFormat: "{score}",
                targetKeep: !1,
                targetScore: undefined,
                targetText: "",
                targetType: "hint"
            }
        },
        serializeObject: function(n) {
            n.fn.serializeObject = function() {
                var t = {}
                  , i = this.serializeArray();
                return n.each(i, function() {
                    t[this.name] !== undefined ? (t[this.name].push || (t[this.name] = [t[this.name]]),
                    t[this.name].push(this.value || "")) : t[this.name] = this.value || ""
                }),
                t
            }
        },
        loadTemplate: function(n) {
            "use strict";
            function c(t, i, r) {
                var e = this, o, s, u;
                return (i = i || {},
                u = n.extend(!0, {
                    "async": !0,
                    overwriteCache: !1,
                    complete: null,
                    success: null,
                    error: function() {
                        n(this).each(function() {
                            n(this).html(u.errorMessage)
                        })
                    },
                    errorMessage: "There was an error loading the template.",
                    paged: !1,
                    pageNo: 1,
                    elemPerPage: 10,
                    append: !1,
                    prepend: !1,
                    beforeInsert: null,
                    afterInsert: null,
                    bindingOptions: {
                        ignoreUndefined: !1,
                        ignoreNull: !1,
                        ignoreEmptyString: !1
                    }
                }, r),
                n.type(i) === "array") ? (h = !0,
                p.call(this, t, i, u)) : (y(t) || (o = n(t),
                typeof t == "string" && t.indexOf("#") === 0 && (u.isFile = !1)),
                s = u.isFile || typeof u.isFile == "undefined" && (typeof o == "undefined" || o.length === 0),
                s && !u.overwriteCache && f[t] ? b(t, e, i, u) : s && !u.overwriteCache && f.hasOwnProperty(t) ? w(t, e, i, u) : s ? d(t, e, i, u) : g(o, e, i, u),
                this)
            }
            function l(t, i) {
                i ? u[t] = i : u = n.extend(u, t)
            }
            function y(n) {
                return typeof n == "string" && n.indexOf("/") > -1
            }
            function p(t, i, r) {
                var o;
                r = r || {};
                var u = this, e = i.length, s = r.prepend && !r.append, h = 0, l = 0, f = !1, a = [], v;
                return r.paged && (o = (r.pageNo - 1) * r.elemPerPage,
                i = i.slice(o, o + r.elemPerPage),
                e = i.length),
                v = n.extend({}, r, {
                    "async": !1,
                    complete: function(t) {
                        if (this.html) {
                            var i;
                            i = s ? n(this).prependTo(u) : n(this).appendTo(u);
                            r.afterInsert && t && r.afterInsert(i, t)
                        }
                        h++;
                        (h === e || f) && (f && r && typeof r.error == "function" && r.error.call(u, a),
                        r && typeof r.complete == "function" && r.complete())
                    },
                    success: function() {
                        l++;
                        l === e && r && typeof r.success == "function" && r.success()
                    },
                    error: function(n) {
                        f = !0;
                        a.push(n)
                    }
                }),
                r.append || r.prepend || u.html(""),
                s && i.reverse(),
                n(i).each(function() {
                    var i = n("<div/>");
                    return c.call(i, t, this, v),
                    f ? !1 : void 0
                }),
                this
            }
            function w(n, t, i, u) {
                r[n] ? r[n].push({
                    data: i,
                    selection: t,
                    settings: u
                }) : r[n] = [{
                    data: i,
                    selection: t,
                    settings: u
                }]
            }
            function b(n, t, i, r) {
                var u = f[n].clone();
                o.call(t, u, i, r);
                typeof r.success == "function" && r.success()
            }
            function a() {
                return (new Date).getTime()
            }
            function k(n) {
                return n.indexOf("?") !== -1 ? n + "&_=" + a() : n + "?_=" + a()
            }
            function d(t, i, r, u) {
                var o = n("<div/>"), e;
                f[t] = null;
                e = t;
                u.overwriteCache && (e = k(e));
                n.ajax({
                    url: e,
                    "async": u.async,
                    success: function(n) {
                        o.html(n);
                        tt(o, t, i, r, u)
                    },
                    error: function(n) {
                        nt(t, i, r, u, n)
                    }
                })
            }
            function g(t, i, r, u) {
                var f = n("<div/>");
                (t.is("script") || t.is("template")) && (t = n.parseHTML(n.trim(t.html())));
                f.html(t);
                o.call(i, f, r, u);
                typeof u.success == "function" && u.success()
            }
            function o(t, i, r) {
                it(t, i, r);
                n(this).each(function() {
                    var u = t.clone(!0);
                    n("select", u).each(function(i) {
                        n(this).val(n("select", t).eq(i).val())
                    });
                    r.beforeInsert && r.beforeInsert(u, i);
                    r.append ? n(this).append(u) : r.prepend ? n(this).prepend(u) : n(this).html("").append(u);
                    r.afterInsert && !h && r.afterInsert(u, i)
                });
                typeof r.complete == "function" && r.complete.call(n(this), i)
            }
            function nt(t, i, u, f, e) {
                var o;
                for (typeof f.error == "function" && f.error.call(i, e),
                n(r[t]).each(function(n, t) {
                    typeof t.settings.error == "function" && t.settings.error.call(t.selection, e)
                }),
                typeof f.complete == "function" && f.complete.call(i); r[t] && (o = r[t].shift()); )
                    typeof o.settings.complete == "function" && o.settings.complete.call(o.selection);
                typeof r[t] != "undefined" && r[t].length > 0 && (r[t] = [])
            }
            function tt(n, t, i, u, e) {
                var s;
                for (f[t] = n.clone(),
                o.call(i, n, u, e),
                typeof e.success == "function" && e.success.call(i); r[t] && (s = r[t].shift()); )
                    o.call(s.selection, f[t].clone(), s.data, s.settings),
                    typeof s.settings.success == "function" && s.settings.success.call(s.selection)
            }
            function it(r, u, f) {
                u = u || {};
                t("data-content", r, u, f, function(n, t) {
                    n.html(i(n, t, "content", f))
                });
                t("data-content-str", r, u, f, function(n, t) {
                    n.html(i(n, t, "content", f))
                });
                t("data-content-append", r, u, f, function(n, t) {
                    n.append(i(n, t, "content", f))
                });
                t("data-content-prepend", r, u, f, function(n, t) {
                    n.prepend(i(n, t, "content", f))
                });
                t("data-content-text", r, u, f, function(n, t) {
                    n.text(i(n, t, "content", f))
                });
                t("data-innerHTML", r, u, f, function(n, t) {
                    n.html(i(n, t, "content", f))
                });
                t("data-src", r, u, f, function(n, t) {
                    n.attr("src", i(n, t, "src", f))
                }, function(n) {
                    n.remove()
                });
                t("data-src-voters", r, u, f, function(n, t) {
                    n.attr("src", i(n, t, "src", f))
                }, function(n) {
                    n.remove()
                });
                t("data-href", r, u, f, function(n, t) {
                    n.attr("href", i(n, t, "href", f))
                }, function(n) {
                    n.remove()
                });
                t("data-alt", r, u, f, function(n, t) {
                    n.attr("alt", i(n, t, "alt", f))
                });
                t("data-id", r, u, f, function(n, t) {
                    n.attr("id", i(n, t, "id", f))
                });
                t("data-class", r, u, f, function(n, t) {
                    n.addClass(i(n, t, "class", f))
                });
                t("data-link", r, u, f, function(t, r) {
                    var u = n("<a/>");
                    u.attr("href", i(t, r, "link", f));
                    u.html(t.html());
                    t.html(u)
                });
                t("data-link-wrap", r, u, f, function(t, r) {
                    var u = n("<a/>");
                    u.attr("href", i(t, r, "link-wrap", f));
                    t.wrap(u)
                });
                t("data-options", r, u, f, function(t, i) {
                    n(i).each(function() {
                        var i = n("<option/>");
                        i.attr("value", this).text(this).appendTo(t)
                    })
                });
                ut(r, u, f);
                t("data-value", r, u, f, function(n, t) {
                    n.val(i(n, t, "value", f))
                })
            }
            function t(t, i, r, u, f, e) {
                n("[" + t + "]", i).each(function() {
                    var i = n(this)
                      , h = i.attr(t)
                      , o = s(r, h);
                    if (t == "data-src-voters" && r.rating == 0)
                        n("#bpr-summary-caption img").attr("style", "display: none !important");
                    else if (t != "data-content" || t == "data-content" && o > 0 || t == "data-content-str") {
                        if (!v(i, o, u)) {
                            i.remove();
                            return
                        }
                        i.removeAttr(t);
                        typeof o != "undefined" && f ? f(i, o) : e && e(i)
                    }
                });
                return
            }
            function v(n, t, i) {
                var r = rt(n, i);
                return r.ignoreUndefined && typeof t == "undefined" ? !1 : r.ignoreNull && t === null ? !1 : r.ignoreEmptyString && t === "" ? !1 : !0
            }
            function rt(t, i) {
                var r = {};
                return t instanceof jQuery && t.attr("data-binding-options") ? (r = n.parseJSON(t.attr("data-binding-options")),
                t.removeAttr("data-binding-options")) : typeof t == "object" && t.hasOwnProperty("bindingOptions") && (r = t.bindingOptions),
                n.extend({}, i.bindingOptions, r)
            }
            function ut(t, i, r) {
                n("[data-template-bind]", t).each(function() {
                    var t = n(this)
                      , u = n.parseJSON(t.attr("data-template-bind"));
                    t.removeAttr("data-template-bind");
                    n(u).each(function() {
                        var u, f;
                        if (u = typeof this.value == "object" ? s(i, this.value.data) : s(i, this.value),
                        this.attribute) {
                            if (!v(this, u, r)) {
                                t.remove();
                                return
                            }
                            switch (this.attribute) {
                            case "innerHTML":
                                t.html(e(t, u, this));
                                break;
                            case "contentAppend":
                                t.append(e(t, u, this));
                                break;
                            case "contentPrepend":
                                t.prepend(e(t, u, this));
                                break;
                            case "contentText":
                                t.text(e(t, u, this));
                                break;
                            case "options":
                                f = this;
                                n(u).each(function() {
                                    var i = n("<option/>");
                                    i.attr("value", this[f.value.value]).text(e(t, this[f.value.content], f)).attr("selected", typeof this[f.value.selected] == undefined ? !1 : this[f.value.selected]).appendTo(t)
                                });
                                break;
                            default:
                                t.attr(this.attribute, e(t, u, this))
                            }
                        }
                    })
                })
            }
            function e(n, t, i, r) {
                return i.formatter && u[i.formatter] ? function(r) {
                    return u[i.formatter].call(n, t, i.formatOptions, r)
                }(r) : t
            }
            function s(n, t) {
                if (t === "this")
                    return n;
                for (var u = t.split("."), r, i = n; (r = u.shift()) && typeof i != "undefined" && i != null; )
                    i = i[r];
                return i
            }
            function i(t, i, r, f) {
                var o = t.attr("data-format-target"), e, s;
                return (o === r || !o && r === "content") && (e = t.attr("data-format"),
                e && typeof u[e] == "function") ? (s = t.attr("data-format-options"),
                function(r) {
                    return u[e].call(t[0], i, s, n.extend({}, r))
                }(f)) : i
            }
            var f = {}, r = {}, u = {}, h;
            l("nestedTemplateFormatter", function(t, i, r) {
                if (i) {
                    typeof i == "string" && i[0] === "{" && (i = n.parseJSON(i));
                    var u = i.parentElement || "div"
                      , f = i.template || i;
                    return i.parentElement ? n("<" + u + "/>").loadTemplate(f, t, r) : n("<" + u + "/>").loadTemplate(f, t, r).children()
                }
            });
            n.fn.loadTemplate = c;
            n.addTemplateFormatter = l
        },
        pagination: function(n) {
            var t = {
                init: function(i) {
                    var r = n.extend({
                        items: 1,
                        itemsOnPage: 1,
                        pages: 0,
                        displayedPages: 5,
                        edges: 2,
                        currentPage: 0,
                        hrefTextPrefix: "#page-",
                        hrefTextSuffix: "",
                        prevText: "Prev",
                        nextText: "Next",
                        ellipseText: "&hellip;",
                        ellipsePageSet: !0,
                        cssStyle: "light-theme",
                        listStyle: "",
                        labelMap: [],
                        selectOnClick: !0,
                        nextAtFront: !1,
                        invertPageOrder: !1,
                        useStartEdge: !0,
                        useEndEdge: !0,
                        onPageClick: function() {},
                        onInit: function() {}
                    }, i || {})
                      , u = this;
                    return r.pages = r.pages ? r.pages : Math.ceil(r.items / r.itemsOnPage) ? Math.ceil(r.items / r.itemsOnPage) : 1,
                    r.currentPage = r.currentPage ? r.currentPage - 1 : r.invertPageOrder ? r.pages - 1 : 0,
                    r.halfDisplayed = r.displayedPages / 2,
                    this.each(function() {
                        u.addClass(r.cssStyle + " simple-pagination").data("pagination", r);
                        t._draw.call(u)
                    }),
                    r.onInit(),
                    this
                },
                selectPage: function(n) {
                    return t._selectPage.call(this, n - 1),
                    this
                },
                prevPage: function() {
                    var n = this.data("pagination");
                    return n.invertPageOrder ? n.currentPage < n.pages - 1 && t._selectPage.call(this, n.currentPage + 1) : n.currentPage > 0 && t._selectPage.call(this, n.currentPage - 1),
                    this
                },
                nextPage: function() {
                    var n = this.data("pagination");
                    return n.invertPageOrder ? n.currentPage > 0 && t._selectPage.call(this, n.currentPage - 1) : n.currentPage < n.pages - 1 && t._selectPage.call(this, n.currentPage + 1),
                    this
                },
                getPagesCount: function() {
                    return this.data("pagination").pages
                },
                setPagesCount: function(n) {
                    this.data("pagination").pages = n
                },
                getCurrentPage: function() {
                    return this.data("pagination").currentPage + 1
                },
                destroy: function() {
                    return this.empty(),
                    this
                },
                drawPage: function(n) {
                    var i = this.data("pagination");
                    return i.currentPage = n - 1,
                    this.data("pagination", i),
                    t._draw.call(this),
                    this
                },
                redraw: function() {
                    return t._draw.call(this),
                    this
                },
                disable: function() {
                    var n = this.data("pagination");
                    return n.disabled = !0,
                    this.data("pagination", n),
                    t._draw.call(this),
                    this
                },
                enable: function() {
                    var n = this.data("pagination");
                    return n.disabled = !1,
                    this.data("pagination", n),
                    t._draw.call(this),
                    this
                },
                updateItems: function(n) {
                    var i = this.data("pagination");
                    i.items = n;
                    i.pages = t._getPages(i);
                    this.data("pagination", i);
                    t._draw.call(this)
                },
                updateItemsOnPage: function(n) {
                    var i = this.data("pagination");
                    return i.itemsOnPage = n,
                    i.pages = t._getPages(i),
                    this.data("pagination", i),
                    t._selectPage.call(this, 0),
                    this
                },
                getItemsOnPage: function() {
                    return this.data("pagination").itemsOnPage
                },
                _draw: function() {
                    var i = this.data("pagination"), r = t._getInterval(i), u, s, f, o, e;
                    if (t.destroy.call(this),
                    s = typeof this.prop == "function" ? this.prop("tagName") : this.attr("tagName"),
                    f = s === "UL" ? this : n("<ul" + (i.listStyle ? ' class="' + i.listStyle + '"' : "") + "><\/ul>").appendTo(this),
                    i.prevText && t._appendItem.call(this, i.invertPageOrder ? i.currentPage + 1 : i.currentPage - 1, {
                        text: i.prevText,
                        classes: "prev"
                    }),
                    i.nextText && i.nextAtFront && t._appendItem.call(this, i.invertPageOrder ? i.currentPage - 1 : i.currentPage + 1, {
                        text: i.nextText,
                        classes: "next"
                    }),
                    i.invertPageOrder) {
                        if (r.end < i.pages && i.edges > 0) {
                            if (i.useStartEdge)
                                for (o = Math.max(i.pages - i.edges, r.end),
                                u = i.pages - 1; u >= o; u--)
                                    t._appendItem.call(this, u);
                            i.pages - i.edges > r.end && i.pages - i.edges - r.end != 1 ? f.append('<li class="disabled"><span class="ellipse">' + i.ellipseText + "<\/span><\/li>") : i.pages - i.edges - r.end == 1 && t._appendItem.call(this, r.end)
                        }
                    } else if (r.start > 0 && i.edges > 0) {
                        if (i.useStartEdge)
                            for (e = Math.min(i.edges, r.start),
                            u = 0; u < e; u++)
                                t._appendItem.call(this, u);
                        i.edges < r.start && r.start - i.edges != 1 ? f.append('<li class="disabled"><span class="ellipse">' + i.ellipseText + "<\/span><\/li>") : r.start - i.edges == 1 && t._appendItem.call(this, i.edges)
                    }
                    if (i.invertPageOrder)
                        for (u = r.end - 1; u >= r.start; u--)
                            t._appendItem.call(this, u);
                    else
                        for (u = r.start; u < r.end; u++)
                            t._appendItem.call(this, u);
                    if (i.invertPageOrder) {
                        if (r.start > 0 && i.edges > 0 && (i.edges < r.start && r.start - i.edges != 1 ? f.append('<li class="disabled"><span class="ellipse">' + i.ellipseText + "<\/span><\/li>") : r.start - i.edges == 1 && t._appendItem.call(this, i.edges),
                        i.useEndEdge))
                            for (e = Math.min(i.edges, r.start),
                            u = e - 1; u >= 0; u--)
                                t._appendItem.call(this, u)
                    } else if (r.end < i.pages && i.edges > 0 && (i.pages - i.edges > r.end && i.pages - i.edges - r.end != 1 ? f.append('<li class="disabled"><span class="ellipse">' + i.ellipseText + "<\/span><\/li>") : i.pages - i.edges - r.end == 1 && t._appendItem.call(this, r.end),
                    i.useEndEdge))
                        for (o = Math.max(i.pages - i.edges, r.end),
                        u = o; u < i.pages; u++)
                            t._appendItem.call(this, u);
                    i.nextText && !i.nextAtFront && t._appendItem.call(this, i.invertPageOrder ? i.currentPage - 1 : i.currentPage + 1, {
                        text: i.nextText,
                        classes: "next"
                    });
                    i.ellipsePageSet && !i.disabled && t._ellipseClick.call(this, f)
                },
                _getPages: function(n) {
                    var t = Math.ceil(n.items / n.itemsOnPage);
                    return t || 1
                },
                _getInterval: function(n) {
                    return {
                        start: Math.ceil(n.currentPage > n.halfDisplayed ? Math.max(Math.min(n.currentPage - n.halfDisplayed, n.pages - n.displayedPages), 0) : 0),
                        end: Math.ceil(n.currentPage > n.halfDisplayed ? Math.min(n.currentPage + n.halfDisplayed, n.pages) : Math.min(n.displayedPages, n.pages))
                    }
                },
                _appendItem: function(i, r) {
                    var s = this, u, e, f = s.data("pagination"), o = n("<li><\/li>"), h = s.find("ul");
                    i = i < 0 ? 0 : i < f.pages ? i : f.pages - 1;
                    u = {
                        text: i + 1,
                        classes: ""
                    };
                    f.labelMap.length && f.labelMap[i] && (u.text = f.labelMap[i]);
                    u = n.extend(u, r || {});
                    i == f.currentPage || f.disabled ? (f.disabled || u.classes === "prev" || u.classes === "next" ? o.addClass("disabled") : o.addClass("active"),
                    e = n('<span class="current">' + u.text + "<\/span>")) : (e = n('<a href="' + f.hrefTextPrefix + (i + 1) + f.hrefTextSuffix + '" class="page-link">' + u.text + "<\/a>"),
                    e.click(function(n) {
                        return t._selectPage.call(s, i, n)
                    }));
                    u.classes && e.addClass(u.classes);
                    o.append(e);
                    h.length ? h.append(o) : s.append(o)
                },
                _selectPage: function(n, i) {
                    var r = this.data("pagination");
                    r.currentPage = n;
                    r.selectOnClick && t._draw.call(this);
                    return r.onPageClick(n + 1, i)
                },
                _ellipseClick: function(i) {
                    var f = this
                      , r = this.data("pagination")
                      , u = i.find(".ellipse");
                    u.addClass("clickable").parent().removeClass("disabled");
                    u.click(function() {
                        if (!r.disable) {
                            var i = n(this)
                              , e = (parseInt(i.parent().prev().text(), 10) || 0) + 1;
                            i.html('<input type="number" min="1" max="' + r.pages + '" step="1" value="' + e + '">').find("input").focus().click(function(n) {
                                n.stopPropagation()
                            }).keyup(function(i) {
                                var e = n(this).val();
                                i.which === 13 && e !== "" ? e > 0 && e <= r.pages && t._selectPage.call(f, e - 1) : i.which === 27 && u.empty().html(r.ellipseText)
                            }).bind("blur", function() {
                                var i = n(this).val();
                                return i !== "" && t._selectPage.call(f, i - 1),
                                u.empty().html(r.ellipseText),
                                !1
                            })
                        }
                        return !1
                    })
                }
            };
            n.fn.pagination = function(i) {
                if (t[i] && i.charAt(0) != "_")
                    return t[i].apply(this, Array.prototype.slice.call(arguments, 1));
                if (typeof i != "object" && i)
                    n.error("Method " + i + " does not exist on jQuery.pagination");
                else
                    return t.init.apply(this, arguments)
            }
        },
        swiper: function() {
            (function() {
                "use strict";
                function e(n) {
                    n.fn.swiper = function(i) {
                        var r;
                        return n(this).each(function() {
                            var n = new t(this,i);
                            r || (r = n)
                        }),
                        r
                    }
                }
                var n, t = function(r, u) {
                    function d(n) {
                        return Math.floor(n)
                    }
                    function ot() {
                        f.autoplayTimeoutId = setTimeout(function() {
                            f.params.loop ? (f.fixLoop(),
                            f._slideNext(),
                            f.emit("onAutoplay", f)) : f.isEnd ? u.autoplayStopOnLast ? f.stopAutoplay() : (f._slideTo(0),
                            f.emit("onAutoplay", f)) : (f._slideNext(),
                            f.emit("onAutoplay", f))
                        }, f.params.autoplay)
                    }
                    function st(t, i) {
                        var r = n(t.target), u;
                        if (!r.is(i))
                            if (typeof i == "string")
                                r = r.parents(i);
                            else if (i.nodeType)
                                return r.parents().each(function(n, t) {
                                    t === i && (u = i)
                                }),
                                u ? i : undefined;
                        return r.length === 0 ? undefined : r[0]
                    }
                    function lt(n, t) {
                        t = t || {};
                        var r = window.MutationObserver || window.WebkitMutationObserver
                          , i = new r(function(n) {
                            n.forEach(function(n) {
                                f.onResize(!0);
                                f.emit("onObserverUpdate", f, n)
                            })
                        }
                        );
                        i.observe(n, {
                            attributes: typeof t.attributes == "undefined" ? !0 : t.attributes,
                            childList: typeof t.childList == "undefined" ? !0 : t.childList,
                            characterData: typeof t.characterData == "undefined" ? !0 : t.characterData
                        });
                        f.observers.push(i)
                    }
                    function wt(n) {
                        var t, o, s, e, r;
                        if ((n.originalEvent && (n = n.originalEvent),
                        t = n.keyCode || n.charCode,
                        !f.params.allowSwipeToNext && (f.isHorizontal() && t === 39 || !f.isHorizontal() && t === 40)) || !f.params.allowSwipeToPrev && (f.isHorizontal() && t === 37 || !f.isHorizontal() && t === 38))
                            return !1;
                        if (!n.shiftKey && !n.altKey && !n.ctrlKey && !n.metaKey && (!document.activeElement || !document.activeElement.nodeName || document.activeElement.nodeName.toLowerCase() !== "input" && document.activeElement.nodeName.toLowerCase() !== "textarea")) {
                            if (t === 37 || t === 39 || t === 38 || t === 40) {
                                if (o = !1,
                                f.container.parents(".swiper-slide").length > 0 && f.container.parents(".swiper-slide-active").length === 0)
                                    return;
                                var u = {
                                    left: window.pageXOffset,
                                    top: window.pageYOffset
                                }
                                  , h = window.innerWidth
                                  , c = window.innerHeight
                                  , i = f.container.offset();
                                for (f.rtl && (i.left = i.left - f.container[0].scrollLeft),
                                s = [[i.left, i.top], [i.left + f.width, i.top], [i.left, i.top + f.height], [i.left + f.width, i.top + f.height]],
                                e = 0; e < s.length; e++)
                                    r = s[e],
                                    r[0] >= u.left && r[0] <= u.left + h && r[1] >= u.top && r[1] <= u.top + c && (o = !0);
                                if (!o)
                                    return
                            }
                            f.isHorizontal() ? ((t === 37 || t === 39) && (n.preventDefault ? n.preventDefault() : n.returnValue = !1),
                            (t === 39 && !f.rtl || t === 37 && f.rtl) && f.slideNext(),
                            (t === 37 && !f.rtl || t === 39 && f.rtl) && f.slidePrev()) : ((t === 38 || t === 40) && (n.preventDefault ? n.preventDefault() : n.returnValue = !1),
                            t === 40 && f.slideNext(),
                            t === 38 && f.slidePrev())
                        }
                    }
                    function bt(n) {
                        n.originalEvent && (n = n.originalEvent);
                        var u = f.mousewheel.event
                          , t = 0
                          , r = f.rtl ? -1 : 1;
                        if (u === "mousewheel")
                            if (f.params.mousewheelForceToAxis)
                                if (f.isHorizontal())
                                    if (Math.abs(n.wheelDeltaX) > Math.abs(n.wheelDeltaY))
                                        t = n.wheelDeltaX * r;
                                    else
                                        return;
                                else if (Math.abs(n.wheelDeltaY) > Math.abs(n.wheelDeltaX))
                                    t = n.wheelDeltaY;
                                else
                                    return;
                            else
                                t = Math.abs(n.wheelDeltaX) > Math.abs(n.wheelDeltaY) ? -n.wheelDeltaX * r : -n.wheelDeltaY;
                        else if (u === "DOMMouseScroll")
                            t = -n.detail;
                        else if (u === "wheel")
                            if (f.params.mousewheelForceToAxis)
                                if (f.isHorizontal())
                                    if (Math.abs(n.deltaX) > Math.abs(n.deltaY))
                                        t = -n.deltaX * r;
                                    else
                                        return;
                                else if (Math.abs(n.deltaY) > Math.abs(n.deltaX))
                                    t = -n.deltaY;
                                else
                                    return;
                            else
                                t = Math.abs(n.deltaX) > Math.abs(n.deltaY) ? -n.deltaX * r : -n.deltaY;
                        if (t !== 0) {
                            if (f.params.mousewheelInvert && (t = -t),
                            f.params.freeMode) {
                                var i = f.getWrapperTranslate() + t * f.params.mousewheelSensitivity
                                  , e = f.isBeginning
                                  , o = f.isEnd;
                                if (i >= f.minTranslate() && (i = f.minTranslate()),
                                i <= f.maxTranslate() && (i = f.maxTranslate()),
                                f.setWrapperTransition(0),
                                f.setWrapperTranslate(i),
                                f.updateProgress(),
                                f.updateActiveIndex(),
                                (!e && f.isBeginning || !o && f.isEnd) && f.updateClasses(),
                                f.params.freeModeSticky ? (clearTimeout(f.mousewheel.timeout),
                                f.mousewheel.timeout = setTimeout(function() {
                                    f.slideReset()
                                }, 300)) : f.params.lazyLoading && f.lazy && f.lazy.load(),
                                i === 0 || i === f.maxTranslate())
                                    return
                            } else {
                                if ((new window.Date).getTime() - f.mousewheel.lastScrollTime > 60)
                                    if (t < 0)
                                        if (f.isEnd && !f.params.loop || f.animating) {
                                            if (f.params.mousewheelReleaseOnEdges)
                                                return !0
                                        } else
                                            f.slideNext();
                                    else if (f.isBeginning && !f.params.loop || f.animating) {
                                        if (f.params.mousewheelReleaseOnEdges)
                                            return !0
                                    } else
                                        f.slidePrev();
                                f.mousewheel.lastScrollTime = (new window.Date).getTime()
                            }
                            return f.params.autoplay && f.stopAutoplay(),
                            n.preventDefault ? n.preventDefault() : n.returnValue = !1,
                            !1
                        }
                    }
                    function kt(t, i) {
                        t = n(t);
                        var e, r, u, o = f.rtl ? -1 : 1;
                        e = t.attr("data-swiper-parallax") || "0";
                        r = t.attr("data-swiper-parallax-x");
                        u = t.attr("data-swiper-parallax-y");
                        r || u ? (r = r || "0",
                        u = u || "0") : f.isHorizontal() ? (r = e,
                        u = "0") : (u = e,
                        r = "0");
                        r = r.indexOf("%") >= 0 ? parseInt(r, 10) * i * o + "%" : r * i * o + "px";
                        u = u.indexOf("%") >= 0 ? parseInt(u, 10) * i + "%" : u * i + "px";
                        t.transform("translate3d(" + r + ", " + u + ",0px)")
                    }
                    function yt(n) {
                        return n.indexOf("on") !== 0 && (n = n[0] !== n[0].toUpperCase() ? "on" + n[0].toUpperCase() + n.substring(1) : "on" + n),
                        n
                    }
                    var y, pt, p, o, ft, h, k, f, et, v, rt, ut, at, vt;
                    if (!(this instanceof t))
                        return new t(r,u);
                    y = {
                        direction: "horizontal",
                        touchEventsTarget: "container",
                        initialSlide: 0,
                        speed: 300,
                        autoplay: !1,
                        autoplayDisableOnInteraction: !0,
                        autoplayStopOnLast: !1,
                        iOSEdgeSwipeDetection: !1,
                        iOSEdgeSwipeThreshold: 20,
                        freeMode: !1,
                        freeModeMomentum: !0,
                        freeModeMomentumRatio: 1,
                        freeModeMomentumBounce: !0,
                        freeModeMomentumBounceRatio: 1,
                        freeModeSticky: !1,
                        freeModeMinimumVelocity: .02,
                        autoHeight: !1,
                        setWrapperSize: !1,
                        virtualTranslate: !1,
                        effect: "slide",
                        coverflow: {
                            rotate: 50,
                            stretch: 0,
                            depth: 100,
                            modifier: 1,
                            slideShadows: !0
                        },
                        flip: {
                            slideShadows: !0,
                            limitRotation: !0
                        },
                        cube: {
                            slideShadows: !0,
                            shadow: !0,
                            shadowOffset: 20,
                            shadowScale: .94
                        },
                        fade: {
                            crossFade: !1
                        },
                        parallax: !1,
                        scrollbar: null,
                        scrollbarHide: !0,
                        scrollbarDraggable: !1,
                        scrollbarSnapOnRelease: !1,
                        keyboardControl: !1,
                        mousewheelControl: !1,
                        mousewheelReleaseOnEdges: !1,
                        mousewheelInvert: !1,
                        mousewheelForceToAxis: !1,
                        mousewheelSensitivity: 1,
                        hashnav: !1,
                        breakpoints: undefined,
                        spaceBetween: 0,
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        slidesPerColumnFill: "column",
                        slidesPerGroup: 1,
                        centeredSlides: !1,
                        slidesOffsetBefore: 0,
                        slidesOffsetAfter: 0,
                        roundLengths: !1,
                        touchRatio: 1,
                        touchAngle: 45,
                        simulateTouch: !0,
                        shortSwipes: !0,
                        longSwipes: !0,
                        longSwipesRatio: .5,
                        longSwipesMs: 300,
                        followFinger: !0,
                        onlyExternal: !1,
                        threshold: 0,
                        touchMoveStopPropagation: !0,
                        uniqueNavElements: !0,
                        pagination: null,
                        paginationElement: "span",
                        paginationClickable: !1,
                        paginationHide: !1,
                        paginationBulletRender: null,
                        paginationProgressRender: null,
                        paginationFractionRender: null,
                        paginationCustomRender: null,
                        paginationType: "bullets",
                        resistance: !0,
                        resistanceRatio: .85,
                        nextButton: null,
                        prevButton: null,
                        watchSlidesProgress: !1,
                        watchSlidesVisibility: !1,
                        grabCursor: !1,
                        preventClicks: !0,
                        preventClicksPropagation: !0,
                        slideToClickedSlide: !1,
                        lazyLoading: !1,
                        lazyLoadingInPrevNext: !1,
                        lazyLoadingInPrevNextAmount: 1,
                        lazyLoadingOnTransitionStart: !1,
                        preloadImages: !0,
                        updateOnImagesReady: !0,
                        loop: !1,
                        loopAdditionalSlides: 0,
                        loopedSlides: null,
                        control: undefined,
                        controlInverse: !1,
                        controlBy: "slide",
                        allowSwipeToPrev: !0,
                        allowSwipeToNext: !0,
                        swipeHandler: null,
                        noSwiping: !0,
                        noSwipingClass: "swiper-no-swiping",
                        slideClass: "swiper-slide",
                        slideActiveClass: "swiper-slide-active",
                        slideVisibleClass: "swiper-slide-visible",
                        slideDuplicateClass: "swiper-slide-duplicate",
                        slideNextClass: "swiper-slide-next",
                        slidePrevClass: "swiper-slide-prev",
                        wrapperClass: "swiper-wrapper",
                        bulletClass: "swiper-pagination-bullet",
                        bulletActiveClass: "swiper-pagination-bullet-active",
                        buttonDisabledClass: "swiper-button-disabled",
                        paginationCurrentClass: "swiper-pagination-current",
                        paginationTotalClass: "swiper-pagination-total",
                        paginationHiddenClass: "swiper-pagination-hidden",
                        paginationProgressbarClass: "swiper-pagination-progressbar",
                        observer: !1,
                        observeParents: !1,
                        a11y: !1,
                        prevSlideMessage: "Previous slide",
                        nextSlideMessage: "Next slide",
                        firstSlideMessage: "This is the first slide",
                        lastSlideMessage: "This is the last slide",
                        paginationBulletMessage: "Go to slide {{index}}",
                        runCallbacksOnInit: !0
                    };
                    pt = u && u.virtualTranslate;
                    u = u || {};
                    p = {};
                    for (o in u)
                        if (typeof u[o] != "object" || u[o] === null || u[o].nodeType || u[o] === window || u[o] === document || typeof i != "undefined" && u[o]instanceof i || typeof jQuery != "undefined" && u[o]instanceof jQuery)
                            p[o] = u[o];
                        else {
                            p[o] = {};
                            for (ft in u[o])
                                p[o][ft] = u[o][ft]
                        }
                    for (h in y)
                        if (typeof u[h] == "undefined")
                            u[h] = y[h];
                        else if (typeof u[h] == "object")
                            for (k in y[h])
                                typeof u[h][k] == "undefined" && (u[h][k] = y[h][k]);
                    if ((f = this,
                    f.params = u,
                    f.originalParams = p,
                    f.classNames = [],
                    typeof n != "undefined" && typeof i != "undefined" && (n = i),
                    typeof n != "undefined" || (n = typeof i == "undefined" ? window.Dom7 || window.Zepto || window.jQuery : i,
                    n)) && (f.$ = n,
                    f.currentBreakpoint = undefined,
                    f.getActiveBreakpoint = function() {
                        var i, t, n, r;
                        if (!f.params.breakpoints)
                            return !1;
                        i = !1;
                        t = [];
                        for (n in f.params.breakpoints)
                            f.params.breakpoints.hasOwnProperty(n) && t.push(n);
                        for (t.sort(function(n, t) {
                            return parseInt(n, 10) > parseInt(t, 10)
                        }),
                        r = 0; r < t.length; r++)
                            n = t[r],
                            n >= window.innerWidth && !i && (i = n);
                        return i || "max"
                    }
                    ,
                    f.setBreakpoint = function() {
                        var n = f.getActiveBreakpoint(), t, r, i;
                        if (n && f.currentBreakpoint !== n) {
                            t = n in f.params.breakpoints ? f.params.breakpoints[n] : f.originalParams;
                            r = f.params.loop && t.slidesPerView !== f.params.slidesPerView;
                            for (i in t)
                                f.params[i] = t[i];
                            f.currentBreakpoint = n;
                            r && f.destroyLoop && f.reLoop(!0)
                        }
                    }
                    ,
                    f.params.breakpoints && f.setBreakpoint(),
                    f.container = n(r),
                    f.container.length !== 0)) {
                        if (f.container.length > 1)
                            return et = [],
                            f.container.each(function() {
                                var n = this;
                                et.push(new t(this,u))
                            }),
                            et;
                        f.container[0].swiper = f;
                        f.container.data("swiper", f);
                        f.classNames.push("swiper-container-" + f.params.direction);
                        f.params.freeMode && f.classNames.push("swiper-container-free-mode");
                        f.support.flexbox || (f.classNames.push("swiper-container-no-flexbox"),
                        f.params.slidesPerColumn = 1);
                        f.params.autoHeight && f.classNames.push("swiper-container-autoheight");
                        (f.params.parallax || f.params.watchSlidesVisibility) && (f.params.watchSlidesProgress = !0);
                        ["cube", "coverflow", "flip"].indexOf(f.params.effect) >= 0 && (f.support.transforms3d ? (f.params.watchSlidesProgress = !0,
                        f.classNames.push("swiper-container-3d")) : f.params.effect = "slide");
                        f.params.effect !== "slide" && f.classNames.push("swiper-container-" + f.params.effect);
                        f.params.effect === "cube" && (f.params.resistanceRatio = 0,
                        f.params.slidesPerView = 1,
                        f.params.slidesPerColumn = 1,
                        f.params.slidesPerGroup = 1,
                        f.params.centeredSlides = !1,
                        f.params.spaceBetween = 0,
                        f.params.virtualTranslate = !0,
                        f.params.setWrapperSize = !1);
                        (f.params.effect === "fade" || f.params.effect === "flip") && (f.params.slidesPerView = 1,
                        f.params.slidesPerColumn = 1,
                        f.params.slidesPerGroup = 1,
                        f.params.watchSlidesProgress = !0,
                        f.params.spaceBetween = 0,
                        f.params.setWrapperSize = !1,
                        typeof pt == "undefined" && (f.params.virtualTranslate = !0));
                        f.params.grabCursor && f.support.touch && (f.params.grabCursor = !1);
                        f.wrapper = f.container.children("." + f.params.wrapperClass);
                        f.params.pagination && (f.paginationContainer = n(f.params.pagination),
                        f.params.uniqueNavElements && typeof f.params.pagination == "string" && f.paginationContainer.length > 1 && f.container.find(f.params.pagination).length === 1 && (f.paginationContainer = f.container.find(f.params.pagination)),
                        f.params.paginationType === "bullets" && f.params.paginationClickable ? f.paginationContainer.addClass("swiper-pagination-clickable") : f.params.paginationClickable = !1,
                        f.paginationContainer.addClass("swiper-pagination-" + f.params.paginationType));
                        (f.params.nextButton || f.params.prevButton) && (f.params.nextButton && (f.nextButton = n(f.params.nextButton),
                        f.params.uniqueNavElements && typeof f.params.nextButton == "string" && f.nextButton.length > 1 && f.container.find(f.params.nextButton).length === 1 && (f.nextButton = f.container.find(f.params.nextButton))),
                        f.params.prevButton && (f.prevButton = n(f.params.prevButton),
                        f.params.uniqueNavElements && typeof f.params.prevButton == "string" && f.prevButton.length > 1 && f.container.find(f.params.prevButton).length === 1 && (f.prevButton = f.container.find(f.params.prevButton))));
                        f.isHorizontal = function() {
                            return f.params.direction === "horizontal"
                        }
                        ;
                        f.rtl = f.isHorizontal() && (f.container[0].dir.toLowerCase() === "rtl" || f.container.css("direction") === "rtl");
                        f.rtl && f.classNames.push("swiper-container-rtl");
                        f.rtl && (f.wrongRTL = f.wrapper.css("display") === "-webkit-box");
                        f.params.slidesPerColumn > 1 && f.classNames.push("swiper-container-multirow");
                        f.device.android && f.classNames.push("swiper-container-android");
                        f.container.addClass(f.classNames.join(" "));
                        f.translate = 0;
                        f.progress = 0;
                        f.velocity = 0;
                        f.lockSwipeToNext = function() {
                            f.params.allowSwipeToNext = !1
                        }
                        ;
                        f.lockSwipeToPrev = function() {
                            f.params.allowSwipeToPrev = !1
                        }
                        ;
                        f.lockSwipes = function() {
                            f.params.allowSwipeToNext = f.params.allowSwipeToPrev = !1
                        }
                        ;
                        f.unlockSwipeToNext = function() {
                            f.params.allowSwipeToNext = !0
                        }
                        ;
                        f.unlockSwipeToPrev = function() {
                            f.params.allowSwipeToPrev = !0
                        }
                        ;
                        f.unlockSwipes = function() {
                            f.params.allowSwipeToNext = f.params.allowSwipeToPrev = !0
                        }
                        ;
                        f.params.grabCursor && (f.container[0].style.cursor = "move",
                        f.container[0].style.cursor = "-webkit-grab",
                        f.container[0].style.cursor = "-moz-grab",
                        f.container[0].style.cursor = "grab");
                        f.imagesToLoad = [];
                        f.imagesLoaded = 0;
                        f.loadImage = function(n, t, i, r, u) {
                            function e() {
                                u && u()
                            }
                            var f;
                            n.complete && r ? e() : t ? (f = new window.Image,
                            f.onload = e,
                            f.onerror = e,
                            i && (f.srcset = i),
                            t && (f.src = t)) : e()
                        }
                        ;
                        f.preloadImages = function() {
                            function t() {
                                typeof f != "undefined" && f !== null && (f.imagesLoaded !== undefined && f.imagesLoaded++,
                                f.imagesLoaded === f.imagesToLoad.length && (f.params.updateOnImagesReady && f.update(),
                                f.emit("onImagesReady", f)))
                            }
                            f.imagesToLoad = f.container.find("img");
                            for (var n = 0; n < f.imagesToLoad.length; n++)
                                f.loadImage(f.imagesToLoad[n], f.imagesToLoad[n].currentSrc || f.imagesToLoad[n].getAttribute("src"), f.imagesToLoad[n].srcset || f.imagesToLoad[n].getAttribute("srcset"), !0, t)
                        }
                        ;
                        f.autoplayTimeoutId = undefined;
                        f.autoplaying = !1;
                        f.autoplayPaused = !1;
                        f.startAutoplay = function() {
                            if (typeof f.autoplayTimeoutId != "undefined" || !f.params.autoplay || f.autoplaying)
                                return !1;
                            f.autoplaying = !0;
                            f.emit("onAutoplayStart", f);
                            ot()
                        }
                        ;
                        f.stopAutoplay = function() {
                            f.autoplayTimeoutId && (f.autoplayTimeoutId && clearTimeout(f.autoplayTimeoutId),
                            f.autoplaying = !1,
                            f.autoplayTimeoutId = undefined,
                            f.emit("onAutoplayStop", f))
                        }
                        ;
                        f.pauseAutoplay = function(n) {
                            f.autoplayPaused || (f.autoplayTimeoutId && clearTimeout(f.autoplayTimeoutId),
                            f.autoplayPaused = !0,
                            n === 0 ? (f.autoplayPaused = !1,
                            ot()) : f.wrapper.transitionEnd(function() {
                                f && (f.autoplayPaused = !1,
                                f.autoplaying ? ot() : f.stopAutoplay())
                            }))
                        }
                        ;
                        f.minTranslate = function() {
                            return -f.snapGrid[0]
                        }
                        ;
                        f.maxTranslate = function() {
                            return -f.snapGrid[f.snapGrid.length - 1]
                        }
                        ;
                        f.updateAutoHeight = function() {
                            var t = f.slides.eq(f.activeIndex)[0], n;
                            typeof t != "undefined" && (n = t.offsetHeight,
                            n && f.wrapper.css("height", n + "px"))
                        }
                        ;
                        f.updateContainerSize = function() {
                            var n, t;
                            (n = typeof f.params.width != "undefined" ? f.params.width : f.container[0].clientWidth,
                            t = typeof f.params.height != "undefined" ? f.params.height : f.container[0].clientHeight,
                            (n !== 0 || !f.isHorizontal()) && (t !== 0 || f.isHorizontal())) && (n = n - parseInt(f.container.css("padding-left"), 10) - parseInt(f.container.css("padding-right"), 10),
                            t = t - parseInt(f.container.css("padding-top"), 10) - parseInt(f.container.css("padding-bottom"), 10),
                            f.width = n,
                            f.height = t,
                            f.size = f.isHorizontal() ? f.width : f.height)
                        }
                        ;
                        f.updateSlidesSize = function() {
                            var o, h, c, e, u, l;
                            f.slides = f.wrapper.children("." + f.params.slideClass);
                            f.snapGrid = [];
                            f.slidesGrid = [];
                            f.slidesSizesGrid = [];
                            var i = f.params.spaceBetween, r = -f.params.slidesOffsetBefore, n, y = 0, v = 0;
                            if (typeof f.size != "undefined") {
                                typeof i == "string" && i.indexOf("%") >= 0 && (i = parseFloat(i.replace("%", "")) / 100 * f.size);
                                f.virtualSize = -i;
                                f.rtl ? f.slides.css({
                                    marginLeft: "",
                                    marginTop: ""
                                }) : f.slides.css({
                                    marginRight: "",
                                    marginBottom: ""
                                });
                                f.params.slidesPerColumn > 1 && (o = Math.floor(f.slides.length / f.params.slidesPerColumn) === f.slides.length / f.params.slidesPerColumn ? f.slides.length : Math.ceil(f.slides.length / f.params.slidesPerColumn) * f.params.slidesPerColumn,
                                f.params.slidesPerView !== "auto" && f.params.slidesPerColumnFill === "row" && (o = Math.max(o, f.params.slidesPerView * f.params.slidesPerColumn)));
                                var t, s = f.params.slidesPerColumn, a = o / s, p = a - (f.params.slidesPerColumn * a - f.slides.length);
                                for (n = 0; n < f.slides.length; n++)
                                    (t = 0,
                                    h = f.slides.eq(n),
                                    f.params.slidesPerColumn > 1 && (f.params.slidesPerColumnFill === "column" ? (e = Math.floor(n / s),
                                    u = n - e * s,
                                    (e > p || e === p && u === s - 1) && ++u >= s && (u = 0,
                                    e++),
                                    c = e + u * o / s,
                                    h.css({
                                        "-webkit-box-ordinal-group": c,
                                        "-moz-box-ordinal-group": c,
                                        "-ms-flex-order": c,
                                        "-webkit-order": c,
                                        order: c
                                    })) : (u = Math.floor(n / a),
                                    e = n - u * a),
                                    h.css({
                                        "margin-top": u !== 0 && f.params.spaceBetween && f.params.spaceBetween + "px"
                                    }).attr("data-swiper-column", e).attr("data-swiper-row", u)),
                                    h.css("display") !== "none") && (f.params.slidesPerView === "auto" ? (t = f.isHorizontal() ? h.outerWidth(!0) : h.outerHeight(!0),
                                    f.params.roundLengths && (t = d(t))) : (t = (f.size - (f.params.slidesPerView - 1) * i) / f.params.slidesPerView,
                                    f.params.roundLengths && (t = d(t)),
                                    f.isHorizontal() ? f.slides[n].style.width = t + "px" : f.slides[n].style.height = t + "px"),
                                    f.slides[n].swiperSlideSize = t,
                                    f.slidesSizesGrid.push(t),
                                    f.params.centeredSlides ? (r = r + t / 2 + y / 2 + i,
                                    n === 0 && (r = r - f.size / 2 - i),
                                    Math.abs(r) < 1 / 1e3 && (r = 0),
                                    v % f.params.slidesPerGroup == 0 && f.snapGrid.push(r),
                                    f.slidesGrid.push(r)) : (v % f.params.slidesPerGroup == 0 && f.snapGrid.push(r),
                                    f.slidesGrid.push(r),
                                    r = r + t + i),
                                    f.virtualSize += t + i,
                                    y = t,
                                    v++);
                                if (f.virtualSize = Math.max(f.virtualSize, f.size) + f.params.slidesOffsetAfter,
                                f.rtl && f.wrongRTL && (f.params.effect === "slide" || f.params.effect === "coverflow") && f.wrapper.css({
                                    width: f.virtualSize + f.params.spaceBetween + "px"
                                }),
                                (!f.support.flexbox || f.params.setWrapperSize) && (f.isHorizontal() ? f.wrapper.css({
                                    width: f.virtualSize + f.params.spaceBetween + "px"
                                }) : f.wrapper.css({
                                    height: f.virtualSize + f.params.spaceBetween + "px"
                                })),
                                f.params.slidesPerColumn > 1 && (f.virtualSize = (t + f.params.spaceBetween) * o,
                                f.virtualSize = Math.ceil(f.virtualSize / f.params.slidesPerColumn) - f.params.spaceBetween,
                                f.wrapper.css({
                                    width: f.virtualSize + f.params.spaceBetween + "px"
                                }),
                                f.params.centeredSlides)) {
                                    for (l = [],
                                    n = 0; n < f.snapGrid.length; n++)
                                        f.snapGrid[n] < f.virtualSize + f.snapGrid[0] && l.push(f.snapGrid[n]);
                                    f.snapGrid = l
                                }
                                if (!f.params.centeredSlides) {
                                    for (l = [],
                                    n = 0; n < f.snapGrid.length; n++)
                                        f.snapGrid[n] <= f.virtualSize - f.size && l.push(f.snapGrid[n]);
                                    f.snapGrid = l;
                                    Math.floor(f.virtualSize - f.size) - Math.floor(f.snapGrid[f.snapGrid.length - 1]) > 1 && f.snapGrid.push(f.virtualSize - f.size)
                                }
                                f.snapGrid.length === 0 && (f.snapGrid = [0]);
                                f.params.spaceBetween !== 0 && (f.isHorizontal() ? f.rtl ? f.slides.css({
                                    marginLeft: i + "px"
                                }) : f.slides.css({
                                    marginRight: i + "px"
                                }) : f.slides.css({
                                    marginBottom: i + "px"
                                }));
                                f.params.watchSlidesProgress && f.updateSlidesOffset()
                            }
                        }
                        ;
                        f.updateSlidesOffset = function() {
                            for (var n = 0; n < f.slides.length; n++)
                                f.slides[n].swiperSlideOffset = f.isHorizontal() ? f.slides[n].offsetLeft : f.slides[n].offsetTop
                        }
                        ;
                        f.updateSlidesProgress = function(n) {
                            var r, t, i, e;
                            if (typeof n == "undefined" && (n = f.translate || 0),
                            f.slides.length !== 0)
                                for (typeof f.slides[0].swiperSlideOffset == "undefined" && f.updateSlidesOffset(),
                                r = -n,
                                f.rtl && (r = n),
                                f.slides.removeClass(f.params.slideVisibleClass),
                                t = 0; t < f.slides.length; t++) {
                                    if (i = f.slides[t],
                                    e = (r - i.swiperSlideOffset) / (i.swiperSlideSize + f.params.spaceBetween),
                                    f.params.watchSlidesVisibility) {
                                        var u = -(r - i.swiperSlideOffset)
                                          , o = u + f.slidesSizesGrid[t]
                                          , s = u >= 0 && u < f.size || o > 0 && o <= f.size || u <= 0 && o >= f.size;
                                        s && f.slides.eq(t).addClass(f.params.slideVisibleClass)
                                    }
                                    i.progress = f.rtl ? -e : e
                                }
                        }
                        ;
                        f.updateProgress = function(n) {
                            typeof n == "undefined" && (n = f.translate || 0);
                            var t = f.maxTranslate() - f.minTranslate()
                              , i = f.isBeginning
                              , r = f.isEnd;
                            t === 0 ? (f.progress = 0,
                            f.isBeginning = f.isEnd = !0) : (f.progress = (n - f.minTranslate()) / t,
                            f.isBeginning = f.progress <= 0,
                            f.isEnd = f.progress >= 1);
                            f.isBeginning && !i && f.emit("onReachBeginning", f);
                            f.isEnd && !r && f.emit("onReachEnd", f);
                            f.params.watchSlidesProgress && f.updateSlidesProgress(n);
                            f.emit("onProgress", f, f.progress)
                        }
                        ;
                        f.updateActiveIndex = function() {
                            for (var i = f.rtl ? f.translate : -f.translate, t, r, n = 0; n < f.slidesGrid.length; n++)
                                typeof f.slidesGrid[n + 1] != "undefined" ? i >= f.slidesGrid[n] && i < f.slidesGrid[n + 1] - (f.slidesGrid[n + 1] - f.slidesGrid[n]) / 2 ? t = n : i >= f.slidesGrid[n] && i < f.slidesGrid[n + 1] && (t = n + 1) : i >= f.slidesGrid[n] && (t = n);
                            ((t < 0 || typeof t == "undefined") && (t = 0),
                            r = Math.floor(t / f.params.slidesPerGroup),
                            r >= f.snapGrid.length && (r = f.snapGrid.length - 1),
                            t !== f.activeIndex) && (f.snapIndex = r,
                            f.previousIndex = f.activeIndex,
                            f.activeIndex = t,
                            f.updateClasses())
                        }
                        ;
                        f.updateClasses = function() {
                            var r, u, e, t, i;
                            if (f.slides.removeClass(f.params.slideActiveClass + " " + f.params.slideNextClass + " " + f.params.slidePrevClass),
                            r = f.slides.eq(f.activeIndex),
                            r.addClass(f.params.slideActiveClass),
                            u = r.next("." + f.params.slideClass).addClass(f.params.slideNextClass),
                            f.params.loop && u.length === 0 && f.slides.eq(0).addClass(f.params.slideNextClass),
                            e = r.prev("." + f.params.slideClass).addClass(f.params.slidePrevClass),
                            f.params.loop && e.length === 0 && f.slides.eq(-1).addClass(f.params.slidePrevClass),
                            f.paginationContainer && f.paginationContainer.length > 0) {
                                if (i = f.params.loop ? Math.ceil((f.slides.length - f.loopedSlides * 2) / f.params.slidesPerGroup) : f.snapGrid.length,
                                f.params.loop ? (t = Math.ceil((f.activeIndex - f.loopedSlides) / f.params.slidesPerGroup),
                                t > f.slides.length - 1 - f.loopedSlides * 2 && (t = t - (f.slides.length - f.loopedSlides * 2)),
                                t > i - 1 && (t = t - i),
                                t < 0 && f.params.paginationType !== "bullets" && (t = i + t)) : t = typeof f.snapIndex != "undefined" ? f.snapIndex : f.activeIndex || 0,
                                f.params.paginationType === "bullets" && f.bullets && f.bullets.length > 0 && (f.bullets.removeClass(f.params.bulletActiveClass),
                                f.paginationContainer.length > 1 ? f.bullets.each(function() {
                                    n(this).index() === t && n(this).addClass(f.params.bulletActiveClass)
                                }) : f.bullets.eq(t).addClass(f.params.bulletActiveClass)),
                                f.params.paginationType === "fraction" && (f.paginationContainer.find("." + f.params.paginationCurrentClass).text(t + 1),
                                f.paginationContainer.find("." + f.params.paginationTotalClass).text(i)),
                                f.params.paginationType === "progress") {
                                    var o = (t + 1) / i
                                      , s = o
                                      , h = 1;
                                    f.isHorizontal() || (h = o,
                                    s = 1);
                                    f.paginationContainer.find("." + f.params.paginationProgressbarClass).transform("translate3d(0,0,0) scaleX(" + s + ") scaleY(" + h + ")").transition(f.params.speed)
                                }
                                f.params.paginationType === "custom" && f.params.paginationCustomRender && (f.paginationContainer.html(f.params.paginationCustomRender(f, t + 1, i)),
                                f.emit("onPaginationRendered", f, f.paginationContainer[0]))
                            }
                            f.params.loop || (f.params.prevButton && f.prevButton && f.prevButton.length > 0 && (f.isBeginning ? (f.prevButton.addClass(f.params.buttonDisabledClass),
                            f.params.a11y && f.a11y && f.a11y.disable(f.prevButton)) : (f.prevButton.removeClass(f.params.buttonDisabledClass),
                            f.params.a11y && f.a11y && f.a11y.enable(f.prevButton))),
                            f.params.nextButton && f.nextButton && f.nextButton.length > 0 && (f.isEnd ? (f.nextButton.addClass(f.params.buttonDisabledClass),
                            f.params.a11y && f.a11y && f.a11y.disable(f.nextButton)) : (f.nextButton.removeClass(f.params.buttonDisabledClass),
                            f.params.a11y && f.a11y && f.a11y.enable(f.nextButton))))
                        }
                        ;
                        f.updatePagination = function() {
                            var n, i, t;
                            if (f.params.pagination && f.paginationContainer && f.paginationContainer.length > 0) {
                                if (n = "",
                                f.params.paginationType === "bullets") {
                                    for (i = f.params.loop ? Math.ceil((f.slides.length - f.loopedSlides * 2) / f.params.slidesPerGroup) : f.snapGrid.length,
                                    t = 0; t < i; t++)
                                        n += f.params.paginationBulletRender ? f.params.paginationBulletRender(t, f.params.bulletClass) : "<" + f.params.paginationElement + ' class="' + f.params.bulletClass + '"><\/' + f.params.paginationElement + ">";
                                    f.paginationContainer.html(n);
                                    f.bullets = f.paginationContainer.find("." + f.params.bulletClass);
                                    f.params.paginationClickable && f.params.a11y && f.a11y && f.a11y.initPagination()
                                }
                                f.params.paginationType === "fraction" && (n = f.params.paginationFractionRender ? f.params.paginationFractionRender(f, f.params.paginationCurrentClass, f.params.paginationTotalClass) : '<span class="' + f.params.paginationCurrentClass + '"><\/span> / <span class="' + f.params.paginationTotalClass + '"><\/span>',
                                f.paginationContainer.html(n));
                                f.params.paginationType === "progress" && (n = f.params.paginationProgressRender ? f.params.paginationProgressRender(f, f.params.paginationProgressbarClass) : '<span class="' + f.params.paginationProgressbarClass + '"><\/span>',
                                f.paginationContainer.html(n));
                                f.params.paginationType !== "custom" && f.emit("onPaginationRendered", f, f.paginationContainer[0])
                            }
                        }
                        ;
                        f.update = function(n) {
                            function t() {
                                r = Math.min(Math.max(f.translate, f.maxTranslate()), f.minTranslate());
                                f.setWrapperTranslate(r);
                                f.updateActiveIndex();
                                f.updateClasses()
                            }
                            if (f.updateContainerSize(),
                            f.updateSlidesSize(),
                            f.updateProgress(),
                            f.updatePagination(),
                            f.updateClasses(),
                            f.params.scrollbar && f.scrollbar && f.scrollbar.set(),
                            n) {
                                var i, r;
                                f.controller && f.controller.spline && (f.controller.spline = undefined);
                                f.params.freeMode ? (t(),
                                f.params.autoHeight && f.updateAutoHeight()) : (i = (f.params.slidesPerView === "auto" || f.params.slidesPerView > 1) && f.isEnd && !f.params.centeredSlides ? f.slideTo(f.slides.length - 1, 0, !1, !0) : f.slideTo(f.activeIndex, 0, !1, !0),
                                i || t())
                            } else
                                f.params.autoHeight && f.updateAutoHeight()
                        }
                        ;
                        f.onResize = function(n) {
                            var i, r, t, u;
                            f.params.breakpoints && f.setBreakpoint();
                            i = f.params.allowSwipeToPrev;
                            r = f.params.allowSwipeToNext;
                            f.params.allowSwipeToPrev = f.params.allowSwipeToNext = !0;
                            f.updateContainerSize();
                            f.updateSlidesSize();
                            (f.params.slidesPerView === "auto" || f.params.freeMode || n) && f.updatePagination();
                            f.params.scrollbar && f.scrollbar && f.scrollbar.set();
                            f.controller && f.controller.spline && (f.controller.spline = undefined);
                            t = !1;
                            f.params.freeMode ? (u = Math.min(Math.max(f.translate, f.maxTranslate()), f.minTranslate()),
                            f.setWrapperTranslate(u),
                            f.updateActiveIndex(),
                            f.updateClasses(),
                            f.params.autoHeight && f.updateAutoHeight()) : (f.updateClasses(),
                            t = (f.params.slidesPerView === "auto" || f.params.slidesPerView > 1) && f.isEnd && !f.params.centeredSlides ? f.slideTo(f.slides.length - 1, 0, !1, !0) : f.slideTo(f.activeIndex, 0, !1, !0));
                            f.params.lazyLoading && !t && f.lazy && f.lazy.load();
                            f.params.allowSwipeToPrev = i;
                            f.params.allowSwipeToNext = r
                        }
                        ;
                        v = ["mousedown", "mousemove", "mouseup"];
                        window.navigator.pointerEnabled ? v = ["pointerdown", "pointermove", "pointerup"] : window.navigator.msPointerEnabled && (v = ["MSPointerDown", "MSPointerMove", "MSPointerUp"]);
                        f.touchEvents = {
                            start: f.support.touch || !f.params.simulateTouch ? "touchstart" : v[0],
                            move: f.support.touch || !f.params.simulateTouch ? "touchmove" : v[1],
                            end: f.support.touch || !f.params.simulateTouch ? "touchend" : v[2]
                        };
                        (window.navigator.pointerEnabled || window.navigator.msPointerEnabled) && (f.params.touchEventsTarget === "container" ? f.container : f.wrapper).addClass("swiper-wp8-" + f.params.direction);
                        f.initEvents = function(n) {
                            var r = n ? "off" : "on"
                              , t = n ? "removeEventListener" : "addEventListener"
                              , i = f.params.touchEventsTarget === "container" ? f.container[0] : f.wrapper[0]
                              , o = f.support.touch ? i : document
                              , e = f.params.nested ? !0 : !1;
                            f.browser.ie ? (i[t](f.touchEvents.start, f.onTouchStart, !1),
                            o[t](f.touchEvents.move, f.onTouchMove, e),
                            o[t](f.touchEvents.end, f.onTouchEnd, !1)) : (f.support.touch && (i[t](f.touchEvents.start, f.onTouchStart, !1),
                            i[t](f.touchEvents.move, f.onTouchMove, e),
                            i[t](f.touchEvents.end, f.onTouchEnd, !1)),
                            !u.simulateTouch || f.device.ios || f.device.android || (i[t]("mousedown", f.onTouchStart, !1),
                            document[t]("mousemove", f.onTouchMove, e),
                            document[t]("mouseup", f.onTouchEnd, !1)));
                            window[t]("resize", f.onResize);
                            f.params.nextButton && f.nextButton && f.nextButton.length > 0 && (f.nextButton[r]("click", f.onClickNext),
                            f.params.a11y && f.a11y && f.nextButton[r]("keydown", f.a11y.onEnterKey));
                            f.params.prevButton && f.prevButton && f.prevButton.length > 0 && (f.prevButton[r]("click", f.onClickPrev),
                            f.params.a11y && f.a11y && f.prevButton[r]("keydown", f.a11y.onEnterKey));
                            f.params.pagination && f.params.paginationClickable && (f.paginationContainer[r]("click", "." + f.params.bulletClass, f.onClickIndex),
                            f.params.a11y && f.a11y && f.paginationContainer[r]("keydown", "." + f.params.bulletClass, f.a11y.onEnterKey));
                            (f.params.preventClicks || f.params.preventClicksPropagation) && i[t]("click", f.preventClicks, !0)
                        }
                        ;
                        f.attachEvents = function() {
                            f.initEvents()
                        }
                        ;
                        f.detachEvents = function() {
                            f.initEvents(!0)
                        }
                        ;
                        f.allowClick = !0;
                        f.preventClicks = function(n) {
                            f.allowClick || (f.params.preventClicks && n.preventDefault(),
                            f.params.preventClicksPropagation && f.animating && (n.stopPropagation(),
                            n.stopImmediatePropagation()))
                        }
                        ;
                        f.onClickNext = function(n) {
                            (n.preventDefault(),
                            !f.isEnd || f.params.loop) && f.slideNext()
                        }
                        ;
                        f.onClickPrev = function(n) {
                            (n.preventDefault(),
                            !f.isBeginning || f.params.loop) && f.slidePrev()
                        }
                        ;
                        f.onClickIndex = function(t) {
                            t.preventDefault();
                            var i = n(this).index() * f.params.slidesPerGroup;
                            f.params.loop && (i = i + f.loopedSlides);
                            f.slideTo(i)
                        }
                        ;
                        f.updateClickedSlide = function(t) {
                            var r = st(t, "." + f.params.slideClass), o = !1, u, i, e;
                            if (r)
                                for (u = 0; u < f.slides.length; u++)
                                    f.slides[u] === r && (o = !0);
                            if (r && o)
                                f.clickedSlide = r,
                                f.clickedIndex = n(r).index();
                            else {
                                f.clickedSlide = undefined;
                                f.clickedIndex = undefined;
                                return
                            }
                            if (f.params.slideToClickedSlide && f.clickedIndex !== undefined && f.clickedIndex !== f.activeIndex)
                                if (i = f.clickedIndex,
                                f.params.loop) {
                                    if (f.animating)
                                        return;
                                    e = n(f.clickedSlide).attr("data-swiper-slide-index");
                                    f.params.centeredSlides ? i < f.loopedSlides - f.params.slidesPerView / 2 || i > f.slides.length - f.loopedSlides + f.params.slidesPerView / 2 ? (f.fixLoop(),
                                    i = f.wrapper.children("." + f.params.slideClass + '[data-swiper-slide-index="' + e + '"]:not(.swiper-slide-duplicate)').eq(0).index(),
                                    setTimeout(function() {
                                        f.slideTo(i)
                                    }, 0)) : f.slideTo(i) : i > f.slides.length - f.params.slidesPerView ? (f.fixLoop(),
                                    i = f.wrapper.children("." + f.params.slideClass + '[data-swiper-slide-index="' + e + '"]:not(.swiper-slide-duplicate)').eq(0).index(),
                                    setTimeout(function() {
                                        f.slideTo(i)
                                    }, 0)) : f.slideTo(i)
                                } else
                                    f.slideTo(i)
                        }
                        ;
                        var c, l, g, nt, w, e, s, tt, ht = "input, select, textarea, button", ct = Date.now(), b, a = [], it;
                        if (f.animating = !1,
                        f.touches = {
                            startX: 0,
                            startY: 0,
                            currentX: 0,
                            currentY: 0,
                            diff: 0
                        },
                        f.onTouchStart = function(t) {
                            var i, u, r;
                            if (t.originalEvent && (t = t.originalEvent),
                            rt = t.type === "touchstart",
                            rt || !("which"in t) || t.which !== 3) {
                                if (f.params.noSwiping && st(t, "." + f.params.noSwipingClass)) {
                                    f.allowClick = !0;
                                    return
                                }
                                (!f.params.swipeHandler || st(t, f.params.swipeHandler)) && ((i = f.touches.currentX = t.type === "touchstart" ? t.targetTouches[0].pageX : t.pageX,
                                u = f.touches.currentY = t.type === "touchstart" ? t.targetTouches[0].pageY : t.pageY,
                                f.device.ios && f.params.iOSEdgeSwipeDetection && i <= f.params.iOSEdgeSwipeThreshold) || (c = !0,
                                l = !1,
                                g = !0,
                                w = undefined,
                                ut = undefined,
                                f.touches.startX = i,
                                f.touches.startY = u,
                                nt = Date.now(),
                                f.allowClick = !0,
                                f.updateContainerSize(),
                                f.swipeDirection = undefined,
                                f.params.threshold > 0 && (tt = !1),
                                t.type !== "touchstart" && (r = !0,
                                n(t.target).is(ht) && (r = !1),
                                document.activeElement && n(document.activeElement).is(ht) && document.activeElement.blur(),
                                r && t.preventDefault()),
                                f.emit("onTouchStart", f, t)))
                            }
                        }
                        ,
                        f.onTouchMove = function(t) {
                            var o, i, r;
                            if (t.originalEvent && (t = t.originalEvent),
                            !rt || t.type !== "mousemove") {
                                if (t.preventedByNestedSwiper) {
                                    f.touches.startX = t.type === "touchmove" ? t.targetTouches[0].pageX : t.pageX;
                                    f.touches.startY = t.type === "touchmove" ? t.targetTouches[0].pageY : t.pageY;
                                    return
                                }
                                if (f.params.onlyExternal) {
                                    f.allowClick = !1;
                                    c && (f.touches.startX = f.touches.currentX = t.type === "touchmove" ? t.targetTouches[0].pageX : t.pageX,
                                    f.touches.startY = f.touches.currentY = t.type === "touchmove" ? t.targetTouches[0].pageY : t.pageY,
                                    nt = Date.now());
                                    return
                                }
                                if (rt && document.activeElement && t.target === document.activeElement && n(t.target).is(ht)) {
                                    l = !0;
                                    f.allowClick = !1;
                                    return
                                }
                                if ((g && f.emit("onTouchMove", f, t),
                                !t.targetTouches || !(t.targetTouches.length > 1)) && (f.touches.currentX = t.type === "touchmove" ? t.targetTouches[0].pageX : t.pageX,
                                f.touches.currentY = t.type === "touchmove" ? t.targetTouches[0].pageY : t.pageY,
                                typeof w == "undefined" && (o = Math.atan2(Math.abs(f.touches.currentY - f.touches.startY), Math.abs(f.touches.currentX - f.touches.startX)) * 180 / Math.PI,
                                w = f.isHorizontal() ? o > f.params.touchAngle : 90 - o > f.params.touchAngle),
                                w && f.emit("onTouchMoveOpposite", f, t),
                                typeof ut == "undefined" && f.browser.ieTouch && (f.touches.currentX !== f.touches.startX || f.touches.currentY !== f.touches.startY) && (ut = !0),
                                c)) {
                                    if (w) {
                                        c = !1;
                                        return
                                    }
                                    if ((ut || !f.browser.ieTouch) && (f.allowClick = !1,
                                    f.emit("onSliderMove", f, t),
                                    t.preventDefault(),
                                    f.params.touchMoveStopPropagation && !f.params.nested && t.stopPropagation(),
                                    l || (u.loop && f.fixLoop(),
                                    s = f.getWrapperTranslate(),
                                    f.setWrapperTransition(0),
                                    f.animating && f.wrapper.trigger("webkitTransitionEnd transitionend oTransitionEnd MSTransitionEnd msTransitionEnd"),
                                    f.params.autoplay && f.autoplaying && (f.params.autoplayDisableOnInteraction ? f.stopAutoplay() : f.pauseAutoplay()),
                                    it = !1,
                                    f.params.grabCursor && (f.container[0].style.cursor = "move",
                                    f.container[0].style.cursor = "-webkit-grabbing",
                                    f.container[0].style.cursor = "-moz-grabbin",
                                    f.container[0].style.cursor = "grabbing")),
                                    l = !0,
                                    i = f.touches.diff = f.isHorizontal() ? f.touches.currentX - f.touches.startX : f.touches.currentY - f.touches.startY,
                                    i = i * f.params.touchRatio,
                                    f.rtl && (i = -i),
                                    f.swipeDirection = i > 0 ? "prev" : "next",
                                    e = i + s,
                                    r = !0,
                                    i > 0 && e > f.minTranslate() ? (r = !1,
                                    f.params.resistance && (e = f.minTranslate() - 1 + Math.pow(-f.minTranslate() + s + i, f.params.resistanceRatio))) : i < 0 && e < f.maxTranslate() && (r = !1,
                                    f.params.resistance && (e = f.maxTranslate() + 1 - Math.pow(f.maxTranslate() - s - i, f.params.resistanceRatio))),
                                    r && (t.preventedByNestedSwiper = !0),
                                    !f.params.allowSwipeToNext && f.swipeDirection === "next" && e < s && (e = s),
                                    !f.params.allowSwipeToPrev && f.swipeDirection === "prev" && e > s && (e = s),
                                    f.params.followFinger)) {
                                        if (f.params.threshold > 0)
                                            if (Math.abs(i) > f.params.threshold || tt) {
                                                if (!tt) {
                                                    tt = !0;
                                                    f.touches.startX = f.touches.currentX;
                                                    f.touches.startY = f.touches.currentY;
                                                    e = s;
                                                    f.touches.diff = f.isHorizontal() ? f.touches.currentX - f.touches.startX : f.touches.currentY - f.touches.startY;
                                                    return
                                                }
                                            } else {
                                                e = s;
                                                return
                                            }
                                        (f.params.freeMode || f.params.watchSlidesProgress) && f.updateActiveIndex();
                                        f.params.freeMode && (a.length === 0 && a.push({
                                            position: f.touches[f.isHorizontal() ? "startX" : "startY"],
                                            time: nt
                                        }),
                                        a.push({
                                            position: f.touches[f.isHorizontal() ? "currentX" : "currentY"],
                                            time: (new window.Date).getTime()
                                        }));
                                        f.updateProgress(e);
                                        f.setWrapperTranslate(e)
                                    }
                                }
                            }
                        }
                        ,
                        f.onTouchEnd = function(t) {
                            var w, v, o, d, tt, y, h, p, r, u, rt, ft;
                            if (t.originalEvent && (t = t.originalEvent),
                            g && f.emit("onTouchEnd", f, t),
                            g = !1,
                            c) {
                                if (f.params.grabCursor && l && c && (f.container[0].style.cursor = "move",
                                f.container[0].style.cursor = "-webkit-grab",
                                f.container[0].style.cursor = "-moz-grab",
                                f.container[0].style.cursor = "grab"),
                                w = Date.now(),
                                v = w - nt,
                                f.allowClick && (f.updateClickedSlide(t),
                                f.emit("onTap", f, t),
                                v < 300 && w - ct > 300 && (b && clearTimeout(b),
                                b = setTimeout(function() {
                                    f && (f.params.paginationHide && f.paginationContainer.length > 0 && !n(t.target).hasClass(f.params.bulletClass) && f.paginationContainer.toggleClass(f.params.paginationHiddenClass),
                                    f.emit("onClick", f, t))
                                }, 300)),
                                v < 300 && w - ct < 300 && (b && clearTimeout(b),
                                f.emit("onDoubleTap", f, t))),
                                ct = Date.now(),
                                setTimeout(function() {
                                    f && (f.allowClick = !0)
                                }, 0),
                                !c || !l || !f.swipeDirection || f.touches.diff === 0 || e === s) {
                                    c = l = !1;
                                    return
                                }
                                if (c = l = !1,
                                o = f.params.followFinger ? f.rtl ? f.translate : -f.translate : -e,
                                f.params.freeMode) {
                                    if (o < -f.minTranslate()) {
                                        f.slideTo(f.activeIndex);
                                        return
                                    }
                                    if (o > -f.maxTranslate()) {
                                        f.slides.length < f.snapGrid.length ? f.slideTo(f.snapGrid.length - 1) : f.slideTo(f.slides.length - 1);
                                        return
                                    }
                                    if (f.params.freeModeMomentum) {
                                        if (a.length > 1) {
                                            var ut = a.pop()
                                              , et = a.pop()
                                              , st = ut.position - et.position
                                              , ot = ut.time - et.time;
                                            f.velocity = st / ot;
                                            f.velocity = f.velocity / 2;
                                            Math.abs(f.velocity) < f.params.freeModeMinimumVelocity && (f.velocity = 0);
                                            (ot > 150 || (new window.Date).getTime() - ut.time > 300) && (f.velocity = 0)
                                        } else
                                            f.velocity = 0;
                                        a.length = 0;
                                        var k = 1e3 * f.params.freeModeMomentumRatio
                                          , ht = f.velocity * k
                                          , i = f.translate + ht;
                                        if (f.rtl && (i = -i),
                                        d = !1,
                                        y = Math.abs(f.velocity) * 20 * f.params.freeModeMomentumBounceRatio,
                                        i < f.maxTranslate())
                                            f.params.freeModeMomentumBounce ? (i + f.maxTranslate() < -y && (i = f.maxTranslate() - y),
                                            tt = f.maxTranslate(),
                                            d = !0,
                                            it = !0) : i = f.maxTranslate();
                                        else if (i > f.minTranslate())
                                            f.params.freeModeMomentumBounce ? (i - f.minTranslate() > y && (i = f.minTranslate() + y),
                                            tt = f.minTranslate(),
                                            d = !0,
                                            it = !0) : i = f.minTranslate();
                                        else if (f.params.freeModeSticky) {
                                            for (h = 0,
                                            h = 0; h < f.snapGrid.length; h += 1)
                                                if (f.snapGrid[h] > -i) {
                                                    p = h;
                                                    break
                                                }
                                            i = Math.abs(f.snapGrid[p] - i) < Math.abs(f.snapGrid[p - 1] - i) || f.swipeDirection === "next" ? f.snapGrid[p] : f.snapGrid[p - 1];
                                            f.rtl || (i = -i)
                                        }
                                        if (f.velocity !== 0)
                                            k = f.rtl ? Math.abs((-i - f.translate) / f.velocity) : Math.abs((i - f.translate) / f.velocity);
                                        else if (f.params.freeModeSticky) {
                                            f.slideReset();
                                            return
                                        }
                                        f.params.freeModeMomentumBounce && d ? (f.updateProgress(tt),
                                        f.setWrapperTransition(k),
                                        f.setWrapperTranslate(i),
                                        f.onTransitionStart(),
                                        f.animating = !0,
                                        f.wrapper.transitionEnd(function() {
                                            f && it && (f.emit("onMomentumBounce", f),
                                            f.setWrapperTransition(f.params.speed),
                                            f.setWrapperTranslate(tt),
                                            f.wrapper.transitionEnd(function() {
                                                f && f.onTransitionEnd()
                                            }))
                                        })) : f.velocity ? (f.updateProgress(i),
                                        f.setWrapperTransition(k),
                                        f.setWrapperTranslate(i),
                                        f.onTransitionStart(),
                                        f.animating || (f.animating = !0,
                                        f.wrapper.transitionEnd(function() {
                                            f && f.onTransitionEnd()
                                        }))) : f.updateProgress(i);
                                        f.updateActiveIndex()
                                    }
                                    (!f.params.freeModeMomentum || v >= f.params.longSwipesMs) && (f.updateProgress(),
                                    f.updateActiveIndex());
                                    return
                                }
                                for (u = 0,
                                rt = f.slidesSizesGrid[0],
                                r = 0; r < f.slidesGrid.length; r += f.params.slidesPerGroup)
                                    typeof f.slidesGrid[r + f.params.slidesPerGroup] != "undefined" ? o >= f.slidesGrid[r] && o < f.slidesGrid[r + f.params.slidesPerGroup] && (u = r,
                                    rt = f.slidesGrid[r + f.params.slidesPerGroup] - f.slidesGrid[r]) : o >= f.slidesGrid[r] && (u = r,
                                    rt = f.slidesGrid[f.slidesGrid.length - 1] - f.slidesGrid[f.slidesGrid.length - 2]);
                                if (ft = (o - f.slidesGrid[u]) / rt,
                                v > f.params.longSwipesMs) {
                                    if (!f.params.longSwipes) {
                                        f.slideTo(f.activeIndex);
                                        return
                                    }
                                    f.swipeDirection === "next" && (ft >= f.params.longSwipesRatio ? f.slideTo(u + f.params.slidesPerGroup) : f.slideTo(u));
                                    f.swipeDirection === "prev" && (ft > 1 - f.params.longSwipesRatio ? f.slideTo(u + f.params.slidesPerGroup) : f.slideTo(u))
                                } else {
                                    if (!f.params.shortSwipes) {
                                        f.slideTo(f.activeIndex);
                                        return
                                    }
                                    f.swipeDirection === "next" && f.slideTo(u + f.params.slidesPerGroup);
                                    f.swipeDirection === "prev" && f.slideTo(u)
                                }
                            }
                        }
                        ,
                        f._slideTo = function(n, t) {
                            return f.slideTo(n, t, !0, !0)
                        }
                        ,
                        f.slideTo = function(n, t, i, r) {
                            var u, e;
                            for (typeof i == "undefined" && (i = !0),
                            typeof n == "undefined" && (n = 0),
                            n < 0 && (n = 0),
                            f.snapIndex = Math.floor(n / f.params.slidesPerGroup),
                            f.snapIndex >= f.snapGrid.length && (f.snapIndex = f.snapGrid.length - 1),
                            u = -f.snapGrid[f.snapIndex],
                            f.params.autoplay && f.autoplaying && (r || !f.params.autoplayDisableOnInteraction ? f.pauseAutoplay(t) : f.stopAutoplay()),
                            f.updateProgress(u),
                            e = 0; e < f.slidesGrid.length; e++)
                                -Math.floor(u * 100) >= Math.floor(f.slidesGrid[e] * 100) && (n = e);
                            if (!f.params.allowSwipeToNext && u < f.translate && u < f.minTranslate() || !f.params.allowSwipeToPrev && u > f.translate && u > f.maxTranslate() && (f.activeIndex || 0) !== n)
                                return !1;
                            if (typeof t == "undefined" && (t = f.params.speed),
                            f.previousIndex = f.activeIndex || 0,
                            f.activeIndex = n,
                            f.rtl && -u === f.translate || !f.rtl && u === f.translate)
                                return f.params.autoHeight && f.updateAutoHeight(),
                                f.updateClasses(),
                                f.params.effect !== "slide" && f.setWrapperTranslate(u),
                                !1;
                            f.updateClasses();
                            f.onTransitionStart(i);
                            if (t === 0) {
                                f.setWrapperTranslate(u);
                                f.setWrapperTransition(0);
                                f.onTransitionEnd(i)
                            } else
                                f.setWrapperTranslate(u),
                                f.setWrapperTransition(t),
                                f.animating || (f.animating = !0,
                                f.wrapper.transitionEnd(function() {
                                    if (f)
                                        f.onTransitionEnd(i)
                                }));
                            return !0
                        }
                        ,
                        f.onTransitionStart = function(n) {
                            typeof n == "undefined" && (n = !0);
                            f.params.autoHeight && f.updateAutoHeight();
                            f.lazy && f.lazy.onTransitionStart();
                            n && (f.emit("onTransitionStart", f),
                            f.activeIndex !== f.previousIndex && (f.emit("onSlideChangeStart", f),
                            f.activeIndex > f.previousIndex ? f.emit("onSlideNextStart", f) : f.emit("onSlidePrevStart", f)))
                        }
                        ,
                        f.onTransitionEnd = function(n) {
                            f.animating = !1;
                            f.setWrapperTransition(0);
                            typeof n == "undefined" && (n = !0);
                            f.lazy && f.lazy.onTransitionEnd();
                            n && (f.emit("onTransitionEnd", f),
                            f.activeIndex !== f.previousIndex && (f.emit("onSlideChangeEnd", f),
                            f.activeIndex > f.previousIndex ? f.emit("onSlideNextEnd", f) : f.emit("onSlidePrevEnd", f)));
                            f.params.hashnav && f.hashnav && f.hashnav.setHash()
                        }
                        ,
                        f.slideNext = function(n, t, i) {
                            if (f.params.loop) {
                                if (f.animating)
                                    return !1;
                                f.fixLoop();
                                var r = f.container[0].clientLeft;
                                return f.slideTo(f.activeIndex + f.params.slidesPerGroup, t, n, i)
                            }
                            return f.slideTo(f.activeIndex + f.params.slidesPerGroup, t, n, i)
                        }
                        ,
                        f._slideNext = function(n) {
                            return f.slideNext(!0, n, !0)
                        }
                        ,
                        f.slidePrev = function(n, t, i) {
                            if (f.params.loop) {
                                if (f.animating)
                                    return !1;
                                f.fixLoop();
                                var r = f.container[0].clientLeft;
                                return f.slideTo(f.activeIndex - 1, t, n, i)
                            }
                            return f.slideTo(f.activeIndex - 1, t, n, i)
                        }
                        ,
                        f._slidePrev = function(n) {
                            return f.slidePrev(!0, n, !0)
                        }
                        ,
                        f.slideReset = function(n, t) {
                            return f.slideTo(f.activeIndex, t, n)
                        }
                        ,
                        f.setWrapperTransition = function(n, t) {
                            f.wrapper.transition(n);
                            f.params.effect !== "slide" && f.effects[f.params.effect] && f.effects[f.params.effect].setTransition(n);
                            f.params.parallax && f.parallax && f.parallax.setTransition(n);
                            f.params.scrollbar && f.scrollbar && f.scrollbar.setTransition(n);
                            f.params.control && f.controller && f.controller.setTransition(n, t);
                            f.emit("onSetTransition", f, n)
                        }
                        ,
                        f.setWrapperTranslate = function(n, t, i) {
                            var r = 0, u = 0, o, e;
                            f.isHorizontal() ? r = f.rtl ? -n : n : u = n;
                            f.params.roundLengths && (r = d(r),
                            u = d(u));
                            f.params.virtualTranslate || (f.support.transforms3d ? f.wrapper.transform("translate3d(" + r + "px, " + u + "px, 0px)") : f.wrapper.transform("translate(" + r + "px, " + u + "px)"));
                            f.translate = f.isHorizontal() ? r : u;
                            e = f.maxTranslate() - f.minTranslate();
                            o = e === 0 ? 0 : (n - f.minTranslate()) / e;
                            o !== f.progress && f.updateProgress(n);
                            t && f.updateActiveIndex();
                            f.params.effect !== "slide" && f.effects[f.params.effect] && f.effects[f.params.effect].setTranslate(f.translate);
                            f.params.parallax && f.parallax && f.parallax.setTranslate(f.translate);
                            f.params.scrollbar && f.scrollbar && f.scrollbar.setTranslate(f.translate);
                            f.params.control && f.controller && f.controller.setTranslate(f.translate, i);
                            f.emit("onSetTranslate", f, f.translate)
                        }
                        ,
                        f.getTranslate = function(n, t) {
                            var u, i, r, e;
                            return (typeof t == "undefined" && (t = "x"),
                            f.params.virtualTranslate) ? f.rtl ? -f.translate : f.translate : (r = window.getComputedStyle(n, null),
                            window.WebKitCSSMatrix ? (i = r.transform || r.webkitTransform,
                            i.split(",").length > 6 && (i = i.split(", ").map(function(n) {
                                return n.replace(",", ".")
                            }).join(", ")),
                            e = new window.WebKitCSSMatrix(i === "none" ? "" : i)) : (e = r.MozTransform || r.OTransform || r.MsTransform || r.msTransform || r.transform || r.getPropertyValue("transform").replace("translate(", "matrix(1, 0, 0, 1,"),
                            u = e.toString().split(",")),
                            t === "x" && (i = window.WebKitCSSMatrix ? e.m41 : u.length === 16 ? parseFloat(u[12]) : parseFloat(u[4])),
                            t === "y" && (i = window.WebKitCSSMatrix ? e.m42 : u.length === 16 ? parseFloat(u[13]) : parseFloat(u[5])),
                            f.rtl && i && (i = -i),
                            i || 0)
                        }
                        ,
                        f.getWrapperTranslate = function(n) {
                            return typeof n == "undefined" && (n = f.isHorizontal() ? "x" : "y"),
                            f.getTranslate(f.wrapper[0], n)
                        }
                        ,
                        f.observers = [],
                        f.initObservers = function() {
                            var t, n;
                            if (f.params.observeParents)
                                for (t = f.container.parents(),
                                n = 0; n < t.length; n++)
                                    lt(t[n]);
                            lt(f.container[0], {
                                childList: !1
                            });
                            lt(f.wrapper[0], {
                                attributes: !1
                            })
                        }
                        ,
                        f.disconnectObservers = function() {
                            for (var n = 0; n < f.observers.length; n++)
                                f.observers[n].disconnect();
                            f.observers = []
                        }
                        ,
                        f.createLoop = function() {
                            var i, r, u, t;
                            for (f.wrapper.children("." + f.params.slideClass + "." + f.params.slideDuplicateClass).remove(),
                            i = f.wrapper.children("." + f.params.slideClass),
                            f.params.slidesPerView !== "auto" || f.params.loopedSlides || (f.params.loopedSlides = i.length),
                            f.loopedSlides = parseInt(f.params.loopedSlides || f.params.slidesPerView, 10),
                            f.loopedSlides = f.loopedSlides + f.params.loopAdditionalSlides,
                            f.loopedSlides > i.length && (f.loopedSlides = i.length),
                            r = [],
                            u = [],
                            i.each(function(t, e) {
                                var o = n(this);
                                t < f.loopedSlides && u.push(e);
                                t < i.length && t >= i.length - f.loopedSlides && r.push(e);
                                o.attr("data-swiper-slide-index", t)
                            }),
                            t = 0; t < u.length; t++)
                                f.wrapper.append(n(u[t].cloneNode(!0)).addClass(f.params.slideDuplicateClass));
                            for (t = r.length - 1; t >= 0; t--)
                                f.wrapper.prepend(n(r[t].cloneNode(!0)).addClass(f.params.slideDuplicateClass))
                        }
                        ,
                        f.destroyLoop = function() {
                            f.wrapper.children("." + f.params.slideClass + "." + f.params.slideDuplicateClass).remove();
                            f.slides.removeAttr("data-swiper-slide-index")
                        }
                        ,
                        f.reLoop = function(n) {
                            var t = f.activeIndex - f.loopedSlides;
                            f.destroyLoop();
                            f.createLoop();
                            f.updateSlidesSize();
                            n && f.slideTo(t + f.loopedSlides, 0, !1)
                        }
                        ,
                        f.fixLoop = function() {
                            var n;
                            f.activeIndex < f.loopedSlides ? (n = f.slides.length - f.loopedSlides * 3 + f.activeIndex,
                            n = n + f.loopedSlides,
                            f.slideTo(n, 0, !1, !0)) : (f.params.slidesPerView === "auto" && f.activeIndex >= f.loopedSlides * 2 || f.activeIndex > f.slides.length - f.params.slidesPerView * 2) && (n = -f.slides.length + f.activeIndex + f.loopedSlides,
                            n = n + f.loopedSlides,
                            f.slideTo(n, 0, !1, !0))
                        }
                        ,
                        f.appendSlide = function(n) {
                            if (f.params.loop && f.destroyLoop(),
                            typeof n == "object" && n.length)
                                for (var t = 0; t < n.length; t++)
                                    n[t] && f.wrapper.append(n[t]);
                            else
                                f.wrapper.append(n);
                            f.params.loop && f.createLoop();
                            f.params.observer && f.support.observer || f.update(!0)
                        }
                        ,
                        f.prependSlide = function(n) {
                            var i, t;
                            if (f.params.loop && f.destroyLoop(),
                            i = f.activeIndex + 1,
                            typeof n == "object" && n.length) {
                                for (t = 0; t < n.length; t++)
                                    n[t] && f.wrapper.prepend(n[t]);
                                i = f.activeIndex + n.length
                            } else
                                f.wrapper.prepend(n);
                            f.params.loop && f.createLoop();
                            f.params.observer && f.support.observer || f.update(!0);
                            f.slideTo(i, 0, !1)
                        }
                        ,
                        f.removeSlide = function(n) {
                            var t, i, r;
                            if (f.params.loop && (f.destroyLoop(),
                            f.slides = f.wrapper.children("." + f.params.slideClass)),
                            t = f.activeIndex,
                            typeof n == "object" && n.length) {
                                for (r = 0; r < n.length; r++)
                                    i = n[r],
                                    f.slides[i] && f.slides.eq(i).remove(),
                                    i < t && t--;
                                t = Math.max(t, 0)
                            } else
                                i = n,
                                f.slides[i] && f.slides.eq(i).remove(),
                                i < t && t--,
                                t = Math.max(t, 0);
                            f.params.loop && f.createLoop();
                            f.params.observer && f.support.observer || f.update(!0);
                            f.params.loop ? f.slideTo(t + f.loopedSlides, 0, !1) : f.slideTo(t, 0, !1)
                        }
                        ,
                        f.removeAllSlides = function() {
                            for (var t = [], n = 0; n < f.slides.length; n++)
                                t.push(n);
                            f.removeSlide(t)
                        }
                        ,
                        f.effects = {
                            fade: {
                                setTranslate: function() {
                                    for (var r, u, t = 0; t < f.slides.length; t++) {
                                        var i = f.slides.eq(t)
                                          , e = i[0].swiperSlideOffset
                                          , n = -e;
                                        f.params.virtualTranslate || (n = n - f.translate);
                                        r = 0;
                                        f.isHorizontal() || (r = n,
                                        n = 0);
                                        u = f.params.fade.crossFade ? Math.max(1 - Math.abs(i[0].progress), 0) : 1 + Math.min(Math.max(i[0].progress, -1), 0);
                                        i.css({
                                            opacity: u
                                        }).transform("translate3d(" + n + "px, " + r + "px, 0px)")
                                    }
                                },
                                setTransition: function(n) {
                                    if (f.slides.transition(n),
                                    f.params.virtualTranslate && n !== 0) {
                                        var t = !1;
                                        f.slides.transitionEnd(function() {
                                            var i, n;
                                            if (!t && f)
                                                for (t = !0,
                                                f.animating = !1,
                                                i = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"],
                                                n = 0; n < i.length; n++)
                                                    f.wrapper.trigger(i[n])
                                        })
                                    }
                                }
                            },
                            flip: {
                                setTranslate: function() {
                                    for (var t, i, r, u, o = 0; o < f.slides.length; o++) {
                                        t = f.slides.eq(o);
                                        i = t[0].progress;
                                        f.params.flip.limitRotation && (i = Math.max(Math.min(t[0].progress, 1), -1));
                                        var l = t[0].swiperSlideOffset
                                          , a = -180 * i
                                          , e = a
                                          , h = 0
                                          , s = -l
                                          , c = 0;
                                        f.isHorizontal() ? f.rtl && (e = -e) : (c = s,
                                        s = 0,
                                        h = -e,
                                        e = 0);
                                        t[0].style.zIndex = -Math.abs(Math.round(i)) + f.slides.length;
                                        f.params.flip.slideShadows && (r = f.isHorizontal() ? t.find(".swiper-slide-shadow-left") : t.find(".swiper-slide-shadow-top"),
                                        u = f.isHorizontal() ? t.find(".swiper-slide-shadow-right") : t.find(".swiper-slide-shadow-bottom"),
                                        r.length === 0 && (r = n('<div class="swiper-slide-shadow-' + (f.isHorizontal() ? "left" : "top") + '"><\/div>'),
                                        t.append(r)),
                                        u.length === 0 && (u = n('<div class="swiper-slide-shadow-' + (f.isHorizontal() ? "right" : "bottom") + '"><\/div>'),
                                        t.append(u)),
                                        r.length && (r[0].style.opacity = Math.max(-i, 0)),
                                        u.length && (u[0].style.opacity = Math.max(i, 0)));
                                        t.transform("translate3d(" + s + "px, " + c + "px, 0px) rotateX(" + h + "deg) rotateY(" + e + "deg)")
                                    }
                                },
                                setTransition: function(t) {
                                    if (f.slides.transition(t).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(t),
                                    f.params.virtualTranslate && t !== 0) {
                                        var i = !1;
                                        f.slides.eq(f.activeIndex).transitionEnd(function() {
                                            var r, t;
                                            if (!i && f && n(this).hasClass(f.params.slideActiveClass))
                                                for (i = !0,
                                                f.animating = !1,
                                                r = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"],
                                                t = 0; t < r.length; t++)
                                                    f.wrapper.trigger(r[t])
                                        })
                                    }
                                }
                            },
                            cube: {
                                setTranslate: function() {
                                    var e = 0, t, i, y, h, c, b;
                                    for (f.params.cube.shadow && (f.isHorizontal() ? (t = f.wrapper.find(".swiper-cube-shadow"),
                                    t.length === 0 && (t = n('<div class="swiper-cube-shadow"><\/div>'),
                                    f.wrapper.append(t)),
                                    t.css({
                                        height: f.width + "px"
                                    })) : (t = f.container.find(".swiper-cube-shadow"),
                                    t.length === 0 && (t = n('<div class="swiper-cube-shadow"><\/div>'),
                                    f.container.append(t)))),
                                    i = 0; i < f.slides.length; i++) {
                                        var u = f.slides.eq(i)
                                          , o = i * 90
                                          , l = Math.floor(o / 360);
                                        f.rtl && (o = -o,
                                        l = Math.floor(-o / 360));
                                        var s = Math.max(Math.min(u[0].progress, 1), -1)
                                          , r = 0
                                          , v = 0
                                          , a = 0;
                                        i % 4 == 0 ? (r = -l * 4 * f.size,
                                        a = 0) : (i - 1) % 4 == 0 ? (r = 0,
                                        a = -l * 4 * f.size) : (i - 2) % 4 == 0 ? (r = f.size + l * 4 * f.size,
                                        a = f.size) : (i - 3) % 4 == 0 && (r = -f.size,
                                        a = 3 * f.size + f.size * 4 * l);
                                        f.rtl && (r = -r);
                                        f.isHorizontal() || (v = r,
                                        r = 0);
                                        y = "rotateX(" + (f.isHorizontal() ? 0 : -o) + "deg) rotateY(" + (f.isHorizontal() ? o : 0) + "deg) translate3d(" + r + "px, " + v + "px, " + a + "px)";
                                        s <= 1 && s > -1 && (e = i * 90 + s * 90,
                                        f.rtl && (e = -i * 90 - s * 90));
                                        u.transform(y);
                                        f.params.cube.slideShadows && (h = f.isHorizontal() ? u.find(".swiper-slide-shadow-left") : u.find(".swiper-slide-shadow-top"),
                                        c = f.isHorizontal() ? u.find(".swiper-slide-shadow-right") : u.find(".swiper-slide-shadow-bottom"),
                                        h.length === 0 && (h = n('<div class="swiper-slide-shadow-' + (f.isHorizontal() ? "left" : "top") + '"><\/div>'),
                                        u.append(h)),
                                        c.length === 0 && (c = n('<div class="swiper-slide-shadow-' + (f.isHorizontal() ? "right" : "bottom") + '"><\/div>'),
                                        u.append(c)),
                                        h.length && (h[0].style.opacity = Math.max(-s, 0)),
                                        c.length && (c[0].style.opacity = Math.max(s, 0)))
                                    }
                                    if (f.wrapper.css({
                                        "-webkit-transform-origin": "50% 50% -" + f.size / 2 + "px",
                                        "-moz-transform-origin": "50% 50% -" + f.size / 2 + "px",
                                        "-ms-transform-origin": "50% 50% -" + f.size / 2 + "px",
                                        "transform-origin": "50% 50% -" + f.size / 2 + "px"
                                    }),
                                    f.params.cube.shadow)
                                        if (f.isHorizontal())
                                            t.transform("translate3d(0px, " + (f.width / 2 + f.params.cube.shadowOffset) + "px, " + -f.width / 2 + "px) rotateX(90deg) rotateZ(0deg) scale(" + f.params.cube.shadowScale + ")");
                                        else {
                                            var p = Math.abs(e) - Math.floor(Math.abs(e) / 90) * 90
                                              , k = 1.5 - (Math.sin(p * 2 * Math.PI / 360) / 2 + Math.cos(p * 2 * Math.PI / 360) / 2)
                                              , d = f.params.cube.shadowScale
                                              , w = f.params.cube.shadowScale / k
                                              , g = f.params.cube.shadowOffset;
                                            t.transform("scale3d(" + d + ", 1, " + w + ") translate3d(0px, " + (f.height / 2 + g) + "px, " + -f.height / 2 / w + "px) rotateX(-90deg)")
                                        }
                                    b = f.isSafari || f.isUiWebView ? -f.size / 2 : 0;
                                    f.wrapper.transform("translate3d(0px,0," + b + "px) rotateX(" + (f.isHorizontal() ? 0 : e) + "deg) rotateY(" + (f.isHorizontal() ? -e : 0) + "deg)")
                                },
                                setTransition: function(n) {
                                    f.slides.transition(n).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(n);
                                    f.params.cube.shadow && !f.isHorizontal() && f.container.find(".swiper-cube-shadow").transition(n)
                                }
                            },
                            coverflow: {
                                setTranslate: function() {
                                    for (var w, r, u, b, a = f.translate, v = f.isHorizontal() ? -a + f.width / 2 : -a + f.height / 2, y = f.isHorizontal() ? f.params.coverflow.rotate : -f.params.coverflow.rotate, k = f.params.coverflow.depth, e = 0, d = f.slides.length; e < d; e++) {
                                        var i = f.slides.eq(e)
                                          , p = f.slidesSizesGrid[e]
                                          , g = i[0].swiperSlideOffset
                                          , t = (v - g - p / 2) / p * f.params.coverflow.modifier
                                          , o = f.isHorizontal() ? y * t : 0
                                          , s = f.isHorizontal() ? 0 : y * t
                                          , h = -k * Math.abs(t)
                                          , c = f.isHorizontal() ? 0 : f.params.coverflow.stretch * t
                                          , l = f.isHorizontal() ? f.params.coverflow.stretch * t : 0;
                                        Math.abs(l) < .001 && (l = 0);
                                        Math.abs(c) < .001 && (c = 0);
                                        Math.abs(h) < .001 && (h = 0);
                                        Math.abs(o) < .001 && (o = 0);
                                        Math.abs(s) < .001 && (s = 0);
                                        w = "translate3d(" + l + "px," + c + "px," + h + "px)  rotateX(" + s + "deg) rotateY(" + o + "deg)";
                                        i.transform(w);
                                        i[0].style.zIndex = -Math.abs(Math.round(t)) + 1;
                                        f.params.coverflow.slideShadows && (r = f.isHorizontal() ? i.find(".swiper-slide-shadow-left") : i.find(".swiper-slide-shadow-top"),
                                        u = f.isHorizontal() ? i.find(".swiper-slide-shadow-right") : i.find(".swiper-slide-shadow-bottom"),
                                        r.length === 0 && (r = n('<div class="swiper-slide-shadow-' + (f.isHorizontal() ? "left" : "top") + '"><\/div>'),
                                        i.append(r)),
                                        u.length === 0 && (u = n('<div class="swiper-slide-shadow-' + (f.isHorizontal() ? "right" : "bottom") + '"><\/div>'),
                                        i.append(u)),
                                        r.length && (r[0].style.opacity = t > 0 ? t : 0),
                                        u.length && (u[0].style.opacity = -t > 0 ? -t : 0))
                                    }
                                    f.browser.ie && (b = f.wrapper[0].style,
                                    b.perspectiveOrigin = v + "px 50%")
                                },
                                setTransition: function(n) {
                                    f.slides.transition(n).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(n)
                                }
                            }
                        },
                        f.lazy = {
                            initialImageLoaded: !1,
                            loadImageInSlide: function(t, i) {
                                if (typeof t != "undefined" && (typeof i == "undefined" && (i = !0),
                                f.slides.length !== 0)) {
                                    var r = f.slides.eq(t)
                                      , u = r.find(".swiper-lazy:not(.swiper-lazy-loaded):not(.swiper-lazy-loading)");
                                    (!r.hasClass("swiper-lazy") || r.hasClass("swiper-lazy-loaded") || r.hasClass("swiper-lazy-loading") || (u = u.add(r[0])),
                                    u.length !== 0) && u.each(function() {
                                        var t = n(this);
                                        t.addClass("swiper-lazy-loading");
                                        var u = t.attr("data-background")
                                          , e = t.attr("data-src")
                                          , o = t.attr("data-srcset");
                                        f.loadImage(t[0], e || u, o, !1, function() {
                                            var n, s, h;
                                            u ? (t.css("background-image", 'url("' + u + '")'),
                                            t.removeAttr("data-background")) : (o && (t.attr("srcset", o),
                                            t.removeAttr("data-srcset")),
                                            e && (t.attr("src", e),
                                            t.removeAttr("data-src")));
                                            t.addClass("swiper-lazy-loaded").removeClass("swiper-lazy-loading");
                                            r.find(".swiper-lazy-preloader, .preloader").remove();
                                            f.params.loop && i && (n = r.attr("data-swiper-slide-index"),
                                            r.hasClass(f.params.slideDuplicateClass) ? (s = f.wrapper.children('[data-swiper-slide-index="' + n + '"]:not(.' + f.params.slideDuplicateClass + ")"),
                                            f.lazy.loadImageInSlide(s.index(), !1)) : (h = f.wrapper.children("." + f.params.slideDuplicateClass + '[data-swiper-slide-index="' + n + '"]'),
                                            f.lazy.loadImageInSlide(h.index(), !1)));
                                            f.emit("onLazyImageReady", f, r[0], t[0])
                                        });
                                        f.emit("onLazyImageLoad", f, r[0], t[0])
                                    })
                                }
                            },
                            load: function() {
                                var t, r, u;
                                if (f.params.watchSlidesVisibility)
                                    f.wrapper.children("." + f.params.slideVisibleClass).each(function() {
                                        f.lazy.loadImageInSlide(n(this).index())
                                    });
                                else if (f.params.slidesPerView > 1)
                                    for (t = f.activeIndex; t < f.activeIndex + f.params.slidesPerView; t++)
                                        f.slides[t] && f.lazy.loadImageInSlide(t);
                                else
                                    f.lazy.loadImageInSlide(f.activeIndex);
                                if (f.params.lazyLoadingInPrevNext)
                                    if (f.params.slidesPerView > 1 || f.params.lazyLoadingInPrevNextAmount && f.params.lazyLoadingInPrevNextAmount > 1) {
                                        var e = f.params.lazyLoadingInPrevNextAmount
                                          , i = f.params.slidesPerView
                                          , o = Math.min(f.activeIndex + i + Math.max(e, i), f.slides.length)
                                          , s = Math.max(f.activeIndex - Math.max(i, e), 0);
                                        for (t = f.activeIndex + f.params.slidesPerView; t < o; t++)
                                            f.slides[t] && f.lazy.loadImageInSlide(t);
                                        for (t = s; t < f.activeIndex; t++)
                                            f.slides[t] && f.lazy.loadImageInSlide(t)
                                    } else
                                        r = f.wrapper.children("." + f.params.slideNextClass),
                                        r.length > 0 && f.lazy.loadImageInSlide(r.index()),
                                        u = f.wrapper.children("." + f.params.slidePrevClass),
                                        u.length > 0 && f.lazy.loadImageInSlide(u.index())
                            },
                            onTransitionStart: function() {
                                f.params.lazyLoading && (!f.params.lazyLoadingOnTransitionStart && (f.params.lazyLoadingOnTransitionStart || f.lazy.initialImageLoaded) || f.lazy.load())
                            },
                            onTransitionEnd: function() {
                                f.params.lazyLoading && !f.params.lazyLoadingOnTransitionStart && f.lazy.load()
                            }
                        },
                        f.scrollbar = {
                            isTouched: !1,
                            setDragPosition: function(n) {
                                var i = f.scrollbar
                                  , e = f.isHorizontal() ? n.type === "touchstart" || n.type === "touchmove" ? n.targetTouches[0].pageX : n.pageX || n.clientX : n.type === "touchstart" || n.type === "touchmove" ? n.targetTouches[0].pageY : n.pageY || n.clientY
                                  , t = e - i.track.offset()[f.isHorizontal() ? "left" : "top"] - i.dragSize / 2
                                  , r = -f.minTranslate() * i.moveDivider
                                  , u = -f.maxTranslate() * i.moveDivider;
                                t < r ? t = r : t > u && (t = u);
                                t = -t / i.moveDivider;
                                f.updateProgress(t);
                                f.setWrapperTranslate(t, !0)
                            },
                            dragStart: function(n) {
                                var t = f.scrollbar;
                                t.isTouched = !0;
                                n.preventDefault();
                                n.stopPropagation();
                                t.setDragPosition(n);
                                clearTimeout(t.dragTimeout);
                                t.track.transition(0);
                                f.params.scrollbarHide && t.track.css("opacity", 1);
                                f.wrapper.transition(100);
                                t.drag.transition(100);
                                f.emit("onScrollbarDragStart", f)
                            },
                            dragMove: function(n) {
                                var t = f.scrollbar;
                                t.isTouched && (n.preventDefault ? n.preventDefault() : n.returnValue = !1,
                                t.setDragPosition(n),
                                f.wrapper.transition(0),
                                t.track.transition(0),
                                t.drag.transition(0),
                                f.emit("onScrollbarDragMove", f))
                            },
                            dragEnd: function() {
                                var n = f.scrollbar;
                                n.isTouched && (n.isTouched = !1,
                                f.params.scrollbarHide && (clearTimeout(n.dragTimeout),
                                n.dragTimeout = setTimeout(function() {
                                    n.track.css("opacity", 0);
                                    n.track.transition(400)
                                }, 1e3)),
                                f.emit("onScrollbarDragEnd", f),
                                f.params.scrollbarSnapOnRelease && f.slideReset())
                            },
                            enableDraggable: function() {
                                var t = f.scrollbar
                                  , i = f.support.touch ? t.track : document;
                                n(t.track).on(f.touchEvents.start, t.dragStart);
                                n(i).on(f.touchEvents.move, t.dragMove);
                                n(i).on(f.touchEvents.end, t.dragEnd)
                            },
                            disableDraggable: function() {
                                var t = f.scrollbar
                                  , i = f.support.touch ? t.track : document;
                                n(t.track).off(f.touchEvents.start, t.dragStart);
                                n(i).off(f.touchEvents.move, t.dragMove);
                                n(i).off(f.touchEvents.end, t.dragEnd)
                            },
                            set: function() {
                                if (f.params.scrollbar) {
                                    var t = f.scrollbar;
                                    t.track = n(f.params.scrollbar);
                                    f.params.uniqueNavElements && typeof f.params.scrollbar == "string" && t.track.length > 1 && f.container.find(f.params.scrollbar).length === 1 && (t.track = f.container.find(f.params.scrollbar));
                                    t.drag = t.track.find(".swiper-scrollbar-drag");
                                    t.drag.length === 0 && (t.drag = n('<div class="swiper-scrollbar-drag"><\/div>'),
                                    t.track.append(t.drag));
                                    t.drag[0].style.width = "";
                                    t.drag[0].style.height = "";
                                    t.trackSize = f.isHorizontal() ? t.track[0].offsetWidth : t.track[0].offsetHeight;
                                    t.divider = f.size / f.virtualSize;
                                    t.moveDivider = t.divider * (t.trackSize / f.size);
                                    t.dragSize = t.trackSize * t.divider;
                                    f.isHorizontal() ? t.drag[0].style.width = t.dragSize + "px" : t.drag[0].style.height = t.dragSize + "px";
                                    t.track[0].style.display = t.divider >= 1 ? "none" : "";
                                    f.params.scrollbarHide && (t.track[0].style.opacity = 0)
                                }
                            },
                            setTranslate: function() {
                                if (f.params.scrollbar) {
                                    var n = f.scrollbar, r = f.translate || 0, t, i = n.dragSize;
                                    t = (n.trackSize - n.dragSize) * f.progress;
                                    f.rtl && f.isHorizontal() ? (t = -t,
                                    t > 0 ? (i = n.dragSize - t,
                                    t = 0) : -t + n.dragSize > n.trackSize && (i = n.trackSize + t)) : t < 0 ? (i = n.dragSize + t,
                                    t = 0) : t + n.dragSize > n.trackSize && (i = n.trackSize - t);
                                    f.isHorizontal() ? (f.support.transforms3d ? n.drag.transform("translate3d(" + t + "px, 0, 0)") : n.drag.transform("translateX(" + t + "px)"),
                                    n.drag[0].style.width = i + "px") : (f.support.transforms3d ? n.drag.transform("translate3d(0px, " + t + "px, 0)") : n.drag.transform("translateY(" + t + "px)"),
                                    n.drag[0].style.height = i + "px");
                                    f.params.scrollbarHide && (clearTimeout(n.timeout),
                                    n.track[0].style.opacity = 1,
                                    n.timeout = setTimeout(function() {
                                        n.track[0].style.opacity = 0;
                                        n.track.transition(400)
                                    }, 1e3))
                                }
                            },
                            setTransition: function(n) {
                                f.params.scrollbar && f.scrollbar.drag.transition(n)
                            }
                        },
                        f.controller = {
                            LinearSpline: function(n, t) {
                                var i, r, f, u;
                                this.x = n;
                                this.y = t;
                                this.lastIndex = n.length - 1;
                                f = this.x.length;
                                this.interpolate = function(n) {
                                    return n ? (r = u(this.x, n),
                                    i = r - 1,
                                    (n - this.x[i]) * (this.y[r] - this.y[i]) / (this.x[r] - this.x[i]) + this.y[i]) : 0
                                }
                                ;
                                u = function() {
                                    var n, t, i;
                                    return function(r, u) {
                                        for (t = -1,
                                        n = r.length; n - t > 1; )
                                            r[i = n + t >> 1] <= u ? t = i : n = i;
                                        return n
                                    }
                                }()
                            },
                            getInterpolateFunction: function(n) {
                                f.controller.spline || (f.controller.spline = f.params.loop ? new f.controller.LinearSpline(f.slidesGrid,n.slidesGrid) : new f.controller.LinearSpline(f.snapGrid,n.snapGrid))
                            },
                            setTranslate: function(n, i) {
                                function s(t) {
                                    n = t.rtl && t.params.direction === "horizontal" ? -f.translate : f.translate;
                                    f.params.controlBy === "slide" && (f.controller.getInterpolateFunction(t),
                                    u = -f.controller.spline.interpolate(-n));
                                    u && f.params.controlBy !== "container" || (o = (t.maxTranslate() - t.minTranslate()) / (f.maxTranslate() - f.minTranslate()),
                                    u = (n - f.minTranslate()) * o + t.minTranslate());
                                    f.params.controlInverse && (u = t.maxTranslate() - u);
                                    t.updateProgress(u);
                                    t.setWrapperTranslate(u, !1, f);
                                    t.updateActiveIndex()
                                }
                                var r = f.params.control, o, u, e;
                                if (f.isArray(r))
                                    for (e = 0; e < r.length; e++)
                                        r[e] !== i && r[e]instanceof t && s(r[e]);
                                else
                                    r instanceof t && i !== r && s(r)
                            },
                            setTransition: function(n, i) {
                                function e(t) {
                                    t.setWrapperTransition(n, f);
                                    n !== 0 && (t.onTransitionStart(),
                                    t.wrapper.transitionEnd(function() {
                                        r && (t.params.loop && f.params.controlBy === "slide" && t.fixLoop(),
                                        t.onTransitionEnd())
                                    }))
                                }
                                var r = f.params.control, u;
                                if (f.isArray(r))
                                    for (u = 0; u < r.length; u++)
                                        r[u] !== i && r[u]instanceof t && e(r[u]);
                                else
                                    r instanceof t && i !== r && e(r)
                            }
                        },
                        f.hashnav = {
                            init: function() {
                                var i, r, n, u, t, e, o;
                                if (f.params.hashnav && (f.hashnav.initialized = !0,
                                i = document.location.hash.replace("#", ""),
                                i))
                                    for (r = 0,
                                    n = 0,
                                    u = f.slides.length; n < u; n++)
                                        t = f.slides.eq(n),
                                        e = t.attr("data-hash"),
                                        e !== i || t.hasClass(f.params.slideDuplicateClass) || (o = t.index(),
                                        f.slideTo(o, r, f.params.runCallbacksOnInit, !0))
                            },
                            setHash: function() {
                                f.hashnav.initialized && f.params.hashnav && (document.location.hash = f.slides.eq(f.activeIndex).attr("data-hash") || "")
                            }
                        },
                        f.disableKeyboardControl = function() {
                            f.params.keyboardControl = !1;
                            n(document).off("keydown", wt)
                        }
                        ,
                        f.enableKeyboardControl = function() {
                            f.params.keyboardControl = !0;
                            n(document).on("keydown", wt)
                        }
                        ,
                        f.mousewheel = {
                            event: !1,
                            lastScrollTime: (new window.Date).getTime()
                        },
                        f.params.mousewheelControl) {
                            try {
                                new window.WheelEvent("wheel");
                                f.mousewheel.event = "wheel"
                            } catch (dt) {
                                (window.WheelEvent || f.container[0] && "wheel"in f.container[0]) && (f.mousewheel.event = "wheel")
                            }
                            !f.mousewheel.event && window.WheelEvent;
                            f.mousewheel.event || document.onmousewheel === undefined || (f.mousewheel.event = "mousewheel");
                            f.mousewheel.event || (f.mousewheel.event = "DOMMouseScroll")
                        }
                        f.disableMousewheelControl = function() {
                            return f.mousewheel.event ? (f.container.off(f.mousewheel.event, bt),
                            !0) : !1
                        }
                        ;
                        f.enableMousewheelControl = function() {
                            if (!f.mousewheel.event)
                                return !1;
                            f.container.on(f.mousewheel.event, bt);
                            return !0
                        }
                        ;
                        f.parallax = {
                            setTranslate: function() {
                                f.container.children("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function() {
                                    kt(this, f.progress)
                                });
                                f.slides.each(function() {
                                    var t = n(this);
                                    t.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function() {
                                        var n = Math.min(Math.max(t[0].progress, -1), 1);
                                        kt(this, n)
                                    })
                                })
                            },
                            setTransition: function(t) {
                                typeof t == "undefined" && (t = f.params.speed);
                                f.container.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function() {
                                    var i = n(this)
                                      , r = parseInt(i.attr("data-swiper-parallax-duration"), 10) || t;
                                    t === 0 && (r = 0);
                                    i.transition(r)
                                })
                            }
                        };
                        f._plugins = [];
                        for (at in f.plugins)
                            vt = f.plugins[at](f, f.params[at]),
                            vt && f._plugins.push(vt);
                        return f.callPlugins = function(n) {
                            for (var t = 0; t < f._plugins.length; t++)
                                n in f._plugins[t] && f._plugins[t][n](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5])
                        }
                        ,
                        f.emitterEventListeners = {},
                        f.emit = function(n) {
                            f.params[n] && f.params[n](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
                            var t;
                            if (f.emitterEventListeners[n])
                                for (t = 0; t < f.emitterEventListeners[n].length; t++)
                                    f.emitterEventListeners[n][t](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
                            f.callPlugins && f.callPlugins(n, arguments[1], arguments[2], arguments[3], arguments[4], arguments[5])
                        }
                        ,
                        f.on = function(n, t) {
                            return n = yt(n),
                            f.emitterEventListeners[n] || (f.emitterEventListeners[n] = []),
                            f.emitterEventListeners[n].push(t),
                            f
                        }
                        ,
                        f.off = function(n, t) {
                            var i;
                            if (n = yt(n),
                            typeof t == "undefined")
                                return f.emitterEventListeners[n] = [],
                                f;
                            if (f.emitterEventListeners[n] && f.emitterEventListeners[n].length !== 0) {
                                for (i = 0; i < f.emitterEventListeners[n].length; i++)
                                    f.emitterEventListeners[n][i] === t && f.emitterEventListeners[n].splice(i, 1);
                                return f
                            }
                        }
                        ,
                        f.once = function(n, t) {
                            n = yt(n);
                            var i = function() {
                                t(arguments[0], arguments[1], arguments[2], arguments[3], arguments[4]);
                                f.off(n, i)
                            };
                            f.on(n, i);
                            return f
                        }
                        ,
                        f.a11y = {
                            makeFocusable: function(n) {
                                return n.attr("tabIndex", "0"),
                                n
                            },
                            addRole: function(n, t) {
                                return n.attr("role", t),
                                n
                            },
                            addLabel: function(n, t) {
                                return n.attr("aria-label", t),
                                n
                            },
                            disable: function(n) {
                                return n.attr("aria-disabled", !0),
                                n
                            },
                            enable: function(n) {
                                return n.attr("aria-disabled", !1),
                                n
                            },
                            onEnterKey: function(t) {
                                if (t.keyCode === 13) {
                                    if (n(t.target).is(f.params.nextButton)) {
                                        f.onClickNext(t);
                                        f.isEnd ? f.a11y.notify(f.params.lastSlideMessage) : f.a11y.notify(f.params.nextSlideMessage)
                                    } else if (n(t.target).is(f.params.prevButton)) {
                                        f.onClickPrev(t);
                                        f.isBeginning ? f.a11y.notify(f.params.firstSlideMessage) : f.a11y.notify(f.params.prevSlideMessage)
                                    }
                                    n(t.target).is("." + f.params.bulletClass) && n(t.target)[0].click()
                                }
                            },
                            liveRegion: n('<span class="swiper-notification" aria-live="assertive" aria-atomic="true"><\/span>'),
                            notify: function(n) {
                                var t = f.a11y.liveRegion;
                                t.length !== 0 && (t.html(""),
                                t.html(n))
                            },
                            init: function() {
                                f.params.nextButton && f.nextButton && f.nextButton.length > 0 && (f.a11y.makeFocusable(f.nextButton),
                                f.a11y.addRole(f.nextButton, "button"),
                                f.a11y.addLabel(f.nextButton, f.params.nextSlideMessage));
                                f.params.prevButton && f.prevButton && f.prevButton.length > 0 && (f.a11y.makeFocusable(f.prevButton),
                                f.a11y.addRole(f.prevButton, "button"),
                                f.a11y.addLabel(f.prevButton, f.params.prevSlideMessage));
                                n(f.container).append(f.a11y.liveRegion)
                            },
                            initPagination: function() {
                                f.params.pagination && f.params.paginationClickable && f.bullets && f.bullets.length && f.bullets.each(function() {
                                    var t = n(this);
                                    f.a11y.makeFocusable(t);
                                    f.a11y.addRole(t, "button");
                                    f.a11y.addLabel(t, f.params.paginationBulletMessage.replace(/{{index}}/, t.index() + 1))
                                })
                            },
                            destroy: function() {
                                f.a11y.liveRegion && f.a11y.liveRegion.length > 0 && f.a11y.liveRegion.remove()
                            }
                        },
                        f.init = function() {
                            f.params.loop && f.createLoop();
                            f.updateContainerSize();
                            f.updateSlidesSize();
                            f.updatePagination();
                            f.params.scrollbar && f.scrollbar && (f.scrollbar.set(),
                            f.params.scrollbarDraggable && f.scrollbar.enableDraggable());
                            f.params.effect !== "slide" && f.effects[f.params.effect] && (f.params.loop || f.updateProgress(),
                            f.effects[f.params.effect].setTranslate());
                            f.params.loop ? f.slideTo(f.params.initialSlide + f.loopedSlides, 0, f.params.runCallbacksOnInit) : (f.slideTo(f.params.initialSlide, 0, f.params.runCallbacksOnInit),
                            f.params.initialSlide === 0 && (f.parallax && f.params.parallax && f.parallax.setTranslate(),
                            f.lazy && f.params.lazyLoading && (f.lazy.load(),
                            f.lazy.initialImageLoaded = !0)));
                            f.attachEvents();
                            f.params.observer && f.support.observer && f.initObservers();
                            f.params.preloadImages && !f.params.lazyLoading && f.preloadImages();
                            f.params.autoplay && f.startAutoplay();
                            f.params.keyboardControl && f.enableKeyboardControl && f.enableKeyboardControl();
                            f.params.mousewheelControl && f.enableMousewheelControl && f.enableMousewheelControl();
                            f.params.hashnav && f.hashnav && f.hashnav.init();
                            f.params.a11y && f.a11y && f.a11y.init();
                            f.emit("onInit", f)
                        }
                        ,
                        f.cleanupStyles = function() {
                            f.container.removeClass(f.classNames.join(" ")).removeAttr("style");
                            f.wrapper.removeAttr("style");
                            f.slides && f.slides.length && f.slides.removeClass([f.params.slideVisibleClass, f.params.slideActiveClass, f.params.slideNextClass, f.params.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-column").removeAttr("data-swiper-row");
                            f.paginationContainer && f.paginationContainer.length && f.paginationContainer.removeClass(f.params.paginationHiddenClass);
                            f.bullets && f.bullets.length && f.bullets.removeClass(f.params.bulletActiveClass);
                            f.params.prevButton && n(f.params.prevButton).removeClass(f.params.buttonDisabledClass);
                            f.params.nextButton && n(f.params.nextButton).removeClass(f.params.buttonDisabledClass);
                            f.params.scrollbar && f.scrollbar && (f.scrollbar.track && f.scrollbar.track.length && f.scrollbar.track.removeAttr("style"),
                            f.scrollbar.drag && f.scrollbar.drag.length && f.scrollbar.drag.removeAttr("style"))
                        }
                        ,
                        f.destroy = function(n, t) {
                            f.detachEvents();
                            f.stopAutoplay();
                            f.params.scrollbar && f.scrollbar && f.params.scrollbarDraggable && f.scrollbar.disableDraggable();
                            f.params.loop && f.destroyLoop();
                            t && f.cleanupStyles();
                            f.disconnectObservers();
                            f.params.keyboardControl && f.disableKeyboardControl && f.disableKeyboardControl();
                            f.params.mousewheelControl && f.disableMousewheelControl && f.disableMousewheelControl();
                            f.params.a11y && f.a11y && f.a11y.destroy();
                            f.emit("onDestroy");
                            n !== !1 && (f = null)
                        }
                        ,
                        f.init(),
                        f
                    }
                }, i, f, u, r;
                for (t.prototype = {
                    isSafari: function() {
                        var n = navigator.userAgent.toLowerCase();
                        return n.indexOf("safari") >= 0 && n.indexOf("chrome") < 0 && n.indexOf("android") < 0
                    }(),
                    isUiWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(navigator.userAgent),
                    isArray: function(n) {
                        return Object.prototype.toString.apply(n) === "[object Array]"
                    },
                    browser: {
                        ie: window.navigator.pointerEnabled || window.navigator.msPointerEnabled,
                        ieTouch: window.navigator.msPointerEnabled && window.navigator.msMaxTouchPoints > 1 || window.navigator.pointerEnabled && window.navigator.maxTouchPoints > 1
                    },
                    device: function() {
                        var n = navigator.userAgent
                          , i = n.match(/(Android);?[\s\/]+([\d.]+)?/)
                          , t = n.match(/(iPad).*OS\s([\d_]+)/)
                          , r = n.match(/(iPod)(.*OS\s([\d_]+))?/)
                          , u = !t && n.match(/(iPhone\sOS)\s([\d_]+)/);
                        return {
                            ios: t || u || r,
                            android: i
                        }
                    }(),
                    support: {
                        touch: window.Modernizr && Modernizr.touch === !0 || function() {
                            return !!("ontouchstart"in window || window.DocumentTouch && document instanceof DocumentTouch)
                        }(),
                        transforms3d: window.Modernizr && Modernizr.csstransforms3d === !0 || function() {
                            var n = document.createElement("div").style;
                            return "webkitPerspective"in n || "MozPerspective"in n || "OPerspective"in n || "MsPerspective"in n || "perspective"in n
                        }(),
                        flexbox: function() {
                            for (var i = document.createElement("div").style, t = "alignItems webkitAlignItems webkitBoxAlign msFlexAlign mozBoxAlign webkitFlexDirection msFlexDirection mozBoxDirection mozBoxOrient webkitBoxDirection webkitBoxOrient".split(" "), n = 0; n < t.length; n++)
                                if (t[n]in i)
                                    return !0
                        }(),
                        observer: function() {
                            return "MutationObserver"in window || "WebkitMutationObserver"in window
                        }()
                    },
                    plugins: {}
                },
                i = function() {
                    var n = function(n) {
                        for (var i = this, t = 0, t = 0; t < n.length; t++)
                            i[t] = n[t];
                        return i.length = n.length,
                        this
                    }
                      , t = function(t, i) {
                        var e = [], r = 0, o, s, u, f;
                        if (t && !i && t instanceof n)
                            return t;
                        if (t)
                            if (typeof t == "string")
                                if (u = t.trim(),
                                u.indexOf("<") >= 0 && u.indexOf(">") >= 0)
                                    for (f = "div",
                                    u.indexOf("<li") === 0 && (f = "ul"),
                                    u.indexOf("<tr") === 0 && (f = "tbody"),
                                    (u.indexOf("<td") === 0 || u.indexOf("<th") === 0) && (f = "tr"),
                                    u.indexOf("<tbody") === 0 && (f = "table"),
                                    u.indexOf("<option") === 0 && (f = "select"),
                                    s = document.createElement(f),
                                    s.innerHTML = t,
                                    r = 0; r < s.childNodes.length; r++)
                                        e.push(s.childNodes[r]);
                                else
                                    for (o = i || t[0] !== "#" || t.match(/[ .<>:~]/) ? (i || document).querySelectorAll(t) : [document.getElementById(t.split("#")[1])],
                                    r = 0; r < o.length; r++)
                                        o[r] && e.push(o[r]);
                            else if (t.nodeType || t === window || t === document)
                                e.push(t);
                            else if (t.length > 0 && t[0].nodeType)
                                for (r = 0; r < t.length; r++)
                                    e.push(t[r]);
                        return new n(e)
                    };
                    return n.prototype = {
                        addClass: function(n) {
                            var r, t, i;
                            if (typeof n == "undefined")
                                return this;
                            for (r = n.split(" "),
                            t = 0; t < r.length; t++)
                                for (i = 0; i < this.length; i++)
                                    this[i].classList.add(r[t]);
                            return this
                        },
                        removeClass: function(n) {
                            for (var t, r = n.split(" "), i = 0; i < r.length; i++)
                                for (t = 0; t < this.length; t++)
                                    this[t].classList.remove(r[i]);
                            return this
                        },
                        hasClass: function(n) {
                            return this[0] ? this[0].classList.contains(n) : !1
                        },
                        toggleClass: function(n) {
                            for (var t, r = n.split(" "), i = 0; i < r.length; i++)
                                for (t = 0; t < this.length; t++)
                                    this[t].classList.toggle(r[i]);
                            return this
                        },
                        attr: function(n, t) {
                            var i, r;
                            if (arguments.length === 1 && typeof n == "string")
                                return this[0] ? this[0].getAttribute(n) : undefined;
                            for (i = 0; i < this.length; i++)
                                if (arguments.length === 2)
                                    this[i].setAttribute(n, t);
                                else
                                    for (r in n)
                                        this[i][r] = n[r],
                                        this[i].setAttribute(r, n[r]);
                            return this
                        },
                        removeAttr: function(n) {
                            for (var t = 0; t < this.length; t++)
                                this[t].removeAttribute(n);
                            return this
                        },
                        data: function(n, t) {
                            var u, i, r;
                            if (typeof t == "undefined")
                                return this[0] ? (u = this[0].getAttribute("data-" + n),
                                u ? u : this[0].dom7ElementDataStorage && n in this[0].dom7ElementDataStorage ? this[0].dom7ElementDataStorage[n] : undefined) : undefined;
                            for (i = 0; i < this.length; i++)
                                r = this[i],
                                r.dom7ElementDataStorage || (r.dom7ElementDataStorage = {}),
                                r.dom7ElementDataStorage[n] = t;
                            return this
                        },
                        transform: function(n) {
                            for (var t, i = 0; i < this.length; i++)
                                t = this[i].style,
                                t.webkitTransform = t.MsTransform = t.msTransform = t.MozTransform = t.OTransform = t.transform = n;
                            return this
                        },
                        transition: function(n) {
                            var i, t;
                            for (typeof n != "string" && (n = n + "ms"),
                            i = 0; i < this.length; i++)
                                t = this[i].style,
                                t.webkitTransitionDuration = t.MsTransitionDuration = t.msTransitionDuration = t.MozTransitionDuration = t.OTransitionDuration = t.transitionDuration = n;
                            return this
                        },
                        on: function(n, i, r, u) {
                            function s(n) {
                                var e = n.target, f, u;
                                if (t(e).is(i))
                                    r.call(e, n);
                                else
                                    for (f = t(e).parents(),
                                    u = 0; u < f.length; u++)
                                        t(f[u]).is(i) && r.call(f[u], n)
                            }
                            for (var o = n.split(" "), e, f = 0; f < this.length; f++)
                                if (typeof i == "function" || i === !1)
                                    for (typeof i == "function" && (r = arguments[1],
                                    u = arguments[2] || !1),
                                    e = 0; e < o.length; e++)
                                        this[f].addEventListener(o[e], r, u);
                                else
                                    for (e = 0; e < o.length; e++)
                                        this[f].dom7LiveListeners || (this[f].dom7LiveListeners = []),
                                        this[f].dom7LiveListeners.push({
                                            listener: r,
                                            liveListener: s
                                        }),
                                        this[f].addEventListener(o[e], s, u);
                            return this
                        },
                        off: function(n, t, i, r) {
                            for (var u, f, o = n.split(" "), e = 0; e < o.length; e++)
                                for (u = 0; u < this.length; u++)
                                    if (typeof t == "function" || t === !1)
                                        typeof t == "function" && (i = arguments[1],
                                        r = arguments[2] || !1),
                                        this[u].removeEventListener(o[e], i, r);
                                    else if (this[u].dom7LiveListeners)
                                        for (f = 0; f < this[u].dom7LiveListeners.length; f++)
                                            this[u].dom7LiveListeners[f].listener === i && this[u].removeEventListener(o[e], this[u].dom7LiveListeners[f].liveListener, r);
                            return this
                        },
                        once: function(n, t, i, r) {
                            function f(e) {
                                i(e);
                                u.off(n, t, f, r)
                            }
                            var u = this;
                            typeof t == "function" && (t = !1,
                            i = arguments[1],
                            r = arguments[2]);
                            u.on(n, t, f, r)
                        },
                        trigger: function(n, t) {
                            for (var i, r = 0; r < this.length; r++) {
                                try {
                                    i = new window.CustomEvent(n,{
                                        detail: t,
                                        bubbles: !0,
                                        cancelable: !0
                                    })
                                } catch (u) {
                                    i = document.createEvent("Event");
                                    i.initEvent(n, !0, !0);
                                    i.detail = t
                                }
                                this[r].dispatchEvent(i)
                            }
                            return this
                        },
                        transitionEnd: function(n) {
                            function u(f) {
                                if (f.target === this)
                                    for (n.call(this, f),
                                    t = 0; t < i.length; t++)
                                        r.off(i[t], u)
                            }
                            var i = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"], t, r = this;
                            if (n)
                                for (t = 0; t < i.length; t++)
                                    r.on(i[t], u);
                            return this
                        },
                        width: function() {
                            return this[0] === window ? window.innerWidth : this.length > 0 ? parseFloat(this.css("width")) : null
                        },
                        outerWidth: function(n) {
                            return this.length > 0 ? n ? this[0].offsetWidth + parseFloat(this.css("margin-right")) + parseFloat(this.css("margin-left")) : this[0].offsetWidth : null
                        },
                        height: function() {
                            return this[0] === window ? window.innerHeight : this.length > 0 ? parseFloat(this.css("height")) : null
                        },
                        outerHeight: function(n) {
                            return this.length > 0 ? n ? this[0].offsetHeight + parseFloat(this.css("margin-top")) + parseFloat(this.css("margin-bottom")) : this[0].offsetHeight : null
                        },
                        offset: function() {
                            if (this.length > 0) {
                                var n = this[0]
                                  , t = n.getBoundingClientRect()
                                  , i = document.body
                                  , r = n.clientTop || i.clientTop || 0
                                  , u = n.clientLeft || i.clientLeft || 0
                                  , f = window.pageYOffset || n.scrollTop
                                  , e = window.pageXOffset || n.scrollLeft;
                                return {
                                    top: t.top + f - r,
                                    left: t.left + e - u
                                }
                            }
                            return null
                        },
                        css: function(n, t) {
                            var i, r;
                            if (arguments.length === 1)
                                if (typeof n == "string") {
                                    if (this[0])
                                        return window.getComputedStyle(this[0], null).getPropertyValue(n)
                                } else {
                                    for (i = 0; i < this.length; i++)
                                        for (r in n)
                                            this[i].style[r] = n[r];
                                    return this
                                }
                            if (arguments.length === 2 && typeof n == "string") {
                                for (i = 0; i < this.length; i++)
                                    this[i].style[n] = t;
                                return this
                            }
                            return this
                        },
                        each: function(n) {
                            for (var t = 0; t < this.length; t++)
                                n.call(this[t], t, this[t]);
                            return this
                        },
                        html: function(n) {
                            if (typeof n == "undefined")
                                return this[0] ? this[0].innerHTML : undefined;
                            for (var t = 0; t < this.length; t++)
                                this[t].innerHTML = n;
                            return this
                        },
                        text: function(n) {
                            if (typeof n == "undefined")
                                return this[0] ? this[0].textContent.trim() : null;
                            for (var t = 0; t < this.length; t++)
                                this[t].textContent = n;
                            return this
                        },
                        is: function(i) {
                            var f, u, r;
                            if (!this[0])
                                return !1;
                            if (typeof i == "string") {
                                if (r = this[0],
                                r === document)
                                    return i === document;
                                if (r === window)
                                    return i === window;
                                if (r.matches)
                                    return r.matches(i);
                                if (r.webkitMatchesSelector)
                                    return r.webkitMatchesSelector(i);
                                if (r.mozMatchesSelector)
                                    return r.mozMatchesSelector(i);
                                if (r.msMatchesSelector)
                                    return r.msMatchesSelector(i);
                                for (f = t(i),
                                u = 0; u < f.length; u++)
                                    if (f[u] === this[0])
                                        return !0;
                                return !1
                            }
                            if (i === document)
                                return this[0] === document;
                            if (i === window)
                                return this[0] === window;
                            if (i.nodeType || i instanceof n) {
                                for (f = i.nodeType ? [i] : i,
                                u = 0; u < f.length; u++)
                                    if (f[u] === this[0])
                                        return !0;
                                return !1
                            }
                            return !1
                        },
                        index: function() {
                            if (this[0]) {
                                for (var n = this[0], t = 0; (n = n.previousSibling) !== null; )
                                    n.nodeType === 1 && t++;
                                return t
                            }
                            return undefined
                        },
                        eq: function(t) {
                            if (typeof t == "undefined")
                                return this;
                            var r = this.length, i;
                            return t > r - 1 ? new n([]) : t < 0 ? (i = r + t,
                            i < 0 ? new n([]) : new n([this[i]])) : new n([this[t]])
                        },
                        append: function(t) {
                            for (var r, u, i = 0; i < this.length; i++)
                                if (typeof t == "string")
                                    for (u = document.createElement("div"),
                                    u.innerHTML = t; u.firstChild; )
                                        this[i].appendChild(u.firstChild);
                                else if (t instanceof n)
                                    for (r = 0; r < t.length; r++)
                                        this[i].appendChild(t[r]);
                                else
                                    this[i].appendChild(t);
                            return this
                        },
                        prepend: function(t) {
                            for (var r, u, i = 0; i < this.length; i++)
                                if (typeof t == "string")
                                    for (u = document.createElement("div"),
                                    u.innerHTML = t,
                                    r = u.childNodes.length - 1; r >= 0; r--)
                                        this[i].insertBefore(u.childNodes[r], this[i].childNodes[0]);
                                else if (t instanceof n)
                                    for (r = 0; r < t.length; r++)
                                        this[i].insertBefore(t[r], this[i].childNodes[0]);
                                else
                                    this[i].insertBefore(t, this[i].childNodes[0]);
                            return this
                        },
                        insertBefore: function(n) {
                            for (var r, i = t(n), u = 0; u < this.length; u++)
                                if (i.length === 1)
                                    i[0].parentNode.insertBefore(this[u], i[0]);
                                else if (i.length > 1)
                                    for (r = 0; r < i.length; r++)
                                        i[r].parentNode.insertBefore(this[u].cloneNode(!0), i[r])
                        },
                        insertAfter: function(n) {
                            for (var r, i = t(n), u = 0; u < this.length; u++)
                                if (i.length === 1)
                                    i[0].parentNode.insertBefore(this[u], i[0].nextSibling);
                                else if (i.length > 1)
                                    for (r = 0; r < i.length; r++)
                                        i[r].parentNode.insertBefore(this[u].cloneNode(!0), i[r].nextSibling)
                        },
                        next: function(i) {
                            return this.length > 0 ? i ? this[0].nextElementSibling && t(this[0].nextElementSibling).is(i) ? new n([this[0].nextElementSibling]) : new n([]) : this[0].nextElementSibling ? new n([this[0].nextElementSibling]) : new n([]) : new n([])
                        },
                        nextAll: function(i) {
                            var f = [], u = this[0], r;
                            if (!u)
                                return new n([]);
                            while (u.nextElementSibling)
                                r = u.nextElementSibling,
                                i ? t(r).is(i) && f.push(r) : f.push(r),
                                u = r;
                            return new n(f)
                        },
                        prev: function(i) {
                            return this.length > 0 ? i ? this[0].previousElementSibling && t(this[0].previousElementSibling).is(i) ? new n([this[0].previousElementSibling]) : new n([]) : this[0].previousElementSibling ? new n([this[0].previousElementSibling]) : new n([]) : new n([])
                        },
                        prevAll: function(i) {
                            var f = [], u = this[0], r;
                            if (!u)
                                return new n([]);
                            while (u.previousElementSibling)
                                r = u.previousElementSibling,
                                i ? t(r).is(i) && f.push(r) : f.push(r),
                                u = r;
                            return new n(f)
                        },
                        parent: function(n) {
                            for (var r = [], i = 0; i < this.length; i++)
                                n ? t(this[i].parentNode).is(n) && r.push(this[i].parentNode) : r.push(this[i].parentNode);
                            return t(t.unique(r))
                        },
                        parents: function(n) {
                            for (var i, r = [], u = 0; u < this.length; u++)
                                for (i = this[u].parentNode; i; )
                                    n ? t(i).is(n) && r.push(i) : r.push(i),
                                    i = i.parentNode;
                            return t(t.unique(r))
                        },
                        find: function(t) {
                            for (var u, i, f = [], r = 0; r < this.length; r++)
                                for (u = this[r].querySelectorAll(t),
                                i = 0; i < u.length; i++)
                                    f.push(u[i]);
                            return new n(f)
                        },
                        children: function(i) {
                            for (var u, r, f = [], e = 0; e < this.length; e++)
                                for (u = this[e].childNodes,
                                r = 0; r < u.length; r++)
                                    i ? u[r].nodeType === 1 && t(u[r]).is(i) && f.push(u[r]) : u[r].nodeType === 1 && f.push(u[r]);
                            return new n(t.unique(f))
                        },
                        remove: function() {
                            for (var n = 0; n < this.length; n++)
                                this[n].parentNode && this[n].parentNode.removeChild(this[n]);
                            return this
                        },
                        add: function() {
                            for (var n = this, r, u, i = 0; i < arguments.length; i++)
                                for (u = t(arguments[i]),
                                r = 0; r < u.length; r++)
                                    n[n.length] = u[r],
                                    n.length++;
                            return n
                        }
                    },
                    t.fn = n.prototype,
                    t.unique = function(n) {
                        for (var i = [], t = 0; t < n.length; t++)
                            i.indexOf(n[t]) === -1 && i.push(n[t]);
                        return i
                    }
                    ,
                    t
                }(),
                f = ["jQuery", "Zepto", "Dom7"],
                u = 0; u < f.length; u++)
                    window[f[u]] && e(window[f[u]]);
                r = typeof i == "undefined" ? window.Dom7 || window.Zepto || window.jQuery : i;
                r && ("transitionEnd"in r.fn || (r.fn.transitionEnd = function(n) {
                    function u(f) {
                        if (f.target === this)
                            for (n.call(this, f),
                            t = 0; t < i.length; t++)
                                r.off(i[t], u)
                    }
                    var i = ["webkitTransitionEnd", "transitionend", "oTransitionEnd", "MSTransitionEnd", "msTransitionEnd"], t, r = this;
                    if (n)
                        for (t = 0; t < i.length; t++)
                            r.on(i[t], u);
                    return this
                }
                ),
                "transform"in r.fn || (r.fn.transform = function(n) {
                    for (var t, i = 0; i < this.length; i++)
                        t = this[i].style,
                        t.webkitTransform = t.MsTransform = t.msTransform = t.MozTransform = t.OTransform = t.transform = n;
                    return this
                }
                ),
                "transition"in r.fn || (r.fn.transition = function(n) {
                    var i, t;
                    for (typeof n != "string" && (n = n + "ms"),
                    i = 0; i < this.length; i++)
                        t = this[i].style,
                        t.webkitTransitionDuration = t.MsTransitionDuration = t.msTransitionDuration = t.MozTransitionDuration = t.OTransitionDuration = t.transitionDuration = n;
                    return this
                }
                ));
                window.Swiper = window.Swiper;
                window.SwiperApp = t
            }
            )();
            typeof module != "undefined" ? module.exports = window.Swiper : typeof define == "function" && define.amd && define([], function() {
                "use strict";
                return window.Swiper
            })
        },
        checkVersion: function(n, t) {
            try {
                var i = n.split(".")
                  , r = t.split(".")
                  , u = 1e4 * parseInt(i[0]) + 100 * parseInt(i[1]) + parseInt(i[2])
                  , f = 1e4 * parseInt(r[0]) + 100 * parseInt(r[1]) + parseInt(r[2]);
                return u > f ? 1 : u < f ? -1 : 0
            } catch (e) {
                console.log(e)
            }
            return 1
        },
        loadScriptFile: function(n, t) {
            var i = document.createElement("script");
            i.type = "text/javascript";
            i.readyState ? i.onreadystatechange = function() {
                (i.readyState == "loaded" || i.readyState == "complete") && (i.onreadystatechange = null,
                t())
            }
            : i.onload = function() {
                t()
            }
            ;
            i.src = n;
            document.getElementsByTagName("head")[0].appendChild(i)
        },
        loadjscssfile: function(n, t) {
            var i;
            t == "js" ? (i = document.createElement("script"),
            i.setAttribute("type", "text/javascript"),
            i.setAttribute("src", n)) : t == "css" && (i = document.createElement("link"),
            i.setAttribute("rel", "stylesheet"),
            i.setAttribute("type", "text/css"),
            i.setAttribute("href", n),
            i.setAttribute("media", "all"));
            typeof i != "undefined" && document.getElementsByTagName("head")[0].appendChild(i)
        },
        convertHex: function(n, t) {
            n = n.replace("#", "");
            var i = parseInt(n.substring(0, 2), 16)
              , r = parseInt(n.substring(2, 4), 16)
              , u = parseInt(n.substring(4, 6), 16);
            return "rgba(" + i + "," + r + "," + u + "," + t / 100 + ")"
        },
        loadConfig: function() {
            var t = {
                store: this.store
            };
            return n.ajax({
                url: this.host + "reviews/config",
                data: t,
                type: "GET",
                dataType: "jsonp",
                "async": !1,
                success: function(n) {
                    BPR.config = n;
                    BPR.starColor = n.star_color ? n.star_color : "inherit";
                    BPR.lang = n.language;
                    BPR.initCallback()
                },
                error: function(n) {
                    console.log(n.message)
                }
            }),
            void 0
        },
        genReviews: function(t) {
            var f = BPR.language, c = '<svg class="icon-warning" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path d="M40,40H8c-0.717,0-1.377-0.383-1.734-1.004c-0.356-0.621-0.354-1.385,0.007-2.004l16-28C22.631,8.378,23.289,8,24,8s1.369,0.378,1.728,0.992l16,28c0.361,0.619,0.363,1.383,0.007,2.004S40.716,40,40,40z"><\/path><path d="M22,34.142c0-0.269,0.047-0.515,0.143-0.746c0.094-0.228,0.229-0.426,0.403-0.592c0.171-0.168,0.382-0.299,0.624-0.393c0.244-0.092,0.518-0.141,0.824-0.141c0.306,0,0.582,0.049,0.828,0.141c0.25,0.094,0.461,0.225,0.632,0.393c0.175,0.166,0.31,0.364,0.403,0.592C25.953,33.627,26,33.873,26,34.142c0,0.27-0.047,0.516-0.143,0.74c-0.094,0.225-0.229,0.419-0.403,0.588c-0.171,0.166-0.382,0.296-0.632,0.392C24.576,35.954,24.3,36,23.994,36c-0.307,0-0.58-0.046-0.824-0.139c-0.242-0.096-0.453-0.226-0.624-0.392c-0.175-0.169-0.31-0.363-0.403-0.588C22.047,34.657,22,34.411,22,34.142 M25.48,30h-2.973l-0.421-12H25.9L25.48,30z"><\/path><\/svg>', l = '<svg class="icon-useful" version="1.1" viewBox="0 0 30 30" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,25h2l0,0c1.281,1.281,3.017,2,4.828,2H21l2-2v-4l0.5-10H14c0,0,1-3.266,1-4c0-2.251,0-5-3-5c-1,0-1,0-1,0l-0.501,3.491  L8.132,9.894C7.435,11.191,6.082,12,4.609,12H4V25z"/><circle cx="23.5" cy="13.5" r="2.5"/><circle cx="22.5" cy="21.5" r="2.5"/><circle cx="23.5" cy="17.5" r="2.5"/><circle cx="21" cy="25" r="2"/><circle cx="21" cy="25" r="2"/><\/svg>', y = t.reviews, p, a, w, v, u, r, o, s, h;
            if (p = n("#sapo-product-reviews[data-id='" + BPR.product.product_id + "']"),
            n(".sapo-product-reviews-filter input").prop("disabled", !1),
            a = "",
            y != null) {
                if (w = y.length,
                w > 0)
                    for (v = 0; v < w; v++) {
                        var i = y[v]
                          , e = ""
                          , b = i.reply != null ? i.reply.length + " " : "";
                        if (i.reply != null)
                            for (u = 0; u < i.reply.length; u++)
                                e += u > 2 ? '<div id="sapo-review-reply-' + i.reply[u].id + '" class="sapo-review-reply-item" style="display: none;">' : '<div id="sapo-review-reply-' + i.reply[u].id + '" class="sapo-review-reply-item">',
                                e += i.reply[u].reply_by != "store" ? i.reply[u].author_name != null && i.reply[u].author_name != "" ? '<p class="sapo-review-reply-author"><span>' + i.reply[u].author_name + "<\/span><\/p>" : i.reply[u].author_email != null && i.reply[u].author_email != "" ? '<p class="sapo-review-reply-author"><span>' + i.reply[u].author_email + "<\/span><\/p>" : '<p class="sapo-review-reply-author"><span>' + i.reply[u].author_phone + "<\/span><\/p>" : BPR.config.name_display_reply != null && BPR.config.name_display_reply != "" ? '<p class="sapo-review-reply-author"><span>' + BPR.config.name_display_reply + '<\/span><span class="is-admin">' + f.is_admin + "<\/span><\/span>" : '<p class="sapo-review-reply-author"><span>' + ProductReviewsAppUtil.store.name + '<\/span><span class="is-admin">' + f.is_admin + "<\/span><\/span>",
                                e += '<p class="sapo-review-reply-body">' + i.reply[u].content + "<\/p>",
                                e += '<div class="sapo-review-reply-actions" style="color: ' + BPR.config.form_color + '"><ul>',
                                BPR.config.is_review_useful && (o = BPR.config.review_useful,
                                i.reply[u].useful > 0 && (o = i.reply[u].useful + " " + o),
                                e += BPR.checkReviewUseful("comment", i.id) ? '<li class="sapo-review-useful"><a title="' + BPR.config.review_useful + '" href="javascript: void(0);">' + l + o + "<\/li>" : '<li class="sapo-review-useful"><a onclick="BPR.likeComment(' + i.reply[u].id + ", 'replycomment');return false\" title=\"" + BPR.config.review_useful + '" href="javascript: void(0);">' + l + o + "<\/li>"),
                                e += BPR.checkReplyReviewReport(i.reply[u].id) ? '<li class="sapo-review-reportreview is-flagged"><a href="javascript: void(0);">' + c + f.report + "<\/a><\/li>" : '<li class="sapo-review-reportreview"><a onclick="BPR.reportReplyReview(' + i.reply[u].id + ');return false" title="' + f.report + '" href="javascript: void(0);">' + c + f.report + "<\/a><\/li>",
                                e += '<li><span class="sapo-review-time" itemprop="datePublished">' + i.reply[u].time + "<\/span><\/li>",
                                e += "<\/ul><\/div>",
                                e += "<\/div>";
                        if (r = "",
                        r += '<div id="sapo-review-' + i.id + '" class="sapo-review" itemtype="http://schema.org/Review">',
                        r += '<div class="sapo-review-header">',
                        r += i.author_name != null && i.author_name != "" ? '<span class="sapo-review-author" itemprop="author">' + i.author_name + "<\/span>" : i.author_email != null && i.author_email != "" ? '<span class="sapo-review-author" itemprop="author">' + i.author_email + "<\/span>" : '<span class="sapo-review-author" itemprop="author">' + i.author_phone + "<\/span>",
                        r += '<div class="sapo-product-reviews-star" data-score="' + i.rating + '" data-number="5"><\/div>',
                        r += "<\/div>",
                        r += '<div class="sapo-review-body">',
                        BPR.config.purchase_confirm && i.comfirm_purchase == !0 && (r += '<div class="sapo-review-verified"><svg class="icon-verified" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"><path d="M48,25c0-3.345-1.901-6.265-4.676-7.74c0.758-2.888,0.019-6.098-2.234-8.351c-1.683-1.683-3.9-2.521-6.119-2.521 c-0.751,0-1.502,0.096-2.232,0.288C31.265,3.901,28.345,2,25,2s-6.265,1.901-7.74,4.676c-0.731-0.192-1.481-0.288-2.232-0.288 c-2.219,0-4.436,0.838-6.119,2.521c-2.253,2.253-2.992,5.462-2.234,8.351C3.901,18.735,2,21.655,2,25s1.901,6.265,4.676,7.74 c-0.758,2.888-0.019,6.098,2.234,8.351c1.683,1.683,3.9,2.521,6.119,2.521c0.751,0,1.502-0.096,2.232-0.288 C18.735,46.099,21.655,48,25,48s6.265-1.901,7.74-4.676c0.731,0.192,1.481,0.288,2.232,0.288c2.219,0,4.436-0.838,6.119-2.521 c2.253-2.253,2.992-5.462,2.234-8.351C46.099,31.265,48,28.345,48,25z M21.714,32.985l-7.278-7.278l1.414-1.414l5.864,5.864 L34.15,17.722l1.414,1.414L21.714,32.985z"><\/path><\/svg>' + f.verified + ProductReviewsAppUtil.store.name + "<\/div>"),
                        i.content != null && i.content != "" && (r += '<span class="sapo-review-content-body" itemprop="description">' + i.content + "<\/span>"),
                        r += "<\/div>",
                        r += '<div class="sapo-review-actions" style="color: ' + BPR.config.form_color + '"><ul>',
                        BPR.config.is_reply_comment && (r += '<li class="sapo-review-reply"><a onclick="BPR.showReply(this, ' + i.id + ');return false" title="' + f.reply + '" href="javascript: void(0);">' + f.reply + "<\/li>"),
                        BPR.config.is_review_useful && (o = BPR.config.review_useful,
                        i.useful > 0 && (o = i.useful + " " + o),
                        r += BPR.checkReviewUseful("comment", i.id) ? '<li class="sapo-review-useful is-active"><a title="' + BPR.config.review_useful + '" href="javascript: void(0);">' + l + o + "<\/li>" : '<li class="sapo-review-useful"><a onclick="BPR.likeComment(' + i.id + ", 'comment');return false\" title=\"" + BPR.config.review_useful + '" href="javascript: void(0);">' + l + o + "<\/li>"),
                        r += BPR.checkReviewReport(i.id) ? '<li class="sapo-review-reportreview is-flagged"><a href="javascript: void(0);">' + c + f.report + "<\/a><\/li>" : '<li class="sapo-review-reportreview"><a onclick="BPR.reportReview(' + i.id + ');return false" title="' + f.report + '" href="javascript: void(0);">' + c + f.report + "<\/a><\/li>",
                        r += '<li><span class="sapo-review-time" itemprop="datePublished">' + i.time + "<\/span><\/li>",
                        r += "<\/ul><\/div>",
                        i.images.length > 0) {
                            for (r += '<div class="sapo-review-images"><ul>',
                            s = 0; s < i.images.length; s++)
                                r += '<li><a data-fancybox="gallery" href="' + BPR.host + i.images[s].url + '"><img src="' + i.images[s].thumbnail + '" onerror="this.onerror=null;this.src=\'' + BPR.host + i.images[s].url + '\';" alt="' + i.content + '" /><\/a><\/li>';
                            r += "<\/ul><\/div>"
                        }
                        e != "" && (i.reply.length > 3 ? (r += '<div class="sapo-review-reply-list has-viewmore">',
                        r += e,
                        r += '<a href="javascript:;" onclick="BPR.showPrevReply(this)" class="btn-show-prev"><i class="fa fa-spinner fa-pulse" aria-hidden="true"><\/i>' + f.showmore_reply + "<\/a>",
                        r += "<\/div>") : (r += '<div class="sapo-review-reply-list">',
                        r += e,
                        r += "<\/div>"));
                        r += '<div class="sapo-review-reply-form" style="display: none;"><\/div>';
                        r += '<div style="display:none;" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating"><span itemprop="ratingValue">' + i.rating + "<\/span><\/div>";
                        r += "<\/div>";
                        a += r
                    }
                else
                    a = BPR.config.language == "en" ? '<div class="no-item">No reviews match the filter!<\/div>' : '<div class="no-item">Không có đánh giá nào phù hợp với bộ lọc!<\/div>';
                return p.find("#bpr-list").html(a),
                h = p.find("#bpr-more-reviews"),
                t.records_total > t.limit ? (h.show(),
                h.pagination({
                    items: t.records_total,
                    itemsOnPage: t.limit,
                    currentPage: t.page,
                    prevText: " ",
                    nextText: " ",
                    displayedPages: 3,
                    onPageClick: function(n) {
                        BPR.getMoreReviews(n)
                    }
                })) : (h.hide(),
                h.html("")),
                BPR.loadStar(t.rating),
                void 0
            }
        },
        getMoreReviews: function(t) {
            var r = n(BPR.reviewEl).attr("data-id")
              , i = {
                productId: r,
                page: t,
                rating: BPR.filter.score,
                isimage: BPR.filter.isimage
            };
            return i = n.extend(i, BPR.extraAjaxParams),
            n.ajax({
                url: BPR.host + "reviews/getmorereviews",
                type: "GET",
                dataType: "jsonp",
                data: i,
                success: BPR.moreReviewsCallback,
                beforeSend: function() {
                    return
                },
                complete: function() {
                    return
                }
            }),
            !1
        },
        moreReviewsCallback: function(n) {
            BPR.genReviews(n);
            return
        },
        loadStar: function(t) {
            t != 0 && (BPR.config.type_rating == "heart" && n("#sapo-product-reviews .sapo-product-reviews-star").addClass("sapo-product-reviews-heart"),
            n("#sapo-product-reviews .sapo-product-reviews-star").raty({
                starType: "i",
                number: function() {
                    return n(this).attr("data-number")
                },
                score: function() {
                    return n(this).attr("data-score")
                },
                readOnly: !0
            }),
            n(window).resize())
        },
        checkCommentator: function(t) {
            var r = n(BPR.reviewEl).attr("data-id"), i;
            if (i = n("#sapo-product-reviews[data-id='" + r + "']"),
            BPR.config.type_form == "popup" ? (n(".bpr-form").remove(),
            n(".noitem-bpr-form").remove()) : (n(".popup-bpr-form").remove(),
            t.votes == 0 ? n(".bpr-form").remove() : n(".noitem-bpr-form").remove()),
            BPR.config.commentator_type == "customer" && ProductReviewsAppUtil.customer == null) {
                n(i).find(".sapo-product-reviews-action .btn-new-review, .product-reviews-summary-actions .btn-new-review, .sapo-product-reviews-summary .summary-filter .btn-new-review.btn-new-review-mobile").text(BPR.language.newreview_login);
                n(i).find(".sapo-product-reviews-form").html("");
                return
            }
            n("#" + t.formId).find(".sapo-product-reviews-form").loadTemplate(BPR.host + "assets/template/bprForm.html", t, {
                complete: function() {
                    ProductReviewsAppUtil.customer && (n(i).find("form #review_author").val(ProductReviewsAppUtil.customer.name),
                    n(i).find("form #review_email").val(ProductReviewsAppUtil.customer.email),
                    ProductReviewsAppUtil.customer.phone && n(i).find("form #review_phone").val(ProductReviewsAppUtil.customer.phone.replace("+84", "0")));
                    var r = "Số lượng file quá giới hạn cho phép, bạn chỉ được đính kèm tối đa là $max file."
                      , u = "File đã tồn tại:\n$file."
                      , f = "File đính kèm không được vượt quá 1MB."
                      , e = "Định dạng file $ext không được hỗ trợ!";
                    BPR.config.language == "en" && (r = "The number of files exceeds the limit, you can only attach a maximum of $max file.",
                    u = "File already exists:\n$file.",
                    f = "Attachments must not exceed 1MB.",
                    e = "$ext file format is not supported!");
                    BPR.config.file_attachment && n("#inputFileAttach").MultiFile({
                        max: 3,
                        maxsize: 1024,
                        accept: "gif|jpeg|jpg|png",
                        STRING: {
                            remove: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px"><path d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M16.414,15 c0,0,3.139,3.139,3.293,3.293c0.391,0.391,0.391,1.024,0,1.414c-0.391,0.391-1.024,0.391-1.414,0C18.139,19.554,15,16.414,15,16.414 s-3.139,3.139-3.293,3.293c-0.391,0.391-1.024,0.391-1.414,0c-0.391-0.391-0.391-1.024,0-1.414C10.446,18.139,13.586,15,13.586,15 s-3.139-3.139-3.293-3.293c-0.391-0.391-0.391-1.024,0-1.414c0.391-0.391,1.024-0.391,1.414,0C11.861,10.446,15,13.586,15,13.586 s3.139-3.139,3.293-3.293c0.391-0.391,1.024-0.391,1.414,0c0.391,0.391,0.391,1.024,0,1.414C19.554,11.861,16.414,15,16.414,15z"/><\/svg>',
                            toomany: r,
                            duplicate: u,
                            toomuch: f,
                            denied: e
                        },
                        afterFileAppend: function() {
                            n("#sapo-product-reviews-frm .bpr-form-message-error-file").text("");
                            var t = n("#inputFileAttach_list").children().length;
                            t > 0 && n("#sapo-product-reviews .sapo-product-reviews-summary .bpr-form .bpr-form-review-error, #sapo-product-reviews #sapo-product-reviews-noitem .bpr-form-review-error").css("padding-bottom", 0)
                        },
                        afterFileRemove: function() {
                            var t = n("#inputFileAttach_list").children().length;
                            t == 0 && n("#sapo-product-reviews .sapo-product-reviews-summary .bpr-form .bpr-form-review-error, #sapo-product-reviews #sapo-product-reviews-noitem .bpr-form-review-error").css("padding-bottom", 32)
                        },
                        error: function(t) {
                            n("#sapo-product-reviews-frm .bpr-form-message-error-file").text(t)
                        }
                    });
                    BPR.config.file_attachment || n("#" + t.formId).find(".sapo-product-reviews-form").find(".bpr-form-contact").addClass("no-attachment");
                    BPR.config.phone_required == "hide" && BPR.config.email_required != "hide" ? n("#sapo-product-reviews-frm").find(".bpr-form-contact-email").css("width", "100%") : BPR.config.email_required == "hide" && BPR.config.phone_required != "hide" && n("#sapo-product-reviews-frm").find(".bpr-form-contact-phone").css("width", "100%")
                }
            });
            return
        },
        checkReviewReport: function(t) {
            if (ProductReviewsAppUtil.customer) {
                var r = BPR.readCookie()
                  , u = ProductReviewsAppUtil.customer.id
                  , i = r[u];
                if (i && i.length > 0 && n.inArray(t, i) != -1)
                    return !0
            }
            return !1
        },
        checkReplyReviewReport: function(t) {
            if (ProductReviewsAppUtil.customer) {
                var r = BPR.readCookieReply()
                  , u = ProductReviewsAppUtil.customer.id
                  , i = r[u];
                if (i && i.length > 0 && n.inArray(t, i) != -1)
                    return !0
            }
            return !1
        },
        loadProduct: function(t) {
            if (this.reviewEl != null && this.reviewEl.length != 0) {
                var r = n(this.reviewEl).attr("data-id")
                  , i = {
                    productId: r,
                    store: this.store,
                    rating: BPR.filter.score,
                    isimage: BPR.filter.isimage
                };
                return t == !0 ? n.get(this.host + "reviews/product", i, this.productFilterCallback, "jsonp") : n.get(this.host + "reviews/product", i, this.productCallback, "jsonp"),
                void 0
            }
        },
        productCallback: function(t) {
            var f = BPR.language, e = "option", o = " đánh giá", r = {
                all_label: "Tất cả",
                five_label: "5 Điểm",
                four_label: "4 Điểm",
                three_label: "3 Điểm",
                two_label: "2 Điểm",
                one_label: "1 Điểm",
                isimage_label: "Có hình ảnh"
            }, u, i;
            return BPR.config.language == "en" && (o = " review",
            r.all_label = "All",
            r.five_label = "5 Score",
            r.four_label = "4 Score",
            r.three_label = "3 Score",
            r.two_label = "2 Score",
            r.one_label = "1 Score",
            r.isimage_label = "Has image"),
            BPR.product = {
                product_id: t.product_id,
                product_name: t.product_name,
                rating: t.rating,
                votes: t.votes,
                next_id: t.next_id
            },
            t = n.extend(t, {
                language: f
            }),
            t = n.extend(t, {
                votes_text: o,
                votes_count: t.votes,
                five_rating: t.five_rating,
                four_rating: t.four_rating,
                three_rating: t.three_rating,
                two_rating: t.two_rating,
                one_rating: t.one_rating,
                is_image: t.is_image,
                filter: r,
                actionForm: BPR.host + "reviews/create",
                name_help: BPR.config.name_help,
                name_required: BPR.config.name_required,
                phone_help: BPR.config.phone_help,
                phone_required: BPR.config.phone_required,
                email_help: BPR.config.email_help == null || BPR.config.email_help == "" ? t.language.review_email : BPR.config.email_help,
                email_required: BPR.config.email_required,
                content_help: BPR.config.content_help == null || BPR.config.content_help == "" ? BPR.language.form.review_body : BPR.config.content_help,
                content_required: BPR.config.content_required,
                custom_css: BPR.config.custom_css
            }),
            u = "bpr-form_" + t.product_id,
            BPR.config.type_form == "popup" ? (u = "popup-" + u,
            t = n.extend(t, {
                formId: u
            })) : (t.votes == 0 && (u = "noitem-" + u),
            t = n.extend(t, {
                formId: u
            })),
            i = ".sapo-product-reviews-summary,#sapo-product-reviews-noitem{background-color:" + BPR.convertHex(BPR.config.form_color, 10) + "}",
            i += ".bpr-summary-average{color:" + BPR.config.form_color + "}.sapo-product-reviews-star{color:" + BPR.config.star_color + "}",
            i += ".btn-new-review{background-color:" + BPR.config.form_color + ";border-color:" + BPR.config.form_color + "}",
            i += "#sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-filter input:checked ~ .checkmark{color:" + BPR.config.form_color + ";border-color:" + BPR.config.form_color + "}",
            i += "#sapo-product-reviews-frm #fileAttach svg path{fill:" + BPR.config.form_color + "}",
            i += "#sapo-product-reviews-frm .bpr-button-submit{background-color:" + BPR.config.form_color + ";border-color:" + BPR.config.form_color + "}",
            i += ".sapo-review-verified, .sapo-review-actions{color:" + BPR.config.form_color + "}.icon-verified path{fill:" + BPR.config.form_color + "}",
            i += "#sapo-product-reviews .sapo-product-reviews-list .sapo-review-reply-list .sapo-review-reply-item .sapo-review-reply-author .is-admin{background-color:" + BPR.config.form_color + "; border-color: " + BPR.config.form_color + "}",
            i += ".simple-pagination li span.current, .simple-pagination li a.current{color:" + BPR.config.form_color + "; border-color:" + BPR.config.form_color + ";}",
            i += "#sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-filter h4, #sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-filter p{background-color:" + BPR.config.form_color + ";border-color:" + BPR.config.form_color + ";}",
            i += "#sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-filter h4.active, #sapo-product-reviews .sapo-product-reviews-summary .sapo-product-reviews-filter p.active{color:" + BPR.config.form_color + "}",
            i += "#sapo-product-reviews .sapo-product-reviews-list .sapo-review-reply-list .btn-show-prev{background-color:" + BPR.convertHex(BPR.config.form_color, 10) + "; color: " + BPR.config.form_color + "}",
            i += ".bpr-success-popup .icon-checked svg path{fill: " + BPR.config.form_color + "}",
            i += ".sapo-review-reply-form .bpr-form-actions .bpr-reply-button-submit{border-color: " + BPR.config.form_color + "; background: " + BPR.config.form_color + ";}",
            t = n.extend(t, {
                css_inline: i
            }),
            BPR.config.file_attachment == !1 && (e = "hide"),
            t = n.extend(t, {
                attachment_enable: e
            }),
            t.name_help == "" && (t.name_help = f.form.review_author),
            t.phone_help == "" && (t.phone_help = f.form.review_phone),
            n("#sapo-product-reviews").loadTemplate(BPR.host + "assets/template/bpr.html", t, {
                complete: function() {
                    t.reviews.length == 0 ? (n("#sapo-product-reviews-sub").remove(),
                    n("#sapo-product-reviews-noitem").loadTemplate(BPR.host + "assets/template/bprNoItem.html", t, {
                        complete: function() {
                            BPR.checkCommentator(t)
                        }
                    })) : (n("#sapo-product-reviews-noitem").remove(),
                    n("#sapo-product-reviews-sub").loadTemplate(BPR.host + "assets/template/bprListItem.html", t, {
                        complete: function() {
                            BPR.genReviews(t);
                            BPR.checkCommentator(t);
                            n(".sapo-product-reviews-filter label").on("click", function() {
                                var t = n(this);
                                t.hasClass("active") || (n(".sapo-product-reviews-filter label").removeClass("active"),
                                t.addClass("active"),
                                n(".sapo-product-reviews-filter .list-filter").removeClass("show-filter"),
                                n(".sapo-product-reviews-filter h4, .sapo-product-reviews-filter p").removeClass("active"))
                            })
                        }
                    }))
                }
            }),
            void 0
        },
        productFilterCallback: function(t) {
            var i = BPR.language
              , r = "(" + t.votes + " đánh giá)";
            return BPR.product = {
                product_id: t.product_id,
                product_name: t.product_name,
                rating: t.rating,
                votes: t.votes,
                next_id: t.next_id
            },
            t = n.extend(t, {
                votes_text: r,
                actionForm: BPR.host + "reviews/create",
                name_help: BPR.config.name_help,
                name_required: BPR.config.name_required,
                phone_help: BPR.config.phone_help,
                phone_required: BPR.config.phone_required,
                email_help: BPR.config.email_help,
                email_required: BPR.config.email_required,
                content_help: BPR.config.content_help == null || BPR.config.content_help == "" ? BPR.language.form.review_body : BPR.config.content_help,
                content_required: BPR.config.content_required
            }),
            t = n.extend(t, {
                language: i
            }),
            t.name_help == "" && (t.name_help = i.form.review_author),
            t.phone_help == "" && (t.phone_help = i.form.review_phone),
            t.email_help == "" && (t.email_help = i.form.review_email),
            BPR.genReviews(t),
            void 0
        },
        loadBadges: function() {
            var t = this.badgeEls.map(function() {
                return n(this).attr("data-id")
            });
            if (t.length > 0)
                return n.ajax({
                    url: this.host + "reviews/badges?store=" + BPR.extraAjaxParams.store,
                    type: "POST",
                    data: {
                        Store: BPR.extraAjaxParams.store,
                        ProductIds: t.splice(0)
                    },
                    success: function(n) {
                        BPR.badgesCallback(n)
                    },
                    error: function(n) {
                        console.log(n.message)
                    }
                }),
                void 0
        },
        badgesCallback: function(t) {
            t = JSON.parse(t.replace("({", "{").replace("})", "}"));
            BPR.badgeEls.each(function() {
                var u = n(this)
                  , o = u.attr("data-id")
                  , i = BPR.filterBadge(t.badges, o)
                  , r = ""
                  , e = "(Xem " + i.votes + " đánh giá)"
                  , f = "Viết đánh giá của bạn";
                BPR.config.language == "en" && (e = "(View " + i.votes + " review)",
                f = "Write your review");
                i != null ? (r += '<div class="sapo-product-reviews-star" data-score="' + i.rating + '" data-number="5" style="color: ' + BPR.config.star_color + '"><\/div>',
                u.hasClass("sapo-product-reviews-badge-detail") && (r += i.votes > 0 ? '<a href="javascript:;" class="sapo-product-review-scroll" style="color: ' + BPR.config.form_color + '">' + e + "<\/div>" : '<a href="javascript:;" class="sapo-product-review-scroll" style="color: ' + BPR.config.form_color + '">' + f + "<\/div>")) : (r += '<div class="sapo-product-reviews-star" data-score="0" data-number="5"><\/div>',
                u.hasClass("sapo-product-reviews-badge-detail") && (r += '<a href="javascript:;" class="sapo-product-review-scroll" style="color: ' + BPR.config.form_color + '">' + f + "<\/div>"));
                u.html(r)
            });
            BPR.loadBadgeStar()
        },
        filterBadge: function(n, t) {
            for (var r = n.length, i = 0; i < r; i++)
                if (n[i].id == t)
                    return n[i];
            return null
        },
        loadBadgeStar: function() {
            BPR.config.type_rating == "heart" && n(".sapo-product-reviews-star").addClass("sapo-product-reviews-heart");
            n(".sapo-product-reviews-star").raty({
                starType: "i",
                number: function() {
                    return n(this).attr("data-number")
                },
                score: function() {
                    return n(this).attr("data-score")
                },
                readOnly: !0
            });
            n(window).resize()
        },
        loadDefaultStar: function() {
            BPR.config.type_rating == "heart" && n("#sapo-product-reviews-frm #dvRating").addClass("sapo-product-reviews-heart");
            n("#sapo-product-reviews-frm #dvRating").raty({
                starType: "i",
                number: 5,
                score: 5,
                click: function(t) {
                    n("#sapo-product-reviews-frm #review_rate").val(t)
                }
            });
            n(window).resize()
        },
        submitForm: function(t) {
            var r, u, f;
            if (r = n(t).serializeObject(),
            r = n.extend(r, BPR.extraAjaxParams),
            r.productId = n("#review_product_id").val(),
            r.rating = n("#review_rate").val(),
            r.author = n("#review_author").val(),
            r.email = n("#review_email").val(),
            r.phone = n("#review_phone").val(),
            r.body = n("#review_body").val(),
            BPR.validateForm(r)) {
                if (u = new FormData,
                u.append("store", r.store),
                u.append("productId", r.productId),
                u.append("rating", r.rating),
                BPR.config.name_required != "hide" && u.append("author", r.author),
                BPR.config.email_required != "hide" && u.append("email", r.email),
                BPR.config.phone_required != "hide" && u.append("phone", r.phone),
                BPR.config.content_required != "hide" && u.append("body", r.body),
                BPR.config.file_attachment && (f = n('input[id^="inputFileAttach_F"]'),
                f.length > 0 && f[0].MultiFile.files.length > 0))
                    for (i = 0; i < f[0].MultiFile.files.length; i++)
                        u.append("attachments", f[0].MultiFile.files[i]);
                return n.ajax({
                    url: BPR.host + "reviews/create",
                    method: "POST",
                    contentType: !1,
                    processData: !1,
                    data: u,
                    success: BPR.formCallback,
                    beforeSend: function() {
                        n(".bpr-button-submit").attr("disabled", "disabled").addClass("loading");
                        return
                    },
                    complete: function() {
                        return
                    }
                }),
                !1
            }
        },
        submitFormReply: function(t) {
            var i, u, r = n(t).parents(".sapo-review-reply-form").find('input[name="commentId"]').val();
            if (i = n(u).serializeObject(),
            i = n.extend(i, BPR.extraAjaxParams),
            i.commentId = r,
            i.authorName = n("#reply_author_" + r).val(),
            i.authorEmail = n("#reply_email_" + r).val(),
            i.authorPhone = n("#reply_phone_" + r).val(),
            i.body = n("#reply_body_" + r).val(),
            BPR.validateFormReply(i))
                return n.ajax({
                    url: BPR.host + "reviews/postreply",
                    type: "POST",
                    dataType: "json",
                    data: i,
                    success: BPR.formReplyCallback,
                    beforeSend: function() {
                        n(t).attr("disabled", "disabled").addClass("loading");
                        return
                    },
                    complete: function() {
                        n(t).removeAttr("disabled").removeClass("loading");
                        return
                    }
                }),
                !1
        },
        formCallback: function(t) {
            if (t.status && t.status > 200) {
                n(".bpr-form-review-error .error").html(t.message);
                n(".bpr-form-review-error .error").show();
                n(".bpr-button-submit").removeAttr("disabled").removeClass("loading");
                return
            }
            n(".bpr-form-review-error .error").hide();
            n("#bpr-review-thanks").jquerymodal({
                fadeDuration: 300,
                escapeClose: !1,
                clickClose: !1,
                showClose: !1
            });
            setTimeout(function() {
                n("#bpr-review-thanks .close-modal").trigger("click")
            }, 3e3);
            n("#bpr-review-thanks .close-modal").on("click", function() {
                location.reload()
            })
        },
        formReplyCallback: function(t) {
            if (t.status && t.status > 200) {
                n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-review-error .error").html(t.message);
                n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-review-error .error").show();
                n("#sapo-review-reply-" + t.commentId + " .bpr-reply-button-submit").removeAttr("disabled").removeClass("loading");
                return
            }
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-review-error .error").hide();
            n("#bpr-reply-thanks").jquerymodal({
                fadeDuration: 300,
                escapeClose: !1,
                clickClose: !1,
                showClose: !1
            });
            setTimeout(function() {
                n("#bpr-reply-thanks .close-modal").trigger("click")
            }, 3e3);
            n("#bpr-reply-thanks .close-modal").on("click", function() {
                location.reload()
            })
        },
        filterReview: function(t) {
            n(".sapo-product-reviews-filter input").prop("disabled", !0);
            n(".sapo-product-reviews-filter input ~ .checkmark").attr("style", "");
            var r = n(t)
              , i = r.val()
              , u = r.data("filter");
            return u == "score" ? (BPR.filter.score = i,
            BPR.filter.isimage = 0) : i == "isimage" ? (BPR.filter.score = 0,
            BPR.filter.isimage = 1) : i == "all" && (BPR.filter.score = 0,
            BPR.filter.isimage = 0),
            BPR.loadProduct(!0),
            !1
        },
        newReview: function(t) {
            if (BPR.config.commentator_type == "customer" && ProductReviewsAppUtil.customer == null)
                return window.location.href = "/account/login",
                !1;
            var r = n(t).parents("#sapo-product-reviews[data-id]").attr("data-id")
              , i = "bpr-form_" + r;
            return n(t).hasClass("onshow-form") ? (n(t).text(BPR.language.newreview).removeClass("onshow-form"),
            BPR.config.type_form != "popup" && (BPR.product.votes == 0 ? n("#noitem-" + i).slideUp() : n("#" + i).slideUp()),
            !1) : (BPR.config.type_form == "popup" ? (i = "popup-" + i,
            n("#" + i).jquerymodal({
                fadeDuration: 300,
                escapeClose: !1,
                clickClose: !1,
                showClose: !1
            })) : BPR.product.votes == 0 ? (n("#noitem-" + i).slideDown(),
            n(t).text(BPR.language.closerenew).addClass("onshow-form")) : (n("#" + i).slideDown(),
            n(t).text(BPR.language.closerenew).addClass("onshow-form")),
            BPR.loadDefaultStar(),
            !1)
        },
        showReply: function(t, i) {
            var u, f, r;
            if (BPR.config.commentator_type == "customer" && ProductReviewsAppUtil.customer == null)
                return window.location.href = "/account/login",
                !1;
            if (u = "#sapo-review-" + i,
            n(u).find(".sapo-review-reply-form").is(":visible"))
                n(u).find(".sapo-review-reply-form").hide(),
                n(t).text(BPR.language.reply);
            else if (n(u).find(".sapo-review-reply-form").show(),
            BPR.config.is_reply_comment)
                (BPR.config.commentator_type == "customer" && ProductReviewsAppUtil.customer != null || BPR.config.commentator_type == "all") && (f = BPR.language,
                r = {
                    comment_id: i,
                    reply_form: "sapo-review-reply-" + i,
                    reply_comment: "reply_comment_id_" + i,
                    reply_author_id: "reply_author_" + i,
                    reply_email_id: "reply_email_" + i,
                    reply_phone_id: "reply_phone_" + i,
                    reply_body_id: "reply_body_" + i
                },
                r = n.extend(r, {
                    language: f,
                    actionForm: BPR.host + "reviews/postreply",
                    name_help: BPR.config.name_help,
                    name_required: BPR.config.name_required,
                    phone_help: BPR.config.phone_help,
                    phone_required: BPR.config.phone_required,
                    email_help: BPR.config.email_help,
                    email_required: BPR.config.email_required,
                    content_help: BPR.config.content_help == null || BPR.config.content_help == "" ? BPR.language.form.reply_body : BPR.config.content_help,
                    content_required: BPR.config.content_required,
                    custom_css: BPR.config.custom_css
                }),
                r.name_help == "" && (r.name_help = f.form.review_author),
                r.phone_help == "" && (r.phone_help = f.form.review_phone),
                n(u).find(".sapo-review-reply-form").loadTemplate(BPR.host + "assets/template/bprFormReply.html", r, {
                    complete: function() {
                        n("#" + r.reply_form + " textarea").on("input", function() {
                            this.style.height = "auto";
                            this.style.height = this.scrollHeight + "px"
                        });
                        BPR.config.language == "en" && n("#" + r.reply_form + " .bpr-form-contact").addClass("english");
                        ProductReviewsAppUtil.customer && (n("#" + r.reply_form).find("#" + r.reply_author_id).val(ProductReviewsAppUtil.customer.name),
                        n("#" + r.reply_form).find("#" + r.reply_email_id).val(ProductReviewsAppUtil.customer.email),
                        ProductReviewsAppUtil.customer.phone && n("#" + r.reply_form).find("#" + r.reply_phone_id).val(ProductReviewsAppUtil.customer.phone.replace("+84", "0")));
                        n(t).text(BPR.language.closerenew)
                    }
                }));
            else
                return !1
        },
        validateForm: function(t) {
            var i = BPR.language.form
              , o = !1
              , r = !1
              , u = !1
              , f = !1
              , e = !1;
            return t.rating == "" || t.rating < 1 || t.rating > 5 ? n("#sapo-product-reviews-frm .bpr-form-rating .bpr-form-message-error").html(i.rating_error.error).show() : (n("#sapo-product-reviews-frm .bpr-form-rating .bpr-form-message-error").hide(),
            o = !0),
            BPR.config.name_required != "hide" ? t.author == "" && BPR.config.name_required == "require" ? (n("#sapo-product-reviews-frm .bpr-form-contact-name").addClass("has-error"),
            n("#sapo-product-reviews-frm .bpr-form-contact-name .bpr-form-message-error").html(i.name_error.required)) : t.author.length > 128 ? (n("#sapo-product-reviews-frm .bpr-form-contact-name").addClass("has-error"),
            n("#sapo-product-reviews-frm .bpr-form-contact-name .bpr-form-message-error").html(i.name_error.maxlength)) : (n("#sapo-product-reviews-frm .bpr-form-contact-name .bpr-form-message-error").html(""),
            n("#sapo-product-reviews-frm .bpr-form-contact-name").removeClass("has-error"),
            r = !0) : r = !0,
            BPR.config.email_required != "hide" ? t.email == "" && BPR.config.email_required == "require" ? (n("#sapo-product-reviews-frm .bpr-form-contact-email").addClass("has-error"),
            n("#sapo-product-reviews-frm .bpr-form-contact-email .bpr-form-message-error").html(i.email_error.required)) : t.email.length > 50 ? (n("#sapo-product-reviews-frm .bpr-form-contact-email").addClass("has-error"),
            n("#sapo-product-reviews-frm .bpr-form-contact-email .bpr-form-message-error").html(i.email_error.maxlength)) : t.email == "" || BPR.isValidEmailAddress(t.email) ? (n("#sapo-product-reviews-frm .bpr-form-contact-email .bpr-form-message-error").html(""),
            n("#sapo-product-reviews-frm .bpr-form-contact-email").removeClass("has-error"),
            u = !0) : (n("#sapo-product-reviews-frm .bpr-form-contact-email").addClass("has-error"),
            n("#sapo-product-reviews-frm .bpr-form-contact-email .bpr-form-message-error").html(i.email_error.error)) : u = !0,
            BPR.config.phone_required != "hide" ? t.phone == "" && BPR.config.phone_required == "require" ? (n("#sapo-product-reviews-frm .bpr-form-contact-phone").addClass("has-error"),
            n("#sapo-product-reviews-frm .bpr-form-contact-phone .bpr-form-message-error").html(i.phone_error.required)) : t.phone.length > 15 ? (n("#sapo-product-reviews-frm .bpr-form-contact-phone").addClass("has-error"),
            n("#sapo-product-reviews-frm .bpr-form-contact-phone .bpr-form-message-error").html(i.phone_error.maxlength)) : t.phone == "" || BPR.isValidPhone(t.phone) ? (n("#sapo-product-reviews-frm .bpr-form-contact-phone .bpr-form-message-error").html(""),
            n("#sapo-product-reviews-frm .bpr-form-contact-phone").removeClass("has-error"),
            f = !0) : (n("#sapo-product-reviews-frm .bpr-form-contact-phone").addClass("has-error"),
            n("#sapo-product-reviews-frm .bpr-form-contact-phone .bpr-form-message-error").html(i.phone_error.error)) : f = !0,
            BPR.config.content_required != "hide" ? t.body == "" && BPR.config.content_required == "require" ? (n("#sapo-product-reviews-frm .bpr-form-review-body").addClass("has-error"),
            n("#sapo-product-reviews-frm .bpr-form-message-error-body").html(i.body_error.required)) : t.body != "" && t.body.length > 1e3 ? (n("#sapo-product-reviews-frm .bpr-form-review-body").addClass("has-error"),
            n("#sapo-product-reviews-frm .bpr-form-message-error-body").html(i.body_error.maxlength)) : (n("#sapo-product-reviews-frm .bpr-form-message-error-body").html(""),
            n("#sapo-product-reviews-frm .bpr-form-review-body").removeClass("has-error"),
            e = !0) : e = !0,
            o == !1 || r == !1 || u == !1 || f == !1 || e == !1 ? !1 : !0
        },
        validateFormReply: function(t) {
            var i = BPR.language.form
              , r = !1
              , u = !1
              , f = !1
              , e = !1;
            return t.authorName == "" && BPR.config.name_required == "require" ? (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-name").addClass("has-error"),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-name .bpr-reply-form-message-error").html(i.name_error.required)) : t.authorName.length > 128 ? (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-name").addClass("has-error"),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-name .bpr-reply-form-message-error").html(i.name_error.maxlength)) : (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-name .bpr-reply-form-message-error").html(""),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-name").removeClass("has-error"),
            r = !0),
            t.authorEmail == "" && BPR.config.email_required == "require" ? (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-email").addClass("has-error"),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-email .bpr-reply-form-message-error").html(i.email_error.required)) : t.authorEmail.length > 50 ? (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-email").addClass("has-error"),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-email .bpr-reply-form-message-error").html(i.email_error.maxlength)) : t.authorEmail == "" || BPR.isValidEmailAddress(t.authorEmail) ? (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-email .bpr-reply-form-message-error").html(""),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-email").removeClass("has-error"),
            u = !0) : (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-email").addClass("has-error"),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-email .bpr-reply-form-message-error").html(i.email_error.error)),
            t.authorPhone == "" && BPR.config.phone_required == "require" ? (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-phone").addClass("has-error"),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-phone .bpr-reply-form-message-error").html(i.phone_error.required)) : t.authorPhone.length > 15 ? (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-phone").addClass("has-error"),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-phone .bpr-reply-form-message-error").html(i.phone_error.maxlength)) : t.authorPhone == "" || BPR.isValidPhone(t.authorPhone) ? (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-phone .bpr-reply-form-message-error").html(""),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-phone").removeClass("has-error"),
            f = !0) : (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-phone").addClass("has-error"),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-contact-phone .bpr-reply-form-message-error").html(i.phone_error.error)),
            t.body == "" ? (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-review-body").addClass("has-error"),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-message-error-body").html(i.reply_body_error.required)) : t.body.length > 1e3 ? (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-review-body").addClass("has-error"),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-message-error-body").html(i.reply_body_error.maxlength)) : (n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-message-error-body").html(""),
            n("#sapo-review-reply-" + t.commentId + " .bpr-reply-form-review-body").removeClass("has-error"),
            e = !0),
            r == !1 || u == !1 || f == !1 || e == !1 ? !1 : !0
        },
        isValidEmailAddress: function(n) {
            return /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(n)
        },
        isValidPhone: function(n) {
            return /[0](?:[35789]\d{8}|[2]\d{9})/.test(n)
        },
        reportReview: function(t) {
            var i, r = BPR.language;
            return confirm(r.report_alert) && (i = n.extend({
                id: t
            }, BPR.extraAjaxParams),
            n.get("" + BPR.host + "/reviews/report", i, BPR.reportCallback, "jsonp")),
            !1
        },
        reportReplyReview: function(t) {
            var i, r = BPR.language;
            return confirm(r.report_alert) && (i = n.extend({
                id: t
            }, BPR.extraAjaxParams),
            n.get("" + BPR.host + "/reviews/reportreply", i, BPR.reportReplyCallback, "jsonp")),
            !1
        },
        reportCallback: function(t) {
            var u = '<a href="javascript: void(0);"><svg class="icon-warning" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path d="M40,40H8c-0.717,0-1.377-0.383-1.734-1.004c-0.356-0.621-0.354-1.385,0.007-2.004l16-28C22.631,8.378,23.289,8,24,8s1.369,0.378,1.728,0.992l16,28c0.361,0.619,0.363,1.383,0.007,2.004S40.716,40,40,40z"><\/path><path d="M22,34.142c0-0.269,0.047-0.515,0.143-0.746c0.094-0.228,0.229-0.426,0.403-0.592c0.171-0.168,0.382-0.299,0.624-0.393c0.244-0.092,0.518-0.141,0.824-0.141c0.306,0,0.582,0.049,0.828,0.141c0.25,0.094,0.461,0.225,0.632,0.393c0.175,0.166,0.31,0.364,0.403,0.592C25.953,33.627,26,33.873,26,34.142c0,0.27-0.047,0.516-0.143,0.74c-0.094,0.225-0.229,0.419-0.403,0.588c-0.171,0.166-0.382,0.296-0.632,0.392C24.576,35.954,24.3,36,23.994,36c-0.307,0-0.58-0.046-0.824-0.139c-0.242-0.096-0.453-0.226-0.624-0.392c-0.175-0.169-0.31-0.363-0.403-0.588C22.047,34.657,22,34.411,22,34.142 M25.48,30h-2.973l-0.421-12H25.9L25.48,30z"><\/path><\/svg>' + BPR.language.report + "<\/i><\/a>", i, r;
            n("#sapo-review-" + t.id).children(".sapo-review-actions").find(".sapo-review-reportreview").addClass("is-flagged");
            n("#sapo-review-" + t.id).children(".sapo-review-actions").find(".sapo-review-reportreview").html(u);
            ProductReviewsAppUtil.customer && (i = BPR.readCookie(),
            r = ProductReviewsAppUtil.customer.id,
            i[r] && i[r].length != 0 || (i[r] = []),
            i[r].push(t.id),
            BPR.writeCookie(i));
            return
        },
        reportReplyCallback: function(t) {
            var u = '<a href="javascript: void(0);"><svg class="icon-warning" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"><path d="M40,40H8c-0.717,0-1.377-0.383-1.734-1.004c-0.356-0.621-0.354-1.385,0.007-2.004l16-28C22.631,8.378,23.289,8,24,8s1.369,0.378,1.728,0.992l16,28c0.361,0.619,0.363,1.383,0.007,2.004S40.716,40,40,40z"><\/path><path d="M22,34.142c0-0.269,0.047-0.515,0.143-0.746c0.094-0.228,0.229-0.426,0.403-0.592c0.171-0.168,0.382-0.299,0.624-0.393c0.244-0.092,0.518-0.141,0.824-0.141c0.306,0,0.582,0.049,0.828,0.141c0.25,0.094,0.461,0.225,0.632,0.393c0.175,0.166,0.31,0.364,0.403,0.592C25.953,33.627,26,33.873,26,34.142c0,0.27-0.047,0.516-0.143,0.74c-0.094,0.225-0.229,0.419-0.403,0.588c-0.171,0.166-0.382,0.296-0.632,0.392C24.576,35.954,24.3,36,23.994,36c-0.307,0-0.58-0.046-0.824-0.139c-0.242-0.096-0.453-0.226-0.624-0.392c-0.175-0.169-0.31-0.363-0.403-0.588C22.047,34.657,22,34.411,22,34.142 M25.48,30h-2.973l-0.421-12H25.9L25.48,30z"><\/path><\/svg>' + BPR.language.report + "<\/i><\/a>", i, r;
            n("#sapo-review-reply-" + t.id).find(".sapo-review-reply-actions").find(".sapo-review-reportreview").addClass("is-flagged");
            n("#sapo-review-reply-" + t.id).find(".sapo-review-reply-actions").find(".sapo-review-reportreview").html(u);
            ProductReviewsAppUtil.customer && (i = BPR.readCookieReply(),
            r = ProductReviewsAppUtil.customer.id,
            i[r] && i[r].length != 0 || (i[r] = []),
            i[r].push(t.id),
            BPR.writeCookieReply(i));
            return
        },
        likeComment: function(t, i) {
            var r;
            return r = n.extend({
                commentid: t,
                type: i
            }, BPR.extraAjaxParams),
            n.get("" + BPR.host + "reviews/likecomment", r, BPR.likeCommentCallback, "jsonp"),
            !1
        },
        likeCommentCallback: function(t) {
            var i, r;
            html = '<a href="javascript: void(0);"><svg class="icon-useful" version="1.1" viewBox="0 0 30 30" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,25h2l0,0c1.281,1.281,3.017,2,4.828,2H21l2-2v-4l0.5-10H14c0,0,1-3.266,1-4c0-2.251,0-5-3-5c-1,0-1,0-1,0l-0.501,3.491  L8.132,9.894C7.435,11.191,6.082,12,4.609,12H4V25z"/><circle cx="23.5" cy="13.5" r="2.5"/><circle cx="22.5" cy="21.5" r="2.5"/><circle cx="23.5" cy="17.5" r="2.5"/><circle cx="21" cy="25" r="2"/><circle cx="21" cy="25" r="2"/><\/svg>' + t.useful + " " + BPR.config.review_useful + "<\/i><\/a>";
            t.type == "comment" ? n("#sapo-review-" + t.id).children(".sapo-review-actions").find(".sapo-review-useful").html(html).addClass("is-active") : n("#sapo-review-reply-" + t.id).children(".sapo-review-reply-actions").find(".sapo-review-useful").html(html).addClass("is-active");
            ProductReviewsAppUtil.customer && (i = BPR.readCookieUseful(t.type),
            r = ProductReviewsAppUtil.customer.id,
            i[r] && i[r].length != 0 || (i[r] = []),
            i[r].push(t.id),
            BPR.writeCookieUseful(t.type, i));
            return
        },
        checkReviewUseful: function(t, i) {
            if (ProductReviewsAppUtil.customer) {
                var u = BPR.readCookieUseful(t)
                  , f = ProductReviewsAppUtil.customer.id
                  , r = u[f];
                if (r && r.length > 0 && n.inArray(i, r) != -1)
                    return !0
            }
            return !1
        },
        initDomEls: function() {
            this.badgeEls = n(".sapo-product-reviews-badge[data-id]");
            this.reviewEl = n("#sapo-product-reviews[data-id]").first();
            this.moduleEl = n(".sapo-product-reviews-module")
        },
        loadProductsModule: function() {
            if (BPR.moduleEl.length && BPR.moduleEl.length > 0) {
                var t = {
                    store: Bizweb.store,
                    page: Bizweb.template
                };
                n.ajax({
                    url: BPR.host + "reviews/productsmodule",
                    data: t,
                    type: "GET",
                    timeout: 4e4,
                    traditional: !0,
                    success: function(n) {
                        BPR.productsModuleCallback(n)
                    },
                    error: function() {
                        console.log("Có lỗi xảy ra!")
                    }
                })
            }
        },
        productsModuleCallback: function(t) {
            if (t != null && !(t.length <= 0)) {
                BPR.moduleEl.html(t);
                var i = parseInt(BPR.moduleEl.find(".bpr-products-module-slide").val(), 10)
                  , r = {};
                n(".bpr-products-module-body.swiper-container").length && n(".bpr-products-module-body.swiper-container").length > 0 && n(".bpr-products-module-body.swiper-container").each(function(t) {
                    var e = n(this), o = e.parents(".bpr-products-module-container"), s = e.find(".bpr-wrapper-outer"), u, f;
                    e.addClass("instance-" + t);
                    o.addClass("instance-" + t);
                    o.find(".bpr-button-prev").addClass("bpr-btn-prev-" + t);
                    o.find(".bpr-button-next").addClass("bpr-btn-next-" + t);
                    u = {
                        nextButton: ".bpr-btn-next-" + t,
                        prevButton: ".bpr-btn-prev-" + t,
                        lazyLoading: !0,
                        breakpoints: {}
                    };
                    f = s.width();
                    f <= 320 ? (u.slidesPerView = 1,
                    u.spaceBetween = 0,
                    u.breakpoints = {}) : f <= 768 ? (u.slidesPerView = 2,
                    u.spaceBetween = 10,
                    u.breakpoints = {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        }
                    }) : f <= 992 ? (u.slidesPerView = 3,
                    u.spaceBetween = 20,
                    u.breakpoints = {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 10
                        },
                        992: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        }
                    }) : (u.slidesPerView = i,
                    u.spaceBetween = 30,
                    u.breakpoints = {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 0
                        },
                        768: {
                            slidesPerView: 2,
                            spaceBetween: 10
                        },
                        992: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        }
                    });
                    r[t] = new window.SwiperApp(".bpr-products-module-body.swiper-container.instance-" + t + " .bpr-wrapper-outer",u)
                });
                n(".sapo-product-reviews-module .bpr-product-star").raty({
                    starType: "i",
                    number: function() {
                        return n(this).attr("data-number")
                    },
                    score: function() {
                        return n(this).attr("data-score")
                    },
                    readOnly: !0
                });
                n(window).resize()
            }
        },
        init: function() {
            this.loadjscssfile(this.host + "assets/css/bpr.min.css?v=1.0", "css");
            this.loadjscssfile(this.host + "assets/css/productReviews.min.css?v=1.0", "css");
            this.initDomEls();
            this.loadConfig()
        },
        initCallback: function() {
            BPR.loadScriptFile(BPR.host + "assets/js/lang/" + BPR.lang + ".min.js", function() {
                BPR.language = ProductReviewsAppUtil.lang[BPR.lang];
                BPR.loadProduct();
                BPR.loadBadges();
                BPR.loadProductsModule()
            })
        },
        writeCookie: function(n) {
            var t = new Date;
            t = t.getTime();
            var i = Math.round(t + BPR.cookie_expire * 36e5)
              , r = new Date(i)
              , u = r.toGMTString()
              , n = JSON.stringify(n);
            document.cookie = "bpr-app=" + n + ";expires=" + u + ";path=/;"
        },
        readCookie: function() {
            var n;
            BPR.cookies = {};
            for (var t = null, r = "bpr-app=", u = document.cookie.split(";"), i = 0; i < u.length; i++) {
                for (n = u[i]; " " == n.charAt(0); )
                    n = n.substring(1, n.length);
                if (0 == n.indexOf(r)) {
                    t = n.substring(r.length, n.length);
                    break
                }
            }
            return t && (BPR.cookies = JSON.parse(t)),
            BPR.cookies
        },
        writeCookieReply: function(n) {
            var t = new Date;
            t = t.getTime();
            var i = Math.round(t + BPR.cookie_expire * 36e5)
              , r = new Date(i)
              , u = r.toGMTString()
              , n = JSON.stringify(n);
            document.cookie = "bpr-app-reply=" + n + ";expires=" + u + ";path=/;"
        },
        readCookieReply: function() {
            var n;
            BPR.cookies = {};
            for (var t = null, r = "bpr-app-reply=", u = document.cookie.split(";"), i = 0; i < u.length; i++) {
                for (n = u[i]; " " == n.charAt(0); )
                    n = n.substring(1, n.length);
                if (0 == n.indexOf(r)) {
                    t = n.substring(r.length, n.length);
                    break
                }
            }
            return t && (BPR.cookies = JSON.parse(t)),
            BPR.cookies
        },
        writeCookieUseful: function(n, t) {
            var i = new Date;
            i = i.getTime();
            var r = Math.round(i + BPR.cookie_expire * 36e5)
              , u = new Date(r)
              , f = u.toGMTString()
              , t = JSON.stringify(t);
            document.cookie = "bpr-app-useful-" + n + "=" + t + ";expires=" + f + ";path=/;"
        },
        readCookieUseful: function(n) {
            var t;
            BPR.cookies = {};
            for (var i = null, u = "bpr-app-useful-" + n + "=", f = document.cookie.split(";"), r = 0; r < f.length; r++) {
                for (t = f[r]; " " == t.charAt(0); )
                    t = t.substring(1, t.length);
                if (0 == t.indexOf(u)) {
                    i = t.substring(u.length, t.length);
                    break
                }
            }
            return i && (BPR.cookies = JSON.parse(i)),
            BPR.cookies
        },
        showPrevReply: function(t) {
            n(t).addClass("loading");
            var i = n(t).parents(".sapo-review-reply-list")
              , r = i.find(".sapo-review-reply-item").length
              , u = i.find(".sapo-review-reply-item:visible").length
              , f = u + 3;
            i.find(".sapo-review-reply-item:hidden").slice(0, 3).show();
            f >= r && n(t).hide();
            n(t).removeClass("loading")
        },
        showFilterMobile: function(t) {
            n(".sapo-product-reviews-filter .list-filter").hasClass("show-filter") ? (n(".sapo-product-reviews-filter .list-filter").removeClass("show-filter"),
            n(t).removeClass("active").html('<i class="fa fa-filter" aria-hidden="true"><\/i><span>' + BPR.language.filter + "<\/span>")) : (n(".sapo-product-reviews-filter .list-filter").addClass("show-filter"),
            n(t).addClass("active").html('<i class="fa fa-close" aria-hidden="true"><\/i><span>' + BPR.language.closefilter + "<\/span>"))
        }
    });
    BPR.trackingInit || (BPR.trackingInit = !0,
    BPR.raty(n),
    BPR.serializeObject(n),
    BPR.loadTemplate(n),
    BPR.pagination(n),
    BPR.swiper(),
    n(document).ready(function() {
        BPR.init()
    }))
}
.call(this);
