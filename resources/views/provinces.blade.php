@include('static.header')
<div class="navbar-collapse collapse ">
  <ul class="nav navbar-nav">
    <li ><a href="index">Home</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Tour <b class=" icon-angle-down"></b></a>
      <ul class="dropdown-menu">
        <li><a href="tour_{{"Beach"}}">Beach</a></li>
        <li><a href="tour_{{"History"}}">History</a></li>
        <li><a href="tour_{{"Trekking"}}">Trekking</a></li>
        <li><a href="tour_{{"Biking"}}">Biking</a></li>
        <li><a href="tour_{{"Overland"}}">Overland</a></li>
        <li><a href="tour_{{"Golf"}}">Golf</a></li>
      </ul>
    </li>
    <li class="active"><a href="provinces">Provinces</a></li>
    <li ><a href="travel_guide">Travel Guide</a></li>
    <li ><a href="about_us">About Us</a></li>
    <li><a href="contact_us">Contact</a></li>
  </ul>
</div>
</div>
</div>

</header>
<body>
<div id="wrapper">
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="breadcrumb">
            <li><a href="provinces"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
            <li class="active">All Province</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="content">
    <div class="container province_bl">
      <div class="row">
        <div class="col-lg-12 province-div">
          <div>
            @foreach($province as $pros)
              <article >
                <div class="col-lg-3">
                    <div class="post-image"><img src={{$pros['pro_img_url']}} alt=""/></div>
                    <h4><a href="province_{{$pros['pro_id']}}">{{$pros['pro_name']}}</a></h4>
                  <p class="text_pro">{{$pros['pro_desc']}}</p>
                </div>
              </article>
            @endforeach



          </div>
         </div>
      </div>
    </div>
    <h4 style="text-align: center;">{!!$province->render() !!}</h4>
  </section>

</div><!--end div wrapper-->

</body>
@include('static.footer')