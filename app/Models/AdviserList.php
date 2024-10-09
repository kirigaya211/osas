<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdviserList extends Model
{
    protected $primaryKey = 'id';

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'OrganizationID');
    }

    public function adviser()
    {
        return $this->belongsTo(AdviserInfo::class, 'AdviserID');
    }
}
