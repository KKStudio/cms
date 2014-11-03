@extends('default.template')

@section('content')

	

	<!-- +++++ Welcome Section +++++ -->
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">

					<img src="{{ m('Info')->getAvatar() }}" class="img-circle" style="width: 150px; height: auto; ">
		
					<h1>{!!  m('Info')->header() !!}</h1>
					<p>{!!  m('Info')->about() !!}</p>					
				</div><!-- /col-lg-8 -->
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /ww -->

@stop