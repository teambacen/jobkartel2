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
            .lvl1{
                margin-top: 4px;
                border-bottom: 2px solid #383A43;
            }
            .lvl1:before{
                content: '';
                display: block;
                border-bottom: 2px solid #F4CF58;
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
                border-bottom: 2px solid #F4CF58;
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
                border-bottom: 2px solid #F4CF58;
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
                border-bottom: 2px solid #F4CF58;
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
                border-bottom: 2px solid #F4CF58;
                margin-bottom: -2px;
                max-width: 90%;
            }
        </style>
    </head>
    <body style="background: url({{$watermark}}); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <center>
                        @if(Auth::user()->avatars)
                        <img src="{{ $avatar }}" class="img-circle" alt="avatar" height="100" width="100" style="margin-top:5px; margin-bottom:5px;">
                        @endif
                        <p style="font-size:20px; font-weight:bold">{{ strtoupper(Auth::user()->detail->first) }} {{ strtoupper(Auth::user()->detail->last) }}</p>
                    </center>
                </div>
                <div class="col-xs-4">
                    <div class="row">
                        <div class="col-xs-12">
                            <p style="font-size:11px; font-weight:bold; color:#F4CF58">ABOUT ME</p>
                            <p style="font-size:9px">
                                {{ Auth::user()->detail->description }}
                            </p>
                        </div>
                        <div class="col-xs-12">
                            <p style="font-size:11px; font-weight:bold; color:#F4CF58">CONTACT ME</p>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="{{asset('images/address.png')}}" alt="icon1" style="height:18px; width:18px">
                                </div>
                                <div class="col-xs-9">
                                    <p style="font-size:9px; margin-left: -5px;">{{ Auth::user()->detail->address }},<br/>{{ Auth::user()->detail->country }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="{{asset('images/phone.png')}}" alt="icon2" style="height:18px; width:18px">
                                </div>
                                <div class="col-xs-9">
                                    <p style="font-size:9px; margin-top:5px; margin-left: -5px;">{{ Auth::user()->detail->phone }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="{{asset('images/email.png')}}" alt="icon3" style="height:18px; width:18px">
                                </div>
                                <div class="col-xs-9">
                                    <p style="font-size:9px; margin-top:5px; margin-left: -5px;">{{ Auth::user()->detail->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <br>
                            <p style="font-size:11px; font-weight:bold; color:#F4CF58">SKILLS</p>
                            @if(!empty(Auth::user()->skill))
                            @foreach(Auth::user()->skill as $skill)
                            <p style="font-size:9px; font-weight:bold; margin-bottom:1px;">{{ $skill->skil }}</p>
                            <div class="lvl1" style="margin-right:10px; margin-bottom: 5px; max-width: {{ ($skill->level * 2) * 10 }}%;"></div>
                            @endforeach
                            @endif 
                        </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="{{asset('images/experience.png')}}" alt="icon3" style="height:16px; width:16px; margin-left:55px">
                        </div>
                        <div class="col-xs-8">
                            <p style="font-size:11px; font-weight:bold; color:#F4CF58">WORK EXPERIENCE</p>
                        </div>
                    </div>
                    @if(!empty(Auth::user()->work))
                    @foreach(Auth::user()->work as $work)
                    <div class="row">
                        <div class="col-xs-4" style="padding-left:4px; padding-right:0px">
                            <p style="font-size:8px; text-align: right">{{ strtoupper($work->start_month) }} {{ $work->start_year }} - {{ strtoupper($work->end_month) }} {{ $work->end_year }}</p>
                        </div>
                        <div class="col-xs-8">
                            <p style="font-size:9px; font-weight:bold; margin-bottom:1px">{{ strtoupper($work->position) }}</p>
                            <p style="font-size:9px; font-weight:bold; margin-bottom:0px">{{ $work->company }}</p>
                            <p style="font-size:9px">
                                {{ $work->work_description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endif 
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="{{asset('images/education.png')}}" alt="icon3" style="height:16px; width:25px; margin-left:48px">
                        </div>
                        <div class="col-xs-8">
                            <p style="font-size:11px; font-weight:bold; color:#F4CF58">EDUCATION</p>
                        </div>
                    </div>
                    @if(!empty(Auth::user()->education))
                    @foreach(Auth::user()->education as $edu)
                    <div class="row">
                        <div class="col-xs-4" style="padding-left:4px; padding-right:0px">
                            <p style="font-size:8px; text-align: right;">{{ strtoupper($edu->start_month) }} {{ $edu->start_year }} - {{ strtoupper($edu->graduate_month) }} {{ $edu->graduate_year }}</p>
                        </div>
                        <div class="col-xs-8">
                            <p style="font-size:9px; font-weight:bold; margin-bottom:1px">{{ strtoupper($edu->qualification) }}</p>
                            <p style="font-size:9px; font-weight:bold; margin-bottom:0px">{{ $edu->institute }}</p>
                            <p style="font-size:9px">
                                {{ $edu->description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endif                     
                    <div class="row">
                        <div class="col-xs-4">
                            <img src="{{asset('images/achivement.png')}}" alt="icon3" style="height:16px; width:16px; margin-left:55px">
                        </div>
                        <div class="col-xs-8">
                            <p style="font-size:11px; font-weight:bold; color:#F4CF58">ACHIEVEMENT</p>
                        </div>
                    </div>
                    @if(!empty(Auth::user()->award))
                    @foreach(Auth::user()->award as $award)
                    <div class="row">
                        <div class="col-xs-4" style="padding-left:4px; padding-right:0px">
                            <p style="font-size:8px; text-align: right">{{ strtoupper($award->month) }} {{ $award->year }}</p>
                        </div>
                        <div class="col-xs-8">
                            <p style="font-size:9px; font-weight:bold; margin-bottom:1px">{{ strtoupper($award->name) }}</p>
                            <p style="font-size:9px">
                                {{ $award->description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endif  
                </div>
            </div>
        </div>
    </body>
</html>
