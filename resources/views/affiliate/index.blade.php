@extends('affiliate.app')
@section('content')
<div class="col-md-10">
    <div class="col-md-12 utama">
        <h4>UTAMA</h4>
    </div>
    @include('flash::message')
    <div class="col-md-3 affiliate-statistik">
        <h4>KLIK</h4>
        @if(!empty(Auth::user()->affiliate->click->click))
            <h3>{{ Auth::user()->affiliate->click->click }}</h3>
        @else
            <h3>0</h3>
        @endif

      <!--  <div class="col-sm-10">
            <p>Minggu Ini</p>
            <p>Bulan Ini</p>
            <p>Keseluruhan</p>
        </div>
        <div class="col-sm-2">
            <p>0</p>
            <p>0</p>
            <p>0</p>
        </div> -->
    </div>
    <div class="col-md-3 affiliate-statistik">
        <h4>JUALAN</h4>
        <h3>{{ count(Auth::user()->affiliate->affiliateStat) }}</h3>
    <!--     <div class="col-sm-10">
            <p>Minggu Ini</p>
            <p>Bulan Ini</p>
            <p>Keseluruhan</p>
        </div>
        <div class="col-sm-2">
            <p>0</p>
            <p>0</p>
            <p>0</p>
        </div> -->
    </div>
    <div class="col-md-3 affiliate-statistik">
        <h4>KOMISYEN</h4>
        <h3>RM {{  substr_replace($affiliate, '.',-2,0) }}</h3>
      <!--   <div class="col-sm-10">
            <p>Minggu Ini</p>
            <p>Bulan Ini</p>
            <p>Keseluruhan</p>
        </div>
        <div class="col-sm-2">
            <p>0</p>
            <p>0</p>
            <p>0</p>
        </div> -->
    </div>
    <div class="row">
        <div class="col-md-10 refferal">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">Guna Referral Link Ini</div>
                    <input id="reff" type="text" class="form-control" value="{{ action('AffiliateController@referral', ['username' => Auth::user()->affiliate->username ]) }}" readonly>
                    <div class="input-group-addon"><button type="button" class="bt" data-clipboard-target="#reff">Copy</button></div>
                </div>
            </div>

        </div>
        <div class="col-md-2" style="margin-left:20px;">
          <table >
            <tr>
              <td class="col-md-12">Komisyen</td>
              <td>50%</td>
            </tr>
            <tr>
              <td class="col-md-12">Pembayaran Komisyen &nbsp;</td>
              <td>RM50</td>
            </tr>
          </table>
        </div>
        <div class="col-md-10" style="margin-left:20px;">
          <h3>Top 10 Ejen Affiliate:</h3>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Jumlah Klik</th>
              </tr>
            </thead>
            <tbody>
              @foreach($clicks as $klik)
                <tr>
                  <td>{{ $klik->affiliate_id }}</td>
                  <td>{{ $klik->affiliate->username }}</td>
                  <th>{{ $klik->click }}</th>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
<script type="text/javascript">
  alert('Untuk Makluman, Pelancaran Pakej Interview Master Kit ini akan ditangguhkan buat sementara waktu. Sila rujuk FB group untuk ketahui lebih lanjut');
</script>
</div>
@endsection
