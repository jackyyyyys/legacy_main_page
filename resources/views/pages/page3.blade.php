@extends('app')

@section('content')
<style>
      .containerC {
    background-color: #2d3651;
    position: relative;
    text-align: center;
    color: white;
    margin-top: -20px;
    margin-bottom: 1px;
    padding-top: 50px;
    padding-bottom: 50px;
  }

   .namecard {
    position: absolute;
    right: 12%;
    top: 50%;
    height: 180px;
    width: 500px;
    background: rgba(0,0,0,0.5);
    font-family: 'Open Sans Condensed', sans-serif;
  }

</style>

<body>
<section>
<div class= "jumbotron header-style">
    <h1>Something cool ... </h1>
  </div>
</section>

<div class="containerC">
    <h3> :) </h3>
</div>
<div class="container">
    <div class="row xl">
            <script src="{{ asset('../../../../p5/p5.js') }}"></script>
            <script src="{{ asset('../../../../p5/sketches/sketch1.js') }}"></script>
    </div>
</div>

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