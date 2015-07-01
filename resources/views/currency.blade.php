@include('static.header')
<body>
	<div id="wrapper">
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active">Currency</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						@foreach($currencies as $cur)
						<article>
							<div class="post-image">
								<div class="post-heading">
									<h3><a href="#">Currency</a></h3>
								</div>
								<img src={{$cur['cur_img_url']}} alt="" />
							</div>
							<p>
								<h3>{{$cur['cur_title']}}</h3>
							</p>
							<p>
								{{$cur['cur_desc']}}
							</p>
						</article>
						@endforeach
					</div>
					@include('static.menu_travel')
				</div>
			</div>
		</section>
	</div>
</body>
@include('static.footer')