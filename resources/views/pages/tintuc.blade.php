<x-base-layout>
    @section('title')
        <title>Bài viết | {{ $companyNameValue }}</title>
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
    @endphp
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
                    <h2 class="design-banner-title">{{ $title }}</h2>
                    <h3 class="design-banner-description">{{ $description }}</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="display_mobile">
        <div class="center-layout-2 pd-20 first-section-blog">
            @if ($items->isNotEmpty())
            @for ($i = 1; $i < count($items); $i++)
            <div class="blog-items pd075 mb-5">

                    <div class="blog-items-1-line-first">
                        <a href="{{ route('tintuc.detail', ['slug' => $items[$i]->slug.'.html']) }}"
                            class="img blog-items__image">
                            <img width="640" height="360" alt="{{ $items[$i]->title }}"
                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20640%20360'%3E%3C/svg%3E"
                                data-lazy-src="{{ display_image($items[$i]->thumbnail) }}"><noscript>
                                <img width="640" height="360" alt="{{ $items[$i]->title }}"
                                    src="{{ display_image($items[$i]->thumbnail) }}"></noscript>
                        </a>
                        <h2 class="blog-items__name">
                            <a
                                href="{{ route('tintuc.detail', ['slug' => $items[$i]->slug.'.html']) }}">{{ $items[$i]->title }}</a>
                        </h2>
                         <div style="display: flex; align-items: center;" class="blog-group-1__date">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd"/>
                              </svg>
                            <span style="margin-left: 5x; margin-right:15px;">{{ $items[0]->category->name }}</span>
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z" clip-rule="evenodd"/>
                            </svg>
                            <span style="margin-left: 5x; margin-right:15px;">{{ $items[0]->author ? $items[0]->author->name : '' }}</span>
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                              </svg>
                              
                            <span style="margin-left: 5x;">{{ formatDate($items[0]->created_at) }}</span>
                        </div>
                        <h3 class="blog-group-1__desc" style="height: 150px; overflow:hidden;">
                            <p>{!! $items[$i]->summary !!}</p>
                        </h3>
                       
                    </div>
   
                {{-- <ul class="post-related">
                    @for ($i = 1; $i < count($items); $i++)
                        <li>
                            <a class="img post-related__image"
                                href="{{ route('tintuc.detail', ['slug' => $items[$i]->slug.'.html']) }}">
                                <img width="640" height="360"
                                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20640%20360'%3E%3C/svg%3E"
                                    data-lazy-src="{{ display_image($items[$i]->thumbnail) }}"><noscript><img
                                        alt="{{ $items[$i]->title }}" width="640" height="360"
                                        src="{{ display_image($items[$i]->thumbnail) }}"></noscript>
                            </a>
                            <div class="post-related__info">
                                <a class="post-related__name"
                                    href="{{ route('tintuc.detail', ['slug' => $items[$i]->slug.'.html']) }}"
                                    title="{{ $items[$i]->title }}">
                                    <h2>{{ $items[$i]->title }}<h2>
                                </a>
                                <div class="post-related__date"><svg width="10" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z" />
                                    </svg> {{ formatDate($items[$i]->created_at) }}</div>
                            </div>

                        </li>
                    @endfor --}}
                </ul>
            </div>
            @endfor
            @endif
        </div>

        <div class="center-layout-2">
            <div class="post-detail__sub-title">Danh mục</div>
            <div class="mt-text-center">
                @foreach ($categories as $category)
                    <div class="mt-text-center--item"><a
                            href="{{ route('tintuc.category', ['slug' => $category->slug.'.html']) }}">{{$category->name}}</a>
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
                                <a href="{{ route('tintuc.detail', ['slug' => $items[0]->slug.'.html']) }}"
                                    class="blog-group-fullwidth-img">
                                    <img width="800" alt="{{ $items[0]->title }}" height="500"
                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20800%20500'%3E%3C/svg%3E"
                                        data-lazy-src="{{ display_image($items[0]->thumbnail) }}"><noscript>
                                        <img width="800" height="500" alt="{{ $items[0]->title }}"
                                            src="{{ display_image($items[0]->thumbnail) }}"></noscript>
                                </a>
                                <div class="blog-group-fullwidth-content">
                                    <h2 class="blog-group-1__name">
                                        <a
                                            href="{{ route('tintuc.detail', ['slug' => $items[0]->slug.'.html']) }}">{{ $items[0]->title }}</a>
                                    </h2>
                                    <div style="display: flex; align-items: center;" class="blog-group-1__date">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd"/>
                                          </svg>
                                        <span style="margin-left: 5x; margin-right:15px;">{{ $items[0]->category->name }}</span>
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z" clip-rule="evenodd"/>
                                        </svg>
                                        <span style="margin-left: 5x; margin-right:15px;">{{ $items[0]->author ? $items[0]->author->name : '' }}</span>
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                          </svg>
                                          
                                        <span style="margin-left: 5x;">{{ formatDate($items[0]->created_at) }}</span>
                                    </div>
                         
                                    
{{--                       
                                        <span></span><span>{{ $items[0]->author ? $items[0]->author->name : '' }}</span>
                                        <span></span><span>{{ formatDate($items[0]->created_at) }}</span> --}}
                                    <h3 class="blog-group-1__desc">
                                        <p>{!! $items[0]->summary !!}</p>
                                    </h3>
                                </div>
                            </div>
                        @endif
                        @for ($i = 1; $i < count($items); $i++)
                            <div class="blog-group-fullwidth-1 d-flex justify-content-between">
                                <a href="{{ route('tintuc.detail', ['slug' => $items[$i]->slug.'.html']) }}"
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
                                    <h2 class="blog-group-2-items__name"><a
                                            href="{{ route('tintuc.detail', ['slug' => $items[$i]->slug.'.html']) }}">
                                            {{ $items[$i]->title }}</a></h2>
                                            <div style="display: flex; align-items: center;" class="blog-group-1__date">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd"/>
                                                  </svg>
                                                <span style="margin-left: 5x; margin-right:15px;">{{ $items[0]->category->name }}</span>
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.796 1.263l-2.533 2.534A4 4 0 0 1 5 8Zm4.06 5H7a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h2.172a2.999 2.999 0 0 1-.114-1.588l.674-3.372a3 3 0 0 1 .82-1.533L9.06 13Zm9.032-5a2.907 2.907 0 0 0-2.056.852L9.967 14.92a1 1 0 0 0-.273.51l-.675 3.373a1 1 0 0 0 1.177 1.177l3.372-.675a1 1 0 0 0 .511-.273l6.07-6.07a2.91 2.91 0 0 0-.944-4.742A2.907 2.907 0 0 0 18.092 8Z" clip-rule="evenodd"/>
                                                </svg>
                                                <span style="margin-left: 5x; margin-right:15px;">{{ $items[0]->author ? $items[0]->author->name : '' }}</span>
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                                  </svg>
                                                  
                                                <span style="margin-left: 5x;">{{ formatDate($items[0]->created_at) }}</span>
                                            </div>
                                            <h3 class="blog-group-1__desc" style="height: 130px; overflow:hidden;">
                                                <p>{!! $items[$i]->summary !!}</p>
                                            </h3>
                                    {{-- <div class="blog-group-1__date">{{ formatDate($items[$i]->created_at) }}</div> --}}
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
                                            href="{{ route('tintuc.category', ['slug' => $category->slug.'.html']) }}">{{ $category->name }}</a>
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
