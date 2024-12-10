<?php

namespace App\Livewire;

use App\Models\ApplicationCheckList;
use App\Models\ApplicationInfo;
use Livewire\Component;

class UpdateApplication extends Component
{
    public $applicationNum;
    public $checklist = [];
    public $applicationType;
    public $modal = false;

    public function mount($applicationNum)
    {
        $this->applicationNum = $applicationNum;

        $application = ApplicationInfo::where('ApplicationID', $this->applicationNum)->first();

        if ($application) {
            $this->applicationType = $application->Type;
        }

        $checklistItems = ApplicationCheckList::where('ApplicationID', $this->applicationNum)->get();
        $this->checklist = $checklistItems->pluck('ChecklistID')->toArray(); 

        // dd($this->checklist);
      
    }

    public function saveChecklist()
    {
        ApplicationCheckList::where('ApplicationID', $this->applicationNum)->delete();


        foreach ($this->checklist as $document) {
            ApplicationCheckList::create([
                'ApplicationID' => $this->applicationNum,
                'ChecklistID' => $document,
            ]);
        }

        session()->flash('message', 'Application checklist updated successfully!');

        $this->modal = true;
    }


    public function confirm()
    {
        $this->reset();
        return redirect()->route('application');
    }

    public function hideModal()
    {
        $this->modal = false;
       
    }

    public function render()
    {
       
        $accreditationDocuments = [
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

        $reaccreditationDocuments = [
            'Accomplished Application Form',
            'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations',
            'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations',
            'Accomplishment Report',
            'Financial Report',
            'Action Plan and Financial Plan',
        ];

        $documents = $this->applicationType === 'Reaccreditation'
            ? $reaccreditationDocuments
            : $accreditationDocuments;

        $applicationID = ApplicationInfo::where('ApplicationID', $this->applicationNum)->first();

        return view('livewire.update-application', [
            'documents' => $documents,
            'applicationID' => $applicationID,
            'checklist' => $this->checklist, 
        ])->extends('landingPage.landingPage');
    }
}
