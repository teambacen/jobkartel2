<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Job Kartel Sign In</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/image/foot-logo-07.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '188545138301405',
          xfbml      : true,
          version    : 'v2.8'
        });
        FB.AppEvents.logPageView();
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="container-fluid signin">
      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3 box">
          <div class="panel panel-default">
            <div class="panel-heading">
                <img src="{{ asset('/image/logo-copy.png') }}" class="center-block" width="100px" height="30px" alt="">
            </div>
            <div class="panel-body">
              <h4 class="text-center sign-text">Log Masuk Ke Akaun Anda</h4>
              @if (session()->has('flash_notification.message'))
                  <div class="alert alert-{{ session('flash_notification.level') }}">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                      {!! session('flash_notification.message') !!}
                  </div>
                @endif
              <div class="col-xs-12 col-md-4 col-md-offset-2 login-res">
                <a href="{{ action('Auth\RegisterController@redirectToProvider' ,['provider' => 'facebook']) }}" class="btn btn-facebook btn-block">Log In With Facebook</a>
                <a href="{{ action('Auth\RegisterController@redirectToProvider' ,['provider' => 'twitter']) }}" class="btn btn-twitter btn-block">Log In With Twitter</a>
                <a href="#" class="btn btn-google btn-block">Log In With Google</a>
              </div>
              <div class="col-xs-12 col-md-4">

                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div>
                            <input id="email" type="email" class="form-control form-jobkartel" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <div>
                            <input id="password" type="password" class="form-control form-jobkartel" name="password" placeholder="Kata Laluan" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                          <button type="submit" class="btn btn-jobkartel btn-block">
                              Log Masuk
                          </button>

                        </div>
                    </div>
                </form>
              </div>
            </div>
            <div class="panel-footer">
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  Terlupa Kata Laluan?
              </a>|
              <a class="btn btn-link" href="{{ route('register') }}"> Daftar</a>
            </div>
          </div>

        </div>
      </div>
    </div>

  </body>
</html>
