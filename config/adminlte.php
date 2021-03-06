<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'title' => 'Absensi Dosen',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'logo' => '<b>Absensi Dosen</b>',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Absensi Dosen',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'classes_body' => 'text-sm',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => false,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/7.-Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/6.-Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'dashboard',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => false,
    'password_reset_url' => false,
    'password_email_url' => false,
    'profile_url' => 'profile',

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/9.-Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/8.-Menu-Configuration
    |
    */

    'menu' => [
        // [
        //     'text' => 'search',
        //     'search' => true,
        //     'topnav' => true,
        // ],
        [
            'text' => 'Dashboard',
            'url'  => 'dashboard',
            'icon' => 'fa fa-home'
        ],
        [
            'text'        => 'Product',
            'url'         => 'products',
            'icon'        => 'fa fa-box',
            'can' => 'product-list',
            'active' => ['products', 'regex:@^products/[0-9]+$@', 'regex:@^products/[0-9]/edit+$@', 'products/create']
        ],
        [
            'text'        => 'Fakultas',
            'url'         => 'fakultas',
            'icon'        => 'fas fa-chalkboard-teacher',
            'can' => 'fakultas-list',
            'active' => ['fakultas', 'regex:@^fakultas/[0-9]+$@', 'regex:@^fakultas/[0-9]/edit+$@', 'fakultas/create']
        ],
        [
            'text'        => 'Program Studi',
            'url'         => 'prodi',
            'icon'        => 'fas fa-chalkboard-teacher',
            'can' => 'prodi-list',
            'active' => ['prodi', 'regex:@^prodi/[0-9]+$@', 'regex:@^prodi/[0-9]/edit+$@', 'prodi/create']
        ],
        [
            'text'        => 'Kelas',
            'url'         => 'kelas',
            'icon'        => 'fas fa-school',
            'can' => 'kelas-list',
            'active' => ['kelas', 'regex:@^kelas/[0-9]+$@', 'regex:@^kelas/[0-9]/edit+$@', 'kelas/create']
        ],
        [
            'text'        => 'Mata Kuliah',
            'url'         => 'matkul',
            'can' => 'matkul-list',
            'icon'        => 'fa fa-book',
            'active' => ['matkul', 'regex:@^matkul/[0-9]+$@', 'regex:@^matkul/[0-9]/edit+$@', 'matkul/create']
        ],
        [
            'text'    => 'Ruangan Belajar',
            'icon'    => 'fa fa-home',
            'can' => 'ruangan-list' || 'gedung-list',
            'submenu' => [
                [
                    'text'        => 'Ruangan',
                    'url'         => 'ruangan',
                    'shift'   => 'ml-3',
                    'can' => 'ruangan-list',
                    'active' => ['ruangan', 'regex:@^ruangan/[0-9]+$@', 'regex:@^ruangan/[0-9]/edit+$@', 'ruangan/create']
                ],
                [
                    'text'        => 'Gedung',
                    'url'         => 'gedung',
                    'shift'   => 'ml-3',
                    'can' => 'gedung-list',
                    'active' => ['gedung', 'regex:@^gedung/[0-9]+$@', 'regex:@^gedung/[0-9]/edit+$@', 'gedung/create']
                ],
            ],
        ],
        [
            'text'    => 'Penjadwalan Kuliah',
            'icon'    => 'fas fa-calendar-check',
            'can' => 'jadwal-list' || 'jamkul-list',
            'submenu' => [
                [
                    'text'        => 'Jadwal Kuliah',
                    'url'         => 'jadwal',
                    'can' => 'jadwal-list',
                    'shift'   => 'ml-3',
                    'icon'        => 'fa fa-calendar-alt',
                    'active' => ['jadwal', 'regex:@^jadwal/[0-9]+$@', 'regex:@^jadwal/[0-9]/edit+$@', 'jadwal/create']
                ],
                [
                    'text'        => 'Jam Kuliah',
                    'url'         => 'jamkul',
                    'can' => 'jamkul-list',
                    'icon'        => 'fa fa-calendar-alt',
                    'shift'   => 'ml-3',
                    'active' => ['jamkul', 'regex:@^jamkul/[0-9]+$@', 'regex:@^jamkul/[0-9]/edit+$@', 'jamkul/create']
                ],
            ]
        ],
        [
            'text'    => 'Absensi Kuliah',
            'icon'    => 'fas fa-clipboard-check',
            'can' => 'absensi-list' || 'lokasi-absensi-list',
            'submenu' => [
                [
                    'text'        => 'Data Absensi',
                    'url'         => 'absensi',
                    'can' => 'absensi-list',
                    'shift'   => 'ml-3',

                    'icon'        => 'fa fa-calendar-alt',
                    'active' => ['absensi', 'regex:@^absensi/[0-9]+$@', 'regex:@^absensi/[0-9]/edit+$@', 'absensi/create']
                ],
                [
                    'text'        => 'Lokasi Absensi',
                    'url'         => 'lokasi-absensi',
                    'can' => 'lokasi-absensi-list',
                    'shift'   => 'ml-3',

                    'icon'        => 'fa fa-calendar-alt',
                    'active' => ['lokasi-absensi', 'regex:@^lokasi-absensi/[0-9]+$@', 'regex:@^lokasi-absensi/[0-9]/edit+$@', 'lokasi-absensi/create']
                ],
            ]
        ],
        ['header' => 'account_settings'],
        [
            'text' => 'profile',
            'url'  => 'profile',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text'        => 'User',
            'url'         => 'users',
            'icon'        => 'fa fa-users',
            'can' => 'user-list',
            'active' => ['users', 'regex:@^users/[0-9]+$@', 'regex:@^users/[0-9]/edit+$@', 'users/create']
        ],
        [
            'text'        => 'Role',
            'url'         => 'roles',
            'icon'        => 'fa fa-id-card',
            'can' => 'role-list',
            'active' => ['roles', 'regex:@^roles/[0-9]+$@', 'regex:@^roles/[0-9]/edit+$@', 'roles/create']
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/8.-Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/9.-Other-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/9.-Other-Configuration
    */

    'livewire' => false,
];
