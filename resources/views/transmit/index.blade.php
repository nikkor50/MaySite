@extends('layouts.app')

@section('content')


    <div class="container">
        
        <div class="jumbotron">
        <h2>  Transmit Code
            <a class="btn btn-lg btn-primary pull-right" href="/transmmits/create" role="button">
                Add New</a>
        </h2>
        </div>
    
        <div class="row">
        <div class="col-md-6 col-md-offset-2">

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Transmit Code</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($transmmits as $transmmit)
                        <tr>
                            <td> {{ $transmmit->transcode }} </td>
                            <td> {{ $transmmit->location }} </td>
                            
                            <td>
                                <form action="{{ URL('/transmmits/'.$transmmit->id) }}" method="POST" style="display: inline;">
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