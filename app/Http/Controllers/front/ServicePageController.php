<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\service\videoService;
use App\Models\service\SecOne;
use App\Models\service\SecTwo;
use App\Models\service\SecThree;
use App\Models\service\SecFour;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    public function index(){
        $video = videoService::latest()->first();
        $secone = SecOne::latest()->first();
        $sectwo = SecTwo::latest()->first();
        $secthree = SecThree::latest()->first();
        $secfour = SecFour::latest()->first();
        return view('frontend.service',compact('video','secone','sectwo','secthree','secfour'));

    }
}
