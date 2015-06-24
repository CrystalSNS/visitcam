@include('static.header')
<body>
	<div id="wrapper">
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active">Geography and Weather</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						@foreach($geographies as $gw)
						<article>
							<div class="col-lg-6">
								<p class="lead">
									<h4>{{$gw['geo_title']}}</h4>
									{{$gw['geo_desc']}}
								</p>
							</div>
							<div class="col-lg-6">
								<img src={{$gw['geo_img_url']}} alt="" class="align-left" />
							</div>
							@endforeach
						</article>
					</div>
					@include('static.menu_travel')
				</div>
			</div>
		</section>
	</div>
</body>
@include('static.footer')
