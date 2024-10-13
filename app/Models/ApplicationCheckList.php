<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationCheckList extends Model
{
    
    protected $fillable = ['ApplicationID', 'ChecklistItem', 'Feedback'];

    public function application()
    {
        return $this->belongsTo(ApplicationInfo::class, 'ApplicationID');
    }
}
