<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    public function jobCategory(){
        return view('admin.job.job-category');
    }
    public function saveJobCategory(Request $request){
        $jobCategory=new JobCategory();
        $jobCategory->category_name=$request->category_name;
        $jobCategory->save();
        return back();
    }
    public function status($id){
        $jobCategory=JobCategory::find($id);
        if ($jobCategory->status==1){
            $jobCategory->status=0;
            $jobCategory->save();
            return back();
        }else{
            $jobCategory->status=1;
            $jobCategory->save();
            return back();
        }
    }
}
