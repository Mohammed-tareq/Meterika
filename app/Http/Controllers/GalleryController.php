<?php

namespace App\Http\Controllers;

use App\Models\gallery\gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = gallery::query();

        $galleries= $galleries->orderBy('id', 'asc')->paginate(10);

        return view('dashboard.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gallery.addgallery');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'img'=>'required'
        ]);
        $input = $request->only('img');

        if($request->hasFile('img')){
            $image = $request->file('img');
            $imageName = uniqid().".".$image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $input['img'] = asset('images/' . $imageName);

        }
        gallery::create($input);
        return redirect()->route('galleries.index')->with('success', 'gallery added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery =gallery::findOrFail($id);
        return view('dashboard.gallery.editgallery',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $input = $request->only('img');

        if($request->hasFile('img')){
            $image = $request->file('img');
            $imageName = uniqid().".".$image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $input['img'] = asset('images/' . $imageName);

        }
        $gallery = gallery::findOrFail($id);
        $gallery->update($input);
        return redirect()->route('galleries.index')->with('success', 'gallery update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        gallery::findOrFail($id)->delete();
        return back()->with('delete', 'gallery delete successfully!');
    }
}
