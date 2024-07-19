<x-base-auth-layout>
    <div class="content flex-row-fluid" id="kt_content">
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                data-bs-target="#kt_account_profile_details" aria-expanded="true"
                aria-controls="kt_account_profile_details">
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
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Họ tên') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea required rows="1" type="text" name="first_name" class="form-control mycustom" placeholder=""
                                    value="">{{ isset($item) ? $item->first_name : '' }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">Avatar</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
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
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Change thumbnail">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="photo" accept=".png, .jpg, .jpeg, .webp">
                                        <input type="hidden" name="thumbnail_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Cancel-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Cancel thumbnail">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <!--end::Cancel-->
                                    <!--begin::Remove-->
                                    <span
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Remove thumbnail">
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
                            <label class="col-lg-2 col-form-label fw-bold fs-6">Chuyên ngành</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="specialties[]" multiple aria-label="Select a Timezone"
                                    data-control="select2" data-placeholder="Chọn chuyên ngành"
                                    class="form-select form-select-solid form-select-lg select2-hidden-accessible"
                                    data-select2-id="select2-data-19-0gmf" tabindex="-1" aria-hidden="true">
                                    {{-- <option value="" data-select2-id="select2-data-21-6bmk">Tất cả</option> --}}
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
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Email') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea required rows="1" type="text" name="email" class="form-control mycustom" placeholder=""
                                    value="">{{ isset($item) ? $item->email : '' }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Điện thoại') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <input required rows="1" type="text" name="phone"
                                    class="form-control mycustom" placeholder=""
                                    value={{ isset($item) ? $item->phone : '' }}>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Giới thiệu bản thân') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
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
        {{-- </div>
    @section('scripts')
    <script src="{{ asset('demo1/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#kt_docs_ckeditor_classic'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection --}}
</x-base-auth-layout>
