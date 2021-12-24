@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('images/'. $products['gallery'])}}" alt="" class="src">
        </div>
        <div class="col-sm-6">
            <a href="/">
                Go Back
            </a>
            <h2>{{$products['name']}}</h2>
            <h3>Price: {{$products['price']}}</h3>
            <h4>Details: {{$products['description']}}</h4>
            <h4>Category: {{$products['category']}}</h4>
            <br><br>
            <form action="/add_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$products['id']}}">
                <br>
                <button class=" btn btn-primary">Add to Cart</button>
            </form>
            <br>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
    @endsection