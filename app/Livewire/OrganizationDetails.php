<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Organization; // Assuming you have an Organization model

class OrganizationDetails extends Component
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
    
    public function submit()
    {
        // $this->validate(); // Perform validation
        dd($this->email);
        // Assuming you already have an Organization model
        $organization = Organization::where('OrganizationEmail', $this->email)->first();

        // Update the organization record with new data
        $organization->update([
            'OrganizationDescription' => $this->description,
            'ClusterID' => $this->cluster,
        ]);

        // Session message
        session()->flash('message', 'Organization updated successfully!');

        // Optionally, you can reset the form fields
        $this->reset();
    }

    public function render()
    {
        return view('livewire.update-organization');
    }
}
