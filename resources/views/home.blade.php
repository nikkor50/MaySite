@extends('layouts.metro')

@section('slider')
 <div class="row">
      <div class="span12">
        <!-- Slider (Parallax Slider) -->
          <div id="da-slider" class="da-slider">
            <div class="da-slide">
              <div class="da-blue">
                <h2><span>Metro Mania</span></h2>
                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                <a href="#" class="da-link">Read more</a>
                <div class="da-img"><img src="img/parallax/1.png" alt="image01" /></div>
              </div>
            </div>
            <div class="da-slide">
              <div class="da-green">
                <h2><span>Easy management</span></h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <a href="#" class="da-link">Read more</a>
                <div class="da-img"><img src="img/parallax/2.png" alt="image01" /></div>
              </div>
            </div>
            <div class="da-slide">
              <h2><span>Revolution</span></h2>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <a href="#" class="da-link">Read more</a>
              <div class="da-img"><img src="img/parallax/3.png" alt="image01" /></div>
            </div>
            <div class="da-slide">
              <h2><span>Quality Control</span></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <a href="#" class="da-link">Read more</a>
              <div class="da-img"><img src="img/parallax/4.png" alt="image01" /></div>
            </div>
            <nav class="da-arrows">
              <span class="da-arrows-prev"></span>
              <span class="da-arrows-next"></span>
            </nav>
          </div>
      </div>
    </div>
@endsection

@section('hero')
    <div class="row center">
      <div class="span12">

        <div class="bor"></div>

        <h2>Welcome to Metro Mania</h2>
        <p>Suspendisse potenti. Morbi ac felis nec mauris imperdiet fermentum. Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit.</p>
        <div class="bor"></div>
        <hr />
      </div>  
    </div>

@endsection

@section('servicethree')
<div class="service-three">
  <div class="row">

     <div class="span3">
      <!-- Service title with tag -->
        <h6 class="bold grey">SOME TAG</h6>
        <h3>What We Do In Free Time?</h3>
        <p>Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit.</p>
        <a href="#">Check out everything <i class="icon-double-angle-right"></i> </a>
        <hr />
     </div>

     <div class="span7">

        <!--  Service #1 -->
        <!-- Service icon -->
        <div class="service-icon red">
          <i class="icon-camera"></i>
        </div>

        <div class="service-content">
          <!-- Title -->
          <h5>We Design Websites</h5>
          <p>Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit.</p>
        </div>

        <hr />

        <!-- Service #2 -->

        <div class="service-icon orange">
          <i class="icon-desktop"></i>
        </div>

        <div class="service-content">
          <h5>Our Designs are Responsive</h5>
          <p>Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit.</p>
        </div>

        <hr />   

        <!-- Service #3 -->

        <div class="service-icon lblue">
          <i class="icon-cloud"></i>
        </div>

        <div class="service-content">
          <h5>Everything in Cloud</h5>
          <p>Aenean sodales augue ac lacus hendrerit sed rhoncus erat hendrerit. Vivamus vel ultricies elit.</p>
        </div>
        
        <hr />

        <!-- Service #4 -->


        <div class="clearfix"></div>

     </div>

     <div class="span2">
      <h6 class="grey bold">Check This</h6>
      <ul>
        <li><a href="#">Condimentum</a></li>
        <li><a href="#">Etiam at</a></li>
        <li><a href="#">Pellentesque</a></li>
      </ul>

     </div>

  </div>
</div>

@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    
                
                </div>

                
                
            </div>
        </div>
    </div>
</div>
@endsection
