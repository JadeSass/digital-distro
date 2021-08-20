<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '985335362200513');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=985335362200513&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
    <head>
        <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#000000">
        <title>Digital Distro | Making money online with the proven unusual business model called affiliate marketing that made me 1 million naira in 2 months</title>
        <meta name="twitter:description" content="making money online with the proven unusual business model called affiliate marketing that made me 1 million naira in 2 months">
        <meta property="og:type" content="website">
        <meta name="og:type" content="website">
        <meta property="og:title" content="making money online with the proven unusual business model called affiliate marketing that made me 1 million naira in 2 months">
        <meta name="description" content="making money online with the proven unusual business model called affiliate marketing that made me 1 million naira in 2 months">
        <meta name="twitter:card" content="summary">
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
        <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
        <link rel="stylesheet" href="{{asset('css/styles.min.css')}}">
    </head>
    <body>
        <div>
            <p style="color: rgb(255,255,255);background: rgba(255, 255, 255, 0);"><strong>Let Me Share the Secret Behind My Consistent 7 Figures Income&nbsp;</strong></p>
        </div>
        <div class="row" style="background: rgba(251,251,251,0);">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="background: rgba(251,251,251,0);"><div class="container text-center d-inline-flex d-md-flex justify-content-center align-items-center align-content-center justify-content-md-center align-items-md-center" style="background: rgba(255,255,255,0);padding: 9px 15px;"><img src="{{asset('img/gift.png')}}" class="img-fluid d-block justify-content-center align-items-center align-content-center">
            </div></div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="background: rgba(251,251,251,0);">
                <p style="color: rgb(255,215,6);font-size: 26px;"><strong>You'd get my affiliate marketing strategy resource pack for free which you can apply in your business and make money from it. All you need to do is join my mentorship bootcamp. <br><br> This field gives you access to begin your journey to 7 figures income. Fill in the field to get started.</strong></p>
            <form method="post" action="/affiliate/subscribe" enctype="multipart/form-data">
            {{ csrf_field() }}
                <input class="form-control form-control-lg d-block" type="text" placeholder="Enter Your Name " name="name" autofocus="" required="" minlength="6" maxlength="225"><br>
                <input class="form-control form-control-lg d-block" type="email" placeholder="Enter Your Email " name="email" autofocus="" required="" minlength="6" maxlength="225">
                <button class="btn btn-primary btn-block btn-lg" type="submit" style="border-style: solid;border-color: var(--blue);font-size: 19px;color: rgb(255,255,255);text-align: center;margin: 0px;margin-top: 23px;">Give me Access</button>
            </form>
            </div>
        </div>
        <!-- Scripts -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script src="{{asset('js/script.min.js')}}"></script>
    </body>
</html>
