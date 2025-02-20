<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::query();

        $projects= $projects->orderBy('id', 'asc')->paginate(10);

        return view('dashboard.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.addproject');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'images' => 'required',

        ]);

        $input = $request->except('images'); // Exclude images initially

        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/'), $imageName);
                $imagePaths[] = asset('images/' . $imageName);
            }
            $input['images'] = json_encode($imagePaths); // Store as JSON in DB
        }
        Project::create($input);

        return redirect()->route('projects.index')->with('success', 'Project added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project =Project::findOrFail($id);
        return view('dashboard.projects.editproject',compact('project'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|string',
            'title' => 'nullable',
            'images' => 'nullable',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deleted_images' => 'nullable|string',
        ]);

        $project = Project::findOrFail($id);
        $input = $request->except('images', 'deleted_images');

        // Decode existing images
        $existingImages = json_decode($project->images, true) ?? [];

        // Handle deleted images
        if ($request->deleted_images) {
            $deletedImages = json_decode($request->deleted_images, true);

            // Remove deleted images from the array
            $existingImages = array_values(array_diff($existingImages, $deletedImages));

            // Delete images from storage
            foreach ($deletedImages as $deletedImage) {
                $imagePath = str_replace(asset('/'), '', $deletedImage);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
        }

        // Handle newly uploaded images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move('images/', $imageName);
                $existingImages[] = asset('images/' . $imageName);
            }
        }

        $input['images'] = json_encode(array_values($existingImages)); // Store updated image list

        $project->update($input);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }
    use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Project;

public function update(Request $request, $id)
{
    $request->validate([
        'name'           => 'nullable|string',
        'title'          => 'nullable|string',
        'images'         => 'nullable|array',
        'images.*'       => 'image|mimes:jpeg,png,jpg,gif,webp',
        'deleted_images' => 'nullable|string', // JSON string containing images to delete
    ]);

    $project = Project::findOrFail($id);
    $input = $request->except(['images', 'deleted_images']);

    // Decode existing images from JSON
    $existingImages = json_decode($project->images, true) ?? [];

    // Handle deleted images
    if ($request->filled('deleted_images')) {
        $deletedImages = json_decode($request->deleted_images, true) ?? [];

        // Remove deleted images from array
        $existingImages = array_values(array_diff($existingImages, $deletedImages));

        // Delete images from the server (public_html/images)
        foreach ($deletedImages as $deletedImage) {
            $imagePath = str_replace(asset('/'), '', $deletedImage);
            $fullPath = move($imagePath); // Get full server path
            if (file_exists($fullPath)) {
                unlink($fullPath);
            }
        }
    }

    // Handle newly uploaded images
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $destinationPath = move('images'); // Path to public_html/images/
            $image->move($destinationPath, $imageName);

            // Store the new image URL
            $existingImages[] = asset('images/' . $imageName);
        }
    }

    // Store updated image list in JSON format
    $input['images'] = json_encode(array_values($existingImages));

    // Update project record
    $project->update($input);

    return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return back()->with('success', 'project delete successfully!');
    }
}
