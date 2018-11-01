/**
 * Regula: An annotation-based form-validation framework in Javascript
 * @version 1.3.4
 * @license BSD License
 * @copyright Robert Nyman, http://www.robertnyman.com
 */
(function(e, t) {
    typeof define == "function" && define.amd ? define("utils/MapUtils", t) : (typeof e.regulaModules == "undefined" && (e.regulaModules = {}), e.regulaModules.MapUtils = t())
})(this, function() {
    return {
        iterateOverMap: function(e, t) {
            var n = 0;
            for (var r in e) e.hasOwnProperty(r) && r !== "__size__" && (t.call(e, r, e[r], n), n++)
        },
        exists: function(e, t) {
            var n = !1,
                r = 0;
            while (!n && r < e.length) n = t == e[r], r++;
            return n
        },
        put: function(e, t, n) {
            e.__size__ || (e.__size__ = 0), e[t] || e.__size__++, e[t] = n
        },
        isEmpty: function(e) {
            for (var t in e)
                if (e.hasOwnProperty(t)) return !1;
            return !0
        }
    }
}),
function(e, t) {
    typeof define == "function" && define.amd ? define("utils/DOMUtils", t) : (typeof e.regulaModules == "undefined" && (e.regulaModules = {}), e.regulaModules.DOMUtils = t())
}(this, function() {
    function t(e, t, n, r) {
        var i = t == "*" && e.all ? e.all : e.getElementsByTagName(t),
            s = [],
            o = typeof r != "undefined" ? new RegExp("(^|\\s)" + r + "(\\s|$)") : null,
            u, a;
        for (var f = 0; f < i.length; f++) u = i[f], a = u.getAttribute && u.getAttribute(n), typeof a == "string" && a.length > 0 && (typeof r == "undefined" || o && o.test(a)) && s.push(u);
        return s
    }

    function n(e, t) {
        var n = e.getAttribute && e.getAttribute(t) || null;
        if (!n) {
            var r = e.attributes;
            for (var i = 0; i < r.length; i++) r[i].nodeName === t && (n = r[i].nodeValue)
        }
        return n
    }

    function r() {
        return "regula-generated-" + Math.floor(Math.random() * 1e6)
    }

    function i() {
        return typeof document.createElement("input").checkValidity == "function"
    }
    var e = {
        form: "The form",
        select: "The select box",
        textarea: "The text area",
        checkbox: "The checkbox",
        radio: "The radio button",
        text: "The text field",
        password: "The password",
        email: "The email",
        url: "The URL",
        number: "The number",
        datetime: "The datetime",
        "datetime-local": "The local datetime",
        date: "The date",
        month: "The month",
        time: "The time",
        week: "The week",
        range: "The range",
        tel: "The telephone number",
        color: "The color"
    };
    return {
        friendlyInputNames: e,
        getElementsByAttribute: t,
        getAttributeValueForElement: n,
        generateRandomId: r,
        supportsHTML5Validation: i
    }
}),
function(e, t) {
    typeof define == "function" && define.amd ? define("service/GroupService", t) : (typeof e.regulaModules == "undefined" && (e.regulaModules = {}), e.regulaModules.GroupService = t())
}(this, function() {
    var e = {
            Default: 0
        },
        t = {
            0: "Default"
        },
        n = [],
        r = 1;
    return {
        Group: e,
        ReverseGroup: t,
        deletedGroupIndices: n,
        firstCustomGroupIndex: r
    }
}),
function(e, t) {
    typeof define == "function" && define.amd ? define("utils/ArrayUtils", t) : (typeof e.regulaModules == "undefined" && (e.regulaModules = {}), e.regulaModules.ArrayUtils = t())
}(this, function() {
    function e(e, t) {
        var n = "";
        for (var r = 0; r < e.length; r++) n += e[r] + t;
        return n.replace(new RegExp(t + "$"), "")
    }
    return {
        explode: e
    }
}),
function(e, t) {
    typeof define == "function" && define.amd ? define("service/ExceptionService", ["utils/ArrayUtils"], t) : (typeof e.regulaModules == "undefined" && (e.regulaModules = {}), e.regulaModules.ExceptionService = t(e.regulaModules.ArrayUtils))
}(this, function(e) {
    function i(e, t, n) {
        var r = "";
        return e != null ? (r = e.id, t == "" || t == null || t == undefined ? r += ": " : r += "." + t + ": ") : t != "" && t != null && t != undefined && (r = "@" + t + ": "), r + n
    }

    function s(t) {
        var n = "Function received: {";
        for (var r in t) t.hasOwnProperty(r) && (typeof t[r] == "string" ? n += r + ": " + t[r] + ", " : t[r] instanceof Array && (n += r + ": [" + e.explode(t[r], ", ") + "], "));
        return n = n.replace(/, $/, "") + "}", n
    }
    var t = {
        IllegalArgumentException: function(e) {
            this.name = "IllegalArgumentException", this.message = e
        },
        ConstraintDefinitionException: function(e) {
            this.name = "ConstraintDefinitionException", this.message = e
        },
        BindException: function(e) {
            this.name = "BindException", this.message = e
        },
        MissingFeatureException: function(e) {
            this.name = "MissingFeatureException", this.message = e
        }
    };
    for (var n in t)
        if (t.hasOwnProperty(n)) {
            var r = t[n];
            r.prototype = new Error, r.prototype.constructor = r
        }
    return {
        Exception: t,
        generateExceptionMessage: i,
        explodeParameters: s
    }
}),
function(e, t) {
    typeof define == "function" && define.amd ? define("service/ValidationService", ["utils/DOMUtils", "utils/MapUtils", "service/GroupService", "service/ExceptionService", "utils/ArrayUtils"], t) : (typeof e.regulaModules == "undefined" && (e.regulaModules = {}), e.regulaModules.ValidationService = t(e.regulaModules.DOMUtils, e.regulaModules.MapUtils, e.regulaModules.GroupService, e.regulaModules.ExceptionService, e.regulaModules.ArrayUtils))
}(this, function(e, t, n, r, i) {
    function h(e) {
        for (var t in e) e.hasOwnProperty(t) && v(t, e)
    }

    function p(e) {
        s = e.config, o = e.ReverseConstraint, u = e.constraintDefinitions, a = e.boundConstraints
    }

    function v(e, t) {
        var n = t[e],
            i = e.replace(/(^[A-Z]+)/, function(e) {
                return e.toLowerCase()
            });
        n.async ? c[i] = function(t, i, s) {
            if (typeof s == "undefined") throw new r.Exception.IllegalArgumentException(e + " is an asynchronous constraint, but you have not provided a callback.");
            return n.validator.call(t, i, c, s)
        } : c[i] = function(e, t) {
            return n.validator.call(e, t, c)
        }
    }

    function m(e, n, r, i) {
        function a(n, r) {
            var i = {};
            for (var s in n) n.hasOwnProperty(s) && s != "__size__" && t.put(i, s, n[s]);
            if (r.length > 0)
                for (var s in e) e.hasOwnProperty(s) && s != "__size__" && t.put(i, s, e[s]);
            return i
        }

        function f(e, t, n, i) {
            var s = o[y.constraintType],
                a = W(t, s, i),
                f = {
                    group: n,
                    constraintName: e.constraintName,
                    custom: u[s].custom,
                    compound: u[s].compound,
                    async: u[s].async,
                    constraintParameters: y.params,
                    failingElements: e.failingElements,
                    message: a
                };
            return r.reportAsSingleViolation || (f.composingConstraintViolations = e.composingConstraintViolations || []), f
        }
        var l = [],
            c = [];
        for (var h = 0; h < r.composingConstraints.length; h++) {
            var p = r.composingConstraints[h],
                d = o[p.constraintType];
            u[d].async ? c.push(p) : l.push(p)
        }
        var v = null,
            m = this;
        if (g(this, e)) {
            if (l.length > 0) {
                v = [];
                for (var h = 0; h < l.length; h++) {
                    var y = l[h],
                        b = o[y.constraintType],
                        w = a(y.params, r.params),
                        E = U(n, m.id, b, w);
                    if (!E.constraintPassed) {
                        var S = f(E, m.id, n, w);
                        if (s.enableHTML5Validation)
                            for (var x = 0; x < E.failingElements.length; x++) E.failingElements[x].setCustomValidity(S.message);
                        v.push(S)
                    }
                }
            }
            if (c.length > 0) {
                v === null && (v = []);
                var T = 0;
                for (var h = 0; h < c.length; h++) {
                    var y = c[h],
                        b = o[y.constraintType],
                        w = a(y.params, r.params);
                    z(n, m.id, b, w, N)
                }

                function N(e) {
                    if (!e.constraintPassed) {
                        var t = f(e, m.id, n, w);
                        if (s.enableHTML5Validation)
                            for (var r = 0; r < e.failingElements.length; r++) e.failingElements[r].setCustomValidity(t.message);
                        v.push(t)
                    }
                    T++, T === c.length && i(v)
                }
            }
        } else v = [];
        return v
    }

    function g(e, t) {
        var n = s.validateEmptyFields;
        return typeof t["ignoreEmpty"] != "undefined" && (n = !t.ignoreEmpty), !d.blank.call(e) || !!n
    }

    function y(e) {
        var t = {
                YMD: {
                    Year: 0,
                    Month: 1,
                    Day: 2
                },
                MDY: {
                    Month: 0,
                    Day: 1,
                    Year: 2
                },
                DMY: {
                    Day: 0,
                    Month: 1,
                    Year: 2
                }
            },
            n = t[e.format],
            r = e.separator;
        typeof e["separator"] == "undefined" && (r = /\//.test(this.value) ? "/" : /\./.test(this.value) ? "." : / /.test(this.value) ? " " : /[^0-9]+/);
        var i = this.value.split(r),
            s = new Date(i[n.Year], i[n.Month] - 1, i[n.Day]),
            o = new Date;
        return typeof e["date"] != "undefined" && (i = e.date.split(r), o = new Date(i[n.Year], i[n.Month] - 1, i[n.Day])), {
            dateToValidate: s,
            dateToTestAgainst: o
        }
    }

    function b(e) {
        return function(t, n, r) {
            var i = !0;
            return g(this, t) && (i = e.call(this, t, n, r)), i
        }
    }

    function w() {
        return !this.validity.typeMismatch
    }

    function E(e) {
        function t(e) {
            var t = e.groups || null,
                n = e.elementIds || null,
                r = (typeof e.constraintType == "undefined" ? null : e.constraintType) || null,
                i = "";
            return i += t == null ? "0" : "1", i += n == null ? "0" : "1", i += r == null ? "0" : "1", i
        }
        f = {}, l = {};
        var r = {
            "000": S,
            "001": x,
            "010": T,
            "011": N,
            100: C,
            101: k,
            110: L,
            111: A
        };
        if (!e || typeof e == "undefined") e = {};
        typeof e.independent == "undefined" && (e.independent = !0), typeof e.constraintType != "undefined" && (e.constraintType = o[e.constraintType]);
        if (typeof e.groups != "undefined") {
            var i = e.groups;
            e.groups = [];
            for (var s = 0; s < i.length; s++) e.groups.push(n.ReverseGroup[i[s]])
        }
        if (typeof e.elements != "undefined") {
            e.elementIds = [];
            for (var s = 0; s < e.elements.length; s++) e.elementIds.push(e.elements[s].id)
        } else typeof e.elementId != "undefined" && (e.elementIds = [e.elementId]);
        return r[t(e)](e)
    }

    function S(e) {
        var t = {
            asyncContexts: [],
            syncContexts: []
        };
        for (var n in a)
            if (a.hasOwnProperty(n)) {
                var r = a[n];
                for (var i in r)
                    if (r.hasOwnProperty(i))
                        if (!document.getElementById(i)) delete r[i];
                        else {
                            var s = r[i];
                            for (var o in s)
                                if (s.hasOwnProperty(o)) {
                                    var u = H(n, i, o);
                                    u.async ? t.asyncContexts.push(u) : t.syncContexts.push(u)
                                }
                        }
            }
        return t = M(t), D(t, e)
    }

    function x(e) {
        var t = {
            asyncContexts: [],
            syncContexts: []
        };
        for (var n in a)
            if (a.hasOwnProperty(n)) {
                var r = a[n];
                for (var i in r)
                    if (r.hasOwnProperty(i)) {
                        var s = r[i];
                        if (s[e.constraintType]) {
                            var o = H(n, i, e.constraintType);
                            o.async ? t.asyncContexts.push(o) : t.syncContexts.push(o)
                        }
                    }
            }
        return t = M(t), D(t, e)
    }

    function T(e) {
        var t = {},
            n = {
                asyncContexts: [],
                syncContexts: []
            };
        for (var s in a)
            if (a.hasOwnProperty(s)) {
                var o = a[s];
                for (var u = 0; u < e.elementIds.length; u++) {
                    var f = e.elementIds[u];
                    typeof t[f] == "undefined" && (t[f] = 0);
                    var l = o[f];
                    if (typeof l != "undefined") {
                        t[f]++;
                        for (var c in l)
                            if (l.hasOwnProperty(c)) {
                                var h = H(s, f, c);
                                h.async ? n.asyncContexts.push(h) : n.syncContexts.push(h)
                            }
                    }
                }
            }
        var p = [];
        for (var f in t) t.hasOwnProperty(f) && t[f] === 0 && p.push(f);
        if (p.length > 0) throw new r.Exception.IllegalArgumentException("No constraints have been bound to the specified elements: " + i.explode(p) + ". " + r.explodeParameters(e));
        return n = M(n), D(n, e)
    }

    function N(e) {
        var t = [],
            n = {
                asyncContexts: [],
                syncContexts: []
            };
        for (var s in a)
            if (a.hasOwnProperty(s)) {
                var o = a[s];
                for (var u = 0; u < e.elementIds.length; u++) {
                    var f = e.elementIds[u],
                        l = o[f];
                    if (typeof l != "undefined") {
                        var c = H(s, f, e.constraintType);
                        c.async ? n.asyncContexts.push(c) : n.syncContexts.push(c)
                    } else t.push(f)
                }
            }
        if (t.length > 0) throw new r.Exception.IllegalArgumentException("No constraints have been bound to the specified elements: " + i.explode(t) + ". " + r.explodeParameters(e));
        return n = M(n), D(n, e)
    }

    function C(e) {
        var t = !1,
            n = {
                groupedContexts: {}
            },
            i = 0;
        while (i < e.groups.length) {
            var s = e.groups[i],
                o = a[s];
            if (typeof o == "undefined") throw new r.Exception.IllegalArgumentException("Undefined group in group list. " + r.explodeParameters(e));
            for (var u in o)
                if (o.hasOwnProperty(u)) {
                    var f = o[u];
                    for (var l in f)
                        if (f.hasOwnProperty(l)) {
                            var c = H(s, u, l);
                            n.groupedContexts[s] || (n.groupedContexts[s] = {
                                asyncContexts: [],
                                syncContexts: []
                            }), c.async ? (t = !0, n.groupedContexts[s].asyncContexts.push(c)) : n.groupedContexts[s].syncContexts.push(c)
                        }
                }
            i++
        }
        var h = _(n);
        return e.groups = h.groups, n = h.uniqueConstraintsToValidate, P(e, n, t)
    }

    function k(e) {
        var t = !1,
            n = {
                groupedContexts: {}
            },
            i = 0;
        while (i < e.groups.length) {
            var s = e.groups[i],
                o = a[s];
            if (typeof o == "undefined") throw new r.Exception.IllegalArgumentException("Undefined group in group list. " + r.explodeParameters(e));
            var u = !1;
            for (var f in o)
                if (o.hasOwnProperty(f)) {
                    var l = o[f];
                    if (l[e.constraintType]) {
                        u = !0;
                        var c = H(s, f, e.constraintType);
                        n.groupedContexts[s] || (n.groupedContexts[s] = {
                            asyncContexts: [],
                            syncContexts: []
                        }), c.async ? (t = !0, n.groupedContexts[s].asyncContexts.push(c)) : n.groupedContexts[s].syncContexts.push(c)
                    }
                }
            if (!u) throw new r.Exception.IllegalArgumentException("Constraint " + e.constraintType + " has not been bound to any element under group " + s + ". " + r.explodeParameters(e));
            i++
        }
        var h = _(n);
        return e.groups = h.groups, n = h.uniqueConstraintsToValidate, P(e, n, t)
    }

    function L(e) {
        var t = [],
            n = [],
            s = !1,
            o = {
                groupedContexts: {}
            },
            u = 0;
        while (u < e.groups.length) {
            var f = e.groups[u],
                l = a[f];
            if (!l) throw new r.Exception.IllegalArgumentException("Undefined group in group list. " + r.explodeParameters(e));
            for (var c = 0; c < e.elementIds.length; c++) {
                var h = e.elementIds[c],
                    p = l[h];
                if (p) {
                    for (var d in p)
                        if (p.hasOwnProperty(d)) {
                            var v = H(f, h, d);
                            o.groupedContexts[f] || (o.groupedContexts[f] = {
                                asyncContexts: [],
                                syncContexts: []
                            }), v.async ? (s = !0, o.groupedContexts[f].asyncContexts.push(v)) : o.groupedContexts[f].syncContexts.push(v)
                        }
                } else t.push(f), n.push(h)
            }
            u++
        }
        if (t.length > 0) throw new r.Exception.IllegalArgumentException("The following elements: " + i.explode(n) + " were not found in one or more of the following group(s): [" + i.explode(t, ",").replace(/,/g, ", ") + "]. " + r.explodeParameters(e));
        var m = _(o);
        return e.groups = m.groups, o = m.uniqueConstraintsToValidate, P(e, o, s)
    }

    function A(e) {
        var t = !1,
            n = {
                groupedContexts: {}
            },
            r = 0;
        while (r < e.groups.length) {
            var i = e.groups[r];
            for (var s = 0; s < e.elementIds.length; s++) {
                var o = e.elementIds[s],
                    u = H(i, o, e.constraintType);
                n.groupedContexts[i] || (n.groupedContexts[i] = {
                    asyncContexts: [],
                    syncContexts: []
                }), u.async ? (t = !0, n.groupedContexts[i].asyncContexts.push(u)) : n.groupedContexts[i].syncContexts.push(u)
            }
            r++
        }
        var a = _(n);
        return e.groups = a.groups, n = a.uniqueConstraintsToValidate, P(e, n, t)
    }

    function O(e) {
        var t = !0;
        f[e.elementId] || (f[e.elementId] = {});
        var n = document.getElementById(e.elementId).cloneNode(!1),
            r = n.name.replace(/\s/g, "");
        return typeof n.type != "undefined" && n.type.toLowerCase() === "radio" && r !== "" ? l[r] || (l[r] = {}) : l[r] = {}, !f[e.elementId][e.elementConstraint] && !l[r][e.elementConstraint] && (t = !1, f[e.elementId][e.elementConstraint] = !0, typeof n.type != "undefined" && n.type.toLowerCase() === "radio" && r !== "" && (l[r][e.elementConstraint] = !0)), t
    }

    function M(e) {
        var t = {
            asyncContexts: [],
            syncContexts: []
        };
        for (var n = 0; n < e.syncContexts.length; n++) {
            var r = e.syncContexts[n];
            O(r) || t.syncContexts.push(r)
        }
        for (var n = 0; n < e.asyncContexts.length; n++) {
            var r = e.asyncContexts[n];
            O(r) || t.asyncContexts.push(r)
        }
        return t
    }

    function _(e) {
        var t = [],
            n = {
                groupedContexts: {}
            };
        for (var r in e.groupedContexts)
            if (e.groupedContexts.hasOwnProperty(r)) {
                for (var i = 0; i < e.groupedContexts[r].syncContexts.length; i++) {
                    var s = e.groupedContexts[r].syncContexts[i];
                    O(s) || (n.groupedContexts[r] || (n.groupedContexts[r] = {
                        asyncContexts: [],
                        syncContexts: []
                    }), n.groupedContexts[r].syncContexts.push(s), t.indexOf(r) == -1 && t.push(r))
                }
                for (var i = 0; i < e.groupedContexts[r].asyncContexts.length; i++) {
                    var s = e.groupedContexts[r].asyncContexts[i];
                    O(s) || (n.groupedContexts[r] || (n.groupedContexts[r] = {
                        asyncContexts: [],
                        syncContexts: []
                    }), n.groupedContexts[r].asyncContexts.push(s), t.indexOf(r) == -1 && t.push(r))
                }
            }
        return {
            groups: t,
            uniqueConstraintsToValidate: n
        }
    }

    function D(e, t) {
        var n = [];
        e.syncContexts.length > 0 && (n = B(e));
        if (e.asyncContexts.length > 0) {
            if (!t.callback) throw new r.Exception.IllegalArgumentException("One or more constraints to be validated are asynchronous, but a callback has not been provided.");
            j(e, function(e) {
                n.length > 0 ? n = n.concat(e) : n = e, t.callback(n)
            })
        } else t.callback && t.callback(n);
        return n
    }

    function P(e, t, n) {
        var i = F(e.groups, e.independent, t);
        if (n) {
            if (!e.callback) throw new r.Exception.IllegalArgumentException("One or more constraints to be validated are asynchronous, but a callback has not been provided.");
            if (!e.independent && i.length > 0) {
                var s = i[0].group,
                    o = t.groupedContexts[s];
                t.groupedContexts = {}, t.groupedContexts[s] = o
            }
            I(e.groups, e.independent, t, function(t) {
                i.length > 0 ? i = i.concat(t) : i = t, e.callback(i)
            })
        } else e.callback && e.callback(i);
        return i
    }

    function H(e, t, n) {
        var i = a[e];
        if (!i) throw new r.Exception.IllegalArgumentException("Undefined group in group list (group: " + e + ", elementId: " + t + ", constraint: " + n + ")");
        var s = i[t];
        if (!s) throw new r.Exception.IllegalArgumentException("No constraints have been defined for the element with id: " + t + " in group " + e);
        var o = s[n];
        if (!o) throw new r.Exception.IllegalArgumentException("Constraint " + n + " in group " + e + " hasn't been bound to the element with id " + t);
        return {
            group: e,
            elementId: t,
            elementConstraint: n,
            params: o,
            async: u[n].async
        }
    }

    function B(e) {
        var t = [],
            n = 0;
        while (n < e.syncContexts.length) {
            var r = e.syncContexts[n],
                i = q(r.group, r.elementId, r.elementConstraint, r.params);
            i && t.push(i), n++
        }
        return t
    }

    function j(e, t) {
        function o(i) {
            r++, i && n.push(i), r === e.asyncContexts.length && t(n)
        }
        var n = [],
            r = 0;
        for (var i = 0; i < e.asyncContexts.length; i++) {
            var s = e.asyncContexts[i];
            R(s.group, s.elementId, s.elementConstraint, s.params, o)
        }
    }

    function F(e, t, n) {
        var r = [],
            i = 0,
            s = !0;
        while (i < e.length && s) {
            var o = e[i],
                u = n.groupedContexts[o].syncContexts;
            for (var a = 0; a < u.length; a++) {
                var f = u[a],
                    l = q(f.group, f.elementId, f.elementConstraint, f.params);
                l && r.push(l)
            }
            i++, s = r.length == 0 || t && r.length != 0
        }
        return r
    }

    function I(e, t, n, r) {
        var i = [],
            s = !0;
        (function o(u) {
            if (u < e.length && s) {
                var a = e[u],
                    f = n.groupedContexts[a].asyncContexts,
                    l = 0;
                for (var c = 0; c < f.length; c++) {
                    var h = f[c];
                    R(h.group, h.elementId, h.elementConstraint, h.params, p)
                }

                function p(e) {
                    l++, e && i.push(e), l === f.length && (s = i.length === 0 || t && i.length != 0, o(++u))
                }
            } else r(i)
        })(0)
    }

    function q(e, t, n, r) {
        var i, o = U(e, t, n, r),
            a = "";
        o.constraintPassed || (a = W(t, n, r), i = {
            group: e,
            constraintName: n,
            formSpecific: u[n].formSpecific,
            custom: u[n].custom,
            compound: u[n].compound,
            async: u[n].async,
            composingConstraintViolations: o.composingConstraintViolations || [],
            constraintParameters: r,
            failingElements: o.failingElements,
            message: a
        });
        if (s.enableHTML5Validation)
            for (var f = 0; f < o.failingElements.length; f++) o.failingElements[f].setCustomValidity("");
        return i
    }

    function R(e, t, n, r, i) {
        var o;
        z(e, t, n, r, function(a) {
            var f = "";
            a.constraintPassed || (f = W(t, n, r), o = {
                group: e,
                constraintName: n,
                formSpecific: u[n].formSpecific,
                custom: u[n].custom,
                compound: u[n].compound,
                async: u[n].async,
                composingConstraintViolations: a.composingConstraintViolations || [],
                constraintParameters: r,
                failingElements: a.failingElements,
                message: f
            });
            if (s.enableHTML5Validation)
                for (var l = 0; l < a.failingElements.length; l++) a.failingElements[l].setCustomValidity("");
            i(o)
        })
    }

    function U(t, n, r, i) {
        var s = !1,
            o = [],
            a = document.getElementById(n),
            f = [];
        u[r].formSpecific ? (o = u[r].validator.call(a, i, c), s = o.length == 0) : u[r].compound ? (f = u[r].validator.call(a, i, t, u[r], null), s = f.length == 0, s || o.push(a)) : (s = u[r].validator.call(a, i, c), s || o.push(a));
        var l = a.cloneNode(!1).name.replace(/\s/g, ""),
            h = a.cloneNode(!1).type;
        typeof h != "undefined" && h.toLowerCase() === "radio" && l !== "" && (o = e.getElementsByAttribute(document.body, "input", "name", l.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&")));
        var p = {
            constraintName: r,
            constraintPassed: s,
            failingElements: o
        };
        return u[r].reportAsSingleViolation || (p.composingConstraintViolations = f), p
    }

    function z(t, n, r, i, s) {
        function a(t, n, i, s) {
            var a = o.cloneNode(!1).name.replace(/\s/g, ""),
                f = o.cloneNode(!1).type;
            typeof f != "undefined" && f.toLowerCase() === "radio" && a !== "" && (i = e.getElementsByAttribute(document.body, "input", "name", a));
            var l = {
                constraintName: r,
                constraintPassed: t,
                failingElements: i
            };
            u[r].reportAsSingleViolation || (l.composingConstraintViolations = n), s(l)
        }
        var o = document.getElementById(n);
        u[r].formSpecific ? u[r].validator.call(o, i, c, function(e) {
            a(e.length === 0, null, e, s)
        }) : u[r].compound ? u[r].validator.call(o, i, t, u[r], function(e) {
            var t = [],
                n = e.length === 0;
            n || t.push(o), a(n, e, t, s)
        }) : u[r].validator.call(o, i, c, function(e) {
            var t = [];
            e || t.push(o), a(e, null, t, s)
        })
    }

    function W(t, n, r) {
        var i = document.getElementById(t),
            s = "";
        r.message ? s = r.message : r.msg ? s = r.msg : s = u[n].defaultMessage;
        for (var o in r)
            if (r.hasOwnProperty(o)) {
                var a = new RegExp("{" + o + "}", "g");
                s = s.replace(a, r[o])
            }
        if (u[n].compound && typeof u[n].composingConstraints != "undefined")
            for (var f = 0; f < u[n].composingConstraints.length; f++) {
                var l = u[n].composingConstraints[f];
                for (var o in l.params)
                    if (l.params.hasOwnProperty(o)) {
                        var a = new RegExp("{" + o + "}", "g");
                        s = s.replace(a, l.params[o])
                    }
            }
        if (/{label}/.test(s)) {
            var c = e.friendlyInputNames[i.cloneNode(!1).tagName.toLowerCase()];
            c || (c = e.friendlyInputNames[i.cloneNode(!1).type.toLowerCase()]), s = s.replace(/{label}/, c), s = s.replace(/{flags}/g, "")
        }
        return s = s.replace(/\\\"/g, '"'), s
    }
    var s = {},
        o = {},
        u = {},
        a = {},
        f = {},
        l = {},
        c = {},
        d = {
            checked: function(t) {
                var n = !1;
                if (this.type.toLowerCase() === "radio" && this.name.replace(/\s/g, "") !== "") {
                    var r = e.getElementsByAttribute(document.body, "input", "name", this.name.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&")),
                        i = 0;
                    while (i < r.length && !n) n = r[i].checked, i++
                } else n = this.checked;
                return n
            },
            selected: function(e) {
                return this.selectedIndex > 0
            },
            max: function(e) {
                var t = !0;
                return g(this, e) && (t = parseFloat(this.value) <= parseFloat(e.value)), t
            },
            min: function(e) {
                var t = !0;
                return g(this, e) && (t = parseFloat(this.value) >= parseFloat(e.value)), t
            },
            range: function(e) {
                var t = !0;
                return g(this, e) && (t = this.value.replace(/\s/g, "") != "" && parseFloat(this.value) <= parseFloat(e.max) && parseFloat(this.value) >= parseFloat(e.min)), t
            },
            notBlank: function(e) {
                return this.value.replace(/\s/g, "") != ""
            },
            blank: function(e) {
                return this.value.replace(/\s/g, "") === ""
            },
            matches: function(e) {
                var t = !0;
                if (g(this, e)) {
                    var n, r;
                    typeof e["regex"] == "string" ? r = e.regex.replace(/^\//, "").replace(/\/$/, "") : r = e.regex, typeof e["flags"] != "undefined" ? n = new RegExp(r.toString().replace(/^\//, "").replace(/\/[^\/]*$/, ""), e.flags) : n = new RegExp(r), t = n.test(this.value)
                }
                return t
            },
            email: function(e) {
                var t = !0;
                return g(this, e) && (t = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/i.test(this.value)), t
            },
            alpha: function(e) {
                var t = !0;
                return g(this, e) && (t = /^[A-Za-z]+$/.test(this.value)), t
            },
            numeric: function(e) {
                var t = !0;
                return g(this, e) && (t = /^[0-9]+$/.test(this.value)), t
            },
            integer: function(e) {
                var t = !0;
                return g(this, e) && (t = /^-?[0-9]+$/.test(this.value)), t
            },
            real: function(e) {
                var t = !0;
                return g(this, e) && (t = /^-?([0-9]+(\.[0-9]+)?|\.[0-9]+)$/.test(this.value)), t
            },
            alphaNumeric: function(e) {
                var t = !0;
                return g(this, e) && (t = /^[0-9A-Za-z]+$/.test(this.value)), t
            },
            completelyFilled: function(e) {
                var t = [];
                for (var n = 0; n < this.elements.length; n++) {
                    var r = this.elements[n];
                    d.required.call(r) || t.push(r)
                }
                return t
            },
            passwordsMatch: function(e) {
                var t = [],
                    n = document.getElementById(e.field1),
                    r = document.getElementById(e.field2);
                return n.value != r.value && (t = [n, r]), t
            },
            required: function(e) {
                var t = !0;
                return this.tagName && (this.tagName.toLowerCase() === "select" ? t = d.selected.call(this) : this.type.toLowerCase() === "checkbox" || this.type.toLowerCase() === "radio" ? t = d.checked.call(this) : (this.tagName.toLowerCase() === "input" || this.tagName.toLowerCase() === "textarea") && this.type.toLowerCase() != "button" && (t = d.notBlank.call(this))), t
            },
            length: function(e) {
                var t = !0;
                return g(this, e) && (t = this.value.length >= e.min && this.value.length <= e.max), t
            },
            digits: function(e) {
                var t = !0;
                if (g(this, e)) {
                    var n = this.value.replace(/\s/g, ""),
                        r = n.split(/\./);
                    t = !1, n.length > 0 && (r.length == 1 && (r[1] = ""), e.integer > 0 ? t = r[0].length <= e.integer : t = !0, e.fraction > 0 && (t = t && r[1].length <= e.fraction))
                }
                return t
            },
            past: function(e) {
                var t = !0;
                if (g(this, e)) {
                    var n = y.call(this, e);
                    t = n.dateToValidate < n.dateToTestAgainst
                }
                return t
            },
            future: function(e) {
                var t = !0;
                if (g(this, e)) {
                    var n = y.call(this, e);
                    t = n.dateToValidate > n.dateToTestAgainst
                }
                return t
            },
            url: function(e) {
                var t = !0;
                return g(this, e) && (t = /^([a-z]([a-z]|\d|\+|-|\.)*):(\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?((\[(|(v[\da-f]{1,}\.(([a-z]|\d|-|\.|_|~)|[!\$&'\(\)\*\+,;=]|:)+))\])|((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=])*)(:\d*)?)(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*|(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)|((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)|((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)){0})(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(this.value)), t
            },
            step: function(e) {
                var t = !0;
                if (g(this, e)) {
                    var n = parseFloat(this.value),
                        r = parseFloat(e.max),
                        i = parseFloat(e.min),
                        s = parseFloat(e.value);
                    t = n <= r && n >= i && n % s === 0
                }
                return t
            },
            html5Required: function(e) {
                return !this.validity.valueMissing
            },
            html5Email: w,
            html5URL: w,
            html5Number: w,
            html5DateTime: w,
            html5DateTimeLocal: w,
            html5Date: w,
            html5Month: w,
            html5Time: w,
            html5Week: w,
            html5Range: w,
            html5Tel: w,
            html5Color: w,
            html5Pattern: function(e) {
                return !this.validity.patternMismatch
            },
            html5MaxLength: function(e) {
                return !this.validity.tooLong
            },
            html5Min: function(e) {
                return !this.validity.rangeUnderflow
            },
            html5Max: function(e) {
                return !this.validity.rangeOverflow
            },
            html5Step: function(e) {
                return !this.validity.stepMismatch
            }
        };
    return {
        Validator: d,
        init: p,
        wrapValidatorWithEmptyCheck: b,
        initializePublicValidators: h,
        compoundValidator: m,
        validate: E,
        runValidatorFor: U,
        interpolateConstraintDefaultMessage: W,
        createPublicValidator: v
    }
}),
function(e, t) {
    typeof define == "function" && define.amd ? define("domain/CompositionGraph", t) : (typeof e.regulaModules == "undefined" && (e.regulaModules = {}), e.regulaModules.CompositionGraph = t())
}(this, function() {
    function n(n) {
        var r = n.type,
            i = n.name,
            s = n.parent,
            o = typeof e[r] == "undefined" ? {
                visited: !1,
                name: i,
                type: r,
                parents: [],
                children: []
            } : e[r];
        s == null ? t.children.push(o) : (s.children.push(o), o.parents.push(s)), e[r] = o
    }

    function r() {
        var e = {},
            n = function r(t, n) {
                var i = typeof e[t.type] == "undefined" ? {
                    visited: t.visited,
                    name: t.name,
                    type: t.type,
                    parents: [],
                    children: []
                } : e[t.type];
                n !== null && i.parents.push(n);
                for (var s = 0; s < t.children.length; s++) i.children.push(r(t.children[s], i));
                return e[t.type] = i, i
            }(t, null);
        return {
            typeToNodeMap: e,
            root: n
        }
    }

    function i(t) {
        var n = e[t];
        return typeof n == "undefined" ? null : n
    }

    function s(e) {
        var t = function n(e, t) {
            var r = {
                cycle: !1,
                path: t
            };
            if (e.visited) r.cycle = !0;
            else {
                e.visited = !0;
                var i = 0;
                while (i < e.children.length && !r.cycle) r = n(e.children[i], t + "." + e.children[i].name), i++
            }
            return r
        }(e, e.name);
        return t.cycle || o(), t
    }

    function o() {
        (function e(t) {
            t.visited = !1;
            for (var n = 0; n < t.children.length; n++) e(t.children[n])
        })(t)
    }

    function u() {
        return t
    }

    function a(e) {
        t = e
    }

    function f(n) {
        e = n.typeToNodeMap, t = n.root
    }
    var e = {},
        t = {
            visited: !1,
            name: "RootNode",
            type: -1,
            parents: [],
            children: []
        };
    return {
        ROOT: -1,
        addNode: n,
        getNodeByType: i,
        analyze: s,
        getRoot: u,
        setRoot: a,
        clone: r,
        initializeFromClone: f
    }
}),
function(e, t) {
    typeof define == "function" && define.amd ? define("service/ConstraintService", ["service/ValidationService", "domain/CompositionGraph", "service/ExceptionService", "utils/MapUtils", "utils/ArrayUtils"], t) : (typeof e.regulaModules == "undefined" && (e.regulaModules = {}), e.regulaModules.ConstraintService = t(e.regulaModules.ValidationService, e.regulaModules.CompositionGraph, e.regulaModules.ExceptionService, e.regulaModules.MapUtils, e.regulaModules.ArrayUtils))
}(this, function(e, t, n, r, i) {
    function f(r) {
        var i = typeof r.async == "undefined" ? a[r.name].async : r.async,
            u = r.validator;
        r.validatorRedefined && !r.formSpecific && (u = e.wrapValidatorWithEmptyCheck(u));
        var f = t.getNodeByType(r.constraintType);
        if (r.compound) {
            v(r.name, r.composingConstraints, r.params);
            var l = t.clone();
            d(r.name, r.composingConstraints);
            var c = t.analyze(f);
            if (c.cycle) throw t.initializeFromClone(l), new n.Exception.ConstraintDefinitionException("regula.override: The overriding composing-constraints you have specified have created a cyclic composition: " + c.path);
            i = !1;
            var h = 0;
            while (h < r.composingConstraints.length && !i) {
                var p = r.composingConstraints[h],
                    m = a[o[p.constraintType]];
                i = m.async, h++
            }
        }
        f !== null && function g(e) {
            for (var n = 0; n < e.parents.length; n++) {
                var r = e.parents[n];
                if (r.type !== t.ROOT) {
                    var s = o[r.type],
                        u = a[s];
                    u.async = i, g(r)
                }
            }
        }(f), a[r.name] = {
            async: i,
            formSpecific: r.formSpecific,
            constraintType: s[r.name],
            custom: !0,
            compound: r.compound,
            params: r.params,
            composingConstraints: r.composingConstraints,
            defaultMessage: r.defaultMessage,
            validator: u
        }, a[r.name].custom && r.validatorRedefined && e.createPublicValidator(r.name, a)
    }

    function l(t) {
        s[t.name] = u, o[u++] = t.name;
        var n = t.validator;
        t.formSpecific || (n = e.wrapValidatorWithEmptyCheck(t.validator)), a[t.name] = {
            async: t.async,
            formSpecific: t.formSpecific,
            validator: n,
            constraintType: s[t.name],
            custom: !0,
            compound: !1,
            params: t.params,
            defaultMessage: t.defaultMessage
        }, e.createPublicValidator(t.name, a)
    }

    function c(t) {
        v(t.name, t.constraints, t.params);
        var n = !1,
            r = 0;
        while (r < t.constraints.length && !n) {
            var i = t.constraints[r],
                f = o[i.constraintType];
            n = n || a[f].async, r++
        }
        s[t.name] = u, o[u++] = t.name, a[t.name] = {
            async: n,
            formSpecific: t.formSpecific,
            constraintType: s[t.name],
            custom: !0,
            compound: !0,
            params: t.params,
            reportAsSingleViolation: t.reportAsSingleViolation,
            composingConstraints: t.constraints,
            defaultMessage: t.defaultMessage,
            validator: e.compoundValidator
        }, e.createPublicValidator(t.name, a), d(t.name, t.constraints)
    }

    function h(e, t, r) {
        var i = {
                successful: !0,
                message: "",
                data: null
            },
            s = e.cloneNode(!1);
        if (s.tagName.toLowerCase() == "form" && !a[t].formSpecific) i = {
            successful: !1,
            message: n.generateExceptionMessage(e, t, "@" + t + " is not a form constraint, but you are trying to bind it to a form"),
            data: null
        };
        else if (s.tagName.toLowerCase() != "form" && a[t].formSpecific) i = {
            successful: !1,
            message: n.generateExceptionMessage(e, t, "@" + t + " is a form constraint, but you are trying to bind it to a non-form element"),
            data: null
        };
        else if ((typeof s.type == "undefined" || s.type.toLowerCase() != "checkbox" && s.type.toLowerCase() != "radio") && t == "Checked") i = {
            successful: !1,
            message: n.generateExceptionMessage(e, t, "@" + t + " is only applicable to checkboxes and radio buttons. You are trying to bind it to an input element that is neither a checkbox nor a radio button."),
            data: null
        };
        else if (s.tagName.toLowerCase() != "select" && t == "Selected") i = {
            successful: !1,
            message: n.generateExceptionMessage(e, t, "@" + t + " is only applicable to select boxes. You are trying to bind it to an input element that is not a select box."),
            data: null
        };
        else {
            var o = p(e, a[t], r);
            o.error ? i = {
                successful: !1,
                message: o.message,
                data: null
            } : i.data = r
        }
        return i
    }

    function p(e, t, r) {
        var s = {
            error: !1,
            message: ""
        };
        r.__size__ < t.params.length && (s = {
            error: !0,
            message: n.generateExceptionMessage(e, o[t.constraintType], "@" + o[t.constraintType] + " expects at least " + t.params.length + " parameter(s). However, you have provided only " + r.__size__),
            data: null
        });
        var u = [];
        for (var a = 0; a < t.params.length; a++) {
            var f = t.params[a];
            typeof r[f] == "undefined" && u.push(f)
        }
        return u.length > 0 && (s = {
            error: !0,
            message: n.generateExceptionMessage(e, o[t.constraintType], "You seem to have provided some optional or required parameters for @" + o[t.constraintType] + ", but you are still missing the following " + u.length + " required parameter(s): " + i.explode(u, ", ")),
            data: null
        }), s
    }

    function d(e, n) {
        var r = t.getNodeByType(s[e]);
        r == null && (t.addNode({
            type: s[e],
            name: e,
            parent: null
        }), r = t.getNodeByType(s[e]));
        for (var i = 0; i < r.children.length; i++) {
            var u = r.children[i],
                f = [];
            for (var l = 0; l < u.parents.length; l++) u.parents[l] !== r && f.push(u.parents[l]);
            u.parents = f
        }
        r.children = [];
        for (var i = 0; i < n.length; i++) {
            var c = o[n[i].constraintType],
                h = a[c];
            t.addNode({
                type: h.constraintType,
                name: o[h.constraintType],
                parent: r
            })
        }
    }

    function v(e, t, i) {
        for (var s = 0; s < t.length; s++) {
            if (typeof t[s].constraintType == "undefined") throw new n.Exception.ConstraintDefinitionException("In compound constraint " + e + ": A composing constraint has no constraint type specified.");
            var u = t[s],
                f = o[u.constraintType],
                l = {
                    __size__: 0
                };
            u.params = u.params || {};
            for (var c in u.params) u.params.hasOwnProperty(c) && r.put(l, c, u.params[c]);
            var h = 0;
            for (var d in u.params) u.params.hasOwnProperty(d) && h++;
            u.params.__size__ = h;
            for (var v = 0; v < i.length; v++) r.put(l, i[v], null);
            var m = p(null, a[f], l);
            if (m.error) throw new n.Exception.ConstraintDefinitionException("In compound constraint " + e + ": " + m.message)
        }
    }
    var s = {},
        o = {},
        u = 0;
    (function(e) {
        for (var t = 0; t < e.length; t++) s[e[t]] = t, o[t] = e[t];
        u = t, s.Between = s.Range, s.Matches = s.Pattern, s.Empty = s.Blank, s.NotEmpty = s.NotBlank, s.IsAlpha = s.Alpha, s.IsNumeric = s.Numeric, s.IsAlphaNumeric = s.AlphaNumeric
    })(["Checked", "Selected", "Max", "Min", "Range", "Between", "NotBlank", "NotEmpty", "Blank", "Empty", "Pattern", "Matches", "Email", "Alpha", "IsAlpha", "Numeric", "IsNumeric", "AlphaNumeric", "IsAlphaNumeric", "Integer", "Real", "CompletelyFilled", "PasswordsMatch", "Required", "Length", "Digits", "Past", "Future", "Step", "URL", "HTML5Required", "HTML5Email", "HTML5URL", "HTML5MaxLength", "HTML5Pattern", "HTML5Min", "HTML5Max", "HTML5Step"]);
    var a = {
        Checked: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.checked,
            constraintType: s.Checked,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} needs to be checked."
        },
        Selected: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.selected,
            constraintType: s.Selected,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} needs to be selected."
        },
        Max: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.max,
            constraintType: s.Max,
            custom: !1,
            compound: !1,
            params: ["value"],
            defaultMessage: "{label} needs to be lesser than or equal to {value}."
        },
        Min: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.min,
            constraintType: s.Min,
            custom: !1,
            compound: !1,
            params: ["value"],
            defaultMessage: "{label} needs to be greater than or equal to {value}."
        },
        Range: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.range,
            constraintType: s.Range,
            custom: !1,
            compound: !1,
            params: ["min", "max"],
            defaultMessage: "{label} needs to be between {min} and {max}."
        },
        NotBlank: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.notBlank,
            constraintType: s.NotBlank,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} cannot be blank."
        },
        Blank: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.blank,
            constraintType: s.Blank,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} needs to be blank."
        },
        Pattern: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.matches,
            constraintType: s.Pattern,
            custom: !1,
            compound: !1,
            params: ["regex"],
            defaultMessage: "{label} needs to match {regex}{flags}."
        },
        Email: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.email,
            constraintType: s.Email,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} is not a valid email."
        },
        Alpha: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.alpha,
            constraintType: s.Alpha,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} can only contain letters."
        },
        Numeric: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.numeric,
            constraintType: s.Numeric,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "Only numbers are required"
        },
        AlphaNumeric: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.alphaNumeric,
            constraintType: s.AlphaNumeric,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} can only contain numbers and letters."
        },
        Integer: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.integer,
            constraintType: s.Integer,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} must be an integer."
        },
        Real: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.real,
            constraintType: s.Real,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} must be a real number."
        },
        CompletelyFilled: {
            async: !1,
            html5: !1,
            formSpecific: !0,
            validator: e.Validator.completelyFilled,
            constraintType: s.CompletelyFilled,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} must be completely filled."
        },
        PasswordsMatch: {
            async: !1,
            html5: !1,
            formSpecific: !0,
            validator: e.Validator.passwordsMatch,
            constraintType: s.PasswordsMatch,
            custom: !1,
            compound: !1,
            params: ["field1", "field2"],
            defaultMessage: "Passwords do not match."
        },
        Required: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.required,
            constraintType: s.Required,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} is required."
        },
        Length: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.length,
            constraintType: s.Length,
            custom: !1,
            compound: !1,
            params: ["min", "max"],
            defaultMessage: "{label} length must be between {min} and {max}."
        },
        Digits: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.digits,
            constraintType: s.Digits,
            custom: !1,
            compound: !1,
            params: ["integer", "fraction"],
            defaultMessage: "{label} must have up to {integer} digits and {fraction} fractional digits."
        },
        Past: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.past,
            constraintType: s.Past,
            custom: !1,
            compound: !1,
            params: ["format"],
            defaultMessage: "{label} must be in the past."
        },
        Future: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.future,
            constraintType: s.Future,
            custom: !1,
            compound: !1,
            params: ["format"],
            defaultMessage: "{label} must be in the future."
        },
        Step: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.step,
            constraintType: s.Step,
            custom: !1,
            compound: !1,
            params: ["min", "max", "value"],
            defaultMessage: "{label} must be equal to {min} or greater, and equal to {max} or lesser, at increments of {value}."
        },
        URL: {
            async: !1,
            html5: !1,
            formSpecific: !1,
            validator: e.Validator.url,
            constraintType: s.URL,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} must be a valid URL."
        },
        HTML5Required: {
            async: !1,
            html5: !0,
            inputType: null,
            attribute: "required",
            formSpecific: !1,
            validator: e.Validator.html5Required,
            constraintType: s.HTML5Required,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} is required."
        },
        HTML5Email: {
            async: !1,
            html5: !0,
            inputType: "email",
            attribute: null,
            formSpecific: !1,
            validator: e.Validator.html5Email,
            constraintType: s.HTML5Email,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} is not a valid email."
        },
        HTML5Pattern: {
            async: !1,
            html5: !0,
            inputType: null,
            attribute: "pattern",
            formSpecific: !1,
            validator: e.Validator.html5Pattern,
            constraintType: s.HTML5Pattern,
            custom: !1,
            compound: !1,
            params: ["pattern"],
            defaultMessage: "{label} needs to match {pattern}."
        },
        HTML5URL: {
            async: !1,
            html5: !0,
            inputType: "url",
            attribute: null,
            formSpecific: !1,
            validator: e.Validator.html5URL,
            constraintType: s.HTML5URL,
            custom: !1,
            compound: !1,
            params: [],
            defaultMessage: "{label} is not a valid URL."
        },
        HTML5MaxLength: {
            async: !1,
            html5: !0,
            inputType: null,
            attribute: "maxlength",
            formSpecific: !1,
            validator: e.Validator.html5MaxLength,
            constraintType: s.HTML5MaxLength,
            custom: !1,
            compound: !1,
            params: ["maxlength"],
            defaultMessage: "{label} must be less than {maxlength} characters."
        },
        HTML5Min: {
            async: !1,
            html5: !0,
            inputType: null,
            attribute: "min",
            formSpecific: !1,
            validator: e.Validator.html5Min,
            constraintType: s.HTML5Min,
            custom: !1,
            compound: !1,
            params: ["min"],
            defaultMessage: "{label} needs to be greater than or equal to {min}."
        },
        HTML5Max: {
            async: !1,
            html5: !0,
            inputType: null,
            attribute: "max",
            formSpecific: !1,
            validator: e.Validator.html5Max,
            constraintType: s.HTML5Max,
            custom: !1,
            compound: !1,
            params: ["max"],
            defaultMessage: "{label} needs to be lesser than or equal to {max}."
        },
        HTML5Step: {
            async: !1,
            html5: !0,
            inputType: null,
            attribute: "step",
            formSpecific: !1,
            validator: e.Validator.html5Step,
            constraintType: s.HTML5Step,
            custom: !1,
            compound: !1,
            params: ["step"],
            defaultMessage: "{label} must be equal to the minimum value or greater at increments of {step}."
        }
    };
    return {
        Constraint: s,
        ReverseConstraint: o,
        firstCustomConstraintIndex: u,
        constraintDefinitions: a,
        override: f,
        custom: l,
        compound: c,
        verifyConstraintDefinition: h,
        verifyParameterCountMatches: p
    }
}),
function(e, t) {
    typeof define == "function" && define.amd ? define("parser/Parser", ["utils/MapUtils", "service/ExceptionService", "service/ConstraintService"], t) : (typeof e.regulaModules == "undefined" && (e.regulaModules = {}), e.regulaModules.Parser = t(e.regulaModules.MapUtils, e.regulaModules.ExceptionService, e.regulaModules.ConstraintService))
}(this, function(e, t, n) {
    function r(e) {
        return e ? e.replace(/^\s+/, "").replace(/\s+$/, "") : ""
    }

    function i(e) {
        return e[0]
    }

    function s(t) {
        var n = t.str,
            r = t.delimiters.split(""),
            i = t.returnDelimiters || !1,
            s = t.returnEmptyTokens || !1,
            o = [],
            u = 0;
        for (var a = 0; a < n.length; a++)
            if (e.exists(r, n.charAt(a))) {
                var f = n.substring(u, a);
                f.length == 0 ? s && o.push(f) : o.push(f), i && o.push(n.charAt(a)), u = a + 1
            }
        if (u < n.length) {
            var f = n.substring(u, n.length);
            f.length == 0 ? s && o.push(f) : o.push(f)
        }
        return o
    }

    function o(o, u) {
        function l(e) {
            var t = {
                    successful: !0,
                    message: "",
                    data: null
                },
                n = [];
            while (e.length > 0 && t.successful) t = c(e), n.push(t.data);
            return t.data = n, t
        }

        function c(e) {
            var n = {
                    successful: !0,
                    message: "",
                    data: null
                },
                i = e.shift();
            return r(i).length == 0 && (i = e.shift()), i == "@" ? n = h(e) : n = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Invalid constraint. Constraint definitions need to start with '@'") + " " + n.message,
                data: null
            }, n
        }

        function h(e) {
            var r = {
                    Between: "Range",
                    Matches: "Pattern",
                    Empty: "Blank",
                    NotEmpty: "NotBlank",
                    IsAlpha: "Alpha",
                    IsNumeric: "Integer",
                    IsAlphaNumeric: "AlphaNumeric"
                },
                i = p(e);
            if (i.successful) {
                a = i.data, a = r[a] ? r[a] : a;
                if (n.constraintDefinitions[a]) {
                    i = m(e);
                    if (i.successful) {
                        i = n.verifyConstraintDefinition(o, a, i.data);
                        if (i.successful) {
                            var s = i.data;
                            i.data = {
                                element: o,
                                constraintName: a,
                                definedParameters: s
                            }
                        }
                    }
                } else i = {
                    successful: !1,
                    message: t.generateExceptionMessage(o, a, "I cannot find the specified constraint name. If this is a custom constraint, you need to define it before you bind to it") + " " + i.message,
                    data: null
                }
            } else i = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Invalid constraint name in constraint definition") + " " + i.message,
                data: null
            };
            return i
        }

        function p(e) {
            var n = r(e.shift()),
                i = d(n.charAt(0));
            if (i.successful) {
                var s = 1;
                while (s < n.length && i.successful) i = v(n.charAt(s)), s++;
                i.successful && (i.data = n)
            } else i = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Invalid starting character for constraint name. Can only include A-Z, a-z, and _") + " " + i.message,
                data: null
            };
            return i
        }

        function d(e) {
            var n = {
                successful: !0,
                message: "",
                data: null
            };
            if (!/[A-Za-z_]/.test(e) || typeof e == "undefined" || e == null) n = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Invalid starting character"),
                data: null
            };
            return n
        }

        function v(e) {
            var n = {
                successful: !0,
                message: "",
                data: null
            };
            return /[0-9A-Za-z_]/.test(e) || (n = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Invalid character in identifier. Can only include 0-9, A-Z, a-z, and _") + " " + n.message,
                data: null
            }), n
        }

        function m(n) {
            var s = {
                successful: !0,
                message: "",
                data: {}
            };
            if (i(n) == "(") {
                n.shift();
                var u = {};
                if (i(n) == ")") n.shift();
                else {
                    s = g(n);
                    if (s.successful) {
                        e.put(u, s.data.name, s.data.value), r(i(n)).length == 0 && n.shift();
                        while (n.length > 0 && i(n) == "," && s.successful) n.shift(), s = g(n), s.successful && (e.put(u, s.data.name, s.data.value), r(i(n)).length == 0 && n.shift());
                        if (s.successful) {
                            var f = n.shift();
                            r(f).length == 0 && (f = n.shift()), f != ")" ? s = {
                                successful: !1,
                                message: t.generateExceptionMessage(o, a, "Cannot find matching closing ) in parameter list") + " " + s.message,
                                data: null
                            } : s.data = u
                        }
                    } else s = {
                        successful: !1,
                        message: t.generateExceptionMessage(o, a, "Invalid parameter definition") + " " + s.message,
                        data: null
                    }
                }
            } else i(n) !== undefined && i(n) != "@" && (s = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Unexpected character '" + i(n) + "'" + " after constraint definition") + " " + s.message,
                data: null
            });
            return s
        }

        function g(e) {
            var n = y(e);
            if (n.successful) {
                var r = n.data,
                    i = e.shift();
                i == "=" ? (n = b(e), n.successful ? n.data = {
                    name: r,
                    value: n.data
                } : n = {
                    successful: !1,
                    message: t.generateExceptionMessage(o, a, "Invalid parameter value") + " " + n.message,
                    data: null
                }) : (e.unshift(i), n = {
                    successful: !1,
                    message: t.generateExceptionMessage(o, a, "'=' expected after parameter name " + n.message),
                    data: null
                })
            } else n = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Invalid parameter name. You might have unmatched parentheses") + " " + n.message,
                data: null
            };
            return n
        }

        function y(e) {
            var n = r(e.shift());
            n.length == 0 && (n = e.shift());
            var i = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Invalid starting character for parameter name. Can only include A-Z, a-z, and _"),
                data: null
            };
            if (typeof n != "undefined") {
                i = d(n.charAt(0));
                if (i.successful) {
                    var s = 1;
                    while (s < n.length && i.successful) i = v(n.charAt(s)), s++;
                    i.successful && (i.data = n)
                } else i = {
                    successful: !1,
                    message: t.generateExceptionMessage(o, a, "Invalid starting character for parameter name. Can only include A-Z, a-z, and _") + " " + i.message,
                    data: null
                }
            }
            return i
        }

        function b(e) {
            r(i(e)).length == 0 && e.shift();
            var n = {
                successful: !0,
                message: "",
                data: []
            };
            if (i(e) == ")") n = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Parameter value expected") + " " + n.message,
                data: null
            };
            else {
                n = w(e);
                var s = n.message;
                n.successful || (n = C(e), n.message = n.message + " " + s, s = n.message, n.successful || (n = L(e), n.message = n.message + " " + s, s = n.message, n.successful || (n = A(e), n.message = n.message + " " + s, s = n.message, n.successful || (n = O(e), n.message = n.message + " " + s, s = n.message, n.successful || (n = {
                    successful: !1,
                    message: t.generateExceptionMessage(o, a, "Parameter value must be a number, quoted string, regular expression, or a boolean") + " " + s,
                    data: null
                })))))
            }
            return n
        }

        function w(e) {
            var n = E(e);
            return n.successful || (n = S(e), n.successful || (n = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Parameter value is not a number") + " " + n.message,
                data: null
            })), n
        }

        function E(e) {
            var n = e.shift(),
                r = {
                    successful: !0,
                    message: "",
                    data: null
                };
            return n == "-" ? (r = S(e), r.successful && (r.data = n + r.data)) : (e.unshift(n), r = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Not a negative number"),
                data: null
            }), r
        }

        function S(e) {
            var n = null;
            if (i(e) != ".") {
                n = T(e);
                if (i(e) == ".") {
                    var r = n.data;
                    n = x(e), n.successful && (n.data = r + n.data)
                }
            } else n = x(e);
            return n.successful || (n = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Not a positive number") + " " + n.message,
                data: null
            }), n
        }

        function x(e) {
            var n = e.shift(),
                r = T(e);
            return r.successful ? r.data = n + r.data : r = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Not a valid fraction"),
                data: null
            }, r
        }

        function T(e) {
            var n = r(e.shift()),
                i = N(n.charAt(0));
            if (i.successful) {
                var s = 1;
                while (s < n.length && i.successful) i = N(n.charAt(s)), s++;
                i.successful && (i.data = n)
            } else e.unshift(n), i = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Not a valid integer") + " " + i.message,
                data: []
            };
            return i
        }

        function N(e) {
            var n = {
                successful: !0,
                message: "",
                data: null
            };
            return /[0-9]/.test(e) || (n = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Not a valid digit"),
                data: null
            }), n
        }

        function C(e) {
            var n = e.shift(),
                r = "",
                s = {
                    successful: !0,
                    message: "",
                    data: null
                };
            if (n == '"') {
                var u = !1;
                while (e.length > 0 && s.successful && !u) i(e) == '"' ? (u = !0, e.shift()) : (s = k(e), r += s.data);
                u || (s = {
                    successful: !1,
                    message: t.generateExceptionMessage(o, a, "Unterminated string literal"),
                    data: null
                })
            } else e.unshift(n), s = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Invalid quoted string"),
                data: null
            };
            return s.successful = s.successful && u, s.data = r, s
        }

        function k(e) {
            var t = "",
                n = e.shift();
            return n == "\\" && (t = e.shift()), {
                successful: !0,
                message: "",
                data: n + t
            }
        }

        function L(e) {
            var n = "",
                r = e.shift(),
                s = {
                    successful: !0,
                    message: "",
                    data: null
                };
            if (r == "/") {
                n = r;
                var u = !1;
                while (e.length > 0 && s.successful && !u) i(e) == "/" ? (n += e.shift(), u = !0) : (s = k(e), n += s.data);
                u || (s = {
                    successful: !1,
                    message: t.generateExceptionMessage(o, a, "Unterminated regex literal"),
                    data: null
                })
            } else e.unshift(r), s = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Not a regular expression"),
                data: null
            };
            return s.successful = s.successful && u, s.data = n, s
        }

        function A(e) {
            var n = e.shift(),
                i = {
                    successful: !0,
                    message: "",
                    data: null
                };
            return r(n) == "true" || r(n) == "false" ? i = {
                successful: !0,
                message: "",
                data: n === "true"
            } : (e.unshift(n), i = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Not a boolean"),
                data: null
            }), i
        }

        function O(e) {
            var n = [],
                s = e.shift(),
                u = {
                    successful: !0,
                    message: "",
                    data: null
                };
            if (s == "[") {
                r(i(e)).length == 0 && e.shift(), i(e) == "]" ? u = {
                    successful: !0,
                    message: "",
                    data: ""
                } : u = M(e);
                if (u.successful) {
                    n.push(u.data), r(i(e)).length == 0 && e.shift();
                    while (e.length > 0 && i(e) == "," && u.successful) e.shift(), u = M(e), n.push(u.data), r(i(e)).length == 0 && e.shift();
                    u.data = n, s = e.shift(), r(s).length == 0 && e.shift(), s != "]" && (u = {
                        successful: !1,
                        message: t.generateExceptionMessage(o, a, "Cannot find matching closing ] in group definition") + " " + u.message,
                        data: null
                    })
                } else u = {
                    successful: !1,
                    message: t.generateExceptionMessage(o, a, "Invalid group definition") + " " + u.message,
                    data: null
                }
            } else e.unshift(s), u = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Not a valid group definition"),
                data: null
            };
            return u
        }

        function M(e) {
            var n = {
                    successful: !0,
                    message: "",
                    data: ""
                },
                i = r(e.shift());
            i.length == 0 && (i = e.shift()), n = d(i.charAt(0));
            if (n.successful) {
                var s = 1;
                while (s < i.length && n.successful) n = v(i.charAt(s)), s++;
                n.successful && (n.data = i)
            } else n = {
                successful: !1,
                message: t.generateExceptionMessage(o, a, "Invalid starting character for group name. Can only include A-Z, a-z, and _") + " " + n.message,
                data: null
            };
            return n
        }
        var a = "",
            f = s({
                str: r(u.replace(/\s*\n\s*/g, "")),
                delimiters: '@()[]=,"\\/-\\.',
                returnDelimiters: !0,
                returnEmptyTokens: !1
            });
        return l(f)
    }
    return {
        parse: o
    }
}),
function(e, t) {
    typeof define == "function" && define.amd ? define("service/BindingService", ["utils/MapUtils", "service/GroupService", "utils/DOMUtils", "parser/Parser", "service/ConstraintService", "service/ExceptionService"], t) : (typeof e.regulaModules == "undefined" && (e.regulaModules = {}), e.regulaModules.BindingService = t(e.regulaModules.MapUtils, e.regulaModules.GroupService, e.regulaModules.DOMUtils, e.regulaModules.Parser, e.regulaModules.ConstraintService, e.regulaModules.ExceptionService))
}(this, function(e, t, n, r, i, s) {
    function a() {
        o === null && f()
    }

    function f() {
        o = {
            Default: {}
        }
    }

    function l() {
        return o
    }

    function c(n, r) {
        if (e.isEmpty(o[r][n])) {
            delete o[r][n];
            if (e.isEmpty(o[r])) {
                delete o[r];
                var i = t.Group[r];
                delete t.Group[r], delete t.ReverseGroup[i], t.deletedGroupIndices.push(i)
            }
        }
    }

    function h(e) {
        var t = {
                successful: !0,
                message: "",
                data: null
            },
            n = typeof e.cloneNode != "undefined" ? e.cloneNode(!1) : e,
            r = null;
        return typeof n.tagName != "undefined" && (r = n.tagName.toLowerCase()), r !== "form" && r !== "select" && r !== "textarea" && r !== "input" ? t = {
            successful: !1,
            message: r + "#" + e.id + " is not an input, select, textarea, or form element! Validation constraints can only be attached to input, select, textarea, or form elements.",
            data: null
        } : r === "input" && e.getAttribute("type") === null && (t = {
            successful: !1,
            message: r + "#" + e.id + " does not have a type attribute.",
            data: null
        }), t
    }

    function p(e) {
        var t = e.element,
            i;
        t === null ? i = n.getElementsByAttribute(document.body, "*", "data-constraints") : i = [t];
        var s = {
                successful: !0,
                message: "",
                data: null
            },
            o = 0;
        while (o < i.length && s.successful) {
            t = i[o], s = h(t);
            if (s.successful) {
                t.id || (t.id = n.generateRandomId());
                var u = t.getAttribute("data-constraints");
                if (u !== null) {
                    s = r.parse(t, u);
                    if (s.successful && s.data !== null) {
                        var a = s.data,
                            f = 0;
                        while (s.successful && f < a.length) {
                            var l = a[f];
                            s = g(l.element, l.constraintName, l.definedParameters), f++
                        }
                    }
                }
                o++
            }
        }
        return s
    }

    function d(t) {
        function a(e, t, r) {
            for (var i = 0; i < t.length; i++) {
                var s = t[i];
                s.id || (s.id = n.generateRandomId()), e[s.id] || (e[s.id] = []);
                var o = {
                    constraint: r.constraint,
                    params: {}
                };
                r.value === null && (o.params[r.attribute] = n.getAttributeValueForElement(s, r.attribute)), e[s.id].push(o)
            }
        }
        var r = t.element,
            s = {
                successful: !0,
                message: "",
                data: null
            },
            o = [{
                attribute: "required",
                value: null,
                constraint: i.Constraint.HTML5Required
            }, {
                attribute: "type",
                value: "email",
                constraint: i.Constraint.HTML5Email
            }, {
                attribute: "type",
                value: "url",
                constraint: i.Constraint.HTML5URL
            }, {
                attribute: "pattern",
                value: null,
                constraint: i.Constraint.HTML5Pattern
            }, {
                attribute: "maxlength",
                value: null,
                constraint: i.Constraint.HTML5MaxLength
            }, {
                attribute: "min",
                value: null,
                constraint: i.Constraint.HTML5Min
            }, {
                attribute: "max",
                value: null,
                constraint: i.Constraint.HTML5Max
            }, {
                attribute: "step",
                value: null,
                constraint: i.Constraint.HTML5Step
            }],
            u = {
                email: i.Constraint.HTML5Email,
                url: i.Constraint.HTML5URL
            },
            f = {};
        if (r === null)
            for (var l = 0; l < o.length; l++) {
                var c = o[l],
                    p = null;
                c.value == null ? p = n.getElementsByAttribute(document.body, "*", c.attribute) : p = n.getElementsByAttribute(document.body, "*", c.attribute, c.value), a(f, p, c)
            } else {
                r.id || (r.id = n.generateRandomId()), s = h(r);
                if (s.successful) {
                    f[r.id] = [];
                    for (var l = 0; l < o.length; l++) {
                        var c = o[l];
                        if (c.value === null) {
                            if (n.getAttributeValueForElement(r, c.attribute) != null) {
                                var d = {
                                    constraint: c.constraint,
                                    params: {}
                                };
                                d.params[c.attribute] = n.getAttributeValueForElement(r, c.attribute), f[r.id].push(d)
                            }
                        } else {
                            var v = n.getAttributeValueForElement(r, c.attribute);
                            v != null && typeof u[v] != "undefined" && f[r.id].push({
                                constraint: u[v],
                                params: {}
                            })
                        }
                    }
                }
            }
        return e.iterateOverMap(f, function(e, t, n) {
            var r = document.getElementById(e);
            for (var o = 0; o < t.length; o++) {
                var u = t[o];
                s = g(r, i.ReverseConstraint[u.constraint], u.params)
            }
        }), s
    }

    function v(e) {
        var t = {
                successful: !0,
                message: "",
                data: null
            },
            n = e.element,
            r = e.constraints || [],
            i = n && n.tagName ? n.tagName.toLowerCase() : null;
        if (!n) t = {
            successful: !1,
            message: "regula.bind expects a non-null element attribute in the options argument. " + s.explodeParameters(e),
            data: null
        };
        else if (n.nodeType !== 1) t = {
            successful: !1,
            message: "regula.bind: element attribute is expected to be an HTMLElement, but was of unexpected type: " + typeof n + ". " + s.explodeParameters(e),
            data: null
        };
        else if (i != "form" && i != "select" && i != "textarea" && i != "input") t = {
            successful: !1,
            message: i + "#" + n.id + " is not an input, select, textarea, or form element! Validation constraints can only be attached to input, select, textarea, or form elements. " + s.explodeParameters(e),
            data: null
        };
        else if (r.length > 0) {
            var o = 0;
            while (o < r.length && t.successful) t = m(r[o], e), o++
        } else t = p({
            element: n
        });
        return t
    }

    function m(n, r) {
        function u(e, t) {
            var n = {},
                r = [];
            for (var i = 0; i < e.length; i++) r.push(e[i]), n[e[i]] = !0;
            for (var s = 0; s < t.length; s++) n[t[s]] || r.push(t[s]);
            return r
        }

        function a(t, n) {
            var r = [];
            for (var i = 0; i < n.length; i++) e.exists(t, n[i]) || r.push(n[i]);
            return r
        }

        function f(n, r, s) {
            var f = o[t.ReverseGroup[t.Group.Default]][n.id][i.ReverseConstraint[r]].groups,
                l = [];
            s.groups ? l = s.groups : l.push(t.ReverseGroup[t.Group.Default]), e.exists(l, t.ReverseGroup[t.Group.Default]) || l.push(t.ReverseGroup[t.Group.Default]);
            var h = a(l, u(f, l));
            for (var p = 0; p < h.length; p++) {
                var d = h[p];
                delete o[d][n.id][i.ReverseConstraint[r]], c(n.id, d)
            }
        }
        var l = {
                successful: !0,
                message: "",
                data: null
            },
            h = r.element,
            p = n.overwriteConstraint || !1,
            d = n.overwriteParameters || !1,
            v = n.constraintType,
            m = n.params || {},
            y = {
                __size__: 0
            },
            b = m.groups;
        if (typeof v == "undefined") l = {
            successful: !1,
            message: "regula.bind expects a valid constraint type for each constraint in constraints attribute of the options argument. " + s.explodeParameters(r),
            data: null
        };
        else if (m && m.groups)
            if (m.groups instanceof Array) {
                var w = [],
                    E = 0;
                while (E < m.groups.length && l.successful) typeof m["groups"][E] == "string" ? w.push(m.groups[E]) : typeof t.ReverseGroup[m["groups"][E]] != "undefined" ? w.push(t.ReverseGroup[m.groups[E]]) : l = {
                    successful: !1,
                    message: "Invalid group: " + m.groups[E] + ". " + s.explodeParameters(r),
                    data: null
                }, E++;
                l.successful && (m.groups = w)
            } else l = {
                successful: !1,
                message: "The groups parameter must be an array of enums or strings " + s.explodeParameters(r),
                data: null
            };
        if (l.successful) {
            if (!o[t.ReverseGroup[t.Group.Default]][h.id] || !o[t.ReverseGroup[t.Group.Default]][h.id][i.ReverseConstraint[v]]) {
                for (var S in m) m.hasOwnProperty(S) && e.put(y, S, m[S]);
                l = i.verifyConstraintDefinition(h, i.ReverseConstraint[v], y)
            } else if (p) {
                for (var S in m) m.hasOwnProperty(S) && e.put(y, S, m[S]);
                l = i.verifyConstraintDefinition(h, i.ReverseConstraint[v], y), l.successful && f(h, v, m)
            } else {
                var x = o[t.ReverseGroup[t.Group.Default]][h.id][i.ReverseConstraint[v]];
                for (var S in x) x.hasOwnProperty(S) && e.put(y, S, x[S]);
                if (d) {
                    for (var S in m) m.hasOwnProperty(S) && e.put(y, S, m[S]);
                    l = i.verifyConstraintDefinition(h, i.ReverseConstraint[v], y), l.successful && f(h, v, y)
                } else
                    for (var S in m) m.hasOwnProperty(S) && (x[S] || e.put(y, S, m[S]))
            }
            l.successful && (l = g(h, i.ReverseConstraint[v], y))
        }
        return m.groups = b, l
    }

    function g(n, r, u) {
        var a = {
            successful: !0,
            message: "",
            data: null
        };
        u.groups || e.put(u, "groups", [t.ReverseGroup[t.Group.Default]]);
        var f = u.groups;
        f.indexOf(t.ReverseGroup[t.Group.Default]) === -1 && (f.push(t.ReverseGroup[t.Group.Default]), u.groups = f);
        for (var l = 0; l < f.length; l++) {
            var c = f[l];
            if (!o[c]) {
                var h = -1;
                t.deletedGroupIndices.length > 0 ? h = t.deletedGroupIndices.pop() : h = t.firstCustomGroupIndex++, t.Group[c] = h, t.ReverseGroup[h] = c, o[c] = {}
            }
            o[c][n.id] || (o[c][n.id] = {}), o[c][n.id][r] = u
        }
        if (i.constraintDefinitions[r].html5)
            if (n.getAttribute("type") !== null && i.constraintDefinitions[r].inputType !== null && n.getAttribute("type") !== i.constraintDefinitions[r].inputType) a = {
                successful: !1,
                message: s.generateExceptionMessage(n, r, "Element type of " + n.getAttribute("type") + " conflicts with type of constraint @" + r + ": " + i.constraintDefinitions[r].inputType),
                data: null
            };
            else {
                var p = i.constraintDefinitions[r].attribute,
                    d = i.constraintDefinitions[r].inputType;
                (p !== null && n.getAttribute(p) === null || d !== null && n.getAttribute("type") === null) && y(n, r, u)
            }
        return a
    }

    function y(e, t, n) {
        if (t === i.ReverseConstraint[i.Constraint.HTML5Required]) e.setAttribute("required", "true");
        else {
            var r = i.constraintDefinitions[t];
            for (var s = 0; s < r.params.length; s++) e.setAttribute(r.params[s], n[r.params[s]])
        }
        var o = e.getAttribute("class");
        /regula-modified/.test(o) || e.setAttribute("class", o + " regula-modified")
    }

    function b(e) {
        var t = !1;
        for (var n = 0; n < e.elements.length; n++) {
            var r = e.elements[n].id,
                u = e.constraints || [];
            if (u.length == 0)
                for (var a in o) o.hasOwnProperty(a) && typeof o[a][r] != "undefined" && (delete o[a][r], a !== "Default" && c(r, a), t = !0);
            else
                for (var f = 0; f < u.length; f++) {
                    var l = u[f];
                    for (var a in o) o.hasOwnProperty(a) && typeof o[a][r] != "undefined" && (delete o[a][r][i.ReverseConstraint[l]], a !== "Default" && c(r, a), t = !0)
                }
        }
        if (e.elements.length > 0 && !t) throw new s.Exception.IllegalArgumentException("Element with id " + r + " does not have any constraints bound to it. " + s.explodeParameters(e))
    }

    function w(e) {
        var n = e.elementId,
            r = e.group,
            s = e.constraint,
            u = typeof o[t.ReverseGroup[t.Group.Default]][n] != "undefined";
        if (u && typeof r != "undefined" && typeof s == "undefined") {
            var a = t.ReverseGroup[r];
            u = typeof a != "undefined" && typeof o[a][n] != "undefined"
        } else if (u && typeof r == "undefined" && typeof s != "undefined") {
            var f = i.ReverseConstraint[s];
            u = typeof f != "undefined" && typeof o[t.ReverseGroup[t.Group.Default]][n][f] != "undefined"
        } else if (u && typeof r != "undefined" && typeof s != "undefined") {
            var a = t.ReverseGroup[r],
                f = i.ReverseConstraint[s];
            u = typeof a != "undefined" && typeof f != "undefined" && typeof o[a][n] != "undefined" && typeof o[a][n][f] != "undefined"
        }
        return u
    }
    var o = null,
        u = {};
    return {
        initializeBoundConstraints: a,
        resetBoundConstraints: f,
        getBoundConstraints: l,
        removeElementAndGroupFromBoundConstraintsIfEmpty: c,
        bindAfterParsing: p,
        bindHTML5ValidationConstraints: d,
        bindFromOptions: v,
        unbind: b,
        isBound: w
    }
}),
function(e, t) {
    typeof define == "function" && define.amd ? define("regula", ["utils/MapUtils", "utils/DOMUtils", "service/BindingService", "service/ExceptionService", "service/ConstraintService", "service/ValidationService", "service/GroupService"], t) : (e.regula = t(e.regulaModules.MapUtils, e.regulaModules.DOMUtils, e.regulaModules.BindingService, e.regulaModules.ExceptionService, e.regulaModules.ConstraintService, e.regulaModules.ValidationService, e.regulaModules.GroupService), e.regula._modules = e.regulaModules, e.regulaModules = undefined)
}(this, function(e, t, n, r, i, s, o) {
    function f(t) {
        e.iterateOverMap(t, function(e, t, n) {
            typeof u[e] != "undefined" && (u[e] = t)
        })
    }

    function l(e) {
        var i = {
            successful: !0,
            message: "",
            data: null
        };
        if (typeof e == "undefined" || !e) n.resetBoundConstraints(), u.enableHTML5Validation && t.supportsHTML5Validation() && (i = n.bindHTML5ValidationConstraints({
            element: null
        })), i.successful && (i = n.bindAfterParsing({
            element: null
        }));
        else {
            var s = e.elements;
            if (typeof s == "undefined" || !s) u.enableHTML5Validation && t.supportsHTML5Validation() && typeof e.element != "undefined" && e.element !== null && (i = n.bindHTML5ValidationConstraints({
                element: e.element
            })), i.successful && (i = n.bindFromOptions(e));
            else {
                var o = 0;
                while (i.successful && o < s.length) e.element = s[o], u.enableHTML5Validation && t.supportsHTML5Validation() && (i = n.bindHTML5ValidationConstraints({
                    element: e.element
                })), i.successful ? (i = n.bindFromOptions(e), i.successful || (i.message = "regula.bind: Element " + (o + 1) + " of " + s.length + " failed: " + i.message)) : i.message = "regula.bind: Failed binding HTML5 validation constraints: Element " + (o + 1) + " of " + s.length + " failed: " + i.message, o++
            }
        }
        if (!i.successful) throw new r.Exception.BindException(i.message)
    }

    function c(e) {
        if (typeof e == "undefined" || !e) n.resetBoundConstraints();
        else {
            if (typeof e.elementId == "undefined" && typeof e.elements == "undefined") throw new r.Exception.IllegalArgumentException("regula.unbind requires an elementId attribute, or an elements attribute if options are provided");
            if (!(typeof e.elements == "undefined" || e.elements instanceof Array)) throw new r.Exception.IllegalArgumentException("regula.unbind expects the elements attribute to be an array, if it is provided");
            if (typeof e.elements == "undefined") {
                e.elements = [document.getElementById(e.elementId)];
                if (e.elements[0] === null) throw new r.Exception.IllegalArgumentException("Element with id " + e.elementId + " does not have any constraints bound to it. " + r.explodeParameters(e))
            }
            n.unbind(e)
        }
    }

    function h(e) {
        if (typeof e == "undefined") throw new r.Exception.IllegalArgumentException("regula.isBound expects options");
        var t = e.element,
            i = e.elementId;
        if (typeof t == "undefined" && typeof i == "undefined") throw new r.Exception.IllegalArgumentException("regula.isBound expects at the very least, either an element or elementId attribute");
        if (e.hasOwnProperty("constraint") && typeof e.constraint == "undefined") throw new r.Exception.IllegalArgumentException("Undefined constraint was supplied as a parameter");
        if (e.hasOwnProperty("group") && typeof e.group == "undefined") throw new r.Exception.IllegalArgumentException("Undefined group was supplied as a parameter");
        return typeof t != "undefined" && (i = t.id), n.isBound({
            elementId: i,
            group: e.group,
            constraint: e.constraint
        })
    }

    function p(e) {
        if (!e) throw new r.Exception.IllegalArgumentException("regula.override expects options");
        if (typeof e.constraintType == "undefined") throw new r.Exception.IllegalArgumentException("regula.override expects a valid constraintType attribute in the options argument");
        var t = i.ReverseConstraint[e.constraintType];
        if (typeof t == "undefined") throw new r.Exception.IllegalArgumentException("regula.override: I could not find the specified constraint. Perhaps it has not been defined? Function received: " + r.explodeParameters(e));
        var n = !1,
            s = i.constraintDefinitions[t].formSpecific;
        i.constraintDefinitions[t].custom && (s = typeof e.formSpecific == "undefined" ? i.constraintDefinitions[t].formSpecific : e.formSpecific);
        var o = i.constraintDefinitions[t].custom && typeof e.async != "undefined" ? e.async : i.constraintDefinitions[t].async,
            u = i.constraintDefinitions[t].custom ? e.params || i.constraintDefinitions[t].params : i.constraintDefinitions[t].params,
            a = e.defaultMessage || i.constraintDefinitions[t].defaultMessage,
            f = i.constraintDefinitions[t].compound,
            l = e.constraints || i.constraintDefinitions[t].constraints,
            c = i.constraintDefinitions[t].validator;
        i.constraintDefinitions[t].custom && !i.constraintDefinitions[t].compound && typeof e.validator != "undefined" && (c = e.validator, n = !0);
        if (typeof s != "boolean") throw new r.Exception.IllegalArgumentException("regula.override expects the formSpecific attribute in the options argument to be a boolean");
        if (typeof c != "function") throw new r.Exception.IllegalArgumentException("regula.override expects the validator attribute in the options argument to be a function");
        if (!(u instanceof Array)) throw new r.Exception.IllegalArgumentException("regula.override expects the params attribute in the options argument to be an array");
        if (typeof a != "string") throw new r.Exception.IllegalArgumentException("regula.override expects the defaultMessage attribute in the options argument to be a string");
        i.override({
            async: o,
            formSpecific: s,
            name: t,
            constraintType: e.constraintType,
            compound: f,
            params: u,
            composingConstraints: l,
            defaultMessage: a,
            validator: c,
            validatorRedefined: n
        })
    }

    function d(e) {
        if (!e) throw new r.Exception.IllegalArgumentException("regula.custom expects options");
        var t = e.name,
            n = e.formSpecific || !1,
            s = e.validator,
            o = e.params || [],
            u = e.defaultMessage || "",
            a = typeof e.async == "undefined" ? !1 : e.async;
        if (!t) throw new r.Exception.IllegalArgumentException("regula.custom expects a name attribute in the options argument");
        if (typeof t != "string") throw new r.Exception.IllegalArgumentException("regula.custom expects the name attribute in the options argument to be a string");
        if (t.replace(/\s/g, "").length == 0) throw new r.Exception.IllegalArgumentException("regula.custom cannot accept an empty string for the name attribute in the options argument");
        if (typeof n != "boolean") throw new r.Exception.IllegalArgumentException("regula.custom expects the formSpecific attribute in the options argument to be a boolean");
        if (!s) throw new r.Exception.IllegalArgumentException("regula.custom expects a validator attribute in the options argument");
        if (typeof s != "function") throw new r.Exception.IllegalArgumentException("regula.custom expects the validator attribute in the options argument to be a function");
        if (o.constructor.toString().indexOf("Array") < 0) throw new r.Exception.IllegalArgumentException("regula.custom expects the params attribute in the options argument to be an array");
        if (typeof u != "string") throw new r.Exception.IllegalArgumentException("regula.custom expects the defaultMessage attribute in the options argument to be a string");
        if (i.constraintDefinitions[t]) throw new r.Exception.IllegalArgumentException("There is already a constraint called " + t + ". If you wish to override this constraint, use regula.override");
        i.custom({
            async: a,
            name: t,
            formSpecific: n,
            validator: s,
            custom: !0,
            compound: !1,
            params: o,
            defaultMessage: u
        })
    }

    function v(e) {
        if (!e) throw new r.Exception.IllegalArgumentException("regula.compound expects options");
        var t = e.name,
            n = e.constraints || [],
            s = e.formSpecific || !1,
            o = e.defaultMessage || "",
            u = e.params || [],
            a = typeof e.reportAsSingleViolation == "undefined" ? !1 : e.reportAsSingleViolation;
        if (!t) throw new r.Exception.IllegalArgumentException("regula.compound expects a name attribute in the options argument");
        if (typeof t != "string") throw new r.Exception.IllegalArgumentException("regula.compound expects name to be a string parameter");
        if (u.constructor.toString().indexOf("Array") < 0) throw new r.Exception.IllegalArgumentException("regula.compound expects the params attribute in the options argument to be an array");
        if (n.length == 0) throw new r.Exception.IllegalArgumentException("regula.compound expects an array of composing constraints under a constraints attribute in the options argument");
        if (i.constraintDefinitions[t]) throw new r.Exception.IllegalArgumentException("regula.compound: There is already a constraint called " + t + ". If you wish to override this constraint, use regula.override");
        i.compound({
            name: t,
            formSpecific: s,
            params: u,
            reportAsSingleViolation: a,
            constraints: n,
            defaultMessage: o
        })
    }

    function m(e, t) {
        s.init({
            config: u,
            ReverseConstraint: i.ReverseConstraint,
            constraintDefinitions: i.constraintDefinitions,
            boundConstraints: n.getBoundConstraints()
        });
        var o = [];
        if (typeof e == "undefined" || typeof e.groups == "undefined" || e.groups instanceof Array) {
            if (typeof e != "undefined" && typeof e.groups != "undefined" && e.groups.length == 0) throw new r.Exception.IllegalArgumentException("regula.validate: If a groups attribute is provided, it must not be empty.");
            if (typeof e != "undefined" && e.hasOwnProperty("constraintType") && typeof e.constraintType == "undefined") throw new r.Exception.IllegalArgumentException("regula.validate: If a constraintType attribute is provided, it cannot be undefined.");
            typeof t == "undefined" && typeof e == "function" && (e = {
                callback: e
            }), typeof t != "undefined" && (e.callback = t);
            if (typeof e != "undefined" && typeof e.elements != "undefined") {
                if (!(e.elements instanceof Array)) throw new r.Exception.IllegalArgumentException("regula.validate: If an elements attribute is provided, it must be an array.");
                if (e.elements.length == 0) throw new r.Exception.IllegalArgumentException("regula.validate: If an elements attribute is provided, it must not be empty.");
                o = s.validate(e)
            } else o = s.validate(e);
            return o
        }
        throw new r.Exception.IllegalArgumentException("regula.validate: If a groups attribute is provided, it must be an array.")
    }
    var u = {
            validateEmptyFields: !0,
            enableHTML5Validation: !0,
            debug: !1
        },
        a = {
            DMY: "DMY",
            MDY: "MDY",
            YMD: "YMD"
        };
    return n.initializeBoundConstraints(), s.initializePublicValidators(i.constraintDefinitions), {
        configure: f,
        bind: l,
        unbind: c,
        isBound: h,
        validate: m,
        custom: d,
        compound: v,
        override: p,
        Constraint: i.Constraint,
        Group: o.Group,
        DateFormat: a,
        Exception: r.Exception
    }
});
! function(e) {
    "function" == typeof define && define.amd ? define(["jquery"], e) : e(jQuery)
}(function(e) {
    function t(e) {
        return i[e] ? i[e].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof e && e ? void n.error("Method " + e + " does not exist on jQuery.regula") : i.bind.apply(this, arguments)
    }
    var n = e,
        i = {
            bind: function(t) {
                return this instanceof e && (t || (t = {}), this.get().length > 0 && n.extend(!0, t, {
                    elements: this.get()
                })), regula.bind(t), this
            },
            unbind: function(t) {
                return this instanceof e && (t || (t = {}), this.get().length > 0 && n.extend(!0, t, {
                    elements: this.get()
                })), regula.unbind(t), this
            },
            isBound: function(t) {
                return this instanceof e && (t || (t = {}), this.get().length > 0 && n.extend(!0, t, {
                    element: this.get(0)
                })), regula.isBound(t), this
            },
            validate: function(t) {
                return this instanceof e && (t || (t = {}), this.get().length > 0 && n.extend(!0, t, {
                    elements: this.get()
                })), regula.validate(t)
            },
            custom: function(e) {
                return regula.custom(e), this
            },
            compound: function(e) {
                return regula.compound(e), this
            },
            override: function(e) {
                return regula.override(e), this
            }
        };
    i.on = i.bind, i.off = i.unbind, n.fn.regula = t, n.regula = t
});

/**
 * @module       jQuery Form Plugin
 * @version      3.51
 * @author       M. Alsup
 * @see          http://malsup.com/jquery/form/
 * @license      MIT and GPL licenses
 */
! function(e) {
    "use strict";
    "function" == typeof define && define.amd ? define(["../jquery"], e) : e("undefined" != typeof jQuery ? jQuery : window.Zepto)
}(function(e) {
    "use strict";

    function t(t) {
        var r = t.data;
        t.isDefaultPrevented() || (t.preventDefault(), e(t.target).ajaxSubmit(r))
    }

    function r(t) {
        var r = t.target,
            a = e(r);
        if (!a.is("[type=submit],[type=image]")) {
            var n = a.closest("[type=submit]");
            if (0 === n.length) return;
            r = n[0]
        }
        var i = this;
        if (i.clk = r, "image" == r.type)
            if (void 0 !== t.offsetX) i.clk_x = t.offsetX, i.clk_y = t.offsetY;
            else if ("function" == typeof e.fn.offset) {
            var o = a.offset();
            i.clk_x = t.pageX - o.left, i.clk_y = t.pageY - o.top
        } else i.clk_x = t.pageX - r.offsetLeft, i.clk_y = t.pageY - r.offsetTop;
        setTimeout(function() {
            i.clk = i.clk_x = i.clk_y = null
        }, 100)
    }

    function a() {
        if (e.fn.ajaxSubmit.debug) {
            var t = "[jquery.form] " + Array.prototype.join.call(arguments, "");
            window.console && window.console.log ? window.console.log(t) : window.opera && window.opera.postError && window.opera.postError(t)
        }
    }
    var n = {};
    n.fileapi = void 0 !== e("<input type='file'/>").get(0).files, n.formdata = void 0 !== window.FormData;
    var i = !!e.fn.prop;
    e.fn.attr2 = function() {
        if (!i) return this.attr.apply(this, arguments);
        var e = this.prop.apply(this, arguments);
        return e && e.jquery || "string" == typeof e ? e : this.attr.apply(this, arguments)
    }, e.fn.ajaxSubmit = function(t) {
        function r(r) {
            var a, n, i = e.param(r, t.traditional).split("&"),
                o = i.length,
                s = [];
            for (a = 0; o > a; a++) i[a] = i[a].replace(/\+/g, " "), n = i[a].split("="), s.push([decodeURIComponent(n[0]), decodeURIComponent(n[1])]);
            return s
        }

        function o(a) {
            for (var n = new FormData, i = 0; i < a.length; i++) n.append(a[i].name, a[i].value);
            if (t.extraData) {
                var o = r(t.extraData);
                for (i = 0; i < o.length; i++) o[i] && n.append(o[i][0], o[i][1])
            }
            t.data = null;
            var s = e.extend(!0, {}, e.ajaxSettings, t, {
                contentType: !1,
                processData: !1,
                cache: !1,
                type: u || "POST"
            });
            t.uploadProgress && (s.xhr = function() {
                var r = e.ajaxSettings.xhr();
                return r.upload && r.upload.addEventListener("progress", function(e) {
                    var r = 0,
                        a = e.loaded || e.position,
                        n = e.total;
                    e.lengthComputable && (r = Math.ceil(a / n * 100)), t.uploadProgress(e, a, n, r)
                }, !1), r
            }), s.data = null;
            var c = s.beforeSend;
            return s.beforeSend = function(e, r) {
                r.data = t.formData ? t.formData : n, c && c.call(this, e, r)
            }, e.ajax(s)
        }

        function s(r) {
            function n(e) {
                var t = null;
                try {
                    e.contentWindow && (t = e.contentWindow.document)
                } catch (r) {
                    a("cannot get iframe.contentWindow document: " + r)
                }
                if (t) return t;
                try {
                    t = e.contentDocument ? e.contentDocument : e.document
                } catch (r) {
                    a("cannot get iframe.contentDocument: " + r), t = e.document
                }
                return t
            }

            function o() {
                function t() {
                    try {
                        var e = n(g).readyState;
                        a("state = " + e), e && "uninitialized" == e.toLowerCase() && setTimeout(t, 50)
                    } catch (r) {
                        a("Server abort: ", r, " (", r.name, ")"), s(k), j && clearTimeout(j), j = void 0
                    }
                }
                var r = f.attr2("target"),
                    i = f.attr2("action"),
                    o = "multipart/form-data",
                    c = f.attr("enctype") || f.attr("encoding") || o;
                w.setAttribute("target", p), (!u || /post/i.test(u)) && w.setAttribute("method", "POST"), i != m.url && w.setAttribute("action", m.url), m.skipEncodingOverride || u && !/post/i.test(u) || f.attr({
                    encoding: "multipart/form-data",
                    enctype: "multipart/form-data"
                }), m.timeout && (j = setTimeout(function() {
                    T = !0, s(D)
                }, m.timeout));
                var l = [];
                try {
                    if (m.extraData)
                        for (var d in m.extraData) m.extraData.hasOwnProperty(d) && l.push(e.isPlainObject(m.extraData[d]) && m.extraData[d].hasOwnProperty("name") && m.extraData[d].hasOwnProperty("value") ? e('<input type="hidden" name="' + m.extraData[d].name + '">').val(m.extraData[d].value).appendTo(w)[0] : e('<input type="hidden" name="' + d + '">').val(m.extraData[d]).appendTo(w)[0]);
                    m.iframeTarget || v.appendTo("body"), g.attachEvent ? g.attachEvent("onload", s) : g.addEventListener("load", s, !1), setTimeout(t, 15);
                    try {
                        w.submit()
                    } catch (h) {
                        var x = document.createElement("form").submit;
                        x.apply(w)
                    }
                } finally {
                    w.setAttribute("action", i), w.setAttribute("enctype", c), r ? w.setAttribute("target", r) : f.removeAttr("target"), e(l).remove()
                }
            }

            function s(t) {
                if (!x.aborted && !F) {
                    if (M = n(g), M || (a("cannot access response document"), t = k), t === D && x) return x.abort("timeout"), void S.reject(x, "timeout");
                    if (t == k && x) return x.abort("server abort"), void S.reject(x, "error", "server abort");
                    if (M && M.location.href != m.iframeSrc || T) {
                        g.detachEvent ? g.detachEvent("onload", s) : g.removeEventListener("load", s, !1);
                        var r, i = "success";
                        try {
                            if (T) throw "timeout";
                            var o = "xml" == m.dataType || M.XMLDocument || e.isXMLDoc(M);
                            if (a("isXml=" + o), !o && window.opera && (null === M.body || !M.body.innerHTML) && --O) return a("requeing onLoad callback, DOM not available"), void setTimeout(s, 250);
                            var u = M.body ? M.body : M.documentElement;
                            x.responseText = u ? u.innerHTML : null, x.responseXML = M.XMLDocument ? M.XMLDocument : M, o && (m.dataType = "xml"), x.getResponseHeader = function(e) {
                                var t = {
                                    "content-type": m.dataType
                                };
                                return t[e.toLowerCase()]
                            }, u && (x.status = Number(u.getAttribute("status")) || x.status, x.statusText = u.getAttribute("statusText") || x.statusText);
                            var c = (m.dataType || "").toLowerCase(),
                                l = /(json|script|text)/.test(c);
                            if (l || m.textarea) {
                                var f = M.getElementsByTagName("textarea")[0];
                                if (f) x.responseText = f.value, x.status = Number(f.getAttribute("status")) || x.status, x.statusText = f.getAttribute("statusText") || x.statusText;
                                else if (l) {
                                    var p = M.getElementsByTagName("pre")[0],
                                        h = M.getElementsByTagName("body")[0];
                                    p ? x.responseText = p.textContent ? p.textContent : p.innerText : h && (x.responseText = h.textContent ? h.textContent : h.innerText)
                                }
                            } else "xml" == c && !x.responseXML && x.responseText && (x.responseXML = X(x.responseText));
                            try {
                                E = _(x, c, m)
                            } catch (y) {
                                i = "parsererror", x.error = r = y || i
                            }
                        } catch (y) {
                            a("error caught: ", y), i = "error", x.error = r = y || i
                        }
                        x.aborted && (a("upload aborted"), i = null), x.status && (i = x.status >= 200 && x.status < 300 || 304 === x.status ? "success" : "error"), "success" === i ? (m.success && m.success.call(m.context, E, "success", x), S.resolve(x.responseText, "success", x), d && e.event.trigger("ajaxSuccess", [x, m])) : i && (void 0 === r && (r = x.statusText), m.error && m.error.call(m.context, x, i, r), S.reject(x, "error", r), d && e.event.trigger("ajaxError", [x, m, r])), d && e.event.trigger("ajaxComplete", [x, m]), d && !--e.active && e.event.trigger("ajaxStop"), m.complete && m.complete.call(m.context, x, i), F = !0, m.timeout && clearTimeout(j), setTimeout(function() {
                            m.iframeTarget ? v.attr("src", m.iframeSrc) : v.remove(), x.responseXML = null
                        }, 100)
                    }
                }
            }
            var c, l, m, d, p, v, g, x, y, b, T, j, w = f[0],
                S = e.Deferred();
            if (S.abort = function(e) {
                    x.abort(e)
                }, r)
                for (l = 0; l < h.length; l++) c = e(h[l]), i ? c.prop("disabled", !1) : c.removeAttr("disabled");
            if (m = e.extend(!0, {}, e.ajaxSettings, t), m.context = m.context || m, p = "jqFormIO" + (new Date).getTime(), m.iframeTarget ? (v = e(m.iframeTarget), b = v.attr2("name"), b ? p = b : v.attr2("name", p)) : (v = e('<iframe name="' + p + '" src="' + m.iframeSrc + '" />'), v.css({
                    position: "absolute",
                    top: "-1000px",
                    left: "-1000px"
                })), g = v[0], x = {
                    aborted: 0,
                    responseText: null,
                    responseXML: null,
                    status: 0,
                    statusText: "n/a",
                    getAllResponseHeaders: function() {},
                    getResponseHeader: function() {},
                    setRequestHeader: function() {},
                    abort: function(t) {
                        var r = "timeout" === t ? "timeout" : "aborted";
                        a("aborting upload... " + r), this.aborted = 1;
                        try {
                            g.contentWindow.document.execCommand && g.contentWindow.document.execCommand("Stop")
                        } catch (n) {}
                        v.attr("src", m.iframeSrc), x.error = r, m.error && m.error.call(m.context, x, r, t), d && e.event.trigger("ajaxError", [x, m, r]), m.complete && m.complete.call(m.context, x, r)
                    }
                }, d = m.global, d && 0 === e.active++ && e.event.trigger("ajaxStart"), d && e.event.trigger("ajaxSend", [x, m]), m.beforeSend && m.beforeSend.call(m.context, x, m) === !1) return m.global && e.active--, S.reject(), S;
            if (x.aborted) return S.reject(), S;
            y = w.clk, y && (b = y.name, b && !y.disabled && (m.extraData = m.extraData || {}, m.extraData[b] = y.value, "image" == y.type && (m.extraData[b + ".x"] = w.clk_x, m.extraData[b + ".y"] = w.clk_y)));
            var D = 1,
                k = 2,
                A = e("meta[name=csrf-token]").attr("content"),
                L = e("meta[name=csrf-param]").attr("content");
            L && A && (m.extraData = m.extraData || {}, m.extraData[L] = A), m.forceSync ? o() : setTimeout(o, 10);
            var E, M, F, O = 50,
                X = e.parseXML || function(e, t) {
                    return window.ActiveXObject ? (t = new ActiveXObject("Microsoft.XMLDOM"), t.async = "false", t.loadXML(e)) : t = (new DOMParser).parseFromString(e, "text/xml"), t && t.documentElement && "parsererror" != t.documentElement.nodeName ? t : null
                },
                C = e.parseJSON || function(e) {
                    return window.eval("(" + e + ")")
                },
                _ = function(t, r, a) {
                    var n = t.getResponseHeader("content-type") || "",
                        i = "xml" === r || !r && n.indexOf("xml") >= 0,
                        o = i ? t.responseXML : t.responseText;
                    return i && "parsererror" === o.documentElement.nodeName && e.error && e.error("parsererror"), a && a.dataFilter && (o = a.dataFilter(o, r)), "string" == typeof o && ("json" === r || !r && n.indexOf("json") >= 0 ? o = C(o) : ("script" === r || !r && n.indexOf("javascript") >= 0) && e.globalEval(o)), o
                };
            return S
        }
        if (!this.length) return a("ajaxSubmit: skipping submit process - no element selected"), this;
        var u, c, l, f = this;
        "function" == typeof t ? t = {
            success: t
        } : void 0 === t && (t = {}), u = t.type || this.attr2("method"), c = t.url || this.attr2("action"), l = "string" == typeof c ? e.trim(c) : "", l = l || window.location.href || "", l && (l = (l.match(/^([^#]+)/) || [])[1]), t = e.extend(!0, {
            url: l,
            success: e.ajaxSettings.success,
            type: u || e.ajaxSettings.type,
            iframeSrc: /^https/i.test(window.location.href || "") ? "javascript:false" : "about:blank"
        }, t);
        var m = {};
        if (this.trigger("form-pre-serialize", [this, t, m]), m.veto) return a("ajaxSubmit: submit vetoed via form-pre-serialize trigger"), this;
        if (t.beforeSerialize && t.beforeSerialize(this, t) === !1) return a("ajaxSubmit: submit aborted via beforeSerialize callback"), this;
        var d = t.traditional;
        void 0 === d && (d = e.ajaxSettings.traditional);
        var p, h = [],
            v = this.formToArray(t.semantic, h);
        if (t.data && (t.extraData = t.data, p = e.param(t.data, d)), t.beforeSubmit && t.beforeSubmit(v, this, t) === !1) return a("ajaxSubmit: submit aborted via beforeSubmit callback"), this;
        if (this.trigger("form-submit-validate", [v, this, t, m]), m.veto) return a("ajaxSubmit: submit vetoed via form-submit-validate trigger"), this;
        var g = e.param(v, d);
        p && (g = g ? g + "&" + p : p), "GET" == t.type.toUpperCase() ? (t.url += (t.url.indexOf("?") >= 0 ? "&" : "?") + g, t.data = null) : t.data = g;
        var x = [];
        if (t.resetForm && x.push(function() {
                f.resetForm()
            }), t.clearForm && x.push(function() {
                f.clearForm(t.includeHidden)
            }), !t.dataType && t.target) {
            var y = t.success || function() {};
            x.push(function(r) {
                var a = t.replaceTarget ? "replaceWith" : "html";
                e(t.target)[a](r).each(y, arguments)
            })
        } else t.success && x.push(t.success);
        if (t.success = function(e, r, a) {
                for (var n = t.context || this, i = 0, o = x.length; o > i; i++) x[i].apply(n, [e, r, a || f, f])
            }, t.error) {
            var b = t.error;
            t.error = function(e, r, a) {
                var n = t.context || this;
                b.apply(n, [e, r, a, f])
            }
        }
        if (t.complete) {
            var T = t.complete;
            t.complete = function(e, r) {
                var a = t.context || this;
                T.apply(a, [e, r, f])
            }
        }
        var j = e("input[type=file]:enabled", this).filter(function() {
                return "" !== e(this).val()
            }),
            w = j.length > 0,
            S = "multipart/form-data",
            D = f.attr("enctype") == S || f.attr("encoding") == S,
            k = n.fileapi && n.formdata;
        a("fileAPI :" + k);
        var A, L = (w || D) && !k;
        t.iframe !== !1 && (t.iframe || L) ? t.closeKeepAlive ? e.get(t.closeKeepAlive, function() {
            A = s(v)
        }) : A = s(v) : A = (w || D) && k ? o(v) : e.ajax(t), f.removeData("jqxhr").data("jqxhr", A);
        for (var E = 0; E < h.length; E++) h[E] = null;
        return this.trigger("form-submit-notify", [this, t]), this
    }, e.fn.ajaxForm = function(n) {
        if (n = n || {}, n.delegation = n.delegation && e.isFunction(e.fn.on), !n.delegation && 0 === this.length) {
            var i = {
                s: this.selector,
                c: this.context
            };
            return !e.isReady && i.s ? (a("DOM not ready, queuing ajaxForm"), e(function() {
                e(i.s, i.c).ajaxForm(n)
            }), this) : (a("terminating; zero elements found by selector" + (e.isReady ? "" : " (DOM not ready)")), this)
        }
        return n.delegation ? (e(document).off("submit.form-plugin", this.selector, t).off("click.form-plugin", this.selector, r).on("submit.form-plugin", this.selector, n, t).on("click.form-plugin", this.selector, n, r), this) : this.ajaxFormUnbind().bind("submit.form-plugin", n, t).bind("click.form-plugin", n, r)
    }, e.fn.ajaxFormUnbind = function() {
        return this.unbind("submit.form-plugin click.form-plugin")
    }, e.fn.formToArray = function(t, r) {
        var a = [];
        if (0 === this.length) return a;
        var i, o = this[0],
            s = this.attr("id"),
            u = t ? o.getElementsByTagName("*") : o.elements;
        if (u && !/MSIE [678]/.test(navigator.userAgent) && (u = e(u).get()), s && (i = e(':input[form="' + s + '"]').get(), i.length && (u = (u || []).concat(i))), !u || !u.length) return a;
        var c, l, f, m, d, p, h;
        for (c = 0, p = u.length; p > c; c++)
            if (d = u[c], f = d.name, f && !d.disabled)
                if (t && o.clk && "image" == d.type) o.clk == d && (a.push({
                    name: f,
                    value: e(d).val(),
                    type: d.type
                }), a.push({
                    name: f + ".x",
                    value: o.clk_x
                }, {
                    name: f + ".y",
                    value: o.clk_y
                }));
                else if (m = e.fieldValue(d, !0), m && m.constructor == Array)
            for (r && r.push(d), l = 0, h = m.length; h > l; l++) a.push({
                name: f,
                value: m[l]
            });
        else if (n.fileapi && "file" == d.type) {
            r && r.push(d);
            var v = d.files;
            if (v.length)
                for (l = 0; l < v.length; l++) a.push({
                    name: f,
                    value: v[l],
                    type: d.type
                });
            else a.push({
                name: f,
                value: "",
                type: d.type
            })
        } else null !== m && "undefined" != typeof m && (r && r.push(d), a.push({
            name: f,
            value: m,
            type: d.type,
            required: d.required
        }));
        if (!t && o.clk) {
            var g = e(o.clk),
                x = g[0];
            f = x.name, f && !x.disabled && "image" == x.type && (a.push({
                name: f,
                value: g.val()
            }), a.push({
                name: f + ".x",
                value: o.clk_x
            }, {
                name: f + ".y",
                value: o.clk_y
            }))
        }
        return a
    }, e.fn.formSerialize = function(t) {
        return e.param(this.formToArray(t))
    }, e.fn.fieldSerialize = function(t) {
        var r = [];
        return this.each(function() {
            var a = this.name;
            if (a) {
                var n = e.fieldValue(this, t);
                if (n && n.constructor == Array)
                    for (var i = 0, o = n.length; o > i; i++) r.push({
                        name: a,
                        value: n[i]
                    });
                else null !== n && "undefined" != typeof n && r.push({
                    name: this.name,
                    value: n
                })
            }
        }), e.param(r)
    }, e.fn.fieldValue = function(t) {
        for (var r = [], a = 0, n = this.length; n > a; a++) {
            var i = this[a],
                o = e.fieldValue(i, t);
            null === o || "undefined" == typeof o || o.constructor == Array && !o.length || (o.constructor == Array ? e.merge(r, o) : r.push(o))
        }
        return r
    }, e.fieldValue = function(t, r) {
        var a = t.name,
            n = t.type,
            i = t.tagName.toLowerCase();
        if (void 0 === r && (r = !0), r && (!a || t.disabled || "reset" == n || "button" == n || ("checkbox" == n || "radio" == n) && !t.checked || ("submit" == n || "image" == n) && t.form && t.form.clk != t || "select" == i && -1 == t.selectedIndex)) return null;
        if ("select" == i) {
            var o = t.selectedIndex;
            if (0 > o) return null;
            for (var s = [], u = t.options, c = "select-one" == n, l = c ? o + 1 : u.length, f = c ? o : 0; l > f; f++) {
                var m = u[f];
                if (m.selected) {
                    var d = m.value;
                    if (d || (d = m.attributes && m.attributes.value && !m.attributes.value.specified ? m.text : m.value), c) return d;
                    s.push(d)
                }
            }
            return s
        }
        return e(t).val()
    }, e.fn.clearForm = function(t) {
        return this.each(function() {
            e("input,select,textarea", this).clearFields(t)
        })
    }, e.fn.clearFields = e.fn.clearInputs = function(t) {
        var r = /^(?:color|date|datetime|email|month|number|password|range|search|tel|text|time|url|week)$/i;
        return this.each(function() {
            var a = this.type,
                n = this.tagName.toLowerCase();
            r.test(a) || "textarea" == n ? this.value = "" : "checkbox" == a || "radio" == a ? this.checked = !1 : "select" == n ? this.selectedIndex = -1 : "file" == a ? /MSIE/.test(navigator.userAgent) ? e(this).replaceWith(e(this).clone(!0)) : e(this).val("") : t && (t === !0 && /hidden/.test(a) || "string" == typeof t && e(this).is(t)) && (this.value = "")
        })
    }, e.fn.resetForm = function() {
        return this.each(function() {
            ("function" == typeof this.reset || "object" == typeof this.reset && !this.reset.nodeType) && this.reset()
        })
    }, e.fn.enable = function(e) {
        return void 0 === e && (e = !0), this.each(function() {
            this.disabled = !e
        })
    }, e.fn.selected = function(t) {
        return void 0 === t && (t = !0), this.each(function() {
            var r = this.type;
            if ("checkbox" == r || "radio" == r) this.checked = t;
            else if ("option" == this.tagName.toLowerCase()) {
                var a = e(this).parent("select");
                t && a[0] && "select-one" == a[0].type && a.find("option").selected(!1), this.selected = t
            }
        })
    }, e.fn.ajaxSubmit.debug = !1
});

/**
 * @module       RDInputLabel
 * @author       Evgeniy Gusarov
 * @license      MIT License
 */
(function() {
    ! function(t, e, i) {
        var s, n;
        return n = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent), isWebkit = /safari|chrome/i.test(navigator.userAgent), s = function() {
            function s(s, n) {
                this.options = t.extend(!0, {}, this.Defaults, n), this.$element = t(s).addClass("rd-input-label"), this.$target = t("#" + this.$element.attr("for")), this.$win = t(i), this.$doc = t(e), this.initialize()
            }
            return s.prototype.Defaults = {
                callbacks: null
            }, s.prototype.initialize = function() {
                return this.$target.on("input", t.proxy(this.change, this)).on("focus", t.proxy(this.focus, this)).on("blur", t.proxy(this.blur, this)).on("hover", t.proxy(this.hover, this)).parents("form").on("reset", t.proxy(this.reset, this)), this.change(), this.hover(), this
            }, s.prototype.hover = function() {
                return isWebkit && (this.$target.is(":-webkit-autofill") ? this.$element.addClass("auto-fill") : this.$element.removeClass("auto-fill")), this
            }, s.prototype.change = function() {
                return isWebkit && (this.$target.is(":-webkit-autofill") ? this.$element.addClass("auto-fill") : this.$element.removeClass("auto-fill")), "" !== this.$target.val() ? (this.$element.hasClass("focus") || this.focus(), this.$element.addClass("not-empty")) : this.$element.removeClass("not-empty"), this
            }, s.prototype.focus = function() {
                return this.$element.addClass("focus"), this
            }, s.prototype.reset = function() {
                return setTimeout(t.proxy(this.blur, this)), this
            }, s.prototype.blur = function(t) {
                return "" === this.$target.val() && this.$element.removeClass("focus").removeClass("not-empty"), this
            }, s
        }(), t.fn.extend({
            RDInputLabel: function(e) {
                return this.each(function() {
                    var i;
                    return i = t(this), i.data("RDInputLabel") ? void 0 : i.data("RDInputLabel", new s(this, e))
                })
            }
        }), i.RDInputLabel = s
    }(window.jQuery, document, window), "undefined" != typeof module && null !== module ? module.exports = window.RDInputLabel : "function" == typeof define && define.amd && define(["jquery"], function() {
        "use strict";
        return window.RDInputLabel
    })
}).call(this);