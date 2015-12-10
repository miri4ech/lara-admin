<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AXON-InfoTech | ADMIN BACKEND</title>

   @section('css')

    <!-- Bootstrap core CSS -->

    <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet">

    <link href="{!! asset('assets/fonts/css/font-awesome.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/css/animate.min.css') !!}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{!! asset('assets/css/custom.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/css/icheck/flat/green.css') !!}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/sweetalert.css') !!}">
    @show

    <script src="{!! asset('assets/js/jquery.min.js') !!}"></script>


    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body class="nav-md">

    <div class="container body">

        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{ url('/home') }}" class="site_title"><img src="{!! asset('assets/images/axon.png') !!}" alt="..." class="profile_img"></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="{!! asset('assets/images/user.png') !!}" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            {{ Auth::user()->name }}
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div class="clearfix"></div>
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i> Dashboard</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{!! asset('assets/images/user.png') !!}" alt="">{{ Auth::user()->name }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                @yield('content')
                    <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Copyright © 2015 <a href="http://www.axoninfotech.net/">Axon Infotech</a> . |
                            <span class="lead"> <i class="fa fa-paw"></i> All rights reserved.</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

                </div>
                <!-- /page content -->
            </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        @section('scripts')
        <script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
        <script src="{!! asset('assets/js/sweetalert.min.js') !!}"></script>
        @include('partials.sweet-alert')
        <!-- chart js -->
        <script src="{!! asset('assets/js/chartjs/chart.min.js') !!}"></script>
        <!-- bootstrap progress js -->
        <script src="{!! asset('assets/js/progressbar/bootstrap-progressbar.min.js') !!}"></script>
        <script src="{!! asset('assets/js/nicescroll/jquery.nicescroll.min.js') !!}"></script>
        <!-- icheck -->
        <script src="{!! asset('assets/js/icheck/icheck.min.js') !!}"></script>

        <script src="{!! asset('assets/js/custom.js') !!}"></script>


        @show


</body>

</html>