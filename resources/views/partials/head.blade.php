<meta charset="utf-8" />
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
<meta content="Coderthemes" name="author" />
<link rel="shortcut icon" href="{{ asset('hyper/favicon.ico') }}">
<link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" id="app-style">
<link href="{{ asset('hyper/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('hyper/css/app-saas.css') }}" rel="stylesheet" type="text/css" id="app-style" />
{{-- <link href="{{ asset('hyper/css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" /> --}}
<script src="{{ asset('hyper/js/hyper-config.js') }}"></script>
@yield('styles')
<style>
    .alert{
        display: block;
        position: absolute;
        float: right;
        z-index: 99999;
    }
</style>