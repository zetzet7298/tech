$(document).ready(function () {
    var post__swiper1 = new Swiper(".post__swiper1", {
        slidesPerView: 2,
        spaceBetween: 20,
        speed: 800,
        loop: !0,
        pagination: { el: ".swiper-pagination" },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 10,
                pagination: { el: ".swiper-pagination" },
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 10,
                pagination: { el: ".swiper-pagination" },
            },
            1000: {
                slidesPerView: 3,
                spaceBetween: 16,
                pagination: { el: ".swiper-pagination" },
            },
        },
    });
    var website__swiper = new Swiper(".website__swiper", {
        slidesPerView: "auto",
        spaceBetween: 16,
        scrollbar: { el: ".swiper-scrollbar", hide: !1 },
    });
    var feedback__content__swiper = new Swiper(".feedback__content__swiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        loop: !0,
        autoHeight: !0,
        pagination: { el: ".feedback-pagination__fraction", type: "fraction" },
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
    });
    var feedback__image__swiper = new Swiper(".feedback__image__swiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 800,
        loop: !0,
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
    setTimeout(function () {
        MoveBackground();
    }, 3000);
    gsap.to(".about-us-node", {
        scrollTrigger: { trigger: ".about-us-node", scrub: !0 },
        y: -150,
    });
    gsap.to(".about-us-node2", {
        scrollTrigger: { trigger: ".about-us-node2", scrub: !0 },
        y: -200,
    });
});
function MoveBackground() {
    function e() {
        gsap.to(".slider-items__text", 1, {
            x: 0,
            y: 0,
            z: 0,
            ease: Power2.easeOut,
        }),
            gsap.to(".slider-items__layer--1", 1, {
                x: 0,
                y: 0,
                z: 0,
                ease: Power2.easeOut,
            }),
            gsap.to(".slider-items__layer--2", 1, {
                x: 0,
                y: 0,
                z: 0,
                ease: Power2.easeOut,
            }),
            gsap.to(".slider-items__layer--3", 1, {
                x: 0,
                y: 0,
                z: 0,
                ease: Power2.easeOut,
            });
    }
    function t() {
        (DX = o.X - i),
            (DY = o.Y - l),
            (MoveX = DY / l),
            (MoveY = -(DX / i)),
            (Radius = Math.sqrt(Math.pow(MoveX, 2) + Math.pow(MoveY, 2))),
            (Degree = 10 * Radius),
            gsap.to(".slider-items__text", 3, {
                x: 30 * MoveX,
                y: 30 * MoveY,
                z: Degree,
                ease: Power2.easeOut,
            }),
            gsap.to(".slider-items__layer--1", 3, {
                x: 30 * MoveX,
                y: 30 * MoveY,
                z: Degree,
                ease: Power2.easeOut,
            }),
            gsap.to(".slider-items__layer--2 ", 3, {
                x: 0,
                y: 30 * MoveY,
                z: 0,
                ease: Power2.easeOut,
            }),
            gsap.to(".slider-items__layer--3 ", 3, {
                x: 30 * MoveX,
                y: 30 * MoveY,
                z: 0,
                ease: Power2.easeOut,
            });
    }
    var a = null,
        o = { X: 0, Y: 0 },
        i = $(window).width() / 2,
        l = $(window).height() / 2;
    s = $(".slider");
    $(s).addClass("moving"),
        $(window).width() > 1100
            ? $(s).on("mousemove", function (e) {
                  (o.X = e.pageX),
                      (o.Y = e.pageY),
                      cancelAnimationFrame(a),
                      (a = requestAnimationFrame(t));
              })
            : $(s).on("mousemove", function () {
                  cancelAnimationFrame(a), e();
              }),
        $(window).resize(function () {
            $(window).width() > 1100
                ? ((i = $(window).width() / 2), (l = $(window).height() / 2))
                : e();
        });
}
var tl = gsap.timeline();
tl.from(".slider-items__text", { opacity: 0, y: 100, duration: 1.5 }, 1);
tl.from(".slider-items__layer--2", { scale: 0, duration: 1 }, 1.5);
tl.from(".slider-items__layer--1", { opacity: 0, x: -50, duration: 1 }, 2);
tl.from(".slider-items__layer--3", { opacity: 0, x: 50, duration: 1 }, 2);
