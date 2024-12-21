<?php

namespace App\Livewire;

use App\Models\ClusterList;
use Livewire\Component;
use App\Models\User;
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
            'organizationName' => ['required', 'string', 'max:255', 'regex:/^[^\d]+$/'],
            'organizationEmail' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z0-9._%+-]+@usep\.edu\.ph$/'],
            'cluster' => 'required',

        ]);

        $users = User::all();
        foreach ($users as $user) {
            if ($user->email == $this->organizationEmail) {
                $organization = new Organization();
                $organization->OrganizationName = $this->organizationName;
                $organization->OrganizationEmail = $this->organizationEmail;
                $organization->EstablishYear = $this->establishYear;
                $organization->ClusterID = $this->cluster;
                $organization->save();
                session()->flash('success', 'Organization added successfully!');
                return redirect()->to(route('dashboard.organization'));
                
            }
        }
        $this->reset(['organizationName', 'organizationEmail', 'establishYear']);
        $message = "Email not found";
        session()->flash('message', $message);
        return;
    }

    public function render()
    {
        $clusters = ClusterList::all();
        return view('livewire.add-organization', ['clusters' => $clusters]);
    }
}
