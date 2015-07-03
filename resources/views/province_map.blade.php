@include('static.header')
	<link href="css/style.css" rel="stylesheet" type="text/css" />
 
<body>
<div id="wrapper">
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="province_{{$provincemap[0]['pro_id']}}"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
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
				<div class="article" >
				<img  style="width:900px; height:500px;" src={{$promap['pro_map']}}>
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
							<li><i class="icon-angle-right"></i><a href="province_{{$promap['pro_id']}}">{{$promap['pro_name']}} Overview</a></li>
							<li><i class="icon-angle-right"></i><a href="province_imgs_{{$promap['pro_id']}}">{{$promap['pro_name']}} Photos</a></li>
							<li><i class="icon-angle-right"></i><a href="province_map_{{$promap['pro_id']}}">{{$promap['pro_name']}} Map</a></li>
							<li><i class="icon-angle-right"></i><a href="province_tour_{{$promap['pro_id']}}">{{$promap['pro_name']}} Tours</a></li>
							<li><i class="icon-angle-right"></i><a href="province_hotel_{{$promap['pro_id']}}">{{$promap['pro_name']}} Hotels</a></li>

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
