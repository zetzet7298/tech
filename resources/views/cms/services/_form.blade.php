@extends('cms.layouts.master')

@section('title', 'CMS Dịch vụ tư vấn pháp luật')
@section('styles')
    <link href="{{ asset('hyper/vendor/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="post-info-tab" data-bs-toggle="tab"
                                data-bs-target="#post-info" type="button" role="tab" aria-controls="post-info"
                                aria-selected="true">Thông tin bài viết</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="seo-meta-tab" data-bs-toggle="tab" data-bs-target="#seo-meta"
                                type="button" role="tab" aria-controls="seo-meta" aria-selected="false">SEO
                                Meta</button>
                        </li>
                    </ul>
                    <form id="kt_account_profile_details_form" class="form" method="POST"
                                @if (isset($item)) action="{{ route('services.update', ['service' => $item->id]) }}"
                    @else
                    action="{{ route('services.store') }}" @endif
                                enctype="multipart/form-data">
                                @csrf
                                @method(isset($item) ? 'PUT' : 'POST')
                    <div class="tab-content" id="myTabContent">
                        <!-- Thông tin bài viết -->
                        <div class="tab-pane fade show active" id="post-info" role="tabpanel"
                            aria-labelledby="post-info-tab">
                            
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">Ảnh Thumbnail (320x222)</label>
                                        <div class="col-lg-12">
                                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                                style="background-image: url(assets/media/avatars/blank.png)">
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ display_image($item->thumbnail ?? '') }});width:320px; height:222px;">
                                                </div>
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="ri-pencil-line fs-9"></i>
                                                    <input type="file" name="thumbnail"
                                                        accept=".png, .jpg, .jpeg, .webp">
                                                    <input type="hidden" name="thumbnail_remove">
                                                </label>
                                            </div>
                                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('Tiêu đề') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <textarea required rows="2" type="text" name="title" class="form-control mycustom" placeholder=""
                                                value="">{{ isset($item) ? $item->title : '' }}</textarea>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('Mô tả') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <textarea name="summary" id="kt_docs_tinymce_basic2" class="tox-target">
                                                {{ isset($item) ? $item->summary : '' }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                                            <span class="required">Nội dung</span>
                                        </label>
                                        <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                            <textarea name="content" id="ckeditor" class="tox-target">
                                                {{ isset($item) ? $item->content : '' }}
                                            </textarea>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->
                            
                        </div>
                        <!--end::Thông tin bài viết-->

                        <!-- SEO Meta -->
                        <div class="tab-pane fade" id="seo-meta" role="tabpanel" aria-labelledby="seo-meta-tab">

                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('Meta Title') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="meta_title" class="form-control mycustom"
                                                value="{{ isset($item) ? $item->meta_title : '' }}">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('Meta Description') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <textarea name="meta_description" class="form-control mycustom">{{ isset($item) ? $item->meta_description : '' }}</textarea>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('Meta URL') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="meta_url" class="form-control mycustom"
                                                value="{{ isset($item) ? $item->meta_url : '' }}">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('Meta Keywords') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="meta_keywords" class="form-control mycustom"
                                                value="{{ isset($item) ? $item->meta_keywords : '' }}">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('Meta Site Name') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="meta_site_name" class="form-control mycustom"
                                                value="{{ isset($item) ? $item->meta_site_name : '' }}">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('Meta Image Alt') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="meta_image_alt" class="form-control mycustom"
                                                value="{{ isset($item) ? $item->meta_image_alt : '' }}">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('OG Title') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="og_title" class="form-control mycustom"
                                                value="{{ isset($item) ? $item->og_title : '' }}">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('OG Description') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <textarea name="og_description" class="form-control mycustom">{{ isset($item) ? $item->og_description : '' }}</textarea>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('OG URL') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="og_url" class="form-control mycustom"
                                                value="{{ isset($item) ? $item->og_url : '' }}">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('OG Image') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="og_image" class="form-control mycustom"
                                                value="{{ isset($item) ? $item->og_image : '' }}">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('OG Type') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="og_type" class="form-control mycustom"
                                                value="{{ isset($item) ? $item->og_type : '' }}">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('Twitter Title') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="twitter_title" class="form-control mycustom"
                                                value="{{ isset($item) ? $item->twitter_title : '' }}">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('Twitter Description') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <textarea name="twitter_description" class="form-control mycustom">{{ isset($item) ? $item->twitter_description : '' }}</textarea>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('Twitter Image') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="twitter_image" class="form-control mycustom"
                                                value="{{ isset($item) ? $item->twitter_image : '' }}">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('Canonical') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="canonical" class="form-control mycustom"
                                                value="{{ isset($item) ? $item->canonical : '' }}">
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <label class="form-label">{{ __('Meta Robots') }}</label>
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="meta_robots" class="form-control mycustom"
                                                value="{{ isset($item) ? $item->meta_robots : '' }}">
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->
                        </div>
                        <!--end::SEO Meta-->
                    </div>
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                                @include('partials.general._button-indicator', [
                                    'label' => __('Xác nhận'),
                                ])
                            </button>
                        </div>
                        <!--end::Actions-->
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('hyper/vendor/select2/js/select2.min.js') }}"></script>


    <script src="{{ asset('demo1/plugins/custom/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/ckfinder/ckfinder.js') }}"></script>
    <script>
        CKFinder.config({
            connectorPath: '/ckfinder/connector'
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
            var editor = CKEDITOR.replace('ckeditor', {
                filebrowserBrowseUrl: '{{env("APP_URL")}}ckfinder/browser',
                filebrowserUploadUrl: '{{env("APP_URL")}}ckfinder/connector?command=QuickUpload&type=Files&_token={{ csrf_token() }}',
                filebrowserImageUploadUrl: '{{env("APP_URL")}}ckfinder/connector?command=QuickUpload&type=Images&_token={{ csrf_token() }}'
            })

        });
    </script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });

        // const example_image_upload_handler = (blobInfo, progress) => new Promise((resolve, reject) => {
        //     const xhr = new XMLHttpRequest();
        //     xhr.withCredentials = false;
        //     xhr.open('POST', '/~hongnha1/public/cms/upload');
        //     xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute(
        //         'content'));
        //     xhr.upload.onprogress = (e) => {
        //         progress(e.loaded / e.total * 100);
        //     };

        //     xhr.onload = () => {
        //         if (xhr.status === 403) {
        //             reject({
        //                 message: 'HTTP Error: ' + xhr.status,
        //                 remove: true
        //             });
        //             return;
        //         }

        //         if (xhr.status < 200 || xhr.status >= 300) {
        //             reject('HTTP Error: ' + xhr.status);
        //             return;
        //         }

        //         const json = JSON.parse(xhr.responseText);

        //         if (!json || typeof json.location != 'string') {
        //             reject('Invalid JSON: ' + xhr.responseText);
        //             return;
        //         }

        //         resolve(json.location);
        //     };

        //     xhr.onerror = () => {
        //         reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
        //     };

        //     const formData = new FormData();
        //     formData.append('file', blobInfo.blob(), blobInfo.filename());

        //     xhr.send(formData);
        // });

        // // tinymce.init(options);
        // tinymce.init({
        //     selector: '#kt_docs_tinymce_basic',
        //     entity_encoding: 'raw',
        //     entities: '160,nbsp,38,amp,60,lt,62,gt',
        //     encoding: 'UTF-8',
        //     height: 500,
        //     plugins: [
        //         'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
        //         'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
        //         'insertdatetime', 'media', 'table', 'wordcount'
        //     ],
        //     toolbar: 'image code | undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
        //     content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
        //     license_key: 'gpl',
        //     images_upload_url: '/~hongnha1/public/cms/upload',
        //     automatic_uploads: true,
        //     language: 'vi',
        //     images_upload_handler: example_image_upload_handler
        // });



        tinymce.init({
            selector: '#kt_docs_tinymce_basic2',
            entity_encoding: 'raw', // Prevent encoding characters into entities
            entities: '160,nbsp,38,amp,60,lt,62,gt',
            encoding: 'UTF-8', // Ensure UTF-8 encoding
            height: 200,
            plugins: [
                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                'insertdatetime', 'media', 'table', 'wordcount'
            ],
            language: 'vi',
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
