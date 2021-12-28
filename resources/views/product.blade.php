@extends('master')
@section('content')

<div class="custom-product">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($product as $items)
            <div class="carousel-item {{$items['id']==1?'active':''}}">
                <a href="detail/{{$items['id']}}">
                    <img src="{{asset('images/'. $items['gallery'])}}" class="w-100 slider-img" alt="shoes">
                    <div class="carousel-caption d-none d-md-block slider-text">
                        <h5>{{$items['name']}}</h5>
                        <p>{{$items['description']}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach ($product as $items)
        <div class="trending-item">
            <a href="detail/{{$items['id']}}">
                <img src="{{asset('images/'. $items['gallery'])}}" class="trending-image" alt="shoes">
                <div class="">
                    <h3>{{$items['name']}}</h3>
                </div>
            </a>

        </div>
        @endforeach
    </div>
    @endsection