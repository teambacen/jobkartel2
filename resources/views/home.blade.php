@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
      @if(!isset(Auth::user()->detail))
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                      <detail></detail>
                </div>
            </div>
        </div>
        @else
          <div class="col-md-2 menu-margin">
            <div class="menu-tepi">
              <a href="#"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></a><br>
              <a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i></a><br>
              <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a><br>
              <a href="#"><i class="fa fa-sliders" aria-hidden="true"></i></a><br>
              <a href="#"><i class="fa fa-flag" aria-hidden="true"></i></a><br>
              <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a><br>
              <a href="#"><i class="fa fa-sticky-note" aria-hidden="true"></i></a><br>
              <a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a><br>
              <a href="#"><i class="fa fa-cog" aria-hidden="true"></i></a><br>
              <a href="{{ action('AffiliateController@index') }}" class="affiliate_popup">Affiliate</a>
            </div>
          </div>
          <div class="col-md-10">
            <h1 class="tajuk text-center">Pilih Template Resume Anda</h1>
            <div class="row">
              <div class="col-md-3 col-md-offset-1 template-box">
                <img src="{{ asset('/image/resume-21.jpg') }}" class="center-block" height="400px" alt="">
                <div class="text">
                  <a href="{{ action('ResumeController@generate', ['resume' => 'default']) }}" class="button-hover">Select</a><br>
                  <a href="#" class="button-hover">Preview</a>
                </div>
              </div>
              <div class="col-md-3 template-box">
                <img src="{{ asset('/image/resume-02.jpg') }}" height="400px"   alt="">
                <div class="text">
                  @if(count(Auth::user()->subscription) == 0)
                   <h3>Premium</h3>
                  @else
                    <a href="#" class="button-hover">Select</a><br>
                    <a href="#" class="button-hover">Preview</a>
                  @endif

                </div>
              </div>
              <div class="col-md-3 template-box">
                <img src="{{ asset('/image/resume-03.jpg') }}" height="400px"   alt="">
                <div class="text">
                  @if(count(Auth::user()->subscription) == 0)
                   <h3>Premium</h3>
                  @else
                    <a href="#" class="button-hover">Select</a><br>
                    <a href="#" class="button-hover">Preview</a>
                  @endif
                </div>
              </div>
              <div class="col-md-3 col-md-offset-1 template-box">
                <img src="{{ asset('/image/resume-04.jpg') }}" height="400px"   alt="">
                <div class="text">
                  @if(count(Auth::user()->subscription) == 0)
                   <h3>Premium</h3>
                  @else
                    <a href="#" class="button-hover">Select</a><br>
                    <a href="#" class="button-hover">Preview</a>
                  @endif
                </div>
              </div>
              <div class="col-md-3 template-box">
                <img src="{{ asset('/image/resume-05.jpg') }}" height="400px"  alt="">
                <div class="text">
                  @if(count(Auth::user()->subscription) == 0)
                   <h3>Premium</h3>
                  @else
                    <a href="#" class="button-hover">Select</a><br>
                    <a href="#" class="button-hover">Preview</a>
                  @endif
                </div>
              </div>
              <div class="col-md-3 template-box">
                <img src="{{ asset('/image/resume-06.jpg') }}" height="400px"   alt="">
                <div class="text">
                  @if(count(Auth::user()->subscription) == 0)
                   <h3>Premium</h3>
                  @else
                    <a href="#" class="button-hover">Select</a><br>
                    <a href="#" class="button-hover">Preview</a>
                  @endif
                </div>
              </div>
              <div class="col-md-3 col-md-offset-1 template-box">
                <img src="{{ asset('/image/resume-07.jpg') }}" height="400px" alt="">
                <div class="text">
                  @if(count(Auth::user()->subscription) == 0)
                   <h3>Premium</h3>
                  @else
                    <a href="#" class="button-hover">Select</a><br>
                    <a href="#" class="button-hover">Preview</a>
                  @endif
                </div>
              </div>
              <div class="col-md-3 template-box">
                <img src="{{ asset('/image/resume-08.jpg') }}" height="400px"   alt="">
                <div class="text">
                  @if(count(Auth::user()->subscription) == 0)
                   <h3>Premium</h3>
                  @else
                    <a href="#" class="button-hover">Select</a><br>
                    <a href="#" class="button-hover">Preview</a>
                  @endif
                </div>
              </div>
              <div class="col-md-3 template-box">
                <img src="{{ asset('/image/resume-09.jpg') }}" height="400px"   alt="">
                <div class="text">
                  @if(count(Auth::user()->subscription) == 0)
                   <h3>Premium</h3>
                  @else
                    <a href="#" class="button-hover">Select</a><br>
                    <a href="#" class="button-hover">Preview</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        @endif
    </div>
</div>
@endsection
