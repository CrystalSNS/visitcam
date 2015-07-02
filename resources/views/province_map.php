@include('static.header')
	<link href="css/style.css" rel="stylesheet" type="text/css" />
  	<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jLastic.js"></script>
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
 
<body>
<div id="wrapper">
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
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
				<div class="article">
				<img src={{$promap['pro_map']}} style="width:900px; height:500px;">
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
						<li><i class="icon-angle-right"></i><a href="province_detail">Phnom Penh Overview</a></li>
						<li><i class="icon-angle-right"></i><a href="history">Phnom Penh Photos</a></li>
						<li><i class="icon-angle-right"></i><a href="religion">Phnom Penh Map</a></li>
						<li><i class="icon-angle-right"></i><a href="traditional_costume">Phnom Penh Tours</a></li>
						<li><i class="icon-angle-right"></i><a href="festival_event">Phnom Penh Hotels</a></li>
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
