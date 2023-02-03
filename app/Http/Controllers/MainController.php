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
}