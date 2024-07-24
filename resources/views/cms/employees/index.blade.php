@extends('cms.layouts.master')

@section('title', 'CMS Dịch vụ tư vấn pháp luật')

@section('content')
    <!--begin::Col-->
    <div class="col-xl-12">
        <!--begin::Tables Widget 9-->
        <div class="card card-xxl-stretch mb-5 mb-xl-8 mt-3">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <div class="row">
                    @include('cms.employees._filter')
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">

                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-striped table-centered mb-0">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted">
                                {{-- <th class="w-25px">
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1"  data-kt-check="true" data-kt-check-target=".widget-9-check"/>
                            </div>
                        </th> --}}
                                <th class="min-w-50px">Id</th>
                                <th class="min-w-125px">Authors</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-75px">Phone</th>
                                <th class="w-150px text-end">Actions</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->

                        <!--begin::Table body-->
                        <tbody>
                            @foreach ($employees as $row)
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
                                            <div class="symbol symbol-45px me-5">
                                                <img src="{{ display_image($row->photo) }}" alt="">
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-dark fw-bolder text-hover-primary fs-6">{{$row->prefix_name}} {{ $row->first_name }}</a>
                                                <span class="text-muted fw-bold text-muted d-block fs-7">
                                                    @foreach ($row->specialties as $specialty)
                                                        {{ $specialty->name }},
                                                    @endforeach
                                                </span>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->email }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#"
                                                    class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->phone }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <form action="{{ route('employees.destroy', $row->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a target="_blank" href="{{ route('employees.show', $row->id) }}"
                                                href="javascript:void(0);" class="action-icon"> <i
                                                    class="mdi mdi-eye"></i></a>
                                                    @if (checkPermission('employee', 'PUT'))
                                                    <a href="{{ route('employees.edit', ['employee' => $row->id]) }}"
                                                        href="javascript:void(0);" class="action-icon"> <i
                                                            class="mdi mdi-square-edit-outline"></i></a>
                                                    @endif
                                                    @if (checkPermission('employee', 'DELETE'))
                                                    <button type="submit"
                                                    class="btn action-icon btn-icon btn-bg-light btn-active-color-primary btn-sm mb-1"
                                                    onclick="return confirm('Bạn chắc chắn muốn xóa?');">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                                    @endif
                                          
                                          
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!-- Hiển thị các liên kết phân trang -->
                    <ul class="pagination">
                        {{ $employees->links('pagination::bootstrap-4') }}
                    </ul>
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->

    </div>
@endsection
