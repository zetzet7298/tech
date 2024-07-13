@extends('cms.layouts.master')

@section('title', 'CMS Dịch vụ tư vấn pháp luật')
@section('styles')
    <link href="{{ asset('hyper/vendor/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3">
                        <!--begin::Content-->
                        <div id="kt_account_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form id="kt_account_profile_details_form" class="form" method="POST"
                                @if (isset($item)) action="{{ route('posts.update', ['post' => $item->id]) }}"
                    @else
                    action="{{ route('posts.store') }}" @endif
                                enctype="multipart/form-data">
                                @csrf
                                @method(isset($item) ? 'PUT' : 'POST')
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <!--begin::Label-->
                                        <label class="form-label">Danh mục</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <select name="category_id" class="form-control select2" data-toggle="select2">
                                                {{-- <option value="" data-select2-id="select2-data-21-6bmk">Tất cả</option> --}}
                                                @foreach ($categories as $k => $category)
                                                    <option @if (isset($item) && $category->id == $item->category->id) selected @endif
                                                        value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <!--begin::Label-->
                                        <label class="form-label">Ảnh Thumbnail</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-12">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                                style="background-image: url(assets/media/avatars/blank.png)">
                                                <!--begin::Preview existing thumbnail-->
                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: url({{ display_image($item->thumbnail ?? '') }})">
                                                </div>
                                                <!--end::Preview existing thumbnail-->
                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="ri-pencil-line fs-9"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="thumbnail"
                                                        accept=".png, .jpg, .jpeg, .webp">
                                                    <input type="hidden" name="thumbnail_remove">
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->

                                            </div>
                                            <!--end::Image input-->
                                            <!--begin::Hint-->
                                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <!--begin::Label-->
                                        <label class="form-label">{{ __('Tiêu đề') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea required rows="2" type="text" name="title" class="form-control mycustom" placeholder=""
                                                value="">{{ isset($item) ? $item->title : '' }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <!--begin::Label-->
                                        <label class="form-label">{{ __('Mô tả') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea name="summary" id="kt_docs_tinymce_basic2" class="tox-target">
                                                {{ isset($item) ? $item->content : '' }}
                                </textarea>

                                            {{-- <textarea id="kt_docs_ckeditor_classic" required rows="3" type="text" name="summary" style="height: 200px;"
                                                class="form-control mycustom" placeholder="" value="">{{ isset($item) ? $item->summary : '' }}</textarea> --}}
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                                            <span class="required">Nội dung</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                            <textarea name="content" id="kt_docs_tinymce_basic" class="tox-target">
                                    {{ isset($item) ? $item->content : '' }}
                    </textarea>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->

                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    {{-- <button type="reset" class="btn btn-white btn-active-light-primary me-2">{{ __('Discard') }}</button> --}}
                                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                                        @include('partials.general._button-indicator', [
                                            'label' => __('Xác nhận'),
                                        ])
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('hyper/vendor/select2/js/select2.min.js') }}"></script>


    <script src="{{ asset('demo1/plugins/custom/tinymce/tinymce.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
        // tinymce.init(options);
        tinymce.init({
            selector: '#kt_docs_tinymce_basic',
            height: 500,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'wordcount'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
            license_key: 'gpl'
        });
        tinymce.init({
            selector: '#kt_docs_tinymce_basic2',
            height: 200,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'wordcount'
            ],
            toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
            license_key: 'gpl'
        });
    </script>
    {{-- <script src="{{ asset('demo1/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#kt_docs_ckeditor_classic'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script> --}}
@endsection
