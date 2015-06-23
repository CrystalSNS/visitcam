@include('static.header')
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
						
							<!-- end flexslider -->
							<div class="col-lg-6">
				
				<img src="img/travel_guide/Khmer-Traditional-Dance-Show-Siem-reap.jpg" alt="" class="align-left" />
				
			</div>

			
		
			<div class="col-lg-6">
				
				<img src="img/travel_guide/Khmer-Traditional-Wedding-Dress-10.jpg" alt="" class="align-left" />
			
			</div>	
			</div>
			</article>
				@include('static.menu_travel')
			</div>
		</div>
	</div>
	</section>
	
</div>

</body>
@include('static.footer')