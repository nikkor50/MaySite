@extends('layouts.app')

@section('content')

    <div class="container">
        
         <div class="jumbotron">
        <h2>  Product  Stock
            <a class="btn btn-lg btn-primary pull-right" href="/products/create" role="button">
                New Item</a>
        </h2>
    </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Type ID</th>
                <th>Category</th>
                <th>Product</th>
                <th>Name</th>
                <th>Product ID</th>
                <th>MFG</th>
                <th>Specific</th>
                <th>Stock</th>
            </tr>
            </thead>
            
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td> {{ $product->typeid }} </td>
                        <td> {{ $product->category }} </td>
                        <td> {{ $product->productname }} </td>
                        <td> {{ $product->showname }} </td>
                        <td> {{ $product->productid }} </td>
                        <td> {{ $product->mfg }} </td>
                        <td> {{ $product->specific }} </td>
                        <td> {{ $product->stock }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection