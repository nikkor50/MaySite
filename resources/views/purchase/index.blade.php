@extends('layouts.app')

@section('content')

    <div class="container">
        
         <div class="jumbotron">
        <h2>  Purchase
            <a class="btn btn-lg btn-primary pull-right" href="/purchases/create" role="button">
                New Item</a>
        </h2>
    </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>created_at</th>
                <th>from</th>
                <th>Product</th>
                <th>price</th>
                <th>count</th>
                <th>amount</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            
            <tbody>
                @foreach($purchases as $purchase)
                    <tr>
                        <td> {{ $purchase->purchased_at }} </td>
                        <td> {{ $purchase->purchase_from }} </td>
                        <td> {{ $purchase->productname }} </td>
                        <td> {{ $purchase->JPY_price }} </td>
                        <td> {{ $purchase->purchase_count }} </td>
                        <td> {{ $purchase->JPY_amount }} </td>

                            <td>
                                <form action="{{ URL('/purchases/'.$purchase->id) }}" method="POST" style="display: inline;">
                                  <input name="_method" type="hidden" value="PATCH">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <button type="submit" class="btn btn-link align-right">Update</button>
                                </form>
                            </td>                        
                        
                            <td>
                                <form action="{{ URL('/purchases/'.$purchase->id) }}" method="POST" style="display: inline;">
                                  <input name="_method" type="hidden" value="DELETE">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <button type="submit" class="btn btn-link align-right">Delete</button>
                                </form>
                            </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection