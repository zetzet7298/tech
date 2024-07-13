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
                    @include('cms.posts._filter')
                </div>

                {{-- <div class="card-toolbar">
                    <a href="{{ route('posts.create') }}" class="btn btn-sm btn-success">
                        {!! theme()->getSvgIcon('icons/duotune/arrows/arr075.svg', 'svg-icon-3') !!}
                        Tạo tin tức
                    </a>
                </div> --}}
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body py-3">

                <table class="table table-striped table-centered mb-0">
                    <thead>
                        <tr>
                            <th class="w-50px">Id</th>
                            <th class="w-200px">Tiêu đề</th>
                            <th class="min-w-100px">Ảnh thumbnail</th>
                            <th class="min-w-75px">Lượt xem</th>
                            <th class="min-w-150px">Tác giả</th>
                            <th class="min-w-75px">Danh mục</th>
                            <th class="min-w-150px text-end">Actions</th>
                        </tr>
                    </thead>
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
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary fs-6">{{ limitString($row->title, 75) }}</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <div class="symbol symbol-50px me-5">
                                                <img src="{{ display_image($row->thumbnail) }}" class=""
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->view_count }}</a>
                                        </div>
                                    </div>
                                </td>
                                {{-- <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-start flex-column">
                                    <a href="#"
                                        class="text-dark fw-bolder text-hover-primary fs-6">{{ limitString($row->summary, 100) }}</a>
                                </div>
                            </div>
                        </td> --}}
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary fs-6">{{ $row->author ? $row->author->name : '' }}</a>
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
                                <td class="text-end">
                                    <a target="_blank" href="{{ route('tintuc', ['slug' => $row->slug]) }}" href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                    <a href="{{ route('posts.edit', ['post' => $row->id]) }}" href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                    <a
                                    href="{{ route('posts.destroy', ['post' => $row->id]) }}"
                                    onclick="return confirm('Bạn chắc chắn muốn xóa?');"
                                    href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->

    </div>

@endsection
