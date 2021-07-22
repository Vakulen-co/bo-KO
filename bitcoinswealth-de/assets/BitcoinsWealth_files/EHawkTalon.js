/*!
 * E-HAWK Talon v5.5  Sat Sep  9 14:01:10 CEST 2017
 * This file may only be used by active subscribed customers of E-HAWK during a vetting API call. Use for any other purpose is strictly prohibited.
 * It must be deleted upon termination of services with E-HAWK. Reverse engineering or copying functionality is strictly prohibited.
 */

function eHawkTalon(e, t, n) {
    function i(e) {
        /in/.test(document.readyState) ? setTimeout(e(), 2900) : e()
    }
    i(function() {
        new EHTalon(e, n, t).Get()
    })
}
Date.prototype.stdTimezoneOffset = function() {
    var e = new Date(this.getFullYear(), 0, 1),
        t = new Date(this.getFullYear(), 6, 1);
    return Math.max(e.getTimezoneOffset(), t.getTimezoneOffset())
}, Date.prototype.dst = function() {
    return this.getTimezoneOffset() < this.stdTimezoneOffset()
}, Date.prototype.canDST = function() {
    var e = new Date(this.getFullYear(), 0, 1),
        t = new Date(this.getFullYear(), 6, 1);
    return e.getTimezoneOffset() != t.getTimezoneOffset()
};
var EHTalon = function(e, t, n) {
    this.obj = this, "undefined" != typeof e && "function" == typeof e.oncomplete && (this.obj.oncomplete = e.oncomplete), this.version = "5.5", this.dd = !!t, this.cn = "6bdfac53cbfb648b7ebe7a1fe1b93f4d", this.c = null, this.d = new Date, this.hL = !1, this.f3 = 0, this.f3r = "", this.fobj = !1, this.ua2 = n;
    var i = EHTalon.WB();
    this.CC = function(e, t, n, i, a, r, o, s, l, u, h, c, d, g, f, p, m, T, S) {
        chk = this.CH(this.obj.version.toString() + "|" + t.toString() + "|" + n + "|" + i + "|" + a + "|" + g + "|" + r + "|" + o + "|" + s + "|" + l + "|" + u + "|" + h + "|" + f + "|" + p + "|" + m + "|" + T + "|" + c);
        var v = this.obj.dd ? ', "99": "' + d + '"' : "";
        return '{"version": "' + this.obj.version.toString() + '", "status": ' + t + ', "timestamp": "' + n + '", "a": ' + i + ', "b": "' + a + '", "c": ' + chk + ', "d": "' + g + '","e": "' + r + '", "0": ' + o + ',  "3": "' + u + '", "4": "' + h + '", "7": "' + f + '","8":"' + p + '","6":"' + m + '", "9":"' + T + '","2":' + S + ', "5": "' + c + '"' + v + "}"
    }, this.CH = function(e) {
        for (var t = 305419896, n = 0, i = e.length; n < i; n++) t += e.charCodeAt(n) * (n + 1);
        return t &= 2147483647
    }, this.L = function(e) {
        return e ? "undefined" != typeof navigator.languages && "undefined" != typeof navigator.languages[1] ? navigator.languages[1].substr(0, 2) : "undefined" != typeof navigator.userLanguage ? navigator.userLanguage.substr(0, 2) : null : "undefined" != typeof navigator.language ? navigator.language : navigator.browserLanguage
    }, this.TZ = function() {
        return '{"dst": ' + this.d.dst() + ', "tzo": ' + this.d.getTimezoneOffset() + ', "stzo": ' + this.d.stdTimezoneOffset() + "}"
    }, this.RS = function() {
        return Math.floor(4294967295 * Math.random() + 1)
    }, this.TC = function() {
        var e, t, n = this.TZ(),
            a = this.L(!1),
            r = this.L(!0);
        null === r && (r = a), this.CI(), null == this.obj.c || "" === this.obj.c ? (e = "", t |= 1, this.obj.c = this.CS(this.RS(), this.obj.f3)) : ("undefined" != typeof this.obj.c.a && "" != this.obj.c.a || (this.obj.c = this.CS(this.RS(), 0)), e = this.obj.c.b, t = 0), this.obj.c = this.CS(this.obj.c.a, this.obj.f3, this.obj.c.e), e_hawkTalonStr = this.CC(3, 0, this.d.toUTCString(), n, a, EHTalon.CLC(navigator.userAgent), t, this.obj.f3, this.obj.f3, this.obj.c.b, e, this.obj.c.c, this.obj.f3r, r, 0, i, EHTalon.hRT() ? 1 : 0, EHTalon.IM() ? 1 : 0, this.obj.c.a), document.getElementById("talon").value = e_hawkTalonStr, "function" == typeof this.obj.oncomplete && typeof this.obj.oncomplete(e_hawkTalonStr)
    }, this.HLHas()
};
EHTalon.prototype.FPExtra = function(e) {
    return e.push({
        key: "eh_im",
        value: EHTalon.IM() ? 1 : 0
    }), e.push({
        key: "eh_wb",
        value: EHTalon.WB()
    }), "undefined" != typeof navigator.languages && navigator.languages.length > 0 && navigator.languages.forEach(function(t, n, i) {
        e.push(t)
    }), e
}, EHTalon.FPLA = function() {
    "use strict";
    var e = null,
        t = null,
        n = null;
    try {
        return e = window.performance.timing, t = e.responseStart - e.requestStart, n = e.responseEnd - e.fetchStart, t + "|" + n
    } catch (e) {
        return "Unknown"
    }
}, EHTalon.prototype.Get = function() {
    var e = this.obj;
    new Fingerprint(EHTalon.IM ? {
        excludeAvailableScreenResolution: !0,
        excludeScreenResolution: !0
    } : {}).get(function(t, n, i) {
        e.f3r = "", e.dd && (i[14] = "r", i[15] = "r", i[i.length - 2] = "3", e.f3r = i), e.f3 = t, e.TC()
    }, this.FPExtra)
}, EHTalon.IM = function() {
    return /Mobi/.test(navigator.userAgent)
}, EHTalon.WB = function() {
    var e = !!window.opera || navigator.userAgent.indexOf(" OPR/") >= 0,
        t = "undefined" != typeof InstallTrigger,
        n = Object.prototype.toString.call(window.HTMLElement).indexOf("Constructor") > 0,
        i = !!document.documentMode,
        a = !i && !!window.StyleMedia,
        r = !!window.chrome && !e;
    isBlink = (r || e) && !!window.CSS;
    var o = e ? 1 : t ? 2 : n ? 3 : r ? 4 : i ? 5 : a ? 6 : window.callPhantom ? 7 : window.Buffer ? 8 : window.emit ? 9 : window.spawn ? 10 : 0;
    return o
}, EHTalon.hRT = function() {
    var e = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection,
        t = !!window.webkitRTCPeerConnection;
    if (!e) {
        var n = document.getElementById("EHTalonIframe");
        if (void 0 === typeof n || null === n) return;
        var i = n.contentWindow;
        e = i.RTCPeerConnection || i.mozRTCPeerConnection || i.webkitRTCPeerConnection, t = !!i.webkitRTCPeerConnection
    }
    return e
}, EHTalon.CLC = function(e) {
    return e.search("CriOS") > -1 ? e.substring(0, e.length - 8) : e
}, EHTalon.hash = function(e) {
    return (new Fingerprint).x64hash128(e, 32)
}, EHTalon.prototype.NG = function() {
    var e = {};
    return e.i = this.ip, e.u = EHTalon.CLC(this.ua2), e.f = EHTalon.hash(this.obj.f3 + e.ip), e.p = this.Cookie(e.f), JSON.stringify(e)
}, EHTalon.prototype.Cookie = function(e) {
    return null == this.obj.c && (this.obj.c = this.CG()), this.CS(this.obj.c.a, this.obj.c.b, e), this.obj.c.e
}, EHTalon.prototype.CI = function() {
    this.c = this.CG()
}, EHTalon.prototype.CG = function() {
    var e = this.obj.docCookies.getItem(this.obj.cn);
    !this.obj.hL || "" !== e && null !== e || (e = window.localStorage.getItem(this.obj.cn));
    try {
        return JSON.parse(e)
    } catch (e) {
        return null
    }
}, EHTalon.prototype.CS = function(e, t, n) {
    var i = (new Date).getTime(),
        a = {
            v: this.obj.version,
            a: e,
            b: "undefined" == typeof t ? "" : t,
            c: i,
            d: EHTalon.hash(i.toString()),
            e: "undefined" == typeof n ? "" : n
        },
        r = JSON.stringify(a),
        o = new Date;
    return o.setFullYear(o.getFullYear() + 10), this.obj.docCookies.removeItem(this.obj.cn), this.obj.docCookies.setItem(this.obj.cn, r, o.toString()), this.obj.hL && (window.localStorage.removeItem(this.obj.cn), window.localStorage.setItem(this.obj.cn, r)), a
}, EHTalon.prototype.docCookies = {
    getItem: function(e) {
        return e ? decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(e).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null : null
    },
    setItem: function(e, t, n, i, a, r) {
        if (!e || /^(?:expires|max\-age|path|domain|secure)$/i.test(e)) return !1;
        var o = "";
        if (n) switch (n.constructor) {
            default:
                case Number:
                o = n === 1 / 0 ? "; expires=Tue, 19 Jan 2038 03:14:07 GMT" : "; max-age=" + n;
            break;
            case String:
                    o = "; expires=" + n;
                break;
            case Date:
                    o = "; expires=" + n.toUTCString()
        }
        return document.cookie = encodeURIComponent(e) + "=" + encodeURIComponent(t) + o + (a ? "; domain=" + a : "") + (i ? "; path=" + i : "") + (r ? "; secure" : ""), !0
    },
    removeItem: function(e, t, n) {
        return !!this.hasItem(e) && (document.cookie = encodeURIComponent(e) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (n ? "; domain=" + n : "") + (t ? "; path=" + t : ""), !0)
    },
    hasItem: function(e) {
        return !!e && new RegExp("(?:^|;\\s*)" + encodeURIComponent(e).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=").test(document.cookie)
    },
    keys: function() {
        for (var e = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/), t = e.length, n = 0; n < t; n++) e[n] = decodeURIComponent(e[n]);
        return e
    }
}, EHTalon.prototype.HLHas = function() {
    try {
        window.localStorage.setItem("eloctest", "eloctest"), window.localStorage.removeItem("eloctest"), this.obj.hL = !0
    } catch (e) {
        this.obj.hL = !1
    }
};
var Fingerprint = function(e) {
    var t = {
        swfContainerId: "fingerprintjs2",
        swfPath: "flash/compiled/FontList.swf",
        detectScreenOrientation: !0,
        sortPluginsFor: [/palemoon/i],
        userDefinedFonts: []
    };
    this.options = this.extend(e, t), this.nativeForEach = Array.prototype.forEach, this.nativeMap = Array.prototype.map
};
Fingerprint.prototype = {
    extend: function(e, t) {
        if (null == e) return t;
        for (var n in e) null != e[n] && t[n] !== e[n] && (t[n] = e[n]);
        return t
    },
    log: function(e) {
        window.console
    },
    get: function(e, t) {
        var n = [];
        n = this.userAgentKey(n), n = this.languageKey(n), n = this.colorDepthKey(n), n = this.pixelRatioKey(n), n = this.hardwareConcurrencyKey(n), n = this.screenResolutionKey(n), n = this.availableScreenResolutionKey(n), n = this.timezoneOffsetKey(n), n = this.sessionStorageKey(n), n = this.localStorageKey(n), n = this.indexedDbKey(n), n = this.addBehaviorKey(n), n = this.openDatabaseKey(n), n = this.cpuClassKey(n), n = this.platformKey(n), n = this.doNotTrackKey(n), n = this.pluginsKey(n), n = this.canvasKey(n), n = this.webglKey(n), n = this.adBlockKey(n), n = this.hasLiedLanguagesKey(n), n = this.hasLiedResolutionKey(n), n = this.hasLiedOsKey(n), n = this.hasLiedBrowserKey(n), n = this.touchSupportKey(n), n = this.customEntropyFunction(n), void 0 !== t && (n = t(n));
        var i = this;
        this.audioKey(n, function(t) {
            i.fontsKey(t, function(t) {
                var n = [];
                i.each(t, function(e) {
                    var t = e.value;
                    "undefined" != typeof e.value && "undefined" != typeof e.value.join && (t = e.value.join(";")), n.push(t)
                });
                var a = n.join("~~~"),
                    r = i.x64hash128(a, 31);
                return e(r, t, n)
            })
        })
    },
    customEntropyFunction: function(e) {
        return "function" == typeof this.options.customFunction && e.push({
            key: "custom",
            value: this.options.customFunction()
        }), e
    },
    makeFrame: function(e) {
        var t = document.createElement("iframe");
        t.setAttribute("id", e), t.setAttribute("sandbox", "allow-same-origin"), t.setAttribute("style", "display: none"), document.getElementsByTagName("body")[0].appendChild(t)
    },
    initWebRTC: function(e) {
        function t(t) {
            var i = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/,
                a = i.exec(t)[1];
            void 0 === n[a] && e(a), n[a] = !0
        }
        this.makeFrame("lol");
        var n = {},
            i = window.RTCPeerConnection || window.moxRTCPeerConnection || window.webkitRTCPeerConnection,
            a = !!window.webkitRTCPeerConnection;
        if (!i) {
            var r = lol.contentWindow;
            i = r.RTCPeerConnection || r.mozRTCPeerConnection || r.webkitRTCPeerConnection, a = !!r.webkitRTCPeerConnection
        }
        var o = {
                optional: [{
                    RtpDataChannels: !0
                }]
            },
            s = {
                iceServers: [{
                    urls: "stun:stun.2.google.com:19302"
                }, {
                    urls: "stun:stun.3.google.com:19302"
                }, {
                    urls: "stun:stun.4.google.com:19302"
                }, {
                    urls: "stun:stun.services.mozilla.com"
                }, {
                    urls: "stun:stun.l.google.com:19302"
                }]
            };
        try {
            var l = new i(s, o)
        } catch (t) {
            return e(!1), !1
        }
        l.onicecandidate = function(e) {
            e.candidate && t(e.candidate.candidate)
        }, l.createDataChannel(""), l.createOffer(function(e) {
            l.setLocalDescription(e, function() {}, function() {})
        }, function() {}), setTimeout(function() {
            var e = l.localDescription.sdp.split("\n");
            e.forEach(function(e) {
                0 === e.indexOf("a=candidate:") && t(e)
            })
        }, 1e3)
    },
    getWebRTC: function(e) {
        return this.initWebRTC(function(t) {
            e.push(t)
        }), e
    },
    userAgentKey: function(e) {
        return this.options.excludeUserAgent || e.push({
            key: "user_agent",
            value: this.getUserAgent()
        }), e
    },
    getUserAgent: function() {
        return navigator.userAgent
    },
    languageKey: function(e) {
        return this.options.excludeLanguage || e.push({
            key: "language",
            value: navigator.language || navigator.userLanguage || navigator.browserLanguage || navigator.systemLanguage || ""
        }), e
    },
    colorDepthKey: function(e) {
        return this.options.excludeColorDepth || e.push({
            key: "color_depth",
            value: screen.colorDepth || -1
        }), e
    },
    pixelRatioKey: function(e) {
        return this.options.excludePixelRatio || e.push({
            key: "pixel_ratio",
            value: this.getPixelRatio()
        }), e
    },
    getPixelRatio: function() {
        return window.devicePixelRatio || ""
    },
    screenResolutionKey: function(e) {
        return this.options.excludeScreenResolution ? e : this.getScreenResolution(e)
    },
    getScreenResolution: function(e) {
        var t;
        return t = this.options.detectScreenOrientation && screen.height > screen.width ? [screen.height, screen.width] : [screen.width, screen.height], "undefined" != typeof t && e.push({
            key: "resolution",
            value: t
        }), e
    },
    availableScreenResolutionKey: function(e) {
        return this.options.excludeAvailableScreenResolution ? e : this.getAvailableScreenResolution(e)
    },
    getAvailableScreenResolution: function(e) {
        var t;
        return screen.availWidth && screen.availHeight && (t = this.options.detectScreenOrientation ? screen.availHeight > screen.availWidth ? [screen.availHeight, screen.availWidth] : [screen.availWidth, screen.availHeight] : [screen.availHeight, screen.availWidth]), "undefined" != typeof t && e.push({
            key: "available_resolution",
            value: t
        }), e
    },
    timezoneOffsetKey: function(e) {
        return this.options.excludeTimezoneOffset || e.push({
            key: "timezone_offset",
            value: (new Date).getTimezoneOffset()
        }), e
    },
    sessionStorageKey: function(e) {
        return !this.options.excludeSessionStorage && this.hasSessionStorage() && e.push({
            key: "session_storage",
            value: 1
        }), e
    },
    localStorageKey: function(e) {
        return !this.options.excludeSessionStorage && this.hasLocalStorage() && e.push({
            key: "local_storage",
            value: 1
        }), e
    },
    indexedDbKey: function(e) {
        return !this.options.excludeIndexedDB && this.hasIndexedDB() && e.push({
            key: "indexed_db",
            value: 1
        }), e
    },
    addBehaviorKey: function(e) {
        return document.body && !this.options.excludeAddBehavior && document.body.addBehavior && e.push({
            key: "add_behavior",
            value: 1
        }), e
    },
    openDatabaseKey: function(e) {
        return !this.options.excludeOpenDatabase && window.openDatabase && e.push({
            key: "open_database",
            value: 1
        }), e
    },
    cpuClassKey: function(e) {
        return this.options.excludeCpuClass || e.push({
            key: "cpu_class",
            value: this.getNavigatorCpuClass()
        }), e
    },
    platformKey: function(e) {
        return this.options.excludePlatform || e.push({
            key: "navigator_platform",
            value: this.getNavigatorPlatform()
        }), e
    },
    doNotTrackKey: function(e) {
        return this.options.excludeDoNotTrack || e.push({
            key: "do_not_track",
            value: this.getDoNotTrack()
        }), e
    },
    canvasKey: function(e) {
        return !this.options.excludeCanvas && this.isCanvasSupported() && e.push({
            key: "canvas",
            value: this.getCanvasFp()
        }), e
    },
    webglKey: function(e) {
        return this.options.excludeWebGL ? e : this.isWebGlSupported() ? (e.push({
            key: "webgl",
            value: this.getWebglFp()
        }), e) : e
    },
    adBlockKey: function(e) {
        return this.options.excludeAdBlock || e.push({
            key: "adblock",
            value: this.getAdBlock()
        }), e
    },
    hasLiedLanguagesKey: function(e) {
        return this.options.excludeHasLiedLanguages || e.push({
            key: "has_lied_languages",
            value: this.getHasLiedLanguages()
        }), e
    },
    hasLiedResolutionKey: function(e) {
        return this.options.excludeHasLiedResolution || e.push({
            key: "has_lied_resolution",
            value: this.getHasLiedResolution()
        }), e
    },
    hasLiedOsKey: function(e) {
        return this.options.excludeHasLiedOs || e.push({
            key: "has_lied_os",
            value: this.getHasLiedOs()
        }), e
    },
    hasLiedBrowserKey: function(e) {
        return this.options.excludeHasLiedBrowser || e.push({
            key: "has_lied_browser",
            value: this.getHasLiedBrowser()
        }), e
    },
    fontsKey: function(e, t) {
        return this.options.excludeJsFonts ? this.flashFontsKey(e, t) : this.jsFontsKey(e, t)
    },
    flashFontsKey: function(e, t) {
        return this.options.excludeFlashFonts ? t(e) : this.hasSwfObjectLoaded() && this.hasMinFlashInstalled() ? "undefined" == typeof this.options.swfPath ? t(e) : void this.loadSwfAndDetectFonts(function(n) {
            e.push({
                key: "swf_fonts",
                value: n.join(";")
            }), t(e)
        }) : t(e)
    },
    jsFontsKey: function(e, t) {
        var n = this;
        return setTimeout(function() {
            var i = ["monospace", "sans-serif", "serif"],
                a = ["Andale Mono", "Arial", "Arial Black", "Arial Hebrew", "Arial MT", "Arial Narrow", "Arial Rounded MT Bold", "Arial Unicode MS", "Bitstream Vera Sans Mono", "Book Antiqua", "Bookman Old Style", "Calibri", "Cambria", "Cambria Math", "Century", "Century Gothic", "Century Schoolbook", "Comic Sans", "Comic Sans MS", "Consolas", "Courier", "Courier New", "Garamond", "Geneva", "Georgia", "Helvetica", "Helvetica Neue", "Impact", "Lucida Bright", "Lucida Calligraphy", "Lucida Console", "Lucida Fax", "LUCIDA GRANDE", "Lucida Handwriting", "Lucida Sans", "Lucida Sans Typewriter", "Lucida Sans Unicode", "Microsoft Sans Serif", "Monaco", "Monotype Corsiva", "MS Gothic", "MS Outlook", "MS PGothic", "MS Reference Sans Serif", "MS Sans Serif", "MS Serif", "MYRIAD", "MYRIAD PRO", "Palatino", "Palatino Linotype", "Segoe Print", "Segoe Script", "Segoe UI", "Segoe UI Light", "Segoe UI Semibold", "Segoe UI Symbol", "Tahoma", "Times", "Times New Roman", "Times New Roman PS", "Trebuchet MS", "Verdana", "Wingdings", "Wingdings 2", "Wingdings 3"],
                r = ["Abadi MT Condensed Light", "Academy Engraved LET", "ADOBE CASLON PRO", "Adobe Garamond", "ADOBE GARAMOND PRO", "Agency FB", "Aharoni", "Albertus Extra Bold", "Albertus Medium", "Algerian", "Amazone BT", "American Typewriter", "American Typewriter Condensed", "AmerType Md BT", "Andalus", "Angsana New", "AngsanaUPC", "Antique Olive", "Aparajita", "Apple Chancery", "Apple Color Emoji", "Apple SD Gothic Neo", "Arabic Typesetting", "ARCHER", "ARNO PRO", "Arrus BT", "Aurora Cn BT", "AvantGarde Bk BT", "AvantGarde Md BT", "AVENIR", "Ayuthaya", "Bandy", "Bangla Sangam MN", "Bank Gothic", "BankGothic Md BT", "Baskerville", "Baskerville Old Face", "Batang", "BatangChe", "Bauer Bodoni", "Bauhaus 93", "Bazooka", "Bell MT", "Bembo", "Benguiat Bk BT", "Berlin Sans FB", "Berlin Sans FB Demi", "Bernard MT Condensed", "BernhardFashion BT", "BernhardMod BT", "Big Caslon", "BinnerD", "Blackadder ITC", "BlairMdITC TT", "Bodoni 72", "Bodoni 72 Oldstyle", "Bodoni 72 Smallcaps", "Bodoni MT", "Bodoni MT Black", "Bodoni MT Condensed", "Bodoni MT Poster Compressed", "Bookshelf Symbol 7", "Boulder", "Bradley Hand", "Bradley Hand ITC", "Bremen Bd BT", "Britannic Bold", "Broadway", "Browallia New", "BrowalliaUPC", "Brush Script MT", "Californian FB", "Calisto MT", "Calligrapher", "Candara", "CaslonOpnface BT", "Castellar", "Centaur", "Cezanne", "CG Omega", "CG Times", "Chalkboard", "Chalkboard SE", "Chalkduster", "Charlesworth", "Charter Bd BT", "Charter BT", "Chaucer", "ChelthmITC Bk BT", "Chiller", "Clarendon", "Clarendon Condensed", "CloisterBlack BT", "Cochin", "Colonna MT", "Constantia", "Cooper Black", "Copperplate", "Copperplate Gothic", "Copperplate Gothic Bold", "Copperplate Gothic Light", "CopperplGoth Bd BT", "Corbel", "Cordia New", "CordiaUPC", "Cornerstone", "Coronet", "Cuckoo", "Curlz MT", "DaunPenh", "Dauphin", "David", "DB LCD Temp", "DELICIOUS", "Denmark", "DFKai-SB", "Didot", "DilleniaUPC", "DIN", "DokChampa", "Dotum", "DotumChe", "Ebrima", "Edwardian Script ITC", "Elephant", "English 111 Vivace BT", "Engravers MT", "EngraversGothic BT", "Eras Bold ITC", "Eras Demi ITC", "Eras Light ITC", "Eras Medium ITC", "EucrosiaUPC", "Euphemia", "Euphemia UCAS", "EUROSTILE", "Exotc350 Bd BT", "FangSong", "Felix Titling", "Fixedsys", "FONTIN", "Footlight MT Light", "Forte", "FrankRuehl", "Fransiscan", "Freefrm721 Blk BT", "FreesiaUPC", "Freestyle Script", "French Script MT", "FrnkGothITC Bk BT", "Fruitger", "FRUTIGER", "Futura", "Futura Bk BT", "Futura Lt BT", "Futura Md BT", "Futura ZBlk BT", "FuturaBlack BT", "Gabriola", "Galliard BT", "Gautami", "Geeza Pro", "Geometr231 BT", "Geometr231 Hv BT", "Geometr231 Lt BT", "GeoSlab 703 Lt BT", "GeoSlab 703 XBd BT", "Gigi", "Gill Sans", "Gill Sans MT", "Gill Sans MT Condensed", "Gill Sans MT Ext Condensed Bold", "Gill Sans Ultra Bold", "Gill Sans Ultra Bold Condensed", "Gisha", "Gloucester MT Extra Condensed", "GOTHAM", "GOTHAM BOLD", "Goudy Old Style", "Goudy Stout", "GoudyHandtooled BT", "GoudyOLSt BT", "Gujarati Sangam MN", "Gulim", "GulimChe", "Gungsuh", "GungsuhChe", "Gurmukhi MN", "Haettenschweiler", "Harlow Solid Italic", "Harrington", "Heather", "Heiti SC", "Heiti TC", "HELV", "Herald", "High Tower Text", "Hiragino Kaku Gothic ProN", "Hiragino Mincho ProN", "Hoefler Text", "Humanst 521 Cn BT", "Humanst521 BT", "Humanst521 Lt BT", "Imprint MT Shadow", "Incised901 Bd BT", "Incised901 BT", "Incised901 Lt BT", "INCONSOLATA", "Informal Roman", "Informal011 BT", "INTERSTATE", "IrisUPC", "Iskoola Pota", "JasmineUPC", "Jazz LET", "Jenson", "Jester", "Jokerman", "Juice ITC", "Kabel Bk BT", "Kabel Ult BT", "Kailasa", "KaiTi", "Kalinga", "Kannada Sangam MN", "Kartika", "Kaufmann Bd BT", "Kaufmann BT", "Khmer UI", "KodchiangUPC", "Kokila", "Korinna BT", "Kristen ITC", "Krungthep", "Kunstler Script", "Lao UI", "Latha", "Leelawadee", "Letter Gothic", "Levenim MT", "LilyUPC", "Lithograph", "Lithograph Light", "Long Island", "Lydian BT", "Magneto", "Maiandra GD", "Malayalam Sangam MN", "Malgun Gothic", "Mangal", "Marigold", "Marion", "Marker Felt", "Market", "Marlett", "Matisse ITC", "Matura MT Script Capitals", "Meiryo", "Meiryo UI", "Microsoft Himalaya", "Microsoft JhengHei", "Microsoft New Tai Lue", "Microsoft PhagsPa", "Microsoft Tai Le", "Microsoft Uighur", "Microsoft YaHei", "Microsoft Yi Baiti", "MingLiU", "MingLiU_HKSCS", "MingLiU_HKSCS-ExtB", "MingLiU-ExtB", "Minion", "Minion Pro", "Miriam", "Miriam Fixed", "Mistral", "Modern", "Modern No. 20", "Mona Lisa Solid ITC TT", "Mongolian Baiti", "MONO", "MoolBoran", "Mrs Eaves", "MS LineDraw", "MS Mincho", "MS PMincho", "MS Reference Specialty", "MS UI Gothic", "MT Extra", "MUSEO", "MV Boli", "Nadeem", "Narkisim", "NEVIS", "News Gothic", "News GothicMT", "NewsGoth BT", "Niagara Engraved", "Niagara Solid", "Noteworthy", "NSimSun", "Nyala", "OCR A Extended", "Old Century", "Old English Text MT", "Onyx", "Onyx BT", "OPTIMA", "Oriya Sangam MN", "OSAKA", "OzHandicraft BT", "Palace Script MT", "Papyrus", "Parchment", "Party LET", "Pegasus", "Perpetua", "Perpetua Titling MT", "PetitaBold", "Pickwick", "Plantagenet Cherokee", "Playbill", "PMingLiU", "PMingLiU-ExtB", "Poor Richard", "Poster", "PosterBodoni BT", "PRINCETOWN LET", "Pristina", "PTBarnum BT", "Pythagoras", "Raavi", "Rage Italic", "Ravie", "Ribbon131 Bd BT", "Rockwell", "Rockwell Condensed", "Rockwell Extra Bold", "Rod", "Roman", "Sakkal Majalla", "Santa Fe LET", "Savoye LET", "Sceptre", "Script", "Script MT Bold", "SCRIPTINA", "Serifa", "Serifa BT", "Serifa Th BT", "ShelleyVolante BT", "Sherwood", "Shonar Bangla", "Showcard Gothic", "Shruti", "Signboard", "SILKSCREEN", "SimHei", "Simplified Arabic", "Simplified Arabic Fixed", "SimSun", "SimSun-ExtB", "Sinhala Sangam MN", "Sketch Rockwell", "Skia", "Small Fonts", "Snap ITC", "Snell Roundhand", "Socket", "Souvenir Lt BT", "Staccato222 BT", "Steamer", "Stencil", "Storybook", "Styllo", "Subway", "Swis721 BlkEx BT", "Swiss911 XCm BT", "Sylfaen", "Synchro LET", "System", "Tamil Sangam MN", "Technical", "Teletype", "Telugu Sangam MN", "Tempus Sans ITC", "Terminal", "Thonburi", "Traditional Arabic", "Trajan", "TRAJAN PRO", "Tristan", "Tubular", "Tunga", "Tw Cen MT", "Tw Cen MT Condensed", "Tw Cen MT Condensed Extra Bold", "TypoUpright BT", "Unicorn", "Univers", "Univers CE 55 Medium", "Univers Condensed", "Utsaah", "Vagabond", "Vani", "Vijaya", "Viner Hand ITC", "VisualUI", "Vivaldi", "Vladimir Script", "Vrinda", "Westminster", "WHITNEY", "Wide Latin", "ZapfEllipt BT", "ZapfHumnst BT", "ZapfHumnst Dm BT", "Zapfino", "Zurich BlkEx BT", "Zurich Ex BT", "ZWAdobeF"];
            n.options.extendedJsFonts && (a = a.concat(r)), a = a.concat(n.options.userDefinedFonts);
            var o = "mmmmmmmmmmlli",
                s = "72px",
                l = document.getElementsByTagName("body")[0],
                u = document.createElement("div"),
                h = document.createElement("div"),
                c = {},
                d = {},
                g = function() {
                    var e = document.createElement("span");
                    return e.style.position = "absolute", e.style.left = "-9999px", e.style.fontSize = s, e.style.lineHeight = "normal", e.innerHTML = o, e
                },
                f = function(e, t) {
                    var n = g();
                    return n.style.fontFamily = "'" + e + "'," + t, n
                },
                p = function() {
                    for (var e = [], t = 0, n = i.length; t < n; t++) {
                        var a = g();
                        a.style.fontFamily = i[t], u.appendChild(a), e.push(a)
                    }
                    return e
                },
                m = function() {
                    for (var e = {}, t = 0, n = a.length; t < n; t++) {
                        for (var r = [], o = 0, s = i.length; o < s; o++) {
                            var l = f(a[t], i[o]);
                            h.appendChild(l), r.push(l)
                        }
                        e[a[t]] = r
                    }
                    return e
                },
                T = function(e) {
                    for (var t = !1, n = 0; n < i.length; n++)
                        if (t = e[n].offsetWidth !== c[i[n]] || e[n].offsetHeight !== d[i[n]]) return t;
                    return t
                },
                S = p();
            l.appendChild(u);
            for (var v = 0, C = i.length; v < C; v++) c[i[v]] = S[v].offsetWidth, d[i[v]] = S[v].offsetHeight;
            var x = m();
            l.appendChild(h);
            for (var w = [], E = 0, y = a.length; E < y; E++) T(x[a[E]]) && w.push(a[E]);
            l.removeChild(h), l.removeChild(u), e.push({
                key: "js_fonts",
                value: w
            }), t(e)
        }, 1)
    },
    audioKey: function(e, t) {
        return this.options.excludeAudio || "ontouchstart" in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0 ? t(e) : this.getAudioKey(e, t)
    },
    getAudioKey: function(e, t) {
        var n = function(e) {
            var t;
            try {
                if (t = new(window.OfflineAudioContext || window.webkitOfflineAudioContext)(1, 44100, 44100), !t) return e();
                var n = t.createOscillator();
                n.type = "triangle", n.frequency.value = 1e4;
                var i = t.createDynamicsCompressor();
                i.threshold && (i.threshold.value = -50), i.knee && (i.knee.value = 40), i.ratio && (i.ratio.value = 12), i.reduction && (i.reduction.value = -20), i.attack && (i.attack.value = 0), i.release && (i.release.value = .25), n.connect(i), i.connect(t.destination), n.start(0);
                var a = !1;
                t.oncomplete = function(t) {
                    a = !0;
                    for (var n = [], r = 0; r < t.renderedBuffer.length; r++) n.push(t.renderedBuffer.getChannelData(0)[r].toString());
                    return void 0 !== n && (n = n.toString(",")), i.disconnect(), e(n)
                }, setTimeout(function() {
                    if (!a) return e()
                }, 750), setTimeout(function() {
                    t.startRendering()
                }, 300)
            } catch (t) {
                return e()
            }
        };
        return n(function(n) {
            n = n || "", e.push({
                key: "audio",
                value: n
            }), t(e)
        })
    },
    pluginsKey: function(e) {
        return this.options.excludePlugins || (this.isIE() ? this.options.excludeIEPlugins || e.push({
            key: "ie_plugins",
            value: this.getIEPlugins()
        }) : e.push({
            key: "regular_plugins",
            value: this.getRegularPlugins()
        })), e
    },
    getRegularPlugins: function() {
        for (var e = [], t = 0, n = navigator.plugins.length; t < n; t++) "Shockwave Flash" != navigator.plugins[t].name && e.push(navigator.plugins[t]);
        return this.pluginsShouldBeSorted() && (e = e.sort(function(e, t) {
            return e.name > t.name ? 1 : e.name < t.name ? -1 : 0
        })), this.map(e, function(e) {
            var t = this.map(e, function(e) {
                return [e.type, e.suffixes].join("~")
            }).join(",");
            return [e.name, e.description, t].join("::")
        }, this)
    },
    getIEPlugins: function() {
        var e = [];
        if (Object.getOwnPropertyDescriptor && Object.getOwnPropertyDescriptor(window, "ActiveXObject") || "ActiveXObject" in window) {
            var t = ["AcroPDF.PDF", "Adodb.Stream", "AgControl.AgControl", "DevalVRXCtrl.DevalVRXCtrl.1", "MacromediaFlashPaper.MacromediaFlashPaper", "Msxml2.DOMDocument", "Msxml2.XMLHTTP", "PDF.PdfCtrl", "QuickTime.QuickTime", "QuickTimeCheckObject.QuickTimeCheck.1", "RealPlayer", "RealPlayer.RealPlayer(tm) ActiveX Control (32-bit)", "RealVideo.RealVideo(tm) ActiveX Control (32-bit)", "Scripting.Dictionary", "SWCtl.SWCtl", "Shell.UIHelper", "ShockwaveFlash.ShockwaveFlash", "Skype.Detection", "TDCCtl.TDCCtl", "WMPlayer.OCX", "rmocx.RealPlayer G2 Control", "rmocx.RealPlayer G2 Control.1"];
            e = this.map(t, function(e) {
                try {
                    return new ActiveXObject(e), e
                } catch (e) {
                    return null
                }
            })
        }
        return navigator.plugins && (e = e.concat(this.getRegularPlugins())), e
    },
    pluginsShouldBeSorted: function() {
        for (var e = !1, t = 0, n = this.options.sortPluginsFor.length; t < n; t++) {
            var i = this.options.sortPluginsFor[t];
            if (navigator.userAgent.match(i)) {
                e = !0;
                break
            }
        }
        return e
    },
    touchSupportKey: function(e) {
        return this.options.excludeTouchSupport || e.push({
            key: "touch_support",
            value: this.getTouchSupport()
        }), e
    },
    hardwareConcurrencyKey: function(e) {
        return this.options.excludeHardwareConcurrency || e.push({
            key: "hardware_concurrency",
            value: this.getHardwareConcurrency()
        }), e
    },
    hasSessionStorage: function() {
        try {
            return !!window.sessionStorage
        } catch (e) {
            return !0
        }
    },
    hasLocalStorage: function() {
        try {
            return !!window.localStorage
        } catch (e) {
            return !0
        }
    },
    hasIndexedDB: function() {
        try {
            return !!window.indexedDB
        } catch (e) {
            return !0
        }
    },
    getHardwareConcurrency: function() {
        return navigator.hardwareConcurrency ? navigator.hardwareConcurrency : "unknown"
    },
    getNavigatorCpuClass: function() {
        return navigator.cpuClass ? navigator.cpuClass : "unknown"
    },
    getNavigatorPlatform: function() {
        return navigator.platform ? navigator.platform : "unknown"
    },
    getDoNotTrack: function() {
        return navigator.doNotTrack ? navigator.doNotTrack : navigator.msDoNotTrack ? navigator.msDoNotTrack : window.doNotTrack ? window.doNotTrack : "unknown"
    },
    getTouchSupport: function() {
        var e = 0,
            t = !1;
        "undefined" != typeof navigator.maxTouchPoints ? e = navigator.maxTouchPoints : "undefined" != typeof navigator.msMaxTouchPoints && (e = navigator.msMaxTouchPoints);
        try {
            document.createEvent("TouchEvent"), t = !0
        } catch (e) {}
        var n = "ontouchstart" in window;
        return [e, t, n]
    },
    getCanvasFp: function() {
        var e = [],
            t = document.createElement("canvas");
        t.width = 2e3, t.height = 200, t.style.display = "inline";
        var n = t.getContext("2d");
        return n.rect(0, 0, 10, 10), n.rect(2, 2, 6, 6), e.push("canvas winding:" + (n.isPointInPath(5, 5, "evenodd") === !1 ? "yes" : "no")), n.textBaseline = "alphabetic", n.fillStyle = "#f60", n.fillRect(125, 1, 62, 20), n.fillStyle = "#069", this.options.dontUseFakeFontInCanvas ? n.font = "11pt Arial" : n.font = "11pt no-real-font-123", n.fillText("Cwm fjordbank glyphs vext quiz, ðŸ˜ƒ", 2, 15), n.fillStyle = "rgba(102, 204, 0, 0.2)", n.font = "18pt Arial", n.fillText("Cwm fjordbank glyphs vext quiz, ðŸ˜ƒ", 4, 45), n.globalCompositeOperation = "multiply", n.fillStyle = "rgb(255,0,255)", n.beginPath(), n.arc(50, 50, 50, 0, 2 * Math.PI, !0), n.closePath(), n.fill(), n.fillStyle = "rgb(0,255,255)", n.beginPath(), n.arc(100, 50, 50, 0, 2 * Math.PI, !0), n.closePath(), n.fill(), n.fillStyle = "rgb(255,255,0)", n.beginPath(), n.arc(75, 100, 50, 0, 2 * Math.PI, !0), n.closePath(), n.fill(), n.fillStyle = "rgb(255,0,255)", n.arc(75, 75, 75, 0, 2 * Math.PI, !0), n.arc(75, 75, 25, 0, 2 * Math.PI, !0), n.fill("evenodd"), e.push("canvas fp:" + t.toDataURL()), e.join("~")
    },
    getWebglFp: function() {
        var e, t = function(t) {
                return e.clearColor(0, 0, 0, 1), e.enable(e.DEPTH_TEST), e.depthFunc(e.LEQUAL), e.clear(e.COLOR_BUFFER_BIT | e.DEPTH_BUFFER_BIT), "[" + t[0] + ", " + t[1] + "]"
            },
            n = function(e) {
                var t, n = e.getExtension("EXT_texture_filter_anisotropic") || e.getExtension("WEBKIT_EXT_texture_filter_anisotropic") || e.getExtension("MOZ_EXT_texture_filter_anisotropic");
                return n ? (t = e.getParameter(n.MAX_TEXTURE_MAX_ANISOTROPY_EXT), 0 === t && (t = 2), t) : null
            };
        if (e = this.getWebglCanvas(), !e) return null;
        var i = [],
            a = "attribute vec2 attrVertex;varying vec2 varyinTexCoordinate;uniform vec2 uniformOffset;void main(){varyinTexCoordinate=attrVertex+uniformOffset;gl_Position=vec4(attrVertex,0,1);}",
            r = "precision mediump float;varying vec2 varyinTexCoordinate;void main() {gl_FragColor=vec4(varyinTexCoordinate,0,1);}",
            o = e.createBuffer();
        e.bindBuffer(e.ARRAY_BUFFER, o);
        var s = new Float32Array([-.2, -.9, 0, .4, -.26, 0, 0, .732134444, 0]);
        e.bufferData(e.ARRAY_BUFFER, s, e.STATIC_DRAW), o.itemSize = 3, o.numItems = 3;
        var l = e.createProgram(),
            u = e.createShader(e.VERTEX_SHADER);
        e.shaderSource(u, a), e.compileShader(u);
        var h = e.createShader(e.FRAGMENT_SHADER);
        e.shaderSource(h, r), e.compileShader(h), e.attachShader(l, u), e.attachShader(l, h), e.linkProgram(l), e.useProgram(l), l.vertexPosAttrib = e.getAttribLocation(l, "attrVertex"), l.offsetUniform = e.getUniformLocation(l, "uniformOffset"), e.enableVertexAttribArray(l.vertexPosArray), e.vertexAttribPointer(l.vertexPosAttrib, o.itemSize, e.FLOAT, !1, 0, 0), e.uniform2f(l.offsetUniform, 1, 1), e.drawArrays(e.TRIANGLE_STRIP, 0, o.numItems), null != e.canvas && i.push(e.canvas.toDataURL()), i.push("extensions:" + e.getSupportedExtensions().join(";")), i.push("webgl aliased line width range:" + t(e.getParameter(e.ALIASED_LINE_WIDTH_RANGE))), i.push("webgl aliased point size range:" + t(e.getParameter(e.ALIASED_POINT_SIZE_RANGE))), i.push("webgl alpha bits:" + e.getParameter(e.ALPHA_BITS)), i.push("webgl antialiasing:" + (e.getContextAttributes().antialias ? "yes" : "no")), i.push("webgl blue bits:" + e.getParameter(e.BLUE_BITS)), i.push("webgl depth bits:" + e.getParameter(e.DEPTH_BITS)), i.push("webgl green bits:" + e.getParameter(e.GREEN_BITS)), i.push("webgl max anisotropy:" + n(e)), i.push("webgl max combined texture image units:" + e.getParameter(e.MAX_COMBINED_TEXTURE_IMAGE_UNITS)), i.push("webgl max cube map texture size:" + e.getParameter(e.MAX_CUBE_MAP_TEXTURE_SIZE)), i.push("webgl max fragment uniform vectors:" + e.getParameter(e.MAX_FRAGMENT_UNIFORM_VECTORS)), i.push("webgl max render buffer size:" + e.getParameter(e.MAX_RENDERBUFFER_SIZE)), i.push("webgl max texture image units:" + e.getParameter(e.MAX_TEXTURE_IMAGE_UNITS)), i.push("webgl max texture size:" + e.getParameter(e.MAX_TEXTURE_SIZE)), i.push("webgl max varying vectors:" + e.getParameter(e.MAX_VARYING_VECTORS)), i.push("webgl max vertex attribs:" + e.getParameter(e.MAX_VERTEX_ATTRIBS)), i.push("webgl max vertex texture image units:" + e.getParameter(e.MAX_VERTEX_TEXTURE_IMAGE_UNITS)), i.push("webgl max vertex uniform vectors:" + e.getParameter(e.MAX_VERTEX_UNIFORM_VECTORS)), i.push("webgl max viewport dims:" + t(e.getParameter(e.MAX_VIEWPORT_DIMS))), i.push("webgl red bits:" + e.getParameter(e.RED_BITS)), i.push("webgl renderer:" + e.getParameter(e.RENDERER)), i.push("webgl shading language version:" + e.getParameter(e.SHADING_LANGUAGE_VERSION)), i.push("webgl stencil bits:" + e.getParameter(e.STENCIL_BITS)), i.push("webgl vendor:" + e.getParameter(e.VENDOR)), i.push("webgl version:" + e.getParameter(e.VERSION));
        try {
            var c = e.getExtension("WEBGL_debug_renderer_info");
            c && (i.push("webgl unmasked vendor:" + e.getParameter(c.UNMASKED_VENDOR_WEBGL)), i.push("webgl unmasked renderer:" + e.getParameter(c.UNMASKED_RENDERER_WEBGL)))
        } catch (e) {}
        return e.getShaderPrecisionFormat ? (i.push("webgl vertex shader high float precision:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.HIGH_FLOAT).precision), i.push("webgl vertex shader high float precision rangeMin:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.HIGH_FLOAT).rangeMin), i.push("webgl vertex shader high float precision rangeMax:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.HIGH_FLOAT).rangeMax), i.push("webgl vertex shader medium float precision:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.MEDIUM_FLOAT).precision), i.push("webgl vertex shader medium float precision rangeMin:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.MEDIUM_FLOAT).rangeMin), i.push("webgl vertex shader medium float precision rangeMax:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.MEDIUM_FLOAT).rangeMax), i.push("webgl vertex shader low float precision:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.LOW_FLOAT).precision), i.push("webgl vertex shader low float precision rangeMin:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.LOW_FLOAT).rangeMin), i.push("webgl vertex shader low float precision rangeMax:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.LOW_FLOAT).rangeMax),
            i.push("webgl fragment shader high float precision:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.HIGH_FLOAT).precision), i.push("webgl fragment shader high float precision rangeMin:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.HIGH_FLOAT).rangeMin), i.push("webgl fragment shader high float precision rangeMax:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.HIGH_FLOAT).rangeMax), i.push("webgl fragment shader medium float precision:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.MEDIUM_FLOAT).precision), i.push("webgl fragment shader medium float precision rangeMin:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.MEDIUM_FLOAT).rangeMin), i.push("webgl fragment shader medium float precision rangeMax:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.MEDIUM_FLOAT).rangeMax), i.push("webgl fragment shader low float precision:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.LOW_FLOAT).precision), i.push("webgl fragment shader low float precision rangeMin:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.LOW_FLOAT).rangeMin), i.push("webgl fragment shader low float precision rangeMax:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.LOW_FLOAT).rangeMax), i.push("webgl vertex shader high int precision:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.HIGH_INT).precision), i.push("webgl vertex shader high int precision rangeMin:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.HIGH_INT).rangeMin), i.push("webgl vertex shader high int precision rangeMax:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.HIGH_INT).rangeMax), i.push("webgl vertex shader medium int precision:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.MEDIUM_INT).precision), i.push("webgl vertex shader medium int precision rangeMin:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.MEDIUM_INT).rangeMin), i.push("webgl vertex shader medium int precision rangeMax:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.MEDIUM_INT).rangeMax), i.push("webgl vertex shader low int precision:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.LOW_INT).precision), i.push("webgl vertex shader low int precision rangeMin:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.LOW_INT).rangeMin), i.push("webgl vertex shader low int precision rangeMax:" + e.getShaderPrecisionFormat(e.VERTEX_SHADER, e.LOW_INT).rangeMax), i.push("webgl fragment shader high int precision:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.HIGH_INT).precision), i.push("webgl fragment shader high int precision rangeMin:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.HIGH_INT).rangeMin), i.push("webgl fragment shader high int precision rangeMax:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.HIGH_INT).rangeMax), i.push("webgl fragment shader medium int precision:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.MEDIUM_INT).precision), i.push("webgl fragment shader medium int precision rangeMin:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.MEDIUM_INT).rangeMin), i.push("webgl fragment shader medium int precision rangeMax:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.MEDIUM_INT).rangeMax), i.push("webgl fragment shader low int precision:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.LOW_INT).precision), i.push("webgl fragment shader low int precision rangeMin:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.LOW_INT).rangeMin), i.push("webgl fragment shader low int precision rangeMax:" + e.getShaderPrecisionFormat(e.FRAGMENT_SHADER, e.LOW_INT).rangeMax), i.join("~")) : i.join("~")
    },
    getAdBlock: function() {
        var e = document.createElement("div");
        e.innerHTML = "&nbsp;", e.className = "adsbox";
        var t = !1;
        try {
            document.body.appendChild(e), t = 0 === document.getElementsByClassName("adsbox")[0].offsetHeight, document.body.removeChild(e)
        } catch (e) {
            t = !1
        }
        return t
    },
    getHasLiedLanguages: function() {
        if ("undefined" != typeof navigator.languages) try {
            var e = navigator.languages[0].substr(0, 2);
            if (e !== navigator.language.substr(0, 2)) return !0
        } catch (e) {
            return !0
        }
        return !1
    },
    getHasLiedResolution: function() {
        return screen.width < screen.availWidth || screen.height < screen.availHeight
    },
    getHasLiedOs: function() {
        var e, t = navigator.userAgent.toLowerCase(),
            n = navigator.oscpu,
            i = navigator.platform.toLowerCase();
        e = t.indexOf("windows phone") >= 0 ? "Windows Phone" : t.indexOf("win") >= 0 ? "Windows" : t.indexOf("android") >= 0 ? "Android" : t.indexOf("linux") >= 0 ? "Linux" : t.indexOf("iphone") >= 0 || t.indexOf("ipad") >= 0 ? "iOS" : t.indexOf("mac") >= 0 ? "Mac" : "Other";
        var a;
        if (a = "ontouchstart" in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0, a && "Windows Phone" !== e && "Android" !== e && "iOS" !== e && "Other" !== e) return !0;
        if ("undefined" != typeof n) {
            if (n = n.toLowerCase(), n.indexOf("win") >= 0 && "Windows" !== e && "Windows Phone" !== e) return !0;
            if (n.indexOf("linux") >= 0 && "Linux" !== e && "Android" !== e) return !0;
            if (n.indexOf("mac") >= 0 && "Mac" !== e && "iOS" !== e) return !0;
            if (0 === n.indexOf("win") && 0 === n.indexOf("linux") && n.indexOf("mac") >= 0 && "other" !== e) return !0
        }
        return i.indexOf("win") >= 0 && "Windows" !== e && "Windows Phone" !== e || ((i.indexOf("linux") >= 0 || i.indexOf("android") >= 0 || i.indexOf("pike") >= 0) && "Linux" !== e && "Android" !== e || ((i.indexOf("mac") >= 0 || i.indexOf("ipad") >= 0 || i.indexOf("ipod") >= 0 || i.indexOf("iphone") >= 0) && "Mac" !== e && "iOS" !== e || (0 === i.indexOf("win") && 0 === i.indexOf("linux") && i.indexOf("mac") >= 0 && "other" !== e || "undefined" == typeof navigator.plugins && "Windows" !== e && "Windows Phone" !== e)))
    },
    getHasLiedBrowser: function() {
        var e, t = navigator.userAgent.toLowerCase(),
            n = navigator.productSub;
        if (e = t.indexOf("firefox") >= 0 ? "Firefox" : t.indexOf("opera") >= 0 || t.indexOf("opr") >= 0 ? "Opera" : t.indexOf("chrome") >= 0 ? "Chrome" : t.indexOf("safari") >= 0 ? "Safari" : t.indexOf("trident") >= 0 ? "Internet Explorer" : "Other", ("Chrome" === e || "Safari" === e || "Opera" === e) && "20030107" !== n) return !0;
        var i = eval.toString().length;
        if (37 === i && "Safari" !== e && "Firefox" !== e && "Other" !== e) return !0;
        if (39 === i && "Internet Explorer" !== e && "Other" !== e) return !0;
        if (33 === i && "Chrome" !== e && "Opera" !== e && "Other" !== e) return !0;
        var a;
        try {
            throw "a"
        } catch (e) {
            try {
                e.toSource(), a = !0
            } catch (e) {
                a = !1
            }
        }
        return !(!a || "Firefox" === e || "Other" === e)
    },
    isCanvasSupported: function() {
        var e = document.createElement("canvas");
        return !(!e.getContext || !e.getContext("2d"))
    },
    isWebGlSupported: function() {
        if (!this.isCanvasSupported()) return !1;
        var e, t = document.createElement("canvas");
        try {
            e = t.getContext && (t.getContext("webgl") || t.getContext("experimental-webgl"))
        } catch (t) {
            e = !1
        }
        return !!window.WebGLRenderingContext && !!e
    },
    isIE: function() {
        return "Microsoft Internet Explorer" === navigator.appName || !("Netscape" !== navigator.appName || !/Trident/.test(navigator.userAgent))
    },
    hasSwfObjectLoaded: function() {
        return "undefined" != typeof window.swfobject
    },
    hasMinFlashInstalled: function() {
        return swfobject.hasFlashPlayerVersion("9.0.0")
    },
    addFlashDivNode: function() {
        var e = document.createElement("div");
        e.setAttribute("id", this.options.swfContainerId), document.body.appendChild(e)
    },
    loadSwfAndDetectFonts: function(e) {
        var t = "___fp_swf_loaded";
        window[t] = function(t) {
            e(t)
        };
        var n = this.options.swfContainerId;
        this.addFlashDivNode();
        var i = {
                onReady: t
            },
            a = {
                allowScriptAccess: "always",
                menu: "false"
            };
        swfobject.embedSWF(this.options.swfPath, n, "1", "1", "9.0.0", !1, i, a, {})
    },
    getWebglCanvas: function() {
        var e = document.createElement("canvas"),
            t = null;
        try {
            t = e.getContext("webgl") || e.getContext("experimental-webgl")
        } catch (e) {}
        return t || (t = null), t
    },
    each: function(e, t, n) {
        if (null !== e)
            if (this.nativeForEach && e.forEach === this.nativeForEach) e.forEach(t, n);
            else if (e.length === +e.length) {
            for (var i = 0, a = e.length; i < a; i++)
                if (t.call(n, e[i], i, e) === {}) return
        } else
            for (var r in e)
                if (e.hasOwnProperty(r) && t.call(n, e[r], r, e) === {}) return
    },
    map: function(e, t, n) {
        var i = [];
        return null == e ? i : this.nativeMap && e.map === this.nativeMap ? e.map(t, n) : (this.each(e, function(e, a, r) {
            i[i.length] = t.call(n, e, a, r)
        }), i)
    },
    x64Add: function(e, t) {
        e = [e[0] >>> 16, 65535 & e[0], e[1] >>> 16, 65535 & e[1]], t = [t[0] >>> 16, 65535 & t[0], t[1] >>> 16, 65535 & t[1]];
        var n = [0, 0, 0, 0];
        return n[3] += e[3] + t[3], n[2] += n[3] >>> 16, n[3] &= 65535, n[2] += e[2] + t[2], n[1] += n[2] >>> 16, n[2] &= 65535, n[1] += e[1] + t[1], n[0] += n[1] >>> 16, n[1] &= 65535, n[0] += e[0] + t[0], n[0] &= 65535, [n[0] << 16 | n[1], n[2] << 16 | n[3]]
    },
    x64Multiply: function(e, t) {
        e = [e[0] >>> 16, 65535 & e[0], e[1] >>> 16, 65535 & e[1]], t = [t[0] >>> 16, 65535 & t[0], t[1] >>> 16, 65535 & t[1]];
        var n = [0, 0, 0, 0];
        return n[3] += e[3] * t[3], n[2] += n[3] >>> 16, n[3] &= 65535, n[2] += e[2] * t[3], n[1] += n[2] >>> 16, n[2] &= 65535, n[2] += e[3] * t[2], n[1] += n[2] >>> 16, n[2] &= 65535, n[1] += e[1] * t[3], n[0] += n[1] >>> 16, n[1] &= 65535, n[1] += e[2] * t[2], n[0] += n[1] >>> 16, n[1] &= 65535, n[1] += e[3] * t[1], n[0] += n[1] >>> 16, n[1] &= 65535, n[0] += e[0] * t[3] + e[1] * t[2] + e[2] * t[1] + e[3] * t[0], n[0] &= 65535, [n[0] << 16 | n[1], n[2] << 16 | n[3]]
    },
    x64Rotl: function(e, t) {
        return t %= 64, 32 === t ? [e[1], e[0]] : t < 32 ? [e[0] << t | e[1] >>> 32 - t, e[1] << t | e[0] >>> 32 - t] : (t -= 32, [e[1] << t | e[0] >>> 32 - t, e[0] << t | e[1] >>> 32 - t])
    },
    x64LeftShift: function(e, t) {
        return t %= 64, 0 === t ? e : t < 32 ? [e[0] << t | e[1] >>> 32 - t, e[1] << t] : [e[1] << t - 32, 0]
    },
    x64Xor: function(e, t) {
        return [e[0] ^ t[0], e[1] ^ t[1]]
    },
    x64Fmix: function(e) {
        return e = this.x64Xor(e, [0, e[0] >>> 1]), e = this.x64Multiply(e, [4283543511, 3981806797]), e = this.x64Xor(e, [0, e[0] >>> 1]), e = this.x64Multiply(e, [3301882366, 444984403]), e = this.x64Xor(e, [0, e[0] >>> 1])
    },
    x64hash128: function(e, t) {
        e = e || "", t = t || 0;
        for (var n = e.length % 16, i = e.length - n, a = [0, t], r = [0, t], o = [0, 0], s = [0, 0], l = [2277735313, 289559509], u = [1291169091, 658871167], h = 0; h < i; h += 16) o = [255 & e.charCodeAt(h + 4) | (255 & e.charCodeAt(h + 5)) << 8 | (255 & e.charCodeAt(h + 6)) << 16 | (255 & e.charCodeAt(h + 7)) << 24, 255 & e.charCodeAt(h) | (255 & e.charCodeAt(h + 1)) << 8 | (255 & e.charCodeAt(h + 2)) << 16 | (255 & e.charCodeAt(h + 3)) << 24], s = [255 & e.charCodeAt(h + 12) | (255 & e.charCodeAt(h + 13)) << 8 | (255 & e.charCodeAt(h + 14)) << 16 | (255 & e.charCodeAt(h + 15)) << 24, 255 & e.charCodeAt(h + 8) | (255 & e.charCodeAt(h + 9)) << 8 | (255 & e.charCodeAt(h + 10)) << 16 | (255 & e.charCodeAt(h + 11)) << 24], o = this.x64Multiply(o, l), o = this.x64Rotl(o, 31), o = this.x64Multiply(o, u), a = this.x64Xor(a, o), a = this.x64Rotl(a, 27), a = this.x64Add(a, r), a = this.x64Add(this.x64Multiply(a, [0, 5]), [0, 1390208809]), s = this.x64Multiply(s, u), s = this.x64Rotl(s, 33), s = this.x64Multiply(s, l), r = this.x64Xor(r, s), r = this.x64Rotl(r, 31), r = this.x64Add(r, a), r = this.x64Add(this.x64Multiply(r, [0, 5]), [0, 944331445]);
        switch (o = [0, 0], s = [0, 0], n) {
            case 15:
                s = this.x64Xor(s, this.x64LeftShift([0, e.charCodeAt(h + 14)], 48));
            case 14:
                s = this.x64Xor(s, this.x64LeftShift([0, e.charCodeAt(h + 13)], 40));
            case 13:
                s = this.x64Xor(s, this.x64LeftShift([0, e.charCodeAt(h + 12)], 32));
            case 12:
                s = this.x64Xor(s, this.x64LeftShift([0, e.charCodeAt(h + 11)], 24));
            case 11:
                s = this.x64Xor(s, this.x64LeftShift([0, e.charCodeAt(h + 10)], 16));
            case 10:
                s = this.x64Xor(s, this.x64LeftShift([0, e.charCodeAt(h + 9)], 8));
            case 9:
                s = this.x64Xor(s, [0, e.charCodeAt(h + 8)]), s = this.x64Multiply(s, u), s = this.x64Rotl(s, 33), s = this.x64Multiply(s, l), r = this.x64Xor(r, s);
            case 8:
                o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 7)], 56));
            case 7:
                o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 6)], 48));
            case 6:
                o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 5)], 40));
            case 5:
                o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 4)], 32));
            case 4:
                o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 3)], 24));
            case 3:
                o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 2)], 16));
            case 2:
                o = this.x64Xor(o, this.x64LeftShift([0, e.charCodeAt(h + 1)], 8));
            case 1:
                o = this.x64Xor(o, [0, e.charCodeAt(h)]), o = this.x64Multiply(o, l), o = this.x64Rotl(o, 31), o = this.x64Multiply(o, u), a = this.x64Xor(a, o)
        }
        return a = this.x64Xor(a, [0, e.length]), r = this.x64Xor(r, [0, e.length]), a = this.x64Add(a, r), r = this.x64Add(r, a), a = this.x64Fmix(a), r = this.x64Fmix(r), a = this.x64Add(a, r), r = this.x64Add(r, a), ("00000000" + (a[0] >>> 0).toString(16)).slice(-8) + ("00000000" + (a[1] >>> 0).toString(16)).slice(-8) + ("00000000" + (r[0] >>> 0).toString(16)).slice(-8) + ("00000000" + (r[1] >>> 0).toString(16)).slice(-8)
    }
};