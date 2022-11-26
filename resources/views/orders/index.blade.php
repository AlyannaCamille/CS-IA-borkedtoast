@extends('orders.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Orders</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-success" href="{{ route('orders.create') }}"> Create New Order</a>

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
        <th>Name</th>
        <th>Payment</th>
        <th>Type</th>
        <th>Additional</th>
        <th>Background</th>
        <th>Message</th>
        <th>Reference</th>


        <th width="280px">Action</th>

    </tr>

    @foreach ($orders as $order)

    <tr>

        <td>{{ ++$i }}</td>
        <!-- <td>{{ $order -> id}} </td> -->
        <td>{{ $order->name }}</td>
        <td>{{ $order->payment }}</td>
        <td>{{ $order->type }}</td>
        <td>{{ $order->additional }}</td>
        <td>{{ $order->background }}</td>
        <td>{{ $order->message }}</td>
        <td>{{ $order->ref }}</td>

        <td>

            <form action="{{ route('orders.destroy',$order->id) }}" method="POST">



                <a class="btn btn-info" href="{{ route('orders.show',$order->id) }}">Show</a>



                <a class="btn btn-primary" href="{{ route('orders.edit',$order->id) }}">Edit</a>



                @csrf

                @method('DELETE')



                <button type="submit" class="btn btn-danger">Delete</button>

            </form>

        </td>

    </tr>

    @endforeach

</table>



{!! $orders->links() !!}



@endsection