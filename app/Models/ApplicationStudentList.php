<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationStudentList extends Model
{
    protected $primaryKey = 'id'; // Assuming a separate primary key for simplicity

    public function application()
    {
        return $this->belongsTo(ApplicationInfo::class, 'ApplicationID');
    }

    public function student()
    {
        return $this->belongsTo(StudentInfo::class, 'StudentID');
    }
}
