
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin-Pengolahan Data A.L.I.M | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    {{HTML::style('assets/lte/bootstrap/css/bootstrap.min.css')}}
    <!-- Theme style -->
    {{HTML::style('assets/lte/dist/css/AdminLTE.min.css')}}
    <!-- iCheck -->
    {{HTML::style('assets/lte/plugins/iCheck/square/blue.css')}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="{{URL::to('login')}}"><b>PKS</b> PINANG</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Masukkan Username dan Password Anda</p>

        @if(Session::has('pesan'))
          {{Session::get('pesan')}}
        @endif

        
        {{Form::open(array('url'=>'authenticate','method'=>'post','class'=>'form-horizontal'))}}
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div><!-- /.col -->
          </div>
        {{Form::close()}}

        <a href="#">Lupa Password?</a><br>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    {{HTML::script('assets/lte/plugins/jQuery/jQuery-2.1.3.min.js')}}
    <!-- Bootstrap 3.3.2 JS -->
    {{HTML::script('assets/lte/bootstrap/js/bootstrap.min.js')}}
    <!-- iCheck -->
    {{HTML::script('assets/lte/plugins/iCheck/icheck.min.js')}}
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>