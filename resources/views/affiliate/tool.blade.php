@extends('affiliate.app')
@section('content')
  <div class="col-md-10">
      <div class="col-md-12 utama">
        <h4>Marketing Tools</h4>
      </div>
      <div class="col-md-10 tools">
        <br><br>
        <div>

              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Banner</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Artikel Blog</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Artikel Review</a></li>
                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Facebook Ads</a></li>
                <li role="presentation"><a href="#setting" aria-controls="setting" role="tab" data-toggle="tab">E-Cover</a></li>
                <li role="presentation"><a href="#settin" aria-controls="settin" role="tab" data-toggle="tab">Email Marketing</a></li>
                <li role="presentation"><a href="#testimoni" aria-controls="testimoni" role="tab" data-toggle="tab">Testimoni</a></li>
                <li role="presentation"><a href="#sett" aria-controls="sett" role="tab" data-toggle="tab">Video</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                  <br>
                  <h4>Untuk Memuat Turun Gambar Klik Kanan Pada Tetikus Dan Klik Di "Save Image As" </h4>
                  <div class="row">
                    <div class="col-md-4">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Facebook</th>
                            <th>Image</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1081 x 1921</td>
                            <td><img src="{{ asset('image/tool/facebook_1.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>1081 x 1921</td>
                            <td><img src="{{ asset('image/tool/facebook-2.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>1081 x 1921</td>
                            <td><img src="{{ asset('image/tool/facebook-3.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>1201 × 629</td>
                            <td><img src="{{ asset('image/tool/facebook-4.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>601 × 601</td>
                            <td><img src="{{ asset('image/tool/facebook-5.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>852 × 316</td>
                            <td><img src="{{ asset('image/tool/facebook-6.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>1441 × 831</td>
                            <td><img src="{{ asset('image/tool/facebook-7.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>1201 × 629</td>
                            <td><img src="{{ asset('image/tool/facebook-8.png') }}" width="50px" alt=""></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-4">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Google</th>
                            <th>Image</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>300 × 600</td>
                            <td><img src="{{ asset('image/tool/google-1.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>301 × 251</td>
                            <td><img src="{{ asset('image/tool/google-2.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>301 × 1051</td>
                            <td><img src="{{ asset('image/tool/google-3.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>301 × 1051</td>
                            <td><img src="{{ asset('image/tool/google-4.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>337 × 281</td>
                            <td><img src="{{ asset('image/tool/google-5.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>971 × 251</td>
                            <td><img src="{{ asset('image/tool/google-6.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>971 × 251</td>
                            <td><img src="{{ asset('image/tool/google-7.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>121 × 601</td>
                            <td><img src="{{ asset('image/tool/google-8.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>161 × 601</td>
                            <td><img src="{{ asset('image/tool/google-9.png') }}" width="50px" alt=""></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-4">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Twitter</th>
                            <th>Image</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>800 × 320</td>
                            <td><img src="{{ asset('image/tool/twitter-1.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>801 × 201</td>
                            <td><img src="{{ asset('image/tool/twitter-2.png') }}" width="50px" alt=""></td>
                          </tr>
                          <tr>
                            <td>3333 × 1333</td>
                            <td><img src="{{ asset('image/tool/twitter-01.jpg') }}" width="50px" alt=""></td>
                          </tr>

                        </tbody>
                      </table>
                    </div>

                  </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                  <br>
                  <div class="col-md-6">
                    <table class="table table-bodered">
                      <thead>
                        <tr>
                          <th>Item</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#1 Kenali Punca Masalah</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 1]) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>#2 Dokumen Yang Lengkap</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 2]) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>#3 Pembuatan Winning Resume</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 3]) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>#4 Cara Membuat Cover Letter</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 4]) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>#5 Soalan Lazim Temuduga</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 5]) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>#6 Kepentingan Membina Keyakinan Diri</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 6]) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>#7 Pengalaman Temuduga Yang Sangat Memalukan!</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 7]) }}">Download</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                  <br>
                  <div class="col-md-6">
                    <table class="table table-bodered">
                      <thead>
                        <tr>
                          <th>Item</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#1 Amirah Ahmad</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'review_1']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>#2 Mohd Amirul</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'review_2']) }}">Download</a></td>
                        </tr>

                      </tbody>
                    </table>
                </div>
              </div>
                <div role="tabpanel" class="tab-pane" id="settings">
                  <br>
                  <div class="col-md-6">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Item</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Copywriting #1</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'cw1']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>Copywriting #2</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'cw2']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>Copywriting #3</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'cw3']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>Copywriting #4</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'cw4']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>Copywriting #5</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'cw5']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>Copywriting #6</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'cw6']) }}">Download</a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="setting">
                  <br>
                  <div class="row">
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/personalbrandingL.jpg') }}" height="400px" alt="">
                      <h4 class="text-center">Large</h4>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/personalbrandingM.jpg') }}" height="400px" alt="">
                      <h4 class="text-center">Medium</h4>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/personalbrandingS.jpg') }}"  height="400px" alt="">
                      <h4 class="text-center">Small</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/hiremeL.jpg') }}" height="400px" alt="">
                      <h4 class="text-center">Large</h4>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/hiremeM.jpg') }}" height="400px" alt="">
                      <h4 class="text-center">Medium</h4>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/hiremeS.jpg') }}"  height="400px" alt="">
                      <h4 class="text-center">Small</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/klikresume1L.jpg') }}" height="400px" alt="">
                      <h4 class="text-center">Large</h4>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/klikresume1M.jpg') }}" height="400px" alt="">
                      <h4 class="text-center">Medium</h4>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/klikresume1S.jpg') }}"  height="400px" alt="">
                      <h4 class="text-center">Small</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/hireme2L.jpg') }}" height="400px" alt="">
                      <h4 class="text-center">Large</h4>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/hireme2M.jpg') }}" height="400px" alt="">
                      <h4 class="text-center">Medium</h4>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/hireme2S.jpg') }}"  height="400px" alt="">
                      <h4 class="text-center">Small</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/klikresumeL.jpg') }}" height="400px" alt="">
                      <h4 class="text-center">Large</h4>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/klikresumeM.jpg') }}" height="400px" alt="">
                      <h4 class="text-center">Medium</h4>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/klikresumeS.jpg') }}"  height="400px" alt="">
                      <h4 class="text-center">Small</h4>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/personalbranding2L.jpg') }}" height="400px" alt="">
                      <h4 class="text-center">Large</h4>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/personalbranding2M.jpg') }}" height="400px" alt="">
                      <h4 class="text-center">Medium</h4>
                    </div>
                    <div class="col-md-4">
                      <img src="{{ asset('image/tool/sml/personalbranding2S.jpg') }}"  height="400px" alt="">
                      <h4 class="text-center">Small</h4>
                    </div>
                  </div>


                </div>
                <div role="tabpanel" class="tab-pane" id="settin">
                  <br>
                  <div class="col-md-6">
                    <br>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Item</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#1 72H Before Launching</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'email1']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>#2 42H Before Launching</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'email2']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>#3 24H Before Launching</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'email3']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>#4 Emel Launching</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'email4']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>#5 Reminding Emel</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'email5']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>#6 Testimoni Emel</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'email6']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>#7 Follow Up Emel</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'email7']) }}">Download</a></td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                </div>
                <div role="tabpanel" class="tab-pane" id="sett">
                  <br><h1>Akan Datang Secepatnya</h1>
                  <h1>Team JobKartel Sedang DiDalam Fasa Pembikinan Video</h1>
                </div>
                <div role="tabpanel" class="tab-pane" id="testimoni">
                  <h4>Untuk Memuat Turun Gambar Klik Kanan Pada Tetikus Dan Klik Di "Save Image As"</h4>
                  <div class="row">
                    <div class="col-md-6">
                      <img src="{{ asset('image/tool/Testimoni/TESTIMONI-01.png') }}" height="141px" width="620px" alt="">
                    </div>
                    <div class="col-md-6">
                      <img src="{{ asset('image/tool/Testimoni/TESTIMONI-02.png') }}" height="141px" width="620px" alt="">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <img src="{{ asset('image/tool/Testimoni/TESTIMONI-03.png') }}" height="141px" width="620px" alt="">
                    </div>
                    <div class="col-md-6">
                      <img src="{{ asset('image/tool/Testimoni/TESTIMONI-04.png') }}" height="141px" width="620px" alt="">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <img src="{{ asset('image/tool/Testimoni/TESTIMONI-05.png') }}" height="141px" width="620px" alt="">
                    </div>
                    <div class="col-md-6">
                      <img src="{{ asset('image/tool/Testimoni/TESTIMONI-06.png') }}" height="141px" width="620px" alt="">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <img src="{{ asset('image/tool/Testimoni/TESTIMONI-07.png') }}" height="141px" width="620px" alt="">
                    </div>
                    <div class="col-md-6">
                      <img src="{{ asset('image/tool/Testimoni/TESTIMONI-08.png') }}" height="141px" width="620px" alt="">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <img src="{{ asset('image/tool/Testimoni/TESTIMONI-09.png') }}" height="141px" width="620px" alt="">
                    </div>
                    <div class="col-md-6">
                      <img src="{{ asset('image/tool/Testimoni/TESTIMONI-10.png') }}" height="141px" width="620px" alt="">
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="set">
                  <br>
                  <div class="col-md-6">
                    <table class="table table-bodered">
                      <thead>
                        <tr>
                          <th>Item</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>15 Soalan Killer</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'killer']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>Perkara HR</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'hr']) }}">Download</a></td>
                        </tr>
                        <tr>
                          <td>Tips Interview</td>
                          <td><a href="{{ action('AffiliateController@download_tool', ['file' => 'interview']) }}">Download</a></td>
                        </tr>

                      </tbody>
                    </table>
                </div>
                </div>
              </div>

        </div>
      </div>
  </div>
@endsection
