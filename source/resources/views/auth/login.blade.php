
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css") }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/dist/css/AdminLTE.min.css")}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset("/bower_components/admin-lte/plugins/iCheck/square/blue.css") }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
  </script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page" style="background-color:#FFFFFF;">
<div class="login-box">
  <div class="login-logo">
    <img src="/images/leds.png"  href="/login" class="user-image" alt="User Image"/>
    <p><h5>Laboratório de Engenharia e Desenvolvimento de Sistemas</h5></p>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Bem Vindo(a) ao SISLeds</p>

    <form action="{{ route('login') }}" method="post" >
      {{ csrf_field() }}
      <div class="form-group has-feedback">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <input type="email" class="form-control" name="email" placeholder="Email">
            @if ($errors->has('email'))
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
      </div>
      <div class="form-group has-feedback">
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <input type="password" class="form-control" name="password" placeholder="Senha">
            @if ($errors->has('password'))
                <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} > Lembrar?
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-success btn-block btn-flat">Logar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <a href="{{ route('password.request') }}">Esqueci minha senha</a><br>

    

  </div>

</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.2.3.min.js") }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}"></script>
<!-- iCheck -->
<script src="{{ asset("/bower_components/admin-lte/plugins/iCheck/icheck.min.js") }}"></script>
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
