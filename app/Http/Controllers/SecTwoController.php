<?php

namespace App\Http\Controllers;

use App\Models\service\SecTwo;
use Illuminate\Http\Request;

class SecTwoController extends Controller
{
    public function index()
    {
        $serviceTwo = SecTwo::latest()->first();
        return view('dashboard.serviceControl.serviceshow.sectwo.index', compact('serviceTwo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.serviceControl.serviceshow.sectwo.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'title_1' =>'required',
            'txt_1' =>'required',
            'txt_2' =>'required',
            'txt_3' =>'required',
            'txt_4' =>'required',
            'txt_5' =>'required',
            'txt_6' =>'required',
        'title_2' =>'required',
            'txt2_1' =>'required',
            'txt2_2' =>'required',
            'txt2_3' =>'required',
        'img' =>'required'
        ]);
        $input = $request->except('img');

        if($request->hasFile('img')){
            $image = $request->file('img');
            $imageName = uniqid().".".$image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $input['img'] = asset('images/' . $imageName);

        }
        SecTwo::create($input);
        return redirect()->route('ShowService-SecTwo.index')->with('success', 'service added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SecTwo $SecTwo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $secTwo =SecTwo::findOrFail($id);
        return view('dashboard.serviceControl.serviceshow.sectwo.edit',compact('secTwo'));
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
        $SecTwo = SecTwo::findOrFail($id);
        $SecTwo->update($input);

        return redirect()->route('ShowService-SecTwo.index')->with('success', 'service update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        SecTwo::findOrFail($id)->delete();
        return back()->with('delete', 'service delete successfully!');
    }
}
