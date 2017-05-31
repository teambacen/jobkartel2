<template lang="html">
  <div>
    <div class="navbar" style="margin-bottom:-64px !important">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand">
            <!--<img src="{{ asset('image/logo-06.png') }}" height="50px"  alt="">-->
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
        <!--  <img src="{{ asset('/image/foot-logo-07.png') }}" width="100px" alt="">-->
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
  </div>
</template>

<script>
export default {
}
</script>

<style lang="css">
</style>
