<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>{{$title}}</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12" style="margin-top:20px; ">
                    <div class="row" style="background-color:{{ $color }}; padding-top:10px; padding-bottom:10px;">
                        <div class="col-xs-3">
                            @if(Auth::user()->avatars)
                            <img src="{{ $avatar }}" class="img-responsive" height="170px" alt="">
                            @endif
                        </div>
                        <div class="col-xs-9">
                            <div class="row" style="margin-left:5px; margin-top:10px">
                                <strong><p style="font-size:18px; margin-bottom:0px; font-weigth: bold;">{{ Auth::user()->detail->first }} {{ Auth::user()->detail->last }}</p></strong>
                                <p style="font-size:18px; margin-bottom:5px">{{ Auth::user()->detail->position }}</p>
                                <strong><p style="font-size:18px; margin-bottom:0px">Address</p></strong>
                                <p style="font-size:18px; margin-bottom:5px">{{ Auth::user()->detail->address }} {{ Auth::user()->detail->country }}</p>
                                <strong><p style="font-size:18px; margin-bottom:0px">Phone</p></strong>
                                <p style="font-size:18px">{{ Auth::user()->detail->phone }}</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row" style="margin-top:-10px">
                        <div class="col-xs-12">
                            <div class="row" style="  margin-right:10px;">
                                <div class="col-xs-12">
                                    <strong><p style="font-size:18px; margin-bottom:0px">Career Summary</p></strong>
                                </div>
                                <div class="col-xs-12">
                                    <p style="font-size:18px">
                                        {{ Auth::user()->detail->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row" style="margin-top:-10px">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-12">
                                    <strong><p style="font-size:18px; margin-top:3px"><i class="fa fa-briefcase" aria-hidden="true"></i> Experience</p></strong>
                                </div>
                                @if(!empty(Auth::user()->work))
                                @foreach(Auth::user()->work as $work)
                                <div class="row">
                                    <div class="col-xs-3" style="margin-left:15px;">
                                        <!--  <div class="row" style="margin-left:0px"> -->
                                        <p style="font-size:18px">{{ $work->start_year }} - {{ $work->end_year }}</p>
                                        <!--  </div> -->
                                    </div>
                                    <div class="col-xs-8" style="margin-top:0px">
                                        <strong><p style="font-size:18px; margin-bottom:0px">{{ $work->position }}</p></strong>
                                        <strong><p style="font-size:18px; margin-bottom:1px">{{ $work->company }}  | {{ $work->city }}, {{ $work->state }}</p></strong>
                                        <p style="font-size:15px">
                                            {{ $work->work_description }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            <hr>
                            <div class="row" style="margin-top:-10px">
                                <div class="col-xs-12">
                                    <strong><p style="font-size:18px; margin-top:3px"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Education</p></strong>
                                </div>
                                @if(!empty(Auth::user()->education))
                                @foreach(Auth::user()->education as $edu)
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="row" style="margin-left:0px">
                                            <p style="font-size:18px">{{ $edu->start_year }} - {{ $edu->graduate_year }}</p>
                                            <!-- <p style="font-size:8px">2014</p>
                                            <p style="font-size:8px; margin-top:20px">2017</p> -->
                                        </div>
                                    </div>
                                    <div class="col-xs-8" style="margin-top:0px">
                                        <strong><p style="font-size:18px; margin-bottom:0px">{{ $edu->institute }}</p></strong>
                                        <p style="font-size:18px">{{ $edu->qualification }}</p>
                                        <!-- <p style="font-size:8px; margin-bottom:0px;">Politeknik Sultan Mizan Zainal Abidin</p>
                                        <p style="font-size:8px">Diploma in Programming | CGPA: 3.9</p> -->
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            <hr>
                            <div class="row" style="margin-top:-10px">
                                <div class="col-xs-12">
                                    <strong><p style="font-size:18px; margin-top:3px"><i class="fa fa-sliders" aria-hidden="true"></i> Skills</p></strong>
                                </div>
                            </div>
                            @if(!empty(Auth::user()->skill))
                            @foreach(Auth::user()->skill as $skill)
                            <div class="row">
                                <div class="col-xs-5 col-xs-offset-1">
                                    <div class="row" style="margin-left:2px">
                                        <div class="col-xs-6">
                                            <div class="row">
                                                <p style="font-size:18px; margin-bottom:0px">{{ $skill->skil }}</p>
                                                <!-- <p style="font-size:8px">Adobe Illustrator</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
