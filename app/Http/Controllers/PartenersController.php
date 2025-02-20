<?php

namespace App\Http\Controllers;

use App\Models\home\parteners;
use Illuminate\Http\Request;

class PartenersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parteners = parteners::latest()->first();
        ;
        return view('dashboard.homeControl.partener_img.index', compact('parteners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.homeControl.partener_img.addpartener-img');

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
        parteners::create($input);
        return redirect()->route('parteners.index')->with('success', 'partener added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(parteners $parteners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $partener =parteners::findOrFail($id);
        return view('dashboard.homeControl.partener_img.editpartener-img',compact('partener'));
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
        $partener = parteners::findOrFail($id);
        $partener->update($input);
        return redirect()->route('parteners.index')->with('success', 'partener update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        parteners::findOrFail($id)->delete();
        return back()->with('delete', 'partener delete successfully!');
    }
}
