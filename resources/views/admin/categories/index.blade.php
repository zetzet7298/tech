<x-base-auth-layout>
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::Tables Widget 9-->
<div class="card card-xxl-stretch mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Danh mục tin tức</span>
        </h3>

        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
            title="Nhấp vào để tạo danh mục">
            <a href="{{ route('categories.create') }}" class="btn btn-sm btn-light-primary">
                {!! theme()->getSvgIcon('icons/duotune/arrows/arr075.svg', 'svg-icon-3') !!}
                Tạo danh mục
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
                        <th class="min-w-150px">Id</th>
                        <th class="min-w-150px">Tên danh mục</th>
                        <th class="min-w-50px">Vị trí</th>
                        <th class="min-w-100px text-end">Actions</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                    @foreach ($categories as $row)
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
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->name }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span
                                class="fw-bold text-gray-800 d-block fs-7">{{ $row->index }}</span>
                            </td>

                            <td class="text-end">
                                {{-- <a href="#"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    {!! theme()->getSvgIcon('icons/duotune/general/gen019.svg', 'svg-icon-3') !!}
                                </a> --}}
                                @if($row->slug != 'dich-vu')
                                <a href="{{route('categories.edit', ['category' => $row->id])}}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    {!! theme()->getSvgIcon('icons/duotune/art/art005.svg', 'svg-icon-3') !!}
                                </a>
                                <a href="{{route('categories.destroy', ['category' => $row->id])}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                onclick="return confirm('Bạn chắc chắn muốn xóa?');"
                                >
                                    {!! theme()->getSvgIcon('icons/duotune/general/gen027.svg', 'svg-icon-3') !!}
                                </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
                <!-- Hiển thị các liên kết phân trang -->
            <ul class="pagination">
                {{ $categories->links('pagination::bootstrap-4') }}
            </ul>
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--end::Tables Widget 9-->

    </div>
    <!--end::Col-->
    {{-- @include('admin.categories.create') --}}
</x-base-auth-layout>
