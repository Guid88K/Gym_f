<!doctype html>
<html lang="en" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>SportPlan</title>

    <meta name="description"
          content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">


    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
          content="SportPlan">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="shortcut icon" href="{{asset('assets/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/favicons/apple-touch-icon-180x180.png')}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">


</head>
<body>

<div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-inverse main-content-boxed">

    <!-- Sidebar -->
    <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow bg-black-op-10">
                <div class="content-header-section text-center align-parent">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="index.html">
                            <i class="si si-fire text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
            </div>
            <!-- END Side Header -->

            <!-- Side Main Navigation -->
            <div class="content-side content-side-full">
                <!--
                Mobile navigation, desktop navigation can be found in #page-header

                If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                -->
                <ul class="nav-main">
                    <li>
                        <a href="bd_dashboard.html"><i class="si si-compass"></i>Dashboard</a>
                    </li>
                    <li class="nav-main-heading">Layout</li>
                    <li class="open">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Variations</a>
                        <ul>
                            <li>
                                <a class="active" href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                            </li>
                            <li>
                                <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">More Options</a>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">Another Link</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Another Link</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">Another Link</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">Other Pages</li>
                    <li>
                        <a href="bd_search.html"><i class="si si-magnifier"></i>Search</a>
                    </li>
                    <li>
                        <a href="be_pages_dashboard.html"><i class="si si-action-undo"></i>Go Back</a>
                    </li>
                </ul>
            </div>
            <!-- END Side Main Navigation -->
        </div>
        <!-- Sidebar Content -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">

            <div class="content-header-section">

                <div class="content-header-item">
                    <a class="link-effect font-w700 mr-5" href="{{url('/')}}">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">Sport</span><span
                            class="font-size-xl text-primary">Plan</span>
                    </a>
                </div>

            </div>

            <div class=" content-header-section d-none d-lg-block">

                <ul class="nav-main-header">
                    <li>
                        <a href="{{url('/'.Auth::user()->role.'/programs')}}"><i class="si si-compass"></i>Программы
                            тренировки</a>
                        @if(Auth::user()->role == 'admin' )
                            <ul>
                                <li>
                                    <a href="{{url('/'.Auth::user()->role.'/user-program')}}"><i class="si si-user"></i>Пользователи</a>
                                </li>
                            </ul>
                        @endif
                    </li>
                    @if(Auth::user()->role == 'user' )
                        <li>
                        </li>
                        <a href="{{url('/'.Auth::user()->role.'/purchased/'.Auth::user()->id)}}"><i
                                class="si si-basket"></i>Приобретенные</a>
                    @endif

                    <li>
                        <a href="{{url('/'.Auth::user()->role.'/coming_soon')}}"><i class="si si-clock"></i>Рецепт блюда</a>
                    </li>
                    <li>
                        <a href="{{url('/'.Auth::user()->role.'/product')}}"><i class="si si-basket"></i>Магазин</a>
                    </li>
                    <li>
                        <a class="nav" data-toggle="modal" data-target="#modal-normal" href="#"><i
                                class="si si-puzzle"></i>Сортировать</a>
                    </li>
                    @if(Auth::user()->role == 'admin' || Auth::user()->role == 'trainer')

                        <li>
                            <a href="{{route('programs.create')}}"><i
                                    class="si si-plus"></i>Добавить программу</a>

                            <ul>
                                <li>

                                    <a href="" data-toggle="modal" data-target="#kind"><i class="si si-plus"></i>Добавить
                                        тип </a>
                                </li>

                                @if(Auth::user()->role == 'admin')
                                    <li>
                                        <a href="{{route('product.create')}}"><i class="si si-plus"></i>Добавить
                                            товар</a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                    @endif

                    <li>
                        <a data-toggle="modal" data-target="#modal-search" href="bd_search.html"><i
                                class="si si-magnifier"></i>Поиск</a>
                        @if(Auth::user()->role == 'admin' )
                            <ul>
                                <li>
                                    <a data-toggle="modal" data-target="#modal-search-url" href="bd_search.html"><i
                                            class="si si-magnifier"></i>Поиск по url</a>
                                </li>
                            </ul>
                        @endif
                    </li>
                    <li class="">
                        <a id="navbarDropdown" class="link-effect text-dual-primary-dark" role="button"
                           href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="si si-logout"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrfid="page-header-search"
                        </form>
                    </li>
                    {{--                    <li>--}}
                    {{--                        <a href="be_pages_dashboard.html"><i class="si si-action-undo"></i>Go Back</a>--}}
                    {{--                    </li>--}}
                </ul>
                <!-- END Header Navigation -->
            </div>
            <!-- END Middle Section -->

            <!-- Right Section -->
            <div class="content-header-section">
                <!-- Color Themes + A few of the many header options (used just for demonstration) -->
                <!-- Themes functionality initialized in Template._uiHandleTheme() -->
                <div class="btn-group ml-5" role="group">
                {{--                    <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown"--}}
                {{--                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                {{--                        <i class="fa fa-paint-brush"></i>--}}
                {{--                    </button>--}}
                {{--                    <div class="dropdown-menu dropdown-menu-right min-width-150"--}}
                {{--                         aria-labelledby="page-header-themes-dropdown">--}}
                {{--                        <h6 class="dropdown-header text-center">Color Themes</h6>--}}
                {{--                        <div class="row no-gutters text-center">--}}
                {{--                            <div class="col-4 mb-5">--}}
                {{--                                <a class="text-default" data-toggle="theme" data-theme="default"--}}
                {{--                                   href="javascript:void(0)">--}}
                {{--                                    <i class="fa fa-2x fa-circle"></i>--}}
                {{--                                </a>--}}
                {{--                            </div>--}}
                {{--                            <div class="col-4 mb-5">--}}
                {{--                                <a class="text-elegance" data-toggle="theme"--}}
                {{--                                   data-theme="assets/css/themes/elegance.min.css"--}}
                {{--                                   href="javascript:void(0)">--}}
                {{--                                    <i class="fa fa-2x fa-circle"></i>--}}
                {{--                                </a>--}}
                {{--                            </div>--}}
                {{--                            <div class="col-4 mb-5">--}}
                {{--                                <a class="text-pulse" data-toggle="theme"--}}
                {{--                                   data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">--}}
                {{--                                    <i class="fa fa-2x fa-circle"></i>--}}
                {{--                                </a>--}}
                {{--                            </div>--}}
                {{--                            <div class="col-4 mb-5">--}}
                {{--                                <a class="text-flat" data-toggle="theme"--}}
                {{--                                   data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">--}}
                {{--                                    <i class="fa fa-2x fa-circle"></i>--}}
                {{--                                </a>--}}
                {{--                            </div>--}}
                {{--                            <div class="col-4 mb-5">--}}
                {{--                                <a class="text-corporate" data-toggle="theme"--}}
                {{--                                   data-theme="assets/css/themes/corporate.min.css"--}}
                {{--                                   href="javascript:void(0)">--}}
                {{--                                    <i class="fa fa-2x fa-circle"></i>--}}
                {{--                                </a>--}}
                {{--                            </div>--}}
                {{--                            <div class="col-4 mb-5">--}}
                {{--                                <a class="text-earth" data-toggle="theme"--}}
                {{--                                   data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">--}}
                {{--                                    <i class="fa fa-2x fa-circle"></i>--}}
                {{--                                </a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <h6 class="dropdown-header text-center">Header</h6>--}}
                {{--                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout"--}}
                {{--                                data-action="header_fixed_toggle">Fixed Mode--}}
                {{--                        </button>--}}
                {{--                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout"--}}
                {{--                                data-action="header_style_inverse_toggle">Style--}}
                {{--                        </button>--}}
                {{--                        <div class="dropdown-divider"></div>--}}
                {{--                        <a class="dropdown-item" href="be_layout_api.html">--}}
                {{--                            <i class="si si-chemistry"></i> All Options (API)--}}
                {{--                        </a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <!-- END Color Themes + A few of the many header options -->

                    <!-- Open Search Section -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                {{--                    <li class="list-inline-item mb-sm-6">--}}
                {{--                        <a id="navbarDropdown" class="link-effect text-dual-primary-dark" role="button"--}}
                {{--                           href="{{ route('logout') }}"--}}
                {{--                           onclick="event.preventDefault();--}}
                {{--                                                     document.getElementById('logout-form').submit();">--}}
                {{--                            <i class="si si-logout"></i>--}}
                {{--                        </a>--}}
                {{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--                            @csrfid="page-header-search"--}}
                {{--                        </form>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item dropdown">--}}
                {{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
                {{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                {{--                            {{ Auth::user()->name }} <span class="caret"></span>--}}
                {{--                        </a>--}}

                {{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                {{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
                {{--                               onclick="event.preventDefault();--}}
                {{--                                                     document.getElementById('logout-form').submit();">--}}
                {{--                                {{ __('Logout') }}--}}
                {{--                            </a>--}}

                {{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--                                @csrf--}}
                {{--                            </form>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                <!-- END Open Search Section -->

                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <div class="form-group">
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout"
                                data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>



                    </div>
                {{--                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout"--}}
                {{--                            data-action="sidebar_toggle">--}}
                {{--                        <i class="fa fa-navicon"></i>--}}
                {{--                    </button>--}}
                <!-- END Toggle Sidebar -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header">
                <div class="content-header content-header-fullrow">
                    <form action="bd_search.html" method="post">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Close Search Section -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-secondary px-15" data-toggle="layout"
                                        data-action="header_search_off">
                                    <i class="fa fa-times"></i>
                                </button>
                                <!-- END Close Search Section -->
                            </div>
                            <input type="text" class="form-control" placeholder="Search or hit ESC.."
                                   id="page-header-search-input" name="page-header-search-input">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary px-15">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Activity pages under Elements category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary">
                <div class="content-header content-header-fullrow text-center">
                    <div class="content-header-item">
                        <i class="fa fa-sun-o fa-spin text-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header">
            <div class="content-header content-header-fullrow">
                <form action="bd_search.html" method="post">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- Close Search Section -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- END Close Search Section -->
                        </div>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary px-15">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary">
            <div class="content-header content-header-fullrow text-center">
                <div class="content-header-item">
                    <i class="fa fa-sun-o fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content content-full">
            <!-- Hero -->
            <div class="block block-rounded">
                <div class="block-content bg-pattern" style="background-image: url('assets/media/various/bg-pattern-inverse.png');">
                    <div class="py-20 text-center">
                        <h1 class="font-w700 mb-10">Dashboard</h1>
                        <h2 class="h4 font-w400 text-muted">Hey Admin, you look great!</h2>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Dummy content -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="block">
                        <div class="block-content">
                            <p class="text-center py-100">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="block">
                        <div class="block-content">
                            <p class="text-center py-100">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="block">
                        <div class="block-content">
                            <p class="text-center py-100">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="block">
                        <div class="block-content">
                            <p class="text-center py-100">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="block">
                        <div class="block-content">
                            <p class="text-center py-100">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="block">
                        <div class="block-content">
                            <p class="text-center py-100">...</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="block">
                        <div class="block-content">
                            <p class="text-center py-100">...</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Dummy content -->
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
            </div>
            <div class="float-left">
                <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.1</a> &copy; <span class="js-year-copy"></span>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<script src="{{asset('assets/js/codebase.core.min.js')}}"></script>

<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{asset('assets/js/codebase.app.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/jquery-vide/jquery.vide.min.js')}}"></script>

</body>
</html>
