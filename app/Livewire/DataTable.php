<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ApplicationStatusList;
use Livewire\WithPagination;

class DataTable extends Component
{
    use WithPagination;

    public $search='';
    public $perPage = 5;

    public function updatingPerPage()
    {
        $this->resetPage();
    }


    public function render()
    {
        $data = ApplicationStatusList::where('StatusType', 1)->with('application')->paginate($this->perPage);

        return view('livewire.data-table',
            [
                'data' => $data
                
            ]
        );
        
    }
}
