<?php

use App\Http\Controllers\DashbordHomeController;
use App\Http\Controllers\front\GalleryPageController;
use App\Http\Controllers\front\ProjectPageController;
use App\Http\Controllers\front\ServicePageController;
use App\Http\Controllers\front\AboutVideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectHomeController;
use App\Http\Controllers\front\HomePageController;
use App\Http\Controllers\SecOneController;
use App\Http\Controllers\SecTwoController;
use App\Http\Controllers\SecThreeController;
use App\Http\Controllers\SecFourController;
use App\Http\Controllers\SliderHomeController;
use App\Http\Controllers\PartenersController;
use App\Http\Controllers\CommitmentController;
use App\Http\Controllers\VideoHomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\VideoServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();
//  dashboard route for control for home page
Route::prefix('/admin')->middleware('auth')->group(function () {

    // home page dashboard
    Route::resource('/', DashbordHomeController::class );
    Route::resource('/slider', SliderHomeController::class );
    Route::resource('/commitment', CommitmentController::class );
    Route::resource('/services', ServicesController::class );
    Route::resource('/projectsHome', ProjectHomeController::class );
    Route::resource('/parteners', PartenersController::class );
    Route::resource('/videos', VideoHomeController::class );

    // services page control ****add video only****
    Route::resource('/videoService', VideoServiceController::class );
    Route::resource('/ShowService-SecOne', SecOneController::class );
    Route::resource('/ShowService-SecTwo', SecTwoController::class );
    Route::resource('/ShowService-SecThree', SecThreeController::class );
    Route::resource('/ShowService-SecFour', SecFourController::class );
    // projects page control
    Route::resource('/projects', ProjectController::class );

    // gallery page control
    Route::resource('/galleries', GalleryController::class );
    // about page control
    Route::resource('/AboutUs', AboutController::class );
});

Route::get('/',[HomePageController::class,'index'])->name('home');
Route::get('/Service',[ServicePageController::class,'index'])->name('service');
Route::get('/Gallery',[GalleryPageController::class,'index'])->name('gallery');
Route::get('/Project',[ProjectPageController::class,'index'])->name('project');
Route::get('/ProjectById/{id}',[ProjectPageController::class,'show'])->name('projectById');
Route::get('/About-Us',[AboutVideoController::class,'index'])->name('About-Us');

