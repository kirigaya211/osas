<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Organization;

class OrganizationView extends Component
{
    public $organizationID;
    public function render()
    {
        $organization = Organization::where('OrganizationID', $this->organizationID)->first();
        return view('livewire.organization-view',[
            'organization' => $organization
        ]);
    }
}
