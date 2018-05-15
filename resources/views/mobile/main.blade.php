<!DOCTYPE html>
<html>
  <head>
    @include('mobile/partials/_head')
	</head>
  <body>
    @include('mobile/partials/_nav')
    @yield('content')
    @include('mobile/partials/_subscription')
    @include('mobile/partials/_footer')
    @include('mobile/partials/_js')
  </body>
</html>
