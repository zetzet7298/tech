<x-base-layout>
    @section('styles')
        <style>
            .header{
                background: var(--miko-gradient) !important;
            }
            .header__right #menu-menu-chinh>li>a{color:#fff}
        </style>
    @endsection
    @php
        // $settings = \App\Models\Setting::getByType('post');
        // $title = $settings['title']['value'];
        // $description = $settings['description']['value'];
        // $banner = $settings['banner']['value'];
        // $banner_mobile = $settings['banner_mobile']['value'];
    @endphp
    <div class="center-layout-2">
        <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
            <p><a href="{{route('trangchu')}}">Trang chủ</a><span class="separator"> &raquo; </span><a
                    href="{{route('tintuc')}}">Tin tức</a><span class="separator"> &raquo; </span><span
                    class="last">{{$item->title}}</span></p>
        </nav>
    </div>
    <div class="content">
        <div class="post-detail center-layout">
            <div class="post-detail__left">
                <article id="post-3253"
                    class="post-3253 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-kien-thuc-website category-website">

                    <h1 class="entry-title" style="font-weight: bolder; font-size:22px;">{{$item->title}}</h1> 
                    {{-- <a
                        class="post-detail__google-new"
                        href="https://news.google.com/publications/CAAqBwgKMJL0qwswj__DAw?hl=en-US&gl=US&ceid=US:en"
                        target="_blank" rel="nofollow"> --}}
                        {{-- <span>Theo dõi Miko Tech trên</span>
                        <img width="90" height="20"
                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2090%2020'%3E%3C/svg%3E"
                            alt="Google News"
                            data-lazy-src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/ico-google-new.png"><noscript><img
                                width="90" height="20"
                                src="https://mikotech.vn/wp-content/themes/mikotech/assets/images/ico-google-new.png"
                                alt="Google News"></noscript> --}}
                    </a>
                    <div class="entry-content">

                        <p style="font-weight: bold">{{$item->summary}}</p>
                            {!!$item->content!!}
{{-- 
                        <div class="post-views content-post post-3253 entry-meta">
                            <span class="post-views-icon dashicons dashicons-chart-bar"></span> <span
                                class="post-views-label">Post Views:</span> <span class="post-views-count">1.502</span>
                        </div> --}}
                    </div>
                    {{-- <div class="post-detail__author">

                        <span><svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24"
                                fill="currentColor" width="15" height="15">
                                <path
                                    d="M19,2H18V1a1,1,0,0,0-2,0V2H8V1A1,1,0,0,0,6,1V2H5A5.006,5.006,0,0,0,0,7V19a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V7A5.006,5.006,0,0,0,19,2ZM2,7A3,3,0,0,1,5,4H19a3,3,0,0,1,3,3V8H2ZM19,22H5a3,3,0,0,1-3-3V10H22v9A3,3,0,0,1,19,22Z" />
                                <circle cx="12" cy="15" r="1.5" />
                                <circle cx="7" cy="15" r="1.5" />
                                <circle cx="17" cy="15" r="1.5" />
                            </svg> 01.05.2024</span>
                        <b>Trần Tiến Duy</b>
                    </div> --}}

                </article>

                @section('scripts')
                    <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"" id=" aos-js-js"></script>
                    <script src="{{ asset('assets/js/tintuc.js') }}" data-minify="1" defer></script>
                @endsection
            </div>
            <div class="post-detail__right">
                <div class='post-detail-service-list'>
                    <div class="post-detail__sub-title">Danh mục</div>
                  <div class="blog-items-desk-mt pd075 mgb-2">
                    <div class="">
                      @foreach($categories as $category)
                  <div class="mt-text-center--item-desktop">
                    <a href="{{route('tintuc.category', ['slug' => $category->slug])}}">{{$category->name}}</a>
                  </div>
                  @endforeach
                  </div>
                    
                </div>
                  </div>
            </div>
        </div>
</x-base-layout>
