@extends('layouts.metro')

@section('hero')
    <div class="row center">
      <div class="span12">
        <h2>Category Maintain Page</h2>
        <p>You can Add/Delete/Update category data at this page.</p>
        <hr />
      </div>  
    </div>
@endsection

@section('newcontent')

<div class="row">

<div class="span12">
<div class="lrform">
<h5>Add Category Item</h5>
  <div class="form">
      <!-- form -->
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/categories') }}">
        {{ csrf_field() }}
            
          <!-- description -->
            <div class="control-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="description" class="control-label"> Description</label>
                <div class="controls">
                  <input type="text" class="input-large" id="description" name="description"/>
                    @if ($errors->has('description'))
                        <span class="help-block red">
                            {{ $errors->first('description') }}
                        </span>
                    @endif              
                </div>
            </div>
                                                                             
          <!-- Buttons -->
          <div class="form-actions">
             <!-- Buttons -->
            <button type="submit" class="btn btn-primary">submit</button>
            <button type="reset" class="btn">Reset</button>
          </div>
      </form>

    </div> 
  </div>

@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Category Detail Maintain </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/categories') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label"> Category Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}">

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                  
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Submit
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
