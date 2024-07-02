<x-base-layout>

    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bolder m-0">Post Details</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_profile_details" class="collapse show">
            <!--begin::Form-->
            <form enctype="multipart/form-data" method="post" action="{{ route('post.store') }}"
                id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                novalidate="novalidate">
                @csrf
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Category</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="category_id" aria-label="Select a Timezone" data-control="select2"
                                data-placeholder="Select a category.."
                                class="form-select form-select-solid form-select-lg select2-hidden-accessible"
                                data-select2-id="select2-data-19-0gmf" tabindex="-1" aria-hidden="true">
                                <option value="" data-select2-id="select2-data-21-6bmk">Select a category</option>
                                @foreach ($categories as $id => $category)
                                    <option value="{{ $id }}">{{ $category }}</option>
                                @endforeach

                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-bold fs-6">Thumbnail Photo</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url(assets/media/avatars/blank.png)">
                                <!--begin::Preview existing thumbnail-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url()"></div>
                                <!--end::Preview existing thumbnail-->
                                <!--begin::Label-->
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                    data-bs-original-title="Change thumbnail">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="thumbnail" accept=".png, .jpg, .jpeg">
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
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Title</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input required="" type="text" name="title"
                                class="form-control form-control-lg form-control-solid" />
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Summary</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <textarea rows="3" name="summary" id="summary" class="form-control form-control-lg form-control-solid"></textarea>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-bold fs-6">
                            <span class="required">Content</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <textarea name="kt_docs_ckeditor_classic" id="kt_docs_ckeditor_classic">
                    </textarea>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Alert-->
                    <div class="alert-danger">
                        <!--begin::Icon-->
                        {{-- <span class="svg-icon svg-icon-2hx svg-icon-primary me-3">...</span> --}}
                        <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column">
                            <!--begin::Title-->
                            <!--end::Title-->
                            <!--begin::Content-->
                            {{-- <div class="px-4 fs-6 fw-bold">Note: When you post a product, $1 will be deducted from your
                                account</div> --}}
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Alert-->
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Create Post
                            </button>
                    </div>
                    <!--end::Actions-->
                    <input type="hidden">
                    <div></div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    </div>
    @section('scripts')
        <script src="{{ asset('demo2/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>

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
        {{-- <script src="{{ asset('demo2/plugins/custom/ckeditor/ckeditor-inline.bundle.js') }}"></script>
        <script src="{{ asset('demo2/plugins/custom/ckeditor/ckeditor-balloon.bundle.js') }}"></script>
        <script src="{{ asset('demo2/plugins/custom/ckeditor/ckeditor-balloon-block.bundle.js') }}"></script>
        <script src="{{ asset('demo2/plugins/custom/ckeditor/ckeditor-document.bundle.js') }}"></script> --}}
    @endsection
</x-base-layout>
