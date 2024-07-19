@php
    $companyNameKey = config('constants.COMPANY_NAME');
    $companyNameValue = \App\Models\Setting::where('key', $companyNameKey)->first()->value;

    $settings = \App\Models\Setting::getByType(config('constants.SETTING_TYPE_DASHBOARD'));
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
                    <h4 class="header-title">Cấu hình chung</h4>

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
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea" class="form-label">{{ __('Logo (240x46)') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline {{ $LOGO ? '' : 'image-input-empty' }}"
                                                data-kt-image-input="true"
                                                style="background-image: url({{ asset(theme()->getMediaUrlPath() . 'avatars/blank.png') }})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ display_image($LOGO) }}); width:240px; height:46px;">
                                                </div>
                                                <!--end::Preview existing avatar-->

                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="ri-pencil-line fs-9"></i>

                                                    <!--begin::Inputs-->
                                                    <input type="file" name="LOGO"
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
                                        <label for="example-textarea" class="form-label">{{ __('Tên công ty') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="1" type="text" name="COMPANY_NAME" class="form-control" id="example-textarea">
{{ old('COMPANY_NAME', $companyNameValue ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea" class="form-label">{{ __('Điện thoại') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="1" type="text" name="PHONE" class="form-control" id="example-textarea">
{{ old('PHONE', $PHONE ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea" class="form-label">{{ __('Địa chỉ') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="1" type="text" name="ADDRESS" class="form-control" id="example-textarea">
{{ old('ADDRESS', $ADDRESS ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea" class="form-label">{{ __('Email') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="1" type="text" name="EMAIL" class="form-control" id="example-textarea">
{{ old('EMAIL', $EMAIL ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea" class="form-label">{{ __('Sứ mệnh') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="1" type="text" name="MISSION" class="form-control" id="example-textarea">
{{ old('MISSION', $MISSION ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Số đăng ký kinh doanh') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="1" type="text" name="DKKD" class="form-control" id="example-textarea">
{{ old('DKKD', $DKKD ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Link Facebook') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="1" type="text" name="FACEBOOK" class="form-control" id="example-textarea">
{{ old('FACEBOOK', $FACEBOOK ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea" class="form-label">{{ __('Link Zalo') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="1" type="text" name="ZALO" class="form-control" id="example-textarea">
{{ old('ZALO', $ZALO ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Link messenger') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="1" type="text" name="MESSENGER" class="form-control" id="example-textarea">
{{ old('MESSENGER', $MESSENGER ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Giới thiệu báo giá') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="1" type="text" name="PRICE_QUOTE" class="form-control" id="example-textarea">
{{ old('PRICE_QUOTE', $PRICE_QUOTE ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Link Google Map') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="5" type="text" name="GOOGLE_MAP" class="form-control" id="example-textarea">
{{ old('GOOGLE_MAP', $GOOGLE_MAP ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Link xác nhận từ bộ công thương') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="1" type="text" name="bocongthuong_link" class="form-control" id="example-textarea">
{{ old('bocongthuong_link', $bocongthuong_link ?? '') }}</textarea>
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
