<?php

namespace App\Http\Controllers;

use App\Models\home\videoHome;
use Illuminate\Http\Request;

class VideoHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = videoHome::latest()->first();
        return view('dashboard.homeControl.videoHome.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.homeControl.videoHome.addvideo');
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

        videoHome::create($input);

        return redirect()->route('videos.index')->with('success', 'video added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(videoHome $videoHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $video = videoHome::findOrFail($id);
        return view('dashboard.homeControl.videoHome.editvideo', compact('video'));
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

        $video = videoHome::findOrFail($id);
        $video->update($input);

        return redirect()->route('videos.index')->with('success', 'video update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        videoHome::findOrFail($id)->delete();
        return back()->with('delete', 'video delete successfully!');
    }
}
