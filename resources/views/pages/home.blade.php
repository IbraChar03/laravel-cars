@extends('layouts.main-layout')
@section('content')
<h1>LIST OF CARS</h1>
<ul>
    @foreach ($cars as $car)
    <li>
        <strong>Name : </strong> {{$car -> name}} <br>
        <strong>Brand : </strong> {{$car -> brand}} <br>
        <strong>Price : </strong> {{$car -> price}} &euro; <br>
        <strong>Type Of Fuel : </strong> {{$car -> fuel}} <br>
        <strong>Number Of Seats : </strong> {{$car -> seatsNumber}} <br>
        <a href="{{route('car.destroy',['id' => $car -> id])}}"> <strong>DELETE CAR</strong></a> <br> <br>
    </li>

    @endforeach
</ul>

@endsection