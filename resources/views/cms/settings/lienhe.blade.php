@php
    $settings = \App\Models\Setting::getByType('post');
    $title = $settings['title']['value'];
    $description = $settings['description']['value'];
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
                    <h4 class="header-title">Cấu hình liên hệ</h4>

                    <div class="row mt-3">
                        <!--begin::Content-->
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
                                    <!--end::Input group-->
                                    <div class="row mt-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Banner (1230x540)') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline {{ $banner ? '' : 'image-input-empty' }}"
                                                data-kt-image-input="true"
                                                style="background-image: url({{ asset(theme()->getMediaUrlPath() . 'avatars/blank.png') }})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ display_image($banner) }})"></div>
                                                <!--end::Preview existing avatar-->

                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="ri-pencil-line fs-9"></i>

                                                    <!--begin::Inputs-->
                                                    <input type="file" name="banner"
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
                                    <!--begin::Input group-->
                                    <!--end::Input group-->
                                    <div class="row mt-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea"
                                            class="form-label">{{ __('Banner Mobile (375x700)') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline {{ $banner_mobile ? '' : 'image-input-empty' }}"
                                                data-kt-image-input="true"
                                                style="background-image: url({{ asset(theme()->getMediaUrlPath() . 'avatars/blank.png') }})">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper"
                                                    style="background-image: url({{ display_image($banner_mobile) }})">
                                                </div>
                                                <!--end::Preview existing avatar-->

                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="ri-pencil-line fs-9"></i>

                                                    <!--begin::Inputs-->
                                                    <input type="file" name="banner_mobile"
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
                                    <!--begin::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea" class="form-label">{{ __('Tiêu đề Banner') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="3" type="text" name="title" class="form-control" id="example-textarea" placeholder=""
                                                value="">{{ old('title', $title ?? '') }}</textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mt-3">
                                        <!--begin::Label-->
                                        <label for="example-textarea" class="form-label">{{ __('Mô tả Banner') }}</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <textarea rows="5" type="text" name="description" class="form-control" id="example-textarea"
                                                placeholder="" value="">{{ old('description', $description ?? '') }}</textarea>
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
                                            'label' => __('Xác Nhận'),
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
