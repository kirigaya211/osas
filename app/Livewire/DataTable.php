<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ApplicationStatusList;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class DataTable extends Component
{
    use WithPagination;

    public $search='';
    public $perPage = 5;

    public $type = '';
    public $statuss;

    public function review($userID){
        return redirect()->route('review', ['userID' => $userID]);
    }

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
