@extends('orders.layout')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2> Show Order</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>

        </div>

    </div>

</div>



<div class="row">
    <!-- <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>ID:</strong>

            {{ $order->id }}

        </div>

    </div> -->


    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Name:</strong>

            {{ $order->name }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Payment:</strong>

            {{ $order->payment }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Type:</strong>

            {{ $order->type }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Additional:</strong>

            {{ $order->additional }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Background:</strong>

            {{ $order->background }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Message:</strong>

            {{ $order->message }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Reference:</strong>

            {{ $order->ref }}

        </div>

    </div>





</div>

@endsection