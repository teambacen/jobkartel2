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
            .trapezium{
                box-sizing: content-box;
                width: 140px;
                height: 0;
                border: 40px solid rgba(0,0,0,0);
                border-top: 50px solid #F4CF58;
/*                border-bottom: 0 solid;
                margin-top: -21px;*/
            }
            .bul{
                /*border: 1px solid black;*/
                border-radius: 100%;
                width: 21px;
                height: 21px;
                margin-top: 2px;
                margin-left: 2px;
            }
            .bul1{
                /*border: 1px solid black;*/
                border-radius: 100%;
                width: 21px;
                height: 21px;
                margin-top: 2px;
                margin-left: 2px;
            }
            .bul2{
                /*border: 1px solid black;*/
                border-radius: 100%;
                width: 21px;
                height: 21px;
                margin-top: 2px;
                margin-left: 2px;
            }
        </style>
    </head>
    <body style="background: url({{$watermark}}); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <hr style="color:#F4CF58; background-color:#F4CF58; height:2px; margin-left:-20px; margin-right:-20px;">
                        <center>
                            <div class="trapezium">
                                <div class="row">
                                    <p style="font-size:17px; font-weight:bold; margin-top:-45px; margin-bottom:0px;">{{ strtoupper(Auth::user()->cover->from_first) }} {{ strtoupper(Auth::user()->cover->from_last) }}</p>
                                    <p style="font-size:10px; font-weight:bold;">{{ strtoupper(Auth::user()->detail->position) }}</p>
                                </div>
                            </div>
                        </center>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="row">
                                <img src="{{ $avatar }}" alt="letter" height="90" width="90" style="margin-left:95px; margin-top:-40px;" class="img-circle">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="row">
                                <div class="col-xs-1" style="margin-left:-10px; margin-top:-30px;">
                                    <div class="bul">
                                        <img src="{{asset('images/phone.png')}}" class="img-responsive">
                                        <!--<i class="fa fa-phone" aria-hidden="true" style="margin-left:4px"></i>-->
                                    </div>
                                    <div class="bul1">
                                        <img src="{{asset('images/address.png')}}" class="img-responsive">
                                        <!--<i class="fa fa-paper-plane-o" aria-hidden="true" style="margin-left:2px"></i>-->
                                    </div>
                                    <div class="bul2">
                                        <img src="{{asset('images/email.png')}}" class="img-responsive">
                                        <!--<i class="fa fa-envelope-o" aria-hidden="true" style="margin-left:2px"></i>-->
                                    </div>
                                </div>
                                <div class="col-xs-8" style="margin-top:-23px">
                                    <p style="font-size:9px">{{ Auth::user()->cover->from_phone }}</p>
                                    <p style="font-size:9px; margin-bottom:4px;">{{ Auth::user()->cover->from_street }}, {{ Auth::user()->cover->from_city }},<br/>{{ Auth::user()->cover->from_state }}</p>
                                    <p style="font-size:9px">{{ Auth::user()->cover->from_email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1-12">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="row" style="margin-top:10px">
                                        <p style="font-size:9px; font-weight:bold; color:#F4CF58; text-align:right; margin-right:20px; margin-bottom:1px;">DATE</p>
                                        <p style="font-size:9px; text-align:right; margin-right:20px;">{{ Auth::user()->cover->content_date }}</p>
                                        <p style="font-size:9px; font-weight:bold; color:#F4CF58; text-align:right; margin-right:20px; margin-bottom:1px;">TO</p>
                                        <p style="font-size:9px; text-align:right; margin-right:20px;">{{ Auth::user()->cover->to_before }}. {{ Auth::user()->cover->to_first }} {{ Auth::user()->cover->to_last }}</p>
                                        <p style="font-size:9px; font-weight:bold; color:#F4CF58; text-align:right; margin-right:20px; margin-bottom:1px;">FROM</p>
                                        <p style="font-size:9px; text-align:right; margin-right:20px;">{{ Auth::user()->cover->from_first }} {{ Auth::user()->cover->from_last }}</p>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="row" style="margin-top:10px; margin-right:15px">
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
            </div>
        </div>
    </body>
</html>
