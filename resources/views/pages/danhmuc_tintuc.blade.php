<x-base-layout>
    @section('title')
        <title>{{ $item->name }} | {{ $companyNameValue }}</title>
    @endsection
    @section('styles')
        {{-- <style>
        .right-post-content {
    position: sticky;
    top: 0; /* Đặt khoảng cách từ đỉnh của trang đến phần tử */

}

      </style> --}}
    @endsection
    @php
        $settings = \App\Models\Setting::getByType('post');
        $title = $settings['title']['value'];
        $description = $settings['description']['value'];
        $banner = $settings['banner']['value'];
        $h1 = $settings['h1']['value'];
        $banner_mobile = $settings['banner_mobile']['value'];
        $seoMeta = \App\Models\Seo::where('canonical', route('tintuc'))->first();
    @endphp
    @section('meta')
        @include('pages.page_meta', ['seoMeta' => $seoMeta])
    @endsection
    <div class="hero">
        <h1 class="d-none">{{ $h1 }}</h1>
        <div class="center-layout">
            <div class="design-banner-contain">
                <div class="himg banner--desktop">
                    <img width="1230" height="540" class="gs_reveal"
                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201230%20540'%3E%3C/svg%3E"
                        alt="banner" data-lazy-src="{{ display_image($banner) }}"><noscript><img width="1230"
                            height="540" class="gs_reveal" src="{{ display_image($banner) }}"
                            alt="banner"></noscript>
                </div>
                <div class="himg banner--mobile">
                    <img width="375" height="637" class="gs_reveal"
                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20375%20637'%3E%3C/svg%3E"
                        alt="banner" data-lazy-src="{{ display_image($banner_mobile) }}"><noscript><img width="375"
                            height="637" class="gs_reveal" src="{{ display_image($banner_mobile) }}"
                            alt="banner"></noscript>
                </div>
                <div class="design-banner-info">
                    <div class="design-banner-title">{{ $title }}</div>
                    <div class="design-banner-description">{{ $description }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="display_mobile">
        <div class="center-layout-2 pd-20 first-section-blog">
            <div class="blog-items pd075">
                @if ($items->isNotEmpty())
                    <div class="blog-items-1-line-first">
                        <a href="{{ route('tintuc.detail', ['slug' => $items[0]->slug]) }}"
                            class="img blog-items__image">
                            <img width="640" height="360" alt="{{ $items[0]->title }}"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20640%20360'%3E%3C/svg%3E"
                                data-lazy-src="{{ display_image($items[0]->thumbnail) }}"><noscript>
                                <img width="640" height="360" alt="{{ $items[0]->title }}"
                                    src="{{ display_image($items[0]->thumbnail) }}"></noscript>
                        </a>
                        <h4 class="blog-items__name">
                            <a
                                href="{{ route('tintuc.detail', ['slug' => $items[0]->slug]) }}">{{ $items[0]->title }}</a>
                        </h4>
                        <div class="blog-items__date">
                            <svg width="10" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512">
                                <path
                                    d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z" />
                            </svg>
                            {{ formatDate($items[0]->created_at) }}
                        </div>
                    </div>
                @endif
                <ul class="post-related">
                    @for ($i = 1; $i < count($items); $i++)
                        <li>
                            <a class="img post-related__image"
                                href="{{ route('tintuc.detail', ['slug' => $items[$i]->slug]) }}">
                                <img width="640" height="360"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20640%20360'%3E%3C/svg%3E"
                                    data-lazy-src="{{ display_image($items[$i]->thumbnail) }}"><noscript><img
                                        alt="{{ $items[$i]->title }}" width="640" height="360"
                                        src="{{ display_image($items[$i]->thumbnail) }}"></noscript>
                            </a>
                            <div class="post-related__info">
                                <a class="post-related__name"
                                    href="{{ route('tintuc.detail', ['slug' => $items[$i]->slug]) }}"
                                    title="{{ $items[$i]->title }}">{{ $items[$i]->title }}</a>
                                <div class="post-related__date"><svg width="10" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z" />
                                    </svg> {{ formatDate($items[$i]->created_at) }}</div>
                            </div>

                        </li>
                    @endfor
                </ul>
            </div>
        </div>

        <div class="center-layout-2">
            <div class="post-detail__sub-title">Danh mục</div>
            <div class="mt-text-center">
                @foreach ($categories as $category)
                    <div class="mt-text-center--item"><a
                            href="{{ route('tintuc.category', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="center-layout-2 pd-20">


        </div>

    </div>

    <div class="display_desktop">
        <div class="center-layout mgt-2">
            <div class="d-flex justify-content-between">
                <div class="left-post-content">
                    <div class="">
                        @if ($items->isNotEmpty())
                            <div class="blog-group-fullwidth">
                                <a href="{{ route('tintuc.detail', ['slug' => $items[0]->slug]) }}"
                                    class="blog-group-fullwidth-img">
                                    <img width="800" alt="{{ $items[0]->title }}" height="500"
                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20500'%3E%3C/svg%3E"
                                        data-lazy-src="{{ display_image($items[0]->thumbnail) }}"><noscript>
                                        <img width="800" height="500" alt="{{ $items[0]->title }}"
                                            src="{{ display_image($items[0]->thumbnail) }}"></noscript>
                                </a>
                                <div class="blog-group-fullwidth-content">
                                    <h3 class="blog-group-1__name">
                                        <a
                                            href="{{ route('tintuc.detail', ['slug' => $items[0]->slug]) }}">{{ $items[0]->title }}</a>
                                    </h3>
                                    <div class="blog-group-1__date">{{ formatDate($items[0]->created_at) }}</div>
                                    <div class="blog-group-1__desc">
                                        <p>{{ $items[0]->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @for ($i = 1; $i < count($items); $i++)
                            <div class="blog-group-fullwidth-1 d-flex justify-content-between">
                                <a href="{{ route('tintuc.detail', ['slug' => $items[$i]->slug]) }}"
                                    class="img blog-group-fullwidth-1-img">
                                    <img width="800" height="500"
                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20500'%3E%3C/svg%3E"
                                        alt="{{ $items[$i]->title }}"
                                        data-lazy-src="{{ display_image($items[$i]->thumbnail) }}"><noscript>
                                        <img width="800" height="500"
                                            src="{{ display_image($items[$i]->thumbnail) }}"
                                            alt="{{ $items[$i]->title }}"></noscript>
                                </a>
                                <div class=" blog-group-fullwidth-1-info">
                                    <h4 class="blog-group-2-items__name"><a
                                            href="{{ route('tintuc.detail', ['slug' => $items[$i]->slug]) }}">
                                            {{ $items[$i]->title }}</a></h4>
                                    <div class="blog-group-1__date">{{ formatDate($items[$i]->created_at) }}</div>
                                </div>
                            </div>
                        @endfor
                        <ul class="pagination">
                            {{ $items->links('vendor.pagination.custom') }}
                        </ul>
                    </div>
                </div>
                <div class="right-post-content">



                    {{-- <div class="post-detail__sub-title">Tìm kiếm</div>
                    <div class="blog-items-desk-mt pd075 mgb-2 bg-none">
                        <div class="">
                          <p>Nhập từ khóa bạn muốn tìm kiếm tại đây nhé!</p>
                          <form class="not-found__form mb-0" action="https://mikotech.vn/" method="GET" role="form">
                            <input type="hidden" name="post_type" value="post">
                            <input type="text" name="s" placeholder="Từ khóa">
                            <button type="submit" class="hbtn"><span>Tìm kiếm</span></button>
                          </form>
                        </div>
                    </div> --}}

                    <div class='post-detail-service-list'>
                        <div class="post-detail__sub-title">Danh mục</div>
                        <div class="blog-items-desk-mt pd075 mgb-2">
                            <div class="">
                                @foreach ($categories as $category)
                                    <div class="mt-text-center--item-desktop">
                                        <a
                                            href="{{ route('tintuc.category', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="check_screen_height fixed left-0 top-0 w-[1px] z-[-1] h-[100vh]"></div>

        @section('scripts')
            <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"" id=" aos-js-js"></script>
            <script src="{{ asset('assets/js/tintuc.js') }}" data-minify="1" defer></script>
        @endsection
</x-base-layout>
