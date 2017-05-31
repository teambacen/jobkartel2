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
      <div class="navbar" style="margin-bottom:-64px !important">
        <div class="container">
          <div class="navbar-header">
            <a href="#" class="navbar-brand">
              <img src="{{ asset('image/logo-06.png') }}" height="50px"  alt="">
            </a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" style="padding-top:20px;">
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Nasihat Kerjaya</a></li>
              <li><a href="#">Resume Online</a></li>
              <li><a href="#">Hubungi Kami</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="jumbotron">
          <div class="header-content">
            <h1 class="text-center head-text">Segalanya Tentang Karier Anda</h1>
            <h2 class="text-center head-text" style="margin-top:30px;">Panduan, Tips Temuduga Dan Nasihat Kerjaya</h2>
            <h2 class="text-center head-text">Yang Akan Membantu Anda Menjadi "Key Player" Dalam Industri</h2>
            <!--
            <div class="col-md-2 col-md-offset-4">

                <button type="button" class="center-block btn btn-warning btn-block" name="button">Bantu Saya</button>
            </div>
            <div class="col-md-2">
                <button type="button" class="center-block btn btn-default btn-block" name="button">Saya Tahu Apa Saya Cari</button>
            </div>
              -->

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
            <h3 class="select-paragraph text-center">Dapatkan Nasihat Kerjaya Dan Tips Temuduga Yang Terkini</h3>
            <form class="" action="/blog" method="get">
              <button type="submit" class="center-block btn btn-default btn-lg ">MEH! BACA</button>
            </form>
          </div>
        </div>
        <div class="selection-second col-md-6">
          <div class="select-content">
            <h1 class="select-title text-center">RESUME ONLINE</h1>
            <h3 class="select-paragraph text-center">Cipta resume infografik secara online</h3>
            <form class="" action="/offer" method="get">
              <button type="submit" class="center-block btn btn-default btn-lg ">MULA MENCIPTA</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-12">
          <h1 class="text-center secondary-title">Kami Ingin Membantu Anda Mencari Karier</h1>
          <p class="text-center secondary-paragraph">Pilih karier tool dan mula explore</p>
      </div>

      <div class="col-md-12 bottom">
        <div class="bottom-content">
          <h1 class="text-center">Interview Mastery Kit</h1>
          <h3 class="text-center">Hidup Terlalu Singkat Menggangur Terlalu Lama</h3>
          <form action="/blog/offer" method="get">
              <button type="submit" class="btn btn-sayanak center-block btn-lg">SAYA NAK !</button>
          </form>

        </div>
      </div>
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

            </div>
          </div>
        </div>
      </div>
      <script src="/js/app.js" charset="utf-8"></script>
      <script type="text/javascript">
      $('.carousel').carousel({})
      </script>
    </body>
</html>
