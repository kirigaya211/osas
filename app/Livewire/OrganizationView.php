<?php

namespace App\Livewire;

use App\Models\OrganizationDocumentList;
use Livewire\Component;
use App\Models\Organization;
use Barryvdh\DomPDF\Facade\Pdf;

class OrganizationView extends Component
{
    public $organizationID;
    public $search = '';
    public $perPage = 5;

    public function viewDocument($file){
        return redirect()->route('organization.documentView', ['file' => $file, 'orgID' => $this->organizationID]);
    }

    public function generateCOR($organizationID){
       return redirect()->route('generate-pdf', ['organizationID' => $organizationID]);
    }
    public function render()
    {
        $organization = Organization::where('OrganizationID', $this->organizationID)->first();
        $document =OrganizationDocumentList::query()->where('OrganizationEmail', $organization->OrganizationEmail)->search($this->search)->paginate($this->perPage);
        return view('livewire.organization-view',[
            'organization' => $organization,
            'data'=>$document,
        ]);
    }
}
