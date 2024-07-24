<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body {
        background-color: #f9f9fa
    }

    .padding {
        padding: 1rem !important
    }

    .user-card-full {
        overflow: hidden;
    }

    .card {
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        border: none;
        margin-bottom: 30px;
    }

    .m-r-0 {
        margin-right: 0px;
    }

    .m-l-0 {
        margin-left: 0px;
    }

    .user-card-full .user-profile {
        border-radius: 5px 0 0 5px;
    }

    .bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
        background: linear-gradient(to right, #ee5a6f, #f29263);
    }

    .user-profile {
        padding: 20px 0;
    }

    .card-block {
        padding: 1.25rem;
    }

    .m-b-25 {
        margin-bottom: 25px;
    }

    .img-radius {
        border-radius: 5px;
    }



    h6 {
        font-size: 14px;
    }

    .card .card-block p {
        line-height: 25px;
    }

    @media only screen and (min-width: 1400px) {
        p {
            font-size: 14px;
        }
    }

    .card-block {
        padding: 1.25rem;
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0;
    }

    .m-b-20 {
        margin-bottom: 20px;
    }

    .p-b-5 {
        padding-bottom: 5px !important;
    }

    .card .card-block p {
        line-height: 25px;
    }

    .m-b-10 {
        margin-bottom: 10px;
    }

    .text-muted {
        color: #919aa3 !important;
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0;
    }

    .f-w-600 {
        font-weight: 600;
    }

    .m-b-20 {
        margin-bottom: 20px;
    }

    .m-t-40 {
        margin-top: 20px;
    }

    .p-b-5 {
        padding-bottom: 5px !important;
    }

    .m-b-10 {
        margin-bottom: 10px;
    }

    .m-t-40 {
        margin-top: 20px;
    }

    .user-card-full .social-link li {
        display: inline-block;
    }

    .user-card-full .social-link li a {
        font-size: 20px;
        margin: 0 10px 0 0;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .specialties-list {
        list-style-type: none; /* Loại bỏ dấu chấm tròn mặc định */
        padding: 0;
        margin: 0;
    }

    .specialties-list li {
        font-size: 16px;
        margin-bottom: 10px;
        position: relative;
        padding-left: 25px; /* Tạo không gian cho dấu V */
        display: flex;
        align-items: center; /* Căn giữa theo chiều dọc */
    }

    .specialties-list li::before {
        content: '\2713'; /* Ký tự Unicode cho dấu V */
        color: white; /* Màu trắng cho dấu V */
        font-weight: bold; /* Đảm bảo dấu V rõ nét */
        font-size: 16px; /* Kích thước của dấu V */
        position: absolute;
        left: 0; /* Đặt dấu V ở đầu phần tử */
        top: 50%; /* Đặt dấu V ở giữa chiều dọc */
        transform: translateY(-50%); /* Căn giữa theo chiều dọc */
    }
</style>
<div class="page-content page-container" id="page-content">
    <h1 class="d-none">Thông tin chi tiết nhân sự</h1>
    <div class="padding mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-10 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-white">
                                <div style="display: flex;align-items: center;justify-content: center; flex-direction:column;">
                                    <div class="m-b-15">
                                        <img width="250" style="height: 250px;" src="{{ display_image($item->photo) }}"
                                            class="img-radius" alt="User-Profile-Image">
                                    </div>
                                    <h2 class="f-w-600" style="overflow-wrap: break-word;">
                                        <span style="font-size: 12px">{{ $item->prefix_name }}</span>
                                        <span style="font-size: 20px">{{ $item->first_name }}</span>
                                    </h2>
                                    <ul class="specialties-list text-center">
                                        @foreach ($item->specialties as $specialty)
                                            <li>{{ $specialty->name }}</li>
                                        @endforeach
                                    </ul>
                                    <i class="mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-8">
                        <h3 class="d-none">Giới thiệu bản than của luật {{ $item->prefix_name }} {{ $item->first_name }}</h1>
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Thông tin</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">{{ $item->email }}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Điện thoại</p>
                                        <h6 class="text-muted f-w-400"><a class="text-muted f-w-400"
                                                href="tel:+{{ $item->phone }}">{{ $item->phone }}</a></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Giới thiệu bản thân</h6>
                                <div class="row">
                                    <div class="col-sm-12">
                                        {!! $item->introduction !!}
                                    </div>
                                </div>
                                {{-- <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Recent</p>
                                                                        <h6 class="text-muted f-w-400">Sam Disuja</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Most Viewed</p>
                                                                        <h6 class="text-muted f-w-400">Dinoter husainm</h6>
                                                                    </div>
                                                                </div> --}}
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                            data-original-title="facebook" data-abc="true"><i
                                                class="mdi mdi-facebook feather icon-facebook facebook"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                            data-original-title="twitter" data-abc="true"><i
                                                class="mdi mdi-twitter feather icon-twitter twitter"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                            data-original-title="instagram" data-abc="true"><i
                                                class="mdi mdi-instagram feather icon-instagram instagram"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

