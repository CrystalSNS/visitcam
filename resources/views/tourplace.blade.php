@include('static.header')
<link href="css/beach.css" rel="stylesheet" />
<div class="navbar-collapse collapse ">
	<ul class="nav navbar-nav">
		<li ><a href="index">Home</a></li>
		<li class="dropdown active">
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
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">{{$tourplaces[0]['cat_name']}}</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				 @foreach($tourplaces as $tou)
				<article>
						<div class="post-image">
							<div class="post-heading">

								
								<h4 class="titleimg">{{$tou['pl_name']}}</h4>						
							</div>
							<img src="{{$tou['pl_img_url']}}" alt="Kep Beach" />
						</div>
						<div id="det_b1">

        					<h4>Highlights</h4>
        					<p>{{$tou['pl_desc']}}</p>
        					<input type="button" class="bnt_detail" name="detail" value="View Detail">
							<i id="pl_view" class="fa fa-eye fa-2x">{{$tou['pl_vote']}} </i>

        				</div>
				</article>
				@endforeach
				
			</div>
			@include('static.menu_tour')
		</div>
	</div>
		<h4 style="text-align: center;">{!!$tourplaces->render() !!}</h4>
	</section>
	</div>
	</body>
<!-- end body -->
@include('static.footer')
