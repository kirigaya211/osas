<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Organization;

class OrganizationList extends Component
{
    public function render()
    {
        $organizations = Organization::all();
        return view('livewire.organization-list', ['organizations' => $organizations]);
    }
}
