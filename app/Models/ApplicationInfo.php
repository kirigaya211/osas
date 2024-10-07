<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationInfo extends Model
{
    protected $primaryKey = 'ApplicationID';
    protected $fillable = ['ApplicationID','OrganizationName','OrganizationDescription','OrganizationID','Type','RepresentativeName','RepresentativeEmail','RepresentativeContact'];


    public function statuses()
    {
        return $this->hasMany(ApplicationStatusList::class, 'ApplicationID');
    }

    public function checklists()
    {
        return $this->hasMany(ApplicationChecklist::class, 'ApplicationID');
    }


}


