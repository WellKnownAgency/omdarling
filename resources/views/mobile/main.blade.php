<!DOCTYPE html>
<html>
  <head>
    @include('mobile/partials/_head')
	</head>
  <body>
    @include('mobile/partials/_nav')
    @include('mobile/partials/_alert')
    @yield('content')
    @include('mobile/partials/_subscription')
    @include('mobile/partials/_footer')
    <div style="font-size: 10px; float:right; margin-right:15px;">by <a style="text-decoration: none; color:black;" href="https://wknown.com/web-design" target="_blank">WellKnown Agency</a></div>
    @include('mobile/partials/_js')
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
