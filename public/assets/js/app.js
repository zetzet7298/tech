function mousecursor(){if($("body")){let e,t=document.querySelector(".cursor-inner"),o=document.querySelector(".cursor-outer"),i=0;window.onmousemove=function(s){o.style.transform="translate("+s.clientX+"px, "+s.clientY+"px)",t.style.transform="translate("+s.clientX+"px, "+s.clientY+"px)",e=s.clientY,i=s.clientX},$("body").on("mouseenter","a, .cursor-pointer",function(){t.classList.add("cursor-hover"),o.classList.add("cursor-hover")}),$("body").on("mouseleave","a, .cursor-pointer",function(){$(this).is("a")&&$(this).closest(".cursor-pointer").length||(t.classList.remove("cursor-hover"),o.classList.remove("cursor-hover"))}),t.style.visibility="visible",o.style.visibility="visible"}}function animateFrom(e,t,o,i){t=t||1.5,o=o||0;var s=0,n=100*(i=i||1);e.classList.contains("gs_reveal_fromLeft")?(s=-100,n=0):e.classList.contains("gs_reveal_fromRight")&&(s=100,n=0),e.style.transform="translate("+s+"px, "+n+"px)",e.style.opacity="0",gsap.fromTo(e,{x:s,y:n,autoAlpha:0},{duration:t,delay:o,x:0,y:0,autoAlpha:1,ease:"expo",overwrite:"auto",scrollTrigger:{trigger:e,start:"top center"}})}function hide(e){gsap.set(e,{autoAlpha:0})}function scrollToElement(e){$([document.documentElement,document.body]).animate({scrollTop:$("#"+e).offset().top},800)}function throttle(e,t){let o=0;return function(...i){let s=(new Date).getTime();if(!(s-o<t))return o=s,e(...i)}}$(function(){mousecursor()}),$(window).scroll(function(){$(".check_screen_height").height()+$(window).scrollTop()>=$("body").height()-10?($(".scroll-top").addClass("animation-UpDown"),$(".scroll-animation").addClass("hide-scroll")):($(".scroll-top").removeClass("animation-UpDown"),$(".scroll-animation").removeClass("hide-scroll"))}),$(document).ready(function(){$(".list_element_fb").click(function(){let e=$(this).attr("data-id");$(".category-fbicon").removeClass("active"),$(e).addClass("active"),$(".list_element_fb").removeClass("active"),$(this).addClass("active")})}),$(document).ready(function(){$(".left-control-tab").click(function(){$(".left-control-tab").removeClass("active"),$(this).addClass("active");let e=$(this).attr("data-id");$(".tabico").removeClass("active"),$("."+e).addClass("active")}),$(".list span").click(function(){let e=$(this).text(),t=$("#editorico").val();$("#editorico").val(t+e);var o=$("<textarea>");$("body").append(o),o.val(e).select(),document.execCommand("copy"),o.remove(),$("#tip").html("<b>"+e+"</b> đã được sao chép"),$("#tip").addClass("active")}),$("#editorico-copy").click(function(){var e=$("#editorico").val(),t=$("<textarea>");$("body").append(t),t.val(e).select(),document.execCommand("copy"),t.remove(),$("#tip").html("Sao chép vào clipboard"),$("#tip").addClass("active")})}),jQuery(document).ready(function(e){(new WOW).init(),e(".service-xemthem-btn").click(function(){let t=e(this).parent(),o=e(this).parent().find(".service-xemthem-content");o.height()>t.height()?(t.addClass("service-xemthem-active"),t.height(o.height()+30),e(this).html('Ẩn bớt <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 483.12 483.12" style="enable-background:new 0 0 483.12 483.12;" xml:space="preserve"><g><g><path d="M2.728,366.416c6.8,4.9,21.5-1.2,37.2-15.5c28.1-25.7,56.6-51.4,83.4-78.6c41.4-41.9,81.7-84.9,122.4-127.4 c67,79.4,145.5,150,217.8,225.4c3.4,3.6,11.4,6.6,14.9,6.6c6.9,0,5.3-7.4,0.9-16.3c-14.7-29.3-38.2-59.1-64.4-87.1 c-51-54.3-101.2-109.2-154.5-161.7l-0.2-0.2l0,0c-7.4-7.3-19.3-7.2-26.6,0.2c-12.6,12.8-25.2,25.8-37.5,39 c-8.4,7.9-16.8,15.7-25.1,23.6c-52.7,50.4-104.6,101.6-153,155.8C4.128,345.716-4.772,361.116,2.728,366.416z"/></g></g></svg>')):(t.removeClass("service-xemthem-active"),t.height(70),e(this).html('Hiển thị thêm <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve"><path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/></svg>'))}),770>e("body").width()&&e(".footer__title").click(function(){let t=e(this).find(".footer-xemthem-btn").attr("data-id"),o=e("#footer-mobile-hidden-"+t),i=o.find(".footer-mobile-hidden--content");i.height()>o.height()?(o.height(i.height()+20),e(this).find(".footer-xemthem-btn").html('<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 483.12 483.12" style="enable-background:new 0 0 483.12 483.12;" xml:space="preserve"><g><g><path d="M2.728,366.416c6.8,4.9,21.5-1.2,37.2-15.5c28.1-25.7,56.6-51.4,83.4-78.6c41.4-41.9,81.7-84.9,122.4-127.4 c67,79.4,145.5,150,217.8,225.4c3.4,3.6,11.4,6.6,14.9,6.6c6.9,0,5.3-7.4,0.9-16.3c-14.7-29.3-38.2-59.1-64.4-87.1 c-51-54.3-101.2-109.2-154.5-161.7l-0.2-0.2l0,0c-7.4-7.3-19.3-7.2-26.6,0.2c-12.6,12.8-25.2,25.8-37.5,39 c-8.4,7.9-16.8,15.7-25.1,23.6c-52.7,50.4-104.6,101.6-153,155.8C4.128,345.716-4.772,361.116,2.728,366.416z"/></g></g></svg>')):(o.height(0),e(this).find(".footer-xemthem-btn").html('<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve"><path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/></svg>'))}),e(".footer__logo__mobile").click(function(){let t=e(this).attr("data-id"),o=e("#footer-mobile-hidden-"+t),i=o.find(".footer-mobile-hidden--content");i.height()>o.height()?(o.height(i.height()+20),e(this).find(".footer-xemthem-btn").html('<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 483.12 483.12" style="enable-background:new 0 0 483.12 483.12;" xml:space="preserve"><g><g><path d="M2.728,366.416c6.8,4.9,21.5-1.2,37.2-15.5c28.1-25.7,56.6-51.4,83.4-78.6c41.4-41.9,81.7-84.9,122.4-127.4 c67,79.4,145.5,150,217.8,225.4c3.4,3.6,11.4,6.6,14.9,6.6c6.9,0,5.3-7.4,0.9-16.3c-14.7-29.3-38.2-59.1-64.4-87.1 c-51-54.3-101.2-109.2-154.5-161.7l-0.2-0.2l0,0c-7.4-7.3-19.3-7.2-26.6,0.2c-12.6,12.8-25.2,25.8-37.5,39 c-8.4,7.9-16.8,15.7-25.1,23.6c-52.7,50.4-104.6,101.6-153,155.8C4.128,345.716-4.772,361.116,2.728,366.416z"/></g></g></svg>')):(o.height(0),e(this).find(".footer-xemthem-btn").html('<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;" xml:space="preserve"><path id="XMLID_225_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"/></svg>'))}),e(".header__nav a").each(function(){e(this).attr("target","_self")}),e(".hmmenu__nav a").each(function(){e(this).attr("target","_self")}),gsap.registerPlugin(ScrollTrigger);let t=-10,o=-10;document.querySelector(".cursor"),window.addEventListener("mousemove",e=>{t=e.clientX-9,o=e.clientY-9});var i=/constructor/i.test(window.HTMLElement)||"[object SafariRemoteNotification]"===(!window.safari||safari.pushNotification).toString();document.querySelectorAll(".effect-link").forEach(function(t){1!=i&&(t.addEventListener("mouseenter",function(t){return e(".cursor").addClass("focus")}),t.addEventListener("mouseleave",function(t){return e(".cursor").removeClass("focus")}),t.addEventListener("click",function(t){return e(".cursor").removeClass("focus")}))}),e(document).ready(function(){e(".hselect").length&&e(".hselect").niceSelect()})}),document.addEventListener("DOMContentLoaded",function(){function e(e){gsap.set(e,{autoAlpha:0})}function t(e,t,o,i){i=i||1;let s=0,n=100*i;e.classList.contains("gs_reveal_fromLeft")?(s=-100,n=0):e.classList.contains("gs_reveal_fromRight")&&(s=100,n=0),e.style.transform="translate("+s+"px, "+n+"px)",e.style.opacity="0",gsap.fromTo(e,{x:s,y:n,autoAlpha:0},{duration:t||1.25,x:0,y:0,autoAlpha:1,ease:"expo",delay:o||0})}gsap.utils.toArray(".gs_reveal").forEach(function(o){e(o);let i=o.getAttribute("data-trigger")||o;ScrollTrigger.create({trigger:i,start:"top bottom",end:"bottom bottom",onEnter:function(){t(o,o.getAttribute("data-duration"),o.getAttribute("data-delay"),1)}})})});const eventHandler=e=>{let t=window.pageYOffset||document.documentElement.scrollTop,o=document.querySelector(".header"),i=document.querySelector(".hmmenu__button");t>=0&&t<=66?(o.classList.remove("fixed"),o.classList.remove("shadow"),i.classList.remove("fixed")):(t>lastScrollTop&&t>66?(o.classList.add("fixed"),i.classList.add("fixed"),o.classList.remove("shadow")):(o.classList.add("shadow"),o.classList.remove("fixed"),i.classList.remove("fixed")),lastScrollTop=t<=0?0:t)};let lastScrollTop=0;const tHandler=throttle(eventHandler,500);992>$(window).width()&&window.addEventListener("scroll",tHandler,!1),$(window).resize(function(){if(992>$(window).width()){let e=0;window.addEventListener("scroll",function(){let t=window.pageYOffset||document.documentElement.scrollTop,o=document.querySelector(".header"),i=document.querySelector(".hmmenu__button");t>=0&&t<=66?(o.classList.remove("fixed"),o.classList.remove("shadow"),i.classList.remove("fixed")):(t>e&&t>66?(o.classList.add("fixed"),i.classList.add("fixed"),o.classList.remove("shadow")):(o.classList.add("shadow"),o.classList.remove("fixed"),i.classList.remove("fixed")),e=t<=0?0:t)},!1)}}),$("img").each(function(){""==$(this).attr("alt")&&$(this).attr("alt","Apolo - tư vấn pháp lý chuyên nghiệp")}),jQuery(document).ready(function(e){e("body").trigger("click"),setTimeout(function(){e(".loading-icon").addClass("show")},150),setTimeout(function(){e(".loading-icon").addClass("finish")},200),setTimeout(function(){e(".loading-icon").remove()},1500)}),document.addEventListener("DOMContentLoaded",function(){var e=document.getElementById("flash-message"),t=document.getElementById("close-flash");e&&(e.style.display="block",t.addEventListener("click",function(){e.style.display="none"}),setTimeout(function(){e.style.display="none"},5e3))});