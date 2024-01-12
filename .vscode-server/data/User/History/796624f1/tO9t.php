<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;

class CarController extends Controller
{
    public function index(){
        $cars = car::all();
        $manufacturers = manufacturer::orderBy('name')->pluck('name', 'id');
        return view('cars.index', compact('cars'));
    }

    public function create(){
        return view('cars.create');
    }

    public function details($id){
        $car =  App\Models\Car::find($id);
        return view('cars.details', compact('car'));
    }

    public function edit($id){
        $car = App\Models\Car::find($id);
        return view('cars.edit', compact('car'));
    }
}
