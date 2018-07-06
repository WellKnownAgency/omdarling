<!DOCTYPE html>
<html>
  <head>
    @include('mobile/partials/_head')
	</head>
  <body>
    @include('mobile/partials/_navblog')
    @yield('content')
    @include('mobile/partials/_subscription')
    @include('mobile/partials/_footer')
    <div style="font-size: 10px; float:right;">by <a style="text-decoration: none; color:black;" href="https://wknown.com/web-design">WellKnown Agency</a></div>
    @include('mobile/partials/_js')
  </body>
</html>
