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
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="post-info-tab" data-bs-toggle="tab"
                            data-bs-target="#post-info" type="button" role="tab" aria-controls="post-info"
                            aria-selected="true">Thông tin nhân sự</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="seo-meta-tab" data-bs-toggle="tab" data-bs-target="#seo-meta"
                            type="button" role="tab" aria-controls="seo-meta" aria-selected="false">SEO
                            Meta</button>
                    </li>
                </ul>
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="POST"
                    @if (isset($item)) action="{{ route('employees.update', ['employee' => $item->id]) }}"
                    @else
                    action="{{ route('employees.store') }}" @endif
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
                                    <!--begin::Label-->
                                    <label class="form-label">{{ __('Danh xưng') }}</label>
                                    <!--end::Label-->

                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea required rows="1" type="text" name="prefix_name" class="form-control mycustom" placeholder=""
                                            value="">{{ isset($item) ? $item->prefix_name : '' }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
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
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
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
                                        <select name="specialties[]" class="select2 form-control select2-multiple"
                                            data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
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
                                        <input required rows="1" type="text" name="phone"
                                            class="form-control mycustom" placeholder=""
                                            value={{ isset($item) ? $item->phone : '' }}>
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
                                        <textarea rows="5" id="ckeditor" type="text" name="introduction" class="form-control mycustom" placeholder=""
                                            value="">{{ isset($item) ? $item->introduction : '' }}</textarea>
                                    </div>
                                    <!--end::Col-->
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
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>

    @endsection
    @section('scripts')
        <script src="{{ asset('hyper/vendor/select2/js/select2.min.js') }}"></script>
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
    @endsection
