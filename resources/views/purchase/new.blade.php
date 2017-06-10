@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Purchase </div>
                <div class="panel-body">
                    
                    {!! Form::open(['route'=> 'purchases.store', 'class'=> 'form-horizontal']) !!}
                    
                        <div class="form-group">
                            {!! Form::label('purchased_at', 'Created_at :', ['class'=> 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('purchased_at', null, ['class'=> 'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('productid', 'Product ID :', ['class'=> 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('productid', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('productname', 'Product Name :', ['class'=> 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('productname', null, ['class'=> 'form-control']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('JPY_price', 'Price (JPY) :', ['class'=> 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::number('JPY_price', null, ['class'=> 'form-control']) !!}
                            </div>
                        </div>                        
                        
                        <div class="form-group">
                            {!! Form::label('purchase_count', 'Product ID :', ['class'=> 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::number('purchase_count', null, ['class'=> 'form-control']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('exchange', 'Exchange:', ['class'=> 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::number('exchange', null, ['class'=> 'form-control']) !!}
                            </div>
                        </div>            

                        <div class="form-group">
                            {!! Form::label('purchase_from', 'Purchase From :', ['class'=> 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('purchase_from', null, ['class'=> 'form-control']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('payment_type', 'Payment Type :', ['class'=> 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('payment_type', null, ['class'=> 'form-control']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('shipping_cost', 'Shipping Cost :', ['class'=> 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::number('shipping_cost', 0, ['class'=> 'form-control']) !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            {!! Form::label('shipping_type', 'Shipping Type :', ['class'=> 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('shipping_type', null, ['class'=> 'form-control']) !!}
                            </div>
                        </div> 
                        
                        <div class="form-group">
                            {!! Form::label('flag', 'Flag :', ['class'=> 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('flag', null, ['class'=> 'form-control']) !!}
                            </div>
                        </div>       
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
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
