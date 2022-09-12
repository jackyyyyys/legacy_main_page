@extends('app')

@section('content')
<head>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '347939262375621');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=347939262375621&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	
</head>

<style>
  	body {
  margin: 0;
}
video { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 	background: #dddddd no-repeat;
  background-size: cover;
  transition: 1s opacity;
}
.stopfade { 
   opacity: .5;
}

#welcome { 
  	font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
  	font-weight:100; 
  	position: fixed;
  	top: 30%;
  	left: 10%;
  	background: rgba(0,0,0,0);
  	color: #eeeeee;
	padding: 30px;
  	margin-left: 30px;
  	margin-right: 10px;
  	width: 70%;
  	height: 60%;
  	font-size: 2rem;
}
h1 {
  font-size: 150px;
  text-transform: uppercase;
  margin-top: 0;
  letter-spacing: .3rem;
}

#welcome button { 
  display: block;
  float: left;
  top: 30%;
  bottom: 20%;
  width: 100px;
  height: 35px;
  padding: 5px;
  border: none; 
  margin: 5px; 
  font-size: 15px;
  background: rgba(255,255,255,0.3);
  color: #fff;
  border-radius: 3px; 
  cursor: pointer;
  transition: .3s background;
}
#welcome button:hover { 
   background: rgba(0,0,0,0.2);
}

a {
  display: inline-block;
  text-decoration: none;
  transition: .6s background; 
}

@media screen and (max-device-width: 800px) {
  html { background: url("{{ asset('images/background.mp4') }}") #000 no-repeat center center fixed; }
  #bgvid { display: none; }
}
	}
</style>

<body>
<script>
  fbq('track', 'ViewContent');
</script>


<section>
  <div class="tontainer" style="margin: 0">
	<video poster="{{ asset('images/background.mp4') }}" id="bgvid" playsinline autoplay muted loop>
  		<!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
		<source src="{{ asset('images/background.mp4') }}" type="video/webm">
		<source src="{{ asset('images/background.mp4') }}" type="video/mp4">
	</video>
		<div id="welcome" >
			<h1>WELCOME</h1>
			<h3>Jacky's little dreamroom</h3>
			<h3>where my dreams takeoff</h3>
			<br>
			<span>
				<button>Pause Video</button>
				<button><a href="{{ route('basicPage') }}">Learn More</a></button>
			</span>
		</div>
  </div>
</section>  

</body>

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



@endsection

@section('js')

<script type="text/javascript">
	var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#welcome button");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 


pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pause";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }
})
</script>
<script>
  fbq('track', 'ViewContent', {
    value: 10,
    currency: 'USD',
  });
</script>








@endsection