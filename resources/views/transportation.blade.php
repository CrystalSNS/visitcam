@include('static.header')
<body>
	<div id="wrapper">
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active">Transportation</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				<div class="row">
					<article>
						<div class="col-lg-9">

							@foreach($transportations as $tran)	
							<!-- end flexslider -->
							<div class="col-lg-6">
								<h4>{{$tran['tran_title']}}</h4>
								<img src={{$tran['tran_img_url']}} alt="" class="align-left" />
								<p>
									{{$tran['tran_desc']}}
								</p>
							</div>
							@endforeach
						</div>
					</article>
					@include('static.menu_travel')
				</div>
			</div>
		</section>
	</div>
</body>
@include('static.footer')