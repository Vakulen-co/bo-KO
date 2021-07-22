! function(t) {
    var e = {};

    function d(i) {
        if (e[i]) return e[i].exports;
        var n = e[i] = {
            i: i,
            l: !1,
            exports: {}
        };
        return t[i].call(n.exports, n, n.exports, d), n.l = !0, n.exports
    }
    d.m = t, d.c = e, d.d = function(t, e, i) {
        d.o(t, e) || Object.defineProperty(t, e, {
            enumerable: !0,
            get: i
        })
    }, d.r = function(t) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(t, "__esModule", {
            value: !0
        })
    }, d.t = function(t, e) {
        if (1 & e && (t = d(t)), 8 & e) return t;
        if (4 & e && "object" == typeof t && t && t.__esModule) return t;
        var i = Object.create(null);
        if (d.r(i), Object.defineProperty(i, "default", {
                enumerable: !0,
                value: t
            }), 2 & e && "string" != typeof t)
            for (var n in t) d.d(i, n, function(e) {
                return t[e]
            }.bind(null, n));
        return i
    }, d.n = function(t) {
        var e = t && t.__esModule ? function() {
            return t.default
        } : function() {
            return t
        };
        return d.d(e, "a", e), e
    }, d.o = function(t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, d.p = "/", d(d.s = 2)
}([function(t, e, d) {
    var i;
    /*!
     * jQuery JavaScript Library v3.4.1
     * https://jquery.com/
     *
     * Includes Sizzle.js
     * https://sizzlejs.com/
     *
     * Copyright JS Foundation and other contributors
     * Released under the MIT license
     * https://jquery.org/license
     *
     * Date: 2019-05-01T21:04Z
     */
    ! function(e, d) {
        "use strict";
        "object" == typeof t.exports ? t.exports = e.document ? d(e, !0) : function(t) {
            if (!t.document) throw new Error("jQuery requires a window with a document");
            return d(t)
        } : d(e)
    }("undefined" != typeof window ? window : this, (function(d, n) {
        "use strict";
        var o = [],
            r = d.document,
            a = Object.getPrototypeOf,
            s = o.slice,
            l = o.concat,
            u = o.push,
            p = o.indexOf,
            c = {},
            f = c.toString,
            h = c.hasOwnProperty,
            $ = h.toString,
            g = $.call(Object),
            m = {},
            b = function(t) {
                return "function" == typeof t && "number" != typeof t.nodeType
            },
            x = function(t) {
                return null != t && t === t.window
            },
            _ = {
                type: !0,
                src: !0,
                nonce: !0,
                noModule: !0
            };

        function y(t, e, d) {
            var i, n, o = (d = d || r).createElement("script");
            if (o.text = t, e)
                for (i in _)(n = e[i] || e.getAttribute && e.getAttribute(i)) && o.setAttribute(i, n);
            d.head.appendChild(o).parentNode.removeChild(o)
        }

        function v(t) {
            return null == t ? t + "" : "object" == typeof t || "function" == typeof t ? c[f.call(t)] || "object" : typeof t
        }
        var w = function(t, e) {
                return new w.fn.init(t, e)
            },
            k = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;

        function C(t) {
            var e = !!t && "length" in t && t.length,
                d = v(t);
            return !b(t) && !x(t) && ("array" === d || 0 === e || "number" == typeof e && e > 0 && e - 1 in t)
        }
        w.fn = w.prototype = {
            jquery: "3.4.1",
            constructor: w,
            length: 0,
            toArray: function() {
                return s.call(this)
            },
            get: function(t) {
                return null == t ? s.call(this) : t < 0 ? this[t + this.length] : this[t]
            },
            pushStack: function(t) {
                var e = w.merge(this.constructor(), t);
                return e.prevObject = this, e
            },
            each: function(t) {
                return w.each(this, t)
            },
            map: function(t) {
                return this.pushStack(w.map(this, (function(e, d) {
                    return t.call(e, d, e)
                })))
            },
            slice: function() {
                return this.pushStack(s.apply(this, arguments))
            },
            first: function() {
                return this.eq(0)
            },
            last: function() {
                return this.eq(-1)
            },
            eq: function(t) {
                var e = this.length,
                    d = +t + (t < 0 ? e : 0);
                return this.pushStack(d >= 0 && d < e ? [this[d]] : [])
            },
            end: function() {
                return this.prevObject || this.constructor()
            },
            push: u,
            sort: o.sort,
            splice: o.splice
        }, w.extend = w.fn.extend = function() {
            var t, e, d, i, n, o, r = arguments[0] || {},
                a = 1,
                s = arguments.length,
                l = !1;
            for ("boolean" == typeof r && (l = r, r = arguments[a] || {}, a++), "object" == typeof r || b(r) || (r = {}), a === s && (r = this, a--); a < s; a++)
                if (null != (t = arguments[a]))
                    for (e in t) i = t[e], "__proto__" !== e && r !== i && (l && i && (w.isPlainObject(i) || (n = Array.isArray(i))) ? (d = r[e], o = n && !Array.isArray(d) ? [] : n || w.isPlainObject(d) ? d : {}, n = !1, r[e] = w.extend(l, o, i)) : void 0 !== i && (r[e] = i));
            return r
        }, w.extend({
            expando: "jQuery" + ("3.4.1" + Math.random()).replace(/\D/g, ""),
            isReady: !0,
            error: function(t) {
                throw new Error(t)
            },
            noop: function() {},
            isPlainObject: function(t) {
                var e, d;
                return !(!t || "[object Object]" !== f.call(t)) && (!(e = a(t)) || "function" == typeof(d = h.call(e, "constructor") && e.constructor) && $.call(d) === g)
            },
            isEmptyObject: function(t) {
                var e;
                for (e in t) return !1;
                return !0
            },
            globalEval: function(t, e) {
                y(t, {
                    nonce: e && e.nonce
                })
            },
            each: function(t, e) {
                var d, i = 0;
                if (C(t))
                    for (d = t.length; i < d && !1 !== e.call(t[i], i, t[i]); i++);
                else
                    for (i in t)
                        if (!1 === e.call(t[i], i, t[i])) break;
                return t
            },
            trim: function(t) {
                return null == t ? "" : (t + "").replace(k, "")
            },
            makeArray: function(t, e) {
                var d = e || [];
                return null != t && (C(Object(t)) ? w.merge(d, "string" == typeof t ? [t] : t) : u.call(d, t)), d
            },
            inArray: function(t, e, d) {
                return null == e ? -1 : p.call(e, t, d)
            },
            merge: function(t, e) {
                for (var d = +e.length, i = 0, n = t.length; i < d; i++) t[n++] = e[i];
                return t.length = n, t
            },
            grep: function(t, e, d) {
                for (var i = [], n = 0, o = t.length, r = !d; n < o; n++) !e(t[n], n) !== r && i.push(t[n]);
                return i
            },
            map: function(t, e, d) {
                var i, n, o = 0,
                    r = [];
                if (C(t))
                    for (i = t.length; o < i; o++) null != (n = e(t[o], o, d)) && r.push(n);
                else
                    for (o in t) null != (n = e(t[o], o, d)) && r.push(n);
                return l.apply([], r)
            },
            guid: 1,
            support: m
        }), "function" == typeof Symbol && (w.fn[Symbol.iterator] = o[Symbol.iterator]), w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), (function(t, e) {
            c["[object " + e + "]"] = e.toLowerCase()
        }));
        var T =
            /*!
             * Sizzle CSS Selector Engine v2.3.4
             * https://sizzlejs.com/
             *
             * Copyright JS Foundation and other contributors
             * Released under the MIT license
             * https://js.foundation/
             *
             * Date: 2019-04-08
             */
            function(t) {
                var e, d, i, n, o, r, a, s, l, u, p, c, f, h, $, g, m, b, x, _ = "sizzle" + 1 * new Date,
                    y = t.document,
                    v = 0,
                    w = 0,
                    k = st(),
                    C = st(),
                    T = st(),
                    S = st(),
                    E = function(t, e) {
                        return t === e && (p = !0), 0
                    },
                    N = {}.hasOwnProperty,
                    L = [],
                    A = L.pop,
                    I = L.push,
                    D = L.push,
                    M = L.slice,
                    j = function(t, e) {
                        for (var d = 0, i = t.length; d < i; d++)
                            if (t[d] === e) return d;
                        return -1
                    },
                    P = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                    O = "[\\x20\\t\\r\\n\\f]",
                    z = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
                    B = "\\[" + O + "*(" + z + ")(?:" + O + "*([*^$|!~]?=)" + O + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + z + "))|)" + O + "*\\]",
                    H = ":(" + z + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + B + ")*)|.*)\\)|)",
                    R = new RegExp(O + "+", "g"),
                    F = new RegExp("^" + O + "+|((?:^|[^\\\\])(?:\\\\.)*)" + O + "+$", "g"),
                    q = new RegExp("^" + O + "*," + O + "*"),
                    G = new RegExp("^" + O + "*([>+~]|" + O + ")" + O + "*"),
                    U = new RegExp(O + "|>"),
                    W = new RegExp(H),
                    K = new RegExp("^" + z + "$"),
                    V = {
                        ID: new RegExp("^#(" + z + ")"),
                        CLASS: new RegExp("^\\.(" + z + ")"),
                        TAG: new RegExp("^(" + z + "|[*])"),
                        ATTR: new RegExp("^" + B),
                        PSEUDO: new RegExp("^" + H),
                        CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + O + "*(even|odd|(([+-]|)(\\d*)n|)" + O + "*(?:([+-]|)" + O + "*(\\d+)|))" + O + "*\\)|)", "i"),
                        bool: new RegExp("^(?:" + P + ")$", "i"),
                        needsContext: new RegExp("^" + O + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + O + "*((?:-\\d)?\\d*)" + O + "*\\)|)(?=[^-]|$)", "i")
                    },
                    Y = /HTML$/i,
                    Z = /^(?:input|select|textarea|button)$/i,
                    J = /^h\d$/i,
                    X = /^[^{]+\{\s*\[native \w/,
                    Q = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
                    tt = /[+~]/,
                    et = new RegExp("\\\\([\\da-f]{1,6}" + O + "?|(" + O + ")|.)", "ig"),
                    dt = function(t, e, d) {
                        var i = "0x" + e - 65536;
                        return i != i || d ? e : i < 0 ? String.fromCharCode(i + 65536) : String.fromCharCode(i >> 10 | 55296, 1023 & i | 56320)
                    },
                    it = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
                    nt = function(t, e) {
                        return e ? "\0" === t ? "�" : t.slice(0, -1) + "\\" + t.charCodeAt(t.length - 1).toString(16) + " " : "\\" + t
                    },
                    ot = function() {
                        c()
                    },
                    rt = _t((function(t) {
                        return !0 === t.disabled && "fieldset" === t.nodeName.toLowerCase()
                    }), {
                        dir: "parentNode",
                        next: "legend"
                    });
                try {
                    D.apply(L = M.call(y.childNodes), y.childNodes), L[y.childNodes.length].nodeType
                } catch (t) {
                    D = {
                        apply: L.length ? function(t, e) {
                            I.apply(t, M.call(e))
                        } : function(t, e) {
                            for (var d = t.length, i = 0; t[d++] = e[i++];);
                            t.length = d - 1
                        }
                    }
                }

                function at(t, e, i, n) {
                    var o, a, l, u, p, h, m, b = e && e.ownerDocument,
                        v = e ? e.nodeType : 9;
                    if (i = i || [], "string" != typeof t || !t || 1 !== v && 9 !== v && 11 !== v) return i;
                    if (!n && ((e ? e.ownerDocument || e : y) !== f && c(e), e = e || f, $)) {
                        if (11 !== v && (p = Q.exec(t)))
                            if (o = p[1]) {
                                if (9 === v) {
                                    if (!(l = e.getElementById(o))) return i;
                                    if (l.id === o) return i.push(l), i
                                } else if (b && (l = b.getElementById(o)) && x(e, l) && l.id === o) return i.push(l), i
                            } else {
                                if (p[2]) return D.apply(i, e.getElementsByTagName(t)), i;
                                if ((o = p[3]) && d.getElementsByClassName && e.getElementsByClassName) return D.apply(i, e.getElementsByClassName(o)), i
                            }
                        if (d.qsa && !S[t + " "] && (!g || !g.test(t)) && (1 !== v || "object" !== e.nodeName.toLowerCase())) {
                            if (m = t, b = e, 1 === v && U.test(t)) {
                                for ((u = e.getAttribute("id")) ? u = u.replace(it, nt) : e.setAttribute("id", u = _), a = (h = r(t)).length; a--;) h[a] = "#" + u + " " + xt(h[a]);
                                m = h.join(","), b = tt.test(t) && mt(e.parentNode) || e
                            }
                            try {
                                return D.apply(i, b.querySelectorAll(m)), i
                            } catch (e) {
                                S(t, !0)
                            } finally {
                                u === _ && e.removeAttribute("id")
                            }
                        }
                    }
                    return s(t.replace(F, "$1"), e, i, n)
                }

                function st() {
                    var t = [];
                    return function e(d, n) {
                        return t.push(d + " ") > i.cacheLength && delete e[t.shift()], e[d + " "] = n
                    }
                }

                function lt(t) {
                    return t[_] = !0, t
                }

                function ut(t) {
                    var e = f.createElement("fieldset");
                    try {
                        return !!t(e)
                    } catch (t) {
                        return !1
                    } finally {
                        e.parentNode && e.parentNode.removeChild(e), e = null
                    }
                }

                function pt(t, e) {
                    for (var d = t.split("|"), n = d.length; n--;) i.attrHandle[d[n]] = e
                }

                function ct(t, e) {
                    var d = e && t,
                        i = d && 1 === t.nodeType && 1 === e.nodeType && t.sourceIndex - e.sourceIndex;
                    if (i) return i;
                    if (d)
                        for (; d = d.nextSibling;)
                            if (d === e) return -1;
                    return t ? 1 : -1
                }

                function ft(t) {
                    return function(e) {
                        return "input" === e.nodeName.toLowerCase() && e.type === t
                    }
                }

                function ht(t) {
                    return function(e) {
                        var d = e.nodeName.toLowerCase();
                        return ("input" === d || "button" === d) && e.type === t
                    }
                }

                function $t(t) {
                    return function(e) {
                        return "form" in e ? e.parentNode && !1 === e.disabled ? "label" in e ? "label" in e.parentNode ? e.parentNode.disabled === t : e.disabled === t : e.isDisabled === t || e.isDisabled !== !t && rt(e) === t : e.disabled === t : "label" in e && e.disabled === t
                    }
                }

                function gt(t) {
                    return lt((function(e) {
                        return e = +e, lt((function(d, i) {
                            for (var n, o = t([], d.length, e), r = o.length; r--;) d[n = o[r]] && (d[n] = !(i[n] = d[n]))
                        }))
                    }))
                }

                function mt(t) {
                    return t && void 0 !== t.getElementsByTagName && t
                }
                for (e in d = at.support = {}, o = at.isXML = function(t) {
                        var e = t.namespaceURI,
                            d = (t.ownerDocument || t).documentElement;
                        return !Y.test(e || d && d.nodeName || "HTML")
                    }, c = at.setDocument = function(t) {
                        var e, n, r = t ? t.ownerDocument || t : y;
                        return r !== f && 9 === r.nodeType && r.documentElement ? (h = (f = r).documentElement, $ = !o(f), y !== f && (n = f.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", ot, !1) : n.attachEvent && n.attachEvent("onunload", ot)), d.attributes = ut((function(t) {
                            return t.className = "i", !t.getAttribute("className")
                        })), d.getElementsByTagName = ut((function(t) {
                            return t.appendChild(f.createComment("")), !t.getElementsByTagName("*").length
                        })), d.getElementsByClassName = X.test(f.getElementsByClassName), d.getById = ut((function(t) {
                            return h.appendChild(t).id = _, !f.getElementsByName || !f.getElementsByName(_).length
                        })), d.getById ? (i.filter.ID = function(t) {
                            var e = t.replace(et, dt);
                            return function(t) {
                                return t.getAttribute("id") === e
                            }
                        }, i.find.ID = function(t, e) {
                            if (void 0 !== e.getElementById && $) {
                                var d = e.getElementById(t);
                                return d ? [d] : []
                            }
                        }) : (i.filter.ID = function(t) {
                            var e = t.replace(et, dt);
                            return function(t) {
                                var d = void 0 !== t.getAttributeNode && t.getAttributeNode("id");
                                return d && d.value === e
                            }
                        }, i.find.ID = function(t, e) {
                            if (void 0 !== e.getElementById && $) {
                                var d, i, n, o = e.getElementById(t);
                                if (o) {
                                    if ((d = o.getAttributeNode("id")) && d.value === t) return [o];
                                    for (n = e.getElementsByName(t), i = 0; o = n[i++];)
                                        if ((d = o.getAttributeNode("id")) && d.value === t) return [o]
                                }
                                return []
                            }
                        }), i.find.TAG = d.getElementsByTagName ? function(t, e) {
                            return void 0 !== e.getElementsByTagName ? e.getElementsByTagName(t) : d.qsa ? e.querySelectorAll(t) : void 0
                        } : function(t, e) {
                            var d, i = [],
                                n = 0,
                                o = e.getElementsByTagName(t);
                            if ("*" === t) {
                                for (; d = o[n++];) 1 === d.nodeType && i.push(d);
                                return i
                            }
                            return o
                        }, i.find.CLASS = d.getElementsByClassName && function(t, e) {
                            if (void 0 !== e.getElementsByClassName && $) return e.getElementsByClassName(t)
                        }, m = [], g = [], (d.qsa = X.test(f.querySelectorAll)) && (ut((function(t) {
                            h.appendChild(t).innerHTML = "<a id='" + _ + "'></a><select id='" + _ + "-\r\\' msallowcapture=''><option selected=''></option></select>", t.querySelectorAll("[msallowcapture^='']").length && g.push("[*^$]=" + O + "*(?:''|\"\")"), t.querySelectorAll("[selected]").length || g.push("\\[" + O + "*(?:value|" + P + ")"), t.querySelectorAll("[id~=" + _ + "-]").length || g.push("~="), t.querySelectorAll(":checked").length || g.push(":checked"), t.querySelectorAll("a#" + _ + "+*").length || g.push(".#.+[+~]")
                        })), ut((function(t) {
                            t.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                            var e = f.createElement("input");
                            e.setAttribute("type", "hidden"), t.appendChild(e).setAttribute("name", "D"), t.querySelectorAll("[name=d]").length && g.push("name" + O + "*[*^$|!~]?="), 2 !== t.querySelectorAll(":enabled").length && g.push(":enabled", ":disabled"), h.appendChild(t).disabled = !0, 2 !== t.querySelectorAll(":disabled").length && g.push(":enabled", ":disabled"), t.querySelectorAll("*,:x"), g.push(",.*:")
                        }))), (d.matchesSelector = X.test(b = h.matches || h.webkitMatchesSelector || h.mozMatchesSelector || h.oMatchesSelector || h.msMatchesSelector)) && ut((function(t) {
                            d.disconnectedMatch = b.call(t, "*"), b.call(t, "[s!='']:x"), m.push("!=", H)
                        })), g = g.length && new RegExp(g.join("|")), m = m.length && new RegExp(m.join("|")), e = X.test(h.compareDocumentPosition), x = e || X.test(h.contains) ? function(t, e) {
                            var d = 9 === t.nodeType ? t.documentElement : t,
                                i = e && e.parentNode;
                            return t === i || !(!i || 1 !== i.nodeType || !(d.contains ? d.contains(i) : t.compareDocumentPosition && 16 & t.compareDocumentPosition(i)))
                        } : function(t, e) {
                            if (e)
                                for (; e = e.parentNode;)
                                    if (e === t) return !0;
                            return !1
                        }, E = e ? function(t, e) {
                            if (t === e) return p = !0, 0;
                            var i = !t.compareDocumentPosition - !e.compareDocumentPosition;
                            return i || (1 & (i = (t.ownerDocument || t) === (e.ownerDocument || e) ? t.compareDocumentPosition(e) : 1) || !d.sortDetached && e.compareDocumentPosition(t) === i ? t === f || t.ownerDocument === y && x(y, t) ? -1 : e === f || e.ownerDocument === y && x(y, e) ? 1 : u ? j(u, t) - j(u, e) : 0 : 4 & i ? -1 : 1)
                        } : function(t, e) {
                            if (t === e) return p = !0, 0;
                            var d, i = 0,
                                n = t.parentNode,
                                o = e.parentNode,
                                r = [t],
                                a = [e];
                            if (!n || !o) return t === f ? -1 : e === f ? 1 : n ? -1 : o ? 1 : u ? j(u, t) - j(u, e) : 0;
                            if (n === o) return ct(t, e);
                            for (d = t; d = d.parentNode;) r.unshift(d);
                            for (d = e; d = d.parentNode;) a.unshift(d);
                            for (; r[i] === a[i];) i++;
                            return i ? ct(r[i], a[i]) : r[i] === y ? -1 : a[i] === y ? 1 : 0
                        }, f) : f
                    }, at.matches = function(t, e) {
                        return at(t, null, null, e)
                    }, at.matchesSelector = function(t, e) {
                        if ((t.ownerDocument || t) !== f && c(t), d.matchesSelector && $ && !S[e + " "] && (!m || !m.test(e)) && (!g || !g.test(e))) try {
                            var i = b.call(t, e);
                            if (i || d.disconnectedMatch || t.document && 11 !== t.document.nodeType) return i
                        } catch (t) {
                            S(e, !0)
                        }
                        return at(e, f, null, [t]).length > 0
                    }, at.contains = function(t, e) {
                        return (t.ownerDocument || t) !== f && c(t), x(t, e)
                    }, at.attr = function(t, e) {
                        (t.ownerDocument || t) !== f && c(t);
                        var n = i.attrHandle[e.toLowerCase()],
                            o = n && N.call(i.attrHandle, e.toLowerCase()) ? n(t, e, !$) : void 0;
                        return void 0 !== o ? o : d.attributes || !$ ? t.getAttribute(e) : (o = t.getAttributeNode(e)) && o.specified ? o.value : null
                    }, at.escape = function(t) {
                        return (t + "").replace(it, nt)
                    }, at.error = function(t) {
                        throw new Error("Syntax error, unrecognized expression: " + t)
                    }, at.uniqueSort = function(t) {
                        var e, i = [],
                            n = 0,
                            o = 0;
                        if (p = !d.detectDuplicates, u = !d.sortStable && t.slice(0), t.sort(E), p) {
                            for (; e = t[o++];) e === t[o] && (n = i.push(o));
                            for (; n--;) t.splice(i[n], 1)
                        }
                        return u = null, t
                    }, n = at.getText = function(t) {
                        var e, d = "",
                            i = 0,
                            o = t.nodeType;
                        if (o) {
                            if (1 === o || 9 === o || 11 === o) {
                                if ("string" == typeof t.textContent) return t.textContent;
                                for (t = t.firstChild; t; t = t.nextSibling) d += n(t)
                            } else if (3 === o || 4 === o) return t.nodeValue
                        } else
                            for (; e = t[i++];) d += n(e);
                        return d
                    }, (i = at.selectors = {
                        cacheLength: 50,
                        createPseudo: lt,
                        match: V,
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
                            ATTR: function(t) {
                                return t[1] = t[1].replace(et, dt), t[3] = (t[3] || t[4] || t[5] || "").replace(et, dt), "~=" === t[2] && (t[3] = " " + t[3] + " "), t.slice(0, 4)
                            },
                            CHILD: function(t) {
                                return t[1] = t[1].toLowerCase(), "nth" === t[1].slice(0, 3) ? (t[3] || at.error(t[0]), t[4] = +(t[4] ? t[5] + (t[6] || 1) : 2 * ("even" === t[3] || "odd" === t[3])), t[5] = +(t[7] + t[8] || "odd" === t[3])) : t[3] && at.error(t[0]), t
                            },
                            PSEUDO: function(t) {
                                var e, d = !t[6] && t[2];
                                return V.CHILD.test(t[0]) ? null : (t[3] ? t[2] = t[4] || t[5] || "" : d && W.test(d) && (e = r(d, !0)) && (e = d.indexOf(")", d.length - e) - d.length) && (t[0] = t[0].slice(0, e), t[2] = d.slice(0, e)), t.slice(0, 3))
                            }
                        },
                        filter: {
                            TAG: function(t) {
                                var e = t.replace(et, dt).toLowerCase();
                                return "*" === t ? function() {
                                    return !0
                                } : function(t) {
                                    return t.nodeName && t.nodeName.toLowerCase() === e
                                }
                            },
                            CLASS: function(t) {
                                var e = k[t + " "];
                                return e || (e = new RegExp("(^|" + O + ")" + t + "(" + O + "|$)")) && k(t, (function(t) {
                                    return e.test("string" == typeof t.className && t.className || void 0 !== t.getAttribute && t.getAttribute("class") || "")
                                }))
                            },
                            ATTR: function(t, e, d) {
                                return function(i) {
                                    var n = at.attr(i, t);
                                    return null == n ? "!=" === e : !e || (n += "", "=" === e ? n === d : "!=" === e ? n !== d : "^=" === e ? d && 0 === n.indexOf(d) : "*=" === e ? d && n.indexOf(d) > -1 : "$=" === e ? d && n.slice(-d.length) === d : "~=" === e ? (" " + n.replace(R, " ") + " ").indexOf(d) > -1 : "|=" === e && (n === d || n.slice(0, d.length + 1) === d + "-"))
                                }
                            },
                            CHILD: function(t, e, d, i, n) {
                                var o = "nth" !== t.slice(0, 3),
                                    r = "last" !== t.slice(-4),
                                    a = "of-type" === e;
                                return 1 === i && 0 === n ? function(t) {
                                    return !!t.parentNode
                                } : function(e, d, s) {
                                    var l, u, p, c, f, h, $ = o !== r ? "nextSibling" : "previousSibling",
                                        g = e.parentNode,
                                        m = a && e.nodeName.toLowerCase(),
                                        b = !s && !a,
                                        x = !1;
                                    if (g) {
                                        if (o) {
                                            for (; $;) {
                                                for (c = e; c = c[$];)
                                                    if (a ? c.nodeName.toLowerCase() === m : 1 === c.nodeType) return !1;
                                                h = $ = "only" === t && !h && "nextSibling"
                                            }
                                            return !0
                                        }
                                        if (h = [r ? g.firstChild : g.lastChild], r && b) {
                                            for (x = (f = (l = (u = (p = (c = g)[_] || (c[_] = {}))[c.uniqueID] || (p[c.uniqueID] = {}))[t] || [])[0] === v && l[1]) && l[2], c = f && g.childNodes[f]; c = ++f && c && c[$] || (x = f = 0) || h.pop();)
                                                if (1 === c.nodeType && ++x && c === e) {
                                                    u[t] = [v, f, x];
                                                    break
                                                }
                                        } else if (b && (x = f = (l = (u = (p = (c = e)[_] || (c[_] = {}))[c.uniqueID] || (p[c.uniqueID] = {}))[t] || [])[0] === v && l[1]), !1 === x)
                                            for (;
                                                (c = ++f && c && c[$] || (x = f = 0) || h.pop()) && ((a ? c.nodeName.toLowerCase() !== m : 1 !== c.nodeType) || !++x || (b && ((u = (p = c[_] || (c[_] = {}))[c.uniqueID] || (p[c.uniqueID] = {}))[t] = [v, x]), c !== e)););
                                        return (x -= n) === i || x % i == 0 && x / i >= 0
                                    }
                                }
                            },
                            PSEUDO: function(t, e) {
                                var d, n = i.pseudos[t] || i.setFilters[t.toLowerCase()] || at.error("unsupported pseudo: " + t);
                                return n[_] ? n(e) : n.length > 1 ? (d = [t, t, "", e], i.setFilters.hasOwnProperty(t.toLowerCase()) ? lt((function(t, d) {
                                    for (var i, o = n(t, e), r = o.length; r--;) t[i = j(t, o[r])] = !(d[i] = o[r])
                                })) : function(t) {
                                    return n(t, 0, d)
                                }) : n
                            }
                        },
                        pseudos: {
                            not: lt((function(t) {
                                var e = [],
                                    d = [],
                                    i = a(t.replace(F, "$1"));
                                return i[_] ? lt((function(t, e, d, n) {
                                    for (var o, r = i(t, null, n, []), a = t.length; a--;)(o = r[a]) && (t[a] = !(e[a] = o))
                                })) : function(t, n, o) {
                                    return e[0] = t, i(e, null, o, d), e[0] = null, !d.pop()
                                }
                            })),
                            has: lt((function(t) {
                                return function(e) {
                                    return at(t, e).length > 0
                                }
                            })),
                            contains: lt((function(t) {
                                return t = t.replace(et, dt),
                                    function(e) {
                                        return (e.textContent || n(e)).indexOf(t) > -1
                                    }
                            })),
                            lang: lt((function(t) {
                                return K.test(t || "") || at.error("unsupported lang: " + t), t = t.replace(et, dt).toLowerCase(),
                                    function(e) {
                                        var d;
                                        do {
                                            if (d = $ ? e.lang : e.getAttribute("xml:lang") || e.getAttribute("lang")) return (d = d.toLowerCase()) === t || 0 === d.indexOf(t + "-")
                                        } while ((e = e.parentNode) && 1 === e.nodeType);
                                        return !1
                                    }
                            })),
                            target: function(e) {
                                var d = t.location && t.location.hash;
                                return d && d.slice(1) === e.id
                            },
                            root: function(t) {
                                return t === h
                            },
                            focus: function(t) {
                                return t === f.activeElement && (!f.hasFocus || f.hasFocus()) && !!(t.type || t.href || ~t.tabIndex)
                            },
                            enabled: $t(!1),
                            disabled: $t(!0),
                            checked: function(t) {
                                var e = t.nodeName.toLowerCase();
                                return "input" === e && !!t.checked || "option" === e && !!t.selected
                            },
                            selected: function(t) {
                                return t.parentNode && t.parentNode.selectedIndex, !0 === t.selected
                            },
                            empty: function(t) {
                                for (t = t.firstChild; t; t = t.nextSibling)
                                    if (t.nodeType < 6) return !1;
                                return !0
                            },
                            parent: function(t) {
                                return !i.pseudos.empty(t)
                            },
                            header: function(t) {
                                return J.test(t.nodeName)
                            },
                            input: function(t) {
                                return Z.test(t.nodeName)
                            },
                            button: function(t) {
                                var e = t.nodeName.toLowerCase();
                                return "input" === e && "button" === t.type || "button" === e
                            },
                            text: function(t) {
                                var e;
                                return "input" === t.nodeName.toLowerCase() && "text" === t.type && (null == (e = t.getAttribute("type")) || "text" === e.toLowerCase())
                            },
                            first: gt((function() {
                                return [0]
                            })),
                            last: gt((function(t, e) {
                                return [e - 1]
                            })),
                            eq: gt((function(t, e, d) {
                                return [d < 0 ? d + e : d]
                            })),
                            even: gt((function(t, e) {
                                for (var d = 0; d < e; d += 2) t.push(d);
                                return t
                            })),
                            odd: gt((function(t, e) {
                                for (var d = 1; d < e; d += 2) t.push(d);
                                return t
                            })),
                            lt: gt((function(t, e, d) {
                                for (var i = d < 0 ? d + e : d > e ? e : d; --i >= 0;) t.push(i);
                                return t
                            })),
                            gt: gt((function(t, e, d) {
                                for (var i = d < 0 ? d + e : d; ++i < e;) t.push(i);
                                return t
                            }))
                        }
                    }).pseudos.nth = i.pseudos.eq, {
                        radio: !0,
                        checkbox: !0,
                        file: !0,
                        password: !0,
                        image: !0
                    }) i.pseudos[e] = ft(e);
                for (e in {
                        submit: !0,
                        reset: !0
                    }) i.pseudos[e] = ht(e);

                function bt() {}

                function xt(t) {
                    for (var e = 0, d = t.length, i = ""; e < d; e++) i += t[e].value;
                    return i
                }

                function _t(t, e, d) {
                    var i = e.dir,
                        n = e.next,
                        o = n || i,
                        r = d && "parentNode" === o,
                        a = w++;
                    return e.first ? function(e, d, n) {
                        for (; e = e[i];)
                            if (1 === e.nodeType || r) return t(e, d, n);
                        return !1
                    } : function(e, d, s) {
                        var l, u, p, c = [v, a];
                        if (s) {
                            for (; e = e[i];)
                                if ((1 === e.nodeType || r) && t(e, d, s)) return !0
                        } else
                            for (; e = e[i];)
                                if (1 === e.nodeType || r)
                                    if (u = (p = e[_] || (e[_] = {}))[e.uniqueID] || (p[e.uniqueID] = {}), n && n === e.nodeName.toLowerCase()) e = e[i] || e;
                                    else {
                                        if ((l = u[o]) && l[0] === v && l[1] === a) return c[2] = l[2];
                                        if (u[o] = c, c[2] = t(e, d, s)) return !0
                                    } return !1
                    }
                }

                function yt(t) {
                    return t.length > 1 ? function(e, d, i) {
                        for (var n = t.length; n--;)
                            if (!t[n](e, d, i)) return !1;
                        return !0
                    } : t[0]
                }

                function vt(t, e, d, i, n) {
                    for (var o, r = [], a = 0, s = t.length, l = null != e; a < s; a++)(o = t[a]) && (d && !d(o, i, n) || (r.push(o), l && e.push(a)));
                    return r
                }

                function wt(t, e, d, i, n, o) {
                    return i && !i[_] && (i = wt(i)), n && !n[_] && (n = wt(n, o)), lt((function(o, r, a, s) {
                        var l, u, p, c = [],
                            f = [],
                            h = r.length,
                            $ = o || function(t, e, d) {
                                for (var i = 0, n = e.length; i < n; i++) at(t, e[i], d);
                                return d
                            }(e || "*", a.nodeType ? [a] : a, []),
                            g = !t || !o && e ? $ : vt($, c, t, a, s),
                            m = d ? n || (o ? t : h || i) ? [] : r : g;
                        if (d && d(g, m, a, s), i)
                            for (l = vt(m, f), i(l, [], a, s), u = l.length; u--;)(p = l[u]) && (m[f[u]] = !(g[f[u]] = p));
                        if (o) {
                            if (n || t) {
                                if (n) {
                                    for (l = [], u = m.length; u--;)(p = m[u]) && l.push(g[u] = p);
                                    n(null, m = [], l, s)
                                }
                                for (u = m.length; u--;)(p = m[u]) && (l = n ? j(o, p) : c[u]) > -1 && (o[l] = !(r[l] = p))
                            }
                        } else m = vt(m === r ? m.splice(h, m.length) : m), n ? n(null, r, m, s) : D.apply(r, m)
                    }))
                }

                function kt(t) {
                    for (var e, d, n, o = t.length, r = i.relative[t[0].type], a = r || i.relative[" "], s = r ? 1 : 0, u = _t((function(t) {
                            return t === e
                        }), a, !0), p = _t((function(t) {
                            return j(e, t) > -1
                        }), a, !0), c = [function(t, d, i) {
                            var n = !r && (i || d !== l) || ((e = d).nodeType ? u(t, d, i) : p(t, d, i));
                            return e = null, n
                        }]; s < o; s++)
                        if (d = i.relative[t[s].type]) c = [_t(yt(c), d)];
                        else {
                            if ((d = i.filter[t[s].type].apply(null, t[s].matches))[_]) {
                                for (n = ++s; n < o && !i.relative[t[n].type]; n++);
                                return wt(s > 1 && yt(c), s > 1 && xt(t.slice(0, s - 1).concat({
                                    value: " " === t[s - 2].type ? "*" : ""
                                })).replace(F, "$1"), d, s < n && kt(t.slice(s, n)), n < o && kt(t = t.slice(n)), n < o && xt(t))
                            }
                            c.push(d)
                        }
                    return yt(c)
                }
                return bt.prototype = i.filters = i.pseudos, i.setFilters = new bt, r = at.tokenize = function(t, e) {
                    var d, n, o, r, a, s, l, u = C[t + " "];
                    if (u) return e ? 0 : u.slice(0);
                    for (a = t, s = [], l = i.preFilter; a;) {
                        for (r in d && !(n = q.exec(a)) || (n && (a = a.slice(n[0].length) || a), s.push(o = [])), d = !1, (n = G.exec(a)) && (d = n.shift(), o.push({
                                value: d,
                                type: n[0].replace(F, " ")
                            }), a = a.slice(d.length)), i.filter) !(n = V[r].exec(a)) || l[r] && !(n = l[r](n)) || (d = n.shift(), o.push({
                            value: d,
                            type: r,
                            matches: n
                        }), a = a.slice(d.length));
                        if (!d) break
                    }
                    return e ? a.length : a ? at.error(t) : C(t, s).slice(0)
                }, a = at.compile = function(t, e) {
                    var d, n = [],
                        o = [],
                        a = T[t + " "];
                    if (!a) {
                        for (e || (e = r(t)), d = e.length; d--;)(a = kt(e[d]))[_] ? n.push(a) : o.push(a);
                        (a = T(t, function(t, e) {
                            var d = e.length > 0,
                                n = t.length > 0,
                                o = function(o, r, a, s, u) {
                                    var p, h, g, m = 0,
                                        b = "0",
                                        x = o && [],
                                        _ = [],
                                        y = l,
                                        w = o || n && i.find.TAG("*", u),
                                        k = v += null == y ? 1 : Math.random() || .1,
                                        C = w.length;
                                    for (u && (l = r === f || r || u); b !== C && null != (p = w[b]); b++) {
                                        if (n && p) {
                                            for (h = 0, r || p.ownerDocument === f || (c(p), a = !$); g = t[h++];)
                                                if (g(p, r || f, a)) {
                                                    s.push(p);
                                                    break
                                                }
                                            u && (v = k)
                                        }
                                        d && ((p = !g && p) && m--, o && x.push(p))
                                    }
                                    if (m += b, d && b !== m) {
                                        for (h = 0; g = e[h++];) g(x, _, r, a);
                                        if (o) {
                                            if (m > 0)
                                                for (; b--;) x[b] || _[b] || (_[b] = A.call(s));
                                            _ = vt(_)
                                        }
                                        D.apply(s, _), u && !o && _.length > 0 && m + e.length > 1 && at.uniqueSort(s)
                                    }
                                    return u && (v = k, l = y), x
                                };
                            return d ? lt(o) : o
                        }(o, n))).selector = t
                    }
                    return a
                }, s = at.select = function(t, e, d, n) {
                    var o, s, l, u, p, c = "function" == typeof t && t,
                        f = !n && r(t = c.selector || t);
                    if (d = d || [], 1 === f.length) {
                        if ((s = f[0] = f[0].slice(0)).length > 2 && "ID" === (l = s[0]).type && 9 === e.nodeType && $ && i.relative[s[1].type]) {
                            if (!(e = (i.find.ID(l.matches[0].replace(et, dt), e) || [])[0])) return d;
                            c && (e = e.parentNode), t = t.slice(s.shift().value.length)
                        }
                        for (o = V.needsContext.test(t) ? 0 : s.length; o-- && (l = s[o], !i.relative[u = l.type]);)
                            if ((p = i.find[u]) && (n = p(l.matches[0].replace(et, dt), tt.test(s[0].type) && mt(e.parentNode) || e))) {
                                if (s.splice(o, 1), !(t = n.length && xt(s))) return D.apply(d, n), d;
                                break
                            }
                    }
                    return (c || a(t, f))(n, e, !$, d, !e || tt.test(t) && mt(e.parentNode) || e), d
                }, d.sortStable = _.split("").sort(E).join("") === _, d.detectDuplicates = !!p, c(), d.sortDetached = ut((function(t) {
                    return 1 & t.compareDocumentPosition(f.createElement("fieldset"))
                })), ut((function(t) {
                    return t.innerHTML = "<a href='#'></a>", "#" === t.firstChild.getAttribute("href")
                })) || pt("type|href|height|width", (function(t, e, d) {
                    if (!d) return t.getAttribute(e, "type" === e.toLowerCase() ? 1 : 2)
                })), d.attributes && ut((function(t) {
                    return t.innerHTML = "<input/>", t.firstChild.setAttribute("value", ""), "" === t.firstChild.getAttribute("value")
                })) || pt("value", (function(t, e, d) {
                    if (!d && "input" === t.nodeName.toLowerCase()) return t.defaultValue
                })), ut((function(t) {
                    return null == t.getAttribute("disabled")
                })) || pt(P, (function(t, e, d) {
                    var i;
                    if (!d) return !0 === t[e] ? e.toLowerCase() : (i = t.getAttributeNode(e)) && i.specified ? i.value : null
                })), at
            }(d);
        w.find = T, w.expr = T.selectors, w.expr[":"] = w.expr.pseudos, w.uniqueSort = w.unique = T.uniqueSort, w.text = T.getText, w.isXMLDoc = T.isXML, w.contains = T.contains, w.escapeSelector = T.escape;
        var S = function(t, e, d) {
                for (var i = [], n = void 0 !== d;
                    (t = t[e]) && 9 !== t.nodeType;)
                    if (1 === t.nodeType) {
                        if (n && w(t).is(d)) break;
                        i.push(t)
                    }
                return i
            },
            E = function(t, e) {
                for (var d = []; t; t = t.nextSibling) 1 === t.nodeType && t !== e && d.push(t);
                return d
            },
            N = w.expr.match.needsContext;

        function L(t, e) {
            return t.nodeName && t.nodeName.toLowerCase() === e.toLowerCase()
        }
        var A = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

        function I(t, e, d) {
            return b(e) ? w.grep(t, (function(t, i) {
                return !!e.call(t, i, t) !== d
            })) : e.nodeType ? w.grep(t, (function(t) {
                return t === e !== d
            })) : "string" != typeof e ? w.grep(t, (function(t) {
                return p.call(e, t) > -1 !== d
            })) : w.filter(e, t, d)
        }
        w.filter = function(t, e, d) {
            var i = e[0];
            return d && (t = ":not(" + t + ")"), 1 === e.length && 1 === i.nodeType ? w.find.matchesSelector(i, t) ? [i] : [] : w.find.matches(t, w.grep(e, (function(t) {
                return 1 === t.nodeType
            })))
        }, w.fn.extend({
            find: function(t) {
                var e, d, i = this.length,
                    n = this;
                if ("string" != typeof t) return this.pushStack(w(t).filter((function() {
                    for (e = 0; e < i; e++)
                        if (w.contains(n[e], this)) return !0
                })));
                for (d = this.pushStack([]), e = 0; e < i; e++) w.find(t, n[e], d);
                return i > 1 ? w.uniqueSort(d) : d
            },
            filter: function(t) {
                return this.pushStack(I(this, t || [], !1))
            },
            not: function(t) {
                return this.pushStack(I(this, t || [], !0))
            },
            is: function(t) {
                return !!I(this, "string" == typeof t && N.test(t) ? w(t) : t || [], !1).length
            }
        });
        var D, M = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
        (w.fn.init = function(t, e, d) {
            var i, n;
            if (!t) return this;
            if (d = d || D, "string" == typeof t) {
                if (!(i = "<" === t[0] && ">" === t[t.length - 1] && t.length >= 3 ? [null, t, null] : M.exec(t)) || !i[1] && e) return !e || e.jquery ? (e || d).find(t) : this.constructor(e).find(t);
                if (i[1]) {
                    if (e = e instanceof w ? e[0] : e, w.merge(this, w.parseHTML(i[1], e && e.nodeType ? e.ownerDocument || e : r, !0)), A.test(i[1]) && w.isPlainObject(e))
                        for (i in e) b(this[i]) ? this[i](e[i]) : this.attr(i, e[i]);
                    return this
                }
                return (n = r.getElementById(i[2])) && (this[0] = n, this.length = 1), this
            }
            return t.nodeType ? (this[0] = t, this.length = 1, this) : b(t) ? void 0 !== d.ready ? d.ready(t) : t(w) : w.makeArray(t, this)
        }).prototype = w.fn, D = w(r);
        var j = /^(?:parents|prev(?:Until|All))/,
            P = {
                children: !0,
                contents: !0,
                next: !0,
                prev: !0
            };

        function O(t, e) {
            for (;
                (t = t[e]) && 1 !== t.nodeType;);
            return t
        }
        w.fn.extend({
            has: function(t) {
                var e = w(t, this),
                    d = e.length;
                return this.filter((function() {
                    for (var t = 0; t < d; t++)
                        if (w.contains(this, e[t])) return !0
                }))
            },
            closest: function(t, e) {
                var d, i = 0,
                    n = this.length,
                    o = [],
                    r = "string" != typeof t && w(t);
                if (!N.test(t))
                    for (; i < n; i++)
                        for (d = this[i]; d && d !== e; d = d.parentNode)
                            if (d.nodeType < 11 && (r ? r.index(d) > -1 : 1 === d.nodeType && w.find.matchesSelector(d, t))) {
                                o.push(d);
                                break
                            }
                return this.pushStack(o.length > 1 ? w.uniqueSort(o) : o)
            },
            index: function(t) {
                return t ? "string" == typeof t ? p.call(w(t), this[0]) : p.call(this, t.jquery ? t[0] : t) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
            },
            add: function(t, e) {
                return this.pushStack(w.uniqueSort(w.merge(this.get(), w(t, e))))
            },
            addBack: function(t) {
                return this.add(null == t ? this.prevObject : this.prevObject.filter(t))
            }
        }), w.each({
            parent: function(t) {
                var e = t.parentNode;
                return e && 11 !== e.nodeType ? e : null
            },
            parents: function(t) {
                return S(t, "parentNode")
            },
            parentsUntil: function(t, e, d) {
                return S(t, "parentNode", d)
            },
            next: function(t) {
                return O(t, "nextSibling")
            },
            prev: function(t) {
                return O(t, "previousSibling")
            },
            nextAll: function(t) {
                return S(t, "nextSibling")
            },
            prevAll: function(t) {
                return S(t, "previousSibling")
            },
            nextUntil: function(t, e, d) {
                return S(t, "nextSibling", d)
            },
            prevUntil: function(t, e, d) {
                return S(t, "previousSibling", d)
            },
            siblings: function(t) {
                return E((t.parentNode || {}).firstChild, t)
            },
            children: function(t) {
                return E(t.firstChild)
            },
            contents: function(t) {
                return void 0 !== t.contentDocument ? t.contentDocument : (L(t, "template") && (t = t.content || t), w.merge([], t.childNodes))
            }
        }, (function(t, e) {
            w.fn[t] = function(d, i) {
                var n = w.map(this, e, d);
                return "Until" !== t.slice(-5) && (i = d), i && "string" == typeof i && (n = w.filter(i, n)), this.length > 1 && (P[t] || w.uniqueSort(n), j.test(t) && n.reverse()), this.pushStack(n)
            }
        }));
        var z = /[^\x20\t\r\n\f]+/g;

        function B(t) {
            return t
        }

        function H(t) {
            throw t
        }

        function R(t, e, d, i) {
            var n;
            try {
                t && b(n = t.promise) ? n.call(t).done(e).fail(d) : t && b(n = t.then) ? n.call(t, e, d) : e.apply(void 0, [t].slice(i))
            } catch (t) {
                d.apply(void 0, [t])
            }
        }
        w.Callbacks = function(t) {
            t = "string" == typeof t ? function(t) {
                var e = {};
                return w.each(t.match(z) || [], (function(t, d) {
                    e[d] = !0
                })), e
            }(t) : w.extend({}, t);
            var e, d, i, n, o = [],
                r = [],
                a = -1,
                s = function() {
                    for (n = n || t.once, i = e = !0; r.length; a = -1)
                        for (d = r.shift(); ++a < o.length;) !1 === o[a].apply(d[0], d[1]) && t.stopOnFalse && (a = o.length, d = !1);
                    t.memory || (d = !1), e = !1, n && (o = d ? [] : "")
                },
                l = {
                    add: function() {
                        return o && (d && !e && (a = o.length - 1, r.push(d)), function e(d) {
                            w.each(d, (function(d, i) {
                                b(i) ? t.unique && l.has(i) || o.push(i) : i && i.length && "string" !== v(i) && e(i)
                            }))
                        }(arguments), d && !e && s()), this
                    },
                    remove: function() {
                        return w.each(arguments, (function(t, e) {
                            for (var d;
                                (d = w.inArray(e, o, d)) > -1;) o.splice(d, 1), d <= a && a--
                        })), this
                    },
                    has: function(t) {
                        return t ? w.inArray(t, o) > -1 : o.length > 0
                    },
                    empty: function() {
                        return o && (o = []), this
                    },
                    disable: function() {
                        return n = r = [], o = d = "", this
                    },
                    disabled: function() {
                        return !o
                    },
                    lock: function() {
                        return n = r = [], d || e || (o = d = ""), this
                    },
                    locked: function() {
                        return !!n
                    },
                    fireWith: function(t, d) {
                        return n || (d = [t, (d = d || []).slice ? d.slice() : d], r.push(d), e || s()), this
                    },
                    fire: function() {
                        return l.fireWith(this, arguments), this
                    },
                    fired: function() {
                        return !!i
                    }
                };
            return l
        }, w.extend({
            Deferred: function(t) {
                var e = [
                        ["notify", "progress", w.Callbacks("memory"), w.Callbacks("memory"), 2],
                        ["resolve", "done", w.Callbacks("once memory"), w.Callbacks("once memory"), 0, "resolved"],
                        ["reject", "fail", w.Callbacks("once memory"), w.Callbacks("once memory"), 1, "rejected"]
                    ],
                    i = "pending",
                    n = {
                        state: function() {
                            return i
                        },
                        always: function() {
                            return o.done(arguments).fail(arguments), this
                        },
                        catch: function(t) {
                            return n.then(null, t)
                        },
                        pipe: function() {
                            var t = arguments;
                            return w.Deferred((function(d) {
                                w.each(e, (function(e, i) {
                                    var n = b(t[i[4]]) && t[i[4]];
                                    o[i[1]]((function() {
                                        var t = n && n.apply(this, arguments);
                                        t && b(t.promise) ? t.promise().progress(d.notify).done(d.resolve).fail(d.reject) : d[i[0] + "With"](this, n ? [t] : arguments)
                                    }))
                                })), t = null
                            })).promise()
                        },
                        then: function(t, i, n) {
                            var o = 0;

                            function r(t, e, i, n) {
                                return function() {
                                    var a = this,
                                        s = arguments,
                                        l = function() {
                                            var d, l;
                                            if (!(t < o)) {
                                                if ((d = i.apply(a, s)) === e.promise()) throw new TypeError("Thenable self-resolution");
                                                l = d && ("object" == typeof d || "function" == typeof d) && d.then, b(l) ? n ? l.call(d, r(o, e, B, n), r(o, e, H, n)) : (o++, l.call(d, r(o, e, B, n), r(o, e, H, n), r(o, e, B, e.notifyWith))) : (i !== B && (a = void 0, s = [d]), (n || e.resolveWith)(a, s))
                                            }
                                        },
                                        u = n ? l : function() {
                                            try {
                                                l()
                                            } catch (d) {
                                                w.Deferred.exceptionHook && w.Deferred.exceptionHook(d, u.stackTrace), t + 1 >= o && (i !== H && (a = void 0, s = [d]), e.rejectWith(a, s))
                                            }
                                        };
                                    t ? u() : (w.Deferred.getStackHook && (u.stackTrace = w.Deferred.getStackHook()), d.setTimeout(u))
                                }
                            }
                            return w.Deferred((function(d) {
                                e[0][3].add(r(0, d, b(n) ? n : B, d.notifyWith)), e[1][3].add(r(0, d, b(t) ? t : B)), e[2][3].add(r(0, d, b(i) ? i : H))
                            })).promise()
                        },
                        promise: function(t) {
                            return null != t ? w.extend(t, n) : n
                        }
                    },
                    o = {};
                return w.each(e, (function(t, d) {
                    var r = d[2],
                        a = d[5];
                    n[d[1]] = r.add, a && r.add((function() {
                        i = a
                    }), e[3 - t][2].disable, e[3 - t][3].disable, e[0][2].lock, e[0][3].lock), r.add(d[3].fire), o[d[0]] = function() {
                        return o[d[0] + "With"](this === o ? void 0 : this, arguments), this
                    }, o[d[0] + "With"] = r.fireWith
                })), n.promise(o), t && t.call(o, o), o
            },
            when: function(t) {
                var e = arguments.length,
                    d = e,
                    i = Array(d),
                    n = s.call(arguments),
                    o = w.Deferred(),
                    r = function(t) {
                        return function(d) {
                            i[t] = this, n[t] = arguments.length > 1 ? s.call(arguments) : d, --e || o.resolveWith(i, n)
                        }
                    };
                if (e <= 1 && (R(t, o.done(r(d)).resolve, o.reject, !e), "pending" === o.state() || b(n[d] && n[d].then))) return o.then();
                for (; d--;) R(n[d], r(d), o.reject);
                return o.promise()
            }
        });
        var F = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
        w.Deferred.exceptionHook = function(t, e) {
            d.console && d.console.warn && t && F.test(t.name) && d.console.warn("jQuery.Deferred exception: " + t.message, t.stack, e)
        }, w.readyException = function(t) {
            d.setTimeout((function() {
                throw t
            }))
        };
        var q = w.Deferred();

        function G() {
            r.removeEventListener("DOMContentLoaded", G), d.removeEventListener("load", G), w.ready()
        }
        w.fn.ready = function(t) {
            return q.then(t).catch((function(t) {
                w.readyException(t)
            })), this
        }, w.extend({
            isReady: !1,
            readyWait: 1,
            ready: function(t) {
                (!0 === t ? --w.readyWait : w.isReady) || (w.isReady = !0, !0 !== t && --w.readyWait > 0 || q.resolveWith(r, [w]))
            }
        }), w.ready.then = q.then, "complete" === r.readyState || "loading" !== r.readyState && !r.documentElement.doScroll ? d.setTimeout(w.ready) : (r.addEventListener("DOMContentLoaded", G), d.addEventListener("load", G));
        var U = function(t, e, d, i, n, o, r) {
                var a = 0,
                    s = t.length,
                    l = null == d;
                if ("object" === v(d))
                    for (a in n = !0, d) U(t, e, a, d[a], !0, o, r);
                else if (void 0 !== i && (n = !0, b(i) || (r = !0), l && (r ? (e.call(t, i), e = null) : (l = e, e = function(t, e, d) {
                        return l.call(w(t), d)
                    })), e))
                    for (; a < s; a++) e(t[a], d, r ? i : i.call(t[a], a, e(t[a], d)));
                return n ? t : l ? e.call(t) : s ? e(t[0], d) : o
            },
            W = /^-ms-/,
            K = /-([a-z])/g;

        function V(t, e) {
            return e.toUpperCase()
        }

        function Y(t) {
            return t.replace(W, "ms-").replace(K, V)
        }
        var Z = function(t) {
            return 1 === t.nodeType || 9 === t.nodeType || !+t.nodeType
        };

        function J() {
            this.expando = w.expando + J.uid++
        }
        J.uid = 1, J.prototype = {
            cache: function(t) {
                var e = t[this.expando];
                return e || (e = {}, Z(t) && (t.nodeType ? t[this.expando] = e : Object.defineProperty(t, this.expando, {
                    value: e,
                    configurable: !0
                }))), e
            },
            set: function(t, e, d) {
                var i, n = this.cache(t);
                if ("string" == typeof e) n[Y(e)] = d;
                else
                    for (i in e) n[Y(i)] = e[i];
                return n
            },
            get: function(t, e) {
                return void 0 === e ? this.cache(t) : t[this.expando] && t[this.expando][Y(e)]
            },
            access: function(t, e, d) {
                return void 0 === e || e && "string" == typeof e && void 0 === d ? this.get(t, e) : (this.set(t, e, d), void 0 !== d ? d : e)
            },
            remove: function(t, e) {
                var d, i = t[this.expando];
                if (void 0 !== i) {
                    if (void 0 !== e) {
                        d = (e = Array.isArray(e) ? e.map(Y) : (e = Y(e)) in i ? [e] : e.match(z) || []).length;
                        for (; d--;) delete i[e[d]]
                    }(void 0 === e || w.isEmptyObject(i)) && (t.nodeType ? t[this.expando] = void 0 : delete t[this.expando])
                }
            },
            hasData: function(t) {
                var e = t[this.expando];
                return void 0 !== e && !w.isEmptyObject(e)
            }
        };
        var X = new J,
            Q = new J,
            tt = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
            et = /[A-Z]/g;

        function dt(t, e, d) {
            var i;
            if (void 0 === d && 1 === t.nodeType)
                if (i = "data-" + e.replace(et, "-$&").toLowerCase(), "string" == typeof(d = t.getAttribute(i))) {
                    try {
                        d = function(t) {
                            return "true" === t || "false" !== t && ("null" === t ? null : t === +t + "" ? +t : tt.test(t) ? JSON.parse(t) : t)
                        }(d)
                    } catch (t) {}
                    Q.set(t, e, d)
                } else d = void 0;
            return d
        }
        w.extend({
            hasData: function(t) {
                return Q.hasData(t) || X.hasData(t)
            },
            data: function(t, e, d) {
                return Q.access(t, e, d)
            },
            removeData: function(t, e) {
                Q.remove(t, e)
            },
            _data: function(t, e, d) {
                return X.access(t, e, d)
            },
            _removeData: function(t, e) {
                X.remove(t, e)
            }
        }), w.fn.extend({
            data: function(t, e) {
                var d, i, n, o = this[0],
                    r = o && o.attributes;
                if (void 0 === t) {
                    if (this.length && (n = Q.get(o), 1 === o.nodeType && !X.get(o, "hasDataAttrs"))) {
                        for (d = r.length; d--;) r[d] && 0 === (i = r[d].name).indexOf("data-") && (i = Y(i.slice(5)), dt(o, i, n[i]));
                        X.set(o, "hasDataAttrs", !0)
                    }
                    return n
                }
                return "object" == typeof t ? this.each((function() {
                    Q.set(this, t)
                })) : U(this, (function(e) {
                    var d;
                    if (o && void 0 === e) return void 0 !== (d = Q.get(o, t)) ? d : void 0 !== (d = dt(o, t)) ? d : void 0;
                    this.each((function() {
                        Q.set(this, t, e)
                    }))
                }), null, e, arguments.length > 1, null, !0)
            },
            removeData: function(t) {
                return this.each((function() {
                    Q.remove(this, t)
                }))
            }
        }), w.extend({
            queue: function(t, e, d) {
                var i;
                if (t) return e = (e || "fx") + "queue", i = X.get(t, e), d && (!i || Array.isArray(d) ? i = X.access(t, e, w.makeArray(d)) : i.push(d)), i || []
            },
            dequeue: function(t, e) {
                e = e || "fx";
                var d = w.queue(t, e),
                    i = d.length,
                    n = d.shift(),
                    o = w._queueHooks(t, e);
                "inprogress" === n && (n = d.shift(), i--), n && ("fx" === e && d.unshift("inprogress"), delete o.stop, n.call(t, (function() {
                    w.dequeue(t, e)
                }), o)), !i && o && o.empty.fire()
            },
            _queueHooks: function(t, e) {
                var d = e + "queueHooks";
                return X.get(t, d) || X.access(t, d, {
                    empty: w.Callbacks("once memory").add((function() {
                        X.remove(t, [e + "queue", d])
                    }))
                })
            }
        }), w.fn.extend({
            queue: function(t, e) {
                var d = 2;
                return "string" != typeof t && (e = t, t = "fx", d--), arguments.length < d ? w.queue(this[0], t) : void 0 === e ? this : this.each((function() {
                    var d = w.queue(this, t, e);
                    w._queueHooks(this, t), "fx" === t && "inprogress" !== d[0] && w.dequeue(this, t)
                }))
            },
            dequeue: function(t) {
                return this.each((function() {
                    w.dequeue(this, t)
                }))
            },
            clearQueue: function(t) {
                return this.queue(t || "fx", [])
            },
            promise: function(t, e) {
                var d, i = 1,
                    n = w.Deferred(),
                    o = this,
                    r = this.length,
                    a = function() {
                        --i || n.resolveWith(o, [o])
                    };
                for ("string" != typeof t && (e = t, t = void 0), t = t || "fx"; r--;)(d = X.get(o[r], t + "queueHooks")) && d.empty && (i++, d.empty.add(a));
                return a(), n.promise(e)
            }
        });
        var it = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
            nt = new RegExp("^(?:([+-])=|)(" + it + ")([a-z%]*)$", "i"),
            ot = ["Top", "Right", "Bottom", "Left"],
            rt = r.documentElement,
            at = function(t) {
                return w.contains(t.ownerDocument, t)
            },
            st = {
                composed: !0
            };
        rt.getRootNode && (at = function(t) {
            return w.contains(t.ownerDocument, t) || t.getRootNode(st) === t.ownerDocument
        });
        var lt = function(t, e) {
                return "none" === (t = e || t).style.display || "" === t.style.display && at(t) && "none" === w.css(t, "display")
            },
            ut = function(t, e, d, i) {
                var n, o, r = {};
                for (o in e) r[o] = t.style[o], t.style[o] = e[o];
                for (o in n = d.apply(t, i || []), e) t.style[o] = r[o];
                return n
            };

        function pt(t, e, d, i) {
            var n, o, r = 20,
                a = i ? function() {
                    return i.cur()
                } : function() {
                    return w.css(t, e, "")
                },
                s = a(),
                l = d && d[3] || (w.cssNumber[e] ? "" : "px"),
                u = t.nodeType && (w.cssNumber[e] || "px" !== l && +s) && nt.exec(w.css(t, e));
            if (u && u[3] !== l) {
                for (s /= 2, l = l || u[3], u = +s || 1; r--;) w.style(t, e, u + l), (1 - o) * (1 - (o = a() / s || .5)) <= 0 && (r = 0), u /= o;
                u *= 2, w.style(t, e, u + l), d = d || []
            }
            return d && (u = +u || +s || 0, n = d[1] ? u + (d[1] + 1) * d[2] : +d[2], i && (i.unit = l, i.start = u, i.end = n)), n
        }
        var ct = {};

        function ft(t) {
            var e, d = t.ownerDocument,
                i = t.nodeName,
                n = ct[i];
            return n || (e = d.body.appendChild(d.createElement(i)), n = w.css(e, "display"), e.parentNode.removeChild(e), "none" === n && (n = "block"), ct[i] = n, n)
        }

        function ht(t, e) {
            for (var d, i, n = [], o = 0, r = t.length; o < r; o++)(i = t[o]).style && (d = i.style.display, e ? ("none" === d && (n[o] = X.get(i, "display") || null, n[o] || (i.style.display = "")), "" === i.style.display && lt(i) && (n[o] = ft(i))) : "none" !== d && (n[o] = "none", X.set(i, "display", d)));
            for (o = 0; o < r; o++) null != n[o] && (t[o].style.display = n[o]);
            return t
        }
        w.fn.extend({
            show: function() {
                return ht(this, !0)
            },
            hide: function() {
                return ht(this)
            },
            toggle: function(t) {
                return "boolean" == typeof t ? t ? this.show() : this.hide() : this.each((function() {
                    lt(this) ? w(this).show() : w(this).hide()
                }))
            }
        });
        var $t = /^(?:checkbox|radio)$/i,
            gt = /<([a-z][^\/\0>\x20\t\r\n\f]*)/i,
            mt = /^$|^module$|\/(?:java|ecma)script/i,
            bt = {
                option: [1, "<select multiple='multiple'>", "</select>"],
                thead: [1, "<table>", "</table>"],
                col: [2, "<table><colgroup>", "</colgroup></table>"],
                tr: [2, "<table><tbody>", "</tbody></table>"],
                td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                _default: [0, "", ""]
            };

        function xt(t, e) {
            var d;
            return d = void 0 !== t.getElementsByTagName ? t.getElementsByTagName(e || "*") : void 0 !== t.querySelectorAll ? t.querySelectorAll(e || "*") : [], void 0 === e || e && L(t, e) ? w.merge([t], d) : d
        }

        function _t(t, e) {
            for (var d = 0, i = t.length; d < i; d++) X.set(t[d], "globalEval", !e || X.get(e[d], "globalEval"))
        }
        bt.optgroup = bt.option, bt.tbody = bt.tfoot = bt.colgroup = bt.caption = bt.thead, bt.th = bt.td;
        var yt, vt, wt = /<|&#?\w+;/;

        function kt(t, e, d, i, n) {
            for (var o, r, a, s, l, u, p = e.createDocumentFragment(), c = [], f = 0, h = t.length; f < h; f++)
                if ((o = t[f]) || 0 === o)
                    if ("object" === v(o)) w.merge(c, o.nodeType ? [o] : o);
                    else if (wt.test(o)) {
                for (r = r || p.appendChild(e.createElement("div")), a = (gt.exec(o) || ["", ""])[1].toLowerCase(), s = bt[a] || bt._default, r.innerHTML = s[1] + w.htmlPrefilter(o) + s[2], u = s[0]; u--;) r = r.lastChild;
                w.merge(c, r.childNodes), (r = p.firstChild).textContent = ""
            } else c.push(e.createTextNode(o));
            for (p.textContent = "", f = 0; o = c[f++];)
                if (i && w.inArray(o, i) > -1) n && n.push(o);
                else if (l = at(o), r = xt(p.appendChild(o), "script"), l && _t(r), d)
                for (u = 0; o = r[u++];) mt.test(o.type || "") && d.push(o);
            return p
        }
        yt = r.createDocumentFragment().appendChild(r.createElement("div")), (vt = r.createElement("input")).setAttribute("type", "radio"), vt.setAttribute("checked", "checked"), vt.setAttribute("name", "t"), yt.appendChild(vt), m.checkClone = yt.cloneNode(!0).cloneNode(!0).lastChild.checked, yt.innerHTML = "<textarea>x</textarea>", m.noCloneChecked = !!yt.cloneNode(!0).lastChild.defaultValue;
        var Ct = /^key/,
            Tt = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
            St = /^([^.]*)(?:\.(.+)|)/;

        function Et() {
            return !0
        }

        function Nt() {
            return !1
        }

        function Lt(t, e) {
            return t === function() {
                try {
                    return r.activeElement
                } catch (t) {}
            }() == ("focus" === e)
        }

        function At(t, e, d, i, n, o) {
            var r, a;
            if ("object" == typeof e) {
                for (a in "string" != typeof d && (i = i || d, d = void 0), e) At(t, a, d, i, e[a], o);
                return t
            }
            if (null == i && null == n ? (n = d, i = d = void 0) : null == n && ("string" == typeof d ? (n = i, i = void 0) : (n = i, i = d, d = void 0)), !1 === n) n = Nt;
            else if (!n) return t;
            return 1 === o && (r = n, (n = function(t) {
                return w().off(t), r.apply(this, arguments)
            }).guid = r.guid || (r.guid = w.guid++)), t.each((function() {
                w.event.add(this, e, n, i, d)
            }))
        }

        function It(t, e, d) {
            d ? (X.set(t, e, !1), w.event.add(t, e, {
                namespace: !1,
                handler: function(t) {
                    var i, n, o = X.get(this, e);
                    if (1 & t.isTrigger && this[e]) {
                        if (o.length)(w.event.special[e] || {}).delegateType && t.stopPropagation();
                        else if (o = s.call(arguments), X.set(this, e, o), i = d(this, e), this[e](), o !== (n = X.get(this, e)) || i ? X.set(this, e, !1) : n = {}, o !== n) return t.stopImmediatePropagation(), t.preventDefault(), n.value
                    } else o.length && (X.set(this, e, {
                        value: w.event.trigger(w.extend(o[0], w.Event.prototype), o.slice(1), this)
                    }), t.stopImmediatePropagation())
                }
            })) : void 0 === X.get(t, e) && w.event.add(t, e, Et)
        }
        w.event = {
            global: {},
            add: function(t, e, d, i, n) {
                var o, r, a, s, l, u, p, c, f, h, $, g = X.get(t);
                if (g)
                    for (d.handler && (d = (o = d).handler, n = o.selector), n && w.find.matchesSelector(rt, n), d.guid || (d.guid = w.guid++), (s = g.events) || (s = g.events = {}), (r = g.handle) || (r = g.handle = function(e) {
                            return void 0 !== w && w.event.triggered !== e.type ? w.event.dispatch.apply(t, arguments) : void 0
                        }), l = (e = (e || "").match(z) || [""]).length; l--;) f = $ = (a = St.exec(e[l]) || [])[1], h = (a[2] || "").split(".").sort(), f && (p = w.event.special[f] || {}, f = (n ? p.delegateType : p.bindType) || f, p = w.event.special[f] || {}, u = w.extend({
                        type: f,
                        origType: $,
                        data: i,
                        handler: d,
                        guid: d.guid,
                        selector: n,
                        needsContext: n && w.expr.match.needsContext.test(n),
                        namespace: h.join(".")
                    }, o), (c = s[f]) || ((c = s[f] = []).delegateCount = 0, p.setup && !1 !== p.setup.call(t, i, h, r) || t.addEventListener && t.addEventListener(f, r)), p.add && (p.add.call(t, u), u.handler.guid || (u.handler.guid = d.guid)), n ? c.splice(c.delegateCount++, 0, u) : c.push(u), w.event.global[f] = !0)
            },
            remove: function(t, e, d, i, n) {
                var o, r, a, s, l, u, p, c, f, h, $, g = X.hasData(t) && X.get(t);
                if (g && (s = g.events)) {
                    for (l = (e = (e || "").match(z) || [""]).length; l--;)
                        if (f = $ = (a = St.exec(e[l]) || [])[1], h = (a[2] || "").split(".").sort(), f) {
                            for (p = w.event.special[f] || {}, c = s[f = (i ? p.delegateType : p.bindType) || f] || [], a = a[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), r = o = c.length; o--;) u = c[o], !n && $ !== u.origType || d && d.guid !== u.guid || a && !a.test(u.namespace) || i && i !== u.selector && ("**" !== i || !u.selector) || (c.splice(o, 1), u.selector && c.delegateCount--, p.remove && p.remove.call(t, u));
                            r && !c.length && (p.teardown && !1 !== p.teardown.call(t, h, g.handle) || w.removeEvent(t, f, g.handle), delete s[f])
                        } else
                            for (f in s) w.event.remove(t, f + e[l], d, i, !0);
                    w.isEmptyObject(s) && X.remove(t, "handle events")
                }
            },
            dispatch: function(t) {
                var e, d, i, n, o, r, a = w.event.fix(t),
                    s = new Array(arguments.length),
                    l = (X.get(this, "events") || {})[a.type] || [],
                    u = w.event.special[a.type] || {};
                for (s[0] = a, e = 1; e < arguments.length; e++) s[e] = arguments[e];
                if (a.delegateTarget = this, !u.preDispatch || !1 !== u.preDispatch.call(this, a)) {
                    for (r = w.event.handlers.call(this, a, l), e = 0;
                        (n = r[e++]) && !a.isPropagationStopped();)
                        for (a.currentTarget = n.elem, d = 0;
                            (o = n.handlers[d++]) && !a.isImmediatePropagationStopped();) a.rnamespace && !1 !== o.namespace && !a.rnamespace.test(o.namespace) || (a.handleObj = o, a.data = o.data, void 0 !== (i = ((w.event.special[o.origType] || {}).handle || o.handler).apply(n.elem, s)) && !1 === (a.result = i) && (a.preventDefault(), a.stopPropagation()));
                    return u.postDispatch && u.postDispatch.call(this, a), a.result
                }
            },
            handlers: function(t, e) {
                var d, i, n, o, r, a = [],
                    s = e.delegateCount,
                    l = t.target;
                if (s && l.nodeType && !("click" === t.type && t.button >= 1))
                    for (; l !== this; l = l.parentNode || this)
                        if (1 === l.nodeType && ("click" !== t.type || !0 !== l.disabled)) {
                            for (o = [], r = {}, d = 0; d < s; d++) void 0 === r[n = (i = e[d]).selector + " "] && (r[n] = i.needsContext ? w(n, this).index(l) > -1 : w.find(n, this, null, [l]).length), r[n] && o.push(i);
                            o.length && a.push({
                                elem: l,
                                handlers: o
                            })
                        }
                return l = this, s < e.length && a.push({
                    elem: l,
                    handlers: e.slice(s)
                }), a
            },
            addProp: function(t, e) {
                Object.defineProperty(w.Event.prototype, t, {
                    enumerable: !0,
                    configurable: !0,
                    get: b(e) ? function() {
                        if (this.originalEvent) return e(this.originalEvent)
                    } : function() {
                        if (this.originalEvent) return this.originalEvent[t]
                    },
                    set: function(e) {
                        Object.defineProperty(this, t, {
                            enumerable: !0,
                            configurable: !0,
                            writable: !0,
                            value: e
                        })
                    }
                })
            },
            fix: function(t) {
                return t[w.expando] ? t : new w.Event(t)
            },
            special: {
                load: {
                    noBubble: !0
                },
                click: {
                    setup: function(t) {
                        var e = this || t;
                        return $t.test(e.type) && e.click && L(e, "input") && It(e, "click", Et), !1
                    },
                    trigger: function(t) {
                        var e = this || t;
                        return $t.test(e.type) && e.click && L(e, "input") && It(e, "click"), !0
                    },
                    _default: function(t) {
                        var e = t.target;
                        return $t.test(e.type) && e.click && L(e, "input") && X.get(e, "click") || L(e, "a")
                    }
                },
                beforeunload: {
                    postDispatch: function(t) {
                        void 0 !== t.result && t.originalEvent && (t.originalEvent.returnValue = t.result)
                    }
                }
            }
        }, w.removeEvent = function(t, e, d) {
            t.removeEventListener && t.removeEventListener(e, d)
        }, w.Event = function(t, e) {
            if (!(this instanceof w.Event)) return new w.Event(t, e);
            t && t.type ? (this.originalEvent = t, this.type = t.type, this.isDefaultPrevented = t.defaultPrevented || void 0 === t.defaultPrevented && !1 === t.returnValue ? Et : Nt, this.target = t.target && 3 === t.target.nodeType ? t.target.parentNode : t.target, this.currentTarget = t.currentTarget, this.relatedTarget = t.relatedTarget) : this.type = t, e && w.extend(this, e), this.timeStamp = t && t.timeStamp || Date.now(), this[w.expando] = !0
        }, w.Event.prototype = {
            constructor: w.Event,
            isDefaultPrevented: Nt,
            isPropagationStopped: Nt,
            isImmediatePropagationStopped: Nt,
            isSimulated: !1,
            preventDefault: function() {
                var t = this.originalEvent;
                this.isDefaultPrevented = Et, t && !this.isSimulated && t.preventDefault()
            },
            stopPropagation: function() {
                var t = this.originalEvent;
                this.isPropagationStopped = Et, t && !this.isSimulated && t.stopPropagation()
            },
            stopImmediatePropagation: function() {
                var t = this.originalEvent;
                this.isImmediatePropagationStopped = Et, t && !this.isSimulated && t.stopImmediatePropagation(), this.stopPropagation()
            }
        }, w.each({
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
            which: function(t) {
                var e = t.button;
                return null == t.which && Ct.test(t.type) ? null != t.charCode ? t.charCode : t.keyCode : !t.which && void 0 !== e && Tt.test(t.type) ? 1 & e ? 1 : 2 & e ? 3 : 4 & e ? 2 : 0 : t.which
            }
        }, w.event.addProp), w.each({
            focus: "focusin",
            blur: "focusout"
        }, (function(t, e) {
            w.event.special[t] = {
                setup: function() {
                    return It(this, t, Lt), !1
                },
                trigger: function() {
                    return It(this, t), !0
                },
                delegateType: e
            }
        })), w.each({
            mouseenter: "mouseover",
            mouseleave: "mouseout",
            pointerenter: "pointerover",
            pointerleave: "pointerout"
        }, (function(t, e) {
            w.event.special[t] = {
                delegateType: e,
                bindType: e,
                handle: function(t) {
                    var d, i = this,
                        n = t.relatedTarget,
                        o = t.handleObj;
                    return n && (n === i || w.contains(i, n)) || (t.type = o.origType, d = o.handler.apply(this, arguments), t.type = e), d
                }
            }
        })), w.fn.extend({
            on: function(t, e, d, i) {
                return At(this, t, e, d, i)
            },
            one: function(t, e, d, i) {
                return At(this, t, e, d, i, 1)
            },
            off: function(t, e, d) {
                var i, n;
                if (t && t.preventDefault && t.handleObj) return i = t.handleObj, w(t.delegateTarget).off(i.namespace ? i.origType + "." + i.namespace : i.origType, i.selector, i.handler), this;
                if ("object" == typeof t) {
                    for (n in t) this.off(n, e, t[n]);
                    return this
                }
                return !1 !== e && "function" != typeof e || (d = e, e = void 0), !1 === d && (d = Nt), this.each((function() {
                    w.event.remove(this, t, d, e)
                }))
            }
        });
        var Dt = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
            Mt = /<script|<style|<link/i,
            jt = /checked\s*(?:[^=]|=\s*.checked.)/i,
            Pt = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

        function Ot(t, e) {
            return L(t, "table") && L(11 !== e.nodeType ? e : e.firstChild, "tr") && w(t).children("tbody")[0] || t
        }

        function zt(t) {
            return t.type = (null !== t.getAttribute("type")) + "/" + t.type, t
        }

        function Bt(t) {
            return "true/" === (t.type || "").slice(0, 5) ? t.type = t.type.slice(5) : t.removeAttribute("type"), t
        }

        function Ht(t, e) {
            var d, i, n, o, r, a, s, l;
            if (1 === e.nodeType) {
                if (X.hasData(t) && (o = X.access(t), r = X.set(e, o), l = o.events))
                    for (n in delete r.handle, r.events = {}, l)
                        for (d = 0, i = l[n].length; d < i; d++) w.event.add(e, n, l[n][d]);
                Q.hasData(t) && (a = Q.access(t), s = w.extend({}, a), Q.set(e, s))
            }
        }

        function Rt(t, e) {
            var d = e.nodeName.toLowerCase();
            "input" === d && $t.test(t.type) ? e.checked = t.checked : "input" !== d && "textarea" !== d || (e.defaultValue = t.defaultValue)
        }

        function Ft(t, e, d, i) {
            e = l.apply([], e);
            var n, o, r, a, s, u, p = 0,
                c = t.length,
                f = c - 1,
                h = e[0],
                $ = b(h);
            if ($ || c > 1 && "string" == typeof h && !m.checkClone && jt.test(h)) return t.each((function(n) {
                var o = t.eq(n);
                $ && (e[0] = h.call(this, n, o.html())), Ft(o, e, d, i)
            }));
            if (c && (o = (n = kt(e, t[0].ownerDocument, !1, t, i)).firstChild, 1 === n.childNodes.length && (n = o), o || i)) {
                for (a = (r = w.map(xt(n, "script"), zt)).length; p < c; p++) s = n, p !== f && (s = w.clone(s, !0, !0), a && w.merge(r, xt(s, "script"))), d.call(t[p], s, p);
                if (a)
                    for (u = r[r.length - 1].ownerDocument, w.map(r, Bt), p = 0; p < a; p++) s = r[p], mt.test(s.type || "") && !X.access(s, "globalEval") && w.contains(u, s) && (s.src && "module" !== (s.type || "").toLowerCase() ? w._evalUrl && !s.noModule && w._evalUrl(s.src, {
                        nonce: s.nonce || s.getAttribute("nonce")
                    }) : y(s.textContent.replace(Pt, ""), s, u))
            }
            return t
        }

        function qt(t, e, d) {
            for (var i, n = e ? w.filter(e, t) : t, o = 0; null != (i = n[o]); o++) d || 1 !== i.nodeType || w.cleanData(xt(i)), i.parentNode && (d && at(i) && _t(xt(i, "script")), i.parentNode.removeChild(i));
            return t
        }
        w.extend({
            htmlPrefilter: function(t) {
                return t.replace(Dt, "<$1></$2>")
            },
            clone: function(t, e, d) {
                var i, n, o, r, a = t.cloneNode(!0),
                    s = at(t);
                if (!(m.noCloneChecked || 1 !== t.nodeType && 11 !== t.nodeType || w.isXMLDoc(t)))
                    for (r = xt(a), i = 0, n = (o = xt(t)).length; i < n; i++) Rt(o[i], r[i]);
                if (e)
                    if (d)
                        for (o = o || xt(t), r = r || xt(a), i = 0, n = o.length; i < n; i++) Ht(o[i], r[i]);
                    else Ht(t, a);
                return (r = xt(a, "script")).length > 0 && _t(r, !s && xt(t, "script")), a
            },
            cleanData: function(t) {
                for (var e, d, i, n = w.event.special, o = 0; void 0 !== (d = t[o]); o++)
                    if (Z(d)) {
                        if (e = d[X.expando]) {
                            if (e.events)
                                for (i in e.events) n[i] ? w.event.remove(d, i) : w.removeEvent(d, i, e.handle);
                            d[X.expando] = void 0
                        }
                        d[Q.expando] && (d[Q.expando] = void 0)
                    }
            }
        }), w.fn.extend({
            detach: function(t) {
                return qt(this, t, !0)
            },
            remove: function(t) {
                return qt(this, t)
            },
            text: function(t) {
                return U(this, (function(t) {
                    return void 0 === t ? w.text(this) : this.empty().each((function() {
                        1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = t)
                    }))
                }), null, t, arguments.length)
            },
            append: function() {
                return Ft(this, arguments, (function(t) {
                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Ot(this, t).appendChild(t)
                }))
            },
            prepend: function() {
                return Ft(this, arguments, (function(t) {
                    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                        var e = Ot(this, t);
                        e.insertBefore(t, e.firstChild)
                    }
                }))
            },
            before: function() {
                return Ft(this, arguments, (function(t) {
                    this.parentNode && this.parentNode.insertBefore(t, this)
                }))
            },
            after: function() {
                return Ft(this, arguments, (function(t) {
                    this.parentNode && this.parentNode.insertBefore(t, this.nextSibling)
                }))
            },
            empty: function() {
                for (var t, e = 0; null != (t = this[e]); e++) 1 === t.nodeType && (w.cleanData(xt(t, !1)), t.textContent = "");
                return this
            },
            clone: function(t, e) {
                return t = null != t && t, e = null == e ? t : e, this.map((function() {
                    return w.clone(this, t, e)
                }))
            },
            html: function(t) {
                return U(this, (function(t) {
                    var e = this[0] || {},
                        d = 0,
                        i = this.length;
                    if (void 0 === t && 1 === e.nodeType) return e.innerHTML;
                    if ("string" == typeof t && !Mt.test(t) && !bt[(gt.exec(t) || ["", ""])[1].toLowerCase()]) {
                        t = w.htmlPrefilter(t);
                        try {
                            for (; d < i; d++) 1 === (e = this[d] || {}).nodeType && (w.cleanData(xt(e, !1)), e.innerHTML = t);
                            e = 0
                        } catch (t) {}
                    }
                    e && this.empty().append(t)
                }), null, t, arguments.length)
            },
            replaceWith: function() {
                var t = [];
                return Ft(this, arguments, (function(e) {
                    var d = this.parentNode;
                    w.inArray(this, t) < 0 && (w.cleanData(xt(this)), d && d.replaceChild(e, this))
                }), t)
            }
        }), w.each({
            appendTo: "append",
            prependTo: "prepend",
            insertBefore: "before",
            insertAfter: "after",
            replaceAll: "replaceWith"
        }, (function(t, e) {
            w.fn[t] = function(t) {
                for (var d, i = [], n = w(t), o = n.length - 1, r = 0; r <= o; r++) d = r === o ? this : this.clone(!0), w(n[r])[e](d), u.apply(i, d.get());
                return this.pushStack(i)
            }
        }));
        var Gt = new RegExp("^(" + it + ")(?!px)[a-z%]+$", "i"),
            Ut = function(t) {
                var e = t.ownerDocument.defaultView;
                return e && e.opener || (e = d), e.getComputedStyle(t)
            },
            Wt = new RegExp(ot.join("|"), "i");

        function Kt(t, e, d) {
            var i, n, o, r, a = t.style;
            return (d = d || Ut(t)) && ("" !== (r = d.getPropertyValue(e) || d[e]) || at(t) || (r = w.style(t, e)), !m.pixelBoxStyles() && Gt.test(r) && Wt.test(e) && (i = a.width, n = a.minWidth, o = a.maxWidth, a.minWidth = a.maxWidth = a.width = r, r = d.width, a.width = i, a.minWidth = n, a.maxWidth = o)), void 0 !== r ? r + "" : r
        }

        function Vt(t, e) {
            return {
                get: function() {
                    if (!t()) return (this.get = e).apply(this, arguments);
                    delete this.get
                }
            }
        }! function() {
            function t() {
                if (u) {
                    l.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", u.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", rt.appendChild(l).appendChild(u);
                    var t = d.getComputedStyle(u);
                    i = "1%" !== t.top, s = 12 === e(t.marginLeft), u.style.right = "60%", a = 36 === e(t.right), n = 36 === e(t.width), u.style.position = "absolute", o = 12 === e(u.offsetWidth / 3), rt.removeChild(l), u = null
                }
            }

            function e(t) {
                return Math.round(parseFloat(t))
            }
            var i, n, o, a, s, l = r.createElement("div"),
                u = r.createElement("div");
            u.style && (u.style.backgroundClip = "content-box", u.cloneNode(!0).style.backgroundClip = "", m.clearCloneStyle = "content-box" === u.style.backgroundClip, w.extend(m, {
                boxSizingReliable: function() {
                    return t(), n
                },
                pixelBoxStyles: function() {
                    return t(), a
                },
                pixelPosition: function() {
                    return t(), i
                },
                reliableMarginLeft: function() {
                    return t(), s
                },
                scrollboxSize: function() {
                    return t(), o
                }
            }))
        }();
        var Yt = ["Webkit", "Moz", "ms"],
            Zt = r.createElement("div").style,
            Jt = {};

        function Xt(t) {
            var e = w.cssProps[t] || Jt[t];
            return e || (t in Zt ? t : Jt[t] = function(t) {
                for (var e = t[0].toUpperCase() + t.slice(1), d = Yt.length; d--;)
                    if ((t = Yt[d] + e) in Zt) return t
            }(t) || t)
        }
        var Qt = /^(none|table(?!-c[ea]).+)/,
            te = /^--/,
            ee = {
                position: "absolute",
                visibility: "hidden",
                display: "block"
            },
            de = {
                letterSpacing: "0",
                fontWeight: "400"
            };

        function ie(t, e, d) {
            var i = nt.exec(e);
            return i ? Math.max(0, i[2] - (d || 0)) + (i[3] || "px") : e
        }

        function ne(t, e, d, i, n, o) {
            var r = "width" === e ? 1 : 0,
                a = 0,
                s = 0;
            if (d === (i ? "border" : "content")) return 0;
            for (; r < 4; r += 2) "margin" === d && (s += w.css(t, d + ot[r], !0, n)), i ? ("content" === d && (s -= w.css(t, "padding" + ot[r], !0, n)), "margin" !== d && (s -= w.css(t, "border" + ot[r] + "Width", !0, n))) : (s += w.css(t, "padding" + ot[r], !0, n), "padding" !== d ? s += w.css(t, "border" + ot[r] + "Width", !0, n) : a += w.css(t, "border" + ot[r] + "Width", !0, n));
            return !i && o >= 0 && (s += Math.max(0, Math.ceil(t["offset" + e[0].toUpperCase() + e.slice(1)] - o - s - a - .5)) || 0), s
        }

        function oe(t, e, d) {
            var i = Ut(t),
                n = (!m.boxSizingReliable() || d) && "border-box" === w.css(t, "boxSizing", !1, i),
                o = n,
                r = Kt(t, e, i),
                a = "offset" + e[0].toUpperCase() + e.slice(1);
            if (Gt.test(r)) {
                if (!d) return r;
                r = "auto"
            }
            return (!m.boxSizingReliable() && n || "auto" === r || !parseFloat(r) && "inline" === w.css(t, "display", !1, i)) && t.getClientRects().length && (n = "border-box" === w.css(t, "boxSizing", !1, i), (o = a in t) && (r = t[a])), (r = parseFloat(r) || 0) + ne(t, e, d || (n ? "border" : "content"), o, i, r) + "px"
        }

        function re(t, e, d, i, n) {
            return new re.prototype.init(t, e, d, i, n)
        }
        w.extend({
            cssHooks: {
                opacity: {
                    get: function(t, e) {
                        if (e) {
                            var d = Kt(t, "opacity");
                            return "" === d ? "1" : d
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
            style: function(t, e, d, i) {
                if (t && 3 !== t.nodeType && 8 !== t.nodeType && t.style) {
                    var n, o, r, a = Y(e),
                        s = te.test(e),
                        l = t.style;
                    if (s || (e = Xt(a)), r = w.cssHooks[e] || w.cssHooks[a], void 0 === d) return r && "get" in r && void 0 !== (n = r.get(t, !1, i)) ? n : l[e];
                    "string" === (o = typeof d) && (n = nt.exec(d)) && n[1] && (d = pt(t, e, n), o = "number"), null != d && d == d && ("number" !== o || s || (d += n && n[3] || (w.cssNumber[a] ? "" : "px")), m.clearCloneStyle || "" !== d || 0 !== e.indexOf("background") || (l[e] = "inherit"), r && "set" in r && void 0 === (d = r.set(t, d, i)) || (s ? l.setProperty(e, d) : l[e] = d))
                }
            },
            css: function(t, e, d, i) {
                var n, o, r, a = Y(e);
                return te.test(e) || (e = Xt(a)), (r = w.cssHooks[e] || w.cssHooks[a]) && "get" in r && (n = r.get(t, !0, d)), void 0 === n && (n = Kt(t, e, i)), "normal" === n && e in de && (n = de[e]), "" === d || d ? (o = parseFloat(n), !0 === d || isFinite(o) ? o || 0 : n) : n
            }
        }), w.each(["height", "width"], (function(t, e) {
            w.cssHooks[e] = {
                get: function(t, d, i) {
                    if (d) return !Qt.test(w.css(t, "display")) || t.getClientRects().length && t.getBoundingClientRect().width ? oe(t, e, i) : ut(t, ee, (function() {
                        return oe(t, e, i)
                    }))
                },
                set: function(t, d, i) {
                    var n, o = Ut(t),
                        r = !m.scrollboxSize() && "absolute" === o.position,
                        a = (r || i) && "border-box" === w.css(t, "boxSizing", !1, o),
                        s = i ? ne(t, e, i, a, o) : 0;
                    return a && r && (s -= Math.ceil(t["offset" + e[0].toUpperCase() + e.slice(1)] - parseFloat(o[e]) - ne(t, e, "border", !1, o) - .5)), s && (n = nt.exec(d)) && "px" !== (n[3] || "px") && (t.style[e] = d, d = w.css(t, e)), ie(0, d, s)
                }
            }
        })), w.cssHooks.marginLeft = Vt(m.reliableMarginLeft, (function(t, e) {
            if (e) return (parseFloat(Kt(t, "marginLeft")) || t.getBoundingClientRect().left - ut(t, {
                marginLeft: 0
            }, (function() {
                return t.getBoundingClientRect().left
            }))) + "px"
        })), w.each({
            margin: "",
            padding: "",
            border: "Width"
        }, (function(t, e) {
            w.cssHooks[t + e] = {
                expand: function(d) {
                    for (var i = 0, n = {}, o = "string" == typeof d ? d.split(" ") : [d]; i < 4; i++) n[t + ot[i] + e] = o[i] || o[i - 2] || o[0];
                    return n
                }
            }, "margin" !== t && (w.cssHooks[t + e].set = ie)
        })), w.fn.extend({
            css: function(t, e) {
                return U(this, (function(t, e, d) {
                    var i, n, o = {},
                        r = 0;
                    if (Array.isArray(e)) {
                        for (i = Ut(t), n = e.length; r < n; r++) o[e[r]] = w.css(t, e[r], !1, i);
                        return o
                    }
                    return void 0 !== d ? w.style(t, e, d) : w.css(t, e)
                }), t, e, arguments.length > 1)
            }
        }), w.Tween = re, re.prototype = {
            constructor: re,
            init: function(t, e, d, i, n, o) {
                this.elem = t, this.prop = d, this.easing = n || w.easing._default, this.options = e, this.start = this.now = this.cur(), this.end = i, this.unit = o || (w.cssNumber[d] ? "" : "px")
            },
            cur: function() {
                var t = re.propHooks[this.prop];
                return t && t.get ? t.get(this) : re.propHooks._default.get(this)
            },
            run: function(t) {
                var e, d = re.propHooks[this.prop];
                return this.options.duration ? this.pos = e = w.easing[this.easing](t, this.options.duration * t, 0, 1, this.options.duration) : this.pos = e = t, this.now = (this.end - this.start) * e + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), d && d.set ? d.set(this) : re.propHooks._default.set(this), this
            }
        }, re.prototype.init.prototype = re.prototype, re.propHooks = {
            _default: {
                get: function(t) {
                    var e;
                    return 1 !== t.elem.nodeType || null != t.elem[t.prop] && null == t.elem.style[t.prop] ? t.elem[t.prop] : (e = w.css(t.elem, t.prop, "")) && "auto" !== e ? e : 0
                },
                set: function(t) {
                    w.fx.step[t.prop] ? w.fx.step[t.prop](t) : 1 !== t.elem.nodeType || !w.cssHooks[t.prop] && null == t.elem.style[Xt(t.prop)] ? t.elem[t.prop] = t.now : w.style(t.elem, t.prop, t.now + t.unit)
                }
            }
        }, re.propHooks.scrollTop = re.propHooks.scrollLeft = {
            set: function(t) {
                t.elem.nodeType && t.elem.parentNode && (t.elem[t.prop] = t.now)
            }
        }, w.easing = {
            linear: function(t) {
                return t
            },
            swing: function(t) {
                return .5 - Math.cos(t * Math.PI) / 2
            },
            _default: "swing"
        }, w.fx = re.prototype.init, w.fx.step = {};
        var ae, se, le = /^(?:toggle|show|hide)$/,
            ue = /queueHooks$/;

        function pe() {
            se && (!1 === r.hidden && d.requestAnimationFrame ? d.requestAnimationFrame(pe) : d.setTimeout(pe, w.fx.interval), w.fx.tick())
        }

        function ce() {
            return d.setTimeout((function() {
                ae = void 0
            })), ae = Date.now()
        }

        function fe(t, e) {
            var d, i = 0,
                n = {
                    height: t
                };
            for (e = e ? 1 : 0; i < 4; i += 2 - e) n["margin" + (d = ot[i])] = n["padding" + d] = t;
            return e && (n.opacity = n.width = t), n
        }

        function he(t, e, d) {
            for (var i, n = ($e.tweeners[e] || []).concat($e.tweeners["*"]), o = 0, r = n.length; o < r; o++)
                if (i = n[o].call(d, e, t)) return i
        }

        function $e(t, e, d) {
            var i, n, o = 0,
                r = $e.prefilters.length,
                a = w.Deferred().always((function() {
                    delete s.elem
                })),
                s = function() {
                    if (n) return !1;
                    for (var e = ae || ce(), d = Math.max(0, l.startTime + l.duration - e), i = 1 - (d / l.duration || 0), o = 0, r = l.tweens.length; o < r; o++) l.tweens[o].run(i);
                    return a.notifyWith(t, [l, i, d]), i < 1 && r ? d : (r || a.notifyWith(t, [l, 1, 0]), a.resolveWith(t, [l]), !1)
                },
                l = a.promise({
                    elem: t,
                    props: w.extend({}, e),
                    opts: w.extend(!0, {
                        specialEasing: {},
                        easing: w.easing._default
                    }, d),
                    originalProperties: e,
                    originalOptions: d,
                    startTime: ae || ce(),
                    duration: d.duration,
                    tweens: [],
                    createTween: function(e, d) {
                        var i = w.Tween(t, l.opts, e, d, l.opts.specialEasing[e] || l.opts.easing);
                        return l.tweens.push(i), i
                    },
                    stop: function(e) {
                        var d = 0,
                            i = e ? l.tweens.length : 0;
                        if (n) return this;
                        for (n = !0; d < i; d++) l.tweens[d].run(1);
                        return e ? (a.notifyWith(t, [l, 1, 0]), a.resolveWith(t, [l, e])) : a.rejectWith(t, [l, e]), this
                    }
                }),
                u = l.props;
            for (! function(t, e) {
                    var d, i, n, o, r;
                    for (d in t)
                        if (n = e[i = Y(d)], o = t[d], Array.isArray(o) && (n = o[1], o = t[d] = o[0]), d !== i && (t[i] = o, delete t[d]), (r = w.cssHooks[i]) && "expand" in r)
                            for (d in o = r.expand(o), delete t[i], o) d in t || (t[d] = o[d], e[d] = n);
                        else e[i] = n
                }(u, l.opts.specialEasing); o < r; o++)
                if (i = $e.prefilters[o].call(l, t, u, l.opts)) return b(i.stop) && (w._queueHooks(l.elem, l.opts.queue).stop = i.stop.bind(i)), i;
            return w.map(u, he, l), b(l.opts.start) && l.opts.start.call(t, l), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), w.fx.timer(w.extend(s, {
                elem: t,
                anim: l,
                queue: l.opts.queue
            })), l
        }
        w.Animation = w.extend($e, {
                tweeners: {
                    "*": [function(t, e) {
                        var d = this.createTween(t, e);
                        return pt(d.elem, t, nt.exec(e), d), d
                    }]
                },
                tweener: function(t, e) {
                    b(t) ? (e = t, t = ["*"]) : t = t.match(z);
                    for (var d, i = 0, n = t.length; i < n; i++) d = t[i], $e.tweeners[d] = $e.tweeners[d] || [], $e.tweeners[d].unshift(e)
                },
                prefilters: [function(t, e, d) {
                    var i, n, o, r, a, s, l, u, p = "width" in e || "height" in e,
                        c = this,
                        f = {},
                        h = t.style,
                        $ = t.nodeType && lt(t),
                        g = X.get(t, "fxshow");
                    for (i in d.queue || (null == (r = w._queueHooks(t, "fx")).unqueued && (r.unqueued = 0, a = r.empty.fire, r.empty.fire = function() {
                            r.unqueued || a()
                        }), r.unqueued++, c.always((function() {
                            c.always((function() {
                                r.unqueued--, w.queue(t, "fx").length || r.empty.fire()
                            }))
                        }))), e)
                        if (n = e[i], le.test(n)) {
                            if (delete e[i], o = o || "toggle" === n, n === ($ ? "hide" : "show")) {
                                if ("show" !== n || !g || void 0 === g[i]) continue;
                                $ = !0
                            }
                            f[i] = g && g[i] || w.style(t, i)
                        }
                    if ((s = !w.isEmptyObject(e)) || !w.isEmptyObject(f))
                        for (i in p && 1 === t.nodeType && (d.overflow = [h.overflow, h.overflowX, h.overflowY], null == (l = g && g.display) && (l = X.get(t, "display")), "none" === (u = w.css(t, "display")) && (l ? u = l : (ht([t], !0), l = t.style.display || l, u = w.css(t, "display"), ht([t]))), ("inline" === u || "inline-block" === u && null != l) && "none" === w.css(t, "float") && (s || (c.done((function() {
                                h.display = l
                            })), null == l && (u = h.display, l = "none" === u ? "" : u)), h.display = "inline-block")), d.overflow && (h.overflow = "hidden", c.always((function() {
                                h.overflow = d.overflow[0], h.overflowX = d.overflow[1], h.overflowY = d.overflow[2]
                            }))), s = !1, f) s || (g ? "hidden" in g && ($ = g.hidden) : g = X.access(t, "fxshow", {
                            display: l
                        }), o && (g.hidden = !$), $ && ht([t], !0), c.done((function() {
                            for (i in $ || ht([t]), X.remove(t, "fxshow"), f) w.style(t, i, f[i])
                        }))), s = he($ ? g[i] : 0, i, c), i in g || (g[i] = s.start, $ && (s.end = s.start, s.start = 0))
                }],
                prefilter: function(t, e) {
                    e ? $e.prefilters.unshift(t) : $e.prefilters.push(t)
                }
            }), w.speed = function(t, e, d) {
                var i = t && "object" == typeof t ? w.extend({}, t) : {
                    complete: d || !d && e || b(t) && t,
                    duration: t,
                    easing: d && e || e && !b(e) && e
                };
                return w.fx.off ? i.duration = 0 : "number" != typeof i.duration && (i.duration in w.fx.speeds ? i.duration = w.fx.speeds[i.duration] : i.duration = w.fx.speeds._default), null != i.queue && !0 !== i.queue || (i.queue = "fx"), i.old = i.complete, i.complete = function() {
                    b(i.old) && i.old.call(this), i.queue && w.dequeue(this, i.queue)
                }, i
            }, w.fn.extend({
                fadeTo: function(t, e, d, i) {
                    return this.filter(lt).css("opacity", 0).show().end().animate({
                        opacity: e
                    }, t, d, i)
                },
                animate: function(t, e, d, i) {
                    var n = w.isEmptyObject(t),
                        o = w.speed(e, d, i),
                        r = function() {
                            var e = $e(this, w.extend({}, t), o);
                            (n || X.get(this, "finish")) && e.stop(!0)
                        };
                    return r.finish = r, n || !1 === o.queue ? this.each(r) : this.queue(o.queue, r)
                },
                stop: function(t, e, d) {
                    var i = function(t) {
                        var e = t.stop;
                        delete t.stop, e(d)
                    };
                    return "string" != typeof t && (d = e, e = t, t = void 0), e && !1 !== t && this.queue(t || "fx", []), this.each((function() {
                        var e = !0,
                            n = null != t && t + "queueHooks",
                            o = w.timers,
                            r = X.get(this);
                        if (n) r[n] && r[n].stop && i(r[n]);
                        else
                            for (n in r) r[n] && r[n].stop && ue.test(n) && i(r[n]);
                        for (n = o.length; n--;) o[n].elem !== this || null != t && o[n].queue !== t || (o[n].anim.stop(d), e = !1, o.splice(n, 1));
                        !e && d || w.dequeue(this, t)
                    }))
                },
                finish: function(t) {
                    return !1 !== t && (t = t || "fx"), this.each((function() {
                        var e, d = X.get(this),
                            i = d[t + "queue"],
                            n = d[t + "queueHooks"],
                            o = w.timers,
                            r = i ? i.length : 0;
                        for (d.finish = !0, w.queue(this, t, []), n && n.stop && n.stop.call(this, !0), e = o.length; e--;) o[e].elem === this && o[e].queue === t && (o[e].anim.stop(!0), o.splice(e, 1));
                        for (e = 0; e < r; e++) i[e] && i[e].finish && i[e].finish.call(this);
                        delete d.finish
                    }))
                }
            }), w.each(["toggle", "show", "hide"], (function(t, e) {
                var d = w.fn[e];
                w.fn[e] = function(t, i, n) {
                    return null == t || "boolean" == typeof t ? d.apply(this, arguments) : this.animate(fe(e, !0), t, i, n)
                }
            })), w.each({
                slideDown: fe("show"),
                slideUp: fe("hide"),
                slideToggle: fe("toggle"),
                fadeIn: {
                    opacity: "show"
                },
                fadeOut: {
                    opacity: "hide"
                },
                fadeToggle: {
                    opacity: "toggle"
                }
            }, (function(t, e) {
                w.fn[t] = function(t, d, i) {
                    return this.animate(e, t, d, i)
                }
            })), w.timers = [], w.fx.tick = function() {
                var t, e = 0,
                    d = w.timers;
                for (ae = Date.now(); e < d.length; e++)(t = d[e])() || d[e] !== t || d.splice(e--, 1);
                d.length || w.fx.stop(), ae = void 0
            }, w.fx.timer = function(t) {
                w.timers.push(t), w.fx.start()
            }, w.fx.interval = 13, w.fx.start = function() {
                se || (se = !0, pe())
            }, w.fx.stop = function() {
                se = null
            }, w.fx.speeds = {
                slow: 600,
                fast: 200,
                _default: 400
            }, w.fn.delay = function(t, e) {
                return t = w.fx && w.fx.speeds[t] || t, e = e || "fx", this.queue(e, (function(e, i) {
                    var n = d.setTimeout(e, t);
                    i.stop = function() {
                        d.clearTimeout(n)
                    }
                }))
            },
            function() {
                var t = r.createElement("input"),
                    e = r.createElement("select").appendChild(r.createElement("option"));
                t.type = "checkbox", m.checkOn = "" !== t.value, m.optSelected = e.selected, (t = r.createElement("input")).value = "t", t.type = "radio", m.radioValue = "t" === t.value
            }();
        var ge, me = w.expr.attrHandle;
        w.fn.extend({
            attr: function(t, e) {
                return U(this, w.attr, t, e, arguments.length > 1)
            },
            removeAttr: function(t) {
                return this.each((function() {
                    w.removeAttr(this, t)
                }))
            }
        }), w.extend({
            attr: function(t, e, d) {
                var i, n, o = t.nodeType;
                if (3 !== o && 8 !== o && 2 !== o) return void 0 === t.getAttribute ? w.prop(t, e, d) : (1 === o && w.isXMLDoc(t) || (n = w.attrHooks[e.toLowerCase()] || (w.expr.match.bool.test(e) ? ge : void 0)), void 0 !== d ? null === d ? void w.removeAttr(t, e) : n && "set" in n && void 0 !== (i = n.set(t, d, e)) ? i : (t.setAttribute(e, d + ""), d) : n && "get" in n && null !== (i = n.get(t, e)) ? i : null == (i = w.find.attr(t, e)) ? void 0 : i)
            },
            attrHooks: {
                type: {
                    set: function(t, e) {
                        if (!m.radioValue && "radio" === e && L(t, "input")) {
                            var d = t.value;
                            return t.setAttribute("type", e), d && (t.value = d), e
                        }
                    }
                }
            },
            removeAttr: function(t, e) {
                var d, i = 0,
                    n = e && e.match(z);
                if (n && 1 === t.nodeType)
                    for (; d = n[i++];) t.removeAttribute(d)
            }
        }), ge = {
            set: function(t, e, d) {
                return !1 === e ? w.removeAttr(t, d) : t.setAttribute(d, d), d
            }
        }, w.each(w.expr.match.bool.source.match(/\w+/g), (function(t, e) {
            var d = me[e] || w.find.attr;
            me[e] = function(t, e, i) {
                var n, o, r = e.toLowerCase();
                return i || (o = me[r], me[r] = n, n = null != d(t, e, i) ? r : null, me[r] = o), n
            }
        }));
        var be = /^(?:input|select|textarea|button)$/i,
            xe = /^(?:a|area)$/i;

        function _e(t) {
            return (t.match(z) || []).join(" ")
        }

        function ye(t) {
            return t.getAttribute && t.getAttribute("class") || ""
        }

        function ve(t) {
            return Array.isArray(t) ? t : "string" == typeof t && t.match(z) || []
        }
        w.fn.extend({
            prop: function(t, e) {
                return U(this, w.prop, t, e, arguments.length > 1)
            },
            removeProp: function(t) {
                return this.each((function() {
                    delete this[w.propFix[t] || t]
                }))
            }
        }), w.extend({
            prop: function(t, e, d) {
                var i, n, o = t.nodeType;
                if (3 !== o && 8 !== o && 2 !== o) return 1 === o && w.isXMLDoc(t) || (e = w.propFix[e] || e, n = w.propHooks[e]), void 0 !== d ? n && "set" in n && void 0 !== (i = n.set(t, d, e)) ? i : t[e] = d : n && "get" in n && null !== (i = n.get(t, e)) ? i : t[e]
            },
            propHooks: {
                tabIndex: {
                    get: function(t) {
                        var e = w.find.attr(t, "tabindex");
                        return e ? parseInt(e, 10) : be.test(t.nodeName) || xe.test(t.nodeName) && t.href ? 0 : -1
                    }
                }
            },
            propFix: {
                for: "htmlFor",
                class: "className"
            }
        }), m.optSelected || (w.propHooks.selected = {
            get: function(t) {
                var e = t.parentNode;
                return e && e.parentNode && e.parentNode.selectedIndex, null
            },
            set: function(t) {
                var e = t.parentNode;
                e && (e.selectedIndex, e.parentNode && e.parentNode.selectedIndex)
            }
        }), w.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], (function() {
            w.propFix[this.toLowerCase()] = this
        })), w.fn.extend({
            addClass: function(t) {
                var e, d, i, n, o, r, a, s = 0;
                if (b(t)) return this.each((function(e) {
                    w(this).addClass(t.call(this, e, ye(this)))
                }));
                if ((e = ve(t)).length)
                    for (; d = this[s++];)
                        if (n = ye(d), i = 1 === d.nodeType && " " + _e(n) + " ") {
                            for (r = 0; o = e[r++];) i.indexOf(" " + o + " ") < 0 && (i += o + " ");
                            n !== (a = _e(i)) && d.setAttribute("class", a)
                        }
                return this
            },
            removeClass: function(t) {
                var e, d, i, n, o, r, a, s = 0;
                if (b(t)) return this.each((function(e) {
                    w(this).removeClass(t.call(this, e, ye(this)))
                }));
                if (!arguments.length) return this.attr("class", "");
                if ((e = ve(t)).length)
                    for (; d = this[s++];)
                        if (n = ye(d), i = 1 === d.nodeType && " " + _e(n) + " ") {
                            for (r = 0; o = e[r++];)
                                for (; i.indexOf(" " + o + " ") > -1;) i = i.replace(" " + o + " ", " ");
                            n !== (a = _e(i)) && d.setAttribute("class", a)
                        }
                return this
            },
            toggleClass: function(t, e) {
                var d = typeof t,
                    i = "string" === d || Array.isArray(t);
                return "boolean" == typeof e && i ? e ? this.addClass(t) : this.removeClass(t) : b(t) ? this.each((function(d) {
                    w(this).toggleClass(t.call(this, d, ye(this), e), e)
                })) : this.each((function() {
                    var e, n, o, r;
                    if (i)
                        for (n = 0, o = w(this), r = ve(t); e = r[n++];) o.hasClass(e) ? o.removeClass(e) : o.addClass(e);
                    else void 0 !== t && "boolean" !== d || ((e = ye(this)) && X.set(this, "__className__", e), this.setAttribute && this.setAttribute("class", e || !1 === t ? "" : X.get(this, "__className__") || ""))
                }))
            },
            hasClass: function(t) {
                var e, d, i = 0;
                for (e = " " + t + " "; d = this[i++];)
                    if (1 === d.nodeType && (" " + _e(ye(d)) + " ").indexOf(e) > -1) return !0;
                return !1
            }
        });
        var we = /\r/g;
        w.fn.extend({
            val: function(t) {
                var e, d, i, n = this[0];
                return arguments.length ? (i = b(t), this.each((function(d) {
                    var n;
                    1 === this.nodeType && (null == (n = i ? t.call(this, d, w(this).val()) : t) ? n = "" : "number" == typeof n ? n += "" : Array.isArray(n) && (n = w.map(n, (function(t) {
                        return null == t ? "" : t + ""
                    }))), (e = w.valHooks[this.type] || w.valHooks[this.nodeName.toLowerCase()]) && "set" in e && void 0 !== e.set(this, n, "value") || (this.value = n))
                }))) : n ? (e = w.valHooks[n.type] || w.valHooks[n.nodeName.toLowerCase()]) && "get" in e && void 0 !== (d = e.get(n, "value")) ? d : "string" == typeof(d = n.value) ? d.replace(we, "") : null == d ? "" : d : void 0
            }
        }), w.extend({
            valHooks: {
                option: {
                    get: function(t) {
                        var e = w.find.attr(t, "value");
                        return null != e ? e : _e(w.text(t))
                    }
                },
                select: {
                    get: function(t) {
                        var e, d, i, n = t.options,
                            o = t.selectedIndex,
                            r = "select-one" === t.type,
                            a = r ? null : [],
                            s = r ? o + 1 : n.length;
                        for (i = o < 0 ? s : r ? o : 0; i < s; i++)
                            if (((d = n[i]).selected || i === o) && !d.disabled && (!d.parentNode.disabled || !L(d.parentNode, "optgroup"))) {
                                if (e = w(d).val(), r) return e;
                                a.push(e)
                            }
                        return a
                    },
                    set: function(t, e) {
                        for (var d, i, n = t.options, o = w.makeArray(e), r = n.length; r--;)((i = n[r]).selected = w.inArray(w.valHooks.option.get(i), o) > -1) && (d = !0);
                        return d || (t.selectedIndex = -1), o
                    }
                }
            }
        }), w.each(["radio", "checkbox"], (function() {
            w.valHooks[this] = {
                set: function(t, e) {
                    if (Array.isArray(e)) return t.checked = w.inArray(w(t).val(), e) > -1
                }
            }, m.checkOn || (w.valHooks[this].get = function(t) {
                return null === t.getAttribute("value") ? "on" : t.value
            })
        })), m.focusin = "onfocusin" in d;
        var ke = /^(?:focusinfocus|focusoutblur)$/,
            Ce = function(t) {
                t.stopPropagation()
            };
        w.extend(w.event, {
            trigger: function(t, e, i, n) {
                var o, a, s, l, u, p, c, f, $ = [i || r],
                    g = h.call(t, "type") ? t.type : t,
                    m = h.call(t, "namespace") ? t.namespace.split(".") : [];
                if (a = f = s = i = i || r, 3 !== i.nodeType && 8 !== i.nodeType && !ke.test(g + w.event.triggered) && (g.indexOf(".") > -1 && (m = g.split("."), g = m.shift(), m.sort()), u = g.indexOf(":") < 0 && "on" + g, (t = t[w.expando] ? t : new w.Event(g, "object" == typeof t && t)).isTrigger = n ? 2 : 3, t.namespace = m.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + m.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = i), e = null == e ? [t] : w.makeArray(e, [t]), c = w.event.special[g] || {}, n || !c.trigger || !1 !== c.trigger.apply(i, e))) {
                    if (!n && !c.noBubble && !x(i)) {
                        for (l = c.delegateType || g, ke.test(l + g) || (a = a.parentNode); a; a = a.parentNode) $.push(a), s = a;
                        s === (i.ownerDocument || r) && $.push(s.defaultView || s.parentWindow || d)
                    }
                    for (o = 0;
                        (a = $[o++]) && !t.isPropagationStopped();) f = a, t.type = o > 1 ? l : c.bindType || g, (p = (X.get(a, "events") || {})[t.type] && X.get(a, "handle")) && p.apply(a, e), (p = u && a[u]) && p.apply && Z(a) && (t.result = p.apply(a, e), !1 === t.result && t.preventDefault());
                    return t.type = g, n || t.isDefaultPrevented() || c._default && !1 !== c._default.apply($.pop(), e) || !Z(i) || u && b(i[g]) && !x(i) && ((s = i[u]) && (i[u] = null), w.event.triggered = g, t.isPropagationStopped() && f.addEventListener(g, Ce), i[g](), t.isPropagationStopped() && f.removeEventListener(g, Ce), w.event.triggered = void 0, s && (i[u] = s)), t.result
                }
            },
            simulate: function(t, e, d) {
                var i = w.extend(new w.Event, d, {
                    type: t,
                    isSimulated: !0
                });
                w.event.trigger(i, null, e)
            }
        }), w.fn.extend({
            trigger: function(t, e) {
                return this.each((function() {
                    w.event.trigger(t, e, this)
                }))
            },
            triggerHandler: function(t, e) {
                var d = this[0];
                if (d) return w.event.trigger(t, e, d, !0)
            }
        }), m.focusin || w.each({
            focus: "focusin",
            blur: "focusout"
        }, (function(t, e) {
            var d = function(t) {
                w.event.simulate(e, t.target, w.event.fix(t))
            };
            w.event.special[e] = {
                setup: function() {
                    var i = this.ownerDocument || this,
                        n = X.access(i, e);
                    n || i.addEventListener(t, d, !0), X.access(i, e, (n || 0) + 1)
                },
                teardown: function() {
                    var i = this.ownerDocument || this,
                        n = X.access(i, e) - 1;
                    n ? X.access(i, e, n) : (i.removeEventListener(t, d, !0), X.remove(i, e))
                }
            }
        }));
        var Te = d.location,
            Se = Date.now(),
            Ee = /\?/;
        w.parseXML = function(t) {
            var e;
            if (!t || "string" != typeof t) return null;
            try {
                e = (new d.DOMParser).parseFromString(t, "text/xml")
            } catch (t) {
                e = void 0
            }
            return e && !e.getElementsByTagName("parsererror").length || w.error("Invalid XML: " + t), e
        };
        var Ne = /\[\]$/,
            Le = /\r?\n/g,
            Ae = /^(?:submit|button|image|reset|file)$/i,
            Ie = /^(?:input|select|textarea|keygen)/i;

        function De(t, e, d, i) {
            var n;
            if (Array.isArray(e)) w.each(e, (function(e, n) {
                d || Ne.test(t) ? i(t, n) : De(t + "[" + ("object" == typeof n && null != n ? e : "") + "]", n, d, i)
            }));
            else if (d || "object" !== v(e)) i(t, e);
            else
                for (n in e) De(t + "[" + n + "]", e[n], d, i)
        }
        w.param = function(t, e) {
            var d, i = [],
                n = function(t, e) {
                    var d = b(e) ? e() : e;
                    i[i.length] = encodeURIComponent(t) + "=" + encodeURIComponent(null == d ? "" : d)
                };
            if (null == t) return "";
            if (Array.isArray(t) || t.jquery && !w.isPlainObject(t)) w.each(t, (function() {
                n(this.name, this.value)
            }));
            else
                for (d in t) De(d, t[d], e, n);
            return i.join("&")
        }, w.fn.extend({
            serialize: function() {
                return w.param(this.serializeArray())
            },
            serializeArray: function() {
                return this.map((function() {
                    var t = w.prop(this, "elements");
                    return t ? w.makeArray(t) : this
                })).filter((function() {
                    var t = this.type;
                    return this.name && !w(this).is(":disabled") && Ie.test(this.nodeName) && !Ae.test(t) && (this.checked || !$t.test(t))
                })).map((function(t, e) {
                    var d = w(this).val();
                    return null == d ? null : Array.isArray(d) ? w.map(d, (function(t) {
                        return {
                            name: e.name,
                            value: t.replace(Le, "\r\n")
                        }
                    })) : {
                        name: e.name,
                        value: d.replace(Le, "\r\n")
                    }
                })).get()
            }
        });
        var Me = /%20/g,
            je = /#.*$/,
            Pe = /([?&])_=[^&]*/,
            Oe = /^(.*?):[ \t]*([^\r\n]*)$/gm,
            ze = /^(?:GET|HEAD)$/,
            Be = /^\/\//,
            He = {},
            Re = {},
            Fe = "*/".concat("*"),
            qe = r.createElement("a");

        function Ge(t) {
            return function(e, d) {
                "string" != typeof e && (d = e, e = "*");
                var i, n = 0,
                    o = e.toLowerCase().match(z) || [];
                if (b(d))
                    for (; i = o[n++];) "+" === i[0] ? (i = i.slice(1) || "*", (t[i] = t[i] || []).unshift(d)) : (t[i] = t[i] || []).push(d)
            }
        }

        function Ue(t, e, d, i) {
            var n = {},
                o = t === Re;

            function r(a) {
                var s;
                return n[a] = !0, w.each(t[a] || [], (function(t, a) {
                    var l = a(e, d, i);
                    return "string" != typeof l || o || n[l] ? o ? !(s = l) : void 0 : (e.dataTypes.unshift(l), r(l), !1)
                })), s
            }
            return r(e.dataTypes[0]) || !n["*"] && r("*")
        }

        function We(t, e) {
            var d, i, n = w.ajaxSettings.flatOptions || {};
            for (d in e) void 0 !== e[d] && ((n[d] ? t : i || (i = {}))[d] = e[d]);
            return i && w.extend(!0, t, i), t
        }
        qe.href = Te.href, w.extend({
            active: 0,
            lastModified: {},
            etag: {},
            ajaxSettings: {
                url: Te.href,
                type: "GET",
                isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Te.protocol),
                global: !0,
                processData: !0,
                async: !0,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                accepts: {
                    "*": Fe,
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
                    "text xml": w.parseXML
                },
                flatOptions: {
                    url: !0,
                    context: !0
                }
            },
            ajaxSetup: function(t, e) {
                return e ? We(We(t, w.ajaxSettings), e) : We(w.ajaxSettings, t)
            },
            ajaxPrefilter: Ge(He),
            ajaxTransport: Ge(Re),
            ajax: function(t, e) {
                "object" == typeof t && (e = t, t = void 0), e = e || {};
                var i, n, o, a, s, l, u, p, c, f, h = w.ajaxSetup({}, e),
                    $ = h.context || h,
                    g = h.context && ($.nodeType || $.jquery) ? w($) : w.event,
                    m = w.Deferred(),
                    b = w.Callbacks("once memory"),
                    x = h.statusCode || {},
                    _ = {},
                    y = {},
                    v = "canceled",
                    k = {
                        readyState: 0,
                        getResponseHeader: function(t) {
                            var e;
                            if (u) {
                                if (!a)
                                    for (a = {}; e = Oe.exec(o);) a[e[1].toLowerCase() + " "] = (a[e[1].toLowerCase() + " "] || []).concat(e[2]);
                                e = a[t.toLowerCase() + " "]
                            }
                            return null == e ? null : e.join(", ")
                        },
                        getAllResponseHeaders: function() {
                            return u ? o : null
                        },
                        setRequestHeader: function(t, e) {
                            return null == u && (t = y[t.toLowerCase()] = y[t.toLowerCase()] || t, _[t] = e), this
                        },
                        overrideMimeType: function(t) {
                            return null == u && (h.mimeType = t), this
                        },
                        statusCode: function(t) {
                            var e;
                            if (t)
                                if (u) k.always(t[k.status]);
                                else
                                    for (e in t) x[e] = [x[e], t[e]];
                            return this
                        },
                        abort: function(t) {
                            var e = t || v;
                            return i && i.abort(e), C(0, e), this
                        }
                    };
                if (m.promise(k), h.url = ((t || h.url || Te.href) + "").replace(Be, Te.protocol + "//"), h.type = e.method || e.type || h.method || h.type, h.dataTypes = (h.dataType || "*").toLowerCase().match(z) || [""], null == h.crossDomain) {
                    l = r.createElement("a");
                    try {
                        l.href = h.url, l.href = l.href, h.crossDomain = qe.protocol + "//" + qe.host != l.protocol + "//" + l.host
                    } catch (t) {
                        h.crossDomain = !0
                    }
                }
                if (h.data && h.processData && "string" != typeof h.data && (h.data = w.param(h.data, h.traditional)), Ue(He, h, e, k), u) return k;
                for (c in (p = w.event && h.global) && 0 == w.active++ && w.event.trigger("ajaxStart"), h.type = h.type.toUpperCase(), h.hasContent = !ze.test(h.type), n = h.url.replace(je, ""), h.hasContent ? h.data && h.processData && 0 === (h.contentType || "").indexOf("application/x-www-form-urlencoded") && (h.data = h.data.replace(Me, "+")) : (f = h.url.slice(n.length), h.data && (h.processData || "string" == typeof h.data) && (n += (Ee.test(n) ? "&" : "?") + h.data, delete h.data), !1 === h.cache && (n = n.replace(Pe, "$1"), f = (Ee.test(n) ? "&" : "?") + "_=" + Se++ + f), h.url = n + f), h.ifModified && (w.lastModified[n] && k.setRequestHeader("If-Modified-Since", w.lastModified[n]), w.etag[n] && k.setRequestHeader("If-None-Match", w.etag[n])), (h.data && h.hasContent && !1 !== h.contentType || e.contentType) && k.setRequestHeader("Content-Type", h.contentType), k.setRequestHeader("Accept", h.dataTypes[0] && h.accepts[h.dataTypes[0]] ? h.accepts[h.dataTypes[0]] + ("*" !== h.dataTypes[0] ? ", " + Fe + "; q=0.01" : "") : h.accepts["*"]), h.headers) k.setRequestHeader(c, h.headers[c]);
                if (h.beforeSend && (!1 === h.beforeSend.call($, k, h) || u)) return k.abort();
                if (v = "abort", b.add(h.complete), k.done(h.success), k.fail(h.error), i = Ue(Re, h, e, k)) {
                    if (k.readyState = 1, p && g.trigger("ajaxSend", [k, h]), u) return k;
                    h.async && h.timeout > 0 && (s = d.setTimeout((function() {
                        k.abort("timeout")
                    }), h.timeout));
                    try {
                        u = !1, i.send(_, C)
                    } catch (t) {
                        if (u) throw t;
                        C(-1, t)
                    }
                } else C(-1, "No Transport");

                function C(t, e, r, a) {
                    var l, c, f, _, y, v = e;
                    u || (u = !0, s && d.clearTimeout(s), i = void 0, o = a || "", k.readyState = t > 0 ? 4 : 0, l = t >= 200 && t < 300 || 304 === t, r && (_ = function(t, e, d) {
                        for (var i, n, o, r, a = t.contents, s = t.dataTypes;
                            "*" === s[0];) s.shift(), void 0 === i && (i = t.mimeType || e.getResponseHeader("Content-Type"));
                        if (i)
                            for (n in a)
                                if (a[n] && a[n].test(i)) {
                                    s.unshift(n);
                                    break
                                }
                        if (s[0] in d) o = s[0];
                        else {
                            for (n in d) {
                                if (!s[0] || t.converters[n + " " + s[0]]) {
                                    o = n;
                                    break
                                }
                                r || (r = n)
                            }
                            o = o || r
                        }
                        if (o) return o !== s[0] && s.unshift(o), d[o]
                    }(h, k, r)), _ = function(t, e, d, i) {
                        var n, o, r, a, s, l = {},
                            u = t.dataTypes.slice();
                        if (u[1])
                            for (r in t.converters) l[r.toLowerCase()] = t.converters[r];
                        for (o = u.shift(); o;)
                            if (t.responseFields[o] && (d[t.responseFields[o]] = e), !s && i && t.dataFilter && (e = t.dataFilter(e, t.dataType)), s = o, o = u.shift())
                                if ("*" === o) o = s;
                                else if ("*" !== s && s !== o) {
                            if (!(r = l[s + " " + o] || l["* " + o]))
                                for (n in l)
                                    if ((a = n.split(" "))[1] === o && (r = l[s + " " + a[0]] || l["* " + a[0]])) {
                                        !0 === r ? r = l[n] : !0 !== l[n] && (o = a[0], u.unshift(a[1]));
                                        break
                                    }
                            if (!0 !== r)
                                if (r && t.throws) e = r(e);
                                else try {
                                    e = r(e)
                                } catch (t) {
                                    return {
                                        state: "parsererror",
                                        error: r ? t : "No conversion from " + s + " to " + o
                                    }
                                }
                        }
                        return {
                            state: "success",
                            data: e
                        }
                    }(h, _, k, l), l ? (h.ifModified && ((y = k.getResponseHeader("Last-Modified")) && (w.lastModified[n] = y), (y = k.getResponseHeader("etag")) && (w.etag[n] = y)), 204 === t || "HEAD" === h.type ? v = "nocontent" : 304 === t ? v = "notmodified" : (v = _.state, c = _.data, l = !(f = _.error))) : (f = v, !t && v || (v = "error", t < 0 && (t = 0))), k.status = t, k.statusText = (e || v) + "", l ? m.resolveWith($, [c, v, k]) : m.rejectWith($, [k, v, f]), k.statusCode(x), x = void 0, p && g.trigger(l ? "ajaxSuccess" : "ajaxError", [k, h, l ? c : f]), b.fireWith($, [k, v]), p && (g.trigger("ajaxComplete", [k, h]), --w.active || w.event.trigger("ajaxStop")))
                }
                return k
            },
            getJSON: function(t, e, d) {
                return w.get(t, e, d, "json")
            },
            getScript: function(t, e) {
                return w.get(t, void 0, e, "script")
            }
        }), w.each(["get", "post"], (function(t, e) {
            w[e] = function(t, d, i, n) {
                return b(d) && (n = n || i, i = d, d = void 0), w.ajax(w.extend({
                    url: t,
                    type: e,
                    dataType: n,
                    data: d,
                    success: i
                }, w.isPlainObject(t) && t))
            }
        })), w._evalUrl = function(t, e) {
            return w.ajax({
                url: t,
                type: "GET",
                dataType: "script",
                cache: !0,
                async: !1,
                global: !1,
                converters: {
                    "text script": function() {}
                },
                dataFilter: function(t) {
                    w.globalEval(t, e)
                }
            })
        }, w.fn.extend({
            wrapAll: function(t) {
                var e;
                return this[0] && (b(t) && (t = t.call(this[0])), e = w(t, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && e.insertBefore(this[0]), e.map((function() {
                    for (var t = this; t.firstElementChild;) t = t.firstElementChild;
                    return t
                })).append(this)), this
            },
            wrapInner: function(t) {
                return b(t) ? this.each((function(e) {
                    w(this).wrapInner(t.call(this, e))
                })) : this.each((function() {
                    var e = w(this),
                        d = e.contents();
                    d.length ? d.wrapAll(t) : e.append(t)
                }))
            },
            wrap: function(t) {
                var e = b(t);
                return this.each((function(d) {
                    w(this).wrapAll(e ? t.call(this, d) : t)
                }))
            },
            unwrap: function(t) {
                return this.parent(t).not("body").each((function() {
                    w(this).replaceWith(this.childNodes)
                })), this
            }
        }), w.expr.pseudos.hidden = function(t) {
            return !w.expr.pseudos.visible(t)
        }, w.expr.pseudos.visible = function(t) {
            return !!(t.offsetWidth || t.offsetHeight || t.getClientRects().length)
        }, w.ajaxSettings.xhr = function() {
            try {
                return new d.XMLHttpRequest
            } catch (t) {}
        };
        var Ke = {
                0: 200,
                1223: 204
            },
            Ve = w.ajaxSettings.xhr();
        m.cors = !!Ve && "withCredentials" in Ve, m.ajax = Ve = !!Ve, w.ajaxTransport((function(t) {
            var e, i;
            if (m.cors || Ve && !t.crossDomain) return {
                send: function(n, o) {
                    var r, a = t.xhr();
                    if (a.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields)
                        for (r in t.xhrFields) a[r] = t.xhrFields[r];
                    for (r in t.mimeType && a.overrideMimeType && a.overrideMimeType(t.mimeType), t.crossDomain || n["X-Requested-With"] || (n["X-Requested-With"] = "XMLHttpRequest"), n) a.setRequestHeader(r, n[r]);
                    e = function(t) {
                        return function() {
                            e && (e = i = a.onload = a.onerror = a.onabort = a.ontimeout = a.onreadystatechange = null, "abort" === t ? a.abort() : "error" === t ? "number" != typeof a.status ? o(0, "error") : o(a.status, a.statusText) : o(Ke[a.status] || a.status, a.statusText, "text" !== (a.responseType || "text") || "string" != typeof a.responseText ? {
                                binary: a.response
                            } : {
                                text: a.responseText
                            }, a.getAllResponseHeaders()))
                        }
                    }, a.onload = e(), i = a.onerror = a.ontimeout = e("error"), void 0 !== a.onabort ? a.onabort = i : a.onreadystatechange = function() {
                        4 === a.readyState && d.setTimeout((function() {
                            e && i()
                        }))
                    }, e = e("abort");
                    try {
                        a.send(t.hasContent && t.data || null)
                    } catch (t) {
                        if (e) throw t
                    }
                },
                abort: function() {
                    e && e()
                }
            }
        })), w.ajaxPrefilter((function(t) {
            t.crossDomain && (t.contents.script = !1)
        })), w.ajaxSetup({
            accepts: {
                script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
            },
            contents: {
                script: /\b(?:java|ecma)script\b/
            },
            converters: {
                "text script": function(t) {
                    return w.globalEval(t), t
                }
            }
        }), w.ajaxPrefilter("script", (function(t) {
            void 0 === t.cache && (t.cache = !1), t.crossDomain && (t.type = "GET")
        })), w.ajaxTransport("script", (function(t) {
            var e, d;
            if (t.crossDomain || t.scriptAttrs) return {
                send: function(i, n) {
                    e = w("<script>").attr(t.scriptAttrs || {}).prop({
                        charset: t.scriptCharset,
                        src: t.url
                    }).on("load error", d = function(t) {
                        e.remove(), d = null, t && n("error" === t.type ? 404 : 200, t.type)
                    }), r.head.appendChild(e[0])
                },
                abort: function() {
                    d && d()
                }
            }
        }));
        var Ye, Ze = [],
            Je = /(=)\?(?=&|$)|\?\?/;
        w.ajaxSetup({
            jsonp: "callback",
            jsonpCallback: function() {
                var t = Ze.pop() || w.expando + "_" + Se++;
                return this[t] = !0, t
            }
        }), w.ajaxPrefilter("json jsonp", (function(t, e, i) {
            var n, o, r, a = !1 !== t.jsonp && (Je.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Je.test(t.data) && "data");
            if (a || "jsonp" === t.dataTypes[0]) return n = t.jsonpCallback = b(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, a ? t[a] = t[a].replace(Je, "$1" + n) : !1 !== t.jsonp && (t.url += (Ee.test(t.url) ? "&" : "?") + t.jsonp + "=" + n), t.converters["script json"] = function() {
                return r || w.error(n + " was not called"), r[0]
            }, t.dataTypes[0] = "json", o = d[n], d[n] = function() {
                r = arguments
            }, i.always((function() {
                void 0 === o ? w(d).removeProp(n) : d[n] = o, t[n] && (t.jsonpCallback = e.jsonpCallback, Ze.push(n)), r && b(o) && o(r[0]), r = o = void 0
            })), "script"
        })), m.createHTMLDocument = ((Ye = r.implementation.createHTMLDocument("").body).innerHTML = "<form></form><form></form>", 2 === Ye.childNodes.length), w.parseHTML = function(t, e, d) {
            return "string" != typeof t ? [] : ("boolean" == typeof e && (d = e, e = !1), e || (m.createHTMLDocument ? ((i = (e = r.implementation.createHTMLDocument("")).createElement("base")).href = r.location.href, e.head.appendChild(i)) : e = r), o = !d && [], (n = A.exec(t)) ? [e.createElement(n[1])] : (n = kt([t], e, o), o && o.length && w(o).remove(), w.merge([], n.childNodes)));
            var i, n, o
        }, w.fn.load = function(t, e, d) {
            var i, n, o, r = this,
                a = t.indexOf(" ");
            return a > -1 && (i = _e(t.slice(a)), t = t.slice(0, a)), b(e) ? (d = e, e = void 0) : e && "object" == typeof e && (n = "POST"), r.length > 0 && w.ajax({
                url: t,
                type: n || "GET",
                dataType: "html",
                data: e
            }).done((function(t) {
                o = arguments, r.html(i ? w("<div>").append(w.parseHTML(t)).find(i) : t)
            })).always(d && function(t, e) {
                r.each((function() {
                    d.apply(this, o || [t.responseText, e, t])
                }))
            }), this
        }, w.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], (function(t, e) {
            w.fn[e] = function(t) {
                return this.on(e, t)
            }
        })), w.expr.pseudos.animated = function(t) {
            return w.grep(w.timers, (function(e) {
                return t === e.elem
            })).length
        }, w.offset = {
            setOffset: function(t, e, d) {
                var i, n, o, r, a, s, l = w.css(t, "position"),
                    u = w(t),
                    p = {};
                "static" === l && (t.style.position = "relative"), a = u.offset(), o = w.css(t, "top"), s = w.css(t, "left"), ("absolute" === l || "fixed" === l) && (o + s).indexOf("auto") > -1 ? (r = (i = u.position()).top, n = i.left) : (r = parseFloat(o) || 0, n = parseFloat(s) || 0), b(e) && (e = e.call(t, d, w.extend({}, a))), null != e.top && (p.top = e.top - a.top + r), null != e.left && (p.left = e.left - a.left + n), "using" in e ? e.using.call(t, p) : u.css(p)
            }
        }, w.fn.extend({
            offset: function(t) {
                if (arguments.length) return void 0 === t ? this : this.each((function(e) {
                    w.offset.setOffset(this, t, e)
                }));
                var e, d, i = this[0];
                return i ? i.getClientRects().length ? (e = i.getBoundingClientRect(), d = i.ownerDocument.defaultView, {
                    top: e.top + d.pageYOffset,
                    left: e.left + d.pageXOffset
                }) : {
                    top: 0,
                    left: 0
                } : void 0
            },
            position: function() {
                if (this[0]) {
                    var t, e, d, i = this[0],
                        n = {
                            top: 0,
                            left: 0
                        };
                    if ("fixed" === w.css(i, "position")) e = i.getBoundingClientRect();
                    else {
                        for (e = this.offset(), d = i.ownerDocument, t = i.offsetParent || d.documentElement; t && (t === d.body || t === d.documentElement) && "static" === w.css(t, "position");) t = t.parentNode;
                        t && t !== i && 1 === t.nodeType && ((n = w(t).offset()).top += w.css(t, "borderTopWidth", !0), n.left += w.css(t, "borderLeftWidth", !0))
                    }
                    return {
                        top: e.top - n.top - w.css(i, "marginTop", !0),
                        left: e.left - n.left - w.css(i, "marginLeft", !0)
                    }
                }
            },
            offsetParent: function() {
                return this.map((function() {
                    for (var t = this.offsetParent; t && "static" === w.css(t, "position");) t = t.offsetParent;
                    return t || rt
                }))
            }
        }), w.each({
            scrollLeft: "pageXOffset",
            scrollTop: "pageYOffset"
        }, (function(t, e) {
            var d = "pageYOffset" === e;
            w.fn[t] = function(i) {
                return U(this, (function(t, i, n) {
                    var o;
                    if (x(t) ? o = t : 9 === t.nodeType && (o = t.defaultView), void 0 === n) return o ? o[e] : t[i];
                    o ? o.scrollTo(d ? o.pageXOffset : n, d ? n : o.pageYOffset) : t[i] = n
                }), t, i, arguments.length)
            }
        })), w.each(["top", "left"], (function(t, e) {
            w.cssHooks[e] = Vt(m.pixelPosition, (function(t, d) {
                if (d) return d = Kt(t, e), Gt.test(d) ? w(t).position()[e] + "px" : d
            }))
        })), w.each({
            Height: "height",
            Width: "width"
        }, (function(t, e) {
            w.each({
                padding: "inner" + t,
                content: e,
                "": "outer" + t
            }, (function(d, i) {
                w.fn[i] = function(n, o) {
                    var r = arguments.length && (d || "boolean" != typeof n),
                        a = d || (!0 === n || !0 === o ? "margin" : "border");
                    return U(this, (function(e, d, n) {
                        var o;
                        return x(e) ? 0 === i.indexOf("outer") ? e["inner" + t] : e.document.documentElement["client" + t] : 9 === e.nodeType ? (o = e.documentElement, Math.max(e.body["scroll" + t], o["scroll" + t], e.body["offset" + t], o["offset" + t], o["client" + t])) : void 0 === n ? w.css(e, d, a) : w.style(e, d, n, a)
                    }), e, r ? n : void 0, r)
                }
            }))
        })), w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), (function(t, e) {
            w.fn[e] = function(t, d) {
                return arguments.length > 0 ? this.on(e, null, t, d) : this.trigger(e)
            }
        })), w.fn.extend({
            hover: function(t, e) {
                return this.mouseenter(t).mouseleave(e || t)
            }
        }), w.fn.extend({
            bind: function(t, e, d) {
                return this.on(t, null, e, d)
            },
            unbind: function(t, e) {
                return this.off(t, null, e)
            },
            delegate: function(t, e, d, i) {
                return this.on(e, t, d, i)
            },
            undelegate: function(t, e, d) {
                return 1 === arguments.length ? this.off(t, "**") : this.off(e, t || "**", d)
            }
        }), w.proxy = function(t, e) {
            var d, i, n;
            if ("string" == typeof e && (d = t[e], e = t, t = d), b(t)) return i = s.call(arguments, 2), (n = function() {
                return t.apply(e || this, i.concat(s.call(arguments)))
            }).guid = t.guid = t.guid || w.guid++, n
        }, w.holdReady = function(t) {
            t ? w.readyWait++ : w.ready(!0)
        }, w.isArray = Array.isArray, w.parseJSON = JSON.parse, w.nodeName = L, w.isFunction = b, w.isWindow = x, w.camelCase = Y, w.type = v, w.now = Date.now, w.isNumeric = function(t) {
            var e = w.type(t);
            return ("number" === e || "string" === e) && !isNaN(t - parseFloat(t))
        }, void 0 === (i = function() {
            return w
        }.apply(e, [])) || (t.exports = i);
        var Xe = d.jQuery,
            Qe = d.$;
        return w.noConflict = function(t) {
            return d.$ === w && (d.$ = Qe), t && d.jQuery === w && (d.jQuery = Xe), w
        }, n || (d.jQuery = d.$ = w), w
    }))
}, function(t, e, d) {
    t.exports = d(11)
}, function(t, e, d) {
    t.exports = d(3)
}, function(t, e, d) {
    "use strict";
    d.r(e),
        function(t) {
            d(4), d(8), d(9), d(12), d(14);
            t(".faq-item-title").on("click", (function() {
                t(this).closest(".faq-item").toggleClass("active")
            })), t(".scroll-top").on("click", (function(e) {
                e.preventDefault(), t([document.documentElement, document.body]).animate({
                    scrollTop: t(t(this).attr("href")).offset().top
                }, 1e3)
            }))
        }.call(this, d(0))
}, function(t, e, d) {
    var i = d(5);
    "string" == typeof i && (i = [
        [t.i, i, ""]
    ]);
    var n = {
        insert: "head",
        singleton: !1
    };
    d(7)(i, n);
    i.locals && (t.exports = i.locals)
}, function(t, e, d) {
    (e = t.exports = d(6)(!1)).push([t.i, "@import url(https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap);", ""]), e.push([t.i, '@font-face{font-family:HelveticaNeue-Condensed;src:url(fonts/HelveticaNeue-Condensed.eot);src:local("☺"),url(fonts/HelveticaNeue-Condensed.woff) format("woff"),url(fonts/HelveticaNeue-Condensed.ttf) format("truetype"),url(fonts/HelveticaNeue-Condensed.svg) format("svg");font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:HelveticaNeue-Condensed;src:url(fonts/HelveticaNeue-Condensed\\ Bold.eot);src:local("☺"),url(fonts/HelveticaNeue-Condensed\\ Bold.woff) format("woff"),url(fonts/HelveticaNeue-Condensed\\ Bold.ttf) format("truetype"),url(fonts/HelveticaNeue-Condensed\\ Bold.svg) format("svg");font-weight:700;font-style:normal;font-display:swap}/*!\n * Bootstrap v4.3.1 (https://getbootstrap.com/)\n * Copyright 2011-2019 The Bootstrap Authors\n * Copyright 2011-2019 Twitter, Inc.\n * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)\n */:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,:after,:before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:rgba(0,0,0,0)}figcaption,figure,footer,header,main,nav,section{display:block}body{font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}[tabindex="-1"]:focus{outline:0!important}h1,h2,h3,h4,h5{margin-top:0;margin-bottom:.5rem}p{margin-top:0}address,p{margin-bottom:1rem}address{font-style:normal;line-height:inherit}dl,ul{margin-top:0;margin-bottom:1rem}ul ul{margin-bottom:0}b,strong{font-weight:bolder}small{font-size:80%}sub{position:relative;font-size:75%;line-height:0;vertical-align:baseline;bottom:-.25em}a{color:#007bff;text-decoration:none;background-color:transparent}a:hover{color:#0056b3;text-decoration:underline}a:not([href]):not([tabindex]),a:not([href]):not([tabindex]):focus,a:not([href]):not([tabindex]):hover{color:inherit;text-decoration:none}a:not([href]):not([tabindex]):focus{outline:0}code{font-family:SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-size:1em}figure{margin:0 0 1rem}img{border-style:none}img,svg{vertical-align:middle}svg{overflow:hidden}caption{padding-top:.75rem;padding-bottom:.75rem;color:#6c757d;text-align:left;caption-side:bottom}button{border-radius:0}button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color}button,input,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}select{word-wrap:normal}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=date],input[type=datetime-local],input[type=month],input[type=time]{-webkit-appearance:listbox}textarea{overflow:auto;resize:vertical}legend{display:block;width:100%;max-width:100%;padding:0;margin-bottom:.5rem;font-size:1.5rem;line-height:inherit;color:inherit;white-space:normal}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:none}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}[hidden]{display:none!important}.h1,.h2,.h3,.h4,.h5,h1,h2,h3,h4,h5{margin-bottom:.5rem;font-weight:500;line-height:1.2}.h1,h1{font-size:2.5rem}.h2,h2{font-size:2rem}.h3,h3{font-size:1.75rem}.h4,h4{font-size:1.5rem}.h5,h5{font-size:1.25rem}.small,small{font-size:80%;font-weight:400}.mark,mark{padding:.2em;background-color:#fcf8e3}.figure{display:inline-block}code{font-size:87.5%;color:#e83e8c;word-break:break-word}a>code{color:inherit}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media(min-width:576px){.container{max-width:540px}}@media(min-width:768px){.container{max-width:720px}}@media(min-width:992px){.container{max-width:960px}}@media(min-width:1200px){.container{max-width:1140px}}.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col-5,.col-7,.col-lg-4,.col-lg-8,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{position:relative;width:100%;padding-right:15px;padding-left:15px}.col-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.order-1{order:1}.order-2{order:2}.order-3{order:3}@media(min-width:768px){.col-md-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-md-5{flex:0 0 41.6666666667%;max-width:41.6666666667%}.col-md-6{flex:0 0 50%;max-width:50%}.col-md-7{flex:0 0 58.3333333333%;max-width:58.3333333333%}.col-md-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}.col-md-9{flex:0 0 75%;max-width:75%}.order-md-1{order:1}.order-md-2{order:2}.offset-md-4{margin-left:33.3333333333%}.offset-md-5{margin-left:41.6666666667%}}@media(min-width:992px){.col-lg-4{flex:0 0 33.3333333333%;max-width:33.3333333333%}.col-lg-8{flex:0 0 66.6666666667%;max-width:66.6666666667%}}.form-group{margin-bottom:1rem}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media(prefers-reduced-motion:reduce){.btn{transition:none}}.btn:hover{color:#212529;text-decoration:none}.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.btn:disabled{opacity:.65}.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#0062cc;border-color:#005cbf}.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}.btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:hover{color:#fff;background-color:#5a6268;border-color:#545b62}.btn-secondary:focus{box-shadow:0 0 0 .2rem rgba(130,138,145,.5)}.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:not(:disabled):not(.disabled).active,.btn-secondary:not(:disabled):not(.disabled):active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#545b62;border-color:#4e555b}.btn-secondary:not(:disabled):not(.disabled).active:focus,.btn-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(130,138,145,.5)}.show>.btn-success.dropdown-toggle{color:#fff;background-color:#1e7e34;border-color:#1c7430}.show>.btn-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(72,180,97,.5)}.show>.btn-info.dropdown-toggle{color:#fff;background-color:#117a8b;border-color:#10707f}.show>.btn-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(58,176,195,.5)}.show>.btn-warning.dropdown-toggle{color:#212529;background-color:#d39e00;border-color:#c69500}.show>.btn-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(222,170,12,.5)}.show>.btn-danger.dropdown-toggle{color:#fff;background-color:#bd2130;border-color:#b21f2d}.show>.btn-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(225,83,97,.5)}.show>.btn-light.dropdown-toggle{color:#212529;background-color:#dae0e5;border-color:#d3d9df}.show>.btn-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(216,217,219,.5)}.show>.btn-dark.dropdown-toggle{color:#fff;background-color:#1d2124;border-color:#171a1d}.show>.btn-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(82,88,93,.5)}.show>.btn-outline-primary.dropdown-toggle{color:#fff;background-color:#007bff;border-color:#007bff}.show>.btn-outline-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.show>.btn-outline-secondary.dropdown-toggle{color:#fff;background-color:#6c757d;border-color:#6c757d}.show>.btn-outline-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.show>.btn-outline-success.dropdown-toggle{color:#fff;background-color:#28a745;border-color:#28a745}.show>.btn-outline-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.show>.btn-outline-info.dropdown-toggle{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.show>.btn-outline-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.show>.btn-outline-warning.dropdown-toggle{color:#212529;background-color:#ffc107;border-color:#ffc107}.show>.btn-outline-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.show>.btn-outline-danger.dropdown-toggle{color:#fff;background-color:#dc3545;border-color:#dc3545}.show>.btn-outline-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.show>.btn-outline-light.dropdown-toggle{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.show>.btn-outline-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.show>.btn-outline-dark.dropdown-toggle{color:#fff;background-color:#343a40;border-color:#343a40}.show>.btn-outline-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-link{font-weight:400;color:#007bff;text-decoration:none}.btn-link:hover{color:#0056b3;text-decoration:underline}.btn-link:focus{text-decoration:underline;box-shadow:none}.btn-link:disabled{color:#6c757d;pointer-events:none}.fade{transition:opacity .15s linear}@media(prefers-reduced-motion:reduce){.fade{transition:none}}.fade:not(.show){opacity:0}.card{display:flex;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.alert,.card{position:relative}.alert{padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-danger{color:#721c24;background-color:#f8d7da;border-color:#f5c6cb}@-webkit-keyframes progress-bar-stripes{0%{background-position:1rem 0}to{background-position:0 0}}@keyframes progress-bar-stripes{0%{background-position:1rem 0}to{background-position:0 0}}.media{display:flex;align-items:flex-start}.close{float:right;font-size:1.5rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5}.close:hover{color:#000;text-decoration:none}.close:not(:disabled):not(.disabled):focus,.close:not(:disabled):not(.disabled):hover{opacity:.75}button.close{padding:0;background-color:transparent;border:0;-webkit-appearance:none;-moz-appearance:none;appearance:none}.modal-open{overflow:hidden}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0}.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{transition:transform .3s ease-out;transform:translateY(-50px)}@media(prefers-reduced-motion:reduce){.modal.fade .modal-dialog{transition:none}}.modal.show .modal-dialog{transform:none}.modal-dialog-scrollable{display:flex;max-height:calc(100% - 1rem)}.modal-dialog-scrollable .modal-content{max-height:calc(100vh - 1rem);overflow:hidden}.modal-dialog-scrollable .modal-footer,.modal-dialog-scrollable .modal-header{flex-shrink:0}.modal-dialog-scrollable .modal-body{overflow-y:auto}.modal-dialog-centered{display:flex;align-items:center;min-height:calc(100% - 1rem)}.modal-dialog-centered:before{display:block;height:calc(100vh - 1rem);content:""}.modal-dialog-centered.modal-dialog-scrollable{flex-direction:column;justify-content:center;height:100%}.modal-dialog-centered.modal-dialog-scrollable .modal-content{max-height:none}.modal-dialog-centered.modal-dialog-scrollable:before{content:none}.modal-content{position:relative;display:flex;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.modal-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-header{display:flex;align-items:flex-start;justify-content:space-between;padding:1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:.3rem;border-top-right-radius:.3rem}.modal-header .close{padding:1rem;margin:-1rem -1rem -1rem auto}.modal-title{margin-bottom:0;line-height:1.5}.modal-body{position:relative;flex:1 1 auto;padding:1rem}.modal-footer{display:flex;align-items:center;justify-content:flex-end;padding:1rem;border-top:1px solid #dee2e6;border-bottom-right-radius:.3rem;border-bottom-left-radius:.3rem}.modal-footer>:not(:first-child){margin-left:.25rem}.modal-footer>:not(:last-child){margin-right:.25rem}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media(min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}.modal-dialog-scrollable{max-height:calc(100% - 3.5rem)}.modal-dialog-scrollable .modal-content{max-height:calc(100vh - 3.5rem)}.modal-dialog-centered{min-height:calc(100% - 3.5rem)}.modal-dialog-centered:before{height:calc(100vh - 3.5rem)}.modal-sm{max-width:300px}}@media(min-width:992px){.modal-lg,.modal-xl{max-width:800px}}@media(min-width:1200px){.modal-xl{max-width:1140px}}@-webkit-keyframes spinner-border{to{transform:rotate(1turn)}}@keyframes spinner-border{to{transform:rotate(1turn)}}@-webkit-keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1}}@keyframes spinner-grow{0%{transform:scale(0)}50%{opacity:1}}.border{border:1px solid #dee2e6!important}.border-top{border-top:1px solid #dee2e6!important}.border-right{border-right:1px solid #dee2e6!important}.border-left{border-left:1px solid #dee2e6!important}.flex-wrap{flex-wrap:wrap!important}.align-items-center{align-items:center!important}.w-100{width:100%!important}.mb-0{margin-bottom:0!important}.mb-4{margin-bottom:1.5rem!important}.mb-5{margin-bottom:3rem!important}.py-4{padding-top:1.5rem!important;padding-bottom:1.5rem!important}.py-5{padding-top:3rem!important}.pb-5,.py-5{padding-bottom:3rem!important}@media(min-width:768px){.mt-md-5{margin-top:3rem!important}}.text-left{text-align:left!important}.text-center{text-align:center!important}.font-weight-bold{font-weight:700!important}.visible{visibility:visible!important}@media print{*,:after,:before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}img{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}.container,body{min-width:992px!important}}.iti{position:relative;display:inline-block}.iti *{box-sizing:border-box;-moz-box-sizing:border-box}.iti__hide{display:none}.iti__v-hide{visibility:hidden}.iti input,.iti input[type=tel],.iti input[type=text]{position:relative;z-index:0;margin-top:0!important;margin-bottom:0!important;padding-right:36px;margin-right:0}.iti__flag-container{position:absolute;top:0;bottom:0;right:0;padding:1px}.iti__selected-flag{z-index:1;position:relative;display:flex;align-items:center;height:100%;padding:0 6px 0 8px}.iti__arrow{margin-left:6px;width:0;height:0;border-left:3px solid transparent;border-right:3px solid transparent;border-top:4px solid #555}.iti__arrow--up{border-top:none;border-bottom:4px solid #555}.iti__country-list{position:absolute;z-index:2;list-style:none;text-align:left;padding:0;margin:0 0 0 -1px;box-shadow:1px 1px 4px rgba(0,0,0,.2);background-color:#fff;border:1px solid #ccc;white-space:nowrap;max-height:200px;overflow-y:scroll;-webkit-overflow-scrolling:touch}.iti__country-list--dropup{bottom:100%;margin-bottom:-1px}@media(max-width:500px){.iti__country-list{white-space:normal}}.iti__flag-box{display:inline-block;width:20px}.iti__divider{padding-bottom:5px;margin-bottom:5px;border-bottom:1px solid #ccc}.iti__country{padding:5px 10px;outline:none}.iti__dial-code{color:#999}.iti__country.iti__highlight{background-color:rgba(0,0,0,.05)}.iti__country-name,.iti__dial-code,.iti__flag-box{vertical-align:middle}.iti__country-name,.iti__flag-box{margin-right:6px}.iti--allow-dropdown input,.iti--allow-dropdown input[type=tel],.iti--allow-dropdown input[type=text],.iti--separate-dial-code input,.iti--separate-dial-code input[type=tel],.iti--separate-dial-code input[type=text]{padding-right:6px;padding-left:52px;margin-left:0}.iti--allow-dropdown .iti__flag-container,.iti--separate-dial-code .iti__flag-container{right:auto;left:0}.iti--allow-dropdown .iti__flag-container:hover{cursor:pointer}.iti--allow-dropdown .iti__flag-container:hover .iti__selected-flag{background-color:rgba(0,0,0,.05)}.iti--allow-dropdown input[disabled]+.iti__flag-container:hover,.iti--allow-dropdown input[readonly]+.iti__flag-container:hover{cursor:default}.iti--allow-dropdown input[disabled]+.iti__flag-container:hover .iti__selected-flag,.iti--allow-dropdown input[readonly]+.iti__flag-container:hover .iti__selected-flag{background-color:transparent}.iti--separate-dial-code .iti__selected-flag{background-color:rgba(0,0,0,.05)}.iti--separate-dial-code .iti__selected-dial-code{margin-left:6px}.iti--container{position:absolute;top:-1000px;left:-1000px;z-index:1060;padding:1px}.iti--container:hover{cursor:pointer}.iti-mobile .iti--container{top:30px;bottom:30px;left:30px;right:30px;position:fixed}.iti-mobile .iti__country-list{max-height:100%;width:100%}.iti-mobile .iti__country{padding:10px;line-height:1.5em}.iti__flag{width:20px}.iti__flag.iti__be{width:18px}.iti__flag.iti__ch{width:15px}.iti__flag.iti__mc{width:19px}.iti__flag.iti__ne{width:18px}.iti__flag.iti__np{width:13px}.iti__flag.iti__va{width:15px}@media(-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi){.iti__flag{background-size:5652px 15px}}.iti__flag.iti__ac{height:10px;background-position:0 0}.iti__flag.iti__ad{height:14px;background-position:-22px 0}.iti__flag.iti__ae{height:10px;background-position:-44px 0}.iti__flag.iti__af{height:14px;background-position:-66px 0}.iti__flag.iti__ag{height:14px;background-position:-88px 0}.iti__flag.iti__ai{height:10px;background-position:-110px 0}.iti__flag.iti__al{height:15px;background-position:-132px 0}.iti__flag.iti__am{height:10px;background-position:-154px 0}.iti__flag.iti__ao{height:14px;background-position:-176px 0}.iti__flag.iti__aq{height:14px;background-position:-198px 0}.iti__flag.iti__ar{height:13px;background-position:-220px 0}.iti__flag.iti__as{height:10px;background-position:-242px 0}.iti__flag.iti__at{height:14px;background-position:-264px 0}.iti__flag.iti__au{height:10px;background-position:-286px 0}.iti__flag.iti__aw{height:14px;background-position:-308px 0}.iti__flag.iti__ax{height:13px;background-position:-330px 0}.iti__flag.iti__az{height:10px;background-position:-352px 0}.iti__flag.iti__ba{height:10px;background-position:-374px 0}.iti__flag.iti__bb{height:14px;background-position:-396px 0}.iti__flag.iti__bd{height:12px;background-position:-418px 0}.iti__flag.iti__be{height:15px;background-position:-440px 0}.iti__flag.iti__bf{height:14px;background-position:-460px 0}.iti__flag.iti__bg{height:12px;background-position:-482px 0}.iti__flag.iti__bh{height:12px;background-position:-504px 0}.iti__flag.iti__bi{height:12px;background-position:-526px 0}.iti__flag.iti__bj{height:14px;background-position:-548px 0}.iti__flag.iti__bl{height:14px;background-position:-570px 0}.iti__flag.iti__bm{height:10px;background-position:-592px 0}.iti__flag.iti__bn{height:10px;background-position:-614px 0}.iti__flag.iti__bo{height:14px;background-position:-636px 0}.iti__flag.iti__bq{height:14px;background-position:-658px 0}.iti__flag.iti__br{height:14px;background-position:-680px 0}.iti__flag.iti__bs{height:10px;background-position:-702px 0}.iti__flag.iti__bt{height:14px;background-position:-724px 0}.iti__flag.iti__bv{height:15px;background-position:-746px 0}.iti__flag.iti__bw{height:14px;background-position:-768px 0}.iti__flag.iti__by{height:10px;background-position:-790px 0}.iti__flag.iti__bz{height:14px;background-position:-812px 0}.iti__flag.iti__ca{height:10px;background-position:-834px 0}.iti__flag.iti__cc{height:10px;background-position:-856px 0}.iti__flag.iti__cd{height:15px;background-position:-878px 0}.iti__flag.iti__cf{height:14px;background-position:-900px 0}.iti__flag.iti__cg{height:14px;background-position:-922px 0}.iti__flag.iti__ch{height:15px;background-position:-944px 0}.iti__flag.iti__ci{height:14px;background-position:-961px 0}.iti__flag.iti__ck{height:10px;background-position:-983px 0}.iti__flag.iti__cl{height:14px;background-position:-1005px 0}.iti__flag.iti__cm{height:14px;background-position:-1027px 0}.iti__flag.iti__cn{height:14px;background-position:-1049px 0}.iti__flag.iti__co{height:14px;background-position:-1071px 0}.iti__flag.iti__cp{height:14px;background-position:-1093px 0}.iti__flag.iti__cr{height:12px;background-position:-1115px 0}.iti__flag.iti__cu{height:10px;background-position:-1137px 0}.iti__flag.iti__cv{height:12px;background-position:-1159px 0}.iti__flag.iti__cw{height:14px;background-position:-1181px 0}.iti__flag.iti__cx{height:10px;background-position:-1203px 0}.iti__flag.iti__cy{height:14px;background-position:-1225px 0}.iti__flag.iti__cz{height:14px;background-position:-1247px 0}.iti__flag.iti__de{height:12px;background-position:-1269px 0}.iti__flag.iti__dg{height:10px;background-position:-1291px 0}.iti__flag.iti__dj{height:14px;background-position:-1313px 0}.iti__flag.iti__dk{height:15px;background-position:-1335px 0}.iti__flag.iti__dm{height:10px;background-position:-1357px 0}.iti__flag.iti__do{height:14px;background-position:-1379px 0}.iti__flag.iti__dz{height:14px;background-position:-1401px 0}.iti__flag.iti__ea{height:14px;background-position:-1423px 0}.iti__flag.iti__ec{height:14px;background-position:-1445px 0}.iti__flag.iti__ee{height:13px;background-position:-1467px 0}.iti__flag.iti__eg{height:14px;background-position:-1489px 0}.iti__flag.iti__eh{height:10px;background-position:-1511px 0}.iti__flag.iti__er{height:10px;background-position:-1533px 0}.iti__flag.iti__es{height:14px;background-position:-1555px 0}.iti__flag.iti__et{height:10px;background-position:-1577px 0}.iti__flag.iti__eu{height:14px;background-position:-1599px 0}.iti__flag.iti__fi{height:12px;background-position:-1621px 0}.iti__flag.iti__fj{height:10px;background-position:-1643px 0}.iti__flag.iti__fk{height:10px;background-position:-1665px 0}.iti__flag.iti__fm{height:11px;background-position:-1687px 0}.iti__flag.iti__fo{height:15px;background-position:-1709px 0}.iti__flag.iti__fr{height:14px;background-position:-1731px 0}.iti__flag.iti__ga{height:15px;background-position:-1753px 0}.iti__flag.iti__gb{height:10px;background-position:-1775px 0}.iti__flag.iti__gd{height:12px;background-position:-1797px 0}.iti__flag.iti__ge{height:14px;background-position:-1819px 0}.iti__flag.iti__gf{height:14px;background-position:-1841px 0}.iti__flag.iti__gg{height:14px;background-position:-1863px 0}.iti__flag.iti__gh{height:14px;background-position:-1885px 0}.iti__flag.iti__gi{height:10px;background-position:-1907px 0}.iti__flag.iti__gl{height:14px;background-position:-1929px 0}.iti__flag.iti__gm{height:14px;background-position:-1951px 0}.iti__flag.iti__gn{height:14px;background-position:-1973px 0}.iti__flag.iti__gp{height:14px;background-position:-1995px 0}.iti__flag.iti__gq{height:14px;background-position:-2017px 0}.iti__flag.iti__gr{height:14px;background-position:-2039px 0}.iti__flag.iti__gs{height:10px;background-position:-2061px 0}.iti__flag.iti__gt{height:13px;background-position:-2083px 0}.iti__flag.iti__gu{height:11px;background-position:-2105px 0}.iti__flag.iti__gw{height:10px;background-position:-2127px 0}.iti__flag.iti__gy{height:12px;background-position:-2149px 0}.iti__flag.iti__hk{height:14px;background-position:-2171px 0}.iti__flag.iti__hm{height:10px;background-position:-2193px 0}.iti__flag.iti__hn{height:10px;background-position:-2215px 0}.iti__flag.iti__hr{height:10px;background-position:-2237px 0}.iti__flag.iti__ht{height:12px;background-position:-2259px 0}.iti__flag.iti__hu{height:10px;background-position:-2281px 0}.iti__flag.iti__ic{height:14px;background-position:-2303px 0}.iti__flag.iti__id{height:14px;background-position:-2325px 0}.iti__flag.iti__ie{height:10px;background-position:-2347px 0}.iti__flag.iti__il{height:15px;background-position:-2369px 0}.iti__flag.iti__im{height:10px;background-position:-2391px 0}.iti__flag.iti__in{height:14px;background-position:-2413px 0}.iti__flag.iti__io{height:10px;background-position:-2435px 0}.iti__flag.iti__iq{height:14px;background-position:-2457px 0}.iti__flag.iti__ir{height:12px;background-position:-2479px 0}.iti__flag.iti__is{height:15px;background-position:-2501px 0}.iti__flag.iti__it{height:14px;background-position:-2523px 0}.iti__flag.iti__je{height:12px;background-position:-2545px 0}.iti__flag.iti__jm{height:10px;background-position:-2567px 0}.iti__flag.iti__jo{height:10px;background-position:-2589px 0}.iti__flag.iti__jp{height:14px;background-position:-2611px 0}.iti__flag.iti__ke{height:14px;background-position:-2633px 0}.iti__flag.iti__kg{height:12px;background-position:-2655px 0}.iti__flag.iti__kh{height:13px;background-position:-2677px 0}.iti__flag.iti__ki{height:10px;background-position:-2699px 0}.iti__flag.iti__km{height:12px;background-position:-2721px 0}.iti__flag.iti__kn{height:14px;background-position:-2743px 0}.iti__flag.iti__kp{height:10px;background-position:-2765px 0}.iti__flag.iti__kr{height:14px;background-position:-2787px 0}.iti__flag.iti__kw{height:10px;background-position:-2809px 0}.iti__flag.iti__ky{height:10px;background-position:-2831px 0}.iti__flag.iti__kz{height:10px;background-position:-2853px 0}.iti__flag.iti__la{height:14px;background-position:-2875px 0}.iti__flag.iti__lb{height:14px;background-position:-2897px 0}.iti__flag.iti__lc{height:10px;background-position:-2919px 0}.iti__flag.iti__li{height:12px;background-position:-2941px 0}.iti__flag.iti__lk{height:10px;background-position:-2963px 0}.iti__flag.iti__lr{height:11px;background-position:-2985px 0}.iti__flag.iti__ls{height:14px;background-position:-3007px 0}.iti__flag.iti__lt{height:12px;background-position:-3029px 0}.iti__flag.iti__lu{height:12px;background-position:-3051px 0}.iti__flag.iti__lv{height:10px;background-position:-3073px 0}.iti__flag.iti__ly{height:10px;background-position:-3095px 0}.iti__flag.iti__ma{height:14px;background-position:-3117px 0}.iti__flag.iti__mc{height:15px;background-position:-3139px 0}.iti__flag.iti__md{height:10px;background-position:-3160px 0}.iti__flag.iti__me{height:10px;background-position:-3182px 0}.iti__flag.iti__mf{height:14px;background-position:-3204px 0}.iti__flag.iti__mg{height:14px;background-position:-3226px 0}.iti__flag.iti__mh{height:11px;background-position:-3248px 0}.iti__flag.iti__mk{height:10px;background-position:-3270px 0}.iti__flag.iti__ml{height:14px;background-position:-3292px 0}.iti__flag.iti__mm{height:14px;background-position:-3314px 0}.iti__flag.iti__mn{height:10px;background-position:-3336px 0}.iti__flag.iti__mo{height:14px;background-position:-3358px 0}.iti__flag.iti__mp{height:10px;background-position:-3380px 0}.iti__flag.iti__mq{height:14px;background-position:-3402px 0}.iti__flag.iti__mr{height:14px;background-position:-3424px 0}.iti__flag.iti__ms{height:10px;background-position:-3446px 0}.iti__flag.iti__mt{height:14px;background-position:-3468px 0}.iti__flag.iti__mu{height:14px;background-position:-3490px 0}.iti__flag.iti__mv{height:14px;background-position:-3512px 0}.iti__flag.iti__mw{height:14px;background-position:-3534px 0}.iti__flag.iti__mx{height:12px;background-position:-3556px 0}.iti__flag.iti__my{height:10px;background-position:-3578px 0}.iti__flag.iti__mz{height:14px;background-position:-3600px 0}.iti__flag.iti__na{height:14px;background-position:-3622px 0}.iti__flag.iti__nc{height:10px;background-position:-3644px 0}.iti__flag.iti__ne{height:15px;background-position:-3666px 0}.iti__flag.iti__nf{height:10px;background-position:-3686px 0}.iti__flag.iti__ng{height:10px;background-position:-3708px 0}.iti__flag.iti__ni{height:12px;background-position:-3730px 0}.iti__flag.iti__nl{height:14px;background-position:-3752px 0}.iti__flag.iti__no{height:15px;background-position:-3774px 0}.iti__flag.iti__np{height:15px;background-position:-3796px 0}.iti__flag.iti__nr{height:10px;background-position:-3811px 0}.iti__flag.iti__nu{height:10px;background-position:-3833px 0}.iti__flag.iti__nz{height:10px;background-position:-3855px 0}.iti__flag.iti__om{height:10px;background-position:-3877px 0}.iti__flag.iti__pa{height:14px;background-position:-3899px 0}.iti__flag.iti__pe{height:14px;background-position:-3921px 0}.iti__flag.iti__pf{height:14px;background-position:-3943px 0}.iti__flag.iti__pg{height:15px;background-position:-3965px 0}.iti__flag.iti__ph{height:10px;background-position:-3987px 0}.iti__flag.iti__pk{height:14px;background-position:-4009px 0}.iti__flag.iti__pl{height:13px;background-position:-4031px 0}.iti__flag.iti__pm{height:14px;background-position:-4053px 0}.iti__flag.iti__pn{height:10px;background-position:-4075px 0}.iti__flag.iti__pr{height:14px;background-position:-4097px 0}.iti__flag.iti__ps{height:10px;background-position:-4119px 0}.iti__flag.iti__pt{height:14px;background-position:-4141px 0}.iti__flag.iti__pw{height:13px;background-position:-4163px 0}.iti__flag.iti__py{height:11px;background-position:-4185px 0}.iti__flag.iti__qa{height:8px;background-position:-4207px 0}.iti__flag.iti__re{height:14px;background-position:-4229px 0}.iti__flag.iti__ro{height:14px;background-position:-4251px 0}.iti__flag.iti__rs{height:14px;background-position:-4273px 0}.iti__flag.iti__ru{height:14px;background-position:-4295px 0}.iti__flag.iti__rw{height:14px;background-position:-4317px 0}.iti__flag.iti__sa{height:14px;background-position:-4339px 0}.iti__flag.iti__sb{height:10px;background-position:-4361px 0}.iti__flag.iti__sc{height:10px;background-position:-4383px 0}.iti__flag.iti__sd{height:10px;background-position:-4405px 0}.iti__flag.iti__se{height:13px;background-position:-4427px 0}.iti__flag.iti__sg{height:14px;background-position:-4449px 0}.iti__flag.iti__sh{height:10px;background-position:-4471px 0}.iti__flag.iti__si{height:10px;background-position:-4493px 0}.iti__flag.iti__sj{height:15px;background-position:-4515px 0}.iti__flag.iti__sk{height:14px;background-position:-4537px 0}.iti__flag.iti__sl{height:14px;background-position:-4559px 0}.iti__flag.iti__sm{height:15px;background-position:-4581px 0}.iti__flag.iti__sn{height:14px;background-position:-4603px 0}.iti__flag.iti__so{height:14px;background-position:-4625px 0}.iti__flag.iti__sr{height:14px;background-position:-4647px 0}.iti__flag.iti__ss{height:10px;background-position:-4669px 0}.iti__flag.iti__st{height:10px;background-position:-4691px 0}.iti__flag.iti__sv{height:12px;background-position:-4713px 0}.iti__flag.iti__sx{height:14px;background-position:-4735px 0}.iti__flag.iti__sy{height:14px;background-position:-4757px 0}.iti__flag.iti__sz{height:14px;background-position:-4779px 0}.iti__flag.iti__ta{height:10px;background-position:-4801px 0}.iti__flag.iti__tc{height:10px;background-position:-4823px 0}.iti__flag.iti__td{height:14px;background-position:-4845px 0}.iti__flag.iti__tf{height:14px;background-position:-4867px 0}.iti__flag.iti__tg{height:13px;background-position:-4889px 0}.iti__flag.iti__th{height:14px;background-position:-4911px 0}.iti__flag.iti__tj{height:10px;background-position:-4933px 0}.iti__flag.iti__tk{height:10px;background-position:-4955px 0}.iti__flag.iti__tl{height:10px;background-position:-4977px 0}.iti__flag.iti__tm{height:14px;background-position:-4999px 0}.iti__flag.iti__tn{height:14px;background-position:-5021px 0}.iti__flag.iti__to{height:10px;background-position:-5043px 0}.iti__flag.iti__tr{height:14px;background-position:-5065px 0}.iti__flag.iti__tt{height:12px;background-position:-5087px 0}.iti__flag.iti__tv{height:10px;background-position:-5109px 0}.iti__flag.iti__tw{height:14px;background-position:-5131px 0}.iti__flag.iti__tz{height:14px;background-position:-5153px 0}.iti__flag.iti__ua{height:14px;background-position:-5175px 0}.iti__flag.iti__ug{height:14px;background-position:-5197px 0}.iti__flag.iti__um{height:11px;background-position:-5219px 0}.iti__flag.iti__un{height:14px;background-position:-5241px 0}.iti__flag.iti__us{height:11px;background-position:-5263px 0}.iti__flag.iti__uy{height:14px;background-position:-5285px 0}.iti__flag.iti__uz{height:10px;background-position:-5307px 0}.iti__flag.iti__va{height:15px;background-position:-5329px 0}.iti__flag.iti__vc{height:14px;background-position:-5346px 0}.iti__flag.iti__ve{height:14px;background-position:-5368px 0}.iti__flag.iti__vg{height:10px;background-position:-5390px 0}.iti__flag.iti__vi{height:14px;background-position:-5412px 0}.iti__flag.iti__vn{height:14px;background-position:-5434px 0}.iti__flag.iti__vu{height:12px;background-position:-5456px 0}.iti__flag.iti__wf{height:14px;background-position:-5478px 0}.iti__flag.iti__ws{height:10px;background-position:-5500px 0}.iti__flag.iti__xk{height:15px;background-position:-5522px 0}.iti__flag.iti__ye{height:14px;background-position:-5544px 0}.iti__flag.iti__yt{height:14px;background-position:-5566px 0}.iti__flag.iti__za{height:14px;background-position:-5588px 0}.iti__flag.iti__zm{height:14px;background-position:-5610px 0}.iti__flag.iti__zw{height:10px;background-position:-5632px 0}.iti__flag{height:15px;box-shadow:0 0 1px 0 #888;background-image:url(/assets/flags.png);background-repeat:no-repeat;background-color:#dbdbdb;background-position:20px 0}@media(-webkit-min-device-pixel-ratio:2),(min-resolution:192dpi){.iti__flag{background-image:url(/assets/flags@2x.png)}}.iti__flag.iti__np{background-color:transparent}.form .show_hide_pass{position:absolute;top:20px;right:11px}.form .hidden{display:none}.form-body-login{color:#000}.modalDialog{height:0;opacity:0;display:none}.modalDialog.open{display:block;height:100vh;position:fixed;font-family:Arial,Helvetica,sans-serif;top:0;right:0;bottom:0;left:0;background:rgba(0,0,0,.8);z-index:99999;opacity:1;transition:opacity .4s ease-in;pointer-events:none}.modalDialog.open .loading-text{padding-top:20px;font-weight:700;text-align:center;color:#fff}.modalDialog.open>div{width:100%;position:relative;margin:20% auto}.modalDialog.open>div .loading-spinner{position:absolute;top:50%;right:0;bottom:0;left:50%;margin:-35px 0;text-align:center;-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-name:rotate-forever;animation-name:rotate-forever;-webkit-animation-timing-function:linear;animation-timing-function:linear;height:30px;width:30px;border:8px solid #fff;border-right-color:transparent;border-radius:50%;display:inline-block}@-webkit-keyframes rotate-forever{0%{-webkit-transform:rotate(0deg)}to{-webkit-transform:rotate(1turn)}}.modalDialog-white.open{display:block;height:100vh;position:fixed;top:0;right:0;bottom:0;left:0;background:hsla(0,0%,100%,.8);z-index:99999;opacity:1;transition:opacity .4s ease-in;pointer-events:none}.modalDialog-white.open .container{height:100%}.modal-country{padding:15px;color:#fff;text-align:center;font-weight:700;font-size:20px;display:flex;width:100%;height:100%;justify-content:center;align-items:center;position:relative;margin:0 auto!important;background-color:#fff;color:#000;height:calc(100% - 100px);top:50%;transform:translateY(-50%)}body{font-family:Poppins,sans-serif;padding:0;margin:0;line-height:1.25}*{box-sizing:border-box}p{font-size:18px}@media(max-width:767px){p{font-size:16px}}img{max-width:100%;height:auto}.modal-open .modal{color:#000;opacity:1}.hidden{display:none}.iti{color:#000}.btn:hover{color:#fff}.footer-v4-links a{margin:0 10px}.input-wrapper{position:relative}.input-wrapper i{position:absolute;top:50%;left:20px;transform:translateY(-50%);color:#000}.contact_page input{padding-left:50px}.language{position:relative;display:inline-flex;align-items:center;color:#000;font-size:16px;z-index:9999;align-self:center}@media(max-width:767px){.language{font-size:16px;margin-right:15px}}.language img{margin-right:10px;width:21px}.language span{cursor:pointer;display:flex;align-items:center;padding:3px 5px;background:#322b7c;color:#fff}.language span i{margin-left:5px;vertical-align:middle;border-left:3px solid transparent;border-right:3px solid transparent;border-top:4px solid #fff}.language-list{list-style:none;padding:0 5px;margin-left:0;position:absolute;top:100%;right:0;text-align:center;min-width:100%;display:none;background-color:#322b7c;border:1px solid}.language-list a{color:#fff;display:flex}.language-list a:hover{text-decoration:none}.language:hover .language-list{display:block}.header{background-color:#191c35;padding:15px 0;margin-bottom:20px}.-menu{padding:0;margin:0;display:flex;list-style:none;font-size:16px;justify-content:flex-end}@media(max-width:991px){.header-menu{display:none}}.header-menu li{padding:0 20px}.header-menu a{color:#fff!important}.heading{text-align:center;font-size:48px;font-weight:700;margin-bottom:25px;font-family:HelveticaNeue-Condensed}@media(max-width:767px){.heading{font-size:28px;margin-bottom:15px}}.heading-subtitle{margin-top:30px;font-size:36px;color:#fbaf41;text-align:center;font-weight:700;font-family:HelveticaNeue-Condensed}@media(max-width:767px){.heading-subtitle{font-size:24px;margin-top:5px}}.main,.white{color:#fff}.main{background-color:#191c35;padding:60px 0}@media(max-width:767px){.main{padding:30px 0}}.main p{font-size:16px}.main-form{border-radius:10px;background-color:#fff;padding:10px}@media(max-width:991px){.main-form{max-width:500px;margin-left:auto;margin-right:auto;margin-top:30px}}.main-form-title{text-align:center;font-size:18px;color:#071322;margin-bottom:10px}@media(max-width:767px){.main-form-title{font-size:17px}}.main-form-title div{font-size:28px;font-weight:700;color:#0c5275}@media(max-width:767px){.main-form-title div{font-size:22px}}.form-group{margin-bottom:15px}input{border-radius:7px;border:1px solid #c2c2c2;background-image:linear-gradient(0deg,#f1f0f0,#fff);width:100%;font-size:18px;font-weight:700;color:#989898;padding:10px;height:50px}@media(max-width:767px){input{font-size:16px}}textarea{width:100%;border-radius:7px;padding:15px}.form-footer{font-size:14px!important;color:#000}.form-footer a{color:#fbaf41!important}.submit-button{border-radius:7px;border:1px solid #c86b00;background-image:linear-gradient(0deg,#f19023,#fda642);font-size:28px;font-weight:700;color:#fff;text-transform:uppercase;width:100%;transition:all .4s;font-family:HelveticaNeue-Condensed}@media(max-width:767px){.submit-button{font-size:20px}}.submit-button:hover{box-shadow:.3px 4px 13.8px 2.2px rgba(20,22,25,.15)}.bg-1{background-image:url(/assets/bg-1.webp);background-repeat:no-repeat;background-size:40%;background-position:100%;padding:75px 0}@media(max-width:767px){.bg-1{padding-top:30px;padding-bottom:150px;background-size:320px;background-position:bottom}}.title{font-family:HelveticaNeue-Condensed;font-size:40px;font-weight:700;margin-bottom:30px}@media(max-width:767px){.title{font-size:26px;margin-bottom:10px}}.border-item{height:100%;box-shadow:.3px 4px 13.8px 2.2px rgba(20,22,25,.15);border:1px solid #f39224;background-color:#fff;color:#181b33;padding:30px}@media(max-width:767px){.border-item{padding:15px}}.border-item-title{font-family:HelveticaNeue-Condensed;font-size:24px;font-weight:700;margin-bottom:20px}@media(max-width:767px){.border-item-title{font-size:20px}}.border-item-text,.border-item-text p{font-size:16px;line-height:1.5}.btn-link{text-align:center;display:inline-flex;justify-content:center;align-items:center;width:100%;min-height:66px;border-radius:7px;border:1px solid #c86b00;background-image:linear-gradient(0deg,#f19023,#fda642);font-size:28px;font-weight:700;color:#fff!important;text-decoration:none!important;font-family:HelveticaNeue-Condensed;text-transform:uppercase}@media(max-width:767px){.btn-link{font-size:20px;min-height:45px}}.btn-link:hover{box-shadow:.3px 4px 13.8px 2.2px rgba(20,22,25,.15)}.steps-row{display:flex;flex-wrap:wrap;position:relative;margin:0 -10px 30px}.steps-row:after{content:"";display:block;position:absolute;z-index:2;background-color:#191c35;bottom:-15px;width:calc(100% - 60px);height:100%;left:50%;transform:translate(-50%)}.steps-item,.steps-row:after{border-radius:3px;box-shadow:0 0 39px 0 rgba(1,2,2,.19)}.steps-item{position:relative;z-index:3;margin:0 10px;flex-basis:calc(33.33% - 20px);max-width:calc(33.33% - 20px);padding:40px 15px;text-align:center;background-color:#fff}@media(max-width:767px){.steps-item{flex-basis:100%;max-width:100%;margin-bottom:20px}}.steps-item-image{width:115px;height:115px;display:inline-flex;justify-content:center;align-items:center;padding:15px;border-radius:50%;border:1px solid #f39224;margin-bottom:30px}.steps-item-title{font-size:18px;font-weight:700;color:#131315;margin-bottom:15px}.steps-item-text{text-align:left;font-size:14px}.color-orange{color:#ff9926}.title-48{font-family:HelveticaNeue-Condensed;font-size:48px;font-weight:700;text-align:center;margin-bottom:20px}@media(max-width:767px){.title-48{font-size:28px}}.bg-2{background-image:url(/assets/list-1.webp);background-repeat:no-repeat;background-size:26%;background-position:100% 100%;padding:60px 0}@media(max-width:767px){.bg-2{padding-top:30px;padding-bottom:250px;background-size:250px;background-position:bottom}}.bg-3{background-image:url(/assets/list-2.webp);background-repeat:no-repeat;background-size:30%;background-position:0;padding:60px 0}@media(max-width:767px){.bg-3{padding-top:30px;padding-bottom:200px;background-size:250px;background-position:bottom}}.bg-4{background-image:url(/assets/list-3.webp);background-repeat:no-repeat;background-size:30%;background-position:100%;padding:60px 0}@media(max-width:767px){.bg-4{padding-top:30px;padding-bottom:190px;background-size:250px;background-position:bottom}}.list-increment{counter-reset:list}.list-counter{font-size:30px;font-weight:700;color:#181b33;position:relative;padding-left:60px;counter-increment:list;margin-top:30px;margin-bottom:30px}@media(max-width:767px){.list-counter{font-size:22px;padding-left:45px}}.list-counter:before{content:"0" counter(list);display:inline-flex;width:39px;height:39px;justify-content:center;align-items:center;border:2px solid #ff9926;font-size:20px;font-weight:700;border-radius:50%;color:#ff9926;position:absolute;left:0;top:0;font-weight:600}@media(max-width:767px){.list-counter:before{width:35px;height:35px;top:-4px;font-size:17px}}.faq_section{background-color:#ededed;padding:60px 0}.faq-item{margin-bottom:20px;transition:all .5s}.faq-item-title{border-radius:3px;box-shadow:.3px 4px 29px 0 rgba(50,35,65,.29);background-color:#191c35;padding:20px 60px 20px 20px;font-size:18px;font-weight:700;color:#fff;text-transform:uppercase;position:relative;cursor:pointer;display:inline-flex;align-items:center;min-height:90px;width:100%}@media(max-width:767px){.faq-item-title{font-size:16px}}.faq-item-title:after{content:"▾";width:30px;height:30px;display:inline-flex;justify-content:center;border-radius:50%;background-color:#fba13c;align-items:center;font-weight:900;font-family:Font Awesome\\ 5 Free;-webkit-font-smoothing:antialiased;position:absolute;right:20px;top:50%;transform:translateY(-50%);color:#fff;font-size:28px;transition:all .5s}.faq-item-content{transition:all .5s;padding:0 20px;max-height:0;overflow:hidden}.faq-item.active{margin-bottom:0}.faq-item.active .faq-item-content{max-height:999px;padding:20px}.faq-item.active .faq-item-title:after{transform:translateY(-50%) rotate(180deg)}.section-final{background-image:url(/assets/bg-final.webp);background-repeat:no-repeat;background-size:45%;background-position:100%;padding:60px 0}@media(max-width:767px){.section-final{padding-top:30px;padding-bottom:150px;background-size:250px;background-position:100% 100%}}.footer{background-image:url(/assets/footerbg.webp);background-repeat:no-repeat;background-size:cover;background-position:50%;padding:30px 0;text-align:center;color:#fff}.footer .paragraph{font-size:14px}.footer .copyright{font-size:18px;text-transform:uppercase;margin-bottom:15px}.footer-v4-links{margin-bottom:15px}.footer-v4-link{color:#fff}.login-main{background-image:url(/assets/login-bg.webp);background-repeat:no-repeat;background-color:#fff;background-color:cover;background-position:0 -80px}.white-bg{padding:35px 15px;box-shadow:.3px 4px 13.8px 2.2px rgba(20,22,25,.15);background-color:#fff;color:#000;text-align:center;border-radius:10px;margin-bottom:15px}.join-section-header{font-size:24px;font-weight:300;margin-bottom:20px}.join-section-subheader{margin-bottom:30px}.about-main{background-image:url(/assets/about-1.webp);background-repeat:no-repeat;background-size:cover;background-position:50%;color:#fff;padding:50px 0}@media(max-width:767px){.about-main{padding:30px 0}}.about-title{font-size:48px;font-weight:700;font-family:HelveticaNeue-Condensed;text-align:center;margin-bottom:25px}@media(max-width:767px){.about-title{font-size:28px}}.about-subtitle{text-align:center;font-size:36px;font-weight:700;font-family:HelveticaNeue-Condensed}@media(max-width:767px){.about-subtitle{font-size:20px}}.about-last{padding:60px 0;position:relative}@media(max-width:767px){.about-last{padding:30px 0}}.about-last-inner{position:relative;z-index:2}.about-last:after{content:"";display:block;width:100%;height:60%;top:0;left:0;position:absolute;background-color:#ebecec}.about-1{background-image:url(/assets/about-2.webp);background-repeat:no-repeat;background-position:100%;background-size:35%;padding:60px 0}@media(max-width:767px){.about-1{padding-top:30px;padding-bottom:150px;background-size:250px;background-position:50% calc(100% + 60px)}}.about-2{background-image:url(/assets/about-3.webp);background-repeat:no-repeat;background-position:0;background-size:35%;padding:60px 0}@media(max-width:767px){.about-2{padding-top:30px;padding-bottom:180px;background-size:250px;background-position:bottom;margin-bottom:20px}}.title-40{font-size:40px;font-weight:700;font-family:HelveticaNeue-Condensed;margin-bottom:25px}@media(max-width:767px){.title-40{font-size:26px;margin-bottom:10px}}.p-border{border-radius:3px;border:2px solid #f89b34;font-weight:700;text-transform:uppercase;padding:25px;margin-bottom:30px;line-height:1.5}@media(max-width:767px){.p-border{margin-bottom:15px}}.about-border{border-radius:7px;border:2px solid #ff9926;background-color:#fff;padding:60px}@media(max-width:767px){.about-border{padding:15px}}.list-check{padding:0;margin:0;list-style:none}.list-check li{position:relative;padding-left:40px;margin-bottom:25px}.list-check li:after{content:"";font-size:23px;display:block;color:#0a5275;position:absolute;left:0;top:-4px;font-weight:900;font-family:Font Awesome\\ 5 Free;-webkit-font-smoothing:antialiased}.thankyou-section-1{padding:90px 0;background-image:url(/assets/thankyou-1.webp);background-repeat:no-repeat;background-size:50%;background-position:100%}@media screen and (max-width:768px){.thankyou-section-1{padding:30px 0 150px;background-size:320px;background-position:100% 100%}}.thankyou-section-2{padding:90px 0;background-image:url(/assets/thankyou-2.webp);background-repeat:no-repeat;background-size:30%;background-position:0}@media screen and (max-width:768px){.thankyou-section-2{padding:30px 0 200px;background-size:250px;background-position:0 100%}}.thankyou-section-3{padding:60px 0;background-image:url(/assets/thankyou-3.webp);background-repeat:no-repeat;background-size:40%;background-position:100%}@media screen and (max-width:768px){.thankyou-section-3{padding:30px 0 200px;background-size:320px;background-position:100% 100%}}.thankyou-title{font-size:48px;text-transform:uppercase;font-weight:700;margin-bottom:30px}@media screen and (max-width:768px){.thankyou-title{font-size:30px;margin-bottom:15px}}.thankyou-paragraph{font-size:26px}@media screen and (max-width:768px){.thankyou-paragraph{font-size:20px}}.thankyou-sabtitle{font-size:36px;font-weight:700}@media screen and (max-width:768px){.thankyou-sabtitle{font-size:24px}}.thankyou-step{display:flex;align-items:center;margin-bottom:25px}.thankyou-step-item{font-size:18px;font-weight:600;text-align:center;color:#7826ff;margin-right:15px;opacity:.2}.thankyou-step-item:after{content:"";display:block;height:11px;border-radius:5.5px;box-shadow:0 5px 3.7px .3px rgba(120,38,255,.16);background-color:#7826ff;margin-top:10px;width:100px}.thankyou-step-item.active{opacity:1}.join_btn{width:100%;color:#fff;background:#fbbd5f;padding:15px;border:1px;font-style:normal;font-weight:700;font-size:24px;align-items:center;text-align:center;max-width:100%;min-height:65px;display:inline-block}@media(max-width:767px){.join_btn{font-size:18px;min-height:45px}}.join_btn:hover{color:#fff;text-decoration:none}', ""])
}, function(t, e, d) {
    "use strict";
    t.exports = function(t) {
        var e = [];
        return e.toString = function() {
            return this.map((function(e) {
                var d = function(t, e) {
                    var d = t[1] || "",
                        i = t[3];
                    if (!i) return d;
                    if (e && "function" == typeof btoa) {
                        var n = (r = i, a = btoa(unescape(encodeURIComponent(JSON.stringify(r)))), s = "sourceMappingURL=data:application/json;charset=utf-8;base64,".concat(a), "/*# ".concat(s, " */")),
                            o = i.sources.map((function(t) {
                                return "/*# sourceURL=".concat(i.sourceRoot).concat(t, " */")
                            }));
                        return [d].concat(o).concat([n]).join("\n")
                    }
                    var r, a, s;
                    return [d].join("\n")
                }(e, t);
                return e[2] ? "@media ".concat(e[2], "{").concat(d, "}") : d
            })).join("")
        }, e.i = function(t, d) {
            "string" == typeof t && (t = [
                [null, t, ""]
            ]);
            for (var i = {}, n = 0; n < this.length; n++) {
                var o = this[n][0];
                null != o && (i[o] = !0)
            }
            for (var r = 0; r < t.length; r++) {
                var a = t[r];
                null != a[0] && i[a[0]] || (d && !a[2] ? a[2] = d : d && (a[2] = "(".concat(a[2], ") and (").concat(d, ")")), e.push(a))
            }
        }, e
    }
}, function(t, e, d) {
    "use strict";
    var i, n = {},
        o = function() {
            return void 0 === i && (i = Boolean(window && document && document.all && !window.atob)), i
        },
        r = function() {
            var t = {};
            return function(e) {
                if (void 0 === t[e]) {
                    var d = document.querySelector(e);
                    if (window.HTMLIFrameElement && d instanceof window.HTMLIFrameElement) try {
                        d = d.contentDocument.head
                    } catch (t) {
                        d = null
                    }
                    t[e] = d
                }
                return t[e]
            }
        }();

    function a(t, e) {
        for (var d = [], i = {}, n = 0; n < t.length; n++) {
            var o = t[n],
                r = e.base ? o[0] + e.base : o[0],
                a = {
                    css: o[1],
                    media: o[2],
                    sourceMap: o[3]
                };
            i[r] ? i[r].parts.push(a) : d.push(i[r] = {
                id: r,
                parts: [a]
            })
        }
        return d
    }

    function s(t, e) {
        for (var d = 0; d < t.length; d++) {
            var i = t[d],
                o = n[i.id],
                r = 0;
            if (o) {
                for (o.refs++; r < o.parts.length; r++) o.parts[r](i.parts[r]);
                for (; r < i.parts.length; r++) o.parts.push(g(i.parts[r], e))
            } else {
                for (var a = []; r < i.parts.length; r++) a.push(g(i.parts[r], e));
                n[i.id] = {
                    id: i.id,
                    refs: 1,
                    parts: a
                }
            }
        }
    }

    function l(t) {
        var e = document.createElement("style");
        if (void 0 === t.attributes.nonce) {
            var i = d.nc;
            i && (t.attributes.nonce = i)
        }
        if (Object.keys(t.attributes).forEach((function(d) {
                e.setAttribute(d, t.attributes[d])
            })), "function" == typeof t.insert) t.insert(e);
        else {
            var n = r(t.insert || "head");
            if (!n) throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
            n.appendChild(e)
        }
        return e
    }
    var u, p = (u = [], function(t, e) {
        return u[t] = e, u.filter(Boolean).join("\n")
    });

    function c(t, e, d, i) {
        var n = d ? "" : i.css;
        if (t.styleSheet) t.styleSheet.cssText = p(e, n);
        else {
            var o = document.createTextNode(n),
                r = t.childNodes;
            r[e] && t.removeChild(r[e]), r.length ? t.insertBefore(o, r[e]) : t.appendChild(o)
        }
    }

    function f(t, e, d) {
        var i = d.css,
            n = d.media,
            o = d.sourceMap;
        if (n && t.setAttribute("media", n), o && btoa && (i += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(o)))), " */")), t.styleSheet) t.styleSheet.cssText = i;
        else {
            for (; t.firstChild;) t.removeChild(t.firstChild);
            t.appendChild(document.createTextNode(i))
        }
    }
    var h = null,
        $ = 0;

    function g(t, e) {
        var d, i, n;
        if (e.singleton) {
            var o = $++;
            d = h || (h = l(e)), i = c.bind(null, d, o, !1), n = c.bind(null, d, o, !0)
        } else d = l(e), i = f.bind(null, d, e), n = function() {
            ! function(t) {
                if (null === t.parentNode) return !1;
                t.parentNode.removeChild(t)
            }(d)
        };
        return i(t),
            function(e) {
                if (e) {
                    if (e.css === t.css && e.media === t.media && e.sourceMap === t.sourceMap) return;
                    i(t = e)
                } else n()
            }
    }
    t.exports = function(t, e) {
        (e = e || {}).attributes = "object" == typeof e.attributes ? e.attributes : {}, e.singleton || "boolean" == typeof e.singleton || (e.singleton = o());
        var d = a(t, e);
        return s(d, e),
            function(t) {
                for (var i = [], o = 0; o < d.length; o++) {
                    var r = d[o],
                        l = n[r.id];
                    l && (l.refs--, i.push(l))
                }
                t && s(a(t, e), e);
                for (var u = 0; u < i.length; u++) {
                    var p = i[u];
                    if (0 === p.refs) {
                        for (var c = 0; c < p.parts.length; c++) p.parts[c]();
                        delete n[p.id]
                    }
                }
            }
    }
}, function(t, e, d) {
    (function(t) {
        "us" != t("meta[name=isoCode]").attr("content") && "ca" != t("meta[name=isoCode]").attr("content") || t("body").addClass("modal-open").append('<div class="modalDialog-white open" style="pointer-events: auto;"><div class="container"><div class="modal-country">Forbidden - Visitors from your country are not permitted to browse this site.</div></div></div>')
    }).call(this, d(0))
}, function(t, e, d) {
    "use strict";
    var i = d(1),
        n = d.n(i);
    d(10);
    for (var o = document.head.querySelector("[name~=isoCode][content]").content, r = document.getElementsByClassName("phone"), a = document.getElementsByClassName("area_code"), s = document.getElementsByClassName("iti"), l = function() {
            var t = n()(r[u], {
                initialCountry: o
            });
            s[u].style.width = "100%", a[u].value = "+" + t.getSelectedCountryData().dialCode, r[u].addEventListener("countrychange", (function() {
                a[u].value = "+" + t.getSelectedCountryData().dialCode
            }))
        }, u = 0; u < r.length; u++) l()
}, function(t, e) {
    ! function() {
        var t = this;

        function e(t) {
            return "string" == typeof t
        }

        function d(e, d) {
            e = e.split(".");
            var i, n = t;
            e[0] in n || !n.execScript || n.execScript("var " + e[0]);
            for (; e.length && (i = e.shift());) e.length || void 0 === d ? n = n[i] && n[i] !== Object.prototype[i] ? n[i] : n[i] = {} : n[i] = d
        }

        function i(t, e) {
            function d() {}
            d.prototype = e.prototype, t.o = e.prototype, t.prototype = new d, t.prototype.constructor = t, t.aa = function(t, d, i) {
                for (var n = Array(arguments.length - 2), o = 2; o < arguments.length; o++) n[o - 2] = arguments[o];
                return e.prototype[d].apply(t, n)
            }
        }
        var n = Array.prototype.indexOf ? function(t, e, d) {
            return Array.prototype.indexOf.call(t, e, d)
        } : function(t, d, i) {
            if (i = null == i ? 0 : 0 > i ? Math.max(0, t.length + i) : i, e(t)) return e(d) && 1 == d.length ? t.indexOf(d, i) : -1;
            for (; i < t.length; i++)
                if (i in t && t[i] === d) return i;
            return -1
        };

        function o(t, e) {
            t.sort(e || r)
        }

        function r(t, e) {
            return t > e ? 1 : t < e ? -1 : 0
        }

        function a(t, e) {
            switch (this.a = t, this.h = !!e.i, this.c = e.b, this.m = e.type, this.l = !1, this.c) {
                case u:
                case p:
                case c:
                case f:
                case h:
                case l:
                case s:
                    this.l = !0
            }
            this.g = e.defaultValue
        }
        var s = 1,
            l = 2,
            u = 3,
            p = 4,
            c = 6,
            f = 16,
            h = 18;

        function $(t, e) {
            for (this.c = t, this.a = {}, t = 0; t < e.length; t++) {
                var d = e[t];
                this.a[d.a] = d
            }
        }

        function g() {
            this.a = {}, this.g = this.f().a, this.c = this.h = null
        }

        function m(t, e) {
            for (var d = function(t) {
                    return o(t = function(t) {
                        var e, d = [],
                            i = 0;
                        for (e in t) d[i++] = t[e];
                        return d
                    }(t.a), (function(t, e) {
                        return t.a - e.a
                    })), t
                }(t.f()), i = 0; i < d.length; i++) {
                var n = d[i],
                    r = n.a;
                if (null != e.a[r]) {
                    t.c && delete t.c[n.a];
                    var a = 11 == n.c || 10 == n.c;
                    if (n.h) {
                        n = y(e, r);
                        for (var s = 0; s < n.length; s++) k(t, r, a ? n[s].clone() : n[s])
                    } else n = b(e, r), a ? (a = b(t, r)) ? m(a, n) : w(t, r, n.clone()) : w(t, r, n)
                }
            }
        }

        function b(t, e) {
            var d = t.a[e];
            if (null == d) return null;
            if (t.h) {
                if (!(e in t.c)) {
                    var i = t.h,
                        n = t.g[e];
                    if (null != d)
                        if (n.h) {
                            for (var o = [], r = 0; r < d.length; r++) o[r] = i.c(n, d[r]);
                            d = o
                        } else d = i.c(n, d);
                    return t.c[e] = d
                }
                return t.c[e]
            }
            return d
        }

        function x(t, e, d) {
            var i = b(t, e);
            return t.g[e].h ? i[d || 0] : i
        }

        function _(t, e) {
            if (null != t.a[e]) t = x(t, e, void 0);
            else t: {
                if (void 0 === (t = t.g[e]).g)
                    if ((e = t.m) === Boolean) t.g = !1;
                    else if (e === Number) t.g = 0;
                else {
                    if (e !== String) {
                        t = new e;
                        break t
                    }
                    t.g = t.l ? "0" : ""
                }
                t = t.g
            }
            return t
        }

        function y(t, e) {
            return b(t, e) || []
        }

        function v(t, e) {
            return t.g[e].h ? null != t.a[e] ? t.a[e].length : 0 : null != t.a[e] ? 1 : 0
        }

        function w(t, e, d) {
            t.a[e] = d, t.c && (t.c[e] = d)
        }

        function k(t, e, d) {
            t.a[e] || (t.a[e] = []), t.a[e].push(d), t.c && delete t.c[e]
        }

        function C(t, e) {
            var d, i = [];
            for (d in e) 0 != d && i.push(new a(d, e[d]));
            return new $(t, i)
        }

        function T() {}
        g.prototype.has = function(t) {
            return null != this.a[t.a]
        }, g.prototype.get = function(t, e) {
            return x(this, t.a, e)
        }, g.prototype.set = function(t, e) {
            w(this, t.a, e)
        }, g.prototype.add = function(t, e) {
            k(this, t.a, e)
        }, g.prototype.clone = function() {
            var t = new this.constructor;
            return t != this && (t.a = {}, t.c && (t.c = {}), m(t, this)), t
        }, T.prototype.a = function(t) {
            throw new t.c, Error("Unimplemented")
        }, T.prototype.c = function(t, d) {
            if (11 == t.c || 10 == t.c) return d instanceof g ? d : this.a(t.m.prototype.f(), d);
            if (14 == t.c) return e(d) && S.test(d) && 0 < (t = Number(d)) ? t : d;
            if (!t.l) return d;
            if ((t = t.m) === String) {
                if ("number" == typeof d) return String(d)
            } else if (t === Number && e(d) && ("Infinity" === d || "-Infinity" === d || "NaN" === d || S.test(d))) return Number(d);
            return d
        };
        var S = /^-?[0-9]+$/;

        function E() {}

        function N() {}

        function L(t, e) {
            null != t && this.a.apply(this, arguments)
        }

        function A() {
            g.call(this)
        }
        i(E, T), E.prototype.a = function(t, e) {
            return (t = new t.c).h = this, t.a = e, t.c = {}, t
        }, i(N, E), N.prototype.c = function(t, e) {
            return 8 == t.c ? !!e : T.prototype.c.apply(this, arguments)
        }, N.prototype.a = function(t, e) {
            return N.o.a.call(this, t, e)
        }, L.prototype.c = "", L.prototype.set = function(t) {
            this.c = "" + t
        }, L.prototype.a = function(t, e, d) {
            if (this.c += String(t), null != e)
                for (var i = 1; i < arguments.length; i++) this.c += arguments[i];
            return this
        }, L.prototype.toString = function() {
            return this.c
        }, i(A, g);
        var I = null;

        function D() {
            g.call(this)
        }
        i(D, g);
        var M = null;

        function j() {
            g.call(this)
        }
        i(j, g);
        var P = null;

        function O() {
            g.call(this)
        }
        A.prototype.f = function() {
            var t = I;
            return t || (I = t = C(A, {
                0: {
                    name: "NumberFormat",
                    j: "i18n.phonenumbers.NumberFormat"
                },
                1: {
                    name: "pattern",
                    required: !0,
                    b: 9,
                    type: String
                },
                2: {
                    name: "format",
                    required: !0,
                    b: 9,
                    type: String
                },
                3: {
                    name: "leading_digits_pattern",
                    i: !0,
                    b: 9,
                    type: String
                },
                4: {
                    name: "national_prefix_formatting_rule",
                    b: 9,
                    type: String
                },
                6: {
                    name: "national_prefix_optional_when_formatting",
                    b: 8,
                    defaultValue: !1,
                    type: Boolean
                },
                5: {
                    name: "domestic_carrier_code_formatting_rule",
                    b: 9,
                    type: String
                }
            })), t
        }, A.f = A.prototype.f, D.prototype.f = function() {
            var t = M;
            return t || (M = t = C(D, {
                0: {
                    name: "PhoneNumberDesc",
                    j: "i18n.phonenumbers.PhoneNumberDesc"
                },
                2: {
                    name: "national_number_pattern",
                    b: 9,
                    type: String
                },
                9: {
                    name: "possible_length",
                    i: !0,
                    b: 5,
                    type: Number
                },
                10: {
                    name: "possible_length_local_only",
                    i: !0,
                    b: 5,
                    type: Number
                },
                6: {
                    name: "example_number",
                    b: 9,
                    type: String
                }
            })), t
        }, D.f = D.prototype.f, j.prototype.f = function() {
            var t = P;
            return t || (P = t = C(j, {
                0: {
                    name: "PhoneMetadata",
                    j: "i18n.phonenumbers.PhoneMetadata"
                },
                1: {
                    name: "general_desc",
                    b: 11,
                    type: D
                },
                2: {
                    name: "fixed_line",
                    b: 11,
                    type: D
                },
                3: {
                    name: "mobile",
                    b: 11,
                    type: D
                },
                4: {
                    name: "toll_free",
                    b: 11,
                    type: D
                },
                5: {
                    name: "premium_rate",
                    b: 11,
                    type: D
                },
                6: {
                    name: "shared_cost",
                    b: 11,
                    type: D
                },
                7: {
                    name: "personal_number",
                    b: 11,
                    type: D
                },
                8: {
                    name: "voip",
                    b: 11,
                    type: D
                },
                21: {
                    name: "pager",
                    b: 11,
                    type: D
                },
                25: {
                    name: "uan",
                    b: 11,
                    type: D
                },
                27: {
                    name: "emergency",
                    b: 11,
                    type: D
                },
                28: {
                    name: "voicemail",
                    b: 11,
                    type: D
                },
                29: {
                    name: "short_code",
                    b: 11,
                    type: D
                },
                30: {
                    name: "standard_rate",
                    b: 11,
                    type: D
                },
                31: {
                    name: "carrier_specific",
                    b: 11,
                    type: D
                },
                33: {
                    name: "sms_services",
                    b: 11,
                    type: D
                },
                24: {
                    name: "no_international_dialling",
                    b: 11,
                    type: D
                },
                9: {
                    name: "id",
                    required: !0,
                    b: 9,
                    type: String
                },
                10: {
                    name: "country_code",
                    b: 5,
                    type: Number
                },
                11: {
                    name: "international_prefix",
                    b: 9,
                    type: String
                },
                17: {
                    name: "preferred_international_prefix",
                    b: 9,
                    type: String
                },
                12: {
                    name: "national_prefix",
                    b: 9,
                    type: String
                },
                13: {
                    name: "preferred_extn_prefix",
                    b: 9,
                    type: String
                },
                15: {
                    name: "national_prefix_for_parsing",
                    b: 9,
                    type: String
                },
                16: {
                    name: "national_prefix_transform_rule",
                    b: 9,
                    type: String
                },
                18: {
                    name: "same_mobile_and_fixed_line_pattern",
                    b: 8,
                    defaultValue: !1,
                    type: Boolean
                },
                19: {
                    name: "number_format",
                    i: !0,
                    b: 11,
                    type: A
                },
                20: {
                    name: "intl_number_format",
                    i: !0,
                    b: 11,
                    type: A
                },
                22: {
                    name: "main_country_for_code",
                    b: 8,
                    defaultValue: !1,
                    type: Boolean
                },
                23: {
                    name: "leading_digits",
                    b: 9,
                    type: String
                },
                26: {
                    name: "leading_zero_possible",
                    b: 8,
                    defaultValue: !1,
                    type: Boolean
                }
            })), t
        }, j.f = j.prototype.f, i(O, g);
        var z = null,
            B = {
                $: 0,
                w: 1,
                v: 5,
                u: 10,
                s: 20
            };
        O.prototype.f = function() {
            var t = z;
            return t || (z = t = C(O, {
                0: {
                    name: "PhoneNumber",
                    j: "i18n.phonenumbers.PhoneNumber"
                },
                1: {
                    name: "country_code",
                    required: !0,
                    b: 5,
                    type: Number
                },
                2: {
                    name: "national_number",
                    required: !0,
                    b: 4,
                    type: Number
                },
                3: {
                    name: "extension",
                    b: 9,
                    type: String
                },
                4: {
                    name: "italian_leading_zero",
                    b: 8,
                    type: Boolean
                },
                8: {
                    name: "number_of_leading_zeros",
                    b: 5,
                    defaultValue: 1,
                    type: Number
                },
                5: {
                    name: "raw_input",
                    b: 9,
                    type: String
                },
                6: {
                    name: "country_code_source",
                    b: 14,
                    defaultValue: 0,
                    type: B
                },
                7: {
                    name: "preferred_domestic_carrier_code",
                    b: 9,
                    type: String
                }
            })), t
        }, O.ctor = O, O.ctor.f = O.prototype.f;
        var H = {
                1: "US AG AI AS BB BM BS CA DM DO GD GU JM KN KY LC MP MS PR SX TC TT VC VG VI".split(" "),
                7: ["RU", "KZ"],
                20: ["EG"],
                27: ["ZA"],
                30: ["GR"],
                31: ["NL"],
                32: ["BE"],
                33: ["FR"],
                34: ["ES"],
                36: ["HU"],
                39: ["IT", "VA"],
                40: ["RO"],
                41: ["CH"],
                43: ["AT"],
                44: ["GB", "GG", "IM", "JE"],
                45: ["DK"],
                46: ["SE"],
                47: ["NO", "SJ"],
                48: ["PL"],
                49: ["DE"],
                51: ["PE"],
                52: ["MX"],
                53: ["CU"],
                54: ["AR"],
                55: ["BR"],
                56: ["CL"],
                57: ["CO"],
                58: ["VE"],
                60: ["MY"],
                61: ["AU", "CC", "CX"],
                62: ["ID"],
                63: ["PH"],
                64: ["NZ"],
                65: ["SG"],
                66: ["TH"],
                81: ["JP"],
                82: ["KR"],
                84: ["VN"],
                86: ["CN"],
                90: ["TR"],
                91: ["IN"],
                92: ["PK"],
                93: ["AF"],
                94: ["LK"],
                95: ["MM"],
                98: ["IR"],
                211: ["SS"],
                212: ["MA", "EH"],
                213: ["DZ"],
                216: ["TN"],
                218: ["LY"],
                220: ["GM"],
                221: ["SN"],
                222: ["MR"],
                223: ["ML"],
                224: ["GN"],
                225: ["CI"],
                226: ["BF"],
                227: ["NE"],
                228: ["TG"],
                229: ["BJ"],
                230: ["MU"],
                231: ["LR"],
                232: ["SL"],
                233: ["GH"],
                234: ["NG"],
                235: ["TD"],
                236: ["CF"],
                237: ["CM"],
                238: ["CV"],
                239: ["ST"],
                240: ["GQ"],
                241: ["GA"],
                242: ["CG"],
                243: ["CD"],
                244: ["AO"],
                245: ["GW"],
                246: ["IO"],
                247: ["AC"],
                248: ["SC"],
                249: ["SD"],
                250: ["RW"],
                251: ["ET"],
                252: ["SO"],
                253: ["DJ"],
                254: ["KE"],
                255: ["TZ"],
                256: ["UG"],
                257: ["BI"],
                258: ["MZ"],
                260: ["ZM"],
                261: ["MG"],
                262: ["RE", "YT"],
                263: ["ZW"],
                264: ["NA"],
                265: ["MW"],
                266: ["LS"],
                267: ["BW"],
                268: ["SZ"],
                269: ["KM"],
                290: ["SH", "TA"],
                291: ["ER"],
                297: ["AW"],
                298: ["FO"],
                299: ["GL"],
                350: ["GI"],
                351: ["PT"],
                352: ["LU"],
                353: ["IE"],
                354: ["IS"],
                355: ["AL"],
                356: ["MT"],
                357: ["CY"],
                358: ["FI", "AX"],
                359: ["BG"],
                370: ["LT"],
                371: ["LV"],
                372: ["EE"],
                373: ["MD"],
                374: ["AM"],
                375: ["BY"],
                376: ["AD"],
                377: ["MC"],
                378: ["SM"],
                380: ["UA"],
                381: ["RS"],
                382: ["ME"],
                383: ["XK"],
                385: ["HR"],
                386: ["SI"],
                387: ["BA"],
                389: ["MK"],
                420: ["CZ"],
                421: ["SK"],
                423: ["LI"],
                500: ["FK"],
                501: ["BZ"],
                502: ["GT"],
                503: ["SV"],
                504: ["HN"],
                505: ["NI"],
                506: ["CR"],
                507: ["PA"],
                508: ["PM"],
                509: ["HT"],
                590: ["GP", "BL", "MF"],
                591: ["BO"],
                592: ["GY"],
                593: ["EC"],
                594: ["GF"],
                595: ["PY"],
                596: ["MQ"],
                597: ["SR"],
                598: ["UY"],
                599: ["CW", "BQ"],
                670: ["TL"],
                672: ["NF"],
                673: ["BN"],
                674: ["NR"],
                675: ["PG"],
                676: ["TO"],
                677: ["SB"],
                678: ["VU"],
                679: ["FJ"],
                680: ["PW"],
                681: ["WF"],
                682: ["CK"],
                683: ["NU"],
                685: ["WS"],
                686: ["KI"],
                687: ["NC"],
                688: ["TV"],
                689: ["PF"],
                690: ["TK"],
                691: ["FM"],
                692: ["MH"],
                800: ["001"],
                808: ["001"],
                850: ["KP"],
                852: ["HK"],
                853: ["MO"],
                855: ["KH"],
                856: ["LA"],
                870: ["001"],
                878: ["001"],
                880: ["BD"],
                881: ["001"],
                882: ["001"],
                883: ["001"],
                886: ["TW"],
                888: ["001"],
                960: ["MV"],
                961: ["LB"],
                962: ["JO"],
                963: ["SY"],
                964: ["IQ"],
                965: ["KW"],
                966: ["SA"],
                967: ["YE"],
                968: ["OM"],
                970: ["PS"],
                971: ["AE"],
                972: ["IL"],
                973: ["BH"],
                974: ["QA"],
                975: ["BT"],
                976: ["MN"],
                977: ["NP"],
                979: ["001"],
                992: ["TJ"],
                993: ["TM"],
                994: ["AZ"],
                995: ["GE"],
                996: ["KG"],
                998: ["UZ"]
            },
            R = {
                AC: [, [, , "(?:[01589]\\d|[46])\\d{4}", , , , , , , [5, 6]],
                    [, , "6[2-467]\\d{3}", , , , "62889", , , [5]],
                    [, , "4\\d{4}", , , , "40123", , , [5]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "AC", 247, "00", , , , , , , , , , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "(?:0[1-9]|[1589]\\d)\\d{4}", , , , "542011", , , [6]], , , [, , , , , , , , , [-1]]
                ],
                AD: [, [, , "(?:1|6\\d)\\d{7}|[136-9]\\d{5}", , , , , , , [6, 8, 9]],
                    [, , "[78]\\d{5}", , , , "712345", , , [6]],
                    [, , "690\\d{6}|[36]\\d{5}", , , , "312345", , , [6, 9]],
                    [, , "180[02]\\d{4}", , , , "18001234", , , [8]],
                    [, , "[19]\\d{5}", , , , "912345", , , [6]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "AD", 376, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{3})", "$1 $2", ["[136-9]"]],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["1"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["6"]]
                    ], , [, , , , , , , , , [-1]], , , [, , "1800\\d{4}", , , , , , , [8]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                AE: [, [, , "(?:[4-7]\\d|9[0-689])\\d{7}|800\\d{2,9}|[2-4679]\\d{7}", , , , , , , [5, 6, 7, 8, 9, 10, 11, 12]],
                    [, , "[2-4679][2-8]\\d{6}", , , , "22345678", , , [8],
                        [7]
                    ],
                    [, , "5[024-68]\\d{7}", , , , "501234567", , , [9]],
                    [, , "400\\d{6}|800\\d{2,9}", , , , "800123456"],
                    [, , "900[02]\\d{5}", , , , "900234567", , , [9]],
                    [, , "700[05]\\d{5}", , , , "700012345", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "AE", 971, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{2,9})", "$1 $2", ["60|8"]],
                        [, "(\\d)(\\d{3})(\\d{4})", "$1 $2 $3", ["[236]|[479][2-8]"], "0$1"],
                        [, "(\\d{3})(\\d)(\\d{5})", "$1 $2 $3", ["[479]"]],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["5"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "600[25]\\d{5}", , , , "600212345", , , [9]], , , [, , , , , , , , , [-1]]
                ],
                AF: [, [, , "[2-7]\\d{8}", , , , , , , [9],
                        [7]
                    ],
                    [, , "(?:[25][0-8]|[34][0-4]|6[0-5])[2-9]\\d{6}", , , , "234567890", , , , [7]],
                    [, , "7\\d{8}", , , , "701234567", , , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "AF", 93, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[1-9]"]],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[2-7]"], "0$1"]
                    ],
                    [
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[2-7]"], "0$1"]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                AG: [, [, , "(?:268|[58]\\d\\d|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "268(?:4(?:6[0-38]|84)|56[0-2])\\d{4}", , , , "2684601234", , , , [7]],
                    [, , "268(?:464|7(?:1[3-9]|2\\d|3[246]|64|[78][0-689]))\\d{4}", , , , "2684641234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , "26848[01]\\d{4}", , , , "2684801234", , , , [7]], "AG", 1, "011", "1", , , "1|([457]\\d{6})$", "268$1", , , , , [, , "26840[69]\\d{4}", , , , "2684061234", , , , [7]], , "268", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                AI: [, [, , "(?:264|[58]\\d\\d|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "2644(?:6[12]|9[78])\\d{4}", , , , "2644612345", , , , [7]],
                    [, , "264(?:235|476|5(?:3[6-9]|8[1-4])|7(?:29|72))\\d{4}", , , , "2642351234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "AI", 1, "011", "1", , , "1|([2457]\\d{6})$", "264$1", , , , , [, , , , , , , , , [-1]], , "264", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                AL: [, [, , "(?:700\\d\\d|900)\\d{3}|8\\d{5,7}|(?:[2-5]|6\\d)\\d{7}", , , , , , , [6, 7, 8, 9],
                        [5]
                    ],
                    [, , "(?:[2358](?:[16-9]\\d[2-9]|[2-5][2-9]\\d)|4(?:[2-57-9][2-9]|6\\d)\\d)\\d{4}", , , , "22345678", , , [8],
                        [5, 6, 7]
                    ],
                    [, , "6(?:[78][2-9]|9\\d)\\d{6}", , , , "672123456", , , [9]],
                    [, , "800\\d{4}", , , , "8001234", , , [7]],
                    [, , "900[1-9]\\d\\d", , , , "900123", , , [6]],
                    [, , "808[1-9]\\d\\d", , , , "808123", , , [6]],
                    [, , "700[2-9]\\d{4}", , , , "70021234", , , [8]],
                    [, , , , , , , , , [-1]], "AL", 355, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{3,4})", "$1 $2", ["80|9"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{4})", "$1 $2 $3", ["4[2-6]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["[2358][2-5]|4"], "0$1"],
                        [, "(\\d{3})(\\d{5})", "$1 $2", ["[23578]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["6"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                AM: [, [, , "(?:[1-489]\\d|55|60|77)\\d{6}", , , , , , , [8],
                        [5, 6]
                    ],
                    [, , "(?:(?:1[0-25]|47)\\d|2(?:2[2-46]|3[1-8]|4[2-69]|5[2-7]|6[1-9]|8[1-7])|3[12]2)\\d{5}", , , , "10123456", , , , [5, 6]],
                    [, , "(?:33|4[1349]|55|77|88|9[13-9])\\d{6}", , , , "77123456"],
                    [, , "800\\d{5}", , , , "80012345"],
                    [, , "90[016]\\d{5}", , , , "90012345"],
                    [, , "80[1-4]\\d{5}", , , , "80112345"],
                    [, , , , , , , , , [-1]],
                    [, , "60(?:2[78]|3[5-9]|4[02-9]|5[0-46-9]|[6-8]\\d|90)\\d{4}", , , , "60271234"], "AM", 374, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{2})(\\d{3})", "$1 $2 $3", ["[89]0"], "0 $1"],
                        [, "(\\d{3})(\\d{5})", "$1 $2", ["2|3[12]"], "(0$1)"],
                        [, "(\\d{2})(\\d{6})", "$1 $2", ["1|47"], "(0$1)"],
                        [, "(\\d{2})(\\d{6})", "$1 $2", ["[3-9]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                AO: [, [, , "[29]\\d{8}", , , , , , , [9]],
                    [, , "2\\d(?:[0134][25-9]|[25-9]\\d)\\d{5}", , , , "222123456"],
                    [, , "9[1-49]\\d{7}", , , , "923123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "AO", 244, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[29]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                AR: [, [, , "11\\d{8}|(?:[2368]|9\\d)\\d{9}", , , , , , , [10, 11],
                        [6, 7, 8]
                    ],
                    [, , "(?:2(?:646[0-46-9]|9(?:45[02-69]|54[2-8]))|3(?:4(?:3(?:5[0-7]|6[1-69])|5(?:4[0-4679]|[56][024-6]))|585[013-7]|7(?:(?:1[15]|81)[46]|77[2-8])|8(?:(?:21|4[16]|9[12])[46]|35[124-6]|5(?:5[0-46-9]|6[0-246-9])|6(?:5[2-8]|9[46])|86[0-68])))\\d{5}|(?:2(?:284|657|9(?:20|66))|3(?:4(?:8[27]|92)|755|878))[2-7]\\d{5}|(?:2(?:2(?:2[59]|44|52)|3(?:26|4[24])|473|9(?:[07]2|2[26]|34|46))|3327)[45]\\d{5}|(?:2(?:(?:26|62)2|3(?:02|2[03])|477|9(?:42|83))|3(?:4(?:[47]6|62|89)|5(?:41|64)|873))[2-6]\\d{5}|(?:(?:11[1-8]|670)\\d|2(?:2(?:0[45]|1[2-6]|3[3-6])|3(?:[06]4|7[45])|494|6(?:04|1[2-7]|[346][45])|80[45]|9(?:[17][4-6]|44|8[45]|9[3-6]))|3(?:364|4(?:1[2-7]|2[4-6]|[38]4)|5(?:1[2-8]|3[4-6]|8[46])|6(?:2[45]|44)|7[069][45]|8(?:0[45]|1[2-6]|34|5[34]|7[24-6]|8[3-5])))\\d{6}|2(?:2(?:21|4[23]|6[145]|7[1-4]|8[356]|9[267])|3(?:16|3[13-8]|43|5[346-8]|9[3-5])|475|6(?:2[46]|4[78]|5[1568])|9(?:03|2[1457-9]|3[1356]|4[08]|[56][23]|82))4\\d{5}|(?:2(?:2(?:57|81)|3(?:24|46|92)|9(?:01|23|64))|3(?:329|4(?:42|71)|5(?:25|37|4[347]|71)|7(?:18|5[17])|888))[3-6]\\d{5}|(?:2(?:2(?:02|2[3467]|4[156]|5[45]|6[6-8]|91)|3(?:1[47]|[24]5|5[25]|96)|47[48]|625|932)|3(?:38[2578]|4(?:0[0-24-9]|3[78]|4[457]|58|6[03-9]|72|83|9[136-8])|5(?:2[124]|[368][23]|4[2689]|7[2-6])|7(?:16|2[15]|3[145]|4[13]|5[468]|7[2-5]|8[26])|8(?:2[5-7]|3[278]|4[3-5]|5[78]|6[1-378]|[78]7|94)))[4-6]\\d{5}", , , , "1123456789", , , [10],
                        [6, 7, 8]
                    ],
                    [, , "9(?:2(?:646[0-46-9]|9(?:45[02-69]|54[2-8]))|3(?:4(?:3(?:5[0-7]|6[1-69])|5(?:4[0-4679]|[56][024-6]))|585[013-7]|7(?:(?:1[15]|81)[46]|77[2-8])|8(?:(?:21|4[16]|9[12])[46]|35[124-6]|5(?:5[0-46-9]|6[0-246-9])|6(?:5[2-8]|9[46])|86[0-68])))\\d{5}|9(?:2(?:284|657|9(?:20|66))|3(?:4(?:8[27]|92)|755|878))[2-7]\\d{5}|9(?:2(?:2(?:2[59]|44|52)|3(?:26|4[24])|473|9(?:[07]2|2[26]|34|46))|3327)[45]\\d{5}|9(?:2(?:(?:26|62)2|3(?:02|2[03])|477|9(?:42|83))|3(?:4(?:[47]6|62|89)|5(?:41|64)|873))[2-6]\\d{5}|(?:675\\d|9(?:11[1-8]\\d|2(?:2(?:0[45]|1[2-6]|3[3-6])|3(?:[06]4|7[45])|494|6(?:04|1[2-7]|[346][45])|80[45]|9(?:[17][4-6]|44|8[45]|9[3-6]))|3(?:364|4(?:1[2-7]|2[4-6]|[38]4)|5(?:1[2-8]|3[4-6]|8[46])|6(?:2[45]|44)|7[069][45]|8(?:0[45]|1[2-6]|34|5[34]|7[24-6]|8[3-5]))))\\d{6}|92(?:2(?:21|4[23]|6[145]|7[1-4]|8[356]|9[267])|3(?:16|3[13-8]|43|5[346-8]|9[3-5])|475|6(?:2[46]|4[78]|5[1568])|9(?:03|2[1457-9]|3[1356]|4[08]|[56][23]|82))4\\d{5}|9(?:2(?:2(?:57|81)|3(?:24|46|92)|9(?:01|23|64))|3(?:329|4(?:42|71)|5(?:25|37|4[347]|71)|7(?:18|5[17])|888))[3-6]\\d{5}|9(?:2(?:2(?:02|2[3467]|4[156]|5[45]|6[6-8]|91)|3(?:1[47]|[24]5|5[25]|96)|47[48]|625|932)|3(?:38[2578]|4(?:0[0-24-9]|3[78]|4[457]|58|6[03-9]|72|83|9[136-8])|5(?:2[124]|[368][23]|4[2689]|7[2-6])|7(?:16|2[15]|3[145]|4[13]|5[468]|7[2-5]|8[26])|8(?:2[5-7]|3[278]|4[3-5]|5[78]|6[1-378]|[78]7|94)))[4-6]\\d{5}", , , , "91123456789", , , , [6, 7, 8]],
                    [, , "800\\d{7}", , , , "8001234567", , , [10]],
                    [, , "60[04579]\\d{7}", , , , "6001234567", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "AR", 54, "00", "0", , , "0?(?:(11|2(?:2(?:02?|[13]|2[13-79]|4[1-6]|5[2457]|6[124-8]|7[1-4]|8[13-6]|9[1267])|3(?:02?|1[467]|2[03-6]|3[13-8]|[49][2-6]|5[2-8]|[67])|4(?:7[3-578]|9)|6(?:[0136]|2[24-6]|4[6-8]?|5[15-8])|80|9(?:0[1-3]|[19]|2\\d|3[1-6]|4[02568]?|5[2-4]|6[2-46]|72?|8[23]?))|3(?:3(?:2[79]|6|8[2578])|4(?:0[0-24-9]|[12]|3[5-8]?|4[24-7]|5[4-68]?|6[02-9]|7[126]|8[2379]?|9[1-36-8])|5(?:1|2[1245]|3[237]?|4[1-46-9]|6[2-4]|7[1-6]|8[2-5]?)|6[24]|7(?:[069]|1[1568]|2[15]|3[145]|4[13]|5[14-8]|7[2-57]|8[126])|8(?:[01]|2[15-7]|3[2578]?|4[13-6]|5[4-8]?|6[1-357-9]|7[36-8]?|8[5-8]?|9[124])))15)?", "9$1", , , [
                        [, "(\\d{3})", "$1", ["[09]|1(?:[02]|1[02-5])"]],
                        [, "(\\d{2})(\\d{4})", "$1-$2", ["[2-7]|8[0-7]"]],
                        [, "(\\d{3})(\\d{4})", "$1-$2", ["[2-7]|8[013-8]"]],
                        [, "(\\d{4})(\\d{4})", "$1-$2", ["2[0-8]|[3-8]"]],
                        [, "(\\d{4})(\\d{2})(\\d{4})", "$1 $2-$3", ["2(?:2[024-9]|3[0-59]|47|6[245]|9[02-8])|3(?:3[28]|4[03-9]|5[2-46-8]|7[1-578]|8[2-9])", "2(?:[23]02|6(?:[25]|4[6-8])|9(?:[02356]|4[02568]|72|8[23]))|3(?:3[28]|4(?:[04679]|3[5-8]|5[4-68]|8[2379])|5(?:[2467]|3[237]|8[2-5])|7[1-578]|8(?:[2469]|3[2578]|5[4-8]|7[36-8]|8[5-8]))|2(?:2[24-9]|3[1-59]|47)", "2(?:[23]02|6(?:[25]|4(?:64|[78]))|9(?:[02356]|4(?:[0268]|5[2-6])|72|8[23]))|3(?:3[28]|4(?:[04679]|3[78]|5(?:4[46]|8)|8[2379])|5(?:[2467]|3[237]|8[23])|7[1-578]|8(?:[2469]|3[278]|5[56][46]|86[3-6]))|2(?:2[24-9]|3[1-59]|47)|38(?:[58][78]|7[378])|3(?:4[35][56]|58[45]|8(?:[38]5|54|76))[4-6]", "2(?:[23]02|6(?:[25]|4(?:64|[78]))|9(?:[02356]|4(?:[0268]|5(?:[24-6]|3[2-5]))|72|8[23]))|3(?:3[28]|4(?:[04679]|3(?:5(?:4[0-25689]|[56])|[78])|58|8[2379])|5(?:[2467]|3[237]|8(?:[23]|4(?:[45]|60)|5(?:4[0-39]|5|64)))|7[1-578]|8(?:[2469]|3[278]|54(?:4|5[13-7]|6[89])|86[3-6]))|2(?:2[24-9]|3[1-59]|47)|38(?:[58][78]|7[378])|3(?:454|85[56])[46]|3(?:4(?:36|5[56])|8(?:[38]5|76))[4-6]"], "0$1", , 1],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2-$3", ["1"], "0$1", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2-$3", ["[23]"], "0$1", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1-$2-$3", ["[68]"], "0$1"],
                        [, "(\\d)(\\d{4})(\\d{2})(\\d{4})", "$2 15-$3-$4", ["9(?:2[2-469]|3[3-578])", "9(?:2(?:2[024-9]|3[0-59]|47|6[245]|9[02-8])|3(?:3[28]|4[03-9]|5[2-46-8]|7[1-578]|8[2-9]))", "9(?:2(?:[23]02|6(?:[25]|4[6-8])|9(?:[02356]|4[02568]|72|8[23]))|3(?:3[28]|4(?:[04679]|3[5-8]|5[4-68]|8[2379])|5(?:[2467]|3[237]|8[2-5])|7[1-578]|8(?:[2469]|3[2578]|5[4-8]|7[36-8]|8[5-8])))|92(?:2[24-9]|3[1-59]|47)", "9(?:2(?:[23]02|6(?:[25]|4(?:64|[78]))|9(?:[02356]|4(?:[0268]|5[2-6])|72|8[23]))|3(?:3[28]|4(?:[04679]|3[78]|5(?:4[46]|8)|8[2379])|5(?:[2467]|3[237]|8[23])|7[1-578]|8(?:[2469]|3[278]|5(?:[56][46]|[78])|7[378]|8(?:6[3-6]|[78]))))|92(?:2[24-9]|3[1-59]|47)|93(?:4[35][56]|58[45]|8(?:[38]5|54|76))[4-6]", "9(?:2(?:[23]02|6(?:[25]|4(?:64|[78]))|9(?:[02356]|4(?:[0268]|5(?:[24-6]|3[2-5]))|72|8[23]))|3(?:3[28]|4(?:[04679]|3(?:5(?:4[0-25689]|[56])|[78])|5(?:4[46]|8)|8[2379])|5(?:[2467]|3[237]|8(?:[23]|4(?:[45]|60)|5(?:4[0-39]|5|64)))|7[1-578]|8(?:[2469]|3[278]|5(?:4(?:4|5[13-7]|6[89])|[56][46]|[78])|7[378]|8(?:6[3-6]|[78]))))|92(?:2[24-9]|3[1-59]|47)|93(?:4(?:36|5[56])|8(?:[38]5|76))[4-6]"], "0$1"],
                        [, "(\\d)(\\d{2})(\\d{4})(\\d{4})", "$2 15-$3-$4", ["91"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{3})(\\d{4})", "$2 15-$3-$4", ["9"], "0$1"]
                    ],
                    [
                        [, "(\\d{4})(\\d{2})(\\d{4})", "$1 $2-$3", ["2(?:2[024-9]|3[0-59]|47|6[245]|9[02-8])|3(?:3[28]|4[03-9]|5[2-46-8]|7[1-578]|8[2-9])", "2(?:[23]02|6(?:[25]|4[6-8])|9(?:[02356]|4[02568]|72|8[23]))|3(?:3[28]|4(?:[04679]|3[5-8]|5[4-68]|8[2379])|5(?:[2467]|3[237]|8[2-5])|7[1-578]|8(?:[2469]|3[2578]|5[4-8]|7[36-8]|8[5-8]))|2(?:2[24-9]|3[1-59]|47)", "2(?:[23]02|6(?:[25]|4(?:64|[78]))|9(?:[02356]|4(?:[0268]|5[2-6])|72|8[23]))|3(?:3[28]|4(?:[04679]|3[78]|5(?:4[46]|8)|8[2379])|5(?:[2467]|3[237]|8[23])|7[1-578]|8(?:[2469]|3[278]|5[56][46]|86[3-6]))|2(?:2[24-9]|3[1-59]|47)|38(?:[58][78]|7[378])|3(?:4[35][56]|58[45]|8(?:[38]5|54|76))[4-6]", "2(?:[23]02|6(?:[25]|4(?:64|[78]))|9(?:[02356]|4(?:[0268]|5(?:[24-6]|3[2-5]))|72|8[23]))|3(?:3[28]|4(?:[04679]|3(?:5(?:4[0-25689]|[56])|[78])|58|8[2379])|5(?:[2467]|3[237]|8(?:[23]|4(?:[45]|60)|5(?:4[0-39]|5|64)))|7[1-578]|8(?:[2469]|3[278]|54(?:4|5[13-7]|6[89])|86[3-6]))|2(?:2[24-9]|3[1-59]|47)|38(?:[58][78]|7[378])|3(?:454|85[56])[46]|3(?:4(?:36|5[56])|8(?:[38]5|76))[4-6]"], "0$1", , 1],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2-$3", ["1"], "0$1", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2-$3", ["[23]"], "0$1", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1-$2-$3", ["[68]"], "0$1"],
                        [, "(\\d)(\\d{4})(\\d{2})(\\d{4})", "$1 $2 $3-$4", ["9(?:2[2-469]|3[3-578])", "9(?:2(?:2[024-9]|3[0-59]|47|6[245]|9[02-8])|3(?:3[28]|4[03-9]|5[2-46-8]|7[1-578]|8[2-9]))", "9(?:2(?:[23]02|6(?:[25]|4[6-8])|9(?:[02356]|4[02568]|72|8[23]))|3(?:3[28]|4(?:[04679]|3[5-8]|5[4-68]|8[2379])|5(?:[2467]|3[237]|8[2-5])|7[1-578]|8(?:[2469]|3[2578]|5[4-8]|7[36-8]|8[5-8])))|92(?:2[24-9]|3[1-59]|47)", "9(?:2(?:[23]02|6(?:[25]|4(?:64|[78]))|9(?:[02356]|4(?:[0268]|5[2-6])|72|8[23]))|3(?:3[28]|4(?:[04679]|3[78]|5(?:4[46]|8)|8[2379])|5(?:[2467]|3[237]|8[23])|7[1-578]|8(?:[2469]|3[278]|5(?:[56][46]|[78])|7[378]|8(?:6[3-6]|[78]))))|92(?:2[24-9]|3[1-59]|47)|93(?:4[35][56]|58[45]|8(?:[38]5|54|76))[4-6]", "9(?:2(?:[23]02|6(?:[25]|4(?:64|[78]))|9(?:[02356]|4(?:[0268]|5(?:[24-6]|3[2-5]))|72|8[23]))|3(?:3[28]|4(?:[04679]|3(?:5(?:4[0-25689]|[56])|[78])|5(?:4[46]|8)|8[2379])|5(?:[2467]|3[237]|8(?:[23]|4(?:[45]|60)|5(?:4[0-39]|5|64)))|7[1-578]|8(?:[2469]|3[278]|5(?:4(?:4|5[13-7]|6[89])|[56][46]|[78])|7[378]|8(?:6[3-6]|[78]))))|92(?:2[24-9]|3[1-59]|47)|93(?:4(?:36|5[56])|8(?:[38]5|76))[4-6]"]],
                        [, "(\\d)(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3-$4", ["91"]],
                        [, "(\\d)(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3-$4", ["9"]]
                    ],
                    [, , , , , , , , , [-1]], , , [, , "810\\d{7}", , , , , , , [10]],
                    [, , "810\\d{7}", , , , "8101234567", , , [10]], , , [, , , , , , , , , [-1]]
                ],
                AS: [, [, , "(?:[58]\\d\\d|684|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "6846(?:22|33|44|55|77|88|9[19])\\d{4}", , , , "6846221234", , , , [7]],
                    [, , "684(?:2(?:5[2468]|72)|7(?:3[13]|70))\\d{4}", , , , "6847331234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "AS", 1, "011", "1", , , "1|([267]\\d{6})$", "684$1", , , , , [, , , , , , , , , [-1]], , "684", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                AT: [, [, , "1\\d{3,12}|2\\d{6,12}|43(?:(?:0\\d|5[02-9])\\d{3,9}|2\\d{4,5}|[3467]\\d{4}|8\\d{4,6}|9\\d{4,7})|5\\d{4,12}|8\\d{7,12}|9\\d{8,12}|(?:[367]\\d|4[0-24-9])\\d{4,11}", , , , , , , [4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
                        [3]
                    ],
                    [, , "1(?:11\\d|[2-9]\\d{3,11})|(?:316|463|(?:51|66|73)2)\\d{3,10}|(?:2(?:1[467]|2[13-8]|5[2357]|6[1-46-8]|7[1-8]|8[124-7]|9[1458])|3(?:1[1-578]|3[23568]|4[5-7]|5[1378]|6[1-38]|8[3-68])|4(?:2[1-8]|35|7[1368]|8[2457])|5(?:2[1-8]|3[357]|4[147]|5[12578]|6[37])|6(?:13|2[1-47]|4[135-8]|5[468])|7(?:2[1-8]|35|4[13478]|5[68]|6[16-8]|7[1-6]|9[45]))\\d{4,10}", , , , "1234567890", , , , [3]],
                    [, , "6(?:5[0-3579]|6[013-9]|[7-9]\\d)\\d{4,10}", , , , "664123456", , , [7, 8, 9, 10, 11, 12, 13]],
                    [, , "800\\d{6,10}", , , , "800123456", , , [9, 10, 11, 12, 13]],
                    [, , "9(?:0[01]|3[019])\\d{6,10}", , , , "900123456", , , [9, 10, 11, 12, 13]],
                    [, , "8(?:10|2[018])\\d{6,10}|828\\d{5}", , , , "810123456", , , [8, 9, 10, 11, 12, 13]],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:0[1-9]|17|[79]\\d)\\d{2,10}|7[28]0\\d{6,10}", , , , "780123456", , , [5, 6, 7, 8, 9, 10, 11, 12, 13]], "AT", 43, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{3,12})", "$1 $2", ["1(?:11|[2-9])"], "0$1"],
                        [, "(\\d{3})(\\d{2})", "$1 $2", ["517"], "0$1"],
                        [, "(\\d{2})(\\d{3,5})", "$1 $2", ["5[079]"], "0$1"],
                        [, "(\\d{6})", "$1", ["1"]],
                        [, "(\\d{3})(\\d{3,10})", "$1 $2", ["(?:31|4)6|51|6(?:5[0-3579]|[6-9])|7(?:20|32|8)|[89]"], "0$1"],
                        [, "(\\d{4})(\\d{3,9})", "$1 $2", ["[2-467]|5[2-6]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["5"], "0$1"],
                        [, "(\\d{2})(\\d{4})(\\d{4,7})", "$1 $2 $3", ["5"], "0$1"]
                    ],
                    [
                        [, "(\\d)(\\d{3,12})", "$1 $2", ["1(?:11|[2-9])"], "0$1"],
                        [, "(\\d{3})(\\d{2})", "$1 $2", ["517"], "0$1"],
                        [, "(\\d{2})(\\d{3,5})", "$1 $2", ["5[079]"], "0$1"],
                        [, "(\\d{3})(\\d{3,10})", "$1 $2", ["(?:31|4)6|51|6(?:5[0-3579]|[6-9])|7(?:20|32|8)|[89]"], "0$1"],
                        [, "(\\d{4})(\\d{3,9})", "$1 $2", ["[2-467]|5[2-6]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["5"], "0$1"],
                        [, "(\\d{2})(\\d{4})(\\d{4,7})", "$1 $2 $3", ["5"], "0$1"]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                AU: [, [, , "1(?:[0-79]\\d{7,8}|8[0-24-9]\\d{7})|(?:[2-478]\\d\\d|550)\\d{6}|1\\d{4,7}", , , , , , , [5, 6, 7, 8, 9, 10]],
                    [, , "(?:[237]\\d{5}|8(?:51(?:0(?:0[03-9]|[1247]\\d|3[2-9]|5[0-8]|6[1-9]|8[0-6])|1(?:1[69]|[23]\\d|4[0-4]))|(?:[6-8]\\d{3}|9(?:[02-9]\\d\\d|1(?:[0-57-9]\\d|6[0135-9])))\\d))\\d{3}", , , , "212345678", , , [9],
                        [8]
                    ],
                    [, , "483[0-3]\\d{5}|4(?:[0-3]\\d|4[047-9]|5[0-25-9]|6[06-9]|7[02-9]|8[0-2457-9]|9[0-27-9])\\d{6}", , , , "412345678", , , [9]],
                    [, , "180(?:0\\d{3}|2)\\d{3}", , , , "1800123456", , , [7, 10]],
                    [, , "190[0-26]\\d{6}", , , , "1900123456", , , [10]],
                    [, , "13(?:00\\d{3}|45[0-4])\\d{3}|13\\d{4}", , , , "1300123456", , , [6, 8, 10]],
                    [, , , , , , , , , [-1]],
                    [, , "(?:14(?:5(?:1[0458]|[23][458])|71\\d)|550\\d\\d)\\d{4}", , , , "550123456", , , [9]], "AU", 61, "001[14-689]|14(?:1[14]|34|4[17]|[56]6|7[47]|88)0011", "0", , , "0|(183[12])", , "0011", , [
                        [, "(\\d{2})(\\d{3,4})", "$1 $2", ["16"], "0$1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3", ["13"]],
                        [, "(\\d{3})(\\d{3})", "$1 $2", ["19"]],
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["180", "1802"]],
                        [, "(\\d{4})(\\d{3,4})", "$1 $2", ["19"]],
                        [, "(\\d{2})(\\d{3})(\\d{2,4})", "$1 $2 $3", ["16"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["14|[45]"], "0$1"],
                        [, "(\\d)(\\d{4})(\\d{4})", "$1 $2 $3", ["[2378]"], "(0$1)", "$CC ($1)"],
                        [, "(\\d{4})(\\d{3})(\\d{3})", "$1 $2 $3", ["1(?:30|[89])"]]
                    ],
                    [
                        [, "(\\d{2})(\\d{3,4})", "$1 $2", ["16"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2,4})", "$1 $2 $3", ["16"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["14|[45]"], "0$1"],
                        [, "(\\d)(\\d{4})(\\d{4})", "$1 $2 $3", ["[2378]"], "(0$1)", "$CC ($1)"],
                        [, "(\\d{4})(\\d{3})(\\d{3})", "$1 $2 $3", ["1(?:30|[89])"]]
                    ],
                    [, , "16\\d{3,7}", , , , "1612345", , , [5, 6, 7, 8, 9]], 1, , [, , "1[38]00\\d{6}|1(?:345[0-4]|802)\\d{3}|13\\d{4}", , , , , , , [6, 7, 8, 10]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                AW: [, [, , "(?:[25-79]\\d\\d|800)\\d{4}", , , , , , , [7]],
                    [, , "5(?:2\\d|8[1-9])\\d{4}", , , , "5212345"],
                    [, , "(?:290|5[69]\\d|6(?:[03]0|22|4[0-2]|[69]\\d)|7(?:[34]\\d|7[07])|9(?:6[45]|9[4-8]))\\d{4}", , , , "5601234"],
                    [, , "800\\d{4}", , , , "8001234"],
                    [, , "900\\d{4}", , , , "9001234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "(?:28\\d|501)\\d{4}", , , , "5011234"], "AW", 297, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[25-9]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                AX: [, [, , "2\\d{4,9}|35\\d{4,5}|(?:60\\d\\d|800)\\d{4,6}|7\\d{5,11}|(?:[14]\\d|3[0-46-9]|50)\\d{4,8}", , , , , , , [5, 6, 7, 8, 9, 10, 11, 12]],
                    [, , "18[1-8]\\d{3,6}", , , , "181234567", , , [6, 7, 8, 9]],
                    [, , "(?:4[0-8]|50)\\d{4,8}", , , , "412345678", , , [6, 7, 8, 9, 10]],
                    [, , "800\\d{4,6}", , , , "800123456", , , [7, 8, 9]],
                    [, , "[67]00\\d{5,6}", , , , "600123456", , , [8, 9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "AX", 358, "00|99(?:[01469]|5(?:[14]1|3[23]|5[59]|77|88|9[09]))", "0", , , "0", , "00", , , , [, , , , , , , , , [-1]], , "18", [, , , , , , , , , [-1]],
                    [, , "20\\d{4,8}|60[12]\\d{5,6}|7(?:099\\d{4,5}|5[03-9]\\d{3,7})|20[2-59]\\d\\d|(?:606|7(?:0[78]|1|3\\d))\\d{7}|(?:10|29|3[09]|70[1-5]\\d)\\d{4,8}", , , , "10112345"], , , [, , , , , , , , , [-1]]
                ],
                AZ: [, [, , "365\\d{6}|(?:[124579]\\d|60|88)\\d{7}", , , , , , , [9],
                        [7]
                    ],
                    [, , "365(?:[0-46-9]\\d|5[0-35-9])\\d{4}|(?:1[28]\\d|2(?:[045]2|1[24]|2[2-4]|33|6[23]))\\d{6}", , , , "123123456", , , , [7]],
                    [, , "(?:36554|99[2-9]\\d\\d)\\d{4}|(?:4[04]|5[015]|60|7[07])\\d{7}", , , , "401234567"],
                    [, , "88\\d{7}", , , , "881234567"],
                    [, , "900200\\d{3}", , , , "900200123"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "AZ", 994, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3", ["[1-9]"]],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["90"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[12]|365", "[12]|365", "[12]|365(?:[0-46-9]|5[0-35-9])"], "(0$1)"],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[3-9]"], "0$1"]
                    ],
                    [
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["90"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[12]|365", "[12]|365", "[12]|365(?:[0-46-9]|5[0-35-9])"], "(0$1)"],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[3-9]"], "0$1"]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BA: [, [, , "6\\d{8}|(?:[35689]\\d|49|70)\\d{6}", , , , , , , [8, 9],
                        [6]
                    ],
                    [, , "(?:3(?:[05-79][2-9]|1[4579]|[23][24-9]|4[2-4689]|8[2457-9])|49[2-579]|5(?:0[2-49]|[13][2-9]|[268][2-4679]|4[4689]|5[2-79]|7[2-69]|9[2-4689]))\\d{5}", , , , "30212345", , , [8],
                        [6]
                    ],
                    [, , "6040[0-4]\\d{4}|6(?:03|[1-356]|44|7\\d)\\d{6}", , , , "61123456"],
                    [, , "8[08]\\d{6}", , , , "80123456", , , [8]],
                    [, , "9[0246]\\d{6}", , , , "90123456", , , [8]],
                    [, , "8[12]\\d{6}", , , , "82123456", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "BA", 387, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{3})", "$1-$2", ["[2-9]"]],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["6[1-3]|[7-9]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2-$3", ["[3-5]|6[56]"], "0$1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{3})", "$1 $2 $3 $4", ["6"], "0$1"]
                    ],
                    [
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["6[1-3]|[7-9]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2-$3", ["[3-5]|6[56]"], "0$1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{3})", "$1 $2 $3 $4", ["6"], "0$1"]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "70(?:3[0146]|[56]0)\\d{4}", , , , "70341234", , , [8]], , , [, , , , , , , , , [-1]]
                ],
                BB: [, [, , "(?:246|[58]\\d\\d|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "246(?:2(?:2[78]|7[0-4])|4(?:1[024-6]|2\\d|3[2-9])|5(?:20|[34]\\d|54|7[1-3])|6(?:2\\d|38)|7[35]7|9(?:1[89]|63))\\d{4}", , , , "2464123456", , , , [7]],
                    [, , "246(?:2(?:[356]\\d|4[0-57-9]|8[0-79])|45\\d|69[5-7]|8(?:[2-5]\\d|83))\\d{4}", , , , "2462501234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "(?:246976|900[2-9]\\d\\d)\\d{4}", , , , "9002123456", , , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , "24631\\d{5}", , , , "2463101234", , , , [7]], "BB", 1, "011", "1", , , "1|([2-9]\\d{6})$", "246$1", , , , , [, , , , , , , , , [-1]], , "246", [, , , , , , , , , [-1]],
                    [, , "246(?:292|367|4(?:1[7-9]|3[01]|44|67)|7(?:36|53))\\d{4}", , , , "2464301234", , , , [7]], , , [, , , , , , , , , [-1]]
                ],
                BD: [, [, , "[13469]\\d{9}|8[0-79]\\d{7,8}|[2-7]\\d{8}|[2-9]\\d{7}|[3-689]\\d{6}|[57-9]\\d{5}", , , , , , , [6, 7, 8, 9, 10]],
                    [, , "(?:3(?:03[56]|224)|4(?:22[25]|653))\\d{3,4}|(?:4(?:31\\d\\d|[46]23)|5(?:222|32[37]))\\d{3}(?:\\d{2})?|(?:3(?:42[47]|529|823)|4(?:027|525|658)|(?:56|73)2|6257|9[35]1)\\d{3}|(?:3(?:02[348]|22[35]|324|422)|4(?:22[67]|32[236-9]|6(?:2[46]|5[57])|953)|5526|6(?:024|6655)|81)\\d{4,5}|(?:2(?:7(?:1[0-267]|2[0-289]|3[0-29]|4[01]|5[1-3]|6[013]|7[0178]|91)|8(?:0[125]|1[1-6]|2[0157-9]|3[1-69]|41|6[1-35]|7[1-5]|8[1-8]|9[0-6])|9(?:0[0-2]|1[0-4]|2[568]|3[3-6]|5[5-7]|6[01367]|7[15]|8[014-9]))|3(?:0(?:2[025-79]|3[2-4])|22[12]|32[2356]|824)|4(?:02[09]|22[348]|32[045]|523|6(?:27|54))|666(?:22|53)|8(?:4[12]|[5-7]2)|9(?:[024]2|81))\\d{4}|(?:2[45]\\d\\d|3(?:1(?:2[5-7]|[5-7])|425|822)|4(?:033|1\\d|[257]1|332|4(?:2[246]|5[25])|6(?:25|56|62)|8(?:23|54)|92[2-5])|5(?:02[03489]|22[457]|32[569]|42[46]|6(?:[18]|53)|724|826)|6(?:023|2(?:2[2-5]|5[3-5]|8)|32[3478]|42[34]|52[47]|6(?:[18]|6(?:2[34]|5[24]))|[78]2[2-5]|92[2-6])|7(?:02|21\\d|[3-589]1|6[12]|72[24])|8(?:0|217|3[12]|[5-7]1)|9[24]1)\\d{5}|(?:(?:3[2-8]|5[2-57-9]|6[03-589])1|4[4689][18])\\d{5}|[59]1\\d{5}", , , , "27111234"],
                    [, , "(?:1[13-9]\\d|644)\\d{7}|(?:3[78]|44|66)[02-9]\\d{7}", , , , "1812345678", , , [10]],
                    [, , "80[03]\\d{7}", , , , "8001234567", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "96(?:0[469]|1[0-47]|3[389]|6[69]|7[78])\\d{6}", , , , "9604123456", , , [10]], "BD", 880, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{4,6})", "$1-$2", ["31[5-7]|[459]1"], "0$1"],
                        [, "(\\d{3})(\\d{3,7})", "$1-$2", ["3(?:[67]|8[013-9])|4(?:6[168]|7|[89][18])|5(?:6[128]|9)|6(?:28|4[14]|5)|7[2-589]|8(?:0[014-9]|[12])|9[358]|(?:3[2-5]|4[235]|5[2-578]|6[0389]|76|8[3-7]|9[24])1|(?:44|66)[01346-9]"], "0$1"],
                        [, "(\\d{4})(\\d{3,6})", "$1-$2", ["[13-9]"], "0$1"],
                        [, "(\\d)(\\d{7,8})", "$1-$2", ["2"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BE: [, [, , "4\\d{8}|[1-9]\\d{7}", , , , , , , [8, 9]],
                    [, , "80[2-8]\\d{5}|(?:1[0-69]|[23][2-8]|4[23]|5\\d|6[013-57-9]|71|8[1-79]|9[2-4])\\d{6}", , , , "12345678", , , [8]],
                    [, , "4[5-9]\\d{7}", , , , "470123456", , , [9]],
                    [, , "800[1-9]\\d{4}", , , , "80012345", , , [8]],
                    [, , "(?:70(?:2[0-57]|3[0457]|44|69|7[0579])|90(?:0[0-35-8]|1[36]|2[0-3568]|3[0135689]|4[2-68]|5[1-68]|6[0-378]|7[23568]|9[34679]))\\d{4}", , , , "90012345", , , [8]],
                    [, , "7879\\d{4}", , , , "78791234", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "BE", 32, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{2})(\\d{3})", "$1 $2 $3", ["(?:80|9)0"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[239]|4[23]"], "0$1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[15-8]"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["4"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "78(?:0[57]|1[0458]|2[25]|3[5-8]|48|[56]0|7[078])\\d{4}", , , , "78102345", , , [8]], , , [, , , , , , , , , [-1]]
                ],
                BF: [, [, , "[025-7]\\d{7}", , , , , , , [8]],
                    [, , "2(?:0(?:49|5[23]|6[56]|9[016-9])|4(?:4[569]|5[4-6]|6[56]|7[0179])|5(?:[34]\\d|50|6[5-7]))\\d{4}", , , , "20491234"],
                    [, , "(?:0[17]|5[1-8]|[67]\\d)\\d{6}", , , , "70123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "BF", 226, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[025-7]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BG: [, [, , "[2-7]\\d{6,7}|[89]\\d{6,8}|2\\d{5}", , , , , , , [6, 7, 8, 9],
                        [4, 5]
                    ],
                    [, , "2\\d{5,7}|(?:43[1-6]|70[1-9])\\d{4,5}|(?:[36]\\d|4[124-7]|[57][1-9]|8[1-6]|9[1-7])\\d{5,6}", , , , "2123456", , , [6, 7, 8],
                        [4, 5]
                    ],
                    [, , "43[07-9]\\d{5}|(?:48|8[7-9]\\d|9(?:8\\d|9[69]))\\d{6}", , , , "48123456", , , [8, 9]],
                    [, , "800\\d{5}", , , , "80012345", , , [8]],
                    [, , "90\\d{6}", , , , "90123456", , , [8]],
                    [, , "700\\d{5}", , , , "70012345", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "BG", 359, "00", "0", , , "0", , , , [
                        [, "(\\d{6})", "$1", ["1"]],
                        [, "(\\d)(\\d)(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["2"], "0$1"],
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["43[1-6]|70[1-9]"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{3,4})", "$1 $2 $3", ["2"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2,3})", "$1 $2 $3", ["[356]|4[124-7]|7[1-9]|8[1-6]|9[1-7]"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{3})", "$1 $2 $3", ["(?:70|8)0"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{2})", "$1 $2 $3", ["43[1-7]|7"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[48]|9[08]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["9"], "0$1"]
                    ],
                    [
                        [, "(\\d)(\\d)(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["2"], "0$1"],
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["43[1-6]|70[1-9]"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{3,4})", "$1 $2 $3", ["2"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2,3})", "$1 $2 $3", ["[356]|4[124-7]|7[1-9]|8[1-6]|9[1-7]"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{3})", "$1 $2 $3", ["(?:70|8)0"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{2})", "$1 $2 $3", ["43[1-7]|7"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[48]|9[08]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["9"], "0$1"]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BH: [, [, , "[136-9]\\d{7}", , , , , , , [8]],
                    [, , "(?:1(?:3[1356]|6[0156]|7\\d)\\d|6(?:1[16]\\d|500|6(?:0\\d|3[12]|44|7[7-9]|88)|9[69][69])|7(?:1(?:11|78)|7\\d\\d))\\d{4}", , , , "17001234"],
                    [, , "(?:3(?:[1-79]\\d|8[0-47-9])\\d|6(?:3(?:00|33|6[16])|6(?:3[03-9]|[69]\\d|7[0-6])))\\d{4}", , , , "36001234"],
                    [, , "80\\d{6}", , , , "80123456"],
                    [, , "(?:87|9[014578])\\d{6}", , , , "90123456"],
                    [, , "84\\d{6}", , , , "84123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "BH", 973, "00", , , , , , , , [
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[13679]|8[047]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BI: [, [, , "(?:[267]\\d|31)\\d{6}", , , , , , , [8]],
                    [, , "22\\d{6}", , , , "22201234"],
                    [, , "(?:29|31|6[1289]|7[125-9])\\d{6}", , , , "79561234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "BI", 257, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[2367]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BJ: [, [, , "[2689]\\d{7}", , , , , , , [8]],
                    [, , "2(?:02|1[037]|2[45]|3[68])\\d{5}", , , , "20211234"],
                    [, , "(?:6\\d|9[013-9])\\d{6}", , , , "90011234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "857[58]\\d{4}", , , , "85751234"], "BJ", 229, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[2689]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "81\\d{6}", , , , "81123456"], , , [, , , , , , , , , [-1]]
                ],
                BL: [, [, , "(?:590|69\\d|976)\\d{6}", , , , , , , [9]],
                    [, , "590(?:2[7-9]|5[12]|87)\\d{4}", , , , "590271234"],
                    [, , "69(?:0\\d\\d|1(?:2[29]|3[0-5]))\\d{4}", , , , "690001234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "976[01]\\d{5}", , , , "976012345"], "BL", 590, "00", "0", , , "0", , , , , , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BM: [, [, , "(?:441|[58]\\d\\d|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "441(?:2(?:02|23|[3479]\\d|61)|[46]\\d\\d|5(?:4\\d|60|89)|824)\\d{4}", , , , "4412345678", , , , [7]],
                    [, , "441(?:[37]\\d|5[0-39])\\d{5}", , , , "4413701234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "BM", 1, "011", "1", , , "1|([2-8]\\d{6})$", "441$1", , , , , [, , , , , , , , , [-1]], , "441", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BN: [, [, , "[2-578]\\d{6}", , , , , , , [7]],
                    [, , "22[0-7]\\d{4}|(?:2[013-9]|[34]\\d|5[0-25-9])\\d{5}", , , , "2345678"],
                    [, , "(?:22[89]|[78]\\d\\d)\\d{4}", , , , "7123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "5[34]\\d{5}", , , , "5345678"], "BN", 673, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[2-578]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BO: [, [, , "(?:[2-467]\\d\\d|8001)\\d{5}", , , , , , , [8, 9],
                        [7]
                    ],
                    [, , "(?:2(?:2\\d\\d|5(?:11|[258]\\d|9[67])|6(?:12|2\\d|9[34])|8(?:2[34]|39|62))|3(?:3\\d\\d|4(?:6\\d|8[24])|8(?:25|42|5[257]|86|9[25])|9(?:[27]\\d|3[2-4]|4[248]|5[24]|6[2-6]))|4(?:4\\d\\d|6(?:11|[24689]\\d|72)))\\d{4}", , , , "22123456", , , [8],
                        [7]
                    ],
                    [, , "[67]\\d{7}", , , , "71234567", , , [8]],
                    [, , "8001[07]\\d{4}", , , , "800171234", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "BO", 591, "00(?:1\\d)?", "0", , , "0(1\\d)?", , , , [
                        [, "(\\d)(\\d{7})", "$1 $2", ["[23]|4[46]"], , "0$CC $1"],
                        [, "(\\d{8})", "$1", ["[67]"], , "0$CC $1"],
                        [, "(\\d{3})(\\d{2})(\\d{4})", "$1 $2 $3", ["8"], , "0$CC $1"]
                    ], , [, , , , , , , , , [-1]], , , [, , "8001[07]\\d{4}", , , , , , , [9]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BQ: [, [, , "(?:[34]1|7\\d)\\d{5}", , , , , , , [7]],
                    [, , "(?:318[023]|41(?:6[023]|70)|7(?:1[578]|50)\\d)\\d{3}", , , , "7151234"],
                    [, , "(?:31(?:8[14-8]|9[14578])|416[14-9]|7(?:0[01]|7[07]|8\\d|9[056])\\d)\\d{3}", , , , "3181234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "BQ", 599, "00", , , , , , , , , , [, , , , , , , , , [-1]], , "[347]", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BR: [, [, , "(?:[1-46-9]\\d\\d|5(?:[0-46-9]\\d|5[0-24679]))\\d{8}|[1-9]\\d{9}|[3589]\\d{8}|[34]\\d{7}", , , , , , , [8, 9, 10, 11]],
                    [, , "(?:[14689][1-9]|2[12478]|3[1-578]|5[13-5]|7[13-579])[2-5]\\d{7}", , , , "1123456789", , , [10],
                        [8]
                    ],
                    [, , "(?:[14689][1-9]|2[12478]|3[1-578]|5[13-5]|7[13-579])(?:7|9\\d)\\d{7}", , , , "11961234567", , , [10, 11],
                        [8, 9]
                    ],
                    [, , "800\\d{6,7}", , , , "800123456", , , [9, 10]],
                    [, , "300\\d{6}|[59]00\\d{6,7}", , , , "300123456", , , [9, 10]],
                    [, , "300\\d{7}|[34]00\\d{5}|4(?:02|37)0\\d{4}", , , , "40041234", , , [8, 10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "BR", 55, "00(?:1[245]|2[1-35]|31|4[13]|[56]5|99)", "0", , , "0(?:(1[245]|2[1-35]|31|4[13]|[56]5|99)(\\d{10,11}))?", "$2", , , [
                        [, "(\\d{3,6})", "$1", ["1(?:1[25-8]|2[357-9]|3[02-68]|4[12568]|5|6[0-8]|8[015]|9[0-47-9])|321|610"]],
                        [, "(\\d{4})(\\d{4})", "$1-$2", ["300|4(?:0[02]|37)", "4(?:02|37)0|[34]00"]],
                        [, "(\\d{4})(\\d{4})", "$1-$2", ["[2-57]", "[2357]|4(?:[0-24-9]|3(?:[0-689]|7[1-9]))"]],
                        [, "(\\d{3})(\\d{2,3})(\\d{4})", "$1 $2 $3", ["(?:[358]|90)0"], "0$1"],
                        [, "(\\d{5})(\\d{4})", "$1-$2", ["9"]],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2-$3", ["(?:[14689][1-9]|2[12478]|3[1-578]|5[13-5]|7[13-579])[2-57]"], "($1)", "0 $CC ($1)"],
                        [, "(\\d{2})(\\d{5})(\\d{4})", "$1 $2-$3", ["[16][1-9]|[2-57-9]"], "($1)", "0 $CC ($1)"]
                    ],
                    [
                        [, "(\\d{4})(\\d{4})", "$1-$2", ["300|4(?:0[02]|37)", "4(?:02|37)0|[34]00"]],
                        [, "(\\d{3})(\\d{2,3})(\\d{4})", "$1 $2 $3", ["(?:[358]|90)0"], "0$1"],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2-$3", ["(?:[14689][1-9]|2[12478]|3[1-578]|5[13-5]|7[13-579])[2-57]"], "($1)", "0 $CC ($1)"],
                        [, "(\\d{2})(\\d{5})(\\d{4})", "$1 $2-$3", ["[16][1-9]|[2-57-9]"], "($1)", "0 $CC ($1)"]
                    ],
                    [, , , , , , , , , [-1]], , , [, , "4020\\d{4}|[34]00\\d{5}", , , , , , , [8]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BS: [, [, , "(?:242|[58]\\d\\d|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "242(?:3(?:02|[236][1-9]|4[0-24-9]|5[0-68]|7[347]|8[0-4]|9[2-467])|461|502|6(?:0[1-4]|12|2[013]|[45]0|7[67]|8[78]|9[89])|7(?:02|88))\\d{4}", , , , "2423456789", , , , [7]],
                    [, , "242(?:3(?:5[79]|7[56]|95)|4(?:[23][1-9]|4[1-35-9]|5[1-8]|6[2-8]|7\\d|81)|5(?:2[45]|3[35]|44|5[1-46-9]|65|77)|6[34]6|7(?:27|38)|8(?:0[1-9]|1[02-9]|2\\d|[89]9))\\d{4}", , , , "2423591234", , , , [7]],
                    [, , "242300\\d{4}|8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456", , , , [7]],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "BS", 1, "011", "1", , , "1|([3-8]\\d{6})$", "242$1", , , , , [, , , , , , , , , [-1]], , "242", [, , , , , , , , , [-1]],
                    [, , "242225[0-46-9]\\d{3}", , , , "2422250123"], , , [, , , , , , , , , [-1]]
                ],
                BT: [, [, , "[17]\\d{7}|[2-8]\\d{6}", , , , , , , [7, 8],
                        [6]
                    ],
                    [, , "(?:2[3-6]|[34][5-7]|5[236]|6[2-46]|7[246]|8[2-4])\\d{5}", , , , "2345678", , , [7],
                        [6]
                    ],
                    [, , "(?:1[67]|77)\\d{6}", , , , "17123456", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "BT", 975, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{3})", "$1 $2", ["[2-7]"]],
                        [, "(\\d)(\\d{3})(\\d{3})", "$1 $2 $3", ["[2-68]|7[246]"]],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["1[67]|7"]]
                    ],
                    [
                        [, "(\\d)(\\d{3})(\\d{3})", "$1 $2 $3", ["[2-68]|7[246]"]],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["1[67]|7"]]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BW: [, [, , "90\\d{5}|(?:[2-6]|7\\d)\\d{6}", , , , , , , [7, 8]],
                    [, , "(?:2(?:4[0-48]|6[0-24]|9[0578])|3(?:1[0-35-9]|55|[69]\\d|7[013])|4(?:6[03]|7[1267]|9[0-5])|5(?:3[0389]|4[0489]|7[1-47]|88|9[0-49])|6(?:2[1-35]|5[149]|8[067]))\\d{4}", , , , "2401234", , , [7]],
                    [, , "77200\\d{3}|7(?:[1-6]\\d|7[014-8])\\d{5}", , , , "71123456", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , "90\\d{5}", , , , "9012345", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "79(?:1(?:[01]\\d|20)|2[0-2]\\d)\\d{3}", , , , "79101234", , , [8]], "BW", 267, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{5})", "$1 $2", ["90"]],
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[2-6]"]],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["7"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BY: [, [, , "(?:[12]\\d|33|44|902)\\d{7}|8(?:0[0-79]\\d{5,7}|[1-7]\\d{9})|8(?:1[0-489]|[5-79]\\d)\\d{7}|8[1-79]\\d{6,7}|8[0-79]\\d{5}|8\\d{5}", , , , , , , [6, 7, 8, 9, 10, 11],
                        [5]
                    ],
                    [, , "(?:1(?:5(?:1[1-5]|[24]\\d|6[2-4]|9[1-7])|6(?:[235]\\d|4[1-7])|7\\d\\d)|2(?:1(?:[246]\\d|3[0-35-9]|5[1-9])|2(?:[235]\\d|4[0-8])|3(?:[26]\\d|3[02-79]|4[024-7]|5[03-7])))\\d{5}", , , , "152450911", , , [9],
                        [5, 6, 7]
                    ],
                    [, , "(?:2(?:5[5-79]|9[1-9])|(?:33|44)\\d)\\d{6}", , , , "294911911", , , [9]],
                    [, , "800\\d{3,7}|8(?:0[13]|20\\d)\\d{7}", , , , "8011234567"],
                    [, , "(?:810|902)\\d{7}", , , , "9021234567", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "249\\d{6}", , , , "249123456", , , [9]], "BY", 375, "810", "8", , , "0|80?", , "8~10", , [
                        [, "(\\d{3})(\\d{3})", "$1 $2", ["800"], "8 $1"],
                        [, "(\\d{3})(\\d{2})(\\d{2,4})", "$1 $2 $3", ["800"], "8 $1"],
                        [, "(\\d{4})(\\d{2})(\\d{3})", "$1 $2-$3", ["1(?:5[169]|6[3-5]|7[179])|2(?:1[35]|2[34]|3[3-5])", "1(?:5[169]|6(?:3[1-3]|4|5[125])|7(?:1[3-9]|7[0-24-6]|9[2-7]))|2(?:1[35]|2[34]|3[3-5])"], "8 0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2-$3-$4", ["1(?:[56]|7[467])|2[1-3]"], "8 0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2-$3-$4", ["[1-4]"], "8 0$1"],
                        [, "(\\d{3})(\\d{3,4})(\\d{4})", "$1 $2 $3", ["[89]"], "8 $1"]
                    ], , [, , , , , , , , , [-1]], , , [, , "800\\d{3,7}|(?:8(?:0[13]|10|20\\d)|902)\\d{7}"],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                BZ: [, [, , "(?:0800\\d|[2-8])\\d{6}", , , , , , , [7, 11]],
                    [, , "(?:236|732)\\d{4}|[2-578][02]\\d{5}", , , , "2221234", , , [7]],
                    [, , "6[0-35-7]\\d{5}", , , , "6221234", , , [7]],
                    [, , "0800\\d{7}", , , , "08001234123", , , [11]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "BZ", 501, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1-$2", ["[2-8]"]],
                        [, "(\\d)(\\d{3})(\\d{4})(\\d{3})", "$1-$2-$3-$4", ["0"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CA: [, [, , "(?:[2-8]\\d|90)\\d{8}", , , , , , , [10],
                        [7]
                    ],
                    [, , "(?:2(?:04|[23]6|[48]9|50)|3(?:06|43|65)|4(?:03|1[68]|3[178]|50)|5(?:06|1[49]|48|79|8[17])|6(?:04|13|39|47)|7(?:0[59]|78|8[02])|8(?:[06]7|19|25|73)|90[25])[2-9]\\d{6}", , , , "5062345678", , , , [7]],
                    [, , "(?:2(?:04|[23]6|[48]9|50)|3(?:06|43|65)|4(?:03|1[68]|3[178]|50)|5(?:06|1[49]|48|79|8[17])|6(?:04|13|39|47)|7(?:0[59]|78|8[02])|8(?:[06]7|19|25|73)|90[25])[2-9]\\d{6}", , , , "5062345678", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "(?:5(?:00|2[12]|33|44|66|77|88)|622)[2-9]\\d{6}", , , , "5002345678"],
                    [, , "600[2-9]\\d{6}", , , , "6002012345"], "CA", 1, "011", "1", , , "1", , , 1, , , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CC: [, [, , "1(?:[0-79]\\d|8[0-24-9])\\d{7}|(?:[148]\\d\\d|550)\\d{6}|1\\d{5,7}", , , , , , , [6, 7, 8, 9, 10]],
                    [, , "8(?:51(?:0(?:02|31|60)|118)|91(?:0(?:1[0-2]|29)|1(?:[28]2|50|79)|2(?:10|64)|3(?:[06]8|22)|4[29]8|62\\d|70[23]|959))\\d{3}", , , , "891621234", , , [9],
                        [8]
                    ],
                    [, , "483[0-3]\\d{5}|4(?:[0-3]\\d|4[047-9]|5[0-25-9]|6[06-9]|7[02-9]|8[0-2457-9]|9[0-27-9])\\d{6}", , , , "412345678", , , [9]],
                    [, , "180(?:0\\d{3}|2)\\d{3}", , , , "1800123456", , , [7, 10]],
                    [, , "190[0-26]\\d{6}", , , , "1900123456", , , [10]],
                    [, , "13(?:00\\d{3}|45[0-4])\\d{3}|13\\d{4}", , , , "1300123456", , , [6, 8, 10]],
                    [, , , , , , , , , [-1]],
                    [, , "(?:14(?:5(?:1[0458]|[23][458])|71\\d)|550\\d\\d)\\d{4}", , , , "550123456", , , [9]], "CC", 61, "001[14-689]|14(?:1[14]|34|4[17]|[56]6|7[47]|88)0011", "0", , , "0|([59]\\d{7})$", "8$1", "0011", , , , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CD: [, [, , "[189]\\d{8}|[1-68]\\d{6}", , , , , , , [7, 9]],
                    [, , "12\\d{7}|[1-6]\\d{6}", , , , "1234567"],
                    [, , "88\\d{5}|(?:8[0-2459]|9[017-9])\\d{7}", , , , "991234567"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "CD", 243, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{2})(\\d{3})", "$1 $2 $3", ["88"], "0$1"],
                        [, "(\\d{2})(\\d{5})", "$1 $2", ["[1-6]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["1"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[89]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CF: [, [, , "(?:[27]\\d{3}|8776)\\d{4}", , , , , , , [8]],
                    [, , "2[12]\\d{6}", , , , "21612345"],
                    [, , "7[0257]\\d{6}", , , , "70012345"],
                    [, , , , , , , , , [-1]],
                    [, , "8776\\d{4}", , , , "87761234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "CF", 236, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[278]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CG: [, [, , "222\\d{6}|(?:0\\d|80)\\d{7}", , , , , , , [9]],
                    [, , "222[1-589]\\d{5}", , , , "222123456"],
                    [, , "0[14-6]\\d{7}", , , , "061234567"],
                    [, , , , , , , , , [-1]],
                    [, , "80(?:0\\d\\d|11[0-4])\\d{4}", , , , "800123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "CG", 242, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["801"]],
                        [, "(\\d)(\\d{4})(\\d{4})", "$1 $2 $3", ["8"]],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[02]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CH: [, [, , "8\\d{11}|[2-9]\\d{8}", , , , , , , [9, 12]],
                    [, , "(?:2[12467]|3[1-4]|4[134]|5[256]|6[12]|[7-9]1)\\d{7}", , , , "212345678", , , [9]],
                    [, , "7[35-9]\\d{7}", , , , "781234567", , , [9]],
                    [, , "800\\d{6}", , , , "800123456", , , [9]],
                    [, , "90[016]\\d{6}", , , , "900123456", , , [9]],
                    [, , "84[0248]\\d{6}", , , , "840123456", , , [9]],
                    [, , "878\\d{6}", , , , "878123456", , , [9]],
                    [, , , , , , , , , [-1]], "CH", 41, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["8[047]|90"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[2-79]|81"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4 $5", ["8"], "0$1"]
                    ], , [, , "74[0248]\\d{6}", , , , "740123456", , , [9]], , , [, , , , , , , , , [-1]],
                    [, , "5[18]\\d{7}", , , , "581234567", , , [9]], , , [, , "860\\d{9}", , , , "860123456789", , , [12]]
                ],
                CI: [, [, , "[02-9]\\d{7}", , , , , , , [8]],
                    [, , "(?:2(?:0[023]|1[02357]|[23][045]|4[03-5])|3(?:0[06]|1[069]|[2-4][07]|5[09]|6[08]))\\d{5}", , , , "21234567"],
                    [, , "97[0-3]\\d{5}|(?:0[1-9]|[457]\\d|6[014-9]|8[4-9]|95)\\d{6}", , , , "01234567"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "CI", 225, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[02-9]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CK: [, [, , "[2-578]\\d{4}", , , , , , , [5]],
                    [, , "(?:2\\d|3[13-7]|4[1-5])\\d{3}", , , , "21234"],
                    [, , "[578]\\d{4}", , , , "71234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "CK", 682, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{3})", "$1 $2", ["[2-578]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CL: [, [, , "12300\\d{6}|6\\d{9,10}|[2-9]\\d{8}", , , , , , , [9, 10, 11]],
                    [, , "(?:2(?:1962|3(?:2\\d\\d|300))|80[1-9]\\d\\d)\\d{4}|(?:22|3[2-5]|[47][1-35]|5[1-3578]|6[13-57]|8[1-9]|9[2-9])\\d{7}", , , , "221234567", , , [9]],
                    [, , "(?:2(?:1962|3(?:2\\d\\d|300))|80[1-9]\\d\\d)\\d{4}|(?:22|3[2-5]|[47][1-35]|5[1-3578]|6[13-57]|8[1-9]|9[2-9])\\d{7}", , , , "221234567", , , [9]],
                    [, , "(?:123|8)00\\d{6}", , , , "800123456", , , [9, 11]],
                    [, , , , , , , , , [-1]],
                    [, , "600\\d{7,8}", , , , "6001234567", , , [10, 11]],
                    [, , , , , , , , , [-1]],
                    [, , "44\\d{7}", , , , "441234567", , , [9]], "CL", 56, "(?:0|1(?:1[0-69]|2[0-57]|5[13-58]|69|7[0167]|8[018]))0", , , , , , , 1, [
                        [, "(\\d{4})", "$1", ["1(?:[03-589]|21)|[29]0|78"]],
                        [, "(\\d{5})(\\d{4})", "$1 $2", ["21"], "($1)"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["44"]],
                        [, "(\\d)(\\d{4})(\\d{4})", "$1 $2 $3", ["2[23]"], "($1)"],
                        [, "(\\d)(\\d{4})(\\d{4})", "$1 $2 $3", ["9[2-9]"]],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["3[2-5]|[47]|5[1-3578]|6[13-57]|8(?:0[1-9]|[1-9])"], "($1)"],
                        [, "(\\d{3})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["60|8"]],
                        [, "(\\d{4})(\\d{3})(\\d{4})", "$1 $2 $3", ["1"]],
                        [, "(\\d{3})(\\d{3})(\\d{2})(\\d{3})", "$1 $2 $3 $4", ["60"]]
                    ],
                    [
                        [, "(\\d{5})(\\d{4})", "$1 $2", ["21"], "($1)"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["44"]],
                        [, "(\\d)(\\d{4})(\\d{4})", "$1 $2 $3", ["2[23]"], "($1)"],
                        [, "(\\d)(\\d{4})(\\d{4})", "$1 $2 $3", ["9[2-9]"]],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["3[2-5]|[47]|5[1-3578]|6[13-57]|8(?:0[1-9]|[1-9])"], "($1)"],
                        [, "(\\d{3})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["60|8"]],
                        [, "(\\d{4})(\\d{3})(\\d{4})", "$1 $2 $3", ["1"]],
                        [, "(\\d{3})(\\d{3})(\\d{2})(\\d{3})", "$1 $2 $3 $4", ["60"]]
                    ],
                    [, , , , , , , , , [-1]], , , [, , "600\\d{7,8}", , , , , , , [10, 11]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CM: [, [, , "(?:[26]\\d\\d|88)\\d{6}", , , , , , , [8, 9]],
                    [, , "2(?:22|33|4[23])\\d{6}", , , , "222123456", , , [9]],
                    [, , "6[5-9]\\d{7}", , , , "671234567", , , [9]],
                    [, , "88\\d{6}", , , , "88012345", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "CM", 237, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["88"]],
                        [, "(\\d)(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4 $5", ["[26]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CN: [, [, , "1[1279]\\d{8,9}|2\\d{9}(?:\\d{2})?|[12]\\d{6,7}|86\\d{6}|(?:1[03-68]\\d|6)\\d{7,9}|(?:[3-579]\\d|8[0-57-9])\\d{6,9}", , , , , , , [7, 8, 9, 10, 11, 12],
                        [5, 6]
                    ],
                    [, , "(?:10(?:[02-79]\\d\\d|[18](?:0[1-9]|[1-9]\\d))|21(?:[18](?:0[1-9]|[1-9]\\d)|[2-79]\\d\\d))\\d{5}|(?:43[35]|754)\\d{7,8}|8(?:078\\d{7}|51\\d{7,8})|(?:10|(?:2|85)1|43[35]|754)(?:100\\d\\d|95\\d{3,4})|(?:2[02-57-9]|3(?:11|7[179])|4(?:[15]1|3[12])|5(?:1\\d|2[37]|3[12]|51|7[13-79]|9[15])|7(?:[39]1|5[57]|6[09])|8(?:71|98))(?:[02-8]\\d{7}|1(?:0(?:0\\d\\d(?:\\d{3})?|[1-9]\\d{5})|[1-9]\\d{6})|9(?:[0-46-9]\\d{6}|5\\d{3}(?:\\d(?:\\d{2})?)?))|(?:3(?:1[02-9]|35|49|5\\d|7[02-68]|9[1-68])|4(?:1[02-9]|2[179]|3[46-9]|5[2-9]|6[47-9]|7\\d|8[23])|5(?:3[03-9]|4[36]|5[02-9]|6[1-46]|7[028]|80|9[2-46-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[17]\\d|2[248]|3[04-9]|4[3-6]|5[0-3689]|6[2368]|9[02-9])|8(?:1[236-8]|2[5-7]|3\\d|5[2-9]|7[02-9]|8[36-8]|9[1-7])|9(?:0[1-3689]|1[1-79]|[379]\\d|4[13]|5[1-5]))(?:[02-8]\\d{6}|1(?:0(?:0\\d\\d(?:\\d{2})?|[1-9]\\d{4})|[1-9]\\d{5})|9(?:[0-46-9]\\d{5}|5\\d{3,5}))", , , , "1012345678", , , [7, 8, 9, 10, 11],
                        [5, 6]
                    ],
                    [, , "1740[0-5]\\d{6}|1(?:[38]\\d|4[57]|5[0-35-9]|6[25-7]|7[0-35-8]|9[189])\\d{8}", , , , "13123456789", , , [11]],
                    [, , "(?:(?:10|21)8|8)00\\d{7}", , , , "8001234567", , , [10, 12]],
                    [, , "16[08]\\d{5}", , , , "16812345", , , [8]],
                    [, , "400\\d{7}|950\\d{7,8}|(?:10|2[0-57-9]|3(?:[157]\\d|35|49|9[1-68])|4(?:[17]\\d|2[179]|[35][1-9]|6[47-9]|8[23])|5(?:[1357]\\d|2[37]|4[36]|6[1-46]|80|9[1-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]\\d|2[248]|3[014-9]|4[3-6]|6[023689])|8(?:1[236-8]|2[5-7]|[37]\\d|5[14-9]|8[36-8]|9[1-8])|9(?:0[1-3689]|1[1-79]|[379]\\d|4[13]|5[1-5]))96\\d{3,4}", , , , "4001234567", , , [7, 8, 9, 10, 11],
                        [5, 6]
                    ],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "CN", 86, "00|1(?:[12]\\d|79|9[0235-7])\\d\\d00", "0", , , "0|(1(?:[12]\\d|79|9[0235-7])\\d\\d)", , "00", , [
                        [, "(\\d{5,6})", "$1", ["96"]],
                        [, "(\\d{2})(\\d{5,6})", "$1 $2", ["(?:10|2[0-57-9])[19]", "(?:10|2[0-57-9])(?:10|9[56])", "(?:10|2[0-57-9])(?:100|9[56])"], "0$1", "$CC $1"],
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[1-9]", "1[1-9]|26|[3-9]|(?:10|2[0-57-9])(?:[0-8]|9[0-47-9])", "1[1-9]|26|[3-9]|(?:10|2[0-57-9])(?:[02-8]|1(?:0[1-9]|[1-9])|9[0-47-9])"]],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["16[08]"]],
                        [, "(\\d{3})(\\d{5,6})", "$1 $2", ["3(?:[157]|35|49|9[1-68])|4(?:[17]|2[179]|6[47-9]|8[23])|5(?:[1357]|2[37]|4[36]|6[1-46]|80)|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]|2[248]|3[014-9]|4[3-6]|6[023689])|8(?:1[236-8]|2[5-7]|[37]|8[36-8]|9[1-8])|9(?:0[1-3689]|1[1-79]|[379]|4[13]|5[1-5])|(?:4[35]|59|85)[1-9]", "(?:3(?:[157]\\d|35|49|9[1-68])|4(?:[17]\\d|2[179]|[35][1-9]|6[47-9]|8[23])|5(?:[1357]\\d|2[37]|4[36]|6[1-46]|80|9[1-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]\\d|2[248]|3[014-9]|4[3-6]|6[023689])|8(?:1[236-8]|2[5-7]|[37]\\d|5[1-9]|8[36-8]|9[1-8])|9(?:0[1-3689]|1[1-79]|[379]\\d|4[13]|5[1-5]))[19]", "85[23](?:10|95)|(?:3(?:[157]\\d|35|49|9[1-68])|4(?:[17]\\d|2[179]|[35][1-9]|6[47-9]|8[23])|5(?:[1357]\\d|2[37]|4[36]|6[1-46]|80|9[1-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]\\d|2[248]|3[014-9]|4[3-6]|6[023689])|8(?:1[236-8]|2[5-7]|[37]\\d|5[14-9]|8[36-8]|9[1-8])|9(?:0[1-3689]|1[1-79]|[379]\\d|4[13]|5[1-5]))(?:10|9[56])", "85[23](?:100|95)|(?:3(?:[157]\\d|35|49|9[1-68])|4(?:[17]\\d|2[179]|[35][1-9]|6[47-9]|8[23])|5(?:[1357]\\d|2[37]|4[36]|6[1-46]|80|9[1-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]\\d|2[248]|3[014-9]|4[3-6]|6[023689])|8(?:1[236-8]|2[5-7]|[37]\\d|5[14-9]|8[36-8]|9[1-8])|9(?:0[1-3689]|1[1-79]|[379]\\d|4[13]|5[1-5]))(?:100|9[56])"], "0$1", "$CC $1"],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[1-9]", "1[1-9]|26|[3-9]|(?:10|2[0-57-9])(?:[0-8]|9[0-47-9])", "26|3(?:[0268]|9[079])|4(?:[049]|2[02-68]|[35]0|6[0-356]|8[014-9])|5(?:0|2[0-24-689]|4[0-2457-9]|6[057-9]|90)|6(?:[0-24578]|6[14-79]|9[03-9])|7(?:0[02-9]|2[0135-79]|3[23]|4[0-27-9]|6[1457]|8)|8(?:[046]|1[01459]|2[0-489]|50|8[0-2459]|9[09])|9(?:0[0457]|1[08]|[268]|4[024-9])|(?:34|85[23])[0-8]|(?:1|58)[1-9]|(?:63|95)[06-9]|(?:33|85[23]9)[0-46-9]|(?:10|2[0-57-9]|3(?:[157]\\d|35|49|9[1-68])|4(?:[17]\\d|2[179]|[35][1-9]|6[47-9]|8[23])|5(?:[1357]\\d|2[37]|4[36]|6[1-46]|80|9[1-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]\\d|2[248]|3[014-9]|4[3-6]|6[023689])|8(?:1[236-8]|2[5-7]|[37]\\d|5[14-9]|8[36-8]|9[1-8])|9(?:0[1-3689]|1[1-79]|[379]\\d|4[13]|5[1-5]))(?:[0-8]|9[0-47-9])", "26|3(?:[0268]|3[0-46-9]|4[0-8]|9[079])|4(?:[049]|2[02-68]|[35]0|6[0-356]|8[014-9])|5(?:0|2[0-24-689]|4[0-2457-9]|6[057-9]|90)|6(?:[0-24578]|3[06-9]|6[14-79]|9[03-9])|7(?:0[02-9]|2[0135-79]|3[23]|4[0-27-9]|6[1457]|8)|8(?:[046]|1[01459]|2[0-489]|5(?:0|[23](?:[02-8]|1[1-9]|9[0-46-9]))|8[0-2459]|9[09])|9(?:0[0457]|1[08]|[268]|4[024-9]|5[06-9])|(?:1|58|85[23]10)[1-9]|(?:10|2[0-57-9])(?:[0-8]|9[0-47-9])|(?:3(?:[157]\\d|35|49|9[1-68])|4(?:[17]\\d|2[179]|[35][1-9]|6[47-9]|8[23])|5(?:[1357]\\d|2[37]|4[36]|6[1-46]|80|9[1-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]\\d|2[248]|3[014-9]|4[3-6]|6[023689])|8(?:1[236-8]|2[5-7]|[37]\\d|5[14-9]|8[36-8]|9[1-8])|9(?:0[1-3689]|1[1-79]|[379]\\d|4[13]|5[1-5]))(?:[02-8]|1(?:0[1-9]|[1-9])|9[0-47-9])"]],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["(?:4|80)0"]],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3", ["10|2(?:[02-57-9]|1[1-9])", "10|2(?:[02-57-9]|1[1-9])", "10[0-79]|2(?:[02-57-9]|1[1-79])|(?:10|21)8(?:0[1-9]|[1-9])"], "0$1", "$CC $1", 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["3(?:[3-59]|7[02-68])|4(?:[26-8]|3[3-9]|5[2-9])|5(?:3[03-9]|[468]|7[028]|9[2-46-9])|6|7(?:[0-247]|3[04-9]|5[0-4689]|6[2368])|8(?:[1-358]|9[1-7])|9(?:[013479]|5[1-5])|(?:[34]1|55|79|87)[02-9]"], "0$1", "$CC $1", 1],
                        [, "(\\d{3})(\\d{7,8})", "$1 $2", ["9"]],
                        [, "(\\d{4})(\\d{3})(\\d{4})", "$1 $2 $3", ["80"], "0$1", "$CC $1", 1],
                        [, "(\\d{3})(\\d{4})(\\d{4})", "$1 $2 $3", ["[3-578]"], "0$1", "$CC $1", 1],
                        [, "(\\d{3})(\\d{4})(\\d{4})", "$1 $2 $3", ["1[3-9]"], , "$CC $1"],
                        [, "(\\d{2})(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3 $4", ["[12]"], "0$1", , 1]
                    ],
                    [
                        [, "(\\d{2})(\\d{5,6})", "$1 $2", ["(?:10|2[0-57-9])[19]", "(?:10|2[0-57-9])(?:10|9[56])", "(?:10|2[0-57-9])(?:100|9[56])"], "0$1", "$CC $1"],
                        [, "(\\d{3})(\\d{5,6})", "$1 $2", ["3(?:[157]|35|49|9[1-68])|4(?:[17]|2[179]|6[47-9]|8[23])|5(?:[1357]|2[37]|4[36]|6[1-46]|80)|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]|2[248]|3[014-9]|4[3-6]|6[023689])|8(?:1[236-8]|2[5-7]|[37]|8[36-8]|9[1-8])|9(?:0[1-3689]|1[1-79]|[379]|4[13]|5[1-5])|(?:4[35]|59|85)[1-9]", "(?:3(?:[157]\\d|35|49|9[1-68])|4(?:[17]\\d|2[179]|[35][1-9]|6[47-9]|8[23])|5(?:[1357]\\d|2[37]|4[36]|6[1-46]|80|9[1-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]\\d|2[248]|3[014-9]|4[3-6]|6[023689])|8(?:1[236-8]|2[5-7]|[37]\\d|5[1-9]|8[36-8]|9[1-8])|9(?:0[1-3689]|1[1-79]|[379]\\d|4[13]|5[1-5]))[19]", "85[23](?:10|95)|(?:3(?:[157]\\d|35|49|9[1-68])|4(?:[17]\\d|2[179]|[35][1-9]|6[47-9]|8[23])|5(?:[1357]\\d|2[37]|4[36]|6[1-46]|80|9[1-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]\\d|2[248]|3[014-9]|4[3-6]|6[023689])|8(?:1[236-8]|2[5-7]|[37]\\d|5[14-9]|8[36-8]|9[1-8])|9(?:0[1-3689]|1[1-79]|[379]\\d|4[13]|5[1-5]))(?:10|9[56])", "85[23](?:100|95)|(?:3(?:[157]\\d|35|49|9[1-68])|4(?:[17]\\d|2[179]|[35][1-9]|6[47-9]|8[23])|5(?:[1357]\\d|2[37]|4[36]|6[1-46]|80|9[1-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]\\d|2[248]|3[014-9]|4[3-6]|6[023689])|8(?:1[236-8]|2[5-7]|[37]\\d|5[14-9]|8[36-8]|9[1-8])|9(?:0[1-3689]|1[1-79]|[379]\\d|4[13]|5[1-5]))(?:100|9[56])"], "0$1", "$CC $1"],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["(?:4|80)0"]],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3", ["10|2(?:[02-57-9]|1[1-9])", "10|2(?:[02-57-9]|1[1-9])", "10[0-79]|2(?:[02-57-9]|1[1-79])|(?:10|21)8(?:0[1-9]|[1-9])"], "0$1", "$CC $1", 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["3(?:[3-59]|7[02-68])|4(?:[26-8]|3[3-9]|5[2-9])|5(?:3[03-9]|[468]|7[028]|9[2-46-9])|6|7(?:[0-247]|3[04-9]|5[0-4689]|6[2368])|8(?:[1-358]|9[1-7])|9(?:[013479]|5[1-5])|(?:[34]1|55|79|87)[02-9]"], "0$1", "$CC $1", 1],
                        [, "(\\d{3})(\\d{7,8})", "$1 $2", ["9"]],
                        [, "(\\d{4})(\\d{3})(\\d{4})", "$1 $2 $3", ["80"], "0$1", "$CC $1", 1],
                        [, "(\\d{3})(\\d{4})(\\d{4})", "$1 $2 $3", ["[3-578]"], "0$1", "$CC $1", 1],
                        [, "(\\d{3})(\\d{4})(\\d{4})", "$1 $2 $3", ["1[3-9]"], , "$CC $1"],
                        [, "(\\d{2})(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3 $4", ["[12]"], "0$1", , 1]
                    ],
                    [, , , , , , , , , [-1]], , , [, , "(?:(?:10|21)8|[48])00\\d{7}|950\\d{7,8}", , , , , , , [10, 11, 12]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CO: [, [, , "(?:1\\d|3)\\d{9}|[124-8]\\d{7}", , , , , , , [8, 10, 11],
                        [7]
                    ],
                    [, , "[124-8][2-9]\\d{6}", , , , "12345678", , , [8],
                        [7]
                    ],
                    [, , "3333(?:0(?:0\\d|1[0-5])|[4-9]\\d\\d)\\d{3}|33(?:00|3[0-24-9])\\d{6}|3(?:0[0-5]|1\\d|2[0-3]|5[01]|70)\\d{7}", , , , "3211234567", , , [10]],
                    [, , "1800\\d{7}", , , , "18001234567", , , [11]],
                    [, , "19(?:0[01]|4[78])\\d{7}", , , , "19001234567", , , [11]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "CO", 57, "00(?:4(?:[14]4|56)|[579])", "0", , , "0([3579]|4(?:[14]4|56))?", , , , [
                        [, "(\\d)(\\d{7})", "$1 $2", ["[14][2-9]|[25-8]"], "($1)", "0$CC $1"],
                        [, "(\\d{3})(\\d{7})", "$1 $2", ["3"], , "0$CC $1"],
                        [, "(\\d)(\\d{3})(\\d{7})", "$1-$2-$3", ["1"], "0$1"]
                    ],
                    [
                        [, "(\\d)(\\d{7})", "$1 $2", ["[14][2-9]|[25-8]"], "($1)", "0$CC $1"],
                        [, "(\\d{3})(\\d{7})", "$1 $2", ["3"], , "0$CC $1"],
                        [, "(\\d)(\\d{3})(\\d{7})", "$1 $2 $3", ["1"]]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CR: [, [, , "(?:8\\d|90)\\d{8}|[24-8]\\d{7}", , , , , , , [8, 10]],
                    [, , "210[7-9]\\d{4}|2(?:[024-7]\\d|1[1-9])\\d{5}", , , , "22123456", , , [8]],
                    [, , "6500[01]\\d{3}|5(?:0[01]|7[0-3])\\d{5}|(?:6[0-4]|7[0-3]|8[3-9])\\d{6}", , , , "83123456", , , [8]],
                    [, , "800\\d{7}", , , , "8001234567", , , [10]],
                    [, , "90[059]\\d{7}", , , , "9001234567", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "(?:210[0-6]|4\\d{3}|5100)\\d{4}", , , , "40001234", , , [8]], "CR", 506, "00", , , , "(19(?:0[0-2468]|1[09]|20|66|77|99))", , , , [
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[24-7]|8[3-9]"], , "$CC $1"],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1-$2-$3", ["[89]"], , "$CC $1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CU: [, [, , "[27]\\d{6,7}|[34]\\d{5,7}|(?:5|8\\d\\d)\\d{7}", , , , , , , [6, 7, 8, 10],
                        [4, 5]
                    ],
                    [, , "(?:3[23]|48)\\d{4,6}|(?:31|4[36]|8(?:0[25]|78)\\d)\\d{6}|(?:2[1-4]|4[1257]|7\\d)\\d{5,6}", , , , "71234567", , , , [4, 5]],
                    [, , "5\\d{7}", , , , "51234567", , , [8]],
                    [, , "800\\d{7}", , , , "8001234567", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , "807\\d{7}", , , , "8071234567", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "CU", 53, "119", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{4,6})", "$1 $2", ["2[1-4]|[34]"], "(0$1)"],
                        [, "(\\d)(\\d{6,7})", "$1 $2", ["7"], "(0$1)"],
                        [, "(\\d)(\\d{7})", "$1 $2", ["5"], "0$1"],
                        [, "(\\d{3})(\\d{7})", "$1 $2", ["8"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CV: [, [, , "(?:[2-59]\\d\\d|800)\\d{4}", , , , , , , [7]],
                    [, , "2(?:2[1-7]|3[0-8]|4[12]|5[1256]|6\\d|7[1-3]|8[1-5])\\d{4}", , , , "2211234"],
                    [, , "(?:[34][36]|5[1-389]|9\\d)\\d{5}", , , , "9911234"],
                    [, , "800\\d{4}", , , , "8001234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "CV", 238, "0", , , , , , , , [
                        [, "(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3", ["[2-589]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CW: [, [, , "(?:[34]1|60|(?:7|9\\d)\\d)\\d{5}", , , , , , , [7, 8]],
                    [, , "9(?:4(?:3[0-5]|4[14]|6\\d)|50\\d|7(?:2[014]|3[02-9]|4[4-9]|6[357]|77|8[7-9])|8(?:3[39]|[46]\\d|7[01]|8[57-9]))\\d{4}", , , , "94351234"],
                    [, , "953[01]\\d{4}|9(?:5[12467]|6[5-9])\\d{5}", , , , "95181234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "60[0-2]\\d{4}", , , , "6001234", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "CW", 599, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[3467]"]],
                        [, "(\\d)(\\d{3})(\\d{4})", "$1 $2 $3", ["9[4-8]"]]
                    ], , [, , "955\\d{5}", , , , "95581234", , , [8]], 1, "[69]", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CX: [, [, , "1(?:[0-79]\\d|8[0-24-9])\\d{7}|(?:[148]\\d\\d|550)\\d{6}|1\\d{5,7}", , , , , , , [6, 7, 8, 9, 10]],
                    [, , "8(?:51(?:0(?:01|30|59)|117)|91(?:00[6-9]|1(?:[28]1|49|78)|2(?:09|63)|3(?:12|26|75)|4(?:56|97)|64\\d|7(?:0[01]|1[0-2])|958))\\d{3}", , , , "891641234", , , [9],
                        [8]
                    ],
                    [, , "483[0-3]\\d{5}|4(?:[0-3]\\d|4[047-9]|5[0-25-9]|6[06-9]|7[02-9]|8[0-2457-9]|9[0-27-9])\\d{6}", , , , "412345678", , , [9]],
                    [, , "180(?:0\\d{3}|2)\\d{3}", , , , "1800123456", , , [7, 10]],
                    [, , "190[0-26]\\d{6}", , , , "1900123456", , , [10]],
                    [, , "13(?:00\\d{3}|45[0-4])\\d{3}|13\\d{4}", , , , "1300123456", , , [6, 8, 10]],
                    [, , , , , , , , , [-1]],
                    [, , "(?:14(?:5(?:1[0458]|[23][458])|71\\d)|550\\d\\d)\\d{4}", , , , "550123456", , , [9]], "CX", 61, "001[14-689]|14(?:1[14]|34|4[17]|[56]6|7[47]|88)0011", "0", , , "0|([59]\\d{7})$", "8$1", "0011", , , , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                CY: [, [, , "(?:[279]\\d|[58]0)\\d{6}", , , , , , , [8]],
                    [, , "2[2-6]\\d{6}", , , , "22345678"],
                    [, , "9[4-79]\\d{6}", , , , "96123456"],
                    [, , "800\\d{5}", , , , "80001234"],
                    [, , "90[09]\\d{5}", , , , "90012345"],
                    [, , "80[1-9]\\d{5}", , , , "80112345"],
                    [, , "700\\d{5}", , , , "70012345"],
                    [, , , , , , , , , [-1]], "CY", 357, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{6})", "$1 $2", ["[257-9]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "(?:50|77)\\d{6}", , , , "77123456"], , , [, , , , , , , , , [-1]]
                ],
                CZ: [, [, , "(?:[2-578]\\d|60)\\d{7}|9\\d{8,11}", , , , , , , [9, 10, 11, 12]],
                    [, , "(?:2\\d|3[1257-9]|4[16-9]|5[13-9])\\d{7}", , , , "212345678", , , [9]],
                    [, , "(?:60[1-8]|7(?:0[2-5]|[2379]\\d))\\d{6}", , , , "601123456", , , [9]],
                    [, , "800\\d{6}", , , , "800123456", , , [9]],
                    [, , "9(?:0[05689]|76)\\d{6}", , , , "900123456", , , [9]],
                    [, , "8[134]\\d{7}", , , , "811234567", , , [9]],
                    [, , "70[01]\\d{6}", , , , "700123456", , , [9]],
                    [, , "9[17]0\\d{6}", , , , "910123456", , , [9]], "CZ", 420, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[2-8]|9[015-7]"]],
                        [, "(\\d{2})(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3 $4", ["9"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3 $4", ["9"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "9(?:5\\d|7[2-4])\\d{6}", , , , "972123456", , , [9]], , , [, , "9(?:3\\d{9}|6\\d{7,10})", , , , "93123456789"]
                ],
                DE: [, [, , "[2579]\\d{5,14}|49(?:[05]\\d{10}|[46][1-8]\\d{4,9})|49(?:[0-25]\\d|3[1-689]|7[1-7])\\d{4,8}|49(?:[0-2579]\\d|[34][1-9]|6[0-8])\\d{3}|49\\d{3,4}|(?:1|[368]\\d|4[0-8])\\d{3,13}", , , , , , , [4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
                        [2, 3]
                    ],
                    [, , "(?:32|49[4-6]\\d)\\d{9}|49[0-7]\\d{3,9}|(?:[34]0|[68]9)\\d{3,13}|(?:2(?:0[1-689]|[1-3569]\\d|4[0-8]|7[1-7]|8[0-7])|3(?:[3569]\\d|4[0-79]|7[1-7]|8[1-8])|4(?:1[02-9]|[2-48]\\d|5[0-6]|6[0-8]|7[0-79])|5(?:0[2-8]|[124-6]\\d|[38][0-8]|[79][0-7])|6(?:0[02-9]|[1-358]\\d|[47][0-8]|6[1-9])|7(?:0[2-8]|1[1-9]|[27][0-7]|3\\d|[4-6][0-8]|8[0-5]|9[013-7])|8(?:0[2-9]|1[0-79]|2\\d|3[0-46-9]|4[0-6]|5[013-9]|6[1-8]|7[0-8]|8[0-24-6])|9(?:0[6-9]|[1-4]\\d|[589][0-7]|6[0-8]|7[0-467]))\\d{3,12}", , , , "30123456", , , [5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
                        [2, 3, 4]
                    ],
                    [, , "15[0-25-9]\\d{8}|1(?:6[023]|7\\d)\\d{7,8}", , , , "15123456789", , , [10, 11]],
                    [, , "800\\d{7,12}", , , , "8001234567890", , , [10, 11, 12, 13, 14, 15]],
                    [, , "(?:137[7-9]|900(?:[135]|9\\d))\\d{6}", , , , "9001234567", , , [10, 11]],
                    [, , "180\\d{5,11}|13(?:7[1-6]\\d\\d|8)\\d{4}", , , , "18012345", , , [7, 8, 9, 10, 11, 12, 13, 14]],
                    [, , "700\\d{8}", , , , "70012345678", , , [11]],
                    [, , , , , , , , , [-1]], "DE", 49, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{3,13})", "$1 $2", ["3[02]|40|[68]9"], "0$1"],
                        [, "(\\d{3})(\\d{3,12})", "$1 $2", ["2(?:0[1-389]|1[124]|2[18]|3[14])|3(?:[35-9][15]|4[015])|906|(?:2[4-9]|4[2-9]|[579][1-9]|[68][1-8])1", "2(?:0[1-389]|12[0-8])|3(?:[35-9][15]|4[015])|906|2(?:[13][14]|2[18])|(?:2[4-9]|4[2-9]|[579][1-9]|[68][1-8])1"], "0$1"],
                        [, "(\\d{4})(\\d{2,11})", "$1 $2", ["[24-6]|3(?:[3569][02-46-9]|4[2-4679]|7[2-467]|8[2-46-8])|70[2-8]|8(?:0[2-9]|[1-8])|90[7-9]|[79][1-9]", "[24-6]|3(?:3(?:0[1-467]|2[127-9]|3[124578]|7[1257-9]|8[1256]|9[145])|4(?:2[135]|4[13578]|9[1346])|5(?:0[14]|2[1-3589]|6[1-4]|7[13468]|8[13568])|6(?:2[1-489]|3[124-6]|6[13]|7[12579]|8[1-356]|9[135])|7(?:2[1-7]|4[145]|6[1-5]|7[1-4])|8(?:21|3[1468]|6|7[1467]|8[136])|9(?:0[12479]|2[1358]|4[134679]|6[1-9]|7[136]|8[147]|9[1468]))|70[2-8]|8(?:0[2-9]|[1-8])|90[7-9]|[79][1-9]|3[68]4[1347]|3(?:47|60)[1356]|3(?:3[46]|46|5[49])[1246]|3[4579]3[1357]"], "0$1"],
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["138"], "0$1"],
                        [, "(\\d{5})(\\d{2,10})", "$1 $2", ["3"], "0$1"],
                        [, "(\\d{3})(\\d{5,11})", "$1 $2", ["181"], "0$1"],
                        [, "(\\d{3})(\\d)(\\d{4,10})", "$1 $2 $3", ["1(?:3|80)|9"], "0$1"],
                        [, "(\\d{3})(\\d{7,8})", "$1 $2", ["1[67]"], "0$1"],
                        [, "(\\d{3})(\\d{7,12})", "$1 $2", ["8"], "0$1"],
                        [, "(\\d{5})(\\d{6})", "$1 $2", ["185", "1850", "18500"], "0$1"],
                        [, "(\\d{3})(\\d{4})(\\d{4})", "$1 $2 $3", ["7"], "0$1"],
                        [, "(\\d{4})(\\d{7})", "$1 $2", ["18[68]"], "0$1"],
                        [, "(\\d{5})(\\d{6})", "$1 $2", ["15[0568]"], "0$1"],
                        [, "(\\d{4})(\\d{7})", "$1 $2", ["15[1279]"], "0$1"],
                        [, "(\\d{3})(\\d{8})", "$1 $2", ["18"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{7,8})", "$1 $2 $3", ["1(?:6[023]|7)"], "0$1"],
                        [, "(\\d{4})(\\d{2})(\\d{7})", "$1 $2 $3", ["15[279]"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{8})", "$1 $2 $3", ["15"], "0$1"]
                    ], , [, , "16(?:4\\d{1,10}|[89]\\d{1,11})", , , , "16412345", , , [4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]], , , [, , , , , , , , , [-1]],
                    [, , "18(?:1\\d{5,11}|[2-9]\\d{8})", , , , "18500123456", , , [8, 9, 10, 11, 12, 13, 14]], , , [, , "1(?:6(?:013|255|399)|7(?:(?:[015]1|[69]3)3|[2-4]55|[78]99))\\d{7,8}|15(?:(?:[03-68]00|113)\\d|2\\d55|7\\d99|9\\d33)\\d{7}", , , , "177991234567", , , [12, 13]]
                ],
                DJ: [, [, , "(?:2\\d|77)\\d{6}", , , , , , , [8]],
                    [, , "2(?:1[2-5]|7[45])\\d{5}", , , , "21360003"],
                    [, , "77\\d{6}", , , , "77831001"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "DJ", 253, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[27]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                DK: [, [, , "[2-9]\\d{7}", , , , , , , [8]],
                    [, , "(?:[2-7]\\d|8[126-9]|9[1-46-9])\\d{6}", , , , "32123456"],
                    [, , "(?:[2-7]\\d|8[126-9]|9[1-46-9])\\d{6}", , , , "32123456"],
                    [, , "80\\d{6}", , , , "80123456"],
                    [, , "90\\d{6}", , , , "90123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "DK", 45, "00", , , , , , , 1, [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[2-9]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                DM: [, [, , "(?:[58]\\d\\d|767|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "767(?:2(?:55|66)|4(?:2[01]|4[0-25-9])|50[0-4]|70[1-3])\\d{4}", , , , "7674201234", , , , [7]],
                    [, , "767(?:2(?:[2-4689]5|7[5-7])|31[5-7]|61[1-7])\\d{4}", , , , "7672251234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "DM", 1, "011", "1", , , "1|([2-7]\\d{6})$", "767$1", , , , , [, , , , , , , , , [-1]], , "767", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                DO: [, [, , "(?:[58]\\d\\d|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "8(?:[04]9[2-9]\\d\\d|29(?:2(?:[0-59]\\d|6[04-9]|7[0-27]|8[0237-9])|3(?:[0-35-9]\\d|4[7-9])|[45]\\d\\d|6(?:[0-27-9]\\d|[3-5][1-9]|6[0135-8])|7(?:0[013-9]|[1-37]\\d|4[1-35689]|5[1-4689]|6[1-57-9]|8[1-79]|9[1-8])|8(?:0[146-9]|1[0-48]|[248]\\d|3[1-79]|5[01589]|6[013-68]|7[124-8]|9[0-8])|9(?:[0-24]\\d|3[02-46-9]|5[0-79]|60|7[0169]|8[57-9]|9[02-9])))\\d{4}", , , , "8092345678", , , , [7]],
                    [, , "8[024]9[2-9]\\d{6}", , , , "8092345678", , , , [7]],
                    [, , "8(?:00(?:14|[2-9]\\d)|(?:33|44|55|66|77|88)[2-9]\\d)\\d{5}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "DO", 1, "011", "1", , , "1", , , , , , [, , , , , , , , , [-1]], , "8001|8[024]9", [, , "80014\\d{5}"],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                DZ: [, [, , "(?:[1-4]|[5-79]\\d|80)\\d{7}", , , , , , , [8, 9]],
                    [, , "9619\\d{5}|(?:1\\d|2[013-79]|3[0-8]|4[0135689])\\d{6}", , , , "12345678"],
                    [, , "67[0-6]\\d{6}|(?:5[4-6]|6[569]|7[7-9])\\d{7}", , , , "551234567", , , [9]],
                    [, , "800\\d{6}", , , , "800123456", , , [9]],
                    [, , "80[3-689]1\\d{5}", , , , "808123456", , , [9]],
                    [, , "80[12]1\\d{5}", , , , "801123456", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , "98[23]\\d{6}", , , , "983123456", , , [9]], "DZ", 213, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[1-4]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["9"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[5-8]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                EC: [, [, , "1800\\d{6,7}|(?:[2-7]|9\\d)\\d{7}", , , , , , , [8, 9, 10, 11],
                        [7]
                    ],
                    [, , "[2-7][2-7]\\d{6}", , , , "22123456", , , [8],
                        [7]
                    ],
                    [, , "964[0-2]\\d{5}|9(?:39|[57][89]|6[0-37-9]|[89]\\d)\\d{6}", , , , "991234567", , , [9]],
                    [, , "1800\\d{6,7}", , , , "18001234567", , , [10, 11]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "[2-7]890\\d{4}", , , , "28901234", , , [8]], "EC", 593, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{4})", "$1-$2", ["[2-7]"]],
                        [, "(\\d)(\\d{3})(\\d{4})", "$1 $2-$3", ["[2-7]"], "(0$1)"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["9"], "0$1"],
                        [, "(\\d{4})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["1"]]
                    ],
                    [
                        [, "(\\d)(\\d{3})(\\d{4})", "$1-$2-$3", ["[2-7]"]],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["9"], "0$1"],
                        [, "(\\d{4})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["1"]]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                EE: [, [, , "8\\d{9}|[4578]\\d{7}|(?:[3-8]\\d\\d|900)\\d{4}", , , , , , , [7, 8, 10]],
                    [, , "(?:3[23589]|4[3-8]|6\\d|7[1-9]|88)\\d{5}", , , , "3212345", , , [7]],
                    [, , "(?:5\\d|8[1-4])\\d{6}|5(?:(?:[02]\\d|5[0-478])\\d|1(?:[0-8]\\d|95)|6(?:4[0-4]|5[1-589]))\\d{3}", , , , "51234567", , , [7, 8]],
                    [, , "800(?:(?:0\\d\\d|1)\\d|[2-9])\\d{3}", , , , "80012345"],
                    [, , "(?:40\\d\\d|900)\\d{4}", , , , "9001234", , , [7, 8]],
                    [, , , , , , , , , [-1]],
                    [, , "70[0-2]\\d{5}", , , , "70012345", , , [8]],
                    [, , , , , , , , , [-1]], "EE", 372, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[369]|4[3-8]|5(?:[0-2]|5[0-478]|6[45])|7[1-9]", "[369]|4[3-8]|5(?:[02]|1(?:[0-8]|95)|5[0-478]|6(?:4[0-4]|5[1-589]))|7[1-9]"]],
                        [, "(\\d{4})(\\d{3,4})", "$1 $2", ["[45]|8(?:00|[1-4])", "[45]|8(?:00[1-9]|[1-4])"]],
                        [, "(\\d{2})(\\d{2})(\\d{4})", "$1 $2 $3", ["7"]],
                        [, "(\\d{4})(\\d{3})(\\d{3})", "$1 $2 $3", ["80"]]
                    ], , [, , , , , , , , , [-1]], , , [, , "800[2-9]\\d{3}", , , , , , , [7]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                EG: [, [, , "[189]\\d{8,9}|[24-6]\\d{8}|[135]\\d{7}", , , , , , , [8, 9, 10],
                        [6, 7]
                    ],
                    [, , "(?:15\\d|57[23])\\d{5,6}|(?:13[23]|(?:2[2-4]|3)\\d|4(?:0[2-5]|[578][23]|64)|5(?:0[2-7]|5\\d)|6[24-689]3|8(?:2[2-57]|4[26]|6[237]|8[2-4])|9(?:2[27]|3[24]|52|6[2356]|7[2-4]))\\d{6}", , , , "234567890", , , [8, 9],
                        [6, 7]
                    ],
                    [, , "1[0-25]\\d{8}", , , , "1001234567", , , [10]],
                    [, , "800\\d{7}", , , , "8001234567", , , [10]],
                    [, , "900\\d{7}", , , , "9001234567", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "EG", 20, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{7,8})", "$1 $2", ["[23]"], "0$1"],
                        [, "(\\d{2})(\\d{6,7})", "$1 $2", ["1[35]|[4-6]|8[2468]|9[235-7]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["[189]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                EH: [, [, , "[5-8]\\d{8}", , , , , , , [9]],
                    [, , "528[89]\\d{5}", , , , "528812345"],
                    [, , "(?:6(?:[0-79]\\d|8[0-247-9])|7(?:0[06-8]|6[1267]|7[0-27]))\\d{6}", , , , "650123456"],
                    [, , "80\\d{7}", , , , "801234567"],
                    [, , "89\\d{7}", , , , "891234567"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "592(?:4[0-2]|93)\\d{4}", , , , "592401234"], "EH", 212, "00", "0", , , "0", , , , , , [, , , , , , , , , [-1]], , "528[89]", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                ER: [, [, , "[178]\\d{6}", , , , , , , [7],
                        [6]
                    ],
                    [, , "(?:1(?:1[12568]|[24]0|55|6[146])|8\\d\\d)\\d{4}", , , , "8370362", , , , [6]],
                    [, , "(?:17[1-3]|7\\d\\d)\\d{4}", , , , "7123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "ER", 291, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{3})(\\d{3})", "$1 $2 $3", ["[178]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                ES: [, [, , "(?:51|[6-9]\\d)\\d{7}", , , , , , , [9]],
                    [, , "96906(?:0[0-8]|1[1-9]|[2-9]\\d)\\d\\d|9(?:69(?:0[0-57-9]|[1-9]\\d)|73(?:[0-8]\\d|9[1-9]))\\d{4}|(?:8(?:[1356]\\d|[28][0-8]|[47][1-9])|9(?:[135]\\d|[268][0-8]|4[1-9]|7[124-9]))\\d{6}", , , , "810123456"],
                    [, , "9(?:6906(?:09|10)|7390\\d\\d)\\d\\d|(?:6\\d|7[1-48])\\d{7}", , , , "612345678"],
                    [, , "[89]00\\d{6}", , , , "800123456"],
                    [, , "80[367]\\d{6}", , , , "803123456"],
                    [, , "90[12]\\d{6}", , , , "901123456"],
                    [, , "70\\d{7}", , , , "701234567"],
                    [, , , , , , , , , [-1]], "ES", 34, "00", , , , , , , , [
                        [, "(\\d{4})", "$1", ["905"]],
                        [, "(\\d{6})", "$1", ["[79]9"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[89]00"]],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[5-9]"]]
                    ],
                    [
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[89]00"]],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[5-9]"]]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "51\\d{7}", , , , "511234567"], , , [, , , , , , , , , [-1]]
                ],
                ET: [, [, , "(?:11|[2-59]\\d)\\d{7}", , , , , , , [9],
                        [7]
                    ],
                    [, , "(?:11(?:1(?:1[124]|2[2-57]|3[1-5]|5[5-8]|8[6-8])|2(?:13|3[6-8]|5[89]|7[05-9]|8[2-6])|3(?:2[01]|3[0-289]|4[1289]|7[1-4]|87)|4(?:1[69]|3[2-49]|4[0-3]|6[5-8])|5(?:1[578]|44|5[0-4])|6(?:1[78]|2[69]|39|4[5-7]|5[1-5]|6[0-59]|8[015-8]))|2(?:2(?:11[1-9]|22[0-7]|33\\d|44[1467]|66[1-68])|5(?:11[124-6]|33[2-8]|44[1467]|55[14]|66[1-3679]|77[124-79]|880))|3(?:3(?:11[0-46-8]|(?:22|55)[0-6]|33[0134689]|44[04]|66[01467])|4(?:44[0-8]|55[0-69]|66[0-3]|77[1-5]))|4(?:6(?:119|22[0-24-7]|33[1-5]|44[13-69]|55[14-689]|660|88[1-4])|7(?:(?:11|22)[1-9]|33[13-7]|44[13-6]|55[1-689]))|5(?:7(?:227|55[05]|(?:66|77)[14-8])|8(?:11[149]|22[013-79]|33[0-68]|44[013-8]|550|66[1-5]|77\\d)))\\d{4}", , , , "111112345", , , , [7]],
                    [, , "9\\d{8}", , , , "911234567"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "ET", 251, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[1-59]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                FI: [, [, , "[1-35689]\\d{4}|7\\d{10,11}|(?:[124-7]\\d|3[0-46-9])\\d{8}|[1-9]\\d{5,8}", , , , , , , [5, 6, 7, 8, 9, 10, 11, 12]],
                    [, , "(?:1[3-79][1-8]|[235689][1-8]\\d)\\d{2,6}", , , , "131234567", , , [5, 6, 7, 8, 9]],
                    [, , "(?:4[0-8]|50)\\d{4,8}", , , , "412345678", , , [6, 7, 8, 9, 10]],
                    [, , "800\\d{4,6}", , , , "800123456", , , [7, 8, 9]],
                    [, , "[67]00\\d{5,6}", , , , "600123456", , , [8, 9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "FI", 358, "00|99(?:[01469]|5(?:[14]1|3[23]|5[59]|77|88|9[09]))", "0", , , "0", , "00", , [
                        [, "(\\d{5})", "$1", ["75[12]"], "0$1"],
                        [, "(\\d)(\\d{4,9})", "$1 $2", ["[2568][1-8]|3(?:0[1-9]|[1-9])|9"], "0$1"],
                        [, "(\\d{6})", "$1", ["11"]],
                        [, "(\\d{3})(\\d{3,7})", "$1 $2", ["[12]00|[368]|70[07-9]"], "0$1"],
                        [, "(\\d{2})(\\d{4,8})", "$1 $2", ["[1245]|7[135]"], "0$1"],
                        [, "(\\d{2})(\\d{6,10})", "$1 $2", ["7"], "0$1"]
                    ],
                    [
                        [, "(\\d)(\\d{4,9})", "$1 $2", ["[2568][1-8]|3(?:0[1-9]|[1-9])|9"], "0$1"],
                        [, "(\\d{3})(\\d{3,7})", "$1 $2", ["[12]00|[368]|70[07-9]"], "0$1"],
                        [, "(\\d{2})(\\d{4,8})", "$1 $2", ["[1245]|7[135]"], "0$1"],
                        [, "(\\d{2})(\\d{6,10})", "$1 $2", ["7"], "0$1"]
                    ],
                    [, , , , , , , , , [-1]], 1, "1[03-79]|[2-9]", [, , "20(?:2[023]|9[89])\\d{1,6}|(?:60[12]\\d|7099)\\d{4,5}|(?:606|7(?:0[78]|1|3\\d))\\d{7}|(?:[1-3]00|7(?:0[1-5]\\d\\d|5[03-9]))\\d{3,7}"],
                    [, , "20\\d{4,8}|60[12]\\d{5,6}|7(?:099\\d{4,5}|5[03-9]\\d{3,7})|20[2-59]\\d\\d|(?:606|7(?:0[78]|1|3\\d))\\d{7}|(?:10|29|3[09]|70[1-5]\\d)\\d{4,8}", , , , "10112345"], , , [, , , , , , , , , [-1]]
                ],
                FJ: [, [, , "45\\d{5}|(?:0800\\d|[235-9])\\d{6}", , , , , , , [7, 11]],
                    [, , "603\\d{4}|(?:3[0-5]|6[25-7]|8[58])\\d{5}", , , , "3212345", , , [7]],
                    [, , "(?:[279]\\d|45|5[01568]|8[034679])\\d{5}", , , , "7012345", , , [7]],
                    [, , "0800\\d{7}", , , , "08001234567", , , [11]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "FJ", 679, "0(?:0|52)", , , , , , "00", , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[235-9]|45"]],
                        [, "(\\d{4})(\\d{3})(\\d{4})", "$1 $2 $3", ["0"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                FK: [, [, , "[2-7]\\d{4}", , , , , , , [5]],
                    [, , "[2-47]\\d{4}", , , , "31234"],
                    [, , "[56]\\d{4}", , , , "51234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "FK", 500, "00", , , , , , , , , , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                FM: [, [, , "[39]\\d{6}", , , , , , , [7]],
                    [, , "(?:3[2357]0[1-9]|9[2-6]\\d\\d)\\d{3}", , , , "3201234"],
                    [, , "(?:3[2357]0[1-9]|9[2-7]\\d\\d)\\d{3}", , , , "3501234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "FM", 691, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[39]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                FO: [, [, , "(?:[2-8]\\d|90)\\d{4}", , , , , , , [6]],
                    [, , "(?:20|[34]\\d|8[19])\\d{4}", , , , "201234"],
                    [, , "(?:[27][1-9]|5\\d)\\d{4}", , , , "211234"],
                    [, , "80[257-9]\\d{3}", , , , "802123"],
                    [, , "90(?:[13-5][15-7]|2[125-7]|99)\\d\\d", , , , "901123"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "(?:6[0-36]|88)\\d{4}", , , , "601234"], "FO", 298, "00", , , , "(10(?:01|[12]0|88))", , , , [
                        [, "(\\d{6})", "$1", ["[2-9]"], , "$CC $1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                FR: [, [, , "[1-9]\\d{8}", , , , , , , [9]],
                    [, , "[1-5]\\d{8}", , , , "123456789"],
                    [, , "700\\d{6}|(?:6\\d|7[3-9])\\d{7}", , , , "612345678"],
                    [, , "80[0-5]\\d{6}", , , , "801234567"],
                    [, , "8(?:1[2-9]|2[2-47-9]|9\\d)\\d{6}", , , , "891123456"],
                    [, , "8(?:1[01]|2[0156]|84)\\d{6}", , , , "884012345"],
                    [, , , , , , , , , [-1]],
                    [, , "9\\d{8}", , , , "912345678"], "FR", 33, "00", "0", , , "0", , , , [
                        [, "(\\d{4})", "$1", ["10"]],
                        [, "(\\d{3})(\\d{3})", "$1 $2", ["1"]],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["8"], "0 $1"],
                        [, "(\\d)(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4 $5", ["[1-79]"], "0$1"]
                    ],
                    [
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["8"], "0 $1"],
                        [, "(\\d)(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4 $5", ["[1-79]"], "0$1"]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "80[6-9]\\d{6}", , , , "806123456"], , , [, , , , , , , , , [-1]]
                ],
                GA: [, [, , "(?:[067]\\d|11)\\d{6}|[2-7]\\d{6}", , , , , , , [7, 8]],
                    [, , "[01]1\\d{6}", , , , "01441234", , , [8]],
                    [, , "(?:0[2-7]|6[256]|7[47])\\d{6}|[2-7]\\d{6}", , , , "06031234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "GA", 241, "00", , , , , , , , [
                        [, "(\\d)(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[2-7]"], "0$1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["11|[67]"], "0$1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["0"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GB: [, [, , "[1-357-9]\\d{9}|[18]\\d{8}|8\\d{6}", , , , , , , [7, 9, 10],
                        [4, 5, 6, 8]
                    ],
                    [, , "(?:1(?:(?:1(?:3[0-58]|4[0-5]|5[0-26-9]|6[0-4]|[78][0-49])|3(?:0\\d|1[0-8]|[25][02-9]|3[02-579]|[468][0-46-9]|7[1-35-79]|9[2-578])|4(?:0[03-9]|[137]\\d|[28][02-57-9]|4[02-69]|5[0-8]|[69][0-79])|5(?:0[1-35-9]|[16]\\d|2[024-9]|3[015689]|4[02-9]|5[03-9]|7[0-35-9]|8[0-468]|9[0-57-9])|6(?:0[034689]|1\\d|2[0-35689]|[38][013-9]|4[1-467]|5[0-69]|6[13-9]|7[0-8]|9[0-24578])|7(?:0[0246-9]|2\\d|3[0236-8]|4[03-9]|5[0-46-9]|6[013-9]|7[0-35-9]|8[024-9]|9[02-9])|8(?:0[35-9]|2[1-57-9]|3[02-578]|4[0-578]|5[124-9]|6[2-69]|7\\d|8[02-9]|9[02569])|9(?:0[02-589]|[18]\\d|2[02-689]|3[1-57-9]|4[2-9]|5[0-579]|6[2-47-9]|7[0-24578]|9[2-57]))\\d\\d|2(?:(?:0[024-9]|2[3-9]|3[3-79]|4[1-689]|[58][02-9]|6[0-47-9]|7[013-9]|9\\d)\\d\\d|1(?:[0-7]\\d\\d|80[04589])))|2(?:0[01378]|3[0189]|4[017]|8[0-46-9]|9[0-2])\\d{3})\\d{4}|1(?:2(?:0(?:46[1-4]|87[2-9])|545[1-79]|76(?:2\\d|3[1-8]|6[1-6])|9(?:7(?:2[0-4]|3[2-5])|8(?:2[2-8]|7[0-47-9]|8[3-5])))|3(?:6(?:38[2-5]|47[23])|8(?:47[04-9]|64[0157-9]))|4(?:044[1-7]|20(?:2[23]|8\\d)|6(?:0(?:30|5[2-57]|6[1-8]|7[2-8])|140)|8(?:052|87[1-3]))|5(?:2(?:4(?:3[2-79]|6\\d)|76\\d)|6(?:26[06-9]|686))|6(?:06(?:4\\d|7[4-79])|295[5-7]|35[34]\\d|47(?:24|61)|59(?:5[08]|6[67]|74)|9(?:55[0-4]|77[23]))|7(?:26(?:6[13-9]|7[0-7])|(?:442|688)\\d|50(?:2[0-3]|[3-68]2|76))|8(?:27[56]\\d|37(?:5[2-5]|8[239])|843[2-58])|9(?:0(?:0(?:6[1-8]|85)|52\\d)|3583|4(?:66[1-8]|9(?:2[01]|81))|63(?:23|3[1-4])|9561))\\d{3}", , , , "1212345678", , , [9, 10],
                        [4, 5, 6, 7, 8]
                    ],
                    [, , "7(?:457[0-57-9]|700[01]|911[028])\\d{5}|7(?:[1-3]\\d\\d|4(?:[0-46-9]\\d|5[0-689])|5(?:0[0-8]|[13-9]\\d|2[0-35-9])|7(?:0[1-9]|[1-7]\\d|8[02-9]|9[0-689])|8(?:[014-9]\\d|[23][0-8])|9(?:[024-9]\\d|1[02-9]|3[0-689]))\\d{6}", , , , "7400123456", , , [10]],
                    [, , "80[08]\\d{7}|800\\d{6}|8001111", , , , "8001234567"],
                    [, , "(?:8(?:4[2-5]|7[0-3])|9(?:[01]\\d|8[2-49]))\\d{7}|845464\\d", , , , "9012345678", , , [7, 10]],
                    [, , , , , , , , , [-1]],
                    [, , "70\\d{8}", , , , "7012345678", , , [10]],
                    [, , "56\\d{8}", , , , "5612345678", , , [10]], "GB", 44, "00", "0", " x", , "0", , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["800", "8001", "80011", "800111", "8001111"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3", ["845", "8454", "84546", "845464"], "0$1"],
                        [, "(\\d{3})(\\d{6})", "$1 $2", ["800"], "0$1"],
                        [, "(\\d{5})(\\d{4,5})", "$1 $2", ["1(?:38|5[23]|69|76|94)", "1(?:(?:38|69)7|5(?:24|39)|768|946)", "1(?:3873|5(?:242|39[4-6])|(?:697|768)[347]|9467)"], "0$1"],
                        [, "(\\d{4})(\\d{5,6})", "$1 $2", ["1(?:[2-69][02-9]|[78])"], "0$1"],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3", ["[25]|7(?:0|6[024-9])", "[25]|7(?:0|6(?:[04-9]|2[356]))"], "0$1"],
                        [, "(\\d{4})(\\d{6})", "$1 $2", ["7"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["[1389]"], "0$1"]
                    ], , [, , "76(?:0[0-2]|2[356]|4[0134]|5[49]|6[0-369]|77|81|9[39])\\d{6}", , , , "7640123456", , , [10]], 1, , [, , , , , , , , , [-1]],
                    [, , "(?:3[0347]|55)\\d{8}", , , , "5512345678", , , [10]], , , [, , , , , , , , , [-1]]
                ],
                GD: [, [, , "(?:473|[58]\\d\\d|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "473(?:2(?:3[0-2]|69)|3(?:2[89]|86)|4(?:[06]8|3[5-9]|4[0-49]|5[5-79]|73|90)|63[68]|7(?:58|84)|800|938)\\d{4}", , , , "4732691234", , , , [7]],
                    [, , "473(?:4(?:0[2-79]|1[04-9]|2[0-5]|58)|5(?:2[01]|3[3-8])|901)\\d{4}", , , , "4734031234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "GD", 1, "011", "1", , , "1|([2-9]\\d{6})$", "473$1", , , , , [, , , , , , , , , [-1]], , "473", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GE: [, [, , "(?:[3-57]\\d\\d|800)\\d{6}", , , , , , , [9],
                        [6, 7]
                    ],
                    [, , "(?:3(?:[256]\\d|4[124-9]|7[0-4])|4(?:1\\d|2[2-7]|3[1-79]|4[2-8]|7[239]|9[1-7]))\\d{6}", , , , "322123456", , , , [6, 7]],
                    [, , "5(?:0(?:0[05]|55)\\d|1111|2222|3333|5200|75(?:00|7[78])|8(?:58[89]|888))\\d{4}|(?:5(?:[14]4|5[0157-9]|68|7[0147-9]|9[1-35-9])|790)\\d{6}", , , , "555123456"],
                    [, , "800\\d{6}", , , , "800123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "706\\d{6}", , , , "706123456"], "GE", 995, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["70"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["32"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[57]"]],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[348]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , "706\\d{6}"],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GF: [, [, , "(?:[56]94|976)\\d{6}", , , , , , , [9]],
                    [, , "594(?:[023]\\d|1[01]|4[03-9]|5[6-9]|6[0-3]|80|9[014])\\d{4}", , , , "594101234"],
                    [, , "694(?:[0-249]\\d|3[0-48])\\d{4}", , , , "694201234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "976\\d{6}", , , , "976012345"], "GF", 594, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[569]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GG: [, [, , "(?:1481|[357-9]\\d{3})\\d{6}|8\\d{6}(?:\\d{2})?", , , , , , , [7, 9, 10],
                        [6]
                    ],
                    [, , "1481[25-9]\\d{5}", , , , "1481256789", , , [10],
                        [6]
                    ],
                    [, , "7(?:(?:781|839)\\d|911[17])\\d{5}", , , , "7781123456", , , [10]],
                    [, , "80[08]\\d{7}|800\\d{6}|8001111", , , , "8001234567"],
                    [, , "(?:8(?:4[2-5]|7[0-3])|9(?:[01]\\d|8[0-3]))\\d{7}|845464\\d", , , , "9012345678", , , [7, 10]],
                    [, , , , , , , , , [-1]],
                    [, , "70\\d{8}", , , , "7012345678", , , [10]],
                    [, , "56\\d{8}", , , , "5612345678", , , [10]], "GG", 44, "00", "0", , , "0|([25-9]\\d{5})$", "1481$1", , , , , [, , "76(?:0[0-2]|2[356]|4[0134]|5[49]|6[0-369]|77|81|9[39])\\d{6}", , , , "7640123456", , , [10]], , , [, , , , , , , , , [-1]],
                    [, , "(?:3[0347]|55)\\d{8}", , , , "5512345678", , , [10]], , , [, , , , , , , , , [-1]]
                ],
                GH: [, [, , "(?:[235]\\d{3}|800)\\d{5}", , , , , , , [8, 9],
                        [7]
                    ],
                    [, , "3(?:[167]2[0-6]|22[0-5]|32[0-3]|4(?:2[013-9]|3[01])|52[0-7]|82[0-2])\\d{5}|3(?:[0-8]8|9[28])0\\d{5}|3(?:0[237]|[1-9]7)\\d{6}", , , , "302345678", , , [9],
                        [7]
                    ],
                    [, , "(?:2[0346-8]\\d|5(?:[0457]\\d|6[01]|9[1-6]))\\d{6}", , , , "231234567", , , [9]],
                    [, , "800\\d{5}", , , , "80012345", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "GH", 233, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[237]|80"]],
                        [, "(\\d{3})(\\d{5})", "$1 $2", ["8"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[235]"], "0$1"]
                    ],
                    [
                        [, "(\\d{3})(\\d{5})", "$1 $2", ["8"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[235]"], "0$1"]
                    ],
                    [, , , , , , , , , [-1]], , , [, , "800\\d{5}", , , , , , , [8]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GI: [, [, , "[256]\\d{7}", , , , , , , [8]],
                    [, , "2190[0-2]\\d{3}|2(?:00\\d|16[24-7]|2(?:2[2457]|50))\\d{4}", , , , "20012345"],
                    [, , "(?:5[46-8]\\d|6(?:06|29))\\d{5}", , , , "57123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "GI", 350, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{5})", "$1 $2", ["2"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GL: [, [, , "(?:19|[2-689]\\d)\\d{4}", , , , , , , [6]],
                    [, , "(?:19|3[1-7]|6[14689]|8[14-79]|9\\d)\\d{4}", , , , "321000"],
                    [, , "(?:[25][1-9]|4[2-9])\\d{4}", , , , "221234"],
                    [, , "80\\d{4}", , , , "801234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "3[89]\\d{4}", , , , "381234"], "GL", 299, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3", ["19|[2-689]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GM: [, [, , "[2-9]\\d{6}", , , , , , , [7]],
                    [, , "(?:4(?:[23]\\d\\d|4(?:1[024679]|[6-9]\\d))|5(?:54[0-7]|6[67]\\d|7(?:1[04]|2[035]|3[58]|48))|8\\d{3})\\d{3}", , , , "5661234"],
                    [, , "(?:[23679]\\d|5[0-3])\\d{5}", , , , "3012345"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "GM", 220, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[2-9]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GN: [, [, , "(?:30|6\\d\\d|722)\\d{6}", , , , , , , [8, 9]],
                    [, , "30(?:24|3[12]|4[1-35-7]|5[13]|6[189]|[78]1|9[1478])\\d{4}", , , , "30241234", , , [8]],
                    [, , "6[02356]\\d{7}", , , , "601123456", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "722\\d{6}", , , , "722123456", , , [9]], "GN", 224, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["3"]],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[67]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GP: [, [, , "(?:590|69\\d|976)\\d{6}", , , , , , , [9]],
                    [, , "590(?:0[1-68]|1[0-2]|2[0-68]|3[1289]|4[0-24-9]|5[3-579]|6[0189]|7[08]|8[0-689]|9\\d)\\d{4}", , , , "590201234"],
                    [, , "69(?:0\\d\\d|1(?:2[29]|3[0-5]))\\d{4}", , , , "690001234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "976[01]\\d{5}", , , , "976012345"], "GP", 590, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[569]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], 1, , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GQ: [, [, , "222\\d{6}|(?:3\\d|55|[89]0)\\d{7}", , , , , , , [9]],
                    [, , "33[0-24-9]\\d[46]\\d{4}|3(?:33|5\\d)\\d[7-9]\\d{4}", , , , "333091234"],
                    [, , "(?:222|55[015])\\d{6}", , , , "222123456"],
                    [, , "80\\d[1-9]\\d{5}", , , , "800123456"],
                    [, , "90\\d[1-9]\\d{5}", , , , "900123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "GQ", 240, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[235]"]],
                        [, "(\\d{3})(\\d{6})", "$1 $2", ["[89]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GR: [, [, , "5005000\\d{3}|(?:[2689]\\d|70)\\d{8}", , , , , , , [10]],
                    [, , "2(?:1\\d\\d|2(?:2[1-46-9]|[36][1-8]|4[1-7]|5[1-4]|7[1-5]|[89][1-9])|3(?:1\\d|2[1-57]|[35][1-3]|4[13]|7[1-7]|8[124-6]|9[1-79])|4(?:1\\d|2[1-8]|3[1-4]|4[13-5]|6[1-578]|9[1-5])|5(?:1\\d|[29][1-4]|3[1-5]|4[124]|5[1-6])|6(?:1\\d|[269][1-6]|3[1245]|4[1-7]|5[13-9]|7[14]|8[1-5])|7(?:1\\d|2[1-5]|3[1-6]|4[1-7]|5[1-57]|6[135]|9[125-7])|8(?:1\\d|2[1-5]|[34][1-4]|9[1-57]))\\d{6}", , , , "2123456789"],
                    [, , "68[57-9]\\d{7}|(?:69|94)\\d{8}", , , , "6912345678"],
                    [, , "800\\d{7}", , , , "8001234567"],
                    [, , "90[19]\\d{7}", , , , "9091234567"],
                    [, , "8(?:0[16]|12|25)\\d{7}", , , , "8011234567"],
                    [, , "70\\d{8}", , , , "7012345678"],
                    [, , , , , , , , , [-1]], "GR", 30, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3", ["21|7"]],
                        [, "(\\d{4})(\\d{6})", "$1 $2", ["2(?:2|3[2-57-9]|4[2-469]|5[2-59]|6[2-9]|7[2-69]|8[2-49])|5"]],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["[2689]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "5005000\\d{3}", , , , "5005000123"], , , [, , , , , , , , , [-1]]
                ],
                GT: [, [, , "(?:1\\d{3}|[2-7])\\d{7}", , , , , , , [8, 11]],
                    [, , "[267][2-9]\\d{6}", , , , "22456789", , , [8]],
                    [, , "[3-5]\\d{7}", , , , "51234567", , , [8]],
                    [, , "18[01]\\d{8}", , , , "18001112222", , , [11]],
                    [, , "19\\d{9}", , , , "19001112222", , , [11]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "GT", 502, "00", , , , , , , , [
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[2-7]"]],
                        [, "(\\d{4})(\\d{3})(\\d{4})", "$1 $2 $3", ["1"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GU: [, [, , "(?:[58]\\d\\d|671|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "671(?:3(?:00|3[39]|4[349]|55|6[26])|4(?:00|56|7[1-9]|8[0236-9])|5(?:55|6[2-5]|88)|6(?:3[2-578]|4[24-9]|5[34]|78|8[235-9])|7(?:[0479]7|2[0167]|3[45]|8[7-9])|8(?:[2-57-9]8|6[48])|9(?:2[29]|6[79]|7[1279]|8[7-9]|9[78]))\\d{4}", , , , "6713001234", , , , [7]],
                    [, , "671(?:3(?:00|3[39]|4[349]|55|6[26])|4(?:00|56|7[1-9]|8[0236-9])|5(?:55|6[2-5]|88)|6(?:3[2-578]|4[24-9]|5[34]|78|8[235-9])|7(?:[0479]7|2[0167]|3[45]|8[7-9])|8(?:[2-57-9]8|6[48])|9(?:2[29]|6[79]|7[1279]|8[7-9]|9[78]))\\d{4}", , , , "6713001234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "GU", 1, "011", "1", , , "1|([3-9]\\d{6})$", "671$1", , 1, , , [, , , , , , , , , [-1]], , "671", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GW: [, [, , "[49]\\d{8}|4\\d{6}", , , , , , , [7, 9]],
                    [, , "443\\d{6}", , , , "443201234", , , [9]],
                    [, , "9(?:5\\d|6[569]|77)\\d{6}", , , , "955012345", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "40\\d{5}", , , , "4012345", , , [7]], "GW", 245, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["40"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[49]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                GY: [, [, , "(?:862\\d|9008)\\d{3}|(?:[2-46]\\d|77)\\d{5}", , , , , , , [7]],
                    [, , "(?:2(?:1[6-9]|2[0-35-9]|3[1-4]|5[3-9]|6\\d|7[0-24-79])|3(?:2[25-9]|3\\d)|4(?:4[0-24]|5[56])|77[1-57])\\d{4}", , , , "2201234"],
                    [, , "6\\d{6}", , , , "6091234"],
                    [, , "(?:289|862)\\d{4}", , , , "2891234"],
                    [, , "9008\\d{3}", , , , "9008123"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "GY", 592, "001", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[2-46-9]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                HK: [, [, , "8[0-46-9]\\d{6,7}|9\\d{4}(?:\\d(?:\\d(?:\\d{4})?)?)?|(?:[235-79]\\d|46)\\d{6}", , , , , , , [5, 6, 7, 8, 9, 11]],
                    [, , "(?:384[0-24]|58(?:0[1-8]|1[2-9]))\\d{4}|(?:2(?:[13-8]\\d|2[013-9]|9[0-24-9])|3(?:[1569][0-24-9]|4[0-246-9]|7[0-24-69]|89))\\d{5}", , , , "21234567", , , [8]],
                    [, , "(?:46(?:0[0-6]|1[0-2]|4[0-57-9])|5730|(?:626|848)[01]|707[1-5]|929[03-9])\\d{4}|(?:5(?:[1-59][0-46-9]|6[0-4689]|7[0-2469])|6(?:0[1-9]|[13-59]\\d|[268][0-57-9]|7[0-79])|9(?:0[1-9]|1[02-9]|[2358][0-8]|[467]\\d))\\d{5}", , , , "51234567", , , [8]],
                    [, , "800\\d{6}", , , , "800123456", , , [9]],
                    [, , "900(?:[0-24-9]\\d{7}|3\\d{1,4})", , , , "90012345678", , , [5, 6, 7, 8, 11]],
                    [, , , , , , , , , [-1]],
                    [, , "8(?:1[0-4679]\\d|2(?:[0-36]\\d|7[0-4])|3(?:[034]\\d|2[09]|70))\\d{4}", , , , "81123456", , , [8]],
                    [, , , , , , , , , [-1]], "HK", 852, "00(?:30|5[09]|[126-9]?)", , , , , , "00", , [
                        [, "(\\d{3})(\\d{2,5})", "$1 $2", ["900", "9003"]],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[2-7]|8[1-4]|9(?:0[1-9]|[1-8])"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["8"]],
                        [, "(\\d{3})(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3 $4", ["9"]]
                    ], , [, , "7(?:1(?:0[0-38]|1[0-3679]|3[013]|69|9[136])|2(?:[02389]\\d|1[18]|7[27-9])|3(?:[0-38]\\d|7[0-369]|9[2357-9])|47\\d|5(?:[178]\\d|5[0-5])|6(?:0[0-7]|2[236-9]|[35]\\d)|7(?:[27]\\d|8[7-9])|8(?:[23689]\\d|7[1-9])|9(?:[025]\\d|6[0-246-8]|7[0-36-9]|8[238]))\\d{4}", , , , "71123456", , , [8]], , , [, , , , , , , , , [-1]],
                    [, , "30(?:0[1-9]|[15-7]\\d|2[047]|89)\\d{4}", , , , "30161234", , , [8]], , , [, , , , , , , , , [-1]]
                ],
                HN: [, [, , "8\\d{10}|[237-9]\\d{7}", , , , , , , [8, 11]],
                    [, , "2(?:2(?:0[019]|1[1-36]|[23]\\d|4[04-6]|5[57]|6[24]|7[0135689]|8[01346-9]|9[0-2])|4(?:07|2[3-59]|3[13-689]|4[0-68]|5[1-35])|5(?:0[78]|16|4[03-5]|5\\d|6[014-6]|74|80)|6(?:[056]\\d|17|2[07]|3[04]|4[0-378]|[78][0-8]|9[01])|7(?:6[46-9]|7[02-9]|8[034]|91)|8(?:79|8[0-357-9]|9[1-57-9]))\\d{4}", , , , "22123456", , , [8]],
                    [, , "[37-9]\\d{7}", , , , "91234567", , , [8]],
                    [, , "8002\\d{7}", , , , "80021234567", , , [11]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "HN", 504, "00", , , , , , , , [
                        [, "(\\d{4})(\\d{4})", "$1-$2", ["[237-9]"]],
                        [, "(\\d{3})(\\d{4})(\\d{4})", "$1 $2 $3", ["8"]]
                    ],
                    [
                        [, "(\\d{4})(\\d{4})", "$1-$2", ["[237-9]"]]
                    ],
                    [, , , , , , , , , [-1]], , , [, , "8002\\d{7}", , , , , , , [11]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                HR: [, [, , "(?:[24-69]\\d|3[0-79])\\d{7}|80\\d{5,7}|[1-79]\\d{7}|6\\d{5,6}", , , , , , , [6, 7, 8, 9]],
                    [, , "1\\d{7}|(?:2[0-3]|3[1-5]|4[02-47-9]|5[1-3])\\d{6,7}", , , , "12345678", , , [8, 9],
                        [6, 7]
                    ],
                    [, , "9(?:751\\d{5}|8\\d{6,7})|9(?:0[1-9]|[1259]\\d|7[0679])\\d{6}", , , , "921234567", , , [8, 9]],
                    [, , "80[01]\\d{4,6}", , , , "800123456", , , [7, 8, 9]],
                    [, , "6[01459]\\d{6}|6[01]\\d{4,5}", , , , "611234", , , [6, 7, 8]],
                    [, , , , , , , , , [-1]],
                    [, , "7[45]\\d{6}", , , , "74123456", , , [8]],
                    [, , , , , , , , , [-1]], "HR", 385, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2,3})", "$1 $2 $3", ["6[01]"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{2,3})", "$1 $2 $3", ["8"], "0$1"],
                        [, "(\\d)(\\d{4})(\\d{3})", "$1 $2 $3", ["1"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[67]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["9"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[2-5]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["8"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "62\\d{6,7}|72\\d{6}", , , , "62123456", , , [8, 9]], , , [, , , , , , , , , [-1]]
                ],
                HT: [, [, , "[2-489]\\d{7}", , , , , , , [8]],
                    [, , "2(?:2\\d|5[1-5]|81|9[149])\\d{5}", , , , "22453300"],
                    [, , "[34]\\d{7}", , , , "34101234"],
                    [, , "8\\d{7}", , , , "80012345"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "9(?:[67][0-4]|8[0-3589]|9\\d)\\d{5}", , , , "98901234"], "HT", 509, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{4})", "$1 $2 $3", ["[2-489]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                HU: [, [, , "[2357]\\d{8}|[1-9]\\d{7}", , , , , , , [8, 9],
                        [6, 7]
                    ],
                    [, , "(?:1\\d|[27][2-9]|3[2-7]|4[24-9]|5[2-79]|6[23689]|8[2-57-9]|9[2-69])\\d{6}", , , , "12345678", , , [8],
                        [6, 7]
                    ],
                    [, , "(?:[257]0|3[01])\\d{7}", , , , "201234567", , , [9]],
                    [, , "[48]0\\d{6}", , , , "80123456", , , [8]],
                    [, , "9[01]\\d{6}", , , , "90123456", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "21\\d{7}", , , , "211234567", , , [9]], "HU", 36, "00", "06", , , "06", , , , [
                        [, "(\\d)(\\d{3})(\\d{4})", "$1 $2 $3", ["1"], "(06 $1)"],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["[27][2-9]|3[2-7]|4[24-9]|5[2-79]|6|8[2-57-9]|9[2-69]"], "(06 $1)"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[2-57-9]"], "06 $1"]
                    ], , [, , , , , , , , , [-1]], , , [, , "[48]0\\d{6}", , , , , , , [8]],
                    [, , "38\\d{7}", , , , "381234567", , , [9]], , , [, , , , , , , , , [-1]]
                ],
                ID: [, [, , "(?:(?:007803|8\\d{4})\\d|[1-36])\\d{6}|[1-9]\\d{8,10}|[2-9]\\d{7}", , , , , , , [7, 8, 9, 10, 11, 12, 13],
                        [5, 6]
                    ],
                    [, , "2[124]\\d{7,8}|619\\d{8}|2(?:1(?:14|500)|2\\d{3})\\d{3}|61\\d{5,8}|(?:2(?:[35][1-4]|6[0-8]|7[1-6]|8\\d|9[1-8])|3(?:1|[25][1-8]|3[1-68]|4[1-3]|6[1-3568]|7[0-469]|8\\d)|4(?:0[1-589]|1[01347-9]|2[0-36-8]|3[0-24-68]|43|5[1-378]|6[1-5]|7[134]|8[1245])|5(?:1[1-35-9]|2[25-8]|3[124-9]|4[1-3589]|5[1-46]|6[1-8])|6(?:[25]\\d|3[1-69]|4[1-6])|7(?:02|[125][1-9]|[36]\\d|4[1-8]|7[0-36-9])|9(?:0[12]|1[013-8]|2[0-479]|5[125-8]|6[23679]|7[159]|8[01346]))\\d{5,8}", , , , "218350123", , , [7, 8, 9, 10, 11],
                        [5, 6]
                    ],
                    [, , "8[1-35-9]\\d{7,10}", , , , "812345678", , , [9, 10, 11, 12]],
                    [, , "007803\\d{7}|(?:177\\d|800)\\d{5,7}", , , , "8001234567", , , [8, 9, 10, 11, 13]],
                    [, , "809\\d{7}", , , , "8091234567", , , [10]],
                    [, , "804\\d{7}", , , , "8041234567", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "ID", 62, "00[189]", "0", , , "0", , , , [
                        [, "(\\d)(\\d{3})(\\d{3})", "$1 $2 $3", ["15"]],
                        [, "(\\d{2})(\\d{5,9})", "$1 $2", ["2[124]|[36]1"], "(0$1)"],
                        [, "(\\d{3})(\\d{5,7})", "$1 $2", ["800"], "0$1"],
                        [, "(\\d{3})(\\d{5,8})", "$1 $2", ["[2-79]"], "(0$1)"],
                        [, "(\\d{3})(\\d{3,4})(\\d{3})", "$1-$2-$3", ["8[1-35-9]"], "0$1"],
                        [, "(\\d{3})(\\d{6,8})", "$1 $2", ["1"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["804"], "0$1"],
                        [, "(\\d{3})(\\d)(\\d{3})(\\d{3})", "$1 $2 $3 $4", ["80"], "0$1"],
                        [, "(\\d{3})(\\d{4})(\\d{4,5})", "$1-$2-$3", ["8"], "0$1"],
                        [, "(\\d{2})(\\d{4})(\\d{3})(\\d{4})", "$1 $2 $3 $4", ["0"]]
                    ],
                    [
                        [, "(\\d)(\\d{3})(\\d{3})", "$1 $2 $3", ["15"]],
                        [, "(\\d{2})(\\d{5,9})", "$1 $2", ["2[124]|[36]1"], "(0$1)"],
                        [, "(\\d{3})(\\d{5,7})", "$1 $2", ["800"], "0$1"],
                        [, "(\\d{3})(\\d{5,8})", "$1 $2", ["[2-79]"], "(0$1)"],
                        [, "(\\d{3})(\\d{3,4})(\\d{3})", "$1-$2-$3", ["8[1-35-9]"], "0$1"],
                        [, "(\\d{3})(\\d{6,8})", "$1 $2", ["1"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["804"], "0$1"],
                        [, "(\\d{3})(\\d)(\\d{3})(\\d{3})", "$1 $2 $3 $4", ["80"], "0$1"],
                        [, "(\\d{3})(\\d{4})(\\d{4,5})", "$1-$2-$3", ["8"], "0$1"]
                    ],
                    [, , , , , , , , , [-1]], , , [, , "(?:007803\\d|8071)\\d{6}", , , , , , , [10, 13]],
                    [, , "(?:1500|8071\\d{3})\\d{3}", , , , "8071123456", , , [7, 10]], , , [, , , , , , , , , [-1]]
                ],
                IE: [, [, , "(?:1\\d|[2569])\\d{6,8}|4\\d{6,9}|7\\d{8}|8\\d{8,9}", , , , , , , [7, 8, 9, 10],
                        [5, 6]
                    ],
                    [, , "(?:1\\d|21)\\d{6,7}|(?:2[24-9]|4(?:0[24]|5\\d|7)|5(?:0[45]|1\\d|8)|6(?:1\\d|[237-9])|9(?:1\\d|[35-9]))\\d{5}|(?:23|4(?:[1-469]|8\\d)|5[23679]|6[4-6]|7[14]|9[04])\\d{7}", , , , "2212345", , , , [5, 6]],
                    [, , "8(?:22|[35-9]\\d)\\d{6}", , , , "850123456", , , [9]],
                    [, , "1800\\d{6}", , , , "1800123456", , , [10]],
                    [, , "15(?:1[2-8]|[2-8]0|9[089])\\d{6}", , , , "1520123456", , , [10]],
                    [, , "18[59]0\\d{6}", , , , "1850123456", , , [10]],
                    [, , "700\\d{6}", , , , "700123456", , , [9]],
                    [, , "76\\d{7}", , , , "761234567", , , [9]], "IE", 353, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{5})", "$1 $2", ["2[24-9]|47|58|6[237-9]|9[35-9]"], "(0$1)"],
                        [, "(\\d{3})(\\d{5})", "$1 $2", ["[45]0"], "(0$1)"],
                        [, "(\\d)(\\d{3,4})(\\d{4})", "$1 $2 $3", ["1"], "(0$1)"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[2569]|4[1-69]|7[14]"], "(0$1)"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["70"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["81"], "(0$1)"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[78]"], "0$1"],
                        [, "(\\d{4})(\\d{3})(\\d{3})", "$1 $2 $3", ["1"]],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3", ["4"], "(0$1)"],
                        [, "(\\d{2})(\\d)(\\d{3})(\\d{4})", "$1 $2 $3 $4", ["8"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , "18[59]0\\d{6}", , , , , , , [10]],
                    [, , "818\\d{6}", , , , "818123456", , , [9]], , , [, , "88210[1-9]\\d{4}|8(?:[35-79]5\\d\\d|8(?:[013-9]\\d\\d|2(?:[01][1-9]|[2-9]\\d)))\\d{5}", , , , "8551234567", , , [10]]
                ],
                IL: [, [, , "1\\d{6}(?:\\d{3,5})?|[57]\\d{8}|[1-489]\\d{7}", , , , , , , [7, 8, 9, 10, 11, 12]],
                    [, , "153\\d{8,9}|[2-489]\\d{7}", , , , "21234567", , , [8, 11, 12],
                        [7]
                    ],
                    [, , "5(?:(?:[0-389][2-9]|4[1-9]|6\\d)\\d|5(?:01|2[2-6]|3[23]|4[45]|5[05689]|6[6-8]|7[0-267]|8[7-9]|9[1-9]))\\d{5}", , , , "502345678", , , [9]],
                    [, , "1(?:255|80[019]\\d{3})\\d{3}", , , , "1800123456", , , [7, 10]],
                    [, , "1212\\d{4}|1(?:200|9(?:0[01]|19))\\d{6}", , , , "1919123456", , , [8, 10]],
                    [, , "1700\\d{6}", , , , "1700123456", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , "78(?:33|55|77|81)\\d{5}|7(?:18|2[23]|3[237]|47|6[58]|7\\d|82|9[235-9])\\d{6}", , , , "771234567", , , [9]], "IL", 972, "0(?:0|1[2-9])", "0", , , "0", , , , [
                        [, "(\\d{4})(\\d{3})", "$1-$2", ["125"]],
                        [, "(\\d{4})(\\d{2})(\\d{2})", "$1-$2-$3", ["121"]],
                        [, "(\\d)(\\d{3})(\\d{4})", "$1-$2-$3", ["[2-489]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1-$2-$3", ["[57]"], "0$1"],
                        [, "(\\d{4})(\\d{3})(\\d{3})", "$1-$2-$3", ["12"]],
                        [, "(\\d{4})(\\d{6})", "$1-$2", ["159"]],
                        [, "(\\d)(\\d{3})(\\d{3})(\\d{3})", "$1-$2-$3-$4", ["1[7-9]"]],
                        [, "(\\d{3})(\\d{1,2})(\\d{3})(\\d{4})", "$1-$2 $3-$4", ["15"]]
                    ], , [, , , , , , , , , [-1]], , , [, , "1700\\d{6}", , , , , , , [10]],
                    [, , "1599\\d{6}", , , , "1599123456", , , [10]], , , [, , "151\\d{8,9}", , , , "15112340000", , , [11, 12]]
                ],
                IM: [, [, , "1624\\d{6}|(?:[3578]\\d|90)\\d{8}", , , , , , , [10],
                        [6]
                    ],
                    [, , "1624[5-8]\\d{5}", , , , "1624756789", , , , [6]],
                    [, , "76245[06]\\d{4}|7(?:4576|[59]24\\d|624[0-4689])\\d{5}", , , , "7924123456"],
                    [, , "808162\\d{4}", , , , "8081624567"],
                    [, , "8(?:440[49]06|72299\\d)\\d{3}|(?:8(?:45|70)|90[0167])624\\d{4}", , , , "9016247890"],
                    [, , , , , , , , , [-1]],
                    [, , "70\\d{8}", , , , "7012345678"],
                    [, , "56\\d{8}", , , , "5612345678"], "IM", 44, "00", "0", , , "0|([5-8]\\d{5})$", "1624$1", , , , , [, , , , , , , , , [-1]], , "74576|(?:16|7[56])24", [, , , , , , , , , [-1]],
                    [, , "3440[49]06\\d{3}|(?:3(?:08162|3\\d{4}|45624|7(?:0624|2299))|55\\d{4})\\d{4}", , , , "5512345678"], , , [, , , , , , , , , [-1]]
                ],
                IN: [, [, , "(?:000800|[2-9]\\d\\d)\\d{7}|1\\d{7,12}", , , , , , , [8, 9, 10, 11, 12, 13],
                        [6, 7]
                    ],
                    [, , "2717(?:[2-7]\\d|95)\\d{4}|(?:271[0-689]|782[0-6])[2-7]\\d{5}|(?:170[24]|2(?:(?:[02][2-79]|90)\\d|80[13468])|(?:3(?:23|80)|683|79[1-7])\\d|4(?:20[24]|72[2-8])|552[1-7])\\d{6}|(?:11|33|4[04]|80)[2-7]\\d{7}|(?:342|674|788)(?:[0189][2-7]|[2-7]\\d)\\d{5}|(?:1(?:2[0-249]|3[0-25]|4[145]|[59][14]|6[014]|7[1257]|8[01346])|2(?:1[257]|3[013]|4[01]|5[0137]|6[0158]|78|8[1568]|9[14])|3(?:26|4[13]|5[34]|6[01489]|7[02-46]|8[159])|4(?:1[36]|2[1-47]|3[15]|5[12]|6[0-26-9]|7[014-9]|8[013-57]|9[014-7])|5(?:1[025]|22|[36][25]|4[28]|[578]1|9[15])|6(?:12|[2-47]1|5[17]|6[13]|80)|7(?:12|2[14]|3[134]|4[47]|5[15]|[67]1)|8(?:16|2[014]|3[126]|6[136]|7[078]|8[34]|91))[2-7]\\d{6}|(?:1(?:2[35-8]|3[346-9]|4[236-9]|[59][0235-9]|6[235-9]|7[34689]|8[257-9])|2(?:1[134689]|3[24-8]|4[2-8]|5[25689]|6[2-4679]|7[3-79]|8[2-479]|9[235-9])|3(?:01|1[79]|2[1245]|4[5-8]|5[125689]|6[235-7]|7[157-9]|8[2-46-8])|4(?:1[14578]|2[5689]|3[2-467]|5[4-7]|6[35]|73|8[2689]|9[2389])|5(?:[16][146-9]|2[14-8]|3[1346]|4[14-69]|5[46]|7[2-4]|8[2-8]|9[246])|6(?:1[1358]|2[2457]|3[2-4]|4[235-7]|5[2-689]|6[24578]|7[235689]|8[124-6])|7(?:1[013-9]|2[0235-9]|3[2679]|4[1-35689]|5[2-46-9]|[67][02-9]|8[013-7]|9[089])|8(?:1[1357-9]|2[235-8]|3[03-57-9]|4[0-24-9]|5\\d|6[2457-9]|7[1-6]|8[1256]|9[2-4]))\\d[2-7]\\d{5}", , , , "7410410123", , , [10],
                        [6, 7, 8]
                    ],
                    [, , "(?:61279|7(?:887[02-9]|9(?:313|79[07-9]))|8(?:079[04-9]|(?:84|91)7[02-8]))\\d{5}|(?:6(?:12|[2-47]1|5[17]|6[13]|80)[0189]|7(?:1(?:2[0189]|9[0-5])|2(?:[14][017-9]|8[0-59])|3(?:2[5-8]|[34][017-9]|9[016-9])|4(?:1[015-9]|[29][89]|39|8[389])|5(?:[15][017-9]|2[04-9]|9[7-9])|6(?:0[0-47]|1[0-257-9]|2[0-4]|3[19]|5[4589])|70[0289]|88[089]|97[02-8])|8(?:0(?:6[67]|7[02-8])|70[017-9]|84[01489]|91[0-289]))\\d{6}|(?:7(?:31|4[47])|8(?:16|2[014]|3[126]|6[136]|7[78]|83))(?:[0189]\\d|7[02-8])\\d{5}|(?:6(?:[09]\\d|1[04679]|2[03689]|3[05-9]|4[0489]|50|6[069]|7[07]|8[7-9])|7(?:0\\d|2[0235-79]|3[05-8]|40|5[0346-8]|6[6-9]|7[1-9]|8[0-79]|9[089])|8(?:0[01589]|1[0-57-9]|2[235-9]|3[03-57-9]|[45]\\d|6[02457-9]|7[1-69]|8[0-25-9]|9[02-9])|9\\d\\d)\\d{7}|(?:6(?:(?:1[1358]|2[2457]|3[2-4]|4[235-7]|5[2-689]|6[24578]|8[124-6])\\d|7(?:[235689]\\d|4[0189]))|7(?:1(?:[013-8]\\d|9[6-9])|28[6-8]|3(?:2[0-49]|9[2-5])|4(?:1[2-4]|[29][0-7]|3[0-8]|[56]\\d|8[0-24-7])|5(?:2[1-3]|9[0-6])|6(?:0[5689]|2[5-9]|3[02-8]|4\\d|5[0-367])|70[13-7]|881))[0189]\\d{5}", , , , "8123456789", , , [10]],
                    [, , "000800\\d{7}|1(?:600\\d{6}|80(?:0\\d{4,9}|3\\d{9}))", , , , "1800123456"],
                    [, , "186[12]\\d{9}", , , , "1861123456789", , , [13]],
                    [, , "1860\\d{7}", , , , "18603451234", , , [11]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "IN", 91, "00", "0", , , "0", , , , [
                        [, "(\\d{7})", "$1", ["575"]],
                        [, "(\\d{8})", "$1", ["5(?:0|2[23]|3[03]|[67]1|88)", "5(?:0|2(?:21|3)|3(?:0|3[23])|616|717|888)", "5(?:0|2(?:21|3)|3(?:0|3[23])|616|717|8888)"], , , 1],
                        [, "(\\d{4})(\\d{4,5})", "$1 $2", ["180", "1800"], , , 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["140"], , , 1],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3", ["11|2[02]|33|4[04]|79[1-7]|80[2-46]", "11|2[02]|33|4[04]|79(?:[1-6]|7[19])|80(?:[2-4]|6[0-589])", "11|2[02]|33|4[04]|79(?:[124-6]|3(?:[02-9]|1[0-24-9])|7(?:1|9[1-6]))|80(?:[2-4]|6[0-589])"], "0$1", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["1(?:2[0-249]|3[0-25]|4[145]|[68]|7[1257])|2(?:1[257]|3[013]|4[01]|5[0137]|6[0158]|78|8[1568])|3(?:26|4[1-3]|5[34]|6[01489]|7[02-46]|8[159])|4(?:1[36]|2[1-47]|5[12]|6[0-26-9]|7[0-24-9]|8[013-57]|9[014-7])|5(?:1[025]|22|[36][25]|4[28]|5[12]|[78]1)|6(?:12|[2-4]1|5[17]|6[13]|80)|7(?:12|3[134]|4[47]|61|88)|8(?:16|2[014]|3[126]|6[136]|7[078]|8[34]|91)|(?:43|59|75)[15]|(?:1[59]|29|67|72)[14]", "1(?:2[0-24]|3[0-25]|4[145]|[59][14]|6[1-9]|7[1257]|8[1-57-9])|2(?:1[257]|3[013]|4[01]|5[0137]|6[058]|78|8[1568]|9[14])|3(?:26|4[1-3]|5[34]|6[01489]|7[02-46]|8[159])|4(?:1[36]|2[1-47]|3[15]|5[12]|6[0-26-9]|7[0-24-9]|8[013-57]|9[014-7])|5(?:1[025]|22|[36][25]|4[28]|[578]1|9[15])|674|7(?:(?:2[14]|3[34]|5[15])[2-6]|61[346]|88[0-8])|8(?:70[2-6]|84[235-7]|91[3-7])|(?:1(?:29|60|8[06])|261|552|6(?:12|[2-47]1|5[17]|6[13]|80)|7(?:12|31|4[47])|8(?:16|2[014]|3[126]|6[136]|7[78]|83))[2-7]", "1(?:2[0-24]|3[0-25]|4[145]|[59][14]|6[1-9]|7[1257]|8[1-57-9])|2(?:1[257]|3[013]|4[01]|5[0137]|6[058]|78|8[1568]|9[14])|3(?:26|4[1-3]|5[34]|6[01489]|7[02-46]|8[159])|4(?:1[36]|2[1-47]|3[15]|5[12]|6[0-26-9]|7[0-24-9]|8[013-57]|9[014-7])|5(?:1[025]|22|[36][25]|4[28]|[578]1|9[15])|6(?:12(?:[2-6]|7[0-8])|74[2-7])|7(?:(?:2[14]|5[15])[2-6]|3171|61[346]|88(?:[2-7]|82))|8(?:70[2-6]|84(?:[2356]|7[19])|91(?:[3-6]|7[19]))|73[134][2-6]|(?:74[47]|8(?:16|2[014]|3[126]|6[136]|7[78]|83))(?:[2-6]|7[19])|(?:1(?:29|60|8[06])|261|552|6(?:[2-4]1|5[17]|6[13]|7(?:1|4[0189])|80)|7(?:12|88[01]))[2-7]"], "0$1", , 1],
                        [, "(\\d{4})(\\d{3})(\\d{3})", "$1 $2 $3", ["1(?:[2-479]|5[0235-9])|[2-5]|6(?:1[1358]|2[2457-9]|3[2-5]|4[235-7]|5[2-689]|6[24578]|7[235689]|8[1-6])|7(?:1[013-9]|28|3[129]|4[1-35689]|5[29]|6[02-5]|70)|807", "1(?:[2-479]|5[0235-9])|[2-5]|6(?:1[1358]|2(?:[2457]|84|95)|3(?:[2-4]|55)|4[235-7]|5[2-689]|6[24578]|7[235689]|8[1-6])|7(?:1(?:[013-8]|9[6-9])|28[6-8]|3(?:17|2[0-49]|9[2-57])|4(?:1[2-4]|[29][0-7]|3[0-8]|[56]|8[0-24-7])|5(?:2[1-3]|9[0-6])|6(?:0[5689]|2[5-9]|3[02-8]|4|5[0-367])|70[13-7])|807[19]", "1(?:[2-479]|5(?:[0236-9]|5[013-9]))|[2-5]|6(?:2(?:84|95)|355|83)|73179|807(?:1|9[1-3])|(?:1552|6(?:1[1358]|2[2457]|3[2-4]|4[235-7]|5[2-689]|6[24578]|7[235689]|8[124-6])\\d|7(?:1(?:[013-8]\\d|9[6-9])|28[6-8]|3(?:2[0-49]|9[2-57])|4(?:1[2-4]|[29][0-7]|3[0-8]|[56]\\d|8[0-24-7])|5(?:2[1-3]|9[0-6])|6(?:0[5689]|2[5-9]|3[02-8]|4\\d|5[0-367])|70[13-7]))[2-7]"], "0$1", , 1],
                        [, "(\\d{5})(\\d{5})", "$1 $2", ["[6-9]"], "0$1", , 1],
                        [, "(\\d{4})(\\d{2,4})(\\d{4})", "$1 $2 $3", ["1(?:6|8[06])", "1(?:6|8[06]0)"], , , 1],
                        [, "(\\d{3})(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3 $4", ["0"]],
                        [, "(\\d{4})(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3 $4", ["18"], , , 1]
                    ],
                    [
                        [, "(\\d{8})", "$1", ["5(?:0|2[23]|3[03]|[67]1|88)", "5(?:0|2(?:21|3)|3(?:0|3[23])|616|717|888)", "5(?:0|2(?:21|3)|3(?:0|3[23])|616|717|8888)"], , , 1],
                        [, "(\\d{4})(\\d{4,5})", "$1 $2", ["180", "1800"], , , 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["140"], , , 1],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3", ["11|2[02]|33|4[04]|79[1-7]|80[2-46]", "11|2[02]|33|4[04]|79(?:[1-6]|7[19])|80(?:[2-4]|6[0-589])", "11|2[02]|33|4[04]|79(?:[124-6]|3(?:[02-9]|1[0-24-9])|7(?:1|9[1-6]))|80(?:[2-4]|6[0-589])"], "0$1", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["1(?:2[0-249]|3[0-25]|4[145]|[68]|7[1257])|2(?:1[257]|3[013]|4[01]|5[0137]|6[0158]|78|8[1568])|3(?:26|4[1-3]|5[34]|6[01489]|7[02-46]|8[159])|4(?:1[36]|2[1-47]|5[12]|6[0-26-9]|7[0-24-9]|8[013-57]|9[014-7])|5(?:1[025]|22|[36][25]|4[28]|5[12]|[78]1)|6(?:12|[2-4]1|5[17]|6[13]|80)|7(?:12|3[134]|4[47]|61|88)|8(?:16|2[014]|3[126]|6[136]|7[078]|8[34]|91)|(?:43|59|75)[15]|(?:1[59]|29|67|72)[14]", "1(?:2[0-24]|3[0-25]|4[145]|[59][14]|6[1-9]|7[1257]|8[1-57-9])|2(?:1[257]|3[013]|4[01]|5[0137]|6[058]|78|8[1568]|9[14])|3(?:26|4[1-3]|5[34]|6[01489]|7[02-46]|8[159])|4(?:1[36]|2[1-47]|3[15]|5[12]|6[0-26-9]|7[0-24-9]|8[013-57]|9[014-7])|5(?:1[025]|22|[36][25]|4[28]|[578]1|9[15])|674|7(?:(?:2[14]|3[34]|5[15])[2-6]|61[346]|88[0-8])|8(?:70[2-6]|84[235-7]|91[3-7])|(?:1(?:29|60|8[06])|261|552|6(?:12|[2-47]1|5[17]|6[13]|80)|7(?:12|31|4[47])|8(?:16|2[014]|3[126]|6[136]|7[78]|83))[2-7]", "1(?:2[0-24]|3[0-25]|4[145]|[59][14]|6[1-9]|7[1257]|8[1-57-9])|2(?:1[257]|3[013]|4[01]|5[0137]|6[058]|78|8[1568]|9[14])|3(?:26|4[1-3]|5[34]|6[01489]|7[02-46]|8[159])|4(?:1[36]|2[1-47]|3[15]|5[12]|6[0-26-9]|7[0-24-9]|8[013-57]|9[014-7])|5(?:1[025]|22|[36][25]|4[28]|[578]1|9[15])|6(?:12(?:[2-6]|7[0-8])|74[2-7])|7(?:(?:2[14]|5[15])[2-6]|3171|61[346]|88(?:[2-7]|82))|8(?:70[2-6]|84(?:[2356]|7[19])|91(?:[3-6]|7[19]))|73[134][2-6]|(?:74[47]|8(?:16|2[014]|3[126]|6[136]|7[78]|83))(?:[2-6]|7[19])|(?:1(?:29|60|8[06])|261|552|6(?:[2-4]1|5[17]|6[13]|7(?:1|4[0189])|80)|7(?:12|88[01]))[2-7]"], "0$1", , 1],
                        [, "(\\d{4})(\\d{3})(\\d{3})", "$1 $2 $3", ["1(?:[2-479]|5[0235-9])|[2-5]|6(?:1[1358]|2[2457-9]|3[2-5]|4[235-7]|5[2-689]|6[24578]|7[235689]|8[1-6])|7(?:1[013-9]|28|3[129]|4[1-35689]|5[29]|6[02-5]|70)|807", "1(?:[2-479]|5[0235-9])|[2-5]|6(?:1[1358]|2(?:[2457]|84|95)|3(?:[2-4]|55)|4[235-7]|5[2-689]|6[24578]|7[235689]|8[1-6])|7(?:1(?:[013-8]|9[6-9])|28[6-8]|3(?:17|2[0-49]|9[2-57])|4(?:1[2-4]|[29][0-7]|3[0-8]|[56]|8[0-24-7])|5(?:2[1-3]|9[0-6])|6(?:0[5689]|2[5-9]|3[02-8]|4|5[0-367])|70[13-7])|807[19]", "1(?:[2-479]|5(?:[0236-9]|5[013-9]))|[2-5]|6(?:2(?:84|95)|355|83)|73179|807(?:1|9[1-3])|(?:1552|6(?:1[1358]|2[2457]|3[2-4]|4[235-7]|5[2-689]|6[24578]|7[235689]|8[124-6])\\d|7(?:1(?:[013-8]\\d|9[6-9])|28[6-8]|3(?:2[0-49]|9[2-57])|4(?:1[2-4]|[29][0-7]|3[0-8]|[56]\\d|8[0-24-7])|5(?:2[1-3]|9[0-6])|6(?:0[5689]|2[5-9]|3[02-8]|4\\d|5[0-367])|70[13-7]))[2-7]"], "0$1", , 1],
                        [, "(\\d{5})(\\d{5})", "$1 $2", ["[6-9]"], "0$1", , 1],
                        [, "(\\d{4})(\\d{2,4})(\\d{4})", "$1 $2 $3", ["1(?:6|8[06])", "1(?:6|8[06]0)"], , , 1],
                        [, "(\\d{4})(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3 $4", ["18"], , , 1]
                    ],
                    [, , , , , , , , , [-1]], , , [, , "1(?:600\\d{6}|800\\d{4,9})|(?:000800|18(?:03\\d\\d|6(?:0|[12]\\d\\d)))\\d{7}"],
                    [, , "140\\d{7}", , , , "1409305260", , , [10]], , , [, , , , , , , , , [-1]]
                ],
                IO: [, [, , "3\\d{6}", , , , , , , [7]],
                    [, , "37\\d{5}", , , , "3709100"],
                    [, , "38\\d{5}", , , , "3801234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "IO", 246, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["3"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                IQ: [, [, , "(?:1|7\\d\\d)\\d{7}|[2-6]\\d{7,8}", , , , , , , [8, 9, 10],
                        [6, 7]
                    ],
                    [, , "1\\d{7}|(?:2[13-5]|3[02367]|4[023]|5[03]|6[026])\\d{6,7}", , , , "12345678", , , [8, 9],
                        [6, 7]
                    ],
                    [, , "7[3-9]\\d{8}", , , , "7912345678", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "IQ", 964, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{3})(\\d{4})", "$1 $2 $3", ["1"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[2-6]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["7"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                IR: [, [, , "[1-9]\\d{9}|(?:[1-8]\\d\\d|9)\\d{3,4}", , , , , , , [4, 5, 6, 7, 10],
                        [8]
                    ],
                    [, , "(?:1[137]|2[13-68]|3[1458]|4[145]|5[1468]|6[16]|7[1467]|8[13467])(?:[03-57]\\d{7}|[16]\\d{3}(?:\\d{4})?|[289]\\d{3}(?:\\d(?:\\d{3})?)?)|94(?:000[09]|2(?:121|[2689]0\\d)|30[0-2]\\d|4(?:111|40\\d))\\d{4}", , , , "2123456789", , , [6, 7, 10],
                        [4, 5, 8]
                    ],
                    [, , "9(?:(?:0(?:[1-35]\\d|44)|(?:[13]\\d|2[0-2])\\d)\\d|9(?:(?:[0-2]\\d|44)\\d|5[15]0|8(?:1\\d|88)|9(?:0[013]|1[0134]|21|77|9[6-9])))\\d{5}", , , , "9123456789", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "993\\d{7}", , , , "9932123456", , , [10]], "IR", 98, "00", "0", , , "0", , , , [
                        [, "(\\d{4,5})", "$1", ["96"], "0$1"],
                        [, "(\\d{2})(\\d{4,5})", "$1 $2", ["(?:1[137]|2[13-68]|3[1458]|4[145]|5[1468]|6[16]|7[1467]|8[13467])[12689]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["9"], "0$1"],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3", ["[1-8]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , "9(?:4440\\d{5}|6(?:0[12]|2[16-8]|3(?:08|[14]5|[23]|66)|4(?:0|80)|5[01]|6[89]|86|9[19]))", , , , , , , [4, 5, 10]],
                    [, , "96(?:0[12]|2[16-8]|3(?:08|[14]5|[23]|66)|4(?:0|80)|5[01]|6[89]|86|9[19])", , , , "9601", , , [4, 5]], , , [, , , , , , , , , [-1]]
                ],
                IS: [, [, , "(?:38\\d|[4-9])\\d{6}", , , , , , , [7, 9]],
                    [, , "(?:4(?:1[0-24-69]|2[0-7]|[37][0-8]|4[0-245]|5[0-68]|6\\d|8[0-36-8])|5(?:05|[156]\\d|2[02578]|3[0-579]|4[03-7]|7[0-2578]|8[0-35-9]|9[013-689])|872)\\d{4}", , , , "4101234", , , [7]],
                    [, , "(?:38[589]\\d\\d|6(?:1[1-8]|2[0-6]|3[027-9]|4[014679]|5[0159]|6[0-69]|70|8[06-8]|9\\d)|7(?:5[057]|[6-9]\\d)|8(?:2[0-59]|[3-69]\\d|8[28]))\\d{4}", , , , "6111234"],
                    [, , "80[08]\\d{4}", , , , "8001234", , , [7]],
                    [, , "90(?:0\\d|1[5-79]|2[015-79]|3[135-79]|4[125-7]|5[25-79]|7[1-37]|8[0-35-7])\\d{3}", , , , "9001234", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "49[0-24-79]\\d{4}", , , , "4921234", , , [7]], "IS", 354, "00|1(?:0(?:01|[12]0)|100)", , , , , , "00", , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[4-9]"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["3"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "809\\d{4}", , , , "8091234", , , [7]], , , [, , "(?:689|8(?:7[18]|80)|95[48])\\d{4}", , , , "6891234", , , [7]]
                ],
                IT: [, [, , "0\\d{5,10}|3[0-8]\\d{7,10}|55\\d{8}|8\\d{5}(?:\\d{2,4})?|(?:1\\d|39)\\d{7,8}", , , , , , , [6, 7, 8, 9, 10, 11, 12]],
                    [, , "0669[0-79]\\d{1,6}|0(?:1(?:[0159]\\d|[27][1-5]|31|4[1-4]|6[1356]|8[2-57])|2\\d\\d|3(?:[0159]\\d|2[1-4]|3[12]|[48][1-6]|6[2-59]|7[1-7])|4(?:[0159]\\d|[23][1-9]|4[245]|6[1-5]|7[1-4]|81)|5(?:[0159]\\d|2[1-5]|3[2-6]|4[1-79]|6[4-6]|7[1-578]|8[3-8])|6(?:[0-57-9]\\d|6[0-8])|7(?:[0159]\\d|2[12]|3[1-7]|4[2-46]|6[13569]|7[13-6]|8[1-59])|8(?:[0159]\\d|2[3-578]|3[1-356]|[6-8][1-5])|9(?:[0159]\\d|[238][1-5]|4[12]|6[1-8]|7[1-6]))\\d{2,7}", , , , "0212345678", , , [6, 7, 8, 9, 10, 11]],
                    [, , "3[1-9]\\d{8}|3[2-9]\\d{7}", , , , "3123456789", , , [9, 10]],
                    [, , "80(?:0\\d{3}|3)\\d{3}", , , , "800123456", , , [6, 9]],
                    [, , "(?:0878\\d\\d|89(?:2|4[5-9]\\d))\\d{3}|89[45][0-4]\\d\\d|(?:1(?:44|6[346])|89(?:5[5-9]|9))\\d{6}", , , , "899123456", , , [6, 8, 9, 10]],
                    [, , "84(?:[08]\\d{3}|[17])\\d{3}", , , , "848123456", , , [6, 9]],
                    [, , "1(?:78\\d|99)\\d{6}", , , , "1781234567", , , [9, 10]],
                    [, , "55\\d{8}", , , , "5512345678", , , [10]], "IT", 39, "00", , , , , , , , [
                        [, "(\\d{4,5})", "$1", ["1(?:0|9[246])", "1(?:0|9(?:2[2-9]|[46]))"]],
                        [, "(\\d{6})", "$1", ["1(?:1|92)"]],
                        [, "(\\d{2})(\\d{4,6})", "$1 $2", ["0[26]"]],
                        [, "(\\d{3})(\\d{3,6})", "$1 $2", ["0[13-57-9][0159]|8(?:03|4[17]|9[245])", "0[13-57-9][0159]|8(?:03|4[17]|9(?:2|[45][0-4]))"]],
                        [, "(\\d{4})(\\d{2,6})", "$1 $2", ["0(?:[13-579][2-46-8]|8[236-8])"]],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["894"]],
                        [, "(\\d{2})(\\d{3,4})(\\d{4})", "$1 $2 $3", ["0[26]|5"]],
                        [, "(\\d{3})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["1[4679]|[38]"]],
                        [, "(\\d{3})(\\d{3,4})(\\d{4})", "$1 $2 $3", ["0[13-57-9][0159]"]],
                        [, "(\\d{2})(\\d{4})(\\d{5})", "$1 $2 $3", ["0[26]"]],
                        [, "(\\d{4})(\\d{3})(\\d{4})", "$1 $2 $3", ["0"]],
                        [, "(\\d{3})(\\d{4})(\\d{4,5})", "$1 $2 $3", ["3"]]
                    ],
                    [
                        [, "(\\d{2})(\\d{4,6})", "$1 $2", ["0[26]"]],
                        [, "(\\d{3})(\\d{3,6})", "$1 $2", ["0[13-57-9][0159]|8(?:03|4[17]|9[245])", "0[13-57-9][0159]|8(?:03|4[17]|9(?:2|[45][0-4]))"]],
                        [, "(\\d{4})(\\d{2,6})", "$1 $2", ["0(?:[13-579][2-46-8]|8[236-8])"]],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["894"]],
                        [, "(\\d{2})(\\d{3,4})(\\d{4})", "$1 $2 $3", ["0[26]|5"]],
                        [, "(\\d{3})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["1[4679]|[38]"]],
                        [, "(\\d{3})(\\d{3,4})(\\d{4})", "$1 $2 $3", ["0[13-57-9][0159]"]],
                        [, "(\\d{2})(\\d{4})(\\d{5})", "$1 $2 $3", ["0[26]"]],
                        [, "(\\d{4})(\\d{3})(\\d{4})", "$1 $2 $3", ["0"]],
                        [, "(\\d{3})(\\d{4})(\\d{4,5})", "$1 $2 $3", ["3"]]
                    ],
                    [, , , , , , , , , [-1]], 1, , [, , "848\\d{6}", , , , , , , [9]],
                    [, , , , , , , , , [-1]], , , [, , "3[2-8]\\d{9,10}", , , , "33101234501", , , [11, 12]]
                ],
                JE: [, [, , "1534\\d{6}|(?:[3578]\\d|90)\\d{8}", , , , , , , [10],
                        [6]
                    ],
                    [, , "1534[0-24-8]\\d{5}", , , , "1534456789", , , , [6]],
                    [, , "7(?:(?:(?:50|82)9|937)\\d|7(?:00[378]|97[7-9]))\\d{5}", , , , "7797712345"],
                    [, , "80(?:07(?:35|81)|8901)\\d{4}", , , , "8007354567"],
                    [, , "(?:8(?:4(?:4(?:4(?:05|42|69)|703)|5(?:041|800))|7(?:0002|1206))|90(?:066[59]|1810|71(?:07|55)))\\d{4}", , , , "9018105678"],
                    [, , , , , , , , , [-1]],
                    [, , "701511\\d{4}", , , , "7015115678"],
                    [, , "56\\d{8}", , , , "5612345678"], "JE", 44, "00", "0", , , "0|([0-24-8]\\d{5})$", "1534$1", , , , , [, , "76(?:0[0-2]|2[356]|4[0134]|5[49]|6[0-369]|77|81|9[39])\\d{6}", , , , "7640123456"], , , [, , , , , , , , , [-1]],
                    [, , "(?:3(?:0(?:07(?:35|81)|8901)|3\\d{4}|4(?:4(?:4(?:05|42|69)|703)|5(?:041|800))|7(?:0002|1206))|55\\d{4})\\d{4}", , , , "5512345678"], , , [, , , , , , , , , [-1]]
                ],
                JM: [, [, , "(?:[58]\\d\\d|658|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "(?:658(?:2(?:[0-8]\\d|9[0-46-9])|[3-9]\\d\\d)|876(?:5(?:02|1[0-468]|2[35]|63)|6(?:0[1-3579]|1[0237-9]|[23]\\d|40|5[06]|6[2-589]|7[05]|8[04]|9[4-9])|7(?:0[2-689]|[1-6]\\d|8[056]|9[45])|9(?:0[1-8]|1[02378]|[2-8]\\d|9[2-468])))\\d{4}", , , , "8765230123", , , , [7]],
                    [, , "(?:658295|876(?:(?:2[14-9]|[348]\\d)\\d|5(?:0[13-9]|17|[2-57-9]\\d|6[0-24-9])|7(?:0[07]|7\\d|8[1-47-9]|9[0-36-9])|9(?:[01]9|9[0579])))\\d{4}", , , , "8762101234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "JM", 1, "011", "1", , , "1", , , , , , [, , , , , , , , , [-1]], , "658|876", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                JO: [, [, , "900\\d{5}|(?:(?:[268]|7\\d)\\d|32|53)\\d{6}", , , , , , , [8, 9]],
                    [, , "(?:2(?:6(?:2[0-35-9]|3[0-578]|4[24-7]|5[0-24-8]|[6-8][023]|9[0-3])|7(?:0[1-79]|10|2[014-7]|3[0-689]|4[019]|5[0-3578]))|32(?:0[1-69]|1[1-35-7]|2[024-7]|3\\d|4[0-3]|[57][023]|6[03])|53(?:0[0-3]|[13][023]|2[0-59]|49|5[0-35-9]|6[15]|7[45]|8[1-6]|9[0-36-9])|6(?:2(?:[05]0|22)|3(?:00|33)|4(?:0[0-25]|1[2-7]|2[0569]|[38][07-9]|4[025689]|6[0-589]|7\\d|9[0-2])|5(?:[01][056]|2[034]|3[0-57-9]|4[178]|5[0-69]|6[0-35-9]|7[1-379]|8[0-68]|9[0239]))|87(?:[029]0|7[08]))\\d{4}", , , , "62001234", , , [8]],
                    [, , "7(?:55[0-49]|(?:7[025-9]|8[0-25-9]|9\\d)\\d)\\d{5}", , , , "790123456", , , [9]],
                    [, , "80\\d{6}", , , , "80012345", , , [8]],
                    [, , "900\\d{5}", , , , "90012345", , , [8]],
                    [, , "85\\d{6}", , , , "85012345", , , [8]],
                    [, , "70\\d{7}", , , , "700123456", , , [9]],
                    [, , , , , , , , , [-1]], "JO", 962, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{3})(\\d{4})", "$1 $2 $3", ["[2356]|87"], "(0$1)"],
                        [, "(\\d{3})(\\d{5,6})", "$1 $2", ["[89]"], "0$1"],
                        [, "(\\d{2})(\\d{7})", "$1 $2", ["70"], "0$1"],
                        [, "(\\d)(\\d{4})(\\d{4})", "$1 $2 $3", ["7"], "0$1"]
                    ], , [, , "74(?:66|77)\\d{5}", , , , "746612345", , , [9]], , , [, , , , , , , , , [-1]],
                    [, , "8(?:10|8\\d)\\d{5}", , , , "88101234", , , [8]], , , [, , , , , , , , , [-1]]
                ],
                JP: [, [, , "00[1-9]\\d{6,14}|[257-9]\\d{9}|(?:00|[1-9]\\d\\d)\\d{6}", , , , , , , [8, 9, 10, 11, 12, 13, 14, 15, 16, 17]],
                    [, , "(?:1(?:1[235-8]|2[3-6]|3[3-9]|4[2-6]|[58][2-8]|6[2-7]|7[2-9]|9[1-9])|(?:2[2-9]|[36][1-9])\\d|4(?:[2-578]\\d|6[02-8]|9[2-59])|5(?:[2-589]\\d|6[1-9]|7[2-8])|7(?:[25-9]\\d|3[4-9]|4[02-9])|8(?:[2679]\\d|3[2-9]|4[5-9]|5[1-9]|8[03-9])|9(?:[2-58]\\d|[679][1-9]))\\d{6}", , , , "312345678", , , [9]],
                    [, , "[7-9]0[1-9]\\d{7}", , , , "9012345678", , , [10]],
                    [, , "00(?:(?:37|66)\\d{6,13}|(?:777(?:[01]|(?:5|8\\d)\\d)|882[1245]\\d\\d)\\d\\d)|(?:120|800\\d)\\d{6}", , , , "120123456"],
                    [, , "990\\d{6}", , , , "990123456", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , "60\\d{7}", , , , "601234567", , , [9]],
                    [, , "50[1-9]\\d{7}", , , , "5012345678", , , [10]], "JP", 81, "010", "0", , , "0", , , , [
                        [, "(\\d{4})(\\d{4})", "$1-$2", ["007", "0077", "00777", "00777[01]"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1-$2-$3", ["(?:12|57|99)0"], "0$1"],
                        [, "(\\d{4})(\\d)(\\d{4})", "$1-$2-$3", ["1(?:26|3[79]|4[56]|5[4-68]|6[3-5])|499|5(?:76|97)|746|8(?:3[89]|47|51|63)|9(?:49|80|9[16])", "1(?:267|3(?:7[247]|9[278])|466|5(?:47|58|64)|6(?:3[245]|48|5[4-68]))|499[2468]|5(?:76|97)9|7468|8(?:3(?:8[78]|96)|477|51[24]|636)|9(?:496|802|9(?:1[23]|69))|1(?:45|58)[67]", "1(?:267|3(?:7[247]|9[278])|466|5(?:47|58|64)|6(?:3[245]|48|5[4-68]))|499[2468]|5(?:769|979[2-69])|7468|8(?:3(?:8[78]|96[2457-9])|477|51[24]|636[2-57-9])|9(?:496|802|9(?:1[23]|69))|1(?:45|58)[67]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1-$2-$3", ["60"], "0$1"],
                        [, "(\\d)(\\d{4})(\\d{4})", "$1-$2-$3", ["[36]|4(?:2[09]|7[01])", "[36]|4(?:2(?:0|9[02-69])|7(?:0[019]|1))"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1-$2-$3", ["1(?:1|5[45]|77|88|9[69])|2(?:2[1-37]|3[0-269]|4[59]|5|6[24]|7[1-358]|8[1369]|9[0-38])|4(?:[28][1-9]|3[0-57]|[45]|6[248]|7[2-579]|9[29])|5(?:2|3[045]|4[0-369]|5[29]|8[02389]|9[0-389])|7(?:2[02-46-9]|34|[58]|6[0249]|7[57]|9[2-6])|8(?:2[124589]|3[279]|49|6[0-24-689]|7[0-468]|8[68]|9[019])|9(?:[23][1-9]|4[15]|5[138]|6[1-3]|7[156]|8[189]|9[1-489])", "1(?:1|5(?:4[018]|5[017])|77|88|9[69])|2(?:2(?:[127]|3[014-9])|3[0-269]|4[59]|5(?:[0468][01]|[1-3]|5[0-69]|9[19])|62|7(?:[1-35]|8[0189])|8(?:[16]|3[0134]|9[0-5])|9(?:[028]|17))|4(?:2(?:[13-79]|2[01]|8[014-6])|3[0-57]|[45]|6[248]|7[2-47]|8[1-9])|5(?:2|3[045]|4[0-369]|8[02389]|9[0-3])|7(?:2[02-46-9]|34|[58]|6[0249]|7[57]|9(?:[23]|4[0-59]|5[01569]|6[0167]))|8(?:2(?:[1258]|4[0-39]|9[0-2469])|49|6(?:[0-24]|5[0-3589]|9[01459])|7[0-468]|8[68])|9(?:[23][1-9]|4[15]|5[138]|6[1-3]|7[156]|8[189]|9(?:[1289]|3[34]|4[0178]))|(?:49|55|83)[29]|(?:264|837)[016-9]|2(?:57|93)[015-9]|(?:47[59]|59[89]|8(?:6[68]|9))[019]", "1(?:1|5(?:4[018]|5[017])|77|88|9[69])|2(?:2[127]|3[0-269]|4[59]|5(?:[0468][01]|[1-3]|5[0-69]|9(?:17|99))|6(?:2|4[016-9])|7(?:[1-35]|8[0189])|8(?:[16]|3[0134]|9[0-5])|9(?:[028]|17))|4(?:2(?:[13-79]|2[01]|8[014-6])|3[0-57]|[45]|6[248]|7[2-47]|9[29])|5(?:2|3[045]|4[0-369]|5[29]|8[02389]|9[0-3])|7(?:2[02-46-9]|34|[58]|6[0249]|7[57]|9(?:[23]|4[0-59]|5[01569]|6[0167]))|8(?:2(?:[1258]|4[0-39]|9[0169])|3(?:[29]|7(?:[017-9]|6[6-8]))|49|6(?:[0-24]|5(?:[0-389]|5[23])|6(?:[01]|9[178])|9[0145])|7[0-468]|8[68])|9(?:4[15]|5[138]|7[156]|8[189]|9(?:[1289]|3(?:31|4[357])|4[0178]))|(?:8294|96)[1-3]|2(?:57|93)[015-9]|(?:223|8699)[014-9]|(?:48|8292|9[23])[1-9]|(?:47[59]|59[89]|8(?:68|9))[019]", "1(?:1|5(?:4[018]|5[017])|77|88|9[69])|2(?:2[127]|3[0-269]|4[59]|5(?:[0468][01]|[1-3]|5[0-69]|7[015-9]|9(?:17|99))|6(?:2|4[016-9])|7(?:[1-35]|8[0189])|8(?:[16]|3[0134]|9[0-5])|9(?:[028]|17|3[015-9]))|4(?:2(?:[13-79]|2[01]|8[014-6])|3[0-57]|[45]|6[248]|7[2-47]|9[29])|5(?:2|3[045]|4[0-369]|5[29]|8[02389]|9[0-3])|7(?:2[02-46-9]|34|[58]|6[0249]|7[57]|9(?:[23]|4[0-59]|5[01569]|6[0167]))|8(?:2(?:[1258]|4[0-39]|9(?:[019]|4[1-3]|6(?:[0-47-9]|5[01346-9])))|3(?:[29]|7(?:[017-9]|6[6-8]))|49|6(?:[0-24]|5(?:[0-389]|5[23])|6(?:[01]|9[178])|9[0145])|7[0-468]|8[68])|9(?:4[15]|5[138]|6[1-3]|7[156]|8[189]|9(?:[1289]|3(?:31|4[357])|4[0178]))|(?:223|8699)[014-9]|(?:48|829(?:2|66)|9[23])[1-9]|(?:47[59]|59[89]|8(?:68|9))[019]"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{4})", "$1-$2-$3", ["[14]|[29][2-9]|5[3-9]|7[2-4679]|8(?:[246-9]|3[3-8]|5[2-9])", "[14]|[29][2-9]|5[3-9]|7[2-4679]|8(?:[246-9]|3(?:[3-6][2-9]|7|8[2-5])|5[2-9])"], "0$1"],
                        [, "(\\d{4})(\\d{2})(\\d{3,4})", "$1-$2-$3", ["007"]],
                        [, "(\\d{4})(\\d{2})(\\d{4})", "$1-$2-$3", ["008"]],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1-$2-$3", ["800"], "0$1"],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1-$2-$3", ["[2579]|80"], "0$1"],
                        [, "(\\d{4})(\\d{3})(\\d{3,4})", "$1-$2-$3", ["0"]],
                        [, "(\\d{4})(\\d{4})(\\d{4,5})", "$1-$2-$3", ["0"]],
                        [, "(\\d{4})(\\d{5})(\\d{5,6})", "$1-$2-$3", ["0"]],
                        [, "(\\d{4})(\\d{6})(\\d{6,7})", "$1-$2-$3", ["0"]]
                    ],
                    [
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1-$2-$3", ["(?:12|57|99)0"], "0$1"],
                        [, "(\\d{4})(\\d)(\\d{4})", "$1-$2-$3", ["1(?:26|3[79]|4[56]|5[4-68]|6[3-5])|499|5(?:76|97)|746|8(?:3[89]|47|51|63)|9(?:49|80|9[16])", "1(?:267|3(?:7[247]|9[278])|466|5(?:47|58|64)|6(?:3[245]|48|5[4-68]))|499[2468]|5(?:76|97)9|7468|8(?:3(?:8[78]|96)|477|51[24]|636)|9(?:496|802|9(?:1[23]|69))|1(?:45|58)[67]", "1(?:267|3(?:7[247]|9[278])|466|5(?:47|58|64)|6(?:3[245]|48|5[4-68]))|499[2468]|5(?:769|979[2-69])|7468|8(?:3(?:8[78]|96[2457-9])|477|51[24]|636[2-57-9])|9(?:496|802|9(?:1[23]|69))|1(?:45|58)[67]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1-$2-$3", ["60"], "0$1"],
                        [, "(\\d)(\\d{4})(\\d{4})", "$1-$2-$3", ["[36]|4(?:2[09]|7[01])", "[36]|4(?:2(?:0|9[02-69])|7(?:0[019]|1))"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1-$2-$3", ["1(?:1|5[45]|77|88|9[69])|2(?:2[1-37]|3[0-269]|4[59]|5|6[24]|7[1-358]|8[1369]|9[0-38])|4(?:[28][1-9]|3[0-57]|[45]|6[248]|7[2-579]|9[29])|5(?:2|3[045]|4[0-369]|5[29]|8[02389]|9[0-389])|7(?:2[02-46-9]|34|[58]|6[0249]|7[57]|9[2-6])|8(?:2[124589]|3[279]|49|6[0-24-689]|7[0-468]|8[68]|9[019])|9(?:[23][1-9]|4[15]|5[138]|6[1-3]|7[156]|8[189]|9[1-489])", "1(?:1|5(?:4[018]|5[017])|77|88|9[69])|2(?:2(?:[127]|3[014-9])|3[0-269]|4[59]|5(?:[0468][01]|[1-3]|5[0-69]|9[19])|62|7(?:[1-35]|8[0189])|8(?:[16]|3[0134]|9[0-5])|9(?:[028]|17))|4(?:2(?:[13-79]|2[01]|8[014-6])|3[0-57]|[45]|6[248]|7[2-47]|8[1-9])|5(?:2|3[045]|4[0-369]|8[02389]|9[0-3])|7(?:2[02-46-9]|34|[58]|6[0249]|7[57]|9(?:[23]|4[0-59]|5[01569]|6[0167]))|8(?:2(?:[1258]|4[0-39]|9[0-2469])|49|6(?:[0-24]|5[0-3589]|9[01459])|7[0-468]|8[68])|9(?:[23][1-9]|4[15]|5[138]|6[1-3]|7[156]|8[189]|9(?:[1289]|3[34]|4[0178]))|(?:49|55|83)[29]|(?:264|837)[016-9]|2(?:57|93)[015-9]|(?:47[59]|59[89]|8(?:6[68]|9))[019]", "1(?:1|5(?:4[018]|5[017])|77|88|9[69])|2(?:2[127]|3[0-269]|4[59]|5(?:[0468][01]|[1-3]|5[0-69]|9(?:17|99))|6(?:2|4[016-9])|7(?:[1-35]|8[0189])|8(?:[16]|3[0134]|9[0-5])|9(?:[028]|17))|4(?:2(?:[13-79]|2[01]|8[014-6])|3[0-57]|[45]|6[248]|7[2-47]|9[29])|5(?:2|3[045]|4[0-369]|5[29]|8[02389]|9[0-3])|7(?:2[02-46-9]|34|[58]|6[0249]|7[57]|9(?:[23]|4[0-59]|5[01569]|6[0167]))|8(?:2(?:[1258]|4[0-39]|9[0169])|3(?:[29]|7(?:[017-9]|6[6-8]))|49|6(?:[0-24]|5(?:[0-389]|5[23])|6(?:[01]|9[178])|9[0145])|7[0-468]|8[68])|9(?:4[15]|5[138]|7[156]|8[189]|9(?:[1289]|3(?:31|4[357])|4[0178]))|(?:8294|96)[1-3]|2(?:57|93)[015-9]|(?:223|8699)[014-9]|(?:48|8292|9[23])[1-9]|(?:47[59]|59[89]|8(?:68|9))[019]", "1(?:1|5(?:4[018]|5[017])|77|88|9[69])|2(?:2[127]|3[0-269]|4[59]|5(?:[0468][01]|[1-3]|5[0-69]|7[015-9]|9(?:17|99))|6(?:2|4[016-9])|7(?:[1-35]|8[0189])|8(?:[16]|3[0134]|9[0-5])|9(?:[028]|17|3[015-9]))|4(?:2(?:[13-79]|2[01]|8[014-6])|3[0-57]|[45]|6[248]|7[2-47]|9[29])|5(?:2|3[045]|4[0-369]|5[29]|8[02389]|9[0-3])|7(?:2[02-46-9]|34|[58]|6[0249]|7[57]|9(?:[23]|4[0-59]|5[01569]|6[0167]))|8(?:2(?:[1258]|4[0-39]|9(?:[019]|4[1-3]|6(?:[0-47-9]|5[01346-9])))|3(?:[29]|7(?:[017-9]|6[6-8]))|49|6(?:[0-24]|5(?:[0-389]|5[23])|6(?:[01]|9[178])|9[0145])|7[0-468]|8[68])|9(?:4[15]|5[138]|6[1-3]|7[156]|8[189]|9(?:[1289]|3(?:31|4[357])|4[0178]))|(?:223|8699)[014-9]|(?:48|829(?:2|66)|9[23])[1-9]|(?:47[59]|59[89]|8(?:68|9))[019]"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{4})", "$1-$2-$3", ["[14]|[29][2-9]|5[3-9]|7[2-4679]|8(?:[246-9]|3[3-8]|5[2-9])", "[14]|[29][2-9]|5[3-9]|7[2-4679]|8(?:[246-9]|3(?:[3-6][2-9]|7|8[2-5])|5[2-9])"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1-$2-$3", ["800"], "0$1"],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1-$2-$3", ["[2579]|80"], "0$1"]
                    ],
                    [, , "20\\d{8}", , , , "2012345678", , , [10]], , , [, , "00(?:777(?:[01]|(?:5|8\\d)\\d)|882[1245]\\d\\d)\\d\\d|00(?:37|66)\\d{6,13}"],
                    [, , "570\\d{6}", , , , "570123456", , , [9]], , , [, , , , , , , , , [-1]]
                ],
                KE: [, [, , "(?:[17]\\d\\d|900)\\d{6}|(?:2|80)0\\d{6,7}|[4-6]\\d{6,8}", , , , , , , [7, 8, 9, 10]],
                    [, , "(?:4[245]|5[2-79]|6[01457-9])\\d{5,7}|(?:4[136]|5[08]|62)\\d{7}|(?:[24]0|51|66)\\d{6,7}", , , , "202012345", , , [7, 8, 9]],
                    [, , "(?:1(?:0[0-2]|1[01])|7\\d\\d)\\d{6}", , , , "712123456", , , [9]],
                    [, , "800[24-8]\\d{5,6}", , , , "800223456", , , [9, 10]],
                    [, , "900[02-9]\\d{5}", , , , "900223456", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "KE", 254, "000", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{5,7})", "$1 $2", ["[24-6]"], "0$1"],
                        [, "(\\d{3})(\\d{6})", "$1 $2", ["[17]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[89]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                KG: [, [, , "8\\d{9}|(?:[235-8]\\d|99)\\d{7}", , , , , , , [9, 10],
                        [5, 6]
                    ],
                    [, , "312(?:5[0-79]\\d|9(?:[0-689]\\d|7[0-24-9]))\\d{3}|(?:3(?:1(?:2[0-46-8]|3[1-9]|47|[56]\\d)|2(?:22|3[0-479]|6[0-7])|4(?:22|5[6-9]|6\\d)|5(?:22|3[4-7]|59|6\\d)|6(?:22|5[35-7]|6\\d)|7(?:22|3[468]|4[1-9]|59|[67]\\d)|9(?:22|4[1-8]|6\\d))|6(?:09|12|2[2-4])\\d)\\d{5}", , , , "312123456", , , [9],
                        [5, 6]
                    ],
                    [, , "(?:312(?:58\\d|973)|8801\\d\\d)\\d{3}|(?:2(?:0[0-35]|2\\d)|5[0-24-7]\\d|7(?:[07]\\d|55)|99[05-9])\\d{6}", , , , "700123456", , , [9]],
                    [, , "800\\d{6,7}", , , , "800123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "KG", 996, "00", "0", , , "0", , , , [
                        [, "(\\d{4})(\\d{5})", "$1 $2", ["3(?:1[346]|[24-79])"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[235-79]|88"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d)(\\d{2,3})", "$1 $2 $3 $4", ["8"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                KH: [, [, , "1\\d{9}|[1-9]\\d{7,8}", , , , , , , [8, 9, 10],
                        [6, 7]
                    ],
                    [, , "23(?:4(?:[2-4]|[56]\\d)|[568]\\d\\d)\\d{4}|23[236-9]\\d{5}|(?:2[4-6]|3[2-6]|4[2-4]|[5-7][2-5])(?:(?:[237-9]|4[56]|5\\d)\\d{5}|6\\d{5,6})", , , , "23756789", , , [8, 9],
                        [6, 7]
                    ],
                    [, , "(?:(?:1[28]|3[18]|9[67])\\d|6[016-9]|7(?:[07-9]|[16]\\d)|8(?:[013-79]|8\\d))\\d{6}|(?:1\\d|9[0-57-9])\\d{6}|(?:2[3-6]|3[2-6]|4[2-4]|[5-7][2-5])48\\d{5}", , , , "91234567", , , [8, 9]],
                    [, , "1800(?:1\\d|2[019])\\d{4}", , , , "1800123456", , , [10]],
                    [, , "1900(?:1\\d|2[09])\\d{4}", , , , "1900123456", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "KH", 855, "00[14-9]", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[1-9]"], "0$1"],
                        [, "(\\d{4})(\\d{3})(\\d{3})", "$1 $2 $3", ["1"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                KI: [, [, , "(?:[37]\\d|6[0-79])\\d{6}|(?:[2-48]\\d|50)\\d{3}", , , , , , , [5, 8]],
                    [, , "(?:[24]\\d|3[1-9]|50|65(?:02[12]|12[56]|22[89]|[3-5]00)|7(?:27\\d\\d|3100|5(?:02[12]|12[56]|22[89]|[34](?:00|81)|500))|8[0-5])\\d{3}", , , , "31234"],
                    [, , "73140\\d{3}|(?:630[01]|730[0-5])\\d{4}|[67]200[01]\\d{3}", , , , "72001234", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "30(?:0[01]\\d\\d|12(?:11|20))\\d\\d", , , , "30010000", , , [8]], "KI", 686, "00", "0", , , "0", , , , , , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                KM: [, [, , "[3478]\\d{6}", , , , , , , [7],
                        [4]
                    ],
                    [, , "7[4-7]\\d{5}", , , , "7712345", , , , [4]],
                    [, , "[34]\\d{6}", , , , "3212345"],
                    [, , , , , , , , , [-1]],
                    [, , "8\\d{6}", , , , "8001234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "KM", 269, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3", ["[3478]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                KN: [, [, , "(?:[58]\\d\\d|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "869(?:2(?:29|36)|302|4(?:6[015-9]|70))\\d{4}", , , , "8692361234", , , , [7]],
                    [, , "869(?:5(?:5[6-8]|6[5-7])|66\\d|76[02-7])\\d{4}", , , , "8697652917", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "KN", 1, "011", "1", , , "1|([2-7]\\d{6})$", "869$1", , , , , [, , , , , , , , , [-1]], , "869", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                KP: [, [, , "85\\d{6}|(?:19\\d|2)\\d{7}", , , , , , , [8, 10],
                        [6, 7]
                    ],
                    [, , "(?:2\\d|85)\\d{6}", , , , "21234567", , , [8],
                        [6, 7]
                    ],
                    [, , "19[1-3]\\d{7}", , , , "1921234567", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "KP", 850, "00|99", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["8"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{4})", "$1 $2 $3", ["2"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["1"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , "238[02-9]\\d{4}|2(?:[0-24-9]\\d|3[0-79])\\d{5}", , , , , , , [8]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                KR: [, [, , "00[1-9]\\d{8,11}|(?:[12]|5\\d{3})\\d{7}|[13-6]\\d{9}|(?:[1-6]\\d|80)\\d{7}|[3-6]\\d{4,5}|(?:00|7)0\\d{8}", , , , , , , [5, 6, 8, 9, 10, 11, 12, 13, 14],
                        [3, 4, 7]
                    ],
                    [, , "(?:2|3[1-3]|[46][1-4]|5[1-5])[1-9]\\d{6,7}|(?:3[1-3]|[46][1-4]|5[1-5])1\\d{2,3}", , , , "22123456", , , [5, 6, 8, 9, 10],
                        [3, 4, 7]
                    ],
                    [, , "1(?:05(?:[0-8]\\d|9[1-5])|22[13]\\d)\\d{4,5}|1(?:0[1-46-9]|[16-9]\\d|2[013-9])\\d{6,7}", , , , "1020000000", , , [9, 10]],
                    [, , "00(?:308\\d{6,7}|798\\d{7,9})|(?:00368|80)\\d{7}", , , , "801234567", , , [9, 11, 12, 13, 14]],
                    [, , "60[2-9]\\d{6}", , , , "602345678", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , "50\\d{8,9}", , , , "5012345678", , , [10, 11]],
                    [, , "70\\d{8}", , , , "7012345678", , , [10]], "KR", 82, "00(?:[125689]|3(?:[46]5|91)|7(?:00|27|3|55|6[126]))", "0", , , "0(8(?:[1-46-8]|5\\d\\d))?", , , , [
                        [, "(\\d{5})", "$1", ["1[016-9]1", "1[016-9]11", "1[016-9]114"], "0$1"],
                        [, "(\\d{2})(\\d{3,4})", "$1-$2", ["(?:3[1-3]|[46][1-4]|5[1-5])1"], "0$1", "0$CC-$1"],
                        [, "(\\d{4})(\\d{4})", "$1-$2", ["1"]],
                        [, "(\\d)(\\d{3,4})(\\d{4})", "$1-$2-$3", ["2"], "0$1", "0$CC-$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1-$2-$3", ["60|8"], "0$1", "0$CC-$1"],
                        [, "(\\d{2})(\\d{3,4})(\\d{4})", "$1-$2-$3", ["[1346]|5[1-5]"], "0$1", "0$CC-$1"],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1-$2-$3", ["[57]"], "0$1", "0$CC-$1"],
                        [, "(\\d{5})(\\d{3})(\\d{3})", "$1 $2 $3", ["003", "0030"]],
                        [, "(\\d{2})(\\d{5})(\\d{4})", "$1-$2-$3", ["5"], "0$1", "0$CC-$1"],
                        [, "(\\d{5})(\\d{3,4})(\\d{4})", "$1 $2 $3", ["0"]],
                        [, "(\\d{5})(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3 $4", ["0"]]
                    ],
                    [
                        [, "(\\d{2})(\\d{3,4})", "$1-$2", ["(?:3[1-3]|[46][1-4]|5[1-5])1"], "0$1", "0$CC-$1"],
                        [, "(\\d{4})(\\d{4})", "$1-$2", ["1"]],
                        [, "(\\d)(\\d{3,4})(\\d{4})", "$1-$2-$3", ["2"], "0$1", "0$CC-$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1-$2-$3", ["60|8"], "0$1", "0$CC-$1"],
                        [, "(\\d{2})(\\d{3,4})(\\d{4})", "$1-$2-$3", ["[1346]|5[1-5]"], "0$1", "0$CC-$1"],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1-$2-$3", ["[57]"], "0$1", "0$CC-$1"],
                        [, "(\\d{2})(\\d{5})(\\d{4})", "$1-$2-$3", ["5"], "0$1", "0$CC-$1"]
                    ],
                    [, , "15\\d{7,8}", , , , "1523456789", , , [9, 10]], , , [, , "00(?:3(?:08\\d{6,7}|68\\d{7})|798\\d{7,9})", , , , , , , [11, 12, 13, 14]],
                    [, , "1(?:5(?:22|44|66|77|88|99)|6(?:[07]0|44|6[16]|88)|8(?:00|33|55|77|99))\\d{4}", , , , "15441234", , , [8]], , , [, , , , , , , , , [-1]]
                ],
                KW: [, [, , "(?:18|[2569]\\d\\d)\\d{5}", , , , , , , [7, 8]],
                    [, , "2(?:[23]\\d\\d|4(?:[1-35-9]\\d|44)|5(?:0[034]|[2-46]\\d|5[1-3]|7[1-7]))\\d{4}", , , , "22345678", , , [8]],
                    [, , "(?:5(?:2(?:22|5[25])|88[58])|6(?:222|444|70[013-9]|888|93[039])|9(?:11[01]|333))\\d{4}|(?:5(?:[05]\\d|1[0-7]|6[56])|6(?:0[034679]|5[015-9]|6\\d|7[67]|9[069])|9(?:0[09]|22|[4679]\\d|55|8[057-9]))\\d{5}", , , , "50012345", , , [8]],
                    [, , "18\\d{5}", , , , "1801234", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "KW", 965, "00", , , , , , , , [
                        [, "(\\d{4})(\\d{3,4})", "$1 $2", ["[169]|2(?:[235]|4[1-35-9])|52"]],
                        [, "(\\d{3})(\\d{5})", "$1 $2", ["[25]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                KY: [, [, , "(?:345|[58]\\d\\d|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "345(?:2(?:22|44)|444|6(?:23|38|40)|7(?:4[35-79]|6[6-9]|77)|8(?:00|1[45]|25|[48]8)|9(?:14|4[035-9]))\\d{4}", , , , "3452221234", , , , [7]],
                    [, , "345(?:32[1-9]|5(?:1[67]|2[5-79]|4[6-9]|50|76)|649|9(?:1[67]|2[2-9]|3[689]))\\d{4}", , , , "3453231234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002345678"],
                    [, , "(?:345976|900[2-9]\\d\\d)\\d{4}", , , , "9002345678"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "KY", 1, "011", "1", , , "1|([2-9]\\d{6})$", "345$1", , , , , [, , "345849\\d{4}", , , , "3458491234"], , "345", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                KZ: [, [, , "33622\\d{5}|(?:7\\d|80)\\d{8}", , , , , , , [10],
                        [5, 6]
                    ],
                    [, , "(?:33622|7(?:1(?:0(?:[23]\\d|4[0-3]|59|63)|1(?:[23]\\d|4[0-79]|59)|2(?:[23]\\d|59)|3(?:2\\d|3[0-79]|4[0-35-9]|59)|4(?:[24]\\d|3[013-9]|5[1-9])|5(?:2\\d|3[1-9]|4[0-7]|59)|6(?:[2-4]\\d|5[19]|61)|72\\d|8(?:[27]\\d|3[1-46-9]|4[0-5]))|2(?:1(?:[23]\\d|4[46-9]|5[3469])|2(?:2\\d|3[0679]|46|5[12679])|3(?:[2-4]\\d|5[139])|4(?:2\\d|3[1-35-9]|59)|5(?:[23]\\d|4[0-246-8]|59|61)|6(?:2\\d|3[1-9]|4[0-4]|59)|7(?:[2379]\\d|40|5[279])|8(?:[23]\\d|4[0-3]|59)|9(?:2\\d|3[124578]|59))))\\d{5}", , , , "7123456789", , , , [5, 6]],
                    [, , "7(?:0[0-25-8]|47|6[02-4]|7[15-8]|85)\\d{7}", , , , "7710009998"],
                    [, , "800\\d{7}", , , , "8001234567"],
                    [, , "809\\d{7}", , , , "8091234567"],
                    [, , , , , , , , , [-1]],
                    [, , "808\\d{7}", , , , "8081234567"],
                    [, , "751\\d{7}", , , , "7511234567"], "KZ", 7, "810", "8", , , "8", , "8~10", , , , [, , , , , , , , , [-1]], , "33|7", [, , "751\\d{7}"],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                LA: [, [, , "(?:2\\d|3)\\d{8}|(?:[235-8]\\d|41)\\d{6}", , , , , , , [8, 9, 10],
                        [6]
                    ],
                    [, , "(?:2[13]|[35-7][14]|41|8[1468])\\d{6}", , , , "21212862", , , [8],
                        [6]
                    ],
                    [, , "20(?:[29]\\d|5[24-689]|7[6-8])\\d{6}", , , , "2023123456", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "LA", 856, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["2[13]|3[14]|[4-8]"], "0$1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{3})", "$1 $2 $3 $4", ["3"], "0$1"],
                        [, "(\\d{2})(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3 $4", ["2"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "30\\d{7}", , , , "301234567", , , [9]], , , [, , , , , , , , , [-1]]
                ],
                LB: [, [, , "[7-9]\\d{7}|[13-9]\\d{6}", , , , , , , [7, 8]],
                    [, , "(?:(?:[14-69]\\d|8[02-9])\\d|7(?:[2-57]\\d|62|8[0-7]|9[04-9]))\\d{4}", , , , "1123456", , , [7]],
                    [, , "(?:(?:3|81)\\d|7(?:[01]\\d|6[013-9]|8[89]|9[1-3]))\\d{5}", , , , "71123456"],
                    [, , , , , , , , , [-1]],
                    [, , "9[01]\\d{6}", , , , "90123456", , , [8]],
                    [, , "80\\d{6}", , , , "80123456", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "LB", 961, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{3})(\\d{3})", "$1 $2 $3", ["[13-69]|7(?:[2-57]|62|8[0-7]|9[04-9])|8[02-9]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["[7-9]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                LC: [, [, , "(?:[58]\\d\\d|758|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "758(?:4(?:30|5\\d|6[2-9]|8[0-2])|57[0-2]|638)\\d{4}", , , , "7584305678", , , , [7]],
                    [, , "758(?:28[4-7]|384|4(?:6[01]|8[4-9])|5(?:1[89]|20|84)|7(?:1[2-9]|2\\d|3[01]))\\d{4}", , , , "7582845678", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "LC", 1, "011", "1", , , "1|([2-7]\\d{6})$", "758$1", , , , , [, , , , , , , , , [-1]], , "758", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                LI: [, [, , "90\\d{5}|(?:[2378]|6\\d\\d)\\d{6}", , , , , , , [7, 9]],
                    [, , "(?:2(?:01|1[27]|22|3\\d|6[02-578]|96)|3(?:33|40|7[0135-7]|8[048]|9[0269]))\\d{4}", , , , "2345678", , , [7]],
                    [, , "(?:6(?:4(?:89|9\\d)|5[0-3]\\d|6(?:0[0-7]|10|2[06-9]|39))\\d|7(?:[37-9]\\d|42|56))\\d{4}", , , , "660234567"],
                    [, , "80(?:02[28]|9\\d\\d)\\d\\d", , , , "8002222", , , [7]],
                    [, , "90(?:02[258]|1(?:23|3[14])|66[136])\\d\\d", , , , "9002222", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "LI", 423, "00", "0", , , "0|(1001)", , , , [
                        [, "(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3", ["[237-9]"], , "$CC $1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["69"], , "$CC $1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["6"], , "$CC $1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "870(?:28|87)\\d\\d", , , , "8702812", , , [7]], , , [, , "697(?:42|56|[78]\\d)\\d{4}", , , , "697861234", , , [9]]
                ],
                LK: [, [, , "(?:[1-7]\\d|[89]1)\\d{7}", , , , , , , [9],
                        [7]
                    ],
                    [, , "(?:[189]1|2[13-7]|3[1-8]|4[157]|5[12457]|6[35-7])[2-57]\\d{6}", , , , "112345678", , , , [7]],
                    [, , "7[0-25-8]\\d{7}", , , , "712345678"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "LK", 94, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["7"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[1-689]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "1973\\d{5}", , , , "197312345"], , , [, , , , , , , , , [-1]]
                ],
                LR: [, [, , "(?:2|33|5\\d|77|88)\\d{7}|[45]\\d{6}", , , , , , , [7, 8, 9]],
                    [, , "(?:2\\d{3}|33333)\\d{4}", , , , "21234567", , , [8, 9]],
                    [, , "(?:(?:330|555|(?:77|88)\\d)\\d|4[67])\\d{5}|5\\d{6}", , , , "770123456", , , [7, 9]],
                    [, , , , , , , , , [-1]],
                    [, , "332(?:02|[34]\\d)\\d{4}", , , , "332021234", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "LR", 231, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{3})(\\d{3})", "$1 $2 $3", ["[45]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["2"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[3578]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                LS: [, [, , "(?:[256]\\d\\d|800)\\d{5}", , , , , , , [8]],
                    [, , "2\\d{7}", , , , "22123456"],
                    [, , "[56]\\d{7}", , , , "50123456"],
                    [, , "800[256]\\d{4}", , , , "80021234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "LS", 266, "00", , , , , , , , [
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[2568]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                LT: [, [, , "(?:[3469]\\d|52|[78]0)\\d{6}", , , , , , , [8]],
                    [, , "(?:3[1478]|4[124-6]|52)\\d{6}", , , , "31234567"],
                    [, , "6\\d{7}", , , , "61234567"],
                    [, , "800\\d{5}", , , , "80012345"],
                    [, , "9(?:0[0239]|10)\\d{5}", , , , "90012345"],
                    [, , "808\\d{5}", , , , "80812345"],
                    [, , "700\\d{5}", , , , "70012345"],
                    [, , , , , , , , , [-1]], "LT", 370, "00", "8", , , "[08]", , , , [
                        [, "(\\d)(\\d{3})(\\d{4})", "$1 $2 $3", ["52[0-79]"], "(8-$1)", , 1],
                        [, "(\\d{3})(\\d{2})(\\d{3})", "$1 $2 $3", ["[7-9]"], "8 $1", , 1],
                        [, "(\\d{2})(\\d{6})", "$1 $2", ["37|4(?:[15]|6[1-8])"], "(8-$1)", , 1],
                        [, "(\\d{3})(\\d{5})", "$1 $2", ["[3-6]"], "(8-$1)", , 1]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "70[67]\\d{5}", , , , "70712345"], , , [, , , , , , , , , [-1]]
                ],
                LU: [, [, , "35[013-9]\\d{4,8}|6\\d{8}|35\\d{2,4}|(?:[2457-9]\\d|3[0-46-9])\\d{2,9}", , , , , , , [4, 5, 6, 7, 8, 9, 10, 11]],
                    [, , "(?:35[013-9]|80[2-9]|90[89])\\d{1,8}|(?:2[2-9]|3[0-46-9]|[457]\\d|8[13-9]|9[2-579])\\d{2,9}", , , , "27123456"],
                    [, , "6(?:[269][18]|5[158]|7[189]|81)\\d{6}", , , , "628123456", , , [9]],
                    [, , "800\\d{5}", , , , "80012345", , , [8]],
                    [, , "90[015]\\d{5}", , , , "90012345", , , [8]],
                    [, , "801\\d{5}", , , , "80112345", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , "20(?:1\\d{5}|[2-689]\\d{1,7})", , , , "20201234", , , [4, 5, 6, 7, 8, 9, 10]], "LU", 352, "00", , , , "(15(?:0[06]|1[12]|[35]5|4[04]|6[26]|77|88|99)\\d)", , , , [
                        [, "(\\d{2})(\\d{3})", "$1 $2", ["2(?:0[2-689]|[2-9])|[3-57]|8(?:0[2-9]|[13-9])|9(?:0[89]|[2-579])"], , "$CC $1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3", ["2(?:0[2-689]|[2-9])|[3-57]|8(?:0[2-9]|[13-9])|9(?:0[89]|[2-579])"], , "$CC $1"],
                        [, "(\\d{2})(\\d{2})(\\d{3})", "$1 $2 $3", ["20[2-689]"], , "$CC $1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{1,2})", "$1 $2 $3 $4", ["2(?:[0367]|4[3-8])"], , "$CC $1"],
                        [, "(\\d{3})(\\d{2})(\\d{3})", "$1 $2 $3", ["80[01]|90[015]"], , "$CC $1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{3})", "$1 $2 $3 $4", ["20"], , "$CC $1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["6"], , "$CC $1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})(\\d{1,2})", "$1 $2 $3 $4 $5", ["2(?:[0367]|4[3-8])"], , "$CC $1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{1,5})", "$1 $2 $3 $4", ["[3-57]|8[13-9]|9(?:0[89]|[2-579])|(?:2|80)[2-9]"], , "$CC $1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                LV: [, [, , "(?:[268]\\d|90)\\d{6}", , , , , , , [8]],
                    [, , "6\\d{7}", , , , "63123456"],
                    [, , "2\\d{7}", , , , "21234567"],
                    [, , "80\\d{6}", , , , "80123456"],
                    [, , "90\\d{6}", , , , "90123456"],
                    [, , "81\\d{6}", , , , "81123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "LV", 371, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["[269]|8[01]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                LY: [, [, , "[2-9]\\d{8}", , , , , , , [9],
                        [7]
                    ],
                    [, , "(?:2(?:0[56]|[1-6]\\d|7[124579]|8[124])|3(?:1\\d|2[2356])|4(?:[17]\\d|2[1-357]|5[2-4]|8[124])|5(?:[1347]\\d|2[1-469]|5[13-5]|8[1-4])|6(?:[1-479]\\d|5[2-57]|8[1-5])|7(?:[13]\\d|2[13-79])|8(?:[124]\\d|5[124]|84))\\d{6}", , , , "212345678", , , , [7]],
                    [, , "9[1-6]\\d{7}", , , , "912345678"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "LY", 218, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{7})", "$1-$2", ["[2-9]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MA: [, [, , "[5-8]\\d{8}", , , , , , , [9]],
                    [, , "5(?:29|38)[89]0\\d{4}|5(?:2(?:[015-7]\\d|2[2-9]|3[2-578]|4[2-46-8]|8[235-7]|90)|3(?:[0-4]\\d|[57][2-9]|6[2-8]|80|9[3-9])|(?:4[067]|5[03])\\d)\\d{5}", , , , "520123456"],
                    [, , "(?:6(?:[0-79]\\d|8[0-247-9])|7(?:0[06-8]|6[1267]|7[0-27]))\\d{6}", , , , "650123456"],
                    [, , "80\\d{7}", , , , "801234567"],
                    [, , "89\\d{7}", , , , "891234567"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "592(?:4[0-2]|93)\\d{4}", , , , "592401234"], "MA", 212, "00", "0", , , "0", , , , [
                        [, "(\\d{5})(\\d{4})", "$1-$2", ["5(?:29|38)", "5(?:29|38)[89]"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["5[45]"], "0$1"],
                        [, "(\\d{4})(\\d{5})", "$1-$2", ["5(?:2[2-489]|3[5-9]|9)|892"], "0$1"],
                        [, "(\\d{2})(\\d{7})", "$1-$2", ["8"], "0$1"],
                        [, "(\\d{3})(\\d{6})", "$1-$2", ["[5-7]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], 1, , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MC: [, [, , "870\\d{5}|(?:[349]|6\\d)\\d{7}", , , , , , , [8, 9]],
                    [, , "(?:870|9[2-47-9]\\d)\\d{5}", , , , "99123456", , , [8]],
                    [, , "4(?:4\\d|5[1-9])\\d{5}|(?:3|6\\d)\\d{7}", , , , "612345678"],
                    [, , "90\\d{6}", , , , "90123456", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "MC", 377, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{3})(\\d{2})", "$1 $2 $3", ["8"]],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["4"], "0$1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[39]"]],
                        [, "(\\d)(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4 $5", ["6"], "0$1"]
                    ],
                    [
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["4"], "0$1"],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[39]"]],
                        [, "(\\d)(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4 $5", ["6"], "0$1"]
                    ],
                    [, , , , , , , , , [-1]], , , [, , "870\\d{5}", , , , , , , [8]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MD: [, [, , "(?:[235-7]\\d|[89]0)\\d{6}", , , , , , , [8]],
                    [, , "(?:(?:2[1-9]|3[1-79])\\d|5(?:33|5[257]))\\d{5}", , , , "22212345"],
                    [, , "562\\d{5}|(?:6\\d|7[16-9])\\d{6}", , , , "62112345"],
                    [, , "800\\d{5}", , , , "80012345"],
                    [, , "90[056]\\d{5}", , , , "90012345"],
                    [, , "808\\d{5}", , , , "80812345"],
                    [, , , , , , , , , [-1]],
                    [, , "3[08]\\d{6}", , , , "30123456"], "MD", 373, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{5})", "$1 $2", ["[89]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["22|3"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{3})", "$1 $2 $3", ["[25-7]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "803\\d{5}", , , , "80312345"], , , [, , , , , , , , , [-1]]
                ],
                ME: [, [, , "(?:20|[3-79]\\d)\\d{6}|80\\d{6,7}", , , , , , , [8, 9],
                        [6]
                    ],
                    [, , "(?:20[2-8]|3(?:[0-2][2-7]|3[24-7])|4(?:0[2-467]|1[2467])|5(?:[01][2467]|2[2-467]))\\d{5}", , , , "30234567", , , [8],
                        [6]
                    ],
                    [, , "6(?:00|3[024]|6[0-25]|[7-9]\\d)\\d{5}", , , , "67622901", , , [8]],
                    [, , "80(?:[0-2578]|9\\d)\\d{5}", , , , "80080002"],
                    [, , "9(?:4[1568]|5[178])\\d{5}", , , , "94515151", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "78[1-49]\\d{5}", , , , "78108780", , , [8]], "ME", 382, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[2-9]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "77[1-9]\\d{5}", , , , "77273012", , , [8]], , , [, , , , , , , , , [-1]]
                ],
                MF: [, [, , "(?:590|69\\d|976)\\d{6}", , , , , , , [9]],
                    [, , "590(?:0[079]|[14]3|[27][79]|30|5[0-268]|87)\\d{4}", , , , "590271234"],
                    [, , "69(?:0\\d\\d|1(?:2[29]|3[0-5]))\\d{4}", , , , "690001234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "976[01]\\d{5}", , , , "976012345"], "MF", 590, "00", "0", , , "0", , , , , , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MG: [, [, , "[23]\\d{8}", , , , , , , [9],
                        [7]
                    ],
                    [, , "2072[29]\\d{4}|20(?:2\\d|4[47]|5[3467]|6[279]|7[35]|8[268]|9[245])\\d{5}", , , , "202123456", , , , [7]],
                    [, , "3[2-49]\\d{7}", , , , "321234567"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "22\\d{7}", , , , "221234567"], "MG", 261, "00", "0", , , "0|([24-9]\\d{6})$", "20$1", , , [
                        [, "(\\d{2})(\\d{2})(\\d{3})(\\d{2})", "$1 $2 $3 $4", ["[23]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MH: [, [, , "329\\d{4}|(?:[256]\\d|45)\\d{5}", , , , , , , [7]],
                    [, , "(?:247|528|625)\\d{4}", , , , "2471234"],
                    [, , "(?:(?:23|54)5|329|45[56])\\d{4}", , , , "2351234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "635\\d{4}", , , , "6351234"], "MH", 692, "011", "1", , , "1", , , , [
                        [, "(\\d{3})(\\d{4})", "$1-$2", ["[2-6]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MK: [, [, , "[2-578]\\d{7}", , , , , , , [8],
                        [6, 7]
                    ],
                    [, , "(?:2(?:[23]\\d|5[0-24578]|6[01]|82)|3(?:1[3-68]|[23][2-68]|4[23568])|4(?:[23][2-68]|4[3-68]|5[2568]|6[25-8]|7[24-68]|8[4-68]))\\d{5}", , , , "22012345", , , , [6, 7]],
                    [, , "7(?:(?:[0-25-8]\\d|3[2-4]|9[23])\\d|4(?:21|60))\\d{4}", , , , "72345678"],
                    [, , "800\\d{5}", , , , "80012345"],
                    [, , "5[02-9]\\d{6}", , , , "50012345"],
                    [, , "8(?:0[1-9]|[1-9]\\d)\\d{5}", , , , "80123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "MK", 389, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{3})(\\d{4})", "$1 $2 $3", ["2"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["[347]"], "0$1"],
                        [, "(\\d{3})(\\d)(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[58]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                ML: [, [, , "(?:[246-9]\\d|50)\\d{6}", , , , , , , [8]],
                    [, , "2(?:07[0-8]|12[67])\\d{4}|(?:2(?:02|1[4-689])|4(?:0[0-4]|4[1-39]))\\d{5}", , , , "20212345"],
                    [, , "2(?:079|17\\d)\\d{4}|(?:50|[679]\\d|8[239])\\d{6}", , , , "65012345"],
                    [, , "80\\d{6}", , , , "80012345"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "ML", 223, "00", , , , , , , , [
                        [, "(\\d{4})", "$1", ["67[057-9]|74[045]", "67(?:0[09]|[59]9|77|8[89])|74(?:0[02]|44|55)"]],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[24-9]"]]
                    ],
                    [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[24-9]"]]
                    ],
                    [, , , , , , , , , [-1]], , , [, , "80\\d{6}"],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MM: [, [, , "1\\d{5,7}|95\\d{6}|(?:[4-7]|9[0-46-9])\\d{6,8}|(?:2|8\\d)\\d{5,8}", , , , , , , [6, 7, 8, 9, 10],
                        [5]
                    ],
                    [, , "(?:1(?:(?:2\\d|3[56]|[89][0-6])\\d|4(?:2[2-469]|39|46|6[25]|7[0-3]|83)|6)|2(?:2(?:00|8[34])|4(?:0\\d|2[246]|39|46|62|7[0-3]|83)|51\\d\\d)|4(?:2(?:2\\d\\d|48[0-3])|3(?:20\\d|4(?:70|83)|56)|420\\d|5470)|6(?:0(?:[23]|88\\d)|(?:124|[56]2\\d)\\d|247[23]|3(?:20\\d|470)|4(?:2[04]\\d|47[23])|7(?:(?:3\\d|8[01459])\\d|4(?:39|60|7[013]))))\\d{4}|5(?:2(?:2\\d{5,6}|47[023]\\d{4})|(?:347[23]|4(?:2(?:1|86)|470)|522\\d|6(?:20\\d|483)|7(?:20\\d|48[0-2])|8(?:20\\d|47[02])|9(?:20\\d|47[01]))\\d{4})|7(?:(?:0470|4(?:25\\d|470)|5(?:202|470|96\\d))\\d{4}|1(?:20\\d{4,5}|4(?:70|83)\\d{4}))|8(?:1(?:2\\d{5,6}|4(?:10|7[01]\\d)\\d{3})|2(?:2\\d{5,6}|(?:320|490\\d)\\d{3})|(?:3(?:2\\d\\d|470)|4[24-7]|5(?:2\\d|4[1-9]|51)\\d|6[23])\\d{4})|(?:1[2-6]\\d|4(?:2[24-8]|3[2-7]|[46][2-6]|5[3-5])|5(?:[27][2-8]|3[2-68]|4[24-8]|5[23]|6[2-4]|8[24-7]|9[2-7])|6(?:[19]20|42[03-6]|(?:52|7[45])\\d)|7(?:[04][24-8]|[15][2-7]|22|3[2-4])|8(?:1[2-689]|2[2-8]|[35]2\\d))\\d{4}|25\\d{5,6}|(?:2[2-9]|6(?:1[2356]|[24][2-6]|3[24-6]|5[2-4]|6[2-8]|7[235-7]|8[245]|9[24])|8(?:3[24]|5[245]))\\d{4}", , , , "1234567", , , [6, 7, 8, 9],
                        [5]
                    ],
                    [, , "(?:17[01]|9(?:2(?:[0-4]|[56]\\d\\d)|(?:3(?:[0-36]|4\\d)|6(?:6[0-2]|[7-9]\\d)|7(?:3|[5-9]\\d)|8(?:8[4-9]|9\\d)|9[5-8]\\d)\\d|4(?:(?:[0245]\\d|[1379])\\d|88)|5[0-6])\\d)\\d{4}|9[69]1\\d{6}|9(?:[68]\\d|9[089])\\d{5}", , , , "92123456", , , [7, 8, 9, 10]],
                    [, , "80080(?:[01][1-9]|2\\d)\\d{3}", , , , "8008001234", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "1333\\d{4}|[12]468\\d{4}", , , , "13331234", , , [8]], "MM", 95, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{2})(\\d{3})", "$1 $2 $3", ["16|2"], "0$1"],
                        [, "(\\d{2})(\\d{2})(\\d{3})", "$1 $2 $3", ["[45]|6(?:0[23]|[1-689]|7[235-7])|7(?:[0-4]|5[2-7])|8[1-6]"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[12]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[4-7]|8[1-35]"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{4,6})", "$1 $2 $3", ["9(?:2[0-4]|[35-9]|4[137-9])"], "0$1"],
                        [, "(\\d)(\\d{4})(\\d{4})", "$1 $2 $3", ["2"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["8"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3 $4", ["92"], "0$1"],
                        [, "(\\d)(\\d{5})(\\d{4})", "$1 $2 $3", ["9"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MN: [, [, , "[12]\\d{7,9}|[57-9]\\d{7}", , , , , , , [8, 9, 10],
                        [4, 5, 6]
                    ],
                    [, , "[12](?:3[2-8]|4[2-68]|5[1-4689])\\d{6,7}|(?:11(?:3\\d|4[568])|(?:(?:21|5[0568])\\d|70[0-5])\\d)\\d{4}|[12]2(?:[1-3]\\d{5,6}|7\\d{6})", , , , "50123456", , , , [4, 5, 6]],
                    [, , "(?:8(?:[05689]\\d|3[01])|9(?:[014-9]\\d|20|3[0-4]))\\d{5}", , , , "88123456", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "7(?:100|5(?:0[0579]|1[015]|[389]5|[57][57])|(?:6[0167]|7\\d|8[01])\\d)\\d{4}", , , , "75153456", , , [8]], "MN", 976, "001", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{2})(\\d{4})", "$1 $2 $3", ["[12]1"], "0$1"],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[57-9]"]],
                        [, "(\\d{3})(\\d{5,6})", "$1 $2", ["[12]2[1-3]"], "0$1"],
                        [, "(\\d{4})(\\d{5,6})", "$1 $2", ["[12](?:27|3[2-8]|4[2-68]|5[1-4689])", "[12](?:27|3[2-8]|4[2-68]|5[1-4689])[0-3]"], "0$1"],
                        [, "(\\d{5})(\\d{4,5})", "$1 $2", ["[12]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MO: [, [, , "(?:28|[68]\\d)\\d{6}", , , , , , , [8]],
                    [, , "(?:28[2-57-9]|8(?:11|[2-57-9]\\d))\\d{5}", , , , "28212345"],
                    [, , "6(?:[2356]\\d\\d|8(?:[02][5-9]|[1478]\\d|[356][0-4]))\\d{4}", , , , "66123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "MO", 853, "00", , , , , , , , [
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[268]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MP: [, [, , "[58]\\d{9}|(?:67|90)0\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "670(?:2(?:3[3-7]|56|8[5-8])|32[1-38]|4(?:33|8[348])|5(?:32|55|88)|6(?:64|70|82)|78[3589]|8[3-9]8|989)\\d{4}", , , , "6702345678", , , , [7]],
                    [, , "670(?:2(?:3[3-7]|56|8[5-8])|32[1-38]|4(?:33|8[348])|5(?:32|55|88)|6(?:64|70|82)|78[3589]|8[3-9]8|989)\\d{4}", , , , "6702345678", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "MP", 1, "011", "1", , , "1|([2-9]\\d{6})$", "670$1", , 1, , , [, , , , , , , , , [-1]], , "670", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MQ: [, [, , "69\\d{7}|(?:59|97)6\\d{6}", , , , , , , [9]],
                    [, , "596(?:0[0-7]|10|2[7-9]|3[05-9]|4[0-46-8]|[5-7]\\d|8[09]|9[4-8])\\d{4}", , , , "596301234"],
                    [, , "69(?:6(?:[0-47-9]\\d|5[0-6]|6[0-4])|727)\\d{4}", , , , "696201234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "976(?:6[1-9]|7[0-367])\\d{4}", , , , "976612345"], "MQ", 596, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[569]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MR: [, [, , "(?:[2-4]\\d\\d|800)\\d{5}", , , , , , , [8]],
                    [, , "(?:25[08]|35\\d|45[1-7])\\d{5}", , , , "35123456"],
                    [, , "[2-4][0-46-9]\\d{6}", , , , "22123456"],
                    [, , "800\\d{5}", , , , "80012345"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "MR", 222, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[2-48]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MS: [, [, , "66449\\d{5}|(?:[58]\\d\\d|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "664491\\d{4}", , , , "6644912345", , , , [7]],
                    [, , "66449[2-6]\\d{4}", , , , "6644923456", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "MS", 1, "011", "1", , , "1|(4\\d{6})$", "664$1", , , , , [, , , , , , , , , [-1]], , "664", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MT: [, [, , "3550\\d{4}|(?:[2579]\\d\\d|800)\\d{5}", , , , , , , [8]],
                    [, , "2(?:0(?:[19]\\d|3[1-4]|6[059])|[1-357]\\d\\d)\\d{4}", , , , "21001234"],
                    [, , "(?:7(?:210|[79]\\d\\d)|9(?:2(?:1[01]|31)|69[67]|8(?:1[1-3]|89|97)|9\\d\\d))\\d{4}", , , , "96961234"],
                    [, , "800[3467]\\d{4}", , , , "80071234"],
                    [, , "5(?:0(?:0(?:37|43)|(?:6\\d|70|9[0168])\\d)|[12]\\d0[1-5])\\d{3}", , , , "50037123"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "3550\\d{4}", , , , "35501234"], "MT", 356, "00", , , , , , , , [
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[2357-9]"]]
                    ], , [, , "7117\\d{4}", , , , "71171234"], , , [, , , , , , , , , [-1]],
                    [, , "501\\d{5}", , , , "50112345"], , , [, , , , , , , , , [-1]]
                ],
                MU: [, [, , "(?:[2-468]|5\\d)\\d{6}", , , , , , , [7, 8]],
                    [, , "(?:2(?:[03478]\\d|1[0-7]|6[0-79])|4(?:[013568]\\d|2[4-7])|54(?:[34]\\d|71)|6\\d\\d|8(?:14|3[129]))\\d{4}", , , , "54480123"],
                    [, , "5(?:4(?:2[1-389]|7[1-9])|87[15-8])\\d{4}|5(?:2[589]|4[3489]|7\\d|8[0-689]|9[0-8])\\d{5}", , , , "52512345", , , [8]],
                    [, , "80[0-2]\\d{4}", , , , "8001234", , , [7]],
                    [, , "30\\d{5}", , , , "3012345", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "3(?:20|9\\d)\\d{4}", , , , "3201234", , , [7]], "MU", 230, "0(?:0|[24-7]0|3[03])", , , , , , "020", , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[2-46]|8[013]"]],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["5"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MV: [, [, , "(?:800|9[0-57-9]\\d)\\d{7}|[34679]\\d{6}", , , , , , , [7, 10]],
                    [, , "(?:3(?:0[0-3]|3[0-59])|6(?:[57][02468]|6[024-68]|8[024689]))\\d{4}", , , , "6701234", , , [7]],
                    [, , "46[46]\\d{4}|(?:7[2-9]|9[13-9])\\d{5}", , , , "7712345", , , [7]],
                    [, , "800\\d{7}", , , , "8001234567", , , [10]],
                    [, , "900\\d{7}", , , , "9001234567", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "MV", 960, "0(?:0|19)", , , , , , "00", , [
                        [, "(\\d{3})(\\d{4})", "$1-$2", ["[3467]|9[13-9]"]],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["[89]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "4[05]0\\d{4}", , , , "4001234", , , [7]], , , [, , , , , , , , , [-1]]
                ],
                MW: [, [, , "1\\d{6}(?:\\d{2})?|(?:[23]1|77|88|99)\\d{7}", , , , , , , [7, 9]],
                    [, , "(?:1[2-9]|21\\d\\d)\\d{5}", , , , "1234567"],
                    [, , "111\\d{6}|(?:77|88|99)\\d{7}", , , , "991234567", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "31\\d{7}", , , , "310123456", , , [9]], "MW", 265, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{3})(\\d{3})", "$1 $2 $3", ["1[2-9]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["2"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["3"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[17-9]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MX: [, [, , "(?:1(?:[01467]\\d|[2359][1-9]|8[1-79])|[2-9]\\d)\\d{8}", , , , , , , [10, 11],
                        [7, 8]
                    ],
                    [, , "(?:2(?:0[01]|2[1-9]|3[1-35-8]|4[13-9]|7[1-689]|8[1-578]|9[467])|3(?:1[1-79]|[2458][1-9]|3\\d|7[1-8]|9[1-5])|4(?:1[1-57-9]|[24-7][1-9]|3[1-8]|8[1-35-9]|9[2-689])|5(?:[56]\\d|88|9[1-79])|6(?:1[2-68]|[2-4][1-9]|5[1-3689]|6[1-57-9]|7[1-7]|8[67]|9[4-8])|7(?:[1-467][1-9]|5[13-9]|8[1-69]|9[17])|8(?:1\\d|2[13-689]|3[1-6]|4[124-6]|6[1246-9]|7[1-378]|9[12479])|9(?:1[346-9]|2[1-4]|3[2-46-8]|5[1348]|[69][1-9]|7[12]|8[1-8]))\\d{7}", , , , "2001234567", , , [10],
                        [7, 8]
                    ],
                    [, , "(?:1(?:2(?:2[1-9]|3[1-35-8]|4[13-9]|7[1-689]|8[1-578]|9[467])|3(?:1[1-79]|[2458][1-9]|3\\d|7[1-8]|9[1-5])|4(?:1[1-57-9]|[24-7][1-9]|3[1-8]|8[1-35-9]|9[2-689])|5(?:[56]\\d|88|9[1-79])|6(?:1[2-68]|[2-4][1-9]|5[1-3689]|6[1-57-9]|7[1-7]|8[67]|9[4-8])|7(?:[1-467][1-9]|5[13-9]|8[1-69]|9[17])|8(?:1\\d|2[13-689]|3[1-6]|4[124-6]|6[1246-9]|7[1-378]|9[12479])|9(?:1[346-9]|2[1-4]|3[2-46-8]|5[1348]|[69][1-9]|7[12]|8[1-8]))|2(?:2[1-9]|3[1-35-8]|4[13-9]|7[1-689]|8[1-578]|9[467])|3(?:1[1-79]|[2458][1-9]|3\\d|7[1-8]|9[1-5])|4(?:1[1-57-9]|[24-7][1-9]|3[1-8]|8[1-35-9]|9[2-689])|5(?:[56]\\d|88|9[1-79])|6(?:1[2-68]|[2-4][1-9]|5[1-3689]|6[1-57-9]|7[1-7]|8[67]|9[4-8])|7(?:[1-467][1-9]|5[13-9]|8[1-69]|9[17])|8(?:1\\d|2[13-689]|3[1-6]|4[124-6]|6[1246-9]|7[1-378]|9[12479])|9(?:1[346-9]|2[1-4]|3[2-46-8]|5[1348]|[69][1-9]|7[12]|8[1-8]))\\d{7}", , , , "12221234567", , , , [7, 8]],
                    [, , "8(?:00|88)\\d{7}", , , , "8001234567", , , [10]],
                    [, , "900\\d{7}", , , , "9001234567", , , [10]],
                    [, , "300\\d{7}", , , , "3001234567", , , [10]],
                    [, , "500\\d{7}", , , , "5001234567", , , [10]],
                    [, , , , , , , , , [-1]], "MX", 52, "0[09]", "01", , , "0(?:[12]|4[45])|1", , "00", , [
                        [, "(\\d{5})", "$1", ["53"]],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3", ["33|5[56]|81"], , , 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["[2-9]"], , , 1],
                        [, "(\\d)(\\d{2})(\\d{4})(\\d{4})", "$2 $3 $4", ["1(?:33|5[56]|81)"], , , 1],
                        [, "(\\d)(\\d{3})(\\d{3})(\\d{4})", "$2 $3 $4", ["1"], , , 1]
                    ],
                    [
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3", ["33|5[56]|81"], , , 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["[2-9]"], , , 1],
                        [, "(\\d)(\\d{2})(\\d{4})(\\d{4})", "$2 $3 $4", ["1(?:33|5[56]|81)"], , , 1],
                        [, "(\\d)(\\d{3})(\\d{3})(\\d{4})", "$2 $3 $4", ["1"], , , 1]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MY: [, [, , "1\\d{8,9}|(?:3\\d|[4-9])\\d{7}", , , , , , , [8, 9, 10],
                        [6, 7]
                    ],
                    [, , "(?:3(?:2[0-36-9]|3[0-368]|4[0-278]|5[0-24-8]|6[0-467]|7[1246-9]|8\\d|9[0-57])\\d|4(?:2[0-689]|[3-79]\\d|8[1-35689])|5(?:2[0-589]|[3468]\\d|5[0-489]|7[1-9]|9[23])|6(?:2[2-9]|3[1357-9]|[46]\\d|5[0-6]|7[0-35-9]|85|9[015-8])|7(?:[2579]\\d|3[03-68]|4[0-8]|6[5-9]|8[0-35-9])|8(?:[24][2-8]|3[2-5]|5[2-7]|6[2-589]|7[2-578]|[89][2-9])|9(?:0[57]|13|[25-7]\\d|[3489][0-8]))\\d{5}", , , , "323856789", , , [8, 9],
                        [6, 7]
                    ],
                    [, , "1(?:4400|8(?:47|8[27])[0-4])\\d{4}|1(?:0(?:[23568]\\d|4[0-6]|7[016-9]|9[0-8])|1(?:[1-5]\\d\\d|6(?:0[5-9]|[1-9]\\d)|7(?:0[3-9]|1[01]))|(?:[2379][2-9]|4[235-9]|(?:59|6)\\d)\\d|8(?:1[23]|[236]\\d|4[06]|5[7-9]|7[016-9]|8[01]|9[0-8]))\\d{5}", , , , "123456789", , , [9, 10]],
                    [, , "1[378]00\\d{6}", , , , "1300123456", , , [10]],
                    [, , "1600\\d{6}", , , , "1600123456", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "154(?:6(?:0\\d|1[0-3])|8(?:[25]1|4[0189]|7[0-4679]))\\d{4}", , , , "1546012345", , , [10]], "MY", 60, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{3})(\\d{4})", "$1-$2 $3", ["[4-79]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1-$2 $3", ["1(?:[02469]|[37][2-9]|8[1-9])|8"], "0$1"],
                        [, "(\\d)(\\d{4})(\\d{4})", "$1-$2 $3", ["3"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{2})(\\d{4})", "$1-$2-$3-$4", ["1[36-8]"]],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1-$2 $3", ["15"], "0$1"],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1-$2 $3", ["1"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                MZ: [, [, , "(?:2|8\\d)\\d{7}", , , , , , , [8, 9]],
                    [, , "2(?:[1346]\\d|5[0-2]|[78][12]|93)\\d{5}", , , , "21123456", , , [8]],
                    [, , "8[2-7]\\d{7}", , , , "821234567", , , [9]],
                    [, , "800\\d{6}", , , , "800123456", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "MZ", 258, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["2|8[2-7]"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["8"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                NA: [, [, , "[68]\\d{7,8}", , , , , , , [8, 9]],
                    [, , "6(?:1(?:[02-4]\\d\\d|17)|2(?:17|54\\d|69|70)|3(?:17|2[0237]\\d|34|6[289]|7[01]|81)|4(?:17|(?:27|41|5[25])\\d|69|7[01])|5(?:17|2[236-8]\\d|69|7[01])|6(?:17|26\\d|38|42|69|7[01])|7(?:17|(?:2[2-4]|30)\\d|6[89]|7[01]))\\d{4}|6(?:1(?:2[2-7]|3[01378]|4[0-4]|69|7[014])|25[0-46-8]|32\\d|4(?:2[0-27]|4[016]|5[0-357])|52[02-9]|62[56]|7(?:2[2-69]|3[013]))\\d{4}", , , , "61221234"],
                    [, , "(?:60|8[1245])\\d{7}", , , , "811234567", , , [9]],
                    [, , "80\\d{7}", , , , "800123456", , , [9]],
                    [, , "8701\\d{5}", , , , "870123456", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "8(?:3\\d\\d|86)\\d{5}", , , , "88612345"], "NA", 264, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["88"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["6"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["87"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["8"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                NC: [, [, , "[2-57-9]\\d{5}", , , , , , , [6]],
                    [, , "(?:2[03-9]|3[0-5]|4[1-7]|88)\\d{4}", , , , "201234"],
                    [, , "(?:5[0-4]|[79]\\d|8[0-79])\\d{4}", , , , "751234"],
                    [, , , , , , , , , [-1]],
                    [, , "36\\d{4}", , , , "366711"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "NC", 687, "00", , , , , , , , [
                        [, "(\\d{3})", "$1", ["5[6-8]"]],
                        [, "(\\d{2})(\\d{2})(\\d{2})", "$1.$2.$3", ["[2-57-9]"]]
                    ],
                    [
                        [, "(\\d{2})(\\d{2})(\\d{2})", "$1.$2.$3", ["[2-57-9]"]]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                NE: [, [, , "[0289]\\d{7}", , , , , , , [8]],
                    [, , "2(?:0(?:20|3[1-8]|4[13-5]|5[14]|6[14578]|7[1-578])|1(?:4[145]|5[14]|6[14-68]|7[169]|88))\\d{4}", , , , "20201234"],
                    [, , "(?:8[014589]|9\\d)\\d{6}", , , , "93123456"],
                    [, , "08\\d{6}", , , , "08123456"],
                    [, , "09\\d{6}", , , , "09123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "NE", 227, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["08"]],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[089]|2[01]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                NF: [, [, , "[13]\\d{5}", , , , , , , [6],
                        [5]
                    ],
                    [, , "(?:1(?:06|17|28|39)|3[0-2]\\d)\\d{3}", , , , "106609", , , , [5]],
                    [, , "3[58]\\d{4}", , , , "381234", , , , [5]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "NF", 672, "00", , , , "([0-258]\\d{4})$", "3$1", , , [
                        [, "(\\d{2})(\\d{4})", "$1 $2", ["1"]],
                        [, "(\\d)(\\d{5})", "$1 $2", ["3"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                NG: [, [, , "(?:[124-7]|9\\d{3})\\d{6}|[1-9]\\d{7}|[78]\\d{9,13}", , , , , , , [7, 8, 10, 11, 12, 13, 14],
                        [5, 6]
                    ],
                    [, , "(?:(?:[1-356]\\d|4[02-8]|7[0-79]|8[2-9])\\d|9(?:0[3-9]|[1-9]\\d))\\d{5}|(?:[12]\\d|4[147]|5[14579]|6[1578]|7[0-3578])\\d{5}", , , , "18040123", , , [7, 8],
                        [5, 6]
                    ],
                    [, , "(?:707[0-3]|8(?:01|19)[01])\\d{6}|(?:70[1-689]|8(?:0[2-9]|1[0-8])|90[1-35-9])\\d{7}", , , , "8021234567", , , [10]],
                    [, , "800\\d{7,11}", , , , "80017591759", , , [10, 11, 12, 13, 14]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "NG", 234, "009", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{2})(\\d{3})", "$1 $2 $3", ["78"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[12]|9(?:0[3-9]|[1-9])"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2,3})", "$1 $2 $3", ["[3-7]|8[2-9]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[7-9]"], "0$1"],
                        [, "(\\d{3})(\\d{4})(\\d{4,5})", "$1 $2 $3", ["[78]"], "0$1"],
                        [, "(\\d{3})(\\d{5})(\\d{5,6})", "$1 $2 $3", ["[78]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "700\\d{7,11}", , , , "7001234567", , , [10, 11, 12, 13, 14]], , , [, , , , , , , , , [-1]]
                ],
                NI: [, [, , "(?:1800|[25-8]\\d{3})\\d{4}", , , , , , , [8]],
                    [, , "2\\d{7}", , , , "21234567"],
                    [, , "(?:5(?:5[0-7]|[78]\\d)|6(?:20|3[035]|4[045]|5[05]|77|8[1-9]|9[059])|(?:7[5-8]|8\\d)\\d)\\d{5}", , , , "81234567"],
                    [, , "1800\\d{4}", , , , "18001234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "NI", 505, "00", , , , , , , , [
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[125-8]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                NL: [, [, , "(?:[124-7]\\d\\d|3(?:[02-9]\\d|1[0-8]))\\d{6}|[89]\\d{6,9}|1\\d{4,5}", , , , , , , [5, 6, 7, 8, 9, 10]],
                    [, , "(?:1(?:[035]\\d|1[13-578]|6[124-8]|7[24]|8[0-467])|2(?:[0346]\\d|2[2-46-9]|5[125]|9[479])|3(?:[03568]\\d|1[3-8]|2[01]|4[1-8])|4(?:[0356]\\d|1[1-368]|7[58]|8[15-8]|9[23579])|5(?:[0358]\\d|[19][1-9]|2[1-57-9]|4[13-8]|6[126]|7[0-3578])|7\\d\\d)\\d{6}", , , , "101234567", , , [9]],
                    [, , "6[1-58]\\d{7}", , , , "612345678", , , [9]],
                    [, , "800\\d{4,7}", , , , "8001234", , , [7, 8, 9, 10]],
                    [, , "90[069]\\d{4,7}", , , , "9061234", , , [7, 8, 9, 10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "(?:85|91)\\d{7}", , , , "851234567", , , [9]], "NL", 31, "00", "0", , , "0", , , , [
                        [, "(\\d{4})", "$1", ["1[238]|[34]"]],
                        [, "(\\d{2})(\\d{3,4})", "$1 $2", ["14"]],
                        [, "(\\d{6})", "$1", ["1"]],
                        [, "(\\d{3})(\\d{4,7})", "$1 $2", ["[89]0"], "0$1"],
                        [, "(\\d{2})(\\d{7})", "$1 $2", ["66"], "0$1"],
                        [, "(\\d)(\\d{8})", "$1 $2", ["6"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["1[16-8]|2[259]|3[124]|4[17-9]|5[124679]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[1-57-9]"], "0$1"]
                    ],
                    [
                        [, "(\\d{3})(\\d{4,7})", "$1 $2", ["[89]0"], "0$1"],
                        [, "(\\d{2})(\\d{7})", "$1 $2", ["66"], "0$1"],
                        [, "(\\d)(\\d{8})", "$1 $2", ["6"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["1[16-8]|2[259]|3[124]|4[17-9]|5[124679]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[1-57-9]"], "0$1"]
                    ],
                    [, , "66\\d{7}", , , , "662345678", , , [9]], , , [, , "140(?:1[035]|2[0346]|3[03568]|4[0356]|5[0358]|8[458])|140(?:1[16-8]|2[259]|3[124]|4[17-9]|5[124679]|7)\\d", , , , , , , [5, 6]],
                    [, , "140(?:1[035]|2[0346]|3[03568]|4[0356]|5[0358]|8[458])|(?:140(?:1[16-8]|2[259]|3[124]|4[17-9]|5[124679]|7)|8[478]\\d{6})\\d", , , , "14020", , , [5, 6, 9]], , , [, , , , , , , , , [-1]]
                ],
                NO: [, [, , "(?:0|[2-9]\\d{3})\\d{4}", , , , , , , [5, 8]],
                    [, , "(?:2[1-4]|3[1-3578]|5[1-35-7]|6[1-4679]|7[0-8])\\d{6}", , , , "21234567", , , [8]],
                    [, , "(?:4[015-8]|5[89]|9\\d)\\d{6}", , , , "40612345", , , [8]],
                    [, , "80[01]\\d{5}", , , , "80012345", , , [8]],
                    [, , "82[09]\\d{5}", , , , "82012345", , , [8]],
                    [, , "810(?:0[0-6]|[2-8]\\d)\\d{3}", , , , "81021234", , , [8]],
                    [, , "880\\d{5}", , , , "88012345", , , [8]],
                    [, , "85[0-5]\\d{5}", , , , "85012345", , , [8]], "NO", 47, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{2})(\\d{3})", "$1 $2 $3", ["[489]|5[89]"]],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[235-7]"]]
                    ], , [, , , , , , , , , [-1]], 1, "[02-689]|7[0-8]", [, , , , , , , , , [-1]],
                    [, , "(?:0[2-9]|81(?:0(?:0[7-9]|1\\d)|5\\d\\d))\\d{3}", , , , "02000"], , , [, , "81[23]\\d{5}", , , , "81212345", , , [8]]
                ],
                NP: [, [, , "9\\d{9}|[1-9]\\d{7}", , , , , , , [8, 10],
                        [6, 7]
                    ],
                    [, , "1[0-6]\\d{6}|(?:2[13-79]|3[135-8]|4[146-9]|5[135-7]|6[13-9]|7[15-9]|8[1-46-9]|9[1-79])[2-6]\\d{5}", , , , "14567890", , , [8],
                        [6, 7]
                    ],
                    [, , "9(?:6[0-3]|7[245]|8[0-24-68])\\d{7}", , , , "9841234567", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "NP", 977, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{7})", "$1-$2", ["1[2-6]"], "0$1"],
                        [, "(\\d{2})(\\d{6})", "$1-$2", ["[1-8]|9(?:[1-579]|6[2-6])"], "0$1"],
                        [, "(\\d{3})(\\d{7})", "$1-$2", ["9"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                NR: [, [, , "(?:444|55\\d|888)\\d{4}", , , , , , , [7]],
                    [, , "(?:444|888)\\d{4}", , , , "4441234"],
                    [, , "55[4-9]\\d{4}", , , , "5551234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "NR", 674, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[458]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                NU: [, [, , "(?:[47]|888\\d)\\d{3}", , , , , , , [4, 7]],
                    [, , "[47]\\d{3}", , , , "7012", , , [4]],
                    [, , "888[4-9]\\d{3}", , , , "8884012", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "NU", 683, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["8"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                NZ: [, [, , "[28]\\d{7,9}|[346]\\d{7}|(?:508|[79]\\d)\\d{6,7}", , , , , , , [8, 9, 10],
                        [7]
                    ],
                    [, , "24099\\d{3}|(?:3[2-79]|[49][2-9]|6[235-9]|7[2-57-9])\\d{6}", , , , "32345678", , , [8],
                        [7]
                    ],
                    [, , "2[0-28]\\d{8}|2[0-27-9]\\d{7}|21\\d{6}", , , , "211234567"],
                    [, , "508\\d{6,7}|80\\d{6,8}", , , , "800123456"],
                    [, , "90\\d{6,7}", , , , "900123456", , , [8, 9]],
                    [, , , , , , , , , [-1]],
                    [, , "70\\d{7}", , , , "701234567", , , [9]],
                    [, , , , , , , , , [-1]], "NZ", 64, "0(?:0|161)", "0", , , "0", , "00", , [
                        [, "(\\d{3})(\\d{2})(\\d{3})", "$1 $2 $3", ["[89]0"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{4})", "$1-$2 $3", ["24|[346]|7[2-57-9]|9[2-9]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["2(?:10|74)|[59]|80"], "0$1"],
                        [, "(\\d{2})(\\d{3,4})(\\d{4})", "$1 $2 $3", ["2[028]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,5})", "$1 $2 $3", ["2(?:[169]|7[0-35-9])|7|86"], "0$1"]
                    ], , [, , "[28]6\\d{6,7}", , , , "26123456", , , [8, 9]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                OM: [, [, , "(?:[279]\\d{3}|500)\\d{4}|8007\\d{4,5}", , , , , , , [7, 8, 9]],
                    [, , "2[2-6]\\d{6}", , , , "23123456", , , [8]],
                    [, , "90[1-9]\\d{5}|(?:7[1289]|9[1-9])\\d{6}", , , , "92123456", , , [8]],
                    [, , "500\\d{4}|8007\\d{4,5}", , , , "80071234"],
                    [, , "900\\d{5}", , , , "90012345", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "OM", 968, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4,6})", "$1 $2", ["[58]"]],
                        [, "(\\d{2})(\\d{6})", "$1 $2", ["2"]],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[79]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                PA: [, [, , "(?:[1-57-9]|6\\d)\\d{6}", , , , , , , [7, 8]],
                    [, , "(?:1(?:0\\d|1[479]|2[37]|3[0137]|4[17]|5[05]|[68][58]|7[0167]|9[39])|2(?:[0235-79]\\d|1[0-7]|4[013-9]|8[026-9])|3(?:[089]\\d|1[014-7]|2[0-35]|33|4[0-579]|55|6[068]|7[06-8])|4(?:00|3[0-579]|4\\d|7[0-57-9])|5(?:[01]\\d|2[0-7]|[56]0|79)|7(?:0[09]|2[0-26-8]|3[03]|4[04]|5[05-9]|6[05]|7[0-24-9]|8[7-9]|90)|8(?:09|2[89]|3\\d|4[0-24-689]|5[014]|8[02])|9(?:0[5-9]|1[0135-8]|2[036-9]|3[35-79]|40|5[0457-9]|6[05-9]|7[04-9]|8[35-8]|9\\d))\\d{4}", , , , "2001234", , , [7]],
                    [, , "(?:1[16]1|21[89]|6(?:[02-9]\\d|1[0-6])\\d|8(?:1[01]|7[23]))\\d{4}", , , , "61234567"],
                    [, , "800\\d{4}", , , , "8001234", , , [7]],
                    [, , "(?:8(?:22|55|60|7[78]|86)|9(?:00|81))\\d{4}", , , , "8601234", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "PA", 507, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1-$2", ["[1-57-9]"]],
                        [, "(\\d{4})(\\d{4})", "$1-$2", ["6"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                PE: [, [, , "(?:[14-8]|9\\d)\\d{7}", , , , , , , [8, 9],
                        [6, 7]
                    ],
                    [, , "19(?:[02-68]\\d|1[035-9]|7[0-689]|9[1-9])\\d{4}|(?:1[0-8]|4[1-4]|5[1-46]|6[1-7]|7[2-46]|8[2-4])\\d{6}", , , , "11234567", , , [8],
                        [6, 7]
                    ],
                    [, , "9\\d{8}", , , , "912345678", , , [9]],
                    [, , "800\\d{5}", , , , "80012345", , , [8]],
                    [, , "805\\d{5}", , , , "80512345", , , [8]],
                    [, , "801\\d{5}", , , , "80112345", , , [8]],
                    [, , "80[24]\\d{5}", , , , "80212345", , , [8]],
                    [, , , , , , , , , [-1]], "PE", 51, "19(?:1[124]|77|90)00", "0", " Anexo ", , "0", , , , [
                        [, "(\\d{3})(\\d{5})", "$1 $2", ["80"], "(0$1)"],
                        [, "(\\d)(\\d{7})", "$1 $2", ["1"], "(0$1)"],
                        [, "(\\d{2})(\\d{6})", "$1 $2", ["[4-8]"], "(0$1)"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["9"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                PF: [, [, , "[48]\\d{7}|4\\d{5}", , , , , , , [6, 8]],
                    [, , "4(?:[09][4-689]\\d|4)\\d{4}", , , , "40412345"],
                    [, , "8[7-9]\\d{6}", , , , "87123456", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "PF", 689, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3", ["44"]],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[48]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , "44\\d{4}", , , , , , , [6]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                PG: [, [, , "(?:180|[78]\\d{3})\\d{4}|(?:[2-589]\\d|64)\\d{5}", , , , , , , [7, 8]],
                    [, , "(?:64[1-9]|7730|85[02-46-9])\\d{4}|(?:3[0-2]|4[257]|5[34]|77[0-24]|9[78])\\d{5}", , , , "3123456"],
                    [, , "775\\d{5}|(?:7[0-689]|81)\\d{6}", , , , "70123456", , , [8]],
                    [, , "180\\d{4}", , , , "1801234", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "2(?:0[0-47]|7[568])\\d{4}", , , , "2751234", , , [7]], "PG", 675, "00|140[1-3]", , , , , , "00", , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["18|[2-69]|85"]],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[78]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                PH: [, [, , "1800\\d{7,9}|(?:2|[89]\\d{4})\\d{5}|[2-8]\\d{8}|[28]\\d{7}", , , , , , , [6, 8, 9, 10, 11, 12, 13],
                        [4, 5, 7]
                    ],
                    [, , "(?:(?:2[3-8]|3[2-68]|4[2-9]|5[2-6]|6[2-58]|7[24578])\\d{3}|88(?:22\\d\\d|42))\\d{4}|2\\d{5}(?:\\d{2})?|8[2-8]\\d{7}", , , , "21234567", , , [6, 8, 9, 10],
                        [4, 5, 7]
                    ],
                    [, , "(?:81[37]|9(?:0[5-9]|1[0-24-9]|2[0-35-9]|[35]\\d|4[235-9]|6[0-25-8]|7[1-9]|8[19]|9[4-9]))\\d{7}", , , , "9051234567", , , [10]],
                    [, , "1800\\d{7,9}", , , , "180012345678", , , [11, 12, 13]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "PH", 63, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{5})", "$1 $2", ["2"], "(0$1)"],
                        [, "(\\d)(\\d{3})(\\d{4})", "$1 $2 $3", ["2"], "(0$1)"],
                        [, "(\\d{4})(\\d{4,6})", "$1 $2", ["3(?:23|39|46)|4(?:2[3-6]|[35]9|4[26]|76)|544|88[245]|(?:52|64|86)2", "3(?:230|397|461)|4(?:2(?:35|[46]4|51)|396|4(?:22|63)|59[347]|76[15])|5(?:221|446)|642[23]|8(?:622|8(?:[24]2|5[13]))"], "(0$1)"],
                        [, "(\\d{5})(\\d{4})", "$1 $2", ["346|4(?:27|9[35])|883", "3469|4(?:279|9(?:30|56))|8834"], "(0$1)"],
                        [, "(\\d)(\\d{4})(\\d{4})", "$1 $2 $3", ["2"], "(0$1)"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[3-7]|8[2-8]"], "(0$1)"],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["[89]"], "0$1"],
                        [, "(\\d{4})(\\d{3})(\\d{4})", "$1 $2 $3", ["1"]],
                        [, "(\\d{4})(\\d{1,2})(\\d{3})(\\d{4})", "$1 $2 $3 $4", ["1"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                PK: [, [, , "122\\d{6}|[24-8]\\d{10,11}|9(?:[013-9]\\d{8,10}|2(?:[01]\\d\\d|2(?:[025-8]\\d|1[01]))\\d{7})|(?:[2-8]\\d{3}|92(?:[0-7]\\d|8[1-9]))\\d{6}|[24-9]\\d{8}|[89]\\d{7}", , , , , , , [8, 9, 10, 11, 12],
                        [5, 6, 7]
                    ],
                    [, , "(?:(?:21|42)[2-9]|58[126])\\d{7}|(?:2[25]|4[0146-9]|5[1-35-7]|6[1-8]|7[14]|8[16]|91)[2-9]\\d{6}|(?:2(?:3[2358]|4[2-4]|9[2-8])|45[3479]|54[2-467]|60[468]|72[236]|8(?:2[2-689]|3[23578]|4[3478]|5[2356])|9(?:2[2-8]|3[27-9]|4[2-6]|6[3569]|9[25-8]))[2-9]\\d{5,6}", , , , "2123456789", , , [9, 10],
                        [5, 6, 7, 8]
                    ],
                    [, , "3(?:[014]\\d|2[0-5]|3[0-7]|55|64)\\d{7}", , , , "3012345678", , , [10]],
                    [, , "800\\d{5}", , , , "80012345", , , [8]],
                    [, , "900\\d{5}", , , , "90012345", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , "122\\d{6}", , , , "122044444", , , [9]],
                    [, , , , , , , , , [-1]], "PK", 92, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{3})(\\d{2})", "$1 $2 $3", ["[89]0"], "0$1"],
                        [, "(\\d{4})(\\d{5})", "$1 $2", ["1"]],
                        [, "(\\d{2})(\\d{7,8})", "$1 $2", ["(?:2[125]|4[0-246-9]|5[1-35-7]|6[1-8]|7[14]|8[16]|91)[2-9]"], "(0$1)"],
                        [, "(\\d{3})(\\d{6,7})", "$1 $2", ["2(?:3[2358]|4[2-4]|9[2-8])|45[3479]|54[2-467]|60[468]|72[236]|8(?:2[2-689]|3[23578]|4[3478]|5[2356])|9(?:2[2-8]|3[27-9]|4[2-6]|6[3569]|9[25-8])", "9(?:2[3-8]|98)|(?:2(?:3[2358]|4[2-4]|9[2-8])|45[3479]|54[2-467]|60[468]|72[236]|8(?:2[2-689]|3[23578]|4[3478]|5[2356])|9(?:22|3[27-9]|4[2-6]|6[3569]|9[25-7]))[2-9]"], "(0$1)"],
                        [, "(\\d{5})(\\d{5})", "$1 $2", ["58"], "(0$1)"],
                        [, "(\\d{3})(\\d{7})", "$1 $2", ["3"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3 $4", ["2[125]|4[0-246-9]|5[1-35-7]|6[1-8]|7[14]|8[16]|91"], "(0$1)"],
                        [, "(\\d{3})(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3 $4", ["[24-9]"], "(0$1)"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "(?:2(?:[125]|3[2358]|4[2-4]|9[2-8])|4(?:[0-246-9]|5[3479])|5(?:[1-35-7]|4[2-467])|6(?:0[468]|[1-8])|7(?:[14]|2[236])|8(?:[16]|2[2-689]|3[23578]|4[3478]|5[2356])|9(?:1|22|3[27-9]|4[2-6]|6[3569]|9[2-7]))111\\d{6}", , , , "21111825888", , , [11, 12]], , , [, , , , , , , , , [-1]]
                ],
                PL: [, [, , "[1-57-9]\\d{6}(?:\\d{2})?|6\\d{5,8}", , , , , , , [6, 7, 8, 9]],
                    [, , "(?:1[2-8]|2[2-69]|3[2-4]|4[1-468]|5[24-689]|6[1-3578]|7[14-7]|8[1-79]|9[145])(?:[02-9]\\d{6}|1(?:[0-8]\\d{5}|9\\d{3}(?:\\d{2})?))", , , , "123456789", , , [7, 9]],
                    [, , "(?:45|5[0137]|6[069]|7[2389]|88)\\d{7}", , , , "512345678", , , [9]],
                    [, , "800\\d{6}", , , , "800123456", , , [9]],
                    [, , "70[01346-8]\\d{6}", , , , "701234567", , , [9]],
                    [, , "801\\d{6}", , , , "801234567", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , "39\\d{7}", , , , "391234567", , , [9]], "PL", 48, "00", , , , , , , , [
                        [, "(\\d{5})", "$1", ["19"]],
                        [, "(\\d{3})(\\d{3})", "$1 $2", ["11|64"]],
                        [, "(\\d{2})(\\d{2})(\\d{3})", "$1 $2 $3", ["(?:1[2-8]|2[2-69]|3[2-4]|4[1-468]|5[24-689]|6[1-3578]|7[14-7]|8[1-79]|9[145])1", "(?:1[2-8]|2[2-69]|3[2-4]|4[1-468]|5[24-689]|6[1-3578]|7[14-7]|8[1-79]|9[145])19"]],
                        [, "(\\d{3})(\\d{2})(\\d{2,3})", "$1 $2 $3", ["64"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["39|45|5[0137]|6[0469]|7[02389]|8[08]"]],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["1[2-8]|[2-8]|9[145]"]]
                    ], , [, , "64\\d{4,7}", , , , "641234567"], , , [, , , , , , , , , [-1]],
                    [, , "804\\d{6}", , , , "804123456", , , [9]], , , [, , , , , , , , , [-1]]
                ],
                PM: [, [, , "[45]\\d{5}", , , , , , , [6]],
                    [, , "(?:4[1-3]|50)\\d{4}", , , , "430123"],
                    [, , "(?:4[02-4]|5[05])\\d{4}", , , , "551234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "PM", 508, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3", ["[45]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                PR: [, [, , "(?:[589]\\d\\d|787)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "(?:787|939)[2-9]\\d{6}", , , , "7872345678", , , , [7]],
                    [, , "(?:787|939)[2-9]\\d{6}", , , , "7872345678", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002345678"],
                    [, , "900[2-9]\\d{6}", , , , "9002345678"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "PR", 1, "011", "1", , , "1", , , 1, , , [, , , , , , , , , [-1]], , "787|939", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                PS: [, [, , "[2489]2\\d{6}|(?:1\\d|5)\\d{8}", , , , , , , [8, 9, 10],
                        [7]
                    ],
                    [, , "(?:22[2-47-9]|42[45]|82[01458]|92[369])\\d{5}", , , , "22234567", , , [8],
                        [7]
                    ],
                    [, , "5[69]\\d{7}", , , , "599123456", , , [9]],
                    [, , "1800\\d{6}", , , , "1800123456", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , "1700\\d{6}", , , , "1700123456", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "PS", 970, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{3})(\\d{4})", "$1 $2 $3", ["[2489]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["5"], "0$1"],
                        [, "(\\d{4})(\\d{3})(\\d{3})", "$1 $2 $3", ["1"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                PT: [, [, , "(?:[26-9]\\d|30)\\d{7}", , , , , , , [9]],
                    [, , "2(?:[12]\\d|[35][1-689]|4[1-59]|6[1-35689]|7[1-9]|8[1-69]|9[1256])\\d{6}", , , , "212345678"],
                    [, , "6[356]9230\\d{3}|(?:6[036]93|9(?:[1-36]\\d\\d|480))\\d{5}", , , , "912345678"],
                    [, , "80[02]\\d{6}", , , , "800123456"],
                    [, , "(?:6(?:0[178]|4[68])\\d|76(?:0[1-57]|1[2-47]|2[237]))\\d{5}", , , , "760123456"],
                    [, , "80(?:8\\d|9[1579])\\d{5}", , , , "808123456"],
                    [, , "884[0-4689]\\d{5}", , , , "884123456"],
                    [, , "30\\d{7}", , , , "301234567"], "PT", 351, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["2[12]"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[236-9]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "70(?:7\\d|8[17])\\d{5}", , , , "707123456"], , , [, , "600\\d{6}", , , , "600110000"]
                ],
                PW: [, [, , "(?:[25-8]\\d\\d|345|488|900)\\d{4}", , , , , , , [7]],
                    [, , "(?:2(?:55|77)|345|488|5(?:35|44|87)|6(?:22|54|79)|7(?:33|47)|8(?:24|55|76)|900)\\d{4}", , , , "2771234"],
                    [, , "(?:6[2-4689]0|77\\d|88[0-4])\\d{4}", , , , "6201234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "PW", 680, "01[12]", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[2-9]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                PY: [, [, , "59\\d{4,6}|(?:[2-46-9]\\d|5[0-8])\\d{4,7}", , , , , , , [6, 7, 8, 9],
                        [5]
                    ],
                    [, , "(?:[26]1|3[289]|4[1246-8]|7[1-3]|8[1-36])\\d{5,7}|(?:2(?:2[4-68]|7[15]|9[1-5])|3(?:18|3[167]|4[2357]|51)|4(?:3[12]|5[13]|9[1-47])|5(?:[1-4]\\d|5[02-4])|6(?:3[1-3]|44|7[1-46-8])|7(?:4[0-4]|6[1-578]|75|8[0-8])|858)\\d{5,6}", , , , "212345678", , , [7, 8, 9],
                        [5, 6]
                    ],
                    [, , "9(?:51|6[129]|[78][1-6]|9[1-5])\\d{6}", , , , "961456789", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "8700[0-4]\\d{4}", , , , "870012345", , , [9]], "PY", 595, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{3,6})", "$1 $2", ["[2-9]0"], "0$1"],
                        [, "(\\d{2})(\\d{5})", "$1 $2", ["[26]1|3[289]|4[1246-8]|7[1-3]|8[1-36]"], "(0$1)"],
                        [, "(\\d{3})(\\d{4,5})", "$1 $2", ["2[279]|3[13-5]|4[359]|5|6[347]|7[46-8]|85"], "(0$1)"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[26]1|3[289]|4[1246-8]|7[1-3]|8[1-36]"], "(0$1)"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["87"]],
                        [, "(\\d{3})(\\d{6})", "$1 $2", ["9"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[2-8]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "[2-9]0\\d{4,7}", , , , "201234567"], , , [, , , , , , , , , [-1]]
                ],
                QA: [, [, , "[2-7]\\d{7}|(?:2\\d\\d|800)\\d{4}", , , , , , , [7, 8]],
                    [, , "4[04]\\d{6}", , , , "44123456", , , [8]],
                    [, , "(?:28|[35-7]\\d)\\d{6}", , , , "33123456", , , [8]],
                    [, , "800\\d{4}", , , , "8001234", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "QA", 974, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["2[126]|8"]],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[2-7]"]]
                    ], , [, , "2(?:[12]\\d|61)\\d{4}", , , , "2123456", , , [7]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                RE: [, [, , "9769\\d{5}|(?:26|[68]\\d)\\d{7}", , , , , , , [9]],
                    [, , "26(?:2\\d\\d|30[01])\\d{4}", , , , "262161234"],
                    [, , "(?:69(?:2\\d\\d|3(?:0[0-46]|1[013]|2[0-2]|3[0-39]|4\\d|5[05]|6[0-26]|7[0-27]|8[03-8]|9[0-479]))|9769\\d)\\d{4}", , , , "692123456"],
                    [, , "80\\d{7}", , , , "801234567"],
                    [, , "89[1-37-9]\\d{6}", , , , "891123456"],
                    [, , "8(?:1[019]|2[0156]|84|90)\\d{6}", , , , "810123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "RE", 262, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[2689]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], 1, "26[23]|69|[89]", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                RO: [, [, , "(?:[237]\\d|[89]0)\\d{7}|[23]\\d{5}", , , , , , , [6, 9]],
                    [, , "[23][13-6]\\d{7}|(?:2(?:19\\d|[3-6]\\d9)|31\\d\\d)\\d\\d", , , , "211234567"],
                    [, , "7120\\d{5}|7(?:[02-7]\\d|1[01]|8[03-8]|99)\\d{6}", , , , "712034567", , , [9]],
                    [, , "800\\d{6}", , , , "800123456", , , [9]],
                    [, , "90[036]\\d{6}", , , , "900123456", , , [9]],
                    [, , "801\\d{6}", , , , "801123456", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "RO", 40, "00", "0", " int ", , "0", , , , [
                        [, "(\\d{3})(\\d{3})", "$1 $2", ["2[3-6]", "2[3-6]\\d9"], "0$1"],
                        [, "(\\d{2})(\\d{4})", "$1 $2", ["219|31"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[23]1"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[237-9]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "37\\d{7}", , , , "372123456", , , [9]], , , [, , , , , , , , , [-1]]
                ],
                RS: [, [, , "38[02-9]\\d{6,9}|6\\d{7,9}|90\\d{4,8}|38\\d{5,6}|(?:7\\d\\d|800)\\d{3,9}|(?:[12]\\d|3[0-79])\\d{5,10}", , , , , , , [6, 7, 8, 9, 10, 11, 12],
                        [4, 5]
                    ],
                    [, , "(?:11[1-9]\\d|(?:2[389]|39)(?:0[2-9]|[2-9]\\d))\\d{3,8}|(?:1[02-9]|2[0-24-7]|3[0-8])[2-9]\\d{4,9}", , , , "10234567", , , [7, 8, 9, 10, 11, 12],
                        [4, 5, 6]
                    ],
                    [, , "6(?:[0-689]|7\\d)\\d{6,7}", , , , "601234567", , , [8, 9, 10]],
                    [, , "800\\d{3,9}", , , , "80012345"],
                    [, , "(?:78\\d|90[0169])\\d{3,7}", , , , "90012345", , , [6, 7, 8, 9, 10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "RS", 381, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{3,9})", "$1 $2", ["(?:2[389]|39)0|[7-9]"], "0$1"],
                        [, "(\\d{2})(\\d{5,10})", "$1 $2", ["[1-36]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "7[06]\\d{4,10}", , , , "700123456"], , , [, , , , , , , , , [-1]]
                ],
                RU: [, [, , "[347-9]\\d{9}", , , , , , , [10],
                        [7]
                    ],
                    [, , "(?:3(?:0[12]|4[1-35-79]|5[1-3]|65|8[1-58]|9[0145])|4(?:01|1[1356]|2[13467]|7[1-5]|8[1-7]|9[1-689])|8(?:1[1-8]|2[01]|3[13-6]|4[0-8]|5[15]|6[1-35-79]|7[1-37-9]))\\d{7}", , , , "3011234567", , , , [7]],
                    [, , "9\\d{9}", , , , "9123456789"],
                    [, , "80[04]\\d{7}", , , , "8001234567"],
                    [, , "80[39]\\d{7}", , , , "8091234567"],
                    [, , , , , , , , , [-1]],
                    [, , "808\\d{7}", , , , "8081234567"],
                    [, , , , , , , , , [-1]], "RU", 7, "810", "8", , , "8", , "8~10", , [
                        [, "(\\d{3})(\\d{2})(\\d{2})", "$1-$2-$3", ["[0-79]"]],
                        [, "(\\d{4})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["7(?:1[0-8]|2[1-9])", "7(?:1(?:[0-6]2|7|8[27])|2(?:1[23]|[2-9]2))", "7(?:1(?:[0-6]2|7|8[27])|2(?:13[03-69]|62[013-9]))|72[1-57-9]2"], "8 ($1)", , 1],
                        [, "(\\d{5})(\\d)(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["7(?:1[0-68]|2[1-9])", "7(?:1(?:[06][3-6]|[18]|2[35]|[3-5][3-5])|2(?:[13][3-5]|[24-689]|7[457]))", "7(?:1(?:0(?:[356]|4[023])|[18]|2(?:3[013-9]|5)|3[45]|43[013-79]|5(?:3[1-8]|4[1-7]|5)|6(?:3[0-35-9]|[4-6]))|2(?:1(?:3[178]|[45])|[24-689]|3[35]|7[457]))|7(?:14|23)4[0-8]|71(?:33|45)[1-79]"], "8 ($1)", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["7"], "8 ($1)", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{2})(\\d{2})", "$1 $2-$3-$4", ["[3489]"], "8 ($1)", , 1]
                    ],
                    [
                        [, "(\\d{4})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["7(?:1[0-8]|2[1-9])", "7(?:1(?:[0-6]2|7|8[27])|2(?:1[23]|[2-9]2))", "7(?:1(?:[0-6]2|7|8[27])|2(?:13[03-69]|62[013-9]))|72[1-57-9]2"], "8 ($1)", , 1],
                        [, "(\\d{5})(\\d)(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["7(?:1[0-68]|2[1-9])", "7(?:1(?:[06][3-6]|[18]|2[35]|[3-5][3-5])|2(?:[13][3-5]|[24-689]|7[457]))", "7(?:1(?:0(?:[356]|4[023])|[18]|2(?:3[013-9]|5)|3[45]|43[013-79]|5(?:3[1-8]|4[1-7]|5)|6(?:3[0-35-9]|[4-6]))|2(?:1(?:3[178]|[45])|[24-689]|3[35]|7[457]))|7(?:14|23)4[0-8]|71(?:33|45)[1-79]"], "8 ($1)", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["7"], "8 ($1)", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{2})(\\d{2})", "$1 $2-$3-$4", ["[3489]"], "8 ($1)", , 1]
                    ],
                    [, , , , , , , , , [-1]], 1, "3[04-689]|[489]", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                RW: [, [, , "(?:06|[27]\\d\\d|[89]00)\\d{6}", , , , , , , [8, 9]],
                    [, , "(?:06|2[258]\\d)\\d{6}", , , , "250123456"],
                    [, , "7[238]\\d{7}", , , , "720123456", , , [9]],
                    [, , "800\\d{6}", , , , "800123456", , , [9]],
                    [, , "900\\d{6}", , , , "900123456", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "RW", 250, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["0"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["2"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[7-9]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SA: [, [, , "92\\d{7}|(?:[15]|8\\d)\\d{8}", , , , , , , [9, 10],
                        [7]
                    ],
                    [, , "1(?:1\\d|2[24-8]|3[35-8]|4[3-68]|6[2-5]|7[235-7])\\d{6}", , , , "112345678", , , [9],
                        [7]
                    ],
                    [, , "5(?:[013-689]\\d|7[0-36-8])\\d{6}", , , , "512345678", , , [9]],
                    [, , "800\\d{7}", , , , "8001234567", , , [10]],
                    [, , "925\\d{6}", , , , "925012345", , , [9]],
                    [, , "920\\d{6}", , , , "920012345", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "SA", 966, "00", "0", , , "0", , , , [
                        [, "(\\d{4})(\\d{5})", "$1 $2", ["9"]],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["1"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["5"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["81"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["8"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "811\\d{7}", , , , "8110123456", , , [10]], , , [, , , , , , , , , [-1]]
                ],
                SB: [, [, , "(?:[1-6]|[7-9]\\d\\d)\\d{4}", , , , , , , [5, 7]],
                    [, , "(?:1[4-79]|[23]\\d|4[0-2]|5[03]|6[0-37])\\d{3}", , , , "40123", , , [5]],
                    [, , "48\\d{3}|(?:(?:7[1-9]|8[4-9])\\d|9(?:1[2-9]|2[013-9]|3[0-2]|[46]\\d|5[0-46-9]|7[0-689]|8[0-79]|9[0-8]))\\d{4}", , , , "7421234"],
                    [, , "1[38]\\d{3}", , , , "18123", , , [5]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "5[12]\\d{3}", , , , "51123", , , [5]], "SB", 677, "0[01]", , , , , , , , [
                        [, "(\\d{2})(\\d{5})", "$1 $2", ["7|8[4-9]|9(?:[1-8]|9[0-8])"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SC: [, [, , "8000\\d{3}|(?:[249]\\d|64)\\d{5}", , , , , , , [7]],
                    [, , "4[2-46]\\d{5}", , , , "4217123"],
                    [, , "2[5-8]\\d{5}", , , , "2510123"],
                    [, , "8000\\d{3}", , , , "8000000"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "971\\d{4}|(?:64|95)\\d{5}", , , , "6412345"], "SC", 248, "010|0[0-2]", , , , , , "00", , [
                        [, "(\\d)(\\d{3})(\\d{3})", "$1 $2 $3", ["[246]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SD: [, [, , "[19]\\d{8}", , , , , , , [9]],
                    [, , "1(?:5[3-7]|8[35-7])\\d{6}", , , , "153123456"],
                    [, , "(?:1[0-2]|9[0-3569])\\d{7}", , , , "911231234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "SD", 249, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[19]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SE: [, [, , "(?:[26]\\d\\d|9)\\d{9}|[1-9]\\d{8}|[1-689]\\d{7}|[1-4689]\\d{6}|2\\d{5}", , , , , , , [6, 7, 8, 9, 10, 12]],
                    [, , "10[1-8]\\d{6}|90[1-9]\\d{4,6}|(?:[12][136]|3[356]|4[0246]|6[03]|8\\d)\\d{5,7}|(?:1(?:2[0-35]|4[0-4]|5[0-25-9]|7[13-6]|[89]\\d)|2(?:2[0-7]|4[0136-8]|5[0138]|7[018]|8[01]|9[0-57])|3(?:0[0-4]|1\\d|2[0-25]|4[056]|7[0-2]|8[0-3]|9[023])|4(?:1[013-8]|3[0135]|5[14-79]|7[0-246-9]|8[0156]|9[0-689])|5(?:0[0-6]|[15][0-5]|2[0-68]|3[0-4]|4\\d|6[03-5]|7[013]|8[0-79]|9[01])|6(?:1[1-3]|2[0-4]|4[02-57]|5[0-37]|6[0-3]|7[0-2]|8[0247]|9[0-356])|9(?:1[0-68]|2\\d|3[02-5]|4[0-3]|5[0-4]|[68][01]|7[0135-8]))\\d{5,6}", , , , "8123456", , , [7, 8, 9]],
                    [, , "7[02369]\\d{7}", , , , "701234567", , , [9]],
                    [, , "20\\d{4,7}", , , , "20123456", , , [6, 7, 8, 9]],
                    [, , "649\\d{6}|9(?:00|39|44)[1-8]\\d{3,6}", , , , "9001234567", , , [7, 8, 9, 10]],
                    [, , "77[0-7]\\d{6}", , , , "771234567", , , [9]],
                    [, , "75[1-8]\\d{6}", , , , "751234567", , , [9]],
                    [, , , , , , , , , [-1]], "SE", 46, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{2,3})(\\d{2})", "$1-$2 $3", ["20"], "0$1"],
                        [, "(\\d{3})(\\d{4})", "$1-$2", ["9(?:00|39|44)"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2})", "$1-$2 $3", ["[12][136]|3[356]|4[0246]|6[03]|90[1-9]"], "0$1"],
                        [, "(\\d)(\\d{2,3})(\\d{2})(\\d{2})", "$1-$2 $3 $4", ["8"], "0$1"],
                        [, "(\\d{3})(\\d{2,3})(\\d{2})", "$1-$2 $3", ["1[2457]|2(?:[247-9]|5[0138])|3[0247-9]|4[1357-9]|5[0-35-9]|6(?:[125689]|4[02-57]|7[0-2])|9(?:[125-8]|3[02-5]|4[0-3])"], "0$1"],
                        [, "(\\d{3})(\\d{2,3})(\\d{3})", "$1-$2 $3", ["9(?:00|39|44)"], "0$1"],
                        [, "(\\d{2})(\\d{2,3})(\\d{2})(\\d{2})", "$1-$2 $3 $4", ["1[013689]|2[0136]|3[1356]|4[0246]|54|6[03]|90[1-9]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1-$2 $3 $4", ["7"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{3})(\\d{2})", "$1-$2 $3 $4", ["8"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1-$2 $3 $4", ["[13-5]|2(?:[247-9]|5[0138])|6(?:[124-689]|7[0-2])|9(?:[125-8]|3[02-5]|4[0-3])"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{3})", "$1-$2 $3 $4", ["9"], "0$1"],
                        [, "(\\d{3})(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1-$2 $3 $4 $5", ["[26]"], "0$1"]
                    ],
                    [
                        [, "(\\d{2})(\\d{2,3})(\\d{2})", "$1 $2 $3", ["20"]],
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["9(?:00|39|44)"]],
                        [, "(\\d{2})(\\d{3})(\\d{2})", "$1 $2 $3", ["[12][136]|3[356]|4[0246]|6[03]|90[1-9]"]],
                        [, "(\\d)(\\d{2,3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["8"]],
                        [, "(\\d{3})(\\d{2,3})(\\d{2})", "$1 $2 $3", ["1[2457]|2(?:[247-9]|5[0138])|3[0247-9]|4[1357-9]|5[0-35-9]|6(?:[125689]|4[02-57]|7[0-2])|9(?:[125-8]|3[02-5]|4[0-3])"]],
                        [, "(\\d{3})(\\d{2,3})(\\d{3})", "$1 $2 $3", ["9(?:00|39|44)"]],
                        [, "(\\d{2})(\\d{2,3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["1[013689]|2[0136]|3[1356]|4[0246]|54|6[03]|90[1-9]"]],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["7"]],
                        [, "(\\d)(\\d{3})(\\d{3})(\\d{2})", "$1 $2 $3 $4", ["8"]],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[13-5]|2(?:[247-9]|5[0138])|6(?:[124-689]|7[0-2])|9(?:[125-8]|3[02-5]|4[0-3])"]],
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{3})", "$1 $2 $3 $4", ["9"]],
                        [, "(\\d{3})(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4 $5", ["[26]"]]
                    ],
                    [, , "74[02-9]\\d{6}", , , , "740123456", , , [9]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , "(?:25[245]|67[3-68])\\d{9}", , , , "254123456789", , , [12]]
                ],
                SG: [, [, , "(?:(?:1\\d|8)\\d\\d|7000)\\d{7}|[3689]\\d{7}", , , , , , , [8, 10, 11]],
                    [, , "662[0-24-9]\\d{4}|6(?:[1-578]\\d|6[013-57-9]|9[0-35-9])\\d{5}", , , , "61234567", , , [8]],
                    [, , "89(?:[01]\\d|2[4-8])\\d{4}|(?:8[1-8]|9[0-8])\\d{6}", , , , "81234567", , , [8]],
                    [, , "(?:18|8)00\\d{7}", , , , "18001234567", , , [10, 11]],
                    [, , "1900\\d{7}", , , , "19001234567", , , [11]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "(?:3[12]\\d\\d|6666)\\d{4}", , , , "31234567", , , [8]], "SG", 65, "0[0-3]\\d", , , , , , , , [
                        [, "(\\d{4,5})", "$1", ["1[013-9]|77", "1(?:[013-8]|9(?:0[1-9]|[1-9]))|77"]],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[369]|8[1-9]"]],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["8"]],
                        [, "(\\d{4})(\\d{4})(\\d{3})", "$1 $2 $3", ["7"]],
                        [, "(\\d{4})(\\d{3})(\\d{4})", "$1 $2 $3", ["1"]]
                    ],
                    [
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[369]|8[1-9]"]],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["8"]],
                        [, "(\\d{4})(\\d{4})(\\d{3})", "$1 $2 $3", ["7"]],
                        [, "(\\d{4})(\\d{3})(\\d{4})", "$1 $2 $3", ["1"]]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "7000\\d{7}", , , , "70001234567", , , [11]], , , [, , , , , , , , , [-1]]
                ],
                SH: [, [, , "(?:[256]\\d|8)\\d{3}", , , , , , , [4, 5]],
                    [, , "2(?:[0-57-9]\\d|6[4-9])\\d\\d", , , , "22158"],
                    [, , "[56]\\d{4}", , , , "51234", , , [5]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "262\\d\\d", , , , "26212", , , [5]], "SH", 290, "00", , , , , , , , , , [, , , , , , , , , [-1]], 1, "[256]", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SI: [, [, , "[1-7]\\d{7}|8\\d{4,7}|90\\d{4,6}", , , , , , , [5, 6, 7, 8]],
                    [, , "(?:[1-357][2-8]|4[24-8])\\d{6}", , , , "12345678", , , [8],
                        [7]
                    ],
                    [, , "65(?:1\\d|55|[67]0)\\d{4}|(?:[37][01]|4[0139]|51|6[489])\\d{6}", , , , "31234567", , , [8]],
                    [, , "80\\d{4,6}", , , , "80123456", , , [6, 7, 8]],
                    [, , "89[1-3]\\d{2,5}|90\\d{4,6}", , , , "90123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "(?:59\\d\\d|8(?:1(?:[67]\\d|8[01389])|2(?:0\\d|2[0378]|8[0-2489])|3[389]\\d))\\d{4}", , , , "59012345", , , [8]], "SI", 386, "00|10(?:22|66|88|99)", "0", , , "0", , "00", , [
                        [, "(\\d{2})(\\d{3,6})", "$1 $2", ["8[09]|9"], "0$1"],
                        [, "(\\d{3})(\\d{5})", "$1 $2", ["59|8"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["[37][01]|4[0139]|51|6"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[1-57]"], "(0$1)"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SJ: [, [, , "0\\d{4}|(?:[4589]\\d|79)\\d{6}", , , , , , , [5, 8]],
                    [, , "79\\d{6}", , , , "79123456", , , [8]],
                    [, , "(?:4[015-8]|5[89]|9\\d)\\d{6}", , , , "41234567", , , [8]],
                    [, , "80[01]\\d{5}", , , , "80012345", , , [8]],
                    [, , "82[09]\\d{5}", , , , "82012345", , , [8]],
                    [, , "810(?:0[0-6]|[2-8]\\d)\\d{3}", , , , "81021234", , , [8]],
                    [, , "880\\d{5}", , , , "88012345", , , [8]],
                    [, , "85[0-5]\\d{5}", , , , "85012345", , , [8]], "SJ", 47, "00", , , , , , , , , , [, , , , , , , , , [-1]], , "79", [, , , , , , , , , [-1]],
                    [, , "(?:0[2-9]|81(?:0(?:0[7-9]|1\\d)|5\\d\\d))\\d{3}", , , , "02000"], , , [, , "81[23]\\d{5}", , , , "81212345", , , [8]]
                ],
                SK: [, [, , "[2-689]\\d{8}|[2-59]\\d{6}|[2-5]\\d{5}", , , , , , , [6, 7, 9]],
                    [, , "(?:2(?:16|[2-9]\\d{3})|[3-5][1-8]\\d{3})\\d{4}|(?:2|[3-5][1-8])1[67]\\d{3}|[3-5][1-8]16\\d\\d", , , , "221234567"],
                    [, , "909[1-9]\\d{5}|9(?:0[1-8]|1[0-24-9]|[45]\\d)\\d{6}", , , , "912123456", , , [9]],
                    [, , "800\\d{6}", , , , "800123456", , , [9]],
                    [, , "9(?:00|[78]\\d)\\d{6}", , , , "900123456", , , [9]],
                    [, , "8[5-9]\\d{7}", , , , "850123456", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , "6(?:02|5[0-4]|9[0-6])\\d{6}", , , , "690123456", , , [9]], "SK", 421, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{2})(\\d{3,4})", "$1 $2 $3", ["21"], "0$1"],
                        [, "(\\d{2})(\\d{2})(\\d{2,3})", "$1 $2 $3", ["[3-5][1-8]1", "[3-5][1-8]1[67]"], "0$1"],
                        [, "(\\d{4})(\\d{3})", "$1 $2", ["909", "9090"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{3})(\\d{2})", "$1/$2 $3 $4", ["2"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[689]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1/$2 $3 $4", ["[3-5]"], "0$1"]
                    ],
                    [
                        [, "(\\d)(\\d{2})(\\d{3,4})", "$1 $2 $3", ["21"], "0$1"],
                        [, "(\\d{2})(\\d{2})(\\d{2,3})", "$1 $2 $3", ["[3-5][1-8]1", "[3-5][1-8]1[67]"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{3})(\\d{2})", "$1/$2 $3 $4", ["2"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[689]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1/$2 $3 $4", ["[3-5]"], "0$1"]
                    ],
                    [, , "9090\\d{3}", , , , "9090123", , , [7]], , , [, , "9090\\d{3}|(?:602|8(?:00|[5-9]\\d)|9(?:00|[78]\\d))\\d{6}", , , , , , , [7, 9]],
                    [, , "96\\d{7}", , , , "961234567", , , [9]], , , [, , , , , , , , , [-1]]
                ],
                SL: [, [, , "(?:[2378]\\d|99)\\d{6}", , , , , , , [8],
                        [6]
                    ],
                    [, , "22\\d{6}", , , , "22221234", , , , [6]],
                    [, , "(?:25|3[0134]|7[5-9]|8[08]|99)\\d{6}", , , , "25123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "SL", 232, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{6})", "$1 $2", ["[237-9]"], "(0$1)"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SM: [, [, , "(?:0549|[5-7]\\d)\\d{6}", , , , , , , [8, 10],
                        [6]
                    ],
                    [, , "0549(?:8[0157-9]|9\\d)\\d{4}", , , , "0549886377", , , [10],
                        [6]
                    ],
                    [, , "6[16]\\d{6}", , , , "66661212", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , "7[178]\\d{6}", , , , "71123456", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "5[158]\\d{6}", , , , "58001110", , , [8]], "SM", 378, "00", , , , "([89]\\d{5})$", "0549$1", , , [
                        [, "(\\d{6})", "$1", ["[89]"]],
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[5-7]"]],
                        [, "(\\d{4})(\\d{6})", "$1 $2", ["0"]]
                    ],
                    [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[5-7]"]],
                        [, "(\\d{4})(\\d{6})", "$1 $2", ["0"]]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SN: [, [, , "(?:[378]\\d{4}|93330)\\d{4}", , , , , , , [9]],
                    [, , "3(?:0(?:1[0-2]|80)|282|3(?:8[1-9]|9[3-9])|611)\\d{5}", , , , "301012345"],
                    [, , "7(?:[06-8]\\d|21|90)\\d{6}", , , , "701234567"],
                    [, , "800\\d{6}", , , , "800123456"],
                    [, , "88[4689]\\d{6}", , , , "884123456"],
                    [, , "81[02468]\\d{6}", , , , "810123456"],
                    [, , , , , , , , , [-1]],
                    [, , "93330\\d{4}|3(?:392|9[01]\\d)\\d{5}", , , , "933301234"], "SN", 221, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["8"]],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[379]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SO: [, [, , "[346-9]\\d{8}|[12679]\\d{7}|(?:[1-4]\\d|59)\\d{5}|[1348]\\d{5}", , , , , , , [6, 7, 8, 9]],
                    [, , "(?:1\\d|2[0-79]|3[0-46-8]|4[0-7]|59)\\d{5}|(?:[134]\\d|8[125])\\d{4}", , , , "4012345", , , [6, 7]],
                    [, , "28\\d{5}|(?:6[1-9]|79)\\d{6,7}|(?:15|24|(?:3[59]|4[89]|8[08])\\d|60|7[1-8]|9(?:0[67]|[2-9]))\\d{6}", , , , "71123456", , , [7, 8, 9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "SO", 252, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{4})", "$1 $2", ["8[125]"]],
                        [, "(\\d{6})", "$1", ["[134]"]],
                        [, "(\\d)(\\d{6})", "$1 $2", ["1|2[0-79]|3[0-46-8]|4[0-7]|59"]],
                        [, "(\\d)(\\d{7})", "$1 $2", ["24|[67]"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[348]|64|79[0-8]|90"]],
                        [, "(\\d{2})(\\d{5,7})", "$1 $2", ["1|28|6[1-35-9]|799|9[2-9]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SR: [, [, , "(?:[2-5]|68|[78]\\d)\\d{5}", , , , , , , [6, 7]],
                    [, , "(?:2[1-3]|3[0-7]|(?:4|68)\\d|5[2-58])\\d{4}", , , , "211234"],
                    [, , "(?:7[124-7]|8[125-9])\\d{5}", , , , "7412345", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "56\\d{4}", , , , "561234", , , [6]], "SR", 597, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})", "$1-$2-$3", ["56"]],
                        [, "(\\d{3})(\\d{3})", "$1-$2", ["[2-5]"]],
                        [, "(\\d{3})(\\d{4})", "$1-$2", ["[6-8]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SS: [, [, , "[19]\\d{8}", , , , , , , [9]],
                    [, , "18\\d{7}", , , , "181234567"],
                    [, , "(?:12|9[1257])\\d{7}", , , , "977123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "SS", 211, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[19]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                ST: [, [, , "(?:22|9\\d)\\d{5}", , , , , , , [7]],
                    [, , "22\\d{5}", , , , "2221234"],
                    [, , "900[5-9]\\d{3}|9(?:0[1-9]|[89]\\d)\\d{4}", , , , "9812345"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "ST", 239, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[29]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SV: [, [, , "[267]\\d{7}|[89]00\\d{4}(?:\\d{4})?", , , , , , , [7, 8, 11]],
                    [, , "2[1-6]\\d{6}", , , , "21234567", , , [8]],
                    [, , "[67]\\d{7}", , , , "70123456", , , [8]],
                    [, , "800\\d{4}(?:\\d{4})?", , , , "8001234", , , [7, 11]],
                    [, , "900\\d{4}(?:\\d{4})?", , , , "9001234", , , [7, 11]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "SV", 503, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[89]"]],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[267]"]],
                        [, "(\\d{3})(\\d{4})(\\d{4})", "$1 $2 $3", ["[89]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SX: [, [, , "7215\\d{6}|(?:[58]\\d\\d|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "7215(?:4[2-8]|8[239]|9[056])\\d{4}", , , , "7215425678", , , , [7]],
                    [, , "7215(?:1[02]|2\\d|5[034679]|8[014-8])\\d{4}", , , , "7215205678", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002123456"],
                    [, , "900[2-9]\\d{6}", , , , "9002123456"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "SX", 1, "011", "1", , , "1|(5\\d{6})$", "721$1", , , , , [, , , , , , , , , [-1]], , "721", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SY: [, [, , "[1-39]\\d{8}|[1-5]\\d{7}", , , , , , , [8, 9],
                        [6, 7]
                    ],
                    [, , "[12]1\\d{6,7}|(?:1(?:[2356]|4\\d)|2[235]|3(?:[13]\\d|4)|4[13]|5[1-3])\\d{6}", , , , "112345678", , , , [6, 7]],
                    [, , "9(?:22|[3-589]\\d|6[024-9])\\d{6}", , , , "944567890", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "SY", 963, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[1-5]"], "0$1", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["9"], "0$1", , 1]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                SZ: [, [, , "0800\\d{4}|(?:[237]\\d|900)\\d{6}", , , , , , , [8, 9]],
                    [, , "[23][2-5]\\d{6}", , , , "22171234", , , [8]],
                    [, , "7[6-9]\\d{6}", , , , "76123456", , , [8]],
                    [, , "0800\\d{4}", , , , "08001234", , , [8]],
                    [, , "900\\d{6}", , , , "900012345", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "70\\d{6}", , , , "70012345", , , [8]], "SZ", 268, "00", , , , , , , , [
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[0237]"]],
                        [, "(\\d{5})(\\d{4})", "$1 $2", ["9"]]
                    ], , [, , , , , , , , , [-1]], , , [, , "0800\\d{4}", , , , , , , [8]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                TA: [, [, , "8\\d{3}", , , , , , , [4]],
                    [, , "8\\d{3}", , , , "8999"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "TA", 290, "00", , , , , , , , , , [, , , , , , , , , [-1]], , "8", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                TC: [, [, , "(?:[58]\\d\\d|649|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "649(?:712|9(?:4\\d|50))\\d{4}", , , , "6497121234", , , , [7]],
                    [, , "649(?:2(?:3[129]|4[1-7])|3(?:3[1-389]|4[1-8])|4[34][1-3])\\d{4}", , , , "6492311234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002345678"],
                    [, , "900[2-9]\\d{6}", , , , "9002345678"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , "64971[01]\\d{4}", , , , "6497101234", , , , [7]], "TC", 1, "011", "1", , , "1|([2-479]\\d{6})$", "649$1", , , , , [, , , , , , , , , [-1]], , "649", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                TD: [, [, , "(?:22|[69]\\d|77)\\d{6}", , , , , , , [8]],
                    [, , "22(?:[37-9]0|5[0-5]|6[89])\\d{4}", , , , "22501234"],
                    [, , "(?:6[023568]|77|9\\d)\\d{6}", , , , "63012345"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "TD", 235, "00|16", , , , , , "00", , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[2679]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                TG: [, [, , "[279]\\d{7}", , , , , , , [8]],
                    [, , "2(?:2[2-7]|3[23]|4[45]|55|6[67]|77)\\d{5}", , , , "22212345"],
                    [, , "(?:7[09]|9[0-36-9])\\d{6}", , , , "90112345"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "TG", 228, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[279]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                TH: [, [, , "1\\d{8,9}|(?:[2-57]|[689]\\d)\\d{7}", , , , , , , [8, 9, 10]],
                    [, , "(?:2\\d|3[2-9]|4[2-5]|5[2-6]|7[3-7])\\d{6}", , , , "21234567", , , [8]],
                    [, , "(?:14|6[1-6]|[89]\\d)\\d{7}", , , , "812345678", , , [9]],
                    [, , "1800\\d{6}", , , , "1800123456", , , [10]],
                    [, , "1900\\d{6}", , , , "1900123456", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "6[08]\\d{7}", , , , "601234567", , , [9]], "TH", 66, "00[1-9]", "0", , , "0", , , , [
                        [, "(\\d)(\\d{3})(\\d{4})", "$1 $2 $3", ["2"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["14|[3-9]"], "0$1"],
                        [, "(\\d{4})(\\d{3})(\\d{3})", "$1 $2 $3", ["1"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                TJ: [, [, , "(?:00|[3-59]\\d|77|88)\\d{7}", , , , , , , [9],
                        [3, 5, 6, 7]
                    ],
                    [, , "(?:3(?:1[3-5]|2[245]|3[12]|4[24-7]|5[25]|72)|4(?:46|74|87))\\d{6}", , , , "372123456", , , , [3, 5, 6, 7]],
                    [, , "41[18]\\d{6}|(?:00|5[05]|77|88|9\\d)\\d{7}", , , , "917123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "TJ", 992, "810", "8", , , "8", , "8~10", , [
                        [, "(\\d{6})(\\d)(\\d{2})", "$1 $2 $3", ["331", "3317"], , , 1],
                        [, "(\\d{3})(\\d{2})(\\d{4})", "$1 $2 $3", ["[34]7|91[78]"], , , 1],
                        [, "(\\d{4})(\\d)(\\d{4})", "$1 $2 $3", ["3"], , , 1],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[0457-9]"], , , 1]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                TK: [, [, , "[2-47]\\d{3,6}", , , , , , , [4, 5, 6, 7]],
                    [, , "(?:2[2-4]|[34]\\d)\\d{2,5}", , , , "3101"],
                    [, , "7[2-4]\\d{2,5}", , , , "7290"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "TK", 690, "00", , , , , , , , , , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                TL: [, [, , "7\\d{7}|(?:[2-47]\\d|[89]0)\\d{5}", , , , , , , [7, 8]],
                    [, , "(?:2[1-5]|3[1-9]|4[1-4])\\d{5}", , , , "2112345", , , [7]],
                    [, , "7[3-8]\\d{6}", , , , "77212345", , , [8]],
                    [, , "80\\d{5}", , , , "8012345", , , [7]],
                    [, , "90\\d{5}", , , , "9012345", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , "70\\d{5}", , , , "7012345", , , [7]],
                    [, , , , , , , , , [-1]], "TL", 670, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[2-489]|70"]],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["7"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                TM: [, [, , "[1-6]\\d{7}", , , , , , , [8]],
                    [, , "(?:1(?:2\\d|3[1-9])|2(?:22|4[0-35-8])|3(?:22|4[03-9])|4(?:22|3[128]|4\\d|6[15])|5(?:22|5[7-9]|6[014-689]))\\d{5}", , , , "12345678"],
                    [, , "6[1-9]\\d{6}", , , , "66123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "TM", 993, "810", "8", , , "8", , "8~10", , [
                        [, "(\\d{2})(\\d{2})(\\d{2})(\\d{2})", "$1 $2-$3-$4", ["12"], "(8 $1)"],
                        [, "(\\d{3})(\\d)(\\d{2})(\\d{2})", "$1 $2-$3-$4", ["[1-5]"], "(8 $1)"],
                        [, "(\\d{2})(\\d{6})", "$1 $2", ["6"], "8 $1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                TN: [, [, , "[2-57-9]\\d{7}", , , , , , , [8]],
                    [, , "81200\\d{3}|(?:3[0-2]|7\\d)\\d{6}", , , , "30010123"],
                    [, , "3(?:001|[12]40)\\d{4}|(?:(?:[259]\\d|4[0-6])\\d|3(?:1[1-35]|6[0-4]|91))\\d{5}", , , , "20123456"],
                    [, , "8010\\d{4}", , , , "80101234"],
                    [, , "88\\d{6}", , , , "88123456"],
                    [, , "8[12]10\\d{4}", , , , "81101234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "TN", 216, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["[2-57-9]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                TO: [, [, , "(?:0800|[5-8]\\d{3})\\d{3}|[2-8]\\d{4}", , , , , , , [5, 7]],
                    [, , "(?:2\\d|3[0-8]|4[0-4]|50|6[09]|7[0-24-69]|8[05])\\d{3}", , , , "20123", , , [5]],
                    [, , "(?:6(?:3[02]|85|90)|7(?:[2-46]0|[578]\\d)|8[46-9]\\d)\\d{4}", , , , "7715123", , , [7]],
                    [, , "0800\\d{3}", , , , "0800222", , , [7]],
                    [, , "55[04]\\d{4}", , , , "5501234", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "TO", 676, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{3})", "$1-$2", ["[2-4]|50|6[09]|7[0-24-69]|8[05]"]],
                        [, "(\\d{4})(\\d{3})", "$1 $2", ["0"]],
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[5-8]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                TR: [, [, , "(?:[2-58]\\d\\d|900)\\d{7}|4\\d{6}", , , , , , , [7, 10]],
                    [, , "(?:2(?:[13][26]|[28][2468]|[45][268]|[67][246])|3(?:[13][28]|[24-6][2468]|[78][02468]|92)|4(?:[16][246]|[23578][2468]|4[26]))\\d{7}", , , , "2123456789", , , [10]],
                    [, , "56161\\d{5}|5(?:0[15-7]|1[06]|24|[34]\\d|5[1-59]|9[46])\\d{7}", , , , "5012345678", , , [10]],
                    [, , "800\\d{7}", , , , "8001234567", , , [10]],
                    [, , "(?:8[89]8|900)\\d{7}", , , , "9001234567", , , [10]],
                    [, , , , , , , , , [-1]],
                    [, , "592(?:21[12]|461)\\d{4}", , , , "5922121234", , , [10]],
                    [, , , , , , , , , [-1]], "TR", 90, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d)(\\d{3})", "$1 $2 $3", ["444"], , , 1],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["512|8[0589]|90"], "0$1", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["5(?:[0-59]|61)", "5(?:[0-59]|616)", "5(?:[0-59]|6161)"], "0$1", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[24][1-8]|3[1-9]"], "(0$1)", , 1]
                    ],
                    [
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1 $2 $3", ["512|8[0589]|90"], "0$1", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["5(?:[0-59]|61)", "5(?:[0-59]|616)", "5(?:[0-59]|6161)"], "0$1", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[24][1-8]|3[1-9]"], "(0$1)", , 1]
                    ],
                    [, , "512\\d{7}", , , , "5123456789", , , [10]], , , [, , "444\\d{4}", , , , , , , [7]],
                    [, , "(?:444|850\\d{3})\\d{4}", , , , "4441444"], , , [, , , , , , , , , [-1]]
                ],
                TT: [, [, , "(?:[58]\\d\\d|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "868(?:2(?:01|1[89]|[23]\\d|4[0-2])|6(?:0[7-9]|1[02-8]|2[1-9]|[3-69]\\d|7[0-79])|82[124])\\d{4}", , , , "8682211234", , , , [7]],
                    [, , "868(?:2(?:6[6-9]|[7-9]\\d)|[37](?:0[1-9]|1[02-9]|[2-9]\\d)|4[6-9]\\d|6(?:20|78|8\\d))\\d{4}", , , , "8682911234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002345678"],
                    [, , "900[2-9]\\d{6}", , , , "9002345678"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "TT", 1, "011", "1", , , "1|([2-46-8]\\d{6})$", "868$1", , , , , [, , , , , , , , , [-1]], , "868", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , "868619\\d{4}", , , , "8686191234", , , , [7]]
                ],
                TV: [, [, , "(?:2|7\\d\\d|90)\\d{4}", , , , , , , [5, 6, 7]],
                    [, , "2[02-9]\\d{3}", , , , "20123", , , [5]],
                    [, , "(?:7[01]\\d|90)\\d{4}", , , , "901234", , , [6, 7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "TV", 688, "00", , , , , , , , , , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                TW: [, [, , "[2-689]\\d{8}|7\\d{9,10}|[2-8]\\d{7}|2\\d{6}", , , , , , , [7, 8, 9, 10, 11]],
                    [, , "(?:2[2-8]\\d|370|55[01]|7[1-9])\\d{6}|4(?:(?:0(?:0[1-9]|[2-48]\\d)|1[023]\\d)\\d{4,5}|(?:[239]\\d\\d|4(?:0[56]|12|49))\\d{5})|6(?:[01]\\d{7}|4(?:0[56]|12|24|4[09])\\d{4,5})|8(?:(?:2(?:3\\d|4[0-269]|[578]0|66)|36[24-9]|90\\d\\d)\\d{4}|4(?:0[56]|12|24|4[09])\\d{4,5})|(?:2(?:2(?:0\\d\\d|4(?:0[68]|[249]0|3[0-467]|5[0-25-9]|6[0235689]))|(?:3(?:[09]\\d|1[0-4])|(?:4\\d|5[0-49]|6[0-29]|7[0-5])\\d)\\d)|(?:(?:3[2-9]|5[2-8]|6[0-35-79]|8[7-9])\\d\\d|4(?:2(?:[089]\\d|7[1-9])|(?:3[0-4]|[78]\\d|9[01])\\d))\\d)\\d{3}", , , , "221234567", , , [8, 9]],
                    [, , "(?:40001[0-2]|9[0-8]\\d{4})\\d{3}", , , , "912345678", , , [9]],
                    [, , "80[0-79]\\d{6}|800\\d{5}", , , , "800123456", , , [8, 9]],
                    [, , "20(?:[013-9]\\d\\d|2)\\d{4}", , , , "203123456", , , [7, 9]],
                    [, , , , , , , , , [-1]],
                    [, , "99\\d{7}", , , , "990123456", , , [9]],
                    [, , "7010(?:[0-2679]\\d|3[0-7]|8[0-5])\\d{5}|70\\d{8}", , , , "7012345678", , , [10, 11]], "TW", 886, "0(?:0[25-79]|19)", "0", "#", , "0", , , , [
                        [, "(\\d{2})(\\d)(\\d{4})", "$1 $2 $3", ["202"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[258]0"], "0$1"],
                        [, "(\\d)(\\d{3,4})(\\d{4})", "$1 $2 $3", ["[23568]|4(?:0[02-48]|[1-47-9])|7[1-9]", "[23568]|4(?:0[2-48]|[1-47-9])|(?:400|7)[1-9]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[49]"], "0$1"],
                        [, "(\\d{2})(\\d{4})(\\d{4,5})", "$1 $2 $3", ["7"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "50[0-46-9]\\d{6}", , , , "500123456", , , [9]], , , [, , , , , , , , , [-1]]
                ],
                TZ: [, [, , "(?:[26-8]\\d|41|90)\\d{7}", , , , , , , [9]],
                    [, , "2[2-8]\\d{7}", , , , "222345678"],
                    [, , "(?:6[2-9]|7[13-9])\\d{7}", , , , "621234567"],
                    [, , "80[08]\\d{6}", , , , "800123456"],
                    [, , "90\\d{7}", , , , "900123456"],
                    [, , "8(?:40|6[01])\\d{6}", , , , "840123456"],
                    [, , , , , , , , , [-1]],
                    [, , "41\\d{7}", , , , "412345678"], "TZ", 255, "00[056]", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{2})(\\d{4})", "$1 $2 $3", ["[89]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[24]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[67]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , "(?:8(?:[04]0|6[01])|90\\d)\\d{6}"],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                UA: [, [, , "[89]\\d{9}|[3-9]\\d{8}", , , , , , , [9, 10],
                        [5, 6, 7]
                    ],
                    [, , "(?:3[1-8]|4[13-8]|5[1-7]|6[12459])\\d{7}", , , , "311234567", , , [9],
                        [5, 6, 7]
                    ],
                    [, , "(?:50|6[36-8]|7[1-3]|9[1-9])\\d{7}", , , , "501234567", , , [9]],
                    [, , "800[1-8]\\d{5,6}", , , , "800123456"],
                    [, , "900[239]\\d{5,6}", , , , "900212345"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "89[1-579]\\d{6}", , , , "891234567", , , [9]], "UA", 380, "00", "0", , , "0", , "0~0", , [
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["6[12][29]|(?:3[1-8]|4[136-8]|5[12457]|6[49])2|(?:56|65)[24]", "6[12][29]|(?:35|4[1378]|5[12457]|6[49])2|(?:56|65)[24]|(?:3[1-46-8]|46)2[013-9]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["4[45][0-5]|5(?:0|6[37])|6(?:[12][018]|[36-8])|7|89|9[1-9]|(?:48|57)[0137-9]", "4[45][0-5]|5(?:0|6(?:3[14-7]|7))|6(?:[12][018]|[36-8])|7|89|9[1-9]|(?:48|57)[0137-9]"], "0$1"],
                        [, "(\\d{4})(\\d{5})", "$1 $2", ["[3-6]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[89]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                UG: [, [, , "800\\d{6}|(?:[29]0|[347]\\d)\\d{7}", , , , , , , [9],
                        [5, 6, 7]
                    ],
                    [, , "(?:20(?:(?:(?:[0147]\\d|5[0-4])\\d|2(?:40|[5-9]\\d)|3(?:0[67]|2[0-4])|810)\\d|6(?:00[0-2]|[15-9]\\d\\d|30[0-4]))|[34]\\d{5})\\d{3}", , , , "312345678", , , , [5, 6, 7]],
                    [, , "7260\\d{5}|7(?:[0157-9]\\d|20|4[0-4])\\d{6}", , , , "712345678"],
                    [, , "800[1-3]\\d{5}", , , , "800123456"],
                    [, , "90[1-3]\\d{6}", , , , "901123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "UG", 256, "00[057]", "0", , , "0", , , , [
                        [, "(\\d{4})(\\d{5})", "$1 $2", ["202", "2024"], "0$1"],
                        [, "(\\d{3})(\\d{6})", "$1 $2", ["[27-9]|4(?:6[45]|[7-9])"], "0$1"],
                        [, "(\\d{2})(\\d{7})", "$1 $2", ["[34]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                US: [, [, , "[2-9]\\d{9}", , , , , , , [10],
                        [7]
                    ],
                    [, , "(?:2(?:0[1-35-9]|1[02-9]|2[03-589]|3[149]|4[08]|5[1-46]|6[0279]|7[0269]|8[13])|3(?:0[1-57-9]|1[02-9]|2[0135]|3[0-24679]|4[167]|5[12]|6[014]|8[056])|4(?:0[124-9]|1[02-579]|2[3-5]|3[0245]|4[0235]|58|6[39]|7[0589]|8[04])|5(?:0[1-57-9]|1[0235-8]|20|3[0149]|4[01]|5[19]|6[1-47]|7[013-5]|8[056])|6(?:0[1-35-9]|1[024-9]|2[03689]|[34][016]|5[017]|6[0-279]|78|8[0-29])|7(?:0[1-46-8]|1[2-9]|2[04-7]|3[1247]|4[037]|5[47]|6[02359]|7[02-59]|8[156])|8(?:0[1-68]|1[02-8]|2[08]|3[0-28]|4[3578]|5[046-9]|6[02-5]|7[028])|9(?:0[1346-9]|1[02-9]|2[0589]|3[0146-8]|4[0179]|5[12469]|7[0-389]|8[04-69]))[2-9]\\d{6}", , , , "2015550123", , , , [7]],
                    [, , "(?:2(?:0[1-35-9]|1[02-9]|2[03-589]|3[149]|4[08]|5[1-46]|6[0279]|7[0269]|8[13])|3(?:0[1-57-9]|1[02-9]|2[0135]|3[0-24679]|4[167]|5[12]|6[014]|8[056])|4(?:0[124-9]|1[02-579]|2[3-5]|3[0245]|4[0235]|58|6[39]|7[0589]|8[04])|5(?:0[1-57-9]|1[0235-8]|20|3[0149]|4[01]|5[19]|6[1-47]|7[013-5]|8[056])|6(?:0[1-35-9]|1[024-9]|2[03689]|[34][016]|5[017]|6[0-279]|78|8[0-29])|7(?:0[1-46-8]|1[2-9]|2[04-7]|3[1247]|4[037]|5[47]|6[02359]|7[02-59]|8[156])|8(?:0[1-68]|1[02-8]|2[08]|3[0-28]|4[3578]|5[046-9]|6[02-5]|7[028])|9(?:0[1346-9]|1[02-9]|2[0589]|3[0146-8]|4[0179]|5[12469]|7[0-389]|8[04-69]))[2-9]\\d{6}", , , , "2015550123", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002345678"],
                    [, , "900[2-9]\\d{6}", , , , "9002345678"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "US", 1, "011", "1", , , "1", , , 1, [
                        [, "(\\d{3})(\\d{4})", "$1-$2", ["[2-9]"]],
                        [, "(\\d{3})(\\d{3})(\\d{4})", "($1) $2-$3", ["[2-9]"], , , 1]
                    ],
                    [
                        [, "(\\d{3})(\\d{3})(\\d{4})", "$1-$2-$3", ["[2-9]"]]
                    ],
                    [, , , , , , , , , [-1]], 1, , [, , , , , , , , , [-1]],
                    [, , "710[2-9]\\d{6}", , , , "7102123456"], , , [, , , , , , , , , [-1]]
                ],
                UY: [, [, , "(?:[249]\\d\\d|80)\\d{5}|9\\d{6}", , , , , , , [7, 8]],
                    [, , "(?:2\\d|4[2-7])\\d{6}", , , , "21231234", , , [8],
                        [7]
                    ],
                    [, , "9[1-9]\\d{6}", , , , "94231234", , , [8]],
                    [, , "80[05]\\d{4}", , , , "8001234", , , [7]],
                    [, , "90[0-8]\\d{4}", , , , "9001234", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "UY", 598, "0(?:0|1[3-9]\\d)", "0", " int. ", , "0", , "00", , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["8|90"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["9"], "0$1"],
                        [, "(\\d{4})(\\d{4})", "$1 $2", ["[24]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                UZ: [, [, , "[679]\\d{8}", , , , , , , [9]],
                    [, , "78(?:1(?:13|2[02]|50)|2(?:10|2[139]|98)|77[01])\\d{4}|(?:6(?:1(?:22|3[124]|4[1-4]|5[1-3578]|64)|2(?:22|3[0-57-9]|41)|5(?:22|3[3-7]|5[024-8])|6\\d\\d|7(?:[23]\\d|7[69])|9(?:22|4[1-8]|6[135]))|7(?:0(?:5[4-9]|6[0146]|7[124-6]|9[135-8])|1[12]\\d|2(?:22|3[13-57-9]|4[1-3579]|5[14])|3(?:2\\d|3[1578]|4[1-35-7]|5[1-57]|61)|4(?:2\\d|3[1-579]|7[1-79])|5(?:22|5[1-9]|6[1457])|6(?:22|3[12457]|4[13-8])|9(?:22|5[1-9])))\\d{5}", , , , "669050123"],
                    [, , "(?:6(?:1(?:2(?:2[01]|98)|35[0-4]|50\\d|61[23]|7(?:[01][017]|4\\d|55|9[5-9]))|2(?:(?:11|7\\d)\\d|2(?:[12]1|9[01379])|5(?:[126]\\d|3[0-4]))|5(?:19[01]|2(?:27|9[26])|(?:30|59|7\\d)\\d)|6(?:2(?:1[5-9]|2[0367]|38|41|52|60)|(?:3[79]|9[0-3])\\d|4(?:56|83)|7(?:[07]\\d|1[017]|3[07]|4[047]|5[057]|67|8[0178]|9[79]))|7(?:2(?:24|3[237]|4[5-9]|7[15-8])|5(?:7[12]|8[0589])|7(?:0\\d|[39][07])|9(?:0\\d|7[079]))|9(?:2(?:1[1267]|3[01]|5\\d|7[0-4])|(?:5[67]|7\\d)\\d|6(?:2[0-26]|8\\d)))|7(?:0\\d{3}|1(?:13[01]|6(?:0[47]|1[67]|66)|71[3-69]|98\\d)|2(?:2(?:2[79]|95)|3(?:2[5-9]|6[0-6])|57\\d|7(?:0\\d|1[17]|2[27]|3[37]|44|5[057]|66|88))|3(?:2(?:1[0-6]|21|3[469]|7[159])|(?:33|9[4-6])\\d|5(?:0[0-4]|5[579]|9\\d)|7(?:[0-3579]\\d|4[0467]|6[67]|8[078]))|4(?:2(?:29|5[0257]|6[0-7]|7[1-57])|5(?:1[0-4]|8\\d|9[5-9])|7(?:0\\d|1[024589]|2[0-27]|3[0137]|[46][07]|5[01]|7[5-9]|9[079])|9(?:7[015-9]|[89]\\d))|5(?:112|2(?:0\\d|2[29]|[49]4)|3[1568]\\d|52[6-9]|7(?:0[01578]|1[017]|[23]7|4[047]|[5-7]\\d|8[78]|9[079]))|6(?:2(?:2[1245]|4[2-4])|39\\d|41[179]|5(?:[349]\\d|5[0-2])|7(?:0[017]|[13]\\d|22|44|55|67|88))|9(?:22[128]|3(?:2[0-4]|7\\d)|57[02569]|7(?:2[05-9]|3[37]|4\\d|60|7[2579]|87|9[07])))|9[0-57-9]\\d{3})\\d{4}", , , , "912345678"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "UZ", 998, "810", "8", , , "8", , "8~10", , [
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[679]"], "8 $1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                VA: [, [, , "0\\d{5,10}|3[0-8]\\d{7,10}|55\\d{8}|8\\d{5}(?:\\d{2,4})?|(?:1\\d|39)\\d{7,8}", , , , , , , [6, 7, 8, 9, 10, 11, 12]],
                    [, , "06698\\d{1,6}", , , , "0669812345", , , [6, 7, 8, 9, 10, 11]],
                    [, , "3[1-9]\\d{8}|3[2-9]\\d{7}", , , , "3123456789", , , [9, 10]],
                    [, , "80(?:0\\d{3}|3)\\d{3}", , , , "800123456", , , [6, 9]],
                    [, , "(?:0878\\d\\d|89(?:2|4[5-9]\\d))\\d{3}|89[45][0-4]\\d\\d|(?:1(?:44|6[346])|89(?:5[5-9]|9))\\d{6}", , , , "899123456", , , [6, 8, 9, 10]],
                    [, , "84(?:[08]\\d{3}|[17])\\d{3}", , , , "848123456", , , [6, 9]],
                    [, , "1(?:78\\d|99)\\d{6}", , , , "1781234567", , , [9, 10]],
                    [, , "55\\d{8}", , , , "5512345678", , , [10]], "VA", 39, "00", , , , , , , , , , [, , , , , , , , , [-1]], , "06698", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , "3[2-8]\\d{9,10}", , , , "33101234501", , , [11, 12]]
                ],
                VC: [, [, , "(?:[58]\\d\\d|784|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "784(?:266|3(?:6[6-9]|7\\d|8[0-24-6])|4(?:38|5[0-36-8]|8[0-8])|5(?:55|7[0-2]|93)|638|784)\\d{4}", , , , "7842661234", , , , [7]],
                    [, , "784(?:4(?:3[0-5]|5[45]|89|9[0-8])|5(?:2[6-9]|3[0-4]))\\d{4}", , , , "7844301234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002345678"],
                    [, , "900[2-9]\\d{6}", , , , "9002345678"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "VC", 1, "011", "1", , , "1|([2-7]\\d{6})$", "784$1", , , , , [, , , , , , , , , [-1]], , "784", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                VE: [, [, , "[89]00\\d{7}|(?:[24]\\d|50)\\d{8}", , , , , , , [10],
                        [7]
                    ],
                    [, , "(?:2(?:12|3[457-9]|[467]\\d|[58][1-9]|9[1-6])|50[01])\\d{7}", , , , "2121234567", , , , [7]],
                    [, , "4(?:1[24-8]|2[46])\\d{7}", , , , "4121234567"],
                    [, , "800\\d{7}", , , , "8001234567"],
                    [, , "900\\d{7}", , , , "9001234567"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "VE", 58, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{7})", "$1-$2", ["[24589]"], "0$1", "$CC $1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                VG: [, [, , "(?:284|[58]\\d\\d|900)\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "284496[0-5]\\d{3}|284(?:229|4(?:22|9[45])|774|8(?:52|6[459]))\\d{4}", , , , "2842291234", , , , [7]],
                    [, , "284496[6-9]\\d{3}|284(?:3(?:0[0-3]|4[0-7]|68|9[34])|4(?:4[0-6]|68|99)|54[0-57])\\d{4}", , , , "2843001234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002345678"],
                    [, , "900[2-9]\\d{6}", , , , "9002345678"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "VG", 1, "011", "1", , , "1|([2-578]\\d{6})$", "284$1", , , , , [, , , , , , , , , [-1]], , "284", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                VI: [, [, , "[58]\\d{9}|(?:34|90)0\\d{7}", , , , , , , [10],
                        [7]
                    ],
                    [, , "340(?:2(?:0[12]|2[06-8]|4[49]|77)|3(?:32|44)|4(?:22|7[34]|89)|5(?:1[34]|55)|6(?:2[56]|4[23]|77|9[023])|7(?:1[2-57-9]|27|7\\d)|884|998)\\d{4}", , , , "3406421234", , , , [7]],
                    [, , "340(?:2(?:0[12]|2[06-8]|4[49]|77)|3(?:32|44)|4(?:22|7[34]|89)|5(?:1[34]|55)|6(?:2[56]|4[23]|77|9[023])|7(?:1[2-57-9]|27|7\\d)|884|998)\\d{4}", , , , "3406421234", , , , [7]],
                    [, , "8(?:00|33|44|55|66|77|88)[2-9]\\d{6}", , , , "8002345678"],
                    [, , "900[2-9]\\d{6}", , , , "9002345678"],
                    [, , , , , , , , , [-1]],
                    [, , "5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}", , , , "5002345678"],
                    [, , , , , , , , , [-1]], "VI", 1, "011", "1", , , "1|([2-9]\\d{6})$", "340$1", , 1, , , [, , , , , , , , , [-1]], , "340", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                VN: [, [, , "[12]\\d{9}|[135-9]\\d{8}|[16]\\d{7}|[16-8]\\d{6}", , , , , , , [7, 8, 9, 10]],
                    [, , "2(?:0[3-9]|1[0-689]|2[0-25-9]|3[2-9]|4[2-8]|5[124-9]|6[0-39]|7[0-7]|8[2-79]|9[0-4679])\\d{7}", , , , "2101234567", , , [10]],
                    [, , "(?:52[238]|8(?:79|9[689])|99[013-9])\\d{6}|(?:3\\d|5[689]|7[06-9]|8[1-68]|9[0-8])\\d{7}", , , , "912345678", , , [9]],
                    [, , "1800\\d{4,6}|12(?:03|28)\\d{4}", , , , "1800123456", , , [8, 9, 10]],
                    [, , "1900\\d{4,6}", , , , "1900123456", , , [8, 9, 10]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "672\\d{6}", , , , "672012345", , , [9]], "VN", 84, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[17]99"], "0$1", , 1],
                        [, "(\\d{2})(\\d{5})", "$1 $2", ["80"], "0$1", , 1],
                        [, "(\\d{3})(\\d{4,5})", "$1 $2", ["69"], "0$1", , 1],
                        [, "(\\d{4})(\\d{4,6})", "$1 $2", ["1"], , , 1],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[69]"], "0$1", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[3578]"], "0$1", , 1],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3", ["2[48]"], "0$1", , 1],
                        [, "(\\d{3})(\\d{4})(\\d{3})", "$1 $2 $3", ["2"], "0$1", , 1]
                    ],
                    [
                        [, "(\\d{2})(\\d{5})", "$1 $2", ["80"], "0$1", , 1],
                        [, "(\\d{4})(\\d{4,6})", "$1 $2", ["1"], , , 1],
                        [, "(\\d{2})(\\d{3})(\\d{2})(\\d{2})", "$1 $2 $3 $4", ["[69]"], "0$1", , 1],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[3578]"], "0$1", , 1],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3", ["2[48]"], "0$1", , 1],
                        [, "(\\d{3})(\\d{4})(\\d{3})", "$1 $2 $3", ["2"], "0$1", , 1]
                    ],
                    [, , , , , , , , , [-1]], , , [, , "[17]99\\d{4}|69\\d{5,6}", , , , , , , [7, 8]],
                    [, , "(?:[17]99|80\\d)\\d{4}|69\\d{5,6}", , , , "1992000", , , [7, 8]], , , [, , , , , , , , , [-1]]
                ],
                VU: [, [, , "(?:[23]\\d|[48]8)\\d{3}|(?:[57]\\d|90)\\d{5}", , , , , , , [5, 7]],
                    [, , "(?:38[0-8]|48[4-9])\\d\\d|(?:2[02-9]|3[4-7]|88)\\d{3}", , , , "22123", , , [5]],
                    [, , "57[2-5]\\d{4}|(?:5[0-689]|7[013-7])\\d{5}", , , , "5912345", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "90[1-9]\\d{4}", , , , "9010123", , , [7]], "VU", 678, "00", , , , , , , , [
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["[579]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "(?:3[03]|900\\d)\\d{3}", , , , "30123"], , , [, , , , , , , , , [-1]]
                ],
                WF: [, [, , "(?:[45]0|68|72|8\\d)\\d{4}", , , , , , , [6]],
                    [, , "(?:50|68|72)\\d{4}", , , , "501234"],
                    [, , "(?:50|68|72|8[23])\\d{4}", , , , "501234"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "WF", 681, "00", , , , , , , , [
                        [, "(\\d{2})(\\d{2})(\\d{2})", "$1 $2 $3", ["[4-8]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , "[48]0\\d{4}", , , , "401234"]
                ],
                WS: [, [, , "[2-6]\\d{4}|8\\d{5}(?:\\d{4})?|[78]\\d{6}", , , , , , , [5, 6, 7, 10]],
                    [, , "(?:[2-5]\\d|6[1-9])\\d{3}", , , , "22123", , , [5]],
                    [, , "(?:7[25-7]|8(?:[3-7]|9\\d{3}))\\d{5}", , , , "7212345", , , [7, 10]],
                    [, , "800\\d{3}", , , , "800123", , , [6]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "WS", 685, "0", , , , , , , , [
                        [, "(\\d{5})", "$1", ["[2-6]"]],
                        [, "(\\d{3})(\\d{3,7})", "$1 $2", ["8"]],
                        [, "(\\d{2})(\\d{5})", "$1 $2", ["7"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                XK: [, [, , "[23]\\d{7,8}|(?:4\\d\\d|[89]00)\\d{5}", , , , , , , [8, 9]],
                    [, , "(?:2[89]|39)0\\d{6}|[23][89]\\d{6}", , , , "28012345"],
                    [, , "4[3-9]\\d{6}", , , , "43201234", , , [8]],
                    [, , "800\\d{5}", , , , "80001234", , , [8]],
                    [, , "900\\d{5}", , , , "90001234", , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "XK", 383, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{5})", "$1 $2", ["[89]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3})", "$1 $2 $3", ["[2-4]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[23]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                YE: [, [, , "(?:1|7\\d)\\d{7}|[1-7]\\d{6}", , , , , , , [7, 8, 9],
                        [6]
                    ],
                    [, , "17\\d{6}|(?:[12][2-68]|3[2358]|4[2-58]|5[2-6]|6[3-58]|7[24-68])\\d{5}", , , , "1234567", , , [7, 8],
                        [6]
                    ],
                    [, , "7[0137]\\d{7}", , , , "712345678", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "YE", 967, "00", "0", , , "0", , , , [
                        [, "(\\d)(\\d{3})(\\d{3,4})", "$1 $2 $3", ["[1-6]|7[24-68]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["7"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                YT: [, [, , "80\\d{7}|(?:26|63)9\\d{6}", , , , , , , [9]],
                    [, , "269(?:0[67]|5[0-2]|6\\d|[78]0)\\d{4}", , , , "269601234"],
                    [, , "639(?:0[0-79]|1[019]|[267]\\d|3[09]|[45]0|9[04-79])\\d{4}", , , , "639012345"],
                    [, , "80\\d{7}", , , , "801234567"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "YT", 262, "00", "0", , , "0", , , , , , [, , , , , , , , , [-1]], , "269|63", [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                ZA: [, [, , "[1-9]\\d{8}|8\\d{4,7}", , , , , , , [5, 6, 7, 8, 9]],
                    [, , "(?:1[0-8]|2[1-378]|3[1-69]|4\\d|5[1346-8])\\d{7}", , , , "101234567", , , [9]],
                    [, , "8[1-4]\\d{3,7}|(?:6\\d|7[0-46-9]|85)\\d{7}", , , , "711234567"],
                    [, , "80\\d{7}", , , , "801234567", , , [9]],
                    [, , "(?:86[2-9]|9[0-2]\\d)\\d{6}", , , , "862345678", , , [9]],
                    [, , "860\\d{6}", , , , "860123456", , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , "87\\d{7}", , , , "871234567", , , [9]], "ZA", 27, "00", "0", , , "0", , , , [
                        [, "(\\d{2})(\\d{3,4})", "$1 $2", ["8[1-4]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{2,3})", "$1 $2 $3", ["8[1-4]"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["860"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["[1-9]"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "861\\d{6}", , , , "861123456", , , [9]], , , [, , , , , , , , , [-1]]
                ],
                ZM: [, [, , "(?:63|80)0\\d{6}|(?:21|[79]\\d)\\d{7}", , , , , , , [9],
                        [6]
                    ],
                    [, , "21[1-8]\\d{6}", , , , "211234567", , , , [6]],
                    [, , "(?:7[67]|9[5-8])\\d{7}", , , , "955123456"],
                    [, , "800\\d{6}", , , , "800123456"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "630\\d{6}", , , , "630012345"], "ZM", 260, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{3})", "$1 $2", ["[1-9]"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[28]"], "0$1"],
                        [, "(\\d{2})(\\d{7})", "$1 $2", ["[79]"], "0$1"]
                    ],
                    [
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[28]"], "0$1"],
                        [, "(\\d{2})(\\d{7})", "$1 $2", ["[79]"], "0$1"]
                    ],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                ZW: [, [, , "2(?:[0-57-9]\\d{6,8}|6[0-24-9]\\d{6,7})|[38]\\d{9}|[35-8]\\d{8}|[3-6]\\d{7}|[1-689]\\d{6}|[1-3569]\\d{5}|[1356]\\d{4}", , , , , , , [5, 6, 7, 8, 9, 10],
                        [3, 4]
                    ],
                    [, , "(?:1(?:(?:3\\d|9)\\d|[4-8])|2(?:(?:(?:0(?:2[014]|5)|(?:2[0157]|31|84|9)\\d\\d|[56](?:[14]\\d\\d|20)|7(?:[089]|2[03]|[35]\\d\\d))\\d|4(?:2\\d\\d|8))\\d|1(?:2|[39]\\d{4}))|3(?:(?:123|(?:29\\d|92)\\d)\\d\\d|7(?:[19]|[56]\\d))|5(?:0|1[2-478]|26|[37]2|4(?:2\\d{3}|83)|5(?:25\\d\\d|[78])|[689]\\d)|6(?:(?:[16-8]21|28|52[013])\\d\\d|[39])|8(?:[1349]28|523)\\d\\d)\\d{3}|(?:4\\d\\d|9[2-9])\\d{4,5}|(?:(?:2(?:(?:(?:0|8[146])\\d|7[1-7])\\d|2(?:[278]\\d|92)|58(?:2\\d|3))|3(?:[26]|9\\d{3})|5(?:4\\d|5)\\d\\d)\\d|6(?:(?:(?:[0-246]|[78]\\d)\\d|37)\\d|5[2-8]))\\d\\d|(?:2(?:[569]\\d|8[2-57-9])|3(?:[013-59]\\d|8[37])|6[89]8)\\d{3}", , , , "1312345", , , , [3, 4]],
                    [, , "7(?:[17]\\d|[38][1-9])\\d{6}", , , , "712345678", , , [9]],
                    [, , "80(?:[01]\\d|20|8[0-8])\\d{3}", , , , "8001234", , , [7]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "86(?:1[12]|22|30|44|55|77|8[368])\\d{6}", , , , "8686123456", , , [10]], "ZW", 263, "00", "0", , , "0", , , , [
                        [, "(\\d{3})(\\d{3,5})", "$1 $2", ["2(?:0[45]|2[278]|[49]8)|3(?:[09]8|17)|6(?:[29]8|37|75)|[23][78]|(?:33|5[15]|6[68])[78]"], "0$1"],
                        [, "(\\d)(\\d{3})(\\d{2,4})", "$1 $2 $3", ["[49]"], "0$1"],
                        [, "(\\d{3})(\\d{4})", "$1 $2", ["80"], "0$1"],
                        [, "(\\d{2})(\\d{7})", "$1 $2", ["24|8[13-59]|(?:2[05-79]|39|5[45]|6[15-8])2", "2(?:02[014]|4|[56]20|[79]2)|392|5(?:42|525)|6(?:[16-8]21|52[013])|8[13-59]"], "(0$1)"],
                        [, "(\\d{2})(\\d{3})(\\d{4})", "$1 $2 $3", ["7"], "0$1"],
                        [, "(\\d{3})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["2(?:1[39]|2[0157]|[378]|[56][14])|3(?:12|29)", "2(?:1[39]|2[0157]|[378]|[56][14])|3(?:123|29)"], "0$1"],
                        [, "(\\d{4})(\\d{6})", "$1 $2", ["8"], "0$1"],
                        [, "(\\d{2})(\\d{3,5})", "$1 $2", ["1|2(?:0[0-36-9]|12|29|[56])|3(?:1[0-689]|[24-6])|5(?:[0236-9]|1[2-4])|6(?:[013-59]|7[0-46-9])|(?:33|55|6[68])[0-69]|(?:29|3[09]|62)[0-79]"], "0$1"],
                        [, "(\\d{2})(\\d{3})(\\d{3,4})", "$1 $2 $3", ["29[013-9]|39|54"], "0$1"],
                        [, "(\\d{4})(\\d{3,5})", "$1 $2", ["(?:25|54)8", "258|5483"], "0$1"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                800: [, [, , "\\d{8}", , , , , , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "\\d{8}", , , , "12345678"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "001", 800, , , , , , , , 1, [
                        [, "(\\d{4})(\\d{4})", "$1 $2"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                808: [, [, , "\\d{8}", , , , , , , [8]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "\\d{8}", , , , "12345678"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "001", 808, , , , , , , , 1, [
                        [, "(\\d{4})(\\d{4})", "$1 $2"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                870: [, [, , "[35-7]\\d{8}", , , , , , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , "(?:[356]\\d|7[6-8])\\d{7}", , , , "301234567"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "001", 870, , , , , , , , , [
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["[35-7]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                878: [, [, , "10\\d{10}", , , , , , , [12]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "10\\d{10}", , , , "101234567890"], "001", 878, , , , , , , , 1, [
                        [, "(\\d{2})(\\d{5})(\\d{5})", "$1 $2 $3", ["1"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                881: [, [, , "[67]\\d{8}", , , , , , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , "[67]\\d{8}", , , , "612345678"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "001", 881, , , , , , , , , [
                        [, "(\\d)(\\d{3})(\\d{5})", "$1 $2 $3", ["[67]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                882: [, [, , "1\\d{6,11}|3\\d{6}(?:\\d{2,5})?", , , , , , , [7, 8, 9, 10, 11, 12]],
                    [, , , , , , , , , [-1]],
                    [, , "3(?:37\\d\\d|42)\\d{4}|3(?:2|47|7\\d{3})\\d{7}", , , , "3421234", , , [7, 9, 10, 12]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "1(?:3(?:0[0347]|[13][0139]|2[035]|4[013568]|6[0459]|7[06]|8[15-8]|9[0689])\\d{4}|6\\d{5,10})|3(?:45|9\\d{3})\\d{7}", , , , "390123456789"], "001", 882, , , , , , , , , [
                        [, "(\\d{2})(\\d{5})", "$1 $2", ["16|342"]],
                        [, "(\\d{2})(\\d{2})(\\d{4})", "$1 $2 $3", ["1"]],
                        [, "(\\d{2})(\\d{4})(\\d{3})", "$1 $2 $3", ["3[23]"]],
                        [, "(\\d{2})(\\d{3,4})(\\d{4})", "$1 $2 $3", ["1"]],
                        [, "(\\d{2})(\\d{4})(\\d{4})", "$1 $2 $3", ["34[57]"]],
                        [, "(\\d{3})(\\d{4})(\\d{4})", "$1 $2 $3", ["34"]],
                        [, "(\\d{2})(\\d{4,5})(\\d{5})", "$1 $2 $3", ["[13]"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , "348[57]\\d{7}", , , , "34851234567", , , [11]]
                ],
                883: [, [, , "51\\d{7}(?:\\d{3})?", , , , , , , [9, 12]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "51[013]0\\d{8}|5100\\d{5}", , , , "510012345"], "001", 883, , , , , , , , 1, [
                        [, "(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3", ["510"]],
                        [, "(\\d{3})(\\d{3})(\\d{3})(\\d{3})", "$1 $2 $3 $4", ["510"]],
                        [, "(\\d{4})(\\d{4})(\\d{4})", "$1 $2 $3", ["5"]]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ],
                888: [, [, , "\\d{11}", , , , , , , [11]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "001", 888, , , , , , , , 1, [
                        [, "(\\d{3})(\\d{3})(\\d{5})", "$1 $2 $3"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , "\\d{11}", , , , "12345678901"], , , [, , , , , , , , , [-1]]
                ],
                979: [, [, , "\\d{9}", , , , , , , [9]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , "\\d{9}", , , , "123456789"],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], "001", 979, , , , , , , , 1, [
                        [, "(\\d)(\\d{4})(\\d{4})", "$1 $2 $3"]
                    ], , [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]],
                    [, , , , , , , , , [-1]], , , [, , , , , , , , , [-1]]
                ]
            };

        function F() {
            this.a = {}
        }
        F.c = void 0, F.a = function() {
            return F.c ? F.c : F.c = new F
        };
        var q = {
                0: "0",
                1: "1",
                2: "2",
                3: "3",
                4: "4",
                5: "5",
                6: "6",
                7: "7",
                8: "8",
                9: "9",
                "０": "0",
                "１": "1",
                "２": "2",
                "３": "3",
                "４": "4",
                "５": "5",
                "６": "6",
                "７": "7",
                "８": "8",
                "９": "9",
                "٠": "0",
                "١": "1",
                "٢": "2",
                "٣": "3",
                "٤": "4",
                "٥": "5",
                "٦": "6",
                "٧": "7",
                "٨": "8",
                "٩": "9",
                "۰": "0",
                "۱": "1",
                "۲": "2",
                "۳": "3",
                "۴": "4",
                "۵": "5",
                "۶": "6",
                "۷": "7",
                "۸": "8",
                "۹": "9"
            },
            G = {
                0: "0",
                1: "1",
                2: "2",
                3: "3",
                4: "4",
                5: "5",
                6: "6",
                7: "7",
                8: "8",
                9: "9",
                "０": "0",
                "１": "1",
                "２": "2",
                "３": "3",
                "４": "4",
                "５": "5",
                "６": "6",
                "７": "7",
                "８": "8",
                "９": "9",
                "٠": "0",
                "١": "1",
                "٢": "2",
                "٣": "3",
                "٤": "4",
                "٥": "5",
                "٦": "6",
                "٧": "7",
                "٨": "8",
                "٩": "9",
                "۰": "0",
                "۱": "1",
                "۲": "2",
                "۳": "3",
                "۴": "4",
                "۵": "5",
                "۶": "6",
                "۷": "7",
                "۸": "8",
                "۹": "9",
                A: "2",
                B: "2",
                C: "2",
                D: "3",
                E: "3",
                F: "3",
                G: "4",
                H: "4",
                I: "4",
                J: "5",
                K: "5",
                L: "5",
                M: "6",
                N: "6",
                O: "6",
                P: "7",
                Q: "7",
                R: "7",
                S: "7",
                T: "8",
                U: "8",
                V: "8",
                W: "9",
                X: "9",
                Y: "9",
                Z: "9"
            },
            U = /^[+\uff0b]+/,
            W = /([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9])/,
            K = /[+\uff0b0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]/,
            V = /[\\\/] *x/,
            Y = /[^0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9A-Za-z#]+$/,
            Z = /(?:.*?[A-Za-z]){3}.*/,
            J = /(?:;ext=([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{1,7})|[ \u00a0\t,]*(?:e?xt(?:ensi(?:o\u0301?|\u00f3))?n?|\uff45?\uff58\uff54\uff4e?|\u0434\u043e\u0431|[;,x\uff58#\uff03~\uff5e]|int|anexo|\uff49\uff4e\uff54)[:\.\uff0e]?[ \u00a0\t,-]*([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{1,7})#?|[- ]+([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{1,5})#)$/i,
            X = /^[0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{2}$|^[+\uff0b]*(?:[-x\u2010-\u2015\u2212\u30fc\uff0d-\uff0f \u00a0\u00ad\u200b\u2060\u3000()\uff08\uff09\uff3b\uff3d.\[\]/~\u2053\u223c\uff5e*]*[0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]){3,}[-x\u2010-\u2015\u2212\u30fc\uff0d-\uff0f \u00a0\u00ad\u200b\u2060\u3000()\uff08\uff09\uff3b\uff3d.\[\]/~\u2053\u223c\uff5e*A-Za-z0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]*(?:;ext=([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{1,7})|[ \u00a0\t,]*(?:e?xt(?:ensi(?:o\u0301?|\u00f3))?n?|\uff45?\uff58\uff54\uff4e?|\u0434\u043e\u0431|[;,x\uff58#\uff03~\uff5e]|int|anexo|\uff49\uff4e\uff54)[:\.\uff0e]?[ \u00a0\t,-]*([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{1,7})#?|[- ]+([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{1,5})#)?$/i,
            Q = /(\$\d)/;

        function tt(t) {
            return !(2 > t.length) && vt(X, t)
        }

        function et(t) {
            return vt(Z, t) ? nt(t, G) : nt(t, q)
        }

        function dt(t) {
            var e = et(t.toString());
            t.c = "", t.a(e)
        }

        function it(t) {
            return null != t && (1 != v(t, 9) || -1 != y(t, 9)[0])
        }

        function nt(t, e) {
            for (var d, i = new L, n = t.length, o = 0; o < n; ++o) null != (d = e[(d = t.charAt(o)).toUpperCase()]) && i.a(d);
            return i.toString()
        }

        function ot(t) {
            return null != t && isNaN(t) && t.toUpperCase() in R
        }

        function rt(t, e, d) {
            if (0 == x(e, 2) && null != e.a[5]) {
                var i = _(e, 5);
                if (0 < i.length) return i
            }
            i = _(e, 1);
            var n = st(e);
            if (0 == d) return lt(i, 0, n, "");
            if (!(i in H)) return n;
            t = at(t, i, $t(i)), e = null != e.a[3] && 0 != x(e, 3).length ? 3 == d ? ";ext=" + x(e, 3) : null != t.a[13] ? x(t, 13) + _(e, 3) : " ext. " + _(e, 3) : "";
            t: {
                for (var o, r = (t = 0 == y(t, 20).length || 2 == d ? y(t, 19) : y(t, 20)).length, a = 0; a < r; ++a) {
                    var s = v(o = t[a], 3);
                    if ((0 == s || 0 == n.search(x(o, 3, s - 1))) && vt(s = new RegExp(x(o, 1)), n)) {
                        t = o;
                        break t
                    }
                }
                t = null
            }
            return null != t && (t = _(r = t, 2), o = new RegExp(x(r, 1)), _(r, 5), r = _(r, 4), n = 2 == d && null != r && 0 < r.length ? n.replace(o, t.replace(Q, r)) : n.replace(o, t), 3 == d && (n = (n = n.replace(/^[-x\u2010-\u2015\u2212\u30fc\uff0d-\uff0f \u00a0\u00ad\u200b\u2060\u3000()\uff08\uff09\uff3b\uff3d.\[\]/~\u2053\u223c\uff5e]+/, "")).replace(/[-x\u2010-\u2015\u2212\u30fc\uff0d-\uff0f \u00a0\u00ad\u200b\u2060\u3000()\uff08\uff09\uff3b\uff3d.\[\]/~\u2053\u223c\uff5e]+/g, "-"))), lt(i, d, n, e)
        }

        function at(t, e, d) {
            return ct(t, "001" == d ? "" + e : d)
        }

        function st(t) {
            if (null == t.a[2]) return "";
            var e = "" + x(t, 2);
            return null != t.a[4] && x(t, 4) && 0 < _(t, 8) ? Array(_(t, 8) + 1).join("0") + e : e
        }

        function lt(t, e, d, i) {
            switch (e) {
                case 0:
                    return "+" + t + d + i;
                case 1:
                    return "+" + t + " " + d + i;
                case 3:
                    return "tel:+" + t + "-" + d + i;
                default:
                    return d + i
            }
        }

        function ut(t, e) {
            switch (e) {
                case 4:
                    return x(t, 5);
                case 3:
                    return x(t, 4);
                case 1:
                    return x(t, 3);
                case 0:
                case 2:
                    return x(t, 2);
                case 5:
                    return x(t, 6);
                case 6:
                    return x(t, 8);
                case 7:
                    return x(t, 7);
                case 8:
                    return x(t, 21);
                case 9:
                    return x(t, 25);
                case 10:
                    return x(t, 28);
                default:
                    return x(t, 1)
            }
        }

        function pt(t, e) {
            return ft(t, x(e, 1)) ? ft(t, x(e, 5)) ? 4 : ft(t, x(e, 4)) ? 3 : ft(t, x(e, 6)) ? 5 : ft(t, x(e, 8)) ? 6 : ft(t, x(e, 7)) ? 7 : ft(t, x(e, 21)) ? 8 : ft(t, x(e, 25)) ? 9 : ft(t, x(e, 28)) ? 10 : ft(t, x(e, 2)) ? x(e, 18) || ft(t, x(e, 3)) ? 2 : 0 : !x(e, 18) && ft(t, x(e, 3)) ? 1 : -1 : -1
        }

        function ct(t, e) {
            if (null == e) return null;
            e = e.toUpperCase();
            var d = t.a[e];
            if (null == d) {
                if (null == (d = R[e])) return null;
                d = (new N).a(j.f(), d), t.a[e] = d
            }
            return d
        }

        function ft(t, e) {
            var d = t.length;
            return !(0 < v(e, 9) && -1 == n(y(e, 9), d)) && vt(_(e, 2), t)
        }

        function ht(t, e) {
            if (null == e) return null;
            var d = _(e, 1);
            if (null == (d = H[d])) t = null;
            else if (1 == d.length) t = d[0];
            else t: {
                e = st(e);
                for (var i, n = d.length, o = 0; o < n; o++) {
                    var r = ct(t, i = d[o]);
                    if (null != r.a[23]) {
                        if (0 == e.search(x(r, 23))) {
                            t = i;
                            break t
                        }
                    } else if (-1 != pt(e, r)) {
                        t = i;
                        break t
                    }
                }
                t = null
            }
            return t
        }

        function $t(t) {
            return null == (t = H[t]) ? "ZZ" : t[0]
        }

        function gt(t, e, d, i) {
            var r = ut(d, i),
                a = 0 == v(r, 9) ? y(x(d, 1), 9) : y(r, 9);
            if (r = y(r, 10), 2 == i) {
                if (!it(ut(d, 0))) return gt(t, e, d, 1);
                it(t = ut(d, 1)) && (o(a = a.concat(0 == v(t, 9) ? y(x(d, 1), 9) : y(t, 9))), 0 == r.length ? r = y(t, 10) : o(r = r.concat(y(t, 10))))
            }
            return -1 == a[0] ? 5 : (e = e.length, -1 < n(r, e) ? 4 : (d = a[0]) == e ? 0 : d > e ? 2 : a[a.length - 1] < e ? 3 : -1 < n(a, e, 1) ? 0 : 5)
        }

        function mt(t, e) {
            var d = st(e);
            return (e = _(e, 1)) in H ? gt(t, d, e = at(t, e, $t(e)), -1) : 1
        }

        function bt(t, e, d, i, n, o) {
            if (0 == e.length) return 0;
            var r;
            e = new L(e), null != d && (r = x(d, 11)), null == r && (r = "NonMatch");
            var a = e.toString();
            if (0 == a.length) r = 20;
            else if (U.test(a)) a = a.replace(U, ""), e.c = "", e.a(et(a)), r = 1;
            else {
                if (a = new RegExp(r), dt(e), 0 == (r = e.toString()).search(a)) {
                    a = r.match(a)[0].length;
                    var s = r.substring(a).match(W);
                    s && null != s[1] && 0 < s[1].length && "0" == nt(s[1], q) ? r = !1 : (e.c = "", e.a(r.substring(a)), r = !0)
                } else r = !1;
                r = r ? 5 : 20
            }
            if (n && w(o, 6, r), 20 != r) {
                if (2 >= e.c.length) throw Error("Phone number too short after IDD");
                t: {
                    if (0 != (t = e.toString()).length && "0" != t.charAt(0))
                        for (n = t.length, e = 1; 3 >= e && e <= n; ++e)
                            if ((d = parseInt(t.substring(0, e), 10)) in H) {
                                i.a(t.substring(e)), i = d;
                                break t
                            }
                    i = 0
                }
                if (0 != i) return w(o, 1, i), i;
                throw Error("Invalid country calling code")
            }
            return null != d && (a = "" + (r = _(d, 10)), 0 == (s = e.toString()).lastIndexOf(a, 0) && (a = new L(s.substring(a.length)), s = x(d, 1), s = new RegExp(_(s, 2)), xt(a, d, null), a = a.toString(), !vt(s, e.toString()) && vt(s, a) || 3 == gt(t, e.toString(), d, -1))) ? (i.a(a), n && w(o, 6, 10), w(o, 1, r), r) : (w(o, 1, 0), 0)
        }

        function xt(t, e, d) {
            var i = t.toString(),
                n = i.length,
                o = x(e, 15);
            if (0 != n && null != o && 0 != o.length) {
                var r = new RegExp("^(?:" + o + ")");
                if (n = r.exec(i)) {
                    var a = vt(o = new RegExp(_(x(e, 1), 2)), i),
                        s = n.length - 1;
                    null == (e = x(e, 16)) || 0 == e.length || null == n[s] || 0 == n[s].length ? a && !vt(o, i.substring(n[0].length)) || (null != d && 0 < s && null != n[s] && d.a(n[1]), t.set(i.substring(n[0].length))) : (i = i.replace(r, e), (!a || vt(o, i)) && (null != d && 0 < s && d.a(n[1]), t.set(i)))
                }
            }
        }

        function _t(t, e, d) {
            if (!ot(d) && 0 < e.length && "+" != e.charAt(0)) throw Error("Invalid country calling code");
            return yt(t, e, d, !0)
        }

        function yt(t, e, d, i) {
            if (null == e) throw Error("The string supplied did not seem to be a phone number");
            if (250 < e.length) throw Error("The string supplied is too long to be a phone number");
            var n = new L,
                o = e.indexOf(";phone-context=");
            if (0 <= o) {
                var r = o + 15;
                if ("+" == e.charAt(r)) {
                    var a = e.indexOf(";", r);
                    0 < a ? n.a(e.substring(r, a)) : n.a(e.substring(r))
                }
                r = e.indexOf("tel:"), n.a(e.substring(0 <= r ? r + 4 : 0, o))
            } else n.a(function(t) {
                var e = t.search(K);
                return 0 <= e ? 0 <= (e = (t = (t = t.substring(e)).replace(Y, "")).search(V)) && (t = t.substring(0, e)) : t = "", t
            }(e));
            if (0 < (r = (o = n.toString()).indexOf(";isub=")) && (n.c = "", n.a(o.substring(0, r))), !tt(n.toString())) throw Error("The string supplied did not seem to be a phone number");
            if (o = n.toString(), !(ot(d) || null != o && 0 < o.length && U.test(o))) throw Error("Invalid country calling code");
            o = new O, i && w(o, 5, e);
            t: {
                if (0 <= (r = (e = n.toString()).search(J)) && tt(e.substring(0, r)))
                    for (var s = (a = e.match(J)).length, l = 1; l < s; ++l)
                        if (null != a[l] && 0 < a[l].length) {
                            n.c = "", n.a(e.substring(0, r)), e = a[l];
                            break t
                        }
                e = ""
            }
            0 < e.length && w(o, 3, e), r = ct(t, d), e = new L, a = 0, s = n.toString();
            try {
                a = bt(t, s, r, e, i, o)
            } catch (d) {
                if ("Invalid country calling code" != d.message || !U.test(s)) throw d;
                if (0 == (a = bt(t, s = s.replace(U, ""), r, e, i, o))) throw d
            }
            if (0 != a ? (n = $t(a)) != d && (r = at(t, a, n)) : (dt(n), e.a(n.toString()), null != d ? w(o, 1, a = _(r, 10)) : i && (delete o.a[6], o.c && delete o.c[6])), 2 > e.c.length) throw Error("The string supplied is too short to be a phone number");
            if (null != r && (d = new L, xt(n = new L(e.toString()), r, d), 2 != (t = gt(t, n.toString(), r, -1)) && 4 != t && 5 != t && (e = n, i && 0 < d.toString().length && w(o, 7, d.toString()))), 2 > (t = (i = e.toString()).length)) throw Error("The string supplied is too short to be a phone number");
            if (17 < t) throw Error("The string supplied is too long to be a phone number");
            if (1 < i.length && "0" == i.charAt(0)) {
                for (w(o, 4, !0), t = 1; t < i.length - 1 && "0" == i.charAt(t);) t++;
                1 != t && w(o, 8, t)
            }
            return w(o, 2, parseInt(i, 10)), o
        }

        function vt(t, e) {
            return !(!(t = "string" == typeof t ? e.match("^(?:" + t + ")$") : e.match(t)) || t[0].length != e.length)
        }
        d("intlTelInputUtils", {}), d("intlTelInputUtils.formatNumber", (function(t, e, d) {
            try {
                var i = F.a(),
                    n = _t(i, t, e),
                    o = mt(i, n);
                return 0 == o || 4 == o ? rt(i, n, void 0 === d ? 0 : d) : t
            } catch (e) {
                return t
            }
        })), d("intlTelInputUtils.getExampleNumber", (function(t, e, d) {
            try {
                var i = F.a();
                t: {
                    if (ot(t)) {
                        var n = ut(ct(i, t), d);
                        try {
                            if (null != n.a[6]) {
                                var o = yt(i, x(n, 6), t, !1);
                                break t
                            }
                        } catch (t) {}
                    }
                    o = null
                }
                return rt(i, o, e ? 2 : 1)
            } catch (t) {
                return ""
            }
        })), d("intlTelInputUtils.getExtension", (function(t, e) {
            try {
                return x(_t(F.a(), t, e), 3)
            } catch (t) {
                return ""
            }
        })), d("intlTelInputUtils.getNumberType", (function(t, e) {
            try {
                var d = F.a(),
                    i = _t(d, t, e),
                    n = ht(d, i),
                    o = at(d, _(i, 1), n);
                if (null == o) var r = -1;
                else r = pt(st(i), o);
                return r
            } catch (t) {
                return -99
            }
        })), d("intlTelInputUtils.getValidationError", (function(t, e) {
            try {
                var d = F.a();
                return mt(d, _t(d, t, e))
            } catch (t) {
                return "Invalid country calling code" == t.message ? 1 : "The string supplied did not seem to be a phone number" == t.message ? 4 : "Phone number too short after IDD" == t.message || "The string supplied is too short to be a phone number" == t ? 2 : "The string supplied is too long to be a phone number" == t.message ? 3 : -99
            }
        })), d("intlTelInputUtils.isValidNumber", (function(t, e) {
            try {
                var d, i = F.a(),
                    n = _t(i, t, e),
                    o = ht(i, n),
                    r = _(n, 1),
                    a = at(i, r, o);
                if (!(d = null == a)) {
                    var s;
                    if (s = "001" != o) {
                        var l = ct(i, o);
                        if (null == l) throw Error("Invalid region code: " + o);
                        s = r != _(l, 10)
                    }
                    d = s
                }
                if (d) var u = !1;
                else u = -1 != pt(st(n), a);
                return u
            } catch (t) {
                return !1
            }
        })), d("intlTelInputUtils.numberFormat", {
            E164: 0,
            INTERNATIONAL: 1,
            NATIONAL: 2,
            RFC3966: 3
        }), d("intlTelInputUtils.numberType", {
            FIXED_LINE: 0,
            MOBILE: 1,
            FIXED_LINE_OR_MOBILE: 2,
            TOLL_FREE: 3,
            PREMIUM_RATE: 4,
            SHARED_COST: 5,
            VOIP: 6,
            PERSONAL_NUMBER: 7,
            PAGER: 8,
            UAN: 9,
            VOICEMAIL: 10,
            UNKNOWN: -1
        }), d("intlTelInputUtils.validationError", {
            IS_POSSIBLE: 0,
            INVALID_COUNTRY_CODE: 1,
            TOO_SHORT: 2,
            TOO_LONG: 3,
            NOT_A_NUMBER: 4
        })
    }()
}, function(t, e, d) {
    var i;
    i = function(t, e, d) {
        "use strict";
        return function() {
            for (var i = [
                    ["Afghanistan (‫افغانستان‬‎)", "af", "93"],
                    ["Albania (Shqipëri)", "al", "355"],
                    ["Algeria (‫الجزائر‬‎)", "dz", "213"],
                    ["American Samoa", "as", "1", 5, ["684"]],
                    ["Andorra", "ad", "376"],
                    ["Angola", "ao", "244"],
                    ["Anguilla", "ai", "1", 6, ["264"]],
                    ["Antigua and Barbuda", "ag", "1", 7, ["268"]],
                    ["Argentina", "ar", "54"],
                    ["Armenia (Հայաստան)", "am", "374"],
                    ["Aruba", "aw", "297"],
                    ["Australia", "au", "61", 0],
                    ["Austria (Österreich)", "at", "43"],
                    ["Azerbaijan (Azərbaycan)", "az", "994"],
                    ["Bahamas", "bs", "1", 8, ["242"]],
                    ["Bahrain (‫البحرين‬‎)", "bh", "973"],
                    ["Bangladesh (বাংলাদেশ)", "bd", "880"],
                    ["Barbados", "bb", "1", 9, ["246"]],
                    ["Belarus (Беларусь)", "by", "375"],
                    ["Belgium (België)", "be", "32"],
                    ["Belize", "bz", "501"],
                    ["Benin (Bénin)", "bj", "229"],
                    ["Bermuda", "bm", "1", 10, ["441"]],
                    ["Bhutan (འབྲུག)", "bt", "975"],
                    ["Bolivia", "bo", "591"],
                    ["Bosnia and Herzegovina (Босна и Херцеговина)", "ba", "387"],
                    ["Botswana", "bw", "267"],
                    ["Brazil (Brasil)", "br", "55"],
                    ["British Indian Ocean Territory", "io", "246"],
                    ["British Virgin Islands", "vg", "1", 11, ["284"]],
                    ["Brunei", "bn", "673"],
                    ["Bulgaria (България)", "bg", "359"],
                    ["Burkina Faso", "bf", "226"],
                    ["Burundi (Uburundi)", "bi", "257"],
                    ["Cambodia (កម្ពុជា)", "kh", "855"],
                    ["Cameroon (Cameroun)", "cm", "237"],
                    ["Canada", "ca", "1", 1, ["204", "226", "236", "249", "250", "289", "306", "343", "365", "387", "403", "416", "418", "431", "437", "438", "450", "506", "514", "519", "548", "579", "581", "587", "604", "613", "639", "647", "672", "705", "709", "742", "778", "780", "782", "807", "819", "825", "867", "873", "902", "905"]],
                    ["Cape Verde (Kabu Verdi)", "cv", "238"],
                    ["Caribbean Netherlands", "bq", "599", 1, ["3", "4", "7"]],
                    ["Cayman Islands", "ky", "1", 12, ["345"]],
                    ["Central African Republic (République centrafricaine)", "cf", "236"],
                    ["Chad (Tchad)", "td", "235"],
                    ["Chile", "cl", "56"],
                    ["China (中国)", "cn", "86"],
                    ["Christmas Island", "cx", "61", 2],
                    ["Cocos (Keeling) Islands", "cc", "61", 1],
                    ["Colombia", "co", "57"],
                    ["Comoros (‫جزر القمر‬‎)", "km", "269"],
                    ["Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)", "cd", "243"],
                    ["Congo (Republic) (Congo-Brazzaville)", "cg", "242"],
                    ["Cook Islands", "ck", "682"],
                    ["Costa Rica", "cr", "506"],
                    ["Côte d’Ivoire", "ci", "225"],
                    ["Croatia (Hrvatska)", "hr", "385"],
                    ["Cuba", "cu", "53"],
                    ["Curaçao", "cw", "599", 0],
                    ["Cyprus (Κύπρος)", "cy", "357"],
                    ["Czech Republic (Česká republika)", "cz", "420"],
                    ["Denmark (Danmark)", "dk", "45"],
                    ["Djibouti", "dj", "253"],
                    ["Dominica", "dm", "1", 13, ["767"]],
                    ["Dominican Republic (República Dominicana)", "do", "1", 2, ["809", "829", "849"]],
                    ["Ecuador", "ec", "593"],
                    ["Egypt (‫مصر‬‎)", "eg", "20"],
                    ["El Salvador", "sv", "503"],
                    ["Equatorial Guinea (Guinea Ecuatorial)", "gq", "240"],
                    ["Eritrea", "er", "291"],
                    ["Estonia (Eesti)", "ee", "372"],
                    ["Ethiopia", "et", "251"],
                    ["Falkland Islands (Islas Malvinas)", "fk", "500"],
                    ["Faroe Islands (Føroyar)", "fo", "298"],
                    ["Fiji", "fj", "679"],
                    ["Finland (Suomi)", "fi", "358", 0],
                    ["France", "fr", "33"],
                    ["French Guiana (Guyane française)", "gf", "594"],
                    ["French Polynesia (Polynésie française)", "pf", "689"],
                    ["Gabon", "ga", "241"],
                    ["Gambia", "gm", "220"],
                    ["Georgia (საქართველო)", "ge", "995"],
                    ["Germany (Deutschland)", "de", "49"],
                    ["Ghana (Gaana)", "gh", "233"],
                    ["Gibraltar", "gi", "350"],
                    ["Greece (Ελλάδα)", "gr", "30"],
                    ["Greenland (Kalaallit Nunaat)", "gl", "299"],
                    ["Grenada", "gd", "1", 14, ["473"]],
                    ["Guadeloupe", "gp", "590", 0],
                    ["Guam", "gu", "1", 15, ["671"]],
                    ["Guatemala", "gt", "502"],
                    ["Guernsey", "gg", "44", 1, ["1481", "7781", "7839", "7911"]],
                    ["Guinea (Guinée)", "gn", "224"],
                    ["Guinea-Bissau (Guiné Bissau)", "gw", "245"],
                    ["Guyana", "gy", "592"],
                    ["Haiti", "ht", "509"],
                    ["Honduras", "hn", "504"],
                    ["Hong Kong (香港)", "hk", "852"],
                    ["Hungary (Magyarország)", "hu", "36"],
                    ["Iceland (Ísland)", "is", "354"],
                    ["India (भारत)", "in", "91"],
                    ["Indonesia", "id", "62"],
                    ["Iran (‫ایران‬‎)", "ir", "98"],
                    ["Iraq (‫العراق‬‎)", "iq", "964"],
                    ["Ireland", "ie", "353"],
                    ["Isle of Man", "im", "44", 2, ["1624", "74576", "7524", "7924", "7624"]],
                    ["Israel (‫ישראל‬‎)", "il", "972"],
                    ["Italy (Italia)", "it", "39", 0],
                    ["Jamaica", "jm", "1", 4, ["876", "658"]],
                    ["Japan (日本)", "jp", "81"],
                    ["Jersey", "je", "44", 3, ["1534", "7509", "7700", "7797", "7829", "7937"]],
                    ["Jordan (‫الأردن‬‎)", "jo", "962"],
                    ["Kazakhstan (Казахстан)", "kz", "7", 1, ["33", "7"]],
                    ["Kenya", "ke", "254"],
                    ["Kiribati", "ki", "686"],
                    ["Kosovo", "xk", "383"],
                    ["Kuwait (‫الكويت‬‎)", "kw", "965"],
                    ["Kyrgyzstan (Кыргызстан)", "kg", "996"],
                    ["Laos (ລາວ)", "la", "856"],
                    ["Latvia (Latvija)", "lv", "371"],
                    ["Lebanon (‫لبنان‬‎)", "lb", "961"],
                    ["Lesotho", "ls", "266"],
                    ["Liberia", "lr", "231"],
                    ["Libya (‫ليبيا‬‎)", "ly", "218"],
                    ["Liechtenstein", "li", "423"],
                    ["Lithuania (Lietuva)", "lt", "370"],
                    ["Luxembourg", "lu", "352"],
                    ["Macau (澳門)", "mo", "853"],
                    ["Macedonia (FYROM) (Македонија)", "mk", "389"],
                    ["Madagascar (Madagasikara)", "mg", "261"],
                    ["Malawi", "mw", "265"],
                    ["Malaysia", "my", "60"],
                    ["Maldives", "mv", "960"],
                    ["Mali", "ml", "223"],
                    ["Malta", "mt", "356"],
                    ["Marshall Islands", "mh", "692"],
                    ["Martinique", "mq", "596"],
                    ["Mauritania (‫موريتانيا‬‎)", "mr", "222"],
                    ["Mauritius (Moris)", "mu", "230"],
                    ["Mayotte", "yt", "262", 1, ["269", "639"]],
                    ["Mexico (México)", "mx", "52"],
                    ["Micronesia", "fm", "691"],
                    ["Moldova (Republica Moldova)", "md", "373"],
                    ["Monaco", "mc", "377"],
                    ["Mongolia (Монгол)", "mn", "976"],
                    ["Montenegro (Crna Gora)", "me", "382"],
                    ["Montserrat", "ms", "1", 16, ["664"]],
                    ["Morocco (‫المغرب‬‎)", "ma", "212", 0],
                    ["Mozambique (Moçambique)", "mz", "258"],
                    ["Myanmar (Burma) (မြန်မာ)", "mm", "95"],
                    ["Namibia (Namibië)", "na", "264"],
                    ["Nauru", "nr", "674"],
                    ["Nepal (नेपाल)", "np", "977"],
                    ["Netherlands (Nederland)", "nl", "31"],
                    ["New Caledonia (Nouvelle-Calédonie)", "nc", "687"],
                    ["New Zealand", "nz", "64"],
                    ["Nicaragua", "ni", "505"],
                    ["Niger (Nijar)", "ne", "227"],
                    ["Nigeria", "ng", "234"],
                    ["Niue", "nu", "683"],
                    ["Norfolk Island", "nf", "672"],
                    ["North Korea (조선 민주주의 인민 공화국)", "kp", "850"],
                    ["Northern Mariana Islands", "mp", "1", 17, ["670"]],
                    ["Norway (Norge)", "no", "47", 0],
                    ["Oman (‫عُمان‬‎)", "om", "968"],
                    ["Pakistan (‫پاکستان‬‎)", "pk", "92"],
                    ["Palau", "pw", "680"],
                    ["Palestine (‫فلسطين‬‎)", "ps", "970"],
                    ["Panama (Panamá)", "pa", "507"],
                    ["Papua New Guinea", "pg", "675"],
                    ["Paraguay", "py", "595"],
                    ["Peru (Perú)", "pe", "51"],
                    ["Philippines", "ph", "63"],
                    ["Poland (Polska)", "pl", "48"],
                    ["Portugal", "pt", "351"],
                    ["Puerto Rico", "pr", "1", 3, ["787", "939"]],
                    ["Qatar (‫قطر‬‎)", "qa", "974"],
                    ["Réunion (La Réunion)", "re", "262", 0],
                    ["Romania (România)", "ro", "40"],
                    ["Russia (Россия)", "ru", "7", 0],
                    ["Rwanda", "rw", "250"],
                    ["Saint Barthélemy", "bl", "590", 1],
                    ["Saint Helena", "sh", "290"],
                    ["Saint Kitts and Nevis", "kn", "1", 18, ["869"]],
                    ["Saint Lucia", "lc", "1", 19, ["758"]],
                    ["Saint Martin (Saint-Martin (partie française))", "mf", "590", 2],
                    ["Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)", "pm", "508"],
                    ["Saint Vincent and the Grenadines", "vc", "1", 20, ["784"]],
                    ["Samoa", "ws", "685"],
                    ["San Marino", "sm", "378"],
                    ["São Tomé and Príncipe (São Tomé e Príncipe)", "st", "239"],
                    ["Saudi Arabia (‫المملكة العربية السعودية‬‎)", "sa", "966"],
                    ["Senegal (Sénégal)", "sn", "221"],
                    ["Serbia (Србија)", "rs", "381"],
                    ["Seychelles", "sc", "248"],
                    ["Sierra Leone", "sl", "232"],
                    ["Singapore", "sg", "65"],
                    ["Sint Maarten", "sx", "1", 21, ["721"]],
                    ["Slovakia (Slovensko)", "sk", "421"],
                    ["Slovenia (Slovenija)", "si", "386"],
                    ["Solomon Islands", "sb", "677"],
                    ["Somalia (Soomaaliya)", "so", "252"],
                    ["South Africa", "za", "27"],
                    ["South Korea (대한민국)", "kr", "82"],
                    ["South Sudan (‫جنوب السودان‬‎)", "ss", "211"],
                    ["Spain (España)", "es", "34"],
                    ["Sri Lanka (ශ්‍රී ලංකාව)", "lk", "94"],
                    ["Sudan (‫السودان‬‎)", "sd", "249"],
                    ["Suriname", "sr", "597"],
                    ["Svalbard and Jan Mayen", "sj", "47", 1, ["79"]],
                    ["Swaziland", "sz", "268"],
                    ["Sweden (Sverige)", "se", "46"],
                    ["Switzerland (Schweiz)", "ch", "41"],
                    ["Syria (‫سوريا‬‎)", "sy", "963"],
                    ["Taiwan (台灣)", "tw", "886"],
                    ["Tajikistan", "tj", "992"],
                    ["Tanzania", "tz", "255"],
                    ["Thailand (ไทย)", "th", "66"],
                    ["Timor-Leste", "tl", "670"],
                    ["Togo", "tg", "228"],
                    ["Tokelau", "tk", "690"],
                    ["Tonga", "to", "676"],
                    ["Trinidad and Tobago", "tt", "1", 22, ["868"]],
                    ["Tunisia (‫تونس‬‎)", "tn", "216"],
                    ["Turkey (Türkiye)", "tr", "90"],
                    ["Turkmenistan", "tm", "993"],
                    ["Turks and Caicos Islands", "tc", "1", 23, ["649"]],
                    ["Tuvalu", "tv", "688"],
                    ["U.S. Virgin Islands", "vi", "1", 24, ["340"]],
                    ["Uganda", "ug", "256"],
                    ["Ukraine (Україна)", "ua", "380"],
                    ["United Arab Emirates (‫الإمارات العربية المتحدة‬‎)", "ae", "971"],
                    ["United Kingdom", "gb", "44", 0],
                    ["United States", "us", "1", 0],
                    ["Uruguay", "uy", "598"],
                    ["Uzbekistan (Oʻzbekiston)", "uz", "998"],
                    ["Vanuatu", "vu", "678"],
                    ["Vatican City (Città del Vaticano)", "va", "39", 1, ["06698"]],
                    ["Venezuela", "ve", "58"],
                    ["Vietnam (Việt Nam)", "vn", "84"],
                    ["Wallis and Futuna (Wallis-et-Futuna)", "wf", "681"],
                    ["Western Sahara (‫الصحراء الغربية‬‎)", "eh", "212", 1, ["5288", "5289"]],
                    ["Yemen (‫اليمن‬‎)", "ye", "967"],
                    ["Zambia", "zm", "260"],
                    ["Zimbabwe", "zw", "263"],
                    ["Åland Islands", "ax", "358", 1, ["18"]]
                ], n = 0; n < i.length; n++) {
                var o = i[n];
                i[n] = {
                    name: o[0],
                    iso2: o[1],
                    dialCode: o[2],
                    priority: o[3] || 0,
                    areaCodes: o[4] || null
                }
            }

            function r(t, e) {
                for (var d = 0; d < e.length; d++) {
                    var i = e[d];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                }
            }
            t.intlTelInputGlobals = {
                getInstance: function(e) {
                    var d = e.getAttribute("data-intl-tel-input-id");
                    return t.intlTelInputGlobals.instances[d]
                },
                instances: {}
            };
            var a = 0,
                s = {
                    allowDropdown: !0,
                    autoHideDialCode: !0,
                    autoPlaceholder: "polite",
                    customContainer: "",
                    customPlaceholder: null,
                    dropdownContainer: null,
                    excludeCountries: [],
                    formatOnDisplay: !0,
                    geoIpLookup: null,
                    hiddenInput: "",
                    initialCountry: "",
                    localizedCountries: null,
                    nationalMode: !0,
                    onlyCountries: [],
                    placeholderNumberType: "MOBILE",
                    preferredCountries: ["us", "gb"],
                    separateDialCode: !1,
                    utilsScript: ""
                },
                l = ["800", "822", "833", "844", "855", "866", "877", "880", "881", "882", "883", "884", "885", "886", "887", "888", "889"];
            t.addEventListener("load", (function() {
                t.intlTelInputGlobals.windowLoaded = !0
            }));
            var u = function(t, e) {
                    for (var d = Object.keys(t), i = 0; i < d.length; i++) e(d[i], t[d[i]])
                },
                p = function(e) {
                    u(t.intlTelInputGlobals.instances, (function(d) {
                        t.intlTelInputGlobals.instances[d][e]()
                    }))
                },
                c = function() {
                    function n(t, e) {
                        var d = this;
                        ! function(t, e) {
                            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
                        }(this, n), this.id = a++, this.telInput = t, this.activeItem = null, this.highlightedItem = null;
                        var i = e || {};
                        this.options = {}, u(s, (function(t, e) {
                            d.options[t] = i.hasOwnProperty(t) ? i[t] : e
                        })), this.hadInitialPlaceholder = Boolean(t.getAttribute("placeholder"))
                    }
                    var o, c, f;
                    return o = n, (c = [{
                        key: "_init",
                        value: function() {
                            var t = this;
                            if (this.options.nationalMode && (this.options.autoHideDialCode = !1), this.options.separateDialCode && (this.options.autoHideDialCode = this.options.nationalMode = !1), this.isMobile = /Android.+Mobile|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent), this.isMobile && (e.body.classList.add("iti-mobile"), this.options.dropdownContainer || (this.options.dropdownContainer = e.body)), "undefined" != typeof Promise) {
                                var d = new Promise((function(e, d) {
                                        t.resolveAutoCountryPromise = e, t.rejectAutoCountryPromise = d
                                    })),
                                    i = new Promise((function(e, d) {
                                        t.resolveUtilsScriptPromise = e, t.rejectUtilsScriptPromise = d
                                    }));
                                this.promise = Promise.all([d, i])
                            } else this.resolveAutoCountryPromise = this.rejectAutoCountryPromise = function() {}, this.resolveUtilsScriptPromise = this.rejectUtilsScriptPromise = function() {};
                            this.selectedCountryData = {}, this._processCountryData(), this._generateMarkup(), this._setInitialState(), this._initListeners(), this._initRequests()
                        }
                    }, {
                        key: "_processCountryData",
                        value: function() {
                            this._processAllCountries(), this._processCountryCodes(), this._processPreferredCountries(), this.options.localizedCountries && this._translateCountriesByLocale(), (this.options.onlyCountries.length || this.options.localizedCountries) && this.countries.sort(this._countryNameSort)
                        }
                    }, {
                        key: "_addCountryCode",
                        value: function(t, e, i) {
                            e.length > this.dialCodeMaxLen && (this.dialCodeMaxLen = e.length), this.countryCodes.hasOwnProperty(e) || (this.countryCodes[e] = []);
                            for (var n = 0; n < this.countryCodes[e].length; n++)
                                if (this.countryCodes[e][n] === t) return;
                            var o = i !== d ? i : this.countryCodes[e].length;
                            this.countryCodes[e][o] = t
                        }
                    }, {
                        key: "_processAllCountries",
                        value: function() {
                            if (this.options.onlyCountries.length) {
                                var t = this.options.onlyCountries.map((function(t) {
                                    return t.toLowerCase()
                                }));
                                this.countries = i.filter((function(e) {
                                    return t.indexOf(e.iso2) > -1
                                }))
                            } else if (this.options.excludeCountries.length) {
                                var e = this.options.excludeCountries.map((function(t) {
                                    return t.toLowerCase()
                                }));
                                this.countries = i.filter((function(t) {
                                    return -1 === e.indexOf(t.iso2)
                                }))
                            } else this.countries = i
                        }
                    }, {
                        key: "_translateCountriesByLocale",
                        value: function() {
                            for (var t = 0; t < this.countries.length; t++) {
                                var e = this.countries[t].iso2.toLowerCase();
                                this.options.localizedCountries.hasOwnProperty(e) && (this.countries[t].name = this.options.localizedCountries[e])
                            }
                        }
                    }, {
                        key: "_countryNameSort",
                        value: function(t, e) {
                            return t.name.localeCompare(e.name)
                        }
                    }, {
                        key: "_processCountryCodes",
                        value: function() {
                            this.dialCodeMaxLen = 0, this.countryCodes = {};
                            for (var t = 0; t < this.countries.length; t++) {
                                var e = this.countries[t];
                                this._addCountryCode(e.iso2, e.dialCode, e.priority)
                            }
                            for (var d = 0; d < this.countries.length; d++) {
                                var i = this.countries[d];
                                if (i.areaCodes)
                                    for (var n = this.countryCodes[i.dialCode][0], o = 0; o < i.areaCodes.length; o++) {
                                        for (var r = i.areaCodes[o], a = 1; a < r.length; a++) {
                                            var s = i.dialCode + r.substr(0, a);
                                            this._addCountryCode(n, s), this._addCountryCode(i.iso2, s)
                                        }
                                        this._addCountryCode(i.iso2, i.dialCode + r)
                                    }
                            }
                        }
                    }, {
                        key: "_processPreferredCountries",
                        value: function() {
                            this.preferredCountries = [];
                            for (var t = 0; t < this.options.preferredCountries.length; t++) {
                                var e = this.options.preferredCountries[t].toLowerCase(),
                                    d = this._getCountryData(e, !1, !0);
                                d && this.preferredCountries.push(d)
                            }
                        }
                    }, {
                        key: "_createEl",
                        value: function(t, d, i) {
                            var n = e.createElement(t);
                            return d && u(d, (function(t, e) {
                                return n.setAttribute(t, e)
                            })), i && i.appendChild(n), n
                        }
                    }, {
                        key: "_generateMarkup",
                        value: function() {
                            this.telInput.setAttribute("autocomplete", "off");
                            var t = "iti";
                            this.options.allowDropdown && (t += " iti--allow-dropdown"), this.options.separateDialCode && (t += " iti--separate-dial-code"), this.options.customContainer && (t += " ", t += this.options.customContainer);
                            var e = this._createEl("div", {
                                class: t
                            });
                            if (this.telInput.parentNode.insertBefore(e, this.telInput), this.flagsContainer = this._createEl("div", {
                                    class: "iti__flag-container"
                                }, e), e.appendChild(this.telInput), this.selectedFlag = this._createEl("div", {
                                    class: "iti__selected-flag",
                                    role: "combobox",
                                    "aria-owns": "country-listbox"
                                }, this.flagsContainer), this.selectedFlagInner = this._createEl("div", {
                                    class: "iti__flag"
                                }, this.selectedFlag), this.options.separateDialCode && (this.selectedDialCode = this._createEl("div", {
                                    class: "iti__selected-dial-code"
                                }, this.selectedFlag)), this.options.allowDropdown && (this.selectedFlag.setAttribute("tabindex", "0"), this.dropdownArrow = this._createEl("div", {
                                    class: "iti__arrow"
                                }, this.selectedFlag), this.countryList = this._createEl("ul", {
                                    class: "iti__country-list iti__hide",
                                    id: "country-listbox",
                                    "aria-expanded": "false",
                                    role: "listbox"
                                }), this.preferredCountries.length && (this._appendListItems(this.preferredCountries, "iti__preferred"), this._createEl("li", {
                                    class: "iti__divider",
                                    role: "separator",
                                    "aria-disabled": "true"
                                }, this.countryList)), this._appendListItems(this.countries, "iti__standard"), this.options.dropdownContainer ? (this.dropdown = this._createEl("div", {
                                    class: "iti iti--container"
                                }), this.dropdown.appendChild(this.countryList)) : this.flagsContainer.appendChild(this.countryList)), this.options.hiddenInput) {
                                var d = this.options.hiddenInput,
                                    i = this.telInput.getAttribute("name");
                                if (i) {
                                    var n = i.lastIndexOf("["); - 1 !== n && (d = "".concat(i.substr(0, n), "[").concat(d, "]"))
                                }
                                this.hiddenInput = this._createEl("input", {
                                    type: "hidden",
                                    name: d
                                }), e.appendChild(this.hiddenInput)
                            }
                        }
                    }, {
                        key: "_appendListItems",
                        value: function(t, e) {
                            for (var d = "", i = 0; i < t.length; i++) {
                                var n = t[i];
                                d += "<li class='iti__country ".concat(e, "' tabIndex='-1' id='iti-item-").concat(n.iso2, "' role='option' data-dial-code='").concat(n.dialCode, "' data-country-code='").concat(n.iso2, "'>"), d += "<div class='iti__flag-box'><div class='iti__flag iti__".concat(n.iso2, "'></div></div>"), d += "<span class='iti__country-name'>".concat(n.name, "</span>"), d += "<span class='iti__dial-code'>+".concat(n.dialCode, "</span>"), d += "</li>"
                            }
                            this.countryList.insertAdjacentHTML("beforeend", d)
                        }
                    }, {
                        key: "_setInitialState",
                        value: function() {
                            var t = this.telInput.value,
                                e = this._getDialCode(t),
                                d = this._isRegionlessNanp(t),
                                i = this.options,
                                n = i.initialCountry,
                                o = i.nationalMode,
                                r = i.autoHideDialCode,
                                a = i.separateDialCode;
                            e && !d ? this._updateFlagFromNumber(t) : "auto" !== n && (n ? this._setFlag(n.toLowerCase()) : e && d ? this._setFlag("us") : (this.defaultCountry = this.preferredCountries.length ? this.preferredCountries[0].iso2 : this.countries[0].iso2, t || this._setFlag(this.defaultCountry)), t || o || r || a || (this.telInput.value = "+".concat(this.selectedCountryData.dialCode))), t && this._updateValFromNumber(t)
                        }
                    }, {
                        key: "_initListeners",
                        value: function() {
                            this._initKeyListeners(), this.options.autoHideDialCode && this._initBlurListeners(), this.options.allowDropdown && this._initDropdownListeners(), this.hiddenInput && this._initHiddenInputListener()
                        }
                    }, {
                        key: "_initHiddenInputListener",
                        value: function() {
                            var t = this;
                            this._handleHiddenInputSubmit = function() {
                                t.hiddenInput.value = t.getNumber()
                            }, this.telInput.form && this.telInput.form.addEventListener("submit", this._handleHiddenInputSubmit)
                        }
                    }, {
                        key: "_getClosestLabel",
                        value: function() {
                            for (var t = this.telInput; t && "LABEL" !== t.tagName;) t = t.parentNode;
                            return t
                        }
                    }, {
                        key: "_initDropdownListeners",
                        value: function() {
                            var t = this;
                            this._handleLabelClick = function(e) {
                                t.countryList.classList.contains("iti__hide") ? t.telInput.focus() : e.preventDefault()
                            };
                            var e = this._getClosestLabel();
                            e && e.addEventListener("click", this._handleLabelClick), this._handleClickSelectedFlag = function() {
                                !t.countryList.classList.contains("iti__hide") || t.telInput.disabled || t.telInput.readOnly || t._showDropdown()
                            }, this.selectedFlag.addEventListener("click", this._handleClickSelectedFlag), this._handleFlagsContainerKeydown = function(e) {
                                t.countryList.classList.contains("iti__hide") && -1 !== ["ArrowUp", "Up", "ArrowDown", "Down", " ", "Enter"].indexOf(e.key) && (e.preventDefault(), e.stopPropagation(), t._showDropdown()), "Tab" === e.key && t._closeDropdown()
                            }, this.flagsContainer.addEventListener("keydown", this._handleFlagsContainerKeydown)
                        }
                    }, {
                        key: "_initRequests",
                        value: function() {
                            var e = this;
                            this.options.utilsScript && !t.intlTelInputUtils ? t.intlTelInputGlobals.windowLoaded ? t.intlTelInputGlobals.loadUtils(this.options.utilsScript) : t.addEventListener("load", (function() {
                                t.intlTelInputGlobals.loadUtils(e.options.utilsScript)
                            })) : this.resolveUtilsScriptPromise(), "auto" === this.options.initialCountry ? this._loadAutoCountry() : this.resolveAutoCountryPromise()
                        }
                    }, {
                        key: "_loadAutoCountry",
                        value: function() {
                            t.intlTelInputGlobals.autoCountry ? this.handleAutoCountry() : t.intlTelInputGlobals.startedLoadingAutoCountry || (t.intlTelInputGlobals.startedLoadingAutoCountry = !0, "function" == typeof this.options.geoIpLookup && this.options.geoIpLookup((function(e) {
                                t.intlTelInputGlobals.autoCountry = e.toLowerCase(), setTimeout((function() {
                                    return p("handleAutoCountry")
                                }))
                            }), (function() {
                                return p("rejectAutoCountryPromise")
                            })))
                        }
                    }, {
                        key: "_initKeyListeners",
                        value: function() {
                            var t = this;
                            this._handleKeyupEvent = function() {
                                t._updateFlagFromNumber(t.telInput.value) && t._triggerCountryChange()
                            }, this.telInput.addEventListener("keyup", this._handleKeyupEvent), this._handleClipboardEvent = function() {
                                setTimeout(t._handleKeyupEvent)
                            }, this.telInput.addEventListener("cut", this._handleClipboardEvent), this.telInput.addEventListener("paste", this._handleClipboardEvent)
                        }
                    }, {
                        key: "_cap",
                        value: function(t) {
                            var e = this.telInput.getAttribute("maxlength");
                            return e && t.length > e ? t.substr(0, e) : t
                        }
                    }, {
                        key: "_initBlurListeners",
                        value: function() {
                            var t = this;
                            this._handleSubmitOrBlurEvent = function() {
                                t._removeEmptyDialCode()
                            }, this.telInput.form && this.telInput.form.addEventListener("submit", this._handleSubmitOrBlurEvent), this.telInput.addEventListener("blur", this._handleSubmitOrBlurEvent)
                        }
                    }, {
                        key: "_removeEmptyDialCode",
                        value: function() {
                            if ("+" === this.telInput.value.charAt(0)) {
                                var t = this._getNumeric(this.telInput.value);
                                t && this.selectedCountryData.dialCode !== t || (this.telInput.value = "")
                            }
                        }
                    }, {
                        key: "_getNumeric",
                        value: function(t) {
                            return t.replace(/\D/g, "")
                        }
                    }, {
                        key: "_trigger",
                        value: function(t) {
                            var d = e.createEvent("Event");
                            d.initEvent(t, !0, !0), this.telInput.dispatchEvent(d)
                        }
                    }, {
                        key: "_showDropdown",
                        value: function() {
                            this.countryList.classList.remove("iti__hide"), this.countryList.setAttribute("aria-expanded", "true"), this._setDropdownPosition(), this.activeItem && (this._highlightListItem(this.activeItem, !1), this._scrollTo(this.activeItem, !0)), this._bindDropdownListeners(), this.dropdownArrow.classList.add("iti__arrow--up"), this._trigger("open:countrydropdown")
                        }
                    }, {
                        key: "_toggleClass",
                        value: function(t, e, d) {
                            d && !t.classList.contains(e) ? t.classList.add(e) : !d && t.classList.contains(e) && t.classList.remove(e)
                        }
                    }, {
                        key: "_setDropdownPosition",
                        value: function() {
                            var d = this;
                            if (this.options.dropdownContainer && this.options.dropdownContainer.appendChild(this.dropdown), !this.isMobile) {
                                var i = this.telInput.getBoundingClientRect(),
                                    n = t.pageYOffset || e.documentElement.scrollTop,
                                    o = i.top + n,
                                    r = this.countryList.offsetHeight,
                                    a = o + this.telInput.offsetHeight + r < n + t.innerHeight,
                                    s = o - r > n;
                                if (this._toggleClass(this.countryList, "iti__country-list--dropup", !a && s), this.options.dropdownContainer) {
                                    var l = !a && s ? 0 : this.telInput.offsetHeight;
                                    this.dropdown.style.top = "".concat(o + l, "px"), this.dropdown.style.left = "".concat(i.left + e.body.scrollLeft, "px"), this._handleWindowScroll = function() {
                                        return d._closeDropdown()
                                    }, t.addEventListener("scroll", this._handleWindowScroll)
                                }
                            }
                        }
                    }, {
                        key: "_getClosestListItem",
                        value: function(t) {
                            for (var e = t; e && e !== this.countryList && !e.classList.contains("iti__country");) e = e.parentNode;
                            return e === this.countryList ? null : e
                        }
                    }, {
                        key: "_bindDropdownListeners",
                        value: function() {
                            var t = this;
                            this._handleMouseoverCountryList = function(e) {
                                var d = t._getClosestListItem(e.target);
                                d && t._highlightListItem(d, !1)
                            }, this.countryList.addEventListener("mouseover", this._handleMouseoverCountryList), this._handleClickCountryList = function(e) {
                                var d = t._getClosestListItem(e.target);
                                d && t._selectListItem(d)
                            }, this.countryList.addEventListener("click", this._handleClickCountryList);
                            var d = !0;
                            this._handleClickOffToClose = function() {
                                d || t._closeDropdown(), d = !1
                            }, e.documentElement.addEventListener("click", this._handleClickOffToClose);
                            var i = "",
                                n = null;
                            this._handleKeydownOnDropdown = function(e) {
                                e.preventDefault(), "ArrowUp" === e.key || "Up" === e.key || "ArrowDown" === e.key || "Down" === e.key ? t._handleUpDownKey(e.key) : "Enter" === e.key ? t._handleEnterKey() : "Escape" === e.key ? t._closeDropdown() : /^[a-zA-ZÀ-ÿ ]$/.test(e.key) && (n && clearTimeout(n), i += e.key.toLowerCase(), t._searchForCountry(i), n = setTimeout((function() {
                                    i = ""
                                }), 1e3))
                            }, e.addEventListener("keydown", this._handleKeydownOnDropdown)
                        }
                    }, {
                        key: "_handleUpDownKey",
                        value: function(t) {
                            var e = "ArrowUp" === t || "Up" === t ? this.highlightedItem.previousElementSibling : this.highlightedItem.nextElementSibling;
                            e && (e.classList.contains("iti__divider") && (e = "ArrowUp" === t || "Up" === t ? e.previousElementSibling : e.nextElementSibling), this._highlightListItem(e, !0))
                        }
                    }, {
                        key: "_handleEnterKey",
                        value: function() {
                            this.highlightedItem && this._selectListItem(this.highlightedItem)
                        }
                    }, {
                        key: "_searchForCountry",
                        value: function(t) {
                            for (var e = 0; e < this.countries.length; e++)
                                if (this._startsWith(this.countries[e].name, t)) {
                                    var d = this.countryList.querySelector("#iti-item-".concat(this.countries[e].iso2));
                                    this._highlightListItem(d, !1), this._scrollTo(d, !0);
                                    break
                                }
                        }
                    }, {
                        key: "_startsWith",
                        value: function(t, e) {
                            return t.substr(0, e.length).toLowerCase() === e
                        }
                    }, {
                        key: "_updateValFromNumber",
                        value: function(e) {
                            var d = e;
                            if (this.options.formatOnDisplay && t.intlTelInputUtils && this.selectedCountryData) {
                                var i = !this.options.separateDialCode && (this.options.nationalMode || "+" !== d.charAt(0)),
                                    n = intlTelInputUtils.numberFormat,
                                    o = n.NATIONAL,
                                    r = n.INTERNATIONAL,
                                    a = i ? o : r;
                                d = intlTelInputUtils.formatNumber(d, this.selectedCountryData.iso2, a)
                            }
                            d = this._beforeSetNumber(d), this.telInput.value = d
                        }
                    }, {
                        key: "_updateFlagFromNumber",
                        value: function(t) {
                            var e = t,
                                d = this.selectedCountryData.dialCode,
                                i = "1" === d;
                            e && this.options.nationalMode && i && "+" !== e.charAt(0) && ("1" !== e.charAt(0) && (e = "1".concat(e)), e = "+".concat(e)), this.options.separateDialCode && d && "+" !== e.charAt(0) && (e = "+".concat(d).concat(e));
                            var n = this._getDialCode(e),
                                o = this._getNumeric(e),
                                r = null;
                            if (n) {
                                var a = this.countryCodes[this._getNumeric(n)],
                                    s = -1 !== a.indexOf(this.selectedCountryData.iso2) && o.length <= n.length - 1;
                                if (!("1" === d && this._isRegionlessNanp(o) || s))
                                    for (var l = 0; l < a.length; l++)
                                        if (a[l]) {
                                            r = a[l];
                                            break
                                        }
                            } else "+" === e.charAt(0) && o.length ? r = "" : e && "+" !== e || (r = this.defaultCountry);
                            return null !== r && this._setFlag(r)
                        }
                    }, {
                        key: "_isRegionlessNanp",
                        value: function(t) {
                            var e = this._getNumeric(t);
                            if ("1" === e.charAt(0)) {
                                var d = e.substr(1, 3);
                                return -1 !== l.indexOf(d)
                            }
                            return !1
                        }
                    }, {
                        key: "_highlightListItem",
                        value: function(t, e) {
                            var d = this.highlightedItem;
                            d && d.classList.remove("iti__highlight"), this.highlightedItem = t, this.highlightedItem.classList.add("iti__highlight"), e && this.highlightedItem.focus()
                        }
                    }, {
                        key: "_getCountryData",
                        value: function(t, e, d) {
                            for (var n = e ? i : this.countries, o = 0; o < n.length; o++)
                                if (n[o].iso2 === t) return n[o];
                            if (d) return null;
                            throw new Error("No country data for '".concat(t, "'"))
                        }
                    }, {
                        key: "_setFlag",
                        value: function(t) {
                            var e = this.selectedCountryData.iso2 ? this.selectedCountryData : {};
                            this.selectedCountryData = t ? this._getCountryData(t, !1, !1) : {}, this.selectedCountryData.iso2 && (this.defaultCountry = this.selectedCountryData.iso2), this.selectedFlagInner.setAttribute("class", "iti__flag iti__".concat(t));
                            var d = t ? "".concat(this.selectedCountryData.name, ": +").concat(this.selectedCountryData.dialCode) : "Unknown";
                            if (this.selectedFlag.setAttribute("title", d), this.options.separateDialCode) {
                                var i = this.selectedCountryData.dialCode ? "+".concat(this.selectedCountryData.dialCode) : "";
                                this.selectedDialCode.innerHTML = i;
                                var n = this.selectedFlag.offsetWidth || this._getHiddenSelectedFlagWidth();
                                this.telInput.style.paddingLeft = "".concat(n + 6, "px")
                            }
                            if (this._updatePlaceholder(), this.options.allowDropdown) {
                                var o = this.activeItem;
                                if (o && (o.classList.remove("iti__active"), o.setAttribute("aria-selected", "false")), t) {
                                    var r = this.countryList.querySelector("#iti-item-".concat(t));
                                    r.setAttribute("aria-selected", "true"), r.classList.add("iti__active"), this.activeItem = r, this.countryList.setAttribute("aria-activedescendant", r.getAttribute("id"))
                                }
                            }
                            return e.iso2 !== t
                        }
                    }, {
                        key: "_getHiddenSelectedFlagWidth",
                        value: function() {
                            var t = this.telInput.parentNode.cloneNode();
                            t.style.visibility = "hidden", e.body.appendChild(t);
                            var d = this.selectedFlag.cloneNode(!0);
                            t.appendChild(d);
                            var i = d.offsetWidth;
                            return t.parentNode.removeChild(t), i
                        }
                    }, {
                        key: "_updatePlaceholder",
                        value: function() {
                            var e = "aggressive" === this.options.autoPlaceholder || !this.hadInitialPlaceholder && "polite" === this.options.autoPlaceholder;
                            if (t.intlTelInputUtils && e) {
                                var d = intlTelInputUtils.numberType[this.options.placeholderNumberType],
                                    i = this.selectedCountryData.iso2 ? intlTelInputUtils.getExampleNumber(this.selectedCountryData.iso2, this.options.nationalMode, d) : "";
                                i = this._beforeSetNumber(i), "function" == typeof this.options.customPlaceholder && (i = this.options.customPlaceholder(i, this.selectedCountryData)), this.telInput.setAttribute("placeholder", i)
                            }
                        }
                    }, {
                        key: "_selectListItem",
                        value: function(t) {
                            var e = this._setFlag(t.getAttribute("data-country-code"));
                            this._closeDropdown(), this._updateDialCode(t.getAttribute("data-dial-code"), !0), this.telInput.focus();
                            var d = this.telInput.value.length;
                            this.telInput.setSelectionRange(d, d), e && this._triggerCountryChange()
                        }
                    }, {
                        key: "_closeDropdown",
                        value: function() {
                            this.countryList.classList.add("iti__hide"), this.countryList.setAttribute("aria-expanded", "false"), this.dropdownArrow.classList.remove("iti__arrow--up"), e.removeEventListener("keydown", this._handleKeydownOnDropdown), e.documentElement.removeEventListener("click", this._handleClickOffToClose), this.countryList.removeEventListener("mouseover", this._handleMouseoverCountryList), this.countryList.removeEventListener("click", this._handleClickCountryList), this.options.dropdownContainer && (this.isMobile || t.removeEventListener("scroll", this._handleWindowScroll), this.dropdown.parentNode && this.dropdown.parentNode.removeChild(this.dropdown)), this._trigger("close:countrydropdown")
                        }
                    }, {
                        key: "_scrollTo",
                        value: function(d, i) {
                            var n = this.countryList,
                                o = t.pageYOffset || e.documentElement.scrollTop,
                                r = n.offsetHeight,
                                a = n.getBoundingClientRect().top + o,
                                s = a + r,
                                l = d.offsetHeight,
                                u = d.getBoundingClientRect().top + o,
                                p = u + l,
                                c = u - a + n.scrollTop,
                                f = r / 2 - l / 2;
                            if (u < a) i && (c -= f), n.scrollTop = c;
                            else if (p > s) {
                                i && (c += f);
                                var h = r - l;
                                n.scrollTop = c - h
                            }
                        }
                    }, {
                        key: "_updateDialCode",
                        value: function(t, e) {
                            var d, i = this.telInput.value,
                                n = "+".concat(t);
                            if ("+" === i.charAt(0)) {
                                var o = this._getDialCode(i);
                                d = o ? i.replace(o, n) : n
                            } else {
                                if (this.options.nationalMode || this.options.separateDialCode) return;
                                if (i) d = n + i;
                                else {
                                    if (!e && this.options.autoHideDialCode) return;
                                    d = n
                                }
                            }
                            this.telInput.value = d
                        }
                    }, {
                        key: "_getDialCode",
                        value: function(t) {
                            var e = "";
                            if ("+" === t.charAt(0))
                                for (var d = "", i = 0; i < t.length; i++) {
                                    var n = t.charAt(i);
                                    if (!isNaN(parseInt(n, 10)) && (d += n, this.countryCodes[d] && (e = t.substr(0, i + 1)), d.length === this.dialCodeMaxLen)) break
                                }
                            return e
                        }
                    }, {
                        key: "_getFullNumber",
                        value: function() {
                            var t = this.telInput.value.trim(),
                                e = this.selectedCountryData.dialCode,
                                d = this._getNumeric(t);
                            return (this.options.separateDialCode && "+" !== t.charAt(0) && e && d ? "+".concat(e) : "") + t
                        }
                    }, {
                        key: "_beforeSetNumber",
                        value: function(t) {
                            var e = t;
                            if (this.options.separateDialCode) {
                                var d = this._getDialCode(e);
                                if (d) {
                                    var i = " " === e[(d = "+".concat(this.selectedCountryData.dialCode)).length] || "-" === e[d.length] ? d.length + 1 : d.length;
                                    e = e.substr(i)
                                }
                            }
                            return this._cap(e)
                        }
                    }, {
                        key: "_triggerCountryChange",
                        value: function() {
                            this._trigger("countrychange")
                        }
                    }, {
                        key: "handleAutoCountry",
                        value: function() {
                            "auto" === this.options.initialCountry && (this.defaultCountry = t.intlTelInputGlobals.autoCountry, this.telInput.value || this.setCountry(this.defaultCountry), this.resolveAutoCountryPromise())
                        }
                    }, {
                        key: "handleUtils",
                        value: function() {
                            t.intlTelInputUtils && (this.telInput.value && this._updateValFromNumber(this.telInput.value), this._updatePlaceholder()), this.resolveUtilsScriptPromise()
                        }
                    }, {
                        key: "destroy",
                        value: function() {
                            var e = this.telInput.form;
                            if (this.options.allowDropdown) {
                                this._closeDropdown(), this.selectedFlag.removeEventListener("click", this._handleClickSelectedFlag), this.flagsContainer.removeEventListener("keydown", this._handleFlagsContainerKeydown);
                                var d = this._getClosestLabel();
                                d && d.removeEventListener("click", this._handleLabelClick)
                            }
                            this.hiddenInput && e && e.removeEventListener("submit", this._handleHiddenInputSubmit), this.options.autoHideDialCode && (e && e.removeEventListener("submit", this._handleSubmitOrBlurEvent), this.telInput.removeEventListener("blur", this._handleSubmitOrBlurEvent)), this.telInput.removeEventListener("keyup", this._handleKeyupEvent), this.telInput.removeEventListener("cut", this._handleClipboardEvent), this.telInput.removeEventListener("paste", this._handleClipboardEvent), this.telInput.removeAttribute("data-intl-tel-input-id");
                            var i = this.telInput.parentNode;
                            i.parentNode.insertBefore(this.telInput, i), i.parentNode.removeChild(i), delete t.intlTelInputGlobals.instances[this.id]
                        }
                    }, {
                        key: "getExtension",
                        value: function() {
                            return t.intlTelInputUtils ? intlTelInputUtils.getExtension(this._getFullNumber(), this.selectedCountryData.iso2) : ""
                        }
                    }, {
                        key: "getNumber",
                        value: function(e) {
                            if (t.intlTelInputUtils) {
                                var d = this.selectedCountryData.iso2;
                                return intlTelInputUtils.formatNumber(this._getFullNumber(), d, e)
                            }
                            return ""
                        }
                    }, {
                        key: "getNumberType",
                        value: function() {
                            return t.intlTelInputUtils ? intlTelInputUtils.getNumberType(this._getFullNumber(), this.selectedCountryData.iso2) : -99
                        }
                    }, {
                        key: "getSelectedCountryData",
                        value: function() {
                            return this.selectedCountryData
                        }
                    }, {
                        key: "getValidationError",
                        value: function() {
                            if (t.intlTelInputUtils) {
                                var e = this.selectedCountryData.iso2;
                                return intlTelInputUtils.getValidationError(this._getFullNumber(), e)
                            }
                            return -99
                        }
                    }, {
                        key: "isValidNumber",
                        value: function() {
                            var e = this._getFullNumber().trim(),
                                d = this.options.nationalMode ? this.selectedCountryData.iso2 : "";
                            return t.intlTelInputUtils ? intlTelInputUtils.isValidNumber(e, d) : null
                        }
                    }, {
                        key: "setCountry",
                        value: function(t) {
                            var e = t.toLowerCase();
                            this.selectedFlagInner.classList.contains("iti__".concat(e)) || (this._setFlag(e), this._updateDialCode(this.selectedCountryData.dialCode, !1), this._triggerCountryChange())
                        }
                    }, {
                        key: "setNumber",
                        value: function(t) {
                            var e = this._updateFlagFromNumber(t);
                            this._updateValFromNumber(t), e && this._triggerCountryChange()
                        }
                    }, {
                        key: "setPlaceholderNumberType",
                        value: function(t) {
                            this.options.placeholderNumberType = t, this._updatePlaceholder()
                        }
                    }]) && r(o.prototype, c), f && r(o, f), n
                }();
            t.intlTelInputGlobals.getCountryData = function() {
                return i
            };
            var f = function(t, d, i) {
                var n = e.createElement("script");
                n.onload = function() {
                    p("handleUtils"), d && d()
                }, n.onerror = function() {
                    p("rejectUtilsScriptPromise"), i && i()
                }, n.className = "iti-load-utils", n.async = !0, n.src = t, e.body.appendChild(n)
            };
            return t.intlTelInputGlobals.loadUtils = function(e) {
                    if (!t.intlTelInputUtils && !t.intlTelInputGlobals.startedLoadingUtilsScript) {
                        if (t.intlTelInputGlobals.startedLoadingUtilsScript = !0, "undefined" != typeof Promise) return new Promise((function(t, d) {
                            return f(e, t, d)
                        }));
                        f(e)
                    }
                    return null
                }, t.intlTelInputGlobals.defaults = s, t.intlTelInputGlobals.version = "16.0.8",
                function(e, d) {
                    var i = new c(e, d);
                    return i._init(), e.setAttribute("data-intl-tel-input-id", i.id), t.intlTelInputGlobals.instances[i.id] = i, i
                }
        }()
    }(window, document), t.exports ? t.exports = i : window.intlTelInput = i
}, function(t, e, d) {
    "use strict";
    (function(t) {
        var e;
        d(13);
        t("[data-id=form]").submit((function(d) {
            var i = t(this);
            t(this).find(".register-btn").text("SENDING...").addClass("disabled_bttn");
            var n = t(this).attr("data-lang") ? "/" + t(this).attr("data-lang") : "";
            t("#openModalLoading").addClass("open"), t(".alert").addClass("hidden");
            var o = t(this).serializeArray(),
                r = t(this).find(".register-btn").text();
            return o.push({
                name: "funnel",
                value: t(this).attr("data-funnel")
            }, {
                name: "_ip",
                value: t(this).attr("data-ip")
            }), e = t(this).attr("data-lang"), t.ajax({
                url: "/api/",
                type: "POST",
                data: o,
                success: function(e) {
                    i.find(".alert").text("").addClass("hidden"), t.redirect(n + "/thankyou/", {
                        link: JSON.parse(e).extras.redirect.url
                    })
                },
                error: function(d) {
                    setTimeout((function() {
                        t(".register-btn").text(r).removeClass("disabled_bttn"), t("#openModalLoading").removeClass("open"), i.find(".alert").text("").removeClass("hidden"), t.each(JSON.parse(d.responseText).errors, (function(t, d) {
                            i.find(".alert").append(function(t) {
                                if ("it" == e) switch (t) {
                                    case "The email field is required.":
                                        t = "Inserire l'e-mail è obbligatorio.";
                                        break;
                                    case "The first name field is required.":
                                        t = "Inserire il nome è obbligatorio.";
                                        break;
                                    case "The last name field is required.":
                                        t = "Inserire il cognome è obbligatorio.";
                                        break;
                                    case "The phone field is required.":
                                        t = "Inserire il numero di telefono è obbligatorio."
                                }
                                return t
                            }(d) + "<br />")
                        }))
                    }), 1200)
                }
            }), !1
        }))
    }).call(this, d(0))
}, function(t, e, d) {
    (function(t) {
        ! function(t) {
            "use strict";
            var e = {
                url: null,
                values: null,
                method: "POST",
                target: null,
                traditional: !1,
                redirectTop: !1
            };
            t.redirect = function(d, i, n, o, r, a) {
                var s = d;
                if ("object" != typeof d) s = {
                    url: d,
                    values: i,
                    method: n,
                    target: o,
                    traditional: r,
                    redirectTop: a
                };
                var l = t.extend({}, e, s),
                    u = t.redirect.getForm(l.url, l.values, l.method, l.target, l.traditional);
                t("body", l.redirectTop ? window.top.document : void 0).append(u.form), u.submit(), u.form.remove()
            }, t.redirect.getForm = function(e, n, o, r, a) {
                o = o && -1 !== ["GET", "POST", "PUT", "DELETE"].indexOf(o.toUpperCase()) ? o.toUpperCase() : "POST";
                var s = (e = e.split("#"))[1] ? "#" + e[1] : "";
                if (e = e[0], !n) {
                    var l = t.parseUrl(e);
                    e = l.url, n = l.params
                }
                n = i(n);
                var u = t("<form>").attr("method", o).attr("action", e + s);
                r && u.attr("target", r);
                var p = u[0].submit;
                return d(n, [], u, null, a), {
                    form: u,
                    submit: function() {
                        p.call(u[0])
                    }
                }
            }, t.parseUrl = function(t) {
                if (-1 === t.indexOf("?")) return {
                    url: t,
                    params: {}
                };
                var e = t.split("?"),
                    d = e[1].split("&");
                t = e[0];
                var i, n, o = {};
                for (i = 0; i < d.length; i += 1) o[(n = d[i].split("="))[0]] = n[1];
                return {
                    url: t,
                    params: o
                }
            };
            var d = function(e, i, n, o, r) {
                    var a = [];
                    Object.keys(e).forEach((function(s) {
                        "object" == typeof e[s] ? ((a = i.slice()).push(s), d(e[s], a, n, Array.isArray(e[s]), r)) : n.append(function(e, d, i, n, o) {
                            var r;
                            if (i.length > 0) {
                                var a;
                                for (r = i[0], a = 1; a < i.length; a += 1) r += "[" + i[a] + "]";
                                e = n && o ? r : r + "[" + e + "]"
                            }
                            return t("<input>").attr("type", "hidden").attr("name", e).attr("value", d)
                        }(s, e[s], i, o, r))
                    }))
                },
                i = function(t) {
                    for (var e = Object.getOwnPropertyNames(t), d = 0; d < e.length; d++) {
                        var n = e[d];
                        null === t[n] || void 0 === t[n] ? delete t[n] : "object" == typeof t[n] ? t[n] = i(t[n]) : t[n].length < 1 && delete t[n]
                    }
                    return t
                }
        }(t || window.Zepto || window.jqlite)
    }).call(this, d(0))
}, function(t, e, d) {
    (function(t) {
        t(document).ready((function() {
            t(".accordion-header").on("click", (function() {
                t(this).closest(".accordion-card").toggleClass("open").find(".accordion-info").slideToggle()
            })), t(".faq-item_title").on("click", (function() {
                t(this).toggleClass("open").next().slideToggle()
            }))
        }))
    }).call(this, d(0))
}]);