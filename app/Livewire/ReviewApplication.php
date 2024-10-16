<?php

namespace App\Livewire;

use App;
use Illuminate\Console\Application;
use Livewire\Component;
use App\Models\ApplicationStatusList;

class ReviewApplication extends Component
{

    public $userID;
    public $user;

    public function mount($userID){
        $this->userID = $userID;

        $this->user = ApplicationStatusList::where('StatusID', $this->userID)->first();
    }
    // public function update(){



    //     $this->dispatch('update-application');
    // }


    public function render()
    {
        return view('livewire.review-application',[
            'user' => $this->user
        ]);
    }
}
