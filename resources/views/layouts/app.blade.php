<!doctype html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/clock-style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="row mb-5">
        <div class="col-12">
            <div class="nav-bar">
                <div class="nav-links-container">
                    <a href="{{ route('time_schedule') }}">Movie Time</a>
                    <div class="nav-links">
                        @auth
                        <a href="{{ route('time_schedule') }}">Save Time Schedule</a>
                        <a href="{{ route('bus_schedule') }}">Bus Schedule</a>
                        @if($schedule_time_count == 0 && $bus_time_count == 0)
                        <a class="disabled-link">Decide Movie Time</a>
                        @else
                        <a href="{{ route('movie_time') }}">Decide Movie Time</a>
                        @endif
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" class="nav-link logout" value='Logout'>
                        </form>
                        @endauth
                        @guest
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
      
    </div>
  
    @yield('content')
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="{{ asset('js/clock.js') }}" defer></script>
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script> 
        $(document).ready(function() {
                var APP_URL = {!! json_encode(url('/')) !!}
                $(document).on('click', '#logout', function(e){
                        e.preventDefault();
                        var logout_api = APP_URL+"/api/logout"
                        $.post(logout_api,
                            {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                            },
                            function(data){
                            });   
                })
        })
    </script>
</body>
</html>