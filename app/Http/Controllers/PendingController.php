<?php

namespace App\Http\Controllers;
use App\Models\ApplicationForm;
use App\Models\ApplicationInfo;

use App\Models\ApplicationStatusList;
use App\Models\PendingList;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade\Pdf;

class PendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function deleteApplicationForm(Request $request)
    {
        $ids = $request->input('ids');
        if (!empty($ids)) { 
            ApplicationStatusList::whereIn('StatusID', $ids)->delete();
            return redirect()->back()->with('success', 'Selected application forms deleted successfully.');
        }
        return redirect()->back()->with('error', 'No application forms selected for deletion.');
    }


    public function displaySelected(Request $request)
    {
        $selectedIds = explode(',', $request->input('selected_ids'));

        // Retrieve the selected application info
        $selectedApplications = ApplicationInfo::whereIn('ApplicationID', $selectedIds)->get();

        return view('admin.selected-users', compact('selectedApplications'));
    }

    public function generateReport(Request $request){
        $statusID = $request->input('ids');
        
        if (!empty($statusID)) {
        $applicationInfo = ApplicationStatusList::with(['application'])->whereIn('StatusID', $statusID)->get();
        // dd($applicationInfo);
    
            $pdf = Pdf::loadView('admin.generateReport',compact('applicationInfo'));
            return $pdf->download('generatedReport.pdf');
        
           
        }
    }
}
