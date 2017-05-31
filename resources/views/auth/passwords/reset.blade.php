
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
              <h4 class="text-center sign-text">Set Semula Kata Laluan</h4>

              <div class="col-xs-12 col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Reset Password
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
