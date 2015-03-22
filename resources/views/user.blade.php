@extends('master')

@section('content')
    @if(!is_null($user))
        <h1>{{ $user->name }}</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Size</th>
                <th>Winner</th>
                <th>Prize</th>
            </tr>
            </thead>
            <tbody>
            <p>
                You have bought <strong>{{{ sizeof($user->coffees)}}}</strong> coffees and won
                <strong>{{{ $user->getStats() }}}</strong> times.
            </p>
            @foreach($user->coffees as $coffee)
                <tr>
                    <td>{{$coffee['size']}}</td>
                    <td>{{$coffee['win'] == 1 ? 'Yes' : 'No'}}</td>
                    <td>{{$coffee['prize']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h1>User not found</h1>
    @endif



@endsection