@include('static.header')
<div class="navbar-collapse collapse ">
	<ul class="nav navbar-nav">
		<li ><a href="index">Home</a></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Tour <b class=" icon-angle-down"></b></a>
			<ul class="dropdown-menu">
				<li><a href="beach">Beach</a></li>
				<li><a href="#">History</a></li>
				<li><a href="trekking">Trekking</a></li>
				<li><a href="biking">Bikking</a></li>
				<li><a href="#">Overland</a></li>
				<li><a href="golf">Golf</a></li>
			</ul>
		</li>
		<li><a href="provinces">Provinces</a></li>
		<li class="active"><a href="travel_guide">Travel Guide</a></li>
		<li><a href="about_us">About Us</a></li>
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
							<li class="active">Traditional and Costume</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						@foreach($traditionals as $trad)			
						<article>
							<div class="post-image">
								<img src={{$trad['cos_img_url']}} alt="" />
							</div>
							<p>
								<h3>{{$trad['cos_title']}}</h3>
							</p>
							<p>
								{{$trad['cos_desc']}} 
							</p>
						</article>
						@endforeach
						<article>
							<div class="col-lg-6">
								<img src="img/travel_guide/Khmer-Traditional-Dance-Show-Siem-reap.jpg" alt="" class="align-left" />
							</div>
							<div class="col-lg-6">
								<img src="img/travel_guide/Khmer-Traditional-Wedding-Dress-10.jpg" alt="" class="align-left" />
							</div>	
						</article>
					</div>
					@include('static.menu_travel')
				</div>
			</div>
		</section>
	</div>
</body>
@include('static.footer')