@extends('affiliate.app')
@section('content')
  <div class="col-md-10">
    <div class="col-md-12 utama">
      <h4>Senarai Jualan</h4>
    </div>
      <div class="col-md-10 affiliate-top">
        <br>
        @if(count(Auth::user()->affiliate->affiliateStat) === 0)
            <h1>Maaf , Belum ada rekod jualan lagi</h1>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Bil.</th>
                        <th>Pelanggan</th>
                        <th>Jualan(RM)</th>
                        <th>Komsiyen(RM)</th>
                        <th>Tarikh Masa</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Auth::user()->affiliate->affiliateStat as $jualan)
                      <tr>
                        <td>{{ $jualan->id }}</td>
                        <td>{{ $jualan->payment->user->name }}</td>
                        <td>{{ substr_replace($jualan->payment->amount,'.',-2,0) }}</td>
                        <td>{{ substr_replace($jualan->paid,'.',-2,0) }}</td>
                        <td>{{ $jualan->created_at }}</td>
                        <td>
                          @if($jualan->payment->status == 0)
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
