<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\dashbordHome;
use Illuminate\Http\Request;

class DashbordHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('dashboard.homeControl.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dashbordHome $dashbordHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dashbordHome $dashbordHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dashbordHome $dashbordHome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dashbordHome $dashbordHome)
    {
        //
    }
}
