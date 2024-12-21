<?php

namespace App\Livewire;

use App\Models\ApplicationStatusList;
use App\Models\PendingList;
use App\Models\ApplicationCheckList;
use App\Models\ApplicationInfo;
use Livewire\Component;

class Accreditation extends Component
{
    public $organizationName;
    public $representativeName;
    public $representativeEmail;
    public $contactNumber;
    public $organizationDescription;
    public $checklist = [];

    public $modal = false;



    protected $rules = [
        'organizationName' => ['required', 'string', 'max:255', 'regex:/^[^\d]+$/'],
        'representativeName' => ['required', 'string', 'max:255', 'regex:/^[^\d]+$/'],
        'representativeEmail' => 'required|email|max:255',
        'contactNumber' => ['required', 'regex:/^(09|\+639)\d{9}$/'],
        'organizationDescription' => 'required|string|max:1000',
        // 'checklist' => 'required|array|min:1',  // Ensure at least one checkbox is selected
    ];

    public function submit()
    {
        $this->validate();

        try {
            $application = ApplicationInfo::create([
                'OrganizationName' => $this->organizationName,
                'OrganizationDescription' => $this->organizationDescription,
                'OrganizationID' => 0,
                'Type' => 'Accreditation',
                'representativeName' => $this->representativeName,
                'representativeEmail' => $this->representativeEmail,
                'contactNumber' => $this->contactNumber,
            ]);
            if (!$application) {
                throw new \Exception("Failed to create application");
            }

            $this->document($application->ApplicationID);
            $this->ApplicationStatus($application->ApplicationID);

            $this->modal = true;
            session()->flash('message', 'Application #:' . $application->ApplicationID);
        } catch (\Exception $e) {
            $this->modal = true;
            session()->flash('message', $e->getMessage());

        }
    }

    public function document($applicationId)
    {
        try {
            foreach ($this->checklist as $checklistId) {
                ApplicationCheckList::create([
                    'ApplicationID' => $applicationId,
                    'ChecklistID' => $checklistId,
                ]);
            }
        } catch (\Exception $e) {
            $this->modal = true;
            session()->flash('message', $e->getMessage());
        }



    }

    private function ApplicationStatus($applicationId)
    {
        try {
            $applicationStatus = new ApplicationStatusList();
            $applicationStatus->ApplicationID = $applicationId;
            $applicationStatus->StatusType = 1;
            $applicationStatus->save();

            $pendingApplication = new PendingList();
            $pendingApplication->StatusID = $applicationStatus->StatusID;
            $pendingApplication->Feedback = "";
            $pendingApplication->save();
        } catch (\Exception $e) {
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
            'Information Sheet of Student Organization Officer',
            'List of Organization Members',
            'Student Organization Constitution and Bylaws',
            'Mission and Vision Statement',
            'Resolution',
            'Student Organization Official Logo',
            'Action and Financial Plan',
        ];

        if (count($this->checklist) === count($documents)) {
            // Deselect all
            $this->checklist = [];
        } else {
            // Select all
            $this->checklist = $documents;
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
        return view('livewire.accreditation')->extends('landingPage.landingPage');
    }
}
