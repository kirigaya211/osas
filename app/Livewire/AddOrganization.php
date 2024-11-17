<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Organization;


class AddOrganization extends Component
{
    public $organizationName = '';
    public $organizationEmail = '';
    public $establishYear = '';

    public function submitForm()
    {
        $this->validate([
            'organizationName' => 'required|string|max:255',
            'organizationEmail' => 'required|email',
            
        ]);
     
        $organization = new Organization();
        $organization->OrganizationName = $this->organizationName;
        $organization->OrganizationEmail = $this->organizationEmail;
        $organization->EstablishYear = $this->establishYear;
        $organization->save();

        $this->reset(['organizationName', 'organizationEmail','establishYear']); // Reset specific fields
        session()->flash('success', 'Organization added successfully!'); // Optional: Add a success message

        return redirect()->to( route('dashboard.organization')); 

    }
    public function render()
    {
        return view('livewire.add-organization');
    }
}
