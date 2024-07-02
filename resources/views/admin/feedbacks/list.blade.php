<!--begin::Tables Widget 9-->
<div class="card card-xxl-stretch mb-5 mb-xl-8">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bolder fs-3 mb-1">Phản hồi từ khách hàng</span>
        </h3>

        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover"
            title="Nhấp vào để thêm feedback">
            <a href="{{ route('feedbacks.create') }}" class="btn btn-sm btn-light-primary">
                {!! theme()->getSvgIcon('icons/duotune/arrows/arr075.svg', 'svg-icon-3') !!}
                Tạo feedback mới
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
                        <th class="min-w-150px">Tên khách hàng</th>
                        {{-- <th class="min-w-140px">Tên công ty KH</th> --}}
                        <th class="min-w-120px">Nội dung</th>
                        <th class="min-w-100px text-end">Actions</th>
                    </tr>
                </thead>
                <!--end::Table head-->

                <!--begin::Table body-->
                <tbody>
                    @foreach ($feedbacks as $row)
                        <tr>
                            {{-- <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input widget-9-check" type="checkbox" value="1"/>
                                </div>
                            </td> --}}

                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ display_image($row->image) }}"
                                            alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->name }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-45px me-5">
                                        <img src="{{ asset(theme()->getMediaUrlPath() . $row['user']['image']) }}"
                                            alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary fs-6">{{ $row['user']['name'] }}</a>

                                        <span
                                            class="text-muted fw-bold text-muted d-block fs-7">{{ $row['user']['skills'] }}</span>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <a href="#"
                                    class="text-dark fw-bolder text-hover-primary d-block fs-6">{{ $row['company']['name'] }}</a>
                                <span
                                    class="text-muted fw-bold text-muted d-block fs-7">{{ $row['company']['skills'] }}</span>
                            </td>

                            <td class="text-end">
                                <a href="#"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    {!! theme()->getSvgIcon('icons/duotune/general/gen019.svg', 'svg-icon-3') !!}
                                </a>

                                <a href="#"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    {!! theme()->getSvgIcon('icons/duotune/art/art005.svg', 'svg-icon-3') !!}
                                </a>

                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    {!! theme()->getSvgIcon('icons/duotune/general/gen027.svg', 'svg-icon-3') !!}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--end::Tables Widget 9-->
