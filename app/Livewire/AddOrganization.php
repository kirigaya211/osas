<?php

namespace App\Livewire;

use App\Models\ClusterList;
use Livewire\Component;
use App\Models\Organization;


class AddOrganization extends Component
{
    public $organizationName = '';
    public $organizationEmail = '';
    public $establishYear = '';

    public $cluster = '';

    public function submitForm()
    {
        $this->validate([
            'organizationName' => 'required|string|max:255',
            'organizationEmail' => 'required|email',
            'cluster' => 'required',
            
        ]);
     
        $organization = new Organization();
        $organization->OrganizationName = $this->organizationName;
        $organization->OrganizationEmail = $this->organizationEmail;
        $organization->EstablishYear = $this->establishYear;
        $organization->ClusterID = $this->cluster;
        $organization->save();

        $this->reset(['organizationName', 'organizationEmail','establishYear']); // Reset specific fields
        session()->flash('success', 'Organization added successfully!'); // Optional: Add a success message

        return redirect()->to( route('dashboard.organization')); 

    }
    public function render()
    {
        $clusters = ClusterList::all();
        return view('livewire.add-organization', ['clusters' => $clusters]);
    }
}
