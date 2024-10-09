<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficerList extends Model
{
    protected $primaryKey = 'id';

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'OrganizationID');
    }

    public function student()
    {
        return $this->belongsTo(StudentInfo::class, 'StudentID');
    }
}
