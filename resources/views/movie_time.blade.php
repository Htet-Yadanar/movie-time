@extends('layouts.app')

@section('content')

<div class="container ">
  <div class="row d-flex justify-content-center ">
    <div class="d-flex col-lg-6 col-md-12 col-sm-12 mt-5 align-items-center justify-content-center">
      <div class="whole-page">
        <div class="hands sc" id="sc"><i></i></div>
        <div class="hands mn" id="minutes"></div>
        
        <div class="hands hr" id="hours"></div>

        <div class="digital">
            <div id="h" class="col-2">00</div>
            <div id="m" class="col-2">00</div>
            <div id="s" class="col-2">00</div>
            <div id="a" class="col-2">00</div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 mt-5 align-self-center">
      <div class="form card mt-1">
          <div class="row justify-content-center">
            <h1>Movie Time</h1>
            <div class="movie_text"></div> 
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
                                <h3 class="info-text">
                                    `+data.message+`
                                </h3>
                                `
                                $('.movie_text').html(htmlView);
                            });
                          }        
                })
    </script>
@endsection