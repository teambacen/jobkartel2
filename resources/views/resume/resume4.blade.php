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
            .kotak{
                width: 250px;
                height: 35px;
                /*position: relative;*/
                border: 1px solid white;
            }
            .kotak1{
                width: 120px;
                height: 25px;
                position: relative;
                border: 1px solid {{ $color }};
                background-color: {{ $color }};
            }
            .kotak2{
                width: 245px;
                height: 25px;
                position: relative;
                border: 1px solid #444545;
                background-color: #444545;
                margin-left: 4px
            }
            .round{
                /*border: 1px solid white;*/
                border-radius: 100%;
                width: 20px;
                height: 20px;
                margin-top: 2px;
                margin-left: 2px;
                /*-webkit-border-top-left-radius: 1px;
                -webkit-border-top-right-radius: 2px;
                -webkit-border-bottom-right-radius: 3px;
                -webkit-border-bottom-left-radius: 4px;

                -moz-border-radius-topleft: 1px;
                -moz-border-radius-topright: 2px;
                -moz-border-radius-bottomright: 3px;
                -moz-border-radius-bottomleft: 4px;

                border-top-left-radius: 1px;
                border-top-right-radius: 2px;
                border-bottom-right-radius: 3px;
                border-bottom-left-radius: 4px;*/
            }
            .round1{
                /*border: 1px solid white;*/
                border-radius: 100%;
                width: 20px;
                height: 20px;
                margin-top: 2px;
            }
            .round2{
                /*border: 1px solid white;*/
                border-radius: 100%;
                width: 20px;
                height: 20px;
                margin-top: 2px;
            }
            .icon-color {
                color: #FFFFFF;
            }
            .p1{
                margin-top: 5px;
                margin-left: 12px;
                margin-right: 12px;
                padding-left: 5px;
                border-bottom: 1px solid black;
            }
            /*.p1:before{
              content: '';
              display: block;
              border-bottom: 2px solid #EBEBED;
              margin-bottom: -2px;
              max-width: 70%;
            }*/
            .lvl{
                margin-top: 4px;
                border-bottom: 2px solid #383A43;
            }
            .lvl:before{
                content: '';
                display: block;
                border-bottom: 2px solid #F4CF58;
                margin-bottom: -2px;
            }
        </style>
    </head>
    <body style="background: ; background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row" style="background-color:{{ $color }}">
                        <br>
                        <div class="col-xs-2">
                            <hr>
                        </div>
                        <div class="col-xs-8">
                            <center>
                                <div class="kotak">
                                    <p style="font-size:26px; color:white; text-align:center; margin-top:7px;">{{ strtoupper(Auth::user()->detail->first) }} {{ strtoupper(Auth::user()->detail->last) }}</p>
                                </div>
                                <p style="font-size:18px; color:white; text-align:center; position:relative; margin-top:4px;">{{ strtoupper(Auth::user()->detail->position) }}</p>
                            </center>
                        </div>
                        <div class="col-xs-2">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="background-color:#444545">
                <div class="col-xs-12" style="margin-top: 5px;">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="row">
                                <div class="col-xs-1 col-xs-offset-2" style="padding-left:1px; padding-right:1px;">
                                    <div class="round">
                                        <img src="{{asset('images/address_wh.png')}}" class="img-responsive">
                                        <!--                                        <div class="fa fa-phone icon-color" aria-hidden="true" style="margin-left:3px; margin-top:3px;">
                                                                                </div>-->
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <p style="font-size:13px; color:white; margin-top:8px; margin-left:2px;">{{ Auth::user()->detail->phone }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="row">
                                <div class="col-xs-1 col-xs-offset-1" style="padding-left:1px; padding-right:1px;">
                                    <div class="round2">
                                        <img src="{{asset('images/phone_wh.png')}}" class="img-responsive">
                                        <!--                                        <div class="fa fa-paper-plane-o icon-color" aria-hidden="true" style="margin-left:2px; margin-top:2px;">
                                                                                </div>-->
                                    </div>
                                </div>
                                <div class="col-xs-10">
                                    <p style="font-size:13px; color:white; margin-top:5px; margin-left:2px;">{{ Auth::user()->detail->address }},<br/>{{ Auth::user()->detail->country }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="row">
                                <div class="col-xs-1 col-xs-offset-2" style="padding-left:1px; padding-right:1px;">
                                    <div class="round2">
                                        <img src="{{asset('images/email_wh.png')}}" class="img-responsive">
                                        <!--                                        <div class="fa fa-envelope-o icon-color" aria-hidden="true" style="margin-left:2px; margin-top:0px;">
                                                                                </div>-->
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <p style="font-size:13px; color:white; margin-top:8px; position:relative; margin-left:0px">{{ Auth::user()->detail->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <br>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="row">
                                <div class="kotak1">
                                    <p style="font-size:18px; color:white; margin-left:10px; margin-top:4px;">Profile</p>
                                    <center>
                                        @if(Auth::user()->avatars)
                                        <img src="{{ $avatar }}" alt="avatar" width="80" height="80" class="img-circle">
                                        @endif
                                    </center>
                                    <p style="font-size:13px; margin-left:15px; margin-right:15px;" >
                                        {{ Auth::user()->detail->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6"  style="padding-left:1px; padding-right:1px; margin-left:15px;">
                            <div class="row">
                                <div class="kotak2">
                                    <p style="font-size:18px; font-weight:bold; color:white; margin-left:8px; margin-top:4px;">+ Experience</p>
                                </div>
                            </div>
                            <br>
                            @if(!empty(Auth::user()->work))
                            @foreach(Auth::user()->work as $work)
                            <div class="row">
                                <div class="col-xs-1">
                                    <div class="row">
                                        <div class="p1" style="margin-bottom:7px"></div>
                                    </div>
                                </div>
                                <div class="col-xs-8" style="padding-left:8px; padding-right:5px;">
                                    <div class="row">
                                        <p style="font-size:13px; font-weight:bold; margin-bottom:0px;">{{ strtoupper($work->position) }}</p>
                                        <p style="font-size:13px; margin-bottom:0px;">{{ $work->company }}</p>
                                        <div class="row">
                                            <p style="font-size:13px; margin-left:15px;">{{ $work->work_description }}</p>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="row">
                                        <p style="font-size:13px; text-align:left;">{{ $work->start_year }} - {{ $work->end_year }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="row">
                                <div class="kotak1">
                                    <p style="font-size:18px; color:white; margin-left:10px; margin-top:4px;">Skills</p>
                                    <div style="margin-bottom: 5px;"></div>
                                    @if(!empty(Auth::user()->skill))
                                    @foreach(Auth::user()->skill as $skill)
                                    <p style="font-size:13px; font-weight:bold; margin-left:15px; margin-top:5px; margin-bottom:0px;">{{ $skill->skil }}</p>
                                    <div class="lvl" style="margin-left:15px; margin-right:10px; max-width: {{ ($skill->level * 2) * 10 }}%;"></div>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6"  style="padding-left:1px; padding-right:1px; margin-left:15px;">
                            <div class="row">
                                <div class="kotak2">
                                    <p style="font-size:18px; font-weight:bold; color:white; margin-left:8px; margin-top:4px;">+ Education</p>
                                </div>
                            </div>
                            <br>
                            @if(!empty(Auth::user()->education))
                            @foreach(Auth::user()->education as $edu)
                            <div class="row">
                                <div class="col-xs-1">
                                    <div class="row">
                                        <div class="p1" style="margin-bottom:7px"></div>
                                    </div>
                                </div>
                                <div class="col-xs-8" style="padding-left:8px; padding-right:5px;">
                                    <div class="row">
                                        <p style="font-size:13px; font-weight:bold; margin-bottom:0px;">{{ strtoupper($edu->qualification) }}</p>
                                        <p style="font-size:13px; margin-bottom:0px;">{{ $edu->institute }}</p>
                                        <div class="row">
                                            <p style="font-size:13px; margin-left:15px;">{{ $edu->description }}</p>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="row">
                                        <p style="font-size:13px; text-align:left;">{{ $edu->start_year }} - {{ $edu->graduate_year }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                            <div class="row">
                                <div class="kotak2">
                                    <p style="font-size:18px; font-weight:bold; color:white; margin-left:8px; margin-top:4px;">+ Achievement</p>
                                </div>
                            </div>
                            @if(!empty(Auth::user()->award))
                            @foreach(Auth::user()->award as $award)
                            <div class="row" style="margin-top:10px">
                                <div class="col-xs-1">
                                    <div class="row">
                                        <div class="p1" style="margin-bottom:7px"></div>
                                    </div>
                                </div>
                                <div class="col-xs-8" style="padding-left:8px; padding-right:5px;">
                                    <div class="row">
                                        <p style="font-size:13px; font-weight:bold; margin-bottom:0px;">{{ $award->name }}</p>
                                        <p style="font-size:13px; margin-bottom:0px;">{{ $award->description }}</p>
                                    </div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="row">
                                        <p style="font-size:13px; text-align:left;">{{ strtoupper($award->month) }} {{ $award->year }}</p>
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
    </body>
</html>
