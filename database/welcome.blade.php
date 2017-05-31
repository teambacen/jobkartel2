<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JobKartel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/homepage.css')}}">
        <link rel="icon" type="image/png" href="{{ asset('/image/foot-logo-07.png') }}">
    </head>
    <body>
      <div class="navbar">
        <div class="container">
          <div class="navbar-header">
            <a href="#" class="navbar-brand">
              <img src="{{ asset('image/logo-06.png') }}" height="50px"  alt="">
            </a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" style="padding-top:20px;">
              <li><a href="#">Jawatan Kosong</a></li>
              <li><a href="#">Tips Kerjaya</a></li>
              <li><a href="#">Work Life Balance</a></li>
              <li><a href="#">Startup</a></li>
              <li><a href="#">Bisnes</a></li>
              <li><a href="#">Umum</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="jumbotron">
          <div class="header-content">
            <h1 class="text-center head-text">Jadi diri anda dan dapatkan</h1>
            <h1 class="text-center head-text">karier idaman anda sekarang</h1>
            <div class="col-md-2 col-md-offset-4">
                <button type="button" class="center-block btn btn-warning btn-block" name="button">Bantu Saya</button>
            </div>
            <div class="col-md-2">
                <button type="button" class="center-block btn btn-default btn-block" name="button">Saya Tahu Apa Saya Cari</button>
            </div>

          </div>
      </div>
      <div class="col-md-12">
          <h1 class="text-center secondary-title">Mari mulakan. Apa yang anda mahu tahu?</h1>
          <p class="text-center secondary-paragraph">Pilih karier tool dan mula explore</p>
      </div>
      <div class="col-md-12">
        <div class="selection-first col-md-6">
          <div class="select-content">
            <h1 class="select-title text-center">BLOG</h1>
            <h3 class="select-paragraph text-center">Honest and expert advice for all of your most pressing career questions</h3>
            <button type="button" name="button" class="center-block btn btn-default btn-lg ">Look Inside</button>
          </div>
        </div>
        <div class="selection-second col-md-6">
          <div class="select-content">
            <h1 class="select-title text-center">RESUME ONLINE</h1>
            <h3 class="select-paragraph text-center">Cipta resume idaman anda secara online</h3>
            <button type="button" name="button" class="center-block btn btn-default btn-lg ">MULA MENCIPTA</button>
          </div>
        </div>
      </div>
      <div class="col-md-12">
          <h1 class="text-center secondary-title">Kami Ingin Membantu Anda Mencari Karier</h1>
          <p class="text-center secondary-paragraph">Pilih karier tool dan mula explore</p>
      </div>
      <div class="col-md-12">
        <div id="testimoni" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#testimoni" data-silde-to="0" class="active"></li>
            <li data-target="#testimoni" data-silde-to="1"></li>
          </ol>

          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="" alt="">
              <div class="carousel-caption">
                <h1>Test</h1>
              </div>
            </div>
            <div class="item">
              <img src="" alt="">
              <div class="carousel-caption">
                <h3>Test</h3>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#testimoni" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#testimoni" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-md-12 bottom">
        <div class="bottom-content">
          <h1 class="text-center">Honest and expert advice for all of your most</h1>
          <h1 class="text-center">pressing career questions</h1>
          <button type="button" class="btn btn-default center-block" name="button">Look Inside</button>
        </div>
      </div>
    <!--  <div class="col-md-12 footer">
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
      </div> -->
      <script src="/js/app.js" charset="utf-8"></script>
      <script type="text/javascript">
      $('.carousel').carousel({})
      </script>
    </body>
</html>
