@extends('layouts.app')

@section('content')
<div class="login-box border">
    <div class="login-logo">
      <a href="#"><b>Admin</b>Meterkia</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required  autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required >

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">

          <div class="col-xs-8 m-auto">
            <button type="submit" class="btn btn-primary btn-block btn-flat">
                {{ __('Login') }}
            </button>

          </div><!-- /.col -->
        </div>
      </form>


  </div>
@endsection
