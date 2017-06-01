@extends('layouts.app')

@section('content')


    <div class="container">
        
         <div class="jumbotron">
        <h2>  Transmit Code
            <a class="btn btn-lg btn-primary pull-right" href="/transmmits/create" role="button">
                Add New</a>
        </h2>
    </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Transmit Code</th>
                <th>Location</th>
            </tr>
            </thead>
            <tbody>
                @foreach($transmmits as $transmmit)
                    <tr>
                        <td> {{ $transmmit->transcode }} </td>
                        <td> {{ $transmmit->location }} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


@endsection