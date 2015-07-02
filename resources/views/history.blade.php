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
						@foreach($histories as $his)
						<article>
							<div class="post-image">
								<div class="post-heading">
									<h4 class="titleimg">{{$his['his_title']}}</h4>						
								</div>
								<img src="{{$his['his_img_url']}}" alt="Siem Reap Trekking" />
							</div>
							<div id="det_b1">
								<p>
									{{$his['his_desc']}}
								</p>
								<input type="button" class="bnt_detail" name="detail" value="View Detail">
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