<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    public function index(){
        $manufacturers = manufacturer::all();
        return view('manufacturers.index', compact('manufacturers'));
    }
}
