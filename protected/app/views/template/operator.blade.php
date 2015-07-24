<!DOCTYPE HTML>
<html>
  <head>
    <title>Aplikasi data guru</title>
    {{Bootstrap::css('local', ['type' => 'text/css'])}}
    {{HTML::style('assets/css/cosmo.css')}}
    {{HTML::style('assets/css/sidebar.css')}}
    {{HTML::style('assets/css/jquery.dataTables.css')}}
    {{Bootstrap::js('local', ['type' => 'text/javascript'])}}
    {{HTML::script('assets/js/jquery.dataTables.min.js')}}
    {{HTML::script('assets/js/app.js')}}
  </head>
  <body>
    @include('template.menu_operator')
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
