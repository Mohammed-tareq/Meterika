<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\gallery\gallery;
use App\Http\Resources\galleryHomeResource;
use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    public function galleries(){
        $galleries = gallery::get();
        return galleryHomeResource::collection($galleries);
    }
}
