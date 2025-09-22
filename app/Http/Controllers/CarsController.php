<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function list() {
        $cars = Car::query()->get();

        return view('cars.index')->with([
            'cars' => $cars
        ]);
    }
}
