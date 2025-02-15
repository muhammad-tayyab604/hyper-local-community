<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>New Project</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css')}}">
</head>
<style>
    body {
    background-image: url('logo/logo.svg');
    background-size: cover;

    background-repeat: no-repeat
}
.logo_login{
  display: flex;
  justify-content: center;
    align-items: center;
}
.card
{
  background-color: #7fe9ffd9;
}
.card-body{
  background-color: #7fe9ff87;
}
.login-card-body .input-group .input-group-text, .register-card-body .input-group .input-group-text {
    background-color: black;
    border-bottom-right-radius: 0.25rem;
    border-left: 0;
    border-top-right-radius: 0.25rem;
    color: #777;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>
<body class="hold-transition login-page">
    {{-- <h1>Project Name</h1> --}}

<div class="login-box">
  <div class="login-logo">
    {{-- <a href="{{ route('dashboard')}}"></a> --}}
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="logo_login">
    <img src="{{ asset('logo/whitelogo.svg') }}" height="100px" width="120px" alt="">
    </div>

    <div class="card-body login-card-body">
      <h4 class="login-box-msg">Admin Login</h4>

      <form method="POST" action="{{ route('login') }}">
          @csrf
          <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
        <div class="input-group mb-3">
          <input type="email"   name="email" class="form-control" placeholder="Email" required autofocus autocomplete="username" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password"  name="password"
          required autocomplete="current-password">

            {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
          </div>

        <div class="col-4 float-right">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
      </form>

      {{-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> --}}
      <!-- /.social-auth-links -->

      {{-- <p class="mb-1">
        <a href="{{ route('password.request') }}">I forgot my password</a>
      </p> --}}
      {{-- <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
      </p> --}}
    </div>

    <!-- /.login-card-body -->
  </div>
</div>
{{-- <div class="block mt-4">
  <label for="remember_me" class="inline-flex items-center">
      <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
      <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
  </label>
</div> --}}
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
