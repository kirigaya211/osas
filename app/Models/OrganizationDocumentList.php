<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationDocumentList extends Model
{
    protected $primaryKey = 'DocumentTypeID';

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'OrganizationID');
    }

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class, 'DocumentTypeID');
    }
}
