<x-base-auth-layout>
    @php
        $settings = \App\Models\Setting::getByType('project');
        $title = $settings['title']['value'];
        $description = $settings['description']['value'];
    @endphp

    <div class="content flex-row-fluid" id="kt_content">
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                data-bs-target="#kt_account_profile_details" aria-expanded="true"
                aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">{{ __('Cấu hình trang chủ') }}</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

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
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Tiêu đề Banner') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="3" type="text" name="title" class="form-control mycustom" placeholder="" value="">{{ old('title', $title ?? '') }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Mô tả Banner') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="5" type="text" name="description" class="form-control mycustom" placeholder="" value="">{{ old('description', $description ?? '') }}</textarea>
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
</x-base-auth-layout>
