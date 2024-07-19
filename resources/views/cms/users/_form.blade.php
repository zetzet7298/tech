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
                    @if (isset($item)) action="{{ route('users.update', ['user' => $item->id]) }}"
                    @else
                    action="{{ route('users.store') }}" @endif
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
                                <textarea required rows="1" type="text" name="name" class="form-control mycustom" placeholder=""
                                    value="">{{ isset($item) ? $item->name : '' }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        {{-- @if(!isset($item)) --}}
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
                        {{-- @endif --}}
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mt-3">
                            <!--begin::Label-->
                            <label class="form-label">{{ __('Mật khẩu mới (Bỏ qua input này nếu không muốn đổi mật khẩu)') }}</label>
                            <!--end::Label-->

                            <div class="input-group input-group-merge">
                                <input name="password" type="password" id="password" class="form-control" placeholder="">
                                <div class="input-group-text" data-password="false">
                                    <span class="password-eye"></span>
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mt-3">
                            <!--begin::Label-->
                            <label class="form-label">{{ __('Điện thoại') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <input required rows="1" type="text" name="phone" class="form-control mycustom"
                                    placeholder="" value={{ isset($item) ? $item->phone : '' }}>
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
