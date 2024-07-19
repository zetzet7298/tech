@extends('cms.layouts.master')

@section('title', 'CMS Dịch vụ tư vấn pháp luật')

@section('content')
    <div class="container mt-2">
        <div class="card">
            <div class="card-body">
                {{-- <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image"> --}}
                @if (!isset($request['is_edit']))
                    <h4 class="mb-0 mt-2">{{ $user->name }}</h4>
                @endif
                {{-- <p class="text-muted font-14">Founder</p> --}}
                <form method="POST" action="{{ route('users.update.me') }}">
                    @csrf
                    <div class="text-start mt-3">
                        {{-- <h4 class="font-13 text-uppercase">About Me :</h4>
                <p class="text-muted font-13 mb-3">
                    Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                    1500s, when an unknown printer took a galley of type.
                </p> --}}
                        {{-- <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">Geneva
                        D. McKnight</span></p> --}}

                        @if (!isset($request['is_edit']))
                            <p class="text-muted mb-2 font-13"><strong>Email :</strong>
                                <span class="ms-2 ">{{ $user->email }}</span>
                            </p>
                            <p class="text-muted mb-2 font-13"><strong>Phone :</strong><span
                                    class="ms-2">{{ $user->phone }}</span>
                            </p>

                            <p class="text-muted mb-1 font-13"><strong>Xác minh 2 bước :</strong>
                                @if ($user->is_enable_2fa == true)
                                    <span class="ms-2">Đã bật</span>
                                @else
                                    {{-- <a href="{{ route('home', ['enable_2fa' => 1]) }}" class="btn btn-success btn-sm mb-2">Kích hoạt 2fa</a> --}}
                                    <a href="{{ route('enableTwoFactor') }}" class="btn btn-success btn-sm mb-2">Kích hoạt
                                        2fa</a>
                                @endif
                            </p>
                        @else
                            <div class="mb-2">
                                <label for="example-gridsize" class="form-label">Họ tên</label>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input name="name" value="{{ $user->name }}" type="text"
                                            id="example-gridsize" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                            <label for="example-gridsize" class="form-label">Email</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <input name="email" value="{{ $user->email }}" type="text" id="example-gridsize" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                            {{-- <div class="mb-2">
                                <label for="example-gridsize" class="form-label">Phone</label>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input name="phone" value="{{ $user->phone }}" type="text"
                                            id="example-gridsize" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div> --}}
                            <!--begin::Input group-->
                            <div class="row mb-2">
                                <!--begin::Label-->
                                <label for="example-gridsize" class="form-label">Mật khẩu mới (Bỏ qua input này nếu không
                                    muốn đổi mật khẩu)</label>
                                <!--end::Label-->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="input-group input-group-merge">
                                            <input name="password" type="new_password" id="password" class="form-control"
                                                placeholder="">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--end::Input group-->
                        @endif
                    </div>
                    <div>
                        @if (isset($request['is_edit']))
                            <button type="submit" class="btn btn-primary mt-3">Xác nhận</a>
                        @endif
                    </div>
                </form>
                {{-- <ul class="social-list list-inline mt-3 mb-0">
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                </li>
            </ul> --}}
                @if (isset($request['enable_2fa']) && !isset($request['is_edit']))
                    <h1>Enable 2FA</h1>
                    <p>Scan this QR code with your Google Authenticator app:</p>
                    <img src="{{ $qrCodeUrl }}" alt="QR Code">
                    <p>Or use this secret key: {{ $secret }}</p>

                    <form action="{{ route('verifyTwoFactor') }}" method="POST">
                        @csrf
                        <label for="otp">Enter the OTP from Google Authenticator:</label>
                        <input type="text" id="otp" name="otp">
                        <button type="submit">Verify</button>
                    </form>
                @endif

            </div>
            <div class="card-footer">
                @if (!isset($request['is_edit']))
                    <a href="{{ route('home', ['is_edit' => 1]) }}" class="btn btn-secondary">Cập nhật thông tin</a>
                @endif
                {{-- @if (isset($request['is_edit']))
            @else
            @endif --}}
                {{-- <a href="{{ route('home') }}" class="btn btn-secondary">Cập nhật thông tin</a> --}}
            </div>
        </div>
    </div>
@endsection
