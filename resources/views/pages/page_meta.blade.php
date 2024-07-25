<!-- site -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no,date=no,address=no,email=no,url=no" >
<meta name="robots" content="{{ $seoMeta->meta_robots ?? 'index, follow' }}">
<link rel="canonical" href="{{ $seoMeta->canonical ?? '' }}">
<link rel="alternate" hreflang="vi" href="{{ $seoMeta->alternate_hreflang ?? '' }}" >
<meta name="description" content="{{ $seoMeta->meta_description ?? '' }}">
<meta name="keywords" content="{{ $seoMeta->meta_keywords ?? '' }}"> 
<title>{{ $seoMeta->meta_title ?? '' }}</title>

<!-- Facebook -->
<meta property="og:locale" content="{{ $seoMeta->og_locale ?? 'vi_VN' }}">
<meta property="fb:app_id" content="{{ $seoMeta->fb_app_id ?? '' }}">
<meta property="og:type" content="{{ $seoMeta->og_type ?? 'website' }}">
<meta property="og:title" content="{{ $seoMeta->og_title ?? '' }}">
<meta property="og:description" content="{{ $seoMeta->og_description ?? '' }}">
<meta property="og:url" content="{{ $seoMeta->og_url ?? '' }}">
<meta property="og:site_name" content="{{ $seoMeta->og_site_name ?? '' }}">
<meta property="og:image" content="{{ $seoMeta->og_image ?? '' }}">
<meta property="og:image:secure_url" content="{{ $seoMeta->og_image_secure_url ?? '' }}">
<meta property="fb:admins" content="{{ $seoMeta->fb_admins ?? '' }}">
<meta property="og:image:type" content="{{ $seoMeta->og_image_type ?? 'image/jpeg' }}">

<!-- Twitter -->
<meta name="twitter:card" content="{{ $seoMeta->twitter_card ?? 'summary' }}">
<meta name="twitter:site" content="{{ $seoMeta->twitter_site ?? '' }}">
<meta name="twitter:title" content="{{ $seoMeta->twitter_title ?? '' }}">
<meta name="twitter:description" content="{{ $seoMeta->twitter_description ?? '' }}">
<meta name="twitter:image" content="{{ $seoMeta->twitter_image ?? '' }}">
<meta name="twitter:creator" content="{{ $seoMeta->twitter_creator ?? '' }}">
