@extends('statuses.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Status</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('statuses.index') }}"> Back</a>

        </div>

    </div>

</div>



@if ($errors->any())

<div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

        @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>

</div>

@endif



<form action="{{ route('statuses.update',$status->id) }}" method="POST">

    @csrf

    @method('PUT')



    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>User:</strong>

                <input type="text" name="user" value="{{ $status->user }}" class="form-control" placeholder="Username">

            <br>

            <label>
                <input type="radio" name="background" value="Patterned/Simple">
                Patterned/Simple
            </label>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Status:</strong>

                <textarea class="form-control" style="height:150px" name="status" placeholder="Status">{{ $status->status }}</textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>

@endsection