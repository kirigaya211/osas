<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $primaryKey = 'ChecklistID';

    public function applicationChecklists()
    {
        return $this->hasMany(ApplicationChecklist::class, 'ChecklistID');
    }
}
