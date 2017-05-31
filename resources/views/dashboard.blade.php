@extends('layouts.app')
@section('content')
  <dash :data="{{ Auth::user()->subscription->toJson() }}" :detail="{{ $detail->toJson() }}" :auth="{{ Auth::user()->toJson() }}"></dash>
@endsection
