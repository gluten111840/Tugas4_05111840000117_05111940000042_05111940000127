<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
        <link type="text/css" href="{{asset('template')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="{{asset('template')}}/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="{{asset('template')}}/css/theme.css" rel="stylesheet">
        <link type="text/css" href="{{asset('template')}}/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        @yield('css')
        <style>
            .stoke{
                border: 1px solid black;
            }
            .text-center {
                text-align: center;
                }

        </style>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="#">Logo </a>
                        
                    <div class="nav-collapse collapse navbar-inverse-collapse">

                        <form class="navbar-search pull-left input-append" action="#">
                            <input type="text" class="span3">
                            <button class="btn" type="button">
                                <i class="icon-search"></i>
                            </button>
                        </form>

                        <ul class="nav pull-right">
                            @if (is_null(Auth::user()))
                            <li><a href="{{ route('login') }}">Login </a></li>
                            <li><a href="{{ route('register') }}">Register </a></li>
                            @else
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your questions</a></li>
                                    <li><a href="#">Your answers</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('logout') }}">Logout </a></li>
                            @endif
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                @yield('main')
            </div>
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
            </div>
        </div>
        <script scr="{{asset('template')}}/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script scr="{{asset('template')}}/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script scr="{{asset('template')}}/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script scr="{{asset('template')}}/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script scr="{{asset('template')}}/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script scr="{{asset('template')}}/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script scr="{{asset('template')}}/scripts/common.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        @yield('js')
    </body>
</html>