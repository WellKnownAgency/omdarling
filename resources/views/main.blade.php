<!DOCTYPE html>
<html>
  <head>
    @include('partials/_head')
	</head>
  <body>
    @include('partials/_nav')
    <div id="app">
    @include('partials/_alert')
    @yield('content')
    </div>
    @include('partials/_subscription')
    @include('partials/_footer')
    <div style="font-size: 10px; float:right;">by <a style="text-decoration: none; color:black;" href="https://wknown.com/web-design">WellKnown Agency</a></div>
    @include('partials/_js')
  </body>
</html>
