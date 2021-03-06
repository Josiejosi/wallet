<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>ELITE MEMBERS</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />

        <meta name="csrf_token" content="{{ csrf_token() }}" />
        <meta name="secondary_level_token" content="{{ Auth::user()->id }}" />
        <meta name="fallback_url" content="{{env('SOCKET_URL')}}" />
        
        <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/uniform.default.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('css/jquery.countdown.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet" type="text/css" />

        <style type="text/css">
            
        .mt-element-card.mt-card-round .mt-card-item .mt-card-avatar {
            border-radius: 50%!important;
            -webkit-mask-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAIAAACQd1PeAAAAGXRFW…9iZSBJbWFnZVJlYWR5ccllPAAAAA5JREFUeNpiYGBgAAgwAAAEAAGbA+oJAAAAAElFTkSuQmCC);
        }

        .page-header .topbar-actions .btn-group-img .btn {
            color: #fff;
            font-size: 18px;
            padding: 10px;
        }

        </style>

        @yield('css')

        <link rel="shortcut icon" href="imgs/favicon.ico" /> 

        <script src="{{asset('js/jquery-1.11.2.min.js')}}" type="text/javascript"></script>
    </head>
    <!-- END HEAD -->

    <body class="">
        <!-- BEGIN HEADER -->
        <header class="page-header">
            <nav class="navbar" role="navigation">
                <div class="container-fluid">
                    <div class="havbar-header">
                        <a id="index" class="navbar-brand" href="{{url('/home')}}">
                            <img src="{{asset('imgs/logo-sm.png')}}" alt="Logo"> 
                        </a>
                        <div class="topbar-actions">
                            <div class="btn-group-img btn-group">
                                <button 
                                    type="button" 
                                    class="btn btn-sm dropdown-toggle" 
                                    data-toggle="dropdown" 
                                    data-hover="dropdown" 
                                    data-close-others="true">
                                    {{$admin_name}}
                                </button>
                                <ul class="dropdown-menu-v2" role="menu">
                                    <li>
                                        <a href="{{url('/logout')}}">
                                            <i class="icon-key"></i> Log Out 
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- END USER PROFILE -->
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <div class="page-content page-content-popup">
                <div class="page-content-fixed-header">
                    <ul class="page-breadcrumb">
                        <li>Home</li>
                    </ul>
                    <div class="content-header-menu">
                        <button type="button" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="toggle-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="page-sidebar-wrapper">

                    <div class="page-sidebar navbar-collapse collapse">
                        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light " data-keep-expanded="true" data-auto-scroll="true" data-slide-speed="200">
                            <li class="nav-item start ">
                                <a href="{{url('/admin/dashboard')}}" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>                            
                            <li class="nav-item start ">
                                <a href="{{url('/admin/create/elite')}}" class="nav-link nav-toggle">
                                    <i class="icon-plus icons"></i>
                                    <span class="title">Add Elite</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="{{url('/admin/members')}}" class="nav-link nav-toggle">
                                    <i class="icon-user"></i>
                                    <span class="title">Members</span>
                                </a>
                            </li> 
                            <li class="nav-item start ">
                                <a href="{{url('/admin/elite')}}" class="nav-link nav-toggle">
                                    <i class="icon-user-follow icons"></i>
                                    <span class="title">Elite</span>
                                </a>
                            </li>                            
                            <li class="nav-item start ">
                                <a href="{{url('/admin/scheduled')}}" class="nav-link nav-toggle">
                                    <i class="icon-calendar icons"></i>
                                    <span class="title">All Scheduled</span>
                                </a>
                            </li>                            
                            <li class="nav-item start ">
                                <a href="{{url('/admin/donations')}}" class="nav-link nav-toggle">
                                    <i class="icon-present icons"></i>
                                    <span class="title">All Active Donations</span>
                                </a>
                            </li>                            
                            <li class="nav-item start ">
                                <a href="{{url('/admin/settings')}}" class="nav-link nav-toggle">
                                    <i class="icon-settings icons"></i>
                                    <span class="title">System Settings</span>
                                </a>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <div class="page-fixed-main-content">

                    @yield('content')
                    
                </div>
                <!-- BEGIN FOOTER -->
                <p class="copyright-v2">{{date("Y")}} © Prestige Wallet.
                </p>
                <a href="#index" class="go2top">
                    <i class="icon-arrow-up"></i>
                </a>
                <!-- END FOOTER -->
            </div>
        </div>
        <!-- END CONTAINER -->
        <!--[if lt IE 9]>
        <script src="../assets/global/plugins/respond.min.js"></script>
        <script src="../assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        
        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.uniform.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/app.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/quick-sidebar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/jquery.countdown.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/toastr.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/bootbox.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/modavication.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/pw_notifications.js')}}" type="text/javascript"></script>
        <!--        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.8/socket.io.min.js" type="text/javascript"></script>
        <script src="{{asset('js/push-notification.js')}}" type="text/javascript"></script> 
        -->
        

        @yield('js')

    </body>

</html>