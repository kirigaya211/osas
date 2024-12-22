<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Organization;

class OrgDetails extends Component
{
    public $description;
    public $cluster;
    public $email;
    // Validation rules
    // protected $rules = [
    //     'description' => 'nullable|string|max:500',
    //     'cluster' => 'required|string',
    // ];

    // Submit the form to update the organization

    public function mount()
    {
        $this->email = auth()->user()->email;
    }

    public function submitOrg()
    {   
        $this->validate([
            'description' => 'required|string|max:500',
            'cluster' => 'required|string',
        ]);
        try {
            $organization = Organization::where('OrganizationEmail', $this->email)->first();

            if (!$organization) {
                session()->flash('message', 'Organization not found!');
                return;
            }
            $organization->update([
                'OrganizationDescription' => $this->description,
                'ClusterID' => $this->cluster,
            ]);

            session()->flash('message', 'Organization updated successfully!');

            $this->reset();
        } catch (\Exception $e) {
            session()->flash('message', 'Error updating organization!');
        }

    }
    public function render()
    {
        $organization = Organization::where('OrganizationEmail', $this->email)->first();
        return view('livewire.org-details', ['description' => $this->description, 'organization' => $organization])->extends('organization.organization');
    }
}
