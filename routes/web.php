<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\AdminJobController;
use App\Http\Controllers\CompanyInfoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/home-2',[HomeController::class,'homeTwo'])->name('home-2');
Route::get('/home-3',[HomeController::class,'homeThree'])->name('home-3');
Route::get('/blog',[BlogController::class,'blog'])->name('blog');
Route::get('/blog-details',[BlogController::class,'blogDetails'])->name('blog-details');
Route::get('/resume',[PageController::class,'resume'])->name('resume');
Route::get('/candidates',[PageController::class,'candidates'])->name('candidates');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/job-board',[JobController::class,'jobBoard'])->name('job-board');
Route::get('/job-details',[JobController::class,'jobDetails'])->name('job-details');
Route::get('/single-job',[JobController::class,'singleJob'])->name('single-job');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/slider',[AdminController::class,'slider'])->name('slider');
    Route::post('/new-slider',[AdminController::class,'saveSlider'])->name('new-slider');
    Route::get('/job-category',[JobCategoryController::class,'jobCategory'])->name('job-category');
    Route::post('/new-jobCategory',[JobCategoryController::class,'saveJobCategory'])->name('new-jobCategory');
    Route::get('/status/{id}',[JobCategoryController::class,'status'])->name('status');
    Route::get('/job-details2',[AdminJobController::class,'jobDetails2'])->name('job-details2');
    Route::post('/new-jobDetails2',[AdminJobController::class,'saveJobDetails2'])->name('new-jobDetails2');
    Route::get('/company-information',[CompanyInfoController::class,'companyInformation'])->name('company-information');

});
