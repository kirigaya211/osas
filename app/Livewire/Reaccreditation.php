<?php

namespace App\Livewire;

use App\Models\PendingList;
use App\Models\ApplicationStatusList;
use App\Models\ApplicationCheckList;
use App\Models\ApplicationInfo;
use App\Models\Organization;
use Livewire\Component;

class Reaccreditation extends Component
{
    public $organizationId;
    public $representativeName;
    public $contactNumber;
    public $checklist = [];
    public $modal = false;
    public $exist=true;

    protected $rules = [
        'organizationId' => 'required|numeric',
        'representativeName' => ['required', 'string', 'max:255', 'regex:/^[^\d]+$/'],
        'contactNumber' => ['required', 'regex:/^(09|\+639)\d{9}$/'],
        // 'checklist' => 'required|array|min:1',
    ];

    public function submit()
    {
        $this->validate();
        try{
            $organization = Organization::find($this->organizationId);
        if ($organization==null) {
            $this->modal = true;
            session()->flash('message', "Organization not found");
            return $this->exist = false;
        }

        $application = ApplicationInfo::create([
            'OrganizationName' => $organization->OrganizationName,
            'OrganizationDescription' => $organization->OrganizationDescription,
            'OrganizationID' => $organization->OrganizationID,
            'Type' => 'Reaccreditation',
            'representativeName' => $this->representativeName,
            'representativeEmail' => $organization->OrganizationEmail,
            'contactNumber' => $this->contactNumber,
        ]);

        if (!$application) {
            throw new \Exception("Failed to create application");
        }

        $this->document($application->ApplicationID);
        $this->ApplicationStatus($application->ApplicationID);

        $this->modal = true;
        session()->flash('message', 'Application #:'.$application->ApplicationID);
        }
        catch(\Exception $e){
            $this->modal = true;
            session()->flash('message', $e->getMessage());
        }
        

    }

    public function document($applicationId)
    {
        try{
            foreach ($this->checklist as $checklistId) {
                ApplicationCheckList::create([
                    'ApplicationID' => $applicationId,
                    'ChecklistID' => $checklistId,  
                ]);
            }
        }catch(\Exception $e){
            $this->modal = true;
            session()->flash('message', $e->getMessage());
        }

        
    }

    public function toggleSelectAll()
{
    $documents = [
        'Accomplished Application Form',
        'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations',
        'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations',
        'Accomplishment Report',
        'Financial Report',
        'Action Plan and Financial Plan',
    ];

    if (count($this->checklist) === count($documents)) {
        // Deselect all
        $this->checklist = [];
    } else {
        // Select all
        $this->checklist = $documents;
    }
}


    private function ApplicationStatus($applicationId)
    {
        try{
            $applicationStatus = new ApplicationStatusList();
            $applicationStatus->ApplicationID = $applicationId;
            $applicationStatus->StatusType = 1;
            $applicationStatus->save();
    
    
            $pendingApplication = new PendingList();
            $pendingApplication->StatusID = $applicationStatus->StatusID;
            $pendingApplication->Feedback = "";
            $pendingApplication->save();
        }
        catch(\Exception $e){
            $this->modal = true;
            session()->flash('message', $e->getMessage());
        }

       
    }

    public function confirm()
    {
        $this->reset();
        return redirect()->route('landingpage');
    }

    public function hideModal()
    {
        $this->modal = false;
        $this->reset();
    }

    public function render()
    {
        return view('livewire.reaccreditation')->extends('landingPage.landingPage');
    }
}
