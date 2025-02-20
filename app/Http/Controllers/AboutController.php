<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $About = About::latest()->first();
        return view('dashboard.videoAbout.index', compact('About'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.videoAbout.addvideo');

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
            $video->move('videos/', $videoname);
            $input['video'] = asset('videos/' . $videoname);
        }

        About::create($input);

        return redirect()->route('AboutUs.index')->with('success', 'video added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $About = About::findOrFail($id);
        return view('dashboard.videoAbout.editvideo', compact('About'));
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

        $About = About::findOrFail($id);
        $About->update($input);

        return redirect()->route('AboutUs.index')->with('success', 'video update successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        About::findOrFail($id)->delete();
        return back()->with('delete', 'video delete successfully!');
    }
}
