<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    protected $primaryKey = 'StudentID';

    protected $fillable = ['StudentID','Name','Email','Course','College','YearLevel','Contact#'];

    public function applications()
    {
        return $this->hasMany(ApplicationStudentList::class, 'StudentID');
    }

    public function organizations()
    {
        return $this->hasMany(MemberList::class, 'StudentID');
    }

    public function officerOrganizations()
    {
        return $this->hasMany(OfficerList::class, 'StudentID');
    }
}

