<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/mmain.css">
<link rel="stylesheet" href="/css/toast.css">
<link rel="stylesheet" href="/web-fonts-with-css/css/fontawesome-all.css">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans|Roboto" rel="stylesheet">

<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta property="og:image" content="" />
<meta name="csrf-token" content="{{ csrf_token() }}"

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120264770-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120264770-1');
</script>

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
  fbq('init', '246678756248244');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=246678756248244&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
