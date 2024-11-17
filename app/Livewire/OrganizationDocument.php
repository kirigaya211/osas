<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\OrganizationDocumentList;

class OrganizationDocument extends Component
{
    public $organizationEmail;
    public $documentType="";
    public $file="";


    public function mount(){
        $this->organizationEmail=Auth::user()->email;
    }
    public function addDocument()
    {
        $this->validate([

            'documentType' => 'required',
            'file' => 'required',
        ]);
        $data = new OrganizationDocumentList();
        $data->OrganizationeEmail = $this->organizationEmail;
        $data->DocumentType = $this->documentType;
        $file  = $this->file;
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $this->file->move(public_path('DocumentFolder'), $fileName);
        $data->File = $fileName;
        $data->save();
        $this->reset(['documentType','file']); 
        session()->flash('success', 'Document added successfully!'); 
    }
    public function render()
    {
        $data = OrganizationDocumentList::where('OrganizationEmail', $this->organizationEmail)->get();
        return view('livewire.organization-document',['data'=>$data]);
    }
}
