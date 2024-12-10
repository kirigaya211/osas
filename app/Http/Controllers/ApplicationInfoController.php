<?php

namespace App\Http\Controllers;


use App\Events\ApplicationInfoCreated;
use App\Models\ApplicationInfo;
use App\Models\ApplicationCheckList;
use App\Models\ApplicationStatusList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class ApplicationInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function application()
    {
        return view('client.application'); 
    }

     public function index()
    {
        return view('client.Landingpage');
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
    public function handleApplication($type, $step)
    {
        // Determine the progress percentage based on the step
        switch ($step) {
            case 1:
                $progress = 25;
                break;
            case 2:
                $progress = 50;
                break;
            case 3:
                $progress = 75;
                break;
            case 4:
                $progress = 100;
                break;
            default:
                abort(404);
        }

       
        return view('client.typeOfApplication', compact('type', 'step', 'progress'));
    }

  
    public function store(Request $request,  $type)
    {
     
        $application = new ApplicationInfo();
        $application->OrganizationName = $request->input('organizationName');
        $application->OrganizationDescription = $request->input('organizationDescription');
        $application->OrganizationID = 0; 
        $application->Type = $request->input('type');
        $application->representativeName = $request->input('representativeName');
        $application->representativeEmail = $request->input('representativeEmail');
        $application->contactNumber = $request->input('contactNumber');
        $application->save();

        
        foreach ($request->input('checklist', []) as $checklistItem) {
            ApplicationCheckList::create([
                'ApplicationID' => $application->ApplicationID,
                'ChecklistID' => $checklistItem,
            ]);
        }


        

        $applicationNumber = $application->ApplicationID;
        
        return view("client.application4", compact("applicationNumber", "type"));

        // return redirect()->route('application.step', ['type' => $request->type, 'step' => 4]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ApplicationInfo $applicationInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApplicationInfo $applicationInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ApplicationInfo $applicationInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApplicationInfo $applicationInfo)
    {
        //
    }


    public function existingTransaction()
    {
        // Your logic here
        return view('existing-transaction'); // Make sure you have the corresponding view file.
    }
    public function showExistingTransactionForm()
    {
        return view('livewire.existing-transaction');
    }



    
    public function searchExistingTransaction(Request $request)
    {
        $id = 38;
        $searchApplication = ApplicationInfo::findOrFail($id);
        $searchStatus = ApplicationStatusList::findOrFail($id);
        $number = "Status";

        return view('Client.searchResults',compact('searchApplication', 'searchStatus','number'));
    }

   
    // public function showSearchResults(Request $request)
    // {
    
    //     $organizationName = $request->session()->get('organizationName');
    //     $requestType = $request->session()->get('requestType');
    //     $status = $request->session()->get('status');
    //     $updatedAt = $request->session()->get('updatedAt');

    //     return view('client.searchResults', compact('organizationName', 'requestType', 'status', 'updatedAt'));
    // }
    public function confirmApplication(Request $request)
    {
        return redirect()->route('confirmationSuccess')->with('success', 'Application confirmed successfully.');
    }

    // Method to handle retrying the search
    public function retrySearch()
    {
        // Simply redirect back to the search form
        return redirect()->route('existingTransaction')->with('info', 'Please try again.');
    }

    // Method for showing the confirmation success page
    public function confirmationSuccess()
    {
        // Dummy data for example purposes
    $applicationData = [
        'organizationName' => 'OSAS Interns Sample Org',
        'representativeName' => 'Juan Dela Cruz',
        'representativeEmail' => 'juan.delacruz@usep.edu.ph',
        'contactNumber' => '+639123456789',
        'applicationNumber' => '000001'
    ];

    // Pass the data to the confirmation view
    return view('client.confirmationSuccess', $applicationData);// Create a confirmation success view if needed
    }
}
