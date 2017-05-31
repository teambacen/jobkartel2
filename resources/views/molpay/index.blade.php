@extends('layouts.app')
@section('content')
  <div class="container">
      {{ Form::open(['url' => 'http://www.onlinepayment.com.my/MOLPay/pay/tamsidea_Dev', 'method' => 'GET']) }}
        <div class="form-group">
          {{ Form::text('amount', '1.50', ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::text('orderid', '1021', ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::text('bill_name', 'Ridwan', ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::text('bill_email', 'ridwanramly04@gmail.com', ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::text('bill_mobile', '01111234572', ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::text('bill_desc', 'Test Payment', ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::text('country', 'MY', ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::text('vcode', $vcode, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::text('returnurl', '') }}
        </div>
        {{  Form::submit('Pay Now', ['class' => 'btn btn-jobkartel']) }}
      {{ Form::close() }}
  </div>
@endsection
