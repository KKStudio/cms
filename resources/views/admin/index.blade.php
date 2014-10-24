@extends('admin.template')

@section('content')

	<section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
    </section>


    <section class="content">

	    <div class="row">

		    <section class="col-lg-3 col-md-6">   

                <ul class="dropdown-menu" style="display: block; position: static; padding: 0px; width: 100%; margin-bottom: 20px;"> 
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="http://placehold.it/100x100" class="img-circle" alt="User Image">
                            <p style="text-shadow: none; color: white; font-weight: bold;">
                                {{ Auth::user()->email }}
                                <small>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', Auth::user()->created_at)->format('d.m.Y') }}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ url('admin/settings') }}" class="btn btn-default btn-flat">Settings</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('auth/logout') }}" class="btn btn-default btn-flat">Log out</a>
                            </div>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-heart"></i>
                            <h3 class="box-title">Welcome!</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            Thank you for choosing <b>KK&nbsp;Studio&nbsp;CMS</b>! If you encounter any problems please contact us via <a href="mailto:kkstudio.contact@gmail.com" target="__blank">e-mail</a> or check our <a href="http://kkstudio.eu" target="__blank">website</a>.

                        </div><!-- /.box-body -->
                    </div>

            </section>

            <section class="col-lg-5 col-md-6">  

		    	<a class="twitter-timeline"  href="https://twitter.com/KKStudioCMS" data-widget-id="525701394041286656">Tweety na temat @KKStudioCMS</a>
            	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            
                <br> <br>

                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-info"></i>
                            <h3 class="box-title">About CMS</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                           <b>KK&nbsp;Studio&nbsp;CMS</b> is powered by <a href="http://laravel.com" target="__blank">Laravel</a> and was created for fast and easy deployment of simple websites. It comes with commonly used modules which makes it one of the quickest way to get fully featured website. KK&nbsp;Studio&nbsp;CMS is developed and maintained by <a href="http://krzysztof.be" target="__blank">Krzysztof&nbsp;Bączkiewicz</a>, creator of <a href="http://kkstudio.eu" target="__blank">KK&nbsp;Studio</a> web agency.
                        </div><!-- /.box-body -->
                    </div>

		    </section>

		    <section class="col-lg-4 ">

               <div class="box box-solid bg-light-blue-gradient col-md-6">
                   
                    <div class="box-body">
                        <div id="world-map" style="height: 250px;"></div>
                    </div><!-- /.box-body-->
                   
                </div> <!-- Calendar -->

                <div class="box box-solid bg-green-gradient col-md-6">
                   
                    <div class="box-body no-padding">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%"></div>
                    </div><!-- /.box-body -->  
                   
                </div><!-- /.box -->     

		    </section>

	    </div>

    
    </section><!-- /.content -->

@stop

@section('scripts')

<script type="text/javascript">
    
     //jvectormap data
    var visitorsData = {
        @foreach($visits as $visit)
        "{{ $visit->abbr }}": {{ $visit->total }},
        @endforeach
    };
    //World map by jvectormap
    $('#world-map').vectorMap({
        map: 'world_mill_en',
        backgroundColor: "transparent",
        regionStyle: {
            initial: {
                fill: '#e4e4e4',
                "fill-opacity": 1,
                stroke: 'none',
                "stroke-width": 0,
                "stroke-opacity": 1
            }
        },
        series: {
            regions: [{
                    values: visitorsData,
                    scale: ["#92c1dc", "#ebf4f9"],
                    normalizeFunction: 'polynomial'
                }]
        },
        onRegionLabelShow: function(e, el, code) {
            if (typeof visitorsData[code] != "undefined")
                el.html(el.html() + ': ' + visitorsData[code] + ' new visitors');
        }
    });

    //The Calender
    $("#calendar").datepicker();



</script>

@stop