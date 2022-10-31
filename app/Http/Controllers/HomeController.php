<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function homeTwo(){
        return view('frontEnd.home.home-2');
    }
    public function homeThree(){
        return view('frontEnd.home.home-3');
    }
}
