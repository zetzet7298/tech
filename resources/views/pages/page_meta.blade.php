@if(!empty($seoMeta->meta_title))
    <title>{{ $seoMeta->meta_title }}</title>
@endif

@if(!empty($seoMeta->meta_description))
    <meta name="description" content="{{ $seoMeta->meta_description }}">
@endif

@if(!empty($seoMeta->meta_keywords))
    <meta name="keywords" content="{{ $seoMeta->meta_keywords }}">
@endif

@if(!empty($seoMeta->meta_url))
    <meta name="url" content="{{ $seoMeta->meta_url }}">
@endif

@if(!empty($seoMeta->meta_image_alt))
    <meta name="image_alt" content="{{ $seoMeta->meta_image_alt }}">
@endif

@if(!empty($seoMeta->og_title))
    <meta property="og:title" content="{{ $seoMeta->og_title }}" />
@endif

@if(!empty($seoMeta->og_description))
    <meta property="og:description" content="{{ $seoMeta->og_description }}" />
@endif

@if(!empty($seoMeta->og_url))
    <meta property="og:url" content="{{ $seoMeta->og_url }}" />
@endif

@if(!empty($seoMeta->og_image))
    <meta property="og:image" content="{{ $seoMeta->og_image }}" />
@endif

@if(!empty($seoMeta->og_type))
    <meta property="og:type" content="{{ $seoMeta->og_type }}" />
@endif

@if(!empty($seoMeta->meta_site_name))
    <meta property="og:site_name" content="{{ $seoMeta->meta_site_name }}" />
@endif

@if(!empty($seoMeta->twitter_title))
    <meta name="twitter:title" content="{{ $seoMeta->twitter_title }}" />
@endif

@if(!empty($seoMeta->twitter_description))
    <meta name="twitter:description" content="{{ $seoMeta->twitter_description }}" />
@endif

@if(!empty($seoMeta->twitter_image))
    <meta name="twitter:image" content="{{ $seoMeta->twitter_image }}" />
@endif

@if(!empty($seoMeta->twitter_site))
    <meta name="twitter:site" content="{{ $seoMeta->twitter_site }}" />
@endif

@if(!empty($seoMeta->twitter_creator))
    <meta name="twitter:creator" content="{{ $seoMeta->twitter_creator }}" />
@endif

@if(!empty($seoMeta->meta_robots))
    <meta name="robots" content="{{ $seoMeta->meta_robots }}">
@endif

@if(!empty($seoMeta->canonical))
    <link rel="canonical" href="{{ $seoMeta->canonical }}">
@endif
