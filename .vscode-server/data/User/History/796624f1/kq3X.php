<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $cars = car::all();
        return view('cars.index', compact('cars'));
    }

    public function create(){
        return view('cars.create');
    }

    public function details($id){
        $car =  App\Models\car::find($id);
        return view('cars.details', compact('car'));
    }

    public function edit($id){
        $car = App\Models\car::find($id);
        return view('cars.edit', compact('car'));
    }
}
