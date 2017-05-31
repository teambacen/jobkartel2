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
            .boxName{
                width: 230px;
                height: 70px;
                position: relative;
                border: 2px solid white;
            }
            .boxCourse{
                width: 200px;
                height: 20px;
                position: relative;
                border: 2px solid #3F3F3F;
                background-color: #3F3F3F;
            }
            .boxDotProfile{
                width: 100px;
                height: 20px;
                position: relative;
                border:2px solid #EFA7A3;
                border-style: dotted;
                margin-left: 10px;
                margin-top: 10px;
            }
            .boxDotWE{
                width: 120px;
                height: 25px;
                position: relative;
                border:2px solid #3F3F3F;
                border-style: dotted;
            }
            .boxDotEA{
                width: 100px;
                height: 25px;
                position: relative;
                border:2px solid #3F3F3F;
                border-style: dotted;
            }
            .lvl1{
                margin-top: 4px;
                border-bottom: 6px solid #E0E0E0;
            }
            .lvl1:before{
                content: '';
                display: block;
                border-bottom: 6px solid #EFA7A3;
                margin-bottom: -6px;
                /*max-width: 90%;*/
            }
            .lvl2{
                margin-top: 4px;
                border-bottom: 6px solid #E0E0E0;
            }
            .lvl2:before{
                content: '';
                display: block;
                border-bottom: 6px solid #EFA7A3;
                margin-bottom: -6px;
                max-width: 90%;
            }
            .lvl3{
                margin-top: 4px;
                border-bottom: 6px solid #E0E0E0;
            }
            .lvl3:before{
                content: '';
                display: block;
                border-bottom: 6px solid #EFA7A3;
                margin-bottom: -6px;
                max-width: 90%;
            }
            .lvl4{
                margin-top: 4px;
                border-bottom: 6px solid #E0E0E0;
            }
            .lvl4:before{
                content: '';
                display: block;
                border-bottom: 6px solid #EFA7A3;
                margin-bottom: -6px;
                max-width: 90%;
            }
            .lvl5{
                margin-top: 4px;
                border-bottom: 6px solid #E0E0E0;
            }
            .lvl5:before{
                content: '';
                display: block;
                border-bottom: 6px solid #EFA7A3;
                margin-bottom: -6px;
                max-width: 90%;
            }
            .lvl6{
                margin-top: 4px;
                border-bottom: 6px solid #E0E0E0;
            }
            .lvl6:before{
                content: '';
                display: block;
                border-bottom: 6px solid #e0e0e0;
                margin-bottom: -6px;
                max-width: 90%;
            }
        </style>
    </head>
    <body style="background: url({{$watermark}}); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row" style="background-color:#EFA7A3">
                        <div class="col-xs-4">
                            @if(Auth::user()->avatars)
                            <img src="{{ $avatar }}" class="img-circle" alt="avatar" height="110" width="120" style="margin-top:6px; margin-bottom:6px;">
                            @endif
                        </div>
                        <div class="col-xs-8">
                            <center>
                                <div class="boxName" style="margin-top:25px; margin-bottom:-8px;">
                                    <p style="font-size:20px; font-weight:bold; color:white; margin-top:2px;">{{ strtoupper(Auth::user()->detail->first) }} {{ strtoupper(Auth::user()->detail->last) }}</p>
                                </div>
                                <div class="boxCourse">
                                    <p style="font-size:10px; font-weight:bold; color:#FFFFFF; margin-top:1px;">{{ strtoupper(Auth::user()->detail->position) }}</p>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4" style="background-color:#EDEDED; padding-bottom:300px; padding-left:0px">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="boxDotProfile">
                                <center>
                                    <p style="font-size:10px; font-weight:bold; margin-top:2px;">PROFILE</p>
                                </center>
                            </div>
                            <p style="font-size:10px; margin-left:10px; margin-top:5px;">
                                {{ Auth::user()->detail->description }}
                            </p>
                        </div>
                        <div class="col-xs-12">
                            <div class="boxDotProfile">
                                <center>
                                    <p style="font-size:10px; font-weight:bold; margin-top:2px;">CONTACT</p>
                                </center>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="{{asset('images/phone.png')}}" alt="icon2" style="height:18px; width:18px; margin-left:10px; margin-top: 5px;">
                                </div>
                                <div class="col-xs-9">
                                    <p style="font-size:8px; margin-top:10px; margin-left:5px">{{ Auth::user()->detail->phone }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="{{asset('images/email.png')}}" alt="icon3" style="height:18px; width:18px; margin-left:10px;">
                                </div>
                                <div class="col-xs-9">
                                    <p style="font-size:8px; margin-top:5px; margin-left:5px">{{ Auth::user()->detail->email }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="{{asset('images/address.png')}}" alt="icon1" style="height:18px; width:18px; margin-left:10px">
                                </div>
                                <div class="col-xs-9">
                                    <p style="font-size:8px; margin-left:5px">{{ Auth::user()->detail->address }},<br/>{{ Auth::user()->detail->country }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="boxDotProfile">
                                <center>
                                    <p style="font-size:10px; font-weight:bold; margin-top:2px;margin-bottom:10px;">SKILLS</p>
                                </center>
                            </div>
                            @if(!empty(Auth::user()->skill))
                            @foreach(Auth::user()->skill as $skill)
                            <p style="font-size:8px; font-weight:bold; margin-left:10px; margin-top:5px; margin-bottom:0px;">{{ $skill->skil }}</p>
                            <div class="lvl1" style="margin-left:10px; margin-right:10px; max-width: {{ ($skill->level * 2) * 10 }}%;"></div>
                            @endforeach
                            @endif      
                        </div>
                    </div>
                </div>
                <div class="col-xs-8">
                    <div class="boxDotWE" style="margin-top:10px">
                        <p style="font-size:11px; font-weight:bold; color:#EFA7A3; margin-top:3px; text-align:center">WORK EXPERIENCE</p>
                    </div>
                    @if(!empty(Auth::user()->work))
                    @foreach(Auth::user()->work as $work)
                    <div class="row">
                        <div class="col-xs-5" style="margin-top:8px">
                            <p style="font-size:9px; font-weight:bold; margin-bottom:0px">{{ strtoupper($work->company) }}</p>
                            <p style="font-size:8px; margin-bottom:0px; margin-right: 2px;">{{ strtoupper($work->start_month) }} {{ $work->start_year }} - {{ strtoupper($work->end_month) }} {{ $work->end_year }}</p>
                            
                        </div>
                        <div class="col-xs-7" style="margin-top:8px">
                            <p style="font-size:9px; margin-bottom:1px; margin-left:-30px"><b>{{ strtoupper($work->position) }}</b></p>
                            <p style="font-size:10px; margin-left:-30px;">
                                {{ $work->work_description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endif                    
                    <div class="boxDotEA" style="margin-top:10px">
                        <p style="font-size:11px; font-weight:bold; color:#EFA7A3; margin-top:3px; text-align:center">EDUCATION</p>
                    </div>
                    @if(!empty(Auth::user()->education))
                    @foreach(Auth::user()->education as $edu)
                    <div class="row">
                        <div class="col-xs-5" style="margin-top:8px">
                            <p style="font-size:9px; font-weight:bold; margin-bottom:0px">{{ strtoupper($edu->institute) }}</p>
                            <p style="font-size:8px; margin-bottom:0px; margin-right: 2px;">{{ strtoupper($edu->start_month) }} {{ $edu->start_year }} - {{ strtoupper($edu->graduate_month) }} {{ $edu->graduate_year }}</p>
                            
                        </div>
                        <div class="col-xs-7" style="margin-top:8px">
                            <p style="font-size:9px; margin-bottom:0px; margin-left:-30px; text-align:left;"><b>{{ strtoupper($edu->qualification) }}</b></p>
                            <p style="font-size:10px; margin-left:-30px; text-align:left;">
                                {{ $edu->description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <div class="boxDotEA" style="margin-top:10px;">
                        <p style="font-size:11px; font-weight:bold; color:#EFA7A3; margin-top:3px; text-align:center">ACHIEVEMENT</p>
                    </div>
                    @if(!empty(Auth::user()->award))
                    @foreach(Auth::user()->award as $award)
                    <div class="row">
                        <div class="col-xs-5" style="margin-top:8px">
                            <p style="font-size:9px; margin-bottom:0px; margin-right: 2px;">{{ strtoupper($award->month) }} {{ $award->year }}</p>
                        </div>
                        <div class="col-xs-7" style="margin-top:8px">
                            <p style="font-size:9px; margin-bottom:0px; margin-left:-30px"><b>{{ strtoupper($award->name) }}</b></p>
                            <p style="font-size:10px; margin-left:-30px">
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
