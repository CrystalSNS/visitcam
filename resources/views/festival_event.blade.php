@include('static.header')
<body>

	<div id="wrapper">

		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active">Festival and Event</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<article>
							
							<!-- end flexslider -->
							@foreach($events as $evts)
							<a href="eventImg_{{$evts['event_id']}}">
								<div class="col-lg-6">									
									<h4>{{$evts['event_title']}}</h4>
									<img src='{{$evts['event_img_url']}}' alt="View image"/>
									<p>{{$evts['event_desc']}}</p>
								</div>
							</a>
							@endforeach
							
						</article>					
					</div>

					@include('static.menu_travel')
				</div>
			</div>
			<h4 style="text-align: center;">{!!$events->render() !!}</h4>
		</section>
		
		<div>
			
		</body>
		@include('static.footer')
