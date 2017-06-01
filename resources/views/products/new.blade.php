@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Product Maintain </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/products') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="typeid" class="col-md-4 control-label">Type ID</label>
                            <div class="col-md-6">
                                <input id="typeid" type="text" class="form-control" name="typeid" value="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="category" class="col-md-4 control-label">Category</label>
                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control" name="category" value="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="productname" class="col-md-4 control-label">Product Name</label>
                            <div class="col-md-6">
                                <input id="productname" type="text" class="form-control" name="productname" value="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="productid" class="col-md-4 control-label">Product ID</label>
                            <div class="col-md-6">
                                <input id="productid" type="text" class="form-control" name="productid" value="">
                            </div>
                        </div>     
                        
                        <div class="form-group">
                            <label for="mfg" class="col-md-4 control-label">MFG</label>
                            <div class="col-md-6">
                                <input id="mfg" type="text" class="form-control" name="mfg" value="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="specific" class="col-md-4 control-label">Specific</label>
                            <div class="col-md-6">
                                <input id="specific" type="text" class="form-control" name="specific" value="">
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
