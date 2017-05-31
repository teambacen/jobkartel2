<template lang="html">
    <div class="">
      <div class="container-fluid" id="pgs1">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <h1 style="font-weight:bold; text-align:center">Mula Dapatkan Kerjaya Idaman Anda Hari Ini</h1>
            <h3 style="text-align:center">200 000 graduan dilahirkan setiap tahun</h3>
            <h3 style="text-align:center">1/4 masih menganggur 6 bulan selepas graduasi</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-4 col-md-offset-4">
            <br>
            <center>
              <div class="kotakmerah">
                <p style="color:white; text-align:center; margin-top:5px; font-weight:bold; font-size:18px">JK280</p>
              </div>
              <!-- <button class="btn btn-danger btn-lg btn-block" type="button" name="button" style="font-weight:bold">JK280</button> -->
            </center>
            <h4 style="text-align:center; font-weight:bold">*Gunakan kupon ini untuk menikmati diskaun sebanyak <span style="color:#ED1C24">RM 280</span></h4>
          </div>
        </div>
      </div>
      <div class="container-fluid" id="pgs2">
        <div class="row">
          <div class="col-xs-12 col-md-6 col-md-offset-3">
            <center>
              <div class="kotak">
                <p style="font-weight:bold; text-align:center">HOT DEAL</p>
              </div>
              <div class="kotak1">
                <br><br>
                <p style="font-weight:bold; color:#ED1C24; text-align:center; font-size:12px; margin-bottom:-20px"><span style="font-size:18px">{{ message }}</span></p>
                <transition name="fade">
                  <p v-show="fill" style="font-weight:bold; color:#ED1C24; text-align:center; font-size:12px; margin-bottom:-20px">RM&nbsp;&nbsp;<span style="font-size:18px"><strike>380</strike></span></p>
                </transition>
                <transition name="fade">
                  <p v-show="fill" style="font-weight:bold; color:#ED1C24; text-align:center; font-size:20px; margin-bottom:-20px">RM&nbsp;&nbsp;<span style="font-size:76px">100</span></p>
                </transition>
                <transition name="fade">
                  <p v-show="!fill" style="font-weight:bold; color:#ED1C24; text-align:center; font-size:20px; margin-bottom:-20px">RM&nbsp;&nbsp;<span style="font-size:76px">380</span></p>
                </transition>
                <p style="font-weight:bold">*harga sebelum diskaun</p>
                <form @submit.prevent="coupon" method="post">
                  <div class="input-group">
                      <div class="input-group">
                        <input type="text" v-model="kupon" class="form-control input-round input-lg" placeholder="kod diskaun anda">
                        <span class="input-group-btn">
                          <button class="btn btn-round btn-warning btn-lg" type="submit">DISKAUN KOD</button>
                        </span>
                      </div>
                  </div>
                </form>

                <p style="color:#ED1C24">*sila masukkan kupon diskaun untuk potongan harga</p>
                <br>
                <br>
                <div class="row">
                  <div class="col-xs-12 col-md-9 col-md-offset-2">
                    <div class="row">
                      <div class="col-xs-2 col-md-1">
                        <i class="fa fa-check" aria-hidden="true" style="font-size:18px; margin-right:20px"></i>
                      </div>
                      <div class="col-xs-10 col-md-10">
                        <p style="font-size:18px; text-align:left">Software Resume Online</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-2 col-md-1">
                        <i class="fa fa-check" aria-hidden="true" style="font-size:18px; margin-right:20px"></i>
                      </div>
                      <div class="col-xs-10 col-md-10">
                        <p style="font-size:18px; text-align:left">10 Template Resume Infografik</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-2 col-md-1">
                        <i class="fa fa-check" aria-hidden="true" style="font-size:18px; margin-right:20px"></i>
                      </div>
                      <div class="col-xs-10 col-md-10">
                        <p style="font-size:18px; text-align:left">10 Template Cover Letter</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-2 col-md-1">
                        <i class="fa fa-check" aria-hidden="true" style="font-size:18px; margin-right:20px"></i>
                      </div>
                      <div class="col-xs-10 col-md-10">
                        <p style="font-size:18px; text-align:left">50 Strategi Menjawab Soalan Temuduga</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-2 col-md-1">
                        <i class="fa fa-check" aria-hidden="true" style="font-size:18px; margin-right:20px"></i>
                      </div>
                      <div class="col-xs-10 col-md-10">
                        <p style="font-size:18px; text-align:left">Strategi Pembinaan Personal Branding</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-2 col-md-1">
                        <i class="fa fa-check" aria-hidden="true" style="font-size:18px; margin-right:20px"></i>
                      </div>
                      <div class="col-xs-10 col-md-10">
                        <p style="font-size:18px; text-align:left">Panduan Penulisan Resume</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-2 col-md-1">
                        <i class="fa fa-check" aria-hidden="true" style="font-size:18px; margin-right:20px"></i>
                      </div>
                      <div class="col-xs-10 col-md-10">
                        <p style="font-size:18px; text-align:left">Panduan Penulisan Cover Letter</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-2 col-md-1">
                        <i class="fa fa-check" aria-hidden="true" style="font-size:18px; margin-right:20px"></i>
                      </div>
                      <div class="col-xs-10 col-md-10">
                        <p style="font-size:18px; text-align:left">Strategi Follow-up Selepas Temuduga</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-2 col-md-1">
                        <i class="fa fa-check" aria-hidden="true" style="font-size:18px; margin-right:20px"></i>
                      </div>
                      <div class="col-xs-10 col-md-10">
                        <p style="font-size:18px; text-align:left">Strategi Penggunaan Media Sosial</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-2 col-md-1">
                        <i class="fa fa-check" aria-hidden="true" style="font-size:18px; margin-right:20px"></i>
                      </div>
                      <div class="col-xs-10 col-md-10">
                        <p style="font-size:18px; text-align:left">Strategi Bahasa Tubuh</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-2 col-md-1">
                        <i class="fa fa-check" aria-hidden="true" style="font-size:18px; margin-right:20px"></i>
                      </div>
                      <div class="col-xs-10 col-md-10">
                        <p style="font-size:18px; text-align:left">Strategi Ber-Networking</p>
                      </div>
                    </div>
                    <br>
                    <img src="../../../images/salespage/bank.png" class="img-responsive" alt="bank">
                  </div>
                </div>
                <br>
                  <a v-bind:href="url" class="btn btn-warning btn-lg btn-block"  style="font-weight:bold">
                    <p style="color:black; font-size:20px">SAYA NAK</p>
                  </a>
              </div>
            </center>
          </div>
        </div>
      </div>
      <div class="container-fluid" id="pgs3">
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <center>
              <img src="../../../images/salespage/60.png" class="img-responsive" alt="60" style="height:300px; width:300px">
            </center>
          </div>
          <div class="col-xs-12 col-md-5" style="margin-top:20px">
            <p style="font-size:30px; font-weight:bold">60 Hari Wang Anda Dikembalikan</p>
            <p style="font-size:18px">
              Para pembeli Interview Mastery Kit dilindungi oleh Jaminan Wang Dikembalikan. Kerana kami yakin dengan
              kualiti yang Interview Mastery Kit ini tawarkan
              <br>
              <br>
              Gunakan Kit ini selama 60 hari dan jika anda merasakan  ia tidak menambah apa apa ilmu dan
              meningkatkan  peluang anda untuk dipanggil ke temuduga dan diterima bekerja.
              <br>
              <br>
              Beritahu kami dan kami akan pulangkan wang anda serta merta.
            </p>
          </div>
        </div>
      </div>
      <div class="container-fluid" id="pgs4">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <div id="myCarousel2" class="carousel slide carousel-test" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <div class="col-xs-12 col-md-12">
                      <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3" style="margin-top:5%">
                          <img src="../../../images/salespage/1test.png" class="img-responsive" alt="1test">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3 ">
                          <div class="kotaktest">
                            <p style="text-align:center; color:black; font-weight:bold; padding-left:30px; padding-right:30px; margin-top:10px">
                              Believe it or not ? I am not an avid reader. But surprisingly I read this e-book until the last pages. It makes me continuously read this e-book is because it provides
                              effective strategy for ambitions and future. tips before interview, how to
                              have a very handsome CV, good  networking, communication skills,
                              professional attire, carrier growth and so forth!
                            </p>
                            <p style="text-align:center; color:black; font-weight:bold; margin-bottom:1px">Najwa Roslan</p>
                            <p style="text-align:center; color:black; font-weight:bold; font-size:10px">Student of Uitm Puncak Alam, Bachelor in Accountancy (hons)</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-xs-12 col-md-12">
                      <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3" style="margin-top:5%">
                          <img src="../../../images/salespage/2test.png" class="img-responsive" alt="2test">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3">
                          <div class="kotaktest">
                            <p style="text-align:center; color:black; font-weight:bold; padding-left:30px; padding-right:30px; margin-top:10px">
                              Setelah melihat e-Book ini saya merasakan ianya suatu pengisian yang baik dan terlalu menarik,
                              di mana bukan sahaja memberikan pengetahuan mendalam terhadap golongan yang baharu sahaja berjinak dengan media sosial.
                            </p>
                            <p style="text-align:center; color:black; font-weight:bold; margin-bottom:1px">Prof. Madya Dr. Azizi Bin Abu Bakar</p>
                            <p style="text-align:center; color:black; font-weight:bold; font-size:10px">Pensyarah Pusat Pengajian Muamalat dan Kewangan Islam,UUM</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-xs-12 col-md-12">
                      <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3" style="margin-top:5%">
                          <img src="../../../images/salespage/3test.png" class="img-responsive" alt="3test">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3">
                          <div class="kotaktest">
                            <p style="text-align:center; color:black; font-weight:bold; padding-left:30px; padding-right:30px; margin-top:10px">
                              Tips dan bimbingan dari team Jobkartel melalui e-Book ini banyak menyediakan ilmu penulisan
                              resume yang menarik, strategi pemilihan kerja idaman saya dan juga tips untuk menghadapi temuduga.  Memang seronok saya baca!
                            </p>
                            <p style="text-align:center; color:black; font-weight:bold; margin-bottom:1px">Muhammad Shameerul Afif Bin Abd Halim</p>
                            <p style="text-align:center; color:black; font-weight:bold; font-size:10px">Bachelor of Engineering (Hons) Mechanical, UiTM Shah Alam, Selangor.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-xs-12 col-md-12">
                      <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3" style="margin-top:5%">
                          <img src="../../../images/salespage/4test.png" class="img-responsive" alt="4test">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-md-6 col-md-offset-3">
                          <div class="kotaktest">
                            <p style="text-align:center; color:black; font-weight:bold; padding-left:30px; padding-right:30px; margin-top:10px">
                              Sangat membantu saya mempersiapkan diri untuk menghadapi  situasi sebelum, semasa dan selepas sesi temuduga.
                              Penyampaian yang mudah dan tak membosankan!
                            </p>
                            <p style="text-align:center; color:black; font-weight:bold; margin-bottom:1px">Nur Amirah Hizadin</p>
                            <p style="text-align:center; color:black; font-weight:bold; font-size:10px">Student of Bachelor of Arts (HONS) In Applied English Language Studies in KUPTM KL.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid" id="pgs5">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <p style="font-size:28px; text-align:center; font-weight:bold">Soalan Lazim Affiliate</p>
            <p style="font-size:18px; text-align:center">
              Berikut merupakan soalan-soalan lazim yang sering diterima oleh pihak kami berkenaan menjadi
              affiliate JobKartel.
            </p>
            <!-- <div class="panel-group" id-"accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    test
                    <a href="#a" role="button" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">+</a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    test
                  </div>
                </div>
              </div>
            </div> -->
            <div class="row">
              <div class="col-xs-12 col-md-8 col-md-offset-2">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">1) Apa itu Affiliate?
                        <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapse1">+</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                      <div class="panel-body">
                        Bahasa mudahnya, affiliate adalah seperti agen jualan. Anda akan mendapat komisyen di setiap jualan yang telah anda perolehi.
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">2) Siapakah yang boleh mendaftar menjadi Affilliate
                        <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapse2">+</a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body">
                        Warganegara Malaysia yang berumur 13 Tahun dan keatas.
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">3) Adakah sebarang bayaran dikenakan untuk mendaftar sebagai Affilliate
                        <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapse3">+</a>
                      </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                      <div class="panel-body">
                      Pendaftaran sebagai ahli affiliate adalah percuma. Tiada sebarang bayaran dikenakan.
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">4) Bagaimana saya boleh menjana pendapatan sebagai Affilliate
                        <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapse4">+</a>
                      </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                      <div class="panel-body">
                        Anda hanya perlu mempromosikan produk kami pada orang ramai. Setiap individu yang membeli produk kami daripada anda.
                        Komisyen sebanyak 50% akan diberikan kepada anda.
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">5) Bagaimana pihak JobKartel mengesan jualan hasil promosi saya?
                        <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapse5">+</a>
                      </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                      <div class="panel-body">
                        Pihak kami mempunyai sistem tracking yang telah dipasang. Dimana, cookies yang mengandungi id anda
                        akan ditanamkan di dalam komputer pembeli apabila mereka klik pada link afiliate anda
                        (setiap ahli mempunyai link affiliate yang berbeza).
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">6) Adakah penjual ini mempunyai hadnya?
                        <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapse6">+</a>
                      </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse">
                      <div class="panel-body">
                        Tidak. Selagi banyak anda menjual, semakin tinggi komisyen yang akan anda dapat.
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">7) Bagaimanakah saya layak untuk mendapatkan hadiah peraduan affilliate
                        <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapse7">+</a>
                      </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse">
                      <div class="panel-body">
                        Untuk anda berada di dalam kelayakan untuk mendapatkan hadiah yang ditawarkan, anda WAJIB
                        untuk membuat sales minima sebanyak 150 UNIT. Apabila tarikh contest telah ditutup,
                        Team Jobkartel akan lihat siapakah yang membuat jualan tertinggi pertama, kedua dan ketiga.
                        TOP 3 penghasilan jualan tertinggi akan menerima hadiah seperti yang dinyatakan di atas.
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">8) Bilakah saya akan dibayar / menerima komisyen saya?
                        <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapse8">+</a>
                      </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse">
                      <div class="panel-body">
                      Bayaran dibuat di awal bulan 1-7 hb setiap bulan, untuk komisyen bulan sebelumnya.
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">9) Bagaimanakah pihak JobKartel membayar komisyen tersebut?
                        <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapse9">+</a>
                      </h4>
                    </div>
                    <div id="collapse9" class="panel-collapse collapse">
                      <div class="panel-body">
                        Pihak kami akan mengkreditkan jumlah komisyen anda terus ke dalam akaun bank anda. Jadi,
                        pastikan anda meletakkan maklumat berkaitan akaun bank anda dengan tepat di dalam bahagian profile akaun affiliate anda.
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">10) Akaun bank apakah yang pihak JobKartel sokong?
                        <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapse10">+</a>
                      </h4>
                    </div>
                    <div id="collapse10" class="panel-collapse collapse">
                      <div class="panel-body">
                        Buat masa ini, pihak kami amat menyokong RHB Bank sebagai medium bayaran komisyen kepada affiliate.
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">11) Bagaimana jika saya tiada akaun bank tersebut?
                        <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapse11">+</a>
                      </h4>
                    </div>
                    <div id="collapse11" class="panel-collapse collapse">
                      <div class="panel-body">
                        Anda boleh gunakan bank-bank lain, namun, bayaran tersebut mungkin akan sedikit lewat (1-3 hari)
                        selepas kami membuat transsaksi, serta caj transaksi sebanyak RM1.00 akan ditolak dari komisyen anda.
                    </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">12) Adakah saya perlu request "payout payment"?
                        <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapse12">+</a>
                      </h4>
                    </div>
                    <div id="collapse12" class="panel-collapse collapse">
                      <div class="panel-body">
                      Tidak perlu, bayaran komisyen akan dibayar secara automatik kepada anda setiap bulan
                      (selewat-lewatnya pada setiap 5hb), tidak kira berapa pun komisyen tekumpul yang ada di dalam akaun anda.
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid" id="pgs6">
        <div class="row">
          <div class="col-xs-12 col-md-12">
            <center>
              <h1 style="font-weight:bold">Interview Mastery Kit</h1>
            </center>
            <div class="row">
              <div class="col-xs-12 col-md-6 col-md-offset-3">
                <br>
                <br>
                <center>
                  <button class="btn btn-danger btn-lg " type="button" name="button" style=" color:#F8CC0E">DAPATKAN SEKARANG >></button>
                </center>
              </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                  <center>
                    <img src="../../../images/salespage/bok.png" class="img-responsive" alt="bok" style="height:300px; width:600px">
                  </center>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid" id="pgs7">
        <div class="row" style="margin-top:20px">
          <div class="col-xs-6 col-md-6">
            <img src="../../../images/salespage/jbkartel.png" class="img-responsive" alt="jbkartel" style="height:30px; width:200px">
          </div>
          <div class="col-xs-6 col-md-6">
            <p style="text-align:right; margin-bottom:0px">Copyright	&copy; JobKartel.All rights reserved.</p>
            <p style="text-align:right">Terms Of Service — Privacy Policy </p>
          </div>
        </div>
      </div>

    </div>

</template>

<script>
import axios from 'axios';

export default {
  data: function(){
    return {
      kupon: '',
      fill: false,
      message: '',
      form : {
        harga: 38000
      }
    }
  },
  methods: {
    coupon: function(){
      if(this.kupon === 'JK280'){
        this.fill = true
        this.message = ''
      }else if(this.kupon === 'jk280'){
        this.fill = true
        this.message = ''
      }else{
        this.fill = false
        this.message = "Koupun Yang Anda Masukkan Salah"
      }
    },
  },
  computed: {
    url: function(){
      if (this.kupon === 'JK280') {
        return '/payment/bill/JK280'
      }else{
        return '/payment/bill/default'
      }
    }
  }
}
</script>

<style lang="css">
p{
  font-family: 'Lato', sans-serif;
}
body{
  position: relative;
}
#pgs1{
  color: #000000;
  padding-top: 28px;
  padding-bottom: 28px;
  background-color: #F8CC0E;
}
#pgs2{
  padding-top: 30px;
  padding-bottom: 50px;
  color: #000000;
  background-color: #FFFFFF;
}
#pgs3{
  padding-bottom: 30px;
  color: #000000;
  background-color: #F8CC0E;
}
#pgs4{
  padding-bottom: 60px;
  color: #000000;
  background-color: #FFFFFF;
}
#pgs5{
  padding-bottom: 60px;
  color: #000000;
  background-color: #FFFFFF;
}
#pgs6{
  padding-bottom: 60px;
  color: #000000;
  background-color: #F8CC0E;
  /*#e5bf22*/
  /*#d4b019*/
  /*#e6bc07*/
}
#pgs7{
  padding-bottom: 60px;
  color: #F8CC0E;
  background-color: #000000;
}
.btn-danger{
  background-color: #CC0000;
}
.kotakmerah{
     width: 60%;
     border-radius: 5px;
     position: relative;
     border: 2px solid #CC0000;
     background-color: #CC0000;
   }
.kotak{
    width: 40%;
    border-radius: 5px;
    position: relative;
    border: 2px solid #F8CC0E;
    background-color: #F8CC0E;
  }
.kotak1{
  width: 100%;
  border-radius: 5px;
  position: relative;
  border: 2px solid #F8CC0E;
  background-color: #FFFFFF;
}
.kotak2{
  width: 60%;
  border-radius: 5px;
  position: relative;
  border: 2px solid black;
  background-color: #FFFFFF;
}
.kotaktest{
  width: 100%;
  border-radius: 5px;
  position: relative;
  border: 2px solid black;
  background-color: #FFFFFF;
}
.btn-warning{
  background-color: #F8CC0E;
}
.btn-round{
  /*border-radius: 30px;*/
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;

}
.input-round{
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
}
.carousel-indicators .active{
  background-color: #F8CC0E;
  max-height: 460px;
}
.carousel-inner iframe, video, img{
  width: 100%;
  max-height: -300px;
}
.carousel-control{
  width: 0;
}
.carousel-control.left span{
  padding: 15px;
}
.carousel-control.right span{
  padding: 15px;
}
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right,
.carousel-control .icon-prev,
.carousel-control .icon-next{
  position: absolute;
  top: 45%;
  display: inline-block;
  color: black;
}
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s
}
.fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
  opacity: 0
}
</style>
