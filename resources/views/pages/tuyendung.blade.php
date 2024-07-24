<x-base-layout>
    @section('title')
        <title>Tuyển Dụng Việc Làm Tư Vấn Pháp Luật | {{ $companyNameValue }}</title>
    @endsection
    @php
        $settings = \App\Models\Setting::getByType('recruitment');
        $title = $settings['title']['value'];
        $description = $settings['description']['value'];
        $banner = $settings['banner']['value'];
        $h1 = $settings['h1']['value'];
        $banner_mobile = $settings['banner_mobile']['value'];
        $avatar_post = $settings['avatar_post']['value'];
        $seoMeta = \App\Models\Seo::where('canonical', route('tuyendung'))->first();
    @endphp
    @section('meta')
        @include('pages.page_meta', ['seoMeta' => $seoMeta])
    @endsection
    <div class="hero">
        <h1 class="d-none">{{ $h1 }}</h1>
        <div class="center-layout">
            <div class="design-banner-contain">
                <div class="himg banner--desktop">
                    <img width="1230" height="540"
                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201230%20540'%3E%3C/svg%3E"
                        alt="Banner tuyển dụng" data-lazy-src="{{ display_image($banner) }}"><noscript><img width="1230"
                            height="540" src="{{ display_image($banner) }}" alt="Banner tuyển dụng"></noscript>
                </div>
                <div class="himg banner--mobile">
                    <img width="375" height="637" class="aos-init aos-animate entered lazyloaded"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0"
                        src="{{ display_image($banner_mobile) }}" alt="banner"
                        data-lazy-src="{{ display_image($banner_mobile) }}" data-ll-status="loaded"><noscript><img
                            width="375" height="637" class="" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-once="true" data-aos-delay="0" src="{{ display_image($banner_mobile) }}"
                            alt="banner"></noscript>
                </div>
                <div class="design-banner-info">
                    <h2 class="design-banner-title">{{ $title }}</h2>
                    <h3 class="design-banner-description">{{ $description }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="center-layout-2">
        @foreach ($items as $item)
            <div class="team-box-1" style="margin-bottom:70px;">
                <div class="team-box-1__image img h-fadeOutLeft">
                    <img width="401" height="511"
                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20401%20511'%3E%3C/svg%3E"
                        alt="Tuyển dụng" data-lazy-src="{{ display_image($avatar_post) }}"><noscript><img width="401"
                            height="511" src="{{ display_image($avatar_post) }}" alt="Tuyển dụng"></noscript>
                </div>
                <div class="team-box-1__right">
                    <h2 class="team-box-1__title h-fadeOutDown">{{ $item->title }}</h2>
                    <h3 class="team-box-1__name h-fadeOutDown">{{ $item->name }}</h3>
                    {{-- <h4 class="team-box-1__desc h-fadeOutDown">{{ $item->desc }}</h4> --}}
                    <div class="d-flex justify-content-start team-box-1__view h-fadeOutDown">
                        @php $item->avatar=display_image($item->photo) @endphp
                        {{-- <a data-fancybox data-src="#contact-modal" class="effect-link hbtn" id="openModalBtn" data-employee="{{ $item }}"><span>Xem chi tiết</span></a> --}}
                        <a href="{{ route('tuyendung.chitiet', ['slug' => $item->slug ?? '1']) }}"
                            class="effect-link hbtn">
                            <span>Xem chi tiết</span>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <div class="check_screen_height fixed left-0 top-0 w-[1px] z-[-1] h-[100vh]"></div>
    {{-- @section('scripts')
        <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"" id=" aos-js-js"></script>
        <script src="{{ asset('assets/js/nhansu.js') }}" data-minify="1" defer></script>
    @endsection --}}
</x-base-layout>
