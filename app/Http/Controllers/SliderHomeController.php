<?php

namespace App\Http\Controllers;

use App\Models\Home\sliderHome;
use Illuminate\Http\Request;

class SliderHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = sliderHome::latest()->first();
        return view('dashboard.homeControl.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.homeControl.slider.addslider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
    $request->validate([
        'slider_img_two' => 'required|image|mimes:jpg,jpeg,png,gif,webp',
        'slider_img_one' => 'required|image|mimes:jpg,jpeg,png,gif,webp',
        'slider_video'   => 'required'
    ]);

    $input = $request->only(['slider_img_one', 'slider_img_two', 'slider_video']);

    if ($request->hasFile('slider_img_one')) {
        $imageOne = $request->file('slider_img_one');
        $imagenameOne = uniqid() . "." . $imageOne->getClientOriginalExtension();
        $imageOne->move(public_path('images/'), $imagenameOne);
        $input['slider_img_one'] = asset('images/' . $imagenameOne);
    }

    if ($request->hasFile('slider_img_two')) {
        $imageTwo = $request->file('slider_img_two');
        $imagenameTwo = uniqid() . "." . $imageTwo->getClientOriginalExtension();
        $imageTwo->move(public_path('images/'), $imagenameTwo);
        $input['slider_img_two'] = asset('images/' . $imagenameTwo);
    }

    if ($request->hasFile('slider_video')) {
        $video = $request->file('slider_video');
        $videoname = uniqid() . "." . $video->getClientOriginalExtension();
        $video->move(public_path('videos/'), $videoname);
        $input['slider_video'] = asset('videos/' . $videoname);
    }

    sliderHome::create($input);

    return redirect()->route('slider.index')->with('success', 'Slider added successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(sliderHome $sliderHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $slider = sliderHome::findOrFail($id);
        return view('dashboard.homeControl.slider.editslider', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $input = $request->only(['slider_img_one', 'slider_img_two', 'slider_video']);
        if ($request->hasFile('slider_img_one')) {
            $imageOne = $request->file('slider_img_one');
            $imagenameOne = uniqid() . "." . $imageOne->getClientOriginalExtension();
            $imageOne->move(public_path('images/'), $imagenameOne);
            $input['slider_img_one'] = asset('images/' . $imagenameOne);
        }

        if ($request->hasFile('slider_img_two')) {
            $imageTwo = $request->file('slider_img_two');
            $imagenameTwo = uniqid() . "." . $imageTwo->getClientOriginalExtension();
            $imageTwo->move(public_path('images/'), $imagenameTwo);
            $input['slider_img_two'] = asset('images/' . $imagenameTwo);
        }

        if ($request->hasFile('slider_video')) {
            $video = $request->file('slider_video');
            $videoname = uniqid() . "." . $video->getClientOriginalExtension();
            $video->move(public_path('videos/'), $videoname);
            $input['slider_video'] = asset('videos/' . $videoname);
        }

        $sliders = sliderHome::findOrFail($id);

        $sliders->update($input);
        return redirect()->route('slider.index')->with('success', 'Slider update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        sliderHome::findOrFail($id)->delete();

        return back()->with('delete', 'Silder delete successfully!');
    }
}
