
AOS.init();
function showDesign(e) {
    var url = $(e).find(".design-img").attr("href");
    window.history.replaceState({}, "", url);
    $.ajax({ url: "/ajax/show_design.html", type: "POST", dataType: "html" })
        .done(function (response) {
            $("#load-detail-design").html(response);
            $("#load-detail-design").animate({ scrollTop: 0 }, 0);
            $("body").addClass("none-scroll");
            $("#hcontainer").addClass("blur-content");
            $("#load-detail-design").addClass("design-show");
            $(".design-content-data").removeClass("design-animate-right");
            $(".design-content-data").addClass("design-animate-out");
            return !1;
        })
        .fail(function () {
            console.log("error");
        });
}
function hideDesign(e) {
    var url_main = $(e).attr("data-urlmain");
    $(".design-content-data").removeClass("design-animate-out");
    $(".design-content-data").addClass("design-animate-right");
    setTimeout(function () {
        $("body").removeClass("none-scroll");
        $("#hcontainer").removeClass("blur-content");
        $("#load-detail-design").removeClass("design-show");
    }, 1000);
    window.history.replaceState({}, "", url_main);
}
let currentLocation = window.location;
let myArray = currentLocation.toString().split("?id=");
let word = myArray[0];
let word1 = myArray[1];
if (word1 != "undefined" && parseInt(word1) > 0) {
    setTimeout(function () {
        let url = $("#design-flex-" + parseInt(word1))
            .find(".fancy-landing")
            .attr("data-url");
        if (!!url && url != "") {
            $(".iframe-project").attr("src", url);
            $(".mouse-cursor").addClass("hidden");
            $(".wrap-iframe").addClass("active");
            $("body").css({ height: "100vh", overflow: "hidden" });
        }
    }, 1500);
}
$(document).ready(function () {
    $("body").on("click", ".fancy-landing", function () {
        let url = $(this).attr("data-url");
        let stt = $(this).attr("data-stt");
        if (!!url && url != "") {
            $(".iframe-project").attr("src", url);
            $(".mouse-cursor").addClass("hidden");
            $(".wrap-iframe").addClass("active");
            $("body").css({ height: "100vh", overflow: "hidden" });
            window.history.pushState("", "", word + "?id=" + stt);
        }
    });
    $("body").on("click", ".close-iframe", function () {
        $(".iframe-project").attr("src", "");
        $(".mouse-cursor").removeClass("hidden");
        $(".wrap-iframe").removeClass("active");
        $("body").css({ height: "auto", overflow: "auto" });
        window.history.pushState("", "", word);
    });
    $("body").on("click", ".design-close", function () {
        hideDesign(this);
    });
    $("body").on("click", ".click-change-design", function () {
        var id = $(this).attr("data-id");
        var btn_close = $(".design-close");
        if (id) {
            hideDesign(btn_close);
            var designItem = $("#design-flex-" + id);
            var designOffset = designItem.offset().top;
            var designBtn = designItem.find(".design-detail-btn");
            setTimeout(function () {
                $("html, body").animate({ scrollTop: designOffset }, "slow");
            }, 1000);
            setTimeout(function () {
                $(designBtn).trigger("click");
            }, 1500);
        }
    });
    gsap.set(".design-banner-description", { opacity: 0.5, y: 200 });
    gsap.to(".design-banner-description", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".design-banner-description",
            end: "top center",
            scrub: !0,
        },
    });
});

