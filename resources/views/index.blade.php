@include('static.header')
<div class="navbar-collapse collapse ">
	<ul class="nav navbar-nav">
		<li class="active" ><a href="index">Home</a></li>
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
		<li ><a href="travel_guide">Travel Guide</a></li>
		<li ><a href="about_us">About Us</a></li>
		<li><a href="contact_us">Contact</a></li>
	</ul>
</div>
<body>
</header>
<div id="wrapper">
	<section id="featured">
		<!-- start slider -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Slider -->
					<div id="main-slider" class="flexslider">
						<ul class="slides">
							@foreach($indexObject['slide'] as $slideshow)
							<li>
								<img src="{{$slideshow['slide_img']}}" alt="" />
								<div class="flex-caption">
									<p>{{$slideshow['slide_title']}}</p>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
					<!-- end divider -->
					<!-- Portfolio Projects -->
					<div class="row">
						<div class="col-lg-12">
							<h3 class="heading">Popular History Place</h3>
							<div class="row">
								<section id="projects">
									<ul>
										@foreach($indexObject['history'] as $historypl)
										<!-- Item Project and Filter Name -->
										<li class="col-lg-3 design" data-id="id-0" data-type="web">
											<div class="item-thumbs">
												<!-- Fancybox - Gallery Enabled - Title - Full Image -->
												<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{$historypl['pl_name']}}" href="{{$historypl['pl_img_url']}}">
													<span class="overlay-img"></span>
													<span class="overlay-img-thumb font-icon-plus"></span>
												</a>
												<!-- Thumb Image and Description -->
												<img src="{{$historypl['pl_img_url']}}" alt="{{$historypl['pl_name']}}">
											</div>
										</li>
										@endforeach
										<!-- End Item Project -->
									</ul>
								</section>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<h3 class="heading">Beautiful Beach in Cambodia</h3>
							<div class="row">
								<section id="projects">
									<ul>
										@foreach($indexObject['beach'] as $beachpl)
										<!-- Item Project and Filter Name -->
										<li class="col-lg-3 design" data-id="id-0" data-type="web">
											<div class="item-thumbs">
												<!-- Fancybox - Gallery Enabled - Title - Full Image -->
												<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{$beachpl['pl_name']}}" href="{{$beachpl['pl_img_url']}}">
													<span class="overlay-img"></span>
													<span class="overlay-img-thumb font-icon-plus"></span>
												</a>
												<!-- Thumb Image and Description -->
												<img src="{{$beachpl['pl_img_url']}}" alt="{{$beachpl['pl_name']}}">
											</div>
										</li>
										@endforeach
										<!-- End Item Project -->
									</ul>
								</section>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<h3 class="heading">Popular Overland Province</h3>
							<div class="row">
								<section id="projects">

									<ul id="thumbs" class="portfolio">
										@foreach($indexObject['overland'] as $overlanvpl)
										<!-- Item Project and Filter Name -->
										<li class="col-lg-3 design" data-id="id-0" data-type="web">
											<div class="item-thumbs">
												<!-- Fancybox - Gallery Enabled - Title - Full Image -->
												<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{$overlanvpl['pl_name']}}" href="{{$overlanvpl['pl_img_url']}}">
													<span class="overlay-img"></span>
													<span class="overlay-img-thumb font-icon-plus"></span>
												</a>
												<!-- Thumb Image and Description -->
												<img src="{{$overlanvpl['pl_img_url']}}" alt="{{$overlanvpl['pl_name']}}">
											</div>
										</li>
										@endforeach
										<!-- End Item Project -->
									</ul>
								</section>
							</div>
						</div>
					</div>
				</div>
			</section>


		</div>
	</section>

	<script type="text/javascript">

	var make_button_active = function()
	{
		alert("YES");
			//Get item siblings
			var siblings =($(this).siblings());

			//Remove active class on all buttons
			siblings.each(function (index)
			{
				$(this).removeClass('active');
			}
			)

			//Add the clicked button class
			$(this).addClass('active');
	}

		//Attach events to menu
		$(document).ready(
			function()
			{
				alert("YES");

				$(".nav li").click(make_button_active);
			}
			)

		</script>
	</body>
	@include('static.footer')
