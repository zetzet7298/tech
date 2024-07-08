
$(document).ready(function () {
    var recruitment__swiper = new Swiper(".recruitment__swiper", {
        slidesPerView: "auto",
        spaceBetween: 16,
        freeMode: !0,
        pagination: { el: ".swiper-pagination", type: "progressbar" },
        on: {
            init: function () {
                AOS.init();
            },
        },
    });
    gsap.set(".h-fadeOutLeft", { opacity: 0, x: -100 });
    gsap.set(".h-fadeOutDown", { opacity: 0, y: 100 });
    gsap.to(".team-box-1__image", {
        opacity: 1,
        x: 0,
        scrollTrigger: {
            trigger: ".team-box-1__image",
            end: "top bottom",
            scrub: !0,
        },
    });
    gsap.to(".team-box-1__title", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-1__title",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-1__name", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-1__name",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-1__desc", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-1__desc",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-1__view", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-1__view",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-2__title", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-2__title",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-2__desc", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-2__desc",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-2__desc", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-2__desc",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-2__right", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-2__right",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-3__image", {
        opacity: 1,
        x: 0,
        scrollTrigger: {
            trigger: ".team-box-3__image",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-3__title", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-3__title",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-3__desc", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-3__desc",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".recruitment__swiper", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".recruitment__swiper",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-4__title", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-4__title",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-4__grid", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-4__grid",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-5__title", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-5__title",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-5__grid", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-5__grid",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-6__video", {
        opacity: 1,
        x: 0,
        scrollTrigger: {
            trigger: ".team-box-6__video",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-6__name", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-6__name",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-6__desc", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-6__desc",
            end: "top 65%",
            scrub: !0,
        },
    });
    gsap.to(".team-box-6__desc", {
        opacity: 1,
        y: 0,
        scrollTrigger: {
            trigger: ".team-box-6__desc",
            end: "top 65%",
            scrub: !0,
        },
    });
});
