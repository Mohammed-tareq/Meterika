<?php

namespace App\Http\Controllers;

use App\Models\service\SecThree;
use Illuminate\Http\Request;

class SecThreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serviceThree = SecThree::latest()->first();
        return view('dashboard.serviceControl.serviceshow.secthree.index', compact('serviceThree'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.serviceControl.serviceshow.secthree.add');
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
            'img_1' =>'required',

        'title_2' =>'required',
            'txt2_1' =>'required',
            'txt2_2' =>'required',
            'txt2_3' =>'required',
            'txt2_4' =>'required',
            'txt2_5' =>'required',
            'txt2_6' =>'required',
            'img_2' =>'required'
        ]);
        $input = $request->except(['img_1','img_2']);

        if($request->hasFile('img_1')){
            $image = $request->file('img_1');
            $imageName = uniqid().".".$image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $input['img_1'] = asset('images/' . $imageName);

        }
        if($request->hasFile('img_2')){
            $image = $request->file('img_2');
            $imageName = uniqid().".".$image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $input['img_2'] = asset('images/' . $imageName);

        }
        SecThree::create($input);
        return redirect()->route('ShowService-SecThree.index')->with('success', 'service added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SecThree $SecThree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $SecThree =SecThree::findOrFail($id);
        return view('dashboard.serviceControl.serviceshow.secthree.edit',compact('SecThree'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->except(['img_1','img_2']);

        if($request->hasFile('img_1')){
            $image = $request->file('img_1');
            $imageName = uniqid().".".$image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $input['img_1'] = asset('images/' . $imageName);

        }
        if($request->hasFile('img_2')){
            $image = $request->file('img_2');
            $imageName = uniqid().".".$image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $input['img_2'] = asset('images/' . $imageName);

        }
        $SecThree = SecThree::findOrFail($id);
        $SecThree->update($input);

        return redirect()->route('ShowService-SecThree.index')->with('success', 'service update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        SecThree::findOrFail($id)->delete();
        return back()->with('delete', 'service delete successfully!');
    }
}
