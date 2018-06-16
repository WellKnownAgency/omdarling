<!DOCTYPE html>
<html>
  <head>
    @include('partials/_head')
	</head>
  <body>
    @include('partials/_navblog')
    <div id="app">
    @yield('content')
    </div>
    @include('partials/_subscription')
    @include('partials/_footer')
    @include('partials/_js')
  </body>
</html>
