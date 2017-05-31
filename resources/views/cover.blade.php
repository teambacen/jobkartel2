@extends('layouts.app')
@section('content')

  <cover :data="{{ Auth::user()->subscription->toJson() }}" :detail="{{ $detail->toJson() }}"></cover>
@endsection
