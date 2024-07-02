<x-base-layout>
    @section('styles')
        <style>
            img {
                max-width: 100%;
                height: auto;
            }
        </style>
    @endsection
    @section('root_div')
        class="article" data-article-id="1"
    @endsection
    <div>
        <div class="content flex-row-fluid" id="kt_content">
            <!--begin::Post card-->
            <div class="card">
                <!--begin::Body-->
                <div class="card-body p-lg-20 pb-lg-0">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-xl-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-xl-15">
                            <!--begin::Post content-->
                            <div class="mb-17">
                                <!--begin::Wrapper-->
                                <div class="mb-8">
                                    <!--begin::Info-->
                                    <div class="d-flex flex-wrap mb-6">
                                        <!--begin::Item-->
                                        <div class="me-9 my-1">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="2" width="9" height="9" rx="2"
                                                        fill="black"></rect>
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9"
                                                        rx="2" fill="black"></rect>
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9"
                                                        rx="2" fill="black"></rect>
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9"
                                                        rx="2" fill="black"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <span
                                                class="fw-bolder text-gray-400">{{ format_datetime($post->created_at) }}</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        {{-- <div class="me-9 my-1">
                                        <!--begin::Icon-->
                                        <!--SVG file not found: icons/duotune/finance/fin006.svgFolder.svg-->
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <span class="fw-bolder text-gray-400">Announcements</span>
                                        <!--begin::Label-->
                                    </div> --}}
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        {{-- <div class="my-1">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                        <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black"></path>
                                                <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <span class="fw-bolder text-gray-400">24 Comments</span>
                                        <!--end::Label-->
                                    </div> --}}
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Info-->
                                    <!--begin::Title-->
                                    <h2 class="text-dark text-hover-primary fs-0 fw-bolder">{{ $post->title }}</h2>
                                    {{-- <span class="fw-bolder text-muted fs-5 ps-1">5 mins read</span></a> --}}
                                    <!--end::Title-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Description-->
                                <div class="fs-5 fw-bold text-gray-600">
                                    {!! $post->content !!}
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Post content-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Sidebar-->
                        <div class="flex-column w-100 w-xl-350px mb-10">
                            <!--begin::Catigories-->
                            <div class="mb-16">
                                <h4 class="text-black mb-7">Categories</h4>
                                @foreach ($categories as $id => $quantity)
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack fw-bold fs-5 text-muted mb-4">
                                        <!--begin::Text-->
                                        <a href="{{ route('post.category.posts', ['id' => $id]) }}"
                                            class="text-muted text-hover-primary pe-2">{{ get_category($id) }}</a>
                                        <!--end::Text-->
                                        <!--begin::Number-->
                                        <div class="m-0">{{ $quantity }}</div>
                                        <!--end::Number-->
                                    </div>
                                    <!--end::Item-->
                                @endforeach

                            </div>
                            <!--end::Catigories-->
                            <!--begin::Recent posts-->
                            <div class="m-0">

                                <h4 class="text-black mb-7">Recent Posts</h4>

                                @foreach ($latestPost as $item)
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">
                                            <!--begin::Avatar-->
                                            <div class="w-100 symbol-square me-3">
                                                <img src="{{ display_image($item->thumbnail, 'posts') }}"
                                                    style="max-width: 100%;height: auto;" alt="">
                                            </div>
                                            <!--end::Avatar-->
                                        </div>
                                        <div class="col-xs-12 col-sm-12">
                                            <!--begin::Title-->
                                            <div class="m-0">
                                                <a href="{{ route('post.detail', ['id' => $item->id]) }}"
                                                    class="text-dark fw-bolder text-hover-primary fs-6">{{ str_limit($item->title, 70, '...') }}</a>
                                                <span
                                                    class="text-gray-600 fw-bold d-block pt-1 fs-7">{{ str_limit($item->summary, 100, '...') }}</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    {{-- <!--begin::Item-->
                                <div class="d-flex flex-stack mb-7">
                                       <!--begin::Avatar-->
                                       <div class="w-100 symbol-square me-3">
                                        <img src="{{ display_image($item->thumbnail, 'posts') }}"
                                            style="max-width: 100%;height: auto;" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Title-->
                                    <div class="m-0">
                                        <a href="{{ route('post.detail', ['id' => $item->id]) }}"
                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ str_limit($item->title, 70, '...') }}</a>
                                        <span
                                            class="text-gray-600 fw-bold d-block pt-1 fs-7">{{ str_limit($item->summary, 100, '...') }}</span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Item--> --}}
                                @endforeach
                            </div>
                            <!--end::Recent posts-->
                        </div>
                        <!--end::Sidebar-->
                    </div>
                    <!--end::Layout-->
                    <!--begin::Section-->
                    <div class="mb-17">
                        <!--begin::Content-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Title-->
                            <h3 class="text-black">Featured Post</h3>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <a href="{{ route('post.view_mores', ['key' => 'hotPosts']) }}"
                                class="fs-6 fw-bold link-primary">View Mores</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-9"></div>
                        <!--end::Separator-->
                        <!--begin::Row-->
                        <div class="row g-10">
                            @foreach ($featurePosts as $item)
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Feature post-->
                                    <div class="card-xl-stretch me-md-6">
                                        <!--begin::Avatar-->
                                        <div class="w-100 symbol-square me-3">
                                            <img src="{{ display_image($item->thumbnail, 'posts') }}"
                                                style="max-width: 100%;height: auto;" alt="">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Body-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="{{ route('post.detail', ['id' => $item->id]) }}"
                                                class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ $item->title }}</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-6 text-gray-600 text-dark my-4">
                                                {{ str_limit($item->summary, 220, '...') }}
                                            </div>
                                            <!--end::Text-->
                                            <!--begin::Content-->
                                            <div class="fs-6 fw-bolder">

                                                <!--begin::Date-->
                                                <span
                                                    class="text-muted fs-8">{{ format_datetime($item->created_at) }}</span>
                                                <!--end::Date-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Feature post-->
                                </div>
                                <!--end::Col-->
                            @endforeach
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="mb-17">
                        <!--begin::Content-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Title-->
                            <h3 class="text-black">Hotest Post</h3>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <a href="{{ route('post.view_mores', ['key' => 'hotPosts']) }}"
                                class="fs-6 fw-bold link-primary">View Mores</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-9"></div>
                        <!--end::Separator-->
                        <!--begin::Row-->
                        <div class="row g-10">
                            @foreach ($hotPosts as $item)
                                <!--begin::Col-->
                                <div class="col-md-4">
                                    <!--begin::Feature post-->
                                    <div class="card-xl-stretch me-md-6">
                                        <!--begin::Avatar-->
                                        <div class="w-100 symbol-square me-3">
                                            <img src="{{ display_image($item->thumbnail, 'posts') }}"
                                                style="max-width: 100%;
    height: auto;" alt="">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Body-->
                                        <div class="m-0">
                                            <!--begin::Title-->
                                            <a href="{{ route('post.detail', ['id' => $item->id]) }}"
                                                class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ $item->title }}</a>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fw-bold fs-6 text-gray-600 text-dark my-4">
                                                {{ str_limit($item->summary, 220, '...') }}
                                            </div>
                                            <!--end::Text-->
                                            <!--begin::Content-->
                                            <div class="fs-6 fw-bolder">

                                                <!--begin::Date-->
                                                <span
                                                    class="text-muted fs-8">{{ format_datetime($item->created_at) }}</span>
                                                <!--end::Date-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Feature post-->
                                </div>
                                <!--end::Col-->
                            @endforeach
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Post card-->
        </div>
    </div>
    @section('scripts')
        <script>
            var userID = {{ auth()->id() }}
            if (userID != 'undefined') {
                $('.article').on('mouseenter', function() {
                    var startTime = Date.now();
                    $(this).data('start-time', startTime);
                });

                $('.article').on('mouseleave', function() {
                    var endTime = Date.now();
                    var startTime = $(this).data('start-time');
                    var elapsedTime = endTime - startTime;

                    // Gửi thời gian người dùng đọc bài viết lên server, bạn có thể sử dụng AJAX
                    // var articleId = $(this).data('article-id');
                    console.log(elapsedTime)
                    if(elapsedTime/60000 >= 10){
                        $.ajax({
                        url: '/api/post/' + userID + '/bonus',
                        type: 'POST',
                        data: {
                            time: elapsedTime
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log(response.message);
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                    }
                });
            }
        </script>
    @endsection
</x-base-layout>
