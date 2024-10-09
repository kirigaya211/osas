<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $primaryKey = 'OrganizationID';
    protected $fillable = ['OrganizationID','OrganizationName','OrganizationDescription','ClusterID','EstablishYear',];

    public function applications()
    {
        return $this->hasMany(ApplicationInfo::class, 'OrganizationID');
    }

    public function documents()
    {
        return $this->hasMany(OrganizationDocumentList::class, 'OrganizationID');
    }

    public function officers()
    {
        return $this->hasMany(OfficerList::class, 'OrganizationID');
    }

    public function members()
    {
        return $this->hasMany(MemberList::class, 'OrganizationID');
    }

    public function adviser()
    {
        return $this->hasOne(AdviserList::class, 'OrganizationID');
    }

    public function cluster()
    {
        return $this->belongsTo(ClusterList::class, 'ClusterID');
    }
}
