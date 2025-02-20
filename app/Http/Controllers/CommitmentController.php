<?php

namespace App\Http\Controllers;

use App\Models\Home\commitment;
use Illuminate\Http\Request;

class CommitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commitments = commitment::latest()->first();


        return view('dashboard.homeControl.commitment.index', compact('commitments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.homeControl.commitment.addcommit');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'img'=>'required'
        ]);
        $input = $request->except('img');

        if($request->hasFile('img')){
            $image = $request->file('img');
            $imageName = uniqid().".".$image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $input['img'] = asset('images/' . $imageName);

        }
        commitment::create($input);
        return redirect()->route('commitment.index')->with('success', 'commitment added successfully!');
    }



    /**
     * Display the specified resource.
     */
    public function show(commitment $commitment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $commitment =commitment::findOrFail($id);
        return view('dashboard.homeControl.commitment.editcommit',compact('commitment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $input = $request->except('img');

        if($request->hasFile('img')){
            $image = $request->file('img');
            $imageName = uniqid().".".$image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $input['img'] = asset('images/' . $imageName);

        }
        $commitment = commitment::findOrFail($id);
        $commitment->update($input);
        return redirect()->route('commitment.index')->with('success', 'commitment update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        commitment::findOrFail($id)->delete();
        return back()->with('delete','commitment delete successfully!');

    }
}
