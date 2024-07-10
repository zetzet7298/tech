<x-base-layout>
    @php
        $settings = \App\Models\Setting::getByType(config('constants.SETTING_TYPE_DASHBOARD'));
        $ABOUT_TITLE = $settings[config('constants.ABOUT_TITLE')]['value'];
        $ABOUT_DESC = $settings[config('constants.ABOUT_DESC')]['value'];
        $SLIDER_1 = $settings[config('constants.SLIDER_1')]['value'];
        $SLIDER_2 = $settings[config('constants.SLIDER_2')]['value'];
        $SLIDER_3 = $settings[config('constants.SLIDER_3')]['value'];
        $SOLUTION_TITLE = $settings[config('constants.SOLUTION_TITLE')]['value'];
        $SOLUTION_DESCRIPTION = $settings[config('constants.SOLUTION_DESCRIPTION')]['value'];

        $feedbacks = \App\Models\Feedback::orderBy('index', 'asc')->get();
        $solutions = \App\Models\Solution::orderBy('index', 'asc')->get();
    @endphp
    <div class="overflow-x-hidden">
        <h1 class="d-none">Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}</h1>
        <div class="slider">
            <div class="center-layout">
                <div class="slider-items">
                    <div class="slider-items__background"></div>
                    <div class="slider-items__text">Xin chào!</div>
                    <img width="262" height="450" class="slider-items__layer slider-items__layer--1"
                        src="{{ display_image($SLIDER_1) }}" alt="Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}"
                        data-lazy-src="{{ display_image($SLIDER_1) }}"><noscript>
                        <img width="262" height="450" class="slider-items__layer slider-items__layer--1"
                            src="{{ display_image($SLIDER_1) }}"
                            alt="Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}"></noscript>
                    <img width="778" height="599" class="slider-items__layer slider-items__layer--2"
                        style="width: 585px; height: 450px;" src="{{ display_image($SLIDER_2) }}"
                        alt="Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}"
                        data-lazy-src="{{ display_image($SLIDER_2) }}"><noscript>
                        <img width="778" height="599" class="slider-items__layer slider-items__layer--2"
                            src="{{ display_image($SLIDER_2) }}"
                            alt="Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}"></noscript>
                    <img width="542" height="255" class="slider-items__layer slider-items__layer--3"
                        src="{{ display_image($SLIDER_3) }}" alt="Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}"
                        data-lazy-src="{{ display_image($SLIDER_3) }}"><noscript>
                        <img width="542" height="255" class="slider-items__layer slider-items__layer--3"
                            src="{{ display_image($SLIDER_3) }}"
                            alt="Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}"></noscript>
                </div>
            </div>
        </div>
        <div class="about-us">
            <div class="about-us__content">
                <div class="about-us__title gs_reveal">{{ $companyNameValue }}</div>
                <h2 class="about-us__name gs_reveal">{{ $ABOUT_TITLE }}</h2>
                <div class="about-us__desc gs_reveal">{{ $ABOUT_DESC }}</div>
                <div class="about-us__button d-flex justify-content-center">
                    <a href="gioi-thieu" class="hbtn gs_reveal"><span>Về chúng tôi</span></a>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="about-us-node" xmlns:xlink="http://www.w3.org/1999/xlink"
                width="26.256" height="26.1" viewBox="0 0 26.256 26.1">
                <defs>
                    <linearGradient id="a" x1="0.784" y1="-0.323" x2="0.509" y2="1.049"
                        gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#70efd1" />
                        <stop offset="1" stop-color="#1bc1c1" />
                    </linearGradient>
                </defs>
                <rect width="21.484" height="21.264" rx="6"
                    transform="matrix(-0.966, -0.259, 0.259, -0.966, 20.752, 26.1)" fill="url(#a)" />
            </svg>
            <svg id="Layer_1" width="45" class="about-us-node2" data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 51.28 51.17">
                <defs>
                    <style>
                        .cls-21 {
                            fill: url(#linear-gradient-99);
                        }
                    </style>
                    <linearGradient id="linear-gradient-99" x1="-942.09" y1="590.88" x2="-942.37" y2="589.5"
                        gradientTransform="matrix(-44.49, 0, 0, 44.26, -41886.84, -26088.02)"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#70efd1" />
                        <stop offset="1" stop-color="#1bc1c1" />
                    </linearGradient>
                </defs>
                <title>Rectangle 18</title>
                <rect id="Rectangle_18" data-name="Rectangle 18" class="cls-21" x="7.45" y="7.5" width="44.49"
                    height="44.26" rx="15" transform="translate(-14.04 11.96) rotate(-25.98)" />
            </svg>
        </div>
        <div class="website">
            <div class="website__left">
                <div class="element-website__left gs_reveal gs_reveal_fromLeft"></div>
                <div class="website__left__content gs_reveal" data-delay="0.5">
                    <div class="website__title">Giải pháp</div>
                    <h2 class="website__name">{{ $SOLUTION_TITLE }}</h2>
                    <div class="website__desc">{{ $SOLUTION_DESCRIPTION }}</div>
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('dichvu') }}" class="hbtn hbtn--white">Tìm hiểu ngay</a>
                    </div>
                </div>
            </div>
            <div class="website__right">
                <div class=" gs_reveal gs_reveal_fromRight">
                    <div class="website__swiper swiper">
                        <div class="swiper-wrapper">
                            @if ($solutions->isNotEmpty())
                                @for ($i = 0; $i < count($solutions); $i += 2)
                                    <div class="swiper-slide">
                                        <div class="website-items">
                                            <img width="1200" height="800"
                                                src="{{ display_image($solutions[$i]->image) }}" alt=""
                                                data-lazy-src="{{ display_image($solutions[$i]->image) }}"><noscript>
                                                <img style="width: 470px; height: 313px" width="1200"
                                                    height="800" src="{{ display_image($solutions[$i]->image) }}"
                                                    alt=""></noscript>
                                            <div class="website-items__info">
                                                <div class="website-items__name">{{ $solutions[$i]->title }}</div>
                                                <div class="website-items__desc">{{ $solutions[$i]->description }}
                                                </div>
                                                <!--<a class="hbtn" href=""><span>Trải nghiệm ngay</span></a>-->
                                            </div>
                                        </div>
                                        @if (isset($solutions[$i + 1]))
                                            <div class="website-items">
                                                <img width="1200" height="800"
                                                    src="{{ display_image($solutions[$i + 1]->image) }}"
                                                    alt=""
                                                    data-lazy-src="{{ display_image($solutions[$i + 1]->image) }}"><noscript><img
                                                        width="1200" height="800"
                                                        src="{{ display_image($solutions[$i + 1]->image) }}"
                                                        alt=""></noscript>
                                                <div class="website-items__info">
                                                    <div class="website-items__name">{{ $solutions[$i + 1]->title }}
                                                    </div>
                                                    <div class="website-items__desc">
                                                        {{ $solutions[$i + 1]->description }}
                                                    </div>
                                                    <!--<a class="hbtn" href=""><span>Trải nghiệm ngay</span></a>-->
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endfor
                            @else
                                <div class="swiper-slide">
                                    <div class="website-items">
                                        <img width="1200" height="800" src="{{ display_image('') }}"
                                            alt="" data-lazy-src="{{ display_image('') }}"><noscript><img
                                                width="1200" height="800" src="{{ display_image('') }}"
                                                alt=""></noscript>
                                        <div class="website-items__info">
                                            <div class="website-items__name">
                                            </div>
                                            <div class="website-items__desc">

                                            </div>
                                            <!--<a class="hbtn" href=""><span>Trải nghiệm ngay</span></a>-->
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div
                            class="swiper-scrollbar h-[3px_!important] max-w-[192px] left-[auto_!important] right-[6%]">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="overflow-hidden feedback py-12 sm:py-[6.25rem] pl-0 lg:pl-[1.75rem] xl:pl-[3.75rem] flex items-start lg:items-end">
            <h2
                class="text-[1.8rem] sm:text-[2rem] xl:text-[2.25rem] font-normal text-black uppercase relative left-auto top-auto mb-8 lg:mb-0 px-[30px] lg:px-0 lg:absolute lg:left-14 lg:top-20 xl:top-28 gs_reveal gs_reveal_fromLeft">
                Khách hàng <br> nói về {{ $companyNameValue }}</h2>
            <div
                class="w-[100%] px-[30px] lg:px-0 lg:w-[44%] overflow-hidden relative before:w-full before:absolute before:left-0 before:top-0 before:bg-[#efe9e3] before:content-[''] before:rounded-l-0 before:rounded-t-2xl lg:before:rounded-t-0 lg:before:rounded-l-2xl  before:min-h-[475px] lg:before:min-h-[475px] xl:before:min-h-[442px] 2xl:before:min-h-[542px] gs_reveal gs_reveal_fromLeft">
                <div class="swiper feedback__content__swiper">
                    <div class="swiper-wrapper">
                        @if ($feedbacks->isNotEmpty())
                            @foreach ($feedbacks as $feedback)
                                <div class="swiper-slide">
                                    <div class="relative pb-0 lg:pb-[52px]">
                                        <div
                                            class="p-[2rem] pb-0 lg:px-0 rounded-l-0 rounded-t-2xl lg:rounded-t-0 lg:rounded-l-2xl lg:pl-12 lg:pr-32 lg:pb-0 lg:pt-12 2xl:p-16 2xl:pb-0 relative min-h-[475px] lg:min-h-[475px] xl:min-h-[442px] 2xl:min-h-[542px]">
                                            <img width="46" height="33" class="mb-4"
                                                src="{{ display_image($feedback->image) }}"
                                                alt="Khách hàng nói về {{ $companyNameValue }}"
                                                data-lazy-src="{{ display_image($feedback->image) }}"><noscript>
                                                <img width="46" height="33" class="mb-4"
                                                    src="{{ display_image($feedback->image) }}"
                                                    alt="Khách hàng nói về {{ $companyNameValue }}"></noscript>
                                            <div
                                                class="textoverflow lg:w-[80%] xl:w-[85%] 2xl:w-[75%] text-sm 2xl:text-base text-black">
                                                {{ $feedback->content }}</div>
                                            <div
                                                class="relative left-auto bottom-auto mt-[2rem] lg:mt-0 lg:absolute lg:left-[3.75rem] lg:-bottom-[2.5rem] flex items-end cursor-pointer">
                                                <div
                                                    class="himg shadow-[0_2px_10px_#999999] rounded-full border-[5px] border-solid border-white overflow-hidden h-[5.625rem] w-[5.625rem]">
                                                    <img width="80" height="107" class="block"
                                                        src="{{ display_image($feedback->image) }}"
                                                        alt="{{ $feedback->name }}"
                                                        data-lazy-src="{{ display_image($feedback->image) }}"><noscript><img
                                                            width="80" height="107" class="block"
                                                            src="{{ display_image($feedback->image) }}"
                                                            alt="{{ $feedback->name }}"></noscript>
                                                </div>
                                                <div
                                                    class="pl-[0.625rem] pb-[0.875rem] font-bold text-[0.75rem] text-black w-[calc(100%_-_5.625rem)]">
                                                    {{ $feedback->name }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide">
                                <div class="relative pb-0 lg:pb-[52px]">
                                    <div
                                        class="p-[2rem] pb-0 lg:px-0 rounded-l-0 rounded-t-2xl lg:rounded-t-0 lg:rounded-l-2xl lg:pl-12 lg:pr-32 lg:pb-0 lg:pt-12 2xl:p-16 2xl:pb-0 relative min-h-[475px] lg:min-h-[475px] xl:min-h-[442px] 2xl:min-h-[542px]">
                                        <img width="46" height="33" class="mb-4"
                                            src="{{ display_image('') }}"
                                            alt="Khách hàng nói về {{ $companyNameValue }}"
                                            data-lazy-src="{{ display_image('') }}"><noscript>
                                            <img width="46" height="33" class="mb-4"
                                                src="{{ display_image('') }}"
                                                alt="Khách hàng nói về {{ $companyNameValue }}"></noscript>
                                        <div
                                            class="textoverflow lg:w-[80%] xl:w-[85%] 2xl:w-[75%] text-sm 2xl:text-base text-black">
                                        </div>
                                        <div
                                            class="relative left-auto bottom-auto mt-[2rem] lg:mt-0 lg:absolute lg:left-[3.75rem] lg:-bottom-[2.5rem] flex items-end cursor-pointer">
                                            <div
                                                class="himg shadow-[0_2px_10px_#999999] rounded-full border-[5px] border-solid border-white overflow-hidden h-[5.625rem] w-[5.625rem]">
                                                <img width="80" height="107" class="block"
                                                    src="{{ display_image('') }}" alt="Khách hàng nói"
                                                    data-lazy-src="{{ display_image('') }}"><noscript><img
                                                        width="80" height="107" class="block"
                                                        src="{{ display_image('') }}"
                                                        alt="Khách hàng nói"></noscript>
                                            </div>
                                            <div
                                                class="pl-[0.625rem] pb-[0.875rem] font-bold text-[0.75rem] text-black w-[calc(100%_-_5.625rem)]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="w-[100%] lg:w-[56%] rounded-0 lg:rounded-tl-4 overflow-hidden gs_reveal gs_reveal_fromRight">
                <div class="swiper feedback__image__swiper">
                    <div class="swiper-wrapper">
                        @if ($feedbacks->isNotEmpty())
                            @foreach ($feedbacks as $feedback)
                                <div class="swiper-slide">
                                    <div class="relative pb-[52px] bg-white">
                                        <div class="block">
                                            <img width="1280" height="800"
                                                class="rounded-0 lg:rounded-tl-2xl object-cover w-full block min-h-[initial] lg:min-h-[570px] 2xl:min-h-[685px] cursor-pointer"
                                                src="{{ display_image($feedback->slide_2) }}" alt="Minigo shop"
                                                data-lazy-src="{{ display_image($feedback->slide_2) }}"><noscript>
                                                <img width="1280" height="800"
                                                    style="width: 699px; height: 436px"
                                                    class="rounded-0 lg:rounded-tl-2xl object-cover w-full block min-h-[initial] lg:min-h-[570px] 2xl:min-h-[685px] cursor-pointer"
                                                    src="{{ display_image($feedback->slide_2) }}"
                                                    alt="Minigo shop"></noscript>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide">
                                <div class="relative pb-[52px] bg-white">
                                    <div class="block">
                                        <img width="1280" height="800"
                                            class="rounded-0 lg:rounded-tl-2xl object-cover w-full block min-h-[initial] lg:min-h-[570px] 2xl:min-h-[685px] cursor-pointer"
                                            src="{{ display_image('') }}" alt="Minigo shop"
                                            data-lazy-src="{{ display_image('') }}"><noscript>
                                            <img width="1280" height="800"
                                                class="rounded-0 lg:rounded-tl-2xl object-cover w-full block min-h-[initial] lg:min-h-[570px] 2xl:min-h-[685px] cursor-pointer"
                                                src="{{ display_image('') }}" alt="Minigo shop"></noscript>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div
                class="relative w-[120%] -ml-[10%] sm:ml-0 sm:w-full right-0 top-0 mt-[-135px] sm:mt-[-200px] lg:mt-0 lg:absolute lg:w-[65%] lg:right-[5%] lg:top-[48%] xl:right-[7%] 2xl:right-[10.5%] 2xl:w-[60.5%] translate-y-[0%] lg:translate-y-[-50%] z-[999]">
                <div class="gs_reveal gs_reveal_fromBottom" data-delay="0.5">
                    <div class="block">
                        <img width="1812" height="1123" class="block"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201812%201123'%3E%3C/svg%3E"
                            alt="Khách hàng nói về {{ $companyNameValue }}"
                            data-lazy-src="{{ asset('image/macbook.webp') }}"><noscript><img width="1812"
                                height="1123" class="block" src="{{ asset('image/macbook.webp') }}"
                                alt="Khách hàng nói về {{ $companyNameValue }}"></noscript>
                    </div>
                    <div class="swiper feedback__design__swiper">
                        <div class="swiper-wrapper">
                            @if ($feedbacks->isNotEmpty())
                                @foreach ($feedbacks as $feedback)
                                    <div class="swiper-slide">
                                        <div class="block">
                                            <div class="overflow-hidden">
                                                <img width="800" height="500"
                                                    class="block rounded-t-2xl cursor-pointer"
                                                    src="{{ display_image($feedback->slide_1) }}" alt="Minigo shop"
                                                    data-lazy-src="{{ display_image($feedback->slide_1) }}"><noscript><img
                                                        width="800" height="500"
                                                        style="width: 891; height: 685px"
                                                        class="block rounded-t-2xl cursor-pointer"
                                                        src="{{ display_image($feedback->slide_1) }}"
                                                        alt="Minigo shop"></noscript>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="swiper-slide">
                                    <div class="block">
                                        <div class="overflow-hidden">
                                            <img width="800" height="500"
                                                class="block rounded-t-2xl cursor-pointer"
                                                src="{{ display_image('') }}" alt="Minigo shop"
                                                data-lazy-src="{{ display_image('') }}"><noscript><img width="800"
                                                    height="500" class="block rounded-t-2xl cursor-pointer"
                                                    src="{{ display_image('') }}" alt="Minigo shop"></noscript>
                                        </div>
                                    </div>
                                </div>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
            <div
                class="absolute  px-6 pr-4 lg:pl-0 w-full lg:w-[calc(50%_-_1.875rem)] right-0 bottom-[2.25rem] sm:bottom-[6.25rem] lg:pr-[3.75rem] flex justify-between items-center z-[2]">
                <div class="d-flex">
                    <button type="button" class="custom-feedback-prev" tabindex="-1" aria-label="Previous slide"
                        aria-controls="swiper-wrapper-cc2f103baccddb64a" aria-disabled="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29.168" height="13.376"
                            viewBox="0 0 29.168 13.376">
                            <g id="back" transform="translate(0.707 0.354)">
                                <g id="Group_10" data-name="Group 10" transform="translate(0 0)">
                                    <path id="Path_9" data-name="Path 9" d="M88,1718h27.98"
                                        transform="translate(-87.52 -1711.597)" fill="none" stroke="#000"
                                        stroke-width="1"></path>
                                    <path id="Path_10" data-name="Path 10"
                                        d="M93.6,1708.258l-6.335,6.335,6.335,6.334"
                                        transform="translate(-87.269 -1708.258)" fill="none" stroke="#000"
                                        stroke-width="1"></path>
                                </g>
                            </g>
                        </svg>
                    </button>
                    <button type="button" class="custom-feedback-next ml-[10px]" tabindex="0"
                        aria-label="Next slide" aria-controls="swiper-wrapper-cc2f103baccddb64a"
                        aria-disabled="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29.167" height="13.376"
                            viewBox="0 0 29.167 13.376">
                            <g id="Group_10" data-name="Group 10" transform="translate(0 0.354)">
                                <path id="Path_9" data-name="Path 9" d="M115.979,1718H88"
                                    transform="translate(-88 -1711.597)" fill="none" stroke="#000"
                                    stroke-width="1">
                                </path>
                                <path id="Path_10" data-name="Path 10" d="M87.269,1708.258l6.335,6.335-6.335,6.334"
                                    transform="translate(-65.144 -1708.258)" fill="none" stroke="#000"
                                    stroke-width="1"></path>
                            </g>
                        </svg>
                    </button>
                </div>

                <div class="feedback-pagination__progress w-[calc(100%_-_155px)] bg-[#cccccc] h-[2px] ml-4 relative">
                    <span class="absolute w-[10%] h-[2px] bg-[#000000] left-0 bottom-0"></span>
                </div>
                <div class="feedback-pagination__fraction w-[50px] text-left font-bold text-[0.875rem] text-[#8b8b8b]">
                </div>
            </div>
        </div>

        <div class="overflow-hidden mt-4 sm:mt-0 mb-10 sm:mb-16">
            <div class="center-layout">
                <h3
                    class="text-2xl text-[#7f7f7f] text-center font-bold uppercase mb-[0.25rem] cursor-pointer gs_reveal">
                    Tin tức mới
                </h3>
                {{-- <div
                    class=" text-3xl font-bold sm:text-4xl text-black text-center uppercase cursor-pointer mb-4 gs_reveal">
                    Kiến
                    thức website</div>
                <div class="max-w-[610px] text-sm text-center mx-auto mt-0 mb-9 gs_reveal">Cập nhật liên tục các thông
                    tin, kiến thức và xu hướng mới nhất về website</div> --}}
                <div class=" gs_reveal ">
                    <div class="post__swiper1 swiper pb-12 ">
                        <div class="swiper-wrapper">
                            @foreach ($items as $post)
                                <div class="swiper-slide">
                                    <div class="font-secondary bg-[#efe9e3] rounded-2xl p-[0.813rem]">
                                        <a href="{{ route('tintuc.detail', ['slug' => $post->slug]) }}"
                                            target="_blank" rel="nofollow noopener" class="block">
                                            <img class="rounded-[0.375rem]" width="370" height="222"
                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20370%20222'%3E%3C/svg%3E"
                                                data-lazy-srcset="{{ display_image($post->thumbnail) }}"
                                                alt="{{ $post->title }}"
                                                data-lazy-src="{{ display_image($post->thumbnail) }}"><noscript><img
                                                    class="rounded-[0.375rem]" width="370" height="222"
                                                    src="{{ display_image($post->thumbnail) }}"
                                                    srcset="{{ display_image($post->thumbnail) }} 576w, {{ display_image($post->thumbnail) }} 992w, {{ display_image($post->thumbnail) }} 1440w"
                                                    alt="{{ $post->title }}"></noscript>
                                        </a>
                                        <div class="px-[0.813rem] pb-4">
                                            <div class="font-bold text-black opacity-50 text-[0.75rem] py-4">27/06/2024
                                            </div>
                                            <h4 class="font-normal m-0">
                                                <a class="block font-bold text-black text-[1.125rem] uppercase mb-4 h-[3.375rem] overflow-hidden no-underline"
                                                    href="{{ route('tintuc.detail', ['slug' => $post->slug]) }}"
                                                    target="_blank" rel="nofollow noopener">Demographic Là Gì? Vai Trò
                                                    Trong Marketing
                                                    Và
                                                    Ưu, Nhược Điểm</a>
                                            </h4>
                                            <div
                                                class="text-[0.875rem] font-normal text-black h-[5.25rem] overflow-hidden">
                                                <p>Hiểu rõ về khách hàng là chìa khóa để xây dựng chiến lược bán hàng và
                                                    chiến lược marketing thành công. Một trong những công cụ quan trọng
                                                    nhất
                                                    để đạt được điều này chính là phân tích demographic. Nhưng
                                                    demographic
                                                    là gì và làm sao để phân khúc khách hàng demographic? Hãy cùng Miko
                                                    [&hellip;]</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination bottom-0"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contttt gs_reveal">
            <div class="center-layout">
                <img width="2596" height="397"
                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202596%20397'%3E%3C/svg%3E"
                    alt="Mikotech" class="contttt__image"
                    data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/wave.webp"><noscript><img
                        width="2596" height="397"
                        src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/wave.webp"
                        alt="Mikotech" class="contttt__image"></noscript>
                <div class="contact">
                    <div class="contact__desc">Ngay bây giờ chính là thời điểm sớm nhất <br> Bước gần hơn đến thành
                        công của bạn bằng
                        cách trò chuyện với chúng tôi</div>
                    <a data-fancybox data-src="#contact-modal" class="hbtn hbtn--white">Liên hệ ngay</a>
                </div>
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
                                    aria-required="true" aria-invalid="false" placeholder="Họ và tên (bắt buộc nhập)"
                                    value="{{ old('fullname') }}" type="text" required name="fullname" />
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
                                    aria-required="true" aria-invalid="false" placeholder="Email (bắt buộc nhập)"
                                    value="{{ old('email') }}" type="email" name="email" />
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
        <div class="check_screen_height fixed left-0 top-0 w-[1px] z-[-1] h-[100vh]"></div>
        @section('scripts')
            {{-- <script type="text/javascript" src="{{ asset('assets/js/app.js') }}" id=" app-js-js"></script> --}}
            <script src="{{ asset('assets/js/trangchu.js') }}" data-minify="1" defer></script>
        @endsection
</x-base-layout>
