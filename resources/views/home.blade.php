@extends('master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Home</h3></div>
        <div class="panel-body">
            <p>This is a simple <a href="http://laravel.com">Laravel</a> app for tracking your roll up the rim wins.</p>
            <p>Make an <a href="{{url('register')}}">account</a> to try it out.</p>
        </div>
    </div>
@endsection
