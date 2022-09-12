@extends('app')

@section('content')
<!-- Warming Up -->
<link href='http://fonts.googleapis.com/css?family=Buenard:700' rel='stylesheet' type='text/css'>
<style>
    .containerB {
    position: relative;
    text-align: center;
    color: white;
    margin-bottom: -10PX;
  }

    .containerC {
    background-color: #2d3651;
    position: relative;
    text-align: center;
    color: white;
    margin-top: -10px;
    padding-top: 30px;
    padding-bottom: 30px;
  }

  .containerD {
    color: #2d3651;
    position: relative;
    text-align: center;
    margin-top: 0;
    padding-top: 10px;
    padding-bottom: 20px;
    margin-left: 70px;
    margin-right: 70px;
  }

   .namecard {
    position: absolute;
    right: 0;
    bottom: 0;
    height: 120px;
    width: 100%;
    background: rgba(0,0,0,0.5);
    font-family: 'Open Sans Condensed', sans-serif;
  }

    .top-left {
      position: absolute;
      font-size: 55px;
      top: 20%;
      left: 5%;
      letter-spacing: 2px;
    }

  .color {
    color: #2d3651;
  }
</style>

<body>

<section>
<div class= "jumbotron header-style">
    <h1>My Work</h1>
  </div>
</section>

<div class="containerC">
    <div class="row">
      <h1>Photography Work Showcase</h1>
    </div>
  </div>

<div class="containerD">
  <div> <!-- Slideshow -->
    <div class="slider-pro" id="my-slider">
      <div class="sp-slides">
        <!-- Slide 1 -->
        <div class="sp-slide">
          <div class="containerB">
            <img alt="icon" style="width:100%" src="{{ asset('/images/image01.jpg') }}">
              <div class="namecard">
                <div class="top-left">
                  <span><strong>The Butterfly</strong></span>
                  <span><small> |  AUG 2011 | Zhejiang</small></span>
                </div>
              </div>
        </div>
        </div>
    
        <!-- Slide 2 -->
        <div class="sp-slide">
          <div class="containerB">
            <img alt="icon" style="width:100%" src="{{ asset('/images/image08.jpg') }}">
              <div class="namecard">
                <div class="top-left">
                  <span><strong>Spring in Hong Kong</strong></span>
                  <span><small> |  MAR 2012 | Hong Kong</small></span>
                </div>
              </div>
        </div>
        </div>
    
        <!-- Slide 3 -->
        <div class="sp-slide">
          <div class="containerB">
            <img alt="icon" style="width:100%" src="{{ asset('/images/image09.jpg') }}">
              <div class="namecard">
                <div class="top-left">
                  <span><strong>Sunflower</strong></span>
                  <span><small> |  MAR 2012 | Hong Kong</small></span>
                </div>
              </div>
        </div>
        </div>

        <div class="sp-slide">
          <div class="containerB">
            <img alt="icon" style="width:100%" src="{{ asset('/images/image10.jpg') }}">
              <div class="namecard">
                <div class="top-left">
                  <span><strong>Evening at Victoria</strong></span>
                  <span><small> |  JUL 2012 | Hong Kong</small></span>
                </div>
              </div>
        </div>
        </div>

        <div class="sp-slide">
          <div class="containerB">
            <img alt="icon" style="width:100%" src="{{ asset('/images/image11.jpg') }}">
              <div class="namecard">
                <div class="top-left">
                  <span><strong>Storm</strong></span>
                  <span><small> |  MAY 2017 | Maldives</small></span>
                </div>
              </div>
        </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="containerC">
    <div class="row">
      <h1>Video Production Showcase</h1>
    </div>
  </div>

  <div> <!-- Solme Videos -->
    <div class="row">

      <div class="col-ssm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ asset('/images/vid_thumb_01.png') }}">
          <div class="caption">
            <h2>Smart Ping Pong Ball Collector Showcase Video</h2>
            <p>a project in the course CCST9015</p>
            <br>
            <p><a href="https://www.youtube.com/watch?v=lmMUB-Fb31M" class="btn btn-primary" role="button">Watch</a>
              <a href="https://www.youtube.com/watch?v=lmMUB-Fb31M" class="btn btn-default" target="blank" role="button">Watch in new page</a></p>
          </div>
        </div>
      </div>
      <div class="col-ssm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ asset('/images/vid_thumb_02.png') }}">
          <div class="caption">
            <h2>Ditch Disposable Picnic Hightlights Video</h2>
            <p>fefaturing a green event held in NOV 2017 by the Sustainability Office, HKU</p>
            <br>
            <p><a href="http://uvision.hku.hk/m/21431" class="btn btn-primary" role="button">Watch</a>
              <a href="http://uvision.hku.hk/m/21431" class="btn btn-default" target="blank" role="button">Watch in new page</a></p>
          </div>
        </div>
      </div>
      <div class="col-ssm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{ asset('/images/vid_thumb_03.png') }}">
          <div class="caption">
            <h2>Campus TV, HKUSU Promotion Video</h2>
            <p>a video promoting the Campus TV, University of Hong Kong Students' Union</p>
            <br>
            <p><a href="https://www.youtube.com/watch?v=EgB5U1X6HcM" class="btn btn-primary" role="button">Watch</a>
              <a href="https://www.youtube.com/watch?v=EgB5U1X6HcM" class="btn btn-default" target="blank">Watch in new page</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

<section>
  <div class="row containerD">
    <h2>more to be updated!</h2>
  </div>
</section>

  <footer class="container-fluid header-bg footer" style="background-color: #2d3651">
        <span class="pull-left">
          © jacky's studio 2018
        </span>
        <span class="pull-right small">
          contact @ 
          <span href src="jackys97@hku.hk">
            jackys97@hku.hk
          </span>
        </span>
  </footer> 

</body>

@endsection

@section('js')

<script src="{{ asset('/slider-pro/dist/js/jquery.sliderPro.min.js') }}"></script>
<script src="{{ asset('/strip/dist/js/strip.pkgd.min.js') }}"></script>
<script type="text/javascript">
  jQuery( document ).ready(function( $ ) {
    $( '#my-slider' ).sliderPro(
        {
          width: '60%',
          arrows: true,
          aspectRatio: 1.5,
          visibleSize: '100%',
          forceSize: 'fullWidth'
        }
      );
  });
</script>


@endsection