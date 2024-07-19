@php
    $companyNameKey = config('constants.COMPANY_NAME');
    $companyNameValue = \App\Models\Setting::where('key', $companyNameKey)->first()->value;
    $settings = \App\Models\Setting::getByType(config('constants.SETTING_TYPE_DASHBOARD'));
    $h1 = $settings['h1']['value'];
    $ABOUT_TITLE = $settings[config('constants.ABOUT_TITLE')]['value'];
    $ABOUT_DESC = $settings[config('constants.ABOUT_DESC')]['value'];
    $SLIDER_1 = $settings[config('constants.SLIDER_1')]['value'];
    $SLIDER_2 = $settings[config('constants.SLIDER_2')]['value'];
    $SLIDER_3 = $settings[config('constants.SLIDER_3')]['value'];
    $SOLUTION_TITLE = $settings[config('constants.SOLUTION_TITLE')]['value'];
    $SOLUTION_DESCRIPTION = $settings[config('constants.SOLUTION_DESCRIPTION')]['value'];
@endphp
@extends('cms.layouts.master')

@section('title', 'CMS Dịch vụ tư vấn pháp luật')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Cấu hình trang chủ</h4>

                    <div class="row mt-3">
                        <div id="kt_account_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form id="kt_account_profile_details_form" class="form" method="POST"
                                action="{{ route('settings.update', ['type' => $type]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea" class="form-label">{{ __('Nội dung thẻ h1') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="3" type="text" name="h1" class="form-control" id="example-textarea" placeholder=""
                                                value="">{{ old('h1', $h1 ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Ảnh Slide 1 (171x128)') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline {{ $SLIDER_1 ? '' : 'image-input-empty' }}"
                                                data-kt-image-input="true"
                                                style="background-image: url({{ asset(theme()->getMediaUrlPath() . 'avatars/blank.png') }})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ display_image($SLIDER_1) }}); width:171px; height:128px;">
                                                </div>
                                                <!--end::Preview existing avatar-->

                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="ri-pencil-line fs-9"></i>

                                                    <!--begin::Inputs-->
                                                    <input type="file" name="SLIDER_1"
                                                        accept=".png, .jpg, .jpeg, .webp" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->

                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow d-none"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->

                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow d-none"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
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
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Ảnh Slide 2 (585x450)') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline {{ $SLIDER_2 ? '' : 'image-input-empty' }}"
                                                data-kt-image-input="true"
                                                style="background-image: url({{ asset(theme()->getMediaUrlPath() . 'avatars/blank.png') }})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ display_image($SLIDER_2) }});width:585px; height:450px;">
                                                </div>
                                                <!--end::Preview existing avatar-->

                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="ri-pencil-line fs-9"></i>

                                                    <!--begin::Inputs-->
                                                    <input type="file" name="SLIDER_2"
                                                        accept=".png, .jpg, .jpeg, .webp" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->

                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow d-none"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->

                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow d-none"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
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
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Ảnh Slide 3 (364x276)') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline {{ $SLIDER_3 ? '' : 'image-input-empty' }}"
                                                data-kt-image-input="true"
                                                style="background-image: url({{ asset(theme()->getMediaUrlPath() . 'avatars/blank.png') }})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ display_image($SLIDER_3) }});width:364px; height:276px;">
                                                </div>
                                                <!--end::Preview existing avatar-->

                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="ri-pencil-line fs-9"></i>

                                                    <!--begin::Inputs-->
                                                    <input type="file" name="SLIDER_3"
                                                        accept=".png, .jpg, .jpeg, .webp" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->

                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow d-none"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->

                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow d-none"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title="Remove avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
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
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Giới thiệu - Tiêu đề') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="3" type="text" name="ABOUT_TITLE" class="form-control" id="example-textarea">
{{ old('ABOUT_TITLE', $ABOUT_TITLE ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Giới thiệu - Mô tả') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="5" type="text" name="ABOUT_DESC" class="form-control" id="example-textarea">
{{ old('ABOUT_DESC', $ABOUT_DESC ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Giải pháp - Tiêu đề') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="3" type="text" name="SOLUTION_TITLE" class="form-control" id="example-textarea">{{ old('SOLUTION_TITLE', $SOLUTION_TITLE ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Giải pháp - Mô tả') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="5" type="text" name="SOLUTION_DESCRIPTION" class="form-control" id="example-textarea">{{ old('SOLUTION_DESCRIPTION', $SOLUTION_DESCRIPTION ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <!--end::Card body-->

                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    {{-- <button type="reset" class="btn btn-white btn-active-light-primary me-2">{{ __('Discard') }}</button> --}}

                                    <button type="submit" class="btn btn-primary"
                                        id="kt_account_profile_details_submit">
                                        @include('partials.general._button-indicator', [
                                            'label' => __('Xác nhận'),
                                        ])
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
@endsection
