<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\HomePageController;
use App\Http\Controllers\api\ServicePageController;
use App\Http\Controllers\api\ProjectPageController;
use App\Http\Controllers\api\GalleryPageController;
use App\Http\Controllers\api\AboutVideoController;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// });


//home page
Route::get('/slider',[HomePageController::class,'slider']);
Route::get('/commitment',[HomePageController::class,'commitment']);
Route::get('/projects',[HomePageController::class,'projects']);
Route::get('/services',[HomePageController::class,'services']);
Route::get('/partener',[HomePageController::class,'partener']);
Route::get('/gallreies',[HomePageController::class,'gallreies']);
Route::get('/video',[HomePageController::class,'video']);

//service page
Route::get('/video',[ServicePageController::class,'video']);
Route::get('/secone',[ServicePageController::class,'secone']);
Route::get('/sectwo',[ServicePageController::class,'sectwo']);
Route::get('/secthree',[ServicePageController::class,'secthree']);
Route::get('/secfour',[ServicePageController::class,'secfour']);

// project page
Route::get('/projects',[ProjectPageController::class,'projects']);
Route::get('/showProject/{id}',[ProjectPageController::class,'showProject']);

//galleries
Route::get('/galleries',[GalleryPageController::class,'galleries']);

//about video
Route::get('/video',[AboutVideoController::class,'video']);
