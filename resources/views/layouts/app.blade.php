<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords"
        content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">

    <title>@yield('pageTitle')</title>
    <title>{{ config('app.name', 'UiTM ROTU Army Management System') }}</title>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/palapes.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/bootstrap/css/bootstrap.min.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/icon/icofont/css/icofont.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/assets/css/jquery.mCustomScrollbar.css') }}">
    @yield('styles')
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- Taskbar Top -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="/home">
                            <img class="img-fluid" src="{{ asset('template/assets/images/logo.png') }}"
                                alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                {{-- <a href="#!">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-pink"></span>
                                </a> --}}
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    {{-- </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="{{ asset('template/assets/images/avatar-4.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius"
                                                src="{{ asset('template/assets/images/avatar-4.jpg') }}"
                                                alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                    elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    @if (Auth::user()->role == 'trainer')
                                    <img src="{{ asset('template/assets/images/officers.png') }}" class="img-radius"
                                    alt="User-Profile-Image">
                                    @endif
                                    @if (Auth::user()->role == 'cadet')
                                    <img src="{{ asset('template/assets/images/cadets.png') }}" class="img-radius"
                                    alt="User-Profile-Image">
                                    @endif

                                    <span>{{ Auth::user()->fullName }}</span>                                    
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    @if (Auth::user()->role == 'trainer')
                                    <li>
                                        <a href="{{ route('profile-trainer.profile') }}">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="/messages-trainer">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li> --}}
                                    @endif
                                    @if (Auth::user()->role == 'cadet')
                                    <li>
                                        <a href="{{ route('profile-cadet') }}">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="/messages-cadet">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li> --}}
                                    @endif
                                    <li>
                                        <a href="#" onclick="
                                            event.preventDefault();
                                            document.getElementById('logout').submit();
                                        ">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                        <form id="logout" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container" style="background-image: url('{{asset('template/assets/images/loreng.jpg')}}')">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    @if (Auth::user()->role == 'trainer')
                                        <img class="img-100 img-radius"
                                            src="{{ asset('template/assets/images/officers.png') }}"
                                            alt="User-Profile-Image">
                                    @endif
                                    @if (Auth::user()->role == 'cadet')
                                        <img class="img-100 img-radius"
                                            src="{{ asset('template/assets/images/cadets.png') }}"
                                            alt="User-Profile-Image">
                                    @endif
                                    <div class="user-details">
                                        <span>{{ Auth::user()->fullName }}</span>
                                        @if (Auth::user()->role == 'trainer')
                                            <span>Trainer</span>
                                        @endif
                                        @if (Auth::user()->role == 'cadet')
                                            <span>Cadet</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="/home">
                                        <span class="pcoded-micon"><i class="ti-home"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                @if (Auth::user()->role == 'trainer')
                                <ul class="pcoded-item pcoded-left-item">
                                    <li>
                                        <a href="{{ route('trainers.create') }}">
                                            <span class="pcoded-micon"><i class="ti-medall"></i><b>FC</b></span>
                                            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Trainer Registration</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                                        {{-- <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{ route('trainers.create') }}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Add Trainers</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{ route('trainers.index') }}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Manage Trainers</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <ul class="pcoded-item pcoded-left-item">
                                        <li>
                                            <a href="{{ route('cadets.index') }}">
                                                <span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
                                                <span class="pcoded-mtext" data-i18n="nav.form-components.main">Manage Cadets</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    {{-- <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="ti-user"></i></span>
                                            <span class="pcoded-mtext"
                                                data-i18n="nav.basic-components.main">Cadets</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{ route('cadets.index') }}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Manage Cadets</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                @endif

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-anchor"></i></span>
                                        <span class="pcoded-mtext"
                                            data-i18n="nav.basic-components.main">Trainings</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    @if (Auth::user()->role == 'trainer')
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{ route('trainings.create') }}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Add Training</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{ route('trainings.index') }}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Manage
                                                        Training</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    @endif
                                    @if (Auth::user()->role == 'cadet')
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="{{ route('register-trainings.main') }}">
                                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext"
                                                        data-i18n="nav.basic-components.alert">Register Training</span>
                                                    <span class="pcoded-mcaret"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('register-trainings.index') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Manage
                                                    Training</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-agenda"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Equipments</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    @if (Auth::user()->role == 'trainer')
                                    {{-- <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('equipments.create') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add
                                                    Equipment</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul> --}}
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('equipments.index') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Manage
                                                    Equipment</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="/equipments-pending">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Equipment Approval</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="/equipments-returning">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Equipment Return</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    @endif
                                    @if (Auth::user()->role == 'cadet')
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('cadet-equipments.create') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Equipment Application</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('cadet-equipments.index') }}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.alert">Manage Application</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content" >
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body" >
                                        @include('widget.message')
                                        @yield('content')
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Required Jquery -->
        <script type="text/javascript" src="{{ asset('template/assets/js/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('template/assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('template/assets/js/popper.js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('template/assets/js/bootstrap/js/bootstrap.min.js') }}">
        </script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript"
            src="{{ asset('template/assets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="{{ asset('template/assets/js/modernizr/modernizr.js') }}"></script>
        <!-- am chart -->
        {{-- <script src="{{ asset('template/assets/pages/widget/amchart/amcharts.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('template/assets/pages/widget/amchart/serial.min.js') }}"></script> --}}
        <!-- Todo js -->
        {{-- <script type="text/javascript " src="{{ asset('template/assets/pages/todo/todo.js') }}"></script> --}}
        <!-- Custom js -->
        {{-- <script type="text/javascript" src="{{ asset('template/assets/pages/dashboard/custom-dashboard.js') }}">
        </script> --}}
        <script type="text/javascript" src="{{ asset('template/assets/js/script.js') }}"></script>
        <script type="text/javascript " src="{{ asset('template/assets/js/SmoothScroll.js') }}"></script>
        <script src="{{ asset('template/assets/js/pcoded.min.js') }}"></script>
        <script src="{{ asset('template/assets/js/demo-12.js') }}"></script>
        <script src="{{ asset('template/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script>
            var $window = $(window);
            var nav = $('.fixed-button');
            $window.scroll(function() {
                if ($window.scrollTop() >= 200) {
                    nav.addClass('active');
                } else {
                    nav.removeClass('active');
                }
            });

        </script>
        @yield('scripts')
</body>

</html>
