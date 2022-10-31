<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminJobController extends Controller
{
    public function jobDetails2(){
        return view('admin.job.job-details2');
    }
}
