<x-base-layout>
    @section('title')
        <title>Giới Thiệu Về Chúng Tôi | {{ $companyNameValue }}</title>
    @endsection
    @php
        $settings = \App\Models\Setting::getByType('about');
        $banner = $settings['banner']['value'];
        $h1 = $settings['h1']['value'];
        $dichvu_banner = $settings['dichvu_banner']['value'];
        $banner_mobile = $settings['banner_mobile']['value'];
        $title = $settings['title']['value'];
        $description = $settings['description']['value'];
        $gioithieu_title = $settings['gioithieu_title']['value'];
        $gioithieu_description = $settings['gioithieu_description']['value'];
        $giatri_title = $settings['giatri_title']['value'];
        $giatri_description = $settings['giatri_description']['value'];
        $giatri_item_1 = $settings['giatri_item_1']['value'];
        $giatri_item_2 = $settings['giatri_item_2']['value'];
        $giatri_item_3 = $settings['giatri_item_3']['value'];
        $giatri_item_4 = $settings['giatri_item_4']['value'];
        $giatri_item_1_val = $settings['giatri_item_1_val']['value'];
        $giatri_item_2_val = $settings['giatri_item_2_val']['value'];
        $giatri_item_3_val = $settings['giatri_item_3_val']['value'];
        $giatri_item_4_val = $settings['giatri_item_4_val']['value'];
        $video = $settings['video']['value'];
        $video_avatar = $settings['video_avatar']['value'];
        $video_title = $settings['video_title']['value'];
        $video_description = $settings['video_description']['value'];
        $chienloipham_banner = $settings['chienloipham_banner']['value'];
        $chienloipham_title = $settings['chienloipham_title']['value'];
        $chienloipham_description = $settings['chienloipham_description']['value'];
        $diemdadang_title = $settings['diemdadang_title']['value'];
        $diemdadang_banner = $settings['diemdadang_banner']['value'];
        $diemdadang_item_1 = $settings['diemdadang_item_1']['value'];
        $diemdadang_item_2 = $settings['diemdadang_item_2']['value'];
        $diemdadang_item_3 = $settings['diemdadang_item_3']['value'];
        $diemdadang_item_4 = $settings['diemdadang_item_4']['value'];
        $seoMeta = \App\Models\Seo::where('canonical', route('gioithieu'))->first();
    @endphp
    @section('meta')
        @include('pages.page_meta', ['seoMeta' => $seoMeta])
    @endsection
    <div class="hero">
        <h1 class="d-none">{{ $h1 }}</h1>
        <div class="center-layout">
            <div class="design-banner-contain">
                <div class="himg banner--desktop">
                    <img width="1230" height="540" class="" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-once="true" data-aos-delay="1500"
                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201230%20540'%3E%3C/svg%3E"
                        alt="banner" data-lazy-src="{{ display_image($banner) }}"><noscript><img width="1230"
                            height="540" class="" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-once="true" data-aos-delay="1500" src="{{ display_image($banner) }}"
                            alt="banner"></noscript>
                </div>
                <div class="himg banner--mobile">
                    <img width="375" height="700" class="" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-once="true" data-aos-delay="1500"
                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20700'%3E%3C/svg%3E"
                        alt="banner" data-lazy-src="{{ display_image($banner_mobile) }}"><noscript><img width="375"
                            height="700" class="" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-once="true" data-aos-delay="1500" src="{{ display_image($banner_mobile) }}"
                            alt="banner"></noscript>
                </div>
                <div class="design-banner-info">
                    <h2 class="design-banner-title">{{ $title }}</h2>
                    <h3 class="design-banner-description">{{ $description }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="about-group-2">
        {{-- <div class="about-group-2-img center-layout" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
            data-aos-delay="1800"><img width="2251" height="1036"
                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202251%201036'%3E%3C/svg%3E"
                data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/sec-2@2x.png"><noscript><img
                    width="2251" height="1036"
                    src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/sec-2@2x.png"></noscript></div> --}}
        <div style="margin-top: 150px;" class="about-group-2__content">
            <h2 class="about-group-2__title" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                {{ $gioithieu_title }}</h2>
            <h3 class="about-group-2__desc" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                {{ $gioithieu_description }}</h3>
        </div>
    </div>
    <div class="about-group-3">
        <div class="center-layout-2">
            <div class="about-group-3__left">
                <h2 class="about-group-3__title" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">Những
                    dịch vụ nổi bật</h2>
                {{-- <div class="about-group-3__name" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">Làm
                    việc tận tâm <br> đã tạo nên uy tín <br> cho Mikotech</div> --}}
                <ul class="about-group-3__list" style="padding-left:1px;">
                    @foreach ($services as $service)
                        <li class="" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                            data-aos-delay="100" data-trigger=".about-group-3__list">{{ $service->title }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('dichvu') }}" class="hbtn" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-once="true"><span>Xem tất cả dịch vụ</span></a>
            </div>
            <div class="about-group-3__right" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <div class="about-group-3__image">
                    <img src="{{ display_image($dichvu_banner) }}" alt="Dịch vụ nổi bật"
                        data-lazy-src="{{ display_image($dichvu_banner) }}"><noscript><img alt="Dịch vụ nổi bật"
                            src="{{ display_image($dichvu_banner) }}"></noscript>
                </div>
            </div>
        </div>
    </div>
    <div class="about-group-4">
        <div class="about-group-4__title" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"></div>
        <div class="about-group-4__swiper swiper">
            <div class="swiper-wrapper">

            </div>
        </div>
    </div>
    <div class="about-group-4--mobile">
        <div class="about-group-4__title" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"></div>
        <div class="about-group-4__grid">
        </div>
    </div>

    <div class="team-box-2">
        <div class="center-layout-2">
            <div class="team-box-2__left">
                <h2 class="team-box-2__title" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                    data-aos-delay="0">{{ $giatri_title }}</h2>
                <h3 class="team-box-2__desc" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                    data-aos-delay="0">{{ $giatri_description }}</h3>
            </div>
            <div class="team-box-2__right">
                <div class="value-item" data-trigger=".team-box-2__right" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-once="true" data-aos-delay="500">
                    <div class="value-item__number">01</div>
                    <div class="value-item__name">{{ $giatri_item_1 }}</div>
                    <div class="value-item__desc">
                        <p>{{ $giatri_item_1_val }}</p>
                    </div>
                </div>
                <div class="value-item" data-trigger=".team-box-2__right" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-once="true" data-aos-delay="500">
                    <div class="value-item__number">02</div>
                    <div class="value-item__name">{{ $giatri_item_2 }}</div>
                    <div class="value-item__desc">
                        <p>{{ $giatri_item_2_val }}</p>
                    </div>
                </div>
                <div class="value-item" data-trigger=".team-box-2__right" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-once="true" data-aos-delay="500">
                    <div class="value-item__number">03</div>
                    <div class="value-item__name">{{ $giatri_item_3 }}</div>
                    <div class="value-item__desc">
                        <p>{{ $giatri_item_3_val }}</p>
                    </div>
                </div>
                <div class="value-item" data-trigger=".team-box-2__right" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-once="true" data-aos-delay="500">
                    <div class="value-item__number">04</div>
                    <div class="value-item__name">{{ $giatri_item_4 }}</div>
                    <div class="value-item__desc">
                        <p>{{ $giatri_item_4_val }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-box-6">
        <div class="center-layout">
            <div class="team-box-6__video" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <div class="team-box-6__swiper swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="overflow-hidden relative rounded-2xl">
                                <video id="video-ads" width="809" height="455" height="auto" controls>
                                    <source src="{{ display_video($video) }}" type="video/mp4">
                                </video>
                                <img id="video-thumbnail"
                                    class="v-control absolute left-0 top-0 w-full z-10 rounded-2xl" width="537"
                                    height="537" src="{{ display_image($video_avatar) }}" alt="icon">

                                <svg class="v-control absolute left-1/2 top-1/2 h-[60px] w-[60px] -translate-x-1/2 -translate-y-1/2 z-20"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="70"
                                    height="70" viewBox="0 0 512 512">
                                    <path fill="#ffffff"
                                        d="M256 504c137 0 248-111 248-248S393 8 256 8 8 119 8 256s111 248 248 248zM40 256c0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216 0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216zm331.7-18l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM192 335.8V176.9c0-4.7 5.1-7.6 9.1-5.1l134.5 81.7c3.9 2.4 3.8 8.1-.1 10.3L201 341c-4 2.3-9-.6-9-5.2z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-box-6__content">
                <h2 class="team-box-6__name" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    {{ $video_title }}</h2>
                <h3 class="team-box-6__desc" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    {{ $video_description }}</h3>
            </div>
        </div>
    </div>

    <div class="about-group-5">
        <div class="center-layout-2">
            <div class="about-group-5__left">
                <h2 class="team-box-6__name" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    {{ $chienloipham_title }}</h2>
                <h3 class="about-group-5__desc" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    {{ $chienloipham_description }}</h3>
                <a href="" class="hbtn"><span>Xem thêm</span></a>
            </div>
            <div class="about-group-5__right" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <div class="about-group-5__image">
                    <img width="550" height="735" src="{{ display_image($chienloipham_banner) }}"
                    alt="Dịch vụ nổi bật"
                        data-lazy-src="{{ display_image($chienloipham_banner) }}"><noscript><img width="550"
                            alt="Dịch vụ nổi bật"
                            height="735" src="{{ display_image($chienloipham_banner) }}"></noscript>
                </div>
            </div>
        </div>
    </div>
    <div class="about-group-6">
        <div class="about-group-6-img">
            <div class="himg banner--desktop">
                <img width="1900" height="1135" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201900%201135'%3E%3C/svg%3E"
                    data-lazy-src="{{ display_image($diemdadang_banner) }}"><noscript><img width="1900"
                        height="1135" src="{{ display_image($diemdadang_banner) }}"></noscript>
            </div>
            <div class="himg banner--mobile">
                <img width="375" height="812" class="gs_reveal" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201900%201135'%3E%3C/svg%3E"
                    alt="banner" data-lazy-src="{{ display_image($diemdadang_banner) }}"><noscript><img
                        width="375" height="812" class="gs_reveal"
                        src="{{ display_image($diemdadang_banner) }}" alt="banner"></noscript>
            </div>
        </div>
        <div class="about-group-6__content">
            <div class="center-layout-2">
                <div class="about-group-6__main">
                    <h2 class="team-box-6__name" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-once="true">
                        {{ $diemdadang_title }}
                    </h2>
                    <div class="about-group-6-items" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-once="true">{{ $diemdadang_item_1 }}</div>
                    <div class="about-group-6-items" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-once="true">{{ $diemdadang_item_2 }}</div>
                    <div class="about-group-6-items" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-once="true">{{ $diemdadang_item_3 }}</div>
                    <div class="about-group-6-items" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-once="true">{{ $diemdadang_item_4 }}</div>
                </div>
            </div>
        </div>
        <div class="contttt" style="position: absolute; left: 0; width: 100%;">
            <div class="center-layout">
                <div class="contact" style="margin: 0;">
                    <div class="contact__desc">Bạn đang gặp khó khăn về pháp lý<br>
Hãy liên hệ ngay chúng tôi, chúng tôi sẽ hỗ trợ giải quyết vấn đề của bạn một cách nhanh chóng</div>
                    <a href="{{ route('lienhe') }}" class="hbtn hbtn--white"><span>Liên hệ ngay</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="check_screen_height fixed left-0 top-0 w-[1px] z-[-1] h-[100vh]"></div>

    @section('scripts')
        <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"" id=" aos-js-js"></script>
        <script src="{{ asset('assets/js/about.js') }}" data-minify="1" defer></script>
        <script>
            //             document.addEventListener('DOMContentLoaded', function() {
            //     var video = document.getElementById('video-ads');
            //     var thumbnail = document.getElementById('video-thumbnail');
            //     var playButton = document.getElementById('play-button');

            //     function hideThumbnailAndPlayVideo() {
            //         thumbnail.style.display = 'none';
            //         playButton.style.display = 'none';
            //         video.style.display = 'block';
            //         video.play();
            //     }

            //     thumbnail.addEventListener('click', hideThumbnailAndPlayVideo);
            //     playButton.addEventListener('click', hideThumbnailAndPlayVideo);
            // });
        </script>
    @endsection
</x-base-layout>
