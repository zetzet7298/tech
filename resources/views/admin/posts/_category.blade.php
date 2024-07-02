<x-base-layout>
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Post card-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-20 pb-lg-0">
                <!--begin::Layout-->
                <div class="row">
                    <div class="col-sm-8 col-12">
                        <h2 class="fw-boldest mb-3" style="font-size: 35px;">{{$category}}</h2>
                        <div class="separator border-5 my-10"></div>
                        <!--begin::Description-->
                        @foreach ($posts as $item)
                            <div class="row mb-2">
                                <div class="col-sm-5 col-12">
                                          <!--begin::Avatar-->
                                          <div class="w-100 symbol-square me-3">
                                        <img src="{{ display_image($item->thumbnail, 'posts') }}"
                                            style="max-width: 100%; height: auto;" alt="">
                                    </div>
                                    <!--end::Avatar-->
                                </div>
                                <div class="col-sm-7 col-12">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack mb-7">

                                        <!--begin::Title-->
                                        <div class="m-0">
                                            <a href="{{ route('post.detail', ['id' => $item->id]) }}"
                                                class="text-dark fw-bolder text-hover-primary fs-4">{{ str_limit($item->title, 100, '...') }}</a>
                                            <span
                                                class="text-gray-600 fw-bold d-block pt-1 fs-6">{{ str_limit($item->summary, 300, '...') }}</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                            </div>
                            <div class="separator border-2 my-10"></div>
                        @endforeach
                        <!--end::Description-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="col-sm-4 col-12">
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
                                            style="max-width: 100%; height: auto;" alt="">
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
</x-base-layout>
