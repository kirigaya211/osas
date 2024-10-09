<?php

namespace App\Http\Controllers;
use App\Models\ApplicationForm;
use App\Models\ApplicationStatusList;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.reaccreditationForm');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Client.reaccreditationForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $application = new ApplicationForm();
        $application->organizationName = $request->input('organizationName');
        $application->representativeName = $request->input('representativeName');
        $application->representativeEmail = $request->input('representativeEmail');
        $application->contactNumber = $request->input('contactNumber');
        $application->organizationDescription = $request->input('organizationDescription');
        $application->save();

        // $applicationID = $application->id;
        // $applicationStatusList = new ApplicationStatusList();
        // $applicationStatusList->Application# = appl

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    
}
