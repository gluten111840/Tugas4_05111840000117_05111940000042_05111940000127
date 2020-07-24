<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <link type="text/css" href="{{asset('template')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="{{asset('template')}}/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="{{asset('template')}}/css/theme.css" rel="stylesheet">
        <link type="text/css" href="{{asset('template')}}/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        
        @yield('css')
        <script scr="{{asset('template')}}/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script scr="{{asset('template')}}/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script scr="{{asset('template')}}/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script scr="{{asset('template')}}/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script scr="{{asset('template')}}/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script scr="{{asset('template')}}/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script scr="{{asset('template')}}/scripts/common.js" type="text/javascript"></script>
        @yield('js')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="homeee">Edmin </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                   
                        <form class="navbar-search pull-left input-append" action="{{ route('search_question') }}" method="GET" role="search">
                            <input type="text" class="span3 validate" name="search" value="{{ old('search') }}" placeholder="search">
                            <button class="btn" type="submit">
                                <i class="icon-search"></i>
                            </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Hello, {{ Auth::user()->username ?? ''}}!</a></li>
                                    <li><a href="question">Ask Your Question!</a></li>
                                    <li><a href="#">Your Answers</a></li>
                                    <li class="divider"></li>
                                    <li><a href="{{ route('logout') }}">Logout</a></li>
                                </ul>
                            </li>
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
                @yield('hello')
                <div class="row">
                    <div class="span12">
                        @yield('main')
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
    </body>
</html>