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
            .bulat{
                border: 1px solid black;
                border-radius: 100%;
                width: 21px;
                height: 21px;
                margin-top: 2px;
                margin-left: 2px;
            }
            .bulat1{
                border: 1px solid black;
                border-radius: 100%;
                width: 21px;
                height: 21px;
                margin-top: 2px;
                margin-left: 2px;
            }
            .bulat2{
                border: 1px solid black;
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
                /*max-width: 90%;*/
            }
            .sklv2{
                margin-top: 4px;
                border-bottom: 4px solid #E5E5E5;
            }
            .sklv2:before{
                content: '';
                display: block;
                border-bottom: 4px solid #F4CF58;
                margin-bottom: -4px;
                max-width: 30%;
            }
            .sklv3{
                margin-top: 4px;
                border-bottom: 4px solid #E5E5E5;
            }
            .sklv3:before{
                content: '';
                display: block;
                border-bottom: 4px solid #F4CF58;
                margin-bottom: -4px;
                max-width: 70%;
            }
            .sklv4{
                margin-top: 4px;
                border-bottom: 4px solid #E5E5E5;
            }
            .sklv4:before{
                content: '';
                display: block;
                border-bottom: 4px solid #F4CF58;
                margin-bottom: -4px;
                max-width: 35%;
            }
            .sklv5{
                margin-top: 4px;
                border-bottom: 4px solid #E5E5E5;
            }
            .sklv5:before{
                content: '';
                display: block;
                border-bottom: 4px solid #F4CF58;
                margin-bottom: -4px;
                max-width: 33%;
            }
            .sklv6{
                margin-top: 4px;
                border-bottom: 4px solid #E5E5E5;
            }
            .sklv6:before{
                content: '';
                display: block;
                border-bottom: 4px solid #F4CF58;
                margin-bottom: -4px;
                max-width: 70%;
            }
            .sklv7{
                margin-top: 4px;
                border-bottom: 4px solid #E5E5E5;
            }
            .sklv7:before{
                content: '';
                display: block;
                border-bottom: 4px solid #F4CF58;
                margin-bottom: -4px;
                max-width: 90%;
            }
            .sklv8{
                margin-top: 4px;
                border-bottom: 4px solid #E5E5E5;
            }
            .sklv8:before{
                content: '';
                display: block;
                border-bottom: 4px solid #F4CF58;
                margin-bottom: -4px;
                max-width: 41%;
            }
        </style>
    </head>
    <body style="background: url({{$watermark}}); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3">
                    @if(Auth::user()->avatars)
                    <img src="{{ $avatar }}" class="img-circle" alt="avatar" height="90" width="90" style="margin-top:10px;">
                    @endif
                </div>
                <div class="col-xs-9">
                    <p style="font-size:25px; font-weight:bold; margin-top:20px; margin-bottom:0px">{{ strtoupper(Auth::user()->detail->first) }} {{ strtoupper(Auth::user()->detail->last) }}</p>
                    <p style="font-size:12px">{{ strtoupper(Auth::user()->detail->position) }}</p>
                </div>
            </div>
            <div class="row">
                <br>
                <div class="col-xs-7">
                    <p style="font-size:10px; font-weight:bold">CAREER SUMMARY</p>
                    <p style="font-size:10px">
                        {{ Auth::user()->detail->description }}
                    </p>
                </div>
                <div class="col-xs-5">
                    <div class="row">
                        <div class="col-xs-1">
                            <img src="{{asset('images/phone.png')}}" alt="icon2" style="height:25px; width:25px">
                        </div>
                        <div class="col-xs-8">
                            <p style="font-size:8px; margin-top:7px; margin-bottom: 15px;">{{ Auth::user()->detail->phone }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1">
                            <img src="{{asset('images/address.png')}}" alt="icon1" style="height:25px; width:25px">
                        </div>
                        <div class="col-xs-8">
                            <p style="font-size:8px; margin-top:2px; margin-bottom:3px">{{ Auth::user()->detail->address }},<br/>{{ Auth::user()->detail->country }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1">
                            <img src="{{asset('images/email.png')}}" alt="icon3" style="height:25px; width:25px">
                        </div>
                        <div class="col-xs-8">
                            <p style="font-size:8px; margin-top:7px">{{ Auth::user()->detail->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3" style="padding-left:0px">
                            <p style="font-size:10px; font-weight:bold; text-align:right">EXPERIENCE</p>
                        </div>
                        <div class="col-xs-9" style="padding-left:0px">
                            <hr style="margin-top:5px; color:black; background-color:black; height:0px;">
                        </div>
                    </div>
                    @if(!empty(Auth::user()->work))
                    @foreach(Auth::user()->work as $work)
                    <div class="row">
                        <div class="col-xs-3" style="padding-left:0px">                            
                            <p style="font-size:9px; font-weight:bold; color:#F4CF58; margin-bottom:0px; text-align:right">{{ strtoupper($work->position) }}</p>
                            <p style="font-size:7px; text-align:right">{{ strtoupper($work->start_month) }} {{ $work->start_year }} - {{ strtoupper($work->end_month) }} {{ $work->end_year }}</p>                            
                        </div>
                        <div class="col-xs-9" style="padding-left:0px">                               
                            <p style="font-size:9px; font-weight:bold; margin-bottom:1px;">{{ $work->company }}</p>
                            <p style="font-size:10px; margin-bottom:10px">
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
                        <div class="col-xs-3" style="padding-left:0px">
                            <p style="font-size:10px; font-weight:bold; text-align:right">EDUCATION</p>
                        </div>
                        <div class="col-xs-9" style="padding-left:0px">
                            <hr style="margin-top:5px; color:black; background-color:black; height:0px;">
                        </div>
                    </div>
                    @if(!empty(Auth::user()->education))
                    @foreach(Auth::user()->education as $edu)
                    <div class="row">
                        <div class="col-xs-3">
                            <p style="font-size:9px; font-weight:bold; color:#F4CF58; margin-bottom:0px; text-align:right">{{ strtoupper($edu->grade) }}</p>
                            <p style="font-size:7px; text-align:right">{{ strtoupper($edu->start_month) }} {{ $edu->start_year }} - {{ strtoupper($edu->graduate_month) }} {{ $edu->graduate_year }}</p>
                        </div>
                        <div class="col-xs-9" style="padding-left:0px">
                            <p style="font-size:9px; font-weight:bold; margin-bottom:1px;">{{ $edu->institute }}</p>
                            <p style="font-size:10px; margin-bottom:10px">
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
                        <div class="col-xs-3" style="padding-left:0px">
                            <p style="font-size:10px; font-weight:bold; text-align:right">ACHIEVEMENT</p>
                            @if(!empty(Auth::user()->award))
                            @foreach(Auth::user()->award as $award)
                            <p style="font-size:9px; font-weight:bold; color:#F4CF58; margin-bottom:0px; text-align:right">{{ strtoupper($award->name) }}</p>
                            <p style="font-size:7px; margin-bottom:14px; text-align:right">{{ strtoupper($award->month) }} {{ $award->year }}</p>
                            @endforeach
                            @endif
                        </div>
                        <div class="col-xs-4" style="padding-left:0px">
                            <hr style="margin-top:5px; margin-bottom:17px; color:black; background-color:black; height:0px;">
                            @if(!empty(Auth::user()->award))
                            @foreach(Auth::user()->award as $award)
                            <p style="font-size:10px; font-weight:bold; margin-bottom:1px;">{{ $award->description }}</p>
                            <p style="font-size:9px">
                                &nbsp;<!--Lorem ipsum-->
                            </p>
                            @endforeach
                            @endif
                        </div>
                        <div class="col-xs-5">
                            <div class="row">
                                <div class="col-xs-4" style="padding-left:0px">
                                    <p style="font-size:10px; font-weight:bold;">SKILLS</p>
                                </div>
                                <div class="col-xs-8" style="padding-left:0px">
                                    <hr style="margin-top:5px">
                                </div>
                            </div>
                            @if(!empty(Auth::user()->skill))
                            @foreach(Auth::user()->skill as $skill)
                            <div class="row">
                                <div class="col-xs-6" style="padding-left:0px">
                                    <p style="font-size:9px; margin-bottom:0px;">{{ $skill->skil }}</p>
                                </div>
                                <div class="col-xs-6" style="padding-left:0px">
                                    <div class="sklv1" style="margin-bottom:9px; max-width: {{ ($skill->level * 2) * 10 }}%;"></div>
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
