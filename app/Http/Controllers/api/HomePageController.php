<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\gallery\gallery;
use App\Models\Home\commitment;
use App\Models\Home\parteners;
use App\Models\Home\projectHome;
use App\Models\Home\services;
use App\Models\Home\sliderHome;
use App\Models\Home\videoHome;
use Illuminate\Http\Request;
use App\Http\Resources\SliderResource;
use App\Http\Resources\commtResource;
use App\Http\Resources\projectHomeResource;
use App\Http\Resources\galleryHomeResource;

class HomePageController extends Controller
{

    public function slider() {
        $slider = sliderHome::latest()->first();

        if (!$slider) {
            return response()->json(['message' => 'No slider found'], 404);
        }

        return new SliderResource($slider);
    }

    public function commitment() {
        $commitment = commitment::latest()->first();

        if (!$commitment) {
            return response()->json(['message' => 'No commitment found'], 404);
        }

        return new commtResource($commitment);
    }

    public function projects() {
        $projects = projectHome::get();

        if (!$projects) {
            return response()->json(['message' => 'No commitment found'], 404);
        }

        return projectHomeResource::collection($projects);
    }

    public function services() {
        $services = services::get();

        if (!$services) {
            return response()->json(['message' => 'No commitment found'], 404);
        }

        return $services;
    }

    public function partener() {
        $partener = parteners::latest()->first();

        if (!$partener) {
            return response()->json(['message' => 'No commitment found'], 404);
        }

        return $partener ;
    }

    public function gallreies() {
        $gallreies = gallery::get();

        if (!$gallreies) {
            return response()->json(['message' => 'No commitment found'], 404);
        }

        return  galleryHomeResource::collection($gallreies);
    }

    public function video() {
        $video = videoHome::latest()->first();

        if (!$video) {
            return response()->json(['message' => 'No commitment found'], 404);
        }

        return $video;
    }


}

