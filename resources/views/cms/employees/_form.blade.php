@extends('cms.layouts.master')

@section('title', 'CMS Dịch vụ tư vấn pháp luật')
@section('styles')
    <link href="{{ asset('hyper/vendor/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="content flex-row-fluid" id="kt_content">
        <div class="card mt-3">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">{{ $action == 'create' ? 'Tạo' : 'Sửa' }} {{ $itemName }}</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="kt_account_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="POST"
                    @if (isset($item)) action="{{ route('employees.update', ['employee' => $item->id]) }}"
                    @else
                    action="{{ route('employees.store') }}" @endif
                    enctype="multipart/form-data">
                    @csrf
                    @method(isset($item) ? 'PUT' : 'POST')
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mt-3">
                            <!--begin::Label-->
                            <label class="form-label">{{ __('Họ tên') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <textarea required rows="1" type="text" name="first_name" class="form-control mycustom" placeholder=""
                                    value="">{{ isset($item) ? $item->first_name : '' }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mt-3">
                            <!--begin::Label-->
                            <label class="form-label">Avatar</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-12">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                    style="background-image: url(assets/media/avatars/blank.png)">
                                    <!--begin::Preview existing thumbnail-->
                                    <div class="image-input-wrapper w-125px h-125px"
                                        style="background-image: url({{ display_image($item->photo ?? '') }})">
                                    </div>
                                    <!--end::Preview existing thumbnail-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="ri-pencil-line fs-9"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="photo" accept=".png, .jpg, .jpeg, .webp">
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
                            <label class="form-label">Chuyên ngành</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <select name="specialties[]" class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                    @foreach ($specialties as $k => $specialty)
                                        @if (isset($item))
                                            <option value="{{ $specialty->id }}"
                                                {{ $item && $item->specialties->contains($specialty->id) ? 'selected' : '' }}>
                                                {{ $specialty->name }}</option>
                                        @else
                                            <option @if (isset($item) && $specialty->id == $item->specialty->id) selected @endif
                                                value="{{ $specialty->id }}">{{ $specialty->name }}</option>
                                        @endif
                                    @endforeach

                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->


                        <!--begin::Input group-->
                        <div class="row mt-3">
                            <!--begin::Label-->
                            <label class="form-label">{{ __('Email') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <textarea required rows="1" type="text" name="email" class="form-control mycustom" placeholder=""
                                    value="">{{ isset($item) ? $item->email : '' }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mt-3">
                            <!--begin::Label-->
                            <label class="form-label">{{ __('Điện thoại') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <input required rows="1" type="number" name="phone" class="form-control mycustom"
                                    placeholder="" value={{ isset($item) ? $item->phone : '' }}>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mt-3">
                            <!--begin::Label-->
                            <label class="form-label">{{ __('Giới thiệu bản thân') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <textarea rows="5" type="text" name="introduction" class="form-control mycustom" placeholder="" value="">{{ isset($item) ? $item->introduction : '' }}</textarea>
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

    @endsection
    @section('scripts')
        <script src="{{ asset('hyper/vendor/select2/js/select2.min.js') }}"></script>

        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
            
        </script>
    @endsection
