<?php

namespace App\Livewire;

use App\Models\OrganizationDocumentList;
use Auth;
use Livewire\Component;
use App\Models\Organization;

class OrganizationView extends Component
{
    public $organizationID;

    public function viewDocument($file){
        return redirect()->route('organization.documentView', ['file' => $file]);
    }
    public function render()
    {
        $organization = Organization::where('OrganizationID', $this->organizationID)->first();
        $document = OrganizationDocumentList::where('OrganizationEmail', $organization->OrganizationEmail)->get();
        return view('livewire.organization-view',[
            'organization' => $organization,
            'data'=>$document,
        ]);
    }
}
