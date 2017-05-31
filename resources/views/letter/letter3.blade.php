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
            .main {
                width: 345px;
                height: 600px;
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
                border-left: 4px solid #F4CF58;
            }
            .quarter2 {
                top: 40px;
                right: 10px;
                border-top: 4px solid #F4CF58;
                border-right: 4px solid #F4CF58;
            }
            .quarter3 {
                bottom: 0;
                left: 20px;
                border-bottom: 4px solid #F4CF58;
                border-left: 4px solid #F4CF58;
            }
            .quarter4 {
                bottom: 0;
                right: 10px;
                border-bottom: 4px solid #F4CF58;
                border-right: 4px solid #F4CF58;
            }
            .boxide{
                width: 200px;
                height: 75px;
                background-color: #F4CF58;
                margin-left: -12px;
                margin-top: -1px;
            }
            .crc{
                /*border: 1px solid black;*/
                border-radius: 100%;
                width: 21px;
                height: 21px;
                margin-top: 2px;
                margin-left: 2px;
            }
            .crc1{
                /*border: 1px solid black;*/
                border-radius: 100%;
                width: 21px;
                height: 21px;
                margin-top: 2px;
            }
            .crc2{
                /*border: 1px solid black;*/
                border-radius: 100%;
                width: 21px;
                height: 21px;
                margin-top: 2px;
            }
        </style>
    </head>
    <body style="background: url({{$watermark}}); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="main">
                        <div class="quarter quarter1"></div>
                        <div class="quarter quarter2"></div>
                        <div class="quarter quarter3"></div>
                        <div class="quarter quarter4"></div>
                        <div class="row" style="margin-left:5px">
                            <div class="col-xs-7">
                                <p style="font-size:25px; font-weight:bold; margin-bottom:-8px; margin-top:0px;">{{ strtoupper(Auth::user()->detail->first) }}</p>
                                <p style="font-size:25px; font-weight:bold; margin-bottom:-15px; margin-top:7px;">{{ strtoupper(Auth::user()->detail->last) }}</p>
                                <p style="font-size:10px; margin-top:15px;">{{ strtoupper(Auth::user()->detail->position) }}</p>
                                <div class="boxide">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                    <div class="crc">
                                                        <img src="{{asset('images/phone.png')}}" class="img-responsive">
                                                        <!--<i class="fa fa-phone" aria-hidden="true" style="margin-left:3px"></i>-->
                                                    </div>
                                                </div>
                                                <div class="col-xs-8">
                                                    <p style="font-size:8px; margin-top:8px;">{{ Auth::user()->cover->from_phone }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="row">
                                                <div class="col-xs-2" style="margin-left:-15px">
                                                    <div class="crc1">
                                                        <img src="{{asset('images/email.png')}}" class="img-responsive">
                                                        <!--<i class="fa fa-envelope-o" aria-hidden="true" style="margin-left:2px"></i>-->
                                                    </div>
                                                </div>
                                                <div class="col-xs-8">
                                                    <p style="font-size:8px; margin-top:8px;">{{ Auth::user()->cover->from_email }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <div class="crc">
                                                <img src="{{asset('images/address.png')}}" class="img-responsive">
                                                <!--<i class="fa fa-paper-plane-o" aria-hidden="true" style="margin-left:2px"></i>-->
                                            </div>
                                        </div>
                                        <div class="col-xs-10">
                                            <p style="font-size:8px; margin-top:8px;">{{ Auth::user()->cover->from_street }},<br/>{{ Auth::user()->cover->from_city }},<br/>{{ Auth::user()->cover->from_state }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-5" style="margin-top:-10px;">
                                <div class="row">
                                    <img src="{{ $avatar }}" alt="letter" height="120" width="120" class="img-circle">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <br>
                                            <p style="font-size:9px; font-weight:bold; color:#F4CF58; text-align:right; margin-right:20px; margin-bottom:1px;">DATE</p>
                                            <p style="font-size:9px; text-align:right; margin-right:20px;">{{ Auth::user()->cover->content_date }}</p>
                                            <p style="font-size:9px; font-weight:bold; color:#F4CF58; text-align:right; margin-right:20px; margin-bottom:1px;">TO</p>
                                            <p style="font-size:9px; text-align:right; margin-right:20px;">{{ Auth::user()->cover->to_before }}. {{ Auth::user()->cover->to_first }} {{ Auth::user()->cover->to_last }}</p>
                                            <p style="font-size:9px; font-weight:bold; color:#F4CF58; text-align:right; margin-right:20px; margin-bottom:1px;">FROM</p>
                                            <p style="font-size:9px; text-align:right; margin-right:20px;">{{ Auth::user()->cover->from_first }} {{ Auth::user()->cover->from_last }}</p>
                                        </div>
                                        <div class="col-xs-8" style="margin-left:-25px;">
                                            <br>
                                            <p style="font-size:11px; font-weight:bold;">Dear Sir/Madam,</p>
                                            <br>
                                            <p style="font-size:11px">
                                                {{ Auth::user()->cover->content_subject }}<br>
                                                <br>
                                                {!! Auth::user()->cover->content_body !!}
                                                <br>
                                            </p>
                                            <p style="font-size:11px; font-weight:bold; color:#F4CF58">Sincerely,</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
