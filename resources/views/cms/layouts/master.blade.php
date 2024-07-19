<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
@if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <div class="alert alert-dismissible bg-danger w-350px">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column text-light pe-0 pe-sm-10 ">
                        <!--begin::Title-->
                        <h4 class="mb-2 light">Alert</h4>
                        <!--end::Title-->
                        <!--begin::Content-->
                        <span>{{ $error }}</span>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
            </div>
        </div>

            {{ $error }}
        @endforeach
@endif
    @if (session('success'))
        <!--begin::Alert-->
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <div class="alert alert-dismissible bg-success w-350px">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column text-light ">
                        <!--begin::Title-->
                        <h4 class="mb-2 light">Alert</h4>
                        <!--end::Title-->
                        <!--begin::Content-->
                        <span>{{ session('success') }}</span>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
            </div>
        </div>

        <!--end::Alert-->
    @endif
    @if (session('error'))
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <div class="alert alert-dismissible bg-danger w-350px">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column text-light pe-0 pe-sm-10 ">
                        <!--begin::Title-->
                        <h4 class="mb-2 light">Alert</h4>
                        <!--end::Title-->
                        <!--begin::Content-->
                        <span>{{ session('error') }}</span>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                </div>
            </div>
        </div>
    @endif
    <div class="wrapper">
        @include('partials.topbar')

        @include('partials.leftsidebar')

        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('partials.footer')
        </div>
    </div>

    @include('partials.scripts')
    @yield('scripts')
    <script>
        $("document").ready(function() {
            setTimeout(function() {
                $(".alert-dismissible").remove();
            }, 3000); // 5 secs
        });
    </script>
</body>

</html>
