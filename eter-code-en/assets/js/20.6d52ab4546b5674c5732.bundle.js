(window.webpackJsonp=window.webpackJsonp||[]).push([[20,38],{52:function(e,n,t){"use strict";t.r(n),t.d(n,"default",(function(){return c}));var r=t(25),a=t.n(r),i=(t(68),t(18));function o(e,n){for(var t=0;t<n.length;t++){var r=n[t];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}var c=function(){function e(n){var t=n.selector;!function(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}(this,e),this.selector=t,this.init()}var n,t,r;return n=e,(t=[{key:"init",value:function(){for(var e=document.querySelectorAll(this.selector),n=0;n<e.length;n++){var t=e[n].dataset,r={type:"carousel",gap:10,perView:1},o=t.sliderParams?Object(i.default)("".concat(t.sliderParams),r):r,c=new a.a(e[n],o).mount();window.glideSlider=c}}}])&&o(n.prototype,t),r&&o(n,r),e}()},68:function(e,n,t){}}]);