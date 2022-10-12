<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function guest(){
        return view('welcome');
    }
    public function dashboard(){
        return view('home');
    }
    public function page403(){
        return view('errors.403');
    }
}
