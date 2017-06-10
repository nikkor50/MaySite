@extends('layouts.metro')

@section('login')

<div class="register">
<div class="row">

<div class="span12">
<div class="lrform">
<h5>Login to your Account</h5>
  <div class="form">
      <!-- Login form -->
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            
          <!-- email -->
          <div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="control-label" for="email">E-Mail</label>
            <div class="controls">
              <input type="text" class="input-large" id="email" name="email" value="{{ old('email') }}"/>
                @if ($errors->has('email'))
                    <span class="help-block red">
                        {{ $errors->first('email') }}
                    </span>
                @endif              
            </div>
          </div>
          <!-- Password -->
          <div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label" for="password">Password</label>
            <div class="controls">
              <input type="password" class="input-large" id="password" name="password" />
                @if ($errors->has('password'))
                    <span class="help-block red">
                        {{ $errors->first('password') }}
                    </span>
                @endif
            </div>
          </div>
          
          <div class="control-group">
             <div class="controls">
                <label class="checkbox">
                <input type="checkbox" name="remember"/> Remember me
                </label>
             </div>
          </div>                                                                               
          <!-- Buttons -->
          <div class="form-actions">
             <!-- Buttons -->
            <button type="submit" class="btn">Login</button>
            <button type="reset" class="btn">Reset</button>
            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
          </div>
      </form>
             Don't have Account? <a href="register.html">Register</a>
    </div> 
  </div>

</div>


@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block red">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block red">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
