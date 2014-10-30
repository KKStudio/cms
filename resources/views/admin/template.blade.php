<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KK Studio CMS | Admin</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <div id="wrapper">
      
      <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="{{ url('admin') }}" class="logo">
                <img src="{{ asset('logo.png') }}">
            </a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="">
                    <a href="{{ url('/') }}" target="__blank">
                        <i class="glyphicon glyphicon-globe"></i> <span>Preview</span>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="{{ url('admin/settings') }}">
                  <i class="glyphicon glyphicon-cog"></i>&nbsp;Settings    
                </a>
              </li>
              <li>
                <a href="{{ url('auth/logout') }}">
                  <i class="glyphicon glyphicon-off"></i>&nbsp;Log&nbsp;out    
                </a>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div class="clearfix"></div>

      <div class="row">

        <div class="col-sm-3 col-md-3 col-lg-2" id="sidebar">

          @if(!count($modules))

          <small>No modules available. Check our store for new ones.</small>

          @else

          <button type="button" class="hidden-sm hidden-md hidden-lg btn btn-warning collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
             Toggle module list
          </button>

          <div class="clearfix"></div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class=" list-group ">
                    
                <li class="list-group-item">

                  <h4>Modules</h4>
                    
                </li>

            @foreach($modules as $module) 
                    
                <li class="list-group-item">
                    <a href="{{ url('admin/' . $module->slug ) }}">
                      <span>{{ $module->name }}</span>
                        &nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-{{ $module->icon }}"></i>
                    </a>
                </li>

            @endforeach
                    
                <li class="list-group-item">
                    <a href="http://shop.kkstudio.eu" target="__blank" class="btn btn-lg btn-success">
                       <i class="glyphicon glyphicon-shopping-cart"></i> 
                        More
                    </a>
                </li>

          </ul>
          </div>

          @endif

          <br><br>

        </div>

        <div class="col-sm-9 col-md-9 col-lg-10">

          @include('flash::message')

            <section class="content">

            @yield('content')

                <div class="clearfix"></div>

            </section>

        </div>

      </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
    @yield('scripts')
  </body>
</html>