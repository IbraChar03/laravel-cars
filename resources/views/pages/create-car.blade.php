@extends('layouts.main-layout')
@section('content')
<form action="{{route('car.request')}}"
    method="POST">
    @csrf
    <label for="name">Car Name:</label>
    <input type="text"
        name="name"> <br> <br>
    <label for="brand">Car Brand:</label>
    <input type="text"
        name="brand"> <br> <br>
    <label for="price">Car price:</label>
    <input type="number"
        name="price"> <br> <br>
    <label for="fuel">Car Fuel:</label>
    <input type="text"
        name="fuel"> <br> <br>
    <label for="seatsNumber">seats Number:</label>
    <input type="text"
        name="seatsNumber"> <br> <br>
    <input type="submit"
        value="CREATE CAR">
</form>
@endsection