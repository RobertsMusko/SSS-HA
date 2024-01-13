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

        $manufacturers = manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufacturers', '');
        return view('cars.create', compact('manufacturers'));
    }

    public function details($id){
        $car =  car::find($id);
        return view('cars.details', compact('car'));
    }

    public function store(Request $request){
        $request->validate([
            'model'=>'required',
            'year'=>'required',
            'salesperson_email'=>'required|email',
            'manufacturer_id'=>'required|exists:manufacturers,id'

        ]);

        car::create($request->all());
        return redirect()->route('cars.index')->with('message', 'Car added successfully!');

    }

    public function edit($id){
        $car = car::find($id);
        $manufacturers = manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufacturers', '');
        return view('cars.edit', compact('manufacturers', 'cars'));
    }
}
