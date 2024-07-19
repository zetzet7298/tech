@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Cuộn tới form nếu có lỗi
            document.getElementById('footer-form').scrollIntoView();
        });
    </script>
@endif
<div class="footer">
    <div class="center-layout pd0__mobile_layout">
        <div class="footer__grid">
            <div class="footer__col">

                {{-- <span class=" footer__logo__mobile" data-id="0">
                    <span class="footer-xemthem-btn" data-id="5">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330"
                            style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_"
                                d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                        </svg>
                    </span>
                </span> --}}
                {{-- <div class="footer-mobile-hidden" id="footer-mobile-hidden-0">
                    <div class="">
                        <div class="footer__desc">{{ $MISSION }}</div>

                    </div>
                </div> --}}
                <div class="footer__title mt-3">
                    <a class="footer__logo  himg" href="{{route('trangchu')}}" rel="nofollow">
                        <img width="180" style="margin-left:5px;height:27.23px;" src="{{ display_image($LOGO) }}"
                            alt="" data-lazy-src="{{ display_image($LOGO) }}">
                    </a>
                    <span class="footer-xemthem-btn" data-id="10">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330"
                            style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_"
                                d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                        </svg>
                    </span>
                </div>
                <div class="footer-mobile-hidden" id="footer-mobile-hidden-10">
                    <div class="footer-mobile-hidden--content">
                        <div class="">
                            <div class="footer__desc">{{ $MISSION }}</div>

                        </div>
                    </div>
                </div>

                {{-- @if ($offices->isNotEmpty())
                @php $office = $offices[0] @endphp
                <div class="footer__title mt-3">{{$office->is_primary == true ? 'Trụ sở chính' : 'Văn phòng'}}
                    <span class="footer-xemthem-btn" data-id="1">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330"
                            style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_"
                                d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                        </svg>
                    </span>
                </div>
                <div class="footer-mobile-hidden" id="footer-mobile-hidden-1">
                    <div class="footer-mobile-hidden--content">
                        <div><b>Địa chỉ: </b><a class="text-black" target="_blank" rel="nofollow noopener"
                            @if ($office->google_map)
                            href="{{ $office->google_map }}"
                            @endif>{{ $office->address }}</a></div>
                        <div><b>Số điện thoại: </b>{{ $office->phone }}</div>
                        <div><b>Email: </b>
                            <span>{{ $office->email }}</span>
                        </div>
                        <div><b>Thời gian hoạt động:</b> {{ $office->time_working }}</div>
                    </div>
                </div>
                @endif --}}
                @if ($offices->isNotEmpty())
                    @for ($i = 0; $i < count($offices); $i++)
                        @php $office = $offices[$i] @endphp
                        <div class="footer__title mt-3">{{ $office->is_primary == true ? 'Trụ sở chính' : 'Văn phòng' }}
                            <span class="footer-xemthem-btn" data-id="10{{ $i }}">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330"
                                    style="enable-background:new 0 0 330 330;" xml:space="preserve">
                                    <path id="XMLID_225_"
                                        d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                                </svg>
                            </span>
                        </div>
                        <div class="footer-mobile-hidden" id="footer-mobile-hidden-10{{ $i }}">
                            <div class="footer-mobile-hidden--content">
                                <div><b>Địa chỉ: </b><a class="text-black" target="_blank" rel="nofollow noopener"
                                        @if ($office->google_map) href="{{ $office->google_map }}" @endif>{{ $office->address }}</a>
                                </div>
                                <div><b>Số điện thoại: </b>{{ $office->phone }}</div>
                                <div><b>Email: </b>
                                    <span>{{ $office->email }}</span>
                                </div>
                                <div><b>Thời gian hoạt động:</b> {{ $office->time_working }}</div>
                            </div>
                        </div>
                    @endfor

                @endif
            </div>

            <div class="footer__col">
                {{-- <div class="footer__title">Dịch vụ
                    <span class="footer-xemthem-btn" data-id="4">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330"
                            style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_"
                                d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                        </svg>
                    </span>
                </div> --}}
                <div class="footer-mobile-hidden" id="footer-mobile-hidden-4">
                </div>
                <div class="footer__col footer__col--form footer-mobile-hidden" style="width: 120%">
                    <div class="footer__title">Gửi yêu cầu báo giá</div>
                    <p class="mb-4">{{ $PRICE_QUOTE }}</p>
                    <div class="quote-form-footer">

                        <div class="wpcf7 no-js" id="wpcf7-f5200-p264-o2" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form id="footer-form" action="{{ route('contact.fe.store') }}" method="post"
                                class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate"
                                data-status="init">
                                @csrf
                                <p><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40"
                                            required class="wpcf7-form-control wpcf7-text " aria-required="true"
                                            aria-invalid="false" placeholder="Họ tên" value="" type="text"
                                            name="fullname" />
                                        @if ($errors->has('fullname'))
                                            <span class="text-danger">{{ $errors->first('fullname') }}</span>
                                        @endif
                                    </span><span class="wpcf7-form-control-wrap" data-name="your-email"><input
                                            size="40" required
                                            class="wpcf7-form-control wpcf7-email  wpcf7-text wpcf7-validates-as-email"
                                            aria-required="true" aria-invalid="false" placeholder="Email" value=""
                                            type="email" name="email" />
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </span><span class="wpcf7-form-control-wrap" data-name="your-phone"><input required
                                            class="wpcf7-form-control wpcf7-number  wpcf7-validates-as-number check-phone"
                                            aria-required="true" aria-invalid="false" placeholder="Số điện thoại"
                                            value="" type="number" name="phone" />
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </span>
                                    <span class="wpcf7-form-control-wrap" data-name="menu-63">
                                    </span><span class="wpcf7-form-control-wrap" data-name="message">
                                        <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                            placeholder="Nội dung tin nhắn" name="message"></textarea>
                                    </span><input
                                        class="wpcf7-form-control wpcf7-submit has-spinner hbtn submit-baogia-ftm"
                                        type="submit" value="Gửi" />
                                </p>
                                <p style="display: none !important;"><label>&#916;
                                        <textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea>
                                    </label><input type="hidden" id="ak_js_2" name="_wpcf7_ak_js"
                                        value="45" />
                                </p>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-view-mobile">
                    <div class="footer__title">Gửi yêu cầu báo giá
                        <span class="footer-xemthem-btn" data-id="6">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330"
                                style="enable-background:new 0 0 330 330;" xml:space="preserve">
                                <path id="XMLID_225_"
                                    d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                            </svg>
                        </span>
                    </div>
                    <div class="footer-mobile-hidden" id="footer-mobile-hidden-6">
                        <div class="footer-mobile-hidden--content">
                            <p class="mb-4">{{ $PRICE_QUOTE }}</p>
                            <div class="quote-form-footer">

                                <div class="wpcf7 no-js" id="wpcf7-f1029-p264-o3" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                        <ul></ul>
                                    </div>
                                    <form id="footer-form" action="{{ route('contact.fe.store') }}" method="post"
                                        class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate"
                                        data-status="init">
                                        @csrf
                                        <p><span class="wpcf7-form-control-wrap" data-name="your-name"><input
                                                    size="40" required class="wpcf7-form-control wpcf7-text "
                                                    aria-required="true" aria-invalid="false" placeholder="Họ tên"
                                                    value="" type="text" name="fullname" />
                                                @if ($errors->has('fullname'))
                                                    <span class="text-danger">{{ $errors->first('fullname') }}</span>
                                                @endif
                                            </span><span class="wpcf7-form-control-wrap" data-name="your-email"><input
                                                    size="40" required
                                                    class="wpcf7-form-control wpcf7-email  wpcf7-text wpcf7-validates-as-email"
                                                    aria-required="true" aria-invalid="false" placeholder="Email"
                                                    value="" type="email" name="email" />
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </span><span class="wpcf7-form-control-wrap" data-name="your-phone"><input
                                                    required
                                                    class="wpcf7-form-control wpcf7-number  wpcf7-validates-as-number check-phone"
                                                    aria-required="true" aria-invalid="false"
                                                    placeholder="Số điện thoại" value="" type="number"
                                                    name="phone" />
                                                @if ($errors->has('phone'))
                                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </span><span class="wpcf7-form-control-wrap" data-name="menu-63">
                                            </span><span class="wpcf7-form-control-wrap" data-name="message">
                                                <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                                    placeholder="Nội dung tin nhắn" name="message"></textarea>
                                            </span><input
                                                class="wpcf7-form-control wpcf7-submit has-spinner hbtn submit-baogia-ftm"
                                                type="submit" value="Gửi" />
                                        </p>
                                        <p style="display: none !important;"><label>&#916;
                                                <textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea>
                                            </label><input type="hidden" id="ak_js_2" name="_wpcf7_ak_js"
                                                value="45" />
                                        </p>
                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-view-mobile">
                        <div class="footer__title mt-3">Kết nối với chúng tôi
                            <span class="footer-xemthem-btn" data-id="3"><svg version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 330 330" style="enable-background:new 0 0 330 330;"
                                    xml:space="preserve">
                                    <path id="XMLID_225_"
                                        d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z">
                                    </path>
                                </svg></span>
                        </div>
                        <div class="footer-mobile-hidden" id="footer-mobile-hidden-3" style="height: 0px;">
                            <div class="footer-mobile-hidden--content">
                                <div class="d-flex flex-wrap">
                                    @if ($FACEBOOK)
                                        <a target="_blank" href="{{ $FACEBOOK }}" class="footer__social"
                                            rel="nofollow noopener">
                                            <svg width="15" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                <path
                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                                </path>
                                            </svg>
                                        </a>
                                    @endif
                                    @if ($YOUTUBE)
                                        <a target="_blank" href="{{ $YOUTUBE }}" class="footer__social"
                                            rel="nofollow noopener">
                                            <svg width="28" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path
                                                    d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                                </path>
                                            </svg>
                                        </a>
                                    @endif
                                    @if ($INSTAGRAM)
                                        <a target="_blank" href="{{ $INSTAGRAM }}" class="footer__social"
                                            rel="nofollow noopener">
                                            <svg width="23" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path
                                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                                </path>
                                            </svg>
                                        </a>
                                    @endif
                                    @if ($LINKEDIN)
                                        <a target="_blank" href="{{ $LINKEDIN }}" class="footer__social"
                                            rel="nofollow noopener">
                                            <svg width="21" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path
                                                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                                </path>
                                            </svg>
                                        </a>
                                    @endif
                                    @if ($TIKTOK)
                                        <a target="_blank" href="{{ $TIKTOK }}" class="footer__social"
                                            rel="nofollow noopener">
                                            <svg width="20" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2859 3333"
                                                shape-rendering="geometricPrecision"
                                                text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                                fill-rule="evenodd" clip-rule="evenodd">
                                                <path
                                                    d="M2081 0c55 473 319 755 778 785v532c-266 26-499-61-770-225v995c0 1264-1378 1659-1932 753-356-583-138-1606 1004-1647v561c-87 14-180 36-265 65-254 86-398 247-358 531 77 544 1075 705 992-358V1h551z">
                                                </path>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                                <div class="footer__col ">
                                    @if ($bocongthuong_link)
                                    <div class="d-flex align-items-center mt-4 box-cert">
                                        <a href="{{$bocongthuong_link}}"
                                            class="himg mr-4 cert-img" target="_blank" rel="nofollow noopener">
                                            <img width="132" height="50"
                                                src="{{ asset('image/bocongthuong.webp') }}"
                                                data-lazy-srcset="{{ asset('image/bocongthuong.webp') }} 576w, {{ asset('image/bocongthuong.webp') }} 992w, {{ asset('image/bocongthuong.webp') }} 1440w"
                                                alt="Bộ công thương"
                                                data-lazy-src="{{ asset('image/bocongthuong.webp') }}"
                                                data-ll-status="loaded" class="entered lazyloaded"
                                                srcset="{{ asset('image/bocongthuong.webp') }} 576w, {{ asset('image/bocongthuong.webp') }} 992w, {{ asset('image/bocongthuong.webp') }} 1440w"><noscript><img
                                                    width="132" height="50"
                                                    src="{{ asset('image/bocongthuong.webp') }}"
                                                    srcset="{{ asset('image/bocongthuong.webp') }} 576w, {{ asset('image/bocongthuong.webp') }} 992w, {{ asset('image/bocongthuong.webp') }} 1440w"
                                                    alt="Bộ công thương"></noscript>
                                        </a>
                                    </div>
                                    @endif
                                 
                                    <div class="payment text-start mt-3">
                                        <b>Chấp nhận thanh toán</b>
                                        <div class="d-flex flex-wrap ">
                                            <img src="{{asset('image/visa.png')}}" alt="visa-payment" width="70" height="50" style="margin-right: 5px;">
                                            <img src="{{asset('image/master.png')}}" alt="master-payment" width="70" height="50" style="margin-right: 5px;">
                                            <img src="{{asset('image/paypal.png')}}" alt="paypal-payment" width="70" height="50" style="margin-right: 5px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="footer__col" style="margin-left: 50px;">
                <div class="footer-mobile-hidden">
                    <div class="footer__title">Kết nối với chúng tôi</div>

                    <div class="d-flex flex-wrap">
                        @if ($FACEBOOK)
                            <a target="_blank" href="{{ $FACEBOOK }}" class="footer__social"
                                rel="nofollow noopener">
                                <svg width="15" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 320 512">
                                    <path
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                    </path>
                                </svg>
                            </a>
                        @endif
                        @if ($YOUTUBE)
                            <a target="_blank" href="{{ $YOUTUBE }}" class="footer__social"
                                rel="nofollow noopener">
                                <svg width="28" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                    </path>
                                </svg>
                            </a>
                        @endif
                        @if ($INSTAGRAM)
                            <a target="_blank" href="{{ $INSTAGRAM }}" class="footer__social"
                                rel="nofollow noopener">
                                <svg width="23" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg>
                            </a>
                        @endif
                        @if ($LINKEDIN)
                            <a target="_blank" href="{{ $LINKEDIN }}" class="footer__social"
                                rel="nofollow noopener">
                                <svg width="21" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                    </path>
                                </svg>
                            </a>
                        @endif
                        @if ($TIKTOK)
                            <a target="_blank" href="{{ $TIKTOK }}" class="footer__social"
                                rel="nofollow noopener">
                                <svg width="20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 2859 3333" shape-rendering="geometricPrecision"
                                    text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                    fill-rule="evenodd" clip-rule="evenodd">
                                    <path
                                        d="M2081 0c55 473 319 755 778 785v532c-266 26-499-61-770-225v995c0 1264-1378 1659-1932 753-356-583-138-1606 1004-1647v561c-87 14-180 36-265 65-254 86-398 247-358 531 77 544 1075 705 992-358V1h551z">
                                    </path>
                                </svg>
                            </a>
                        @endif
                    </div>
                    <div class="footer__col non-view-mobile mt-5">
                        @if ($bocongthuong_link)
                        <div class="d-flex align-items-center mt-4 box-cert">
                            <a href="{{$bocongthuong_link}}"
                                class="himg mr-4 cert-img" target="_blank" rel="nofollow noopener">
                                <img width="132" height="50"
                                    src="{{ asset('image/bocongthuong.webp') }}"
                                    data-lazy-srcset="{{ asset('image/bocongthuong.webp') }} 576w, {{ asset('image/bocongthuong.webp') }} 992w, {{ asset('image/bocongthuong.webp') }} 1440w"
                                    alt="Bộ công thương"
                                    data-lazy-src="{{ asset('image/bocongthuong.webp') }}"
                                    data-ll-status="loaded" class="entered lazyloaded"
                                    srcset="{{ asset('image/bocongthuong.webp') }} 576w, {{ asset('image/bocongthuong.webp') }} 992w, {{ asset('image/bocongthuong.webp') }} 1440w"><noscript><img
                                        width="132" height="50"
                                        src="{{ asset('image/bocongthuong.webp') }}"
                                        srcset="{{ asset('image/bocongthuong.webp') }} 576w, {{ asset('image/bocongthuong.webp') }} 992w, {{ asset('image/bocongthuong.webp') }} 1440w"
                                        alt="Bộ công thương"></noscript>
                            </a>
                        </div>
                        @endif
                        <div class="payment text-start mt-3">
                            <b>Chấp nhận thanh toán</b>
                            <div class="d-flex flex-wrap ">
                                <img src="{{asset('image/visa.png')}}" alt="visa-payment" width="70" height="50" style="margin-right: 5px;">
                                <img src="{{asset('image/master.png')}}" alt="master-payment" width="70" height="50" style="margin-right: 5px;">
                                <img src="{{asset('image/paypal.png')}}" alt="paypal-payment" width="70" height="50" style="margin-right: 5px;">
                            </div>
                        </div>
                        {{-- <div class="d-flex policy" >
                            <a style="color:rgb(149, 149, 224) !important;" href="https://mikotech.vn/chinh-sach/dieu-khoan-dich-vu/" rel="nofollow">
            <span>Điều khoản sử dụng</span>
          </a>
            </div> --}}
                    </div>
                </div>
                {{-- <div class="footer__title">Dịch vụ
                    <span class="footer-xemthem-btn" data-id="4">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330"
                            style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_"
                                d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                        </svg>
                    </span>
                </div> --}}

            </div>
        </div>
        <div class="footer__dkkd">
            <div class="footer__grid">
                <div class="footer__col footer__col--2" style="padding-left: 5px;">
                    <div class="" style="font-weight: 500;">{{ $companyNameValue }}</div>
                    <div class="bct" style="font-weight: 500;">{{ $DKKD }}</div>
                    {{-- <div class="bct">Trụ sở chính: {{ $ADDRESS }}</div> --}}
                    {{-- <div class="bct">Văn phòng : {{$VANPHONG}}</div>  --}}
                </div>

            </div>
        </div>
    </div>
</div>
</div>
