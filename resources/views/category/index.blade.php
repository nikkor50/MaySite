@extends('layouts.metro')

@section('hero')
    <div class="row center">
      <div class="span12">

        <div class="bor"></div>

        <h2>Category Maintain Page</h2>
        <p>You can Add/Delete/Update category data at this page.</p>
        <a class="btn btn-lg btn-primary pull-right" href="{{ URL('/categories/create') }}" role="button">
                Add New</a>
        <div class="bor"></div>
        <hr />
      </div>  
    </div>
    

@endsection


@section('newcontent')
<div class="row">
<div class="col-md-6 col-md-offset-2">
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Description</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>

    </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            <tr>
                <td> {{ $category->id }} </td>
                <td> {{ $category->description }} </td>
                <td></td>
                <td></td>
                <td>
                    <form action="{{ URL('/categories/'.$category->id) }}" method="POST" style="display: inline;">
                      <input name="_method" type="hidden" value="DELETE">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button type="submit" class="btn btn-link">Delete</button>
                    </form>
                </td>
                <td>
                    <form action="{{ URL('/categories/'.$category->id) }}" method="POST" style="display: inline;">
                      <input name="_method" type="hidden" value="PATCH">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button type="submit" class="btn btn-link align-right">Update</button>
                    </form>
                </td>  
                
            </tr>
            
        @endforeach
    </tbody>
</table>
</div>
</div>


@endsection



@section('content')


    <div class="container">
        
        <div class="jumbotron">
        <h2> Category 
            <a class="btn btn-lg btn-primary pull-right" href="/categories/create" role="button">
                Add New</a>
        </h2>
        </div>

        <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Category Desc</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td> {{ $category->description }} </td>
                            
                            <td>
                                <form action="{{ URL('/categories/'.$category->id) }}" method="POST" style="display: inline;">
                                  <input name="_method" type="hidden" value="DELETE">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <button type="submit" class="btn btn-link">Delete</button>
                                </form>
                            </td>
                            
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>

    </div>


@endsection