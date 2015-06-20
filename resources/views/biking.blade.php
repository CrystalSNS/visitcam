@include('static.header')
<link href="css/beach.css" rel="stylesheet" />


<!-- start body -->
<body>
<div id="wrapper">
	<section id="inner-headline">
	<div class="container">
		
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Blog</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<article>
						<div class="post-image">
							<div class="post-heading">
								<h3 class="camtour"><a href="#">Cambodia Tours</a></h3>
								<h4 class="titleimg">BIKING FROM PHNOM PENH TO ANGKOR AND BATTAMBANG</h4>						
							</div>
							<img id="imgppbik" src="img/tour/camb.jpg" alt="PP Biking" />
						</div>
						<div id="det_b1">
        					<h4>Highlights</h4>
        					<p>•Cycle from Bekchan to Phnom Chetarest and Oudong to have sightseeing and explore the local daily life
        					</p>
        					<p>•Climb up to the temples on top of the hill in Oudong</p>
        					<p>•Cycle to striking hilltop pagoda of Phnom Sampeau and catch the sunset on the hilltop</p>
        					<p>•Visit the Ksach Puoy village on Sangker River</p>
        					<input type="button" class="bnt_detail" name="detail" value="View Detail">
        				</div>		
        				
				</article>
				<article>
						<div class="post-slider">
							<div class="post-heading">
								<h4 class="titleimg">GLIMPSE OF CAMBODIA BIKING</h4>
							</div>
							<img id="imgcamtre" src="img/tour/h.jpg" alt="Glimpse Biking" />

						</div>
						<div id="det_b2">
        					<h4>Highlights</h4>
        					<p>•Take a boat traveling along Mekong River for sightseeing.</p>
        					<p>•Cycle around Koh Dach Island and enjoy yourself with the peace and quiet.</p>
        					<p>•Cycle to Kampong Thom Province and have sightseeing around this area.</p>
        					<p>•Visit Sambor Prei Kuk – an ancient capital of Cambodia in 6th century.</p>
        					<input type="button" class="bnt_detail" name="detail" value="View Detail">
        				</div>						
        				
				</article>
				<article>
				</article>
				<article>
						<div class="post-video">
							<div class="post-heading">
								<h4 class="titleimg">PHNOM PENH CYCLING DOWN SOUTH</h4>
							</div>
							<!-- <div class="video-container"> -->
								<img id="imgsiha" src="img/tour/best.jpg" alt="PP Cycling" />
							<!-- </div> -->
						</div>
						<div id="det_b3">
        					<h4>Highlights</h4>
        					<p>•Visit Tonle Bati and temples of Ta Prohm with some remnants from the 12-13th century</p>
        					<p>•Cycle through the weaving villages and feel the peaceful environment of countryside</p>
        					<p>•Explore Phnom Da, the oldest city of Cambodia</p>
        					<p>•Take a boat to Rabbit Island – a beautiful island for relaxing and sightseeing.</p>
        					<input type="button" class="bnt_detail" name="detail" value="View Detail">
        				</div>
						
				</article>
				<div id="pagination">
					<span class="all">Page 1 of 3</span>
					<span class="current">1</span>
					<a href="#" class="inactive">2</a>
					<a href="#" class="inactive">3</a>
				</div>
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<form class="form-search">
						<input class="form-control" type="text" placeholder="Search..">
					</form>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Tour Categories</h5>
					<ul class="cat">
						<li><i class="icon-angle-right"></i><a href="beach">Beach</a><span></span></li>
						<li><i class="icon-angle-right"></i><a href="biking">Biking</a><span></span></li>
						<li><i class="icon-angle-right"></i><a href="trekking">Trekking</a><span></span></li>
						<li><i class="icon-angle-right"></i><a href="golf">Golf</a><span></span></li>
					</ul>
				</div>

				</aside>
			</div>
		</div>
	</div>
	</section>
	
</body>
<!-- end body -->
@include('static.footer')
