<!DOCTYPE html>
<html>
  <head>
    @include('partials/_head')
	</head>
  <body>
    @include('partials/_navblog')
    @yield('content')
    @include('partials/_footer')
    @include('partials/_js')
  </body>
</html>
