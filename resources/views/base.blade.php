<!DOCTYPE html>

@php
    $app_url = env('APP_URL');
@endphp

<html lang="vi">

<head>
    @yield('meta')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ display_image($LOGO) }}">
    @if (!in_array(Route::currentRouteName(), ['tintuc.detail', 'tuyendung.chitiet']))
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" media="all" data-minify="1">
    @endif

    {{-- <noscript>
        <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
                display: none !important;
            }
        </style>
    </noscript> --}}
    @yield('styles')
</head>

<body style="overflow-x: hidden !important;width: 100%;"
    class="home page-template page-template-index page-template-index-php page page-id-264 unselectable">
    @php
        $settings = \App\Models\Setting::getByType('localbusiness');
        $store = new \App\Models\Store();
        foreach ($settings as $k => $setting) {
            $store->$k = $setting['value'];
        }
    @endphp
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Store",
          "image":{!! $store->images !!},
          "name": "{{ $store->name }}",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "{{ $store->street_address }}",
            "addressLocality": "{{ $store->address_locality }}",
            "addressRegion": "{{ $store->address_region }}",
            "postalCode": "{{ $store->postal_code }}",
            "addressCountry": "{{ $store->address_country }}"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": {{ $store->latitude }},
            "longitude": {{ $store->longitude }}
          },
          "url": "{{ $store->url }}",
          "priceRange": "{{ $store->price_range }}",
          "telephone": "{{ $store->telephone }}",
          "openingHoursSpecification": {!! $store->opening_hours !!}
        }
        </script>
    @if (session('success'))
        <div id="flash-message" class="flash-message success">
            <p>{{ session('success') }}</p>
            <button id="close-flash">Đóng</button>
        </div>
    @endif
    @yield('content')



    <!-- Meta Pixel Event Code -->

    <!-- End Meta Pixel Event Code -->
    <div id='fb-pxl-ajax-code'></div>

    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}" id=" jquery-js-js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/gsap.min.js') }}" id=" gsap-js-js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/ScrollToPlugin.min.js') }}" id=" ScrollToPlugin-js-js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/ScrollTrigger.min.js') }}" id=" ScrollTrigger-js-js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}" id=" wow-js-js"></script>
    {{-- <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"" id=" aos-js-js"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/js/app.js') }}" id=" app-js-js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/hmmenu.js') }}"" id=" hmmenu-js-js"></script>
    {{-- <script type="text/javascript" src="{{ asset('assets/js/not-optimize.js') }}"" id=" optimize-js-js"></script> --}}
    {{-- <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=6Lezp4UjAAAAAJ5g48hRjVP2mFz2EDLGxyEb00si&amp;ver=3.0" id="google-recaptcha-js"></script> --}}
    <script data-no-minify="1" async src="{{ asset('assets/js/lazyload.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    @yield('scripts')
</body>

</html>
