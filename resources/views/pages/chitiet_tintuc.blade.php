<x-base-layout>
    {{-- @section('title')
        <title>Bài viết | {{ $companyNameValue }}</title>
    @endsection --}}
    @php
        $settings = \App\Models\Setting::getByType('chitietbaiviet');
        $banner = $settings['banner']['value'];
        $banner_mobile = $settings['banner_mobile']['value'];
    @endphp
    @section('meta')
        @include('pages.meta', ['seoMeta' => $item->seoMeta])
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "headline": "{{ $item->title }}",
            "image": [
                "{{env('APP_URL')}}storage/{{ $item->thumbnail }}"
               ],
            "datePublished": "{{ $item->created_at->toIso8601String() }}",
            "dateModified": "{{ $item->updated_at->toIso8601String() }}",
            "author": [{
                "@type": "Person",
                "name": "{{$item->author->name}}",
                "url": ""
              }]
            
        }
        </script>
    @endsection
    @section('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/app2.css') }}" media="all" data-minify="1" />
        <style>
            .entry-content {
                font-size: 17.5px !important;
                font-family: Roboto, sans-serif !important;
                font-weight: 370 !important;
            }

            blockquote {
                font-size: 17.5px;
                font-family: Roboto, sans-serif;
                font-weight: 370;
                color: #000;
                font-style: italic;
                border-left: 4px solid #ccc;
                padding-left: 15px;
                margin: 20px 0;
                background-color: #f9f9f9;
                padding: 10px 20px;
                border-radius: 5px;
            }

            blockquote p {
                margin: 0;
            }

            blockquote footer {
                margin-top: 10px;
                font-size: 0.9em;
                color: #777;
            }

            .ez-toc-heading-level-3 {
                padding-left: 20px;
            }

            /* .header {
                                                        background: var(--miko-gradient) !important;
                                                    }

                                                    .header__right #menu-menu-chinh>li>a {
                                                        color: #fff
                                                    } */

            h2 {
                font-size: 28px !important;
            }

            h2 {
                font-size: 24px !important;
            }

            h4,
            h5,
            h6 {
                font-size: 20px !important;
            }

            a {
                text-decoration: none;
            }

            /* Đặt lại các thuộc tính cơ bản cho tất cả các thẻ con */
            /* Ghi đè lại thuộc tính list-style-type */
            /* Đặt lại các thuộc tính cho ol, ul, menu về giá trị mặc định */
            /* ol, */
            /* ul, */
            /* menu { */
            /* list-style: revert; */
            /* revert sẽ đặt lại list-style về giá trị mặc định (ví dụ như disc cho ul và decimal cho ol) */
            /* margin: revert; */
            /* revert sẽ đặt lại margin về giá trị mặc định (thường là 0) */
            /* padding: revert; */
            /* revert sẽ đặt lại padding về giá trị mặc định (thường là 0) */
            /* } */
        </style>
        {{-- <style id="rank-math-toc-block-style-inline-css" type="text/css">
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
        </style> --}}
        {{-- <style id="classic-theme-styles-inline-css" type="text/css">
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
        </style> --}}
        {{-- <style id="global-styles-inline-css" type="text/css">
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
        </style> --}}
        <style id="ez-toc-inline-css" type="text/css">
            div#ez-toc-container .ez-toc-title {
                font-size: 100%;
            }

            div#ez-toc-container .ez-toc-title {
                font-weight: 700;
            }

            div#ez-toc-container ul li {
                font-size: 83%;
            }

            div#ez-toc-container ul li {
                font-weight: 500;
            }

            div#ez-toc-container nav ul ul li {
                font-size: 90%;
            }

            div#ez-toc-container {
                background: #dbecf9;
                border: 1px solid #ddd;
            }

            div#ez-toc-container p.ez-toc-title,
            #ez-toc-container .ez_toc_custom_title_icon,
            #ez-toc-container .ez_toc_custom_toc_icon {
                color: #000000;
            }

            div#ez-toc-container ul.ez-toc-list a {
                color: #1e73be;
            }

            div#ez-toc-container ul.ez-toc-list a:hover {
                color: #2a6496;
            }

            div#ez-toc-container ul.ez-toc-list a:visited {
                color: #428bca;
            }

            .ez-toc-list-level-3 {
                padding-left: 20px;
            }

            .footer {
                /* font-size: 1.2rem; */
                font-size: 16.5px !important;
                font-family: Roboto, sans-serif !important;
                font-weight: 370 !important;
            }

            /* .entry-content{
                                                        font-size: 17.5px !important;

                                                    } */
            /* .chitiet-footer div{
                                                        font-weight:bolder;
                                                    } */
            @media screen and (max-width: 600px) {
                .design-banner-contain {
                    position: relative;
                    text-align: center;
                }

                .design-banner-info {
                    width: 100% !important;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    width: 100%;
                }

                .design-banner-description {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .entry-title {
                    margin: 0;
                    padding: 20px;
                    background: rgba(0, 0, 0, 0.5);
                    color: #fff;
                    border-radius: 10px;
                }
            }

            @media screen and (max-width: 475px) {
                .design-banner-contain {
                    position: relative;
                    text-align: center;
                }

                .design-banner-info {
                    width: 100% !important;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    width: 100%;
                }

                .design-banner-description {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                .entry-title {
                    margin: 0;
                    padding: 20px;
                    background: rgba(0, 0, 0, 0.5);
                    color: #fff;
                    border-radius: 10px;
                }
            }
        </style>
    @endsection
    @php
        // $settings = \App\Models\Setting::getByType('post');
        // $title = $settings['title']['value'];
        // $description = $settings['description']['value'];
        // $banner = $settings['banner']['value'];
        // $h1 = $settings['h1']['value'];
        // $banner_mobile = $settings['banner_mobile']['value'];
    @endphp

    {{-- <div class="center-layout-2 display_mobile" style="margin-bottom: -19px;">
        <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
            <p><a href="{{ route('trangchu') }}">Trang chủ</a><span class="separator"> &raquo; </span><a
                    href="{{ route('tintuc') }}">Bài viết</a><span class="separator"> &raquo; </span><span
                    class="last">{{ $item->title }}</span></p>
        </nav>
    </div> --}}
    <div class="content" style="text-align: justify;">
        <div class="post-detail center-layout">
            <div class="post-detail__left" style="min-width: 77%">
                <article id="post-3253"
                    class="post-3253 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-kien-thuc-website category-website">
                    {{-- <h1 class="entry-title">{{ $item->title }}</h1> --}}
                    <div class="design-banner-contain">
                        <div class="himg banner--desktop">
                            <img width="1230" height="540"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201230%20540'%3E%3C/svg%3E"
                                alt="banner" data-lazy-src="{{ display_image($banner) }}"><noscript><img
                                    width="1230" height="540" class="" data-aos="fade-up"
                                    data-aos-duration="1000" data-aos-once="true" data-aos-delay="1500"
                                    src="{{ display_image($banner) }}" alt="banner"></noscript>
                        </div>
                        <div class="himg banner--mobile" style="height:100%">
                            <img width="375" height="700"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20700'%3E%3C/svg%3E"
                                alt="banner" data-lazy-src="{{ display_image($banner_mobile) }}"><noscript><img
                                    width="375" height="700" class="" data-aos="fade-up"
                                    data-aos-duration="1000" data-aos-once="true" data-aos-delay="1500"
                                    src="{{ display_image($banner_mobile) }}" alt="banner"></noscript>
                        </div>
                        <div class="design-banner-info" style="width: 50%;">
                            <div class="design-banner-description">
                                <h1 class="entry-title">{{ $item->title }}</h1>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="hero display_desktop">
                        <div class="design-banner-contain" style="height: 150px;">
                            <div class="design-banner-info" style="width: 70%;top: 39.5%;margin-left: -30px;">
                                <div class="design-banner-description">
                                    <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
                                        <p style="font-weight: 700; font-size:9px;">
                                            <a href="{{ route('trangchu') }}">Trang chủ</a>
                                            <span class="separator"> &raquo; </span>
                                            <a href="{{ route('tintuc') }}">Bài viết</a>
                                            <span class="separator"> &raquo;
                                            </span><span class="last">{{ $item->title }}</span>
                                        </p>
                                    </nav>
                                </div>
                                <div class="design-banner-description">
                                    <h1 style="font-size: 22.5px;" class="entry-title">{{ $item->title }}</h1>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="entry-content">
                        <div>
                            {!! $item->summary !!}
                        </div>
                        <div id="ez-toc-container"
                            class="ez-toc-v2_0_64 counter-hierarchy ez-toc-counter ez-toc-custom ez-toc-container-direction">
                            <div class="ez-toc-title-container">
                                <p class="ez-toc-title ">Xem Nhanh</p>
                                <span class="ez-toc-title-toggle"><a href="#"
                                        class="ez-toc-pull-right ez-toc-btn ez-toc-btn-xs ez-toc-btn-default ez-toc-toggle"
                                        aria-label="Toggle Table of Content"><span class="ez-toc-js-icon-con"><span
                                                class=""><span class="eztoc-hide"
                                                    style="display:none;">Toggle</span><span
                                                    class="ez-toc-icon-toggle-span"><svg
                                                        style="fill: #000000;color:#000000"
                                                        xmlns="http://www.w3.org/2000/svg" class="list-377408"
                                                        width="20px" height="20px" viewBox="0 0 24 24"
                                                        fill="none">
                                                        <path
                                                            d="M6 6H4v2h2V6zm14 0H8v2h12V6zM4 11h2v2H4v-2zm16 0H8v2h12v-2zM4 16h2v2H4v-2zm16 0H8v2h12v-2z"
                                                            fill="currentColor"></path>
                                                    </svg><svg style="fill: #000000;color:#000000"
                                                        class="arrow-unsorted-368013" xmlns="http://www.w3.org/2000/svg"
                                                        width="10px" height="10px" viewBox="0 0 24 24" version="1.2"
                                                        baseProfile="tiny">
                                                        <path
                                                            d="M18.2 9.3l-6.2-6.3-6.2 6.3c-.2.2-.3.4-.3.7s.1.5.3.7c.2.2.4.3.7.3h11c.3 0 .5-.1.7-.3.2-.2.3-.5.3-.7s-.1-.5-.3-.7zM5.8 14.7l6.2 6.3 6.2-6.3c.2-.2.3-.5.3-.7s-.1-.5-.3-.7c-.2-.2-.4-.3-.7-.3h-11c-.3 0-.5.1-.7.3-.2.2-.3.5-.3.7s.1.5.3.7z" />
                                                    </svg></span></span></span></a></span>
                            </div>

                            <div id="nav-container"></div>
                        </div>
                        {{-- <blockquote class="wp-block-quote is-layout-flow wp-block-quote-is-layout-flow">
                            <p></p>
                            <cite><strong><a href="https://en.wikipedia.org/wiki/Bounce_rate" target="_blank"
                                        rel="noreferrer noopener nofollow">Bounce rate</a></strong>, còn gọi là tỷ lệ
                                thoát trang hoặc tỷ lệ thoát web, là thuật ngữ dùng để mô tả phần trăm số người truy cập
                                vào website rồi rời đi ngay mà không tương tác với bất kỳ nội dung nào khác.</cite>
                        </blockquote> --}}

                        {!! $item->content !!}
                        <div class="post-views content-post post-3253 entry-meta">
                            <span class="post-views-icon dashicons dashicons-chart-bar"></span> <span
                                class="post-views-label">Lượt xem:</span> <span
                                class="post-views-count">{{ $item->view_count }}</span>
                        </div>
                    </div>
                    <div class="post-detail__author">

                        <span><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24"
                                fill="currentColor" width="15" height="15">
                                <path
                                    d="M19,2H18V1a1,1,0,0,0-2,0V2H8V1A1,1,0,0,0,6,1V2H5A5.006,5.006,0,0,0,0,7V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V7A5.006,5.006,0,0,0,19,2ZM2,7A3,3,0,0,1,5,4H19a3,3,0,0,1,3,3V8H2ZM19,22H5a3,3,0,0,1-3-3V10H22v9A3,3,0,0,1,19,22Z" />
                                <circle cx="12" cy="15" r="1.5" />
                                <circle cx="7" cy="15" r="1.5" />
                                <circle cx="17" cy="15" r="1.5" />
                            </svg> {{ formatDate($item->created_at) }}</span>
                        <b>{{ $item->author ? $item->author->name : '' }}</b>
                    </div>
                </article>


            </div>
            <div class="post-detail__right" style="min-width: 25%; margin-top:-60px;">
                <div class='post-detail-service-list'>
                    <div class="post-detail__sub-title">Danh mục</div>
                    <div class="blog-items-desk-mt pd075 mgb-2">
                        <div class="">
                            @foreach ($categories as $category)
                                <div class="mt-text-center--item-desktop">
                                    <a
                                        href="{{ route('tintuc.category', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @section('scripts')
            <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"" id=" aos-js-js"></script>
            <script src="{{ asset('assets/js/chitiet_tintuc.js') }}" data-minify="1" defer></script>
        @endsection
</x-base-layout>
