@extends('app')

@section('content')

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a {
  color: #dddddd;
}

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
    margin-bottom: 0;
  }

     .namecard {
    position: absolute;
    left: 0;
    top: 20%;
    height: 20%;
    width: 100%;
    background: rgba(0,0,0,0.5);
    font-family: 'Open Sans Condensed', sans-serif;
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
#home {
  background: url("{{ asset('/images/image03.jpg')}}") no-repeat center center fixed;
  display: table;
  height: 100%;
  position: relative;
  width: 100%;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#about {
}
#services {
  background-color: #306d9f;
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
#information {
  background: url("{{ asset('/images/image04.jpg')}}") no-repeat center center fixed;
  display: table;
  height: 600px;
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
</head>

<body>

<section>
    <div class= "jumbotron header-style" style="margin-bottom: -10px">
      <h1>Acknowledgements</h1>
    </div>
</section>

<section>
<!-- fourth section - Information -->
<div class="containerB">
<div id="information" class="pad-section">
  <div class="containerB" style="height: 40%">
    <div class="col-sm-6" style="margin-top: 10%">
          <div class="row">
            <span><h3>Mr. Alex Kwok:</h3></span>
            <span><h5>tutor, inspirer</h5></span>
          </div>
          <br>
          <div class="row">
            <span><h3>Mr. Roger Wong</h3></span>
            <span><h5>tutor, inspirer</h5></span>
          </div>
          <br>  
          <div class="row">
            <span><h3>Mr. Bill Chan</h3></span>
            <span><h5>lecturer, inspirer</h5></span>
          </div> 
    </div> 
    <div class="col-sm-6">
          <div class="row">
            <span><h3><a href="https://p5js.org/" target="blank">p5.js</a><h3></span>
              <span><h5>javascript framework for skeching></h5></span>
          </div>
          <div class="row">
            <span><h3><a href="https://codepen.io/dudleystorey/pen/knqyK" target="blank">Dudley Storey</a><h3></span>
              <span><h5>full screen video background effect></h5></span>
          </div>
          <div class="row">
            <span><h3><a href="https://www.script-tutorials.com/bootstrap-one-page-template-with-parallax-effect/" target="blank">Script Tutorials</a><h3></span>
              <span><h5>parallax scrolling effect></h5></span>
          </div>
          <div class="row">
            <span><h3><a href="https://github.com/bqworks/slider-pro/" target="blank">davidghi</a><h3></span>
              <span><h5>image slider javascript plugin></h5></span>
          </div>
          <div class="row">
            <span><h3><a href="https://getbootstrap.com/" target="blank">Bootstrap</a><h3></span>
              <span><h5>fCSS/Javascript frameworks and plugins></h5></span>
          </div>
          <div class="row">
            <span><h3><a href="https://www.w3schools.com/" target="blank">W3Schools</a><h3></span>
              <span><h5>tutorials and examples></h5></span>
          </div>
  </div>
</div>
</div>
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


@endsection