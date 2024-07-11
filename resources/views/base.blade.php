@php
    $app_url = env('APP_URL');
@endphp
<!DOCTYPE html>

<html lang="vi" prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <title>Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    {{-- <link rel="prifile" href="http://gmgp.org/xfn/11"> --}}
    {{-- <link rel="pingback" href="{{$app_url}}xmlrpc.php"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- Search Engine Optimization by Rank Math - https://rankmath.com/ -->
    
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" media="all" data-minify="1" />
    <meta name="description"
        content="Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}" />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <link rel="canonical" href="{{route('trangchu')}}" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}" />
    <meta property="og:description"
        content="Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}" />
    <meta property="og:url" content="{{route('trangchu')}}" />
    <meta property="og:site_name" content="Tech" />
    <meta property="og:updated_time" content="2022-09-15T13:33:24+07:00" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="390" />
    <meta property="og:image:alt" content="Tech logo" />
    <meta property="og:image:type" content="image/png" />
    <meta property="article:published_time" content="2022-04-04T10:39:28+07:00" />
    <meta property="article:modified_time" content="2022-09-15T13:33:24+07:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}" />
    <meta name="twitter:description"
        content="Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}" />
    <meta name="twitter:site" content="@seoadmin" />
    <meta name="twitter:creator" content="@seoadmin" />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="Tech" />
    <meta name="twitter:label2" content="Time to read" />
    <meta name="twitter:data2" content="Less than a minute" />
    <!-- /Rank Math WordPress SEO plugin -->
    {{-- 
<link rel="alternate" type="application/rss+xml" title="Dòng thông tin Tech &raquo;" href="{{$app_url}}feed/" />
<link rel="alternate" type="application/rss+xml" title="Tech &raquo; Dòng bình luận" href="{{$app_url}}comments/feed/" /> --}}
<style>
    /* .about-us__desc{
        font-size: 15px;
    } */
    body {
        font-size: 14px !important;
    }

    #wpadminbar #wp-admin-bar-wccp_free_top_button .ab-icon:before {
        content: "\f160";
        color: #02CA02;
        top: 3px;
    }

    #wpadminbar #wp-admin-bar-wccp_free_top_button .ab-icon {
        transform: rotate(45deg);
    }

    .flash-message {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #4CAF50;
        color: white;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        display: none;
        /* Không hiển thị ban đầu */
    }

    .flash-message p {
        margin: 0;
    }

    .flash-message.success {
        background-color: #4CAF50;
    }

    #close-flash {
        background-color: #f44336;
        color: white;
        border: none;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        float: right;
    }
</style>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <style id='rank-math-toc-block-style-inline-css' type='text/css'>
        .wp-block-rank-math-toc-block nav ol {
            counter-reset: item
        }

        .wp-block-rank-math-toc-block nav ol li {
            display: block
        }

        .wp-block-rank-math-toc-block nav ol li:before {
            content: counters(item, ".") ". ";
            counter-increment: item
        }
    </style>

    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>

    <style>
        .wp-block-table td,
        .wp-block-table th {
            border: 1px solid;
        }

        .wp-block-quote {
            border-left: 0.25em solid #1bc1c1;
            margin: 0 0 1.75em;
            padding-left: 1em;
        }
    </style>

    <style>
        .unselectable {
            -moz-user-select: none;
            -webkit-user-select: none;
            cursor: default;
        }

        html {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
    </style>




    <!-- Meta Pixel Code -->
    <script type='text/javascript'>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js?v=next');
    </script>
    <!-- End Meta Pixel Code -->



    <!-- Meta Pixel Code -->
    <noscript>
        <img height="1" width="1" style="display:none" alt="fbpx"
            src="https://www.facebook.com/tr?id=616730086321008&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->
    <style type="text/css">
        .saboxplugin-wrap {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
            border: 1px solid #eee;
            width: 100%;
            clear: both;
            display: block;
            overflow: hidden;
            word-wrap: break-word;
            position: relative
        }

        .saboxplugin-wrap .saboxplugin-gravatar {
            float: left;
            padding: 0 20px 20px 20px
        }

        .saboxplugin-wrap .saboxplugin-gravatar img {
            max-width: 100px;
            height: auto;
            border-radius: 0;
        }

        .saboxplugin-wrap .saboxplugin-authorname {
            font-size: 18px;
            line-height: 1;
            margin: 20px 0 0 20px;
            display: block
        }

        .saboxplugin-wrap .saboxplugin-authorname a {
            text-decoration: none
        }

        .saboxplugin-wrap .saboxplugin-authorname a:focus {
            outline: 0
        }

        .saboxplugin-wrap .saboxplugin-desc {
            display: block;
            margin: 5px 20px
        }

        .saboxplugin-wrap .saboxplugin-desc a {
            text-decoration: underline
        }

        .saboxplugin-wrap .saboxplugin-desc p {
            margin: 5px 0 12px
        }

        .saboxplugin-wrap .saboxplugin-web {
            margin: 0 20px 15px;
            text-align: left
        }

        .saboxplugin-wrap .sab-web-position {
            text-align: right
        }

        .saboxplugin-wrap .saboxplugin-web a {
            color: #ccc;
            text-decoration: none
        }

        .saboxplugin-wrap .saboxplugin-socials {
            position: relative;
            display: block;
            background: #fcfcfc;
            padding: 5px;
            border-top: 1px solid #eee
        }

        .saboxplugin-wrap .saboxplugin-socials a svg {
            width: 20px;
            height: 20px
        }

        .saboxplugin-wrap .saboxplugin-socials a svg .st2 {
            fill: #fff;
            transform-origin: center center;
        }

        .saboxplugin-wrap .saboxplugin-socials a svg .st1 {
            fill: rgba(0, 0, 0, .3)
        }

        .saboxplugin-wrap .saboxplugin-socials a:hover {
            opacity: .8;
            -webkit-transition: opacity .4s;
            -moz-transition: opacity .4s;
            -o-transition: opacity .4s;
            transition: opacity .4s;
            box-shadow: none !important;
            -webkit-box-shadow: none !important
        }

        .saboxplugin-wrap .saboxplugin-socials .saboxplugin-icon-color {
            box-shadow: none;
            padding: 0;
            border: 0;
            -webkit-transition: opacity .4s;
            -moz-transition: opacity .4s;
            -o-transition: opacity .4s;
            transition: opacity .4s;
            display: inline-block;
            color: #fff;
            font-size: 0;
            text-decoration: inherit;
            margin: 5px;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
            border-radius: 0;
            overflow: hidden
        }

        .saboxplugin-wrap .saboxplugin-socials .saboxplugin-icon-grey {
            text-decoration: inherit;
            box-shadow: none;
            position: relative;
            display: -moz-inline-stack;
            display: inline-block;
            vertical-align: middle;
            zoom: 1;
            margin: 10px 5px;
            color: #444;
            fill: #444
        }

        .clearfix:after,
        .clearfix:before {
            content: ' ';
            display: table;
            line-height: 0;
            clear: both
        }

        .ie7 .clearfix {
            zoom: 1
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-twitch {
            border-color: #38245c
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-addthis {
            border-color: #e91c00
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-behance {
            border-color: #003eb0
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-delicious {
            border-color: #06c
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-deviantart {
            border-color: #036824
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-digg {
            border-color: #00327c
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-dribbble {
            border-color: #ba1655
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-facebook {
            border-color: #1e2e4f
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-flickr {
            border-color: #003576
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-github {
            border-color: #264874
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-google {
            border-color: #0b51c5
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-googleplus {
            border-color: #96271a
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-html5 {
            border-color: #902e13
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-instagram {
            border-color: #1630aa
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-linkedin {
            border-color: #00344f
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-pinterest {
            border-color: #5b040e
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-reddit {
            border-color: #992900
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-rss {
            border-color: #a43b0a
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-sharethis {
            border-color: #5d8420
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-skype {
            border-color: #00658a
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-soundcloud {
            border-color: #995200
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-spotify {
            border-color: #0f612c
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-stackoverflow {
            border-color: #a95009
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-steam {
            border-color: #006388
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-user_email {
            border-color: #b84e05
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-stumbleUpon {
            border-color: #9b280e
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-tumblr {
            border-color: #10151b
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-twitter {
            border-color: #0967a0
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-vimeo {
            border-color: #0d7091
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-windows {
            border-color: #003f71
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-whatsapp {
            border-color: #003f71
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-wordpress {
            border-color: #0f3647
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-yahoo {
            border-color: #14002d
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-youtube {
            border-color: #900
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-xing {
            border-color: #000202
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-mixcloud {
            border-color: #2475a0
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-vk {
            border-color: #243549
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-medium {
            border-color: #00452c
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-quora {
            border-color: #420e00
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-meetup {
            border-color: #9b181c
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-goodreads {
            border-color: #000
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-snapchat {
            border-color: #999700
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-500px {
            border-color: #00557f
        }

        .saboxplugin-socials.sabox-colored .saboxplugin-icon-color .sab-mastodont {
            border-color: #185886
        }

        .sabox-plus-item {
            margin-bottom: 20px
        }

        @media screen and (max-width:480px) {
            .saboxplugin-wrap {
                text-align: center
            }

            .saboxplugin-wrap .saboxplugin-gravatar {
                float: none;
                padding: 20px 0;
                text-align: center;
                margin: 0 auto;
                display: block
            }

            .saboxplugin-wrap .saboxplugin-gravatar img {
                float: none;
                display: inline-block;
                display: -moz-inline-stack;
                vertical-align: middle;
                zoom: 1
            }

            .saboxplugin-wrap .saboxplugin-desc {
                margin: 0 10px 20px;
                text-align: center
            }

            .saboxplugin-wrap .saboxplugin-authorname {
                text-align: center;
                margin: 10px 0 20px
            }
        }

        body .saboxplugin-authorname a,
        body .saboxplugin-authorname a:hover {
            box-shadow: none;
            -webkit-box-shadow: none
        }

        a.sab-profile-edit {
            font-size: 16px !important;
            line-height: 1 !important
        }

        .sab-edit-settings a,
        a.sab-profile-edit {
            color: #0073aa !important;
            box-shadow: none !important;
            -webkit-box-shadow: none !important
        }

        .sab-edit-settings {
            margin-right: 15px;
            position: absolute;
            right: 0;
            z-index: 2;
            bottom: 10px;
            line-height: 20px
        }

        .sab-edit-settings i {
            margin-left: 5px
        }

        .saboxplugin-socials {
            line-height: 1 !important
        }

        .rtl .saboxplugin-wrap .saboxplugin-gravatar {
            float: right
        }

        .rtl .saboxplugin-wrap .saboxplugin-authorname {
            display: flex;
            align-items: center
        }

        .rtl .saboxplugin-wrap .saboxplugin-authorname .sab-profile-edit {
            margin-right: 10px
        }

        .rtl .sab-edit-settings {
            right: auto;
            left: 0
        }

        img.sab-custom-avatar {
            max-width: 75px;
        }

        .saboxplugin-wrap {
            border-width: 29px;
        }

        .saboxplugin-wrap .saboxplugin-gravatar img {
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            border-radius: 50%;
        }

        .saboxplugin-wrap .saboxplugin-gravatar img {
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            border-radius: 50%;
        }

        .saboxplugin-wrap .saboxplugin-gravatar img {
            -webkit-transition: all .5s ease;
            -moz-transition: all .5s ease;
            -o-transition: all .5s ease;
            transition: all .5s ease;
        }

        .saboxplugin-wrap .saboxplugin-gravatar img:hover {
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .saboxplugin-wrap .saboxplugin-socials {
            background-color: #6df2d0;
        }

        .saboxplugin-wrap {
            background-color: #6df2d0;
        }

        .saboxplugin-wrap .saboxplugin-socials .saboxplugin-icon-grey {
            color: #35a8ea;
            fill: #35a8ea;
        }

        .saboxplugin-wrap .saboxplugin-authorname a,
        .saboxplugin-wrap .saboxplugin-authorname span {
            color: #1e73be;
        }

        .saboxplugin-wrap .saboxplugin-web a {
            color: #f24f26;
        }

        .saboxplugin-wrap {
            margin-top: 22px;
            margin-bottom: 100px;
            padding: 38px 0px
        }

        .saboxplugin-wrap .saboxplugin-authorname {
            font-size: 18px;
            line-height: 25px;
        }

        .saboxplugin-wrap .saboxplugin-desc p,
        .saboxplugin-wrap .saboxplugin-desc {
            font-size: 14px !important;
            line-height: 21px !important;
        }

        .saboxplugin-wrap .saboxplugin-web {
            font-size: 14px;
        }

        .saboxplugin-wrap .saboxplugin-socials a svg {
            width: 18px;
            height: 18px;
        }
    </style><noscript>
        <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
                display: none !important;
            }
        </style>
    </noscript>
    <style type="text/css">
        #traffic-countdown-1s {
            padding: 0 !important;
            text-align: center;
        }

        #traffic-countdown-1s>button {
            margin: 0 !important;
            border-radius: 20px !important;
            margin-bottom: 20px !important;
            border: none !important;
            background: linear-gradient(270deg, #70efd1 0%, #1bc1c1 100%) !important;
            transition: all 0.3s;
        }

        #traffic-countdown-1s>button:hover {
            background: #1bc1c1 !important;
            transition: all 0.3s;
        }

        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
            background: linear-gradient(180deg, #70efd1 0, #1bc1c1 100%);
        }

        ::-webkit-scrollbar-button {
            width: 0px;
            height: 0px;
        }

        ::-webkit-scrollbar-track {
            background-color: #c3c3c3;
        }

        ::-webkit-scrollbar-track-piece {
            background-color: #E6F4EB;
        }

        ::-webkit-scrollbar-thumb {
            height: 50px;
            background: linear-gradient(180deg, #70efd1 0, #1bc1c1 100%);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-corner {
            background-color: #E6F4EB;
        }
        }

        ::-webkit-resizer {
            background-color: #666;
        }

        .roll-mb::-webkit-scrollbar {
            width: 10px;
            height: 0px;
            background: linear-gradient(180deg, #70efd1 0, #1bc1c1 100%);
        }

        .roll-mb::-webkit-scrollbar-button {
            width: 0px;
            height: 0px;
        }

        .roll-mb::-webkit-scrollbar-track {
            background-color: #c3c3c3;
        }

        .roll-mb::-webkit-scrollbar-track-piece {
            background-color: #E6F4EB;
        }

        .roll-mb::-webkit-scrollbar-thumb {
            height: 50px;
            background: linear-gradient(180deg, #70efd1 0, #1bc1c1 100%);
            border-radius: 3px;
        }

        .roll-mb::-webkit-scrollbar-corner {
            background-color: #E6F4EB;
        }
        }

        .roll-mb::-webkit-resizer {
            background-color: #666;
        }

        @media screen and (max-width: 475px) {
            .roll-mb::-webkit-scrollbar {
                width: 10px;
                height: 5px;
                background: linear-gradient(180deg, #70efd1 0, #1bc1c1 100%);
            }
        }

        .mb-select div {
            position: relative;
        }

        .mb-selectqtw div {
            position: relative;
        }
    </style>
    @yield('styles')
</head>

<body class="home page-template page-template-index page-template-index-php page page-id-264 unselectable">
    @if (session('success'))
        <div id="flash-message" class="flash-message success">
            <p>{{ session('success') }}</p>
            <button id="close-flash">Đóng</button>
        </div>
    @endif
    @yield('content')
    <style>
        @media print {
            body * {
                display: none !important;
            }

            body:after {
                content: "You are not allowed to print preview this page, Thank you";
            }
        }
    </style>
    <style type="text/css">
        #wpcp-error-message {
            direction: ltr;
            text-align: center;
            transition: opacity 900ms ease 0s;
            z-index: 99999999;
        }

        .hideme {
            opacity: 0;
            visibility: hidden;
        }

        .showme {
            opacity: 1;
            visibility: visible;
        }

        .msgmsg-box-wpcp {
            border: 1px solid #f5aca6;
            border-radius: 10px;
            color: #555;
            font-family: Tahoma;
            font-size: 11px;
            margin: 10px;
            padding: 10px 36px;
            position: fixed;
            width: 255px;
            top: 50%;
            left: 50%;
            margin-top: -10px;
            margin-left: -130px;
            -webkit-box-shadow: 0px 0px 34px 2px rgba(242, 191, 191, 1);
            -moz-box-shadow: 0px 0px 34px 2px rgba(242, 191, 191, 1);
            box-shadow: 0px 0px 34px 2px rgba(242, 191, 191, 1);
        }

        .msgmsg-box-wpcp span {
            font-weight: bold;
            text-transform: uppercase;
        }

        /* .warning-wpcp {
            background:#ffecec url('{{route('trangchu')}}wp-content/plugins/wp-content-copy-protector/images/warning.png') no-repeat 10px 50%;
        } */
    </style>


    <!-- Meta Pixel Event Code -->

    <!-- End Meta Pixel Event Code -->
    <div id='fb-pxl-ajax-code'></div>
    <script type="text/javascript" id="rocket-browser-checker-js-after">
        /* <![CDATA[ */
        "use strict";
        var _createClass = function() {
            function defineProperties(target, props) {
                for (var i = 0; i < props.length; i++) {
                    var descriptor = props[i];
                    descriptor.enumerable = descriptor.enumerable || !1, descriptor.configurable = !0, "value" in
                        descriptor && (descriptor.writable = !0), Object.defineProperty(target, descriptor.key,
                            descriptor)
                }
            }
            return function(Constructor, protoProps, staticProps) {
                return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps &&
                    defineProperties(Constructor, staticProps), Constructor
            }
        }();

        function _classCallCheck(instance, Constructor) {
            if (!(instance instanceof Constructor)) throw new TypeError("Cannot call a class as a function")
        }
        var RocketBrowserCompatibilityChecker = function() {
            function RocketBrowserCompatibilityChecker(options) {
                _classCallCheck(this, RocketBrowserCompatibilityChecker), this.passiveSupported = !1, this
                    ._checkPassiveOption(this), this.options = !!this.passiveSupported && options
            }
            return _createClass(RocketBrowserCompatibilityChecker, [{
                key: "_checkPassiveOption",
                value: function(self) {
                    try {
                        var options = {
                            get passive() {
                                return !(self.passiveSupported = !0)
                            }
                        };
                        window.addEventListener("test", null, options), window.removeEventListener(
                            "test", null, options)
                    } catch (err) {
                        self.passiveSupported = !1
                    }
                }
            }, {
                key: "initRequestIdleCallback",
                value: function() {
                    !1 in window && (window.requestIdleCallback = function(cb) {
                        var start = Date.now();
                        return setTimeout(function() {
                            cb({
                                didTimeout: !1,
                                timeRemaining: function() {
                                    return Math.max(0, 50 - (Date.now() -
                                        start))
                                }
                            })
                        }, 1)
                    }), !1 in window && (window.cancelIdleCallback = function(id) {
                        return clearTimeout(id)
                    })
                }
            }, {
                key: "isDataSaverModeOn",
                value: function() {
                    return "connection" in navigator && !0 === navigator.connection.saveData
                }
            }, {
                key: "supportsLinkPrefetch",
                value: function() {
                    var elem = document.createElement("link");
                    return elem.relList && elem.relList.supports && elem.relList.supports("prefetch") &&
                        window.IntersectionObserver && "isIntersecting" in IntersectionObserverEntry
                        .prototype
                }
            }, {
                key: "isSlowConnection",
                value: function() {
                    return "connection" in navigator && "effectiveType" in navigator.connection && (
                        "2g" === navigator.connection.effectiveType || "slow-2g" === navigator
                        .connection.effectiveType)
                }
            }]), RocketBrowserCompatibilityChecker
        }();
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}" id=" jquery-js-js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/gsap.min.js') }}" id=" gsap-js-js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/ScrollToPlugin.min.js') }}" id=" ScrollToPlugin-js-js">
    </script>
    <script type="text/javascript" src="{{ asset('assets/js/ScrollTrigger.min.js') }}" id=" ScrollTrigger-js-js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}" id=" wow-js-js"></script>
    {{-- <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"" id=" aos-js-js"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/js/app.js') }}" id=" app-js-js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/hmmenu.js') }}"" id=" hmmenu-js-js"></script>
    {{-- <script type="text/javascript" src="{{ asset('assets/js/not-optimize.js') }}"" id=" optimize-js-js"></script> --}}
    {{-- <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=6Lezp4UjAAAAAJ5g48hRjVP2mFz2EDLGxyEb00si&amp;ver=3.0" id="google-recaptcha-js"></script> --}}
    <script>
        window.lazyLoadOptions = [{
            elements_selector: "img[data-lazy-src],.rocket-lazyload",
            data_src: "lazy-src",
            data_srcset: "lazy-srcset",
            data_sizes: "lazy-sizes",
            class_loading: "lazyloading",
            class_loaded: "lazyloaded",
            threshold: 300,
            callback_loaded: function(element) {
                if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                    if (element.classList.contains("lazyloaded")) {
                        if (typeof window.jQuery != "undefined") {
                            if (jQuery.fn.fitVids) {
                                jQuery(element).parent().fitVids()
                            }
                        }
                    }
                }
            }
        }, {
            elements_selector: ".rocket-lazyload",
            data_src: "lazy-src",
            data_srcset: "lazy-srcset",
            data_sizes: "lazy-sizes",
            class_loading: "lazyloading",
            class_loaded: "lazyloaded",
            threshold: 300,
        }];
        window.addEventListener('LazyLoad::Initialized', function(e) {
            var lazyLoadInstance = e.detail.instance;
            if (window.MutationObserver) {
                var observer = new MutationObserver(function(mutations) {
                    var image_count = 0;
                    var iframe_count = 0;
                    var rocketlazy_count = 0;
                    mutations.forEach(function(mutation) {
                        for (var i = 0; i < mutation.addedNodes.length; i++) {
                            if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                                continue
                            }
                            if (typeof mutation.addedNodes[i].getElementsByClassName !==
                                'function') {
                                continue
                            }
                            images = mutation.addedNodes[i].getElementsByTagName('img');
                            is_image = mutation.addedNodes[i].tagName == "IMG";
                            iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                            is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                            rocket_lazy = mutation.addedNodes[i].getElementsByClassName(
                                'rocket-lazyload');
                            image_count += images.length;
                            iframe_count += iframes.length;
                            rocketlazy_count += rocket_lazy.length;
                            if (is_image) {
                                image_count += 1
                            }
                            if (is_iframe) {
                                iframe_count += 1
                            }
                        }
                    });
                    if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                        lazyLoadInstance.update()
                    }
                });
                var b = document.getElementsByTagName("body")[0];
                var config = {
                    childList: !0,
                    subtree: !0
                };
                observer.observe(b, config)
            }
        }, !1)
    </script>
    <script data-no-minify="1" async src="{{ asset('assets/js/lazyload.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        window.addEventListener("load", footer_startup1);

        function footer_startup1() {
            var wpcf7Elm = document.querySelector('#wpcf7-f1186-p24-o1');
            if (typeof(wpcf7Elm) != 'undefined' && wpcf7Elm != null) {
                wpcf7Elm.addEventListener('wpcf7submit', function(event) {
                    fbq('trackCustom', 'SendCV', {});
                }, false);
            }

            var wpcf7Elm_footer = document.querySelector('#wpcf7-f1029-p24-o2');
            if (typeof(wpcf7Elm_footer) != 'undefined' && wpcf7Elm_footer != null) {
                wpcf7Elm_footer.addEventListener('wpcf7submit', function(event) {
                    fbq('trackCustom', 'YeuCauBaoGia', {});
                }, false);
            }
        }
    </script>
    @yield('scripts')
</body>

</html>
