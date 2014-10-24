<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>KK Studio CMS | Admin</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="{{ asset('css/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="{{ asset('css/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="{{ asset('css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ asset('css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">

        <header class="header">
            <a href="{{ url('admin') }}" class="logo">
                KK Studio CMS
            </a>

            <nav class="navbar navbar-static-top" role="navigation">

                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="{{ url('auth/logout') }}">
                                <i class="glyphicon glyphicon-lock"></i>
                                <span>Log out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">

            <aside class="left-side sidebar-offcanvas">

                <section class="sidebar">

                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>

                    <ul class="sidebar-menu">
                    
                        <li class="">
                            <a href="{{ url('/') }}" target="__blank">
                                <i class="fa fa-globe"></i> <span>Preview</span>
                            </a>
                        </li>
                    
                        <li class="">
                            <a href="{{ url('admin') }}">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        @foreach($modules as $module) 
                    
                            <li class="">
                                <a href="{{ url('admin/' . $module->slug ) }}">
                                    &nbsp;&nbsp;&nbsp;<i class="fa fa-{{ $module->icon }}"></i> <span>{{ $module->name }}</span>
                                </a>
                            </li>

                        @endforeach
                    
                        <li class="">
                            <a href="{{ url('settings') }}">
                                <i class="fa fa-cog"></i> <span>Settings</span>
                            </a>
                        </li>
                       
                    </ul>
                </section>

            </aside>


            <aside class="right-side">

                @yield('content')
                
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{{ asset('js/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
    
        <!-- daterangepicker -->
        <script src="{{ asset('js/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="{{ asset('js/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ asset('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="{{ asset('js/AdminLTE/app.js') }}" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('js/AdminLTE/dashboard.js') }}" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('js/AdminLTE/demo.js') }}" type="text/javascript"></script>

    </body>
</html>