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
								<h4 class="titleimg">CONQUER TOP-QUALITY GOLF COURSES</h4>						
							</div>
							<img id="imgppbik" src="img/tour/lat.jpg" alt="Conquer Golf" />
						</div>
						<div id="det_b1">
        					<h4>Highlights</h4>
        					<p>•Visit Angkor Wat – the Unesco Heritage</p>
        					<p>•Discover series of famous destinations in Cambodia: Bayon temple, Preah Temple, Ta Prohm temple, Royal Palace...</p>
        					<p>•View peaceful landscapes with endless green paddies , stork flying above the field</p>
        					<p>•Enjoy playing golf in Phokeethra Golf Country Club</p>
        					<input type="button" class="bnt_detail" name="detail" value="View Detail">
        				</div>		
        				
				</article>
				<article>
						<div class="post-slider">
							<div class="post-heading">
								<h4 class="titleimg">GOLF HIGHLIGHT ANGKOR TOUR</h4>
							</div>
							<img id="imgcamtre" src="img/tour/golf.jpg" alt="Angkor Golf" />

						</div>
						<div id="det_b2">
        					<h4>Highlights</h4>
        					<p>•Have golf at 3 of the best courses in Cambodia, including Angkor Golf Resort, Phokeethra Golf Country Club and Siem Reap Lake Golf Course.</p>
        					<p>•Embark on a local boat to catch the beauties of floating Village of Mea Chrey in Tonle Sap Lake.</p>
        					<p>•Visit Angkor Wat Temple and explore Angkor Thom City, and some others of the most attractive places surrounding this areas.</p>
        					<p>•Explore the ancient Khmer civilization site of Hariharalaya.</p>
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
								<img id="imgsiha" src="img/tour/main.jpg" alt="PP Golf" />
							<!-- </div> -->
						</div>
						<div id="det_b3">
        					<h4>Highlights</h4>
        					<p>•Discover different must-see destinations in Cambodia: Angkor National Museum, South Gate of Angkor Thom, Bayon Temple, Tah Prohm...</p>
        					<p>•Play golf in Angkor Golf Resort</p>
        					<p>•Experience horse riding</p>
        					<p>•View peaceful landscapes with endless green paddies , stork flying above the field</p>
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
