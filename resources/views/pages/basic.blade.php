@extends('app')

@section('content')
<style>
 .namecard {
    position: absolute;
    right: 12%;
    top: 50%;
    height: 180px;
    width: 500px;
    background: rgba(0,0,0,0.5);
    font-family: 'Open Sans Condensed', sans-serif;
  }

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
    padding-top: 50px;
    padding-bottom: 50px;
  }

    .containerD {
    color: #2d3651;
    position: relative;
    text-align: center;
    padding-top: 50px;
    padding-bottom: 50px;
    margin-left: 70px;
    margin-right: 70px;
  }


/* Bottom left text */
.bottom-left {
    position: absolute;
    font-size: 40px;
    top: 110px;
    left: 5%;
    letter-spacing: 2px;
}

/* Top left text */
.top-left {
    position: absolute;
    font-size: 55px;
    top: 25px;
    left: 5%;
    letter-spacing: 2px;
}

small {
  font-size: 60%;
}

.motto {
  font-weight: 100;
}

/* Centered text */
</style>

<body>
<section>
<div class= "jumbotron header-style">
    <h1>About Me</h1>
  </div>
</section>

<section>
  <div class="containerB">
    <img alt="icon" style="width:100%" src="{{ asset('/images/jacky_icon.png') }}">
    <div class="namecard">
      <div class="top-left">
        <span><strong>JACKY SIN</strong></span>
        <span>Chi Wa</span>
        <span><small>   19 yr</small></span>
      </div>
      <div class="bottom-left">
        <blockquote><p>Aviation | Photography | Travel</p></blockquote>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="containerC">
    <h1>
    || Dont Count the Days, Make the Days Count ||
    </h1>
  </div>
</section>

<section>
  <div class="containerB">
    <iframe
      width="100%"
      height="600"
      frameborder="0" style="border:0"
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAjOTyD_mHV0G-1D2EFRzCqdRVcDG6s_zA&q=Hong+Kong+University" allowfullscreen>
    </iframe>
  </div>
</section>

<section>
  <div class="containerC">
    <h1>
      Bachelor of Engineering
    </h1>
    <h3>
      Major in Logistic Engineering and Supply Chain Management
    </h3>
    <h5>
      <BR>
      THE UNIVERSITY OF HONG KONG
    </h5>
  </div>
</section>

<section>
  <div class="containerD">

    <div class="row">
      <h1>SKILLS</h1>
    </div>

    <div class="row">
      <h3>Languages</h3>
      <br>
    </div>

    <div class="row">  
      <div class="bs-component">
              <table class="table table-striped table-hover ">
                <tbody>
                  <tr class="secondary">
                    <td>#</td>
                    <td>Language</td>
                    <td>Usage</td>
                  </tr>
                  <tr class="success">
                    <td>1</td>
                    <td>Cantonese</td>
                    <td>Mother Tongue</td>
                  </tr>
                  <tr class="danger">
                    <td>2</td>
                    <td>English</td>
                    <td>Fluent</td>
                  </tr>
                  <tr class="warning">
                    <td>3</td>
                    <td>Mandarin</td>
                    <td>Native</td>
                  </tr>
                  <tr class="info">
                    <td>4</td>
                    <td>Spanish</td>
                    <td>Beginner</td>
                  </tr>
                </tbody>
              </table> 
            </div>
    </div>

    <div class="row">
      <div class="col-md-4"><h3>Photography</h3></div>
      <div class="col-md-4"><h3>Video Production</h3></div>
      <div class="col-md-4"><h3>Layout Designn</h3></div>
      <br>
    </div>

  </div> <!-- container-->

   <div class="containerD">

    <div class="row">
      <h1>KNOWLEDGED FIELDS</h1>
    </div>

    <div class="row">
      <div class="col-md-4"><h3>Theatre Operations</h3></div>
      <div class="col-md-4"><h3>Aviation & Air Ticketing System</h3></div>
      <div class="col-md-4"><h3>Transportation Systems</h3></div>
      <br>
    </div>



  </div> <!-- container-->
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




@endsection