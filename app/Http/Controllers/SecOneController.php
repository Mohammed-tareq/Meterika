<?php

namespace App\Http\Controllers;

use App\Models\service\SecOne;
use Illuminate\Http\Request;

class SecOneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serviceOne = SecOne::latest()->first();
        return view('dashboard.serviceControl.serviceshow.secone.index', compact('serviceOne'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.serviceControl.serviceshow.secone.add');
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
            'txt_7' =>'required',
            'txt_8' =>'required',
            'txt_9' =>'required',
            'txt_10' =>'required',
            'txt_11' =>'required',
            'txt_12' =>'required',
            'title_2' =>'required',
            'txt2_1' =>'required',
            'txt2_2' =>'required',
            'txt2_3' =>'required',
            'txt2_4' =>'required',
            'txt2_5' =>'required',
            'txt2_6' =>'required',
            'txt2_7' =>'required',
            'txt2_8' =>'required',
        'img' =>'required'
        ]);
        $input = $request->except('img');

        if($request->hasFile('img')){
            $image = $request->file('img');
            $imageName = uniqid().".".$image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $input['img'] = asset('images/' . $imageName);

        }
        SecOne::create($input);
        return redirect()->route('ShowService-SecOne.index')->with('success', 'service added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SecOne $secOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $secOne =SecOne::findOrFail($id);
        return view('dashboard.serviceControl.serviceshow.secone.edit',compact('secOne'));
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
        $secOne = SecOne::findOrFail($id);
        $secOne->update($input);

        return redirect()->route('ShowService-SecOne.index')->with('success', 'service update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        SecOne::findOrFail($id)->delete();
        return back()->with('delete', 'service delete successfully!');
    }
}
