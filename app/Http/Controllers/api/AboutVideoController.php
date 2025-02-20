<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutVideoController extends Controller
{
    public function video(){
        $video = About::latest()->first();

        return $video;

    }
}
