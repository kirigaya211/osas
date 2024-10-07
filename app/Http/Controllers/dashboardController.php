<?php

namespace App\Http\Controllers;

use App\Models\ApplicationStatusList;
use Illuminate\Http\Request;
use App\Models\PendingList;
use App\Models\DeniedList;
use App\Models\AcceptedList;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return $this->overview();
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


    public function overview(){
        $pending = PendingList::count();
        $denied =  DeniedList::count();
        $accept =  AcceptedList::count();
        // $staff =   ApplicationStaffList::with('staff')->get();
        
      
        return view('admin.overview', compact('pending', 'denied','accept'));

        // return view('admin.overview');
    }

    public function pending($status){
    
        return view('admin.dataTable',['status'=>$status]);
    }
}
