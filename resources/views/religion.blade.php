@include('static.header')
<body>
	<div id="wrapper">
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
							<li class="active">Religion</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<article>
							<h5>CAMBODIA PRE ANGKORIAN ERA AND ANGKORIAN ERA</h5>
						</article>
						@foreach($religions as $rel)
						<article>
							<div class="col-lg-5">
								<div class="post-image">
									<img src={{$rel['rel_img_url']}} alt="" />
								</div>
								<p>
									<strong>{{$rel['rel_title']}}</strong>
								</p>
								{{$rel['rel_desc']}}
							</div>
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