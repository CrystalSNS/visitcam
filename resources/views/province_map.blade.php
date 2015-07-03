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
		<li class="active"><a href="provinces">Provinces</a></li>
		<li ><a href="travel_guide">Travel Guide</a></li>
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
					<li><a href="province_{{$provincemap[0]['pro_id']}}"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Phnom Penh</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
			 @foreach($provincemap as $promap)
				<article>
				<div class="article" >
				<img  style="width:900px; height:500px;" src={{$promap['pro_map']}}>
			</div>
				</article>
			@endforeach
			</div>
			<div class="col-lg-3">
				<aside class="right-sidebar">
				<div class="widget">
					<form class="form-search">
						<input class="form-control" type="text" placeholder="Search..">
					</form>
				</div>
				<div class="widget">
					<h5 class="widgetheading"><h3>Phnom Penh</h3></h5>
						<ul class="cat">
							<li><i class="icon-angle-right"></i><a href="province_{{$promap['pro_id']}}">{{$promap['pro_name']}} Overview</a></li>
							<li><i class="icon-angle-right"></i><a href="province_imgs_{{$promap['pro_id']}}">{{$promap['pro_name']}} Photos</a></li>
							<li><i class="icon-angle-right"></i><a href="province_map_{{$promap['pro_id']}}">{{$promap['pro_name']}} Map</a></li>
							<li><i class="icon-angle-right"></i><a href="province_tour_{{$promap['pro_id']}}">{{$promap['pro_name']}} Tours</a></li>
							<li><i class="icon-angle-right"></i><a href="province_hotel_{{$promap['pro_id']}}">{{$promap['pro_name']}} Hotels</a></li>

						</ul>
				</div>
				</aside>
			</div>
		</div>
	</div>
	</section>
</div>
</body>
@include('static.footer')
