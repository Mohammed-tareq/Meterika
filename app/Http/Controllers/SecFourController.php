<?php

namespace App\Http\Controllers;

use App\Models\service\SecFour;
use Illuminate\Http\Request;

class SecFourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicefour = SecFour::latest()->first();
        return view('dashboard.serviceControl.serviceshow.secfour.index', compact('servicefour'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.serviceControl.serviceshow.secfour.add');
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
            'img_1' =>'required',
        ]);
        $input = $request->except('img_1');

        if($request->hasFile('img_1')){
            $image = $request->file('img_1');
            $imageName = uniqid().".".$image->getClientOriginalExtension();
            $image->move('images/', $imageName);
            $input['img_1'] = asset('images/' . $imageName);

        }

        SecFour::create($input);
        return redirect()->route('ShowService-SecFour.index')->with('success', 'service added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(SecFour $SecFour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $SecFour =SecFour::findOrFail($id);
        return view('dashboard.serviceControl.serviceshow.secfour.edit',compact('SecFour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->except('img_1');

        if($request->hasFile('img_1')){
            $image = $request->file('img_1');
            $imageName = uniqid().".".$image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $input['img_1'] = asset('images/' . $imageName);

        }
        $SecFour = SecFour::findOrFail($id);
        $SecFour->update($input);

        return redirect()->route('ShowService-SecFour.index')->with('success', 'service update successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        SecFour::findOrFail($id)->delete();
        return back()->with('delete', 'service delete successfully!');
    }
}
