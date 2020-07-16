<!doctype html>
<html lang="en" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name="description"
          content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
          content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('assets/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>

<!-- Page Container -->
<!--
    Available classes for #pages-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-inverse'                           Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-pages-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'pages-header-fixed'                         Fixed Header

HEADER STYLE

    ''                                          Classic Header style if no class is added
    'pages-header-modern'                        Modern Header style
    'pages-header-inverse'                       Dark themed Header (works only with classic Header style)
    'pages-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'pages-header-glass pages-header-inverse'     Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-inverse main-content-boxed">

    <!-- Sidebar -->

    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="content-header-section">
                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700 mr-5" href="{{url('/')}}">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">Sport</span><span
                            class="font-size-xl text-primary">Plan</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Left Section -->

            <!-- Middle Section -->
            <div class="content-header-section d-none d-lg-block">
                <!-- Header Navigation -->
                <!--
                Desktop Navigation, mobile navigation can be found in #sidebar

                If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                If your sidebar menu includes headings, they won't be visible in your header navigation by default
                If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
                -->
                <ul class="nav-main-header">
                    <li>
                        <a href="{{url('/'.Auth::user()->role.'/programs')}}"><i class="si si-compass"></i>Training
                            programs</a>
                    </li>
                    @if(Auth::user()->role == 'user' )
                        <li>
                            <a href="{{url('/'.Auth::user()->role.'/programs')}}"><i class="si si-basket"></i>Purchased</a>
                        </li>
                    @endif
                    <li>
                        <a href="{{url('/'.Auth::user()->role)}}"><i class="si si-clock"></i>Recipe</a>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Sort</a>
                        <ul>
                            @foreach($kind as $k)
                                <li>
                                    <form action="{{route('kind.destroy',$k->id)}}" method="post">
                                        <a href="">{{$k->name}}
                                            @if(Auth::user()->role == 'admin')
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="btn btn-sm btn-circle btn-alt-secondary mr-5 mb-5">
                                                    <i class="fa fa-times"></i>
                                                </button>

                                            @endif
                                        </a>
                                    </form>
                                </li>
                            @endforeach
                            {{--                            <li>--}}
                            {{--                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">More Options</a>--}}
                            {{--                                <ul>--}}
                            {{--                                    <li>--}}
                            {{--                                        <a href="javascript:void(0)">Another Link</a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                                        <a href="javascript:void(0)">Another Link</a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                                        <a href="javascript:void(0)">Another Link</a>--}}
                            {{--                                    </li>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}
                        </ul>
                    </li>
                    @if(Auth::user()->role == 'admin' || Auth::user()->role == 'trainer')
                        {{--                        <li>--}}
                        {{--                            <a href="{{route('programs.create')}}"><i class="si si-plus"></i>Add program</a>--}}
                        {{--                        </li>--}}
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="{{route('programs.create')}}"><i
                                    class="si si-plus"></i>Add program</a>
                            <ul>
                                <li>
                                    <a href="" data-toggle="modal" data-target="#kind">Add kind </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    @if(Auth::user()->role == 'admin' || Auth::user()->role == 'nutritionist')
                        <li>
                            <a href="bd_search.html"><i class="si si-plus"></i>Add recipe</a>
                        </li>
                    @endif
                    <li>
                        <a href="bd_search.html"><i class="si si-magnifier"></i>Search</a>
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
                    <li class="list-inline-item">
                        <a id="navbarDropdown" class="link-effect text-dual-primary-dark" role="button"
                           href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="si si-logout"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
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
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout"
                            data-action="sidebar_toggle">
                        <i class="fa fa-navicon"></i>
                    </button>
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
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        @yield('content')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600"
                                                                          href="https://1.envato.market/ydb"
                                                                          target="_blank">pixelcave</a>
            </div>
            <div class="float-left">
                <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.1</a> &copy; <span
                    class="js-year-copy"></span>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
    Codebase JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the assets/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    assets/js/core/jquery.min.js
    assets/js/core/bootstrap.bundle.min.js
    assets/js/core/simplebar.min.js
    assets/js/core/jquery-scrollLock.min.js
    assets/js/core/jquery.appear.min.js
    assets/js/core/jquery.countTo.min.js
    assets/js/core/js.cookie.min.js
-->
<div class="modal fade" id="kind" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-themed">
                <div class="block-header bg-dark">
                    <h3 class="block-title">Bootstrap</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="content_toggle"></button>
                    </div>
                </div>
                <form action="{{route('kind')}}" method="get">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-dark ">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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