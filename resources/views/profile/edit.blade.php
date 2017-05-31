@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="row">
      @include('profile.sidebar')
      <div class="col-md-8 bg-white">
        <edit-detail></edit-detail>
      </div>
    </div>
  </div>
@endsection
