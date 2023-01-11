@extends('statuses.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Display Status</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('statuses.create') }}"> Create New Status</a>

        </div>

    </div>

</div>



@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif



<table class="table table-bordered">

    <tr>

        <th>ID</th>

        <th>Username</th>

        <th>Status</th>

        <th width="280px">Action</th>

    </tr>

    @foreach ($statuses as $status)

    <tr>

        <td>{{ ++$i }}</td>

        <td>{{ $status->user}}</td>

        <td>{{ $status->status }}</td>

        <td>

            <form action="{{ route('statuses.destroy',$status->id) }}" method="POST">



                <a class="btn btn-info" href="{{ route('statuses.show',$status->id) }}">Show</a>



                <a class="btn btn-primary" href="{{ route('statuses.edit',$status->id) }}">Edit</a>



                @csrf

                @method('DELETE')



                <button type="submit" class="btn btn-danger">Delete</button>

            </form>

        </td>

    </tr>

    @endforeach

</table>



{!! $statuses->links() !!}



@endsection