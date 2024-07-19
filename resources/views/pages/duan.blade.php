<x-base-layout>
    @section('title')
        <title>Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}</title>
    @endsection
    @php
        $settings = \App\Models\Setting::getByType('project');
        $title = $settings['title']['value'];
        $description = $settings['description']['value'];
    @endphp
    <div class="hero">
        <h1 class="d-none">{{ $h1 }}</h1>
        <div class="center-layout">
            <div class="design-banner-contain">
                <img width="1230" height="540" class="hidden sm:block w-full"
                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201230%20540'%3E%3C/svg%3E"
                    alt="banner"
                    data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/2022-12-07/COVER-TRANG-DU-AN.webp"><noscript><img
                        width="1230" height="540" class="hidden sm:block w-full"
                        src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/2022-12-07/COVER-TRANG-DU-AN.webp"
                        alt="banner"></noscript>
                <img width="375" height="791" class="block sm:hidden w-full"
                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20791'%3E%3C/svg%3E"
                    alt="banner"
                    data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/2022-12-07/COVER-TRANG-DU-AN - MOBILE.webp"><noscript><img
                        width="375" height="791" class="block sm:hidden w-full"
                        src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/2022-12-07/COVER-TRANG-DU-AN - MOBILE.webp"
                        alt="banner"></noscript>
                <div class="design-banner-info">
                    <div class="design-banner-title" data-aos="fade-up" data-aos-duration="600" data-aos-once="true"
                        data-aos-delay="400">{{ $title }}</div>
                    <div class="design-banner-description" data-aos="fade-up" data-aos-duration="600"
                        data-aos-once="true" data-aos-delay="500">{{ $description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="center-layout design__swiper swiper-container">
        <div class="design-box-contain flex flex-wrap justify-between">
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-1"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 01" data-keyword="design 01 keyword"
                        data-description="design 01 description" data-projectid="1"></div>
                    <div class="design-img fancy-landing" data-stt="1"
                        data-url="https://demo4.mikotech.com.vn/RINOLADING/"><img width="1293" height="852"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201293%20852'%3E%3C/svg%3E"
                            alt="RINO"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup Home RINO.webp"><noscript><img
                                width="1293" height="852"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup Home RINO.webp"
                                alt="RINO"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">01</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="1" data-url="https://demo4.mikotech.com.vn/RINOLADING/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">RINO</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-2" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 02" data-keyword="design 02 keyword"
                        data-description="design 02 description" data-projectid="2"></div>
                    <div class="design-img fancy-landing" data-stt="2"
                        data-url="https://demo3.mikotech.com.vn/LanDingPT8/"><img width="1293" height="852"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201293%20852'%3E%3C/svg%3E"
                            alt="PT8"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup Gym PT8_1293x852.webp"><noscript><img
                                width="1293" height="852"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup Gym PT8_1293x852.webp"
                                alt="PT8"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">02</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="2" data-url="https://demo3.mikotech.com.vn/LanDingPT8/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">PT8</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-3">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 03" data-keyword="design 03 keyword"
                        data-description="design 03 description" data-projectid="3"></div>
                    <div class="design-img fancy-landing" data-stt="3"
                        data-url="https://demo3.mikotech.com.vn/LanDingDiaOc/"><img width="800" height="533"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                            alt="Phúc An Ashita"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Phúc An Ashita.webp"><noscript><img
                                width="800" height="533"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Phúc An Ashita.webp"
                                alt="Phúc An Ashita"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">03</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="3" data-url="https://demo3.mikotech.com.vn/LanDingDiaOc/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Phúc An Ashita</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-4" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 04" data-keyword="design 04 keyword"
                        data-description="design 04 description" data-projectid="4"></div>
                    <div class="design-img fancy-landing" data-stt="4"
                        data-url="https://demo4.mikotech.com.vn/SAONAMLADING/"><img width="800" height="533"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                            alt="Sao Nam"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Sao Nam.webp"><noscript><img
                                width="800" height="533"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Sao Nam.webp"
                                alt="Sao Nam"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">04</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="4" data-url="https://demo4.mikotech.com.vn/SAONAMLADING/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Sao Nam</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-5"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 05" data-keyword="design 05 keyword"
                        data-description="design 05 description" data-projectid="5"></div>
                    <div class="design-img fancy-landing" data-stt="5"
                        data-url="https://demo3.mikotech.com.vn/TheRium/"><img width="1293" height="852"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201293%20852'%3E%3C/svg%3E"
                            alt="Cá cảnh The Rium"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup Từ Thái Sơn_1293x852.webp"><noscript><img
                                width="1293" height="852"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup Từ Thái Sơn_1293x852.webp"
                                alt="Cá cảnh The Rium"></noscript></div>

                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">05</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="5" data-url="https://demo3.mikotech.com.vn/TheRium/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Cá cảnh The Rium</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-6" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 06" data-keyword="design 06 keyword"
                        data-description="design 06 description" data-projectid="6"></div>
                    <div class="design-img fancy-landing" data-stt="6"
                        data-url="https://demo5.mikotech.com.vn/project_natural/"><img width="1000" height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="Natural Pharm"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Natural-Pharm.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Natural-Pharm.webp"
                                alt="Natural Pharm"></noscript></div>

                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">06</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="6" data-url="https://demo5.mikotech.com.vn/project_natural/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Natural Pharm</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-7"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 07" data-keyword="design 07 keyword"
                        data-description="design 07 description" data-projectid="7"></div>
                    <div class="design-img fancy-landing" data-stt="7"
                        data-url="https://demo3.mikotech.com.vn/VisaD7/"><img width="1293" height="852"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201293%20852'%3E%3C/svg%3E"
                            alt="Diệp Gia"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Visa D7_1293x852.webp"><noscript><img
                                width="1293" height="852"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Visa D7_1293x852.webp"
                                alt="Diệp Gia"></noscript></div>

                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">07</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="7" data-url="https://demo3.mikotech.com.vn/VisaD7/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Diệp Gia</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-8" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 08" data-keyword="design 08 keyword"
                        data-description="design 08 description" data-projectid="8"></div>
                    <div class="design-img fancy-landing" data-stt="8"
                        data-url="https://design2.mikotech.vn/Coffee/"><img width="1293" height="852"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201293%20852'%3E%3C/svg%3E"
                            alt="Warehouse"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup Warehouse_1293x852.webp"><noscript><img
                                width="1293" height="852"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup Warehouse_1293x852.webp"
                                alt="Warehouse"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">08</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="8" data-url="https://design2.mikotech.vn/Coffee/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Warehouse</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-9"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 09" data-keyword="design 09 keyword"
                        data-description="design 09 description" data-projectid="9"></div>
                    <div class="design-img fancy-landing" data-stt="9"
                        data-url="https://design2.mikotech.vn/KIOVietNam/"><img width="1293" height="852"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201293%20852'%3E%3C/svg%3E"
                            alt="KIOVN"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup KIO_1293x852.webp"><noscript><img
                                width="1293" height="852"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup KIO_1293x852.webp"
                                alt="KIOVN"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">09</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="9" data-url="https://design2.mikotech.vn/KIOVietNam/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">KIOVN</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-10" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 10" data-keyword="design 10 keyword"
                        data-description="design 10 description" data-projectid="10"></div>
                    <div class="design-img fancy-landing" data-stt="10"
                        data-url="http://demo5.mikotech.com.vn/project_shinrai/"><img width="1293" height="852"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201293%20852'%3E%3C/svg%3E"
                            alt="Shinrai food"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup Shinrai.webp"><noscript><img
                                width="1293" height="852"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup Shinrai.webp"
                                alt="Shinrai food"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">10</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="10" data-url="http://demo5.mikotech.com.vn/project_shinrai/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Shinrai food</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-11"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 11" data-keyword="design 11 keyword"
                        data-description="design 11 description" data-projectid="11"></div>
                    <div class="design-img fancy-landing" data-stt="11" data-url="https://design.mikotech.vn/meon/">
                        <img width="1200" height="792"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20792'%3E%3C/svg%3E"
                            alt="MEON COSMETIC"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/website4.webp"><noscript><img
                                width="1200" height="792"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/website4.webp"
                                alt="MEON COSMETIC"></noscript>
                    </div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">11</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="11" data-url="https://design.mikotech.vn/meon/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">MEON COSMETIC</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-12" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 12" data-keyword="design 12 keyword"
                        data-description="design 12 description" data-projectid="12"></div>
                    <div class="design-img fancy-landing" data-stt="12"
                        data-url="https://design2.mikotech.vn/TPCNKieuMy/"><img width="1293" height="852"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201293%20852'%3E%3C/svg%3E"
                            alt="Thực phẩm Kiều My"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup Kiều my_1293x852.webp"><noscript><img
                                width="1293" height="852"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/Mockup Kiều my_1293x852.webp"
                                alt="Thực phẩm Kiều My"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">12</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="12" data-url="https://design2.mikotech.vn/TPCNKieuMy/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Thực phẩm Kiều My</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-13"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 13" data-keyword="design 13 keyword"
                        data-description="design 13 description" data-projectid="13"></div>
                    <div class="design-img fancy-landing" data-stt="13"
                        data-url="http://design3.mikotech.vn/RomsCosmestic/"><img width="1200" height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Rom's Cosmetics"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/5-9-2022/Roms-Cosmetics.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/5-9-2022/Roms-Cosmetics.webp"
                                alt="Rom's Cosmetics"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">13</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="13" data-url="http://design3.mikotech.vn/RomsCosmestic/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Rom's Cosmetics</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-14" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 14" data-keyword="design 14 keyword"
                        data-description="design 14 description" data-projectid="14"></div>
                    <div class="design-img fancy-landing" data-stt="14"
                        data-url="https://design2.mikotech.vn/VanChuyenQuangNam/"><img width="1200" height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Quang Nam"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/5-9-2022/Quang-Nam.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/5-9-2022/Quang-Nam.webp"
                                alt="Quang Nam"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">14</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="14" data-url="https://design2.mikotech.vn/VanChuyenQuangNam/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Quang Nam</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-15"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 15" data-keyword="design 15 keyword"
                        data-description="design 15 description" data-projectid="15"></div>
                    <div class="design-img fancy-landing" data-stt="15" data-url="https://design2.mikotech.vn/QK/">
                        <img width="1200" height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="QK"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/5-9-2022/qk.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/5-9-2022/qk.webp"
                                alt="QK"></noscript>
                    </div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">15</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="15" data-url="https://design2.mikotech.vn/QK/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">QK</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-16" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 16" data-keyword="design 16 keyword"
                        data-description="design 16 description" data-projectid="16"></div>
                    <div class="design-img fancy-landing" data-stt="16"
                        data-url="https://design2.mikotech.vn/son_authentic/"><img width="1200" height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Sơn Authentic"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/5-9-2022/Sơn-Authentic.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/5-9-2022/Sơn-Authentic.webp"
                                alt="Sơn Authentic"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">16</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="16" data-url="https://design2.mikotech.vn/son_authentic/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Sơn Authentic</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-17"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 17" data-keyword="design 17 keyword"
                        data-description="design 17 description" data-projectid="17"></div>
                    <div class="design-img fancy-landing" data-stt="17"
                        data-url="https://design3.mikotech.vn/BaHuy/index1.html"><img width="1200" height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="BEN PERFUME"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/5-9-2022/Ben-Parfume.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/5-9-2022/Ben-Parfume.webp"
                                alt="BEN PERFUME"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">17</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="17" data-url="https://design3.mikotech.vn/BaHuy/index1.html">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">BEN PERFUME</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-18" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 18" data-keyword="design 18 keyword"
                        data-description="design 18 description" data-projectid="18"></div>
                    <div class="design-img fancy-landing" data-stt="18"
                        data-url="https://design.mikotech.vn/archquare/index-page.html"><img width="1200"
                            height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Joys"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/5-9-2022/Joys.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/5-9-2022/Joys.webp"
                                alt="Joys"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">18</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="18" data-url="https://design.mikotech.vn/archquare/index-page.html">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none" stroke="#000"
                                                stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Joys</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-19"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 19" data-keyword="design 19 keyword"
                        data-description="design 19 description" data-projectid="19"></div>
                    <div class="design-img fancy-landing" data-stt="19"
                        data-url="https://design.mikotech.vn/demio/"><img width="800" height="533"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                            alt="DEMIO"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Mockup Demio.webp"><noscript><img
                                width="800" height="533"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Mockup Demio.webp"
                                alt="DEMIO"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">19</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="19" data-url="https://design.mikotech.vn/demio/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">DEMIO</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-20" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 20" data-keyword="design 20 keyword"
                        data-description="design 20 description" data-projectid="20"></div>
                    <div class="design-img fancy-landing" data-stt="20"
                        data-url="https://design.mikotech.vn/zaca/"><img width="800" height="533"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                            alt="Zaca"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Zacca.webp"><noscript><img
                                width="800" height="533"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Zacca.webp"
                                alt="Zaca"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">20</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="20" data-url="https://design.mikotech.vn/zaca/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Zaca</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-21"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 21" data-keyword="design 21 keyword"
                        data-description="design 21 description" data-projectid="21"></div>
                    <div class="design-img fancy-landing" data-stt="21"
                        data-url="https://design3.mikotech.vn/BaDuy/"><img width="800" height="533"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                            alt="Hoàng Hà"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Hoàng-Hà.webp"><noscript><img
                                width="800" height="533"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Hoàng-Hà.webp"
                                alt="Hoàng Hà"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">21</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="21" data-url="https://design3.mikotech.vn/BaDuy/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Hoàng Hà</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-22" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 22" data-keyword="design 22 keyword"
                        data-description="design 22 description" data-projectid="22"></div>
                    <div class="design-img fancy-landing" data-stt="22"
                        data-url="https://design2.mikotech.vn/PhanTuanSon_103722W/"><img width="800"
                            height="533"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                            alt="Chalasoft"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Chalasoft.webp"><noscript><img
                                width="800" height="533"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Chalasoft.webp"
                                alt="Chalasoft"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">22</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="22" data-url="https://design2.mikotech.vn/PhanTuanSon_103722W/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Chalasoft</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-23"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 23" data-keyword="design 23 keyword"
                        data-description="design 23 description" data-projectid="23"></div>
                    <div class="design-img fancy-landing" data-stt="23"
                        data-url="http://design2.mikotech.vn/NguyenXuanTra_103622w/"><img width="800"
                            height="533"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                            alt="EPM"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/EPM.webp"><noscript><img
                                width="800" height="533"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/EPM.webp"
                                alt="EPM"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">23</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="23" data-url="http://design2.mikotech.vn/NguyenXuanTra_103622w/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">EPM</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-24" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 24" data-keyword="design 24 keyword"
                        data-description="design 24 description" data-projectid="24"></div>
                    <div class="design-img fancy-landing" data-stt="24"
                        data-url="https://design.mikotech.vn/angely/"><img width="800" height="533"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                            alt="Angely.vn"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Angely.webp"><noscript><img
                                width="800" height="533"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Angely.webp"
                                alt="Angely.vn"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">24</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="24" data-url="https://design.mikotech.vn/angely/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Angely.vn</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-25"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 25" data-keyword="design 25 keyword"
                        data-description="design 25 description" data-projectid="25"></div>
                    <div class="design-img fancy-landing" data-stt="25"
                        data-url="https://design2.mikotech.vn/KORENO_103522w/index1.html"><img width="800"
                            height="533"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                            alt="Mì cay koreno"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Mì-cay-koreno.webp"><noscript><img
                                width="800" height="533"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Mì-cay-koreno.webp"
                                alt="Mì cay koreno"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">25</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="25" data-url="https://design2.mikotech.vn/KORENO_103522w/index1.html">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Mì cay koreno</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-26" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 26" data-keyword="design 26 keyword"
                        data-description="design 26 description" data-projectid="26"></div>
                    <div class="design-img fancy-landing" data-stt="26"
                        data-url="https://design2.mikotech.com.vn/qua-tet-2022"><img width="1200" height="792"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20792'%3E%3C/svg%3E"
                            alt="Tặng quà tết"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/website3.webp"><noscript><img
                                width="1200" height="792"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/website3.webp"
                                alt="Tặng quà tết"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">26</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="26" data-url="https://design2.mikotech.com.vn/qua-tet-2022">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Tặng quà tết</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-27"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 27" data-keyword="design 27 keyword"
                        data-description="design 27 description" data-projectid="27"></div>
                    <div class="design-img fancy-landing" data-stt="27"
                        data-url="https://design.mikotech.vn/minigo/"><img width="1280" height="844"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201280%20844'%3E%3C/svg%3E"
                            alt="Minigo"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/photo_2021-11-05_15-25-12.webp"><noscript><img
                                width="1280" height="844"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/photo_2021-11-05_15-25-12.webp"
                                alt="Minigo"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">27</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="27" data-url="https://design.mikotech.vn/minigo/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Minigo</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-28" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 28" data-keyword="design 28 keyword"
                        data-description="design 28 description" data-projectid="28"></div>
                    <div class="design-img fancy-landing" data-stt="28"
                        data-url="https://design.mikotech.vn/minigo/"><img width="800" height="533"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                            alt="Minigo'bag"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Minigo-bag.webp"><noscript><img
                                width="800" height="533"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Minigo-bag.webp"
                                alt="Minigo'bag"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">28</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="28" data-url="https://design.mikotech.vn/minigo/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Minigo'bag</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-29"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 29" data-keyword="design 29 keyword"
                        data-description="design 29 description" data-projectid="29"></div>
                    <div class="design-img fancy-landing" data-stt="29"
                        data-url="https://design2.mikotech.vn/BuiVanTuan_104822w/"><img width="800"
                            height="533"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                            alt="Khởi Hưng Land"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Khởi-Hưng-Land.webp"><noscript><img
                                width="800" height="533"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Khởi-Hưng-Land.webp"
                                alt="Khởi Hưng Land"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">29</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="29" data-url="https://design2.mikotech.vn/BuiVanTuan_104822w/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Khởi Hưng Land</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-30" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 30" data-keyword="design 30 keyword"
                        data-description="design 30 description" data-projectid="30"></div>
                    <div class="design-img fancy-landing" data-stt="30"
                        data-url="https://design.mikotech.vn/meon_furniture/"><img width="800" height="533"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20533'%3E%3C/svg%3E"
                            alt="Meon Funiture"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Meon-Funiture.webp"><noscript><img
                                width="800" height="533"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-09-20/Meon-Funiture.webp"
                                alt="Meon Funiture"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">30</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="30" data-url="https://design.mikotech.vn/meon_furniture/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Meon Funiture</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-31"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 31" data-keyword="design 31 keyword"
                        data-description="design 31 description" data-projectid="31"></div>
                    <div class="design-img fancy-landing" data-stt="31"
                        data-url="https://design3.mikotech.vn/DuyKhai/"><img width="1000" height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="KACI"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/KACI.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/KACI.webp"
                                alt="KACI"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">31</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="31" data-url="https://design3.mikotech.vn/DuyKhai/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">KACI</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-32" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 32" data-keyword="design 32 keyword"
                        data-description="design 32 description" data-projectid="32"></div>
                    <div class="design-img fancy-landing" data-stt="32"
                        data-url="https://design2.mikotech.vn/SUTU/"><img width="1000" height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="Sutu"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/mockup-Sutu.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/mockup-Sutu.webp"
                                alt="Sutu"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">32</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="32" data-url="https://design2.mikotech.vn/SUTU/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Sutu</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-33"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 33" data-keyword="design 33 keyword"
                        data-description="design 33 description" data-projectid="33"></div>
                    <div class="design-img fancy-landing" data-stt="33"
                        data-url="https://design1.mikotech.vn/DrHalee/"><img width="1000" height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="Dr. HALEE"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Dr-HALEE.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Dr-HALEE.webp"
                                alt="Dr. HALEE"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">33</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="33" data-url="https://design1.mikotech.vn/DrHalee/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Dr. HALEE</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-34" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 34" data-keyword="design 34 keyword"
                        data-description="design 34 description" data-projectid="34"></div>
                    <div class="design-img fancy-landing" data-stt="34"
                        data-url="https://design2.mikotech.vn/BaoHanhSaDec/"><img width="1000" height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="Mỹ Đức"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Mỹ-Đức.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Mỹ-Đức.webp"
                                alt="Mỹ Đức"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">34</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="34" data-url="https://design2.mikotech.vn/BaoHanhSaDec/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Mỹ Đức</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-35"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 35" data-keyword="design 35 keyword"
                        data-description="design 35 description" data-projectid="35"></div>
                    <div class="design-img fancy-landing" data-stt="35"
                        data-url="http://design1.mikotech.vn/VinhThai/"><img width="1000" height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="Vĩnh Thái"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Vĩnh-Thái.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Vĩnh-Thái.webp"
                                alt="Vĩnh Thái"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">35</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="35" data-url="http://design1.mikotech.vn/VinhThai/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Vĩnh Thái</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-36" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 36" data-keyword="design 36 keyword"
                        data-description="design 36 description" data-projectid="36"></div>
                    <div class="design-img fancy-landing" data-stt="36"
                        data-url="https://design1.mikotech.vn/design_anthu_store/"><img width="1000"
                            height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="An Thư Store"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/An-Thu-store.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/An-Thu-store.webp"
                                alt="An Thư Store"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">36</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="36" data-url="https://design1.mikotech.vn/design_anthu_store/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">An Thư Store</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-37"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 37" data-keyword="design 37 keyword"
                        data-description="design 37 description" data-projectid="37"></div>
                    <div class="design-img fancy-landing" data-stt="37"
                        data-url="http://design1.mikotech.vn/demo_teenagers/"><img width="1000" height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="Teenagers"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Teenagers.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Teenagers.webp"
                                alt="Teenagers"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">37</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="37" data-url="http://design1.mikotech.vn/demo_teenagers/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Teenagers</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-38" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 38" data-keyword="design 38 keyword"
                        data-description="design 38 description" data-projectid="38"></div>
                    <div class="design-img fancy-landing" data-stt="38"
                        data-url="https://design2.mikotech.vn/tintuc/102122/"><img width="1000" height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="LIFE NEWS"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Ký-ức-Lộc-trời.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Ký-ức-Lộc-trời.webp"
                                alt="LIFE NEWS"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">38</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="38" data-url="https://design2.mikotech.vn/tintuc/102122/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">LIFE NEWS</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-39"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 39" data-keyword="design 39 keyword"
                        data-description="design 39 description" data-projectid="39"></div>
                    <div class="design-img fancy-landing" data-stt="39" data-url="https://meon.vn/"><img
                            width="4000" height="2640"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%204000%202640'%3E%3C/svg%3E"
                            alt="Meon"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/noi-that-meon.webp"><noscript><img
                                width="4000" height="2640"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/noi-that-meon.webp"
                                alt="Meon"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">39</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="39" data-url="https://meon.vn/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Meon</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-40" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 40" data-keyword="design 40 keyword"
                        data-description="design 40 description" data-projectid="40"></div>
                    <div class="design-img fancy-landing" data-stt="40"
                        data-url="https://design2.mikotech.vn/DangThiThanhPhuong_104522w/"><img width="1000"
                            height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="Uyên Phương Group"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Uyên-Phương-Group.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Uyên-Phương-Group.webp"
                                alt="Uyên Phương Group"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">40</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="40" data-url="https://design2.mikotech.vn/DangThiThanhPhuong_104522w/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Uyên Phương Group</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-41"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 41" data-keyword="design 41 keyword"
                        data-description="design 41 description" data-projectid="41"></div>
                    <div class="design-img fancy-landing" data-stt="41"
                        data-url="https://design2.mikotech.vn/Lighthome105122w/"><img width="1000"
                            height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="QVifa"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/QVifa.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/QVifa.webp"
                                alt="QVifa"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">41</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="41" data-url="https://design2.mikotech.vn/Lighthome105122w/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">QVifa</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-42" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 42" data-keyword="design 42 keyword"
                        data-description="design 42 description" data-projectid="42"></div>
                    <div class="design-img fancy-landing" data-stt="42" data-url=""><img width="1000"
                            height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="Tour station"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Tour-station.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Tour-station.webp"
                                alt="Tour station"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <div
                                class="text-left md:mb-0 w-auto absolute -top-[16px] md:top-[-18px] right-[104%] md:right-[110%] text-sm md:text-base italic whitespace-nowrap">
                                Đang cập nhật</div>
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">42</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="42" data-url="">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Tour station</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-43"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 43" data-keyword="design 43 keyword"
                        data-description="design 43 description" data-projectid="43"></div>
                    <div class="design-img fancy-landing" data-stt="43"
                        data-url="https://design2.mikotech.vn/TranTungLinh_104422w/index.html"><img width="1000"
                            height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="Delight"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Delight.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Delight.webp"
                                alt="Delight"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">43</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="43"
                                data-url="https://design2.mikotech.vn/TranTungLinh_104422w/index.html">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Delight</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-44" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 44" data-keyword="design 44 keyword"
                        data-description="design 44 description" data-projectid="44"></div>
                    <div class="design-img fancy-landing" data-stt="44"
                        data-url="https://design2.mikotech.com.vn/106122-cong-ty-tnhh-jin-hone-enterprise-viet-nam">
                        <img width="1000" height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="JIN HONE ENTERPRISE"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/JIN-HONE-ENTERPRISE.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/JIN-HONE-ENTERPRISE.webp"
                                alt="JIN HONE ENTERPRISE"></noscript>
                    </div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">44</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="44"
                                data-url="https://design2.mikotech.com.vn/106122-cong-ty-tnhh-jin-hone-enterprise-viet-nam">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">JIN HONE ENTERPRISE</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-45"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 45" data-keyword="design 45 keyword"
                        data-description="design 45 description" data-projectid="45"></div>
                    <div class="design-img fancy-landing" data-stt="45"
                        data-url="https://design2.mikotech.vn/DukeTex_104622w/"><img width="1000" height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="Duke tex"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Duke-tex.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Duke-tex.webp"
                                alt="Duke tex"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">45</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="45" data-url="https://design2.mikotech.vn/DukeTex_104622w/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Duke tex</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-46" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 46" data-keyword="design 46 keyword"
                        data-description="design 46 description" data-projectid="46"></div>
                    <div class="design-img fancy-landing" data-stt="46"
                        data-url="https://design2.mikotech.com.vn/106822-nghiem-xuan-duc-trang-chu"><img
                            width="1000" height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="OSAKAR"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/OSAKAR.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/OSAKAR.webp"
                                alt="OSAKAR"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">46</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="46"
                                data-url="https://design2.mikotech.com.vn/106822-nghiem-xuan-duc-trang-chu">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">OSAKAR</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-47"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 47" data-keyword="design 47 keyword"
                        data-description="design 47 description" data-projectid="47"></div>
                    <div class="design-img fancy-landing" data-stt="47"
                        data-url="https://design2.mikotech.com.vn/106222-trung-tam-hanh-dong-2"><img width="1000"
                            height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="CHANGE"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/CHANGE.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/CHANGE.webp"
                                alt="CHANGE"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">47</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="47"
                                data-url="https://design2.mikotech.com.vn/106222-trung-tam-hanh-dong-2">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">CHANGE</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-48" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 48" data-keyword="design 48 keyword"
                        data-description="design 48 description" data-projectid="48"></div>
                    <div class="design-img fancy-landing" data-stt="48"
                        data-url="https://design3.mikotech.com.vn/tongthithutrang-105622w"><img width="1000"
                            height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="Freshc"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Freshc.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Freshc.webp"
                                alt="Freshc"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">48</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="48" data-url="https://design3.mikotech.com.vn/tongthithutrang-105622w">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Freshc</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-49"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 49" data-keyword="design 49 keyword"
                        data-description="design 49 description" data-projectid="49"></div>
                    <div class="design-img fancy-landing" data-stt="49"
                        data-url="https://design2.mikotech.com.vn/105722-cong-ty-co-phan-o-trading"><img
                            width="1000" height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="O TRADING"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/O-TRADING.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/O-TRADING.webp"
                                alt="O TRADING"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">49</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="49"
                                data-url="https://design2.mikotech.com.vn/105722-cong-ty-co-phan-o-trading">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">O TRADING</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-50" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 50" data-keyword="design 50 keyword"
                        data-description="design 50 description" data-projectid="50"></div>
                    <div class="design-img fancy-landing" data-stt="50"
                        data-url="https://design1.mikotech.vn/demo_lovefish/"><img width="1000" height="667"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201000%20667'%3E%3C/svg%3E"
                            alt="Lovefish Aqua"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Lovefish-Aqua.webp"><noscript><img
                                width="1000" height="667"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-10-24/Lovefish-Aqua.webp"
                                alt="Lovefish Aqua"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">50</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="50" data-url="https://design1.mikotech.vn/demo_lovefish/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Lovefish Aqua</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-51"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 51" data-keyword="design 51 keyword"
                        data-description="design 51 description" data-projectid="51"></div>
                    <div class="design-img fancy-landing" data-stt="51"
                        data-url="http://design2.mikotech.vn/HumanDynamic103122w/"><img width="1200"
                            height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Human Dynamic Viet Nam"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/58 - Human Dynamic Viet Nam.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/58 - Human Dynamic Viet Nam.webp"
                                alt="Human Dynamic Viet Nam"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">51</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="51" data-url="http://design2.mikotech.vn/HumanDynamic103122w/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Human Dynamic Viet Nam</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-52" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 52" data-keyword="design 52 keyword"
                        data-description="design 52 description" data-projectid="52"></div>
                    <div class="design-img fancy-landing" data-stt="52"
                        data-url="https://design2.mikotech.com.vn/106722-cong-ty-tnhh-vegapedia-trang-chu"><img
                            width="1200" height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Vegapedia"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/62 - VEGAPEDIA.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/62 - VEGAPEDIA.webp"
                                alt="Vegapedia"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">52</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="52"
                                data-url="https://design2.mikotech.com.vn/106722-cong-ty-tnhh-vegapedia-trang-chu">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Vegapedia</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-53"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 53" data-keyword="design 53 keyword"
                        data-description="design 53 description" data-projectid="53"></div>
                    <div class="design-img fancy-landing" data-stt="53"
                        data-url="https://design3.mikotech.com.vn/107022-cong-ty-tnhh-vacxin-sinh-pham-va-thiet-bi-y-te-phuong-anh">
                        <img width="1200" height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Phương Anh"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/63-Phuong-Anh-mebio.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/63-Phuong-Anh-mebio.webp"
                                alt="Phương Anh"></noscript>
                    </div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">53</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="53"
                                data-url="https://design3.mikotech.com.vn/107022-cong-ty-tnhh-vacxin-sinh-pham-va-thiet-bi-y-te-phuong-anh">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Phương Anh</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-54" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 54" data-keyword="design 54 keyword"
                        data-description="design 54 description" data-projectid="54"></div>
                    <div class="design-img fancy-landing" data-stt="54"
                        data-url="https://design3.mikotech.com.vn/106922-cong-ty-tnhh-git-academy-viet-nam-trang-chu">
                        <img width="1200" height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Green Academy"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/64-Green-ACADEMY.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/64-Green-ACADEMY.webp"
                                alt="Green Academy"></noscript>
                    </div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">54</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="54"
                                data-url="https://design3.mikotech.com.vn/106922-cong-ty-tnhh-git-academy-viet-nam-trang-chu">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Green Academy</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-55"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 55" data-keyword="design 55 keyword"
                        data-description="design 55 description" data-projectid="55"></div>
                    <div class="design-img fancy-landing" data-stt="55"
                        data-url="https://design3.mikotech.com.vn/106422-cong-ty-co-phan-tu-van-va-ho-tro-y-te-my-us-mcs-jsc">
                        <img width="1200" height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Us Mcs Jsc"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/65-US-MCS-JSC.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/65-US-MCS-JSC.webp"
                                alt="Us Mcs Jsc"></noscript>
                    </div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">55</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="55"
                                data-url="https://design3.mikotech.com.vn/106422-cong-ty-co-phan-tu-van-va-ho-tro-y-te-my-us-mcs-jsc">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Us Mcs Jsc</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-56" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 56" data-keyword="design 56 keyword"
                        data-description="design 56 description" data-projectid="56"></div>
                    <div class="design-img fancy-landing" data-stt="56"
                        data-url="https://design2.mikotech.com.vn/107122-cong-ty-tnhh-mot-thanh-vien-thach-hien-home">
                        <img width="1200" height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="VietArt Stone"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/66-Vietart-Stone.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/66-Vietart-Stone.webp"
                                alt="VietArt Stone"></noscript>
                    </div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">56</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="56"
                                data-url="https://design2.mikotech.com.vn/107122-cong-ty-tnhh-mot-thanh-vien-thach-hien-home">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">VietArt Stone</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-57"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 57" data-keyword="design 57 keyword"
                        data-description="design 57 description" data-projectid="57"></div>
                    <div class="design-img fancy-landing" data-stt="57"
                        data-url="https://design2.mikotech.com.vn/107822-nguyen-thi-hong-hanh"><img width="1600"
                            height="1067"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201600%201067'%3E%3C/svg%3E"
                            alt="Heliocare"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/70 HELIOCARE.webp"><noscript><img
                                width="1600" height="1067"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/70 HELIOCARE.webp"
                                alt="Heliocare"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">57</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="57"
                                data-url="https://design2.mikotech.com.vn/107822-nguyen-thi-hong-hanh">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Heliocare</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-58" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 58" data-keyword="design 58 keyword"
                        data-description="design 58 description" data-projectid="58"></div>
                    <div class="design-img fancy-landing" data-stt="58"
                        data-url="https://design3.mikotech.com.vn/nguyen-minh-khoi"><img width="1600"
                            height="1067"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201600%201067'%3E%3C/svg%3E"
                            alt="Flashslide"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/71 FLASHSLIDE.webp"><noscript><img
                                width="1600" height="1067"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/71 FLASHSLIDE.webp"
                                alt="Flashslide"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">58</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="58" data-url="https://design3.mikotech.com.vn/nguyen-minh-khoi">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Flashslide</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-59"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 59" data-keyword="design 59 keyword"
                        data-description="design 59 description" data-projectid="59"></div>
                    <div class="design-img fancy-landing" data-stt="59"
                        data-url="https://design3.mikotech.com.vn/104022-cong-ty-tnhh-dien-luc-dien-bien"><img
                            width="1600" height="1067"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201600%201067'%3E%3C/svg%3E"
                            alt="EVN Điện Biên"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/72 DIEN LUC DIEN BIEN.webp"><noscript><img
                                width="1600" height="1067"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/72 DIEN LUC DIEN BIEN.webp"
                                alt="EVN Điện Biên"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">59</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="59"
                                data-url="https://design3.mikotech.com.vn/104022-cong-ty-tnhh-dien-luc-dien-bien">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">EVN Điện Biên</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-60" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 60" data-keyword="design 60 keyword"
                        data-description="design 60 description" data-projectid="60"></div>
                    <div class="design-img fancy-landing" data-stt="60"
                        data-url="https://design3.mikotech.com.vn/108022-cong-ty-dau-tu-va-phat-trien-sal-viet-nam">
                        <img width="1600" height="1067"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201600%201067'%3E%3C/svg%3E"
                            alt="DB Acoustic"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/74 DB ACOUSTIC.webp"><noscript><img
                                width="1600" height="1067"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/74 DB ACOUSTIC.webp"
                                alt="DB Acoustic"></noscript>
                    </div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">60</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="60"
                                data-url="https://design3.mikotech.com.vn/108022-cong-ty-dau-tu-va-phat-trien-sal-viet-nam">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">DB Acoustic</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-61"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 61" data-keyword="design 61 keyword"
                        data-description="design 61 description" data-projectid="61"></div>
                    <div class="design-img fancy-landing" data-stt="61"
                        data-url="https://design2.mikotech.vn/DeltaVn105422w/"><img width="1200" height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Kim Delta Viet Nam"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/56-KIM-DELTA-VIET-NAM.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/56-KIM-DELTA-VIET-NAM.webp"
                                alt="Kim Delta Viet Nam"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">61</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="61" data-url="https://design2.mikotech.vn/DeltaVn105422w/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Kim Delta Viet Nam</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-62" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 62" data-keyword="design 62 keyword"
                        data-description="design 62 description" data-projectid="62"></div>
                    <div class="design-img fancy-landing" data-stt="62"
                        data-url="hhttp://design2.mikotech.com.vn/HenryHoang_105322w/"><img width="1200"
                            height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="World Workers"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/57-World-Workers.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/57-World-Workers.webp"
                                alt="World Workers"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">62</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="62" data-url="hhttp://design2.mikotech.com.vn/HenryHoang_105322w/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">World Workers</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-63"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 63" data-keyword="design 63 keyword"
                        data-description="design 63 description" data-projectid="63"></div>
                    <div class="design-img fancy-landing" data-stt="63"
                        data-url="https://design2.mikotech.com.vn/trang-chu-meta-global"><img width="1200"
                            height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Meta Global"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/68-MIAN-GLOBAL.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/68-MIAN-GLOBAL.webp"
                                alt="Meta Global"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">63</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="63" data-url="https://design2.mikotech.com.vn/trang-chu-meta-global">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Meta Global</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-64" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 64" data-keyword="design 64 keyword"
                        data-description="design 64 description" data-projectid="64"></div>
                    <div class="design-img fancy-landing" data-stt="64"
                        data-url="https://design2.mikotech.vn/phumygiaudep/"><img width="1280" height="845"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201280%20845'%3E%3C/svg%3E"
                            alt="BĐS Phú Mỹ"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/photo_2021-11-15_09-24-12.webp"><noscript><img
                                width="1280" height="845"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/photo_2021-11-15_09-24-12.webp"
                                alt="BĐS Phú Mỹ"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">64</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="64" data-url="https://design2.mikotech.vn/phumygiaudep/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">BĐS Phú Mỹ</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-65"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 65" data-keyword="design 65 keyword"
                        data-description="design 65 description" data-projectid="65"></div>
                    <div class="design-img fancy-landing" data-stt="65"
                        data-url="https://design2.mikotech.vn/VNGCloud/"><img width="1200" height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="VNG CLOUD"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Miko-Tech Du-an-Website-Cong-nghe-VNG.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Miko-Tech Du-an-Website-Cong-nghe-VNG.webp"
                                alt="VNG CLOUD"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">65</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="65" data-url="https://design2.mikotech.vn/VNGCloud/">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">VNG CLOUD</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-66" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 66" data-keyword="design 66 keyword"
                        data-description="design 66 description" data-projectid="66"></div>
                    <div class="design-img fancy-landing" data-stt="66"
                        data-url="https://design3.mikotech.vn/NguyenTatDuongThuan/index.html"><img width="1200"
                            height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="ỨNG DỤNG SHAREU"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Miko Tech - APP chụp ảnh.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Miko Tech - APP chụp ảnh.webp"
                                alt="ỨNG DỤNG SHAREU"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">66</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="66"
                                data-url="https://design3.mikotech.vn/NguyenTatDuongThuan/index.html">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">ỨNG DỤNG SHAREU</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-67"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 67" data-keyword="design 67 keyword"
                        data-description="design 67 description" data-projectid="67"></div>
                    <div class="design-img fancy-landing" data-stt="67"
                        data-url="https://design2.mikotech.com.vn/108322-cong-ty-co-phan-moon-look"><img
                            width="1200" height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Moon Look"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Miko Tech - Du an Website MoonLook.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Miko Tech - Du an Website MoonLook.webp"
                                alt="Moon Look"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">67</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="67"
                                data-url="https://design2.mikotech.com.vn/108322-cong-ty-co-phan-moon-look">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Moon Look</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-68" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 68" data-keyword="design 68 keyword"
                        data-description="design 68 description" data-projectid="68"></div>
                    <div class="design-img fancy-landing" data-stt="68"
                        data-url="https://design2.mikotech.com.vn/01-vo-thi-tra-ly"><img width="2833"
                            height="1875"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202833%201875'%3E%3C/svg%3E"
                            alt="Align Dental"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Miko Tech - Dự án Website Nha Khoa Align Dental.webp"><noscript><img
                                width="2833" height="1875"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Miko Tech - Dự án Website Nha Khoa Align Dental.webp"
                                alt="Align Dental"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">68</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="68" data-url="https://design2.mikotech.com.vn/01-vo-thi-tra-ly">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Align Dental</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-69"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 69" data-keyword="design 69 keyword"
                        data-description="design 69 description" data-projectid="69"></div>
                    <div class="design-img fancy-landing" data-stt="69"
                        data-url="https://design2.mikotech.com.vn/107322-nguyen-thi-phuong-linh"><img width="1200"
                            height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Thiên Tâm Đạo"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Miko Tech - Website Sản phẩm vòng đeo Phương Tâm.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Miko Tech - Website Sản phẩm vòng đeo Phương Tâm.webp"
                                alt="Thiên Tâm Đạo"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">69</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="69"
                                data-url="https://design2.mikotech.com.vn/107322-nguyen-thi-phuong-linh">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Thiên Tâm Đạo</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right mt-8 sm:mt-[8rem] xl:mt-[12rem]"
                id="design-flex-70" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 70" data-keyword="design 70 keyword"
                        data-description="design 70 description" data-projectid="70"></div>
                    <div class="design-img fancy-landing" data-stt="70"
                        data-url="https://design3.mikotech.com.vn/108122-nguyen-vinh-quang"><img width="1200"
                            height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Coin Catapult"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Website Tiền ảo Coin Catapult.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Website Tiền ảo Coin Catapult.webp"
                                alt="Coin Catapult"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">70</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="70" data-url="https://design3.mikotech.com.vn/108122-nguyen-vinh-quang">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Coin Catapult</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="design-flex mb-6 sm:mb-0 w-full sm:w-[48%] xl:w-[48%] text-right" id="design-flex-71"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
                <div class="design-item design-detail-btn">
                    <div class="design-detail-data" data-title="design 71" data-keyword="design 71 keyword"
                        data-description="design 71 description" data-projectid="71"></div>
                    <div class="design-img fancy-landing" data-stt="70"
                        data-url="https://design2.mikotech.com.vn/108922-le-anh-bang"><img width="1200"
                            height="800"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201200%20800'%3E%3C/svg%3E"
                            alt="Top Edit"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Miko Tech - Du an Website cty nhiep anh Top Edit.webp"><noscript><img
                                width="1200" height="800"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/2022-12-06/Miko Tech - Du an Website cty nhiep anh Top Edit.webp"
                                alt="Top Edit"></noscript></div>
                    <div class="design-info">
                        <div
                            class="design-info-detail justify-between w-[calc(_100%_-_100px_)] md:w-[60%] relative flex-wrap pt-2 md:pt-6">
                            <span
                                class="leading-[70px] max-w-[initial] xl:max-w-[50%] font-secondary text-[#1FC1C1] font-bold text-[60px] lg:text-[80px] xl:text-[100px]">71</span>
                            <div class="max-w-[calc(_100%_-_77px_)] xl:max-w-[50%] cursor-pointer design-name fancy-landing"
                                data-stt="70" data-url="https://design2.mikotech.com.vn/108922-le-anh-bang">
                                <p class="text-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31.24" height="31.24"
                                        class="w-[20px] xl:w-[32px] inline-block" viewBox="0 0 31.24 31.24">
                                        <g id="Group_50" data-name="Group 50"
                                            transform="translate(-635.699 -1163.634)">
                                            <path id="Path_258" data-name="Path 258"
                                                d="M9406.59,6069.634h26.018v26.018"
                                                transform="translate(-8766.668 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                            <path id="Path_259" data-name="Path 259"
                                                d="M9415.277,6069.634l-29.533,29.533"
                                                transform="translate(-8749.338 -4905)" fill="none"
                                                stroke="#000" stroke-width="2" />
                                        </g>
                                    </svg>
                                </p>
                                <h2 class="text-base xl:text-[24px]">Top Edit</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <div class="contttt" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0">
        <h1 class="d-none">{{ $h1 }}</h1>
        <div class="center-layout">
            <img width="2596" height="397"
                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202596%20397'%3E%3C/svg%3E"
                alt="Mikotech" class="contttt__image"
                data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/wave.webp"><noscript><img
                    width="2596" height="397"
                    src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/home/wave.webp" alt="Mikotech"
                    class="contttt__image"></noscript>
            <div class="contact">
                <div class="contact__desc">Mỗi case study là một “câu chuyện” được Miko Tech “kể lại” một cách chỉn
                    chu. Vì vậy, còn nhiều dự án chưa được cập nhật, hãy liên hệ ngay với chúng tôi để được xem thêm
                    nhiều dự án khác</div>
                <a data-fancybox data-src="#contact-modal" class="hbtn hbtn--white">Liên hệ ngay</a>
            </div>
        </div>
    </div>
    <div id="contact-modal" class="h-fancybox">
        <div class="h-fancybox__header">Nhập thông tin liên hệ</div>
        <div class="h-fancybox__body">

            <div class="wpcf7 no-js" id="wpcf7-f64-o1" lang="en-US" dir="ltr">
                <div class="screen-reader-response">
                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                    <ul></ul>
                </div>
            </div>
            <form action="{{ route('contact.fe.store') }}" method="post" class="wpcf7-form init"
                aria-label="Contact form" novalidate="novalidate" data-status="init">
                @csrf
                <p>
                    <span class="wpcf7-form-control-wrap" data-name="fullname">
                        <input size="40" required
                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"
                            aria-invalid="false" placeholder="Họ và tên (bắt buộc nhập)"
                            value="{{ old('fullname') }}" type="text" required name="fullname" />
                        @if ($errors->has('fullname'))
                            <span class="text-danger">{{ $errors->first('fullname') }}</span>
                        @endif
                    </span>
                    <span class="wpcf7-form-control-wrap" data-name="phone">
                        <input size="40"
                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required check-phone"
                            aria-required="true" aria-invalid="false" placeholder="Số điện thoại (bắt buộc nhập)"
                            value="{{ old('phone') }}" type="text" name="phone" required />
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
        <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"" id=" aos-js-js"></script>
        <script src="{{ asset('assets/js/tuyendung.js') }}" data-minify="1" defer></script>
    @endsection
</x-base-layout>
