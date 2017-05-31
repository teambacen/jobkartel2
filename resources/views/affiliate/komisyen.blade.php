@extends('affiliate.app')
@section('content')
  <div class="col-md-10">
    <div class="col-md-12 utama">
      <h4>Rekod Komisyen</h4>
    </div>
    <div class="col-md-10 affiliate-top">
      <br>
      @if(count(Auth::user()->affiliate->affiliateStat) === 0)
        <h1>Anda Masih Tiada Sebarang Komisyen</h1>
      @else
      <table class="table table-bordered">
          <thead>
              <tr>
                  <th>Bil.</th>
                  <th>Tarikh</th>
                  <th>Jumlah Jualan</th>
                  <th>Jumlah Pembayaran</th>
                  <th>Status</th>
              </tr>
          </thead>
          <tbody>

               @foreach(Auth::user()->affiliate->affiliateStat as $komisyen)
                <tr>
                  <td>{{ $komisyen->id }}</td>
                  <td>{{ $komisyen->created_at->format('d.m.Y') }}</td>
                  <td>{{ substr_replace($komisyen->payment->amount, '.', -2,0) }}</td>
                  <td>{{ substr_replace($komisyen->paid,'.', -2,0) }}</td>
                  <td>
                    @if($komisyen->status == 'unpaid')
                      <span class="label label-danger">Unpaid</span>
                    @else
                      <span class="label label-success">Paid</span>
                    @endif
                  </td>
                </tr>
               @endforeach
          </tbody>
      </table>
      @endif

    </div>

  </div>
@endsection
