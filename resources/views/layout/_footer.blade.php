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
                <a href="{{route('trangchu')}}" class="footer__logo footer__logo__mobile_hidden himg" rel="nofollow">
                    <img width="120" height="100" style="margin-left:5px;"
                                                src="{{ display_image($LOGO) }}" alt=""
                                                data-lazy-src="{{ display_image($LOGO) }}">
                </a>
                <span class=" footer__logo__mobile" data-id="0">
                    <span class="footer-xemthem-btn" data-id="5">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330"
                            style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_"
                                d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                        </svg>
                    </span>
                </span>
                <div class="footer-mobile-hidden" id="footer-mobile-hidden-0">
                    <div class="footer-mobile-hidden--content">
                        <div class="footer__desc">{{$MISSION}}</div>

                    </div>
                </div>
                <div class="footer__title mt-5-">Trụ sở chính
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
                                href="{{$GOOGLE_MAP}}">{{$ADDRESS}}</a></div>
                        <div><b>Số điện thoại: </b>{{$PHONE}}</div>
                        <div><b>Email: </b>
                                <span>{{$EMAIL}}</span>
                        </div>
                        <div><b>Thời gian hoạt động: {{$TIME_WORKING}}</div>
                    </div>
                </div>
            </div>
            <div class="footer__col">
                <div class="footer__title">Dịch vụ
                    <span class="footer-xemthem-btn" data-id="4">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 330"
                            style="enable-background:new 0 0 330 330;" xml:space="preserve">
                            <path id="XMLID_225_"
                                d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" />
                        </svg>
                    </span>
                </div>
                <div class="footer-mobile-hidden" id="footer-mobile-hidden-4">
            </div>
            <div class="footer__col footer__col--form footer-mobile-hidden">
                <div class="footer__title">Gửi yêu cầu báo giá</div>
                <p class="mb-4">{{$PRICE_QUOTE}}</p>
                <div class="quote-form-footer">

                    <div class="wpcf7 no-js" id="wpcf7-f5200-p264-o2" lang="en-US" dir="ltr">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form id="footer-form" action="{{ route('contact.fe.store') }}" method="post" class="wpcf7-form init"
                            aria-label="Contact form" novalidate="novalidate" data-status="init">
                            @csrf
                            <p><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40"
                                required
                                        class="wpcf7-form-control wpcf7-text "
                                        aria-required="true" aria-invalid="false" placeholder="Họ tên"
                                        value="" type="text" name="fullname" />
                                        @if ($errors->has('fullname'))
                                        <span class="text-danger">{{ $errors->first('fullname') }}</span>
                                    @endif
                                    </span><span
                                    class="wpcf7-form-control-wrap" data-name="your-email"><input size="40"
                                    required
                                        class="wpcf7-form-control wpcf7-email  wpcf7-text wpcf7-validates-as-email"
                                        aria-required="true" aria-invalid="false" placeholder="Email" value=""
                                        type="email" name="email" />
                                        @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </span><span
                                    class="wpcf7-form-control-wrap" data-name="your-phone"><input
                                    required
                                        class="wpcf7-form-control wpcf7-number  wpcf7-validates-as-number check-phone"
                                        aria-required="true" aria-invalid="false" placeholder="Số điện thoại"
                                        value="" type="number" name="phone" />
                                        @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif</span><span
                                    class="wpcf7-form-control-wrap" data-name="menu-63">
                                </span><span class="wpcf7-form-control-wrap" data-name="message">
                                    <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                        placeholder="Nội dung tin nhắn" name="message"></textarea>
                                </span><input
                                    class="wpcf7-form-control wpcf7-submit has-spinner hbtn submit-baogia-ftm"
                                    type="submit" value="Gửi" />
                            </p>
                            <p style="display: none !important;"><label>&#916;
                                    <textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea>
                                </label><input type="hidden" id="ak_js_2" name="_wpcf7_ak_js" value="45" />
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
                        <p class="mb-4">{{$PRICE_QUOTE}}</p>
                        <div class="quote-form-footer">

                            <div class="wpcf7 no-js" id="wpcf7-f1029-p264-o3" lang="en-US" dir="ltr">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form id="footer-form" action="{{ route('contact.fe.store') }}" method="post" class="wpcf7-form init"
                                aria-label="Contact form" novalidate="novalidate" data-status="init">
                                @csrf
                                <p><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40"
                                    required
                                            class="wpcf7-form-control wpcf7-text "
                                            aria-required="true" aria-invalid="false" placeholder="Họ tên"
                                            value="" type="text" name="fullname" />
                                            @if ($errors->has('fullname'))
                                            <span class="text-danger">{{ $errors->first('fullname') }}</span>
                                        @endif
                                        </span><span
                                        class="wpcf7-form-control-wrap" data-name="your-email"><input size="40"
                                        required
                                            class="wpcf7-form-control wpcf7-email  wpcf7-text wpcf7-validates-as-email"
                                            aria-required="true" aria-invalid="false" placeholder="Email" value=""
                                            type="email" name="email" />
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </span><span
                                        class="wpcf7-form-control-wrap" data-name="your-phone"><input
                                        required
                                            class="wpcf7-form-control wpcf7-number  wpcf7-validates-as-number check-phone"
                                            aria-required="true" aria-invalid="false" placeholder="Số điện thoại"
                                            value="" type="number" name="phone" />
                                            @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif</span><span
                                        class="wpcf7-form-control-wrap" data-name="menu-63">
                                    </span><span class="wpcf7-form-control-wrap" data-name="message">
                                        <textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                            placeholder="Nội dung tin nhắn" name="message"></textarea>
                                    </span><input
                                        class="wpcf7-form-control wpcf7-submit has-spinner hbtn submit-baogia-ftm"
                                        type="submit" value="Gửi" />
                                </p>
                                <p style="display: none !important;"><label>&#916;
                                        <textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea>
                                    </label><input type="hidden" id="ak_js_2" name="_wpcf7_ak_js" value="45" />
                                </p>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__dkkd center-layout">
        <div class="footer__grid">
            <div class="footer__col footer__col--2">
                <div class="">Công ty {{$companyNameValue}}</div>
                <div class="bct">{{$DKKD}}</div>
                <div class="bct">Trụ sở chính: {{$ADDRESS}}</div>
                <!-- <div class="bct">Văn phòng Singapore: 68 Circular Road, #02-01, Singapore</div> -->
            </div>
            <div class="footer__col non-view-mobile">
            </div>
        </div>
    </div>
</div>
