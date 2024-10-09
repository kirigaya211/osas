<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusType extends Model
{
    protected $primaryKey = 'StatusType';

    public function applicationStatuses()
    {
        return $this->hasMany(ApplicationStatusList::class, 'StatusType');
    }
}
