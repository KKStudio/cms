@extends('admin.template')

@section('header')
    Dashboard
@stop

@section('small')
    Control panel
@stop

@section('content')

    <div class="row">
	    	
        <a class="twitter-timeline"  href="https://twitter.com/KKStudioCMS" data-widget-id="525701394041286656">Tweety na temat @KKStudioCMS</a>
    	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        
    </div>

@stop
