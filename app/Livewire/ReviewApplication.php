<?php

namespace App\Livewire;

use App;
use App\Models\ApplicationInfo;
use Illuminate\Console\Application;
use Livewire\Component;
use App\Models\ApplicationStatusList;
use App\Models\PendingList;
use App\Models\DeniedList;
use App\Models\AcceptedList;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;

class ReviewApplication extends Component
{

    public $userID;

    public $feedback;

    public $statusChange;
  
    
    public function updateStatus($userID)  {
        

        $application = PendingList::where('StatusID', $userID)->first();
        $applicationStatus = ApplicationStatusList::where('StatusID', $userID)->first();
        
        if ($application) {
    
            $applicationStatus->update(['StatusType' => $this->statusChange]);
            $application->Feedback = $this->feedback;
            $application->save();
            $applicationStatus->save();

            $this->addToTable($application);
            $this->sendEmail();
            return redirect()->route('dashboard');
        } else {
            
            session()->flash('error', 'Application not found!');
        }
    }

   
    public function addToTable($application){
        $table=null;
        switch ($this->statusChange) {
            case '1':
                $table = PendingList::class;
                break;
            case '2':
                $table = DeniedList::class;
                break;
            case '3':
                $table = AcceptedList::class;
                break;
            default:
                session()->flash('error', 'Invalid status!');
                break;
        }

    
        if ($table) {
            $applicationTable = $table::create(['StatusID' => $application->StatusID]);
            $applicationTable->Feedback = $this->feedback;
            $applicationTable->save();
        }
    }

    public function sendEmail(){
        $applicationID = ApplicationStatusList::where('StatusID', $this->userID)->value('ApplicationID');
        $statusText = match ($this->statusChange) {
            '1' => 'Pending',
            '2' => 'Denied',
            '3' => 'Approved',
            default => 'Unknown Status',
        };

        $toEmail =ApplicationInfo::where('ApplicationID', $applicationID)->value('representativeEmail');
        $message = $this->feedback;
        $subject = "Application Progress: {$statusText}";

        $response = Mail::to($toEmail)->send(new MyEmail($message, $subject));

    }

    public function render()
    {
        $application = ApplicationStatusList::where('StatusID', $this->userID)->first();
        return view('livewire.review-application',[
            'user' => $application
        ]);
    }
}
