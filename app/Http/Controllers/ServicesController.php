<?php

namespace App\Http\Controllers;

use App\Models\Home\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = services::query();

        $services= $services->orderBy('id', 'asc')->paginate(10);

        return view('dashboard.homeControl.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.homeControl.services.addservice');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'img'=>'required'
        ]);
        $input = $request->except('img');

        if($request->hasFile('img')){
            $image = $request->file('img');
            $imageName = uniqid().".".$image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $input['img'] = asset('images/' . $imageName);

        }
        services::create($input);
        return redirect()->route('services.index')->with('success', 'service added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $service =services::findOrFail($id);
        return view('dashboard.homeControl.services.editservice',compact('service'));
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
        $service = services::findOrFail($id);
        $service->update($input);
        return redirect()->route('services.index')->with('success', 'service update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        services::findOrFail($id)->delete();
        return back()->with('delete', 'service delete successfully!');

    }
}
