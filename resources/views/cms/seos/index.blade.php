@extends('cms.layouts.master')

@section('title', 'Quản lý SEO')

@section('content')
    <div class="content flex-row-fluid" id="kt_content">
        <div class="card mt-3">
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Quản lý SEO</h3>
                </div>
            </div>

            <div id="kt_account_profile_details" class="collapse show">
                <div class="card-body border-top p-9">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @foreach ($pages as $index => $page)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $index == 0 ? 'active' : '' }}" id="tab-{{ $page->id }}-tab"
                                    data-bs-toggle="tab" data-bs-target="#tab-{{ $page->id }}" type="button"
                                    role="tab" aria-controls="tab-{{ $page->id }}"
                                    aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                    @php
                                        switch ($page->canonical) {
                                            case route('trangchu'):
                                                # code...
                                                $name = 'Trang Chủ';
                                                break;
                                            case route('gioithieu'):
                                                # code...
                                                $name = 'Giới thiệu';
                                                break;
                                            case route('tuyendung'):
                                                # code...
                                                $name = 'Tuyển Dụng';
                                                break;
                                            case route('dichvu'):
                                                # code...
                                                $name = 'Dịch Vụ';
                                                break;
                                            case route('tintuc'):
                                                # code...
                                                $name = 'Bài Viết';
                                                break;
                                            case route('nhansu'):
                                                # code...
                                                $name = 'Nhân Sự';
                                                break;
                                            case route('lienhe'):
                                                # code...
                                                $name = 'Liên Hệ';
                                                break;
                                            
                                            default:
                                                # code...
                                                $name = '';
                                                break;
                                        }
                                    @endphp
                                    {{ $name }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @foreach ($pages as $index => $page)
                            <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="tab-{{ $page->id }}"
                                role="tabpanel" aria-labelledby="tab-{{ $page->id }}-tab">
                                <form class="form" method="POST"
                                    action="{{ route('seos.update', ['seo' => $page->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body border-top p-9">
                                        @foreach ([
                                            'meta_robots' => 'Meta Robots',
                                            'alternate_hreflang' => 'Alternate Hreflang',
                                            'canonical' => 'Canonical URL',
                                            'meta_title' => 'Tiêu đề SEO',
                                            'meta_description' => 'Mô tả SEO',
                                            'meta_url' => 'URL SEO',
                                            'meta_keywords' => 'Từ khóa SEO',
                                            'meta_site_name' => 'Tên trang web',
                                            'meta_image_alt' => 'Alt hình ảnh',
                                            'og_locale' => 'OG Locale',
                                            'fb_app_id' => 'Facebook App ID',
                                            'og_type' => 'OG Type',
                                            'og_title' => 'OG Title',
                                            'og_description' => 'OG Description',
                                            'og_url' => 'OG URL',
                                            'og_site_name' => 'OG Site Name',
                                            'og_image' => 'OG Image',
                                            'og_image_secure_url' => 'OG Image Secure URL',
                                            'fb_admins' => 'Facebook Admins',
                                            'og_image_type' => 'OG Image Type',
                                            'twitter_card' => 'Twitter Card',
                                            'twitter_site' => 'Twitter Site',
                                            'twitter_title' => 'Twitter Title',
                                            'twitter_description' => 'Twitter Description',
                                            'twitter_image' => 'Twitter Image',
                                            'twitter_creator' => 'Twitter Creator',

                                        ] as $field => $label)
                                            <div class="row mt-3">
                                                <label class="form-label">{{ $label }}</label>
                                                <div class="col-lg-12 fv-row">
                                                    @if (in_array($field, ['meta_description', 'og_description', 'twitter_description']))
                                                        <textarea rows="3" type="text" name="{{ $field }}" class="form-control mycustom" placeholder="">{{ $page->$field }}</textarea>
                                                    @else
                                                        <input type="text" name="{{ $field }}" class="form-control mycustom" placeholder="" value="{{ $page->$field }}" />
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                                    </div>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
