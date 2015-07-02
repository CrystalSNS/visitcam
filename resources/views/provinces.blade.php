@include('static.header')
<body>

<div id="wrapper">
  <section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
          <li class="active">Provinces</li>
        </ul>
      </div>
    </div>
  </div>
  </section>

  <section id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 province-div">
          <h1>ALL PROVINCES</h1>
          <div>
            @foreach($province as $pros)
              <article>
                <div class="col-lg-3">
                    <div class="post-image"><img src={{$pros['pro_img_url']}} alt=""/></div>
                    <h4><a>{{$pros['pro_name']}}</a></h4>
                  <p class="text_pro">{{$pros['pro_desc']}}</p>
                </div>
              </article>
            @endforeach
          </div>
         </div>
      </div>
    </div>
  </section>

</div><!--end div wrapper-->
</body>
@include('static.footer')