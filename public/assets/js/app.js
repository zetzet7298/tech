// AOS.init();
/* ===============================  Mouse effect  =============================== */
function mousecursor() {
    if ($("body")) {
        const e = document.querySelector(".cursor-inner"),
            t = document.querySelector(".cursor-outer");
        let n, i = 0,
            o = !1;
        window.onmousemove = function (s) {
            o || (t.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)"), e.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)", n = s.clientY, i = s.clientX
        }, $("body").on("mouseenter", "a, .cursor-pointer", function () {
            e.classList.add("cursor-hover"), t.classList.add("cursor-hover")
        }), $("body").on("mouseleave", "a, .cursor-pointer", function () {
            $(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove("cursor-hover"), t.classList.remove("cursor-hover"))
        }), e.style.visibility = "visible", t.style.visibility = "visible"
    }
};
$(function () {
    mousecursor();
});
$(window).scroll(function() {
  /*alert($(window).scrollTop());*/
  if (($('.check_screen_height').height() + $(window).scrollTop()) >= $("body").height()-10) {

      $('.scroll-top').addClass('animation-UpDown');
      $('.scroll-animation').addClass('hide-scroll');
  }else{
      $('.scroll-top').removeClass('animation-UpDown');
      $('.scroll-animation').removeClass('hide-scroll');
  }
});
/*Select icon facebook*/
$(document).ready(function(){
  $('.list_element_fb').click(function(){
    let idactive= $(this).attr('data-id');

    $('.category-fbicon').removeClass('active');
    $(idactive).addClass('active')

    $('.list_element_fb').removeClass('active');
    $(this).addClass('active')
  });
});

/*create_shortcode_iconsymbol*/
$(document).ready(function(){
  $('.left-control-tab').click(function() {
    $('.left-control-tab').removeClass('active');
    $(this).addClass('active');
    let tabactive=$(this).attr('data-id');
    $('.tabico').removeClass('active');
    $('.'+tabactive).addClass('active');
  });
  $('.list span').click(function() {

    let icoselect=$(this).text();
    let icoselected=$('#editorico').val(); 
    let new_icoselect=icoselected+icoselect;
    $('#editorico').val(new_icoselect);

    var tempTextarea = $('<textarea>');
    $('body').append(tempTextarea);
    tempTextarea.val(icoselect).select();
    document.execCommand('copy');
    tempTextarea.remove();

    $('#tip').html('<b>'+icoselect+'</b> đã được sao chép');
    $('#tip').addClass('active');



  });
  $('#editorico-copy').click(function() {
    var textToCopy = $('#editorico').val();
    var tempTextarea1 = $('<textarea>');
    $('body').append(tempTextarea1);
    tempTextarea1.val(textToCopy).select();
    document.execCommand('copy');
    tempTextarea1.remove();

    $('#tip').html('Sao chép vào clipboard');
    $('#tip').addClass('active');
  });


});
/*create_shortcode_iconsymbol*/


jQuery(document).ready(function ($) {

 

  new WOW().init();
  // $("img").each(function () {
  //   if ($(this).attr("alt") == "") {
  //     $(this).attr("alt", "Miko Tech - thiết kế website chuyên nghiệp");
  //   }
  // });
  $('.service-xemthem-btn').click(function() {
      let parent= $(this).parent();
      let parent_view= $(this).parent().find('.service-xemthem-content');
      if(parent_view.height()>parent.height()){
          parent.addClass('service-xemthem-active');
          parent.height(parent_view.height()+30);
          $(this).html('Ẩn bớt <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 483.12 483.12" style="enable-background:new 0 0 483.12 483.12;" xml:space="preserve"><g><g><path d="M2.728,366.416c6.8,4.9,21.5-1.2,37.2-15.5c28.1-25.7,56.6-51.4,83.4-78.6c41.4-41.9,81.7-84.9,122.4-127.4 c67,79.4,145.5,150,217.8,225.4c3.4,3.6,11.4,6.6,14.9,6.6c6.9,0,5.3-7.4,0.9-16.3c-14.7-29.3-38.2-59.1-64.4-87.1 c-51-54.3-101.2-109.2-154.5-161.7l-0.2-0.2l0,0c-7.4-7.3-19.3-7.2-26.6,0.2c-12.6,12.8-25.2,25.8-37.5,39 c-8.4,7.9-16.8,15.7-25.1,23.6c-52.7,50.4-104.6,101.6-153,155.8C4.128,345.716-4.772,361.116,2.728,366.416z"/></g></g></svg>');
      }else{
          parent.removeClass('service-xemthem-active');
          parent.height(70);
          $(this).html('Hiển thị thêm <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve"><path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/></svg>');
      }
  });  

  

  let bod=$('body').width();
  if(bod<770){
      $('.footer__title').click(function() {
          let id= $(this).find('.footer-xemthem-btn').attr('data-id');
          let parent= $('#footer-mobile-hidden-'+id);
          let parent_view= parent.find('.footer-mobile-hidden--content');
          if(parent_view.height()>parent.height()){
            parent.height(parent_view.height()+20);
            $(this).find('.footer-xemthem-btn').html('<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 483.12 483.12" style="enable-background:new 0 0 483.12 483.12;" xml:space="preserve"><g><g><path d="M2.728,366.416c6.8,4.9,21.5-1.2,37.2-15.5c28.1-25.7,56.6-51.4,83.4-78.6c41.4-41.9,81.7-84.9,122.4-127.4 c67,79.4,145.5,150,217.8,225.4c3.4,3.6,11.4,6.6,14.9,6.6c6.9,0,5.3-7.4,0.9-16.3c-14.7-29.3-38.2-59.1-64.4-87.1 c-51-54.3-101.2-109.2-154.5-161.7l-0.2-0.2l0,0c-7.4-7.3-19.3-7.2-26.6,0.2c-12.6,12.8-25.2,25.8-37.5,39 c-8.4,7.9-16.8,15.7-25.1,23.6c-52.7,50.4-104.6,101.6-153,155.8C4.128,345.716-4.772,361.116,2.728,366.416z"/></g></g></svg>');
          }else{
            parent.height(0);
            $(this).find('.footer-xemthem-btn').html('<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve"><path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/></svg>');
          }
      });  
  }

  $('.footer__logo__mobile').click(function() {
      let id= $(this).attr('data-id');
      let parent= $('#footer-mobile-hidden-'+id);
      let parent_view= parent.find('.footer-mobile-hidden--content');
      if(parent_view.height()>parent.height()){
          parent.height(parent_view.height()+20);
          $(this).find('.footer-xemthem-btn').html('<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 483.12 483.12" style="enable-background:new 0 0 483.12 483.12;" xml:space="preserve"><g><g><path d="M2.728,366.416c6.8,4.9,21.5-1.2,37.2-15.5c28.1-25.7,56.6-51.4,83.4-78.6c41.4-41.9,81.7-84.9,122.4-127.4 c67,79.4,145.5,150,217.8,225.4c3.4,3.6,11.4,6.6,14.9,6.6c6.9,0,5.3-7.4,0.9-16.3c-14.7-29.3-38.2-59.1-64.4-87.1 c-51-54.3-101.2-109.2-154.5-161.7l-0.2-0.2l0,0c-7.4-7.3-19.3-7.2-26.6,0.2c-12.6,12.8-25.2,25.8-37.5,39 c-8.4,7.9-16.8,15.7-25.1,23.6c-52.7,50.4-104.6,101.6-153,155.8C4.128,345.716-4.772,361.116,2.728,366.416z"/></g></g></svg>');
      }else{
          parent.height(0);
          $(this).find('.footer-xemthem-btn').html('<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve"><path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/></svg>');
      }
  });

  $(".header__nav a").each(function(){
     $(this).attr("target","_self");
  });
   
  $(".hmmenu__nav a").each(function(){
     $(this).attr("target","_self");
  });

  const policyHeader = document.querySelector(".policy--mobile");
  policyHeader.addEventListener("click", () => {
    const policyBody = document.querySelector(".policy");
    if (policyBody.classList.contains("policy-open")) {
      policyBody.removeAttribute("style");
      policyBody.classList.remove("policy-open");
    } else {
      policyBody.style.height = policyBody.scrollHeight + "px";
      policyBody.classList.add("policy-open");
    }
  });

 



  gsap.registerPlugin(ScrollTrigger);
  let clientX = -10;
  let clientY = -10;
  const innerCursor = document.querySelector(".cursor");

  const initCursor = () => {
    window.addEventListener("mousemove", (e) => {
      clientX = e.clientX - 9;
      clientY = e.clientY - 9;
    });
    const render = () => {
      TweenMax.set(innerCursor, {
        x: clientX,
        y: clientY,
      });
      //requestAnimationFrame(render);
    };
    //requestAnimationFrame(render);
  };
  initCursor();
  
  var isSafari =
    /constructor/i.test(window.HTMLElement) ||
    "[object SafariRemoteNotification]" ===
      (!window.safari || safari.pushNotification).toString();
  document.querySelectorAll(".effect-link").forEach(function (e) {
    1 != isSafari &&
      (e.addEventListener("mouseenter", function (e) {
        return $(".cursor").addClass("focus");
      }),
      e.addEventListener("mouseleave", function (e) {
        return $(".cursor").removeClass("focus");
      }),
      e.addEventListener("click", function (e) {
        return $(".cursor").removeClass("focus");
      }));
  });
  $(document).ready(function () {
    if ($(".hselect").length) {
      $(".hselect").niceSelect();
    }
  });
});
function animateFrom(elem, duration_time, delay_time, direction) {
  direction = direction || 1;
  duration_time = duration_time || 1.5;
  delay_time = delay_time || 0;
  var x = 0,
      y = direction * 100;
  if (elem.classList.contains("gs_reveal_fromLeft")) {
      x = -100;
      y = 0;
  } else if (elem.classList.contains("gs_reveal_fromRight")) {
      x = 100;
      y = 0;
  }
  elem.style.transform = "translate(" + x + "px, " + y + "px)";
  elem.style.opacity = "0";
  gsap.fromTo(
      elem,
      { x: x, y: y, autoAlpha: 0 },
      {
          duration: duration_time,
          delay: delay_time,
          x: 0,
          y: 0,
          autoAlpha: 1,
          ease: "expo",
          overwrite: "auto",
          scrollTrigger: {
              trigger: elem,
              start: "top center",
          },
      }
  );
}

function hide(elem) {
  gsap.set(elem, { autoAlpha: 0 });
}

document.addEventListener("DOMContentLoaded", function () {
  gsap.utils.toArray(".gs_reveal").forEach(function (elem) {
      hide(elem);
      let trigger_target = elem.getAttribute("data-trigger") || elem;
      ScrollTrigger.create({
          trigger: trigger_target,
          start: "top center",
          onEnter: function () {
              animateFrom(
                  elem,
                  elem.getAttribute("data-duration"),
                  elem.getAttribute("data-delay"),
                  1
              );
          },
      });
  });
});

function scrollToElement(el) {
  $([document.documentElement, document.body]).animate(
    {
      scrollTop: $("#" + el).offset().top,
    },
    800
  );
}
function throttle(func, delay) {
  let lastCall = 0;

  return function (...args) {
    const now = new Date().getTime();

    if (now - lastCall < delay) {
      return;
    }

    lastCall = now;
    return func(...args);
  };
}
const eventHandler = (event) => {
  const st = window.pageYOffset || document.documentElement.scrollTop;
  const header_el = document.querySelector(".header");
  const button_el = document.querySelector(".hmmenu__button");
  if (st >= 0 && st <= 66) {
    header_el.classList.remove("fixed");
    header_el.classList.remove("shadow");
    button_el.classList.remove("fixed");
  } else {
    if (st > lastScrollTop && st > 66) {
      header_el.classList.add("fixed");
      button_el.classList.add("fixed");
      header_el.classList.remove("shadow");
    } else {
      header_el.classList.add("shadow");
      header_el.classList.remove("fixed");
      button_el.classList.remove("fixed");
    }
    lastScrollTop = st <= 0 ? 0 : st;
  }
};
let lastScrollTop = 0;
const tHandler = throttle(eventHandler, 500);
if ($(window).width() < 992) {
  window.addEventListener("scroll", tHandler, false);
}
$(window).resize(function () {
  if ($(window).width() < 992) {
    let lastScrollTop = 0;
    window.addEventListener(
      "scroll",
      function () {
        const st = window.pageYOffset || document.documentElement.scrollTop;
        const header_el = document.querySelector(".header");
        const button_el = document.querySelector(".hmmenu__button");
        if (st >= 0 && st <= 66) {
          header_el.classList.remove("fixed");
          header_el.classList.remove("shadow");
          button_el.classList.remove("fixed");
        } else {
          if (st > lastScrollTop && st > 66) {
            header_el.classList.add("fixed");
            button_el.classList.add("fixed");
            header_el.classList.remove("shadow");
          } else {
            header_el.classList.add("shadow");
            header_el.classList.remove("fixed");
            button_el.classList.remove("fixed");
          }
          lastScrollTop = st <= 0 ? 0 : st;
        }
      },
      false
    );
  }
});
$("img").each(function () {
  if ($(this).attr("alt") == "") {
    $(this).attr("alt", "Miko Tech - thiết kế website chuyên nghiệp");
  }
});
$(".check-phone").change(function () {
  let phoneNumber = $(this).val();
  phoneNumber = phoneNumber.replace(" ", "");
  let arrNumber = phoneNumber.split("");
  if (arrNumber[0] + arrNumber[1] == "02") {
    if (
      arrNumber[0] + arrNumber[1] + arrNumber[2] == "028" ||
      arrNumber[0] + arrNumber[1] + arrNumber[2] == "024"
    ) {
      if (arrNumber.length != 10) {
        Swal.fire({
          title: "Quý khách vui lòng nhập đúng số điện thoại",
          icon: "error",
          showConfirmButton: true,
          timer: 25000,
          confirmButtonText: "Đóng",
          confirmButtonColor: "#1bc1c1",
        });
        $(this)
          .parents(".wpcf7-form")
          .find(".wpcf7-submit")
          .prop("disabled", true);
      } else {
        $(this)
          .parents(".wpcf7-form")
          .find(".wpcf7-submit")
          .prop("disabled", false);
      }
    } else {
      if (arrNumber.length != 11) {
        Swal.fire({
          title: "Quý khách vui lòng nhập đúng số điện thoại",
          icon: "error",
          showConfirmButton: true,
          timer: 25000,
          confirmButtonText: "Đóng",
          confirmButtonColor: "#1bc1c1",
        });
        $(this)
          .parents(".wpcf7-form")
          .find(".wpcf7-submit")
          .prop("disabled", true);
      } else {
        $(this)
          .parents(".wpcf7-form")
          .find(".wpcf7-submit")
          .prop("disabled", false);
      }
    }
  } else {
    if (
      arrNumber[0] + arrNumber[1] == "03" ||
      arrNumber[0] + arrNumber[1] == "05" ||
      arrNumber[0] + arrNumber[1] == "07" ||
      arrNumber[0] + arrNumber[1] == "08" ||
      arrNumber[0] + arrNumber[1] == "09"
    ) {
      if (arrNumber.length != 10) {
        Swal.fire({
          title: "Quý khách vui lòng nhập đúng số điện thoại",
          icon: "error",
          showConfirmButton: true,
          timer: 25000,
          confirmButtonText: "Đóng",
          confirmButtonColor: "#1bc1c1",
        });
        $(this)
          .parents(".wpcf7-form")
          .find(".wpcf7-submit")
          .prop("disabled", true);
      } else {
        $(this)
          .parents(".wpcf7-form")
          .find(".wpcf7-submit")
          .prop("disabled", false);
      }
    } else {
      Swal.fire({
        title: "Quý khách vui lòng nhập đúng số điện thoại",
        icon: "error",
        showConfirmButton: true,
        timer: 2500,
        confirmButtonText: "Đóng",
        confirmButtonColor: "#1bc1c1",
      });
      $(this)
        .parents(".wpcf7-form")
        .find(".wpcf7-submit")
        .prop("disabled", true);
    }
  }
});

jQuery(document).ready(function ($) {
	$("body" ).trigger( "click" );
	setTimeout(function () {
		$(".loading-icon").addClass("show");
	}, 200);
	setTimeout(function () {
		$(".loading-icon").addClass("finish");
	}, 600);
	setTimeout(function () {
		$(".loading-icon").remove();
	}, 1500);
});