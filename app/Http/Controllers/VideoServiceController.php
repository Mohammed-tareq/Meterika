<?php

namespace App\Http\Controllers;

use App\Models\service\videoService;
use Illuminate\Http\Request;

class VideoServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = videoService::latest()->first();
        return view('dashboard.serviceControl.videoService.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.serviceControl.videoService.addvideo');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'video'   => 'required'
        ]);

        $input = $request->only('video');



        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoname = uniqid() . "." . $video->getClientOriginalExtension();
            $video->move(public_path('videos/'), $videoname);
            $input['video'] = asset('videos/' . $videoname);
        }

        videoService::create($input);

        return redirect()->route('videoService.index')->with('success', 'video added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(videoService $videoService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $video = videoService::findOrFail($id);
        return view('dashboard.serviceControl.videoService.editvideo', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->only('video');


        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoname = uniqid() . "." . $video->getClientOriginalExtension();
            $video->move(public_path('videos/'), $videoname);
            $input['video'] = asset('videos/' . $videoname);
        }

        $video = videoService::findOrFail($id);
        $video->update($input);

        return redirect()->route('videoService.index')->with('success', 'video update successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        videoService::findOrFail($id)->delete();
        return back()->with('delete', 'video delete successfully!');
    }
}
