<?php

namespace App\Livewire;

use App\Models\ApplicationStatusList;
use Livewire\Component;

class Process extends Component
{
    public $applicationType = null;
    public $modal = false;
    public $applicationNum;

    public $application=null;




    // Set application type and update the Livewire component state
    public function setApplication($type)
    {
        $this->applicationType = $type; // Update the application type
    }

    public function start($type){
        if($type == 'accreditation'){
            return redirect()->route('accreditation');
        }elseif($type == 'reaccreditation'){
            return redirect()->route('reaccreditation');
        }else{
            dd('Invalid application type');
        }
    }

    public function submit()
{
    $this->validate([
        'applicationNum' => 'required|numeric'
    ]);

    // Retrieve all applications that match the application number
    $applications = ApplicationStatusList::where('ApplicationID', $this->applicationNum)->get();

    if ($applications->isEmpty()) {
        $this->modal = true;
        session()->flash('message', 'Application not found');
        return $this->application;
    }

    // Start building the message table
    $message = "<table class='w-full border-collapse'>";

    foreach ($applications as $application) {
        $statusType = $application->statusType ? $application->statusType->Label : 'N/A';

        $message .= "
            <tr>
                <td class='border px-4 py-2 font-bold'>Application ID</td>
                <td class='border px-4 py-2'>{$application->ApplicationID}</td>
            </tr>
            <tr>
                <td class='border px-4 py-2 font-bold'>Status</td>
                <td class='border px-4 py-2'>{$statusType}</td>
            </tr>
            <tr>
                <td class='border px-4 py-2 font-bold'>Date Submitted</td>
                <td class='border px-4 py-2'>{$application->created_at->format('Y-m-d H:i:s')}</td>
            </tr>
            <tr>
                <td class='border px-4 py-2 font-bold'>Updated at</td>
                <td class='border px-4 py-2'>{$application->updated_at->format('Y-m-d H:i:s')}</td>
            </tr>
        ";
    }

    $message .= "</table>";

  
    session()->flash('message', $message);
    $this->application = $applications;
    $this->modal = true;
}

public function update($applicationNum)
    {
        $this->modal = false;
        $this->reset();
        return redirect()->route('updateApplication', ['applicationNum' => $applicationNum]);

    }

    public function hideModal()
    {
        $this->modal = false;
        $this->reset();
    }


    public function render()
    {
        return view('livewire.process')->extends('landingPage.landingPage'
        );
    }
}
