<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectPageController extends Controller
{
   public function index(){
    $projects = Project::get();
    return view('frontend.project',compact('projects'));
   }


//
public function show($id)
{
    $project = Project::findOrFail($id);

    // Decode the JSON images column safely
    $images = json_decode($project->images, true) ?? [];

    // Ensure $images is an array and remove the first image
    $images = is_array($images) ? array_slice($images, 1) : [];

    return view('frontend.projectById', compact('project', 'images'));
}
}
