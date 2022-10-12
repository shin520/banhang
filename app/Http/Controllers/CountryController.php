<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Country;

class CountryController extends Controller
{
    public function list(){
        $data = Country::all();
        return view('countries.list',  compact('data'));
    }
}
