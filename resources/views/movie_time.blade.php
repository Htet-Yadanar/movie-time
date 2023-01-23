@extends('layouts.app')

@section('content')

<div class="container ">

    <div class="row d-flex justify-content-center ">
      <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
        <div class="whole-page">
          <div class="hands sc" id="sc"><i></i></div>
          <div class="hands mn" id="minutes"></div>
          <div class="hands hr" id="hours"></div>
  
      <div class="clock">
          <span style="--i:1;"><b>|</b></span>
          <span style="--i:2;"><b>|</b></span>
          <span style="--i:3;"><b class="number">3</b></span>
          <span style="--i:4;"><b>|</b></span>
          <span style="--i:5;"><b>|</b></span>
          <span style="--i:6;"><b class="number">6</b></span>
          <span style="--i:7;"><b>|</b></span>
          <span style="--i:8;"><b>|</b></span>
          <span style="--i:9;"><b class="number">9</b></span>
          <span style="--i:10;"><b>|</b></span>
          <span style="--i:11;"><b>|</b></span>
          <span style="--i:12;"><b class="number">12</b></span>
      </div>
  
      <div class="digital">
          <div id="h">00</div>
          <div id="m">00</div>
          <div id="s">00</div>
          <div id="a">00</div>
      </div>

        </div>

      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 mt-5 align-self-center">
        <div class="form card mt-1">

            <div class="row justify-content-center">
                <h1>Movie Time</h1>
                <div class="movie_text">

                </div>
               
            </div>   
        </div>
      </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script> 
        $(document).ready(function() {
                var APP_URL = {!! json_encode(url('/')) !!}
                
                  var movie_time_api = APP_URL+"/api/movie_time"
                          bus_info();
                          function bus_info(){
                            $.get(movie_time_api,
                            {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                            },
                            function(data){
                                let htmlView = '';
                                console.log(data);
                                htmlView += `
                                <h3>
                                    `+data.message+`
                                </h3>
                                `
                                $('.movie_text').html(htmlView);
                            });
                          }        
                })
    </script>
@endsection