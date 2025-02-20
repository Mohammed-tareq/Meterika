<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\gallery\gallery;
use App\Models\Home\commitment;
use App\Models\Home\parteners;
use App\Models\Home\projectHome;
use App\Models\Home\services;
use App\Models\Home\sliderHome;
use App\Models\Home\videoHome;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $slider = sliderHome::latest()->first();
        $commitment = commitment::latest()->first();
        $projects = projectHome::get();
        $services = services::get();
        $partener = parteners::latest()->first();
        $gallreies = gallery::get();
        $video = videoHome::latest()->first();
        return view('frontend.home',compact('slider','commitment','projects','gallreies','services','partener','video'));
    }
}

