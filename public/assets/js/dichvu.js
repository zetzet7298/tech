
(function () {
    var supportsPassive = !1;
    try {
        var opts = Object.defineProperty({}, "passive", {
            get: function () {
                supportsPassive = !0;
            },
        });
        window.addEventListener("testPassive", null, opts);
        window.removeEventListener("testPassive", null, opts);
    } catch (e) {}
    function init() {
        var input_begin = "";
        var keydowns = {};
        var lastKeyup = null;
        var lastKeydown = null;
        var keypresses = [];
        var modifierKeys = [];
        var correctionKeys = [];
        var lastMouseup = null;
        var lastMousedown = null;
        var mouseclicks = [];
        var mousemoveTimer = null;
        var lastMousemoveX = null;
        var lastMousemoveY = null;
        var mousemoveStart = null;
        var mousemoves = [];
        var touchmoveCountTimer = null;
        var touchmoveCount = 0;
        var lastTouchEnd = null;
        var lastTouchStart = null;
        var touchEvents = [];
        var scrollCountTimer = null;
        var scrollCount = 0;
        var correctionKeyCodes = [
            "Backspace",
            "Delete",
            "ArrowUp",
            "ArrowDown",
            "ArrowLeft",
            "ArrowRight",
            "Home",
            "End",
            "PageUp",
            "PageDown",
        ];
        var modifierKeyCodes = ["Shift", "CapsLock"];
        var forms = document.querySelectorAll("form[method=post]");
        for (var i = 0; i < forms.length; i++) {
            var form = forms[i];
            var formAction = form.getAttribute("action");
            if (formAction) {
                if (
                    formAction.indexOf("http://") == 0 ||
                    formAction.indexOf("https://") == 0
                ) {
                    if (
                        formAction.indexOf(
                            "http://" + window.location.hostname + "/"
                        ) != 0 &&
                        formAction.indexOf(
                            "https://" + window.location.hostname + "/"
                        ) != 0
                    ) {
                        continue;
                    }
                }
            }
            form.addEventListener(
                "submit",
                function () {
                    var ak_bkp =
                        prepare_timestamp_array_for_request(keypresses);
                    var ak_bmc =
                        prepare_timestamp_array_for_request(mouseclicks);
                    var ak_bte =
                        prepare_timestamp_array_for_request(touchEvents);
                    var ak_bmm =
                        prepare_timestamp_array_for_request(mousemoves);
                    var input_fields = {
                        ak_bib: input_begin,
                        ak_bfs: Date.now(),
                        ak_bkpc: keypresses.length,
                        ak_bkp: ak_bkp,
                        ak_bmc: ak_bmc,
                        ak_bmcc: mouseclicks.length,
                        ak_bmk: modifierKeys.join(";"),
                        ak_bck: correctionKeys.join(";"),
                        ak_bmmc: mousemoves.length,
                        ak_btmc: touchmoveCount,
                        ak_bsc: scrollCount,
                        ak_bte: ak_bte,
                        ak_btec: touchEvents.length,
                        ak_bmm: ak_bmm,
                    };
                    for (var field_name in input_fields) {
                        var field = document.createElement("input");
                        field.setAttribute("type", "hidden");
                        field.setAttribute("name", field_name);
                        field.setAttribute("value", input_fields[field_name]);
                        this.appendChild(field);
                    }
                },
                supportsPassive ? { passive: !0 } : !1
            );
            form.addEventListener(
                "keydown",
                function (e) {
                    if (e.key in keydowns) {
                        return;
                    }
                    var keydownTime = new Date().getTime();
                    keydowns[e.key] = [keydownTime];
                    if (!input_begin) {
                        input_begin = keydownTime;
                    }
                    var lastKeyEvent = Math.max(lastKeydown, lastKeyup);
                    if (lastKeyEvent) {
                        keydowns[e.key].push(keydownTime - lastKeyEvent);
                    }
                    lastKeydown = keydownTime;
                },
                supportsPassive ? { passive: !0 } : !1
            );
            form.addEventListener(
                "keyup",
                function (e) {
                    if (!(e.key in keydowns)) {
                        return;
                    }
                    var keyupTime = new Date().getTime();
                    if (
                        "TEXTAREA" === e.target.nodeName ||
                        "INPUT" === e.target.nodeName
                    ) {
                        if (-1 !== modifierKeyCodes.indexOf(e.key)) {
                            modifierKeys.push(keypresses.length - 1);
                        } else if (-1 !== correctionKeyCodes.indexOf(e.key)) {
                            correctionKeys.push(keypresses.length - 1);
                        } else {
                            var keydownTime = keydowns[e.key][0];
                            var keypress = [];
                            keypress.push(keyupTime - keydownTime);
                            if (keydowns[e.key].length > 1) {
                                keypress.push(keydowns[e.key][1]);
                            }
                            keypresses.push(keypress);
                        }
                    }
                    delete keydowns[e.key];
                    lastKeyup = keyupTime;
                },
                supportsPassive ? { passive: !0 } : !1
            );
            form.addEventListener(
                "focusin",
                function (e) {
                    lastKeydown = null;
                    lastKeyup = null;
                    keydowns = {};
                },
                supportsPassive ? { passive: !0 } : !1
            );
            form.addEventListener(
                "focusout",
                function (e) {
                    lastKeydown = null;
                    lastKeyup = null;
                    keydowns = {};
                },
                supportsPassive ? { passive: !0 } : !1
            );
        }
        document.addEventListener(
            "mousedown",
            function (e) {
                lastMousedown = new Date().getTime();
            },
            supportsPassive ? { passive: !0 } : !1
        );
        document.addEventListener(
            "mouseup",
            function (e) {
                if (!lastMousedown) {
                    return;
                }
                var now = new Date().getTime();
                var mouseclick = [];
                mouseclick.push(now - lastMousedown);
                if (lastMouseup) {
                    mouseclick.push(lastMousedown - lastMouseup);
                }
                mouseclicks.push(mouseclick);
                lastMouseup = now;
                lastKeydown = null;
                lastKeyup = null;
                keydowns = {};
            },
            supportsPassive ? { passive: !0 } : !1
        );
        document.addEventListener(
            "mousemove",
            function (e) {
                if (mousemoveTimer) {
                    clearTimeout(mousemoveTimer);
                    mousemoveTimer = null;
                } else {
                    mousemoveStart = new Date().getTime();
                    lastMousemoveX = e.offsetX;
                    lastMousemoveY = e.offsetY;
                }
                mousemoveTimer = setTimeout(
                    function (theEvent, originalMousemoveStart) {
                        var now = new Date().getTime() - 500;
                        var mousemove = [];
                        mousemove.push(now - originalMousemoveStart);
                        mousemove.push(
                            Math.round(
                                Math.sqrt(
                                    Math.pow(
                                        theEvent.offsetX - lastMousemoveX,
                                        2
                                    ) +
                                        Math.pow(
                                            theEvent.offsetY - lastMousemoveY,
                                            2
                                        )
                                )
                            )
                        );
                        if (mousemove[1] > 0) {
                            mousemoves.push(mousemove);
                        }
                        mousemoveStart = null;
                        mousemoveTimer = null;
                    },
                    500,
                    e,
                    mousemoveStart
                );
            },
            supportsPassive ? { passive: !0 } : !1
        );
        document.addEventListener(
            "touchmove",
            function (e) {
                if (touchmoveCountTimer) {
                    clearTimeout(touchmoveCountTimer);
                }
                touchmoveCountTimer = setTimeout(function () {
                    touchmoveCount++;
                }, 500);
            },
            supportsPassive ? { passive: !0 } : !1
        );
        document.addEventListener(
            "touchstart",
            function (e) {
                lastTouchStart = new Date().getTime();
            },
            supportsPassive ? { passive: !0 } : !1
        );
        document.addEventListener(
            "touchend",
            function (e) {
                if (!lastTouchStart) {
                    return;
                }
                var now = new Date().getTime();
                var touchEvent = [];
                touchEvent.push(now - lastTouchStart);
                if (lastTouchEnd) {
                    touchEvent.push(lastTouchStart - lastTouchEnd);
                }
                touchEvents.push(touchEvent);
                lastTouchEnd = now;
                lastKeydown = null;
                lastKeyup = null;
                keydowns = {};
            },
            supportsPassive ? { passive: !0 } : !1
        );
        document.addEventListener(
            "scroll",
            function (e) {
                if (scrollCountTimer) {
                    clearTimeout(scrollCountTimer);
                }
                scrollCountTimer = setTimeout(function () {
                    scrollCount++;
                }, 500);
            },
            supportsPassive ? { passive: !0 } : !1
        );
    }
    function prepare_timestamp_array_for_request(a, limit) {
        if (!limit) {
            limit = 100;
        }
        var rv = "";
        if (a.length > 0) {
            var random_starting_point = Math.max(
                0,
                Math.floor(Math.random() * a.length - limit)
            );
            for (var i = 0; i < limit && i < a.length; i++) {
                rv += a[random_starting_point + i][0];
                if (a[random_starting_point + i].length >= 2) {
                    rv += "," + a[random_starting_point + i][1];
                }
                rv += ";";
            }
        }
        return rv;
    }
    if (document.readyState !== "loading") {
        init();
    } else {
        document.addEventListener("DOMContentLoaded", init);
    }
})();
window.addEventListener("load", function (event) {
    jQuery(".cfx_form_main,.wpcf7-form,.wpforms-form,.gform_wrapper form").each(
        function () {
            var form = jQuery(this);
            var screen_width = "";
            var screen_height = "";
            if (screen_width == "") {
                if (screen) {
                    screen_width = screen.width;
                } else {
                    screen_width = jQuery(window).width();
                }
            }
            if (screen_height == "") {
                if (screen) {
                    screen_height = screen.height;
                } else {
                    screen_height = jQuery(window).height();
                }
            }
            form.append(
                '<input type="hidden" name="vx_width" value="' +
                    screen_width +
                    '">'
            );
            form.append(
                '<input type="hidden" name="vx_height" value="' +
                    screen_height +
                    '">'
            );
            form.append(
                '<input type="hidden" name="vx_url" value="' +
                    window.location.href +
                    '">'
            );
        }
    );
});
$(window).on("scroll", function () {
    AOS.init();
});
$(document).ready(function () {
    var feedback__content__swiper = new Swiper(".feedback__content__swiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        loop: !0,
        autoHeight: !0,
        pagination: { el: ".feedback-pagination__fraction", type: "fraction" },
        on: {
            init: function () {
                AOS.init();
            },
        },
    });
    var feedback__design__swiper = new Swiper(".feedback__design__swiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        loop: !0,
        navigation: {
            nextEl: ".custom-feedback-next",
            prevEl: ".custom-feedback-prev",
        },
        on: {
            init: function () {
                AOS.init();
            },
        },
    });
    var feedback__image__swiper = new Swiper(".feedback__image__swiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        loop: !0,
        on: {
            init: function () {
                AOS.init();
            },
        },
    });
    feedback__design__swiper.on("slideChange", function () {
        let index = feedback__design__swiper.realIndex;
        let per = (parseInt(index) + 1) * 10;
        $(".feedback-pagination__progress span").css({
            width: per + "%",
            transition: "all 0.8s",
        });
        feedback__content__swiper.slideToLoop(index, 800, null);
        feedback__image__swiper.slideToLoop(index, 800, null);
    });
    feedback__design__swiper.on("slideChange", function () {
        let index = feedback__design__swiper.realIndex;
        let per = (parseInt(index) + 1) * 10;
        $(".feedback-pagination__progress span").css({
            width: per + "%",
            transition: "all 0.8s",
        });
        feedback__content__swiper.slideToLoop(index, 800, null);
        feedback__image__swiper.slideToLoop(index, 800, null);
    });
    feedback__content__swiper.on("slideChange", function () {
        let index = feedback__content__swiper.realIndex;
        let per = (parseInt(index) + 1) * 10;
        $(".feedback-pagination__progress span").css({
            width: per + "%",
            transition: "all 0.8s",
        });
        feedback__design__swiper.slideToLoop(index, 800, null);
        feedback__image__swiper.slideToLoop(index, 800, null);
    });
    feedback__image__swiper.on("slideChange", function () {
        let index = feedback__image__swiper.realIndex;
        let per = (parseInt(index) + 1) * 10;
        $(".feedback-pagination__progress span").css({
            width: per + "%",
            transition: "all 0.8s",
        });
        feedback__design__swiper.slideToLoop(index, 800, null);
        feedback__content__swiper.slideToLoop(index, 800, null);
    });
    var service__swiper = new Swiper(".service__swiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        autoHeight: !0,
        speed: 800,
        loop: !0,
        effect: "fade",
        fadeEffect: { crossFade: !0 },
        autoplay: { delay: 8000, disableOnInteraction: !1 },
        pagination: { el: ".service-pagination__fraction", type: "fraction" },
        on: {
            init: function () {
                AOS.init();
            },
        },
    });
    service__swiper.on("slideChange", function () {
        gsap.fromTo(
            ".service-pagination__progress span",
            { width: 0 },
            { width: "100%", duration: 8.8, ease: "none" }
        );
    });
    var swiper = new Swiper(".service-group-4__swiper", {
        pagination: {
            el: ".service-group-4__swiper-pagination",
            dynamicBullets: !0,
        },
        on: {
            init: function () {
                AOS.init();
            },
        },
    });
});
