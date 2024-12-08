<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationDocumentList extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'OrganizationEmail',
        'DocumentType',
        'File'
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'OrganizationID');
    }

    
}
