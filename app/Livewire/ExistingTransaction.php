<?php

namespace App\Livewire;
use App\Models\ApplicationStatusList;
use Livewire\Component;

class ExistingTransaction extends Component
{
    public $applicationId;
    public $search='';
    public $perPage = 5;

    public $type = '';
    public $statuss;

    // public function search($applicationId)
    // {
    //     try{
    //         $application = ApplicationStatusList::where('applcation_id', $applicationId)->first();
    //         if(!$application){
    //             session()->flash('error', 'Application not found');
    //             return;
    //         }
    //         $this->applicationId = $application->id;
    //     }
    // }
    public function render()
    {
        
            $data = ApplicationStatusList::where('StatusType', $this->statuss)
            ->with('application')
            ->when($this->type !=='', function ($query) {
                return $query->whereHas('application', function ($q) {
                    $q->where('Type', $this->type); 
                });
            })
            ->search($this->search)->paginate($this->perPage);
    
            return view('livewire.data-table',
                [
                    'data' => $data,
                    'status' => $this->statuss
                ]
            );
            
        
    }
}
