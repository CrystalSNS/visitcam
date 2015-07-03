@include('static.header')
<div class="navbar-collapse collapse ">
	<ul class="nav navbar-nav">
		<li ><a href="index">Home</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Tour <b class=" icon-angle-down"></b></a>
			<ul class="dropdown-menu">
				<li><a href="tour_{{"Beach"}}">Beach</a></li>
				<li><a href="tour_{{"History"}}">History</a></li>
				<li><a href="tour_{{"Trekking"}}">Trekking</a></li>
				<li><a href="tour_{{"Biking"}}">Biking</a></li>
				<li><a href="tour_{{"Overland"}}">Overland</a></li>
				<li><a href="tour_{{"Golf"}}">Golf</a></li>
			</ul>
		</li>
		<li><a href="provinces">Provinces</a></li>
		<li class="active"><a href="travel_guide">Travel Guide</a></li>
		<li ><a href="about_us">About Us</a></li>
		<li><a href="contact_us">Contact</a></li>
	</ul>
</div>
</div>
</div>

</header>
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
