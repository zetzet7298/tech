<x-base-layout>
    @section('title')
        <title>Liên Hệ {{ $companyNameValue }}</title>
    @endsection
    {{-- @php
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
    @endphp --}}

    <div class="hero">
        {{-- <h1 class="d-none">{{ $h1 }}</h1> --}}
        <div class="center-layout">
            <div class="design-banner-contain">
                <img width="1230" height="540"
                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201230%20540'%3E%3C/svg%3E"
                    alt="banner" data-lazy-src="{{ asset('image/COVER-LIEN-HE.webp') }}"><noscript><img width="1230"
                        height="540" src="{{ asset('image/COVER-LIEN-HE.webp') }}" alt="banner"></noscript>
                <div class="design-banner-info">
                    <h1 class="design-banner-title">Liên hệ</h1>
                    <h2 class="design-banner-description">HÃY ĐỂ CHÚNG TÔI <br> KẾT NỐI VÀ ĐỒNG HÀNH <br> CÙNG BẠN!
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="center-layout-2">
        <div class="contact-group-1">
            <div class="contact-group-1__form">
                <h3 class="contact-group-1__title">Chúng tôi sẽ liên hệ với bạn theo thông tin bạn gửi, vui lòng điền
                    vào khung
                    thông tin bên dưới.</h3>

                <div class="wp-block-contact-form-7-contact-form-selector">
                    <div class="wpcf7 no-js" id="wpcf7-f64-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form action="{{ route('contact.fe.store') }}" method="post" class="wpcf7-form init"
                            aria-label="Contact form" novalidate="novalidate" data-status="init">
                            @csrf
                            <p>
                                <span class="wpcf7-form-control-wrap" data-name="fullname">
                                    <input size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                        aria-required="true" aria-invalid="false" placeholder="Họ và tên"
                                        value="{{ old('fullname') }}" type="text" required name="fullname" />
                                    @if ($errors->has('fullname'))
                                        <span class="text-danger">{{ $errors->first('fullname') }}</span>
                                    @endif
                                </span>
                                <span class="wpcf7-form-control-wrap" data-name="phone">
                                    <input size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required check-phone"
                                        aria-required="true" aria-invalid="false" placeholder="Số điện thoại"
                                        value="{{ old('phone') }}" type="text" name="phone" required />
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </span>
                                <span class="wpcf7-form-control-wrap" data-name="email">
                                    <input size="40"
                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                        aria-required="true" aria-invalid="false" placeholder="Email"
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
        </div>
    </div>

    <div class="contact-group-2">
        <div class="center-layout-2">
            <div class="contact-group-2__content">
                <div class="contact-group-2__name">Email</div>
                <div class="contact-group-2__desc">
                    <span>{{ $EMAIL }}</span>
                </div>
                <div class="contact-group-2__name">Hotline</div>
                <div class="contact-group-2__desc">{{ $PHONE }}</div>
                <div class="contact-group-2__name">Trụ sở</div>
                <div class="contact-group-2__desc">{{ $ADDRESS }}
                </div>
            </div>
            <div class="contact-group-2__map">
                {{-- <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.549342791322!2d106.68165830000001!3d10.7691731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fc10c53d2cb%3A0x5d1b2e1dd64e4f2!2zVGhp4bq_dCBL4bq_IFdlYnNpdGUgQ2h1ecOqbiBOZ2hp4buHcCB8IEPDtG5nIFR5IE1pa28gVGVjaA!5e0!3m2!1svi!2s!4v1720620369176!5m2!1svi!2s" 
                width="600" height="450" style="border:0;" allowfullscreen="" 
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe> --}}
                {!! $GOOGLE_MAP !!}
                {{-- <iframe
                    src="{{$GOOGLE_MAP}}"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
            </div>
        </div>
    </div>
    <div class="check_screen_height fixed left-0 top-0 w-[1px] z-[-1] h-[100vh]"></div>
    @section('scripts')
        <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"" id=" aos-js-js"></script>
        <script src="{{ asset('assets/js/lienhe.js') }}" data-minify="1" defer></script>
    @endsection
</x-base-layout>
