<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        return view('frontEnd.blog.blog');
    }
    public function blogDetails(){
        return view('frontEnd.blog.blog-details');
    }
}
