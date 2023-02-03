<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class MainController extends Controller
{
    public function home()
    {
        $cars = Car::all();
        $data = [
            "cars" => $cars
        ];
        return view("pages.home", $data);
    }
    public function destroyCar($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect()->route("home");

    }
    public function createCar()
    {
        return view("pages.create-car");
    }
    public function requestCar(Request $request)
    {
        $data = $request->all();
        $car = new Car();
        $car->name = $request["name"];
        $car->brand = $request["brand"];
        $car->price = $request["price"];
        $car->fuel = $request["fuel"];
        $car->seatsNumber = $request["seatsNumber"];
        $car->save();
        return redirect()->route("home");
    }
}