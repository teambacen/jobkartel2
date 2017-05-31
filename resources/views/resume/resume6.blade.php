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
            .aaa{
                margin-top: 25px;
                border-bottom: 25px solid #293340;
            }
            .aaa:before{
                content: '';
                display: block;
                border-bottom: 25px solid #D95727;
                margin-bottom: -25px;
                border-radius: 0px 200px 200px 0px;
                max-width: 45%;
            }
            .bgtest{
                width: 122px;
                height: 15px;
                position: relative;
                border: 15px solid #FFFFFF;
                background-color: #FFFFFF;
                border-radius: 0px 200px 200px 0px;
            }
            .test{
                width: 120px;
                height: 20px;
                position: relative;
                border: 10px solid #D95727;
                background-color: #D95727;
                border-radius: 0px 180px 180px 0px;
            }
            .icon-cl{
                color: white;
            }
            .dot1{
                border: 1px solid #3F4041;
                background-color: #3F4041;
                border-radius: 100%;
                width: 5px;
                height: 5px;
                margin-left: -2px;
                margin-top: -85px;
            }
            .dot2{
                border: 1px solid #3F4041;
                background-color: #3F4041;
                border-radius: 100%;
                width: 5px;
                height: 5px;
                margin-left: -2px;
                margin-top: 76px;
            }
            .vertcl{
                border-left: 1px solid #3F4041;
                height: 85px;
            }
            .sdot1{
                border: 1px solid #3F4041;
                background-color: #3F4041;
                border-radius: 100%;
                width: 5px;
                height: 5px;
                margin-left: -2px;
                margin-top: -35px;
            }
            .sdot2{
                border: 1px solid #3F4041;
                background-color: #3F4041;
                border-radius: 100%;
                width: 5px;
                height: 5px;
                margin-left: -2px;
                margin-top: 26px;
            }
            .vertcl1{
                border-left: 1px solid #3F4041;
                height: 35px;
            }
            .ab{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .ab:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 70%;
            }
            .ab1{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .ab1:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                /*max-width: 80%;*/
            }
            .ab2{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .ab2:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 60%;
            }
            .ab3{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .ab3:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 70%;
            }
            .ab4{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .ab4:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 80%;
            }
            .ab5{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .ab5:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 85%;
            }
            .ab6{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .ab6:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 75%;
            }
            .abl7{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .ab7:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 100%;
            }
            .ab8{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .ab8:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 80%;
            }
            .trapezium{
                box-sizing: content-box;
                width: 25px;
                height: 0;
                border: 25px solid rgba(0,0,0,0);
                border-top: 20px solid #3F4041;
                border-bottom: 0 solid;
            }
        </style>
    </head>
    <body style="background: url({{$watermark}}); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <hr style="color:#3F4041; background-color:#3F4041; height:20px; margin-left:0px; margin-right:-15px;">
                    <div class="col-xs-4">
                        <div class="row">
                            @if(Auth::user()->avatars)
                            <img src="{{ $avatar }}" class="img-circle" alt="avatar" width="100" height="100" style="margin-top:-45px">
                            @endif
                        </div>
                    </div>
                    <div class="bgtest" style="margin-left:100px; margin-top:-45px;"></div>
                    <div class="test" style="margin-left:100px; margin-top:-25px;">
                        <div class="row" style="margin-top:-7px; margin-left:0px; ">
                            <p style="font-size:10px; font-weight:bold; color:white;">{{ strtoupper(Auth::user()->detail->position) }}</p>
                        </div>
                    </div>
                    <div class="col-xs-8">
                        <div class="row" style="margin-top:-15px">
                            <p style="font-size:12px; font-weight:bold; color:#D95727; margin-bottom:5px;">{{ strtoupper(Auth::user()->detail->first) }} {{ strtoupper(Auth::user()->detail->last) }}</p>
                            <p style="font-size:10px;">
                                {{ Auth::user()->detail->description }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <hr style="color:#D95727; background-color:#D95727; height:65px; margin-left:-15px; margin-right:-15px;">
                    <div class="row" style="margin-top:-75px">
                        <div class="col-xs-4" style="margin-left:10px">
                            <center>
                                <img src="{{asset('images/phone_wh.png')}}" alt="icon5" style="height:20px; width:20px; margin-top:-10px">
                                <p style="font-size:8px; font-size:bold; color:white; margin-top:-2px">{{ Auth::user()->detail->phone }}</p>
                            </center>
                        </div>
                        <div class="col-xs-4" style="margin-left:-10px">
                            <center>
                                <img src="{{asset('images/address_wh.png')}}" alt="icon4" style="height:20px; width:20px; margin-top:-10px">
                                <p style="font-size:8px; font-size:bold; color:white; margin-top:-2px">{{ Auth::user()->detail->address }}, {{ Auth::user()->detail->country }}</p>
                            </center>
                        </div>
                        <div class="col-xs-4" style="margin-left:-10px">
                            <center>
                                <img src="{{asset('images/email_wh.png')}}" alt="icon6" style="height:20px; width:20px; margin-top:-10px">
                                <p style="font-size:8px; font-size:bold; color:white; margin-top:-2px">{{ Auth::user()->detail->email }}</p>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-4">
                                <p style="font-size:10px; font-weight:bold; text-align:right">EXPERIENCE</p>
                            </div>
                            <div class="col-xs-8" style="padding-left:0px">
                                <hr style="margin-top:5px; margin-bottom:0px; color:black; background-color:black; height:0px;">
                            </div>
                        </div>
                        @if(!empty(Auth::user()->work))
                        @foreach(Auth::user()->work as $work)
                        <div class="row">
                            <div class="col-xs-4">
                                <p style="font-size:10px; font-weight:bold; color:#D95727; margin-bottom:0px; text-align:right">{{ strtoupper($work->position) }}</p>
                                <p style="font-size:9px; text-align:right">{{ strtoupper($work->start_month) }} {{ $work->start_year }} - {{ strtoupper($work->end_month) }} {{ $work->end_year }}</p>
                            </div>
                            <div class="col-xs-7" style="padding-left:0px">
                                <p style="font-size:10px; font-weight:bold; margin-bottom:0px;">{{ $work->company }}</p>
                                <p style="font-size:9px; margin-bottom:10px">
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
                            <div class="col-xs-4">
                                <p style="font-size:10px; font-weight:bold; text-align:right">EDUCATION</p>
                            </div>
                            <div class="col-xs-8" style="padding-left:0px">
                                <hr style="margin-top:5px; margin-bottom:0px; color:black; background-color:black; height:0px;">
                            </div>
                        </div>
                        @if(!empty(Auth::user()->education))
                        @foreach(Auth::user()->education as $edu)
                        <div class="row">
                            <div class="col-xs-4" style="padding-left:0px">
                                <p style="font-size:10px; font-weight:bold; color:#D95727; margin-bottom:0px; text-align:right">{{ strtoupper($edu->grade) }}</p>
                                <p style="font-size:9px; text-align:right">{{ strtoupper($edu->start_month) }} {{ $edu->start_year }} - {{ strtoupper($edu->graduate_month) }} {{ $edu->graduate_year }}</p>
                            </div>
                            <div class="col-xs-8" style="padding-left:0px">
                                <p style="font-size:10px; font-weight:bold; margin-bottom:1px;">{{ $edu->institute }}</p>
                                <p style="font-size:9px; margin-bottom:10px">
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
                            <div class="col-xs-4">
                                <p style="font-size:10px; font-weight:bold; text-align:right">ACHIEVEMENT</p>
                                @if(!empty(Auth::user()->award))
                                @foreach(Auth::user()->award as $award)
                                <p style="font-size:10px; font-weight:bold; color:#D95727; margin-bottom:0px; text-align:right">{{ $award->name }}</p>
                                <p style="font-size:9px; text-align:right">{{ strtoupper($award->month) }} {{ $award->year }}</p>
                                @endforeach
                                @endif
                            </div>
                            <div class="col-xs-4" style="padding-left:0px">
                                <hr style="margin-top:5px; margin-bottom:16px; color:black; background-color:black; height:0px;">
                                @if(!empty(Auth::user()->award))
                                @foreach(Auth::user()->award as $award)
                                <p style="font-size:10px; font-weight:bold; margin-bottom:0px;">{{ $award->description }}</p>
                                <p style="font-size:9px">
                                    &nbsp;
                                </p>
                                @endforeach
                                @endif
                            </div>
                            <div class="col-xs-4">
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
                                        <div class="ab1" style="margin-bottom:9px; max-width: {{ ($skill->level * 2) * 10 }}%;"></div>
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
