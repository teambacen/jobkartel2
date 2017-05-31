<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JobKartel Affiliate</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-2 affiliate-bar">
             <ul class="list-group">
              <!-- <li class="affiliate-aktif list-group-item" >
                 @if(count(Auth::user()->avatars) === 1)
                     <img src="{{ asset('/media/affiliates/'.Auth::user()->avatars->gambar) }}" width="50px" class="img-circle" alt="">
                 @else
                     <img src="http://lorempixel.com/50/50/" class="img-circle" alt="">
                 @endif
                   <a href="">{{ Auth::user()->name }}</a><a href="/affiliates/profile" class="text-right"> <i class="fa fa-cog" aria-hidden="true"></i></a>
               </li> -->
               <li class="list-group-item"><a href="{{ action('AffiliateController@index') }}">Utama</a></li>
               <li class="list-group-item"><a href="{{ action('AffiliateController@jualan') }}">Senarai Jualan</a></li>
               <li class="list-group-item"><a href="{{ action('AffiliateController@komisyen') }}">Rekod Komisyen</a></li>
               <li class="list-group-item"><a href="{{ action('AffiliateController@tool') }}">Alat Pemasaran</a></li>
               <li class="list-group-item">
                 <a href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                     Logout
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     {{ csrf_field() }}
                 </form>
               </li>
             </ul>
          </div>
          @yield('content')
      </div>
    </div>
    <script src="{{ asset('/js/app.js') }}" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/clipboard.js/1.6.0/clipboard.min.js"></script>
    <script type="text/javascript">
      var clipboard = new Clipboard('.bt');
      clipboard.on('success', function(e) {
        e.clearSelecttion();
      });
    </script>
  </body>
</html>
