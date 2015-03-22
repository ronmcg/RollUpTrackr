@extends('master')

@section('content')
    <h1>Add Coffee</h1>
    <form class="form-inline" role="form" method="POST" action="{{ url('/add') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-2">
                <label>
                    <strong>Size: </strong> <br/>
                    <input type="radio" name="size" value="Small" > Small <br/>
                    <input type="radio" name="size" value="Medium" checked> Medium <br/>
                    <input type="radio" name="size" value="Large" > Large <br/>
                    <input type="radio" name="size" value="X-Large" > X-Large <br/>
                </label>
            </div>

            <div class="col-md-2">
                <label>
                    <strong>Winner: </strong><br/>
                    <input type="radio" name="win" value="0" checked> No <br/>
                    <input type="radio" name="win" value="1" > Yes <br/>
                </label>
            </div>

            <div class="col-md-2">
                <label>
                    <strong>Prize: </strong><br/>
                    <input type="radio" name="prize" value="Please play again" checked> Please play again <br/>
                    <input type="radio" name="prize" value="Coffee"> Coffee <br/>
                    <input type="radio" name="prize" value="Donut" > Donut <br/>

                </label>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Add
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection