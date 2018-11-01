/**
 * @module       jQuery RD Instafeed
 * @author       Rafael Shayvolodyan(raffa)
 * @version      1.2.2
 */
(function() {
    ! function(t, e, i) {
        var n = function() {
            function e(e, i) {
                this.options = t.extend(!0, {}, this.Defaults, i), this.$element = t(e), this.element = e, this.$items = this.$element.find("[data-instafeed-item]"), this.unique = this.genKey(), this.nextUrl = "", this.initialize()
            }
            return e.prototype.Defaults = {
                accessToken: "5526956400.ba4c844.c832b2a554764bc8a1c66c39e99687d7",
                clientId: " c832b2a554764bc8a1c66c39e99687d7",
                userId: "5526956400",
                get: "user",
                tagName: "awesome",
                locationId: "",
                sortBy: "most-recent",
                useHttp: !1,
                showLog: "false",
                dateFormat: {
                    seconds: "less than a minute ago",
                    minute: "about a minute ago",
                    minutes: " minutes ago",
                    hour: "about an hour ago",
                    hours: " hours ago",
                    day: "1 day ago",
                    days: "%b/%d/%Y"
                }
            }, e.prototype.initialize = function() {
                if ("string" != typeof this.options.clientId && "string" != typeof this.options.accessToken) throw Error("Missing clientId or accessToken.");
                null != this.options.before && "function" == typeof this.options.before && this.options.before.call(this), this.fetchData(this, this.buildUrl(), null)
            }, e.prototype.fetchData = function(e, i, n) {
                var r = e.element.getAttribute("data-instafeed-get") ? e.element.getAttribute("data-instafeed-get") : e.options.get;
                t.ajax({
                    type: "GET",
                    dataType: "jsonp",
                    cache: !1,
                    url: i,
                    success: function(t) {
                        if (null != n) {
                            var i = n;
                            i.push.apply(i, t.data)
                        } else i = t.data;
                        if (null != t.pagination && (e.nextUrl = t.pagination.next_url), "profile" !== r) {
                            var a = parseInt(e.$items.length, 10);
                            if (i.length >= a) return i = e.sorting(e, i), i = i.slice(0, a), e.validate(e, t), "false" === (t = e.element.getAttribute("data-instafeed-showlog") ? e.element.getAttribute("data-instafeed-showlog") : e.options.showLog) && console.log(i), e.loopData(i);
                            if (null != e.nextUrl) return e.fetchData(e, t.pagination.next_url, i);
                            if (i.length < a)
                                for (; i.length != a;)
                                    for (var o in i) {
                                        if (!(i.length < a)) break;
                                        i.push(i[o])
                                    }
                            return i = e.sorting(e, i), e.validate(e, t), e.loopData(i)
                        }
                        return e.validate(e, t), "false" === (t = e.element.getAttribute("data-instafeed-showlog") ? e.element.getAttribute("data-instafeed-showlog") : e.options.showLog) && console.log(i), e.loopData(i)
                    }
                })
            }, e.prototype.validate = function(t, e) {
                if ("object" != typeof e) {
                    if (null != t.options.error && "function" == typeof t.options.error) return t.options.error.call(this, "Invalid JSON data"), !1;
                    throw Error("Invalid JSON response")
                }
                if (200 !== e.meta.code) {
                    if (null != t.options.error && "function" == typeof t.options.error) return t.options.error.call(this, e.meta.error_message), !1;
                    throw Error("Error from Instagram: " + e.meta.error_message)
                }
                if (0 === e.data.length) {
                    if (null != t.options.error && "function" == typeof t.options.error) return t.options.error.call(this, "No images were returned from Instagram"), !1;
                    throw Error("No images were returned from Instagram")
                }
            }, e.prototype.sorting = function(t, e) {
                if ("profile" !== (t.element.getAttribute("data-instafeed-get") ? t.element.getAttribute("data-instafeed-get") : t.options.get)) {
                    var i = t.element.getAttribute("data-instafeed-sort") ? t.element.getAttribute("data-instafeed-sort") : t.options.sortBy;
                    if ("none" !== i) {
                        var n = "random" === i ? ["", "random"] : i.split("-"),
                            r = "least" === n[0];
                        switch (n[1]) {
                            case "random":
                                e.sort(function() {
                                    return .5 - Math.random()
                                });
                                break;
                            case "recent":
                                e = t.sortBy(e, "created_time", r);
                                break;
                            case "liked":
                                e = t.sortBy(e, "likes.count", r);
                                break;
                            case "commented":
                                e = t.sortBy(e, "comments.count", r);
                                break;
                            default:
                                throw Error("Invalid option for sortBy: '" + i + "'.")
                        }
                    }
                }
                return e
            }, e.prototype.loopData = function(t) {
                var e, i, n, r = this;
                if (null != r.options.filter && "function" == typeof r.options.filter && (t = ctxfilter(t, r.options.filter)), Array.isArray(t))
                    for (n = 0; n < t.length;) {
                        t[n].tags_full = r.arrToString(t[n].tags);
                        var a = i = e = -1;
                        r.$items.eq(n).find("*").each(function() {
                            r.checkAttribute(this, "data-instafeed-comment") ? e++ : r.checkAttribute(this, "data-instafeed-like") ? i++ : r.checkAttribute(this, "data-instafeed-location") ? a++ : r.checkAttribute(this, "data-comments-data") || (r.checkAttribute(this, "data-likes-data") ? r.parseAttributes(this, t[n], i) : r.checkAttribute(this, "data-locations-data") ? r.parseAttributes(this, t[n], a) : r.parseAttributes(this, t[n], 0))
                        }), n++
                    } else t.link = "https://www.instagram.com/" + t.username, r.$element.find("*").not("[data-instafeed-item], [data-instafeed-item] *, [data-instafeed-get]").each(function() {
                        return r.parseAttributes(this, t, 0)
                    });
                return null != r.options.after && "function" == typeof r.options.after && r.options.after.call(this), !0
            }, e.prototype.checkAttribute = function(t, e) {
                var i, n = t.attributes,
                    r = 0;
                for (i = n.length; r < i; r++)
                    if (-1 < n[r].name.indexOf(e)) return !0;
                return !1
            }, e.prototype.parseAttributes = function(t, e, i) {
                var n, r, a, o, s = t.attributes;
                for (r in s)
                    if (null != s[r] && "object" == typeof s[r] && -1 !== s[r].name.indexOf("data-") && -1 === s[r].name.indexOf("data-instafeed-")) {
                        var u = s[r].name.substring(5),
                            l = null;
                        if (-1 !== u.indexOf("-")) {
                            var d = u.split("-");
                            l = e;
                            var f = 0;
                            for (n = d.length; f < n; f++) {
                                var c = d[f];
                                "data" === c && null != l[c] && null != l[c][i] ? l = l[c][i] : null != l[c] && (l = l[c])
                            }
                        }
                        if ("string" == typeof s[r].value && (f = s[r].value.split(/\s?,\s?/i), null != l ? o = l : null != e[u] && (o = e[u]), -1 !== u.indexOf("created_time") && (a = o), null != o && null != f && ("string" == typeof o || "number" == typeof o)))
                            for (c = 0, d = f.length; c < d; c++) l = f[c], -1 !== u.indexOf("created_time") && (o = "datetime" === l ? this.dating(a, !0) : this.dating(a, !1)), "text" === l.toLowerCase() ? t.innerHTML = o : "type" === u && "image" !== o ? t.setAttribute(l, "iframe") : "0" <= (n = l.charAt(0)) && "9" >= n || t.setAttribute(l, o)
                    }
            }, e.prototype.arrToString = function(t) {
                return t.join(" ")
            }, e.prototype.dating = function(t, e) {
                var i, n = new Date(1e3 * t),
                    r = new Date,
                    a = parseInt((r.getTime() - n.getTime()) / 1e3);
                if (a += 60 * r.getTimezoneOffset(), r = "January February March April May June July August September October November December".split(" "), n = {
                        "%d": n.getDate(),
                        "%m": n.getMonth() + 1,
                        "%b": r[n.getMonth()].substring(0, 3),
                        "%B": r[n.getMonth()],
                        "%y": String(n.getFullYear()).slice(-2),
                        "%Y": n.getFullYear()
                    }, r = e ? "%Y-%m-%d" : this.element.getAttribute("data-instafeed-date-format") ? this.element.getAttribute("data-instafeed-date-format") : this.options.dateFormat.days, 60 > a) return this.options.dateFormat.seconds;
                if (120 > a) return this.options.dateFormat.minute;
                if (3600 > a) return parseInt(a / 60).toString() + this.options.dateFormat.minutes;
                if (7200 > a) return this.options.dateFormat.hour;
                if (86400 > a) return "about " + parseInt(a / 3600).toString() + this.options.dateFormat.hours;
                if (172800 > a) return this.options.dateFormat.day;
                var o = r.match(/%[dmbByY]/g),
                    s = 0;
                for (i = o.length; s < i; s++) a = o[s], r = r.replace(a, n[a]);
                return r
            }, e.prototype.sortBy = function(t, e, i) {
                return t.sort(function(t, n) {
                    var r = this.getObjectProperty(t, e),
                        a = this.getObjectProperty(n, e);
                    return i ? r > a ? 1 : -1 : r < a ? 1 : -1
                }.bind(this)), t
            }, e.prototype.getObjectProperty = function(t, e) {
                var i;
                for (i = (e = e.replace(/\[(\w+)\]/g, ".$1")).split("."); i.length;) {
                    var n = i.shift();
                    if (!(null != t && n in t)) return null;
                    t = t[n]
                }
                return t
            }, e.prototype.buildUrl = function() {
                var t = this.element.getAttribute("data-instafeed-get") ? this.element.getAttribute("data-instafeed-get") : this.options.get;
                switch (t) {
                    case "tagged":
                        var e = this.element.getAttribute("data-instafeed-tagname") ? this.element.getAttribute("data-instafeed-tagname") : this.options.tagName;
                        if (!e) throw Error("No tag name specified. Use the 'tagName' option.");
                        e = "tags/" + e + "/media/recent";
                        break;
                    case "location":
                        if (!(e = this.element.getAttribute("data-instafeed-location") ? this.element.getAttribute("data-instafeed-location") : this.options.location)) throw Error("No location specified. Use the 'locationId' option.");
                        e = "locations/" + e + "/media/recent";
                        break;
                    case "user":
                        if (!(e = this.element.getAttribute("data-instafeed-user") ? this.element.getAttribute("data-instafeed-user") : this.options.userId)) throw Error("No user specified. Use the 'userId' option.");
                        e = "users/" + e + "/media/recent";
                        break;
                    case "profile":
                        if (!(e = this.element.getAttribute("data-instafeed-user") ? this.element.getAttribute("data-instafeed-user") : this.options.userId)) throw Error("No user specified. Use the 'userId' option.");
                        e = "users/" + e;
                        break;
                    default:
                        throw Error("Invalid option for get: '" + this.options.get + "'.")
                }
                var i = "https://api.instagram.com/v1/" + e;
                e = this.element.getAttribute("data-instafeed-accesstoken") ? this.element.getAttribute("data-instafeed-accesstoken") : this.options.accessToken;
                var n = this.element.getAttribute("data-instafeed-clientid") ? this.element.getAttribute("data-instafeed-clientid") : this.options.clientId;
                return i = e ? i + "?access_token=" + e : i + "?client_id=" + n, this.$items.length && "profile" !== t && (i += "&count=" + this.$items.length), i += "&callback=instafeedCache" + this.unique + ".parse"
            }, e.prototype.genKey = function() {
                var t = function() {
                    return (65536 * (1 + Math.random()) | 0).toString(16).substring(1)
                };
                return "" + t() + t() + t() + t()
            }, e.prototype.filter = function(t, e) {
                var i, n = [],
                    r = 0;
                for (i = t.length; r < i; r++) ! function(t) {
                    if (e(t)) n.push(t)
                }(t[r]);
                return n
            }, e
        }();
        t.fn.extend({
            RDInstafeed: function(e) {
                return this.each(function() {
                    var i = t(this);
                    if (!i.data("RDInstafeed")) return i.data("RDInstafeed", new n(this, e))
                })
            }
        }), i.RDInstafeed = n
    }(window.jQuery, document, window), "undefined" != typeof module && null !== module ? module.exports = window.RDInstafeed : "function" == typeof define && define.amd && define(["jquery"], function() {
        return window.RDInstafeed
    })
}).call(this);