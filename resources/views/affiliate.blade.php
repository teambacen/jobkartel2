<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JobKartel Affiliate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <style media="screen">
      @media only screen and (max-width:500px){
        body{
          background: url('/images/affiliate_bg-02.png') no-repeat center center fixed !important;
          background-size: cover;
          border-top: 10px solid #000;
        }
      }
    </style>
    <link rel="icon" type="image/png" href="{{ asset('/image/foot-logo-07.png') }}">
  </head>
  <body>
    <div class="container-fluid affiliate">
      <div class="col-md-7 col-md-offset-1">
        <h1 class="affiliate-title">Teknik Rahsia Menjawab 15 Soalan "KILLER" Temuduga Dan 3 Template Yang Mampu Memukau HR </h1>
        <p class="affiliate-paragraph text-center">Ebook dan Paker Template Resume PERCUME ini bakal mengubah kerjaya anda.</p>
        <img src="{{ asset('/image/ebook-03.png') }}" class="img-responsive" alt="">
      </div>
      <div class="col-md-3 affiliate-box">
        <h3 class="affiliate-box-text">MASUKKAN NAMA & EMAIL ANDA UNTUK MENDAPATKAN EBOOK PERCUMA!</h3>
        {{ Form::open() }}
            <div class="form-group">
              {{ Form::text('email', null, ['class' => 'form-control' , 'placeholder' => 'Masukkan Email Anda']) }}
            </div>
            <div class="form-group">
              {{ Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Samaran']) }}
            </div>
            {{ Form::submit('SAYA NAK AKSES', ['class' => 'btn btn-block btn-jobkartel']) }}
        {{ Form::close() }}
      </div>
    </div>
  </body>
</html>
