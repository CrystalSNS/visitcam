@include('static.header')
<body>
<div id="wrapper">
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">History</li>
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
								<h4 class="titleimg">A BRIEF HISTORY OF THE ROYAL CRUSADE NORODOM SIHANOUL</h4>						
							</div>
							<img src="img/travel_guide/10.jpg" alt="Siem Reap Trekking" />
						</div>
						<div id="det_b1">
        					
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
								<h4 class="titleimg">MAJESTY PREAH BAT SAMDECH PREAH NORODOM SIHAMONI</h4>
							</div>
							<img id="imgcamtre" src="img/travel_guide/11.jpg" alt="Cambodia Trekking" />

							
						</div>
						<div id="det_b2">
        				
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
								<img id="imgsiha" src="img/travel_guide/12.jpg" alt="PP Trekking" />
							<!-- </div> -->
						</div>
						<div id="det_b3">
        				
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
			@include('static.menu_travel')
				
	

			</div>
		</div>
	</div>
	</section>

</div>

</body>
@include('static.footer')