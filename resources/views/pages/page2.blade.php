@extends('app')

@section('content')
<style>

.containerA {
    width: 100%;
    border: 5px ;
    padding: 5px;
    background-color: rgba(0,0,0,0.5)
}

  .containerB {
    position: relative;
    text-align: center;
    color: white;
    margin-top: -10px;
    margin-bottom: -20px;
  }

     .namecard {
    position: absolute;
    right: 0;s
    bottom: 20%;
    height: 20%;
    width: 50%;
    background: rgba(0,0,0,0.5);
    font-family: 'Open Sans Condensed', sans-serif;
  }

  .bottom-left {
    position: absolute;
    font-size: 30px;
    top: 60%;
    left: 5%;
    letter-spacing: 2px;
    color: #FFFFFF;
}

/* Top left text */
.top-left {
    position: absolute;
    font-size: 55px;
    top: 10%;
    left: 5%;
    letter-spacing: 2px;
    color: #ffffff;
}

/* general styles */
html, body {
  height: 100%;
  width: 100%;
}
/* padded section */
.pad-section {
  padding: 50px 0;
}
.pad-section img {
  width: 100%;
}
/* vertical-centered text */
.text-vcenter {
  display: table-cell;
  text-align: center;
  vertical-align: middle;
}
.text-vcenter h1 {
  font-size: 4.5em;
  font-weight: 700;
  margin: 0;
  padding: 0;
}
/* additional sections */
#about {
}
#services {
  background-color: #2d3651;
  color: #ffffff;
}
#services .glyphicon {
  border: 2px solid #FFFFFF;
  border-radius: 50%;
  display: inline-block;
  font-size: 60px;
  height: 140px;
  line-height: 140px;
  text-align: center;
  vertical-align: middle;
  width: 140px;
}
#home {
  background: url("{{ asset('/images/image06.jpg')}}") no-repeat center center fixed;
  display: table;
  height: 800px;
  position: relative;
  width: 100%;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#information {
  background: url("{{ asset('/images/image05.jpg')}}") no-repeat center center fixed;
  display: table;
  height: 800px;
  position: relative;
  width: 100%;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

#block3 {
  background: url("{{ asset('/images/image07.jpg')}}") no-repeat center center fixed;
  display: table;
  height: 800px;
  position: relative;
  width: 100%;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

#next {
  background: url("{{ asset('/images/next.png')}}") no-repeat center center fixed;
  display: table;
  height: 660px;
  position: relative;
  width: 100%;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

#information .panel {
  opacity: 0.85;
}
#google_map {
  height: 500px;
}
footer {
  padding: 20px 0;
}
footer .glyphicon {
  color: #333333;
  font-size: 60px;
}
footer .glyphicon:hover {
  color: #306d9f;
}


</style>
<body>

    <section>
        <div class= "jumbotron header-style" style="margin-bottom: -10px">
            <h1>My Steps</h1>
        </div>
    </section>


<section>
<!-- fourth section - Information -->
<div id="home" class="pad-section">
  <div class="container">
        <div class="panel panel-default">
          <div class="namecard lead">
            <div class="top-left">
            <strong>Neuschwanstein Castle</strong >
          </div>
            <div class="bottom-left">
              <small>Schwangau, Germany || Jul 2016</small>
          </div>
        </div>
      </div>
      </div>
</div>
<!-- /fourth section -->
</section>

<section>
<!-- fifth section -->
<div id="services" class="pad-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h1>SSTUNNING, ISN'T IT ?</h1>
        <h4>photo taken with a 10-year-old Canon EOS 5D Mk II</h4>
      </div>
  </div>
  </div>
</div>
<!-- /fifth section -->

<!-- footer -->
<!-- /footer -->
</section>

<section>
<!-- fourth section - Information -->
<div id="information" class="pad-section">
  <div class="container">
        <div class="panel panel-default">
          <div class="namecard lead">
            <div class="top-left">
            <strong>Skyline of many angels</strong >
          </div>
            <div class="bottom-left">
              <small>Griffith Observatory, Los Angeles, CA, USA || Jun 2016</small>
          </div>
        </div>
      </div>
      </div>
  </div>
<!-- /fourth section -->
</section>

<section>
<!-- fifth section -->
<div id="services" class="pad-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h1>TIRED OF THE BUILDINGS ?</h1>
        <h4>let's dive into the ocean</h4>
      </div>
  </div>
</div>
<!-- /fifth section -->

<!-- footer -->
<!-- /footer -->
</section>

<section>
<!-- fourth section - Information -->
<div id="block3" class="pad-section">
  <div class="container">
        <div class="panel panel-default">
          <div class="namecard lead">
            <div class="top-left">
            <strong>"in the middle of nowhere"</strong >
          </div>
            <div class="bottom-left">
              <small>Hurawalhi Resort, Lhaviyani Atoll, MV</small>
          </div>
        </div>
      </div>
      </div>
  </div>

<!-- /fourth section -->
</section>

<section>
<!-- fifth section -->
<div id="services" class="pad-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h1>WHAT'S UP NEXT ?</h1>
        <h4>upcoming trip in March</h4>
      </div>
    </div>
  </div>
</div>
<!-- /fifth section -->

<!-- footer -->
<!-- /footer -->
</section>

<section>
<!-- fourth section - Information -->
<div id="next" class="pad-section">
  <div class="container">
        <div class="panel panel-default">
          <div class="namecard lead">
            <div class="top-left">
            <strong>a 10,000 km trip in a budget!</strong >
          </div>
            <div class="bottom-left">
              <small>on China Eastern, Etihad and Scoot</small>
          </div>
        </div>
      </div>
  </div>
</div>

<!-- /fourth section -->
</section>

    <footer class="container-fluid header-bg " style="background-color: #2d3651">
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

<script type="text/javascript">
$(document).ready(function (){
  // create a LatLng object containing the coordinate for the center of the map
  var latlng = new google.maps.LatLng(-33.86455, 151.209);
  // prepare the map properties
  var options = {
    zoom: 15,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    navigationControl: true,
    mapTypeControl: false,
    scrollwheel: false,
    disableDoubleClickZoom: true
  };
  // initialize the map object
  var map = new google.maps.Map(document.getElementById('google_map'), options);
  // add Marker
  var marker1 = new google.maps.Marker({
    position: latlng, map: map
  });
  // add listener for a click on the pin
  google.maps.event.addListener(marker1, 'click', function() {
    infowindow.open(map, marker1);
  });
  // add information window
  var infowindow = new google.maps.InfoWindow({
    content:  '<div class="info"><strong>This is my company</strong><br><br>My company address is here<br> 32846 Sydney</div>'
  });
});
</script>

</body>

@endsection

@section('js')

@endsection