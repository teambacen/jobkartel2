@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="col-md-12 white-box">
      <h1 class="tajuk">Settings</h1>
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
        <li role="presentation"><a href="#subscription" aria-controls="subscription" role="tab" data-toggle="tab">Subscription</a></li>
        <li role="presentation"><a href="#affiliates" aria-controls="subscription" role="tab" data-toggle="tab">Affiliate</a></li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="general">
          @include('setting.general')
        </div>
        <div role="tabpanel" class="tab-pane fade" id="subscription">
          @include('setting.subscription')
        </div>
        <div role="tabpanel" class="tab-pane fade" id="affiliates">
          @include('setting.affiliate')
        </div>
      </div>
    </div>
  </div>
@endsection
