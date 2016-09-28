@extends('master')
@section('content')

<div class="container" id="login-page">

      <form class="form-signin" role="form" method="post" action="{{ route('auth.login') }}">
        <h3 class="form-signin-heading">Please sign in</h3>
        <div class="form-gruop{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="sr-only">Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
            @if($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="sr-only">Password</label>
        <input type="password" name=="password" class="form-control" placeholder="Password" required>
        @if($errors->has('password'))
            <span class="help-block">{{ $errors->first('password') }}</span>
        @endif
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Log in">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>

    </div> <!-- /container -->


@endsection