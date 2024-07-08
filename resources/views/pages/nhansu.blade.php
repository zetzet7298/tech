<x-base-layout>
    @php
        $settings = \App\Models\Setting::getByType('hr');
        $banner = $settings['banner']['value'];
        $banner_mobile = $settings['banner_mobile']['value'];
        $title = $settings['title']['value'];
        $description = $settings['description']['value'];

    @endphp
    <div class="hero">
        <div class="center-layout">
            <div class="center-layout">
                <div class="design-banner-contain">
                    <div class="himg banner--desktop">
                        <img width="1230" height="540"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201230%20540'%3E%3C/svg%3E"
                            alt="Banner Nhân sự" data-lazy-src="{{ display_image($banner) }}"><noscript><img width="1230"
                                height="540" src="{{ display_image($banner) }}" alt="Banner Nhân sự"></noscript>
                    </div>
                    <div class="himg banner--mobile">
                        <img width="375" height="637" class="aos-init aos-animate entered lazyloaded"
                            data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0"
                            src="{{ display_image($banner_mobile) }}"
                            alt="banner"
                            data-lazy-src="{{ display_image($banner_mobile) }}"
                            data-ll-status="loaded"><noscript><img width="375" height="637" class=""
                                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" data-aos-delay="0"
                                src="{{ display_image($banner_mobile) }}"
                                alt="banner"></noscript>
                    </div>
                    <div class="design-banner-info">
                        <div class="design-banner-title">{{$title}}</div>
                        <div class="design-banner-description">{{$description}}</div>
                    </div>
                </div>
            </div>
    </div>
    <div class="center-layout-2">
        @foreach($items as $item)
        <div class="team-box-1">
            <div class="team-box-1__image img h-fadeOutLeft">
                <img width="401" height="511"
                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20401%20511'%3E%3C/svg%3E"
                    alt="Nhân sự"
                    data-lazy-src="{{display_image($item->photo)}}"><noscript><img
                        width="401" height="511"
                        src="{{display_image($item->item)}}"
                        alt="Nhân sự"></noscript>
            </div>
            <div class="team-box-1__right">
                <div class="team-box-1__title h-fadeOutDown">{{$item->first_name}}</div>
                {{-- <div class="team-box-1__name h-fadeOutDown">{{$item->name}}</div> --}}
                <div class="team-box-1__desc h-fadeOutDown">
                    {{ implode(', ', $item->specialties->pluck('name')->toArray()) }}
                </div>
                <div class="d-flex justify-content-start team-box-1__view h-fadeOutDown">
                    @php $item->avatar=display_image($item->photo) @endphp
                    <a data-fancybox data-src="#contact-modal" class="hbtn hbtn--white" id="openModalBtn" data-employee="{{ $item }}">Xem chi tiết</a>
                    {{-- <a href="javascript:;" onclick="scrollToElement('team-box-3')" class="effect-link hbtn">
                        <span>Xem chi tiết</span>
                    </a> --}}
                </div>
            </div>
        </div>
        @endforeach
        <div id="contact-modal" class="h-fancybox" style="width: 100%">
            <div class="h-fancybox__header">Thông tin nhân sự</div>
            <div class="h-fancybox__body">

                <div class="wpcf7 no-js" id="wpcf7-f64-p264-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                        <ul></ul>
                    </div>
                    <div><img
                        id="avatar"
                        width="100" height="100"
                        alt="Tuyển dụng"></div>
                    <div><b>Email: </b><span id="email"></span></div>
                    <div><b>Điện thoại: </b><span id="phone"></span></div>
                    <div><b>Chuyên ngành: </b><span id="specialties"></span></div>
                    <div><b>Giới thiệu bản thân: </b><span id="introduction"></span></div>
                </div>
                </div>
            </div>
        </div>
    </div>



    <div class="check_screen_height fixed left-0 top-0 w-[1px] z-[-1] h-[100vh]"></div>
    @section('scripts')
        <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"" id=" aos-js-js"></script>
        <script src="{{ asset('assets/js/nhansu.js') }}" data-minify="1" defer></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("contact-modal");
    var btn = document.getElementById("openModalBtn");
    var span = document.querySelector(".close"); // Thêm class 'close' vào nút đóng modal nếu có
    var employeeData = btn.getAttribute('data-employee');

    btn.onclick = function() {
        var employee = JSON.parse(employeeData);
        document.getElementById("avatar").src = employee.avatar;
        document.getElementById("email").textContent = employee.email;
        document.getElementById("phone").textContent = employee.phone;
        document.getElementById("specialties").textContent = employee.specialties.map(s => s.name).join(', ');
        document.getElementById("introduction").textContent = employee.introduction;

        modal.style.display = "block";
    }

    if (span) {
        span.onclick = function() {
            modal.style.display = "none";
        }
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});

        </script>
    @endsection
</x-base-layout>
