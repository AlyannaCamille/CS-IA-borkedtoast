@extends('orders.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Order</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>

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



<form action="{{ route('orders.update',$order->id) }}" method="POST">

    @csrf

    @method('PUT')



    <div class="row">

        <!-- <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Id:</strong>

                <input type="text" name="id" value="{{ $order->id }}" class="form-control" placeholder="Id">

            </div>

        </div> -->

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                <input type="text" name="name" value="{{ $order->name }}" class="form-control" placeholder="Name">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Payment:</strong>

                <input type="text" name="payment" value="{{ $order->payment }}" class="form-control" placeholder="Payment">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Type:</strong>

                <input type="text" name="type" value="{{ $order->type }}" class="form-control" placeholder="Type">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Additional:</strong>

                <input type="text" name="additional" value="{{ $order->additional }}" class="form-control" placeholder="Additional">


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Background:</strong>

                <input type="text" name="background" value="{{ $order->background }}" class="form-control" placeholder="Background">


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Message:</strong>

                <input type="text" name="message" value="{{ $order->message }}" class="form-control" placeholder="Message">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Reference:</strong>

                <input type="text" name="ref" value="{{ $order->ref}}" class="form-control" placeholder="Reference">


            </div>

        </div>




        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>

@endsection