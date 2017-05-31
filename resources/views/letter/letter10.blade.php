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
            .round{
                border: 1px solid #EC6160;
                border-radius: 100%;
                background-color: #EC6160;
                width: 75px;
                height: 75px;
                margin-top: 2px;
            }
            .icon-blue{
                color: #7BC9EE;
            }
            .icon-pink{
                color: #EC6160;
            }
            .icon-yellow{
                color: #FFEE94;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-6">
                            @if(Auth::user()->avatars)
                            <img src="{{ $avatar }}" class="img-circle" alt="avatar" height="110" width="110" style="margin-top:30px; margin-left:75px">
                            @endif
                        </div>
                        <div class="col-xs-6">
                            <p style="font-size:11px; font-weight:bold;color:#EC6160; margin-top:15px; margin-left:5px">{{ strtoupper(Auth::user()->cover->from_first) }} {{ strtoupper(Auth::user()->cover->from_last) }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <br>
                            <br>
                            <br>
                            <p style="font-size:13px; font-weight:bold; margin-top:5px; color:#EC6160; text-align:right;">{{ strtoupper(Auth::user()->detail->position) }}</p>
                            <div class="row">
                                <hr style="color:#EC6160; background-color:#EC6160; height:2px; margin-left:20px; margin-right:12px; margin-top:-7px;">
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="{{asset('images/phone.png')}}" alt="icon2" style="height:18px; width:18px; margin-left:20px">
                                </div>
                                <div class="col-xs-9">
                                    <p style="font-size:8px; margin-top:5px; margin-left:10px">{{ Auth::user()->cover->from_phone }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="{{asset('images/email.png')}}" alt="icon3" style="height:18px; width:18px; margin-left:20px">
                                </div>
                                <div class="col-xs-9">
                                    <p style="font-size:8px; margin-top:5px; margin-left:10px">{{ Auth::user()->cover->from_email }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="{{asset('images/address.png')}}" alt="icon1" style="height:18px; width:18px; margin-left:20px">
                                </div>
                                <div class="col-xs-9">
                                    <p style="font-size:8px; margin-left:10px">{{ Auth::user()->cover->from_street }}, {{ Auth::user()->cover->from_city }},<br/>{{ Auth::user()->cover->from_state }}</p>
                                </div>
                            </div>
                            <div class="row" style="margin-top:10px">
                                <br>
                                <p style="font-size:9px; font-weight:bold; color:#EC6160; text-align:right; margin-right:20px; margin-bottom:1px;">DATE</p>
                                <p style="font-size:9px; text-align:right; margin-right:20px;">{{ Auth::user()->cover->content_date }}</p>
                                <p style="font-size:9px; font-weight:bold; color:#EC6160; text-align:right; margin-right:20px; margin-bottom:1px;">TO</p>
                                <p style="font-size:9px; text-align:right; margin-right:20px;">{{ Auth::user()->cover->to_before }}. {{ Auth::user()->cover->to_first }} {{ Auth::user()->cover->to_last }}</p>
                                <p style="font-size:9px; font-weight:bold; color:#EC6160; text-align:right; margin-right:20px; margin-bottom:1px;">FROM</p>
                                <p style="font-size:9px; text-align:right; margin-right:20px;">{{ Auth::user()->cover->from_first }} {{ Auth::user()->cover->from_last }}</p>

                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="row" style="margin-right:5px; margin-left:5px">
                                <br>
                                <p style="font-size:11px; font-weight:bold;">Dear Sir/Madam,</p>
                                <br>
                                <p style="font-size:11px">
                                    {{ Auth::user()->cover->content_subject }}<br>
                                    <br>
                                    {!! Auth::user()->cover->content_body !!}
                                    <br>
                                </p>
                                <p style="font-size:11px; font-weight:bold;">Sincerely,</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
