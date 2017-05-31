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
            /*.boxBg{
              margin-top: 20px;
              width: 345px;
              height: 600px;
              border: 4px solid #F4CF58;
              border-left:350px solid #FFFFFF;
            }*/
            .main {
                width: 345px;
                height: 645px;
                margin-top: 20px;
            }
            .quarter {
                position: absolute;
                width: 50%;
                height: 50%;
            }
            .quarter1 {
                top: 110px;
                left: 20px;
                border-left: 4px solid {{ $color }};
                /*border: 4px solid #F4CF58;*/
                /*background-color: #F4CF58;*/
            }
            .quarter2 {
                top: 40px;
                right: 10px;
                border-top: 4px solid {{ $color }};
                border-right: 4px solid {{ $color }};
                /*border: 4px solid #F4CF58;*/
                /*background-color: #F4CF58;*/
            }
            .quarter3 {
                bottom: 0;
                left: 20px;
                border-bottom: 4px solid {{ $color }};
                border-left: 4px solid {{ $color }};
                /*border: 4px solid #F4CF58;*/
                /*background-color: #F4CF58;*/
            }
            .quarter4 {
                bottom: 0;
                right: 10px;
                /*border: 4px solid #F4CF58;*/
                border-bottom: 4px solid {{ $color }};
                border-right: 4px solid {{ $color }};
                /*background-color: #F4CF58;*/
            }
            .round{
                /*border: 1px solid #3F4041;*/
                border-radius: 100%;
                width: 20px;
                height: 20px;
            }
            .round1{
                /*border: 1px solid #3F4041;*/
                border-radius: 100%;
                width: 20px;
                height: 20px;
                margin-top: 5px;
            }
            .round2{
                /*border: 1px solid #3F4041;*/
                border-radius: 100%;
                width: 20px;
                height: 20px;
                margin-top: 5px;
            }
            .vertical {
                height: 145px;
                width: 10px;
                margin-top: 5px;
                border-left: 4px solid #3F4041;
            }
            .abc{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .abc:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
            }
            .abcd{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .abcd:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 90%;
            }
            .abcd1{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .abcd1:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 30%;
            }
            .abcd2{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .abcd2:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 70%;
            }
            .abcde{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .abcde:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 90%;
            }
            .abcde1{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .abcde1:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 30%;
            }
            .abcde2{
                margin-top: 4px;
                border-bottom: 4px solid #D8CED8;
            }
            .abcde2:before{
                content: '';
                display: block;
                border-bottom: 4px solid #293340;
                margin-bottom: -4px;
                max-width: 70%;
            }
        </style>
    </head>
    <body style="background:; background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="main">
                        <div class="quarter quarter1">
                            <div class="col-xs-12" style="margin-top:-90px">
                                <p style="font-size:25px; font-weight:bold; margin-bottom:-8px; margin-top:0px;">{{ strtoupper(Auth::user()->detail->first) }}</p>
                                <p style="font-size:25px; font-weight:bold; margin-bottom:-15px; margin-top:7px;">{{ strtoupper(Auth::user()->detail->last) }}</p>
                                <p style="font-size:13px; margin-top:15px;">{{ strtoupper(Auth::user()->detail->position) }}</p>
                                <p style="font-size:18px; font-weight:bold; margin-left:10px; margin-bottom:3px;">EXPERIENCE</p>
                                @if(!empty(Auth::user()->work))
                                @foreach(Auth::user()->work as $work)
                                <div class="row">
                                    <div class="col-xs-10">
                                        <p style="font-size:18px; font-weight:bold; margin-bottom:-2px; margin-left:10px;">{{ $work->company }}</p>
                                        <p style="font-size:13px; font-weight:bold; margin-bottom:-2px; margin-left:10px;">{{ $work->position }}</p>
                                        <p style="font-size:13px; font-weight:bold; margin-bottom:-2px; margin-left:10px;">{{ strtoupper($work->start_month) }} {{ $work->start_year }} - {{ strtoupper($work->end_month) }} {{ $work->end_year }}</p>
                                        <p style="font-size:13px; margin-left:10px; ">
                                            {{ $work->work_description }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                <p style="font-size:13px; font-weight:bold; margin-left:10px; margin-bottom:3px;">EDUCATION</p>
                                @if(!empty(Auth::user()->education))
                                @foreach(Auth::user()->education as $edu)
                                <div class="row">
                                    <div class="col-xs-10">
                                        <p style="font-size:18px; font-weight:bold; margin-bottom:-2px; margin-left:10px;">{{ $edu->qualification }}</p>
                                        <p style="font-size:13px; font-weight:bold; margin-bottom:-2px; margin-left:10px;">{{ $edu->institute }}</p>
                                        <p style="font-size:13px; font-weight:bold; margin-bottom:-2px; margin-left:10px;">{{ strtoupper($edu->start_month) }} {{ $edu->start_year }} - {{ strtoupper($edu->graduate_month) }} {{ $edu->graduate_year }}</p>
                                        <p style="font-size:13px; margin-left:10px;">
                                            {{ $edu->description }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                <br>
                                <p style="font-size:18px; font-weight:bold; margin-left:10px; margin-bottom:3px;">ACHIEVEMENT</p>
                                @if(!empty(Auth::user()->award))
                                @foreach(Auth::user()->award as $award)
                                <div class="row">
                                    <div class="col-xs-10">
                                        <p style="font-size:13px; font-weight:bold; margin-bottom:-2px; margin-left:10px;">{{ $award->name }}</p>
                                        <p style="font-size:13px; font-weight:bold; margin-bottom:-2px; margin-left:10px;">{{ strtoupper($award->month) }} {{ $award->year }}</p>
                                        <p style="font-size:13px; margin-left:10px;">
                                            {{ $award->description }}
                                        </p>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="quarter quarter2">
                            <div class="col-xs-12">
                                <div class="row" style="margin-top:-40px;">
                                    @if(Auth::user()->avatars)
                                    <img src="{{ $avatar }}" alt="avatar" height="130" width="130" style="margin-left:50px" class="img-circle">
                                    @endif
                                    <div class="row" style="margin-left:10px">
                                        <div class="col-xs-11">
                                            <p style="font-size:18px; font-weight:bold; margin-top:5px; margin-bottom:1px;">CAREER SUMMARY</p>
                                            <p style="font-size:13px">
                                                {{ Auth::user()->detail->description }}
                                            </p>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row" style="margin-left:10px">
                                        <div class="col-xs-11">
                                            <p style="font-size:18px; font-weight:bold; margin-bottom:3px;">CONTACT</p>
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <div class="round">
                                                        <img src="{{asset('images/address.png')}}" class="img-responsive">
                                                        <!--<i class="fa fa-home" aria-hidden="true" style="margin-left:3px"></i>-->
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <p style="font-size:13px; margin-top: 5px;">{{ Auth::user()->detail->address }},<br/>{{ Auth::user()->detail->country }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <div class="round1">
                                                        <img src="{{asset('images/phone.png')}}" class="img-responsive">
                                                        <!--<i class="fa fa-phone" aria-hidden="true" style="margin-left:3px"></i>-->
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <p style="font-size:13px; margin-top: 10px;">{{ Auth::user()->detail->phone }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <div class="round2">
                                                        <img src="{{asset('images/email.png')}}" class="img-responsive">
                                                        <!--<i class="fa fa-globe" aria-hidden="true" style="margin-left:3px"></i>-->
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <p style="font-size:13px; margin-top: 10px;">{{ Auth::user()->detail->email }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row" style="margin-left:10px">
                                        <div class="col-xs-11">
                                            <p style="font-size:18px; font-weight:bold; margin-bottom:4px;">SKILLS</p>
                                            @if(!empty(Auth::user()->skill))
                                            @foreach(Auth::user()->skill as $skill)
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <p style="font-size:7px; margin-bottom:2px;">{{ $skill->skil }}</p>
                                                </div>
                                                <div class="col-xs-6" style="margin-left:-30px">
                                                    <div class="abc" style="margin-bottom:9px; margin-top:2px; max-width: {{ ($skill->level * 2) * 10 }}%;"></div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quarter quarter3"></div>
                        <div class="quarter quarter4"></div>
                        <div class="row" style=" margin-left:5px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
