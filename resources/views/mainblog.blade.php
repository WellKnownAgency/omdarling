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
    <div style="font-size: 10px; float:right;">by <a style="text-decoration: none; color:black;" href="https://taraskim.com">Web Development</a></div>
    @include('partials/_js')
    <script>
      @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
      @endif
    </script>
  </body>
</html>
