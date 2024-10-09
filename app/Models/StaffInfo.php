<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffInfo extends Model
{
    protected $primaryKey = 'StaffID';

    public function applications()
    {
        return $this->hasMany(ApplicationStaffList::class, 'StaffID');
    }
}
