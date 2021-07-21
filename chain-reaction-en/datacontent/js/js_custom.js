function getCookie(n) {
    var t = " " + document.cookie,
        u = " " + n + "=",
        f = null,
        i = 0,
        r = 0;
    return t.length > 0 && (i = t.indexOf(u), i != -1 && (i += u.length, r = t.indexOf(";", i), r == -1 && (r = t.length), f = unescape(t.substring(i, r)))), f
}

function setCookie(n, t, i) {
    var r, u, f, e, o;
    i = i || {};
    r = i.expires;
    typeof r == "number" && r && (u = new Date, u.setTime(u.getTime() + r * 1e3), r = i.expires = u);
    r && r.toUTCString && (i.expires = r.toUTCString());
    t = encodeURIComponent(t);
    f = n + "=" + t;
    for (e in i) f += "; " + e, o = i[e], o !== !0 && (f += "=" + o);
    document.cookie = f
}


function LoaderOn() {
    $.fancybox.showLoading()
}

function LoaderOff() {
    $.fancybox.hideLoading()
}

function getRandom(n, t) {
    return Math.floor(Math.random() * (t - n)) + n
}

function getDateTime(n) {
    var t = new Date(Date.now() - n * 1e3),
        o = t.getFullYear(),
        i = t.getMonth() + 1,
        r = t.getDate(),
        u = t.getHours(),
        f = t.getMinutes(),
        e = t.getSeconds();
    return i.toString().length == 1 && (i = "0" + i), r.toString().length == 1 && (r = "0" + r), u.toString().length == 1 && (u = "0" + u), f.toString().length == 1 && (f = "0" + f), e.toString().length == 1 && (e = "0" + e), o + "/" + i + "/" + r + " " + u + ":" + f + ":" + e
}

function rand_num(n, t) {
    var i = Math.random() * (t - n) + n;
    return Math.floor(i)
}

function rand_num2(n, t) {
    return n + Math.floor(Math.random() * t / 2)
}

function check_for_trades(n) {
    var t;
    position = ["CALL", "PUT"];
    asset = ["USD/CHF", "GBP/USD", "EUR/USD", "NZD/USD", "USD/CAD", "EUR/JPY", "NZD/USD"];
    profit = 0;
    win = 0;
    lost = 0;
    table = document.getElementById("live-table");
    $($(table.children).find("tr")[10]).html($($(table.children).find("tr")[9]).html());
    $($(table.children).find("tr")[9]).html($($(table.children).find("tr")[8]).html());
    $($(table.children).find("tr")[8]).html($($(table.children).find("tr")[7]).html());
    $($(table.children).find("tr")[7]).html($($(table.children).find("tr")[6]).html());
    $($(table.children).find("tr")[6]).html($($(table.children).find("tr")[5]).html());
    $($(table.children).find("tr")[5]).html($($(table.children).find("tr")[4]).html());
    $($(table.children).find("tr")[4]).html($($(table.children).find("tr")[3]).html());
    $($(table.children).find("tr")[3]).html($($(table.children).find("tr")[2]).html());
    $($(table.children).find("tr")[2]).html($($(table.children).find("tr")[1]).html());
    t = rand_num(1, 100);
    t = t % 2;
    var u = position[t],
        f = rand_num(0, 6),
        e = asset[f],
        o = rand_num(162, 181),
        i = rand_num(75, 250),
        s = o * i / 100;
    html = "<td>" + e + "<\/td><td>" + u + "<\/td><td>£" + i + "<\/td><td>" + getDateTime(rand_num(3600, 7200)) + "<\/td><td>" + getDateTime(rand_num(5, 10)) + '<\/td><td class="result">PROFIT<\/td><td>£' + s + "<\/td>";
    $($(table.children).find("tr")[1]).html(html);
    r = rand_num(3e3, 7e3);
    n == 0 && setTimeout(function() {
        check_for_trades(0)
    }, r)
}
var checkboxHeight = "18",
    radioHeight = "0",
    selectWidth = "0",
    Custom, _gsScope, youtube_api;
document.write('<style type="text/css">input.styled { display: none; } select.styled { position: relative; width: ' + selectWidth + "px; opacity: 0; filter: alpha(opacity=0); z-index: 5; } .disabled { opacity: 0.5; filter: alpha(opacity=50); }<\/style>");
Custom = {
    init: function() {
        var n = document.getElementsByTagName("input"),
            t = Array(),
            r, i, u;
        for (a = 0; a < n.length; a++)(n[a].type == "checkbox" || n[a].type == "radio") && n[a].className.indexOf("styled") > -1 && (t[a] = document.createElement("span"), t[a].className = n[a].type, n[a].checked == !0 && (n[a].type == "checkbox" ? (position = "0 -" + checkboxHeight * 2 + "px", t[a].style.backgroundPosition = position) : (position = "0 -" + radioHeight * 2 + "px", t[a].style.backgroundPosition = position)), n[a].parentNode.insertBefore(t[a], n[a]), n[a].onchange = Custom.clear, n[a].getAttribute("disabled") ? t[a].className = t[a].className += " disabled" : (t[a].onmousedown = Custom.pushed, t[a].onmouseup = Custom.check));
        for (n = document.getElementsByTagName("select"), a = 0; a < n.length; a++)
            if (n[a].className.indexOf("styled") > -1) {
                for (i = n[a].getElementsByTagName("option"), u = i[0].childNodes[0].nodeValue, r = document.createTextNode(u), b = 0; b < i.length; b++) i[b].selected == !0 && (r = document.createTextNode(i[b].childNodes[0].nodeValue));
                t[a] = document.createElement("span");
                t[a].className = "select";
                t[a].id = "select" + n[a].name;
                t[a].appendChild(r);
                n[a].parentNode.insertBefore(t[a], n[a]);
                n[a].getAttribute("disabled") ? n[a].previousSibling.className = n[a].previousSibling.className += " disabled" : n[a].onchange = Custom.choose
            }
        document.onmouseup = Custom.clear
    },
    pushed: function() {
        element = this.nextSibling;
        this.style.backgroundPosition = element.checked == !0 && element.type == "checkbox" ? "0 -" + checkboxHeight * 3 + "px" : element.checked == !0 && element.type == "radio" ? "0 -" + radioHeight * 3 + "px" : element.checked != !0 && element.type == "checkbox" ? "0 -" + checkboxHeight + "px" : "0 -" + radioHeight + "px"
    },
    check: function() {
        if (element = this.nextSibling, element.checked == !0 && element.type == "checkbox") this.style.backgroundPosition = "0 0", element.checked = !1;
        else {
            if (element.type == "checkbox") this.style.backgroundPosition = "0 -" + checkboxHeight * 2 + "px";
            else
                for (this.style.backgroundPosition = "0 -" + radioHeight * 2 + "px", group = this.nextSibling.name, inputs = document.getElementsByTagName("input"), a = 0; a < inputs.length; a++) inputs[a].name == group && inputs[a] != this.nextSibling && (inputs[a].previousSibling.style.backgroundPosition = "0 0");
            element.checked = !0
        }
    },
    clear: function() {
        inputs = document.getElementsByTagName("input");
        for (var n = 0; n < inputs.length; n++) inputs[n].type == "checkbox" && inputs[n].checked == !0 && inputs[n].className.indexOf("styled") > -1 ? inputs[n].previousSibling.style.backgroundPosition = "0 -" + checkboxHeight * 2 + "px" : inputs[n].type == "checkbox" && inputs[n].className.indexOf("styled") > -1 ? inputs[n].previousSibling.style.backgroundPosition = "0 0" : inputs[n].type == "radio" && inputs[n].checked == !0 && inputs[n].className.indexOf("styled") > -1 ? inputs[n].previousSibling.style.backgroundPosition = "0 -" + radioHeight * 2 + "px" : inputs[n].type == "radio" && inputs[n].className.indexOf("styled") > -1 && (inputs[n].previousSibling.style.backgroundPosition = "0 0")
    },
    choose: function() {
        for (option = this.getElementsByTagName("option"), d = 0; d < option.length; d++) option[d].selected == !0 && (document.getElementById("select" + this.name).childNodes[0].nodeValue = option[d].childNodes[0].nodeValue)
    }
};
window.onload = Custom.init,
    function(n) {
        typeof define == "function" && define.amd ? define(["jquery"], n) : n(jQuery)
    }(function(n) {
        function i(n) {
            return t.raw ? n : encodeURIComponent(n)
        }

        function f(n) {
            return t.raw ? n : decodeURIComponent(n)
        }

        function e(n) {
            return i(t.json ? JSON.stringify(n) : String(n))
        }

        function o(n) {
            n.indexOf('"') === 0 && (n = n.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, "\\"));
            try {
                n = decodeURIComponent(n.replace(u, " "))
            } catch (i) {
                return
            }
            try {
                return t.json ? JSON.parse(n) : n
            } catch (i) {}
        }

        function r(i, r) {
            var u = t.raw ? i : o(i);
            return n.isFunction(r) ? r(u) : u
        }
        var u = /\+/g,
            t = n.cookie = function(u, o, s) {
                var y, a, h, v, c, p;
                if (o !== undefined && !n.isFunction(o)) return s = n.extend({}, t.defaults, s), typeof s.expires == "number" && (y = s.expires, a = s.expires = new Date, a.setDate(a.getDate() + y)), document.cookie = [i(u), "=", e(o), s.expires ? "; expires=" + s.expires.toUTCString() : "", s.path ? "; path=" + s.path : "", s.domain ? "; domain=" + s.domain : "", s.secure ? "; secure" : ""].join("");
                for (h = u ? undefined : {}, v = document.cookie ? document.cookie.split("; ") : [], c = 0, p = v.length; c < p; c++) {
                    var w = v[c].split("="),
                        b = f(w.shift()),
                        l = w.join("=");
                    if (u && u === b) {
                        h = r(l, o);
                        break
                    }
                    u || (l = r(l)) === undefined || (h[b] = l)
                }
                return h
            };
        t.defaults = {};
        n.removeCookie = function(t, i) {
            return n.cookie(t) !== undefined ? (n.cookie(t, "", n.extend({}, i, {
                expires: -1
            })), !0) : !1
        }
    });
var QueryString = function() {
        for (var n, u, t = {}, f = window.location.search.substring(1), r = f.split("&"), i = 0; i < r.length; i++) n = r[i].split("="), typeof t[n[0]] == "undefined" ? t[n[0]] = n[1] : typeof t[n[0]] == "string" ? (u = [t[n[0]], n[1]], t[n[0]] = u) : t[n[0]].push(n[1]);
        return t
    }(),
    email = "",
    name = "";
window.location.href.indexOf("exit1") == -1 && window.location.href.indexOf("login") == -1 && window.location.href.indexOf("account") == -1 && $("body").css("filter", "none");
$(document).ready(function() {
        setTimeout(function() {
            $(".myaddone,.loader-wrapper").remove();
            $("body").attr("filter", "")
        }, 500)
    }),
    function() {
        var n, t = function(n, t) {
                return function() {
                    return n.apply(t, arguments)
                }
            },
            i = [].indexOf || function(n) {
                for (var t = 0, i = this.length; i > t; t++)
                    if (t in this && this[t] === n) return t;
                return -1
            },
            r = [].slice,
            f = {}.hasOwnProperty,
            u = function(n, t) {
                function r() {
                    this.constructor = n
                }
                for (var i in t) f.call(t, i) && (n[i] = t[i]);
                return r.prototype = t.prototype, n.prototype = new r, n.__super__ = t.prototype, n
            };
        n = {
            binders: {},
            components: {},
            formatters: {},
            adapters: {},
            config: {
                prefix: "rv",
                templateDelimiters: ["{", "}"],
                rootInterface: ".",
                preloadData: !0,
                handler: function(n, t, i) {
                    return this.call(n, t, i.view.models)
                }
            }
        };
        n.Util = {
            bindEvent: function(n, t, i) {
                return null != window.jQuery ? (n = jQuery(n), null != n.on ? n.on(t, i) : n.bind(t, i)) : null != window.addEventListener ? n.addEventListener(t, i, !1) : (t = "on" + t, n.attachEvent(t, i))
            },
            unbindEvent: function(n, t, i) {
                return null != window.jQuery ? (n = jQuery(n), null != n.off ? n.off(t, i) : n.unbind(t, i)) : null != window.removeEventListener ? n.removeEventListener(t, i, !1) : (t = "on" + t, n.detachEvent(t, i))
            },
            getInputValue: function(n) {
                var i, t, u, r;
                if (null != window.jQuery) switch (n = jQuery(n), n[0].type) {
                    case "checkbox":
                        return n.is(":checked");
                    default:
                        return n.val()
                } else switch (n.type) {
                    case "checkbox":
                        return n.checked;
                    case "select-multiple":
                        for (r = [], t = 0, u = n.length; u > t; t++) i = n[t], i.selected && r.push(i.value);
                        return r;
                    default:
                        return n.value
                }
            }
        };
        n.View = function() {
            function r(i, r, u) {
                var f, e, o, a, s, v, h, c, l;
                for (this.els = i, this.models = r, this.options = null != u ? u : {}, this.update = t(this.update, this), this.publish = t(this.publish, this), this.sync = t(this.sync, this), this.unbind = t(this.unbind, this), this.bind = t(this.bind, this), this.select = t(this.select, this), this.build = t(this.build, this), this.componentRegExp = t(this.componentRegExp, this), this.bindingRegExp = t(this.bindingRegExp, this), this.els.jquery || this.els instanceof Array || (this.els = [this.els]), h = ["config", "binders", "formatters", "adapters"], s = 0, v = h.length; v > s; s++) {
                    if (e = h[s], this[e] = {}, this.options[e]) {
                        c = this.options[e];
                        for (f in c) o = c[f], this[e][f] = o
                    }
                    l = n[e];
                    for (f in l) o = l[f], null == (a = this[e])[f] && (a[f] = o)
                }
                this.build()
            }
            return r.prototype.bindingRegExp = function() {
                return new RegExp("^" + this.config.prefix + "-")
            }, r.prototype.componentRegExp = function() {
                return new RegExp("^" + this.config.prefix.toUpperCase() + "-")
            }, r.prototype.build = function() {
                var r, f, e, c, o, s, u, l, h, t = this;
                for (this.bindings = [], s = [], r = this.bindingRegExp(), e = this.componentRegExp(), f = function(i, r, u, f) {
                        var o, h, c, l, e, a, s;
                        return e = {}, s = function() {
                            var n, r, t, i;
                            for (t = f.split("|"), i = [], n = 0, r = t.length; r > n; n++) a = t[n], i.push(a.trim());
                            return i
                        }(), o = function() {
                            var n, r, t, i;
                            for (t = s.shift().split("<"), i = [], n = 0, r = t.length; r > n; n++) h = t[n], i.push(h.trim());
                            return i
                        }(), l = o.shift(), e.formatters = s, (c = o.shift()) && (e.dependencies = c.split(/\s+/)), t.bindings.push(new n[i](t, r, u, l, e))
                    }, o = function(u) {
                        var h, st, l, ht, ct, a, y, nt, lt, tt, p, v, c, at, w, b, k, d, vt, yt, pt, wt, bt, g, it, rt, ut, ft, et, ot;
                        if (i.call(s, u) < 0) {
                            if (3 === u.nodeType) {
                                if (nt = n.TextTemplateParser, (ct = t.config.templateDelimiters) && (v = nt.parse(u.data, ct)).length && (1 !== v.length || v[0].type !== nt.types.text)) {
                                    for (w = 0, vt = v.length; vt > w; w++) p = v[w], tt = document.createTextNode(p.value), u.parentNode.insertBefore(tt, u), 1 === p.type && f("TextBinding", tt, null, p.value);
                                    u.parentNode.removeChild(u)
                                }
                            } else if (e.test(u.tagName)) c = u.tagName.replace(e, "").toLowerCase(), t.bindings.push(new n.ComponentBinding(t, u, c));
                            else if (null != u.attributes) {
                                for (it = u.attributes, b = 0, yt = it.length; yt > b; b++)
                                    if (h = it[b], r.test(h.name)) {
                                        if (c = h.name.replace(r, ""), !(l = t.binders[c])) {
                                            rt = t.binders;
                                            for (a in rt) at = rt[a], "*" !== a && -1 !== a.indexOf("*") && (lt = new RegExp("^" + a.replace("*", ".+") + "$"), lt.test(c) && (l = at))
                                        }
                                        if (l || (l = t.binders["*"]), l.block) {
                                            for (ut = u.childNodes, k = 0, pt = ut.length; pt > k; k++) y = ut[k], s.push(y);
                                            st = [h]
                                        }
                                    }
                                for (ft = st || u.attributes, d = 0, wt = ft.length; wt > d; d++) h = ft[d], r.test(h.name) && (c = h.name.replace(r, ""), f("Binding", u, c, h.value))
                            }
                            for (et = function() {
                                    var r, n, t, i;
                                    for (t = u.childNodes, i = [], n = 0, r = t.length; r > n; n++) y = t[n], i.push(y);
                                    return i
                                }(), ot = [], g = 0, bt = et.length; bt > g; g++) ht = et[g], ot.push(o(ht));
                            return ot
                        }
                    }, h = this.els, u = 0, l = h.length; l > u; u++) c = h[u], o(c)
            }, r.prototype.select = function(n) {
                var i, t, f, r, u;
                for (r = this.bindings, u = [], t = 0, f = r.length; f > t; t++) i = r[t], n(i) && u.push(i);
                return u
            }, r.prototype.bind = function() {
                var r, n, u, t, i;
                for (t = this.bindings, i = [], n = 0, u = t.length; u > n; n++) r = t[n], i.push(r.bind());
                return i
            }, r.prototype.unbind = function() {
                var r, n, u, t, i;
                for (t = this.bindings, i = [], n = 0, u = t.length; u > n; n++) r = t[n], i.push(r.unbind());
                return i
            }, r.prototype.sync = function() {
                var r, n, u, t, i;
                for (t = this.bindings, i = [], n = 0, u = t.length; u > n; n++) r = t[n], i.push(r.sync());
                return i
            }, r.prototype.publish = function() {
                var r, n, u, t, i;
                for (t = this.select(function(n) {
                        return n.binder.publishes
                    }), i = [], n = 0, u = t.length; u > n; n++) r = t[n], i.push(r.publish());
                return i
            }, r.prototype.update = function(n) {
                var f, i, e, t, o, r, u;
                null == n && (n = {});
                for (i in n) e = n[i], this.models[i] = e;
                for (r = this.bindings, u = [], t = 0, o = r.length; o > t; t++) f = r[t], u.push(f.update(n));
                return u
            }, r
        }();
        n.Binding = function() {
            function i(n, i, r, u, f) {
                this.view = n;
                this.el = i;
                this.type = r;
                this.keypath = u;
                this.options = null != f ? f : {};
                this.update = t(this.update, this);
                this.unbind = t(this.unbind, this);
                this.bind = t(this.bind, this);
                this.publish = t(this.publish, this);
                this.sync = t(this.sync, this);
                this.set = t(this.set, this);
                this.eventHandler = t(this.eventHandler, this);
                this.formattedValue = t(this.formattedValue, this);
                this.setObserver = t(this.setObserver, this);
                this.setBinder = t(this.setBinder, this);
                this.formatters = this.options.formatters || [];
                this.dependencies = [];
                this.setBinder();
                this.setObserver()
            }
            return i.prototype.setBinder = function() {
                var n, i, r, t;
                if (!(this.binder = this.view.binders[this.type])) {
                    t = this.view.binders;
                    for (n in t) r = t[n], "*" !== n && -1 !== n.indexOf("*") && (i = new RegExp("^" + n.replace("*", ".+") + "$"), i.test(this.type) && (this.binder = r, this.args = new RegExp("^" + n.replace("*", "(.+)") + "$").exec(this.type), this.args.shift()))
                }
                return this.binder || (this.binder = this.view.binders["*"]), this.binder instanceof Function ? this.binder = {
                    routine: this.binder
                } : void 0
            }, i.prototype.setObserver = function() {
                var t = this;
                return this.observer = new n.KeypathObserver(this.view, this.view.models, this.keypath, function(n) {
                    return t.key && t.unbind(!0), t.model = n.target, t.key && t.bind(!0), t.sync()
                }), this.key = this.observer.key, this.model = this.observer.target
            }, i.prototype.formattedValue = function(n) {
                var i, t, e, u, o, f;
                for (f = this.formatters, u = 0, o = f.length; o > u; u++) t = f[u], i = t.split(/\s+/), e = i.shift(), t = this.view.formatters[e], (null != t ? t.read : void 0) instanceof Function ? n = t.read.apply(t, [n].concat(r.call(i))) : t instanceof Function && (n = t.apply(null, [n].concat(r.call(i))));
                return n
            }, i.prototype.eventHandler = function(n) {
                var t, i;
                return i = (t = this).view.config.handler,
                    function(r) {
                        return i.call(n, this, r, t)
                    }
            }, i.prototype.set = function(n) {
                var t;
                return n = n instanceof Function && !this.binder["function"] ? this.formattedValue(n.call(this.model)) : this.formattedValue(n), null != (t = this.binder.routine) ? t.call(this, this.el, n) : void 0
            }, i.prototype.sync = function() {
                return this.set(this.key ? this.view.adapters[this.key.interface].read(this.model, this.key.path) : this.model)
            }, i.prototype.publish = function() {
                var u, o, f, t, i, s, e, h, c;
                for (t = n.Util.getInputValue(this.el), e = this.formatters.slice(0).reverse(), i = 0, s = e.length; s > i; i++) o = e[i], u = o.split(/\s+/), f = u.shift(), (null != (h = this.view.formatters[f]) ? h.publish : void 0) && (t = (c = this.view.formatters[f]).publish.apply(c, [t].concat(r.call(u))));
                return this.view.adapters[this.key.interface].publish(this.model, this.key.path, t)
            }, i.prototype.bind = function(t) {
                var s, f, r, u, h, c, l, e, o, i = this;
                if (null == t && (t = !1), t || null != (c = this.binder.bind) && c.call(this, this.el), this.key && this.view.adapters[this.key.interface].subscribe(this.model, this.key.path, this.sync), (t ? void 0 : this.view.config.preloadData) && this.sync(), null != (l = this.options.dependencies) ? l.length : void 0) {
                    for (e = this.options.dependencies, o = [], u = 0, h = e.length; h > u; u++) s = e[u], r = new n.KeypathObserver(this.view, this.model, s, function(n, t) {
                        var r;
                        return r = n.key, i.view.adapters[r.interface].unsubscribe(t, r.path, i.sync), i.view.adapters[r.interface].subscribe(n.target, r.path, i.sync), i.sync()
                    }), f = r.key, this.view.adapters[f.interface].subscribe(r.target, f.path, this.sync), o.push(this.dependencies.push(r));
                    return o
                }
            }, i.prototype.unbind = function(n) {
                var i, r, t, f, e, u;
                if (null == n && (n = !1), n || (null != (e = this.binder.unbind) && e.call(this, this.el), this.observer.unobserve()), this.key && this.view.adapters[this.key.interface].unsubscribe(this.model, this.key.path, this.sync), this.dependencies.length) {
                    for (u = this.dependencies, t = 0, f = u.length; f > t; t++) r = u[t], i = r.key, this.view.adapters[i.interface].unsubscribe(r.target, i.path, this.sync);
                    return this.dependencies = []
                }
            }, i.prototype.update = function(n) {
                var t;
                return null == n && (n = {}), null != (t = this.binder.update) ? t.call(this, n) : void 0
            }, i
        }();
        n.ComponentBinding = function(r) {
            function f(r, u, f) {
                var e, o, h, s, c;
                for (this.view = r, this.el = u, this.type = f, this.unbind = t(this.unbind, this), this.bind = t(this.bind, this), this.update = t(this.update, this), this.locals = t(this.locals, this), this.component = n.components[this.type], this.attributes = {}, this.inflections = {}, s = this.el.attributes || [], o = 0, h = s.length; h > o; o++) e = s[o], c = e.name, i.call(this.component.attributes, c) >= 0 ? this.attributes[e.name] = e.value : this.inflections[e.name] = e.value
            }
            return u(f, r), f.prototype.sync = function() {}, f.prototype.locals = function(n) {
                var e, t, o, s, i, r, h, u, f;
                null == n && (n = this.view.models);
                i = {};
                u = this.inflections;
                for (t in u)
                    for (e = u[t], f = e.split("."), r = 0, h = f.length; h > r; r++) s = f[r], i[t] = (i[t] || n)[s];
                for (t in n) o = n[t], null == i[t] && (i[t] = o);
                return i
            }, f.prototype.update = function(n) {
                var t;
                if (null != (t = this.componentView)) return t.update(this.locals(n))
            }, f.prototype.bind = function() {
                var t, i;
                return null != this.componentView ? null != (i = this.componentView) ? i.bind() : void 0 : (t = this.component.build.call(this.attributes), (this.componentView = new n.View(t, this.locals(), this.view.options)).bind(), this.el.parentNode.replaceChild(t, this.el))
            }, f.prototype.unbind = function() {
                var n;
                if (null != (n = this.componentView)) return n.unbind()
            }, f
        }(n.Binding);
        n.TextBinding = function(n) {
            function i(n, i, r, u, f) {
                this.view = n;
                this.el = i;
                this.type = r;
                this.keypath = u;
                this.options = null != f ? f : {};
                this.sync = t(this.sync, this);
                this.formatters = this.options.formatters || [];
                this.dependencies = [];
                this.setObserver()
            }
            return u(i, n), i.prototype.binder = {
                routine: function(n, t) {
                    return n.data = null != t ? t : ""
                }
            }, i.prototype.sync = function() {
                return i.__super__.sync.apply(this, arguments)
            }, i
        }(n.Binding);
        n.KeypathParser = function() {
            function n() {}
            return n.parse = function(n, t, r) {
                var f, u, e, o, s;
                for (e = [], u = {
                        interface: r,
                        path: ""
                    }, o = 0, s = n.length; s > o; o++) f = n[o], i.call(t, f) >= 0 ? (e.push(u), u = {
                    interface: f,
                    path: ""
                }) : u.path += f;
                return e.push(u), e
            }, n
        }();
        n.TextTemplateParser = function() {
            function n() {}
            return n.types = {
                text: 0,
                binding: 1
            }, n.parse = function(n, t) {
                var i, r, f, o, e, u, s;
                for (u = [], o = n.length, i = 0, r = 0; o > r;) {
                    if (i = n.indexOf(t[0], r), 0 > i) {
                        u.push({
                            type: this.types.text,
                            value: n.slice(r)
                        });
                        break
                    }
                    if (i > 0 && i > r && u.push({
                            type: this.types.text,
                            value: n.slice(r, i)
                        }), r = i + t[0].length, i = n.indexOf(t[1], r), 0 > i) {
                        e = n.slice(r - t[1].length);
                        f = u[u.length - 1];
                        (null != f ? f.type : void 0) === this.types.text ? f.value += e : u.push({
                            type: this.types.text,
                            value: e
                        });
                        break
                    }
                    s = n.slice(r, i).trim();
                    u.push({
                        type: this.types.binding,
                        value: s
                    });
                    r = i + t[1].length
                }
                return u
            }, n
        }();
        n.KeypathObserver = function() {
            function r(n, i, r, u) {
                this.view = n;
                this.model = i;
                this.keypath = r;
                this.callback = u;
                this.unobserve = t(this.unobserve, this);
                this.realize = t(this.realize, this);
                this.update = t(this.update, this);
                this.parse = t(this.parse, this);
                this.parse();
                this.objectPath = [];
                this.target = this.realize()
            }
            return r.prototype.parse = function() {
                var t, r, u, f, o, e;
                return t = function() {
                    var n, t;
                    n = this.view.adapters;
                    t = [];
                    for (r in n) o = n[r], t.push(r);
                    return t
                }.call(this), e = this.keypath[0], i.call(t, e) >= 0 ? (f = this.keypath[0], u = this.keypath.substr(1)) : (f = this.view.config.rootInterface, u = this.keypath), this.tokens = n.KeypathParser.parse(u, t, f), this.key = this.tokens.pop()
            }, r.prototype.update = function() {
                var n, t;
                if ((n = this.realize()) !== this.target) return (t = this.target, this.target = n, this.callback(this, t))
            }, r.prototype.realize = function() {
                var n, i, f, t, r, e, u;
                for (n = this.model, u = this.tokens, i = r = 0, e = u.length; e > r; i = ++r) t = u[i], null != this.objectPath[i] ? n !== (f = this.objectPath[i]) && (this.view.adapters[t.interface].unsubscribe(f, t.path, this.update), this.view.adapters[t.interface].subscribe(n, t.path, this.update), this.objectPath[i] = n) : (this.view.adapters[t.interface].subscribe(n, t.path, this.update), this.objectPath[i] = n), n = this.view.adapters[t.interface].read(n, t.path);
                return n
            }, r.prototype.unobserve = function() {
                var n, f, i, r, e, u, t;
                for (u = this.tokens, t = [], n = r = 0, e = u.length; e > r; n = ++r) i = u[n], (f = this.objectPath[n]) ? t.push(this.view.adapters[i.interface].unsubscribe(f, i.path, this.update)) : t.push(void 0);
                return t
            }, r
        }();
        n.binders.text = function(n, t) {
            return null != n.textContent ? n.textContent = null != t ? t : "" : n.innerText = null != t ? t : ""
        };
        n.binders.html = function(n, t) {
            return n.innerHTML = null != t ? t : ""
        };
        n.binders.show = function(n, t) {
            return n.style.display = t ? "" : "none"
        };
        n.binders.hide = function(n, t) {
            return n.style.display = t ? "none" : ""
        };
        n.binders.enabled = function(n, t) {
            return n.disabled = !t
        };
        n.binders.disabled = function(n, t) {
            return n.disabled = !!t
        };
        n.binders.checked = {
            publishes: !0,
            bind: function(t) {
                return n.Util.bindEvent(t, "change", this.publish)
            },
            unbind: function(t) {
                return n.Util.unbindEvent(t, "change", this.publish)
            },
            routine: function(n, t) {
                var i;
                return n.checked = "radio" === n.type ? (null != (i = n.value) ? i.toString() : void 0) === (null != t ? t.toString() : void 0) : !!t
            }
        };
        n.binders.unchecked = {
            publishes: !0,
            bind: function(t) {
                return n.Util.bindEvent(t, "change", this.publish)
            },
            unbind: function(t) {
                return n.Util.unbindEvent(t, "change", this.publish)
            },
            routine: function(n, t) {
                var i;
                return n.checked = "radio" === n.type ? (null != (i = n.value) ? i.toString() : void 0) !== (null != t ? t.toString() : void 0) : !t
            }
        };
        n.binders.value = {
            publishes: !0,
            bind: function(t) {
                return n.Util.bindEvent(t, "change", this.publish)
            },
            unbind: function(t) {
                return n.Util.unbindEvent(t, "change", this.publish)
            },
            routine: function(n, t) {
                var u, r, e, o, s, h, f;
                if (null != window.jQuery) {
                    if (n = jQuery(n), (null != t ? t.toString() : void 0) !== (null != (o = n.val()) ? o.toString() : void 0)) return n.val(null != t ? t : "")
                } else if ("select-multiple" === n.type) {
                    if (null != t) {
                        for (f = [], r = 0, e = n.length; e > r; r++) u = n[r], f.push(u.selected = (s = u.value, i.call(t, s) >= 0));
                        return f
                    }
                } else if ((null != t ? t.toString() : void 0) !== (null != (h = n.value) ? h.toString() : void 0)) return n.value = null != t ? t : ""
            }
        };
        n.binders["if"] = {
            block: !0,
            bind: function(n) {
                var t, i;
                if (null == this.marker) return (t = [this.view.config.prefix, this.type].join("-").replace("--", "-"), i = n.getAttribute(t), this.marker = document.createComment(" rivets: " + this.type + " " + i + " "), n.removeAttribute(t), n.parentNode.insertBefore(this.marker, n), n.parentNode.removeChild(n))
            },
            unbind: function() {
                var n;
                if (null != (n = this.nested)) return n.unbind()
            },
            routine: function(t, i) {
                var r, e, u, o, f;
                if (!!i == (null == this.nested)) {
                    if (i) {
                        u = {};
                        f = this.view.models;
                        for (r in f) e = f[r], u[r] = e;
                        return o = {
                            binders: this.view.options.binders,
                            formatters: this.view.options.formatters,
                            adapters: this.view.options.adapters,
                            config: this.view.options.config
                        }, (this.nested = new n.View(t, u, o)).bind(), this.marker.parentNode.insertBefore(t, this.marker.nextSibling)
                    }
                    return t.parentNode.removeChild(t), this.nested.unbind(), delete this.nested
                }
            },
            update: function(n) {
                var t;
                if (null != (t = this.nested)) return t.update(n)
            }
        };
        n.binders.unless = {
            block: !0,
            bind: function(t) {
                return n.binders["if"].bind.call(this, t)
            },
            unbind: function() {
                return n.binders["if"].unbind.call(this)
            },
            routine: function(t, i) {
                return n.binders["if"].routine.call(this, t, !i)
            },
            update: function(t) {
                return n.binders["if"].update.call(this, t)
            }
        };
        n.binders["on-*"] = {
            "function": !0,
            unbind: function(t) {
                if (this.handler) return n.Util.unbindEvent(t, this.args[0], this.handler)
            },
            routine: function(t, i) {
                return this.handler && n.Util.unbindEvent(t, this.args[0], this.handler), n.Util.bindEvent(t, this.args[0], this.handler = this.eventHandler(i))
            }
        };
        n.binders["each-*"] = {
            block: !0,
            bind: function(n) {
                var t;
                if (null == this.marker) return (t = [this.view.config.prefix, this.type].join("-").replace("--", "-"), this.marker = document.createComment(" rivets: " + this.type + " "), this.iterated = [], n.removeAttribute(t), n.parentNode.insertBefore(this.marker, n), n.parentNode.removeChild(n))
            },
            unbind: function() {
                var r, n, u, t, i;
                if (null != this.iterated) {
                    for (t = this.iterated, i = [], n = 0, u = t.length; u > n; n++) r = t[n], i.push(r.unbind());
                    return i
                }
            },
            routine: function(t, i) {
                var o, r, ft, u, v, s, e, y, h, nt, p, tt, f, c, w, l, it, rt, ut, b, k, d, g, a;
                if (y = this.args[0], i = i || [], this.iterated.length > i.length)
                    for (b = Array(this.iterated.length - i.length), c = 0, it = b.length; it > c; c++) ft = b[c], f = this.iterated.pop(), f.unbind(), this.marker.parentNode.removeChild(f.els[0]);
                for (u = w = 0, rt = i.length; rt > w; u = ++w)
                    if (e = i[u], r = {}, r[y] = e, null == this.iterated[u]) {
                        k = this.view.models;
                        for (s in k) e = k[s], null == r[s] && (r[s] = e);
                        nt = this.iterated.length ? this.iterated[this.iterated.length - 1].els[0] : this.marker;
                        h = {
                            binders: this.view.options.binders,
                            formatters: this.view.options.formatters,
                            adapters: this.view.options.adapters,
                            config: {}
                        };
                        d = this.view.options.config;
                        for (v in d) tt = d[v], h.config[v] = tt;
                        h.config.preloadData = !0;
                        p = t.cloneNode(!0);
                        f = new n.View(p, r, h);
                        f.bind();
                        this.iterated.push(f);
                        this.marker.parentNode.insertBefore(p, nt.nextSibling)
                    } else this.iterated[u].models[y] !== e && this.iterated[u].update(r);
                if ("OPTION" === t.nodeName) {
                    for (g = this.view.bindings, a = [], l = 0, ut = g.length; ut > l; l++) o = g[l], o.el === this.marker.parentNode && "value" === o.type ? a.push(o.sync()) : a.push(void 0);
                    return a
                }
            },
            update: function(n) {
                var r, t, e, o, i, s, u, f;
                r = {};
                for (t in n) e = n[t], t !== this.args[0] && (r[t] = e);
                for (u = this.iterated, f = [], i = 0, s = u.length; s > i; i++) o = u[i], f.push(o.update(r));
                return f
            }
        };
        n.binders["class-*"] = function(n, t) {
            var i;
            return i = " " + n.className + " ", !t == (-1 !== i.indexOf(" " + this.args[0] + " ")) ? n.className = t ? "" + n.className + " " + this.args[0] : i.replace(" " + this.args[0] + " ", " ").trim() : void 0
        };
        n.binders["*"] = function(n, t) {
            return t ? n.setAttribute(this.type, t) : n.removeAttribute(this.type)
        };
        n.adapters["."] = {
            id: "_rv",
            counter: 0,
            weakmap: {},
            weakReference: function(n) {
                var t;
                return null == n[this.id] && (t = this.counter++, this.weakmap[t] = {
                    callbacks: {}
                }, Object.defineProperty(n, this.id, {
                    value: t
                })), this.weakmap[n[this.id]]
            },
            stubFunction: function(n, t) {
                var i, r, u;
                return r = n[t], i = this.weakReference(n), u = this.weakmap, n[t] = function() {
                    var s, h, f, c, t, l, e, a, v, o;
                    c = r.apply(n, arguments);
                    e = i.pointers;
                    for (f in e)
                        for (h = e[f], o = null != (a = null != (v = u[f]) ? v.callbacks[h] : void 0) ? a : [], t = 0, l = o.length; l > t; t++) s = o[t], s();
                    return c
                }
            },
            observeMutations: function(n, t, r) {
                var o, e, u, s, f, h;
                if (Array.isArray(n)) {
                    if (u = this.weakReference(n), null == u.pointers)
                        for (u.pointers = {}, e = ["push", "pop", "shift", "unshift", "sort", "reverse", "splice"], f = 0, h = e.length; h > f; f++) o = e[f], this.stubFunction(n, o);
                    if (null == (s = u.pointers)[t] && (s[t] = []), i.call(u.pointers[t], r) < 0) return u.pointers[t].push(r)
                }
            },
            unobserveMutations: function(n, t, i) {
                var r, u;
                if (Array.isArray(n && null != n[this.id]) && (r = null != (u = this.weakReference(n).pointers) ? u[t] : void 0)) return r.splice(r.indexOf(i), 1)
            },
            subscribe: function(n, t, r) {
                var u, f, e = this;
                return u = this.weakReference(n).callbacks, null == u[t] && (u[t] = [], f = n[t], Object.defineProperty(n, t, {
                    get: function() {
                        return f
                    },
                    set: function(i) {
                        var o, h, s;
                        if (i !== f) {
                            for (f = i, s = u[t], o = 0, h = s.length; h > o; o++) r = s[o], r();
                            return e.observeMutations(i, n[e.id], t)
                        }
                    }
                })), i.call(u[t], r) < 0 && u[t].push(r), this.observeMutations(n[t], n[this.id], t)
            },
            unsubscribe: function(n, t, i) {
                var r;
                return r = this.weakmap[n[this.id]].callbacks[t], r.splice(r.indexOf(i), 1), this.unobserveMutations(n[t], n[this.id], t)
            },
            read: function(n, t) {
                return n[t]
            },
            publish: function(n, t, i) {
                return n[t] = i
            }
        };
        n.factory = function(t) {
            return t._ = n, t.binders = n.binders, t.components = n.components, t.formatters = n.formatters, t.adapters = n.adapters, t.config = n.config, t.configure = function(t) {
                var i, r;
                null == t && (t = {});
                for (i in t) r = t[i], n.config[i] = r
            }, t.bind = function(t, i, r) {
                var u;
                return null == i && (i = {}), null == r && (r = {}), u = new n.View(t, i, r), u.bind(), u
            }
        };
        "object" == typeof exports ? n.factory(exports) : "function" == typeof define && define.amd ? define(["exports"], function(t) {
            return n.factory(this.rivets = t), t
        }) : n.factory(this.rivets = {})
    }.call(this);
_gsScope = "undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window;
(_gsScope._gsQueue || (_gsScope._gsQueue = [])).push(function() {
    "use strict";
    _gsScope._gsDefine("TweenMax", ["core.Animation", "core.SimpleTimeline", "TweenLite"], function(n, t, i) {
        var h = function(n) {
                for (var i = [], r = n.length, t = 0; t !== r; i.push(n[t++]));
                return i
            },
            r = function(n, t, u) {
                i.call(this, n, t, u);
                this._cycle = 0;
                this._yoyo = this.vars.yoyo === !0;
                this._repeat = this.vars.repeat || 0;
                this._repeatDelay = this.vars.repeatDelay || 0;
                this._dirty = !0;
                this.render = r.prototype.render
            },
            f = 1e-10,
            o = i._internals,
            a = o.isSelector,
            v = o.isArray,
            u = r.prototype = i.to({}, .1, {}),
            e = [],
            s, c, l;
        return r.version = "1.16.1", u.constructor = r, u.kill()._gc = !1, r.killTweensOf = r.killDelayedCallsTo = i.killTweensOf, r.getTweensOf = i.getTweensOf, r.lagSmoothing = i.lagSmoothing, r.ticker = i.ticker, r.render = i.render, u.invalidate = function() {
            return this._yoyo = this.vars.yoyo === !0, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._uncache(!0), i.prototype.invalidate.call(this)
        }, u.updateTo = function(n, t) {
            var u, h = this.ratio,
                f = this.vars.immediateRender || n.immediateRender,
                e, o, s, r;
            t && this._startTime < this._timeline._time && (this._startTime = this._timeline._time, this._uncache(!1), this._gc ? this._enabled(!0, !1) : this._timeline.insert(this, this._startTime - this._delay));
            for (u in n) this.vars[u] = n[u];
            if (this._initted || f)
                if (t) this._initted = !1, f && this.render(0, !0, !0);
                else if (this._gc && this._enabled(!0, !1), this._notifyPluginsOfEnabled && this._firstPT && i._onPluginEvent("_onDisable", this), this._time / this._duration > .998) e = this._time, this.render(0, !0, !1), this._initted = !1, this.render(e, !0, !1);
            else if (this._time > 0 || f)
                for (this._initted = !1, this._init(), s = 1 / (1 - h), r = this._firstPT; r;) o = r.s + r.c, r.c *= s, r.s = o - r.c, r = r._next;
            return this
        }, u.render = function(n, t, i) {
            this._initted || 0 === this._duration && this.vars.repeat && this.invalidate();
            var l, h, s, p, r, a, v, w, d = this._dirty ? this.totalDuration() : this._totalDuration,
                b = this._time,
                y = this._totalTime,
                k = this._cycle,
                u = this._duration,
                c = this._rawPrevTime;
            if (n >= d ? (this._totalTime = d, this._cycle = this._repeat, this._yoyo && 0 != (1 & this._cycle) ? (this._time = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0) : (this._time = u, this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1), this._reversed || (l = !0, h = "onComplete", i = i || this._timeline.autoRemoveChildren), 0 === u && (this._initted || !this.vars.lazy || i) && (this._startTime === this._timeline._duration && (n = 0), (0 === n || 0 > c || c === f) && c !== n && (i = !0, c > f && (h = "onReverseComplete")), this._rawPrevTime = w = !t || n || c === n ? n : f)) : 1e-7 > n ? (this._totalTime = this._time = this._cycle = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0, (0 !== y || 0 === u && c > 0) && (h = "onReverseComplete", l = this._reversed), 0 > n && (this._active = !1, 0 === u && (this._initted || !this.vars.lazy || i) && (c >= 0 && (i = !0), this._rawPrevTime = w = !t || n || c === n ? n : f)), this._initted || (i = !0)) : (this._totalTime = this._time = n, 0 !== this._repeat && (p = u + this._repeatDelay, this._cycle = this._totalTime / p >> 0, 0 !== this._cycle && this._cycle === this._totalTime / p && this._cycle--, this._time = this._totalTime - this._cycle * p, this._yoyo && 0 != (1 & this._cycle) && (this._time = u - this._time), this._time > u ? this._time = u : 0 > this._time && (this._time = 0)), this._easeType ? (r = this._time / u, a = this._easeType, v = this._easePower, (1 === a || 3 === a && r >= .5) && (r = 1 - r), 3 === a && (r *= 2), 1 === v ? r *= r : 2 === v ? r *= r * r : 3 === v ? r *= r * r * r : 4 === v && (r *= r * r * r * r), this.ratio = 1 === a ? 1 - r : 2 === a ? r : .5 > this._time / u ? r / 2 : 1 - r / 2) : this.ratio = this._ease.getRatio(this._time / u)), b === this._time && !i && k === this._cycle) return y !== this._totalTime && this._onUpdate && (t || this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || e)), void 0;
            if (!this._initted) {
                if (this._init(), !this._initted || this._gc) return;
                if (!i && this._firstPT && (this.vars.lazy !== !1 && this._duration || this.vars.lazy && !this._duration)) return this._time = b, this._totalTime = y, this._rawPrevTime = c, this._cycle = k, o.lazyTweens.push(this), this._lazy = [n, t], void 0;
                this._time && !l ? this.ratio = this._ease.getRatio(this._time / u) : l && this._ease._calcEnd && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1))
            }
            for (this._lazy !== !1 && (this._lazy = !1), this._active || !this._paused && this._time !== b && n >= 0 && (this._active = !0), 0 === y && (2 === this._initted && n > 0 && this._init(), this._startAt && (n >= 0 ? this._startAt.render(n, t, i) : h || (h = "_dummyGS")), this.vars.onStart && (0 !== this._totalTime || 0 === u) && (t || this.vars.onStart.apply(this.vars.onStartScope || this, this.vars.onStartParams || e))), s = this._firstPT; s;) s.f ? s.t[s.p](s.c * this.ratio + s.s) : s.t[s.p] = s.c * this.ratio + s.s, s = s._next;
            this._onUpdate && (0 > n && this._startAt && this._startTime && this._startAt.render(n, t, i), t || (this._totalTime !== y || l) && this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || e));
            this._cycle !== k && (t || this._gc || this.vars.onRepeat && this.vars.onRepeat.apply(this.vars.onRepeatScope || this, this.vars.onRepeatParams || e));
            h && (!this._gc || i) && (0 > n && this._startAt && !this._onUpdate && this._startTime && this._startAt.render(n, t, i), l && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !t && this.vars[h] && this.vars[h].apply(this.vars[h + "Scope"] || this, this.vars[h + "Params"] || e), 0 === u && this._rawPrevTime === f && w !== f && (this._rawPrevTime = 0))
        }, r.to = function(n, t, i) {
            return new r(n, t, i)
        }, r.from = function(n, t, i) {
            return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, new r(n, t, i)
        }, r.fromTo = function(n, t, i, u) {
            return u.startAt = i, u.immediateRender = 0 != u.immediateRender && 0 != i.immediateRender, new r(n, t, u)
        }, r.staggerTo = r.allTo = function(n, t, u, f, o, s, c) {
            f = f || 0;
            var p, y, l, w, b = u.delay || 0,
                k = [],
                d = function() {
                    u.onComplete && u.onComplete.apply(u.onCompleteScope || this, arguments);
                    o.apply(c || this, s || e)
                };
            for (v(n) || ("string" == typeof n && (n = i.selector(n) || n), a(n) && (n = h(n))), n = n || [], 0 > f && (n = h(n), n.reverse(), f *= -1), p = n.length - 1, l = 0; p >= l; l++) {
                y = {};
                for (w in u) y[w] = u[w];
                y.delay = b;
                l === p && o && (y.onComplete = d);
                k[l] = new r(n[l], t, y);
                b += f
            }
            return k
        }, r.staggerFrom = r.allFrom = function(n, t, i, u, f, e, o) {
            return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, r.staggerTo(n, t, i, u, f, e, o)
        }, r.staggerFromTo = r.allFromTo = function(n, t, i, u, f, e, o, s) {
            return u.startAt = i, u.immediateRender = 0 != u.immediateRender && 0 != i.immediateRender, r.staggerTo(n, t, u, f, e, o, s)
        }, r.delayedCall = function(n, t, i, u, f) {
            return new r(t, 0, {
                delay: n,
                onComplete: t,
                onCompleteParams: i,
                onCompleteScope: u,
                onReverseComplete: t,
                onReverseCompleteParams: i,
                onReverseCompleteScope: u,
                immediateRender: !1,
                useFrames: f,
                overwrite: 0
            })
        }, r.set = function(n, t) {
            return new r(n, 0, t)
        }, r.isTweening = function(n) {
            return i.getTweensOf(n, !0).length > 0
        }, s = function(n, t) {
            for (var u = [], f = 0, r = n._first; r;) r instanceof i ? u[f++] = r : (t && (u[f++] = r), u = u.concat(s(r, t)), f = u.length), r = r._next;
            return u
        }, c = r.getAllTweens = function(t) {
            return s(n._rootTimeline, t).concat(s(n._rootFramesTimeline, t))
        }, r.killAll = function(n, i, r, u) {
            null == i && (i = !0);
            null == r && (r = !0);
            for (var o, f, s = c(0 != u), h = s.length, l = i && r && u, e = 0; h > e; e++) f = s[e], (l || f instanceof t || (o = f.target === f.vars.onComplete) && r || i && !o) && (n ? f.totalTime(f._reversed ? 0 : f.totalDuration()) : f._enabled(!1, !1))
        }, r.killChildTweensOf = function(n, t) {
            if (null != n) {
                var f, e, s, u, l, c = o.tweenLookup;
                if ("string" == typeof n && (n = i.selector(n) || n), a(n) && (n = h(n)), v(n))
                    for (u = n.length; --u > -1;) r.killChildTweensOf(n[u], t);
                else {
                    f = [];
                    for (s in c)
                        for (e = c[s].target.parentNode; e;) e === n && (f = f.concat(c[s].tweens)), e = e.parentNode;
                    for (l = f.length, u = 0; l > u; u++) t && f[u].totalTime(f[u].totalDuration()), f[u]._enabled(!1, !1)
                }
            }
        }, l = function(n, i, r, u) {
            i = i !== !1;
            r = r !== !1;
            u = u !== !1;
            for (var e, f, o = c(u), h = i && r && u, s = o.length; --s > -1;) f = o[s], (h || f instanceof t || (e = f.target === f.vars.onComplete) && r || i && !e) && f.paused(n)
        }, r.pauseAll = function(n, t, i) {
            l(!0, n, t, i)
        }, r.resumeAll = function(n, t, i) {
            l(!1, n, t, i)
        }, r.globalTimeScale = function(t) {
            var r = n._rootTimeline,
                u = i.ticker.time;
            return arguments.length ? (t = t || f, r._startTime = u - (u - r._startTime) * r._timeScale / t, r = n._rootFramesTimeline, u = i.ticker.frame, r._startTime = u - (u - r._startTime) * r._timeScale / t, r._timeScale = n._rootTimeline._timeScale = t, t) : r._timeScale
        }, u.progress = function(n) {
            return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 != (1 & this._cycle) ? 1 - n : n) + this._cycle * (this._duration + this._repeatDelay), !1) : this._time / this.duration()
        }, u.totalProgress = function(n) {
            return arguments.length ? this.totalTime(this.totalDuration() * n, !1) : this._totalTime / this.totalDuration()
        }, u.time = function(n, t) {
            return arguments.length ? (this._dirty && this.totalDuration(), n > this._duration && (n = this._duration), this._yoyo && 0 != (1 & this._cycle) ? n = this._duration - n + this._cycle * (this._duration + this._repeatDelay) : 0 !== this._repeat && (n += this._cycle * (this._duration + this._repeatDelay)), this.totalTime(n, t)) : this._time
        }, u.duration = function(t) {
            return arguments.length ? n.prototype.duration.call(this, t) : this._duration
        }, u.totalDuration = function(n) {
            return arguments.length ? -1 === this._repeat ? this : this.duration((n - this._repeat * this._repeatDelay) / (this._repeat + 1)) : (this._dirty && (this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat, this._dirty = !1), this._totalDuration)
        }, u.repeat = function(n) {
            return arguments.length ? (this._repeat = n, this._uncache(!0)) : this._repeat
        }, u.repeatDelay = function(n) {
            return arguments.length ? (this._repeatDelay = n, this._uncache(!0)) : this._repeatDelay
        }, u.yoyo = function(n) {
            return arguments.length ? (this._yoyo = n, this) : this._yoyo
        }, r
    }, !0);
    _gsScope._gsDefine("TimelineLite", ["core.Animation", "core.SimpleTimeline", "TweenLite"], function(n, t, i) {
        var u = function(n) {
                t.call(this, n);
                this._labels = {};
                this.autoRemoveChildren = this.vars.autoRemoveChildren === !0;
                this.smoothChildTiming = this.vars.smoothChildTiming === !0;
                this._sortChildren = !0;
                this._onUpdate = this.vars.onUpdate;
                var r, u, i = this.vars;
                for (u in i) r = i[u], e(r) && -1 !== r.join("").indexOf("{self}") && (i[u] = this._swapSelfInParams(r));
                e(i.tweens) && this.add(i.tweens, 0, i.align, i.stagger)
            },
            f = 1e-10,
            o = i._internals,
            y = u._internals = {},
            p = o.isSelector,
            e = o.isArray,
            c = o.lazyTweens,
            l = o.lazyRender,
            s = [],
            h = _gsScope._gsDefine.globals,
            a = function(n) {
                var t, i = {};
                for (t in n) i[t] = n[t];
                return i
            },
            w = y.pauseCallback = function(n, t, i, r) {
                var u, e = n._timeline,
                    c = e._totalTime,
                    o = n._startTime,
                    h = 0 > n._rawPrevTime || 0 === n._rawPrevTime && e._reversed,
                    l = h ? 0 : f,
                    a = h ? f : 0;
                if (t || !this._forcingPlayhead) {
                    for (e.pause(o), u = n._prev; u && u._startTime === o;) u._rawPrevTime = a, u = u._prev;
                    for (u = n._next; u && u._startTime === o;) u._rawPrevTime = l, u = u._next;
                    t && t.apply(r || e, i || s);
                    (this._forcingPlayhead || !e._paused) && e.seek(c)
                }
            },
            v = function(n) {
                for (var i = [], r = n.length, t = 0; t !== r; i.push(n[t++]));
                return i
            },
            r = u.prototype = new t;
        return u.version = "1.16.1", r.constructor = u, r.kill()._gc = r._forcingPlayhead = !1, r.to = function(n, t, r, u) {
            var f = r.repeat && h.TweenMax || i;
            return t ? this.add(new f(n, t, r), u) : this.set(n, r, u)
        }, r.from = function(n, t, r, u) {
            return this.add((r.repeat && h.TweenMax || i).from(n, t, r), u)
        }, r.fromTo = function(n, t, r, u, f) {
            var e = u.repeat && h.TweenMax || i;
            return t ? this.add(e.fromTo(n, t, r, u), f) : this.set(n, u, f)
        }, r.staggerTo = function(n, t, r, f, e, o, s, h) {
            var c, l = new u({
                onComplete: o,
                onCompleteParams: s,
                onCompleteScope: h,
                smoothChildTiming: this.smoothChildTiming
            });
            for ("string" == typeof n && (n = i.selector(n) || n), n = n || [], p(n) && (n = v(n)), f = f || 0, 0 > f && (n = v(n), n.reverse(), f *= -1), c = 0; n.length > c; c++) r.startAt && (r.startAt = a(r.startAt)), l.to(n[c], t, a(r), c * f);
            return this.add(l, e)
        }, r.staggerFrom = function(n, t, i, r, u, f, e, o) {
            return i.immediateRender = 0 != i.immediateRender, i.runBackwards = !0, this.staggerTo(n, t, i, r, u, f, e, o)
        }, r.staggerFromTo = function(n, t, i, r, u, f, e, o, s) {
            return r.startAt = i, r.immediateRender = 0 != r.immediateRender && 0 != i.immediateRender, this.staggerTo(n, t, r, u, f, e, o, s)
        }, r.call = function(n, t, r, u) {
            return this.add(i.delayedCall(0, n, t, r), u)
        }, r.set = function(n, t, r) {
            return r = this._parseTimeOrLabel(r, 0, !0), null == t.immediateRender && (t.immediateRender = r === this._time && !this._paused), this.add(new i(n, 0, t), r)
        }, u.exportRoot = function(n, t) {
            n = n || {};
            null == n.smoothChildTiming && (n.smoothChildTiming = !0);
            var r, o, f = new u(n),
                e = f._timeline;
            for (null == t && (t = !0), e._remove(f, !0), f._startTime = 0, f._rawPrevTime = f._time = f._totalTime = e._time, r = e._first; r;) o = r._next, t && r instanceof i && r.target === r.vars.onComplete || f.add(r, r._startTime - r._delay), r = o;
            return e.add(f, 0), f
        }, r.add = function(r, f, o, s) {
            var l, v, a, h, c, y;
            if ("number" != typeof f && (f = this._parseTimeOrLabel(f, 0, !0, r)), !(r instanceof n)) {
                if (r instanceof Array || r && r.push && e(r)) {
                    for (o = o || "normal", s = s || 0, l = f, v = r.length, a = 0; v > a; a++) e(h = r[a]) && (h = new u({
                        tweens: h
                    })), this.add(h, l), "string" != typeof h && "function" != typeof h && ("sequence" === o ? l = h._startTime + h.totalDuration() / h._timeScale : "start" === o && (h._startTime -= h.delay())), l += s;
                    return this._uncache(!0)
                }
                if ("string" == typeof r) return this.addLabel(r, f);
                if ("function" != typeof r) throw "Cannot add " + r + " into the timeline; it is not a tween, timeline, function, or string.";
                r = i.delayedCall(0, r)
            }
            if (t.prototype.add.call(this, r, f), (this._gc || this._time === this._duration) && !this._paused && this._duration < this.duration())
                for (c = this, y = c.rawTime() > r._startTime; c._timeline;) y && c._timeline.smoothChildTiming ? c.totalTime(c._totalTime, !0) : c._gc && c._enabled(!0, !1), c = c._timeline;
            return this
        }, r.remove = function(t) {
            if (t instanceof n) return this._remove(t, !1);
            if (t instanceof Array || t && t.push && e(t)) {
                for (var i = t.length; --i > -1;) this.remove(t[i]);
                return this
            }
            return "string" == typeof t ? this.removeLabel(t) : this.kill(null, t)
        }, r._remove = function(n, i) {
            t.prototype._remove.call(this, n, i);
            var r = this._last;
            return r ? this._time > r._startTime + r._totalDuration / r._timeScale && (this._time = this.duration(), this._totalTime = this._totalDuration) : this._time = this._totalTime = this._duration = this._totalDuration = 0, this
        }, r.append = function(n, t) {
            return this.add(n, this._parseTimeOrLabel(null, t, !0, n))
        }, r.insert = r.insertMultiple = function(n, t, i, r) {
            return this.add(n, t || 0, i, r)
        }, r.appendMultiple = function(n, t, i, r) {
            return this.add(n, this._parseTimeOrLabel(null, t, !0, n), i, r)
        }, r.addLabel = function(n, t) {
            return this._labels[n] = this._parseTimeOrLabel(t), this
        }, r.addPause = function(n, t, r, u) {
            var f = i.delayedCall(0, w, ["{self}", t, r, u], this);
            return f.data = "isPause", this.add(f, n)
        }, r.removeLabel = function(n) {
            return delete this._labels[n], this
        }, r.getLabelTime = function(n) {
            return null != this._labels[n] ? this._labels[n] : -1
        }, r._parseTimeOrLabel = function(t, i, r, u) {
            var f;
            if (u instanceof n && u.timeline === this) this.remove(u);
            else if (u && (u instanceof Array || u.push && e(u)))
                for (f = u.length; --f > -1;) u[f] instanceof n && u[f].timeline === this && this.remove(u[f]);
            if ("string" == typeof i) return this._parseTimeOrLabel(i, r && "number" == typeof t && null == this._labels[i] ? t - this.duration() : 0, r);
            if (i = i || 0, "string" == typeof t && (isNaN(t) || null != this._labels[t])) {
                if (f = t.indexOf("="), -1 === f) return null == this._labels[t] ? r ? this._labels[t] = this.duration() + i : i : this._labels[t] + i;
                i = parseInt(t.charAt(f - 1) + "1", 10) * Number(t.substr(f + 1));
                t = f > 1 ? this._parseTimeOrLabel(t.substr(0, f - 1), 0, r) : this.duration()
            } else null == t && (t = this.duration());
            return Number(t) + i
        }, r.seek = function(n, t) {
            return this.totalTime("number" == typeof n ? n : this._parseTimeOrLabel(n), t !== !1)
        }, r.stop = function() {
            return this.paused(!0)
        }, r.gotoAndPlay = function(n, t) {
            return this.play(n, t)
        }, r.gotoAndStop = function(n, t) {
            return this.pause(n, t)
        }, r.render = function(n, t, i) {
            this._gc && this._enabled(!0, !1);
            var r, e, a, u, o, v = this._dirty ? this.totalDuration() : this._totalDuration,
                h = this._time,
                p = this._startTime,
                w = this._timeScale,
                y = this._paused;
            if (n >= v) this._totalTime = this._time = v, this._reversed || this._hasPausedChild() || (e = !0, u = "onComplete", o = !!this._timeline.autoRemoveChildren, 0 === this._duration && (0 === n || 0 > this._rawPrevTime || this._rawPrevTime === f) && this._rawPrevTime !== n && this._first && (o = !0, this._rawPrevTime > f && (u = "onReverseComplete"))), this._rawPrevTime = this._duration || !t || n || this._rawPrevTime === n ? n : f, n = v + .0001;
            else if (1e-7 > n)
                if (this._totalTime = this._time = 0, (0 !== h || 0 === this._duration && this._rawPrevTime !== f && (this._rawPrevTime > 0 || 0 > n && this._rawPrevTime >= 0)) && (u = "onReverseComplete", e = this._reversed), 0 > n) this._active = !1, this._timeline.autoRemoveChildren && this._reversed ? (o = e = !0, u = "onReverseComplete") : this._rawPrevTime >= 0 && this._first && (o = !0), this._rawPrevTime = n;
                else {
                    if (this._rawPrevTime = this._duration || !t || n || this._rawPrevTime === n ? n : f, 0 === n && e)
                        for (r = this._first; r && 0 === r._startTime;) r._duration || (e = !1), r = r._next;
                    n = 0;
                    this._initted || (o = !0)
                } else this._totalTime = this._time = this._rawPrevTime = n;
            if (this._time !== h && this._first || i || o) {
                if (this._initted || (this._initted = !0), this._active || !this._paused && this._time !== h && n > 0 && (this._active = !0), 0 === h && this.vars.onStart && 0 !== this._time && (t || this.vars.onStart.apply(this.vars.onStartScope || this, this.vars.onStartParams || s)), this._time >= h)
                    for (r = this._first; r && (a = r._next, !this._paused || y);)(r._active || r._startTime <= this._time && !r._paused && !r._gc) && (r._reversed ? r.render((r._dirty ? r.totalDuration() : r._totalDuration) - (n - r._startTime) * r._timeScale, t, i) : r.render((n - r._startTime) * r._timeScale, t, i)), r = a;
                else
                    for (r = this._last; r && (a = r._prev, !this._paused || y);)(r._active || h >= r._startTime && !r._paused && !r._gc) && (r._reversed ? r.render((r._dirty ? r.totalDuration() : r._totalDuration) - (n - r._startTime) * r._timeScale, t, i) : r.render((n - r._startTime) * r._timeScale, t, i)), r = a;
                this._onUpdate && (t || (c.length && l(), this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || s)));
                u && (this._gc || (p === this._startTime || w !== this._timeScale) && (0 === this._time || v >= this.totalDuration()) && (e && (c.length && l(), this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !t && this.vars[u] && this.vars[u].apply(this.vars[u + "Scope"] || this, this.vars[u + "Params"] || s)))
            }
        }, r._hasPausedChild = function() {
            for (var n = this._first; n;) {
                if (n._paused || n instanceof u && n._hasPausedChild()) return !0;
                n = n._next
            }
            return !1
        }, r.getChildren = function(n, t, r, u) {
            u = u || -9999999999;
            for (var e = [], f = this._first, o = 0; f;) u > f._startTime || (f instanceof i ? t !== !1 && (e[o++] = f) : (r !== !1 && (e[o++] = f), n !== !1 && (e = e.concat(f.getChildren(!0, t, r)), o = e.length))), f = f._next;
            return e
        }, r.getTweensOf = function(n, t) {
            var r, u, f = this._gc,
                e = [],
                o = 0;
            for (f && this._enabled(!0, !0), r = i.getTweensOf(n), u = r.length; --u > -1;)(r[u].timeline === this || t && this._contains(r[u])) && (e[o++] = r[u]);
            return f && this._enabled(!1, !0), e
        }, r.recent = function() {
            return this._recent
        }, r._contains = function(n) {
            for (var t = n.timeline; t;) {
                if (t === this) return !0;
                t = t.timeline
            }
            return !1
        }, r.shiftChildren = function(n, t, i) {
            i = i || 0;
            for (var u, r = this._first, f = this._labels; r;) r._startTime >= i && (r._startTime += n), r = r._next;
            if (t)
                for (u in f) f[u] >= i && (f[u] += n);
            return this._uncache(!0)
        }, r._kill = function(n, t) {
            if (!n && !t) return this._enabled(!1, !1);
            for (var i = t ? this.getTweensOf(t) : this.getChildren(!0, !0, !1), r = i.length, u = !1; --r > -1;) i[r]._kill(n, t) && (u = !0);
            return u
        }, r.clear = function(n) {
            var t = this.getChildren(!1, !0, !0),
                i = t.length;
            for (this._time = this._totalTime = 0; --i > -1;) t[i]._enabled(!1, !1);
            return n !== !1 && (this._labels = {}), this._uncache(!0)
        }, r.invalidate = function() {
            for (var t = this._first; t;) t.invalidate(), t = t._next;
            return n.prototype.invalidate.call(this)
        }, r._enabled = function(n, i) {
            if (n === this._gc)
                for (var r = this._first; r;) r._enabled(n, !0), r = r._next;
            return t.prototype._enabled.call(this, n, i)
        }, r.totalTime = function() {
            this._forcingPlayhead = !0;
            var t = n.prototype.totalTime.apply(this, arguments);
            return this._forcingPlayhead = !1, t
        }, r.duration = function(n) {
            return arguments.length ? (0 !== this.duration() && 0 !== n && this.timeScale(this._duration / n), this) : (this._dirty && this.totalDuration(), this._duration)
        }, r.totalDuration = function(n) {
            if (!arguments.length) {
                if (this._dirty) {
                    for (var f, r, i = 0, t = this._last, u = 999999999999; t;) f = t._prev, t._dirty && t.totalDuration(), t._startTime > u && this._sortChildren && !t._paused ? this.add(t, t._startTime - t._delay) : u = t._startTime, 0 > t._startTime && !t._paused && (i -= t._startTime, this._timeline.smoothChildTiming && (this._startTime += t._startTime / this._timeScale), this.shiftChildren(-t._startTime, !1, -9999999999), u = 0), r = t._startTime + t._totalDuration / t._timeScale, r > i && (i = r), t = f;
                    this._duration = this._totalDuration = i;
                    this._dirty = !1
                }
                return this._totalDuration
            }
            return 0 !== this.totalDuration() && 0 !== n && this.timeScale(this._totalDuration / n), this
        }, r.paused = function(t) {
            if (!t)
                for (var i = this._first, r = this._time; i;) i._startTime === r && "isPause" === i.data && (i._rawPrevTime = 0), i = i._next;
            return n.prototype.paused.apply(this, arguments)
        }, r.usesFrames = function() {
            for (var t = this._timeline; t._timeline;) t = t._timeline;
            return t === n._rootFramesTimeline
        }, r.rawTime = function() {
            return this._paused ? this._totalTime : (this._timeline.rawTime() - this._startTime) * this._timeScale
        }, u
    }, !0);
    _gsScope._gsDefine("TimelineMax", ["TimelineLite", "TweenLite", "easing.Ease"], function(n, t, i) {
            var e = function(t) {
                    n.call(this, t);
                    this._repeat = this.vars.repeat || 0;
                    this._repeatDelay = this.vars.repeatDelay || 0;
                    this._cycle = 0;
                    this._yoyo = this.vars.yoyo === !0;
                    this._dirty = !0
                },
                f = 1e-10,
                u = [],
                o = t._internals,
                s = o.lazyTweens,
                h = o.lazyRender,
                c = new i(null, null, 1, 0),
                r = e.prototype = new n;
            return r.constructor = e, r.kill()._gc = !1, e.version = "1.16.1", r.invalidate = function() {
                return this._yoyo = this.vars.yoyo === !0, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._uncache(!0), n.prototype.invalidate.call(this)
            }, r.addCallback = function(n, i, r, u) {
                return this.add(t.delayedCall(0, n, r, u), i)
            }, r.removeCallback = function(n, t) {
                if (n)
                    if (null == t) this._kill(null, n);
                    else
                        for (var i = this.getTweensOf(n, !1), r = i.length, u = this._parseTimeOrLabel(t); --r > -1;) i[r]._startTime === u && i[r]._enabled(!1, !1);
                return this
            }, r.removePause = function(t) {
                return this.removeCallback(n._internals.pauseCallback, t)
            }, r.tweenTo = function(n, i) {
                i = i || {};
                var e, o, r, f = {
                    ease: c,
                    useFrames: this.usesFrames(),
                    immediateRender: !1
                };
                for (o in i) f[o] = i[o];
                return f.time = this._parseTimeOrLabel(n), e = Math.abs(Number(f.time) - this._time) / this._timeScale || .001, r = new t(this, e, f), f.onStart = function() {
                    r.target.paused(!0);
                    r.vars.time !== r.target.time() && e === r.duration() && r.duration(Math.abs(r.vars.time - r.target.time()) / r.target._timeScale);
                    i.onStart && i.onStart.apply(i.onStartScope || r, i.onStartParams || u)
                }, r
            }, r.tweenFromTo = function(n, t, i) {
                i = i || {};
                n = this._parseTimeOrLabel(n);
                i.startAt = {
                    onComplete: this.seek,
                    onCompleteParams: [n],
                    onCompleteScope: this
                };
                i.immediateRender = i.immediateRender !== !1;
                var r = this.tweenTo(t, i);
                return r.duration(Math.abs(r.vars.time - n) / this._timeScale || .001)
            }, r.render = function(n, t, i) {
                this._gc && this._enabled(!0, !1);
                var r, v, w, c, a, b, k = this._dirty ? this.totalDuration() : this._totalDuration,
                    e = this._duration,
                    l = this._time,
                    d = this._totalTime,
                    nt = this._startTime,
                    tt = this._timeScale,
                    o = this._rawPrevTime,
                    g = this._paused,
                    y = this._cycle;
                if (n >= k) this._locked || (this._totalTime = k, this._cycle = this._repeat), this._reversed || this._hasPausedChild() || (v = !0, c = "onComplete", a = !!this._timeline.autoRemoveChildren, 0 === this._duration && (0 === n || 0 > o || o === f) && o !== n && this._first && (a = !0, o > f && (c = "onReverseComplete"))), this._rawPrevTime = this._duration || !t || n || this._rawPrevTime === n ? n : f, this._yoyo && 0 != (1 & this._cycle) ? this._time = n = 0 : (this._time = e, n = e + .0001);
                else if (1e-7 > n)
                    if (this._locked || (this._totalTime = this._cycle = 0), this._time = 0, (0 !== l || 0 === e && o !== f && (o > 0 || 0 > n && o >= 0) && !this._locked) && (c = "onReverseComplete", v = this._reversed), 0 > n) this._active = !1, this._timeline.autoRemoveChildren && this._reversed ? (a = v = !0, c = "onReverseComplete") : o >= 0 && this._first && (a = !0), this._rawPrevTime = n;
                    else {
                        if (this._rawPrevTime = e || !t || n || this._rawPrevTime === n ? n : f, 0 === n && v)
                            for (r = this._first; r && 0 === r._startTime;) r._duration || (v = !1), r = r._next;
                        n = 0;
                        this._initted || (a = !0)
                    } else 0 === e && 0 > o && (a = !0), this._time = this._rawPrevTime = n, this._locked || (this._totalTime = n, 0 !== this._repeat && (b = e + this._repeatDelay, this._cycle = this._totalTime / b >> 0, 0 !== this._cycle && this._cycle === this._totalTime / b && this._cycle--, this._time = this._totalTime - this._cycle * b, this._yoyo && 0 != (1 & this._cycle) && (this._time = e - this._time), this._time > e ? (this._time = e, n = e + .0001) : 0 > this._time ? this._time = n = 0 : n = this._time));
                if (this._cycle !== y && !this._locked) {
                    var p = this._yoyo && 0 != (1 & y),
                        it = p === (this._yoyo && 0 != (1 & this._cycle)),
                        rt = this._totalTime,
                        ut = this._cycle,
                        ft = this._rawPrevTime,
                        et = this._time;
                    if (this._totalTime = y * e, y > this._cycle ? p = !p : this._totalTime += e, this._time = l, this._rawPrevTime = 0 === e ? o - .0001 : o, this._cycle = y, this._locked = !0, l = p ? 0 : e, this.render(l, t, 0 === e), t || this._gc || this.vars.onRepeat && this.vars.onRepeat.apply(this.vars.onRepeatScope || this, this.vars.onRepeatParams || u), it && (l = p ? e + .0001 : -.0001, this.render(l, !0, !1)), this._locked = !1, this._paused && !g) return;
                    this._time = et;
                    this._totalTime = rt;
                    this._cycle = ut;
                    this._rawPrevTime = ft
                }
                if (!(this._time !== l && this._first || i || a)) return d !== this._totalTime && this._onUpdate && (t || this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || u)), void 0;
                if (this._initted || (this._initted = !0), this._active || !this._paused && this._totalTime !== d && n > 0 && (this._active = !0), 0 === d && this.vars.onStart && 0 !== this._totalTime && (t || this.vars.onStart.apply(this.vars.onStartScope || this, this.vars.onStartParams || u)), this._time >= l)
                    for (r = this._first; r && (w = r._next, !this._paused || g);)(r._active || r._startTime <= this._time && !r._paused && !r._gc) && (r._reversed ? r.render((r._dirty ? r.totalDuration() : r._totalDuration) - (n - r._startTime) * r._timeScale, t, i) : r.render((n - r._startTime) * r._timeScale, t, i)), r = w;
                else
                    for (r = this._last; r && (w = r._prev, !this._paused || g);)(r._active || l >= r._startTime && !r._paused && !r._gc) && (r._reversed ? r.render((r._dirty ? r.totalDuration() : r._totalDuration) - (n - r._startTime) * r._timeScale, t, i) : r.render((n - r._startTime) * r._timeScale, t, i)), r = w;
                this._onUpdate && (t || (s.length && h(), this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || u)));
                c && (this._locked || this._gc || (nt === this._startTime || tt !== this._timeScale) && (0 === this._time || k >= this.totalDuration()) && (v && (s.length && h(), this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !t && this.vars[c] && this.vars[c].apply(this.vars[c + "Scope"] || this, this.vars[c + "Params"] || u)))
            }, r.getActive = function(n, t, i) {
                null == n && (n = !0);
                null == t && (t = !0);
                null == i && (i = !1);
                for (var u, f = [], e = this.getChildren(n, t, i), o = 0, s = e.length, r = 0; s > r; r++) u = e[r], u.isActive() && (f[o++] = u);
                return f
            }, r.getLabelAfter = function(n) {
                n || 0 !== n && (n = this._time);
                for (var i = this.getLabelsArray(), r = i.length, t = 0; r > t; t++)
                    if (i[t].time > n) return i[t].name;
                return null
            }, r.getLabelBefore = function(n) {
                null == n && (n = this._time);
                for (var t = this.getLabelsArray(), i = t.length; --i > -1;)
                    if (n > t[i].time) return t[i].name;
                return null
            }, r.getLabelsArray = function() {
                var n, t = [],
                    i = 0;
                for (n in this._labels) t[i++] = {
                    time: this._labels[n],
                    name: n
                };
                return t.sort(function(n, t) {
                    return n.time - t.time
                }), t
            }, r.progress = function(n, t) {
                return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 != (1 & this._cycle) ? 1 - n : n) + this._cycle * (this._duration + this._repeatDelay), t) : this._time / this.duration()
            }, r.totalProgress = function(n, t) {
                return arguments.length ? this.totalTime(this.totalDuration() * n, t) : this._totalTime / this.totalDuration()
            }, r.totalDuration = function(t) {
                return arguments.length ? -1 === this._repeat ? this : this.duration((t - this._repeat * this._repeatDelay) / (this._repeat + 1)) : (this._dirty && (n.prototype.totalDuration.call(this), this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat), this._totalDuration)
            }, r.time = function(n, t) {
                return arguments.length ? (this._dirty && this.totalDuration(), n > this._duration && (n = this._duration), this._yoyo && 0 != (1 & this._cycle) ? n = this._duration - n + this._cycle * (this._duration + this._repeatDelay) : 0 !== this._repeat && (n += this._cycle * (this._duration + this._repeatDelay)), this.totalTime(n, t)) : this._time
            }, r.repeat = function(n) {
                return arguments.length ? (this._repeat = n, this._uncache(!0)) : this._repeat
            }, r.repeatDelay = function(n) {
                return arguments.length ? (this._repeatDelay = n, this._uncache(!0)) : this._repeatDelay
            }, r.yoyo = function(n) {
                return arguments.length ? (this._yoyo = n, this) : this._yoyo
            }, r.currentLabel = function(n) {
                return arguments.length ? this.seek(n, !0) : this.getLabelBefore(this._time + 1e-8)
            }, e
        }, !0),
        function() {
            var h = 180 / Math.PI,
                n = [],
                t = [],
                i = [],
                f = {},
                c = _gsScope._gsDefine.globals,
                u = function(n, t, i, r) {
                    this.a = n;
                    this.b = t;
                    this.c = i;
                    this.d = r;
                    this.da = r - n;
                    this.ca = i - n;
                    this.ba = t - n
                },
                l = ",x,y,z,left,top,right,bottom,marginTop,marginLeft,marginRight,marginBottom,paddingLeft,paddingTop,paddingRight,paddingBottom,backgroundPosition,backgroundPosition_y,",
                e = function(n, t, i, r) {
                    var e = {
                            a: n
                        },
                        u = {},
                        f = {},
                        o = {
                            c: r
                        },
                        s = (n + t) / 2,
                        a = (t + i) / 2,
                        h = (i + r) / 2,
                        c = (s + a) / 2,
                        l = (a + h) / 2,
                        v = (l - c) / 8;
                    return e.b = s + (n - s) / 4, u.b = c + v, e.c = u.a = (e.b + u.b) / 2, u.c = f.a = (c + l) / 2, f.b = l - v, o.b = h + (r - h) / 4, f.c = o.a = (f.b + o.b) / 2, [e, u, f, o]
                },
                a = function(r, u, f, o, s) {
                    for (var y, c, nt, h, p, b, g, tt, l, k, d, it, rt = r.length - 1, w = 0, a = r[0].a, v = 0; rt > v; v++) h = r[w], y = h.a, c = h.d, nt = r[w + 1].d, s ? (k = n[v], d = t[v], it = .25 * (d + k) * u / (o ? .5 : i[v] || .5), p = c - (c - y) * (o ? .5 * u : 0 !== k ? it / k : 0), b = c + (nt - c) * (o ? .5 * u : 0 !== d ? it / d : 0), g = c - (p + ((b - p) * (3 * k / (k + d) + .5) / 4 || 0))) : (p = c - .5 * (c - y) * u, b = c + .5 * (nt - c) * u, g = c - (p + b) / 2), p += g, b += g, h.c = tt = p, h.b = 0 !== v ? a : a = h.a + .6 * (h.c - h.a), h.da = c - y, h.ca = tt - y, h.ba = a - y, f ? (l = e(y, a, tt, c), r.splice(w, 1, l[0], l[1], l[2], l[3]), w += 4) : w++, a = b;
                    h = r[w];
                    h.b = a;
                    h.c = a + .4 * (h.d - a);
                    h.da = h.d - h.a;
                    h.ca = h.c - h.a;
                    h.ba = a - h.a;
                    f && (l = e(h.a, a, h.c, h.d), r.splice(w, 1, l[0], l[1], l[2], l[3]))
                },
                v = function(i, r, f, e) {
                    var c, o, l, s, v, a, h = [];
                    if (e)
                        for (i = [e].concat(i), o = i.length; --o > -1;) "string" == typeof(a = i[o][r]) && "=" === a.charAt(1) && (i[o][r] = e[r] + Number(a.charAt(0) + a.substr(2)));
                    if (c = i.length - 2, 0 > c) return h[0] = new u(i[0][r], 0, 0, i[-1 > c ? 0 : 1][r]), h;
                    for (o = 0; c > o; o++) l = i[o][r], s = i[o + 1][r], h[o] = new u(l, 0, 0, s), f && (v = i[o + 2][r], n[o] = (n[o] || 0) + (s - l) * (s - l), t[o] = (t[o] || 0) + (v - s) * (v - s));
                    return h[o] = new u(i[o][r], 0, 0, i[o + 1][r]), h
                },
                o = function(r, u, e, o, s, h) {
                    var c, y, w, p, g, nt, k, tt, d = {},
                        b = [],
                        it = h || r[0];
                    s = "string" == typeof s ? "," + s + "," : l;
                    null == u && (u = 1);
                    for (y in r[0]) b.push(y);
                    if (r.length > 1) {
                        for (tt = r[r.length - 1], k = !0, c = b.length; --c > -1;)
                            if (y = b[c], Math.abs(it[y] - tt[y]) > .05) {
                                k = !1;
                                break
                            }
                        k && (r = r.concat(), h && r.unshift(h), r.push(r[1]), h = r[r.length - 3])
                    }
                    for (n.length = t.length = i.length = 0, c = b.length; --c > -1;) y = b[c], f[y] = -1 !== s.indexOf("," + y + ","), d[y] = v(r, y, f[y], h);
                    for (c = n.length; --c > -1;) n[c] = Math.sqrt(n[c]), t[c] = Math.sqrt(t[c]);
                    if (!o) {
                        for (c = b.length; --c > -1;)
                            if (f[y])
                                for (w = d[b[c]], nt = w.length - 1, p = 0; nt > p; p++) g = w[p + 1].da / t[p] + w[p].da / n[p], i[p] = (i[p] || 0) + g * g;
                        for (c = i.length; --c > -1;) i[c] = Math.sqrt(i[c])
                    }
                    for (c = b.length, p = e ? 4 : 1; --c > -1;) y = b[c], w = d[y], a(w, u, e, o, f[y]), k && (w.splice(0, p), w.splice(w.length - p, p));
                    return d
                },
                y = function(n, t, i) {
                    t = t || "soft";
                    var o, a, v, w, f, y, r, c, s, e, h, b = {},
                        l = "cubic" === t ? 3 : 2,
                        k = "soft" === t,
                        p = [];
                    if (k && i && (n = [i].concat(n)), null == n || l + 1 > n.length) throw "invalid Bezier data";
                    for (s in n[0]) p.push(s);
                    for (y = p.length; --y > -1;) {
                        for (s = p[y], b[s] = f = [], e = 0, c = n.length, r = 0; c > r; r++) o = null == i ? n[r][s] : "string" == typeof(h = n[r][s]) && "=" === h.charAt(1) ? i[s] + Number(h.charAt(0) + h.substr(2)) : Number(h), k && r > 1 && c - 1 > r && (f[e++] = (o + f[e - 2]) / 2), f[e++] = o;
                        for (c = e - l + 1, e = 0, r = 0; c > r; r += l) o = f[r], a = f[r + 1], v = f[r + 2], w = 2 === l ? 0 : f[r + 3], f[e++] = h = 3 === l ? new u(o, a, v, w) : new u(o, (2 * a + o) / 3, (2 * a + v) / 3, v);
                        f.length = e
                    }
                    return b
                },
                p = function(n, t, i) {
                    for (var e, s, o, a, v, y, r, u, h, f, c, p = 1 / i, l = n.length; --l > -1;)
                        for (f = n[l], o = f.a, a = f.d - o, v = f.c - o, y = f.b - o, e = s = 0, u = 1; i >= u; u++) r = p * u, h = 1 - r, e = s - (s = (r * r * a + 3 * h * (r * v + h * y)) * r), c = l * i + u - 1, t[c] = (t[c] || 0) + e * e
                },
                w = function(n, t) {
                    t = t >> 0 || 6;
                    var s, i, h, r, f = [],
                        c = [],
                        u = 0,
                        e = 0,
                        a = t - 1,
                        l = [],
                        o = [];
                    for (s in n) p(n[s], f, t);
                    for (h = f.length, i = 0; h > i; i++) u += Math.sqrt(f[i]), r = i % t, o[r] = u, r === a && (e += u, r = i / t >> 0, l[r] = o, c[r] = e, u = 0, o = []);
                    return {
                        length: e,
                        lengths: c,
                        segments: l
                    }
                },
                r = _gsScope._gsDefine.plugin({
                    propName: "bezier",
                    priority: -1,
                    version: "1.3.4",
                    API: 2,
                    global: !0,
                    init: function(n, t, i) {
                        var c;
                        this._target = n;
                        t instanceof Array && (t = {
                            values: t
                        });
                        this._func = {};
                        this._round = {};
                        this._props = [];
                        this._timeRes = null == t.timeResolution ? 6 : parseInt(t.timeResolution, 10);
                        var r, a, f, e, l, s = t.values || [],
                            h = {},
                            v = s[0],
                            u = t.autoRotate || i.vars.orientToBezier;
                        this._autoRotate = u ? u instanceof Array ? u : [
                            ["x", "y", "rotation", u === !0 ? 0 : Number(u) || 0]
                        ] : null;
                        for (r in v) this._props.push(r);
                        for (f = this._props.length; --f > -1;) r = this._props[f], this._overwriteProps.push(r), a = this._func[r] = "function" == typeof n[r], h[r] = a ? n[r.indexOf("set") || "function" != typeof n["get" + r.substr(3)] ? r : "get" + r.substr(3)]() : parseFloat(n[r]), l || h[r] !== s[0][r] && (l = h);
                        if ((this._beziers = "cubic" !== t.type && "quadratic" !== t.type && "soft" !== t.type ? o(s, isNaN(t.curviness) ? 1 : t.curviness, !1, "thruBasic" === t.type, t.correlate, l) : y(s, t.type, h), this._segCount = this._beziers[r].length, this._timeRes) && (c = w(this._beziers, this._timeRes), this._length = c.length, this._lengths = c.lengths, this._segments = c.segments, this._l1 = this._li = this._s1 = this._si = 0, this._l2 = this._lengths[0], this._curSeg = this._segments[0], this._s2 = this._curSeg[0], this._prec = 1 / this._curSeg.length), u = this._autoRotate)
                            for (this._initialRotations = [], u[0] instanceof Array || (this._autoRotate = u = [u]), f = u.length; --f > -1;) {
                                for (e = 0; 3 > e; e++) r = u[f][e], this._func[r] = "function" == typeof n[r] ? n[r.indexOf("set") || "function" != typeof n["get" + r.substr(3)] ? r : "get" + r.substr(3)] : !1;
                                r = u[f][2];
                                this._initialRotations[f] = this._func[r] ? this._func[r].call(this._target) : this._target[r]
                            }
                        return this._startRatio = i.vars.runBackwards ? 1 : 0, !0
                    },
                    set: function(n) {
                        var c, d, t, e, i, r, o, p, a, u, l = this._segCount,
                            g = this._func,
                            w = this._target,
                            it = n !== this._startRatio,
                            f, b, k, v, y, nt, tt, s;
                        if (this._timeRes) {
                            if (a = this._lengths, u = this._curSeg, n *= this._length, t = this._li, n > this._l2 && l - 1 > t) {
                                for (p = l - 1; p > t && n >= (this._l2 = a[++t]););
                                this._l1 = a[t - 1];
                                this._li = t;
                                this._curSeg = u = this._segments[t];
                                this._s2 = u[this._s1 = this._si = 0]
                            } else if (this._l1 > n && t > 0) {
                                for (; t > 0 && (this._l1 = a[--t]) >= n;);
                                0 === t && this._l1 > n ? this._l1 = 0 : t++;
                                this._l2 = a[t];
                                this._li = t;
                                this._curSeg = u = this._segments[t];
                                this._s1 = u[(this._si = u.length - 1) - 1] || 0;
                                this._s2 = u[this._si]
                            }
                            if (c = t, n -= this._l1, t = this._si, n > this._s2 && u.length - 1 > t) {
                                for (p = u.length - 1; p > t && n >= (this._s2 = u[++t]););
                                this._s1 = u[t - 1];
                                this._si = t
                            } else if (this._s1 > n && t > 0) {
                                for (; t > 0 && (this._s1 = u[--t]) >= n;);
                                0 === t && this._s1 > n ? this._s1 = 0 : t++;
                                this._s2 = u[t];
                                this._si = t
                            }
                            r = (t + (n - this._s1) / (this._s2 - this._s1)) * this._prec
                        } else c = 0 > n ? 0 : n >= 1 ? l - 1 : l * n >> 0, r = (n - c * (1 / l)) * l;
                        for (d = 1 - r, t = this._props.length; --t > -1;) e = this._props[t], i = this._beziers[e][c], o = (r * r * i.da + 3 * d * (r * i.ca + d * i.ba)) * r + i.a, this._round[e] && (o = Math.round(o)), g[e] ? w[e](o) : w[e] = o;
                        if (this._autoRotate)
                            for (s = this._autoRotate, t = s.length; --t > -1;) e = s[t][2], nt = s[t][3] || 0, tt = s[t][4] === !0 ? 1 : h, i = this._beziers[s[t][0]], f = this._beziers[s[t][1]], i && f && (i = i[c], f = f[c], b = i.a + (i.b - i.a) * r, v = i.b + (i.c - i.b) * r, b += (v - b) * r, v += (i.c + (i.d - i.c) * r - v) * r, k = f.a + (f.b - f.a) * r, y = f.b + (f.c - f.b) * r, k += (y - k) * r, y += (f.c + (f.d - f.c) * r - y) * r, o = it ? Math.atan2(y - k, v - b) * tt + nt : this._initialRotations[t], g[e] ? w[e](o) : w[e] = o)
                    }
                }),
                s = r.prototype;
            r.bezierThrough = o;
            r.cubicToQuadratic = e;
            r._autoCSS = !0;
            r.quadraticToCubic = function(n, t, i) {
                return new u(n, (2 * t + n) / 3, (2 * t + i) / 3, i)
            };
            r._cssRegister = function() {
                var t = c.CSSPlugin;
                if (t) {
                    var n = t._internals,
                        i = n._parseToProxy,
                        u = n._setPluginRatio,
                        f = n.CSSPropTween;
                    n._registerComplexSpecialProp("bezier", {
                        parser: function(n, t, e, o, s, h) {
                            t instanceof Array && (t = {
                                values: t
                            });
                            h = new r;
                            var l, v, a, p = t.values,
                                y = p.length - 1,
                                w = [],
                                c = {};
                            if (0 > y) return s;
                            for (l = 0; y >= l; l++) a = i(n, p[l], o, s, h, y !== l), w[l] = a.end;
                            for (v in t) c[v] = t[v];
                            return c.values = w, s = new f(n, "bezier", 0, 0, a.pt, 2), s.data = a, s.plugin = h, s.setRatio = u, 0 === c.autoRotate && (c.autoRotate = !0), !c.autoRotate || c.autoRotate instanceof Array || (l = c.autoRotate === !0 ? 0 : Number(c.autoRotate), c.autoRotate = null != a.end.left ? [
                                ["left", "top", "rotation", l, !1]
                            ] : null != a.end.x ? [
                                ["x", "y", "rotation", l, !1]
                            ] : !1), c.autoRotate && (o._transform || o._enableTransforms(!1), a.autoRotate = o._target._gsTransform), h._onInitTween(a.proxy, c, o._tween), s
                        }
                    })
                }
            };
            s._roundProps = function(n, t) {
                for (var i = this._overwriteProps, r = i.length; --r > -1;)(n[i[r]] || n.bezier || n.bezierThrough) && (this._round[i[r]] = t)
            };
            s._kill = function(n) {
                var t, i, r = this._props;
                for (t in this._beziers)
                    if (t in n)
                        for (delete this._beziers[t], delete this._func[t], i = r.length; --i > -1;) r[i] === t && r.splice(i, 1);
                return this._super._kill.call(this, n)
            }
        }();
    _gsScope._gsDefine("plugins.CSSPlugin", ["plugins.TweenPlugin", "TweenLite"], function(n, t) {
            var ft, pt, e, ni, r = function() {
                    n.call(this, "css");
                    this._overwriteProps.length = 0;
                    this.setRatio = r.prototype.setRatio
                },
                br = _gsScope._gsDefine.globals,
                c = {},
                i = r.prototype = new n("css"),
                vr, vt, yr, pr, wr, yt;
            i.constructor = r;
            r.version = "1.16.1";
            r.API = 2;
            r.defaultTransformPerspective = 0;
            r.defaultSkewType = "compensated";
            i = "px";
            r.suffixMap = {
                top: i,
                right: i,
                bottom: i,
                left: i,
                width: i,
                height: i,
                fontSize: i,
                padding: i,
                margin: i,
                perspective: i,
                lineHeight: ""
            };
            var ti, pi, wt, ii, wi, nt, bt = /(?:\d|\-\d|\.\d|\-\.\d)+/g,
                bi = /(?:\d|\-\d|\.\d|\-\.\d|\+=\d|\-=\d|\+=.\d|\-=\.\d)+/g,
                ri = /(?:\+=|\-=|\-|\b)[\d\-\.]+[a-zA-Z0-9]*(?:%|\b)/gi,
                ui = /(?![+-]?\d*\.?\d+|[+-]|e[+-]\d+)[^0-9]/g,
                kt = /(?:\d|\-|\+|=|#|\.)*/g,
                fi = /opacity *= *([^)]*)/i,
                kr = /opacity:([^;]*)/i,
                dr = /alpha\(opacity *=.+?\)/i,
                ki = /^(rgb|hsl)/,
                di = /([A-Z])/g,
                gi = /-([a-z])/gi,
                gr = /(^(?:url\(\"|url\())|(?:(\"\))$|\)$)/gi,
                nr = function(n, t) {
                    return t.toUpperCase()
                },
                nu = /(?:Left|Right|Width)/i,
                tu = /(M11|M12|M21|M22)=[\d\-\.e]+/gi,
                iu = /progid\:DXImageTransform\.Microsoft\.Matrix\(.+?\)/i,
                y = /,(?=[^\)]*(?:\(|$))/gi,
                k = Math.PI / 180,
                tt = 180 / Math.PI,
                dt = {},
                l = document,
                ei = function(n) {
                    return l.createElementNS ? l.createElementNS("http://www.w3.org/1999/xhtml", n) : l.createElement(n)
                },
                d = ei("div"),
                oi = ei("img"),
                p = r._internals = {
                    _specialProps: c
                },
                w = navigator.userAgent,
                it = function() {
                    var t = w.indexOf("Android"),
                        n = ei("a");
                    return wt = -1 !== w.indexOf("Safari") && -1 === w.indexOf("Chrome") && (-1 === t || Number(w.substr(t + 8, 1)) > 3), wi = wt && 6 > Number(w.substr(w.indexOf("Version/") + 8, 1)), ii = -1 !== w.indexOf("Firefox"), (/MSIE ([0-9]{1,}[\.0-9]{0,})/.exec(w) || /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/.exec(w)) && (nt = parseFloat(RegExp.$1)), n ? (n.style.cssText = "top:1px;opacity:.55;", /^0.55/.test(n.style.opacity)) : !1
                }(),
                tr = function(n) {
                    return fi.test("string" == typeof n ? n : (n.currentStyle ? n.currentStyle.filter : n.style.filter) || "") ? parseFloat(RegExp.$1) / 100 : 1
                },
                ir = function(n) {
                    window.console && console.log(n)
                },
                rr = "",
                si = "",
                et = function(n, t) {
                    t = t || d;
                    var r, i, u = t.style;
                    if (void 0 !== u[n]) return n;
                    for (n = n.charAt(0).toUpperCase() + n.substr(1), r = ["O", "Moz", "ms", "Ms", "Webkit"], i = 5; --i > -1 && void 0 === u[r[i] + n];);
                    return i >= 0 ? (si = 3 === i ? "ms" : r[i], rr = "-" + si.toLowerCase() + "-", si + n) : null
                },
                ot = l.defaultView ? l.defaultView.getComputedStyle : function() {},
                u = r.getStyle = function(n, t, i, r, u) {
                    var f;
                    return it || "opacity" !== t ? (!r && n.style[t] ? f = n.style[t] : (i = i || ot(n)) ? f = i[t] || i.getPropertyValue(t) || i.getPropertyValue(t.replace(di, "-$1").toLowerCase()) : n.currentStyle && (f = n.currentStyle[t]), null == u || f && "none" !== f && "auto" !== f && "auto auto" !== f ? f : u) : tr(n)
                },
                b = p.convertToPixels = function(n, i, f, e, o) {
                    if ("px" === e || !e) return f;
                    if ("auto" === e || !f) return 0;
                    var s, h, v, a = nu.test(i),
                        c = n,
                        y = d.style,
                        p = 0 > f;
                    if (p && (f = -f), "%" === e && -1 !== i.indexOf("border")) s = f / 100 * (a ? n.clientWidth : n.clientHeight);
                    else {
                        if (y.cssText = "border:0 solid red;position:" + u(n, "position") + ";line-height:0;", "%" !== e && c.appendChild) y[a ? "borderLeftWidth" : "borderTopWidth"] = f + e;
                        else {
                            if (c = n.parentNode || l.body, h = c._gsCache, v = t.ticker.frame, h && a && h.time === v) return h.width * f / 100;
                            y[a ? "width" : "height"] = f + e
                        }
                        c.appendChild(d);
                        s = parseFloat(d[a ? "offsetWidth" : "offsetHeight"]);
                        c.removeChild(d);
                        a && "%" === e && r.cacheWidths !== !1 && (h = c._gsCache = c._gsCache || {}, h.time = v, h.width = 100 * (s / f));
                        0 !== s || o || (s = b(n, i, f, e, !0))
                    }
                    return p ? -s : s
                },
                ur = p.calculateOffset = function(n, t, i) {
                    if ("absolute" !== u(n, "position", i)) return 0;
                    var r = "left" === t ? "Left" : "Top",
                        f = u(n, "margin" + r, i);
                    return n["offset" + r] - (b(n, t, parseFloat(f), f.replace(kt, "")) || 0)
                },
                st = function(n, t) {
                    var r, u, f, i = {};
                    if (t = t || ot(n, null))
                        if (r = t.length)
                            for (; --r > -1;) f = t[r], (-1 === f.indexOf("-transform") || hr === f) && (i[f.replace(gi, nr)] = t.getPropertyValue(f));
                        else
                            for (r in t)(-1 === r.indexOf("Transform") || s === r) && (i[r] = t[r]);
                    else if (t = n.currentStyle || n.style)
                        for (r in t) "string" == typeof r && void 0 === i[r] && (i[r.replace(gi, nr)] = t[r]);
                    return it || (i.opacity = tr(n)), u = at(n, t, !1), i.rotation = u.rotation, i.skewX = u.skewX, i.scaleX = u.scaleX, i.scaleY = u.scaleY, i.x = u.x, i.y = u.y, v && (i.z = u.z, i.rotationX = u.rotationX, i.rotationY = u.rotationY, i.scaleZ = u.scaleZ), i.filters && delete i.filters, i
                },
                hi = function(n, t, i, r, u) {
                    var e, f, o, s = {},
                        h = n.style;
                    for (f in i) "cssText" !== f && "length" !== f && isNaN(f) && (t[f] !== (e = i[f]) || u && u[f]) && -1 === f.indexOf("Origin") && ("number" == typeof e || "string" == typeof e) && (s[f] = "auto" !== e || "left" !== f && "top" !== f ? "" !== e && "auto" !== e && "none" !== e || "string" != typeof t[f] || "" === t[f].replace(ui, "") ? e : 0 : ur(n, f), void 0 !== h[f] && (o = new vi(h, f, h[f], o)));
                    if (r)
                        for (f in r) "className" !== f && (s[f] = r[f]);
                    return {
                        difs: s,
                        firstMPT: o
                    }
                },
                ru = {
                    width: ["Left", "Right"],
                    height: ["Top", "Bottom"]
                },
                uu = ["marginLeft", "marginRight", "marginTop", "marginBottom"],
                fu = function(n, t, i) {
                    var r = parseFloat("width" === t ? n.offsetWidth : n.offsetHeight),
                        f = ru[t],
                        e = f.length;
                    for (i = i || ot(n, null); --e > -1;) r -= parseFloat(u(n, "padding" + f[e], i, !0)) || 0, r -= parseFloat(u(n, "border" + f[e] + "Width", i, !0)) || 0;
                    return r
                },
                ht = function(n, t) {
                    (null == n || "" === n || "auto" === n || "auto auto" === n) && (n = "0 0");
                    var u = n.split(" "),
                        i = -1 !== n.indexOf("left") ? "0%" : -1 !== n.indexOf("right") ? "100%" : u[0],
                        r = -1 !== n.indexOf("top") ? "0%" : -1 !== n.indexOf("bottom") ? "100%" : u[1];
                    return null == r ? r = "center" === i ? "50%" : "0" : "center" === r && (r = "50%"), ("center" === i || isNaN(parseFloat(i)) && -1 === (i + "").indexOf("=")) && (i = "50%"), n = i + " " + r + (u.length > 2 ? " " + u[2] : ""), t && (t.oxp = -1 !== i.indexOf("%"), t.oyp = -1 !== r.indexOf("%"), t.oxr = "=" === i.charAt(1), t.oyr = "=" === r.charAt(1), t.ox = parseFloat(i.replace(ui, "")), t.oy = parseFloat(r.replace(ui, "")), t.v = n), t || n
                },
                fr = function(n, t) {
                    return "string" == typeof n && "=" === n.charAt(1) ? parseInt(n.charAt(0) + "1", 10) * parseFloat(n.substr(2)) : parseFloat(n) - parseFloat(t)
                },
                a = function(n, t) {
                    return null == n ? t : "string" == typeof n && "=" === n.charAt(1) ? parseInt(n.charAt(0) + "1", 10) * parseFloat(n.substr(2)) + t : parseFloat(n)
                },
                ct = function(n, t, i, r) {
                    var f, o, u, e, s, h = 1e-6;
                    return null == n ? e = t : "number" == typeof n ? e = n : (f = 360, o = n.split("_"), s = "=" === n.charAt(1), u = (s ? parseInt(n.charAt(0) + "1", 10) * parseFloat(o[0].substr(2)) : parseFloat(o[0])) * (-1 === n.indexOf("rad") ? 1 : tt) - (s ? 0 : t), o.length && (r && (r[i] = t + u), -1 !== n.indexOf("short") && (u %= f, u !== u % (f / 2) && (u = 0 > u ? u + f : u - f)), -1 !== n.indexOf("_cw") && 0 > u ? u = (u + 9999999999 * f) % f - (0 | u / f) * f : -1 !== n.indexOf("ccw") && u > 0 && (u = (u - 9999999999 * f) % f - (0 | u / f) * f)), e = t + u), h > e && e > -h && (e = 0), e
                },
                rt = {
                    aqua: [0, 255, 255],
                    lime: [0, 255, 0],
                    silver: [192, 192, 192],
                    black: [0, 0, 0],
                    maroon: [128, 0, 0],
                    teal: [0, 128, 128],
                    blue: [0, 0, 255],
                    navy: [0, 0, 128],
                    white: [255, 255, 255],
                    fuchsia: [255, 0, 255],
                    olive: [128, 128, 0],
                    yellow: [255, 255, 0],
                    orange: [255, 165, 0],
                    gray: [128, 128, 128],
                    purple: [128, 0, 128],
                    green: [0, 128, 0],
                    red: [255, 0, 0],
                    pink: [255, 192, 203],
                    cyan: [0, 255, 255],
                    transparent: [255, 255, 255, 0]
                },
                ci = function(n, t, i) {
                    return n = 0 > n ? n + 1 : n > 1 ? n - 1 : n, 0 | 255 * (1 > 6 * n ? t + 6 * (i - t) * n : .5 > n ? i : 2 > 3 * n ? t + 6 * (i - t) * (2 / 3 - n) : t) + .5
                },
                li = r.parseColor = function(n) {
                    var i, t, e, u, f, r;
                    return n && "" !== n ? "number" == typeof n ? [n >> 16, 255 & n >> 8, 255 & n] : ("," === n.charAt(n.length - 1) && (n = n.substr(0, n.length - 1)), rt[n] ? rt[n] : "#" === n.charAt(0) ? (4 === n.length && (i = n.charAt(1), t = n.charAt(2), e = n.charAt(3), n = "#" + i + i + t + t + e + e), n = parseInt(n.substr(1), 16), [n >> 16, 255 & n >> 8, 255 & n]) : "hsl" === n.substr(0, 3) ? (n = n.match(bt), u = Number(n[0]) % 360 / 360, f = Number(n[1]) / 100, r = Number(n[2]) / 100, t = .5 >= r ? r * (f + 1) : r + f - r * f, i = 2 * r - t, n.length > 3 && (n[3] = Number(n[3])), n[0] = ci(u + 1 / 3, i, t), n[1] = ci(u, i, t), n[2] = ci(u - 1 / 3, i, t), n) : (n = n.match(bt) || rt.transparent, n[0] = Number(n[0]), n[1] = Number(n[1]), n[2] = Number(n[2]), n.length > 3 && (n[3] = Number(n[3])), n)) : rt.black
                },
                ut = "(?:\\b(?:(?:rgb|rgba|hsl|hsla)\\(.+?\\))|\\B#.+?\\b";
            for (i in rt) ut += "|" + i + "\\b";
            ut = RegExp(ut + ")", "gi");
            var er = function(n, t, i, r) {
                    if (null == n) return function(n) {
                        return n
                    };
                    var e, s = t ? (n.match(ut) || [""])[0] : "",
                        f = n.split(s).join("").match(ri) || [],
                        h = n.substr(0, n.indexOf(f[0])),
                        c = ")" === n.charAt(n.length - 1) ? ")" : "",
                        o = -1 !== n.indexOf(" ") ? " " : ",",
                        u = f.length,
                        l = u > 0 ? f[0].replace(bt, "") : "";
                    return u ? e = t ? function(n) {
                        var p, a, t, v;
                        if ("number" == typeof n) n += l;
                        else if (r && y.test(n)) {
                            for (v = n.replace(y, "|").split("|"), t = 0; v.length > t; t++) v[t] = e(v[t]);
                            return v.join(",")
                        }
                        if (p = (n.match(ut) || [s])[0], a = n.split(p).join("").match(ri) || [], t = a.length, u > t--)
                            for (; u > ++t;) a[t] = i ? a[0 | (t - 1) / 2] : f[t];
                        return h + a.join(o) + o + p + c + (-1 !== n.indexOf("inset") ? " inset" : "")
                    } : function(n) {
                        var s, a, t;
                        if ("number" == typeof n) n += l;
                        else if (r && y.test(n)) {
                            for (a = n.replace(y, "|").split("|"), t = 0; a.length > t; t++) a[t] = e(a[t]);
                            return a.join(",")
                        }
                        if (s = n.match(ri) || [], t = s.length, u > t--)
                            for (; u > ++t;) s[t] = i ? s[0 | (t - 1) / 2] : f[t];
                        return h + s.join(o) + c
                    } : function(n) {
                        return n
                    }
                },
                ai = function(n) {
                    return n = n.split(","),
                        function(t, i, r, u, f, e, o) {
                            var s, h = (i + "").split(" ");
                            for (o = {}, s = 0; 4 > s; s++) o[n[s]] = h[s] = h[s] || h[(s - 1) / 2 >> 0];
                            return u.parse(t, o, f, e)
                        }
                },
                vi = (p._setPluginRatio = function(n) {
                    this.plugin.setRatio(n);
                    for (var r, t, u, e, f = this.data, o = f.proxy, i = f.firstMPT, s = 1e-6; i;) r = o[i.v], i.r ? r = Math.round(r) : s > r && r > -s && (r = 0), i.t[i.p] = r, i = i._next;
                    if (f.autoRotate && (f.autoRotate.rotation = o.rotation), 1 === n)
                        for (i = f.firstMPT; i;) {
                            if (t = i.t, t.type) {
                                if (1 === t.type) {
                                    for (e = t.xs0 + t.s + t.xs1, u = 1; t.l > u; u++) e += t["xn" + u] + t["xs" + (u + 1)];
                                    t.e = e
                                }
                            } else t.e = t.s + t.xs0;
                            i = i._next
                        }
                }, function(n, t, i, r, u) {
                    this.t = n;
                    this.p = t;
                    this.v = i;
                    this.r = u;
                    r && (r._prev = this, this._next = r)
                }),
                o = (p._parseToProxy = function(n, t, i, r, u, f) {
                    var c, e, o, s, v, h = r,
                        l = {},
                        a = {},
                        y = i._transform,
                        p = dt;
                    for (i._transform = null, dt = t, r = v = i.parse(n, t, r, u), dt = p, f && (i._transform = y, h && (h._prev = null, h._prev && (h._prev._next = null))); r && r !== h;) {
                        if (1 >= r.type && (e = r.p, a[e] = r.s + r.c, l[e] = r.s, f || (s = new vi(r, "s", e, s, r.r), r.c = 0), 1 === r.type))
                            for (c = r.l; --c > 0;) o = "xn" + c, e = r.p + "_" + o, a[e] = r.data[o], l[e] = r[o], f || (s = new vi(r, o, e, s, r.rxp[o]));
                        r = r._next
                    }
                    return {
                        proxy: l,
                        end: a,
                        firstMPT: s,
                        pt: v
                    }
                }, p.CSSPropTween = function(n, t, i, r, u, f, e, s, h, c, l) {
                    this.t = n;
                    this.p = t;
                    this.s = i;
                    this.c = r;
                    this.n = e || t;
                    n instanceof o || ni.push(this.n);
                    this.r = s;
                    this.type = f || 0;
                    h && (this.pr = h, ft = !0);
                    this.b = void 0 === c ? i : c;
                    this.e = void 0 === l ? i + r : l;
                    u && (this._next = u, u._prev = this)
                }),
                gt = r.parseComplex = function(n, t, i, r, u, f, e, s, h, c) {
                    i = i || f || "";
                    e = new o(n, t, 0, 0, e, c ? 2 : 1, null, !1, s, i, r);
                    r += "";
                    var v, w, b, l, a, ut, ft, nt, k, et, d, g, p = i.split(", ").join(",").split(" "),
                        tt = r.split(", ").join(",").split(" "),
                        ot = p.length,
                        st = ti !== !1;
                    for ((-1 !== r.indexOf(",") || -1 !== i.indexOf(",")) && (p = p.join(" ").replace(y, ", ").split(" "), tt = tt.join(" ").replace(y, ", ").split(" "), ot = p.length), ot !== tt.length && (p = (f || "").split(" "), ot = p.length), e.plugin = h, e.setRatio = c, v = 0; ot > v; v++)
                        if (l = p[v], a = tt[v], nt = parseFloat(l), nt || 0 === nt) e.appendXtra("", nt, fr(a, nt), a.replace(bi, ""), st && -1 !== a.indexOf("px"), !0);
                        else if (u && ("#" === l.charAt(0) || rt[l] || ki.test(l))) g = "," === a.charAt(a.length - 1) ? ")," : ")", l = li(l), a = li(a), k = l.length + a.length > 6, k && !it && 0 === a[3] ? (e["xs" + e.l] += e.l ? " transparent" : "transparent", e.e = e.e.split(tt[v]).join("transparent")) : (it || (k = !1), e.appendXtra(k ? "rgba(" : "rgb(", l[0], a[0] - l[0], ",", !0, !0).appendXtra("", l[1], a[1] - l[1], ",", !0).appendXtra("", l[2], a[2] - l[2], k ? "," : g, !0), k && (l = 4 > l.length ? 1 : l[3], e.appendXtra("", l, (4 > a.length ? 1 : a[3]) - l, g, !1)));
                    else if (ut = l.match(bt)) {
                        if (ft = a.match(bi), !ft || ft.length !== ut.length) return e;
                        for (b = 0, w = 0; ut.length > w; w++) d = ut[w], et = l.indexOf(d, b), e.appendXtra(l.substr(b, et - b), Number(d), fr(ft[w], d), "", st && "px" === l.substr(et + d.length, 2), 0 === w), b = et + d.length;
                        e["xs" + e.l] += l.substr(b)
                    } else e["xs" + e.l] += e.l ? " " + l : l;
                    if (-1 !== r.indexOf("=") && e.data) {
                        for (g = e.xs0 + e.data.s, v = 1; e.l > v; v++) g += e["xs" + v] + e.data["xn" + v];
                        e.e = g + e["xs" + v]
                    }
                    return e.l || (e.type = -1, e.xs0 = e.e), e.xfirst || e
                },
                h = 9;
            for (i = o.prototype, i.l = i.pr = 0; --h > 0;) i["xn" + h] = 0, i["xs" + h] = "";
            i.xs0 = "";
            i._next = i._prev = i.xfirst = i.data = i.plugin = i.setRatio = i.rxp = null;
            i.appendXtra = function(n, t, i, r, u, f) {
                var e = this,
                    s = e.l;
                return e["xs" + s] += f && s ? " " + n : n || "", i || 0 === s || e.plugin ? (e.l++, e.type = e.setRatio ? 2 : 1, e["xs" + e.l] = r || "", s > 0 ? (e.data["xn" + s] = t + i, e.rxp["xn" + s] = u, e["xn" + s] = t, e.plugin || (e.xfirst = new o(e, "xn" + s, t, i, e.xfirst || e, 0, e.n, u, e.pr), e.xfirst.xs0 = 0), e) : (e.data = {
                    s: t + i
                }, e.rxp = {}, e.s = t, e.c = i, e.r = u, e)) : (e["xs" + s] += t + (r || ""), e)
            };
            var or = function(n, t) {
                    t = t || {};
                    this.p = t.prefix ? et(n) || n : n;
                    c[n] = c[this.p] = this;
                    this.format = t.formatter || er(t.defaultValue, t.color, t.collapsible, t.multi);
                    t.parser && (this.parse = t.parser);
                    this.clrs = t.color;
                    this.multi = t.multi;
                    this.keyword = t.keyword;
                    this.dflt = t.defaultValue;
                    this.pr = t.priority || 0
                },
                f = p._registerComplexSpecialProp = function(n, t, i) {
                    "object" != typeof t && (t = {
                        parser: i
                    });
                    var r, e, u = n.split(","),
                        f = t.defaultValue;
                    for (i = i || [f], r = 0; u.length > r; r++) t.prefix = 0 === r && t.prefix, t.defaultValue = i[r] || f, e = new or(u[r], t)
                },
                eu = function(n) {
                    if (!c[n]) {
                        var t = n.charAt(0).toUpperCase() + n.substr(1) + "Plugin";
                        f(n, {
                            parser: function(n, i, r, u, f, e, o) {
                                var s = br.com.greensock.plugins[t];
                                return s ? (s._cssRegister(), c[r].parse(n, i, r, u, f, e, o)) : (ir("Error: " + t + " js file not loaded."), f)
                            }
                        })
                    }
                };
            i = or.prototype;
            i.parseComplex = function(n, t, i, r, u, f) {
                var e, o, s, a, c, l, h = this.keyword;
                if (this.multi && (y.test(i) || y.test(t) ? (o = t.replace(y, "|").split("|"), s = i.replace(y, "|").split("|")) : h && (o = [t], s = [i])), s) {
                    for (a = s.length > o.length ? s.length : o.length, e = 0; a > e; e++) t = o[e] = o[e] || this.dflt, i = s[e] = s[e] || this.dflt, h && (c = t.indexOf(h), l = i.indexOf(h), c !== l && (-1 === l ? o[e] = o[e].split(h).join("") : -1 === c && (o[e] += " " + h)));
                    t = o.join(", ");
                    i = s.join(", ")
                }
                return gt(n, this.p, t, i, this.clrs, this.dflt, r, this.pr, u, f)
            };
            i.parse = function(n, t, i, r, f, o) {
                return this.parseComplex(n.style, this.format(u(n, this.p, e, !1, this.dflt)), this.format(t), f, o)
            };
            r.registerSpecialProp = function(n, t, i) {
                f(n, {
                    parser: function(n, r, u, f, e, s) {
                        var h = new o(n, u, 0, 0, e, 2, u, !1, i);
                        return h.plugin = s, h.setRatio = t(n, r, f._tween, u), h
                    },
                    priority: i
                })
            };
            r.useSVGTransformAttr = wt;
            var g, sr = "scaleX,scaleY,scaleZ,x,y,z,skewX,skewY,rotation,rotationX,rotationY,perspective,xPercent,yPercent".split(","),
                s = et("transform"),
                hr = rr + "transform",
                lt = et("transformOrigin"),
                v = null !== et("perspective"),
                yi = p.Transform = function() {
                    this.perspective = parseFloat(r.defaultTransformPerspective) || 0;
                    this.force3D = r.defaultForce3D !== !1 && v ? r.defaultForce3D || "auto" : !1
                },
                ou = window.SVGElement,
                cr = function(n, t, i) {
                    var r, u = l.createElementNS("http://www.w3.org/2000/svg", n),
                        f = /([a-z])([A-Z])/g;
                    for (r in i) u.setAttributeNS(null, r.replace(f, "$1-$2").toLowerCase(), i[r]);
                    return t.appendChild(u), u
                },
                lr = l.documentElement,
                su = function() {
                    var t, n, r, i = nt || /Android/i.test(w) && !window.chrome;
                    return l.createElementNS && !i && (t = cr("svg", lr), n = cr("rect", t, {
                        width: 100,
                        height: 50,
                        x: 100
                    }), r = n.getBoundingClientRect().width, n.style[lt] = "50% 50%", n.style[s] = "scaleX(0.5)", i = r === n.getBoundingClientRect().width && !(ii && v), lr.removeChild(t)), i
                }(),
                ar = function(n, t, i, r) {
                    var u, f;
                    r && (f = r.split(" ")).length || (u = n.getBBox(), t = ht(t).split(" "), f = [(-1 !== t[0].indexOf("%") ? parseFloat(t[0]) / 100 * u.width : parseFloat(t[0])) + u.x, (-1 !== t[1].indexOf("%") ? parseFloat(t[1]) / 100 * u.height : parseFloat(t[1])) + u.y]);
                    i.xOrigin = parseFloat(f[0]);
                    i.yOrigin = parseFloat(f[1]);
                    n.setAttribute("data-svg-origin", f.join(" "))
                },
                at = p.getTransform = function(n, t, i, f) {
                    if (n._gsTransform && i && !f) return n._gsTransform;
                    var et, a, h, d, at, ti, ii, ri, ot, ft, o = i ? n._gsTransform || new yi : new yi,
                        si = 0 > o.scaleX,
                        ui = 2e-5,
                        nt = 1e5,
                        hi = v ? parseFloat(u(n, lt, t, !1, "0 0 0").split(" ")[2]) || o.zOrigin || 0 : 0,
                        ci = parseFloat(r.defaultTransformPerspective) || 0;
                    if (s ? a = u(n, hr, t, !0) : n.currentStyle && (a = n.currentStyle.filter.match(tu), a = a && 4 === a.length ? [a[0].substr(4), Number(a[2].substr(4)), Number(a[1].substr(4)), a[3].substr(4), o.x || 0, o.y || 0].join(",") : ""), et = !a || "none" === a || "matrix(1, 0, 0, 1, 0, 0)" === a, o.svg = !!(ou && "function" == typeof n.getBBox && n.getCTM && (!n.parentNode || n.parentNode.getBBox && n.parentNode.getCTM)), o.svg && (et && -1 !== (n.style[s] + "").indexOf("matrix") && (a = n.style[s], et = !1), ar(n, u(n, lt, e, !1, "50% 50%") + "", o, n.getAttribute("data-svg-origin")), g = r.useSVGTransformAttr || su, h = n.getAttribute("transform"), et && h && -1 !== h.indexOf("matrix") && (a = h, et = 0)), !et) {
                        for (h = (a || "").match(/(?:\-|\b)[\d\-\.e]+\b/gi) || [], d = h.length; --d > -1;) at = Number(h[d]), h[d] = (ti = at - (at |= 0)) ? (0 | ti * nt + (0 > ti ? -.5 : .5)) / nt + at : at;
                        if (16 === h.length) {
                            var dt, st, gt, c, l, it = h[0],
                                w = h[1],
                                ni = h[2],
                                li = h[3],
                                yt = h[4],
                                b = h[5],
                                rt = h[6],
                                ai = h[7],
                                ht = h[8],
                                k = h[9],
                                p = h[10],
                                fi = h[12],
                                ei = h[13],
                                ct = h[14],
                                ut = h[11],
                                y = Math.atan2(rt, p);
                            o.zOrigin && (ct = -o.zOrigin, fi = ht * ct - h[12], ei = k * ct - h[13], ct = p * ct + o.zOrigin - h[14]);
                            o.rotationX = y * tt;
                            y && (c = Math.cos(-y), l = Math.sin(-y), dt = yt * c + ht * l, st = b * c + k * l, gt = rt * c + p * l, ht = yt * -l + ht * c, k = b * -l + k * c, p = rt * -l + p * c, ut = ai * -l + ut * c, yt = dt, b = st, rt = gt);
                            y = Math.atan2(ht, p);
                            o.rotationY = y * tt;
                            y && (c = Math.cos(-y), l = Math.sin(-y), dt = it * c - ht * l, st = w * c - k * l, gt = ni * c - p * l, k = w * l + k * c, p = ni * l + p * c, ut = li * l + ut * c, it = dt, w = st, ni = gt);
                            y = Math.atan2(w, it);
                            o.rotation = y * tt;
                            y && (c = Math.cos(-y), l = Math.sin(-y), it = it * c + yt * l, st = w * c + b * l, b = w * -l + b * c, rt = ni * -l + rt * c, w = st);
                            o.rotationX && Math.abs(o.rotationX) + Math.abs(o.rotation) > 359.9 && (o.rotationX = o.rotation = 0, o.rotationY += 180);
                            o.scaleX = (0 | Math.sqrt(it * it + w * w) * nt + .5) / nt;
                            o.scaleY = (0 | Math.sqrt(b * b + k * k) * nt + .5) / nt;
                            o.scaleZ = (0 | Math.sqrt(rt * rt + p * p) * nt + .5) / nt;
                            o.skewX = 0;
                            o.perspective = ut ? 1 / (0 > ut ? -ut : ut) : 0;
                            o.x = fi;
                            o.y = ei;
                            o.z = ct;
                            o.svg && (o.x -= o.xOrigin - (o.xOrigin * it - o.yOrigin * yt), o.y -= o.yOrigin - (o.yOrigin * w - o.xOrigin * b))
                        } else if (!(v && !f && h.length && o.x === h[4] && o.y === h[5] && (o.rotationX || o.rotationY) || void 0 !== o.x && "none" === u(n, "display", t))) {
                            var oi = h.length >= 6,
                                pt = oi ? h[0] : 1,
                                wt = h[1] || 0,
                                bt = h[2] || 0,
                                kt = oi ? h[3] : 1;
                            o.x = h[4] || 0;
                            o.y = h[5] || 0;
                            ii = Math.sqrt(pt * pt + wt * wt);
                            ri = Math.sqrt(kt * kt + bt * bt);
                            ot = pt || wt ? Math.atan2(wt, pt) * tt : o.rotation || 0;
                            ft = bt || kt ? Math.atan2(bt, kt) * tt + ot : o.skewX || 0;
                            Math.abs(ft) > 90 && 270 > Math.abs(ft) && (si ? (ii *= -1, ft += 0 >= ot ? 180 : -180, ot += 0 >= ot ? 180 : -180) : (ri *= -1, ft += 0 >= ft ? 180 : -180));
                            o.scaleX = ii;
                            o.scaleY = ri;
                            o.rotation = ot;
                            o.skewX = ft;
                            v && (o.rotationX = o.rotationY = o.z = 0, o.perspective = ci, o.scaleZ = 1);
                            o.svg && (o.x -= o.xOrigin - (o.xOrigin * pt - o.yOrigin * wt), o.y -= o.yOrigin - (o.yOrigin * kt - o.xOrigin * bt))
                        }
                        o.zOrigin = hi;
                        for (d in o) ui > o[d] && o[d] > -ui && (o[d] = 0)
                    }
                    return i && (n._gsTransform = o, o.svg && (g && n.style[s] ? vt(n.style, s) : !g && n.getAttribute("transform") && n.removeAttribute("transform"))), o
                },
                hu = function(n) {
                    var o, y, t = this.data,
                        tt = -t.rotation * k,
                        ft = tt + t.skewX * k,
                        e = 1e5,
                        s = (0 | Math.cos(tt) * t.scaleX * e) / e,
                        u = (0 | Math.sin(tt) * t.scaleX * e) / e,
                        f = (0 | Math.sin(ft) * -t.scaleY * e) / e,
                        c = (0 | Math.cos(ft) * t.scaleY * e) / e,
                        d = this.t.style,
                        g = this.t.currentStyle,
                        w, v, et, ot;
                    if (g) {
                        y = u;
                        u = -f;
                        f = -y;
                        o = g.filter;
                        d.filter = "";
                        var i, r, l = this.t.offsetWidth,
                            a = this.t.offsetHeight,
                            it = "absolute" !== g.position,
                            p = "progid:DXImageTransform.Microsoft.Matrix(M11=" + s + ", M12=" + u + ", M21=" + f + ", M22=" + c,
                            rt = t.x + l * t.xPercent / 100,
                            ut = t.y + a * t.yPercent / 100;
                        if (null != t.ox && (i = (t.oxp ? .01 * l * t.ox : t.ox) - l / 2, r = (t.oyp ? .01 * a * t.oy : t.oy) - a / 2, rt += i - (i * s + r * u), ut += r - (i * f + r * c)), it ? (i = l / 2, r = a / 2, p += ", Dx=" + (i - (i * s + r * u) + rt) + ", Dy=" + (r - (i * f + r * c) + ut) + ")") : p += ", sizingMethod='auto expand')", d.filter = -1 !== o.indexOf("DXImageTransform.Microsoft.Matrix(") ? o.replace(iu, p) : p + " " + o, (0 === n || 1 === n) && 1 === s && 0 === u && 0 === f && 1 === c && (it && -1 === p.indexOf("Dx=0, Dy=0") || fi.test(o) && 100 !== parseFloat(RegExp.$1) || -1 === o.indexOf("gradient(" && o.indexOf("Alpha")) && d.removeAttribute("filter")), !it)
                            for (ot = 8 > nt ? 1 : -1, i = t.ieOffsetX || 0, r = t.ieOffsetY || 0, t.ieOffsetX = Math.round((l - ((0 > s ? -s : s) * l + (0 > u ? -u : u) * a)) / 2 + rt), t.ieOffsetY = Math.round((a - ((0 > c ? -c : c) * a + (0 > f ? -f : f) * l)) / 2 + ut), h = 0; 4 > h; h++) v = uu[h], w = g[v], y = -1 !== w.indexOf("px") ? parseFloat(w) : b(this.t, v, parseFloat(w), w.replace(kt, "")) || 0, et = y !== t[v] ? 2 > h ? -t.ieOffsetX : -t.ieOffsetY : 2 > h ? i - t.ieOffsetX : r - t.ieOffsetY, d[v] = (t[v] = Math.round(y - et * (0 === h || 2 === h ? 1 : ot))) + "px"
                    }
                },
                cu = p.set3DTransformRatio = p.setTransformRatio = function(n) {
                    var b, h, tt, d, c, it, lt, at, rt, vt, yt, ut, ht, i, u, f, l, dt, nt, e, o, pt, ft, t = this.data,
                        wt = this.t.style,
                        r = t.rotation,
                        bt = t.rotationX,
                        kt = t.rotationY,
                        a = t.scaleX,
                        y = t.scaleY,
                        et = t.scaleZ,
                        p = t.x,
                        w = t.y,
                        ot = t.z,
                        ct = t.svg,
                        st = t.perspective,
                        gt = t.force3D;
                    if (!(((1 !== n && 0 !== n || "auto" !== gt || this.tween._totalTime !== this.tween._totalDuration && this.tween._totalTime) && gt || ot || st || kt || bt) && (!g || !ct) && v)) return r || t.skewX || ct ? (r *= k, pt = t.skewX * k, ft = 1e5, b = Math.cos(r) * a, d = Math.sin(r) * a, h = Math.sin(r - pt) * -y, c = Math.cos(r - pt) * y, pt && "simple" === t.skewType && (l = Math.tan(pt), l = Math.sqrt(1 + l * l), h *= l, c *= l), ct && (p += t.xOrigin - (t.xOrigin * b + t.yOrigin * h), w += t.yOrigin - (t.xOrigin * d + t.yOrigin * c), i = 1e-6, i > p && p > -i && (p = 0), i > w && w > -i && (w = 0)), nt = (0 | b * ft) / ft + "," + (0 | d * ft) / ft + "," + (0 | h * ft) / ft + "," + (0 | c * ft) / ft + "," + p + "," + w + ")", ct && g ? this.t.setAttribute("transform", "matrix(" + nt) : wt[s] = (t.xPercent || t.yPercent ? "translate(" + t.xPercent + "%," + t.yPercent + "%) matrix(" : "matrix(") + nt) : wt[s] = (t.xPercent || t.yPercent ? "translate(" + t.xPercent + "%," + t.yPercent + "%) matrix(" : "matrix(") + a + ",0,0," + y + "," + p + "," + w + ")", void 0;
                    if (ii && (i = .0001, i > a && a > -i && (a = et = 2e-5), i > y && y > -i && (y = et = 2e-5), !st || t.z || t.rotationX || t.rotationY || (st = 0)), r || t.skewX) r *= k, u = b = Math.cos(r), f = d = Math.sin(r), t.skewX && (r -= t.skewX * k, u = Math.cos(r), f = Math.sin(r), "simple" === t.skewType && (l = Math.tan(t.skewX * k), l = Math.sqrt(1 + l * l), u *= l, f *= l)), h = -f, c = u;
                    else {
                        if (!(kt || bt || 1 !== et || st || ct)) return wt[s] = (t.xPercent || t.yPercent ? "translate(" + t.xPercent + "%," + t.yPercent + "%) translate3d(" : "translate3d(") + p + "px," + w + "px," + ot + "px)" + (1 !== a || 1 !== y ? " scale(" + a + "," + y + ")" : ""), void 0;
                        b = c = 1;
                        h = d = 0
                    }
                    rt = 1;
                    tt = it = lt = at = vt = yt = 0;
                    ut = st ? -1 / st : 0;
                    ht = t.zOrigin;
                    i = 1e-6;
                    e = ",";
                    o = "0";
                    r = kt * k;
                    r && (u = Math.cos(r), f = Math.sin(r), lt = -f, vt = ut * -f, tt = b * f, it = d * f, rt = u, ut *= u, b *= u, d *= u);
                    r = bt * k;
                    r && (u = Math.cos(r), f = Math.sin(r), l = h * u + tt * f, dt = c * u + it * f, at = rt * f, yt = ut * f, tt = h * -f + tt * u, it = c * -f + it * u, rt *= u, ut *= u, h = l, c = dt);
                    1 !== et && (tt *= et, it *= et, rt *= et, ut *= et);
                    1 !== y && (h *= y, c *= y, at *= y, yt *= y);
                    1 !== a && (b *= a, d *= a, lt *= a, vt *= a);
                    (ht || ct) && (ht && (p += tt * -ht, w += it * -ht, ot += rt * -ht + ht), ct && (p += t.xOrigin - (t.xOrigin * b + t.yOrigin * h), w += t.yOrigin - (t.xOrigin * d + t.yOrigin * c)), i > p && p > -i && (p = o), i > w && w > -i && (w = o), i > ot && ot > -i && (ot = 0));
                    nt = t.xPercent || t.yPercent ? "translate(" + t.xPercent + "%," + t.yPercent + "%) matrix3d(" : "matrix3d(";
                    nt += (i > b && b > -i ? o : b) + e + (i > d && d > -i ? o : d) + e + (i > lt && lt > -i ? o : lt);
                    nt += e + (i > vt && vt > -i ? o : vt) + e + (i > h && h > -i ? o : h) + e + (i > c && c > -i ? o : c);
                    bt || kt ? (nt += e + (i > at && at > -i ? o : at) + e + (i > yt && yt > -i ? o : yt) + e + (i > tt && tt > -i ? o : tt), nt += e + (i > it && it > -i ? o : it) + e + (i > rt && rt > -i ? o : rt) + e + (i > ut && ut > -i ? o : ut) + e) : nt += ",0,0,0,0,1,0,";
                    nt += p + e + w + e + ot + e + (st ? 1 + -ot / st : 1) + ")";
                    wt[s] = nt
                };
            for (i = yi.prototype, i.x = i.y = i.z = i.skewX = i.skewY = i.rotation = i.rotationX = i.rotationY = i.zOrigin = i.xPercent = i.yPercent = 0, i.scaleX = i.scaleY = i.scaleZ = 1, f("transform,scale,scaleX,scaleY,scaleZ,x,y,z,rotation,rotationX,rotationY,rotationZ,skewX,skewY,shortRotation,shortRotationX,shortRotationY,shortRotationZ,transformOrigin,svgOrigin,transformPerspective,directionalRotation,parseTransform,force3D,skewType,xPercent,yPercent", {
                    parser: function(n, t, i, f, h, c, y) {
                        if (f._lastParsedTransform === y) return h;
                        f._lastParsedTransform = y;
                        var b, ft, nt, k, rt, ut, tt, w = f._transform = at(n, e, !0, y.parseTransform),
                            et = n.style,
                            ot = 1e-6,
                            st = sr.length,
                            p = y,
                            it = {};
                        if ("string" == typeof p.transform && s) nt = d.style, nt[s] = p.transform, nt.display = "block", nt.position = "absolute", l.body.appendChild(d), b = at(d, null, !1), l.body.removeChild(d);
                        else if ("object" == typeof p) {
                            if (b = {
                                    scaleX: a(null != p.scaleX ? p.scaleX : p.scale, w.scaleX),
                                    scaleY: a(null != p.scaleY ? p.scaleY : p.scale, w.scaleY),
                                    scaleZ: a(p.scaleZ, w.scaleZ),
                                    x: a(p.x, w.x),
                                    y: a(p.y, w.y),
                                    z: a(p.z, w.z),
                                    xPercent: a(p.xPercent, w.xPercent),
                                    yPercent: a(p.yPercent, w.yPercent),
                                    perspective: a(p.transformPerspective, w.perspective)
                                }, tt = p.directionalRotation, null != tt)
                                if ("object" == typeof tt)
                                    for (nt in tt) p[nt] = tt[nt];
                                else p.rotation = tt;
                                "string" == typeof p.x && -1 !== p.x.indexOf("%") && (b.x = 0, b.xPercent = a(p.x, w.xPercent));
                            "string" == typeof p.y && -1 !== p.y.indexOf("%") && (b.y = 0, b.yPercent = a(p.y, w.yPercent));
                            b.rotation = ct("rotation" in p ? p.rotation : "shortRotation" in p ? p.shortRotation + "_short" : "rotationZ" in p ? p.rotationZ : w.rotation, w.rotation, "rotation", it);
                            v && (b.rotationX = ct("rotationX" in p ? p.rotationX : "shortRotationX" in p ? p.shortRotationX + "_short" : w.rotationX || 0, w.rotationX, "rotationX", it), b.rotationY = ct("rotationY" in p ? p.rotationY : "shortRotationY" in p ? p.shortRotationY + "_short" : w.rotationY || 0, w.rotationY, "rotationY", it));
                            b.skewX = null == p.skewX ? w.skewX : ct(p.skewX, w.skewX);
                            b.skewY = null == p.skewY ? w.skewY : ct(p.skewY, w.skewY);
                            (ft = b.skewY - w.skewY) && (b.skewX += ft, b.rotation += ft)
                        }
                        for (v && null != p.force3D && (w.force3D = p.force3D, ut = !0), w.skewType = p.skewType || w.skewType || r.defaultSkewType, rt = w.force3D || w.z || w.rotationX || w.rotationY || b.z || b.rotationX || b.rotationY || b.perspective, rt || null == p.scale || (b.scaleZ = 1); --st > -1;) i = sr[st], k = b[i] - w[i], (k > ot || -ot > k || null != p[i] || null != dt[i]) && (ut = !0, h = new o(w, i, w[i], k, h), i in it && (h.e = it[i]), h.xs0 = 0, h.plugin = c, f._overwriteProps.push(h.n));
                        return k = p.transformOrigin, w.svg && (k || p.svgOrigin) && (ar(n, ht(k), b, p.svgOrigin), h = new o(w, "xOrigin", w.xOrigin, b.xOrigin - w.xOrigin, h, -1, "transformOrigin"), h.b = w.xOrigin, h.e = h.xs0 = b.xOrigin, h = new o(w, "yOrigin", w.yOrigin, b.yOrigin - w.yOrigin, h, -1, "transformOrigin"), h.b = w.yOrigin, h.e = h.xs0 = b.yOrigin, k = g ? null : "0px 0px"), (k || v && rt && w.zOrigin) && (s ? (ut = !0, i = lt, k = (k || u(n, i, e, !1, "50% 50%")) + "", h = new o(et, i, 0, 0, h, -1, "transformOrigin"), h.b = et[i], h.plugin = c, v ? (nt = w.zOrigin, k = k.split(" "), w.zOrigin = (k.length > 2 && (0 === nt || "0px" !== k[2]) ? parseFloat(k[2]) : nt) || 0, h.xs0 = h.e = k[0] + " " + (k[1] || "50%") + " 0px", h = new o(w, "zOrigin", 0, 0, h, -1, h.n), h.b = nt, h.xs0 = h.e = w.zOrigin) : h.xs0 = h.e = k) : ht(k + "", w)), ut && (f._transformType = w.svg && g || !rt && 3 !== this._transformType ? 2 : 3), h
                    },
                    prefix: !0
                }), f("boxShadow", {
                    defaultValue: "0px 0px 0px 0px #999",
                    prefix: !0,
                    color: !0,
                    multi: !0,
                    keyword: "inset"
                }), f("borderRadius", {
                    defaultValue: "0px",
                    parser: function(n, t, i, r, f) {
                        t = this.format(t);
                        var tt, l, d, h, o, s, p, a, it, rt, c, v, g, w, k, nt, y = ["borderTopLeftRadius", "borderTopRightRadius", "borderBottomRightRadius", "borderBottomLeftRadius"],
                            ut = n.style;
                        for (it = parseFloat(n.offsetWidth), rt = parseFloat(n.offsetHeight), tt = t.split(" "), l = 0; y.length > l; l++) this.p.indexOf("border") && (y[l] = et(y[l])), o = h = u(n, y[l], e, !1, "0px"), -1 !== o.indexOf(" ") && (h = o.split(" "), o = h[0], h = h[1]), s = d = tt[l], p = parseFloat(o), v = o.substr((p + "").length), g = "=" === s.charAt(1), g ? (a = parseInt(s.charAt(0) + "1", 10), s = s.substr(2), a *= parseFloat(s), c = s.substr((a + "").length - (0 > a ? 1 : 0)) || "") : (a = parseFloat(s), c = s.substr((a + "").length)), "" === c && (c = pt[i] || v), c !== v && (w = b(n, "borderLeft", p, v), k = b(n, "borderTop", p, v), "%" === c ? (o = 100 * (w / it) + "%", h = 100 * (k / rt) + "%") : "em" === c ? (nt = b(n, "borderLeft", 1, "em"), o = w / nt + "em", h = k / nt + "em") : (o = w + "px", h = k + "px"), g && (s = parseFloat(o) + a + c, d = parseFloat(h) + a + c)), f = gt(ut, y[l], o + " " + h, s + " " + d, !1, "0px", f);
                        return f
                    },
                    prefix: !0,
                    formatter: er("0px 0px 0px 0px", !1, !0)
                }), f("backgroundPosition", {
                    defaultValue: "0 0",
                    parser: function(n, t, i, r, f, o) {
                        var c, b, h, v, y, l, p = "background-position",
                            a = e || ot(n, null),
                            s = this.format((a ? nt ? a.getPropertyValue(p + "-x") + " " + a.getPropertyValue(p + "-y") : a.getPropertyValue(p) : n.currentStyle.backgroundPositionX + " " + n.currentStyle.backgroundPositionY) || "0 0"),
                            w = this.format(t);
                        if (-1 !== s.indexOf("%") != (-1 !== w.indexOf("%")) && (l = u(n, "backgroundImage").replace(gr, ""), l && "none" !== l)) {
                            for (c = s.split(" "), b = w.split(" "), oi.setAttribute("src", l), h = 2; --h > -1;) s = c[h], v = -1 !== s.indexOf("%"), v !== (-1 !== b[h].indexOf("%")) && (y = 0 === h ? n.offsetWidth - oi.width : n.offsetHeight - oi.height, c[h] = v ? parseFloat(s) / 100 * y + "px" : 100 * (parseFloat(s) / y) + "%");
                            s = c.join(" ")
                        }
                        return this.parseComplex(n.style, s, w, f, o)
                    },
                    formatter: ht
                }), f("backgroundSize", {
                    defaultValue: "0 0",
                    formatter: ht
                }), f("perspective", {
                    defaultValue: "0px",
                    prefix: !0
                }), f("perspectiveOrigin", {
                    defaultValue: "50% 50%",
                    prefix: !0
                }), f("transformStyle", {
                    prefix: !0
                }), f("backfaceVisibility", {
                    prefix: !0
                }), f("userSelect", {
                    prefix: !0
                }), f("margin", {
                    parser: ai("marginTop,marginRight,marginBottom,marginLeft")
                }), f("padding", {
                    parser: ai("paddingTop,paddingRight,paddingBottom,paddingLeft")
                }), f("clip", {
                    defaultValue: "rect(0px,0px,0px,0px)",
                    parser: function(n, t, i, r, f, o) {
                        var c, s, h;
                        return 9 > nt ? (s = n.currentStyle, h = 8 > nt ? " " : ",", c = "rect(" + s.clipTop + h + s.clipRight + h + s.clipBottom + h + s.clipLeft + ")", t = this.format(t).split(",").join(h)) : (c = this.format(u(n, this.p, e, !1, this.dflt)), t = this.format(t)), this.parseComplex(n.style, c, t, f, o)
                    }
                }), f("textShadow", {
                    defaultValue: "0px 0px 0px #999",
                    color: !0,
                    multi: !0
                }), f("autoRound,strictUnits", {
                    parser: function(n, t, i, r, u) {
                        return u
                    }
                }), f("border", {
                    defaultValue: "0px solid #000",
                    parser: function(n, t, i, r, f, o) {
                        return this.parseComplex(n.style, this.format(u(n, "borderTopWidth", e, !1, "0px") + " " + u(n, "borderTopStyle", e, !1, "solid") + " " + u(n, "borderTopColor", e, !1, "#000")), this.format(t), f, o)
                    },
                    color: !0,
                    formatter: function(n) {
                        var t = n.split(" ");
                        return t[0] + " " + (t[1] || "solid") + " " + (n.match(ut) || ["#000"])[0]
                    }
                }), f("borderWidth", {
                    parser: ai("borderTopWidth,borderRightWidth,borderBottomWidth,borderLeftWidth")
                }), f("float,cssFloat,styleFloat", {
                    parser: function(n, t, i, r, u) {
                        var f = n.style,
                            e = "cssFloat" in f ? "cssFloat" : "styleFloat";
                        return new o(f, e, 0, 0, u, -1, i, !1, 0, f[e], t)
                    }
                }), vr = function(n) {
                    var f, i = this.t,
                        t = i.filter || u(this.data, "filter") || "",
                        r = 0 | this.s + this.c * n;
                    100 === r && (-1 === t.indexOf("atrix(") && -1 === t.indexOf("radient(") && -1 === t.indexOf("oader(") ? (i.removeAttribute("filter"), f = !u(this.data, "filter")) : (i.filter = t.replace(dr, ""), f = !0));
                    f || (this.xn1 && (i.filter = t = t || "alpha(opacity=" + r + ")"), -1 === t.indexOf("pacity") ? 0 === r && this.xn1 || (i.filter = t + " alpha(opacity=" + r + ")") : i.filter = t.replace(fi, "opacity=" + r))
                }, f("opacity,alpha,autoAlpha", {
                    defaultValue: "1",
                    parser: function(n, t, i, r, f, s) {
                        var h = parseFloat(u(n, "opacity", e, !1, "1")),
                            c = n.style,
                            l = "autoAlpha" === i;
                        return "string" == typeof t && "=" === t.charAt(1) && (t = ("-" === t.charAt(0) ? -1 : 1) * parseFloat(t.substr(2)) + h), l && 1 === h && "hidden" === u(n, "visibility", e) && 0 !== t && (h = 0), it ? f = new o(c, "opacity", h, t - h, f) : (f = new o(c, "opacity", 100 * h, 100 * (t - h), f), f.xn1 = l ? 1 : 0, c.zoom = 1, f.type = 2, f.b = "alpha(opacity=" + f.s + ")", f.e = "alpha(opacity=" + (f.s + f.c) + ")", f.data = n, f.plugin = s, f.setRatio = vr), l && (f = new o(c, "visibility", 0, 0, f, -1, null, !1, 0, 0 !== h ? "inherit" : "hidden", 0 === t ? "hidden" : "inherit"), f.xs0 = "inherit", r._overwriteProps.push(f.n), r._overwriteProps.push(i)), f
                    }
                }), vt = function(n, t) {
                    t && (n.removeProperty ? (("ms" === t.substr(0, 2) || "webkit" === t.substr(0, 6)) && (t = "-" + t), n.removeProperty(t.replace(di, "-$1").toLowerCase())) : n.removeAttribute(t))
                }, yr = function(n) {
                    if (this.t._gsClassPT = this, 1 === n || 0 === n) {
                        this.t.setAttribute("class", 0 === n ? this.b : this.e);
                        for (var t = this.data, i = this.t.style; t;) t.v ? i[t.p] = t.v : vt(i, t.p), t = t._next;
                        1 === n && this.t._gsClassPT === this && (this.t._gsClassPT = null)
                    } else this.t.getAttribute("class") !== this.e && this.t.setAttribute("class", this.e)
                }, f("className", {
                    parser: function(n, t, i, r, u, f, s) {
                        var c, y, l, a, h, v = n.getAttribute("class") || "",
                            p = n.style.cssText;
                        if (u = r._classNamePT = new o(n, i, 0, 0, u, 2), u.setRatio = yr, u.pr = -11, ft = !0, u.b = v, y = st(n, e), l = n._gsClassPT) {
                            for (a = {}, h = l.data; h;) a[h.p] = 1, h = h._next;
                            l.setRatio(1)
                        }
                        return n._gsClassPT = u, u.e = "=" !== t.charAt(1) ? t : v.replace(RegExp("\\s*\\b" + t.substr(2) + "\\b"), "") + ("+" === t.charAt(0) ? " " + t.substr(2) : ""), n.setAttribute("class", u.e), c = hi(n, y, st(n), s, a), n.setAttribute("class", v), u.data = c.firstMPT, n.style.cssText = p, u = u.xfirst = r.parse(n, c.difs, u, f)
                    }
                }), pr = function(n) {
                    if ((1 === n || 0 === n) && this.data._totalTime === this.data._totalDuration && "isFromStart" !== this.data.data) {
                        var i, t, r, u, f, e = this.t.style,
                            o = c.transform.parse;
                        if ("all" === this.e) e.cssText = "", u = !0;
                        else
                            for (i = this.e.split(" ").join("").split(","), r = i.length; --r > -1;) t = i[r], c[t] && (c[t].parse === o ? u = !0 : t = "transformOrigin" === t ? lt : c[t].p), vt(e, t);
                        u && (vt(e, s), f = this.t._gsTransform, f && (f.svg && this.t.removeAttribute("data-svg-origin"), delete this.t._gsTransform))
                    }
                }, f("clearProps", {
                    parser: function(n, t, i, r, u) {
                        return u = new o(n, i, 0, 0, u, 2), u.setRatio = pr, u.e = t, u.pr = -10, u.data = r._tween, ft = !0, u
                    }
                }), i = "bezier,throwProps,physicsProps,physics2D".split(","), h = i.length; h--;) eu(i[h]);
            return i = r.prototype, i._firstPT = i._lastParsedTransform = i._transform = null, i._onInitTween = function(n, t, i) {
                if (!n.nodeType) return !1;
                this._target = n;
                this._tween = i;
                this._vars = t;
                ti = t.autoRound;
                ft = !1;
                pt = t.suffixMap || r.suffixMap;
                e = ot(n, "");
                ni = this._overwriteProps;
                var a, h, f, v, w, b, p, y, k, l = n.style;
                if (pi && "" === l.zIndex && (a = u(n, "zIndex", e), ("auto" === a || "" === a) && this._addLazySet(l, "zIndex", 0)), "string" == typeof t && (v = l.cssText, a = st(n, e), l.cssText = v + ";" + t, a = hi(n, a, st(n)).difs, !it && kr.test(t) && (a.opacity = parseFloat(RegExp.$1)), t = a, l.cssText = v), this._firstPT = h = t.className ? c.className.parse(n, t.className, "className", this, null, null, t) : this.parse(n, t, null), this._transformType) {
                    for (k = 3 === this._transformType, s ? wt && (pi = !0, "" === l.zIndex && (p = u(n, "zIndex", e), ("auto" === p || "" === p) && this._addLazySet(l, "zIndex", 0)), wi && this._addLazySet(l, "WebkitBackfaceVisibility", this._vars.WebkitBackfaceVisibility || (k ? "visible" : "hidden"))) : l.zoom = 1, f = h; f && f._next;) f = f._next;
                    y = new o(n, "transform", 0, 0, null, 2);
                    this._linkCSSP(y, null, f);
                    y.setRatio = s ? cu : hu;
                    y.data = this._transform || at(n, e, !0);
                    y.tween = i;
                    y.pr = -1;
                    ni.pop()
                }
                if (ft) {
                    for (; h;) {
                        for (b = h._next, f = v; f && f.pr > h.pr;) f = f._next;
                        (h._prev = f ? f._prev : w) ? h._prev._next = h: v = h;
                        (h._next = f) ? f._prev = h: w = h;
                        h = b
                    }
                    this._firstPT = v
                }
                return !0
            }, i.parse = function(n, t, i, r) {
                var f, d, h, l, v, s, y, a, p, w, k = n.style;
                for (f in t) s = t[f], d = c[f], d ? i = d.parse(n, s, f, this, i, r, t) : (v = u(n, f, e) + "", p = "string" == typeof s, "color" === f || "fill" === f || "stroke" === f || -1 !== f.indexOf("Color") || p && ki.test(s) ? (p || (s = li(s), s = (s.length > 3 ? "rgba(" : "rgb(") + s.join(",") + ")"), i = gt(k, f, v, s, !0, "transparent", i, 0, r)) : !p || -1 === s.indexOf(" ") && -1 === s.indexOf(",") ? (h = parseFloat(v), y = h || 0 === h ? v.substr((h + "").length) : "", ("" === v || "auto" === v) && ("width" === f || "height" === f ? (h = fu(n, f, e), y = "px") : "left" === f || "top" === f ? (h = ur(n, f, e), y = "px") : (h = "opacity" !== f ? 0 : 1, y = "")), w = p && "=" === s.charAt(1), w ? (l = parseInt(s.charAt(0) + "1", 10), s = s.substr(2), l *= parseFloat(s), a = s.replace(kt, "")) : (l = parseFloat(s), a = p ? s.replace(kt, "") : ""), "" === a && (a = f in pt ? pt[f] : y), s = l || 0 === l ? (w ? l + h : l) + a : t[f], y !== a && "" !== a && (l || 0 === l) && h && (h = b(n, f, h, y), "%" === a ? (h /= b(n, f, 100, "%") / 100, t.strictUnits !== !0 && (v = h + "%")) : "em" === a ? h /= b(n, f, 1, "em") : "px" !== a && (l = b(n, f, l, a), a = "px"), w && (l || 0 === l) && (s = l + h + a)), w && (l += h), !h && 0 !== h || !l && 0 !== l ? void 0 !== k[f] && (s || "NaN" != s + "" && null != s) ? (i = new o(k, f, l || h || 0, 0, i, -1, f, !1, 0, v, s), i.xs0 = "none" !== s || "display" !== f && -1 === f.indexOf("Style") ? s : v) : ir("invalid " + f + " tween value: " + t[f]) : (i = new o(k, f, h, l - h, i, 0, f, ti !== !1 && ("px" === a || "zIndex" === f), 0, v, s), i.xs0 = a)) : i = gt(k, f, v, s, !0, null, i, 0, r)), r && i && !i.plugin && (i.plugin = r);
                return i
            }, i.setRatio = function(n) {
                var i, u, r, t = this._firstPT,
                    f = 1e-6;
                if (1 !== n || this._tween._time !== this._tween._duration && 0 !== this._tween._time)
                    if (n || this._tween._time !== this._tween._duration && 0 !== this._tween._time || this._tween._rawPrevTime === -1e-6)
                        for (; t;) {
                            if (i = t.c * n + t.s, t.r ? i = Math.round(i) : f > i && i > -f && (i = 0), t.type)
                                if (1 === t.type)
                                    if (r = t.l, 2 === r) t.t[t.p] = t.xs0 + i + t.xs1 + t.xn1 + t.xs2;
                                    else if (3 === r) t.t[t.p] = t.xs0 + i + t.xs1 + t.xn1 + t.xs2 + t.xn2 + t.xs3;
                            else if (4 === r) t.t[t.p] = t.xs0 + i + t.xs1 + t.xn1 + t.xs2 + t.xn2 + t.xs3 + t.xn3 + t.xs4;
                            else if (5 === r) t.t[t.p] = t.xs0 + i + t.xs1 + t.xn1 + t.xs2 + t.xn2 + t.xs3 + t.xn3 + t.xs4 + t.xn4 + t.xs5;
                            else {
                                for (u = t.xs0 + i + t.xs1, r = 1; t.l > r; r++) u += t["xn" + r] + t["xs" + (r + 1)];
                                t.t[t.p] = u
                            } else -1 === t.type ? t.t[t.p] = t.xs0 : t.setRatio && t.setRatio(n);
                            else t.t[t.p] = i + t.xs0;
                            t = t._next
                        } else
                            for (; t;) 2 !== t.type ? t.t[t.p] = t.b : t.setRatio(n), t = t._next;
                    else
                        for (; t;) 2 !== t.type ? t.t[t.p] = t.e : t.setRatio(n), t = t._next
            }, i._enableTransforms = function(n) {
                this._transform = this._transform || at(this._target, e, !0);
                this._transformType = this._transform.svg && g || !n && 3 !== this._transformType ? 2 : 3
            }, wr = function() {
                this.t[this.p] = this.e;
                this.data._linkCSSP(this, this._next, null, !0)
            }, i._addLazySet = function(n, t, i) {
                var r = this._firstPT = new o(n, t, 0, 0, this._firstPT, 2);
                r.e = i;
                r.setRatio = wr;
                r.data = this
            }, i._linkCSSP = function(n, t, i, r) {
                return n && (t && (t._prev = n), n._next && (n._next._prev = n._prev), n._prev ? n._prev._next = n._next : this._firstPT === n && (this._firstPT = n._next, r = !0), i ? i._next = n : r || null !== this._firstPT || (this._firstPT = n), n._next = t, n._prev = i), n
            }, i._kill = function(t) {
                var i, f, r, u = t;
                if (t.autoAlpha || t.alpha) {
                    u = {};
                    for (f in t) u[f] = t[f];
                    u.opacity = 1;
                    u.autoAlpha && (u.visibility = 1)
                }
                return t.className && (i = this._classNamePT) && (r = i.xfirst, r && r._prev ? this._linkCSSP(r._prev, i._next, r._prev._prev) : r === this._firstPT && (this._firstPT = i._next), i._next && this._linkCSSP(i._next, i._next._next, r._prev), this._classNamePT = null), n.prototype._kill.call(this, u)
            }, yt = function(n, t, i) {
                var e, u, r, f;
                if (n.slice)
                    for (u = n.length; --u > -1;) yt(n[u], t, i);
                else
                    for (e = n.childNodes, u = e.length; --u > -1;) r = e[u], f = r.type, r.style && (t.push(st(r)), i && i.push(r)), 1 !== f && 9 !== f && 11 !== f || !r.childNodes.length || yt(r, t, i)
            }, r.cascadeTo = function(n, i, r) {
                var u, f, e, h, o = t.to(n, i, r),
                    l = [o],
                    c = [],
                    a = [],
                    s = [],
                    v = t._internals.reservedProps;
                for (n = o._targets || o.target, yt(n, c, s), o.render(i, !0, !0), yt(n, a), o.render(0, !0, !0), o._enabled(!0), u = s.length; --u > -1;)
                    if (f = hi(s[u], c[u], a[u]), f.firstMPT) {
                        f = f.difs;
                        for (e in r) v[e] && (f[e] = r[e]);
                        h = {};
                        for (e in f) h[e] = c[u][e];
                        l.push(t.fromTo(s[u], i, h, f))
                    }
                return l
            }, n.activate([r]), r
        }, !0),
        function() {
            var t = _gsScope._gsDefine.plugin({
                    propName: "roundProps",
                    priority: -1,
                    API: 2,
                    init: function(n, t, i) {
                        return this._tween = i, !0
                    }
                }),
                n = t.prototype;
            n._onInitAllProps = function() {
                for (var u, n, i, t = this._tween, f = t.vars.roundProps instanceof Array ? t.vars.roundProps : t.vars.roundProps.split(","), r = f.length, e = {}, o = t._propLookup.roundProps; --r > -1;) e[f[r]] = 1;
                for (r = f.length; --r > -1;)
                    for (u = f[r], n = t._firstPT; n;) i = n._next, n.pg ? n.t._roundProps(e, !0) : n.n === u && (this._add(n.t, u, n.s, n.c), i && (i._prev = n._prev), n._prev ? n._prev._next = i : t._firstPT === n && (t._firstPT = i), n._next = n._prev = null, t._propLookup[u] = o), n = i;
                return !1
            };
            n._add = function(n, t, i, r) {
                this._addTween(n, t, i, i + r, t, !0);
                this._overwriteProps.push(t)
            }
        }();
    _gsScope._gsDefine.plugin({
        propName: "attr",
        API: 2,
        version: "0.3.3",
        init: function(n, t) {
            var i, u, r;
            if ("function" != typeof n.setAttribute) return !1;
            this._target = n;
            this._proxy = {};
            this._start = {};
            this._end = {};
            for (i in t) this._start[i] = this._proxy[i] = u = n.getAttribute(i), r = this._addTween(this._proxy, i, parseFloat(u), t[i], i), this._end[i] = r ? r.s + r.c : t[i], this._overwriteProps.push(i);
            return !0
        },
        set: function(n) {
            this._super.setRatio.call(this, n);
            for (var t, i = this._overwriteProps, r = i.length, u = 1 === n ? this._end : n ? this._proxy : this._start; --r > -1;) t = i[r], this._target.setAttribute(t, u[t] + "")
        }
    });
    _gsScope._gsDefine.plugin({
        propName: "directionalRotation",
        version: "0.2.1",
        API: 2,
        init: function(n, t) {
            "object" != typeof t && (t = {
                rotation: t
            });
            this.finals = {};
            var r, f, e, s, i, o, u = t.useRadians === !0 ? 2 * Math.PI : 360,
                h = 1e-6;
            for (r in t) "useRadians" !== r && (o = (t[r] + "").split("_"), f = o[0], e = parseFloat("function" != typeof n[r] ? n[r] : n[r.indexOf("set") || "function" != typeof n["get" + r.substr(3)] ? r : "get" + r.substr(3)]()), s = this.finals[r] = "string" == typeof f && "=" === f.charAt(1) ? e + parseInt(f.charAt(0) + "1", 10) * Number(f.substr(2)) : Number(f) || 0, i = s - e, o.length && (f = o.join("_"), -1 !== f.indexOf("short") && (i %= u, i !== i % (u / 2) && (i = 0 > i ? i + u : i - u)), -1 !== f.indexOf("_cw") && 0 > i ? i = (i + 9999999999 * u) % u - (0 | i / u) * u : -1 !== f.indexOf("ccw") && i > 0 && (i = (i - 9999999999 * u) % u - (0 | i / u) * u)), (i > h || -h > i) && (this._addTween(n, r, e, e + i, r), this._overwriteProps.push(r)));
            return !0
        },
        set: function(n) {
            var t;
            if (1 !== n) this._super.setRatio.call(this, n);
            else
                for (t = this._firstPT; t;) t.f ? t.t[t.p](this.finals[t.p]) : t.t[t.p] = this.finals[t.p], t = t._next
        }
    })._autoCSS = !0;
    _gsScope._gsDefine("easing.Back", ["easing.Ease"], function(n) {
        var f, u, s, a = _gsScope.GreenSockGlobals || _gsScope,
            p = a.com.greensock,
            v = 2 * Math.PI,
            y = Math.PI / 2,
            r = p._class,
            t = function(t, i) {
                var u = r("easing." + t, function() {}, !0),
                    f = u.prototype = new n;
                return f.constructor = u, f.getRatio = i, u
            },
            h = n.register || function() {},
            e = function(n, t, i, u) {
                var f = r("easing." + n, {
                    easeOut: new t,
                    easeIn: new i,
                    easeInOut: new u
                }, !0);
                return h(f, n), f
            },
            c = function(n, t, i) {
                this.t = n;
                this.v = t;
                i && (this.next = i, i.prev = this, this.c = i.v - t, this.gap = i.t - n)
            },
            l = function(t, i) {
                var u = r("easing." + t, function(n) {
                        this._p1 = n || 0 === n ? n : 1.70158;
                        this._p2 = 1.525 * this._p1
                    }, !0),
                    f = u.prototype = new n;
                return f.constructor = u, f.getRatio = i, f.config = function(n) {
                    return new u(n)
                }, u
            },
            w = e("Back", l("BackOut", function(n) {
                return (n -= 1) * n * ((this._p1 + 1) * n + this._p1) + 1
            }), l("BackIn", function(n) {
                return n * n * ((this._p1 + 1) * n - this._p1)
            }), l("BackInOut", function(n) {
                return 1 > (n *= 2) ? .5 * n * n * ((this._p2 + 1) * n - this._p2) : .5 * ((n -= 2) * n * ((this._p2 + 1) * n + this._p2) + 2)
            })),
            o = r("easing.SlowMo", function(n, t, i) {
                t = t || 0 === t ? t : .7;
                null == n ? n = .7 : n > 1 && (n = 1);
                this._p = 1 !== n ? t : 0;
                this._p1 = (1 - n) / 2;
                this._p2 = n;
                this._p3 = this._p1 + this._p2;
                this._calcEnd = i === !0
            }, !0),
            i = o.prototype = new n;
        return i.constructor = o, i.getRatio = function(n) {
            var t = n + (.5 - n) * this._p;
            return this._p1 > n ? this._calcEnd ? 1 - (n = 1 - n / this._p1) * n : t - (n = 1 - n / this._p1) * n * n * n * t : n > this._p3 ? this._calcEnd ? 1 - (n = (n - this._p3) / this._p1) * n : t + (n - t) * (n = (n - this._p3) / this._p1) * n * n * n : this._calcEnd ? 1 : t
        }, o.ease = new o(.7, .7), i.config = o.config = function(n, t, i) {
            return new o(n, t, i)
        }, f = r("easing.SteppedEase", function(n) {
            n = n || 1;
            this._p1 = 1 / n;
            this._p2 = n + 1
        }, !0), i = f.prototype = new n, i.constructor = f, i.getRatio = function(n) {
            return 0 > n ? n = 0 : n >= 1 && (n = .999999999), (this._p2 * n >> 0) * this._p1
        }, i.config = f.config = function(n) {
            return new f(n)
        }, u = r("easing.RoughEase", function(t) {
            t = t || {};
            for (var i, r, u, f, h, e, l = t.taper || "none", a = [], w = 0, v = 0 | (t.points || 20), o = v, y = t.randomize !== !1, b = t.clamp === !0, p = t.template instanceof n ? t.template : null, s = "number" == typeof t.strength ? .4 * t.strength : .4; --o > -1;) i = y ? Math.random() : 1 / v * o, r = p ? p.getRatio(i) : i, "none" === l ? u = s : "out" === l ? (f = 1 - i, u = f * f * s) : "in" === l ? u = i * i * s : .5 > i ? (f = 2 * i, u = .5 * f * f * s) : (f = 2 * (1 - i), u = .5 * f * f * s), y ? r += Math.random() * u - .5 * u : o % 2 ? r += .5 * u : r -= .5 * u, b && (r > 1 ? r = 1 : 0 > r && (r = 0)), a[w++] = {
                x: i,
                y: r
            };
            for (a.sort(function(n, t) {
                    return n.x - t.x
                }), e = new c(1, 1, null), o = v; --o > -1;) h = a[o], e = new c(h.x, h.y, e);
            this._prev = new c(0, 0, 0 !== e.t ? e : e.next)
        }, !0), i = u.prototype = new n, i.constructor = u, i.getRatio = function(n) {
            var t = this._prev;
            if (n > t.t) {
                for (; t.next && n >= t.t;) t = t.next;
                t = t.prev
            } else
                for (; t.prev && t.t >= n;) t = t.prev;
            return this._prev = t, t.v + (n - t.t) / t.gap * t.c
        }, i.config = function(n) {
            return new u(n)
        }, u.ease = new u, e("Bounce", t("BounceOut", function(n) {
            return 1 / 2.75 > n ? 7.5625 * n * n : 2 / 2.75 > n ? 7.5625 * (n -= 1.5 / 2.75) * n + .75 : 2.5 / 2.75 > n ? 7.5625 * (n -= 2.25 / 2.75) * n + .9375 : 7.5625 * (n -= 2.625 / 2.75) * n + .984375
        }), t("BounceIn", function(n) {
            return 1 / 2.75 > (n = 1 - n) ? 1 - 7.5625 * n * n : 2 / 2.75 > n ? 1 - (7.5625 * (n -= 1.5 / 2.75) * n + .75) : 2.5 / 2.75 > n ? 1 - (7.5625 * (n -= 2.25 / 2.75) * n + .9375) : 1 - (7.5625 * (n -= 2.625 / 2.75) * n + .984375)
        }), t("BounceInOut", function(n) {
            var t = .5 > n;
            return n = t ? 1 - 2 * n : 2 * n - 1, n = 1 / 2.75 > n ? 7.5625 * n * n : 2 / 2.75 > n ? 7.5625 * (n -= 1.5 / 2.75) * n + .75 : 2.5 / 2.75 > n ? 7.5625 * (n -= 2.25 / 2.75) * n + .9375 : 7.5625 * (n -= 2.625 / 2.75) * n + .984375, t ? .5 * (1 - n) : .5 * n + .5
        })), e("Circ", t("CircOut", function(n) {
            return Math.sqrt(1 - (n -= 1) * n)
        }), t("CircIn", function(n) {
            return -(Math.sqrt(1 - n * n) - 1)
        }), t("CircInOut", function(n) {
            return 1 > (n *= 2) ? -.5 * (Math.sqrt(1 - n * n) - 1) : .5 * (Math.sqrt(1 - (n -= 2) * n) + 1)
        })), s = function(t, i, u) {
            var f = r("easing." + t, function(n, t) {
                    this._p1 = n >= 1 ? n : 1;
                    this._p2 = (t || u) / (1 > n ? n : 1);
                    this._p3 = this._p2 / v * (Math.asin(1 / this._p1) || 0);
                    this._p2 = v / this._p2
                }, !0),
                e = f.prototype = new n;
            return e.constructor = f, e.getRatio = i, e.config = function(n, t) {
                return new f(n, t)
            }, f
        }, e("Elastic", s("ElasticOut", function(n) {
            return this._p1 * Math.pow(2, -10 * n) * Math.sin((n - this._p3) * this._p2) + 1
        }, .3), s("ElasticIn", function(n) {
            return -(this._p1 * Math.pow(2, 10 * (n -= 1)) * Math.sin((n - this._p3) * this._p2))
        }, .3), s("ElasticInOut", function(n) {
            return 1 > (n *= 2) ? -.5 * this._p1 * Math.pow(2, 10 * (n -= 1)) * Math.sin((n - this._p3) * this._p2) : .5 * this._p1 * Math.pow(2, -10 * (n -= 1)) * Math.sin((n - this._p3) * this._p2) + 1
        }, .45)), e("Expo", t("ExpoOut", function(n) {
            return 1 - Math.pow(2, -10 * n)
        }), t("ExpoIn", function(n) {
            return Math.pow(2, 10 * (n - 1)) - .001
        }), t("ExpoInOut", function(n) {
            return 1 > (n *= 2) ? .5 * Math.pow(2, 10 * (n - 1)) : .5 * (2 - Math.pow(2, -10 * (n - 1)))
        })), e("Sine", t("SineOut", function(n) {
            return Math.sin(n * y)
        }), t("SineIn", function(n) {
            return -Math.cos(n * y) + 1
        }), t("SineInOut", function(n) {
            return -.5 * (Math.cos(Math.PI * n) - 1)
        })), r("easing.EaseLookup", {
            find: function(t) {
                return n.map[t]
            }
        }, !0), h(a.SlowMo, "SlowMo", "ease,"), h(u, "RoughEase", "ease,"), h(f, "SteppedEase", "ease,"), w
    }, !0)
});
_gsScope._gsDefine && _gsScope._gsQueue.pop()(),
    function(n, t) {
        "use strict";
        var ot = n.GreenSockGlobals = n.GreenSockGlobals || n,
            lt, o, vt, ut, c;
        if (!ot.TweenLite) {
            var s, f, i, u, h, gt = function(n) {
                    for (var r = n.split("."), i = ot, t = 0; r.length > t; t++) i[r[t]] = i = i[r[t]] || {};
                    return i
                },
                v = gt("com.greensock"),
                e = 1e-10,
                ni = function(n) {
                    for (var i = [], r = n.length, t = 0; t !== r; i.push(n[t++]));
                    return i
                },
                ti = function() {},
                d = function() {
                    var n = Object.prototype.toString,
                        t = n.call([]);
                    return function(i) {
                        return null != i && (i instanceof Array || "object" == typeof i && !!i.push && n.call(i) === t)
                    }
                }(),
                g = {},
                ii = function(i, r, u, f) {
                    this.sc = g[i] ? g[i].sc : [];
                    g[i] = this;
                    this.gsClass = null;
                    this.func = u;
                    var e = [];
                    this.check = function(o) {
                        for (var c, l, a, h, s = r.length, v = s; --s > -1;)(c = g[r[s]] || new ii(r[s], [])).gsClass ? (e[s] = c.gsClass, v--) : o && c.sc.push(this);
                        if (0 === v && u)
                            for (l = ("com.greensock." + i).split("."), a = l.pop(), h = gt(l.join("."))[a] = this.gsClass = u.apply(u, e), f && (ot[a] = h, "function" == typeof define && define.amd ? define((n.GreenSockAMDPath ? n.GreenSockAMDPath + "/" : "") + i.split(".").pop(), [], function() {
                                    return h
                                }) : i === t && "undefined" != typeof module && module.exports && (module.exports = h)), s = 0; this.sc.length > s; s++) this.sc[s].check()
                    };
                    this.check(!0)
                },
                st = n._gsDefine = function(n, t, i, r) {
                    return new ii(n, t, i, r)
                },
                l = v._class = function(n, t, i) {
                    return t = t || function() {}, st(n, [], function() {
                        return t
                    }, i), t
                };
            st.globals = ot;
            var ri = [0, 0, 1, 1],
                ht = [],
                a = l("easing.Ease", function(n, t, i, r) {
                    this._func = n;
                    this._type = i || 0;
                    this._power = r || 0;
                    this._params = t ? ri.concat(t) : ri
                }, !0),
                nt = a.map = {},
                ct = a.register = function(n, t, i, r) {
                    for (var o, u, e, f, s = t.split(","), h = s.length, c = (i || "easeIn,easeOut,easeInOut").split(","); --h > -1;)
                        for (u = s[h], o = r ? l("easing." + u, null, !0) : v.easing[u] || {}, e = c.length; --e > -1;) f = c[e], nt[u + "." + f] = nt[f + u] = o[f] = n.getRatio ? n : n[f] || new n
                };
            for (i = a.prototype, i._calcEnd = !1, i.getRatio = function(n) {
                    if (this._func) return this._params[0] = n, this._func.apply(null, this._params);
                    var i = this._type,
                        r = this._power,
                        t = 1 === i ? 1 - n : 2 === i ? n : .5 > n ? 2 * n : 2 * (1 - n);
                    return 1 === r ? t *= t : 2 === r ? t *= t * t : 3 === r ? t *= t * t * t : 4 === r && (t *= t * t * t * t), 1 === i ? 1 - t : 2 === i ? t : .5 > n ? t / 2 : 1 - t / 2
                }, s = ["Linear", "Quad", "Cubic", "Quart", "Quint,Strong"], f = s.length; --f > -1;) i = s[f] + ",Power" + f, ct(new a(null, null, 1, f), i, "easeOut", !0), ct(new a(null, null, 2, f), i, "easeIn" + (0 === f ? ",easeNone" : "")), ct(new a(null, null, 3, f), i, "easeInOut");
            nt.linear = v.easing.Linear.easeIn;
            nt.swing = v.easing.Quad.easeInOut;
            lt = l("events.EventDispatcher", function(n) {
                this._listeners = {};
                this._eventTarget = n || this
            });
            i = lt.prototype;
            i.addEventListener = function(n, t, i, r, f) {
                f = f || 0;
                var s, o, e = this._listeners[n],
                    c = 0;
                for (null == e && (this._listeners[n] = e = []), o = e.length; --o > -1;) s = e[o], s.c === t && s.s === i ? e.splice(o, 1) : 0 === c && f > s.pr && (c = o + 1);
                e.splice(c, 0, {
                    c: t,
                    s: i,
                    up: r,
                    pr: f
                });
                this !== u || h || u.wake()
            };
            i.removeEventListener = function(n, t) {
                var i, r = this._listeners[n];
                if (r)
                    for (i = r.length; --i > -1;)
                        if (r[i].c === t) return r.splice(i, 1), void 0
            };
            i.dispatchEvent = function(n) {
                var r, i, t, u = this._listeners[n];
                if (u)
                    for (r = u.length, i = this._eventTarget; --r > -1;) t = u[r], t && (t.up ? t.c.call(t.s || i, {
                        type: n,
                        target: i
                    }) : t.c.call(t.s || i))
            };
            var tt = n.requestAnimationFrame,
                at = n.cancelAnimationFrame,
                it = Date.now || function() {
                    return (new Date).getTime()
                },
                rt = it();
            for (s = ["ms", "moz", "webkit", "o"], f = s.length; --f > -1 && !tt;) tt = n[s[f] + "RequestAnimationFrame"], at = n[s[f] + "CancelAnimationFrame"] || n[s[f] + "CancelRequestAnimationFrame"];
            l("Ticker", function(n, t) {
                var r, a, f, s, c, i = this,
                    y = it(),
                    o = t !== !1 && tt,
                    l = 500,
                    p = 33,
                    w = "tick",
                    v = function(n) {
                        var t, e, u = it() - rt;
                        u > l && (y += u - p);
                        rt += u;
                        i.time = (rt - y) / 1e3;
                        t = i.time - c;
                        (!r || t > 0 || n === !0) && (i.frame++, c += t + (t >= s ? .004 : s - t), e = !0);
                        n !== !0 && (f = a(v));
                        e && i.dispatchEvent(w)
                    };
                lt.call(i);
                i.time = i.frame = 0;
                i.tick = function() {
                    v(!0)
                };
                i.lagSmoothing = function(n, t) {
                    l = n || 1 / e;
                    p = Math.min(t, l, 0)
                };
                i.sleep = function() {
                    null != f && (o && at ? at(f) : clearTimeout(f), a = ti, f = null, i === u && (h = !1))
                };
                i.wake = function() {
                    null !== f ? i.sleep() : i.frame > 10 && (rt = it() - l + 5);
                    a = 0 === r ? ti : o && tt ? tt : function(n) {
                        return setTimeout(n, 0 | 1e3 * (c - i.time) + 1)
                    };
                    i === u && (h = !0);
                    v(2)
                };
                i.fps = function(n) {
                    return arguments.length ? (r = n, s = 1 / (r || 60), c = this.time + s, i.wake(), void 0) : r
                };
                i.useRAF = function(n) {
                    return arguments.length ? (i.sleep(), o = n, i.fps(r), void 0) : o
                };
                i.fps(n);
                setTimeout(function() {
                    o && 5 > i.frame && i.useRAF(!1)
                }, 1500)
            });
            i = v.Ticker.prototype = new v.events.EventDispatcher;
            i.constructor = v.Ticker;
            o = l("core.Animation", function(n, t) {
                if (this.vars = t = t || {}, this._duration = this._totalDuration = n || 0, this._delay = Number(t.delay) || 0, this._timeScale = 1, this._active = t.immediateRender === !0, this.data = t.data, this._reversed = t.reversed === !0, p) {
                    h || u.wake();
                    var i = this.vars.useFrames ? k : p;
                    i.add(this, i._time);
                    this.vars.paused && this.paused(!0)
                }
            });
            u = o.ticker = new v.Ticker;
            i = o.prototype;
            i._dirty = i._gc = i._initted = i._paused = !1;
            i._totalTime = i._time = 0;
            i._rawPrevTime = -1;
            i._next = i._last = i._onUpdate = i._timeline = i.timeline = null;
            i._paused = !1;
            vt = function() {
                h && it() - rt > 2e3 && u.wake();
                setTimeout(vt, 2e3)
            };
            vt();
            i.play = function(n, t) {
                return null != n && this.seek(n, t), this.reversed(!1).paused(!1)
            };
            i.pause = function(n, t) {
                return null != n && this.seek(n, t), this.paused(!0)
            };
            i.resume = function(n, t) {
                return null != n && this.seek(n, t), this.paused(!1)
            };
            i.seek = function(n, t) {
                return this.totalTime(Number(n), t !== !1)
            };
            i.restart = function(n, t) {
                return this.reversed(!1).paused(!1).totalTime(n ? -this._delay : 0, t !== !1, !0)
            };
            i.reverse = function(n, t) {
                return null != n && this.seek(n || this.totalDuration(), t), this.reversed(!0).paused(!1)
            };
            i.render = function() {};
            i.invalidate = function() {
                return this._time = this._totalTime = 0, this._initted = this._gc = !1, this._rawPrevTime = -1, (this._gc || !this.timeline) && this._enabled(!0), this
            };
            i.isActive = function() {
                var t, n = this._timeline,
                    i = this._startTime;
                return !n || !this._gc && !this._paused && n.isActive() && (t = n.rawTime()) >= i && i + this.totalDuration() / this._timeScale > t
            };
            i._enabled = function(n, t) {
                return h || u.wake(), this._gc = !n, this._active = this.isActive(), t !== !0 && (n && !this.timeline ? this._timeline.add(this, this._startTime - this._delay) : !n && this.timeline && this._timeline._remove(this, !0)), !1
            };
            i._kill = function() {
                return this._enabled(!1, !1)
            };
            i.kill = function(n, t) {
                return this._kill(n, t), this
            };
            i._uncache = function(n) {
                for (var t = n ? this : this.timeline; t;) t._dirty = !0, t = t.timeline;
                return this
            };
            i._swapSelfInParams = function(n) {
                for (var t = n.length, i = n.concat(); --t > -1;) "{self}" === n[t] && (i[t] = this);
                return i
            };
            i.eventCallback = function(n, t, i, r) {
                if ("on" === (n || "").substr(0, 2)) {
                    var u = this.vars;
                    if (1 === arguments.length) return u[n];
                    null == t ? delete u[n] : (u[n] = t, u[n + "Params"] = d(i) && -1 !== i.join("").indexOf("{self}") ? this._swapSelfInParams(i) : i, u[n + "Scope"] = r);
                    "onUpdate" === n && (this._onUpdate = t)
                }
                return this
            };
            i.delay = function(n) {
                return arguments.length ? (this._timeline.smoothChildTiming && this.startTime(this._startTime + n - this._delay), this._delay = n, this) : this._delay
            };
            i.duration = function(n) {
                return arguments.length ? (this._duration = this._totalDuration = n, this._uncache(!0), this._timeline.smoothChildTiming && this._time > 0 && this._time < this._duration && 0 !== n && this.totalTime(this._totalTime * (n / this._duration), !0), this) : (this._dirty = !1, this._duration)
            };
            i.totalDuration = function(n) {
                return this._dirty = !1, arguments.length ? this.duration(n) : this._totalDuration
            };
            i.time = function(n, t) {
                return arguments.length ? (this._dirty && this.totalDuration(), this.totalTime(n > this._duration ? this._duration : n, t)) : this._time
            };
            i.totalTime = function(n, t, i) {
                if (h || u.wake(), !arguments.length) return this._totalTime;
                if (this._timeline) {
                    if (0 > n && !i && (n += this.totalDuration()), this._timeline.smoothChildTiming) {
                        this._dirty && this.totalDuration();
                        var f = this._totalDuration,
                            r = this._timeline;
                        if (n > f && !i && (n = f), this._startTime = (this._paused ? this._pauseTime : r._time) - (this._reversed ? f - n : n) / this._timeScale, r._dirty || this._uncache(!1), r._timeline)
                            for (; r._timeline;) r._timeline._time !== (r._startTime + r._totalTime) / r._timeScale && r.totalTime(r._totalTime, !0), r = r._timeline
                    }
                    this._gc && this._enabled(!0, !1);
                    (this._totalTime !== n || 0 === this._duration) && (this.render(n, t, !1), y.length && ft())
                }
                return this
            };
            i.progress = i.totalProgress = function(n, t) {
                return arguments.length ? this.totalTime(this.duration() * n, t) : this._time / this.duration()
            };
            i.startTime = function(n) {
                return arguments.length ? (n !== this._startTime && (this._startTime = n, this.timeline && this.timeline._sortChildren && this.timeline.add(this, n - this._delay)), this) : this._startTime
            };
            i.endTime = function(n) {
                return this._startTime + (0 != n ? this.totalDuration() : this.duration()) / this._timeScale
            };
            i.timeScale = function(n) {
                if (!arguments.length) return this._timeScale;
                if (n = n || e, this._timeline && this._timeline.smoothChildTiming) {
                    var t = this._pauseTime,
                        i = t || 0 === t ? t : this._timeline.totalTime();
                    this._startTime = i - (i - this._startTime) * this._timeScale / n
                }
                return this._timeScale = n, this._uncache(!1)
            };
            i.reversed = function(n) {
                return arguments.length ? (n != this._reversed && (this._reversed = n, this.totalTime(this._timeline && !this._timeline.smoothChildTiming ? this.totalDuration() - this._totalTime : this._totalTime, !0)), this) : this._reversed
            };
            i.paused = function(n) {
                if (!arguments.length) return this._paused;
                var t, r, i = this._timeline;
                return n != this._paused && i && (h || n || u.wake(), t = i.rawTime(), r = t - this._pauseTime, !n && i.smoothChildTiming && (this._startTime += r, this._uncache(!1)), this._pauseTime = n ? t : null, this._paused = n, this._active = this.isActive(), !n && 0 !== r && this._initted && this.duration() && this.render(i.smoothChildTiming ? this._totalTime : (t - this._startTime) / this._timeScale, !0, !0)), this._gc && !n && this._enabled(!0, !1), this
            };
            ut = l("core.SimpleTimeline", function(n) {
                o.call(this, 0, n);
                this.autoRemoveChildren = this.smoothChildTiming = !0
            });
            i = ut.prototype = new o;
            i.constructor = ut;
            i.kill()._gc = !1;
            i._first = i._last = i._recent = null;
            i._sortChildren = !1;
            i.add = i.insert = function(n, t) {
                var i, r;
                if (n._startTime = Number(t || 0) + n._delay, n._paused && this !== n._timeline && (n._pauseTime = n._startTime + (this.rawTime() - n._startTime) / n._timeScale), n.timeline && n.timeline._remove(n, !0), n.timeline = n._timeline = this, n._gc && n._enabled(!0, !0), i = this._last, this._sortChildren)
                    for (r = n._startTime; i && i._startTime > r;) i = i._prev;
                return i ? (n._next = i._next, i._next = n) : (n._next = this._first, this._first = n), n._next ? n._next._prev = n : this._last = n, n._prev = i, this._recent = n, this._timeline && this._uncache(!0), this
            };
            i._remove = function(n, t) {
                return n.timeline === this && (t || n._enabled(!1, !0), n._prev ? n._prev._next = n._next : this._first === n && (this._first = n._next), n._next ? n._next._prev = n._prev : this._last === n && (this._last = n._prev), n._next = n._prev = n.timeline = null, n === this._recent && (this._recent = this._last), this._timeline && this._uncache(!0)), this
            };
            i.render = function(n, t, i) {
                var u, r = this._first;
                for (this._totalTime = this._time = this._rawPrevTime = n; r;) u = r._next, (r._active || n >= r._startTime && !r._paused) && (r._reversed ? r.render((r._dirty ? r.totalDuration() : r._totalDuration) - (n - r._startTime) * r._timeScale, t, i) : r.render((n - r._startTime) * r._timeScale, t, i)), r = u
            };
            i.rawTime = function() {
                return h || u.wake(), this._totalTime
            };
            var r = l("TweenLite", function(t, i, u) {
                    if (o.call(this, i, u), this.render = r.prototype.render, null == t) throw "Cannot tween a null target.";
                    this.target = t = "string" != typeof t ? t : r.selector(t) || t;
                    var s, f, h, l = t.jquery || t.length && t !== n && t[0] && (t[0] === n || t[0].nodeType && t[0].style && !t.nodeType),
                        c = this.vars.overwrite;
                    if (this._overwrite = c = null == c ? ui[r.defaultOverwrite] : "number" == typeof c ? c >> 0 : ui[c], (l || t instanceof Array || t.push && d(t)) && "number" != typeof t[0])
                        for (this._targets = h = ni(t), this._propLookup = [], this._siblings = [], s = 0; h.length > s; s++) f = h[s], f ? "string" != typeof f ? f.length && f !== n && f[0] && (f[0] === n || f[0].nodeType && f[0].style && !f.nodeType) ? (h.splice(s--, 1), this._targets = h = h.concat(ni(f))) : (this._siblings[s] = et(f, this, !1), 1 === c && this._siblings[s].length > 1 && dt(f, this, null, 1, this._siblings[s])) : (f = h[s--] = r.selector(f), "string" == typeof f && h.splice(s + 1, 1)) : h.splice(s--, 1);
                    else this._propLookup = {}, this._siblings = et(t, this, !1), 1 === c && this._siblings.length > 1 && dt(t, this, null, 1, this._siblings);
                    (this.vars.immediateRender || 0 === i && 0 === this._delay && this.vars.immediateRender !== !1) && (this._time = -e, this.render(-this._delay))
                }, !0),
                yt = function(t) {
                    return t && t.length && t !== n && t[0] && (t[0] === n || t[0].nodeType && t[0].style && !t.nodeType)
                },
                oi = function(n, t) {
                    var i, r = {};
                    for (i in n) bt[i] || i in t && "transform" !== i && "x" !== i && "y" !== i && "width" !== i && "height" !== i && "className" !== i && "border" !== i || !(!w[i] || w[i] && w[i]._autoCSS) || (r[i] = n[i], delete n[i]);
                    n.css = r
                };
            i = r.prototype = new o;
            i.constructor = r;
            i.kill()._gc = !1;
            i.ratio = 0;
            i._firstPT = i._targets = i._overwrittenProps = i._startAt = null;
            i._notifyPluginsOfEnabled = i._lazy = !1;
            r.version = "1.16.1";
            r.defaultEase = i._ease = new a(null, null, 1, 1);
            r.defaultOverwrite = "auto";
            r.ticker = u;
            r.autoSleep = 120;
            r.lagSmoothing = function(n, t) {
                u.lagSmoothing(n, t)
            };
            r.selector = n.$ || n.jQuery || function(t) {
                var i = n.$ || n.jQuery;
                return i ? (r.selector = i, i(t)) : "undefined" == typeof document ? t : document.querySelectorAll ? document.querySelectorAll(t) : document.getElementById("#" === t.charAt(0) ? t.substr(1) : t)
            };
            var y = [],
                pt = {},
                wt = r._internals = {
                    isArray: d,
                    isSelector: yt,
                    lazyTweens: y
                },
                w = r._plugins = {},
                b = wt.tweenLookup = {},
                si = 0,
                bt = wt.reservedProps = {
                    ease: 1,
                    delay: 1,
                    overwrite: 1,
                    onComplete: 1,
                    onCompleteParams: 1,
                    onCompleteScope: 1,
                    useFrames: 1,
                    runBackwards: 1,
                    startAt: 1,
                    onUpdate: 1,
                    onUpdateParams: 1,
                    onUpdateScope: 1,
                    onStart: 1,
                    onStartParams: 1,
                    onStartScope: 1,
                    onReverseComplete: 1,
                    onReverseCompleteParams: 1,
                    onReverseCompleteScope: 1,
                    onRepeat: 1,
                    onRepeatParams: 1,
                    onRepeatScope: 1,
                    easeParams: 1,
                    yoyo: 1,
                    immediateRender: 1,
                    repeat: 1,
                    repeatDelay: 1,
                    data: 1,
                    paused: 1,
                    reversed: 1,
                    autoCSS: 1,
                    lazy: 1,
                    onOverwrite: 1
                },
                ui = {
                    none: 0,
                    all: 1,
                    auto: 2,
                    concurrent: 3,
                    allOnStart: 4,
                    preexisting: 5,
                    "true": 1,
                    "false": 0
                },
                k = o._rootFramesTimeline = new ut,
                p = o._rootTimeline = new ut,
                fi = 30,
                ft = wt.lazyRender = function() {
                    var n, t = y.length;
                    for (pt = {}; --t > -1;) n = y[t], n && n._lazy !== !1 && (n.render(n._lazy[0], n._lazy[1], !0), n._lazy = !1);
                    y.length = 0
                };
            p._startTime = u.time;
            k._startTime = u.frame;
            p._active = k._active = !0;
            setTimeout(ft, 1);
            o._updateRoot = r.render = function() {
                var i, t, n;
                if (y.length && ft(), p.render((u.time - p._startTime) * p._timeScale, !1, !1), k.render((u.frame - k._startTime) * k._timeScale, !1, !1), y.length && ft(), u.frame >= fi) {
                    fi = u.frame + (parseInt(r.autoSleep, 10) || 120);
                    for (n in b) {
                        for (t = b[n].tweens, i = t.length; --i > -1;) t[i]._gc && t.splice(i, 1);
                        0 === t.length && delete b[n]
                    }
                    if (n = p._first, (!n || n._paused) && r.autoSleep && !k._first && 1 === u._listeners.tick.length) {
                        for (; n && n._paused;) n = n._next;
                        n || u.sleep()
                    }
                }
            };
            u.addEventListener("tick", o._updateRoot);
            var et = function(n, t, i) {
                    var r, f, u = n._gsTweenID;
                    if (b[u || (n._gsTweenID = u = "t" + si++)] || (b[u] = {
                            target: n,
                            tweens: []
                        }), t && (r = b[u].tweens, r[f = r.length] = t, i))
                        for (; --f > -1;) r[f] === t && r.splice(f, 1);
                    return b[u].tweens
                },
                kt = function(n, t, i, u) {
                    var e, o, f = n.vars.onOverwrite;
                    return f && (e = f(n, t, i, u)), f = r.onOverwrite, f && (o = f(n, t, i, u)), e !== !1 && o !== !1
                },
                dt = function(n, t, i, r, u) {
                    var o, s, f, y;
                    if (1 === r || r >= 4) {
                        for (y = u.length, o = 0; y > o; o++)
                            if ((f = u[o]) !== t) f._gc || kt(f, t) && f._enabled(!1, !1) && (s = !0);
                            else if (5 === r) break;
                        return s
                    }
                    var h, c = t._startTime + e,
                        l = [],
                        a = 0,
                        v = 0 === t._duration;
                    for (o = u.length; --o > -1;)(f = u[o]) === t || f._gc || f._paused || (f._timeline !== t._timeline ? (h = h || ei(t, 0, v), 0 === ei(f, h, v) && (l[a++] = f)) : c >= f._startTime && f._startTime + f.totalDuration() / f._timeScale > c && ((v || !f._initted) && 2e-10 >= c - f._startTime || (l[a++] = f)));
                    for (o = a; --o > -1;)
                        if (f = l[o], 2 === r && f._kill(i, n, t) && (s = !0), 2 !== r || !f._firstPT && f._initted) {
                            if (2 !== r && !kt(f, t)) continue;
                            f._enabled(!1, !1) && (s = !0)
                        }
                    return s
                },
                ei = function(n, t, i) {
                    for (var u = n._timeline, f = u._timeScale, r = n._startTime; u._timeline;) {
                        if (r += u._startTime, f *= u._timeScale, u._paused) return -100;
                        u = u._timeline
                    }
                    return r /= f, r > t ? r - t : i && r === t || !n._initted && 2 * e > r - t ? e : (r += n.totalDuration() / n._timeScale / f) > t + e ? 0 : r - t - e
                };
            if (i._init = function() {
                    var e, h, n, u, f, t = this.vars,
                        s = this._overwrittenProps,
                        c = this._duration,
                        o = !!t.immediateRender,
                        i = t.ease;
                    if (t.startAt) {
                        this._startAt && (this._startAt.render(-1, !0), this._startAt.kill());
                        f = {};
                        for (u in t.startAt) f[u] = t.startAt[u];
                        if (f.overwrite = !1, f.immediateRender = !0, f.lazy = o && t.lazy !== !1, f.startAt = f.delay = null, this._startAt = r.to(this.target, 0, f), o)
                            if (this._time > 0) this._startAt = null;
                            else if (0 !== c) return
                    } else if (t.runBackwards && 0 !== c)
                        if (this._startAt) this._startAt.render(-1, !0), this._startAt.kill(), this._startAt = null;
                        else {
                            0 !== this._time && (o = !1);
                            n = {};
                            for (u in t) bt[u] && "autoCSS" !== u || (n[u] = t[u]);
                            if (n.overwrite = 0, n.data = "isFromStart", n.lazy = o && t.lazy !== !1, n.immediateRender = o, this._startAt = r.to(this.target, 0, n), o) {
                                if (0 === this._time) return
                            } else this._startAt._init(), this._startAt._enabled(!1), this.vars.immediateRender && (this._startAt = null)
                        }
                    if (this._ease = i = i ? i instanceof a ? i : "function" == typeof i ? new a(i, t.easeParams) : nt[i] || r.defaultEase : r.defaultEase, t.easeParams instanceof Array && i.config && (this._ease = i.config.apply(i, t.easeParams)), this._easeType = this._ease._type, this._easePower = this._ease._power, this._firstPT = null, this._targets)
                        for (e = this._targets.length; --e > -1;) this._initProps(this._targets[e], this._propLookup[e] = {}, this._siblings[e], s ? s[e] : null) && (h = !0);
                    else h = this._initProps(this.target, this._propLookup, this._siblings, s);
                    if (h && r._onPluginEvent("_onInitAllProps", this), s && (this._firstPT || "function" != typeof this.target && this._enabled(!1, !1)), t.runBackwards)
                        for (n = this._firstPT; n;) n.s += n.c, n.c = -n.c, n = n._next;
                    this._onUpdate = t.onUpdate;
                    this._initted = !0
                }, i._initProps = function(t, i, r, u) {
                    var f, h, c, s, o, e;
                    if (null == t) return !1;
                    pt[t._gsTweenID] && ft();
                    this.vars.css || t.style && t !== n && t.nodeType && w.css && this.vars.autoCSS !== !1 && oi(this.vars, t);
                    for (f in this.vars) {
                        if (e = this.vars[f], bt[f]) e && (e instanceof Array || e.push && d(e)) && -1 !== e.join("").indexOf("{self}") && (this.vars[f] = e = this._swapSelfInParams(e, this));
                        else if (w[f] && (s = new w[f])._onInitTween(t, this.vars[f], this)) {
                            for (this._firstPT = o = {
                                    _next: this._firstPT,
                                    t: s,
                                    p: "setRatio",
                                    s: 0,
                                    c: 1,
                                    f: !0,
                                    n: f,
                                    pg: !0,
                                    pr: s._priority
                                }, h = s._overwriteProps.length; --h > -1;) i[s._overwriteProps[h]] = this._firstPT;
                            (s._priority || s._onInitAllProps) && (c = !0);
                            (s._onDisable || s._onEnable) && (this._notifyPluginsOfEnabled = !0)
                        } else this._firstPT = i[f] = o = {
                            _next: this._firstPT,
                            t: t,
                            p: f,
                            f: "function" == typeof t[f],
                            n: f,
                            pg: !1,
                            pr: 0
                        }, o.s = o.f ? t[f.indexOf("set") || "function" != typeof t["get" + f.substr(3)] ? f : "get" + f.substr(3)]() : parseFloat(t[f]), o.c = "string" == typeof e && "=" === e.charAt(1) ? parseInt(e.charAt(0) + "1", 10) * Number(e.substr(2)) : Number(e) - o.s || 0;
                        o && o._next && (o._next._prev = o)
                    }
                    return u && this._kill(u, t) ? this._initProps(t, i, r, u) : this._overwrite > 1 && this._firstPT && r.length > 1 && dt(t, this, i, this._overwrite, r) ? (this._kill(i, t), this._initProps(t, i, r, u)) : (this._firstPT && (this.vars.lazy !== !1 && this._duration || this.vars.lazy && !this._duration) && (pt[t._gsTweenID] = !0), c)
                }, i.render = function(n, t, i) {
                    var h, o, u, v, c = this._time,
                        f = this._duration,
                        s = this._rawPrevTime;
                    if (n >= f) this._totalTime = this._time = f, this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1, this._reversed || (h = !0, o = "onComplete", i = i || this._timeline.autoRemoveChildren), 0 === f && (this._initted || !this.vars.lazy || i) && (this._startTime === this._timeline._duration && (n = 0), (0 === n || 0 > s || s === e && "isPause" !== this.data) && s !== n && (i = !0, s > e && (o = "onReverseComplete")), this._rawPrevTime = v = !t || n || s === n ? n : e);
                    else if (1e-7 > n) this._totalTime = this._time = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0, (0 !== c || 0 === f && s > 0) && (o = "onReverseComplete", h = this._reversed), 0 > n && (this._active = !1, 0 === f && (this._initted || !this.vars.lazy || i) && (s >= 0 && (s !== e || "isPause" !== this.data) && (i = !0), this._rawPrevTime = v = !t || n || s === n ? n : e)), this._initted || (i = !0);
                    else if (this._totalTime = this._time = n, this._easeType) {
                        var r = n / f,
                            l = this._easeType,
                            a = this._easePower;
                        (1 === l || 3 === l && r >= .5) && (r = 1 - r);
                        3 === l && (r *= 2);
                        1 === a ? r *= r : 2 === a ? r *= r * r : 3 === a ? r *= r * r * r : 4 === a && (r *= r * r * r * r);
                        this.ratio = 1 === l ? 1 - r : 2 === l ? r : .5 > n / f ? r / 2 : 1 - r / 2
                    } else this.ratio = this._ease.getRatio(n / f);
                    if (this._time !== c || i) {
                        if (!this._initted) {
                            if (this._init(), !this._initted || this._gc) return;
                            if (!i && this._firstPT && (this.vars.lazy !== !1 && this._duration || this.vars.lazy && !this._duration)) return this._time = this._totalTime = c, this._rawPrevTime = s, y.push(this), this._lazy = [n, t], void 0;
                            this._time && !h ? this.ratio = this._ease.getRatio(this._time / f) : h && this._ease._calcEnd && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1))
                        }
                        for (this._lazy !== !1 && (this._lazy = !1), this._active || !this._paused && this._time !== c && n >= 0 && (this._active = !0), 0 === c && (this._startAt && (n >= 0 ? this._startAt.render(n, t, i) : o || (o = "_dummyGS")), this.vars.onStart && (0 !== this._time || 0 === f) && (t || this.vars.onStart.apply(this.vars.onStartScope || this, this.vars.onStartParams || ht))), u = this._firstPT; u;) u.f ? u.t[u.p](u.c * this.ratio + u.s) : u.t[u.p] = u.c * this.ratio + u.s, u = u._next;
                        this._onUpdate && (0 > n && this._startAt && n !== -.0001 && this._startAt.render(n, t, i), t || (this._time !== c || h) && this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || ht));
                        o && (!this._gc || i) && (0 > n && this._startAt && !this._onUpdate && n !== -.0001 && this._startAt.render(n, t, i), h && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !t && this.vars[o] && this.vars[o].apply(this.vars[o + "Scope"] || this, this.vars[o + "Params"] || ht), 0 === f && this._rawPrevTime === e && v !== e && (this._rawPrevTime = 0))
                    }
                }, i._kill = function(n, t, i) {
                    if ("all" === n && (n = null), null == n && (null == t || t === this.target)) return this._lazy = !1, this._enabled(!1, !1);
                    t = "string" != typeof t ? t || this._targets || this.target : r.selector(t) || t;
                    var f, s, o, u, e, l, h, a, c;
                    if ((d(t) || yt(t)) && "number" != typeof t[0])
                        for (f = t.length; --f > -1;) this._kill(n, t[f]) && (l = !0);
                    else {
                        if (this._targets) {
                            for (f = this._targets.length; --f > -1;)
                                if (t === this._targets[f]) {
                                    e = this._propLookup[f] || {};
                                    this._overwrittenProps = this._overwrittenProps || [];
                                    s = this._overwrittenProps[f] = n ? this._overwrittenProps[f] || {} : "all";
                                    break
                                }
                        } else {
                            if (t !== this.target) return !1;
                            e = this._propLookup;
                            s = this._overwrittenProps = n ? this._overwrittenProps || {} : "all"
                        }
                        if (e) {
                            if (h = n || e, a = n !== s && "all" !== s && n !== e && ("object" != typeof n || !n._tempKill), i && (r.onOverwrite || this.vars.onOverwrite)) {
                                for (o in h) e[o] && (c || (c = []), c.push(o));
                                if (!kt(this, i, t, c)) return !1
                            }
                            for (o in h)(u = e[o]) && (u.pg && u.t._kill(h) && (l = !0), u.pg && 0 !== u.t._overwriteProps.length || (u._prev ? u._prev._next = u._next : u === this._firstPT && (this._firstPT = u._next), u._next && (u._next._prev = u._prev), u._next = u._prev = null), delete e[o]), a && (s[o] = 1);
                            !this._firstPT && this._initted && this._enabled(!1, !1)
                        }
                    }
                    return l
                }, i.invalidate = function() {
                    return this._notifyPluginsOfEnabled && r._onPluginEvent("_onDisable", this), this._firstPT = this._overwrittenProps = this._startAt = this._onUpdate = null, this._notifyPluginsOfEnabled = this._active = this._lazy = !1, this._propLookup = this._targets ? {} : [], o.prototype.invalidate.call(this), this.vars.immediateRender && (this._time = -e, this.render(-this._delay)), this
                }, i._enabled = function(n, t) {
                    if (h || u.wake(), n && this._gc) {
                        var i, f = this._targets;
                        if (f)
                            for (i = f.length; --i > -1;) this._siblings[i] = et(f[i], this, !0);
                        else this._siblings = et(this.target, this, !0)
                    }
                    return o.prototype._enabled.call(this, n, t), this._notifyPluginsOfEnabled && this._firstPT ? r._onPluginEvent(n ? "_onEnable" : "_onDisable", this) : !1
                }, r.to = function(n, t, i) {
                    return new r(n, t, i)
                }, r.from = function(n, t, i) {
                    return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, new r(n, t, i)
                }, r.fromTo = function(n, t, i, u) {
                    return u.startAt = i, u.immediateRender = 0 != u.immediateRender && 0 != i.immediateRender, new r(n, t, u)
                }, r.delayedCall = function(n, t, i, u, f) {
                    return new r(t, 0, {
                        delay: n,
                        onComplete: t,
                        onCompleteParams: i,
                        onCompleteScope: u,
                        onReverseComplete: t,
                        onReverseCompleteParams: i,
                        onReverseCompleteScope: u,
                        immediateRender: !1,
                        lazy: !1,
                        useFrames: f,
                        overwrite: 0
                    })
                }, r.set = function(n, t) {
                    return new r(n, 0, t)
                }, r.getTweensOf = function(n, t) {
                    if (null == n) return [];
                    n = "string" != typeof n ? n : r.selector(n) || n;
                    var i, u, f, e;
                    if ((d(n) || yt(n)) && "number" != typeof n[0]) {
                        for (i = n.length, u = []; --i > -1;) u = u.concat(r.getTweensOf(n[i], t));
                        for (i = u.length; --i > -1;)
                            for (e = u[i], f = i; --f > -1;) e === u[f] && u.splice(i, 1)
                    } else
                        for (u = et(n).concat(), i = u.length; --i > -1;)(u[i]._gc || t && !u[i].isActive()) && u.splice(i, 1);
                    return u
                }, r.killTweensOf = r.killDelayedCallsTo = function(n, t, i) {
                    "object" == typeof t && (i = t, t = !1);
                    for (var u = r.getTweensOf(n, t), f = u.length; --f > -1;) u[f]._kill(i, n)
                }, c = l("plugins.TweenPlugin", function(n, t) {
                    this._overwriteProps = (n || "").split(",");
                    this._propName = this._overwriteProps[0];
                    this._priority = t || 0;
                    this._super = c.prototype
                }, !0), i = c.prototype, c.version = "1.10.1", c.API = 2, i._firstPT = null, i._addTween = function(n, t, i, r, u, f) {
                    var o, e;
                    if (null != r && (o = "number" == typeof r || "=" !== r.charAt(1) ? Number(r) - i : parseInt(r.charAt(0) + "1", 10) * Number(r.substr(2)))) return (this._firstPT = e = {
                        _next: this._firstPT,
                        t: n,
                        p: t,
                        s: i,
                        c: o,
                        f: "function" == typeof n[t],
                        n: u || t,
                        r: f
                    }, e._next && (e._next._prev = e), e)
                }, i.setRatio = function(n) {
                    for (var i, t = this._firstPT, r = 1e-6; t;) i = t.c * n + t.s, t.r ? i = Math.round(i) : r > i && i > -r && (i = 0), t.f ? t.t[t.p](i) : t.t[t.p] = i, t = t._next
                }, i._kill = function(n) {
                    var i, r = this._overwriteProps,
                        t = this._firstPT;
                    if (null != n[this._propName]) this._overwriteProps = [];
                    else
                        for (i = r.length; --i > -1;) null != n[r[i]] && r.splice(i, 1);
                    for (; t;) null != n[t.n] && (t._next && (t._next._prev = t._prev), t._prev ? (t._prev._next = t._next, t._prev = null) : this._firstPT === t && (this._firstPT = t._next)), t = t._next;
                    return !1
                }, i._roundProps = function(n, t) {
                    for (var i = this._firstPT; i;)(n[this._propName] || null != i.n && n[i.n.split(this._propName + "_").join("")]) && (i.r = t), i = i._next
                }, r._onPluginEvent = function(n, t) {
                    var f, r, u, e, o, i = t._firstPT;
                    if ("_onInitAllProps" === n) {
                        for (; i;) {
                            for (o = i._next, r = u; r && r.pr > i.pr;) r = r._next;
                            (i._prev = r ? r._prev : e) ? i._prev._next = i: u = i;
                            (i._next = r) ? r._prev = i: e = i;
                            i = o
                        }
                        i = t._firstPT = u
                    }
                    for (; i;) i.pg && "function" == typeof i.t[n] && i.t[n]() && (f = !0), i = i._next;
                    return f
                }, c.activate = function(n) {
                    for (var t = n.length; --t > -1;) n[t].API === c.API && (w[(new n[t])._propName] = n[t]);
                    return !0
                }, st.plugin = function(n) {
                    if (!(n && n.propName && n.init && n.API)) throw "illegal plugin definition.";
                    var i, r = n.propName,
                        e = n.priority || 0,
                        o = n.overwriteProps,
                        u = {
                            init: "_onInitTween",
                            set: "setRatio",
                            kill: "_kill",
                            round: "_roundProps",
                            initAll: "_onInitAllProps"
                        },
                        t = l("plugins." + r.charAt(0).toUpperCase() + r.substr(1) + "Plugin", function() {
                            c.call(this, r, e);
                            this._overwriteProps = o || []
                        }, n.global === !0),
                        f = t.prototype = new c(r);
                    f.constructor = t;
                    t.API = n.API;
                    for (i in u) "function" == typeof n[i] && (f[u[i]] = n[i]);
                    return t.version = n.version, c.activate([t]), t
                }, s = n._gsQueue) {
                for (f = 0; s.length > f; f++) s[f]();
                for (i in g) g[i].func || n.console.log("GSAP encountered missing dependency: com.greensock." + i)
            }
            h = !1
        }
    }("undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window, "TweenMax");
youtube_api = !1;
$(document).ready(function() {
    function r() {
        var n, t, i, r;
        youtube_api = !0;
        
    }
    var n, t;
    if (youtube_api == !1 && setTimeout(function() {
            r()
        }, 1e3), $(".floating-report em").length > 0 && (n = $.cookie("price1"), n == "" || n == undefined || Number(n) < 131964 ? ($.cookie("price1", "131964.19", {
            expires: new Date((new Date).getTime() + 864e6),
            path: "/"
        }), $(".floating-report em").text("131964.19$"), n = 131964.19) : n = Number(n), setInterval(function() {
            $(".floating-report em").text(Number(n).toFixed(2) + "$");
            var i = Number(n).toFixed(2),
                t = (Number(i) + 14.583).toFixed(2);
            Number(i).toFixed(2) < 6441109.12 && ($(".floating-report em").text(t.toString() + "$"), $.cookie("price1", t, {
                expires: new Date((new Date).getTime() + 864e6),
                path: "/"
            }), n = t)
        }, 6e3)), t = document.getElementById("live-table"), t != undefined) {
        for (i = 0; i < 10; i++) check_for_trades(1);
        check_for_trades(0)
    }
});
$(".video-modal").on("hide.bs.modal", function() {
    jQuery(".video-modal-iframe").each(function() {
        jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', "*")
    })
});
$(".video-modal").on("show.bs.modal", function() {
    jQuery("#main-video")[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', "*")
})

// $('form').on('submit', function(event) {
// 	event.preventDefault();
// 	location.replace('/register.html')
// 	console.dir(this);
// });
			 
 