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
                    <p class="text-muted mb-2 font-13"><strong>Phone :</strong><span class="ms-2">{{ $user->phone }}</span>
                    </p>
                    <h1>Kích hoạt 2FA</h1>
                    <p>Quét mã này trong ứng dụng Google Authenticator của bạn:</p>
                    <img src="{{ $qrCodeUrl }}" alt="QR Code">
                    <p>Hoặc nhập mã thiết lập: {{ $secret }}</p>

                    <form action="{{ route('verifyTwoFactor') }}" method="POST">
                        @csrf
                        <div class="row gy-2 gx-2 align-items-center">
                            <div class="col-auto">
                                <label class="visually-hidden" for="inlineFormInput">Name</label>
                                <input name="otp" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Nhập mã otp">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-2">Kích hoạt</button>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
