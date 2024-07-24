@extends('cms.layouts.master')

@section('title', 'CMS Dịch vụ tư vấn pháp luật')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Schema Local Business</h4>

                    <div class="row mt-3">
                        <div id="kt_account_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form id="kt_account_profile_details_form" class="form" method="POST"
                                action="{{ route('settings.update', ['type' => $type]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!--begin::Card body-->
                                <!--begin::Input group-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label for="name" class="form-label">{{ __('Name') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea rows="1" type="text" name="name" class="form-control" id="name">{{ old('name', $store->name ?? '') }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label for="images" class="form-label">{{ __('Images') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea rows="5" type="text" name="images" class="form-control" id="images">{{ old('images', $store->images ?? '') }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label for="street_address" class="form-label">{{ __('Street Address') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea rows="1" type="text" name="street_address" class="form-control" id="street_address">{{ old('street_address', $store->street_address ?? '') }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label for="address_locality" class="form-label">{{ __('Address Locality') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea rows="1" type="text" name="address_locality" class="form-control" id="address_locality">{{ old('address_locality', $store->address_locality ?? '') }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label for="address_region" class="form-label">{{ __('Address Region') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea rows="1" type="text" name="address_region" class="form-control" id="address_region">{{ old('address_region', $store->address_region ?? '') }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label for="postal_code" class="form-label">{{ __('Postal Code') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea rows="1" type="text" name="postal_code" class="form-control" id="postal_code">{{ old('postal_code', $store->postal_code ?? '') }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label for="address_country" class="form-label">{{ __('Address Country') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea rows="1" type="text" name="address_country" class="form-control" id="address_country">{{ old('address_country', $store->address_country ?? '') }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label for="latitude" class="form-label">{{ __('Latitude') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea rows="1" type="text" name="latitude" class="form-control" id="latitude">{{ old('latitude', $store->latitude ?? '') }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label for="longitude" class="form-label">{{ __('Longitude') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea rows="1" type="text" name="longitude" class="form-control" id="longitude">{{ old('longitude', $store->longitude ?? '') }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label for="url" class="form-label">{{ __('URL') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea rows="1" type="text" name="url" class="form-control" id="url">{{ old('url', $store->url ?? '') }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label for="price_range" class="form-label">{{ __('Price Range') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea rows="1" type="text" name="price_range" class="form-control" id="price_range">{{ old('price_range', $store->price_range ?? '') }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label for="telephone" class="form-label">{{ __('Telephone') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea rows="1" type="text" name="telephone" class="form-control" id="telephone">{{ old('telephone', $store->telephone ?? '') }}</textarea>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label for="opening_hours" class="form-label">{{ __('Opening Hours') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-12 fv-row">
                                        <textarea rows="20" type="text" name="opening_hours" class="form-control" id="opening_hours">{{ old('opening_hours', $store->opening_hours ?? '') }}</textarea>
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
                                @include('partials.general._button-indicator', [
                                    'label' => __('Xác nhận'),
                                ])
                            </button>
                        </div>
                        <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
        </div> <!-- end card-body -->
    </div> <!-- end card -->
    </div><!-- end col -->
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
@endsection
