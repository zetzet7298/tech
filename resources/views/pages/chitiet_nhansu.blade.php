<x-base-layout>
    @section('title')
        <title>Dịch Vụ Tư Vấn Pháp Luật | {{ $companyNameValue }}</title>
    @endsection
    @php
    
        // $seoMeta = new \App\Models\SeoMeta();
        // $seoMeta->meta_title = 'Thông tin chi tiết '. $item->prefix_name. ' ' .$item->first_name;
        // $seoMeta->meta_description = '';
        // $seoMeta->meta_url = $item->meta_url;
        // $seoMeta->meta_keywords = $item->meta_keywords;
        // $seoMeta->meta_site_name = $item->meta_site_name;
        // $seoMeta->meta_image_alt = $item->meta_image_alt;
        // $seoMeta->og_title = $item->og_title;
        // $seoMeta->og_description = $item->og_description;
        // $seoMeta->og_url = $item->og_url;
        // $seoMeta->og_image = $item->og_image;
        // $seoMeta->og_type = $item->og_type;
        // $seoMeta->twitter_title = $item->twitter_title;
        // $seoMeta->twitter_description = $item->twitter_description;
        // $seoMeta->twitter_image = $item->twitter_image;
        // $seoMeta->canonical = $item->canonical;
        // $seoMeta->meta_robots = $item->meta_robots;

    @endphp
    @section('meta')
    @include('pages.meta', ['seoMeta' => $item->seoMeta])
@endsection
    @php
        $settings = \App\Models\Setting::getByType('hr');
        $banner = $settings['banner']['value'];
        $h1 = $settings['h1']['value'];
        $banner_mobile = $settings['banner_mobile']['value'];
        $title = $settings['title']['value'];
        $description = $settings['description']['value'];

    @endphp
    @section('styles')
    @endsection
    <div class="center-layout">
        <iframe class=" left-0 top-0 w-full h-full iframe-project" style="height: 800px;"
            {{-- src="{{ route('nhansu.frame', ['id' => $id]) }}"></iframe> --}}
            src="{{ route('nhansu.frame', ['slug' => $item->slug ?? '1']) }}"></iframe>
    </div>



    <div class="check_screen_height fixed left-0 top-0 w-[1px] z-[-1] h-[100vh]"></div>
    @section('scripts')
        {{-- <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"" id=" aos-js-js"></script>
        <script src="{{ asset('assets/js/nhansu.js') }}" data-minify="1" defer></script> --}}
        {{-- <script>
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
                    document.getElementById("specialties").textContent = employee.specialties.map(s => s.name).join(
                        ', ');
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
        </script> --}}
    @endsection
</x-base-layout>
