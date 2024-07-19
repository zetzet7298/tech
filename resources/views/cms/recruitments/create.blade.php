@extends('cms.layouts.master')

@section('title', 'CMS Dịch vụ tư vấn pháp luật')

@section('content')
    <div class="content flex-row-fluid" id="kt_content">
        <div class="card mt-3">
            <!--begin::Content-->
            <div id="kt_account_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="POST"
                    action="{{ route('recruitments.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mt-3">
                            <!--begin::Label-->
                            <label class="form-label">{{ __('Tiêu đề tuyển dụng') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <textarea required rows="2" type="text" name="title" class="form-control mycustom" placeholder=""
                                    value=""></textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mt-3">
                            <!--begin::Label-->
                            <label class="form-label">{{ __('Tên tuyển dụng') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <textarea required rows="2" type="text" name="name" class="form-control mycustom" placeholder=""
                                    value=""></textarea>
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
                                <textarea name="desc" id="kt_docs_tinymce_basic" class="tox-target">
                                    
                                </textarea>
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
                            @include('partials.general._button-indicator', ['label' => __('Xác nhận')])
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('demo1/plugins/custom/tinymce/tinymce.min.js') }}"></script>

    <script>
        // tinymce.init(options);
        tinymce.init({
            selector: '#kt_docs_tinymce_basic',
            entity_encoding: 'raw', // Prevent encoding characters into entities
            entities: '160,nbsp,38,amp,60,lt,62,gt',
            encoding: 'UTF-8', // Ensure UTF-8 encoding
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
    </script>
@endsection