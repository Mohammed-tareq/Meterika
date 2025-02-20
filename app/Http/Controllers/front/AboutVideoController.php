<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutVideoController extends Controller
{
    public function index(){
        $video = About::latest()->first();

        return view('frontend.about',compact('video'));

    }
}
