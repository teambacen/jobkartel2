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
            #bgSizeContainT2 {
                height: 70px;
                background-size: contain;
            }
        </style>
    </head>
    <body style="background: url({{$watermark}}); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row" style="background-color:#EBEBED; margin-top:20px; margin-bottom:20px;" id="bgSizeContainT2">
                        <div class="col-xs-8">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p style="font-size:16px; font-weight:bold; margin-left:80px; margin-top:15px; margin-bottom:2px;">{{ strtoupper(Auth::user()->cover->from_first) }} {{ strtoupper(Auth::user()->cover->from_last) }}</p>
                                    <p style="font-size:10px; margin-left:80px;">{{ strtoupper(Auth::user()->detail->position) }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <img src="{{ $avatar }}" alt="letter" width="100" height="100" class="img-circle">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4" style="background-color:#EBEBED; padding-top:10px; padding-bottom:50px; margin-left:5px; background-size:contain; width:112px; height:540px;">
                    <p style="font-size:10px; font-weight:bold;">PROFILE</p>
                    <p style="font-size:8px; font-weight:bold; margin-bottom:0px;">NAME</p>
                    <p style="font-size:8px">{{ strtoupper(Auth::user()->cover->from_before) }}. {{ strtoupper(Auth::user()->cover->from_first) }} {{ strtoupper(Auth::user()->cover->from_last) }}</p>
                    <p style="font-size:8px; font-weight:bold; margin-bottom:0px;">ADDRESS</p>
                    <p style="font-size:8px">{{ strtoupper(Auth::user()->cover->from_street) }}, {{ strtoupper(Auth::user()->cover->from_city) }},<br/>{{ strtoupper(Auth::user()->cover->from_state) }}</p>
                    <p style="font-size:8px; font-weight:bold; margin-bottom:0px;">PHONE</p>
                    <p style="font-size:8px">{{ Auth::user()->cover->from_phone }}</p>
                    <p style="font-size:8px; font-weight:bold; margin-bottom:0px;">EMAIL</p>
                    <p style="font-size:8px">{{ Auth::user()->cover->from_email }}</p>
                    <hr class="color">
                    <p style="font-size:9px; font-weight:bold; margin-bottom:0px;">Date</p>
                    <p style="font-size:9px">{{ Auth::user()->cover->content_date }}</p>
                    <br>
                    <p style="font-size:9px; font-weight:bold; margin-bottom:0px;">To</p>
                    <p style="font-size:9px">{{ Auth::user()->cover->to_before }}. {{ Auth::user()->cover->to_first }} {{ Auth::user()->cover->to_last }}</p>
                    <br>
                    <p style="font-size:9px; font-weight:bold; margin-bottom:0px;">From</p>
                    <p style="font-size:9px">{{ Auth::user()->cover->from_first }} {{ Auth::user()->cover->from_last }}</p>
                </div>
                <div class="col-xs-8">
                    <div class="row" style="margin-left:10px">
                        <p style="font-size:11px; font-weight:bold; margin-top:20px;">Dear Sir/Madam,</p>
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
    </body>
</html>
