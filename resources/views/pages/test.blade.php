<!DOCTYPE html>
<html>

<head>
    <title>Live preview for Autozone - Auto Dealer Bootstrap HTML5 Website Template #68156</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="【Autozone - Auto Dealer Bootstrap HTML5 Website template #68156】 - Try it before... ✅【LIVE DEMO】 - Click through the pages, examine the images, press the buttons,... ✅【Quality Control】 - this premium Website template has passed QC by professional... ✅【24/7 Pro Support】 - Online Help Center, Live Chat Support" />


    <meta charset="utf-8">
    <script type="text/javascript">window.NREUM || (NREUM = {}), __nr_require = function (e, n, t) { function r(t) { if (!n[t]) { var o = n[t] = { exports: {} }; e[t][0].call(o.exports, function (n) { var o = e[t][1][n]; return r(o || n) }, o, o.exports) } return n[t].exports } if ("function" == typeof __nr_require) return __nr_require; for (var o = 0; o < t.length; o++)r(t[o]); return r }({ 1: [function (e, n, t) { function r() { } function o(e, n, t) { return function () { return i(e, [c.now()].concat(u(arguments)), n ? null : this, t), n ? void 0 : this } } var i = e("handle"), a = e(3), u = e(4), f = e("ee").get("tracer"), c = e("loader"), s = NREUM; "undefined" == typeof window.newrelic && (newrelic = s); var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"], d = "api-", l = d + "ixn-"; a(p, function (e, n) { s[n] = o(d + n, !0, "api") }), s.addPageAction = o(d + "addPageAction", !0), s.setCurrentRouteName = o(d + "routeName", !0), n.exports = newrelic, s.interaction = function () { return (new r).get() }; var m = r.prototype = { createTracer: function (e, n) { var t = {}, r = this, o = "function" == typeof n; return i(l + "tracer", [c.now(), e, t], r), function () { if (f.emit((o ? "" : "no-") + "fn-start", [c.now(), r, o], t), o) try { return n.apply(this, arguments) } catch (e) { throw f.emit("fn-err", [arguments, this, e], t), e } finally { f.emit("fn-end", [c.now()], t) } } } }; a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function (e, n) { m[n] = o(l + n) }), newrelic.noticeError = function (e) { "string" == typeof e && (e = new Error(e)), i("err", [e, c.now()]) } }, {}], 2: [function (e, n, t) { function r(e, n) { if (!o) return !1; if (e !== o) return !1; if (!n) return !0; if (!i) return !1; for (var t = i.split("."), r = n.split("."), a = 0; a < r.length; a++)if (r[a] !== t[a]) return !1; return !0 } var o = null, i = null, a = /Version\/(\S+)\s+Safari/; if (navigator.userAgent) { var u = navigator.userAgent, f = u.match(a); f && u.indexOf("Chrome") === -1 && u.indexOf("Chromium") === -1 && (o = "Safari", i = f[1]) } n.exports = { agent: o, version: i, match: r } }, {}], 3: [function (e, n, t) { function r(e, n) { var t = [], r = "", i = 0; for (r in e) o.call(e, r) && (t[i] = n(r, e[r]), i += 1); return t } var o = Object.prototype.hasOwnProperty; n.exports = r }, {}], 4: [function (e, n, t) { function r(e, n, t) { n || (n = 0), "undefined" == typeof t && (t = e ? e.length : 0); for (var r = -1, o = t - n || 0, i = Array(o < 0 ? 0 : o); ++r < o;)i[r] = e[n + r]; return i } n.exports = r }, {}], 5: [function (e, n, t) { n.exports = { exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart } }, {}], ee: [function (e, n, t) { function r() { } function o(e) { function n(e) { return e && e instanceof r ? e : e ? f(e, u, i) : i() } function t(t, r, o, i) { if (!d.aborted || i) { e && e(t, r, o); for (var a = n(o), u = v(t), f = u.length, c = 0; c < f; c++)u[c].apply(a, r); var p = s[y[t]]; return p && p.push([b, t, r, a]), a } } function l(e, n) { h[e] = v(e).concat(n) } function m(e, n) { var t = h[e]; if (t) for (var r = 0; r < t.length; r++)t[r] === n && t.splice(r, 1) } function v(e) { return h[e] || [] } function g(e) { return p[e] = p[e] || o(t) } function w(e, n) { c(e, function (e, t) { n = n || "feature", y[t] = n, n in s || (s[n] = []) }) } var h = {}, y = {}, b = { on: l, addEventListener: l, removeEventListener: m, emit: t, get: g, listeners: v, context: n, buffer: w, abort: a, aborted: !1 }; return b } function i() { return new r } function a() { (s.api || s.feature) && (d.aborted = !0, s = d.backlog = {}) } var u = "nr@context", f = e("gos"), c = e(3), s = {}, p = {}, d = n.exports = o(); d.backlog = s }, {}], gos: [function (e, n, t) { function r(e, n, t) { if (o.call(e, n)) return e[n]; var r = t(); if (Object.defineProperty && Object.keys) try { return Object.defineProperty(e, n, { value: r, writable: !0, enumerable: !1 }), r } catch (i) { } return e[n] = r, r } var o = Object.prototype.hasOwnProperty; n.exports = r }, {}], handle: [function (e, n, t) { function r(e, n, t, r) { o.buffer([e], r), o.emit(e, n, t) } var o = e("ee").get("handle"); n.exports = r, r.ee = o }, {}], id: [function (e, n, t) { function r(e) { var n = typeof e; return !e || "object" !== n && "function" !== n ? -1 : e === window ? 0 : a(e, i, function () { return o++ }) } var o = 1, i = "nr@id", a = e("gos"); n.exports = r }, {}], loader: [function (e, n, t) { function r() { if (!E++) { var e = x.info = NREUM.info, n = l.getElementsByTagName("script")[0]; if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && n)) return s.abort(); c(y, function (n, t) { e[n] || (e[n] = t) }), f("mark", ["onload", a() + x.offset], null, "api"); var t = l.createElement("script"); t.src = "https://" + e.agent, n.parentNode.insertBefore(t, n) } } function o() { "complete" === l.readyState && i() } function i() { f("mark", ["domContent", a() + x.offset], null, "api") } function a() { return O.exists && performance.now ? Math.round(performance.now()) : (u = Math.max((new Date).getTime(), u)) - x.offset } var u = (new Date).getTime(), f = e("handle"), c = e(3), s = e("ee"), p = e(2), d = window, l = d.document, m = "addEventListener", v = "attachEvent", g = d.XMLHttpRequest, w = g && g.prototype; NREUM.o = { ST: setTimeout, SI: d.setImmediate, CT: clearTimeout, XHR: g, REQ: d.Request, EV: d.Event, PR: d.Promise, MO: d.MutationObserver }; var h = "" + location, y = { beacon: "bam.nr-data.net", errorBeacon: "bam.nr-data.net", agent: "js-agent.newrelic.com/nr-1099.min.js" }, b = g && w && w[m] && !/CriOS/.test(navigator.userAgent), x = n.exports = { offset: u, now: a, origin: h, features: {}, xhrWrappable: b, userAgent: p }; e(1), l[m] ? (l[m]("DOMContentLoaded", i, !1), d[m]("load", r, !1)) : (l[v]("onreadystatechange", o), d[v]("onload", r)), f("mark", ["firstbyte", u], null, "api"); var E = 0, O = e(5) }, {}] }, {}, ["loader"]);</script>
    <meta property="fb:admins" content="720898483" />
    <meta property="fb:admins" content="1129631948" />
    <meta property="fb:admins" content="100001777951090" />
    <link rel="publisher" href="https://plus.google.com/116173187155256042113" />
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="https://s.tmimgcdn.com/img/logo-touch/mstile-310x150.png?d=900f612" />
    <meta name="msapplication-TileImage" content="https://s.tmimgcdn.com/img/logo-touch/mstile-310x310.png?d=900f612" />
    <meta name="msapplication-TileImage" content="https://s.tmimgcdn.com/img/logo-touch/mstile-150x150.png?d=900f612" />
    <meta name="msapplication-TileImage" content="https://s.tmimgcdn.com/img/logo-touch/mstile-144x144.png?d=900f612" />
    <meta name="msapplication-TileImage" content="https://s.tmimgcdn.com/img/logo-touch/mstile-70x70.png?d=900f612" />
    <meta name="msapplication-config" content="https://s.tmimgcdn.com/img/logo-touch/browserconfig.xml?d=900f612" />

    <link rel="icon" href="https://s.tmimgcdn.com/img/favicon.ico?d=900f612" type="image/x-icon" />
    <link rel="shortcut icon" href="https://s.tmimgcdn.com/img/favicon.ico?d=900f612" type="image/x-icon" />
    <link rel="icon" type="image/png" href="https://s.tmimgcdn.com/img/logo-touch/favicon-16x16.png?d=900f612" sizes="16x16">
    <link rel="icon" type="image/png" href="https://s.tmimgcdn.com/img/logo-touch/favicon-32x32.png?d=900f612" sizes="32x32">
    <link rel="icon" type="image/png" href="https://s.tmimgcdn.com/img/logo-touch/favicon-96x96.png?d=900f612" sizes="96x96">

    <link rel="icon" type="image/png" sizes="36x36" href="https://s.tmimgcdn.com/img/logo-touch/android-chrome-36.png?d=900f612" />
    <link rel="icon" type="image/png" sizes="48x48" href="https://s.tmimgcdn.com/img/logo-touch/android-chrome-48.png?d=900f612" />
    <link rel="icon" type="image/png" sizes="72x72" href="https://s.tmimgcdn.com/img/logo-touch/android-chrome-72.png?d=900f612" />
    <link rel="icon" type="image/png" sizes="96x96" href="https://s.tmimgcdn.com/img/logo-touch/android-chrome-96.png?d=900f612" />
    <link rel="icon" type="image/png" sizes="144x144" href="https://s.tmimgcdn.com/img/logo-touch/android-chrome-144.png?d=900f612" />
    <link rel="icon" type="image/png" sizes="192x192" href="https://s.tmimgcdn.com/img/logo-touch/android-chrome-192.png?d=900f612" />

    <link rel="mask-icon" href="https://s.tmimgcdn.com/img/logo-touch/safari-pinned-tab.svg?d=900f612">

    <link rel="apple-touch-icon" sizes="180x180" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-precomposed.png?d=900f612" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-180.png?d=900f612" />
    <link rel="apple-touch-icon" sizes="152x152" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-152.png?d=900f612" />
    <link rel="apple-touch-icon" sizes="144x144" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-144.png?d=900f612" />
    <link rel="apple-touch-icon" sizes="120x120" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-120.png?d=900f612" />
    <link rel="apple-touch-icon" sizes="114x114" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-114.png?d=900f612" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-76.png?d=900f612" />
    <link rel="apple-touch-icon" sizes="72x72" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-72.png?d=900f612" />
    <link rel="apple-touch-icon" sizes="60x60" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-60.png?d=900f612" />
    <link rel="apple-touch-icon" sizes="57x57" href="https://s.tmimgcdn.com/img/logo-touch/apple-touch-icon-57.png?d=900f612" />

    <meta name="monster_page_type" content="Demo" />
    <meta name="monster_product_category" content="Cars &amp; Motorcycles" />
    <meta name="monster_product_subcategory" content="Car Dealer Templates" />
    <meta name="monster_product_type" content="Website Templates" />
    <meta name="monster_template_id" content="68156" />
    <meta name="monster_template_author" content="Design_Factory" />
    <meta name="monster_template_categories" content="Car Dealer Templates / Car Repair Templates / Car Rental Templates / Car Club Templates / Car Insurance Templates / Auto Parts Templates / Car Racing Templates / Car Scrap Yard Templates / Car Templates / Cars &amp; Motorcycles / Motorcycles / Auto Towing" />
    <meta name="monster_template_download_count" content="30" />
    <meta name="monster_template_price" content="75" />

    <script>
        !function () { var e = function (e) { return !!document.head.querySelector("[name=" + e + "]") && document.head.querySelector("[name=" + e + "]").content }; window.dataLayer = window.dataLayer || []; var t, o, a, r = { pageType: e("monster_page_type") }; e("monster_product_type") && -1 === ["Product", "Demo", "SearchNoResult"].indexOf(r.pageType) && (r.pageType = "Portal"), e("monster_product_category") && -1 === ["Product", "Demo", "SearchNoResult"].indexOf(r.pageType) && (r.pageType = "Category"), -1 !== ["Product", "Demo", "Portal", "Category"].indexOf(r.pageType) && (r.portalContent = e("monster_product_type") ? e("monster_product_type") : "All Themes", r.portalName = e("monster_product_portal") ? e("monster_product_portal") : (t = r.portalContent, o = { "CMS Templates": ["WordPress Themes", "Drupal Themes", "Joomla Templates", "Moto CMS 3 Templates", "Moto CMS HTML Templates", "Flash CMS Templates"], "Web templates": ["Responsive Templates", "Landing Page Templates", "Bootstrap Themes", "HTML5 Site Templates", "PSD Templates", "Unbounce Templates", "Photo Gallery Templates", "Newsletter Templates", "Muse Templates", "Weblium Website Concepts", "eBay Templates", "Admin Templates"], "E-commerce templates": ["Magento Themes", "VirtueMart Templates", "ZenCart Templates", "PrestaShop Themes", "OpenCart Templates", "Shopify Themes", "X-Cart Templates", "WooCommerce Themes", "MotoCMS Ecommerce"], "Plugins & Assets": ["WordPress Plugins", "PrestaShop Modules", "Magento 2 Extensions", "Fonts and Icon Fonts", "UI Elements", "After Effects Templates", "PowerPoint Templates", "Keynote Templates", "Resume Templates", "App Templates", "Corporate Design"] }, a = "All portals", Object.keys(o).forEach(function (e) { o[e].forEach(function (o) { o.toLowerCase() === t.toLowerCase() && (a = e) }) }), a), r.categoryName = e("monster_product_category") ? e("monster_product_category") : "All categories", r.subCategoryName = e("monster_product_subcategory") ? e("monster_product_subcategory") : "All categories"), "Product" !== r.pageType && "Demo" !== r.pageType || (r.vendor = e("monster_template_author"), r.productID = e("monster_template_id"), r.productPrice = e("monster_template_price"), r.productSales = e("monster_template_download_count"), r.productCategory = e("monster_template_categories")), "SearchNoResult" === r.pageType && (r.pageType = "Search"), window.dataLayer.push(r) }();
    </script>


    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MS2BNB');</script>
    <link rel="canonical" href="https://www.templatemonster.com/demo/68156.html" />
    <link rel="alternate" hreflang="en" href="https://www.templatemonster.com/demo/68156.html" />
    <link rel="alternate" hreflang="de" href="https://www.templatemonster.com/de/demo/68156.html" />
    <link rel="alternate" hreflang="ru" href="https://www.templatemonster.com/ru/demo/68156.html" />
    <link rel="alternate" hreflang="es" href="https://www.templatemonster.com/es/demo/68156.html" />
    <link rel="alternate" hreflang="fr" href="https://www.templatemonster.com/fr/demo/68156.html" />
    <link rel="alternate" hreflang="it" href="https://www.templatemonster.com/it/demo/68156.html" />
    <link rel="alternate" hreflang="pl" href="https://www.templatemonster.com/pl/demo/68156.html" />
    <link rel="alternate" hreflang="tr" href="https://www.templatemonster.com/tr/demo/68156.html" />
    <link rel="alternate" hreflang="pt" href="https://www.templatemonster.com/pt-br/demo/68156.html" />
    <link rel="alternate" hreflang="uk" href="https://www.templatemonster.com/ua/demo/68156.html" />
    <link rel="alternate" hreflang="zh" href="https://www.templatemonster.com/cn/demo/68156.html" />
    <link rel="alternate" hreflang="hu" href="https://www.templatemonster.com/hu/demo/68156.html" />
    <link rel="alternate" hreflang="cs" href="https://www.templatemonster.com/cz/demo/68156.html" />
    <link rel="alternate" hreflang="nl" href="https://www.templatemonster.com/nl/demo/68156.html" />
    <link rel="alternate" hreflang="sv" href="https://www.templatemonster.com/sv/demo/68156.html" />

    <meta property="og:url" content="https://www.templatemonster.com/demo/68156.html" />
    <meta property="og:title" content="Live preview for Autozone - Auto Dealer Bootstrap HTML5 Website Template #68156" />
    <meta property="og:image" content="https://s.tmimgcdn.com/scr/68100/autozone-auto-dealer-bootstrap-html5-website-template_68156-big.jpg" />
    <meta name="twitter:image" content="https://s.tmimgcdn.com/scr/68100/autozone-auto-dealer-bootstrap-html5-website-template_68156-big.jpg" />

    <meta property="og:locale" content="en_US" />
    <meta property="og:locale:alternate" content="es_ES" />
    <meta property="og:locale:alternate" content="ru_RU" />
    <meta property="og:locale:alternate" content="de_DE" />
    <meta property="og:locale:alternate" content="pl_PL" />
    <meta property="og:locale:alternate" content="it_IT" />
    <meta property="og:locale:alternate" content="tr_TR" />
    <meta property="og:locale:alternate" content="fr_FR" />
    <meta property="og:locale:alternate" content="pt_BR" />
    <meta property="og:locale:alternate" content="nl_NL" />
    <meta property="og:locale:alternate" content="zh_CN" />
    <meta property="og:locale:alternate" content="cs_CZ" />
    <meta property="og:locale:alternate" content="uk_UA" />
    <meta property="og:locale:alternate" content="hu_HU" />
    <meta property="og:locale:alternate" content="sv_SE" />

    <meta property="og:type" content="product" />

    <meta property="og:site_name" content="TemplateMonster" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="templatemonster" />
    <meta name="twitter:creator" content="templatemonster" />
    <style>:root{content:"Fri Oct 26 2018 11:17:54 GMT-0400 (EDT)---demo"}html:not(.js) body .navigation [class*=sub-menu-],html:not(.js) body .sub-menu__additional{display:none}[class*=icon-]:before{content:attr(data-icon);-moz-osx-font-smoothing:grayscale}.icon-chat,[class*=icon-]:before{speak:none;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased}.icon-chat{font-style:normal}.icon-chat:before{content:"\e038"}.tm-icon:before{speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;background:0 0!important}.tm-icon.icon-cart2:before{content:"\e98b"}.tm-icon.icon-services:before{content:"\e98c"}.tm-icon.icon-response-tablet:before{content:"\e98d"}.tm-icon.icon-response-mobile:before{content:"\e98e"}.tm-icon.icon-response-desktop:before{content:"\e98f"}.tm-icon.icon-chat:before{content:"\e991"}.tm-icon.icon-arrow-top2:before{content:"\e993"}.tm-icon.icon-open:before{content:"\e99f"}.button{height:40px;line-height:40px;border-radius:3px;padding:0 20px;color:#fff;font-size:14px;font-weight:400!important;position:relative;display:inline-block;vertical-align:top;text-decoration:none!important;text-align:center;border:0;outline:0!important;box-shadow:none!important;cursor:pointer;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.button.btn-important{background:#f4511e;background:linear-gradient(180deg,#f4511e 0,#d84315)}.button.tm-icon:before{width:20px;height:20px;margin-right:10px;display:inline-block;position:relative;top:-2px;font-size:20px;vertical-align:middle}a{cursor:pointer}*{outline:medium none!important;margin:0;padding:0}body,html{height:100%}html{font-size:100%}body{background-color:#fff;color:#243238;font-size:13px;line-height:16px;margin:0;min-width:320px;overflow:hidden;width:100%}a{color:#2196f3;text-decoration:none}ul{list-style-type:none;margin:0 0 8px 25px;padding:0}li{line-height:16px}img{border:0 none;height:auto;max-width:100%;vertical-align:middle}.live-container{margin-left:auto;margin-right:auto}.live-container:after,.live-container:before{content:"";display:table;line-height:0}.live-container:after{clear:both}.js-none{display:none}.btn-group{display:inline-block;font-size:0;position:relative;vertical-align:middle;white-space:nowrap}#advanced{position:relative;z-index:3;top:0;left:0}#advanced .top_container{width:100%}.topbar_info__wrapper{overflow:hidden;height:inherit}#iframelive,iframe{width:100%;background-color:#fff}#iframelive{height:100%;background:#cfd8dc}#frame{position:relative;height:100%;border:0}.DemoPanel{box-sizing:content-box;background:#243238;box-shadow:0 5px 10px rgba(36,50,56,.25);-webkit-animation:a .3s cubic-bezier(.86,0,.07,1) forwards;-moz-animation:a .3s cubic-bezier(.86,0,.07,1) forwards;-ms-animation:a .3s cubic-bezier(.86,0,.07,1) forwards;-o-animation:a .3s cubic-bezier(.86,0,.07,1) forwards}@keyframes a{0%{opacity:0;transform:scale(0);height:0}to{opacity:1;transform:scale(1);height:60px}}.DemoPanel__title{display:flex;height:100%;max-width:calc(100% - 40px);position:relative;box-sizing:border-box;padding:20px}.DemoPanel__name{font-size:14px;line-height:21px;text-decoration:none;color:#243238;margin:0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-weight:700;color:#90caf9;padding:0}.DemoPanel__info{display:flex;justify-content:center;height:60px}.DemoPanel__container{display:flex;justify-content:space-between}.DemoPanel__container:after,.DemoPanel__container:before{display:none}.DemoPanel__response{display:flex;align-items:center;margin:0;padding:0 10px;height:100%}.DemoPanel__button{float:left;width:218px;min-width:218px;margin:0 10px;position:relative}.DemoPanel .DemoPanel__addToCart{position:static;float:left;width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;margin-top:10px}.DemoPanel .DemoPanel__addToCart:after{content:"";position:absolute;height:calc(100% - -10px);width:calc(100% - -20px);top:-10px;left:-10px}.DemoPanel .DemoPanel__addToCart.js-none{display:none}.DemoPanel__buttonChat{font-size:14px;line-height:21px;color:#243238;width:100%;margin:0 10px;background:0 0;color:#b0bec5;border:1px solid #b0bec5;border-radius:3px;top:10px;box-sizing:border-box;cursor:pointer;padding:0 20px;text-align:center;touch-action:manipulation;vertical-align:top;text-decoration:none;outline:0;height:40px;line-height:40px}.DemoPanel__buttonChat:before{content:"";position:absolute;width:calc(100% - -20px);height:60px;top:-11px;left:-10px;cursor:pointer}.DemoPanelDropdown{position:relative}.DemoPanelDropdown__itemActive{display:flex;cursor:pointer;padding:0 20px;height:100%;align-items:center;color:#b0bec5;position:relative}.DemoPanelDropdown__list{width:410px;margin:0}.DemoPanelDropdown__item{border-bottom:1px solid #455a64;padding:20px 20px 20px 50px;position:relative;cursor:pointer}.DemoPanelDropdown__item:after{content:"";position:absolute;width:20px;height:20px;left:20px;top:20px;border-radius:50%;border:2px solid #b0bec5}.DemoPanelDropdown__itemDescribe{font-size:13px;line-height:20px;text-decoration:none;color:#243238;color:#b0bec5;display:block;position:relative}.DemoPanelDropdown__itemDescribe:before{content:"";position:absolute;left:-50px;top:-20px;width:calc(100% - -70px);height:calc(100% - -40px)}.DemoPanelDropdown__icon{margin-right:10px}.DemoPanelDropdown--services{font-size:14px;line-height:21px;text-decoration:none;color:#243238;color:#b0bec5}.DemoPanelDropdown--services .DemoPanelDropdown__list{width:340px}.DemoPanelDropdown--services .DemoPanelDropdown__item{border-bottom:0;border-top:1px solid #455a64}.DemoPanelDropdown--services .DemoPanelDropdown__item:after{border-color:#cfd8dc;border-radius:3px}.DemoPanelDropdown--services .DemoPanelDropdown__item:before{position:absolute;content:"\e964";display:none;color:#fff;top:22px;left:24px;font-size:10px;z-index:1}.DemoPanelDropdown--services .DemoPanelDropdown__item:first-child{border-top:0}.DemoPanelDropdown--services .DemoPanelDropdown__itemDescribe{display:flex;justify-content:space-between}.DemoPanelToggle{position:absolute;cursor:pointer;width:60px;height:60px;right:0;top:0;z-index:4;color:#b0bec5}.DemoPanelToggle:before{position:absolute;font-size:7px;top:27px;left:25px}.DemoPanelToggle--bg{display:none;position:absolute;width:0;height:0;border-top:45px solid transparent;border-bottom:45px solid transparent;border-left:45px solid #243238;box-shadow:0 5px 10px rgba(36,50,56,.25);opacity:.3;transform:rotate(-45deg);left:25px;top:-30px}@media (max-width:2459px){.DemoPanelDropdown__text--full{display:none}}@media (max-width:1879px){.DemoPanelToggle{width:51px}.DemoPanelToggle:before{left:20px}}@media (max-width:1519px){.DemoPanelDropdown__text{text-transform:capitalize}.DemoPanelDropdown__icon,.DemoPanelDropdown__text--short{display:none}.DemoPanelDropdown--services{margin:0}.DemoPanelToggle{width:43px}.DemoPanelToggle:before{left:16px}}@media (max-width:1339px){.DemoPanel .DemoPanel__addToCart{text-align:left}.DemoPanel__button{width:138px;min-width:138px}.DemoPanel__buttonText{display:none}.DemoPanel__buttonChat{width:40px;min-width:40px;padding:0 10px}.DemoPanelFrame{position:relative;top:0}.DemoPanelFrame--top{top:60px}}@media (max-width:959px){.DemoPanel__buttonChat{display:none}}@media (max-width:719px){.DemoPanel__title{max-width:100%}.DemoPanel__name{display:none}.DemoPanelDropdown{margin-right:50px}.DemoPanelDropdown--services{display:none}.DemoPanelDropdown__list{width:300px}}@media (max-width:389px){.DemoPanel__title{max-width:47px}.DemoPanel__name{display:none}}html:not(.js) body{font-family:Helvetica,Arial,sans-serif}html:not(.js) body .nav.main-menu>li>a{letter-spacing:-.4px}.sub-menu-1 li a b{background-color:#f0f0f0}.sub-menu-1 li:first-child a b{background-color:#1a1e23}.sub-menu-1 li:nth-child(2) a b{background-color:#dce1e6}.sub-menu-1 li:nth-child(3) a b{background-color:#ef9145}.sub-menu-1 li:nth-child(4) a b{background-color:#aad8e5}.sub-menu-1 li:nth-child(5) a b{background-color:#e06f40}.sub-menu-1 li:nth-child(6) a b{background-color:#9b6896}.sub-menu-1 li:nth-child(7) a b{background-color:#665387}</style>
    <script>
        !function (e) {
            "use strict"
            var n = function (n, t, o) {
                function i(e) { return f.body ? e() : void setTimeout(function () { i(e) }) } var d, r, a, l, f = e.document, s = f.createElement("link"), u = o || "all"
                return t ? d = t : (r = (f.body || f.getElementsByTagName("head")[0]).childNodes, d = r[r.length - 1]), a = f.styleSheets, s.rel = "stylesheet", s.href = n, s.media = "only x", i(function () { d.parentNode.insertBefore(s, t ? d : d.nextSibling) }), l = function (e) {
                    for (var n = s.href, t = a.length; t--;)if (a[t].href === n) return e()
                    setTimeout(function () { l(e) })
                }, s.addEventListener && s.addEventListener("load", function () { this.media = u }), s.onloadcssdefined = l, l(function () { s.media !== u && (s.media = u) }), s
            };
            "undefined" != typeof exports ? exports.loadCSS = n : e.loadCSS = n
        }("undefined" != typeof global ? global : this);
        function isLocalStorageExists() {
            try {
                localStorage.setItem('t*', 1);
                localStorage.removeItem('t*');
                return true;
            } catch (e) {
                return false;
            }
        }
    </script>
    <script>
    </script>
    <script>
        loadCSS("https://s.tmimgcdn.com/css/standalone/livedemo.css?d=de2e02c");
        loadCSS("https://s.tmimgcdn.com/css/owl.carousel.min.css?d=de2e02c");
        loadCSS("https://s.tmimgcdn.com/css/owl.theme.min.css?d=de2e02c");
    </script>
    <script type="text/javascript">
        window.template = { 'id': 68156, 'price': 1 }
    </script>
    <script>document.cookie = "chat_presales=1; expires=03 Jul 2036 21:44:38 GMT; domain=.templatemonster.com; path=/";</script>
    <script>document.cookie = "callback_notice=closed; expires=03 Jul 2036 21:44:38 GMT; domain=.templatemonster.com; path=/";</script>
    <script>
        window.defaultPriceVariationExperiment = 0;
    </script>
</head>

<body itemscope itemtype="http://schema.org/WebPage" id="demo-page" class=" is-responsive">
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MS2BNB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


    <div class="DemoPanelWrap relative js-demo-upper-menu js-template-id " id="headerlivedemo" data-template_id="68156"
        data-brand="Website" data-property-type-id="50108" data-categories="Cars &amp; Motorcycles / Car Templates / Car Dealer Templates"
        data-variant="premium" data-product_name="Website Templates">
        <div id="advanced" class="DemoPanel">
            <div class="DemoPanel__container top_container live-container">
                <div class="DemoPanel__chapter">

                    <div class="DemoPanel__titleWrap DemoPanel__title--js">
                        <a href="https://www.templatemonster.com/website-templates/autozone-auto-dealer-bootstrap-html5-website-template-68156.html"
                            class="DemoPanel__title">
                            <span class="DemoPanel__titleIcon tm-icon icon-arrow-top2"></span>
                            <h1 title="Autozone - Auto Dealer Bootstrap HTML5 Website Template" class="DemoPanel__name">Autozone
                                - Auto Dealer Bootstrap HTML5 Website Template</h1>
                        </a>
                        <a href="https://livedemo00.template-help.com/wt_prod-14633" target="_blank" class="DemoPanel__titleBtn tm-icon icon-open">
                            <div class="DemoPanelTooltip">
                                <div class="DemoPanelTooltip__description"> Preview without toolbar</div>
                            </div>
                        </a>
                    </div>

                    <div class="DemoPanel__info DemoPanel__info--js topbar_info">
                        <div class="responsive-block">
                            <ul id="responsivator" class="DemoPanel__response DemoPanel__response--js">
                                <li class="response DemoPanel__responseItem DemoPanel__responseItem--mobile tm-icon icon-response-mobile"
                                    id="iphone-portrait">
                                    <span class="DemoPanel__responseItemText"> Mobile</span>
                                    <div class="DemoPanelTooltip">
                                        <div class="DemoPanelTooltip__description"> Mobile</div>
                                    </div>
                                </li>
                                <li class="response DemoPanel__responseItem DemoPanel__responseItem--tablet tm-icon icon-response-tablet"
                                    id="tablet-portrait">
                                    <span class="DemoPanel__responseItemText"> Tablet</span>
                                    <div class="DemoPanelTooltip">
                                        <div class="DemoPanelTooltip__description"> Tablet</div>
                                    </div>
                                </li>
                                <li class="response active DemoPanel__responseItem DemoPanel__responseItem--desktop tm-icon icon-response-desktop"
                                    id="desktop">
                                    <span class="DemoPanel__responseItemText"> Desktop</span>
                                    <div class="DemoPanelTooltip">
                                        <div class="DemoPanelTooltip__description"> Desktop</div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="js-subscription-after">
                            <!-- place for button buy subscriptions button (membership) -->
                        </div>
                    </div>
                </div>

                <div class="DemoPanel__chapter DemoPanel__chapter--center">


                    <div class="DemoPanel__button DemoPanel__addToCart--js btn-group buy_now vertical-alignment">
                        <span class="  DemoPanel__addToCart DemoPanel__goToCart--js DemoPanel__addToCartButton--js button btn-important tm-icon icon-cart2 js-demo-buy-button"
                            data-href="https://www.templatemonster.com/cart.php?add=68156&amp;price_variant=regular"
                            data-default-variant="regular" data-variant='regular' data-price='75' data-full_price='75'
                            id="livedemo-buy-now-variant-regular">
                            <span class="DemoPanel__addToCart--textLong btn-inner">Add to Cart</span>
                            <span class="DemoPanel__addToCart--textShort btn-inner ">To Cart</span>
                        </span>
                        <span class=" js-none DemoPanel__addToCart DemoPanel__goToCart--js DemoPanel__addToCartButton--js button btn-important tm-icon icon-cart2 js-demo-buy-button"
                            data-href="https://www.templatemonster.com/cart.php?add=68156&amp;price_variant=installation"
                            data-variant='installation' data-price='144' data-full_price='144' id="livedemo-buy-now-variant-installation">
                            <span class="DemoPanel__addToCart--textLong btn-inner">Add to Cart</span>
                            <span class="DemoPanel__addToCart--textShort btn-inner ">To Cart</span>
                        </span>
                        <span class=" js-none DemoPanel__addToCart DemoPanel__goToCart--js DemoPanel__addToCartButton--js button btn-important tm-icon icon-cart2 js-demo-buy-button"
                            data-href="https://www.templatemonster.com/cart.php?add=68156&amp;price_variant=exclusive"
                            data-variant='exclusive' data-price='2100' data-full_price='2100' id="livedemo-buy-now-variant-exclusive">
                            <span class="DemoPanel__addToCart--textLong btn-inner">Add to Cart</span>
                            <span class="DemoPanel__addToCart--textShort btn-inner ">To Cart</span>
                        </span>
                        <span id="livedemo-go-to-cart-regular" class="DemoPanel__addToCart DemoPanel__goToCartAdded--js DemoPanel__addToCartButton--js button btn-important tm-icon icon-cart2 already-get js-btn js-none"
                            data-href="https://www.templatemonster.com/cart.php?add=68156&amp;price_variant=regular">
                            <span class="DemoPanel__addToCart--textLong btn-inner">Added to Cart</span>
                            <span class="DemoPanel__addToCart--textShort btn-inner">in cart</span>
                        </span>
                    </div>

                    <div class='DemoPanel__downloadWrap topbar_info__wrapper js-topbar_info__wrapper'>
                        <!-- place for download or downloaded block (membership) -->
                    </div>
                </div>

                <div class="DemoPanel__chapter">
                    <div class="DemoPanel__chapterInner">
                        <span class="DemoPanel__button DemoPanel__buttonChat DemoPanel__buttonChat--js">
                            <b class="DemoPanel__buttonChatIcon tm-icon icon-chat"></b>
                            <span class="DemoPanel__buttonText">Start Chat</span>
                            <div class="DemoPanelTooltip">
                                <div class="DemoPanelTooltip__description">Start Chat</div>
                            </div>
                        </span>

                        <div class="DemoPanelDropdown">
                            <div id="livedemo-offer-trigger" class="DemoPanelDropdown__itemActive DemoPanelDropdown__license--js price-wrapper regular js-offer-trigger js-popup-open dropdown-arrow "
                                data-popupi="js-popupi-3">
                                <span class="DemoPanelDropdown__itemActivePrice price js-price js-price-topbar hide-price">$75</span>
                                <span id="buy-button" class="DemoPanelDropdown__itemActiveIcon tm-icon icon-arrow-top2"
                                    data-toggle="dropdown"></span>
                                <div class="DemoPanelTooltip">
                                    <div class="DemoPanelTooltip__description"> Choose the License</div>
                                </div>
                            </div>
                            <div class="DemoPanelDropdown__listWrap DemoPanelDropdown__licenseContent--js box-drop js-popup-content js-popupi-3"
                                id="dropdown">
                                <ul class="DemoPanelDropdown__list DemoPanelDropdown__list--js list-drop">
                                    <li id="livedemo-licence-regular" class="DemoPanelDropdown__item DemoPanelDropdown__item--js js-demo-list-li                                                    DemoPanelDropdown__item--active"
                                        data-default-variant="regular" data-variant='regular'>
                                        <span class="DemoPanelDropdown__itemDescribe js-drop" data-href="https://www.templatemonster.com/cart.php?add=68156&amp;price_variant=regular">
                                            <span class="DemoPanelDropdown__itemTitle">
                                                <span class="license-name js-license-name">I want to use it <span class="item-dropdown__choose bold">only
                                                        once</span> </span>

                                                <span class="DemoPanelDropdown__itemPrice price js-price hide-price"
                                                    data-discount="75" data-price="75">
                                                    $75
                                                </span>
                                            </span>
                                            Under a Single Site License for the template you are granted a
                                            non-exclusive non-transferable permission to use the template on a single
                                            domain.
                                        </span>
                                    </li>
                                    <li id="livedemo-licence-installation" class="DemoPanelDropdown__item DemoPanelDropdown__item--js js-demo-list-li"
                                        data-variant='installation'>
                                        <span class="DemoPanelDropdown__itemDescribe js-drop" data-href="https://www.templatemonster.com/cart.php?add=68156&amp;price_variant=installation">
                                            <span class="DemoPanelDropdown__itemTitle">
                                                <span class="license-name js-license-name">I want to use it <span class="item-dropdown__choose bold">multiple
                                                        times</span> </span><span class="rd-dropdown-label__sale t4 SaleLabel">save
                                                    60%</span>

                                                <span class="DemoPanelDropdown__itemPrice price js-price hide-price"
                                                    data-discount="144" data-price="144">
                                                    $144
                                                </span>
                                            </span>
                                            Under Developer's License you are granted a non-exclusive permission to use
                                            the template on up to 5 domains.
                                        </span>
                                    </li>
                                    <li id="livedemo-licence-exclusive" class="DemoPanelDropdown__item DemoPanelDropdown__item--js js-demo-list-li"
                                        data-variant='exclusive'>
                                        <span class="DemoPanelDropdown__itemDescribe js-drop" data-href="https://www.templatemonster.com/cart.php?add=68156&amp;price_variant=exclusive">
                                            <span class="DemoPanelDropdown__itemTitle">
                                                <span class="license-name js-license-name">I want to be <span class="item-dropdown__choose bold">the
                                                        only buyer</span> of the template</span>

                                                <span class="DemoPanelDropdown__itemPrice price js-price hide-price"
                                                    data-discount="2100" data-price="2100">
                                                    $2,100
                                                </span>
                                            </span>
                                            A Buyout License ensures that you are the last buyer/licensee of the
                                            template. You are granted a non-exclusive non-transferable permission to
                                            use the template on multiple domains.
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="DemoPanelDropdown DemoPanelDropdown--services">
                            <div class="DemoPanelDropdown__itemActive DemoPanelDropdown__itemActive--js DemoPanelDropdown__services--js price-wrapper js-offer-trigger js-popup-open"
                                data-popupi="js-popupi-5">
                                <span class="DemoPanelDropdown__itemActivePrice">
                                    <span class="DemoPanelDropdown__icon tm-icon icon-services"></span>
                                    <span class="DemoPanelDropdown__text "> <span class="DemoPanelDropdown__text--short">Popular</span>
                                        <span class="DemoPanelDropdown__text--main">services</span> <span class="DemoPanelDropdown__text--full">available
                                            for this item</span></span>
                                </span>
                                <span class="DemoPanelDropdown__itemActiveIcon tm-icon icon-arrow-top2"></span>
                            </div>

                            <div class="DemoPanelDropdown__listWrap DemoPanelDropdown__servicesContent--js box-drop js-popup-content js-popupi-5"
                                id="dropdown">
                                <ul class="DemoPanelDropdown__list DemoPanelDropdown__list--js DemoPanelDropdown__listServices--js list-drop">
                                    <li class="DemoPanelDropdown__item DemoPanelDropdown__service--js DemoPanelDropdown__service--888"
                                        data-serviceId="888">
                                        <span class="DemoPanelDropdown__itemDescribe DemoPanelDropdown__itemDescribe--js"
                                            data-full_price="149" data-channel="11" data-project="TT" data-product="68156"
                                            data-price="149">
                                            <span class="DemoPanelDropdown__itemTitle">
                                                <img src="https://s.tmimgcdn.com/images/library/ready-to-use-website-premium-icon.svg"
                                                    alt="Service icon" class="DemoPanelDropdown__itemIcon" />
                                                <span class="js-service-name">Ready-to-Use Website Premium</span>
                                            </span>
                                            <span class="DemoPanelDropdown__itemPrice">
                                                $149
                                            </span>
                                        </span>
                                    </li>
                                    <li class="DemoPanelDropdown__item DemoPanelDropdown__service--js DemoPanelDropdown__service--772"
                                        data-serviceId="772">
                                        <span class="DemoPanelDropdown__itemDescribe DemoPanelDropdown__itemDescribe--js"
                                            data-full_price="73" data-channel="11" data-project="TT" data-product="68156"
                                            data-price="73">
                                            <span class="DemoPanelDropdown__itemTitle">
                                                <img src="https://s.tmimgcdn.com/images/library/sc-installation.svg"
                                                    alt="Service icon" class="DemoPanelDropdown__itemIcon" />
                                                <span class="js-service-name">Must-Have Pack</span>
                                            </span>
                                            <span class="DemoPanelDropdown__itemPrice">
                                                $73
                                            </span>
                                        </span>
                                    </li>
                                    <li class="DemoPanelDropdown__item DemoPanelDropdown__service--js DemoPanelDropdown__service--758"
                                        data-serviceId="758">
                                        <span class="DemoPanelDropdown__itemDescribe DemoPanelDropdown__itemDescribe--js"
                                            data-full_price="99" data-channel="11" data-project="TT" data-product="68156"
                                            data-price="99">
                                            <span class="DemoPanelDropdown__itemTitle">
                                                <img src="https://s.tmimgcdn.com/images/library/sc-logo.svg" alt="Service icon"
                                                    class="DemoPanelDropdown__itemIcon" />
                                                <span class="js-service-name">Add Drag&amp;Drop HTML Builder by Novi</span>
                                            </span>
                                            <span class="DemoPanelDropdown__itemPrice">
                                                $99
                                            </span>
                                        </span>
                                    </li>
                                    <button type="button" role="link" data-href="https://www.templatemonster.com/cart.php?add=68156"
                                        class="DemoPanelDropdown__addServices DemoPanelDropdown__addServices--js button btn-main btn-full-width tm-icon icon-cart2">
                                        Add Following Services to Your Order
                                    </button>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="DemoPanelCollections">
                        <span id="preview-favourite-68156" class="DemoPanelCollections__icon tm-icon icon-heart-empty js-favorite js-favorite-btn favorite-btn"
                            data-tid="68156" data-item_name="template-68156" data-added="In your Collection"
                            data-not-added="Add to Collection">
                            <span class="DemoPanelCollections__title">Add to Collection</span>

                            <em class="DemoPanelTooltip">
                                <span class="DemoPanelTooltip__description">Add to Collection</span>
                            </em>
                        </span>
                    </div>

                </div>

            </div>
        </div>
        <span id="livedemo-toolbar-toggle" class="DemoPanelToggle trigger tm-icon icon-arrow-top2">
            <span class="DemoPanelToggle--bg"></span>
            <div class="DemoPanelTooltip DemoPanelTooltip--left">
                <div class="DemoPanelTooltip__description"> Hide Panel</div>
            </div>
        </span>
    </div>

    <div id="iframelive" class=" DemoPanelFrame DemoPanelFrame--top DemoPanelFrame--js">
        <div id="frameWrapper">
            <iframe id="frame" src='' data-src="https://livedemo00.template-help.com/wt_prod-14633">
                [Your user agent does not support frames or is currently configured not to display frames. However, you
                may visit the related document.]
            </iframe>
        </div>
    </div>

    <script type="text/javascript" id="zone_18">
        window.banner_zone = window.banner_zone || [];
        window.banner_zone.push({
            id: 18,
            zone: "<div class='js-revive-banner-container'><ins data-revive-zoneid='18' data-revive-id='5dba4d01a92de7101be5c5e6e1630dfe'></ins></div>"
        });
    </script>
    <script>
        //this function will work cross-browser for loading scripts asynchronously
        function loadScript(src, isasync, callback) {
            var s,
                r,
                t;
            r = false;
            s = document.createElement('script');
            s.type = 'text/javascript';
            s.src = src;
            s.async = isasync;
            s.onload = s.onreadystatechange = function () {
                //console.log( this.readyState ); //uncomment this line to see which ready states are called.
                if (!r && (!this.readyState || this.readyState == 'complete')) {
                    r = true;
                    if ("undefined" != typeof callback) {
                        callback();
                    }
                }
            };
            t = document.getElementsByTagName('script')[0];
            t.parentNode.insertBefore(s, t);
        }
        window.isJsLoaded = false;

        function loadIncJs() {
            loadScript("https://s.tmimgcdn.com/js/tm/frontend/indclude-js.min.js?d=61e3506", false, loadAllJS);
        }

        function toLoadJsList(src) {
            if (typeof window.jsList !== "undefined") {
                window.jsList.push(src);
            } else {
                window.jsList = [src]
            }
        }

        function loadAllJS() {
            var dependencyLibs = [
                "https://s.tmimgcdn.com/js/varnish.compiled.application.en.js?d=61e3506",
                'https://s.tmimgcdn.com/js/plasma-pocket-react/monsterBundle.js?d=61e3506'
            ];
            if (window.jsList) {
                dependencyLibs = dependencyLibs.concat(window.jsList);
            }
            var indcludeJsLoader = new Tm.IndcludeJs(dependencyLibs, false);
            indcludeJsLoader.add(function (state) {
                $(document).trigger("TM_JS_LOADED");
                //			$(document).trigger("ready");
                $(window).trigger("load");
                var event;
                var eventName = 'TM_JS_LOADED_NATIVE';
                if (typeof (CustomEvent) === 'function') {
                    event = new CustomEvent(eventName);
                } else {
                    event = document.createEvent('CustomEvent');
                    event.initEvent(eventName, true, true);
                }
                document.dispatchEvent(event);
            });
        }
        window.onload = function () {
            if (!window.isJsLoaded) {
                window.isJsLoaded = true;
                loadCSS("https://s.tmimgcdn.com/css/svg-icons.css?d=de2e02c");
                loadScript("https://www.templatemonster.com/js/config.js", true, loadIncJs);
            }
        };
    </script>

    <!-- Generated by Revive Adserver v3.1.0 -->
    <script type="text/javascript" id="banner_zone_init">
        window.banner_zone_init = 'https://r.templatemonster.com/dl/1asyncjs.php'
    </script>
    <script type="text/javascript">window.NREUM || (NREUM = {}); NREUM.info = { "beacon": "bam.nr-data.net", "licenseKey": "72d7dcce33", "applicationID": "68712044,11369496", "transactionName": "ZV1TZ0FTVkFVWkwKXlwXckZARldfG3BWB1RKe15dR0BXXlhcSlkLVl1cXA==", "queueTime": 0, "applicationTime": 689, "atts": "SRpEEQlJRR4WWBpZSk9F", "errorBeacon": "bam.nr-data.net", "agent": "" }</script>
</body>

</html>