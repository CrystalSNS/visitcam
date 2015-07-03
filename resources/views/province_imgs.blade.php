@include('static.header')
	<link href="css/style.css" rel="stylesheet" />

<body>
<div id="wrapper">
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="province_{{$provinceimgs[0]['province_id']}}"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
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
			 @foreach($provinceimgs as $proimgs)
				<article>
					<div class="col-lg-3">
					<div class="article">
					<div class="jLastic">
						<img src={{$proimgs['pro_img_url']}}>
					</div>
					</div>
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
					<h5 class="widgetheading"><h3>{{$proimgs['pro_name']}} </h3></h5>
						<ul class="cat">
							<li><i class="icon-angle-right"></i><a href="province_{{$proimgs['province_id']}}">{{$proimgs['pro_name']}} Overview</a></li>
							<li><i class="icon-angle-right"></i><a href="province_imgs_{{$proimgs['province_id']}}">{{$proimgs['pro_name']}} Photos</a></li>
							<li><i class="icon-angle-right"></i><a href="province_map_{{$proimgs['province_id']}}">{{$proimgs['pro_name']}} Map</a></li>
							<li><i class="icon-angle-right"></i><a href="province_tour_{{$proimgs['province_id']}}">{{$proimgs['pro_name']}} Tours</a></li>
							<li><i class="icon-angle-right"></i><a href="province_hotel_{{$proimgs['province_id']}}">{{$proimgs['pro_name']}} Hotels</a></li>

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
