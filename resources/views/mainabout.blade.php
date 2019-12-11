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
    @include('partials/_form')
    @include('partials/_footer')
    <div style="font-size: 10px; float:right;  margin-right:20px;">by <a style="text-decoration: none; color:black;" href="https://taraskim.com" target="_blank">Web Development</a></div>
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
