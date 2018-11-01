/**
 * Pointer Events
 * @license BSD Lisence
 */
function PointerEventsPolyfill(t) {
    if (this.options = {
            selector: "*",
            mouseEvents: ["click", "dblclick", "mousedown", "mouseup"],
            usePolyfillIf: function() {
                if ("Microsoft Internet Explorer" == navigator.appName) {
                    var t = navigator.userAgent;
                    if (null != t.match(/MSIE ([0-9]{1,}[\.0-9]{0,})/)) {
                        var e = parseFloat(RegExp.$1);
                        if (11 > e) return !0
                    }
                }
                return !1
            }
        }, t) {
        var e = this;
        $.each(t, function(t, n) {
            e.options[t] = n
        })
    }
    this.options.usePolyfillIf() && this.register_mouse_events()
}
PointerEventsPolyfill.initialize = function(t) {
    return null == PointerEventsPolyfill.singleton && (PointerEventsPolyfill.singleton = new PointerEventsPolyfill(t)), PointerEventsPolyfill.singleton
}, PointerEventsPolyfill.prototype.register_mouse_events = function() {
    $(document).on(this.options.mouseEvents.join(" "), this.options.selector, function(t) {
        if ("none" == $(this).css("pointer-events")) {
            var e = $(this).css("display");
            $(this).css("display", "none");
            var n = document.elementFromPoint(t.clientX, t.clientY);
            return e ? $(this).css("display", e) : $(this).css("display", ""), t.target = n, $(n).trigger(t), !1
        }
        return !0
    })
}, jQuery(document).ready(function() {
    PointerEventsPolyfill.initialize({})
});