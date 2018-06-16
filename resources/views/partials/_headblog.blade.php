<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/web-fonts-with-css/css/fontawesome-all.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">

<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="csrf-token" content="{{ csrf_token() }}"

<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="@yield('title')">
<meta itemprop="description" content="@yield('description')">
<meta itemprop="image" content="@yield('image')">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="">
<meta name="twitter:title" content="@yield('title')">
<meta name="twitter:description" content="@yield('description')">
<meta name="twitter:creator" content="">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="@yield('image')">

<!-- Open Graph data -->
<meta property="og:title" content="@yield('title')" />
<meta property="og:type" content="article" />
<meta property="og:url" content="{{url()->current()}}" />
<meta property="og:image" content="@yield('image')" />
<meta property="og:description" content="@yield('description')" />
<meta property="og:site_name" content="OmDarling" />
<meta property="article:published_time" content="@yield('created')" />
<meta property="article:modified_time" content="@yield('updated')" />
<meta property="article:section" content="@yield('category')" />
<meta property="article:tag" content="@yield('keywords')" />
<meta property="fb:admins" content="" />


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120264770-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120264770-1');
</script>
