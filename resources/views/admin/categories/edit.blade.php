<x-base-auth-layout>
    <div class="content flex-row-fluid" id="kt_content">
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                data-bs-target="#kt_account_profile_details" aria-expanded="true"
                aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">{{ __('Tạo danh mục') }}</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="kt_account_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form" method="POST"
                    action="{{ route('categories.update', ['category' => $item->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label
                                class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Tiêu đề') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea required rows="2" type="text" name="title" class="form-control form-control-lg form-control-solid"
                                    placeholder="" value="">{{$item->title}}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label
                                class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Mô tả') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea required rows="10" type="text" name="description"
                                    class="form-control form-control-lg form-control-solid" placeholder="" value="">{{$item->description}}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label
                                class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Vị trí') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <input required type="number" name="index"
                                    class="form-control form-control-lg form-control-solid" placeholder="" value="{{$item->id}}"/>
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
                            @include('partials.general._button-indicator', ['label' => __('Save Changes')])
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
