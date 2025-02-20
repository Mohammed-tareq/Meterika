<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Http\Resources\ProjectPageResource;
use Illuminate\Http\Request;

class ProjectPageController extends Controller
{
   public function projects(){
    $projects = Project::get();
    return ProjectPageResource::collection($projects);
   }



   public function showProject($id)
   {
       $project = Project::findOrFail($id);

       // Decode JSON safely
       $images = json_decode($project->images, true) ?? [];

       // Remove the first image if images exist
       $images = is_array($images) ? array_slice($images, 1) : [];

       // Return response correctly
       return response()->json([
           'project' => new ProjectPageResource($project),
           'images' => $images
       ]);
   }

}
