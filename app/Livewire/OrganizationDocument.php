<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\OrganizationDocumentList;

class OrganizationDocument extends Component
{
    public $organizationID="";
    public $documentType="";
    public $file="";
    public function addDocument()
    {
        $this->validate([
            'organizationID' => 'required',
            'documentType' => 'required',
            'file' => 'required',
        ]);
        $data = new OrganizationDocumentList();
        $data->OrganizationID = $this->organizationID;
        $data->DocumentType = $this->documentType;
        $file  = $this->file;
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $this->file->move(public_path('DocumentFolder'), $fileName);
        $data->File = $fileName;
        $data->save();
        $this->reset(['organizationID', 'documentType','file']); // Reset specific fields
        session()->flash('success', 'Document added successfully!'); // Optional: Add a success message
    }
    public function render()
    {
        $data = OrganizationDocumentList::all();
        return view('livewire.organization-document',['data'=>$data]);
    }
}
