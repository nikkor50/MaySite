@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Product Maintain </div>
                <div class="panel-body">
                    
                    {!! Form::open(['route'=> 'products.store', 'class'=> 'form-horizontal']) !!}
                        <div class="form-group">
                            {!! Form::label('typeid', 'Type ID', ['class'=> 'col-sm-2 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::text('typeid', 'Type ID', ['class'=> 'form-control']) !!}
                            </div>
                            
                            {!! Form::label('category', 'Category', ['class'=> 'col-sm-2 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::select('category', $categories, null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('productid', 'Product ID', ['class'=> 'col-sm-2 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::text('productid', null, ['class'=> 'form-control']) !!}
                            </div>
                            
                            {!! Form::label('productname', 'Product Name', ['class'=> 'col-sm-2 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::text('productname', null, ['class'=> 'form-control']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('mfg', 'MFG Vendor :', ['class'=> 'col-sm-2 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::text('mfg', null, ['class'=> 'form-control']) !!}
                            </div>
                            
                            {!! Form::label('specific', 'Specific :', ['class'=> 'col-sm-2 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::text('specific', null, ['class'=> 'form-control']) !!}
                            </div>
                        </div>
                                          
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-2">
                                 {!! Form::submit('Submit', ['class'=> 'btn btn-success']) !!}
                            </div>
                        </div>
                        
                    {!! Form::close() !!}
            
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
