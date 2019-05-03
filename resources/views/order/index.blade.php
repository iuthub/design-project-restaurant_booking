@extends('layouts.master')

@section('content')
    <div class="order-header">
        @include('partials.header')
    </div>
    <div class="order">
        <div class="container">
            <h2>USG restaurant</h2>
            <p>Your order list</p>
            <table class="table table-striped myTable">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Food name</th>
                    <th>Number</th>
                    <th>Time</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->food->name }}</td>
                    <td>2</td>
                    <td>21.04.12</td>
                    <td>{{ $order->food->price }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <p class="lead float-right">Total price: {{ $totalPrice }}$</p>
        </div>
    </div>
@endsection
