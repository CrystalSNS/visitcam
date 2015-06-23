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
      <div class="col-lg-12">
          <article>
          
        <h1>ALL PROVINCES</h1>
        </div>

        </article>
        <div>
        

      
         @foreach($province as $pros)
          <article>
            <div class="col-lg-3">
            <div class="post-image">
              <img src={{$pros['pro_img_url']}} alt=""/>

            </div>
            <h4>{{$pros['pro_name']}}</h4>
          <p>
            {{$pros['pro_desc']}}
          </p>
          </div>

          </article>
        @endforeach 
       
        </div>
    
        <!-- end flexslider -->
        
    </div>
    


        
      </article>
    
    </div>
  </div>
  </section>
  
</div>

</body>
@include('static.footer')

