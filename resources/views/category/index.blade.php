@extends('layouts.app')

@section('content')


    <div class="container">
        
         <div class="jumbotron">
        <h2> Category 
            <a class="btn btn-lg btn-primary pull-right" href="/categories/create" role="button">
                Add New</a>
        </h2>
    </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Category Desc</th>
            </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td> {{ $category->description }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


@endsection