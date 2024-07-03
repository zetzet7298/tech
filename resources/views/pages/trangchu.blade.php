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
    <div class="hmmenu__footer">Copyright © 2021 {{$companyNameValue}}</div>
    <div class="svg-menu"><svg id="scene" preserveAspectRatio="xMinYMid slice" viewBox="0 0 1440 800" class="style-1">
            <defs>
                <linearGradient id="ColorGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0" stop-color="var(--color-stop)"></stop>
                    <stop offset="1" stop-color="var(--color-bottom)"></stop>
                </linearGradient>
            </defs>
            <g class="gradient">
                <path
                    d="M 5153,15.13 C 5039,-791.7 3862,-1807 3080,-1680 2294,-1552 1772,-1536 1211,-1733 649,-1930 218.2,-1875 -295.2,-1369 -807.6,-862 -1347,382.9 -1383,1028 -1420,1675 -1302,1809 -843.9,1931 -385.4,2053 260.6,1933 826.6,2345 1391,2758 1924,3749 2487,4035 3049,4321 3308,4119 3682,3635 4058,3153 4581,2258 4854,1653 5127,1047 5271,821 5153,15.13 Z"
                    pathshow="M 5153,15.13 C 5039,-791.7 3862,-1807 3080,-1680 2294,-1552 1772,-1536 1211,-1733 649,-1930 218.2,-1875 -295.2,-1369 -807.6,-862 -1347,382.9 -1383,1028 -1420,1675 -1302,1809 -843.9,1931 -385.4,2053 260.6,1933 826.6,2345 1391,2758 1924,3749 2487,4035 3049,4321 3308,4119 3682,3635 4058,3153 4581,2258 4854,1653 5127,1047 5271,821 5153,15.13 Z"
                    pathhide="M 382.9,69.64 C 375.1,14.22 296.4,-55.5 243.8,-46.79 191.2,-38.08 156.2,-36.94 118.6,-50.49 80.98,-64.04 52.11,-60.24 17.7,-25.44 -16.71,9.355 -52.82,94.93 -55.27,139.3 -57.72,183.7 -49.76,192.9 -19.05,201.3 11.66,209.7 54.92,201.4 92.87,229.8 130.8,258.2 166.4,326.2 204.1,345.9 241.8,365.6 259.2,351.7 284.3,318.5 309.4,285.3 344.5,223.8 362.8,182.2 381.1,140.6 390.7,125.1 382.9,69.64 Z">
                </path>
                <path
                    d="M 4434,-44.03 C 4293,-887.2 3482,-1499 2701,-1354 2012,-1227 1312,-1500 615.5,-1477 142.6,-1462 -269,-1137 -555.8,-730.8 -935.1,-195.7 -1289,452.3 -1230,1150 -1194,1541 -780,1732 -438.8,1719 88.59,1702 657.1,1697 1131,2023 1670,2392 2042,3051 2671,3246 3100,3381 3516,3037 3782,2680 4338,1933 4594,916 4434,-44.03 Z"
                    pathshow="M 4434,-44.03 C 4293,-887.2 3482,-1499 2701,-1354 2012,-1227 1312,-1500 615.5,-1477 142.6,-1462 -269,-1137 -555.8,-730.8 -935.1,-195.7 -1289,452.3 -1230,1150 -1194,1541 -780,1732 -438.8,1719 88.59,1702 657.1,1697 1131,2023 1670,2392 2042,3051 2671,3246 3100,3381 3516,3037 3782,2680 4338,1933 4594,916 4434,-44.03 Z"
                    pathhide="M 334.7,65.61 C 325.3,7.593 270.9,-34.46 218.5,-24.5 172.3,-15.71 125.4,-34.55 78.72,-32.93 47.06,-31.83 19.45,-9.456 0.2296,18.39 -25.16,55.18 -48.95,99.72 -44.87,147.7 -42.59,174.6 -14.84,187.6 8.083,186.8 43.43,185.5 81.49,185.3 113.3,207.7 149.3,233 174.3,278.3 216.4,291.8 245.2,301 273.1,277.4 290.9,252.8 328.2,201.4 345.4,131.6 334.7,65.61 Z">
                </path>
                <path
                    d="M 3476,960.3 C 3339,184.5 2702,-358.8 2044,-608.5 1587,-781.2 1113,-1088 627.8,-933.3 -133.9,-687.9 -790.9,-7.384 -993,842.2 -1048,1072 -929.2,1380 -686.7,1416 -134.6,1501 419.9,1250 968.6,1462 1591,1702 2030,2318 2666,2521 3043,2642 3369,2188 3434,1793 3481,1520 3526,1235 3476,960.3 Z"
                    pathshow="M 3476,960.3 C 3339,184.5 2702,-358.8 2044,-608.5 1587,-781.2 1113,-1088 627.8,-933.3 -133.9,-687.9 -790.9,-7.384 -993,842.2 -1048,1072 -929.2,1380 -686.7,1416 -134.6,1501 419.9,1250 968.6,1462 1591,1702 2030,2318 2666,2521 3043,2642 3369,2188 3434,1793 3481,1520 3526,1235 3476,960.3 Z"
                    pathhide="M 270.4,134.6 C 261.3,81.3 218.6,43.99 174.5,26.82 143.8,14.87 112.1,-6.204 79.55,4.503 28.51,21.31 -15.53,68.11 -29.07,126.5 -32.74,142.3 -24.82,163.4 -8.561,165.9 28.45,171.7 65.61,154.5 102.4,169 144.1,185.5 173.6,227.9 216.1,241.9 241.4,250.2 263.3,218.9 267.7,191.8 270.8,173 273.7,153.5 270.4,134.6 Z">
                </path>
                <path
                    d="M -222,1276 C 295.8,1396 902.1,1387 1470,1388 1723,1391 1963,1413 2203,1424 2481,1425 2645,1283 2607,1179 2557,1073 2430,999.7 2317,918.2 2140,795.1 1976,651.8 1988,499.6 2039,84.57 2544,-296.6 2519,-710.8 2506,-878.9 2077,-987.3 1698,-980 1306,-977.3 876.8,-941.1 611.6,-798.6 396.9,-690 321.1,-539 119,-425.1 -348.3,-162.8 -1005,19.76 -1687,137.5 -1864,170.2 -2079,211.8 -2117,299.2 -2142,386.6 -2041,462.1 -1889,516.2 -1536,626.2 -1308,788 -1056,936 -828.2,1074 -563,1190 -222,1276 Z"
                    pathshow="M -222,1276 C 295.8,1396 902.1,1387 1470,1388 1723,1391 1963,1413 2203,1424 2481,1425 2645,1283 2607,1179 2557,1073 2430,999.7 2317,918.2 2140,795.1 1976,651.8 1988,499.6 2039,84.57 2544,-296.6 2519,-710.8 2506,-878.9 2077,-987.3 1698,-980 1306,-977.3 876.8,-941.1 611.6,-798.6 396.9,-690 321.1,-539 119,-425.1 -348.3,-162.8 -1005,19.76 -1687,137.5 -1864,170.2 -2079,211.8 -2117,299.2 -2142,386.6 -2041,462.1 -1889,516.2 -1536,626.2 -1308,788 -1056,936 -828.2,1074 -563,1190 -222,1276 Z"
                    pathhide="M 1273,351 C 1314,371.2 1362,369.7 1407,369.8 1427,370.4 1446,374.1 1465,375.8 1487,376 1500,352.2 1497,334.6 1493,316.9 1483,304.5 1474,290.8 1460,270.1 1447,246 1448,220.4 1452,150.6 1492,86.49 1490,16.84 1489,-11.44 1455,-29.67 1425,-28.44 1394,-27.98 1360,-21.9 1339,2.072 1322,20.33 1316,45.73 1300,64.88 1263,109 1211,139.7 1157,159.5 1143,165 1126,172 1123,186.7 1121,201.4 1129,214.1 1141,223.2 1169,241.7 1187,268.9 1207,293.8 1225,317 1246,336.5 1273,351 Z">
                </path>
                <path
                    d="M 55.85,1211 C 561,1326 1155,1281 1710,1277 1887,1280 2127,1297 2253,1226 2405,1147 2317,1027 2203,952.7 2064,861.1 1925,776.7 1912,675 1900,477 1976,276.6 2089,86.35 2241,-180 2531,-440.5 2481,-720.1 2456,-874.5 2077,-969.7 1736,-971 1344,-969 914.7,-914.1 700,-770.2 561,-667.7 510.5,-542.5 333.7,-443.1 43.22,-280.2 -285.2,-131.3 -651.4,7.864 -904,101.2 -1220,152.4 -1447,249.9 -1637,343.8 -1447,473.4 -1296,551.3 -853.5,773.7 -563,1070 55.85,1211 Z"
                    pathshow="M 55.85,1211 C 561,1326 1155,1281 1710,1277 1887,1280 2127,1297 2253,1226 2405,1147 2317,1027 2203,952.7 2064,861.1 1925,776.7 1912,675 1900,477 1976,276.6 2089,86.35 2241,-180 2531,-440.5 2481,-720.1 2456,-874.5 2077,-969.7 1736,-971 1344,-969 914.7,-914.1 700,-770.2 561,-667.7 510.5,-542.5 333.7,-443.1 43.22,-280.2 -285.2,-131.3 -651.4,7.864 -904,101.2 -1220,152.4 -1447,249.9 -1637,343.8 -1447,473.4 -1296,551.3 -853.5,773.7 -563,1070 55.85,1211 Z"
                    pathhide="M 1295,340 C 1335,359.4 1382,351.9 1426,351.2 1440,351.7 1459,354.5 1469,342.5 1481,329.3 1474,309.1 1465,296.6 1454,281.2 1443,267 1442,249.9 1441,216.6 1447,182.9 1456,150.9 1468,106.1 1491,62.3 1487,15.27 1485,-10.69 1455,-26.7 1428,-26.92 1397,-26.59 1363,-17.36 1346,6.839 1335,24.08 1331,45.14 1317,61.85 1294,89.26 1268,114.3 1239,137.7 1219,153.4 1194,162 1176,178.4 1161,194.2 1176,216 1188,229.1 1223,266.5 1246,316.3 1295,340 Z">
                </path>
            </g>
        </svg></div>
    </div>
    <div class="overflow-x-hidden">
        <h1 class="d-none">Dịch vụ Digital Marketing Tổng Thể Doanh Nghiệp | {{$companyNameValue}}</h1>
        <div class="slider">
            <div class="center-layout">
                <div class="slider-items">
                    <div class="slider-items__background"></div>
                    <div class="slider-items__text">Xin chào!</div>
                    <img width="262" height="450" class="slider-items__layer slider-items__layer--1"
                        src="{{ display_image($SLIDER_1) }}"
                        alt="Dịch vụ Digital Marketing Tổng Thể Doanh Nghiệp | {{$companyNameValue}}"
                        data-lazy-src="{{ display_image($SLIDER_1) }}"><noscript>
                          <img width="262" height="450"
                            class="slider-items__layer slider-items__layer--1" src="{{ display_image($SLIDER_1) }}"
                            alt="Dịch vụ Digital Marketing Tổng Thể Doanh Nghiệp | {{$companyNameValue}}"></noscript>
                    <img width="778" height="599" class="slider-items__layer slider-items__layer--2" style="width: 585px; height: 450px;"
                        src="{{ display_image($SLIDER_2) }}"
                        alt="Dịch vụ Digital Marketing Tổng Thể Doanh Nghiệp | {{$companyNameValue}}"
                        data-lazy-src="{{ display_image($SLIDER_2) }}"><noscript>
                          <img width="778" height="599"
                            class="slider-items__layer slider-items__layer--2" src="{{ display_image($SLIDER_2) }}"
                            alt="Dịch vụ Digital Marketing Tổng Thể Doanh Nghiệp | {{$companyNameValue}}"></noscript>
                    <img width="542" height="255" class="slider-items__layer slider-items__layer--3"
                        src="{{ display_image($SLIDER_3) }}"
                        alt="Dịch vụ Digital Marketing Tổng Thể Doanh Nghiệp | {{$companyNameValue}}"
                        data-lazy-src="{{ display_image($SLIDER_3) }}"><noscript>
                          <img width="542" height="255"
                            class="slider-items__layer slider-items__layer--3" src="{{ display_image($SLIDER_3) }}"
                            alt="Dịch vụ Digital Marketing Tổng Thể Doanh Nghiệp | {{$companyNameValue}}"></noscript>
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
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 51.28 51.17">
                <defs>
                    <style>
                        .cls-21 {
                            fill: url(#linear-gradient-99);
                        }
                    </style>
                    <linearGradient id="linear-gradient-99" x1="-942.09" y1="590.88" x2="-942.37"
                        y2="589.5" gradientTransform="matrix(-44.49, 0, 0, 44.26, -41886.84, -26088.02)"
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
                        <a href="{{route('dichvu')}}" class="hbtn hbtn--white">Tìm hiểu ngay</a>
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
                                                  <img
                                                    style="width: 470px; height: 313px"
                                                    width="1200" height="800"
                                                    src="{{ display_image($solutions[$i]->image) }}"
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
                Khách hàng <br> nói về {{$companyNameValue}}</h2>
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
                                                src="{{ display_image($feedback->slide_1) }}" alt="Minigo shop"
                                                data-lazy-src="{{ display_image($feedback->slide_1) }}"><noscript>
                                                <img width="1280" height="800" style="width: 699px; height: 436px"
                                                    class="rounded-0 lg:rounded-tl-2xl object-cover w-full block min-h-[initial] lg:min-h-[570px] 2xl:min-h-[685px] cursor-pointer"
                                                    src="{{ display_image($feedback->slide_1) }}"
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
                            data-lazy-src="{{asset('image/macbook.webp')}}"><noscript><img
                                width="1812" height="1123" class="block"
                                src="{{asset('image/macbook.webp')}}"
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
                                      src="{{ display_image($feedback->slide_2) }}" alt="Minigo shop"
                                      data-lazy-src="{{ display_image($feedback->slide_2) }}"><noscript><img
                                          width="800" height="500" style="width: 891; height: 685px"
                                          class="block rounded-t-2xl cursor-pointer"
                                          src="{{ display_image($feedback->slide_2) }}"
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
                <div
                    class=" text-3xl font-bold sm:text-4xl text-black text-center uppercase cursor-pointer mb-4 gs_reveal">
                    Kiến
                    thức website</div>
                <div class="max-w-[610px] text-sm text-center mx-auto mt-0 mb-9 gs_reveal">Cập nhật liên tục các thông
                    tin, kiến thức và xu hướng mới nhất về website</div>
                <div class=" gs_reveal ">
                    <div class="post__swiper1 swiper pb-12 ">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="font-secondary bg-[#efe9e3] rounded-2xl p-[0.813rem]">
                                    <a href="https://mikotech.vn/demographic-la-gi/" target="_blank"
                                        rel="nofollow noopener" class="block">
                                        <img class="rounded-[0.375rem]" width="370" height="222"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20370%20222'%3E%3C/svg%3E"
                                            data-lazy-srcset="https://mikotech.vn/wp-content/uploads/2024/06/demographic-la-gi.jpg 576w, https://mikotech.vn/wp-content/uploads/2024/06/demographic-la-gi.jpg 992w, https://mikotech.vn/wp-content/uploads/2024/06/demographic-la-gi.jpg 1440w"
                                            alt="Demographic Là Gì? Vai Trò Trong Marketing Và Ưu, Nhược Điểm"
                                            data-lazy-src="https://mikotech.vn/wp-content/uploads/2024/06/demographic-la-gi.jpg"><noscript><img
                                                class="rounded-[0.375rem]" width="370" height="222"
                                                src="https://mikotech.vn/wp-content/uploads/2024/06/demographic-la-gi.jpg"
                                                srcset="https://mikotech.vn/wp-content/uploads/2024/06/demographic-la-gi.jpg 576w, https://mikotech.vn/wp-content/uploads/2024/06/demographic-la-gi.jpg 992w, https://mikotech.vn/wp-content/uploads/2024/06/demographic-la-gi.jpg 1440w"
                                                alt="Demographic Là Gì? Vai Trò Trong Marketing Và Ưu, Nhược Điểm"></noscript>
                                    </a>
                                    <div class="px-[0.813rem] pb-4">
                                        <div class="font-bold text-black opacity-50 text-[0.75rem] py-4">27/06/2024
                                        </div>
                                        <h4 class="font-normal m-0">
                                            <a class="block font-bold text-black text-[1.125rem] uppercase mb-4 h-[3.375rem] overflow-hidden no-underline"
                                                href="https://mikotech.vn/demographic-la-gi/" target="_blank"
                                                rel="nofollow noopener">Demographic Là Gì? Vai Trò Trong Marketing Và
                                                Ưu, Nhược Điểm</a>
                                        </h4>
                                        <div
                                            class="text-[0.875rem] font-normal text-black h-[5.25rem] overflow-hidden">
                                            <p>Hiểu rõ về khách hàng là chìa khóa để xây dựng chiến lược bán hàng và
                                                chiến lược marketing thành công. Một trong những công cụ quan trọng nhất
                                                để đạt được điều này chính là phân tích demographic. Nhưng demographic
                                                là gì và làm sao để phân khúc khách hàng demographic? Hãy cùng Miko
                                                [&hellip;]</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="font-secondary bg-[#efe9e3] rounded-2xl p-[0.813rem]">
                                    <a href="https://mikotech.vn/bonus-la-gi/" target="_blank"
                                        rel="nofollow noopener" class="block">
                                        <img class="rounded-[0.375rem]" width="370" height="222"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20370%20222'%3E%3C/svg%3E"
                                            data-lazy-srcset="https://mikotech.vn/wp-content/uploads/2024/06/bonus-la-gi.jpg 576w, https://mikotech.vn/wp-content/uploads/2024/06/bonus-la-gi.jpg 992w, https://mikotech.vn/wp-content/uploads/2024/06/bonus-la-gi.jpg 1440w"
                                            alt="Bonus Là Gì? Tất Cả Các Loại Tiền Bonus Phổ Biến Bạn Cần Biết"
                                            data-lazy-src="https://mikotech.vn/wp-content/uploads/2024/06/bonus-la-gi.jpg"><noscript><img
                                                class="rounded-[0.375rem]" width="370" height="222"
                                                src="https://mikotech.vn/wp-content/uploads/2024/06/bonus-la-gi.jpg"
                                                srcset="https://mikotech.vn/wp-content/uploads/2024/06/bonus-la-gi.jpg 576w, https://mikotech.vn/wp-content/uploads/2024/06/bonus-la-gi.jpg 992w, https://mikotech.vn/wp-content/uploads/2024/06/bonus-la-gi.jpg 1440w"
                                                alt="Bonus Là Gì? Tất Cả Các Loại Tiền Bonus Phổ Biến Bạn Cần Biết"></noscript>
                                    </a>
                                    <div class="px-[0.813rem] pb-4">
                                        <div class="font-bold text-black opacity-50 text-[0.75rem] py-4">24/06/2024
                                        </div>
                                        <h4 class="font-normal m-0">
                                            <a class="block font-bold text-black text-[1.125rem] uppercase mb-4 h-[3.375rem] overflow-hidden no-underline"
                                                href="https://mikotech.vn/bonus-la-gi/" target="_blank"
                                                rel="nofollow noopener">Bonus Là Gì? Tất Cả Các Loại Tiền Bonus Phổ
                                                Biến Bạn Cần Biết</a>
                                        </h4>
                                        <div
                                            class="text-[0.875rem] font-normal text-black h-[5.25rem] overflow-hidden">
                                            <p>Hiểu rõ về bonus và các loại bonus khác nhau là điều vô cùng cần thiết
                                                đối với cả người lao động và doanh nghiệp. Khi được áp dụng một cách hợp
                                                lý, bonus không chỉ giúp doanh nghiệp đạt được các mục tiêu kinh doanh
                                                mà còn xây dựng một môi trường làm việc [&hellip;]</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="font-secondary bg-[#efe9e3] rounded-2xl p-[0.813rem]">
                                    <a href="https://mikotech.vn/lap-ke-hoach-ban-hang/" target="_blank"
                                        rel="nofollow noopener" class="block">
                                        <img class="rounded-[0.375rem]" width="370" height="222"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20370%20222'%3E%3C/svg%3E"
                                            data-lazy-srcset="https://mikotech.vn/wp-content/uploads/2024/06/lap-ke-hoach-ban-hang.jpg 576w, https://mikotech.vn/wp-content/uploads/2024/06/lap-ke-hoach-ban-hang.jpg 992w, https://mikotech.vn/wp-content/uploads/2024/06/lap-ke-hoach-ban-hang.jpg 1440w"
                                            alt="9 Bước Lập Kế Hoạch Bán Hàng Hiệu Quả Trong Kinh Doanh"
                                            data-lazy-src="https://mikotech.vn/wp-content/uploads/2024/06/lap-ke-hoach-ban-hang.jpg"><noscript><img
                                                class="rounded-[0.375rem]" width="370" height="222"
                                                src="https://mikotech.vn/wp-content/uploads/2024/06/lap-ke-hoach-ban-hang.jpg"
                                                srcset="https://mikotech.vn/wp-content/uploads/2024/06/lap-ke-hoach-ban-hang.jpg 576w, https://mikotech.vn/wp-content/uploads/2024/06/lap-ke-hoach-ban-hang.jpg 992w, https://mikotech.vn/wp-content/uploads/2024/06/lap-ke-hoach-ban-hang.jpg 1440w"
                                                alt="9 Bước Lập Kế Hoạch Bán Hàng Hiệu Quả Trong Kinh Doanh"></noscript>
                                    </a>
                                    <div class="px-[0.813rem] pb-4">
                                        <div class="font-bold text-black opacity-50 text-[0.75rem] py-4">21/06/2024
                                        </div>
                                        <h4 class="font-normal m-0">
                                            <a class="block font-bold text-black text-[1.125rem] uppercase mb-4 h-[3.375rem] overflow-hidden no-underline"
                                                href="https://mikotech.vn/lap-ke-hoach-ban-hang/" target="_blank"
                                                rel="nofollow noopener">9 Bước Lập Kế Hoạch Bán Hàng Hiệu Quả Trong
                                                Kinh Doanh</a>
                                        </h4>
                                        <div
                                            class="text-[0.875rem] font-normal text-black h-[5.25rem] overflow-hidden">
                                            <p>Lập kế hoạch bán hàng là một trong những yếu tố then chốt quyết định sự
                                                thành công của doanh nghiệp. Một kế hoạch bán hàng hiệu quả không chỉ
                                                giúp doanh nghiệp đạt được mục tiêu doanh số mà còn giúp tối ưu hóa
                                                nguồn lực và nâng cao vị thế cạnh tranh. Trong [&hellip;]</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="font-secondary bg-[#efe9e3] rounded-2xl p-[0.813rem]">
                                    <a href="https://mikotech.vn/cach-tang-follow-tiktok/" target="_blank"
                                        rel="nofollow noopener" class="block">
                                        <img class="rounded-[0.375rem]" width="370" height="222"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20370%20222'%3E%3C/svg%3E"
                                            data-lazy-srcset="https://mikotech.vn/wp-content/uploads/2024/06/tang-follow-tiktok.jpg 576w, https://mikotech.vn/wp-content/uploads/2024/06/tang-follow-tiktok.jpg 992w, https://mikotech.vn/wp-content/uploads/2024/06/tang-follow-tiktok.jpg 1440w"
                                            alt="Bật Mí 10+ Cách Tăng Follow TikTok Miễn Phí, Hiệu Quả Nhất"
                                            data-lazy-src="https://mikotech.vn/wp-content/uploads/2024/06/tang-follow-tiktok.jpg"><noscript><img
                                                class="rounded-[0.375rem]" width="370" height="222"
                                                src="https://mikotech.vn/wp-content/uploads/2024/06/tang-follow-tiktok.jpg"
                                                srcset="https://mikotech.vn/wp-content/uploads/2024/06/tang-follow-tiktok.jpg 576w, https://mikotech.vn/wp-content/uploads/2024/06/tang-follow-tiktok.jpg 992w, https://mikotech.vn/wp-content/uploads/2024/06/tang-follow-tiktok.jpg 1440w"
                                                alt="Bật Mí 10+ Cách Tăng Follow TikTok Miễn Phí, Hiệu Quả Nhất"></noscript>
                                    </a>
                                    <div class="px-[0.813rem] pb-4">
                                        <div class="font-bold text-black opacity-50 text-[0.75rem] py-4">18/06/2024
                                        </div>
                                        <h4 class="font-normal m-0">
                                            <a class="block font-bold text-black text-[1.125rem] uppercase mb-4 h-[3.375rem] overflow-hidden no-underline"
                                                href="https://mikotech.vn/cach-tang-follow-tiktok/" target="_blank"
                                                rel="nofollow noopener">Bật Mí 10+ Cách Tăng Follow TikTok Miễn Phí,
                                                Hiệu Quả Nhất</a>
                                        </h4>
                                        <div
                                            class="text-[0.875rem] font-normal text-black h-[5.25rem] overflow-hidden">
                                            <p>Ngày nay, TikTok đã trở thành một nền tảng phổ biến với hàng triệu người
                                                dùng trên khắp thế giới. Đối với các content creator, việc tăng follow
                                                TikTok không chỉ giúp nâng cao độ nổi tiếng mà còn mở ra nhiều cơ hội
                                                kinh doanh. Trong bài viết sau, {{$companyNameValue}} sẽ giới thiệu [&hellip;]</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="font-secondary bg-[#efe9e3] rounded-2xl p-[0.813rem]">
                                    <a href="https://mikotech.vn/chung-chi-ccna-la-gi/" target="_blank"
                                        rel="nofollow noopener" class="block">
                                        <img class="rounded-[0.375rem]" width="370" height="222"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20370%20222'%3E%3C/svg%3E"
                                            data-lazy-srcset="https://mikotech.vn/wp-content/uploads/2024/06/Chung-Chi-CCNA-La-Gi.jpg 576w, https://mikotech.vn/wp-content/uploads/2024/06/Chung-Chi-CCNA-La-Gi.jpg 992w, https://mikotech.vn/wp-content/uploads/2024/06/Chung-Chi-CCNA-La-Gi.jpg 1440w"
                                            alt="Chứng Chỉ CCNA Là Gì? Vì Sao Nên Có Chứng Chỉ CCNA"
                                            data-lazy-src="https://mikotech.vn/wp-content/uploads/2024/06/Chung-Chi-CCNA-La-Gi.jpg"><noscript><img
                                                class="rounded-[0.375rem]" width="370" height="222"
                                                src="https://mikotech.vn/wp-content/uploads/2024/06/Chung-Chi-CCNA-La-Gi.jpg"
                                                srcset="https://mikotech.vn/wp-content/uploads/2024/06/Chung-Chi-CCNA-La-Gi.jpg 576w, https://mikotech.vn/wp-content/uploads/2024/06/Chung-Chi-CCNA-La-Gi.jpg 992w, https://mikotech.vn/wp-content/uploads/2024/06/Chung-Chi-CCNA-La-Gi.jpg 1440w"
                                                alt="Chứng Chỉ CCNA Là Gì? Vì Sao Nên Có Chứng Chỉ CCNA"></noscript>
                                    </a>
                                    <div class="px-[0.813rem] pb-4">
                                        <div class="font-bold text-black opacity-50 text-[0.75rem] py-4">15/06/2024
                                        </div>
                                        <h4 class="font-normal m-0">
                                            <a class="block font-bold text-black text-[1.125rem] uppercase mb-4 h-[3.375rem] overflow-hidden no-underline"
                                                href="https://mikotech.vn/chung-chi-ccna-la-gi/" target="_blank"
                                                rel="nofollow noopener">Chứng Chỉ CCNA Là Gì? Vì Sao Nên Có Chứng Chỉ
                                                CCNA</a>
                                        </h4>
                                        <div
                                            class="text-[0.875rem] font-normal text-black h-[5.25rem] overflow-hidden">
                                            <p>Trong lĩnh vực công nghệ thông tin, chứng chỉ CCNA đã trở thành một chuẩn
                                                mực quan trọng đối với các chuyên gia mạng. Được cấp bởi Cisco Systems,
                                                chứng chỉ CCNA không chỉ khẳng định kỹ năng của người sở hữu mà còn mở
                                                ra nhiều cơ hội nghề nghiệp hấp dẫn. Vậy chứng [&hellip;]</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="font-secondary bg-[#efe9e3] rounded-2xl p-[0.813rem]">
                                    <a href="https://mikotech.vn/value-proposition-la-gi/" target="_blank"
                                        rel="nofollow noopener" class="block">
                                        <img class="rounded-[0.375rem]" width="370" height="222"
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20370%20222'%3E%3C/svg%3E"
                                            data-lazy-srcset="https://mikotech.vn/wp-content/uploads/2024/06/Value-Proposition.jpg 576w, https://mikotech.vn/wp-content/uploads/2024/06/Value-Proposition.jpg 992w, https://mikotech.vn/wp-content/uploads/2024/06/Value-Proposition.jpg 1440w"
                                            alt="Value Proposition Là Gì? Cách Xây Dựng Value Proposition Chất Lượng"
                                            data-lazy-src="https://mikotech.vn/wp-content/uploads/2024/06/Value-Proposition.jpg"><noscript><img
                                                class="rounded-[0.375rem]" width="370" height="222"
                                                src="https://mikotech.vn/wp-content/uploads/2024/06/Value-Proposition.jpg"
                                                srcset="https://mikotech.vn/wp-content/uploads/2024/06/Value-Proposition.jpg 576w, https://mikotech.vn/wp-content/uploads/2024/06/Value-Proposition.jpg 992w, https://mikotech.vn/wp-content/uploads/2024/06/Value-Proposition.jpg 1440w"
                                                alt="Value Proposition Là Gì? Cách Xây Dựng Value Proposition Chất Lượng"></noscript>
                                    </a>
                                    <div class="px-[0.813rem] pb-4">
                                        <div class="font-bold text-black opacity-50 text-[0.75rem] py-4">12/06/2024
                                        </div>
                                        <h4 class="font-normal m-0">
                                            <a class="block font-bold text-black text-[1.125rem] uppercase mb-4 h-[3.375rem] overflow-hidden no-underline"
                                                href="https://mikotech.vn/value-proposition-la-gi/" target="_blank"
                                                rel="nofollow noopener">Value Proposition Là Gì? Cách Xây Dựng Value
                                                Proposition Chất Lượng</a>
                                        </h4>
                                        <div
                                            class="text-[0.875rem] font-normal text-black h-[5.25rem] overflow-hidden">
                                            <p>Giữa rất nhiều thương hiệu cạnh tranh và sản phẩm thay thế, làm thế nào
                                                để thuyết phục khách hàng lựa chọn sản phẩm của bạn? Value proposition
                                                là một yếu tố then chốt giúp doanh nghiệp đạt được mục tiêu này. Vậy
                                                value proposition là gì? Làm thế nào để tạo ra value proposition
                                                [&hellip;]</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                    <form action="/#wpcf7-f64-p264-o1" method="post" class="wpcf7-form init"
                        aria-label="Contact form" novalidate="novalidate" data-status="init">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="64" />
                            <input type="hidden" name="_wpcf7_version" value="5.9.3" />
                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f64-p264-o1" />
                            <input type="hidden" name="_wpcf7_container_post" value="264" />
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                            <input type="hidden" name="_wpcf7_recaptcha_response" value="" />
                        </div>
                        <p><span class="wpcf7-form-control-wrap" data-name="fullname"><input size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                    aria-required="true" aria-invalid="false" placeholder="Họ và tên" value=""
                                    type="text" name="fullname" /></span><span class="wpcf7-form-control-wrap"
                                data-name="phone"><input size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required check-phone"
                                    aria-required="true" aria-invalid="false" placeholder="Số điện thoại"
                                    value="" type="text" name="phone" /></span><span
                                class="wpcf7-form-control-wrap" data-name="email"><input size="40"
                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                    aria-required="true" aria-invalid="false" placeholder="Email" value=""
                                    type="email" name="email" /></span><span class="wpcf7-form-control-wrap"
                                data-name="object"><select
                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required"
                                    aria-required="true" aria-invalid="false" name="object">
                                    <option value="Đối tác">Đối tác</option>
                                    <option value="Khách hàng">Khách hàng</option>
                                </select></span><span class="wpcf7-form-control-wrap" data-name="message">
                                <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                    aria-required="true" aria-invalid="false" placeholder="Nội dung tin nhắn" name="message"></textarea>
                            </span><input class="wpcf7-form-control wpcf7-submit has-spinner hbtn" type="submit"
                                value="Gửi" />
                        </p>
                        <p style="display: none !important;"><label>&#916;
                                <textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea>
                            </label><input type="hidden" id="ak_js_1" name="_wpcf7_ak_js" value="127" /></p>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="check_screen_height fixed left-0 top-0 w-[1px] z-[-1] h-[100vh]"></div>
</x-base-layout>
