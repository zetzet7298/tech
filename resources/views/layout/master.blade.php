@extends('base')

@section('content')
    @include('layout._header')
    {{-- @include('layout._header')

@include('layout._footer')
@include('layout._scrolltop')
@include('layout._call')
<!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div> --}}
    @include('layout._content')
    @include('layout._footer')
    @include('layout._scrolltop')
@endsection
