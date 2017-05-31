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
            .bgtests{
                width: 162px;
                height: 15px;
                position: relative;
                border: 15px solid #FFFFFF;
                background-color: #FFFFFF;
                border-radius: 0px 200px 200px 0px;
            }
            .tests{
                width: 160px;
                height: 20px;
                position: relative;
                border: 10px solid #D95727;
                background-color: #D95727;
                border-radius: 0px 180px 180px 0px;
            }
            .icon-c{
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <hr style="color:#3F4041; background-color:#3F4041; height:20px; margin-left:-20px; margin-right:-20px;">
                    <div class="bgtests" style="margin-left:-20px; margin-top:-45px;"></div>
                    <div class="tests" style="margin-left:-20px; margin-top:-25px;">
                        <p style="font-size:10px; font-weight:bold; color:white; margin-top:-8px">{{ strtoupper(Auth::user()->detail->position) }}</p>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            @if(Auth::user()->avatars)
                            <img src="{{ $avatar }}" class="img-circle" alt="avatar" width="100" height="100" style="margin-top:5px; margin-left:15px;">
                            @endif
                        </div>
                        <div class="col-xs-8" style="margin-top:20px">
                            <p style="font-size:12px; font-weight:bold; color:#D95727; margin-bottom:5px;">{{ strtoupper(Auth::user()->cover->from_first) }} {{ strtoupper(Auth::user()->cover->from_last) }}</p>
                            <p style="font-size:11px;">
                                {{ Auth::user()->detail->description }}
                        </div>
                    </div>
                    <div class="row">
                        <hr style="color:#D95727; background-color:#D95727; height:70px; margin-left:-15px; margin-right:-15px;">
                        <div class="row" style="margin-top:-80px">
                            <div class="col-xs-4" style="margin-left:20px">
                                <center>
                                    <img src="{{asset('images/phone_wh.png')}}" alt="icon5" style="height:20px; width:20px; margin-top:-10px">
                                    <p style="font-size:9px; font-size:bold; color:white; margin-top:-2px">{{ Auth::user()->cover->from_phone }}</p>
                                </center>
                            </div>
                            <div class="col-xs-4" style="margin-left:-20px">
                                <center>
                                    <img src="{{asset('images/address_wh.png')}}" alt="icon4" style="height:20px; width:20px; margin-top:-10px">
                                    <p style="font-size:9px; font-size:bold; color:white; margin-top:-2px">{{ Auth::user()->cover->from_street }},<br/>{{ Auth::user()->cover->from_city }},<br/>{{ Auth::user()->cover->from_state }}</p>
                                </center>
                            </div>
                            <div class="col-xs-4" style="margin-left:-20px">
                                <center>
                                    <img src="{{asset('images/email_wh.png')}}" alt="icon6" style="height:20px; width:20px; margin-top:-10px">
                                    <p style="font-size:9px; font-size:bold; color:white; margin-top:-2px">{{ Auth::user()->cover->from_email }}</p>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="row" style="margin-left:5px">
                                <br>
                                <p style="font-size:12px; font-weight:bold; margin-bottom:1px; text-align:left;">DATE</p>
                                <p style="font-size:11px; text-align:left;">{{ Auth::user()->cover->content_date }}</p>
                                <p style="font-size:12px; font-weight:bold; margin-bottom:1px; text-align:left;">TO</p>
                                <p style="font-size:11px; text-align:left;">{{ Auth::user()->cover->to_before }}. {{ Auth::user()->cover->to_first }} {{ Auth::user()->cover->to_last }}</p>
                                <p style="font-size:12px; font-weight:bold; margin-bottom:1px; text-align:left;">FROM</p>
                                <p style="font-size:11px; text-align:left;">{{ Auth::user()->cover->from_first }} {{ Auth::user()->cover->from_last }}</p>
                            </div>
                        </div>
                        <div class="col-xs-8">
                            <div class="row" style="margin-left:-30px; margin-right:10px;">
                                <p style="font-size:11px; font-weight:bold; margin-top:15px;">Dear Sir/Madam,</p>
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
