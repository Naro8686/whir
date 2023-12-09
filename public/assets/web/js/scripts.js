const map =
    "function" == typeof Map
        ? new Map()
        : (function () {
            let e = [],
                t = [];
            return {
                has: (t) => e.indexOf(t) > -1,
                get: (o) => t[e.indexOf(o)],
                set(o, n) {
                    -1 === e.indexOf(o) && (e.push(o), t.push(n));
                },
                delete(o) {
                    let n = e.indexOf(o);
                    n > -1 && (e.splice(n, 1), t.splice(n, 1));
                },
            };
        })();
let createEvent = (e) => new Event(e, { bubbles: !0 });
try {
    new Event("test");
} catch (e) {
    createEvent = (e) => {
        let t = document.createEvent("Event");
        return t.initEvent(e, !0, !1), t;
    };
}
function assign(e) {
    if (!e || !e.nodeName || "TEXTAREA" !== e.nodeName || map.has(e)) return;
    let t = null,
        o = null,
        n = null;
    function l(t) {
        {
            let o = e.style.width;
            (e.style.width = "0px"), e.offsetWidth, (e.style.width = o);
        }
        e.style.overflowY = t;
    }
    function i() {
        if (0 === e.scrollHeight) return;
        let n = (function e(t) {
                let o = [];
                for (; t && t.parentNode && t.parentNode instanceof Element; ) t.parentNode.scrollTop && o.push({ node: t.parentNode, scrollTop: t.parentNode.scrollTop }), (t = t.parentNode);
                return o;
            })(e),
            l = document.documentElement && document.documentElement.scrollTop;
        (e.style.height = ""),
            (e.style.height = e.scrollHeight + t + "px"),
            (o = e.clientWidth),
            n.forEach((e) => {
                e.node.scrollTop = e.scrollTop;
            }),
        l && (document.documentElement.scrollTop = l);
    }
    function r() {
        i();
        let t = Math.round(parseFloat(e.style.height)),
            o = window.getComputedStyle(e, null);
        var r = "content-box" === o.boxSizing ? Math.round(parseFloat(o.height)) : e.offsetHeight;
        if (
            (r < t
                ? "hidden" === o.overflowY && (l("scroll"), i(), (r = "content-box" === o.boxSizing ? Math.round(parseFloat(window.getComputedStyle(e, null).height)) : e.offsetHeight))
                : "hidden" !== o.overflowY && (l("hidden"), i(), (r = "content-box" === o.boxSizing ? Math.round(parseFloat(window.getComputedStyle(e, null).height)) : e.offsetHeight)),
            n !== r)
        ) {
            n = r;
            let s = createEvent("autosize:resized");
            try {
                e.dispatchEvent(s);
            } catch (d) {}
        }
    }
    let s = () => {
            e.clientWidth !== o && r();
        },
        d = ((t) => {
            window.removeEventListener("resize", s, !1),
                e.removeEventListener("input", r, !1),
                e.removeEventListener("keyup", r, !1),
                e.removeEventListener("autosize:destroy", d, !1),
                e.removeEventListener("autosize:update", r, !1),
                Object.keys(t).forEach((o) => {
                    e.style[o] = t[o];
                }),
                map.delete(e);
        }).bind(e, { height: e.style.height, resize: e.style.resize, overflowY: e.style.overflowY, overflowX: e.style.overflowX, wordWrap: e.style.wordWrap });
    e.addEventListener("autosize:destroy", d, !1),
    "onpropertychange" in e && "oninput" in e && e.addEventListener("keyup", r, !1),
        window.addEventListener("resize", s, !1),
        e.addEventListener("input", r, !1),
        e.addEventListener("autosize:update", r, !1),
        (e.style.overflowX = "hidden"),
        (e.style.wordWrap = "break-word"),
        map.set(e, { destroy: d, update: r }),
        (function o() {
            let n = window.getComputedStyle(e, null);
            "vertical" === n.resize ? (e.style.resize = "none") : "both" === n.resize && (e.style.resize = "horizontal"),
            isNaN((t = "content-box" === n.boxSizing ? -(parseFloat(n.paddingTop) + parseFloat(n.paddingBottom)) : parseFloat(n.borderTopWidth) + parseFloat(n.borderBottomWidth))) && (t = 0),
                r();
        })();
}
function destroy(e) {
    let t = map.get(e);
    t && t.destroy();
}
function update(e) {
    let t = map.get(e);
    t && t.update();
}
let autosize = null;
"undefined" == typeof window || "function" != typeof window.getComputedStyle
    ? (((autosize = (e) => e).destroy = (e) => e), (autosize.update = (e) => e))
    : (((autosize = (e, t) => (e && Array.prototype.forEach.call(e.length ? e : [e], (e) => assign(e, t)), e)).destroy = (e) => (e && Array.prototype.forEach.call(e.length ? e : [e], destroy), e)),
        (autosize.update = (e) => (e && Array.prototype.forEach.call(e.length ? e : [e], update), e)));
var notice_ids = [];
notice = function (msg, type, removeExisting) {
    id = "msg-" + Math.random() * 1000000;
    id = id.replace(/\./, "");
    type = typeof type == "undefined" ? "success" : type;
    type = type.replace("error", "danger");
    type = type.replace("info", "primary");
    $message = $('<div id="' + id + '"></div>')
        .addClass("message")
        .html('<span class="message-text bg-' + type + '">' + msg + '<a href="#" class="icon-close message-close"></a></span>');
    if (typeof removeExisting != "undefined" && removeExisting) {
        $(".messages-box").html($message);
    } else {
        $(".messages-box").append($message);
    }
    notice_ids.push(id);
    $("#" + id).addClass("message-start");
    $("#" + id).addClass("message-expand");
    setTimeout(function () {
        $("#" + id)
            .removeClass("message-expand")
            .removeClass("message-start");
    }, 200);
    setTimeout(function () {
        if ((id = notice_ids.shift())) {
            $("#" + id).fadeOut(function () {
                $(this).remove();
            });
        }
    }, 4000);
};
_messages = function () {
    if (!$("body .messages-box").length) $("body").prepend('<div class="messages-box"></div>');
    $(".message-box .message").each(function () {
        id = "msg-" + Math.random() * 1000000;
        id = id.replace(/\./, "");
        $(this).attr("id", id);
        notice_ids.push(id);
        setTimeout(function () {
            if ((id = notice_ids.shift())) {
                $("#" + id).fadeOut(function () {
                    $(this).remove();
                });
            }
        }, 4000);
    });
    $("body").on("click", ".message-close", function () {
        $(this).closest(".message").remove();
        return false;
    });
};
_contentCopy = function () {
    $("body").delegate('[data-toggle="copy"]', "click", function () {
        var _elm = document.createElement("textarea");
        _elm.value = $(this).attr("data-value");
        if (document.querySelector(".modal.show")) {
            document.querySelector(".modal.show").appendChild(_elm);
        } else {
            document.body.appendChild(_elm);
        }
        _elm.select();
        document.execCommand("copy");
        _elm.remove();
        $('[data-toggle="copy"]').removeClass("copied");
        $(this).addClass("copied");
        return false;
    });
};
_textareaAutosize = function () {
    $('[data-autosize="autosize"]').each(function () {
        autosize($(this));
        $(this).data("isAutosized", "");
    });
};
_meteors = function () {
    var $canvas = $("#canvas-meteors");
    const canvas = $canvas.get(0);
    const ctx = canvas.getContext("2d");
    var meteors = [];
    var grid = 5;
    function _placePixel(_x, _y, offsetX, offsetY, row, _color) {
        ctx.beginPath();
        ctx.rect(_x + offsetX * grid, _y + offsetY * grid, grid * row, grid);
        ctx.closePath();
        ctx.fillStyle = _color;
        ctx.fill();
    }
    function _placeObject(meteor) {
        let _x = Math.round((meteor.x / 100) * 2000);
        let _y = Math.round(meteor.y);
        _y = _y - (meteor.vy / 2) * window.pageYOffset;
        let opacity = 1;
        if (canvas.height && $(window).innerHeight()) {
            opacity = 1 - meteor.y / canvas.height;
        }
        opacity = opacity * opacity;
        if (meteor.type == 0) {
            _placePixel(_x, _y, 1, 0, 2, "rgba(72,67,52," + opacity + ")");
            _placePixel(_x, _y, 0, -1, 4, "rgba(72,67,52," + opacity + ")");
            _placePixel(_x, _y, 0, -2, 1, "rgba(237,221,171," + opacity + ")");
            _placePixel(_x, _y, 1, -2, 3, "rgba(72,67,52," + opacity + ")");
            _placePixel(_x, _y, 1, -3, 2, "rgba(237,221,171," + opacity + ")");
            _placePixel(_x, _y, 1, -6, 1, "rgba(72,67,52," + opacity + ")");
            _placePixel(_x, _y, 1, -8, 1, "rgba(72,67,52," + opacity + ")");
            if (meteor.life < 25) {
                _placePixel(_x, _y, 1, -5, 1, "rgba(38,37,33," + opacity + ")");
            }
            if (meteor.life < 50) {
                _placePixel(_x, _y, 1, -10, 1, "rgba(72,67,52," + opacity + ")");
                _placePixel(_x, _y, 1, -20, 1, "rgba(38,37,33," + opacity + ")");
            } else {
                _placePixel(_x, _y, 1, -11, 1, "rgba(72,67,52," + opacity + ")");
            }
            if (meteor.life < 75) {
                _placePixel(_x, _y, 1, -14, 1, "rgba(72,67,52," + opacity + ")");
            } else {
                _placePixel(_x, _y, 1, -15, 1, "rgba(72,67,52," + opacity + ")");
            }
        }
        if (meteor.type == 1) {
            _placePixel(_x, _y, 1, 0, 1, "rgba(72,67,52," + opacity + ")");
            _placePixel(_x, _y, 0, -1, 1, "rgba(237,221,171," + opacity + ")");
            _placePixel(_x, _y, 1, -1, 2, "rgba(72,67,52," + opacity + ")");
            _placePixel(_x, _y, 1, -2, 1, "rgba(237,221,171," + opacity + ")");
            _placePixel(_x, _y, 1, -5, 1, "rgba(72,67,52," + opacity + ")");
            if (meteor.life < 25) {
                _placePixel(_x, _y, 1, -5, 1, "rgba(38,37,33," + opacity + ")");
            }
            if (meteor.life < 50) {
                _placePixel(_x, _y, 1, -10, 1, "rgba(72,67,52," + opacity + ")");
                _placePixel(_x, _y, 1, -20, 1, "rgba(38,37,33," + opacity + ")");
            } else {
                _placePixel(_x, _y, 1, -11, 1, "rgba(72,67,52," + opacity + ")");
            }
            if (meteor.life < 75) {
                _placePixel(_x, _y, 1, -14, 1, "rgba(72,67,52," + opacity + ")");
            } else {
                _placePixel(_x, _y, 1, -15, 1, "rgba(72,67,52," + opacity + ")");
            }
        }
    }
    const meteor = {
        x: 0,
        y: 0,
        vy: 1,
        type: 0,
        life: 0,
        color: "blue",
        draw() {
            _placeObject(this);
        },
    };
    for (i = 1; i <= 100; i++) {
        meteors[i] = Object.assign({}, meteor);
        meteors[i].type = Math.round(Math.random() * 2);
        meteors[i].x = i;
        meteors[i].y = Math.random() * canvas.height;
        meteors[i].vy = Math.max(0.5, Math.random());
        meteors[i].life = 0;
    }
    meteors.sort(function (a, b) {
        return a.y < b.y;
    });
    function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        for (i in meteors) {
            let meteor = meteors[i];
            meteor.y += meteor.vy;
            meteor.life++;
            if (meteor.life > 100) {
                meteor.life = 0;
            }
            let nextRealPosY = meteor.y + meteor.vy - (meteor.vy / 2) * window.pageYOffset;
            if (nextRealPosY > canvas.height) {
                meteor.y = Math.random() * Math.min(canvas.height, window.pageYOffset) - Math.random() * (window.innerHeight / 3);
                meteor.life = 0;
            }
            meteor.draw();
        }
        raf = window.requestAnimationFrame(draw);
    }
    draw();
};
_accordion = function () {
    $(".accordion-header").on("click", function () {
        var _item = $(this).closest(".accordion-item");
        if (!_item.length) return false;
        var _block = _item.find(".accordion-collapse");
        if (_item.hasClass("collapse")) {
            _item.removeClass("collapse");
            _block.stop().slideDown(200);
        } else {
            _item.addClass("collapse");
            _block.stop().slideUp(200);
        }
        return false;
    });
    $(".accordion-item").addClass("collapse");
    $(".accordion-collapse").css("display", "none");
};
_fixnavigation = function () {
    if (($(window).outerWidth() >= 1200 && window.scrollY > 54) || ($(window).outerWidth() < 1200 && window.scrollY > 30) || ($(window).outerWidth() < 992 && window.scrollY > 30) || ($(window).outerWidth() < 768 && window.scrollY > 40)) {
        $(".fixed-toolbar").addClass("fixed");
    } else {
        $(".fixed-toolbar").removeClass("fixed");
    }
};
_smartnav = function () {
    $(".smartnav-btn").click(function () {
        $("body").toggleClass("smartnav-open");
        return false;
    });
};
const eventModalOpen = new Event("modalOpen");
_modals = function () {
    $("[data-modal]").click(function () {
        $("body").addClass("modal-open");
        $("#" + $(this).data("modal"))
            .addClass("show")
            .find("[autofocus]")
            .focus();
        document.dispatchEvent(eventModalOpen);
        return false;
    });
    $('[data-dismiss="modal"]').click(function () {
        $("body").removeClass("modal-open");
        $(".modal.show").removeClass("show");
        return false;
    });
};
_cookieBar = function () {
    var _cookieBarStorage = localStorage || sessionStorage;
    var _showCookieConsent = _cookieBarStorage.getItem("cookieConsent");
    if (!_showCookieConsent) {
        $(".bar-cookies").removeClass("bar-cookies-hide");
    }
    $(".bar-cookies .btn").click(function () {
        $(".bar-cookies").addClass("bar-cookies-hide");
        _cookieBarStorage.setItem("cookieConsent", 1);
    });
};
_mixerForm = function () {
    $(".mixer-form").each(function () {
        var $form = $(this);
        $form.find("[data-address]:not(:first) input").attr("disabled", "disabled");
        $form.find("[data-address] .btn-clean").click(function () {
            var index = $(this).closest("[data-address]").data("address"),
                total = $form.find("[data-address]").length,
                visible = $form.find("[data-address]:visible").length;
            if (index == visible && index < total) {
                $form
                    .find('[data-address="' + (index + 1) + '"]')
                    .removeClass("hide")
                    .find("input")
                    .removeAttr("disabled")
                    .focus();
                if (visible + 1 == total) {
                    $form.find("[data-address]:visible").last().find(".btn-clean").addClass("disabled");
                }
            } else if (index < visible) {
                $form.find("[data-address]:visible .btn-clean.disabled").removeClass("disabled");
                for (var i = index; i <= visible; i++) {
                    if (i == visible) {
                        $form
                            .find('[data-address="' + i + '"]')
                            .addClass("hide")
                            .find("input")
                            .attr("disabled", "disabled")
                            .val("");
                    } else {
                        $form.find('[data-address="' + i + '"] input').val($form.find('[data-address="' + (i + 1) + '"] input').val());
                    }
                }
            }
            $form.find("[data-address]:visible").find(".btn-clean").addClass("btn-clean-remove");
            $form.find("[data-address]:visible").last().find(".btn-clean").removeClass("btn-clean-remove");
            return false;
        });
    });
};
_empty = function (o) {
    for (var p in o) {
        if (o.hasOwnProperty(p)) {
            return false;
        }
    }
    return true;
};
_validationInvalidField = function ($field, message, focus) {
    if (focus && $field.attr("type") != "checkbox") {
        $field.click().focus();
    }

    var $message = $("<div>").addClass("input-error bg-danger").text(message);
    if ($field.closest(".input-field").length) {
        $message.insertAfter($field.closest(".input-field"));
    } else if ($field.closest(".send-btc-fieldgroup").length) {
        if (!$field.closest(".send-btc-fieldgroup").hasClass("jsKeepError")) {
            $message.removeClass("input-error");
        }
        $field.closest("form").append($message.addClass("send-btc-error"));
    } else {
        $message.insertAfter($field);
    }
    $field.on("click keydown change focusin", function () {
        $message.remove();
    });
};
_validationInit = function () {
    $("form").each(function () {
        var $form = $(this),
            status = false,
            request = null;
        if (!$form.data("bound-form_validation")) {
            $form.data("bound-form_validation", true);
            $form.find(":button, :submit").on("click", function () {
                $form.data("submitter", $(this));
            });
        }
        $form.submit(function (e) {
            if ($form.hasClass("disabled")) {
                return false;
            }
            $form.addClass("disabled");
            if ($form.data("submitter") != false) {
                $($form.data("submitter")).find(".btn-spinner").remove();
                $($form.data("submitter")).prepend('<div class="btn-spinner"><span class="spinner-border spinner-border-sm"></span></div>').addClass("btn-loading");
            } else {
                $form.find("button:first").addClass("btn-loading");
            }
            $form.data("submitter", false);
            $form.find("button").addClass("disabled");
            if (request != null) {
                request.abort();
            }
            request = $.ajax({
                form: $form,
                type: "POST",
                data: $form.serializeArray(),
                url: $form.attr("action"),
                dataType: "json",
                success: function (response) {

                    var defaults = { status: "success", fields: {}, message: "", redirect: "", form: this.form };
                    var response = $.extend({}, defaults, response);
                    if (typeof response.callback !== "undefined") {
                        _callback(response.callback, response.form, response);
                    }
                    $form.find(".input-error").remove();
                    $form.find(".send-btc-error").remove();

                    if (response.redirect != "") {
                        location.href = response.redirect;
                        return;
                    }
                    if (response.message != "") {
                        notice(response.message, response.status, true);
                    }
                    response.form.find("button").removeClass("disabled");
                    response.form.find(".btn-loading").removeClass("btn-loading");
                    response.form.removeClass("disabled");
                    if (!_empty(response.fields)) {
                        var i = 0;
                        $.each(response.fields, function (field, message) {
                            var field_selector = 'input[name="' + field + '"], select[name="' + field + '"], textarea[name="' + field + '"]';
                            response.form.find(field_selector).each(function (i, field) {
                                var $field = $(field);
                                if (i == 0 && $field.attr("type") != "checkbox") {
                                    $field.click().focus();
                                }
                                if ($field.attr("id") == "" || typeof $field.attr("id") == "undefined") {
                                    $field.attr("id", $field.attr("name") + "_" + Math.floor(Math.random() * 1000000 + 1));
                                }
                                _validationInvalidField($field, message, false);
                            });
                            i++;
                        });
                    }
                },
            });
            return false;
        });
    });
};
var txStatus = -1;
_checkTxStatus = function () {
    $.ajax({ url: window.location, dataType: "json" }).done(function (response) {
        console.log(txStatus);
        if (txStatus == "-1") {
            txStatus = response.status;
        } else if (txStatus != response.status) {
            location.reload();
        }
        setTimeout(_checkTxStatus, 10000);
    });
};
_ajaxRequest = function () {
    $("body").delegate(".jsAjaxRequest", "click", function () {
        var $this = $(this),
            post_data = {},
            post_data_test = /^data\-post\-(.+)$/;
        $.each($this.get(0).attributes, function (index, attr) {
            if (post_data_test.test(attr.nodeName)) {
                var key = attr.nodeName.match(post_data_test)[1];
                post_data[key] = attr.nodeValue;
            }
        });
        if ($this.hasClass("btn")) {
            $this.addClass("btn-loading disabled");
        }
        $.ajax({
            type: "POST",
            data: post_data,
            url: $this.attr("href"),
            dataType: "json",
            success: function (response) {
                var defaults = { status: "", message: "", redirect: "" },
                    response = $.extend({}, defaults, response);
                if (response.callback && typeof eval(response.callback) === "function") {
                    _callbackfunc = eval(response.callback);
                    _callbackfunc($this, response);
                }
                if (response.redirect != "") {
                    location.href = response.redirect;
                } else {
                    if (response.message != "" && response.status != "") {
                        notice(response.message, response.status);
                    }
                }
                $this.removeClass("btn-loading disabled");
            },
        });
        return false;
    });
};
_getLatestTx = function () {
    setTimeout(function () {
        $.ajax({
            type: "GET",
            url: "/tx/latest",
            dataType: "json",
            success: function (response) {
                if (typeof response.amt != "undefined") {
                    $(".latest-tx-box span").text(response.amt + " BTC mixed");
                    $(".latest-tx-box").addClass("show");
                    setTimeout(function () {
                        $(".latest-tx-box").removeClass("show");
                        _getLatestTx();
                    }, 10000);
                }
            },
        });
    }, (Math.floor(Math.random() * (30 - 10 + 1)) + 10) * 1000);
};
function _breakPointsField() {
    $(".breakpoints-field").each(function () {
        if ($(this).data("live")) return;
        $(this).data("live", 1);
        $(this).addClass("breakpoint-live");
        var that = this;
        var _from = 0;
        var _to = 0;
        var _movingFrom = 0;
        var _movingSliderFrom = 0;
        var _bpSlider = $('<div class="breakpoint-slider" style="display: none;">');
        $(this).append(_bpSlider);
        function rect(elm) {
            return elm.get(0).getBoundingClientRect();
        }
        function _bpSliderInit() {
            let _bpFirstPoint = rect(_bpSlider.closest(".breakpoints-field").find('input[type="radio"]').first());
            let _bpLastPoint = rect(_bpSlider.closest(".breakpoints-field").find('input[type="radio"]').last());
            _from = _bpFirstPoint.x + _bpFirstPoint.width / 2;
            _to = _bpLastPoint.x + _bpLastPoint.width / 2;
            document.onmousemove = null;
            document.onmouseup = null;
            var _value = _bpSlider.closest(".breakpoints-field").find('input[type="radio"]:checked').val();
            _bpSlider.show();
            _bpSliderSet(_value);
        }
        function _bpSliderSet(index, withAnimation) {
            var _target = rect($(that).find("input[type=radio]").eq(index));
            _bpSlider.closest(".breakpoints-field").find('input[type="radio"]').prop("checked", false);
            _bpSlider.closest(".breakpoints-field").find('input[type="radio"]').eq(index).prop("checked", true);
            _targetX = _target.x + _target.width / 2;
            var _offset = rect(_bpSlider.parent()).x;
            if (withAnimation) {
                _bpSlider.addClass("breakpoint-slider-moving");
                _bpSlider.stop().animate({ left: _targetX - _offset - rect(_bpSlider).width / 2 }, 200, function () {
                    _bpSlider.removeClass("breakpoint-slider-moving");
                });
            } else {
                _bpSlider.css("left", _targetX - _offset - rect(_bpSlider).width / 2);
            }
        }
        function _bpSliderMoving(e) {
            var clientX = e.clientX ?? e.touches[0].clientX;
            var _offsetParent = rect(_bpSlider.parent()).x - _from;
            var offsetX = clientX - _movingFrom;
            var _left = _movingSliderFrom + offsetX + _offsetParent + rect(_bpSlider).width / 2;
            if (_left < 0) _left = 0;
            if (_left > _to - _from) _left = _to - _from;
            _bpSlider.css("left", Math.round(_left - _offsetParent - rect(_bpSlider).width / 2));
        }
        function _bpSliderStop() {
            var _target = 0;
            var _distance = 99999;
            var _x = rect(_bpSlider).x;
            _bpSlider
                .closest(".breakpoints-field")
                .find('input[type="radio"]')
                .each(function (i, k) {
                    if (Math.abs(rect($(k)).x - _x) < _distance) {
                        _distance = Math.abs(rect($(k)).x - _x);
                        _target = i;
                    }
                });
            _bpSliderSet(_target, 1);
            _bpSlider.removeClass("breakpoint-slider-moving");
            document.onmousemove = null;
            document.onmouseup = null;
            document.ontouchmove = null;
            document.ontouchend = null;
        }
        _bpSlider.bind("mousedown", function (e) {
            _movingFrom = e.clientX;
            _movingSliderFrom = _bpSlider.position().left;
            _bpSlider.addClass("breakpoint-slider-moving");
            document.onmousemove = _bpSliderMoving;
            document.onmouseup = _bpSliderStop;
            document.ontouchmove = null;
            document.ontouchend = null;
        });
        _bpSlider.bind("touchstart", function (e) {
            _movingFrom = e.touches[0].clientX;
            _movingSliderFrom = _bpSlider.position().left;
            _bpSlider.addClass("breakpoint-slider-moving");
            document.onmousemove = null;
            document.onmouseup = null;
            document.ontouchmove = _bpSliderMoving;
            document.ontouchend = _bpSliderStop;
        });
        var prevWidth = window.innerWidth;
        $(window).resize(function () {
            if (window.innerWidth !== prevWidth) {
                _bpSliderInit();
            }
        });
        $(window).on("load", function () {
            _bpSliderInit();
        });
        $(this)
            .find('input[type="radio"]')
            .click(function () {
                _bpSliderSet($(this).attr("value"), 1);
                return true;
            });
        document.addEventListener("modalOpen", (e) => {
            _bpSliderInit();
        });
    });
}
$(document).ready(function () {
    _accordion();
    if ($("#canvas-meteors").length) {
        _meteors();
    }
    _smartnav();
    _modals();
    _contentCopy();
    _textareaAutosize();
    _messages();
    _cookieBar();
    _mixerForm();
    _validationInit();
    _ajaxRequest();
    $(".jsPassword").keydown(function () {
        $(this).prop("type", "password");
    });
});
$(document).scroll(function () {
    _fixnavigation();
});
