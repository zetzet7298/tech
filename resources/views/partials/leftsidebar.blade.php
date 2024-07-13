        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Brand Logo Light -->
            <a href="{{route('home')}}" class="logo logo-light">
                <span class="logo-lg">
                    <img src="{{ asset('hyper/images/logo.png') }}" alt="logo">
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('hyper/images/logo-sm.png') }}" alt="small logo">
                </span>
            </a>

            <!-- Brand Logo Dark -->
            <a href="{{route('home')}}" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="{{ asset('hyper/images/logo-dark.png') }}" alt="dark logo">
                </span>
                <span class="logo-sm">
                    <img src="{{ asset('hyper/images/logo-dark-sm.png') }}" alt="small logo">
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </div>

            <!-- Full Sidebar Menu Close Button -->
            <div class="button-close-fullsidebar">
                <i class="ri-close-fill align-middle"></i>
            </div>

            <!-- Sidebar -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!-- Leftbar User -->
                <div class="leftbar-user">
                    <a href="pages-profile.html">
                        <img src="{{ asset('hyper/images/users/avatar-1.jpg') }}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                        <span class="leftbar-user-name mt-2">Dominic Keller</span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title">Navigation</li>

                    <li class="side-nav-item">
                        <a href="{{route('home')}}" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Trang chủ </span>
                        </a>
                    </li>

                    <li class="side-nav-title">Apps</li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarSetting" aria-expanded="false" aria-controls="sidebarSetting" class="side-nav-link">
                            <i class="ri-settings-2-line"></i>
                            <span> Cấu hình </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarSetting">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{route('settings.index', ['type' => 'dashboard'])}}">Cấu hình trang chủ</a>
                                </li>
                                <li>
                                    <a href="{{route('settings.index', ['type' => 'about'])}}">Cấu hình giới thiệu</a>
                                </li>
                                <li>
                                    <a href="{{route('settings.index', ['type' => 'service'])}}">Cấu hình dịch vụ</a>
                                </li>
                                <li>
                                    <a href="{{route('settings.index', ['type' => 'recruitment'])}}">Cấu hình tuyển dụng</a>
                                </li>
                                <li>
                                    <a href="{{route('settings.index', ['type' => 'hr'])}}">Cấu hình nhân sự</a>
                                </li>
                                <li>
                                    <a href="{{route('settings.index', ['type' => 'post'])}}">Cấu hình tin tức</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPost" aria-expanded="false" aria-controls="sidebarPost" class="side-nav-link">
                            <i class="ri-article-line"></i>
                            <span> Tin tức </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPost">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{route('posts.create')}}">Tạo tin tức</a>
                                </li>
                                <li>
                                    <a href="{{route('posts.index')}}">Danh sách tin tức</a>
                                </li>
                                <li>
                                    <a href="{{route('categories.create')}}">Tạo danh mục</a>
                                </li>
                                <li>
                                    <a href="{{route('categories.index')}}">Danh sách danh mục</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarSol" aria-expanded="false" aria-controls="sidebarSol" class="side-nav-link">
                            <i class="ri-lightbulb-line"></i>
                            <span> Giải pháp </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarSol">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{route('solutions.create')}}">Tạo giải pháp</a>
                                </li>
                                <li>
                                    <a href="{{route('solutions.index')}}">Danh sách giải pháp</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarFb" aria-expanded="false" aria-controls="sidebarFb" class="side-nav-link">
                            <i class="ri-feedback-line"></i>
                            <span> Feedback </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarFb">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{route('feedbacks.create')}}">Tạo feedback</a>
                                </li>
                                <li>
                                    <a href="{{route('feedbacks.index')}}">Danh sách feedback</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarSer" aria-expanded="false" aria-controls="sidebarSer" class="side-nav-link">
                            <i class="ri-service-line"></i>
                            <span> Dịch vụ </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarSer">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{route('services.create')}}">Tạo dịch vụ</a>
                                </li>
                                <li>
                                    <a href="{{route('services.index')}}">Danh sách dịch vụ</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarRec" aria-expanded="false" aria-controls="sidebarRec" class="side-nav-link">
                            <i class="ri-newspaper-line"></i>
                            <span> Tin Tuyển dụng </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarRec">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{route('recruitments.create')}}">Tạo tin tuyển dụng</a>
                                </li>
                                <li>
                                    <a href="{{route('recruitments.index')}}">Danh sách tin tuyển dụng</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarHr" aria-expanded="false" aria-controls="sidebarHr" class="side-nav-link">
                            <i class="ri-user-line"></i>
                            <span> Nhân sự </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarHr">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{route('employees.create')}}">Tạo nhân sự</a>
                                </li>
                                <li>
                                    <a href="{{route('employees.index')}}">Danh sách nhân sự</a>
                                </li>
                                <li>
                                    <a href="{{route('specialties.create')}}">Tạo chuyên ngành</a>
                                </li>
                                <li>
                                    <a href="{{route('specialties.index')}}">Danh sách chuyên ngành</a>
                                </li>
                            </ul>
                        </div>
                    </li>
{{-- 
                    <!-- Help Box -->
                    <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-end close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="{{ asset('hyper/images/svg/help-icon.svg') }}" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
                    </div>
                    <!-- end Help Box --> --}}


                </ul>
                <!--- End Sidemenu -->

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->