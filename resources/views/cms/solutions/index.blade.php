@extends('cms.layouts.master')

@section('title', 'CMS Dịch vụ tư vấn pháp luật')

@section('content')
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::Tables Widget 9-->
        <div class="card card-xxl-stretch mb-5 mb-xl-8 mt-3">
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-striped table-centered mb-0 mt-5">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted">
                                {{-- <th class="w-25px">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"  data-kt-check="true" data-kt-check-target=".widget-9-check"/>
                            </div>
                        </th> --}}
                                <th class="min-w-150px">Tiêu đề</th>
                                <th class="min-w-140px">Ảnh</th>
                                <th class="min-w-120px">Mô tả</th>
                                <th class="min-w-50px">Vị trí</th>
                                <th class="min-w-100px text-end">Actions</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->

                        <!--begin::Table body-->
                        <tbody>
                            @foreach ($solutions as $row)
                                <tr>
                                    {{-- <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input widget-9-check" type="checkbox" value="1"/>
                                </div>
                            </td> --}}

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
                                            <div class="symbol symbol-75px me-5">
                                                <img src="{{ display_image($row->image) }}" alt="" />
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="fw-bold text-gray-800 d-block fs-7">{{ limitString($row->description, 150) }}</span>
                                    </td>
                                    <td>
                                        <span class="fw-bold text-gray-800 d-block fs-7">{{ $row->index }}</span>
                                    </td>
                                    <td class="text-end">
                                        @if (checkPermission('solution', 'PUT'))
                                            <a href="{{ route('solutions.edit', ['solution' => $row->id]) }}"
                                                href="javascript:void(0);" class="action-icon"> <i
                                                    class="mdi mdi-square-edit-outline"></i></a>
                                        @endif
                                        @if (checkPermission('solution', 'DELETE'))
                                            <a href="{{ route('solutions.destroy', ['solution' => $row->id]) }}"
                                                onclick="return confirm('Bạn chắc chắn muốn xóa?');"
                                                href="javascript:void(0);" class="action-icon"> <i
                                                    class="mdi mdi-delete"></i></a>
                                        @endif
                                        {{-- <a target="_blank" href="{{ route('tintuc', ['slug' => $row->slug]) }}" href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a> --}}

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

    </div>
@endsection
