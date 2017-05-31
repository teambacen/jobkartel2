<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>{{$title}}</title>
        <style media="screen">
            .ql-align-justify{
                text-align: justify;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <img src="{{ $avatar }}" class="img-responsive" alt="letter">
                </div>
                <div class="col-xs-9">
                    <h4><strong>{{ Auth::user()->cover->from_before }}. {{ Auth::user()->cover->from_first }} {{ Auth::user()->cover->from_last }}</strong></h4>
                    <h4><strong>Address</strong></h4>
                    <p>{{ Auth::user()->cover->from_street }}, {{ Auth::user()->cover->from_city }}, {{ Auth::user()->cover->from_state }}</p>
                    <h4><strong>Email</strong></h4>
                    <p>{{ Auth::user()->cover->from_email }}</p>
                    <h4><strong>Phone</strong></h4>
                    <p>{{ Auth::user()->cover->from_phone }}</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-3">
                    <h4><strong>Date</strong></h4>
                    <p>{{ Auth::user()->cover->content_date }}</p>
                    <br>
                    <h4><strong>To</strong></h4>
                    <p>{{ Auth::user()->cover->to_before }}. {{ Auth::user()->cover->to_first }} {{ Auth::user()->cover->to_last }}</p>
                    <p>{{ Auth::user()->cover->to_department }} {{ Auth::user()->cover->to_company }}, {{ Auth::user()->cover->to_street }}, {{ Auth::user()->cover->to_postal }}, {{ Auth::user()->cover->to_city }}, {{ Auth::user()->cover->to_state }}</p>
                    <br>
                    <h4><strong>From</strong></h4>
                    <p>{{ Auth::user()->cover->from_first }} {{ Auth::user()->cover->from_last }}</p>
                </div>
                <div class="col-xs-9">
                    <h5><strong>Dear Sir/Madam</strong></h5>
                    <br>
                    <h5><strong>{{ Auth::user()->cover->content_subject }}</strong></h5>
                    <br>
                    <p>{!! Auth::user()->cover->content_body !!}</p>
                </div>
            </div>
        </div>
    </body>
</html>
