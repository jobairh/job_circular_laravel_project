<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function resume(){
        return view('frontEnd.pages.resume');
    }
    public function candidates(){
        return view('frontEnd.pages.candidates');
    }
    public function about(){
        return view('frontEnd.about.about');
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }
}
