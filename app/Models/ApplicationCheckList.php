<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationChecklist extends Model
{
    
    protected $fillable = ['ApplicationID', 'ChecklistID', 'Feedback'];

    public function application()
    {
        return $this->belongsTo(ApplicationInfo::class, 'ApplicationID');
    }
}
