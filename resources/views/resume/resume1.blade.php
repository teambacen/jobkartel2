<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <title>{{$title}}</title>
        <style media="screen">
            p {
                font-family: 'Roboto', serif;
            }
            #bgSizeContain {
                /*height: 70px;*/
                background-size: contain;
            }
            .rate{
                margin-top: 4px;
                border-bottom: 2px solid #3F4041;
            }
            .rate:before{
                content: '';
                display: block;
                border-bottom: 2px solid #BDBDBD;
                margin-bottom: -2px;
            }
        </style>
    </head>
    <body style="background: url({{$watermark}}) ; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row" style="background-color:{{$color}}; margin-top:20px; margin-bottom:20px;  padding-top: 20px; padding-bottom: 20px; " id="bgSizeContain">
                        <div class="col-xs-8">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p style="font-size:26px; font-weight:bold; margin-left:80px; margin-top:15px; margin-bottom:2px;">{{ strtoupper(Auth::user()->detail->first) }} {{ strtoupper(Auth::user()->detail->last) }}</p>
                                    <p style="font-size:18px; margin-left:80px;">{{ strtoupper(Auth::user()->detail->position) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            @if(Auth::user()->avatars)
                            <img src="{{ $avatar }}" alt="avatar" width="100" height="100" class="img-circle">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4" style="background-color:{{ $color }}; padding-top:10px; padding-bottom:50px; margin-left:5px; background-size:contain; ">
                    <p style="font-size:20px; font-weight:bold;">PROFILE</p>
                    <p style="font-size:18px; font-weight:bold; margin-bottom:0px;">Name</p>
                    <p style="font-size:13px">{{ strtoupper(Auth::user()->detail->first) }} {{ strtoupper(Auth::user()->detail->last) }}</p>
                    <p style="font-size:18px; font-weight:bold; margin-bottom:0px;">ADDRESS</p>
                    <p style="font-size:13px">{{ Auth::user()->detail->address }}<br/>{{ Auth::user()->detail->country }}</p>
                    <p style="font-size:18px; font-weight:bold; margin-bottom:0px;">PHONE</p>
                    <p style="font-size:13px">{{ Auth::user()->detail->phone }}</p>
                    <p style="font-size:18px; font-weight:bold; margin-bottom:0px;">EMAIL</p>
                    <p style="font-size:13px">{{ Auth::user()->detail->email }}</p>
                    <hr class="color">
                    <p style="font-size:18px; font-weight:bold;">CARRER SUMMARY</p>
                    <p style="font-size:13px; text-align:justify;">
                        {{ Auth::user()->detail->description }}
                    </p>
                    <hr class="color">
                    <p style="font-size:18px; font-weight:bold;">SKILLS</p>
                    @if(!empty(Auth::user()->skill))
                    @foreach(Auth::user()->skill as $skill)
                    <div class="row">
                        <div class="col-xs-7">
                            <p style="font-size:13px; margin-bottom:2px;">{{ $skill->skil }}</p>
                        </div>
                        <div class="col-xs-5" style="padding-left:5px; padding-right:5px; margin-left:-10px">
                            <div class="rate" style="margin-bottom:9px; max-width: {{ ($skill->level * 2) * 10 }}%;"></div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="col-xs-7">
                    <div class="row" style="margin-left:-2px">
                        <p style="font-size:18px; font-weight:bold; margin-top:10px;">EXPERIENCE</p>
                        @if(!empty(Auth::user()->work))
                        @foreach(Auth::user()->work as $work)
                        <div class="row">
                            <div class="col-xs-4">
                                <p style="font-size:13px">{{ strtoupper($work->start_month) }} {{ $work->start_year }} - {{ strtoupper($work->end_month) }} {{ $work->end_year }}</p>
                            </div>
                            <div class="col-xs-8">
                                <p style="font-size:13px; font-weight:bold; margin-bottom:1px;">{{ strtoupper($work->company) }}</p>
                                <p style="font-size:13px; margin-bottom:1px;">{{ $work->position }}</p>
                                <p style="font-size:13px; text-align: justify;">{{ $work->work_description }}</p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <hr>
                    <div class="row" style="margin-left:-2px">
                        <p style="font-size:18px; font-weight:bold;">EDUCATION</p>
                        @if(!empty(Auth::user()->education))
                        @foreach(Auth::user()->education as $edu)
                        <div class="row">
                            <div class="col-xs-4">
                                <p style="font-size:13px">{{ strtoupper($edu->start_month) }} {{ $edu->start_year }} - {{ strtoupper($edu->graduate_month) }} {{ $edu->graduate_year }}</p>
                            </div>
                            <div class="col-xs-8">
                                <p style="font-size:13px; font-weight:bold; margin-bottom:1px;">{{ $edu->institute }}</p>
                                <p style="font-size:13px">{{ $edu->qualification }}</p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <hr>
                    <div class="row" style="margin-left:-2px">
                        <p style="font-size:18px; font-weight:bold;">ACHIEVEMENT</p>
                        @if(!empty(Auth::user()->award))
                        @foreach(Auth::user()->award as $award)
                        <div class="row">
                            <div class="col-xs-4">
                                <p style="font-size:13px">{{ strtoupper($award->month) }} {{ $award->year }}</p>
                            </div>
                            <div class="col-xs-8">
                                <p style="font-size:13px; font-weight:bold; margin-bottom:1px;">{{ $award->name }}</p>
                                <p style="font-size:13px; text-align: justify;">{{ $award->description }}</p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
