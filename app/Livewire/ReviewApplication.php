<?php

namespace App\Livewire;

use App;
use Illuminate\Console\Application;
use Livewire\Component;
use App\Models\ApplicationStatusList;

class ReviewApplication extends Component
{

    public $userID;
  
    // public function update(){



    //     $this->dispatch('update-application');
    // }


    public function render()
    {
        $application = ApplicationStatusList::where('StatusID', $this->userID)->first();
        return view('livewire.review-application',[
            'user' => $application
        ]);
    }
}
