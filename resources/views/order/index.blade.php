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
                <tr>
                    <td>1</td>
                    <td>Lagman</td>
                    <td>2</td>
                    <td>21.04.12</td>
                    <td>$15</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lagman</td>
                    <td>2</td>
                    <td>21.04.12</td>
                    <td>$15</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lagman</td>
                    <td>2</td>
                    <td>21.04.12</td>
                    <td>$15</td>
                </tr>
                </tbody>
            </table>
            <p class="lead float-right">Total price: 45$</p>
        </div>
    </div>
@endsection
