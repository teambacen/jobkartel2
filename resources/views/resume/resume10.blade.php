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
            .round{
                border: 1px solid #EC6160;
                border-radius: 100%;
                background-color: #EC6160;
                width: 75px;
                height: 75px;
                margin-top: 2px;
            }
            .dotted{
                border: 1px solid #EC6160;
                border-radius: 100%;
                background-color: #EC6160;
                width: 15px;
                height: 15px;
                margin-top: 2px;
            }
            .lvl1{
                margin-top: 4px;
                border-bottom: 2px solid #383A43;
            }
            .lvl1:before{
                content: '';
                display: block;
                border-bottom: 2px solid #EC6160;
                margin-bottom: -2px;
                /*max-width: 90%;*/
            }
            .lvl2{
                margin-top: 4px;
                border-bottom: 2px solid #383A43;
            }
            .lvl2:before{
                content: '';
                display: block;
                border-bottom: 2px solid #EC6160;
                margin-bottom: -2px;
                max-width: 80%;
            }
            .lvl3{
                margin-top: 4px;
                border-bottom: 2px solid #383A43;
            }
            .lvl3:before{
                content: '';
                display: block;
                border-bottom: 2px solid #EC6160;
                margin-bottom: -2px;
                max-width: 90%;
            }
            .lvl4{
                margin-top: 4px;
                border-bottom: 2px solid #383A43;
            }
            .lvl4:before{
                content: '';
                display: block;
                border-bottom: 2px solid #EC6160;
                margin-bottom: -2px;
                max-width: 70%;
            }
            .lvl5{
                margin-top: 4px;
                border-bottom: 2px solid #383A43;
            }
            .lvl5:before{
                content: '';
                display: block;
                border-bottom: 2px solid #EC6160;
                margin-bottom: -2px;
                max-width: 90%;
            }
        </style>
    </head>
    <body style="background: url({{$watermark}}); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-5">
                    <div class="row">
                        <div class="col-xs-12">
                            <center>
                                @if(Auth::user()->avatars)
                                <img src="{{ $avatar }}" class="img-circle" alt="avatar" height="120" width="120" style="margin-top:10px; margin-bottom:10px;">
                                @endif
                                <p style="font-size:13px; font-weight:bold; color:#EC6160; text-align: left; margin-top:5px; margin-left:5px">{{ strtoupper(Auth::user()->detail->first) }} {{ strtoupper(Auth::user()->detail->last) }}</p>

                            </center>
                        </div>
                        <div class="col-xs-12">
                            <br>
                            <p style="font-size:13px; font-weight:bold; color:#EC6160">{{ strtoupper(Auth::user()->detail->position) }}</p>
                            <hr style="border:1px solid #EC6160; margin-top:-5px">
                        </div>
                        <div class="col-xs-2">
                            <img src="{{asset('images/email.png')}}" alt="icon3" style="height:18px; width:18px">
                        </div>
                        <div class="col-xs-9">
                            <p style="font-size:9px; margin-top:5px">{{ Auth::user()->detail->email }}</p>
                        </div>
                        <div class="col-xs-2">
                            <img src="{{asset('images/address.png')}}" alt="icon1" style="height:18px; width:18px">
                        </div>
                        <div class="col-xs-9">
                            <p style="font-size:9px">{{ Auth::user()->detail->address }},<br/>{{ Auth::user()->detail->country }}</p>
                        </div>
                        <div class="col-xs-2">
                            <img src="{{asset('images/phone.png')}}" alt="icon2" style="height:18px; width:18px">
                        </div>
                        <div class="col-xs-9">
                            <p style="font-size:9px; margin-top:5px">{{ Auth::user()->detail->phone }}</p>
                        </div>
                        <div class="col-xs-12">
                            <br>
                            <p style="font-size:11px; font-weight:bold; color:#EC6160">SKILLS</p>
                            @if(!empty(Auth::user()->skill))
                            @foreach(Auth::user()->skill as $skill)
                            <p style="font-size:9px; font-weight:bold; margin-bottom:0px;">{{ $skill->skil }}</p>
                            <div class="lvl1" style="margin-right:40px; margin-bottom:5px; max-width: {{ ($skill->level * 2) * 10 }}%;"></div>
                            @endforeach
                            @endif 
                        </div>
                    </div>
                </div>
                <div class="col-xs-7">
                    <div class="row">
                        <div class="col-xs-12">
                            <p style="font-size:11px; font-weight:bold; color:#EC6160; margin-top:10px">PROFILE</p>
                            <p style="font-size:10px">
                                {{ Auth::user()->detail->description }}
                            </p>
                        </div>
                        <div class="col-xs-12">
                            <p style="font-size:11px; font-weight:bold; color:#EC6160; margin-top:10px"><img src="{{asset('images/experience.png')}}" alt="icon3" style="height:16px; width:16px">&nbsp;EXPERIENCE</p>
                            @if(!empty(Auth::user()->work))
                            @foreach(Auth::user()->work as $work)
                            <p style="font-size:9px; color:#4fc3f7; margin-top:10px; margin-bottom: 0px">
                                <img src="{{asset('images/dot.png')}}" alt="icon3" style="height:4px; width:4px; margin-top:-2px; margin-right:5px">
                                <b>{{ strtoupper($work->position) }}</b>
                            </p>
                            <p style="font-size:9px; margin-top:0px; margin-bottom: 0px; margin-left:10px">{{ strtoupper($work->start_month) }} {{ $work->start_year }} - {{ strtoupper($work->end_month) }} {{ $work->end_year }}</p>
                            <p style="font-size:10px; margin-left:10px; margin-top: 5px;">
                                {{ $work->work_description }}
                            </p>
                            @endforeach
                            @endif 
                        </div>
                        <div class="col-xs-12">
                            <p style="font-size:11px; font-weight:bold; color:#EC6160; margin-top:10px"><img src="{{asset('images/education.png')}}" alt="icon3" style="height:16px; width:25px">&nbsp;EDUCATION</p>
                            @if(!empty(Auth::user()->education))
                            @foreach(Auth::user()->education as $edu)
                            <p style="font-size:9px; color:#4fc3f7; margin-top:10px; margin-bottom: 0px">
                                <img src="{{asset('images/dot.png')}}" alt="icon3" style="height:4px; width:4px; margin-top:-2px; margin-right:5px">
                                <b>{{ strtoupper($edu->institute) }}</b>
                            </p>
                            <p style="font-size:9px; margin-top:0px; margin-bottom: 0px; margin-left:10px">{{ strtoupper($edu->start_month) }} {{ $edu->start_year }} - {{ strtoupper($edu->graduate_month) }} {{ $edu->graduate_year }}</p>
                            <p style="font-size:10px; margin-left:10px; margin-top: 5px;">
                                {{ $edu->description }}
                            </p>
                            @endforeach
                            @endif
                        </div>
                        <div class="col-xs-12">
                            <p style="font-size:11px; font-weight:bold; color:#EC6160; margin-top:10px"><img src="{{asset('images/achivement.png')}}" alt="icon3" style="height:16px; width:16px">&nbsp;ACHIEVEMENTS</p>
                            @if(!empty(Auth::user()->award))
                            @foreach(Auth::user()->award as $award)
                            <p style="font-size:9px; color:#4fc3f7; margin-top:10px; margin-bottom: 0px">
                                <img src="{{asset('images/dot.png')}}" alt="icon3" style="height:4px; width:4px; margin-top:-2px; margin-right:5px">
                                <b>{{ strtoupper($award->name) }}</b>
                            </p>
                            <p style="font-size:9px; margin-top:0px; margin-bottom: 0px; margin-left:10px">
                                {{ strtoupper($award->month) }} {{ $award->year }}
                            </p>
                            <p style="font-size:10px; margin-left:10px; margin-top: 5px;">
                                {{ $award->description }}
                            </p>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
