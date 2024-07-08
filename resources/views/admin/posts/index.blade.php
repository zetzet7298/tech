<x-base-auth-layout>
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::Tables Widget 9-->
<div class="card card-xxl-stretch mb-5 mb-xl-8">
    
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <div class="row">
            @include('admin.posts._filter')
        </div>

        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
            title="Nhấp vào để thêm feedback">
            <a href="{{ route('posts.create') }}" class="btn btn-sm btn-light-primary">
                {!! theme()->getSvgIcon('icons/duotune/arrows/arr075.svg', 'svg-icon-3') !!}
                Tạo tin tức
            </a>
        </div>
    </div>
    <!--end::Header-->

    <!--begin::Body-->
    <div class="card-body py-3">

        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bolder text-muted">
                        {{-- <th class="w-25px">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"  data-kt-check="true" data-kt-check-target=".widget-9-check"/>
                            </div>
                        </th> --}}
                        <th class="min-w-50px">Id</th>
                        <th class="min-w-50px">Ảnh thumbnail</th>
                        <th class="min-w-75px">Danh mục</th>
                        <th class="min-w-150px">Tiêu đề</th>
                        <th class="min-w-250px">Mô tả</th>
                        <th class="min-w-100px text-end">Actions</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                    @foreach ($posts as $row)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->id }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <div class="symbol symbol-75px me-5">
                                            <img src="{{ display_image($row->thumbnail) }}" class="" alt="">
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->category->name }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->title }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ limitString($row->summary, 100) }}</a>
                                    </div>
                                </div>
                            </td>

                            <td class="text-end">
                                {{-- <a href="#"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    {!! theme()->getSvgIcon('icons/duotune/general/gen019.svg', 'svg-icon-3') !!}
                                </a> --}}

                                <a href="{{route('posts.edit', ['post' => $row->id])}}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    {!! theme()->getSvgIcon('icons/duotune/art/art005.svg', 'svg-icon-3') !!}
                                </a>

                                <a href="{{route('posts.destroy', ['post' => $row->id])}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                onclick="return confirm('Bạn chắc chắn muốn xóa?');"
                                >
                                    {!! theme()->getSvgIcon('icons/duotune/general/gen027.svg', 'svg-icon-3') !!}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
                <!-- Hiển thị các liên kết phân trang -->
            <ul class="pagination">
                {{ $posts->links('pagination::bootstrap-4') }}
            </ul>
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--end::Tables Widget 9-->

    </div>
    <!--end::Col-->
    {{-- @include('admin.posts.create') --}}
</x-base-auth-layout>
