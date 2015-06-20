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
								<h4 class="titleimg">SIEM REAP EASY TREKKING TOUR</h4>						
							</div>
							<img src="img/tour/b.jpg" alt="Siem Reap Trekking" />
						</div>
						<div id="det_b1">
        					<h4>Highlights</h4>
        					<p>•Visit most famous destinations in Cambodia: Angkor Wat, Angkor Thom, Bayon Temple</p>
        					<p>•Have trekking to the Kulen Mountain Hill and enjoy the beautiful sights.</p>
        					<p>•Explore the largest lake in Cambodia with the trip around floating village.</p>
        					<p>•Enjoy the lunch in a local house and learn about the life on the water.</p>
        					<input type="button" class="bnt_detail" name="detail" value="View Detail">
        				</div>
						
				</article>
				<article>
						<div class="post-slider">
							<div class="post-heading">
								<h4 class="titleimg">CAMBODIA TREKKING FROM NORTH TO SOUTH TOUR</h4>
							</div>
							<img id="imgcamtre" src="img/tour/t.jpg" alt="Cambodia Trekking" />

							
						</div>
						<div id="det_b2">
        					<h4>Highlights</h4>
        					<p>•Visit the Angkor Complex: Angkor Thom-the old capital, Bayon Temple, Ta Prohm, Angkor Wat...</p>
        					<p>•Hike through peaceful and beautiful land of Cambodia’s countryside</p>
        					<p>•Get insight into Cambodian architecture</p>
        					<p>•Trek through tiny villages and thick jungles and enjoy the view of spectacular sceneries</p>
        					<input type="button" class="bnt_detail" name="detail" value="View Detail">
        				</div>						
        				
				</article>
				<article>
				</article>
				<article>
						<div class="post-video">
							<div class="post-heading">
								<h4 class="titleimg">PHNOM PENH TO RATANAKIRI TREKKING TOUR</h4>
							</div>
							<!-- <div class="video-container"> -->
								<img id="imgsiha" src="img/tour/tr.jpg" alt="PP Trekking" />
							<!-- </div> -->
						</div>
						<div id="det_b3">
        					<h4>Highlights</h4>
        					<p>•Visit the Phnom Penh with a city tour passing through major destinations of the capital city</p>
        					<p>•Walk through the local villages and have talk with indigenous people</p>
        					<p>•Have sightseeing of majestic natural waterfalls and pristine forest</p>
        					<p>•Take an elephant ride to see the panoramic views of the hills</p>
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
				</div>
				</aside>
			</div>
		</div>
	</div>
	</section>
	
</body>
<!-- end body -->
@include('static.footer')
