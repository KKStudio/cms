<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>{{ m('Info')->title() }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ a('css/bootstrap.css') }}" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{ a('css/main.css') }}" rel="stylesheet">
    <link href="{{ a('css/config.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="{{ a('js/hover.zoom.js') }}"></script>
    <script src="{{ a('js/hover.zoom.conf.js') }}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ home() }}">{{ m('Info')->name() }}</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	@foreach( m('Menu')->get() as $menu )
            <li><a href="{{ url($menu->url) }}">{{ $menu->display_name }}</a></li>
            @endforeach
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
		
		@yield('content')
	
	<!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>My Bunker</h4>
					<p>
						Some Address 987,<br/>
						+34 9054 5455, <br/>
						Madrid, Spain.
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>My Links</h4>
					<p>
						<a href="#">Dribbble</a><br/>
						<a href="#">Twitter</a><br/>
						<a href="#">Facebook</a>
					</p>
				</div><!-- /col-lg-4 -->
				
				<div class="col-lg-4">
					<h4>About Stanley</h4>
					<p>This cute theme was created to showcase your work in a simple way. Use it wisely.</p>
				</div><!-- /col-lg-4 -->
			
			</div>
		
		</div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ a('js/bootstrap.min.js')}}"></script>
  </body>
</html>
