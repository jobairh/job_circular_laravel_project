<?php

namespace App\Http\Controllers;

use App\Models\SliderTable;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home.home');
    }
    public function slider(){
        return view('admin.slider.slider');
    }
    public function saveSlider(Request $request){
        $slider=new SliderTable();
        $slider->title=$request->title;
        $slider->content1=$request->content1;
        $slider->image=$this->saveImage($request);
        $slider->save();
        return back();
    }
    public function saveImage($request){
        $image=$request->file('image');
        $imageName=rand().'.'.$image->getClientOriginalExtension();
        $directory='adminAsset/upload/slider-image/';
        $imageUrl=$directory.$imageName;
        $image->move($directory,$imageName);
        return $imageUrl;
    }
}
