@extends('admin.template')

@section('content')

    <div class="row">

        <div class="col-md-6 col-lg-5">

            <div class="row">

                <h3>KK CMS</h3>

                <hr>

                <i>

                    <p>Witaj w systemie CMS, który pozwoli Ci w kilku krokach stworzyć nowoczesną stronę internetową!</p>
                
                </i>

                <p>Jeśli dopiero zaczynasz tworzyć swoją pierwszą stronę, zajrzyj do działu <a href="{{ url('admin/help') }}">Pomocy</a>, gdzie znajdziesz instrukcje oraz odpowiedzi na najczęstsze problemy.</p>
            </div>

            <br>
            
            <a class="twitter-timeline"  href="https://twitter.com/KKStudioCMS" data-widget-id="525701394041286656">Tweety na temat @KKStudioCMS</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            
        </div>

        <div class="col-md-6 col-lg-7">

        	<h3>{{ tr('admin.basic') }}</h3>

        	<hr>

        	<ul class="list-unstyled">

        		<li>
        			<h4>{{ tr('admin.blog') }}</h4>
        			<p class="text-muted">{!! tr('admin.blog_desc') !!}</p>
        		</li>

        		<li>
        			<h4>{{ tr('admin.gallery') }}</h4>
        			<p class="text-muted">{!! tr('admin.gallery_desc') !!}</p>
        		</li>

        		<li>
        			<h4>{{ tr('admin.info') }}</h4>
        			<p class="text-muted">{!! tr('admin.info_desc') !!}</p>
        		</li>

        		<li>
        			<h4>{{ tr('admin.menu') }}</h4>
        			<p class="text-muted">{!! tr('admin.menu_desc') !!}</p>
        		</li>

        		<li>
        			<h4>{{ tr('admin.page') }}</h4>
        			<p class="text-muted">{!! tr('admin.pages_desc') !!}</p>
        		</li>

        		<li>
        			<h4>{{ tr('admin.portfolio') }}</h4>
        			<p class="text-muted">{!! tr('admin.portfolio_desc') !!}</p>
        		</li>

        	</ul>

        </div>

    </div>

@stop
