@include('static.header')
	<link href="css/style.css" rel="stylesheet" />

<body>
<div id="wrapper">
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="province_{{$provincetour[0]['province_id']}}"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
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
			 @foreach($provincetour as $tour)
				<article>
					<div class="article" id="tour_div" >
						<div id="tour_image">
			                <ul class="img-list">
			                 	<li>
			                    	<a href="#">
								      <img class="province_{{$provincetour[0]['province_id']}}" src={{$tour['pl_img_url']}}/>
								      <span class="text-content"><span class="title"><br>{{$tour['pl_name']}}</span></span>
								    </a>
								</li>
			                </ul>
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
					<h5 class="widgetheading"><h3>{{$tour['pro_name']}} </h3></h5>
						<ul class="cat">
							<li><i class="icon-angle-right"></i><a href="province_{{$tour['province_id']}}">{{$tour['pro_name']}} Overview</a></li>
							<li><i class="icon-angle-right"></i><a href="province_imgs_{{$tour['province_id']}}">{{$tour['pro_name']}} Photos</a></li>
							<li><i class="icon-angle-right"></i><a href="province_map_{{$tour['province_id']}}">{{$tour['pro_name']}} Map</a></li>
							<li><i class="icon-angle-right"></i><a href="province_tour_{{$tour['province_id']}}">{{$tour['pro_name']}} Tours</a></li>
							<li><i class="icon-angle-right"></i><a href="province_hotel_{{$tour['province_id']}}">{{$tour['pro_name']}} Hotels</a></li>

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
