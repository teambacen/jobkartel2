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
                border: 1px solid #F4CF58;
                background-color: #F4CF58;
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
        </style>
    </head>
    <body style="background: url({{$watermark}}); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row" style="background-color:#F4CF58">
                        <br>
                        <div class="col-xs-2">
                            <hr>
                        </div>
                        <div class="col-xs-8">
                            <center>
                                <div class="kotak">
                                    <p style="font-size:13px; color:white; text-align:center; position:relative; margin-top:7px;">{{ strtoupper(Auth::user()->cover->from_first) }} {{ strtoupper(Auth::user()->cover->from_last) }}</p>
                                </div>
                                <p style="font-size:10px; color:white; text-align:center; position:relative; margin-top:4px;">{{ strtoupper(Auth::user()->detail->position) }}</p>
                            </center>
                        </div>
                        <div class="col-xs-2">
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="row" style="background-color:#444545">
                    <div class="col-xs-12">
                        <div class="row" style="margin-top: 5px;">
                            <div class="col-xs-4">
                                <div class="row">
                                    <div class="col-xs-1 col-xs-offset-2" style="padding-left:1px; padding-right:1px;">
                                        <div class="round">
                                            <img src="{{asset('images/phone_wh.png')}}" class="img-responsive">
                                            <!--<div class="fa fa-phone icon-color" aria-hidden="true" style="margin-left:3px; margin-top:3px;"></div>-->
                                        </div>
                                    </div>
                                    <div class="col-xs-8">
                                        <p style="font-size:7px; color:white; margin-top:8px; margin-left:2px;">{{ Auth::user()->cover->from_phone }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="row">
                                    <div class="col-xs-1 col-xs-offset-1" style="padding-left:1px; padding-right:1px;">
                                        <div class="round2">
                                            <img src="{{asset('images/address_wh.png')}}" class="img-responsive">
                                            <!--<div class="fa fa-paper-plane-o icon-color" aria-hidden="true" style="margin-left:2px; margin-top:2px;"></div>-->
                                        </div>
                                    </div>
                                    <div class="col-xs-10">
                                        <p style="font-size:7px; color:white; margin-top:5px; margin-left:2px;">{{ Auth::user()->cover->from_street }},<br/>{{ Auth::user()->cover->from_city }},<br/>{{ Auth::user()->cover->from_state }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="row">
                                    <div class="col-xs-1 col-xs-offset-2" style="padding-left:1px; padding-right:1px;">
                                        <div class="round2">
                                            <img src="{{asset('images/email_wh.png')}}" class="img-responsive">
                                            <!--<div class="fa fa-envelope-o icon-color" aria-hidden="true" style="margin-left:2px; margin-top:0px;"></div>-->
                                        </div>
                                    </div>
                                    <div class="col-xs-8">
                                        <p style="font-size:7px; color:white; margin-top:8px; position:relative; margin-left:0px">{{ Auth::user()->cover->from_email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-3" style="margin-left:5px;">
                            <div class="row">
                                <center><img src="{{ $avatar }}" alt="letter" width="80" height="80" class="img-circle"></center>
                                <br>
                                <p style="font-size:9px; font-weight:bold; color:#F4CF58; text-align:right; margin-right:20px; margin-bottom:1px;">DATE</p>
                                <p style="font-size:9px; text-align:right; margin-right:20px;">{{ Auth::user()->cover->content_date }}</p>
                                <p style="font-size:9px; font-weight:bold; color:#F4CF58; text-align:right; margin-right:20px; margin-bottom:1px;">TO</p>
                                <p style="font-size:9px; text-align:right; margin-right:20px;">{{ Auth::user()->cover->to_before }}. {{ Auth::user()->cover->to_first }} {{ Auth::user()->cover->to_last }}</p>
                                <p style="font-size:9px; font-weight:bold; color:#F4CF58; text-align:right; margin-right:20px; margin-bottom:1px;">FROM</p>
                                <p style="font-size:9px; text-align:right; margin-right:20px;">{{ Auth::user()->cover->from_first }} {{ Auth::user()->cover->from_last }}</p>
                            </div>
                        </div>
                        <div class="col-xs-8" style="margin-left:2px;">
                            <div class="row">
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
