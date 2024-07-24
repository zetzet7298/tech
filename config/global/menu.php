<?php

return array(
    // Documentation menu
    'documentation' => array(
        // Getting Started
        array(
            'heading' => 'Getting Started',
        ),

        // Overview
        array(
            'title' => 'Overview',
            'path'  => 'documentation/getting-started/overview',
        ),

        // Build
        array(
            'title' => 'Build',
            'path'  => 'documentation/getting-started/build',
        ),

        array(
            'title'      => 'Multi-demo',
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'classes'    => array('item' => 'menu-accordion'),
            'sub'        => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        'title'  => 'Overview',
                        'path'   => 'documentation/getting-started/multi-demo/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'Build',
                        'path'   => 'documentation/getting-started/multi-demo/build',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // File Structure
        array(
            'title' => 'File Structure',
            'path'  => 'documentation/getting-started/file-structure',
        ),

        // Customization
        array(
            'title'      => 'Customization',
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'classes'    => array('item' => 'menu-accordion'),
            'sub'        => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        'title'  => 'SASS',
                        'path'   => 'documentation/getting-started/customization/sass',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'title'  => 'Javascript',
                        'path'   => 'documentation/getting-started/customization/javascript',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // Dark skin
        array(
            'title' => 'Dark Mode Version',
            'path'  => 'documentation/getting-started/dark-mode',
        ),

        // RTL
        array(
            'title' => 'RTL Version',
            'path'  => 'documentation/getting-started/rtl',
        ),

        // Troubleshoot
        array(
            'title' => 'Troubleshoot',
            'path'  => 'documentation/getting-started/troubleshoot',
        ),

        // Changelog
        array(
            'title'            => 'Changelog <span class="badge badge-changelog badge-light-danger bg-hover-danger text-hover-white fw-bold fs-9 px-2 ms-2">v' . theme()->getVersion() . '</span>',
            'breadcrumb-title' => 'Changelog',
            'path'             => 'documentation/getting-started/changelog',
        ),

        // References
        array(
            'title' => 'References',
            'path'  => 'documentation/getting-started/references',
        ),


        // Separator
        array(
            'custom' => '<div class="h-30px"></div>',
        ),

        // Configuration
        array(
            'heading' => 'Configuration',
        ),

        // General
        array(
            'title' => 'General',
            'path'  => 'documentation/configuration/general',
        ),

        // Menu
        array(
            'title' => 'Menu',
            'path'  => 'documentation/configuration/menu',
        ),

        // Page
        array(
            'title' => 'Page',
            'path'  => 'documentation/configuration/page',
        ),

        // Separator
        array(
            'custom' => '<div class="h-30px"></div>',
        ),

        // General
        array(
            'heading' => 'General',
        ),

        // DataTables
        array(
            'title'      => 'DataTables',
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array("data-kt-menu-trigger" => "click"),
            'sub'        => array(
                'class' => 'menu-sub-accordion',
                'items' => array(
                    array(
                        'title'  => 'Overview',
                        'path'   => 'documentation/general/datatables/overview',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // Remove demos
        array(
            'title' => 'Remove Demos',
            'path'  => 'documentation/general/remove-demos',
        ),


        // Separator
        array(
            'custom' => '<div class="h-30px"></div>',
        ),

        // HTML Theme
        array(
            'heading' => 'HTML Theme',
        ),

        array(
            'title' => 'Components',
            'path'  => '//preview.keenthemes.com/metronic8/demo1/documentation/base/utilities.html',
        ),

        // array(
        //     'title' => 'Documentation',
        //     'path'  => '//preview.keenthemes.com/metronic8/demo1/documentation/getting-started.html',
        // ),
    ),

    // Main menu
    'main'          => array(
        //// Dashboard
        // array(
        //     'title' => 'Dashboard',
        //     'path'  => 'index',
        //     'icon'  => theme()->getSvgIcon("demo1/media/icons/duotune/art/art002.svg", "svg-icon-2"),
        // ),

        //// Modules
        // array(
        //     'classes' => array('content' => 'pt-8 pb-2'),
        //     'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">Modules</span>',
        // ),
        // array(
        //     'role' => 'user',
        //         'title'  => 'Dashboard',
        //         'path'   => '/',
        // ),
        // // Account
        // array(
        //     'role' => 'admin|member',
        //     'title'      => 'My Account',
        //     'icon'       => array(
        //         'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
        //         'font' => '<i class="bi bi-person fs-2"></i>',
        //     ),
        //     'classes'    => array('item' => 'menu-accordion'),
        //     'attributes' => array(
        //         "data-kt-menu-trigger" => "click",
        //     ),
        //     'sub'        => array(
        //         'class' => 'menu-sub-accordion menu-active-bg',
        //         'items' => array(
        //             array(
        //     'role' => 'admin|member',
        //                 'title'  => 'Overview',
        //                 'path'   => 'account/overview',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //             array(
        //     'role' => 'admin|member',
        //                 'title'  => 'Settings',
        //                 'path'   => 'account/settings',
        //                 'bullet' => '<span class="bullet bullet-dot"></span>',
        //             ),
        //             array(
        //     'role' => 'admin|member',
        //                 'title'      => 'Security',
        //                 'path'       => 'account/security',
        //                 'bullet'     => '<span class="bullet bullet-dot"></span>',
        //                 // 'attributes' => array(
        //                 //     'link' => array(
        //                 //         "title"             => "Coming soon",
        //                 //         "data-bs-toggle"    => "tooltip",
        //                 //         "data-bs-trigger"   => "hover",
        //                 //         "data-bs-dismiss"   => "click",
        //                 //         "data-bs-placement" => "right",
        //                 //     ),
        //                 // ),
        //             ),
        //         ),
        //     ),
        // ),
        // Account
        array(
            'role' => 'admin|member',
            'title'      => 'Cấu hình',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'role' => 'admin|member',
                        'title'  => 'Cấu hình trang chủ',
                        'path'   => 'admin/settings/dashboard',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'role' => 'admin|member',
                        'title'  => 'Cấu hình giới thiệu',
                        'path'   => 'admin/settings/about',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'role' => 'admin|member',
                        'title'  => 'Cấu hình dịch vụ',
                        'path'   => 'admin/settings/service',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'role' => 'admin|member',
                        'title'  => 'Cấu hình tuyển dụng',
                        'path'   => 'admin/settings/recruitment',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'role' => 'admin|member',
                        'title'  => 'Cấu hình nhân sự',
                        'path'   => 'admin/settings/hr',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'role' => 'admin|member',
                        'title'  => 'Cấu hình bài viết',
                        'path'   => 'admin/settings/post',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'role' => 'admin|member',
                        'title'  => 'Giải pháp',
                        'path'   => 'admin/solutions',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'role' => 'admin|member',
                        'title'  => 'Feedback',
                        'path'   => 'admin/feedbacks',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),

        // array(
        //     'role' => 'admin|member',
        //     'path'   => 'admin/solutions',
        //     'title'      => 'Giải pháp',
        //     'icon'       => array(
        //         'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
        //         'font' => '<i class="bi bi-person fs-2"></i>',
        //     ),
        // ),
        // array(
        //     'role' => 'admin|member',
        //     'path'   => 'admin/feedbacks',
        //     'title'      => 'Feedback',
        //     'icon'       => array(
        //         'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
        //         'font' => '<i class="bi bi-person fs-2"></i>',
        //     ),
        // ),
        array(
            'role' => 'admin|member',
            'title'      => 'Bài viết',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'role' => 'admin|member',
                        'title'  => 'Danh sách bài viết',
                        'path'   => 'admin/posts',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'role' => 'admin|member',
                        'title'  => 'Danh sách danh mục',
                        'path'   => 'admin/categories',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),
        array(
            'role' => 'admin|member',
            'title'      => 'Tin tuyển dụng',
            'path'   => 'admin/recruitments',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),

        ),
        array(
            'role' => 'admin|member',
            'title'      => 'Nhân sự',
            'icon'       => array(
                'svg'  => theme()->getSvgIcon("demo1/media/icons/duotune/communication/com006.svg", "svg-icon-2"),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ),
            'classes'    => array('item' => 'menu-accordion'),
            'attributes' => array(
                "data-kt-menu-trigger" => "click",
            ),
            'sub'        => array(
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => array(
                    array(
                        'role' => 'admin|member',
                        'title'  => 'Danh sách nhân sự',
                        'path'   => 'admin/employees',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                    array(
                        'role' => 'admin|member',
                        'title'  => 'Danh sách chuyên ngành',
                        'path'   => 'admin/specialties',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ),
                ),
            ),
        ),
    ),

    // Horizontal menu
    'horizontal'    => array(
        // Dashboard
        array(
            'title'   => 'Dashboard',
            'path'    => 'index',
            'classes' => array('item' => 'me-lg-1'),
        ),
    ),
);
