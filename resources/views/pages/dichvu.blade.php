<x-base-layout>
    @section('title')
        <title>Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}</title>
    @endsection
    @php
        $settings = \App\Models\Setting::getByType('service');
        $title = $settings['title']['value'];
        $description = $settings['description']['value'];
        $giatri_title = $settings['giatri_title']['value'];
        $giatri_description = $settings['giatri_description']['value'];
        $banner = $settings['banner']['value'];
        $h1 = $settings['h1']['value'];
        $banner_mobile = $settings['banner_mobile']['value'];
        $nangtam_banner = $settings['nangtam_banner']['value'];
        $nangtam_title = $settings['nangtam_title']['value'];
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

        $seoMeta = \App\Models\Seo::where('canonical', route('dichvu'))->first();
    @endphp
    @section('meta')
        @include('pages.page_meta', ['seoMeta' => $seoMeta])
    @endsection
    <div class="overflow-x-hidden">
        <div class="hero">
            <h1 class="d-none">{{ $h1 }}</h1>
            <div class="center-layout">
                <div class="center-layout">
                    <div class="design-banner-contain">
                        <div class="himg banner--desktop">
                            <img width="1230" height="540"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201230%20540'%3E%3C/svg%3E"
                                alt="Banner dịch vụ" data-lazy-src="{{ display_image($banner) }}"><noscript><img
                                    width="1230" height="540" src="{{ display_image($banner) }}"
                                    alt="Banner dịch vụ"></noscript>
                        </div>
                        <div class="himg banner--mobile">
                            <img width="375" height="637" class="aos-init aos-animate entered lazyloaded"
                                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0"
                                src="{{ display_image($banner_mobile) }}" alt="banner"
                                data-lazy-src="{{ display_image($banner_mobile) }}"
                                data-ll-status="loaded"><noscript><img width="375" height="637" class=""
                                    data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0"
                                    src="{{ display_image($banner_mobile) }}" alt="banner"></noscript>
                        </div>
                        <div class="design-banner-info">
                            <h2 class="design-banner-title">{{ $title }}</h2>
                            <h3 class="design-banner-description">{{ $description }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="center-layout">
            <div class="flex flex-wrap justify-center items-stretch py-2 -mx-2">
                @php $total = $items->total();@endphp
                @foreach ($items as $k => $item)
                    <div class="w-full sm:w-1/2 md:w-1/3 self-stretch p-2">
                        <div class="group bg-[#faf5f0] h-full p-8 rounded-2xl pb-24 relative overflow-hidden">
                            <div
                                class="absolute left-0 top-0 w-full h-1/2 bg-gradient-to-b from-[#70efd1] to-[#faf5f0] opacity-0 transition-all group-hover:opacity-100">
                            </div>
                            <div class="relative">
                                <div
                                    class="min-w-[55px] text-2xl font-bold text-[#1bc1c1] font-secondary absolute left-0 bottom-0">
                                    {{ $k + 1 }}/{{ $total }}
                                </div>
                                <img width="600" height="385" alt="THIẾT KẾ WEBSITE" class="block w-full"
                                    src="{{ display_image($item->thumbnail) }}"
                                    data-lazy-src="{{ display_image($item->thumbnail) }}"><noscript><img width="600"
                                        height="385" alt="THIẾT KẾ WEBSITE" class="block w-full"
                                        src="{{ display_image($item->thumbnail) }}"></noscript>
                            </div>
                            <h2 class="text-3xl uppercase my-4 relative">{{ $item->title }}</h2>
                            <h3 class="relative">{!! $item->summary !!}</h3>
                            <div class="absolute left-8 bottom-8 flex mt-4">
                                <a href="{{ route('tintuc.detail', ['slug' => $item->slug.'.html']) }}"
                                    class="hbtn"><span>Xem chi
                                        tiết</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            @if($items->total()> 10)
            <ul class="pagination">
                {{ $items->links('vendor.pagination.custom') }}
            </ul>
            @endif
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
                    <div class="value-item" data-trigger=".team-box-2__right" data-aos="fade-left"
                        data-aos-duration="1000" data-aos-once="true" data-aos-delay="500">
                        <div class="value-item__number">01</div>
                        <div class="value-item__name">{{ $giatri_item_1 }}</div>
                        <div class="value-item__desc">
                            <p>{{ $giatri_item_1_val }}</p>
                        </div>
                    </div>
                    <div class="value-item" data-trigger=".team-box-2__right" data-aos="fade-left"
                        data-aos-duration="1000" data-aos-once="true" data-aos-delay="500">
                        <div class="value-item__number">02</div>
                        <div class="value-item__name">{{ $giatri_item_2 }}</div>
                        <div class="value-item__desc">
                            <p>{{ $giatri_item_2_val }}</p>
                        </div>
                    </div>
                    <div class="value-item" data-trigger=".team-box-2__right" data-aos="fade-left"
                        data-aos-duration="1000" data-aos-once="true" data-aos-delay="500">
                        <div class="value-item__number">03</div>
                        <div class="value-item__name">{{ $giatri_item_3 }}</div>
                        <div class="value-item__desc">
                            <p>{{ $giatri_item_3_val }}</p>
                        </div>
                    </div>
                    <div class="value-item" data-trigger=".team-box-2__right" data-aos="fade-left"
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
        <div class="service-group-4">
            <div class="center-layout">
                <div class="service-group-4__swiper swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="" class="img">
                                <img width="732" height="506" alt="{{ $nangtam_title }}"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20732%20506'%3E%3C/svg%3E"
                                    alt=""
                                    data-lazy-src="{{ display_image($nangtam_banner) }}"><noscript><img
                                        width="732" height="506" alt="{{ $nangtam_title }}"
                                        src="{{ display_image($nangtam_banner) }}" alt=""></noscript>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination service-group-4__swiper-pagination"></div>
                </div>
                <div class="service-group-4__right">
                    <h2 class="service-group-4__title">
                        {{ $nangtam_title }}
                    </h2>
                    <div class="d-flex">
                        <a href="#" data-fancybox data-src="#contact-modal" class="hbtn hbtn--white">Liên hệ ngay</a>
                    </div>
                </div>
                <div id="contact-modal" class="h-fancybox">
                    <div class="h-fancybox__header">Nhập thông tin liên hệ</div>
                    <div class="h-fancybox__body">

                        <div class="wpcf7 no-js" id="wpcf7-f64-p264-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="{{ route('contact.fe.store') }}" method="post" class="wpcf7-form init"
                                aria-label="Contact form" novalidate="novalidate" data-status="init">
                                @csrf
                                <p>
                                    <span class="wpcf7-form-control-wrap" data-name="fullname">
                                        <input size="40" required
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Họ và tên (bắt buộc nhập)" value="{{ old('fullname') }}"
                                            type="text" required name="fullname" />
                                        @if ($errors->has('fullname'))
                                            <span class="text-danger">{{ $errors->first('fullname') }}</span>
                                        @endif
                                    </span>
                                    <span class="wpcf7-form-control-wrap" data-name="phone">
                                        <input size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required check-phone"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Số điện thoại (bắt buộc nhập)" value="{{ old('phone') }}"
                                            type="text" name="phone" required />
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </span>
                                    <span class="wpcf7-form-control-wrap" data-name="email">
                                        <input size="40"
                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Email (bắt buộc nhập)" value="{{ old('email') }}"
                                            type="email" name="email" />
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </span>
                                    <span class="wpcf7-form-control-wrap" data-name="message">
                                        <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false" placeholder="Nội dung tin nhắn" name="message">{{ old('message') }}</textarea>
                                        {{-- @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif --}}
                                    </span>
                                    <input class="wpcf7-form-control wpcf7-submit has-spinner hbtn" type="submit"
                                        value="Gửi" />
                                </p>
                                <p style="display: none !important;">
                                    <label>&#916;
                                        <textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea>
                                    </label>
                                    <input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="99" />
                                </p>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="check_screen_height fixed left-0 top-0 w-[1px] z-[-1] h-[100vh]"></div>
    @section('scripts')
        <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"" id=" aos-js-js"></script>
        <script src="{{ asset('assets/js/dichvu.js') }}" data-minify="1" defer></script>
    @endsection
</x-base-layout>
