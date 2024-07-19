@extends('cms.layouts.master')

@section('title', 'CMS Dịch vụ tư vấn pháp luật')

@section('content')
    <div class="content flex-row-fluid" id="kt_content">
        <div class="card">
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
                    @if (isset($item)) action="{{ route('offices.update', ['office' => $item->id]) }}"
                    @else
                    action="{{ route('offices.store') }}" @endif
                    enctype="multipart/form-data">
                    @csrf
                    @method(isset($item) ? 'PUT' : 'POST')
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mt-3">
                            <!--begin::Label-->
                            <label class="form-label">{{ __('Địa chỉ') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <textarea  rows="2" type="text" name="address" class="form-control mycustom" placeholder=""
                                    value="">{{ isset($item) ? $item->address : '' }}</textarea>
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
                                <input  rows="1" type="text" name="phone" class="form-control mycustom"
                                    placeholder="" value={{ isset($item) ? $item->phone : '' }}>
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
                                <textarea  rows="1" type="text" name="email" class="form-control mycustom" placeholder=""
                                    value="">{{ isset($item) ? $item->email : '' }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mt-3">
                            <!--begin::Label-->
                            <label class="form-label">{{ __('Thời gian hoạt động') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <textarea  rows="2" type="text" name="time_working" class="form-control mycustom" placeholder=""
                                    value="">{{ isset($item) ? $item->time_working : '' }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mt-3">
                            <!--begin::Label-->
                            <label class="form-label">{{ __('Link google map') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <textarea  rows="3" type="text" name="google_map" class="form-control mycustom" placeholder=""
                                    value="">{{ isset($item) ? $item->google_map : '' }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mt-3">
                            <!--begin::Label-->
                            {{-- <label class="form-label">{{ __('') }}</label> --}}
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <div class="form-check mb-2">
                                    <input name="is_primary" type="checkbox" class="form-check-input" id="customCheckcolor1" @if(isset($item) ? $item->is_primary == true : '')checked @endif>
                                    <label class="form-check-label" for="customCheckcolor1">Là trụ sở chính</label>
                                </div>
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
@section('scripts')
    </script>
@endsection
@endsection
