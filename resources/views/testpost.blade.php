@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-12">
      {{  Form::open(['action' => 'ProfileController@award']) }}
        <div class="form-group">
          {{ Form::text('name', null , ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::text('month', null , ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::text('year', null , ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
          {{ Form::text('description', null , ['class' => 'form-control']) }}
        </div>
        {{ Form::submit('submit') }}
      {{ Form::close() }}
    </div>
  </div>
@endsection
