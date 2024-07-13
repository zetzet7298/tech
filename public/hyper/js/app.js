/**
* Theme: Hyper - Responsive Bootstrap 5 Admin Dashboard
* Author: Coderthemes
* Module/App: Main Js
*/


(function ($) {

    'use strict';

    // Bootstrap Components
    function initComponents() {

        // loader - Preloader
        $(window).on('load', function () {
            $('#status').fadeOut();
            $('#preloader').delay(350).fadeOut('slow');
        });

        // lucide Icons
        lucide.createIcons();

        // Popovers
        const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
        const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

        // Tooltips
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        // offcanvas
        const offcanvasElementList = document.querySelectorAll('.offcanvas')
        const offcanvasList = [...offcanvasElementList].map(offcanvasEl => new bootstrap.Offcanvas(offcanvasEl))

        //Toasts
        var toastPlacement = document.getElementById("toastPlacement");
        if (toastPlacement) {
            document.getElementById("selectToastPlacement").addEventListener("change", function () {
                if (!toastPlacement.dataset.originalClass) {
                    toastPlacement.dataset.originalClass = toastPlacement.className;
                }
                toastPlacement.className = toastPlacement.dataset.originalClass + " " + this.value;
            });
        }

        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl)
        })

        // Bootstrap Alert Live Example
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        const alert = (message, type) => {
            const wrapper = document.createElement('div')
            wrapper.innerHTML = [
                `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                `   <div>${message}</div>`,
                '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                '</div>'
            ].join('')

            alertPlaceholder.append(wrapper)
        }

        const alertTrigger = document.getElementById('liveAlertBtn')
        if (alertTrigger) {
            alertTrigger.addEventListener('click', () => {
                alert('Nice, you triggered this alert message!', 'success')
            })
        }

        // RTL Layout
        if (document.getElementById('app-style').href.includes('rtl.min.css')) {
            document.getElementsByTagName('html')[0].dir = "rtl";
        }
    }

    // Portlet Widget (Card Reload, Collapse, and Delete)
    function initPortletCard() {

        var portletIdentifier = ".card"
        var portletCloser = '.card a[data-bs-toggle="remove"]'
        var portletRefresher = '.card a[data-bs-toggle="reload"]'
        let self = this

        // Panel closest
        $(document).on("click", portletCloser, function (ev) {
            ev.preventDefault();
            var $portlet = $(this).closest(portletIdentifier);
            var $portlet_parent = $portlet.parent();
            $portlet.remove();
            if ($portlet_parent.children().length == 0) {
                $portlet_parent.remove();
            }
        });

        // Panel Reload
        $(document).on("click", portletRefresher, function (ev) {
            ev.preventDefault();
            var $portlet = $(this).closest(portletIdentifier);
            // This is just a simulation, nothing is going to be reloaded
            $portlet.append('<div class="card-disabled"><div class="card-portlets-loader"></div></div>');
            var $pd = $portlet.find('.card-disabled');
            setTimeout(function () {
                $pd.fadeOut('fast', function () {
                    $pd.remove();
                });
            }, 500 + 300 * (Math.random() * 5));
        });
    }

    //  Multi Dropdown
    function initMultiDropdown() {
        $('.dropdown-menu a.dropdown-toggle').on('click', function () {
            var dropdown = $(this).next('.dropdown-menu');
            var otherDropdown = $(this).parent().parent().find('.dropdown-menu').not(dropdown);
            otherDropdown.removeClass('show')
            otherDropdown.parent().find('.dropdown-toggle').removeClass('show')
            return false;
        });
    }

    // Left Sidebar Menu (Vertical Menu)
    function initLeftSidebar() {
        var self = this;

        if ($(".side-nav").length) {
            var navCollapse = $('.side-nav li .collapse');
            var navToggle = $(".side-nav li [data-bs-toggle='collapse']");
            navToggle.on('click', function (e) {
                return false;
            });

            // open one menu at a time only
            navCollapse.on({
                'show.bs.collapse': function (event) {
                    var parent = $(event.target).parents('.collapse.show');
                    $('.side-nav .collapse.show').not(event.target).not(parent).collapse('hide');
                }
            });

            // activate the menu in left side bar (Vertical Menu) based on url
            $(".side-nav a").each(function () {
                var pageUrl = window.location.href.split(/[?#]/)[0];
                if (this.href == pageUrl) {
                    $(this).addClass("active");
                    $(this).parent().addClass("menuitem-active");
                    $(this).parent().parent().parent().addClass("show");
                    $(this).parent().parent().parent().parent().addClass("menuitem-active"); // add active to li of the current link

                    var firstLevelParent = $(this).parent().parent().parent().parent().parent().parent();
                    if (firstLevelParent.attr('id') !== 'sidebar-menu') firstLevelParent.addClass("show");

                    $(this).parent().parent().parent().parent().parent().parent().parent().addClass("menuitem-active");

                    var secondLevelParent = $(this).parent().parent().parent().parent().parent().parent().parent().parent().parent();
                    if (secondLevelParent.attr('id') !== 'wrapper') secondLevelParent.addClass("show");

                    var upperLevelParent = $(this).parent().parent().parent().parent().parent().parent().parent().parent().parent().parent();
                    if (!upperLevelParent.is('body')) upperLevelParent.addClass("menuitem-active");
                }
            });


            setTimeout(function () {
                var activatedItem = document.querySelector('li.menuitem-active .active');
                if (activatedItem != null) {
                    var simplebarContent = document.querySelector('.leftside-menu .simplebar-content-wrapper');
                    var offset = activatedItem.offsetTop - 300;
                    if (simplebarContent && offset > 100) {
                        scrollTo(simplebarContent, offset, 600);
                    }
                }
            }, 200);

            // scrollTo (Left Side Bar Active Menu)
            function easeInOutQuad(t, b, c, d) {
                t /= d / 2;
                if (t < 1) return c / 2 * t * t + b;
                t--;
                return -c / 2 * (t * (t - 2) - 1) + b;
            }
            function scrollTo(element, to, duration) {
                var start = element.scrollTop, change = to - start, currentTime = 0, increment = 20;
                var animateScroll = function () {
                    currentTime += increment;
                    var val = easeInOutQuad(currentTime, start, change, duration);
                    element.scrollTop = val;
                    if (currentTime < duration) {
                        setTimeout(animateScroll, increment);
                    }
                };
                animateScroll();
            }
        }
    }

    // Topbar Menu (Horizontal Menu)
    function initTopbarMenu() {
        if ($('.navbar-nav').length) {
            $('.navbar-nav li a').each(function () {
                var pageUrl = window.location.href.split(/[?#]/)[0];
                if (this.href == pageUrl) {
                    $(this).addClass('active');
                    $(this).parent().parent().addClass('active'); // add active to li of the current link
                    $(this).parent().parent().parent().parent().addClass('active');
                    $(this).parent().parent().parent().parent().parent().parent().addClass('active');
                }
            });

            // Topbar - main menu
            $('.navbar-toggle').on('click', function () {
                $(this).toggleClass('open');
                $('#navigation').slideToggle(400);
            });
        }
    }

    // Topbar Search Form
    function initSearch() {
        // Search Toggle
        var navDropdowns = $('.navbar-custom .dropdown:not(.app-search)');

        // hide on other click
        $(document).on('click', function (e) {
            if (e.target.id == "top-search" || e.target.closest('#search-dropdown')) {
                $('#search-dropdown').addClass('d-block');
            } else {
                $('#search-dropdown').removeClass('d-block');
            }
            return true;
        });

        // Search Toggle
        $('#top-search').on('focus', function (e) {
            e.preventDefault();
            navDropdowns.children('.dropdown-menu.show').removeClass('show');
            $('#search-dropdown').addClass('d-block');
            return false;
        });

        // hide search on opening other dropdown
        navDropdowns.on('show.bs.dropdown', function () {
            $('#search-dropdown').removeClass('d-block');
        });
    }

    // Topbar Fullscreen Button
    function initfullScreenListener() {
        var self = this;
        var fullScreenBtn = document.querySelector('[data-toggle="fullscreen"]');

        if (fullScreenBtn) {
            fullScreenBtn.addEventListener('click', function (e) {
                e.preventDefault();
                document.body.classList.toggle('fullscreen-enable')
                if (!document.fullscreenElement && /* alternative standard method */ !document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
                    if (document.documentElement.requestFullscreen) {
                        document.documentElement.requestFullscreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                        document.documentElement.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullscreen) {
                        document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                    }
                } else {
                    if (document.cancelFullScreen) {
                        document.cancelFullScreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if (document.webkitCancelFullScreen) {
                        document.webkitCancelFullScreen();
                    }
                }
            });
        }
    }

    // Show/Hide Password
    function initShowHidePassword() {
        $("[data-password]").on('click', function () {
            if ($(this).attr('data-password') == "false") {
                $(this).siblings("input").attr("type", "text");
                $(this).attr('data-password', 'true');
                $(this).addClass("show-password");
            } else {
                $(this).siblings("input").attr("type", "password");
                $(this).attr('data-password', 'false');
                $(this).removeClass("show-password");
            }
        });
    }

    // Form Validation
    function initFormValidation() {
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        // Loop over them and prevent submission
        document.querySelectorAll('.needs-validation').forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    }

    // Form Advance
    function initFormAdvance() {
        // Select2
        if (jQuery().select2) {
            $('[data-toggle="select2"]').select2();
        }

        // Input Mask
        if (jQuery().mask) {
            $('[data-toggle="input-mask"]').each(function (idx, obj) {
                var maskFormat = $(obj).data("maskFormat");
                var reverse = $(obj).data("reverse");
                if (reverse != null)
                    $(obj).mask(maskFormat, { 'reverse': reverse });
                else
                    $(obj).mask(maskFormat);
            });
        }

        // Date-Range-Picker
        if (jQuery().daterangepicker) {
            //date pickers ranges only
            var start = moment().subtract(29, 'days');
            var end = moment();
            var defaultRangeOptions = {
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            };

            $('[data-toggle="date-picker-range"]').each(function (idx, obj) {
                var objOptions = $.extend({}, defaultRangeOptions, $(obj).data());
                var target = objOptions["targetDisplay"];
                //rendering
                $(obj).daterangepicker(objOptions, function (start, end) {
                    if (target)
                        $(target).html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                });
            });

            // Datetime and date range picker
            var defaultOptions = {
                "cancelClass": "btn-light",
                "applyButtonClasses": "btn-success"
            };

            $('[data-toggle="date-picker"]').each(function (idx, obj) {
                var objOptions = $.extend({}, defaultOptions, $(obj).data());
                $(obj).daterangepicker(objOptions);
            });
        }

        // Bootstrap Timepicker
        if (jQuery().timepicker) {
            var defaultOptions = {
                "showSeconds": true,
                "icons": {
                    "up": "mdi mdi-chevron-up",
                    "down": "mdi mdi-chevron-down"
                }
            };

            $('[data-toggle="timepicker"]').each(function (idx, obj) {
                var objOptions = $.extend({}, defaultOptions, $(obj).data());
                $(obj).timepicker(objOptions);
            });
        }

        // Bootstrap Touchspin
        if (jQuery().TouchSpin) {
            var defaultOptions = {

            };

            $('[data-toggle="touchspin"]').each(function (idx, obj) {
                var objOptions = $.extend({}, defaultOptions, $(obj).data());
                $(obj).TouchSpin(objOptions);
            });
        }

        // Bootstrap Maxlength
        if (jQuery().maxlength) {
            var defaultOptions = {
                warningClass: "badge bg-success",
                limitReachedClass: "badge bg-danger",
                separator: ' out of ',
                preText: 'You typed ',
                postText: ' chars available.',
                placement: 'bottom',
            };

            $('[data-toggle="maxlength"]').each(function (idx, obj) {
                var objOptions = $.extend({}, defaultOptions, $(obj).data());
                $(obj).maxlength(objOptions);
            });
        }
    }

    function init() {
        initComponents();
        initPortletCard();
        initMultiDropdown();
        initLeftSidebar()
        initTopbarMenu();
        initSearch();
        initfullScreenListener();
        initShowHidePassword();
        initFormValidation();
        initFormAdvance();
    }

    init();

})(jQuery)

/**
* Theme: Hyper - Responsive Bootstrap 5 Admin Dashboard
* Author: Coderthemes
* Module/App: Layout Js
*/

class ThemeCustomizer {

    constructor() {
        this.html = document.getElementsByTagName('html')[0]
        this.config = {};
        this.defaultConfig = window.config;
    }

    initConfig() {
        this.defaultConfig = JSON.parse(JSON.stringify(window.defaultConfig));
        this.config = JSON.parse(JSON.stringify(window.config));
        this.setSwitchFromConfig();
    }

    changeMenuColor(color) {
        this.config.menu.color = color;
        this.html.setAttribute('data-menu-color', color);
        this.setSwitchFromConfig();
    }

    changeLeftbarSize(size, save = true) {
        this.html.setAttribute('data-sidenav-size', size);
        if (save) {
            this.config.sidenav.size = size;
            this.setSwitchFromConfig();
        }
    }

    changeLayoutMode(mode, save = true) {
        this.html.setAttribute('data-layout-mode', mode);
        if (save) {
            this.config.layout.mode = mode;
            this.setSwitchFromConfig();
        }
    }

    changeLayoutPosition(position) {
        this.config.layout.position = position;
        this.html.setAttribute('data-layout-position', position);
        this.setSwitchFromConfig();
    }

    changeLayoutColor(color) {
        this.config.theme = color;
        this.html.setAttribute('data-bs-theme', color);
        this.setSwitchFromConfig();
    }

    changeTopbarColor(color) {
        this.config.topbar.color = color;
        this.html.setAttribute('data-topbar-color', color);
        this.setSwitchFromConfig();
    }

    changeSidebarUser(showUser) {

        this.config.sidenav.user = showUser;
        if (showUser) {
            this.html.setAttribute('data-sidenav-user', showUser);
        } else {
            this.html.removeAttribute('data-sidenav-user');
        }
        this.setSwitchFromConfig();
    }

    resetTheme() {
        this.config = JSON.parse(JSON.stringify(window.defaultConfig));
        this.changeMenuColor(this.config.menu.color);
        this.changeLeftbarSize(this.config.sidenav.size);
        this.changeLayoutColor(this.config.theme);
        this.changeLayoutMode(this.config.layout.mode);
        this.changeLayoutPosition(this.config.layout.position);
        this.changeTopbarColor(this.config.topbar.color);
        this.changeSidebarUser(this.config.sidenav.user);
        this._adjustLayout();
    }

    initSwitchListener() {
        var self = this;
        document.querySelectorAll('input[name=data-menu-color]').forEach(function (element) {
            element.addEventListener('change', function (e) {
                self.changeMenuColor(element.value);
            })
        });

        document.querySelectorAll('input[name=data-sidenav-size]').forEach(function (element) {
            element.addEventListener('change', function (e) {
                self.changeLeftbarSize(element.value);
            })
        });

        document.querySelectorAll('input[name=data-bs-theme]').forEach(function (element) {
            element.addEventListener('change', function (e) {
                self.changeLayoutColor(element.value);
            })
        });
        document.querySelectorAll('input[name=data-layout-mode]').forEach(function (element) {
            element.addEventListener('change', function (e) {
                self.changeLayoutMode(element.value);
            })
        });

        document.querySelectorAll('input[name=data-layout-position]').forEach(function (element) {
            element.addEventListener('change', function (e) {
                self.changeLayoutPosition(element.value);
            })
        });
        document.querySelectorAll('input[name=data-layout]').forEach(function (element) {
            element.addEventListener('change', function (e) {
                window.location = element.value === 'horizontal' ? 'layouts-horizontal.html' : 'index.html'
            })
        });
        document.querySelectorAll('input[name=data-topbar-color]').forEach(function (element) {
            element.addEventListener('change', function (e) {
                self.changeTopbarColor(element.value);
            })
        });
        document.querySelectorAll('input[name=sidebar-user]').forEach(function (element) {
            element.addEventListener('change', function (e) {
                self.changeSidebarUser(element.checked);
            })
        });


        //TopBar Light Dark
        var themeColorToggle = document.getElementById('light-dark-mode');
        if (themeColorToggle) {
            themeColorToggle.addEventListener('click', function (e) {

                if (self.config.theme === 'light') {
                    self.changeLayoutColor('dark');
                } else {
                    self.changeLayoutColor('light');
                }
            });
        }

        var resetBtn = document.querySelector('#reset-layout')
        if (resetBtn) {
            resetBtn.addEventListener('click', function (e) {
                self.resetTheme();
            });
        }

        var menuToggleBtn = document.querySelector('.button-toggle-menu');
        if (menuToggleBtn) {
            menuToggleBtn.addEventListener('click', function () {
                var configSize = self.config.sidenav.size;
                var size = self.html.getAttribute('data-sidenav-size', configSize);

                if (size === 'full') {
                    self.showBackdrop();
                } else {
                    if (configSize == 'fullscreen') {
                        if (size === 'fullscreen') {
                            self.changeLeftbarSize(configSize == 'fullscreen' ? 'default' : configSize, false);
                        } else {
                            self.changeLeftbarSize('fullscreen', false);
                        }
                    } else {
                        if (size === 'condensed') {
                            self.changeLeftbarSize(configSize == 'condensed' ? 'default' : configSize, false);
                        } else {
                            self.changeLeftbarSize('condensed', false);
                        }
                    }
                }

                // Todo: old implementation
                self.html.classList.toggle('sidebar-enable');

            });
        }

        var menuCloseBtn = document.querySelector('.button-close-fullsidebar');
        if (menuCloseBtn) {
            menuCloseBtn.addEventListener('click', function () {
                self.html.classList.remove('sidebar-enable');
                self.hideBackdrop();
            });
        }

        var hoverBtn = document.querySelectorAll('.button-sm-hover');
        hoverBtn.forEach(function (element) {
            element.addEventListener('click', function () {
                var configSize = self.config.sidenav.size;
                var size = self.html.getAttribute('data-sidenav-size', configSize);

                if (size === 'sm-hover-active') {
                    self.changeLeftbarSize('sm-hover', false);
                } else {
                    self.changeLeftbarSize('sm-hover-active', false);
                }
            });
        })
    }

    showBackdrop() {
        const backdrop = document.createElement('div');
        backdrop.id = 'custom-backdrop';
        backdrop.classList = 'offcanvas-backdrop fade show';
        document.body.appendChild(backdrop);
        document.body.style.overflow = "hidden";
        if (window.innerWidth > 767) {
            document.body.style.paddingRight = "15px";
        }
        const self = this
        backdrop.addEventListener('click', function (e) {
            self.html.classList.remove('sidebar-enable');
            self.hideBackdrop();
        })
    }

    hideBackdrop() {
        var backdrop = document.getElementById('custom-backdrop');
        if (backdrop) {
            document.body.removeChild(backdrop);
            document.body.style.overflow = null;
            document.body.style.paddingRight = null;
        }
    }


    initWindowSize() {
        var self = this;
        window.addEventListener('resize', function (e) {
            self._adjustLayout();
        })
    }

    _adjustLayout() {
        var self = this;

        if (window.innerWidth <= 767.98) {
            self.changeLeftbarSize('full', false);
        } else if (window.innerWidth >= 767 && window.innerWidth <= 1140) {
            if (self.config.sidenav.size !== 'full' && self.config.sidenav.size !== 'fullscreen') {
                if (self.config.sidenav.size === 'sm-hover') {
                    self.changeLeftbarSize('condensed');
                } else {
                    self.changeLeftbarSize('condensed', false);
                }
            }
        } else {
            self.changeLeftbarSize(self.config.sidenav.size);
            self.changeLayoutMode(self.config.layout.mode);
        }
    }

    setSwitchFromConfig() {

        sessionStorage.setItem('__HYPER_CONFIG__', JSON.stringify(this.config));
        // localStorage.setItem('__HYPER_CONFIG__', JSON.stringify(this.config));

        document.querySelectorAll('.right-bar input[type=checkbox]').forEach(function (checkbox) {
            checkbox.checked = false;
        })

        var config = this.config;
        if (config) {
            var layoutNavSwitch = document.querySelector('input[type=radio][name=data-layout][value=' + config.nav + ']');
            var layoutColorSwitch = document.querySelector('input[type=radio][name=data-bs-theme][value=' + config.theme + ']');
            var layoutModeSwitch = document.querySelector('input[type=radio][name=data-layout-mode][value=' + config.layout.mode + ']');
            var topbarColorSwitch = document.querySelector('input[type=radio][name=data-topbar-color][value=' + config.topbar.color + ']');
            var menuColorSwitch = document.querySelector('input[type=radio][name=data-menu-color][value=' + config.menu.color + ']');
            var leftbarSizeSwitch = document.querySelector('input[type=radio][name=data-sidenav-size][value=' + config.sidenav.size + ']');
            var layoutSizeSwitch = document.querySelector('input[type=radio][name=data-layout-position][value=' + config.layout.position + ']');
            var sidebarUserSwitch = document.querySelector('input[type=checkbox][name=sidebar-user]');

            if (layoutNavSwitch) layoutNavSwitch.checked = true;
            if (layoutColorSwitch) layoutColorSwitch.checked = true;
            if (layoutModeSwitch) layoutModeSwitch.checked = true;
            if (topbarColorSwitch) topbarColorSwitch.checked = true;
            if (menuColorSwitch) menuColorSwitch.checked = true;
            if (leftbarSizeSwitch) leftbarSizeSwitch.checked = true;
            if (layoutSizeSwitch) layoutSizeSwitch.checked = true;
            if (sidebarUserSwitch && config.sidenav.user.toString() === "true") sidebarUserSwitch.checked = true;
        }
    }

    init() {
        this.initConfig();
        this.initSwitchListener();
        this.initWindowSize();
        this._adjustLayout();
        this.setSwitchFromConfig();
    }
}

new ThemeCustomizer().init();
var KTUtil = (function () {
    var e = [],
        t = function () {
            window.addEventListener("resize", function () {
                KTUtil.throttle(
                    undefined,
                    function () {
                        !(function () {
                            for (var t = 0; t < e.length; t++) e[t].call();
                        })();
                    },
                    200
                );
            });
        };
    return {
        init: function (e) {
            t();
        },
        addResizeHandler: function (t) {
            e.push(t);
        },
        removeResizeHandler: function (t) {
            for (var n = 0; n < e.length; n++) t === e[n] && delete e[n];
        },
        runResizeHandlers: function () {
            _runResizeHandlers();
        },
        resize: function () {
            if ("function" == typeof Event)
                window.dispatchEvent(new Event("resize"));
            else {
                var e = window.document.createEvent("UIEvents");
                e.initUIEvent("resize", !0, !1, window, 0),
                    window.dispatchEvent(e);
            }
        },
        getURLParam: function (e) {
            var t,
                n,
                i = window.location.search.substring(1).split("&");
            for (t = 0; t < i.length; t++)
                if ((n = i[t].split("="))[0] == e) return unescape(n[1]);
            return null;
        },
        isMobileDevice: function () {
            var e = this.getViewPort().width < this.getBreakpoint("lg");
            return (
                !1 === e && (e = null != navigator.userAgent.match(/iPad/i)), e
            );
        },
        isDesktopDevice: function () {
            return !KTUtil.isMobileDevice();
        },
        getViewPort: function () {
            var e = window,
                t = "inner";
            return (
                "innerWidth" in window ||
                    ((t = "client"),
                    (e = document.documentElement || document.body)),
                { width: e[t + "Width"], height: e[t + "Height"] }
            );
        },
        isBreakpointUp: function (e) {
            return this.getViewPort().width >= this.getBreakpoint(e);
        },
        isBreakpointDown: function (e) {
            return this.getViewPort().width < this.getBreakpoint(e);
        },
        getViewportWidth: function () {
            return this.getViewPort().width;
        },
        getUniqueId: function (e) {
            return e + Math.floor(Math.random() * new Date().getTime());
        },
        getBreakpoint: function (e) {
            var t = this.getCssVariableValue("--bs-" + e);
            return t && (t = parseInt(t.trim())), t;
        },
        isset: function (e, t) {
            var n;
            if (-1 !== (t = t || "").indexOf("["))
                throw new Error("Unsupported object path notation.");
            t = t.split(".");
            do {
                if (void 0 === e) return !1;
                if (((n = t.shift()), !e.hasOwnProperty(n))) return !1;
                e = e[n];
            } while (t.length);
            return !0;
        },
        getHighestZindex: function (e) {
            for (var t, n; e && e !== document; ) {
                if (
                    ("absolute" === (t = KTUtil.css(e, "position")) ||
                        "relative" === t ||
                        "fixed" === t) &&
                    ((n = parseInt(KTUtil.css(e, "z-index"))),
                    !isNaN(n) && 0 !== n)
                )
                    return n;
                e = e.parentNode;
            }
            return 1;
        },
        hasFixedPositionedParent: function (e) {
            for (; e && e !== document; ) {
                if ("fixed" === KTUtil.css(e, "position")) return !0;
                e = e.parentNode;
            }
            return !1;
        },
        sleep: function (e) {
            for (
                var t = new Date().getTime(), n = 0;
                n < 1e7 && !(new Date().getTime() - t > e);
                n++
            );
        },
        getRandomInt: function (e, t) {
            return Math.floor(Math.random() * (t - e + 1)) + e;
        },
        isAngularVersion: function () {
            return void 0 !== window.Zone;
        },
        deepExtend: function (e) {
            e = e || {};
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                if (n)
                    for (var i in n)
                        n.hasOwnProperty(i) &&
                            ("[object Object]" !==
                            Object.prototype.toString.call(n[i])
                                ? (e[i] = n[i])
                                : (e[i] = KTUtil.deepExtend(e[i], n[i])));
            }
            return e;
        },
        extend: function (e) {
            e = e || {};
            for (var t = 1; t < arguments.length; t++)
                if (arguments[t])
                    for (var n in arguments[t])
                        arguments[t].hasOwnProperty(n) &&
                            (e[n] = arguments[t][n]);
            return e;
        },
        getBody: function () {
            return document.getElementsByTagName("body")[0];
        },
        hasClasses: function (e, t) {
            if (e) {
                for (var n = t.split(" "), i = 0; i < n.length; i++)
                    if (0 == KTUtil.hasClass(e, KTUtil.trim(n[i]))) return !1;
                return !0;
            }
        },
        hasClass: function (e, t) {
            if (e)
                return e.classList
                    ? e.classList.contains(t)
                    : new RegExp("\\b" + t + "\\b").test(e.className);
        },
        addClass: function (e, t) {
            if (e && void 0 !== t) {
                var n = t.split(" ");
                if (e.classList)
                    for (var i = 0; i < n.length; i++)
                        n[i] &&
                            n[i].length > 0 &&
                            e.classList.add(KTUtil.trim(n[i]));
                else if (!KTUtil.hasClass(e, t))
                    for (var r = 0; r < n.length; r++)
                        e.className += " " + KTUtil.trim(n[r]);
            }
        },
        removeClass: function (e, t) {
            if (e && void 0 !== t) {
                var n = t.split(" ");
                if (e.classList)
                    for (var i = 0; i < n.length; i++)
                        e.classList.remove(KTUtil.trim(n[i]));
                else if (KTUtil.hasClass(e, t))
                    for (var r = 0; r < n.length; r++)
                        e.className = e.className.replace(
                            new RegExp("\\b" + KTUtil.trim(n[r]) + "\\b", "g"),
                            ""
                        );
            }
        },
        triggerCustomEvent: function (e, t, n) {
            var i;
            window.CustomEvent
                ? (i = new CustomEvent(t, { detail: n }))
                : (i = document.createEvent("CustomEvent")).initCustomEvent(
                      t,
                      !0,
                      !0,
                      n
                  ),
                e.dispatchEvent(i);
        },
        triggerEvent: function (e, t) {
            var n;
            if (e.ownerDocument) n = e.ownerDocument;
            else {
                if (9 != e.nodeType)
                    throw new Error(
                        "Invalid node passed to fireEvent: " + e.id
                    );
                n = e;
            }
            if (e.dispatchEvent) {
                var i = "";
                switch (t) {
                    case "click":
                    case "mouseenter":
                    case "mouseleave":
                    case "mousedown":
                    case "mouseup":
                        i = "MouseEvents";
                        break;
                    case "focus":
                    case "change":
                    case "blur":
                    case "select":
                        i = "HTMLEvents";
                        break;
                    default:
                        throw (
                            "fireEvent: Couldn't find an event class for event '" +
                            t +
                            "'."
                        );
                }
                var r = "change" != t;
                (o = n.createEvent(i)).initEvent(t, r, !0),
                    (o.synthetic = !0),
                    e.dispatchEvent(o, !0);
            } else if (e.fireEvent) {
                var o;
                ((o = n.createEventObject()).synthetic = !0),
                    e.fireEvent("on" + t, o);
            }
        },
        index: function (e) {
            for (var t = e.parentNode.children, n = 0; n < t.length; n++)
                if (t[n] == e) return n;
        },
        trim: function (e) {
            return e.trim();
        },
        eventTriggered: function (e) {
            return (
                !!e.currentTarget.dataset.triggered ||
                ((e.currentTarget.dataset.triggered = !0), !1)
            );
        },
        remove: function (e) {
            e && e.parentNode && e.parentNode.removeChild(e);
        },
        find: function (e, t) {
            return null !== e ? e.querySelector(t) : null;
        },
        findAll: function (e, t) {
            return null !== e ? e.querySelectorAll(t) : null;
        },
        insertAfter: function (e, t) {
            return t.parentNode.insertBefore(e, t.nextSibling);
        },
        parents: function (e, t) {
            for (var n = []; e && e !== document; e = e.parentNode)
                t ? e.matches(t) && n.push(e) : n.push(e);
            return n;
        },
        children: function (e, t, n) {
            if (!e || !e.childNodes) return null;
            for (var i = [], r = 0, o = e.childNodes.length; r < o; ++r)
                1 == e.childNodes[r].nodeType &&
                    KTUtil.matches(e.childNodes[r], t, n) &&
                    i.push(e.childNodes[r]);
            return i;
        },
        child: function (e, t, n) {
            var i = KTUtil.children(e, t, n);
            return i ? i[0] : null;
        },
        matches: function (e, t, n) {
            var i = Element.prototype,
                r =
                    i.matches ||
                    i.webkitMatchesSelector ||
                    i.mozMatchesSelector ||
                    i.msMatchesSelector ||
                    function (e) {
                        return (
                            -1 !==
                            [].indexOf.call(document.querySelectorAll(e), this)
                        );
                    };
            return !(!e || !e.tagName) && r.call(e, t);
        },
        data: function (e) {
            return {
                set: function (t, n) {
                    e &&
                        (void 0 === e.customDataTag &&
                            (window.KTUtilElementDataStoreID++,
                            (e.customDataTag =
                                window.KTUtilElementDataStoreID))
                        );
                },
                get: function (t) {
                    if (e)
                        return void 0 === e.customDataTag
                            ? null
                            : this.has(t)
                            ? window.KTUtilElementDataStore[e.customDataTag][t]
                            : null;
                },
                has: function (t) {

                },
                remove: function (t) {
                    e &&
                        this.has(t) &&
                        delete window.KTUtilElementDataStore[e.customDataTag][
                            t
                        ];
                },
            };
        },
        outerWidth: function (e, t) {
            var n;
            return !0 === t
                ? ((n = parseFloat(e.offsetWidth)),
                  (n +=
                      parseFloat(KTUtil.css(e, "margin-left")) +
                      parseFloat(KTUtil.css(e, "margin-right"))),
                  parseFloat(n))
                : (n = parseFloat(e.offsetWidth));
        },
        offset: function (e) {
            var t, n;
            if (e)
                return e.getClientRects().length
                    ? ((t = e.getBoundingClientRect()),
                      (n = e.ownerDocument.defaultView),
                      {
                          top: t.top + n.pageYOffset,
                          left: t.left + n.pageXOffset,
                          right:
                              window.innerWidth -
                              (e.offsetLeft + e.offsetWidth),
                      })
                    : { top: 0, left: 0 };
        },
        height: function (e) {
            return KTUtil.css(e, "height");
        },
        outerHeight: function (e, t) {
            var n,
                i = e.offsetHeight;
            return void 0 !== t && !0 === t
                ? ((n = getComputedStyle(e)),
                  (i += parseInt(n.marginTop) + parseInt(n.marginBottom)))
                : i;
        },
        visible: function (e) {
            return !(0 === e.offsetWidth && 0 === e.offsetHeight);
        },
        attr: function (e, t, n) {
            if (null != e)
                return void 0 === n
                    ? e.getAttribute(t)
                    : void e.setAttribute(t, n);
        },
        hasAttr: function (e, t) {
            if (null != e) return !!e.getAttribute(t);
        },
        removeAttr: function (e, t) {
            null != e && e.removeAttribute(t);
        },
        animate: function (e, t, n, i, r, o) {
            var a = {};
            if (
                ((a.linear = function (e, t, n, i) {
                    return (n * e) / i + t;
                }),
                (r = a.linear),
                "number" == typeof e &&
                    "number" == typeof t &&
                    "number" == typeof n &&
                    "function" == typeof i)
            ) {
                "function" != typeof o && (o = function () {});
                var l =
                        window.requestAnimationFrame ||
                        function (e) {
                            window.setTimeout(e, 20);
                        },
                    s = t - e;
                i(e);
                var u =
                    window.performance && window.performance.now
                        ? window.performance.now()
                        : +new Date();
                l(function a(d) {
                    var c = (d || +new Date()) - u;
                    c >= 0 && i(r(c, e, s, n)),
                        c >= 0 && c >= n ? (i(t), o()) : l(a);
                });
            }
        },
        actualCss: function (e, t, n) {
            var i,
                r = "";
            if (e instanceof HTMLElement != !1)
                return e.getAttribute("kt-hidden-" + t) && !1 !== n
                    ? parseFloat(e.getAttribute("kt-hidden-" + t))
                    : ((r = e.style.cssText),
                      (e.style.cssText =
                          "position: absolute; visibility: hidden; display: block;"),
                      "width" == t
                          ? (i = e.offsetWidth)
                          : "height" == t && (i = e.offsetHeight),
                      (e.style.cssText = r),
                      e.setAttribute("kt-hidden-" + t, i),
                      parseFloat(i));
        },
        actualHeight: function (e, t) {
            return KTUtil.actualCss(e, "height", t);
        },
        actualWidth: function (e, t) {
            return KTUtil.actualCss(e, "width", t);
        },
        getScroll: function (e, t) {
            return (
                (t = "scroll" + t),
                e == window || e == document
                    ? self["scrollTop" == t ? "pageYOffset" : "pageXOffset"] ||
                      (browserSupportsBoxModel &&
                          document.documentElement[t]) ||
                      document.body[t]
                    : e[t]
            );
        },
        css: function (e, t, n, i) {
            if (e)
                if (void 0 !== n)
                    !0 === i
                        ? e.style.setProperty(t, n, "important")
                        : (e.style[t] = n);
                else {
                    var r = (e.ownerDocument || document).defaultView;
                    if (r && r.getComputedStyle)
                        return (
                            (t = t.replace(/([A-Z])/g, "-$1").toLowerCase()),
                            r.getComputedStyle(e, null).getPropertyValue(t)
                        );
                    if (e.currentStyle)
                        return (
                            (t = t.replace(/\-(\w)/g, function (e, t) {
                                return t.toUpperCase();
                            })),
                            (n = e.currentStyle[t]),
                            /^\d+(em|pt|%|ex)?$/i.test(n)
                                ? (function (t) {
                                      var n = e.style.left,
                                          i = e.runtimeStyle.left;
                                      return (
                                          (e.runtimeStyle.left =
                                              e.currentStyle.left),
                                          (e.style.left = t || 0),
                                          (t = e.style.pixelLeft + "px"),
                                          (e.style.left = n),
                                          (e.runtimeStyle.left = i),
                                          t
                                      );
                                  })(n)
                                : n
                        );
                }
        },
        slide: function (e, t, n, i, r) {
            if (
                !(
                    !e ||
                    ("up" == t && !1 === KTUtil.visible(e)) ||
                    ("down" == t && !0 === KTUtil.visible(e))
                )
            ) {
                n = n || 600;
                var o = KTUtil.actualHeight(e),
                    a = !1,
                    l = !1;
                KTUtil.css(e, "padding-top") &&
                    !0 !== KTUtil.data(e).has("slide-padding-top") &&
                    KTUtil.data(e).set(
                        "slide-padding-top",
                        KTUtil.css(e, "padding-top")
                    ),
                    KTUtil.css(e, "padding-bottom") &&
                        !0 !== KTUtil.data(e).has("slide-padding-bottom") &&
                        KTUtil.data(e).set(
                            "slide-padding-bottom",
                            KTUtil.css(e, "padding-bottom")
                        ),
                    KTUtil.data(e).has("slide-padding-top") &&
                        (a = parseInt(KTUtil.data(e).get("slide-padding-top"))),
                    KTUtil.data(e).has("slide-padding-bottom") &&
                        (l = parseInt(
                            KTUtil.data(e).get("slide-padding-bottom")
                        )),
                    "up" == t
                        ? ((e.style.cssText =
                              "display: block; overflow: hidden;"),
                          a &&
                              KTUtil.animate(
                                  0,
                                  a,
                                  n,
                                  function (t) {
                                      e.style.paddingTop = a - t + "px";
                                  },
                                  "linear"
                              ),
                          l &&
                              KTUtil.animate(
                                  0,
                                  l,
                                  n,
                                  function (t) {
                                      e.style.paddingBottom = l - t + "px";
                                  },
                                  "linear"
                              ),
                          KTUtil.animate(
                              0,
                              o,
                              n,
                              function (t) {
                                  e.style.height = o - t + "px";
                              },
                              "linear",
                              function () {
                                  (e.style.height = ""),
                                      (e.style.display = "none"),
                                      "function" == typeof i && i();
                              }
                          ))
                        : "down" == t &&
                          ((e.style.cssText =
                              "display: block; overflow: hidden;"),
                          a &&
                              KTUtil.animate(
                                  0,
                                  a,
                                  n,
                                  function (t) {
                                      e.style.paddingTop = t + "px";
                                  },
                                  "linear",
                                  function () {
                                      e.style.paddingTop = "";
                                  }
                              ),
                          l &&
                              KTUtil.animate(
                                  0,
                                  l,
                                  n,
                                  function (t) {
                                      e.style.paddingBottom = t + "px";
                                  },
                                  "linear",
                                  function () {
                                      e.style.paddingBottom = "";
                                  }
                              ),
                          KTUtil.animate(
                              0,
                              o,
                              n,
                              function (t) {
                                  e.style.height = t + "px";
                              },
                              "linear",
                              function () {
                                  (e.style.height = ""),
                                      (e.style.display = ""),
                                      (e.style.overflow = ""),
                                      "function" == typeof i && i();
                              }
                          ));
            }
        },
        slideUp: function (e, t, n) {
            KTUtil.slide(e, "up", t, n);
        },
        slideDown: function (e, t, n) {
            KTUtil.slide(e, "down", t, n);
        },
        show: function (e, t) {
            void 0 !== e && (e.style.display = t || "block");
        },
        hide: function (e) {
            void 0 !== e && (e.style.display = "none");
        },
        addEvent: function (e, t, n, i) {
            null != e && e.addEventListener(t, n);
        },
        removeEvent: function (e, t, n) {
            null !== e && e.removeEventListener(t, n);
        },
        on: function (e, t, n, i) {
            if (null !== e) {
                var r = KTUtil.getUniqueId("event");
                return (
                    (window.KTUtilDelegatedEventHandlers[r] = function (n) {
                        for (
                            var r = e.querySelectorAll(t), o = n.target;
                            o && o !== e;

                        ) {
                            for (var a = 0, l = r.length; a < l; a++)
                                o === r[a] && i.call(o, n);
                            o = o.parentNode;
                        }
                    }),
                    KTUtil.addEvent(
                        e,
                        n,
                        window.KTUtilDelegatedEventHandlers[r]
                    ),
                    r
                );
            }
        },
        off: function (e, t, n) {
            e &&
                window.KTUtilDelegatedEventHandlers[n] &&
                (KTUtil.removeEvent(
                    e,
                    t,
                    window.KTUtilDelegatedEventHandlers[n]
                ),
                delete window.KTUtilDelegatedEventHandlers[n]);
        },
        one: function (e, t, n) {
            e.addEventListener(t, function t(i) {
                return (
                    i.target &&
                        i.target.removeEventListener &&
                        i.target.removeEventListener(i.type, t),
                    e &&
                        e.removeEventListener &&
                        i.currentTarget.removeEventListener(i.type, t),
                    n(i)
                );
            });
        },
        hash: function (e) {
            var t,
                n = 0;
            if (0 === e.length) return n;
            for (t = 0; t < e.length; t++)
                (n = (n << 5) - n + e.charCodeAt(t)), (n |= 0);
            return n;
        },
        animateClass: function (e, t, n) {
            var i,
                r = {
                    animation: "animationend",
                    OAnimation: "oAnimationEnd",
                    MozAnimation: "mozAnimationEnd",
                    WebkitAnimation: "webkitAnimationEnd",
                    msAnimation: "msAnimationEnd",
                };
            for (var o in r) void 0 !== e.style[o] && (i = r[o]);
            KTUtil.addClass(e, t),
                KTUtil.one(e, i, function () {
                    KTUtil.removeClass(e, t);
                }),
                n && KTUtil.one(e, i, n);
        },
        transitionEnd: function (e, t) {
            var n,
                i = {
                    transition: "transitionend",
                    OTransition: "oTransitionEnd",
                    MozTransition: "mozTransitionEnd",
                    WebkitTransition: "webkitTransitionEnd",
                    msTransition: "msTransitionEnd",
                };
            for (var r in i) void 0 !== e.style[r] && (n = i[r]);
            KTUtil.one(e, n, t);
        },
        animationEnd: function (e, t) {
            var n,
                i = {
                    animation: "animationend",
                    OAnimation: "oAnimationEnd",
                    MozAnimation: "mozAnimationEnd",
                    WebkitAnimation: "webkitAnimationEnd",
                    msAnimation: "msAnimationEnd",
                };
            for (var r in i) void 0 !== e.style[r] && (n = i[r]);
            KTUtil.one(e, n, t);
        },
        animateDelay: function (e, t) {
            for (
                var n = ["webkit-", "moz-", "ms-", "o-", ""], i = 0;
                i < n.length;
                i++
            )
                KTUtil.css(e, n[i] + "animation-delay", t);
        },
        animateDuration: function (e, t) {
            for (
                var n = ["webkit-", "moz-", "ms-", "o-", ""], i = 0;
                i < n.length;
                i++
            )
                KTUtil.css(e, n[i] + "animation-duration", t);
        },
        scrollTo: function (e, t, n) {
            n = n || 500;
            var i,
                r,
                o = e ? KTUtil.offset(e).top : 0;
            t && (o -= t),
                (i =
                    window.pageYOffset ||
                    document.documentElement.scrollTop ||
                    document.body.scrollTop ||
                    0),
                (r = o),
                KTUtil.animate(i, r, n, function (e) {
                    (document.documentElement.scrollTop = e),
                        (document.body.parentNode.scrollTop = e),
                        (document.body.scrollTop = e);
                });
        },
        scrollTop: function (e, t) {
            KTUtil.scrollTo(null, e, t);
        },
        isArray: function (e) {
            return e && Array.isArray(e);
        },
        isEmpty: function (e) {
            for (var t in e) if (e.hasOwnProperty(t)) return !1;
            return !0;
        },
        numberString: function (e) {
            for (
                var t = (e += "").split("."),
                    n = t[0],
                    i = t.length > 1 ? "." + t[1] : "",
                    r = /(\d+)(\d{3})/;
                r.test(n);

            )
                n = n.replace(r, "$1,$2");
            return n + i;
        },
        isRTL: function () {
            return (
                "rtl" ===
                document.querySelector("html").getAttribute("direction")
            );
        },
        snakeToCamel: function (e) {
            return e.replace(/(\-\w)/g, function (e) {
                return e[1].toUpperCase();
            });
        },
        filterBoolean: function (e) {
            return !0 === e || "true" === e || (!1 !== e && "false" !== e && e);
        },
        setHTML: function (e, t) {
            e.innerHTML = t;
        },
        getHTML: function (e) {
            if (e) return e.innerHTML;
        },
        getDocumentHeight: function () {
            var e = document.body,
                t = document.documentElement;
            return Math.max(
                e.scrollHeight,
                e.offsetHeight,
                t.clientHeight,
                t.scrollHeight,
                t.offsetHeight
            );
        },
        getScrollTop: function () {
            return (document.scrollingElement || document.documentElement)
                .scrollTop;
        },
        colorLighten: function (e, t) {
            const n = function (e, t) {
                let n = parseInt(e, 16) + t,
                    i = n > 255 ? 255 : n;
                return (
                    (i =
                        i.toString(16).length > 1
                            ? i.toString(16)
                            : `0${i.toString(16)}`),
                    i
                );
            };
            return (
                (e = e.indexOf("#") >= 0 ? e.substring(1, e.length) : e),
                (t = parseInt((255 * t) / 100)),
                `#${n(e.substring(0, 2), t)}${n(e.substring(2, 4), t)}${n(
                    e.substring(4, 6),
                    t
                )}`
            );
        },
        colorDarken: function (e, t) {
            const n = function (e, t) {
                let n = parseInt(e, 16) - t,
                    i = n < 0 ? 0 : n;
                return (
                    (i =
                        i.toString(16).length > 1
                            ? i.toString(16)
                            : `0${i.toString(16)}`),
                    i
                );
            };
            return (
                (e = e.indexOf("#") >= 0 ? e.substring(1, e.length) : e),
                (t = parseInt((255 * t) / 100)),
                `#${n(e.substring(0, 2), t)}${n(e.substring(2, 4), t)}${n(
                    e.substring(4, 6),
                    t
                )}`
            );
        },
        throttle: function (e, t, n) {
            e ||
                (e = setTimeout(function () {
                    t(), (e = void 0);
                }, n));
        },
        debounce: function (e, t, n) {
            clearTimeout(e), (e = setTimeout(t, n));
        },
        parseJson: function (e) {
            if ("string" == typeof e) {
                var t = (e = e.replace(/'/g, '"')).replace(
                    /(\w+:)|(\w+ :)/g,
                    function (e) {
                        return '"' + e.substring(0, e.length - 1) + '":';
                    }
                );
                try {
                    e = JSON.parse(t);
                } catch (e) {}
            }
            return e;
        },
        getResponsiveValue: function (e, t) {
            var n,
                i = this.getViewPort().width;
            if ("object" == typeof (e = KTUtil.parseJson(e))) {
                var r,
                    o,
                    a = -1;
                for (var l in e)
                    (o =
                        "default" === l
                            ? 0
                            : this.getBreakpoint(l)
                            ? this.getBreakpoint(l)
                            : parseInt(l)) <= i &&
                        o > a &&
                        ((r = l), (a = o));
                n = r ? e[r] : e;
            } else n = e;
            return n;
        },
        each: function (e, t) {
            return [].slice.call(e).map(t);
        },
        getSelectorMatchValue: function (e) {
            var t = null;
            if ("object" == typeof (e = KTUtil.parseJson(e))) {
                if (void 0 !== e.match) {
                    var n = Object.keys(e.match)[0];
                    (e = Object.values(e.match)[0]),
                        null !== document.querySelector(n) && (t = e);
                }
            } else t = e;
            return t;
        },
        getConditionalValue: function (e) {
            e = KTUtil.parseJson(e);
            var t = KTUtil.getResponsiveValue(e);
            return (
                null !== t &&
                    void 0 !== t.match &&
                    (t = KTUtil.getSelectorMatchValue(t)),
                null === t &&
                    null !== e &&
                    void 0 !== e.default &&
                    (t = e.default),
                t
            );
        },
        getCssVariableValue: function (e) {
            var t = getComputedStyle(document.documentElement).getPropertyValue(
                e
            );
            return t && t.length > 0 && (t = t.trim()), t;
        },
        isInViewport: function (e) {
            var t = e.getBoundingClientRect();
            return (
                t.top >= 0 &&
                t.left >= 0 &&
                t.bottom <=
                    (window.innerHeight ||
                        document.documentElement.clientHeight) &&
                t.right <=
                    (window.innerWidth || document.documentElement.clientWidth)
            );
        },
        onDOMContentLoaded: function (e) {
            "loading" === document.readyState
                ? document.addEventListener("DOMContentLoaded", e)
                : e();
        },
        inIframe: function () {
            try {
                return window.self !== window.top;
            } catch (e) {
                return !0;
            }
        },
    };
})();
"undefined" != typeof module &&
    void 0 !== module.exports &&
    (module.exports = KTFeedback);
var KTImageInput = function (e, t) {
    var n = this;
    if (null != e) {
        var i = {},
            r = function () {
                (n.options = KTUtil.deepExtend({}, i, t)),
                    (n.uid = KTUtil.getUniqueId("image-input")),
                    (n.element = e),
                    (n.inputElement = KTUtil.find(e, 'input[type="file"]')),
                    (n.wrapperElement = KTUtil.find(e, ".image-input-wrapper")),
                    (n.cancelElement = KTUtil.find(
                        e,
                        '[data-kt-image-input-action="cancel"]'
                    )),
                    (n.removeElement = KTUtil.find(
                        e,
                        '[data-kt-image-input-action="remove"]'
                    )),
                    (n.hiddenElement = KTUtil.find(e, 'input[type="hidden"]')),
                    (n.src = KTUtil.css(n.wrapperElement, "backgroundImage")),
                    n.element.setAttribute("data-kt-image-input", "true"),
                    o(),
                    KTUtil.data(n.element).set("image-input", n);
            },
            o = function () {
                KTUtil.addEvent(n.inputElement, "change", a),
                    KTUtil.addEvent(n.cancelElement, "click", l),
                    KTUtil.addEvent(n.removeElement, "click", s);
            },
            a = function (e) {
                if (
                    (e.preventDefault(),
                    null !== n.inputElement &&
                        n.inputElement.files &&
                        n.inputElement.files[0])
                ) {
                    if (
                        !1 ===
                        KTEventHandler.trigger(
                            n.element,
                            "kt.imageinput.change",
                            n
                        )
                    )
                        return;
                    var t = new FileReader();
                    (t.onload = function (e) {
                        KTUtil.css(
                            n.wrapperElement,
                            "background-image",
                            "url(" + e.target.result + ")"
                        );
                    }),
                        t.readAsDataURL(n.inputElement.files[0]),
                        KTUtil.addClass(n.element, "image-input-changed"),
                        KTUtil.removeClass(n.element, "image-input-empty"),
                        KTEventHandler.trigger(
                            n.element,
                            "kt.imageinput.changed",
                            n
                        );
                }
            },
            l = function (e) {
                e.preventDefault(),
                    !1 !==
                        KTEventHandler.trigger(
                            n.element,
                            "kt.imageinput.cancel",
                            n
                        ) &&
                        (KTUtil.removeClass(n.element, "image-input-changed"),
                        KTUtil.removeClass(n.element, "image-input-empty"),
                        KTUtil.css(n.wrapperElement, "background-image", n.src),
                        (n.inputElement.value = ""),
                        null !== n.hiddenElement &&
                            (n.hiddenElement.value = "0"),
                        KTEventHandler.trigger(
                            n.element,
                            "kt.imageinput.canceled",
                            n
                        ));
            },
            s = function (e) {
                e.preventDefault(),
                    !1 !==
                        KTEventHandler.trigger(
                            n.element,
                            "kt.imageinput.remove",
                            n
                        ) &&
                        (KTUtil.removeClass(n.element, "image-input-changed"),
                        KTUtil.addClass(n.element, "image-input-empty"),
                        KTUtil.css(
                            n.wrapperElement,
                            "background-image",
                            "none"
                        ),
                        (n.inputElement.value = ""),
                        null !== n.hiddenElement &&
                            (n.hiddenElement.value = "1"),
                        KTEventHandler.trigger(
                            n.element,
                            "kt.imageinput.removed",
                            n
                        ));
            };
        !0 === KTUtil.data(e).has("image-input")
            ? (n = KTUtil.data(e).get("image-input"))
            : r(),
            (n.getInputElement = function () {
                return n.inputElement;
            }),
            (n.goElement = function () {
                return n.element;
            }),
            (n.destroy = function () {
                KTUtil.data(n.element).remove("image-input");
            }),
            (n.on = function (e, t) {
                return KTEventHandler.on(n.element, e, t);
            }),
            (n.one = function (e, t) {
                return KTEventHandler.one(n.element, e, t);
            }),
            (n.off = function (e) {
                return KTEventHandler.off(n.element, e);
            }),
            (n.trigger = function (e, t) {
                return KTEventHandler.trigger(n.element, e, t, n, t);
            });
    }
};
var KTEventHandler = (function () {
    var e = {},
        t = function (t, n, i, r) {
            var o = KTUtil.getUniqueId("event");
            KTUtil.data(t).set(n, o),
                e[n] || (e[n] = {}),
                (e[n][o] = { name: n, callback: i, one: r, fired: !1 });
        };
    return {
        trigger: function (t, n, i, r) {
            return (function (t, n, i, r) {
                if (!0 === KTUtil.data(t).has(n)) {
                    var o = KTUtil.data(t).get(n);
                    if (e[n] && e[n][o]) {
                        var a = e[n][o];
                        if (a.name === n) {
                            if (1 != a.one) return a.callback.call(this, i, r);
                            if (0 == a.fired)
                                return (
                                    (e[n][o].fired = !0),
                                    a.callback.call(this, i, r)
                                );
                        }
                    }
                }
                return null;
            })(t, n, i, r);
        },
        on: function (e, n, i) {
            return t(e, n, i);
        },
        one: function (e, n, i) {
            return t(e, n, i, !0);
        },
        off: function (t, n) {
            return (function (t, n) {
                var i = KTUtil.data(t).get(n);
                e[n] && e[n][i] && delete e[n][i];
            })(t, n);
        },
        debug: function () {
            for (var t in e) e.hasOwnProperty(t) && console.log(t);
        },
    };
})();
(KTImageInput.getInstance = function (e) {
    return null !== e && KTUtil.data(e).has("image-input")
        ? KTUtil.data(e).get("image-input")
        : null;
}),
    (KTImageInput.createInstances = function (e = "[data-kt-image-input]") {
        var t = document.querySelectorAll(e);
        if (t && t.length > 0)
            for (var n = 0, i = t.length; n < i; n++) new KTImageInput(t[n]);
    }),
    (KTImageInput.init = function () {
        KTImageInput.createInstances();
    }),
    "loading" === document.readyState
        ? document.addEventListener("DOMContentLoaded", KTImageInput.init)
        : KTImageInput.init(),
    "undefined" != typeof module &&
        void 0 !== module.exports &&
        (module.exports = KTImageInput);