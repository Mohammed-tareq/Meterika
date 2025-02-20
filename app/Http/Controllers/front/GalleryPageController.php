<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\gallery\gallery;
use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    public function index(){
        $galleries = gallery::get();
        return view('frontend.gallery',compact('galleries'));
    }
}
