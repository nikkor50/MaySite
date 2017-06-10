@extends('layouts.metro')


@section('login')

<div class="register">
<div class="row">

<div class="span12">
<div class="lrform">
<h5>Register for New Account</h5>
  <div class="form">
      <!-- Register form -->
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
          <!-- Name -->
          <div class="control-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="control-label" for="name">Name</label>
            <div class="controls">
              <input type="text" class="input-large" id="name" name="name" />
                  
                @if ($errors->has('name'))
                    <span class="help-block red">
                        {{ $errors->first('name') }}
                    </span>
                @endif
            </div>
          </div>   
          <!-- Email -->
          <div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="control-label" for="email">Email</label>
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
          <!-- ConfirmPassword -->
          <div class="control-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label class="control-label" for="password-confirm">Confirm Password</label>
            <div class="controls">
              <input type="password" class="input-large" id="password-confirm" name="password_confirmation" />
                @if ($errors->has('password_confirmation'))
                    <span class="help-block red">
                        {{ $errors->first('password_confirmation') }}
                    </span>
                @endif
            </div>
          </div>
          <!-- Checkbox -->
          <div class="control-group">
             <div class="controls">
                <label class="checkbox inline">
                   <input type="checkbox" id="inlineCheckbox1" value="agree" name="teamCondition"/> Agree with Terms and Conditions
                </label>
             </div>
          </div> 
          
          <!-- Buttons -->
          <div class="form-actions">
             <!-- Buttons -->
            <button type="submit" class="btn">Register</button>
            <button type="reset" class="btn">Reset</button>
          </div>
      </form>
             Already have an Account? <a href="{{ url('/login') }}">Login</a>
    </div> 
  </div>

</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
