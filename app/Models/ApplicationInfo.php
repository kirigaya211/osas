<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Checklist;

class ApplicationInfo extends Model
{
    protected $primaryKey = 'ApplicationID';
    protected $fillable = ['ApplicationID','OrganizationName','OrganizationDescription','OrganizationID','Type','representativeName','representativeEmail','contactNumber'];

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'OrganizationID');
    }

    public function students()
    {
        return $this->hasMany(ApplicationStudentList::class, 'ApplicationID');
    }

    public function staff()
    {
        return $this->hasMany(ApplicationStaffList::class, 'ApplicationID');
    }

    public function statuses()
    {
        return $this->hasMany(ApplicationStatusList::class, 'ApplicationID');
    }

    public function checklists()
    {
        return $this->hasMany(ApplicationChecklist::class, 'ApplicationID');
    }
}
