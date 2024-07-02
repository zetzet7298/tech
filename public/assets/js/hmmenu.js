!(function (t, e) {
    "object" == typeof exports && "undefined" != typeof module
      ? e(exports)
      : "function" == typeof define && define.amd
      ? define(["exports"], e)
      : e(((t = t || self).window = t.window || {}));
  })(this, function (t) {
    "use strict";
  
    const DOC = document,
      HTML = document.documentElement,
      BODY = document.body,
      H_MMENU_CLICK = DOC.querySelector(".hmmenu__button"),
      H_NAVIGATION = DOC.querySelector(".hmmenu"),
      H_NAVIGATION_LOGO = DOC.querySelector(".hmmenu__logo"),
      H_NAVIGATION_NAV = DOC.querySelector(".hmmenu__nav"),
      H_NAVIGATION_FOOTER = DOC.querySelector(".hmmenu__footer"),
      H_NAVIGATION_ITEM = H_NAVIGATION_NAV.querySelectorAll(".menu-item"),
      H_NAVIGATION_ITEM__HOME =
        H_NAVIGATION_NAV.querySelectorAll(".menu-item-home"),
      PathBg = DOC.getElementById("scene"),
      PathD = PathBg.querySelectorAll("path");
    gsap.set(PathBg, {
      opacity: 0,
    });
    function RanDom(e, t) {
      return Math.max(Math.random() * (t - e) + e);
    }
  
    $(".menu-item-has-children").append('<span class="hmmenu__next"></span>');
    $(".hmmenu__nav .sub-menu").prepend(
      '<span class="hmmenu__back"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 448 512"><path d="M152.485 396.284l19.626-19.626c4.753-4.753 4.675-12.484-.173-17.14L91.22 282H436c6.627 0 12-5.373 12-12v-28c0-6.627-5.373-12-12-12H91.22l80.717-77.518c4.849-4.656 4.927-12.387.173-17.14l-19.626-19.626c-4.686-4.686-12.284-4.686-16.971 0L3.716 247.515c-4.686 4.686-4.686 12.284 0 16.971l131.799 131.799c4.686 4.685 12.284 4.685 16.97-.001z"/></svg></span>'
    );
    $(".hmmenu__next").click(function () {
      const currentMenu = $(this).parent().find(" > a").text();
      $(this).parent().find(" > .sub-menu").addClass("open");
      $(this)
        .parent()
        .find(" > .sub-menu > .hmmenu__back")
        .html(
          `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 448 512"><path d="M152.485 396.284l19.626-19.626c4.753-4.753 4.675-12.484-.173-17.14L91.22 282H436c6.627 0 12-5.373 12-12v-28c0-6.627-5.373-12-12-12H91.22l80.717-77.518c4.849-4.656 4.927-12.387.173-17.14l-19.626-19.626c-4.686-4.686-12.284-4.686-16.971 0L3.716 247.515c-4.686 4.686-4.686 12.284 0 16.971l131.799 131.799c4.686 4.685 12.284 4.685 16.97-.001z"/></svg><span>${currentMenu}</span>`
        );
    });
    $(".hmmenu__back").click(function () {
      $(this).parent().removeClass("open");
    });
  
    H_MMENU_CLICK.addEventListener("click", (e) => {
      if (H_MMENU_CLICK.classList.contains("hmmenu-open-click")) {
        H_MMENU_CLICK.classList.remove("hmmenu-open-click");
        window.requestAnimationFrame(Collapse);
      } else {
        H_NAVIGATION.scrollTop = 0;
        H_NAVIGATION.classList.add("hmmenu--open");
        H_MMENU_CLICK.classList.add("hmmenu-open-click");
        HTML.classList.add("no-scroll");
        BODY.classList.add("no-scroll");
        window.requestAnimationFrame(Expand);
      }
    });
  
    const Expand = function e() {
      gsap.to(PathBg, {
        duration: 0.2,
        opacity: 1,
        ease: Power0.easeIn,
        onComplete: function () {
          PathD.forEach(function (e) {
            const t = e.getAttribute("pathshow");
            gsap.to(e, {
              duration: 0.6,
              attr: {
                d: t,
              },
              delay: RanDom(-0.05, 0.23),
              ease: Power2.easeOut,
              onComplete: function () {
                H_NAVIGATION_ITEM.forEach(function (e) {
                  gsap.set(e, {
                    opacity: 0,
                  }),
                    gsap.to(e, {
                      duration: 0.3,
                      opacity: 1,
                      delay: RanDom(0.01, 0.6),
                      ease: "none",
                      stagger: {
                        each: 0.3,
                      },
                    });
                }),
                  gsap.to(H_NAVIGATION_LOGO, {
                    duration: 0.3,
                    opacity: 1,
                    ease: Power0.easeOut,
                  });
              },
            });
          });
        },
      }),
        window.cancelAnimationFrame(e);
    };
    const Collapse = function e() {
      H_NAVIGATION_ITEM.forEach(function (e) {
        gsap.to(e, {
          duration: 0.2,
          opacity: 0,
          delay: 0,
          ease: "none",
          stagger: {
            each: 0.1,
          },
        });
      }),
        gsap.to(H_NAVIGATION_LOGO, {
          duration: 0.3,
          opacity: 0,
          ease: Power0.easeOut,
        }),
        PathD.forEach(function (e) {
          const t = e.getAttribute("pathhide");
          gsap.to(e, {
            duration: 0.6,
            attr: {
              d: t,
            },
            delay: 0,
            ease: Power2.easeIn,
            onComplete: function () {
              H_NAVIGATION.classList.remove("hmmenu--open");
              H_MMENU_CLICK.classList.remove("hmmenu-open-click");
              HTML.classList.remove("no-scroll");
              BODY.classList.remove("no-scroll");
              gsap.to(PathBg, {
                duration: 0.2,
                opacity: 0,
                ease: Power0.easeOut,
              });
            },
          });
        }),
        window.cancelAnimationFrame(e);
    };
    window.requestAnimationFrame(Collapse);
  });