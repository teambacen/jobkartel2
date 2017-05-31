<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/c9180cc47c.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title>Landing Page 1</title>
    <style media="screen">
      p{
        font-family: 'Lato', sans-serif;
      }
      body{
        position: relative;
      }
      #page1{
        padding-top: 50px;
        height: 700px;
        color: #FFFFFF;
        background-color: #FFFFFF;
      }
      #page2{
        padding-top: 50px;
        height: 500px;
        color: #FFFFFF;
        background-color: #F8CC0E;
      }
      #page3{
        padding-top: 50px;
        height: 400px;
        color: #FFFFFF;
        background-color: #FFFFFF;
      }
      #page4{
        padding-top: 50px;
        height: 400px;
        color: #FFFFFF;
        background-color: #F8CC0E;
      }
      #page5{
        padding-top: 50px;
        height: 1600px;
        color: #FFFFFF;
        background-color: #FFFFFF;
      }
      #page6{
        padding-top: 50px;
        height: 400px;
        color: #FFFFFF;
        background-color: #F8CC0E;
      }
      #page7{
        padding-top: 50px;
        height: 400px;
        color: #FFFFFF;
        background-color: #FFFFFF;
      }
      #page8{
        padding-top: 50px;
        height: 400px;
        color: #FFFFFF;
        background-color: #F8CC0E;
      }
      .carousel-inner > .item > img,
      .corousel-inner > .item > a > img{
        width: 90%;
        margin: auto;
      }
      .round{
        border: 1px solid black;
        background-color: black;
        border-radius: 100%;
        width: 20px;
        height: 20px;
        margin-top: 2px;
      }
      .icon-color{
        color: #F8CC0E;
      }
    </style>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="{{ asset('image/jobkartel.png') }}" alt="jobkartel" height="20px"></a>
        </div>
        <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
         <li><a href="#section1">Log Masuk</a></li>
          <li><a href="#section2">Daftar</a></li>
          <li><a href="#section3">SOCIAL</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</nav>
<div class="container-fluid" id="page1">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{ asset('image/interface1.png') }}" alt="interface1">
      </div>
      <div class="item">
        <img src="{{ asset('image/interface2.png') }}" alt="interface2" >
      </div>
      <div class="item">
        <img src="{{ asset('image/interface3.png') }}" alt="interface3" >
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</div>
<div class="container-fluid" id="page2">
  <div class="row">
    <div class="col-xs-5 col-md-5">
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col-xs-2 col-xs-offset-1 col-md-2 col-md-offset-1">
          <div class="round">
            <i class="fa fa-check icon-color" aria-hidden="true" style="margin-left:2px; margin-top:1px;"></i>
          </div>
        </div>
        <div class="col-xs-6 col-md-6">
          <p style="font-weight:bold; font-size:15px; color:black">Buat Resume Infografik dengan cepat dan mudah</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-2 col-xs-offset-1 col-md-2 col-md-offset-1">
          <div class="round">
            <i class="fa fa-check icon-color" aria-hidden="true" style="margin-left:2px; margin-top:1px;"></i>
          </div>
        </div>
        <div class="col-xs-6 col-md-6">
          <p style="font-weight:bold; font-size:15px; color:black">10 Rekaan Template Yang Unik</p>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-xs-2 col-xs-offset-1 col-md-2 col-md-offset-1">
          <div class="round">
            <i class="fa fa-check icon-color" aria-hidden="true" style="margin-left:2px; margin-top:1px;"></i>
          </div>
        </div>
        <div class="col-xs-6 col-md-6">
          <p style="font-weight:bold; font-size:15px; color:black">Isi Maklumat, Klik & Print!</p>
        </div>
      </div>
    </div>
    <div class="col-xs-7 col-md-7">
      <center>
        <img src="{{ asset('image/egresume.png') }}" alt="egresume" height="400px">
      </center>
    </div>
  </div>
</div>
<div class="container-fluid" id="page3">
  <div class="row">
    <br>
    <br>
    <br>
    <div class="col-xs-4 col-md-4">
      <h1 style="font-weight:bold; color:black; text-align:center">70%</h1>
      <p class="col-xs-8 col-xs-offset-2 col-md-8 col-md-offset-2" style="text-align:center; color:black; font-weight:bold">Meningkatkan peluang anda dipanggil ke TEMUDUGA!</p>
    </div>
    <div class="col-xs-4 col-md-4">
      <h1 style="font-weight:bold; color:black; text-align:center">4/5</h1>
      <p class="col-xs-8 col-xs-offset-2 col-md-8 col-md-offset-2" style="text-align:center; color:black; font-weight:bold">Empat daripada lima orang memilih Resume Infografik berbanding Resume Tradisional</p>
    </div>
    <div class="col-xs-4 col-md-4">
      <h1 style="font-weight:bold; color:black; text-align:center">60</h1>
      <p class="col-xs-6 col-xs-offset-3 col-md-6 col-md-offset-3" style="text-align:center; color:black; font-weight:bold">60 hari Jaminan wang anda dikembalikan</p>
    </div>
  </div>
</div>
<div class="container-fluid" id="page4">
  <p>etst</p>
</div>
<div class="container-fluid" id="page5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <h4 style="color:black; text-align:center; font-weight:bold">Bina resume yang sempurna dengan PANTAS</h4>
      </div>
      <div class="col-xs-4 col-md-4" style="margin-top:25px">
        <center>
          <img src="{{ asset('image/clock.png') }}" alt="clock" height="60px" style="margin-top:-5px">
        </center>
        <br>
        <p style="text-align:center; color:black;">Penjimatan Masa</p>
        <p style="text-align:center; color:black;">Pembinaan dokumen paling berharga (resume) anda kini hanya perlukan kurang daripada 5 minit untuk siap!</p>
      </div>
      <div class="col-xs-4 col-md-4" style="margin-top:25px">
        <center>
          <img src="{{ asset('image/task.png') }}" alt="task" height="50px">
        </center>
        <br>
        <p style="text-align:center; color:black;">Semudah ISI & KLIK</p>
        <p style="text-align:center; color:black;">Anda tidak perlu lagi bersusah-payah dengan Microsoft Word. Bina resume sempurna anda dengan hanya ISI & KLIK,</p>
      </div>
      <div class="col-xs-4 col-md-4" style="margin-top:25px">
        <center>
          <img src="{{ asset('image/10.png') }}" alt="10" height="50px">
        </center>
        <br>
        <p style="text-align:center; color:black;">10 Rekaan Berbeza</p>
        <p style="text-align:center; color:black;">Akses kepada 10 rekaan resume infografik yang berbeza!</p>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <div class="row">
          <div class="col-xs-4 col-md-4">
            <img src="{{ asset('image/trash.png') }}" alt="png">
          </div>
          <div class="col-xs-1 col-md-1">
            <img src="" alt="">
          </div>
          <div class="col-xs-6 col-md-6">
            <br>
            <br>
            <p style="color:black; font-size:30px">
              Jika anda GAGAL untuk menarik perhatian mereka dalam masa 10 saat,
              RESUME ANDA BERKEMUNGKINAN TINGGI AKAN KE TONG SAMPAH!
            </p>
          </div>
          <div class="col-xs-1 col-md-1">
            <img src="" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <div class="row">
          <div class="col-xs-1 col-md-1">
            <img src="" alt="">
          </div>
          <div class="col-xs-6 col-md-6">
            <br>
            <br>
            <p style="color:black; font-size:30px">
              Berhenti buatkan majikan bosan membaca resume anda, masa untuk
              UPGRADE resume anda yang KUSAM adalah SEKARANG!
            </p>
          </div>
          <div class="col-xs-1 col-md-1">
            <img src="" alt="">
          </div>
          <div class="col-xs-4 col-md-4">
            <img src="people.png" alt="png">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <div class="row">
          <div class="col-xs-4 col-md-4">
            <img src="paper.png" alt="png">
          </div>
          <div class="col-xs-1 col-md-1">
            <img src="" alt="">
          </div>
          <div class="col-xs-6 col-md-6">
            <br>
            <br>
            <p style="color:black; font-size:30px">
              Recruiter menerima BERATUS-RATUS permohonan, apa yang membuatkan resume anda DILIHAT ?
            </p>
          </div>
          <div class="col-xs-1 col-md-1">
            <img src="" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" id="page6">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <h1 style="text-align:center; color:black">Resume Adalah Dokumen Kewangan Yang Paling Berharga</h1>
      <h4 style="text-align:center; color:black">Cipta resume yang akan meningkatkan peluang anda dipanggil ke temuduga</h4>
      <br>
      <br>
      <div class="row">
        <div class="col-xs-6 col-xs-offset-3 col-md-6 col-md-offset-3">
          <center>
            <button class="btn btn-danger btn-lg btn-block" type="button" name="button">CUBA SEKARANG</button>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid" id="page7">
  <p>etst</p>
</div>
<div class="container-fluid" id="page8">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <div class="col-xs-6 col-xs-offset-3 col-md-6 col-md-offset-3">
        <h1 style="text-align:center; color:black" >Cuba secara PERCUMA dan dapatkan diskaun sebanyak 70%</h1>
        <div class="row">
          <div class="col-xs-6 col-xs-offset-3 col-md-6 col-md-offset-3">
            <br>
            <br>
            <center>
              <button class="btn btn-danger btn-lg btn-block" type="button" name="button">CUBA SEKARANG</button>
            </center>
          </div>
        </div>
      </div>
      <img src="allresume.png" alt="allresume" height="400px">
    </div>
  </div>
</div>
<div class="container-fluid" id="page9">
  <div class="row">

  </div>
</div>

  </body>
</html>
