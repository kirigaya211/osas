<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationStaffList extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = ['ApplicationID','StaffID'];

    public function application()
    {
        return $this->belongsTo(ApplicationInfo::class, 'ApplicationID');
    }

    public function staff()
    {
        return $this->belongsTo(User::class, 'id');
    }
}

