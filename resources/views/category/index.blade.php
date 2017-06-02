@extends('layouts.app')

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
                    <th>Action</th>
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
                                  <button type="submit" class="btn btn-danger">Delete</button>
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