<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\car;
use App\Models\manufacturer;

class CarController extends Controller
{
    public function index(){
        if (request('manufacturer_id') == null){
            $cars = car::all();
        }else{
            $cars = car::where('manufacturer_id', request('manufacturer_id'))->get();
        }

        $manufacturers = manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufacturers', '');
        return view('cars.index', compact('cars', 'manufacturers'));
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
