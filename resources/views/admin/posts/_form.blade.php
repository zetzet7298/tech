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
                    @if (isset($item)) action="{{ route('posts.update', ['post' => $item->id]) }}"
                    @else
                    action="{{ route('posts.store') }}" @endif
                    enctype="multipart/form-data">
                    @csrf
                    @method(isset($item) ? 'PUT' : 'POST')
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">Danh mục</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="category_id" aria-label="Select a Timezone" data-control="select2"
                                    data-placeholder="Select a post.."
                                    class="form-select form-select-solid form-select-lg select2-hidden-accessible"
                                    data-select2-id="select2-data-19-0gmf" tabindex="-1" aria-hidden="true">
                                    {{-- <option value="" data-select2-id="select2-data-21-6bmk">Tất cả</option> --}}
                                    @foreach ($categories as $k => $category)
                                        <option @if (isset($item) && $category->id == $item->category->id) selected @endif
                                            value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">Ảnh Thumbnail</label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true"
                                    style="background-image: url(assets/media/avatars/blank.png)">
                                    <!--begin::Preview existing thumbnail-->
                                    <div class="image-input-wrapper w-125px h-125px"
                                        style="background-image: url({{ display_image($item->thumbnail ?? '') }})">
                                    </div>
                                    <!--end::Preview existing thumbnail-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip" title=""
                                        data-bs-original-title="Change thumbnail">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="thumbnail" accept=".png, .jpg, .jpeg, .webp">
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
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Tiêu đề') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea required rows="2" type="text" name="title" class="form-control form-control-lg form-control-solid"
                                    placeholder="" value="">{{ isset($item) ? $item->title : '' }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">{{ __('Mô tả') }}</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10 fv-row">
                                <textarea required rows="2" type="text" name="summary" class="form-control form-control-lg form-control-solid"
                                    placeholder="" value="">{{ isset($item) ? $item->summary : '' }}</textarea>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-bold fs-6">
                                <span class="required">Nội dung</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                <textarea name="content" id="kt_docs_tinymce_basic" class="tox-target">
                                    {{ isset($item) ? $item->content : '' }}
                    </textarea>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
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
        <script src="{{ asset('demo1/plugins/custom/tinymce/tinymce.min.js') }}"></script>
        <script>
            // tinymce.init(options);
            tinymce.init({
                selector: '#kt_docs_tinymce_basic',
                height: 500,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'wordcount'
                ],
                language: 'vi',
                toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
                license_key: 'gpl'
            });
        </script>
        {{-- <script src="{{ asset('demo1/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>

        <script>
            ClassicEditor
                .create(document.querySelector('#kt_docs_ckeditor_classic'), {
                    plugins: [
                'Essentials', 'Paragraph', 'Bold', 'Italic', 'Underline', 'Strikethrough', 
                'Link', 'List', 'Image', 'ImageToolbar', 'ImageCaption', 'ImageStyle', 
                'ImageUpload', 'BlockQuote', 'InsertTable', 'TableToolbar', 'MediaEmbed', 
                'Undo', 'Redo', 'Heading', 'Font', 'Alignment', 'Highlight', 'Code', 'CodeBlock',
                'HorizontalLine', 'PageBreak', 'RemoveFormat', 'SourceEditing'
            ],
            toolbar: {
                items: [
                    'heading', '|',
                    'bold', 'italic', 'underline', 'strikethrough', 'subscript', 'superscript', 'link', '|',
                    'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent', '|',
                    'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', 'horizontalLine', 'pageBreak', '|',
                    'undo', 'redo', '|',
                    'alignment', 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                    'highlight', 'code', 'codeBlock', '|',
                    'removeFormat', 'sourceEditing'
                ]
            },
            image: {
                toolbar: [
                    'imageTextAlternative', 'imageStyle:full', 'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn', 'tableRow', 'mergeTableCells', 'tableCellProperties', 'tableProperties', '|',
                    'tableToolbar'
                ]
            },
                    language: 'vi',
                    // Các cấu hình plugin khác
                })
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        </script> --}}
    @endsection
</x-base-auth-layout>
