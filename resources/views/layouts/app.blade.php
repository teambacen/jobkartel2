<!--
,,,,,,,,,,,,,,,,,,,
,,,,,,,,,,,,,,,,,,,,,
,,,,,,,,,,,,,,,,,,,,,
,,,,,,,,########,,,,,      .;:
,,,,,,,,########,,,,,    @@@@@@@.    @@@@@@@@+    @@.   ;@@:      #@@#      @@@@@@@@+  :@@@@@@@@@@ `@@@@@@@@@  @@
,,,,,,,,###+++##,,,,,   @@@@#@@@@:   @@@@@@@@@+   @@.  ,@@'       @@@@      @@@@@@@@@@ :@@@@@@@@@@ `@@@@@@@@@  @@
,,,,,,,,###,,,##,,,,,  @@@     #@@   @@     #@@   @@. `@@+       ;@@@@'     @@`    ;@@     ;@@     `@@         @@
,,,,,,,,#'#,,,##,,,,, `@@       @@@  @@      @@   @@. @@#        @@;;@@     @@`     @@:    ;@@     `@@         @@
,,,,,,,,'##,,,##,,,,, #@@       ,@@  @@     @@@   @@.@@@        ,@@  @@,    @@`     @@,    ;@@     `@@         @@
,,,,,,,,,#',,,##,,,,, @@+        @@  @@@@@@@@@    @@@@@         @@#  #@@    @@`    +@@     ;@@     `@@@@@@@@@  @@
,,,,,,,,,,,,,,##,,,,, @@+        @@  @@@@@@@@@+   @@@@@         @@    @@`   @@@@@@@@@#     ;@@     `@@@@@@@@@  @@
,,,,'##,,,,,,,##,,,,, @@@       ,@@  @@     :@@   @@.@@@       @@@    @@@   @@@@@@@@,      ;@@     `@@         @@
,,,,:##,,,,,,'##,,,,, .@@       @@@  @@      @@,  @@. @@@      @@`     @@   @@`  @@@       ;@@     `@@         @@
,,,,,###,,,,,###,,,,,  @@@     #@@   @@     .@@`  @@.  @@@    @@@      @@@  @@`   @@@      ;@@     `@@         @@
,,,,,'####+####,,,,,,   @@@@@@@@@;   @@@@@@@@@@   @@.   @@@   @@,      ,@@  @@`    @@@     ;@@     `@@@@@@@@@  @@@@@@@@@
,,,,,,+#######:,,,,,,    @@@@@@@.    @@@@@@@@@    @@.    @@@ +@@        @@+ @@`    `@@+    ;@@     `@@@@@@@@@  @@@@@@@@@
,,,,,,,,+###',,,,,,,,      ,;:
,,,,,,,,,,,,,,,,,,,,,
,,,,,,,,,,,,,,,,,,,,,
,,,,,,,,,,,,,,,,,,,

-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" id="token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./css/app.css" rel="stylesheet">
    <link href="./css/master.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('/image/foot-logo-07.png') }}">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('/image/foot-logo-07.png') }}" style="height:30px !important; width:30px !important;" alt="">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                        &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="/resume" style="border-top:2px solid #FACF13;">Resume</a></li>
                            <li><a href="/letter" style="border-top:2px solid #FACF13;">Cover Letter</a></li>
                            @if(count(Auth::user()->subscription) == 0)
                            <!-- <li><a href="#">Updgrade</a></li> -->
                            @endif
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Profile<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                    <!--  <a href="{{ url('/profile') }}">Profile</a> -->
                                    </li>
                                    <li>
                                      <!-- <a href="{{ url('/setting') }}">Setting</a> -->
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br>
        @yield('content')
        <br>
        <br>
        <!---
        <div class="col-md-12 footer">
          <div class="container" style="margin-top:30px;">
            <div class="col-md-4">
              <img src="{{ asset('/image/foot-logo-07.png') }}" width="100px" alt="">
            </div>
            <div class="col-md-4">
              <div class="footer-content">
                <h3>About Job Kartel</h3>
                <p><a href="#">About Us</a></p>
                <p><a href="#">Team</a></p>
                <p><a href="#">Careers</a></p>
                <p><a href="#">Contact Us</a></p>
                <p><a href="#">Terms Of Use</a></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="footer-content">
                <h3>Join The Conversation</h3>
                <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
    </div>
    -->
    <script src="./js/app.js"></script>
</body>
</html>
