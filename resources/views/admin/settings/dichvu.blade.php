<x-base-auth-layout>
    @php
        $settings = \App\Models\Setting::getByType('service');
        $title = $settings['title']['value'];
        $description = $settings['description']['value'];
        $giatri_title = $settings['giatri_title']['value'];
        $giatri_description = $settings['giatri_description']['value'];
        $banner = $settings['banner']['value'];
        $banner_mobile = $settings['banner_mobile']['value'];
        $nangtam_banner = $settings['nangtam_banner']['value'];
        $nangtam_title = $settings['nangtam_title']['value'];
        $giatri_title = $settings['giatri_title']['value'];
        $giatri_description = $settings['giatri_description']['value'];
        $giatri_item_1 = $settings['giatri_item_1']['value'];
        $giatri_item_2 = $settings['giatri_item_2']['value'];
        $giatri_item_3 = $settings['giatri_item_3']['value'];
        $giatri_item_4 = $settings['giatri_item_4']['value'];
        $giatri_item_1_val = $settings['giatri_item_1_val']['value'];
        $giatri_item_2_val = $settings['giatri_item_2_val']['value'];
        $giatri_item_3_val = $settings['giatri_item_3_val']['value'];
        $giatri_item_4_val = $settings['giatri_item_4_val']['value'];

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
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Banner') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline {{ $banner ? '' : 'image-input-empty' }}"
                                    data-kt-image-input="true"
                                    style="background-image: url({{ asset(theme()->getMediaUrlPath() . 'avatars/blank.png') }})">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-250px h-250px"
                                        style="background-image: url({{ display_image($banner) }})"></div>
                                    <!--end::Preview existing avatar-->

                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="banner" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->

                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
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
                        <!--end::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Banner Mobile') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline {{ $banner_mobile ? '' : 'image-input-empty' }}"
                                    data-kt-image-input="true"
                                    style="background-image: url({{ asset(theme()->getMediaUrlPath() . 'avatars/blank.png') }})">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-250px h-250px"
                                        style="background-image: url({{ display_image($banner_mobile) }})"></div>
                                    <!--end::Preview existing avatar-->

                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="banner_mobile" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->

                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
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
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Tiêu đề Banner') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="3" type="text" name="title" class="form-control form-control-lg form-control-solid"
                                    placeholder="" value="">{{ old('title', $title ?? '') }}</textarea>
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
                                <textarea rows="5" type="text" name="description" class="form-control form-control-lg form-control-solid"
                                    placeholder="" value="">{{ old('description', $description ?? '') }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Tiêu đề giá trị') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="5" type="text" name="giatri_title" class="form-control form-control-lg form-control-solid"
                                    placeholder="" value="">{{ old('giatri_title', $giatri_title ?? '') }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Mô tả giá trị') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="5" type="text" name="giatri_description"
                                    class="form-control form-control-lg form-control-solid" placeholder="" value="">{{ old('giatri_description', $giatri_description ?? '') }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Tiêu đề giá trị 1') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="5" type="text" name="giatri_item_1" class="form-control form-control-lg form-control-solid"
                                    placeholder="" value="">{{ old('giatri_item_1', $giatri_item_1 ?? '') }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Mô tả giá trị 1') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="5" type="text" name="giatri_item_1_val"
                                    class="form-control form-control-lg form-control-solid" placeholder="" value="">{{ old('giatri_item_1_val', $giatri_item_1_val ?? '') }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Tiêu đề giá trị 2') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="5" type="text" name="giatri_item_2" class="form-control form-control-lg form-control-solid"
                                    placeholder="" value="">{{ old('giatri_item_2', $giatri_item_2 ?? '') }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Mô tả giá trị 2') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="5" type="text" name="giatri_item_2_val"
                                    class="form-control form-control-lg form-control-solid" placeholder="" value="">{{ old('giatri_item_2_val', $giatri_item_2_val ?? '') }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Tiêu đề giá trị 3') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="5" type="text" name="giatri_item_3" class="form-control form-control-lg form-control-solid"
                                    placeholder="" value="">{{ old('giatri_item_3', $giatri_item_3 ?? '') }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Mô tả giá trị 3') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="5" type="text" name="giatri_item_3_val"
                                    class="form-control form-control-lg form-control-solid" placeholder="" value="">{{ old('giatri_item_3_val', $giatri_item_3_val ?? '') }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Tiêu đề giá trị 4') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="5" type="text" name="giatri_item_4" class="form-control form-control-lg form-control-solid"
                                    placeholder="" value="">{{ old('giatri_item_4', $giatri_item_4 ?? '') }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Mô tả giá trị 4') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="5" type="text" name="giatri_item_4_val"
                                    class="form-control form-control-lg form-control-solid" placeholder="" value="">{{ old('giatri_item_4_val', $giatri_item_4_val ?? '') }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Nâng tầm Banner') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline {{ $nangtam_banner ? '' : 'image-input-empty' }}"
                                    data-kt-image-input="true"
                                    style="background-image: url({{ asset(theme()->getMediaUrlPath() . 'avatars/blank.png') }})">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-250px h-250px"
                                        style="background-image: url({{ display_image($nangtam_banner) }})"></div>
                                    <!--end::Preview existing avatar-->

                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="nangtam_banner" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->

                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->

                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
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
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Tiêu đề Nâng tầm') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea rows="3" type="text" name="nangtam_title" class="form-control form-control-lg form-control-solid"
                                    placeholder="" value="">{{ old('nangtam_title', $nangtam_title ?? '') }}</textarea>
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
