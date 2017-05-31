<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/c9180cc47c.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <title>{{$title}}</title>
        <style media="screen">
            p{
                font-family: 'Roboto', serif;
                color: #3F3F3F;
            }
            .trapezium{
                /*-webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;*/
                box-sizing: content-box;
                width: 140px;
                height: 0;
                border: 40px solid rgba(0,0,0,0);
                border-top: 50px solid {{ $color }};
                /*font: normal 100%/normal Arial, Helvetica, sans-serif;*/
                border-bottom: 0 solid;
                margin-top: -21px;
                /*color: rgba(0,0,0,1);
                -o-text-overflow: clip;
                text-overflow: clip;*/
            }
            .trapezium1{
                box-sizing: content-box;
                width: 55px;
                height: 0;
                border: 25px solid rgba(0,0,0,0);
                border-top: 20px solid {{ $color }};
                border-bottom: 0 solid;
                margin-top: -21px;
            }
            .trapezium2{
                box-sizing: content-box;
                width: 140px;
                height: 0;
                border: 40px solid rgba(0,0,0,0);
                border-top: 50px solid {{ $color }};
                border-bottom: 0 solid;
                margin-top: -21px;
            }
            .bulat{
                /*border: 1px solid black;*/
                border-radius: 100%;
                width: 21px;
                height: 21px;
                margin-top: 2px;
                margin-left: 2px;
            }
            .bulat1{
                /*border: 1px solid black;*/
                border-radius: 100%;
                width: 21px;
                height: 21px;
                margin-top: 2px;
                margin-left: 2px;
            }
            .bulat2{
                /*border: 1px solid black;*/
                border-radius: 100%;
                width: 21px;
                height: 21px;
                margin-top: 2px;
                margin-left: 2px;
            }
            .sklv1{
                margin-top: 4px;
                border-bottom: 4px solid #E5E5E5;
            }
            .sklv1:before{
                content: '';
                display: block;
                border-bottom: 4px solid #F4CF58;
                margin-bottom: -4px;
            }
        </style>
    </head>
    <body style="background: url({{$watermark}}); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <hr style="color:#F4CF58; background-color:{{ $color }}; height:2px; margin-left:-20px; margin-right:-20px;">
                        <center>
                            <div class="trapezium">
                                <div class="row">
                                    <p style="font-size:26px; font-weight:bold; margin-top:-49px; margin-bottom:5px;">{{ strtoupper(Auth::user()->detail->first) }} {{ strtoupper(Auth::user()->detail->last) }}</p>
                                    <p style="font-size:18px;">{{ strtoupper(Auth::user()->detail->position) }}</p>
                                </div>
                            </div>
                        </center>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-xs-5">
                            <p style="font-size:18px; font-weight:bold; text-align:right; margin-top:10px; margin-bottom:1px;">ABOUT ME</p>
                            <p style="font-size:13px; text-align:right;">
                                {{ Auth::user()->detail->description }}
                            </p>
                        </div>
                        <div class="col-xs-2">
                            @if(Auth::user()->avatars)
                            <img src="{{ $avatar }}" alt="avatar" height="90" width="90" style="margin-left:-27px; margin-top:10px;" class="img-circle">
                            @endif
                        </div>
                        <div class="col-xs-5">
                            <div class="row">
                                <div class="col-xs-1" style="margin-left:10px; margin-top:5px;">
                                    <div class="bulat">
                                        <img src="{{asset('images/address.png')}}" class="img-responsive">
                                        <!--<i class="fa fa-phone" aria-hidden="true" style="margin-left:4px"></i>-->
                                    </div>
                                </div>
                                <div class="col-xs-8" style="margin-top:10px">
                                    <p style="font-size:13px">{{ Auth::user()->detail->phone }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1" style="margin-left:10px; margin-top:5px;">
                                    <div class="bulat1">
                                        <img src="{{asset('images/phone.png')}}" class="img-responsive">
                                        <!--<i class="fa fa-paper-plane-o" aria-hidden="true" style="margin-left:2px"></i>-->
                                    </div>
                                </div>
                                <div class="col-xs-8" style="margin-top:10px">
                                    <p style="font-size:13px; margin-bottom:0px;">{{ Auth::user()->detail->address }},<br/>{{ Auth::user()->detail->country }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-1" style="margin-left:10px; margin-top:5px;">
                                    <div class="bulat2">
                                        <img src="{{asset('images/email.png')}}" class="img-responsive">
                                        <!--<i class="fa fa-envelope-o" aria-hidden="true" style="margin-left:2px"></i>-->
                                    </div>
                                </div>
                                <div class="col-xs-8" style="margin-top:10px">
                                    <p style="font-size:13px">{{ Auth::user()->detail->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <hr style="color:#F4CF58; background-color:{{ $color }}; height:2px; margin-left:-20px; margin-right:-20px;">
                        <div class="col-xs-12">
                            <center>
                                <div class="trapezium1">
                                    <div class="row">
                                        <p style="font-size:18px; font-weight:bold; margin-top:-18px;">EXPERIENCE</p>
                                    </div>
                                </div>
                            </center>
                            @if(!empty(Auth::user()->work))
                            @foreach(Auth::user()->work as $work)
                            <div class="row" style="margin-bottom: 5px;">
                                <div class="col-xs-4">
                                    <p style="font-size:13px; font-weight:bold; margin-top:0px; margin-bottom:0px; text-align:right">
                                        {{ $work->position }}
                                    </p>
                                    <p style="font-size:13px; text-align:right; margin-top:0px; margin-bottom:0px;">{{ strtoupper($work->start_month) }} {{ $work->start_year }} - {{ strtoupper($work->end_month) }} {{ $work->end_year }}</p>
                                </div>
                                <div class="col-xs-7">
                                    <div class="row">
                                        <p style="font-size:13px; margin-left:5px; margin-top:0px; margin-bottom:0px;">
                                            {{ $work->company }}
                                        </p>
                                        <p style="font-size:13px; margin-left:5px; margin-bottom:0px;">
                                            {{ $work->work_description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <hr style="color:#F4CF58; background-color:{{ $color }} height:2px; margin-left:-20px; margin-right:-20px;">
                        <div class="col-xs-12">
                            <center>
                                <div class="trapezium1">
                                    <div class="row">
                                        <p style="font-size:18px; font-weight:bold; margin-top:-18px;">EDUCATION</p>
                                    </div>
                                </div>
                            </center>
                            @if(!empty(Auth::user()->education))
                            @foreach(Auth::user()->education as $edu)
                            <div class="row" style="margin-bottom: 5px;">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <p style="font-size:13px; font-weight:bold; margin-top:0px; margin-bottom:0px; text-align:right">
                                            {{ strtoupper($edu->grade) }}
                                        </p>
                                        <p style="font-size:13px; text-align:right; margin-top:0px; margin-bottom:0px;">{{ strtoupper($edu->start_month) }} {{ $edu->start_year }} - {{ strtoupper($edu->graduate_month) }} {{ $edu->graduate_year }}</p>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="row">
                                            <p style="font-size:13px; margin-left:5px; margin-top:0px; margin-bottom:0px;">
                                                {{ $edu->institute }}
                                            </p>
                                            <p style="font-size:13px; margin-left:5px; margin-bottom:0px;">
                                                {{ $edu->qualification }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row">
                        <hr style="color:#F4CF58; background-color:{{ $color }}; height:2px; margin-left:-20px; margin-right:-20px;">
                        <div class="row">
                            <div class="col-xs-6">
                                <center>
                                    <div class="trapezium1">
                                        <div class="row">
                                            <p style="font-size:18px; font-weight:bold; margin-top:-18px;">SKILLS</p>
                                        </div>
                                    </div>
                                </center>
                                <div class="row" style="margin-top:10px">
                                    <div class="col-xs-12">
                                        @if(!empty(Auth::user()->skill))
                                        @foreach(Auth::user()->skill as $skill)
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="row" style="margin-left:5px;">
                                                    <p style="font-size:13px; margin-bottom:0px;">{{ $skill->skil }}</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-5">
                                                <div class="row">
                                                    <div class="sklv1" style="margin-bottom:0px; max-width: {{ ($skill->level * 2) * 10 }}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <center>
                                    <div class="trapezium1">
                                        <div class="row">
                                            <p style="font-size:18px; font-weight:bold; margin-top:-18px;">ACHIEVEMENTS</p>
                                        </div>
                                    </div>
                                </center>
                                <div class="row" style="margin-top:10px">
                                    <div class="col-xs-12">
                                        @if(!empty(Auth::user()->award))
                                        @foreach(Auth::user()->award as $award)
                                        <div class="row" style="margin-top:5px">
                                            <div class="col-xs-4">
                                                <p style="font-size:13px; text-align:right; margin-top:0px">{{ $award->year }}</p>
                                            </div>
                                            <div class="col-xs-7">
                                                <div class="row">
                                                    <p style="font-size:13px; margin-left:5px; font-weight:bold; margin-bottom:0px; margin-top:0px">
                                                        {{ $award->name }}
                                                    </p>
                                                    <p style="font-size:13px; margin-left:5px; margin-bottom:0px;">
                                                        {{ $award->description }}
                                                    </p>
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
            </div>
        </div>
    </body>
</html>
