<?php

namespace App\Livewire;

use App;
use Illuminate\Console\Application;
use Livewire\Component;
use App\Models\ApplicationStatusList;
use App\Models\PendingList;


class ReviewApplication extends Component
{

    public $userID;

    public $feedback;

    public $statusChange;
  
    
    public function updateStatus($userID)  {
        
        $application = PendingList::where('StatusID', $userID)->first();
        $applicationStatus = ApplicationStatusList::where('StatusID', $userID)->first();
        
        if ($application) {
    
            $applicationStatus->update($StatusType = $this->statusChange);
            $application->Feedback = $this->feedback;
            $application->save();
            $applicationStatus->save();

            return redirect()->route('dashboard');
        } else {
            
            session()->flash('error', 'Application not found!');
        }
    }

    public function addToTable(){
        
    }

    public function render()
    {
        $application = ApplicationStatusList::where('StatusID', $this->userID)->first();
        return view('livewire.review-application',[
            'user' => $application
        ]);
    }
}
