<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\service\videoService;
use App\Models\service\SecOne;
use App\Models\service\SecTwo;
use App\Models\service\SecThree;
use App\Models\service\SecFour;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{

    public function video(){
        $video = videoService::latest()->first();

        return $video;

    }
    public function secone(){
        $secone = SecOne::latest()->first();

        return $secone;

    }

    public function sectwo(){
        $sectwo = SecTwo::latest()->first();

        return $sectwo;

    }

    public function secthree(){
        $secthree = SecThree::latest()->first();

        return $secthree;

    }

    public function secfour(){
        $secfour = SecFour::latest()->first();

        return $secfour;

    }


}
