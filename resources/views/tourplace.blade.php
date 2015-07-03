@include('static.header')
<link href="css/beach.css" rel="stylesheet" />


<body>
<div id="wrapper">
	<section id="inner-headline">
	<div class="container">
		
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">{{$tourplaces[0]['cat_name']}}</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				 @foreach($tourplaces as $tou)
				<article>
						<div class="post-image">
							<div class="post-heading">

								
								<h4 class="titleimg">{{$tou['pl_name']}}</h4>						
							</div>
							<img src="{{$tou['pl_img_url']}}" alt="Kep Beach" />
						</div>
						<div id="det_b1">

        					<h4>Highlights</h4>
        					<p>{{$tou['pl_desc']}}</p>
        					<input type="button" class="bnt_detail" name="detail" value="View Detail">
        				</div>
				</article>
				@endforeach
				
			</div>
			@include('static.menu_tour')
		</div>
	</div>
	</section>
	
	</body>
<!-- end body -->
@include('static.footer')
