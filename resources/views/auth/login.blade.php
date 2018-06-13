{{-- @extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                          <label for="account" class="col-md-4 col-form-label text-md-right">{{ __('Account') }}</label>

                          <div class="col-md-6">
                              <input id="account" type="text" class="form-control{{ $errors->has('account') ? ' is-invalid' : '' }}" name="account" required autofocus>

                              @if ($errors->has('account'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('account') }}</strong>
                                  </span>
                              @endif
                          </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DreamSharing夢享</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bscss/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bscss/blue.css')}}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style media="screen">
      #topicon{
        margin-bottom: -7%;
      }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="image/loginregister.png" id="topicon">
    </div>

  <div class="login-box-body">
    <p class="login-box-msg">-進入夢享-</p>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group has-feedback">
        <input id="account" type="text" class="form-control{{ $errors->has('account') ? ' is-invalid' : '' }}" name="account" placeholder="帳號" required autofocus>

        @if ($errors->has('account'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('account') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="密碼" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">

        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">登入</button>
        </div>

      </div>
      <a href="{{url('register')}}" class="text-center">我沒有帳號</a>
    </form>
  </div>
</div>

<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%'
    });
  });
</script>
</body>
</html>
