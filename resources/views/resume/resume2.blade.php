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
            }
            .bgColor{
                background-color: {{ $color }};
                background-size: cover;
                padding-bottom: 30px;
                margin-right: 0px;
            }
            .box1{
                /*width: 190px;*/
                height: 38px;
                /*margin-top: 102px;*/
                background-color: {{ $color }};
                background: rgba(244, 207, 88, 0.7);
            }
            .ratio{
                margin-top: 4px;
                border-bottom: 2px solid #E5E5E5;
            }
            .ratio:before{
                content: '';
                display: block;
                border-bottom: 2px solid #F4CF58;
                margin-bottom: -2px;
            }
            .icon-success {
                color: #F4CF58;
            }
        </style>
    </head>
    <body style="background: ; background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-4" style="padding-left:0px">
                            <div class="">
                                <div class="" style="background-size: cover; width: 100%;">
                                    @if(Auth::user()->avatars)
                                    <img src="{{ $avatar }}" alt="avatar"  width="100%" style="margin-left:0px; margin-top: 0px;" class="img-responsive">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7" style="padding-left:0px">
                                <div class="row" >
                                    <div class="box1">
                                       <p style="font-size:26px; font-weight:bold; margin-left:15px; margin-bottom:0px;">{{ strtoupper(Auth::user()->detail->first) }} {{ strtoupper(Auth::user()->detail->last) }}</p>
                                        <p style="font-size:18px; margin-left:15px; margin-top:10px; margin-bottom:10px; ">{{ strtoupper(Auth::user()->detail->position) }}</p>
                                    </div>
                                </div>
                                <br>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-xs-3">
                                        <p style="font-size:18px; font-weight:bold;">PROFILE</p>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="row">
                                            <hr style="margin-top:5px; margin-bottom:17px; background-color:black; height:0px;">
                                        </div>
                                    </div>
                                </div>
                                <p style="text-align:justify; font-size:15px;">
                                    {{ Auth::user()->detail->description }}
                                </p>
                                <div class="row" style="margin-top: 15px;">
                                    <div class="col-xs-12">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <img src="{{asset('images/address.png')}}" class="img-responsive">
                                                <!--<div class="fa fa-paper-plane-o icon-success" aria-hidden="true" style="margin-left:38px"></div>-->
                                            </div>
                                            <div class="col-xs-8">
                                                <p style="font-size:13px; margin-left: -25px;">{{ Auth::user()->detail->address }}, {{ Auth::user()->detail->country }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="row">
                                            <div class="col-xs-2">
                                                <img src="{{asset('images/phone.png')}}" class="img-responsive">
                                                <!--<div class="fa fa-phone icon-success" aria-hidden="true" style="margin-left:38px"></div>-->
                                            </div>
                                            <div class="col-xs-2">
                                                <p style="font-size:13px; margin-left: -25px; padding-top:5px; margin-top:2px;">{{ Auth::user()->detail->phone }}</p>
                                            </div>
                                            <!-- <div class="row"> -->
                                            <div class="col-xs-2">
                                                <img src="{{asset('images/email.png')}}" class="img-responsive">
                                                <!--<div class="fa fa-envelope-o icon-success" aria-hidden="true" style="margin-right:2px"></div>-->
                                            </div>
                                            <div class="col-xs-2">
                                                <p style="font-size:13px; margin-left: -25px; margin-top:2px;">{{ Auth::user()->detail->email }}</p>
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-4" style="padding-left:0px">
                            <p style="font-size:18px; font-weight:bold; text-align:right">EXPERIENCE</p>
                        </div>
                        <div class="col-xs-8" style="padding-left:0px">
                            <hr style="margin-top:5px; color:black; background-color:black; height:0px;">
                        </div>
                    </div>
                    @if(!empty(Auth::user()->work))
                    @foreach(Auth::user()->work as $work)
                    <div class="row">
                        <div class="col-xs-4" style="padding-left:0px">
                            <p style="font-size:15px; font-weight:bold; color:#F4CF58; margin-bottom:0px; text-align:right">{{ strtoupper($work->position) }}</p>
                            <p style="font-size:13px; text-align:right">{{ strtoupper($work->start_month) }} {{ $work->start_year }} - {{ strtoupper($work->end_month) }} {{ $work->end_year }}</p>
                        </div>
                        <div class="col-xs-8" style="padding-left:0px">
                            <p style="font-size:15px; font-weight:bold; margin-bottom:1px;">{{ $work->company }}</p>
                            <p style="font-size:13px; margin-bottom:10px; text-align:justify;">
                                {{ $work->work_description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-4" style="padding-left:0px">
                            <p style="font-size:18px; font-weight:bold; text-align:right">EDUCATION</p>
                        </div>
                        <div class="col-xs-8" style="padding-left:0px">
                            <hr style="margin-top:5px; color:black; background-color:black; height:0px;">
                        </div>
                    </div>
                    @if(!empty(Auth::user()->education))
                    @foreach(Auth::user()->education as $edu)
                    <div class="row">
                        <div class="col-xs-4">
                            <!--<p style="font-size:13px; font-weight:bold; color:#F4CF58; margin-bottom:0px; text-align:right">{{ strtoupper($edu->grade) }}</p>-->
                            <p style="font-size:13px; text-align:right">{{ strtoupper($edu->start_month) }} {{ $edu->start_year }} - {{ strtoupper($edu->graduate_month) }} {{ $edu->graduate_year }}</p>
                        </div>
                        <div class="col-xs-8" style="padding-left:0px">
                            <p style="font-size:15px; font-weight:bold; margin-bottom:1px;">{{ $edu->institute }}</p>
                            <p style="font-size:13px; margin-bottom:10px">
                                {{ $edu->qualification }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-4" style="padding-left:0px">
                            <p style="font-size:18px; font-weight:bold; text-align:right">ACHIEVEMENT</p>
                            @if(!empty(Auth::user()->award))
                            @foreach(Auth::user()->award as $award)
                            <p style="font-size:13px; font-weight:bold; color:#F4CF58; margin-bottom:0px; text-align:right">{{ $award->name }}</p>
                            <p style="font-size:13px; text-align:right">{{ strtoupper($award->month) }} {{ $award->year }}</p>
                            @endforeach
                            @endif
                        </div>
                        <div class="col-xs-4" style="padding-left:0px">
                            <hr style="margin-top:5px; margin-bottom:17px; color:black; background-color:black; height:0px;">
                            @if(!empty(Auth::user()->award))
                            @foreach(Auth::user()->award as $award)
                            <p style="font-size:13px; font-weight:bold; margin-bottom:1px;">{{ $award->description }}</p>
                            <p style="font-size:13px">
                                &nbsp;<!--Lorem ipsum-->
                            </p>
                            @endforeach
                            @endif
                        </div>
                        <div class="col-xs-4">
                            <div class="row">
                                <div class="col-xs-6" style="padding-left:0px">
                                    <p style="font-size:18px; font-weight:bold;">SKILLS</p>
                                </div>
                                <div class="col-xs-6" style="padding-left:0px">
                                    <hr style="margin-top:5px">
                                </div>
                            </div>
                            @if(!empty(Auth::user()->skill))
                            @foreach(Auth::user()->skill as $skill)
                            <div class="row">
                                <div class="col-xs-6" style="padding-left:0px">
                                    <p style="font-size:13px; margin-bottom:1px;">{{ $skill->skil }}</p>
                                </div>
                                <div class="col-xs-6" style="padding-left:0px">
                                    <div class="ratio" style="margin-bottom:9px; max-width: {{ ($skill->level * 2) * 10 }}%;"></div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
