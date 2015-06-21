@include('static.header')
<link href="css/beach.css" rel="stylesheet" />


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
								<h4 class="titleimg">KEP BEACH</h4>						
							</div>
							<img src="img/tour/kep.jpg" alt="Kep Beach" />
						</div>
						<div id="det_b1">

        					<h4>Highlights</h4>
        					<p>•Explore must-see destinations in Cambodia including Tonle Banti - the biggest freshwater lake in the southeast Asia, Rabbit Land...</p>
        					<p>•Visit a famous pepper plantation farm</p>
        					<p>•Discover the daily life of the locals by visiting their villages</p>
        					<p>•Enjoy various kinds of local seafood</p>
        					<input type="button" class="bnt_detail" name="detail" value="View Detail">
        				</div>
				</article>
				<article>
						<div class="post-slider">
							<div class="post-heading">
								<h4 class="titleimg">REAM BEACH</h4>
							</div>
							<img src="img/tour/ream.jpg" alt="Ream Beach" />

						</div>
						<div id="det_b2">
        					<h4>Highlights</h4>
        					<p>•Visit renowned places in Cambodia: Tonle Banti, Angkor temples, Phnom Da, Angkor Borei, Gulf of Thailand…</p>
        					<p>•Enjoy the Cambodian architecture</p>
        					<p>•View beautiful landscapes of immense rice paddies</p>
        					<p>•Visit local Khmer traditional villages</p>
        					<input class="bnt_detail" type="button" name="detail" value="View Detail">
        				</div>						
        				
				</article>
				<article>
				</article>
				<article>
						<div class="post-video">
							<div class="post-heading">
								<h4 class="titleimg">SIHANOUKVILLE Beach</h4>
							</div>
							<!-- <div class="video-container"> -->
								<img id="imgsiha" src="img/tour/sihanoukville.jpg" alt="Sihanoukville Beach" />
							<!-- </div> -->
						</div>
						<div id="det_b3">
        					<h4>Highlights</h4>
        					<p>•Discover amazingly beautiful islands in Sihanouk Ville</p>
        					<p>•Take part in various activities on the beach</p>
        					<p>•Visit some floating villages</p>
        					<p>•Enjoy BBQ meal on the beach</p>
        					<input class="bnt_detail" type="button" name="detail" value="View Detail">
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
