<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    protected $primaryKey = 'DocumentTypeID';

    public function organizationDocuments()
    {
        return $this->hasMany(OrganizationDocumentList::class, 'DocumentTypeID');
    }
}
