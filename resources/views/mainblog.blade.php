<!DOCTYPE html>
<html>
  <head>
    @include('partials/_headblog')
	</head>
  <body>
    @include('partials/_navblog')
    <div id="app">
    @include('partials/_alert')
    @yield('content')
    </div>
    @include('partials/_subscription')
    @include('partials/_footer')
    @include('partials/_js')
  </body>
</html>
