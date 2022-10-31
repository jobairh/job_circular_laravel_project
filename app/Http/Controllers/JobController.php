<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobBoard(){
        return view('frontEnd.jobs.job-board');
    }
    public function jobDetails(){
        return view('frontEnd.jobs.job-details');
    }
    public function singleJob(){
        return view('frontEnd.jobs.single-job');
    }
}
