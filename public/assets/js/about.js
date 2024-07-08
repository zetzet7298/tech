
$(".v-control").click(function () {
    $(".v-control").addClass("hidden");
    document.getElementById("video-ads").play();
});
$("#video-ads").click(function () {
    $(".v-control").removeClass("hidden");
    document.getElementById("video-ads").pause();
});
$(document).ready(function () {
    var about_group_4__swiper = new Swiper(".about-group-4__swiper", {
        slidesPerView: "auto",
        spaceBetween: 0,
        freeMode: !0,
        grabCursor: !0,
        loop: !1,
        pagination: {
            el: ".about-group-4-pagination__fraction",
            type: "fraction",
        },
        on: {
            init: function () {
                AOS.init();
            },
        },
    });
});
