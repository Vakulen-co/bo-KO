! function(e) {
    var t = {};

    function n(a) {
        if (t[a]) return t[a].exports;
        var o = t[a] = {
            i: a,
            l: !1,
            exports: {}
        };
        return e[a].call(o.exports, o, o.exports, n), o.l = !0, o.exports
    }
    n.m = e, n.c = t, n.d = function(e, t, a) {
        n.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: a
        })
    }, n.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, n.t = function(e, t) {
        if (1 & t && (e = n(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var a = Object.create(null);
        if (n.r(a), Object.defineProperty(a, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var o in e) n.d(a, o, function(t) {
                return e[t]
            }.bind(null, o));
        return a
    }, n.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return n.d(t, "a", t), t
    }, n.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, n.p = "/", n(n.s = 505)
}({
    505: function(e, t, n) {
        n(506), n(507), e.exports = n(508)
    },
    506: function(e, t) {
        function n(e) {
            return function(e) {
                if (Array.isArray(e)) {
                    for (var t = 0, n = new Array(e.length); t < e.length; t++) n[t] = e[t];
                    return n
                }
            }(e) || function(e) {
                if (Symbol.iterator in Object(e) || "[object Arguments]" === Object.prototype.toString.call(e)) return Array.from(e)
            }(e) || function() {
                throw new TypeError("Invalid attempt to spread non-iterable instance")
            }()
        }! function() {
            function e(e, t, n) {
                var a;
                return function() {
                    var o = this,
                        i = arguments,
                        c = function() {
                            a = null, n || e.apply(o, i)
                        },
                        l = n && !a;
                    clearTimeout(a), a = setTimeout(c, t), l && e.apply(o, i)
                }
            }
            var t = {
                mobileMenuToggle: document.querySelector(".btn-toggle"),
                mobileMenu: document.querySelector(".header__buttons"),
                videoPlay: document.querySelector(".video__holder"),
                video: document.querySelector(".video__inner"),
                conditions: document.querySelector(".conditions-page")
            };

            function n() {
                t.mobileMenuToggle.classList.remove("is-active"), t.mobileMenu.classList.remove("is-active"), t.videoPlay && t.videoPlay.classList.remove("is-active")
            }
            var a = e((function() {
                    n(), t.video && t.video.pause()
                }), 50),
                o = e((function() {
                    n(), t.video && t.video.pause()
                }), 50, !0);
            window.addEventListener("load", (function() {
                t.mobileMenuToggle.addEventListener("click", (function() {
                    t.mobileMenuToggle.classList.toggle("is-active"), t.mobileMenu.classList.toggle("is-active")
                })), t.videoPlay && t.videoPlay.addEventListener("click", (function(e) {
                    t.videoPlay.classList.toggle("is-active"), t.video.play()
                }))
            })), window.addEventListener("resize", a), window.addEventListener("scroll", o)
        }(), window.addEventListener("load", (function() {
            if (document.querySelector(".balance")) {
                var e, t = function(e, t) {
                        return e + parseInt(1e7 * Math.random()) % (t - e)
                    },
                    a = function(e) {
                        function t(e) {
                            return e < 10 ? "0" + e : e
                        }
                        return "".concat(t(e.getDate()), ".").concat(t(e.getMonth() + 1), ".").concat(t(String(e.getFullYear()).substring(2)))
                    };
                ! function() {
                    var o, i = {
                            currentBalance: document.querySelector(".balance__subtitle"),
                            initSystem: document.querySelector(".balance__button"),
                            state: document.querySelector(".balance__status"),
                            stateOn: document.querySelector(".balance__status-searching"),
                            stateDone: document.querySelector(".balance__status-found"),
                            tableBody: document.querySelector(".table__body"),
                            tableFooter: document.querySelector(".table__footer"),
                            tableNav: document.querySelector(".table__pagination"),
                            tableNavItems: document.querySelectorAll(".table__pagination-step"),
                            tableRows: document.querySelectorAll(".table__row"),
                            tableRow: document.querySelector(".table__row")
                        },
                        c = "is-active",
                        l = ["BTCUSD", "BTCEUR", "BTCGBP", "BTCJPY", "BTCAUD"],
                        r = !1,
                        s = null,
                        u = null;

                    function d(e) {
                        var t = 1e3;
                        0 === e.length ? i.tableFooter.classList.add(c) : i.tableFooter.classList.remove(c);
                        var a = e.map((function(e) {
                            return t += e.amount, '\n            <div class="table__row">\n              <div class="table__column table__column-asset">\n                <img src="assets/img/balance__coin.png" alt="Currency" class="table__column-asset-coin">\n                <span class="table__column-asset-name">'.concat(e.username, '</span>\n              </div>\n\n              <div class="table__column table__column-date">').concat(e.date, '</div>\n\n              <div class="table__column table__column-direction">').concat(e.yesNo, '</div>\n\n              <div class="table__column table__column-profit">\n                <span class="table__column-profit-currency">$</span> \n                <span class="table__column-profit-amount">').concat(e.amount, "</span>\n              </div>\n            </div>\n          ")
                        }));
                        a = a.join(""), i.tableBody.innerHTML = a, i.currentBalance.innerText = "$ ".concat(t);
                        var o = e.length / 10,
                            l = [];
                        n(i.tableBody.children).forEach((function(e, t) {
                            e.style.display = "none", t >= 0 && t < 10 && (e.style.display = "flex")
                        }));
                        for (var r = 0; r < o; r++) {
                            var s = r;
                            l.push(s)
                        }
                        var u = l.map((function(e) {
                            return '<button class="table__pagination-step" data-pagination-step='.concat(e, ">").concat(e + 1, "</button>")
                        }));
                        i.tableNav.innerHTML = u.join(""), u.length && (i.tableNav.classList.contains(c) || i.tableNav.classList.add(c), i.tableNav.children[0].classList.add(c) || i.tableNav.children[0].classList.add(c)), n(i.tableNav.children).forEach((function(e) {
                            e.addEventListener("click", (function(t) {
                                n(i.tableNav.children).forEach((function(e) {
                                    return e.classList.remove(c)
                                })), e.classList.add(c);
                                var a = 10 * e.dataset.paginationStep,
                                    o = a + 10;
                                n(i.tableBody.children).forEach((function(e, t) {
                                    e.style.opacity = "0", e.style.display = "none", t >= a && t < o && (e.style.display = "flex", e.style.opacity = "1")
                                }))
                            }))
                        }))
                    }
                    setTimeout((function() {
                        o = JSON.parse(localStorage.getItem("tableRows")), e = o && o.data || []
                    }), 2e3), setTimeout((function() {
                        d(e)
                    }), 3e3), i.initSystem.addEventListener("click", (function n(o) {
                        if (o.preventDefault(), r) return s && clearTimeout(s), u && clearTimeout(u), void(r = !1);
                        r = !0, s = setTimeout((function() {
                            var s = l[t(0, 5)];
                            i.stateDone.innerHTML = "FOUND EXPLOIT IN ASSET ".concat(s, ", EXPLOITING..."), i.stateOn.classList.remove(c), i.stateDone.classList.add(c), u = setTimeout((function() {
                                e.unshift({
                                    username: s,
                                    date: a(new Date),
                                    yesNo: t(1, 100) % 2 == 1 ? "BUY" : "SELL",
                                    amount: t(3, 15)
                                }), d(e), r = !1, n(o), i.stateOn.classList.add(c), i.stateDone.classList.remove(c)
                            }), t(1e3, 3e3))
                        }), t(5e3, 2e3))
                    })), i.initSystem.addEventListener("click", (function() {
                        i.initSystem.classList.contains(c) ? (i.initSystem.classList.remove(c), i.state.classList.remove(c)) : (i.initSystem.classList.add(c), i.state.classList.add(c))
                    }))
                }()
            }
        }))
    },
    507: function(e, t, n) {},
    508: function(e, t, n) {}
});

const popboxOpen = () => {
    document.querySelector('.popbox').classList.add('visible');
}
const popboxClose = () => {
    document.querySelector('.popbox').classList.remove('visible');
}
const scrollToBalance = () => {
    document.querySelector('#balance').scrollIntoView({behavior:"smooth"})
}
const scrollToForm = () => {
    document.querySelector('#lower-form').scrollIntoView({behavior:"smooth"})
}