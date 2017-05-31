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
            .bgColor{
                background-color: #3F4041;
                background-size: cover;
                padding-bottom: 30px;
                margin-right: 0px;
            }
            .box1{
                /*width: 190px;*/
                height: 38px;
                /*margin-top: 102px;*/
                background-color: #F4CF58;
                background: rgba(244, 207, 88, 0.7);
            }
            .icon-success {
                color: #F4CF58;
            }
        </style>
    </head>
    <body style="background: url({{$watermark}}); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-4" style="padding-left:0px">
                            <div class="">
                                <div class="" style="background-size: cover; height: 110px; width: 110px;">
                                    @if(Auth::user()->avatars)
                                    <img src="{{ $avatar }}"  alt="avatar" height="120" width="120" style="margin-left:0px; margin-top: 0px;" class="img-circle">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7" style="padding-left:0px">
                                <div class="row" >
                                    <div class="box1">
                                        <p style="font-size:16px; font-weight:bold; margin-left:15px; margin-bottom:0px;">{{ strtoupper(Auth::user()->detail->first) }} {{ strtoupper(Auth::user()->detail->last) }}</p>
                                        <p style="font-size:10px; margin-left:15px;">{{ strtoupper(Auth::user()->detail->position) }}</p>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <p style="font-size:10px; font-weight:bold;">COVER LETTER</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="row">
                                            <hr style="margin-top:5px; margin-bottom:17px; background-color:black; height:0px;">
                                        </div>
                                    </div>
                                </div>
                                <p style="font-size:10px">
                                    {{ Auth::user()->detail->description }}
                                </p>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="row">
                                            <div class="col-xs-2 col-xs-offset-2">
                                                <img src="{{asset('images/address.png')}}" class="img-responsive">
                                                <!--<div class="fa fa-paper-plane-o icon-success" aria-hidden="true" style="margin-left:38px"></div>-->
                                            </div>
                                            <div class="col-xs-8">
                                                <p style="font-size:8px; margin-left:-25px;">{{ strtoupper(Auth::user()->cover->from_street) }}, {{ strtoupper(Auth::user()->cover->from_city) }},<br/>{{ strtoupper(Auth::user()->cover->from_state) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="row">
                                            <div class="col-xs-2 col-xs-offset-2">
                                                <img src="{{asset('images/phone.png')}}" class="img-responsive">
                                                <!--<div class="fa fa-phone icon-success" aria-hidden="true" style="margin-left:38px"></div>-->
                                            </div>
                                            <div class="col-xs-2">
                                                <p style="font-size:8px; margin-left:-25px; margin-top:2px;">{{ Auth::user()->cover->from_phone }}</p>
                                            </div>
                                            <!-- <div class="row"> -->
                                            <div class="col-xs-2">
                                                <img src="{{asset('images/email.png')}}" class="img-responsive">
                                                <!--<div class="fa fa-envelope-o icon-success" aria-hidden="true" style="margin-right:2px"></div>-->
                                            </div>
                                            <div class="col-xs-2">
                                                <p style="font-size:8px; margin-left:-25px; margin-top:2px;">{{ Auth::user()->cover->from_email }}</p>
                                            </div>
                                            <!-- </div> -->
                                        </div>
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
                        <div class="col-xs-4">
                            <p style="font-size:9px; font-weight:bold; color:#F4CF58; margin-bottom:0px;">DATE</p>
                            <p style="font-size:9px">{{ Auth::user()->cover->content_date }}</p>
                            <p style="font-size:9px; font-weight:bold; color:#F4CF58; margin-bottom:0px;">TO</p>
                            <p style="font-size:9px">{{ Auth::user()->cover->to_before }}. {{ Auth::user()->cover->to_first }} {{ Auth::user()->cover->to_last }}</p>
                            <p style="font-size:9px; font-weight:bold; color:#F4CF58; margin-bottom:0px;">FROM</p>
                            <p style="font-size:9px">{{ Auth::user()->cover->from_first }} {{ Auth::user()->cover->from_last }}</p>
                        </div>
                        <div class="col-xs-7">
                            <div class="row">
                                <p style="font-size:11px; font-weight:bold; margin-bottom:1px;">Dear Sir/Madam,</p>
                                <br>
                                <p style="font-size:11px; margin-bottom:12px">
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
